<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClaimType;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUse;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRClaimTypeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUseList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionTypeMap;

/**
 * A provider issued list of services and products provided, or to be provided, to
 * a patient which is provided to an insurer for payment recovery.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRClaim extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CLAIM;

    /* class_default.php:50 */
    public const FIELD_TYPE = 'type';
    public const FIELD_TYPE_EXT = '_type';
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_RULESET = 'ruleset';
    public const FIELD_ORIGINAL_RULESET = 'originalRuleset';
    public const FIELD_CREATED = 'created';
    public const FIELD_CREATED_EXT = '_created';
    public const FIELD_TARGET = 'target';
    public const FIELD_PROVIDER = 'provider';
    public const FIELD_ORGANIZATION = 'organization';
    public const FIELD_USE = 'use';
    public const FIELD_USE_EXT = '_use';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_FUNDS_RESERVE = 'fundsReserve';
    public const FIELD_ENTERER = 'enterer';
    public const FIELD_FACILITY = 'facility';
    public const FIELD_PRESCRIPTION = 'prescription';
    public const FIELD_ORIGINAL_PRESCRIPTION = 'originalPrescription';
    public const FIELD_PAYEE = 'payee';
    public const FIELD_REFERRAL = 'referral';
    public const FIELD_DIAGNOSIS = 'diagnosis';
    public const FIELD_CONDITION = 'condition';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_COVERAGE = 'coverage';
    public const FIELD_EXCEPTION = 'exception';
    public const FIELD_SCHOOL = 'school';
    public const FIELD_SCHOOL_EXT = '_school';
    public const FIELD_ACCIDENT = 'accident';
    public const FIELD_ACCIDENT_EXT = '_accident';
    public const FIELD_ACCIDENT_TYPE = 'accidentType';
    public const FIELD_INTERVENTION_EXCEPTION = 'interventionException';
    public const FIELD_ITEM = 'item';
    public const FIELD_ADDITIONAL_MATERIALS = 'additionalMaterials';
    public const FIELD_MISSING_TEETH = 'missingTeeth';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_PATIENT => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_TYPE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CREATED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_USE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SCHOOL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ACCIDENT => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * The type or discipline-style of the claim.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of claim this is.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClaimType 
     */
    protected FHIRClaimType $type;
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the specification on which this instance relies.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $ruleset;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the specification from which the original instance was created.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $originalRuleset;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $created;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurer Identifier, typical BIN number (6 digit).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $target;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $provider;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $organization;
    /**
     * Complete, proposed, exploratory, other.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUse 
     */
    protected FHIRUse $use;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immediate (stat), best effort (normal), deferred (deferred).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $priority;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $fundsReserve;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $enterer;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $facility;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $prescription;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original prescription to support the dispensing of pharmacy services,
     * medications or products.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $originalPrescription;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The party to be reimbursed for the services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee 
     */
    protected FHIRClaimPayee $payee;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $referral;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[] 
     */
    protected array $diagnosis;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of patient conditions for which care is sought.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $condition;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage[] 
     */
    protected array $coverage;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Factors which may influence the applicability of coverage.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $exception;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of school for over-aged dependents.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $school;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date of an accident which these services are addressing.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $accident;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of accident: work, auto, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $accidentType;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of intervention and exception codes which may influence the adjudication
     * of the claim.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $interventionException;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[] 
     */
    protected array $item;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to indicate that Xrays, images, emails, documents, models or attachments
     * are being sent in support of this submission.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $additionalMaterials;
    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * A list of teeth which would be expected but are not found due to having been
     * previously extracted or for other reasons.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth[] 
     */
    protected array $missingTeeth;

    /* constructor.php:61 */
    /**
     * FHIRClaim Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRClaimTypeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClaimType $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $ruleset
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $originalRuleset
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $created
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $target
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $provider
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $organization
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUseList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUse $use
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $priority
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $fundsReserve
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $enterer
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $facility
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $prescription
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $originalPrescription
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee $payee
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $referral
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[] $diagnosis
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] $condition
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage[] $coverage
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] $exception
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $school
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate $accident
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $accidentType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] $interventionException
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[] $item
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] $additionalMaterials
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth[] $missingTeeth
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
                                null|string|FHIRClaimTypeList|FHIRClaimType $type = null,
                                null|iterable $identifier = null,
                                null|FHIRCoding $ruleset = null,
                                null|FHIRCoding $originalRuleset = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created = null,
                                null|FHIRReference $target = null,
                                null|FHIRReference $provider = null,
                                null|FHIRReference $organization = null,
                                null|string|FHIRUseList|FHIRUse $use = null,
                                null|FHIRCoding $priority = null,
                                null|FHIRCoding $fundsReserve = null,
                                null|FHIRReference $enterer = null,
                                null|FHIRReference $facility = null,
                                null|FHIRReference $prescription = null,
                                null|FHIRReference $originalPrescription = null,
                                null|FHIRClaimPayee $payee = null,
                                null|FHIRReference $referral = null,
                                null|iterable $diagnosis = null,
                                null|iterable $condition = null,
                                null|FHIRReference $patient = null,
                                null|iterable $coverage = null,
                                null|iterable $exception = null,
                                null|string|FHIRStringPrimitive|FHIRString $school = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $accident = null,
                                null|FHIRCoding $accidentType = null,
                                null|iterable $interventionException = null,
                                null|iterable $item = null,
                                null|iterable $additionalMaterials = null,
                                null|iterable $missingTeeth = null,
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
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $identifier) {
            $this->setIdentifier(...$identifier);
        }
        if (null !== $ruleset) {
            $this->setRuleset($ruleset);
        }
        if (null !== $originalRuleset) {
            $this->setOriginalRuleset($originalRuleset);
        }
        if (null !== $created) {
            $this->setCreated($created);
        }
        if (null !== $target) {
            $this->setTarget($target);
        }
        if (null !== $provider) {
            $this->setProvider($provider);
        }
        if (null !== $organization) {
            $this->setOrganization($organization);
        }
        if (null !== $use) {
            $this->setUse($use);
        }
        if (null !== $priority) {
            $this->setPriority($priority);
        }
        if (null !== $fundsReserve) {
            $this->setFundsReserve($fundsReserve);
        }
        if (null !== $enterer) {
            $this->setEnterer($enterer);
        }
        if (null !== $facility) {
            $this->setFacility($facility);
        }
        if (null !== $prescription) {
            $this->setPrescription($prescription);
        }
        if (null !== $originalPrescription) {
            $this->setOriginalPrescription($originalPrescription);
        }
        if (null !== $payee) {
            $this->setPayee($payee);
        }
        if (null !== $referral) {
            $this->setReferral($referral);
        }
        if (null !== $diagnosis) {
            $this->setDiagnosis(...$diagnosis);
        }
        if (null !== $condition) {
            $this->setCondition(...$condition);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $coverage) {
            $this->setCoverage(...$coverage);
        }
        if (null !== $exception) {
            $this->setException(...$exception);
        }
        if (null !== $school) {
            $this->setSchool($school);
        }
        if (null !== $accident) {
            $this->setAccident($accident);
        }
        if (null !== $accidentType) {
            $this->setAccidentType($accidentType);
        }
        if (null !== $interventionException) {
            $this->setInterventionException(...$interventionException);
        }
        if (null !== $item) {
            $this->setItem(...$item);
        }
        if (null !== $additionalMaterials) {
            $this->setAdditionalMaterials(...$additionalMaterials);
        }
        if (null !== $missingTeeth) {
            $this->setMissingTeeth(...$missingTeeth);
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

    /* class_default.php:151 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:165 */
    /**
     * The type or discipline-style of the claim.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of claim this is.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClaimType
     */
    public function getType(): null|FHIRClaimType
    {
        return $this->type ?? null;
    }

    /**
     * The type or discipline-style of the claim.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The category of claim this is.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRClaimTypeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRClaimType $type
     * @return static
     */
    public function setType(null|string|FHIRClaimTypeList|FHIRClaimType $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        if (!($type instanceof FHIRClaimType)) {
            $type = new FHIRClaimType(value: $type);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier>
     */
    public function getIdentifierIterator(): iterable
    {
        if (!isset($this->identifier)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier $identifier
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The business identifier for the instance: invoice number, claim number,
     * pre-determination or pre-authorization number.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the specification on which this instance relies.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getRuleset(): null|FHIRCoding
    {
        return $this->ruleset ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the specification on which this instance relies.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $ruleset
     * @return static
     */
    public function setRuleset(null|FHIRCoding $ruleset): self
    {
        if (null === $ruleset) {
            unset($this->ruleset);
            return $this;
        }
        $this->ruleset = $ruleset;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the specification from which the original instance was created.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset(): null|FHIRCoding
    {
        return $this->originalRuleset ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The version of the specification from which the original instance was created.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $originalRuleset
     * @return static
     */
    public function setOriginalRuleset(null|FHIRCoding $originalRuleset): self
    {
        if (null === $originalRuleset) {
            unset($this->originalRuleset);
            return $this;
        }
        $this->originalRuleset = $originalRuleset;
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
     * The date when the enclosed suite of services were performed or completed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
     */
    public function getCreated(): null|FHIRDateTime
    {
        return $this->created ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when the enclosed suite of services were performed or completed.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $created
     * @return static
     */
    public function setCreated(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $created): self
    {
        if (null === $created) {
            unset($this->created);
            return $this;
        }
        if (!($created instanceof FHIRDateTime)) {
            $created = new FHIRDateTime(value: $created);
        }
        $this->created = $created;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurer Identifier, typical BIN number (6 digit).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getTarget(): null|FHIRReference
    {
        return $this->target ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurer Identifier, typical BIN number (6 digit).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $target
     * @return static
     */
    public function setTarget(null|FHIRReference $target): self
    {
        if (null === $target) {
            unset($this->target);
            return $this;
        }
        $this->target = $target;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getProvider(): null|FHIRReference
    {
        return $this->provider ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The provider which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $provider
     * @return static
     */
    public function setProvider(null|FHIRReference $provider): self
    {
        if (null === $provider) {
            unset($this->provider);
            return $this;
        }
        $this->provider = $provider;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getOrganization(): null|FHIRReference
    {
        return $this->organization ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The organization which is responsible for the bill, claim pre-determination,
     * pre-authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function setOrganization(null|FHIRReference $organization): self
    {
        if (null === $organization) {
            unset($this->organization);
            return $this;
        }
        $this->organization = $organization;
        return $this;
    }

    /**
     * Complete, proposed, exploratory, other.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUse
     */
    public function getUse(): null|FHIRUse
    {
        return $this->use ?? null;
    }

    /**
     * Complete, proposed, exploratory, other.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory
     * (Pre-determination).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRUseList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUse $use
     * @return static
     */
    public function setUse(null|string|FHIRUseList|FHIRUse $use): self
    {
        if (null === $use) {
            unset($this->use);
            return $this;
        }
        if (!($use instanceof FHIRUse)) {
            $use = new FHIRUse(value: $use);
        }
        $this->use = $use;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immediate (stat), best effort (normal), deferred (deferred).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getPriority(): null|FHIRCoding
    {
        return $this->priority ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Immediate (stat), best effort (normal), deferred (deferred).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $priority
     * @return static
     */
    public function setPriority(null|FHIRCoding $priority): self
    {
        if (null === $priority) {
            unset($this->priority);
            return $this;
        }
        $this->priority = $priority;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getFundsReserve(): null|FHIRCoding
    {
        return $this->fundsReserve ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * In the case of a Pre-Determination/Pre-Authorization the provider may request
     * that funds in the amount of the expected Benefit be reserved ('Patient' or
     * 'Provider') to pay for the Benefits determined on the subsequent claim(s).
     * 'None' explicitly indicates no funds reserving is requested.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $fundsReserve
     * @return static
     */
    public function setFundsReserve(null|FHIRCoding $fundsReserve): self
    {
        if (null === $fundsReserve) {
            unset($this->fundsReserve);
            return $this;
        }
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getEnterer(): null|FHIRReference
    {
        return $this->enterer ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $enterer
     * @return static
     */
    public function setEnterer(null|FHIRReference $enterer): self
    {
        if (null === $enterer) {
            unset($this->enterer);
            return $this;
        }
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getFacility(): null|FHIRReference
    {
        return $this->facility ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Facility where the services were provided.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $facility
     * @return static
     */
    public function setFacility(null|FHIRReference $facility): self
    {
        if (null === $facility) {
            unset($this->facility);
            return $this;
        }
        $this->facility = $facility;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getPrescription(): null|FHIRReference
    {
        return $this->prescription ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Prescription to support the dispensing of Pharmacy or Vision products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $prescription
     * @return static
     */
    public function setPrescription(null|FHIRReference $prescription): self
    {
        if (null === $prescription) {
            unset($this->prescription);
            return $this;
        }
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original prescription to support the dispensing of pharmacy services,
     * medications or products.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getOriginalPrescription(): null|FHIRReference
    {
        return $this->originalPrescription ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Original prescription to support the dispensing of pharmacy services,
     * medications or products.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $originalPrescription
     * @return static
     */
    public function setOriginalPrescription(null|FHIRReference $originalPrescription): self
    {
        if (null === $originalPrescription) {
            unset($this->originalPrescription);
            return $this;
        }
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The party to be reimbursed for the services.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee
     */
    public function getPayee(): null|FHIRClaimPayee
    {
        return $this->payee ?? null;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * The party to be reimbursed for the services.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee $payee
     * @return static
     */
    public function setPayee(null|FHIRClaimPayee $payee): self
    {
        if (null === $payee) {
            unset($this->payee);
            return $this;
        }
        $this->payee = $payee;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getReferral(): null|FHIRReference
    {
        return $this->referral ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The referral resource which lists the date, practitioner, reason and other
     * supporting information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $referral
     * @return static
     */
    public function setReferral(null|FHIRReference $referral): self
    {
        if (null === $referral) {
            unset($this->referral);
            return $this;
        }
        $this->referral = $referral;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public function getDiagnosis(): array
    {
        return $this->diagnosis ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis>
     */
    public function getDiagnosisIterator(): iterable
    {
        if (!isset($this->diagnosis)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->diagnosis);
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis $diagnosis
     * @return static
     */
    public function addDiagnosis(FHIRClaimDiagnosis $diagnosis): self
    {
        if (!isset($this->diagnosis)) {
            $this->diagnosis = [];
        }
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Ordered list of patient diagnosis for which care is sought.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis ...$diagnosis
     * @return static
     */
    public function setDiagnosis(FHIRClaimDiagnosis ...$diagnosis): self
    {
        if ([] === $diagnosis) {
            unset($this->diagnosis);
            return $this;
        }
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of patient conditions for which care is sought.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[]
     */
    public function getCondition(): array
    {
        return $this->condition ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding>
     */
    public function getConditionIterator(): iterable
    {
        if (!isset($this->condition)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->condition);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of patient conditions for which care is sought.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $condition
     * @return static
     */
    public function addCondition(FHIRCoding $condition): self
    {
        if (!isset($this->condition)) {
            $this->condition = [];
        }
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * List of patient conditions for which care is sought.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding ...$condition
     * @return static
     */
    public function setCondition(FHIRCoding ...$condition): self
    {
        if ([] === $condition) {
            unset($this->condition);
            return $this;
        }
        $this->condition = $condition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Patient Resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient): self
    {
        if (null === $patient) {
            unset($this->patient);
            return $this;
        }
        $this->patient = $patient;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage[]
     */
    public function getCoverage(): array
    {
        return $this->coverage ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage>
     */
    public function getCoverageIterator(): iterable
    {
        if (!isset($this->coverage)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->coverage);
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage $coverage
     * @return static
     */
    public function addCoverage(FHIRClaimCoverage $coverage): self
    {
        if (!isset($this->coverage)) {
            $this->coverage = [];
        }
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * Financial instrument by which payment information for health care.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage ...$coverage
     * @return static
     */
    public function setCoverage(FHIRClaimCoverage ...$coverage): self
    {
        if ([] === $coverage) {
            unset($this->coverage);
            return $this;
        }
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Factors which may influence the applicability of coverage.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[]
     */
    public function getException(): array
    {
        return $this->exception ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding>
     */
    public function getExceptionIterator(): iterable
    {
        if (!isset($this->exception)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->exception);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Factors which may influence the applicability of coverage.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $exception
     * @return static
     */
    public function addException(FHIRCoding $exception): self
    {
        if (!isset($this->exception)) {
            $this->exception = [];
        }
        $this->exception[] = $exception;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Factors which may influence the applicability of coverage.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding ...$exception
     * @return static
     */
    public function setException(FHIRCoding ...$exception): self
    {
        if ([] === $exception) {
            unset($this->exception);
            return $this;
        }
        $this->exception = $exception;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of school for over-aged dependents.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getSchool(): null|FHIRString
    {
        return $this->school ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Name of school for over-aged dependents.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $school
     * @return static
     */
    public function setSchool(null|string|FHIRStringPrimitive|FHIRString $school): self
    {
        if (null === $school) {
            unset($this->school);
            return $this;
        }
        if (!($school instanceof FHIRString)) {
            $school = new FHIRString(value: $school);
        }
        $this->school = $school;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date of an accident which these services are addressing.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate
     */
    public function getAccident(): null|FHIRDate
    {
        return $this->accident ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Date of an accident which these services are addressing.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDate $accident
     * @return static
     */
    public function setAccident(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $accident): self
    {
        if (null === $accident) {
            unset($this->accident);
            return $this;
        }
        if (!($accident instanceof FHIRDate)) {
            $accident = new FHIRDate(value: $accident);
        }
        $this->accident = $accident;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of accident: work, auto, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getAccidentType(): null|FHIRCoding
    {
        return $this->accidentType ?? null;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Type of accident: work, auto, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $accidentType
     * @return static
     */
    public function setAccidentType(null|FHIRCoding $accidentType): self
    {
        if (null === $accidentType) {
            unset($this->accidentType);
            return $this;
        }
        $this->accidentType = $accidentType;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of intervention and exception codes which may influence the adjudication
     * of the claim.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[]
     */
    public function getInterventionException(): array
    {
        return $this->interventionException ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding>
     */
    public function getInterventionExceptionIterator(): iterable
    {
        if (!isset($this->interventionException)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->interventionException);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of intervention and exception codes which may influence the adjudication
     * of the claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $interventionException
     * @return static
     */
    public function addInterventionException(FHIRCoding $interventionException): self
    {
        if (!isset($this->interventionException)) {
            $this->interventionException = [];
        }
        $this->interventionException[] = $interventionException;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A list of intervention and exception codes which may influence the adjudication
     * of the claim.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding ...$interventionException
     * @return static
     */
    public function setInterventionException(FHIRCoding ...$interventionException): self
    {
        if ([] === $interventionException) {
            unset($this->interventionException);
            return $this;
        }
        $this->interventionException = $interventionException;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem[]
     */
    public function getItem(): array
    {
        return $this->item ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem>
     */
    public function getItemIterator(): iterable
    {
        if (!isset($this->item)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->item);
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem $item
     * @return static
     */
    public function addItem(FHIRClaimItem $item): self
    {
        if (!isset($this->item)) {
            $this->item = [];
        }
        $this->item[] = $item;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * First tier of goods and services.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem ...$item
     * @return static
     */
    public function setItem(FHIRClaimItem ...$item): self
    {
        if ([] === $item) {
            unset($this->item);
            return $this;
        }
        $this->item = $item;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to indicate that Xrays, images, emails, documents, models or attachments
     * are being sent in support of this submission.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[]
     */
    public function getAdditionalMaterials(): array
    {
        return $this->additionalMaterials ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding>
     */
    public function getAdditionalMaterialsIterator(): iterable
    {
        if (!isset($this->additionalMaterials)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->additionalMaterials);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to indicate that Xrays, images, emails, documents, models or attachments
     * are being sent in support of this submission.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $additionalMaterials
     * @return static
     */
    public function addAdditionalMaterials(FHIRCoding $additionalMaterials): self
    {
        if (!isset($this->additionalMaterials)) {
            $this->additionalMaterials = [];
        }
        $this->additionalMaterials[] = $additionalMaterials;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Code to indicate that Xrays, images, emails, documents, models or attachments
     * are being sent in support of this submission.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding ...$additionalMaterials
     * @return static
     */
    public function setAdditionalMaterials(FHIRCoding ...$additionalMaterials): self
    {
        if ([] === $additionalMaterials) {
            unset($this->additionalMaterials);
            return $this;
        }
        $this->additionalMaterials = $additionalMaterials;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * A list of teeth which would be expected but are not found due to having been
     * previously extracted or for other reasons.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth[]
     */
    public function getMissingTeeth(): array
    {
        return $this->missingTeeth ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth>
     */
    public function getMissingTeethIterator(): iterable
    {
        if (!isset($this->missingTeeth)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->missingTeeth);
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * A list of teeth which would be expected but are not found due to having been
     * previously extracted or for other reasons.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth $missingTeeth
     * @return static
     */
    public function addMissingTeeth(FHIRClaimMissingTeeth $missingTeeth): self
    {
        if (!isset($this->missingTeeth)) {
            $this->missingTeeth = [];
        }
        $this->missingTeeth[] = $missingTeeth;
        return $this;
    }

    /**
     * A provider issued list of services and products provided, or to be provided, to
     * a patient which is provided to an insurer for payment recovery.
     *
     * A list of teeth which would be expected but are not found due to having been
     * previously extracted or for other reasons.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth ...$missingTeeth
     * @return static
     */
    public function setMissingTeeth(FHIRClaimMissingTeeth ...$missingTeeth): self
    {
        if ([] === $missingTeeth) {
            unset($this->missingTeeth);
            return $this;
        }
        $this->missingTeeth = $missingTeeth;
        return $this;
    }

    /* class_default.php:192 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaim $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaim
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaim)) {
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRClaimType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RULESET === $cen) {
                $type->setRuleset(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORIGINAL_RULESET === $cen) {
                $type->setOriginalRuleset(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CREATED === $cen) {
                $type->setCreated(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET === $cen) {
                $type->setTarget(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PROVIDER === $cen) {
                $type->setProvider(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORGANIZATION === $cen) {
                $type->setOrganization(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_USE === $cen) {
                $type->setUse(FHIRUse::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRIORITY === $cen) {
                $type->setPriority(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FUNDS_RESERVE === $cen) {
                $type->setFundsReserve(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTERER === $cen) {
                $type->setEnterer(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FACILITY === $cen) {
                $type->setFacility(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESCRIPTION === $cen) {
                $type->setPrescription(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ORIGINAL_PRESCRIPTION === $cen) {
                $type->setOriginalPrescription(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PAYEE === $cen) {
                $type->setPayee(FHIRClaimPayee::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERRAL === $cen) {
                $type->setReferral(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DIAGNOSIS === $cen) {
                $type->addDiagnosis(FHIRClaimDiagnosis::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONDITION === $cen) {
                $type->addCondition(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_COVERAGE === $cen) {
                $type->addCoverage(FHIRClaimCoverage::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCEPTION === $cen) {
                $type->addException(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SCHOOL === $cen) {
                $type->setSchool(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACCIDENT === $cen) {
                $type->setAccident(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACCIDENT_TYPE === $cen) {
                $type->setAccidentType(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INTERVENTION_EXCEPTION === $cen) {
                $type->addInterventionException(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ITEM === $cen) {
                $type->addItem(FHIRClaimItem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDITIONAL_MATERIALS === $cen) {
                $type->addAdditionalMaterials(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MISSING_TEETH === $cen) {
                $type->addMissingTeeth(FHIRClaimMissingTeeth::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_TYPE])) {
            if (isset($type->type)) {
                $type->type->setValue((string)$attributes[self::FIELD_TYPE]);
            } else {
                $type->setType((string)$attributes[self::FIELD_TYPE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TYPE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CREATED])) {
            if (isset($type->created)) {
                $type->created->setValue((string)$attributes[self::FIELD_CREATED]);
            } else {
                $type->setCreated((string)$attributes[self::FIELD_CREATED]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CREATED, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_USE])) {
            if (isset($type->use)) {
                $type->use->setValue((string)$attributes[self::FIELD_USE]);
            } else {
                $type->setUse((string)$attributes[self::FIELD_USE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_USE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SCHOOL])) {
            if (isset($type->school)) {
                $type->school->setValue((string)$attributes[self::FIELD_SCHOOL]);
            } else {
                $type->setSchool((string)$attributes[self::FIELD_SCHOOL]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SCHOOL, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ACCIDENT])) {
            if (isset($type->accident)) {
                $type->accident->setValue((string)$attributes[self::FIELD_ACCIDENT]);
            } else {
                $type->setAccident((string)$attributes[self::FIELD_ACCIDENT]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ACCIDENT, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('Claim', $this->_getSourceXMLNS());
        }
        if (isset($this->type) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TYPE]) {
            $xw->writeAttribute(self::FIELD_TYPE, $this->type->_getValueAsString());
        }
        if (isset($this->created) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CREATED]) {
            $xw->writeAttribute(self::FIELD_CREATED, $this->created->_getValueAsString());
        }
        if (isset($this->use) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_USE]) {
            $xw->writeAttribute(self::FIELD_USE, $this->use->_getValueAsString());
        }
        if (isset($this->school) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SCHOOL]) {
            $xw->writeAttribute(self::FIELD_SCHOOL, $this->school->_getValueAsString());
        }
        if (isset($this->accident) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACCIDENT]) {
            $xw->writeAttribute(self::FIELD_ACCIDENT, $this->accident->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TYPE]
                || $this->type->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TYPE]);
            $xw->endElement();
        }
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->ruleset)) {
            $xw->startElement(self::FIELD_RULESET);
            $this->ruleset->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->originalRuleset)) {
            $xw->startElement(self::FIELD_ORIGINAL_RULESET);
            $this->originalRuleset->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->created)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CREATED]
                || $this->created->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CREATED);
            $this->created->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CREATED]);
            $xw->endElement();
        }
        if (isset($this->target)) {
            $xw->startElement(self::FIELD_TARGET);
            $this->target->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->provider)) {
            $xw->startElement(self::FIELD_PROVIDER);
            $this->provider->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->organization)) {
            $xw->startElement(self::FIELD_ORGANIZATION);
            $this->organization->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->use)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_USE]
                || $this->use->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_USE);
            $this->use->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_USE]);
            $xw->endElement();
        }
        if (isset($this->priority)) {
            $xw->startElement(self::FIELD_PRIORITY);
            $this->priority->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->fundsReserve)) {
            $xw->startElement(self::FIELD_FUNDS_RESERVE);
            $this->fundsReserve->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->enterer)) {
            $xw->startElement(self::FIELD_ENTERER);
            $this->enterer->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->facility)) {
            $xw->startElement(self::FIELD_FACILITY);
            $this->facility->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->prescription)) {
            $xw->startElement(self::FIELD_PRESCRIPTION);
            $this->prescription->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->originalPrescription)) {
            $xw->startElement(self::FIELD_ORIGINAL_PRESCRIPTION);
            $this->originalPrescription->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->payee)) {
            $xw->startElement(self::FIELD_PAYEE);
            $this->payee->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->referral)) {
            $xw->startElement(self::FIELD_REFERRAL);
            $this->referral->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->diagnosis)) {
            foreach ($this->diagnosis as $v) {
                $xw->startElement(self::FIELD_DIAGNOSIS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->condition)) {
            foreach ($this->condition as $v) {
                $xw->startElement(self::FIELD_CONDITION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->coverage)) {
            foreach ($this->coverage as $v) {
                $xw->startElement(self::FIELD_COVERAGE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->exception)) {
            foreach ($this->exception as $v) {
                $xw->startElement(self::FIELD_EXCEPTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->school)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SCHOOL]
                || $this->school->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SCHOOL);
            $this->school->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SCHOOL]);
            $xw->endElement();
        }
        if (isset($this->accident)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACCIDENT]
                || $this->accident->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACCIDENT);
            $this->accident->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACCIDENT]);
            $xw->endElement();
        }
        if (isset($this->accidentType)) {
            $xw->startElement(self::FIELD_ACCIDENT_TYPE);
            $this->accidentType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->interventionException)) {
            foreach ($this->interventionException as $v) {
                $xw->startElement(self::FIELD_INTERVENTION_EXCEPTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->item)) {
            foreach ($this->item as $v) {
                $xw->startElement(self::FIELD_ITEM);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->additionalMaterials)) {
            foreach ($this->additionalMaterials as $v) {
                $xw->startElement(self::FIELD_ADDITIONAL_MATERIALS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->missingTeeth)) {
            foreach ($this->missingTeeth as $v) {
                $xw->startElement(self::FIELD_MISSING_TEETH);
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaim $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRClaim
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRClaim)) {
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
            $json = json_decode(json: $json,
                                associative: false,
                                depth: $config->getJSONDecodeMaxDepth(),
                                flags: $config->getJSONDecodeOpts());
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->type)
            || isset($json->_type)
            || property_exists($json, self::FIELD_TYPE)
            || property_exists($json, self::FIELD_TYPE_EXT)) {
            $v = $json->_type ?? new \stdClass();
            $v->value = $json->type ?? null;
            $type->setType(FHIRClaimType::jsonUnserialize($v, $config));
        }
        if (isset($json->identifier) || property_exists($json, self::FIELD_IDENTIFIER)) {
            if (is_object($json->identifier)) {
                $vals = [$json->identifier];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER, true);
            } else {
                $vals = $json->identifier;
            }
            foreach($vals as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->ruleset) || property_exists($json, self::FIELD_RULESET)) {
            if (is_array($json->ruleset)) {
                $type->setRuleset(FHIRCoding::jsonUnserialize(reset($json->ruleset), $config));
            } else {
                $type->setRuleset(FHIRCoding::jsonUnserialize($json->ruleset, $config));
            }
        }
        if (isset($json->originalRuleset) || property_exists($json, self::FIELD_ORIGINAL_RULESET)) {
            if (is_array($json->originalRuleset)) {
                $type->setOriginalRuleset(FHIRCoding::jsonUnserialize(reset($json->originalRuleset), $config));
            } else {
                $type->setOriginalRuleset(FHIRCoding::jsonUnserialize($json->originalRuleset, $config));
            }
        }
        if (isset($json->created)
            || isset($json->_created)
            || property_exists($json, self::FIELD_CREATED)
            || property_exists($json, self::FIELD_CREATED_EXT)) {
            $v = $json->_created ?? new \stdClass();
            $v->value = $json->created ?? null;
            $type->setCreated(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->target) || property_exists($json, self::FIELD_TARGET)) {
            if (is_array($json->target)) {
                $type->setTarget(FHIRReference::jsonUnserialize(reset($json->target), $config));
            } else {
                $type->setTarget(FHIRReference::jsonUnserialize($json->target, $config));
            }
        }
        if (isset($json->provider) || property_exists($json, self::FIELD_PROVIDER)) {
            if (is_array($json->provider)) {
                $type->setProvider(FHIRReference::jsonUnserialize(reset($json->provider), $config));
            } else {
                $type->setProvider(FHIRReference::jsonUnserialize($json->provider, $config));
            }
        }
        if (isset($json->organization) || property_exists($json, self::FIELD_ORGANIZATION)) {
            if (is_array($json->organization)) {
                $type->setOrganization(FHIRReference::jsonUnserialize(reset($json->organization), $config));
            } else {
                $type->setOrganization(FHIRReference::jsonUnserialize($json->organization, $config));
            }
        }
        if (isset($json->use)
            || isset($json->_use)
            || property_exists($json, self::FIELD_USE)
            || property_exists($json, self::FIELD_USE_EXT)) {
            $v = $json->_use ?? new \stdClass();
            $v->value = $json->use ?? null;
            $type->setUse(FHIRUse::jsonUnserialize($v, $config));
        }
        if (isset($json->priority) || property_exists($json, self::FIELD_PRIORITY)) {
            if (is_array($json->priority)) {
                $type->setPriority(FHIRCoding::jsonUnserialize(reset($json->priority), $config));
            } else {
                $type->setPriority(FHIRCoding::jsonUnserialize($json->priority, $config));
            }
        }
        if (isset($json->fundsReserve) || property_exists($json, self::FIELD_FUNDS_RESERVE)) {
            if (is_array($json->fundsReserve)) {
                $type->setFundsReserve(FHIRCoding::jsonUnserialize(reset($json->fundsReserve), $config));
            } else {
                $type->setFundsReserve(FHIRCoding::jsonUnserialize($json->fundsReserve, $config));
            }
        }
        if (isset($json->enterer) || property_exists($json, self::FIELD_ENTERER)) {
            if (is_array($json->enterer)) {
                $type->setEnterer(FHIRReference::jsonUnserialize(reset($json->enterer), $config));
            } else {
                $type->setEnterer(FHIRReference::jsonUnserialize($json->enterer, $config));
            }
        }
        if (isset($json->facility) || property_exists($json, self::FIELD_FACILITY)) {
            if (is_array($json->facility)) {
                $type->setFacility(FHIRReference::jsonUnserialize(reset($json->facility), $config));
            } else {
                $type->setFacility(FHIRReference::jsonUnserialize($json->facility, $config));
            }
        }
        if (isset($json->prescription) || property_exists($json, self::FIELD_PRESCRIPTION)) {
            if (is_array($json->prescription)) {
                $type->setPrescription(FHIRReference::jsonUnserialize(reset($json->prescription), $config));
            } else {
                $type->setPrescription(FHIRReference::jsonUnserialize($json->prescription, $config));
            }
        }
        if (isset($json->originalPrescription) || property_exists($json, self::FIELD_ORIGINAL_PRESCRIPTION)) {
            if (is_array($json->originalPrescription)) {
                $type->setOriginalPrescription(FHIRReference::jsonUnserialize(reset($json->originalPrescription), $config));
            } else {
                $type->setOriginalPrescription(FHIRReference::jsonUnserialize($json->originalPrescription, $config));
            }
        }
        if (isset($json->payee) || property_exists($json, self::FIELD_PAYEE)) {
            if (is_array($json->payee)) {
                $type->setPayee(FHIRClaimPayee::jsonUnserialize(reset($json->payee), $config));
            } else {
                $type->setPayee(FHIRClaimPayee::jsonUnserialize($json->payee, $config));
            }
        }
        if (isset($json->referral) || property_exists($json, self::FIELD_REFERRAL)) {
            if (is_array($json->referral)) {
                $type->setReferral(FHIRReference::jsonUnserialize(reset($json->referral), $config));
            } else {
                $type->setReferral(FHIRReference::jsonUnserialize($json->referral, $config));
            }
        }
        if (isset($json->diagnosis) || property_exists($json, self::FIELD_DIAGNOSIS)) {
            if (is_object($json->diagnosis)) {
                $vals = [$json->diagnosis];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DIAGNOSIS, true);
            } else {
                $vals = $json->diagnosis;
            }
            foreach($vals as $v) {
                $type->addDiagnosis(FHIRClaimDiagnosis::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->condition) || property_exists($json, self::FIELD_CONDITION)) {
            if (is_object($json->condition)) {
                $vals = [$json->condition];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_CONDITION, true);
            } else {
                $vals = $json->condition;
            }
            foreach($vals as $v) {
                $type->addCondition(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->patient) || property_exists($json, self::FIELD_PATIENT)) {
            if (is_array($json->patient)) {
                $type->setPatient(FHIRReference::jsonUnserialize(reset($json->patient), $config));
            } else {
                $type->setPatient(FHIRReference::jsonUnserialize($json->patient, $config));
            }
        }
        if (isset($json->coverage) || property_exists($json, self::FIELD_COVERAGE)) {
            if (is_object($json->coverage)) {
                $vals = [$json->coverage];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_COVERAGE, true);
            } else {
                $vals = $json->coverage;
            }
            foreach($vals as $v) {
                $type->addCoverage(FHIRClaimCoverage::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->exception) || property_exists($json, self::FIELD_EXCEPTION)) {
            if (is_object($json->exception)) {
                $vals = [$json->exception];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EXCEPTION, true);
            } else {
                $vals = $json->exception;
            }
            foreach($vals as $v) {
                $type->addException(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->school)
            || isset($json->_school)
            || property_exists($json, self::FIELD_SCHOOL)
            || property_exists($json, self::FIELD_SCHOOL_EXT)) {
            $v = $json->_school ?? new \stdClass();
            $v->value = $json->school ?? null;
            $type->setSchool(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->accident)
            || isset($json->_accident)
            || property_exists($json, self::FIELD_ACCIDENT)
            || property_exists($json, self::FIELD_ACCIDENT_EXT)) {
            $v = $json->_accident ?? new \stdClass();
            $v->value = $json->accident ?? null;
            $type->setAccident(FHIRDate::jsonUnserialize($v, $config));
        }
        if (isset($json->accidentType) || property_exists($json, self::FIELD_ACCIDENT_TYPE)) {
            if (is_array($json->accidentType)) {
                $type->setAccidentType(FHIRCoding::jsonUnserialize(reset($json->accidentType), $config));
            } else {
                $type->setAccidentType(FHIRCoding::jsonUnserialize($json->accidentType, $config));
            }
        }
        if (isset($json->interventionException) || property_exists($json, self::FIELD_INTERVENTION_EXCEPTION)) {
            if (is_object($json->interventionException)) {
                $vals = [$json->interventionException];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INTERVENTION_EXCEPTION, true);
            } else {
                $vals = $json->interventionException;
            }
            foreach($vals as $v) {
                $type->addInterventionException(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->item) || property_exists($json, self::FIELD_ITEM)) {
            if (is_object($json->item)) {
                $vals = [$json->item];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ITEM, true);
            } else {
                $vals = $json->item;
            }
            foreach($vals as $v) {
                $type->addItem(FHIRClaimItem::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->additionalMaterials) || property_exists($json, self::FIELD_ADDITIONAL_MATERIALS)) {
            if (is_object($json->additionalMaterials)) {
                $vals = [$json->additionalMaterials];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADDITIONAL_MATERIALS, true);
            } else {
                $vals = $json->additionalMaterials;
            }
            foreach($vals as $v) {
                $type->addAdditionalMaterials(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->missingTeeth) || property_exists($json, self::FIELD_MISSING_TEETH)) {
            if (is_object($json->missingTeeth)) {
                $vals = [$json->missingTeeth];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_MISSING_TEETH, true);
            } else {
                $vals = $json->missingTeeth;
            }
            foreach($vals as $v) {
                $type->addMissingTeeth(FHIRClaimMissingTeeth::jsonUnserialize($v, $config));
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
        if (isset($this->type)) {
            if (null !== ($val = $this->type->getValue())) {
                $out->type = $val;
            }
            if ($this->type->_nonValueFieldDefined()) {
                $ext = $this->type->jsonSerialize();
                unset($ext->value);
                $out->_type = $ext;
            }
        }
        if (isset($this->identifier) && [] !== $this->identifier) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_IDENTIFIER) && 1 === count($this->identifier)) {
                $out->identifier = $this->identifier[0];
            } else {
                $out->identifier = $this->identifier;
            }
        }
        if (isset($this->ruleset)) {
            $out->ruleset = $this->ruleset;
        }
        if (isset($this->originalRuleset)) {
            $out->originalRuleset = $this->originalRuleset;
        }
        if (isset($this->created)) {
            if (null !== ($val = $this->created->getValue())) {
                $out->created = $val;
            }
            if ($this->created->_nonValueFieldDefined()) {
                $ext = $this->created->jsonSerialize();
                unset($ext->value);
                $out->_created = $ext;
            }
        }
        if (isset($this->target)) {
            $out->target = $this->target;
        }
        if (isset($this->provider)) {
            $out->provider = $this->provider;
        }
        if (isset($this->organization)) {
            $out->organization = $this->organization;
        }
        if (isset($this->use)) {
            if (null !== ($val = $this->use->getValue())) {
                $out->use = $val;
            }
            if ($this->use->_nonValueFieldDefined()) {
                $ext = $this->use->jsonSerialize();
                unset($ext->value);
                $out->_use = $ext;
            }
        }
        if (isset($this->priority)) {
            $out->priority = $this->priority;
        }
        if (isset($this->fundsReserve)) {
            $out->fundsReserve = $this->fundsReserve;
        }
        if (isset($this->enterer)) {
            $out->enterer = $this->enterer;
        }
        if (isset($this->facility)) {
            $out->facility = $this->facility;
        }
        if (isset($this->prescription)) {
            $out->prescription = $this->prescription;
        }
        if (isset($this->originalPrescription)) {
            $out->originalPrescription = $this->originalPrescription;
        }
        if (isset($this->payee)) {
            $out->payee = $this->payee;
        }
        if (isset($this->referral)) {
            $out->referral = $this->referral;
        }
        if (isset($this->diagnosis) && [] !== $this->diagnosis) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DIAGNOSIS) && 1 === count($this->diagnosis)) {
                $out->diagnosis = $this->diagnosis[0];
            } else {
                $out->diagnosis = $this->diagnosis;
            }
        }
        if (isset($this->condition) && [] !== $this->condition) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_CONDITION) && 1 === count($this->condition)) {
                $out->condition = $this->condition[0];
            } else {
                $out->condition = $this->condition;
            }
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->coverage) && [] !== $this->coverage) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_COVERAGE) && 1 === count($this->coverage)) {
                $out->coverage = $this->coverage[0];
            } else {
                $out->coverage = $this->coverage;
            }
        }
        if (isset($this->exception) && [] !== $this->exception) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EXCEPTION) && 1 === count($this->exception)) {
                $out->exception = $this->exception[0];
            } else {
                $out->exception = $this->exception;
            }
        }
        if (isset($this->school)) {
            if (null !== ($val = $this->school->getValue())) {
                $out->school = $val;
            }
            if ($this->school->_nonValueFieldDefined()) {
                $ext = $this->school->jsonSerialize();
                unset($ext->value);
                $out->_school = $ext;
            }
        }
        if (isset($this->accident)) {
            if (null !== ($val = $this->accident->getValue())) {
                $out->accident = $val;
            }
            if ($this->accident->_nonValueFieldDefined()) {
                $ext = $this->accident->jsonSerialize();
                unset($ext->value);
                $out->_accident = $ext;
            }
        }
        if (isset($this->accidentType)) {
            $out->accidentType = $this->accidentType;
        }
        if (isset($this->interventionException) && [] !== $this->interventionException) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INTERVENTION_EXCEPTION) && 1 === count($this->interventionException)) {
                $out->interventionException = $this->interventionException[0];
            } else {
                $out->interventionException = $this->interventionException;
            }
        }
        if (isset($this->item) && [] !== $this->item) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ITEM) && 1 === count($this->item)) {
                $out->item = $this->item[0];
            } else {
                $out->item = $this->item;
            }
        }
        if (isset($this->additionalMaterials) && [] !== $this->additionalMaterials) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADDITIONAL_MATERIALS) && 1 === count($this->additionalMaterials)) {
                $out->additionalMaterials = $this->additionalMaterials[0];
            } else {
                $out->additionalMaterials = $this->additionalMaterials;
            }
        }
        if (isset($this->missingTeeth) && [] !== $this->missingTeeth) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_MISSING_TEETH) && 1 === count($this->missingTeeth)) {
                $out->missingTeeth = $this->missingTeeth[0];
            } else {
                $out->missingTeeth = $this->missingTeeth;
            }
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}