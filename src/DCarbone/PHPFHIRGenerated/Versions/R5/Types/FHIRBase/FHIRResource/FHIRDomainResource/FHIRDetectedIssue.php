<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;

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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueSeverity;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueStatus;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDetectedIssueSeverityEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDetectedIssueStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionTypeMap;

/**
 * Indicates an actual or potential clinical issue with or between one or more
 * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
 * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
 * etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRDetectedIssue extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DETECTED_ISSUE;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CODE = 'code';
    public const FIELD_SEVERITY = 'severity';
    public const FIELD_SEVERITY_EXT = '_severity';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_IDENTIFIED_DATE_TIME = 'identifiedDateTime';
    public const FIELD_IDENTIFIED_DATE_TIME_EXT = '_identifiedDateTime';
    public const FIELD_IDENTIFIED_PERIOD = 'identifiedPeriod';
    public const FIELD_AUTHOR = 'author';
    public const FIELD_IMPLICATED = 'implicated';
    public const FIELD_EVIDENCE = 'evidence';
    public const FIELD_DETAIL = 'detail';
    public const FIELD_DETAIL_EXT = '_detail';
    public const FIELD_REFERENCE = 'reference';
    public const FIELD_REFERENCE_EXT = '_reference';
    public const FIELD_MITIGATION = 'mitigation';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SEVERITY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_IDENTIFIED_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DETAIL => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_REFERENCE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the status of the detected issue.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueStatus 
     */
    protected FHIRDetectedIssueStatus $status;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of detected issue.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $category;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the specific type of issue identified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $code;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueSeverity 
     */
    protected FHIRDetectedIssueSeverity $severity;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the subject whose record the detected issue is associated with.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $subject;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter during which this issue was detected.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $encounter;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a UTC offset SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * UTC offset is allowed for dates and partial dates
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $identifiedDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod 
     */
    protected FHIRPeriod $identifiedPeriod;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $author;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] 
     */
    protected array $implicated;
    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
     * etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence[] 
     */
    protected array $evidence;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A textual explanation of the detected issue.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown 
     */
    protected FHIRMarkdown $detail;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $reference;
    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
     * etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[] 
     */
    protected array $mitigation;

    /* constructor.php:62 */
    /**
     * FHIRDetectedIssue Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R5\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDetectedIssueStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $category
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDetectedIssueSeverityEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueSeverity $severity
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $identifiedDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $identifiedPeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[] $implicated
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence[] $evidence
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $detail
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $reference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[] $mitigation
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
                                null|string|FHIRDetectedIssueStatusEnum|FHIRDetectedIssueStatus $status = null,
                                null|iterable $category = null,
                                null|FHIRCodeableConcept $code = null,
                                null|string|FHIRDetectedIssueSeverityEnum|FHIRDetectedIssueSeverity $severity = null,
                                null|FHIRReference $subject = null,
                                null|FHIRReference $encounter = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $identifiedDateTime = null,
                                null|FHIRPeriod $identifiedPeriod = null,
                                null|FHIRReference $author = null,
                                null|iterable $implicated = null,
                                null|iterable $evidence = null,
                                null|string|FHIRMarkdownPrimitive|FHIRMarkdown $detail = null,
                                null|string|FHIRUriPrimitive|FHIRUri $reference = null,
                                null|iterable $mitigation = null,
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
        if (null !== $category) {
            $this->setCategory(...$category);
        }
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $severity) {
            $this->setSeverity($severity);
        }
        if (null !== $subject) {
            $this->setSubject($subject);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $identifiedDateTime) {
            $this->setIdentifiedDateTime($identifiedDateTime);
        }
        if (null !== $identifiedPeriod) {
            $this->setIdentifiedPeriod($identifiedPeriod);
        }
        if (null !== $author) {
            $this->setAuthor($author);
        }
        if (null !== $implicated) {
            $this->setImplicated(...$implicated);
        }
        if (null !== $evidence) {
            $this->setEvidence(...$evidence);
        }
        if (null !== $detail) {
            $this->setDetail($detail);
        }
        if (null !== $reference) {
            $this->setReference($reference);
        }
        if (null !== $mitigation) {
            $this->setMitigation(...$mitigation);
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

    /* class_default.php:155 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier associated with the detected issue record.
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
     * Business identifier associated with the detected issue record.
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
     * Business identifier associated with the detected issue record.
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
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the status of the detected issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueStatus
     */
    public function getStatus(): null|FHIRDetectedIssueStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the status of the detected issue.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDetectedIssueStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRDetectedIssueStatusEnum|FHIRDetectedIssueStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRDetectedIssueStatus)) {
            $status = new FHIRDetectedIssueStatus(value: $status);
        }
        $this->status = $status;
        if ($this->_valueXMLLocations[self::FIELD_STATUS] !== $valueXMLLocation) {
            $this->_setStatusValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the status element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getStatusValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_STATUS];
    }

    /**
     * Set the location the "value" field of the status element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setStatusValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_STATUS] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of detected issue.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getCategory(): array
    {
        return $this->category ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getCategoryIterator(): iterable
    {
        if (!isset($this->category)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->category);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of detected issue.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category): self
    {
        if (!isset($this->category)) {
            $this->category = [];
        }
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that classifies the general type of detected issue.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$category
     * @return static
     */
    public function setCategory(FHIRCodeableConcept ...$category): self
    {
        if ([] === $category) {
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
     * Identifies the specific type of issue identified.
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
     * Identifies the specific type of issue identified.
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
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueSeverity
     */
    public function getSeverity(): null|FHIRDetectedIssueSeverity
    {
        return $this->severity ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates the degree of importance associated with the identified issue based on
     * the potential impact on the patient.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRCodePrimitive\FHIRDetectedIssueSeverityEnum|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDetectedIssueSeverity $severity
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSeverity(null|string|FHIRDetectedIssueSeverityEnum|FHIRDetectedIssueSeverity $severity,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $severity) {
            unset($this->severity);
            return $this;
        }
        if (!($severity instanceof FHIRDetectedIssueSeverity)) {
            $severity = new FHIRDetectedIssueSeverity(value: $severity);
        }
        $this->severity = $severity;
        if ($this->_valueXMLLocations[self::FIELD_SEVERITY] !== $valueXMLLocation) {
            $this->_setSeverityValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the severity element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getSeverityValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_SEVERITY];
    }

    /**
     * Set the location the "value" field of the severity element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setSeverityValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_SEVERITY] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the subject whose record the detected issue is associated with.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getSubject(): null|FHIRReference
    {
        return $this->subject ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the subject whose record the detected issue is associated with.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $subject
     * @return static
     */
    public function setSubject(null|FHIRReference $subject): self
    {
        if (null === $subject) {
            unset($this->subject);
            return $this;
        }
        $this->subject = $subject;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter during which this issue was detected.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEncounter(): null|FHIRReference
    {
        return $this->encounter ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The encounter during which this issue was detected.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRReference $encounter): self
    {
        if (null === $encounter) {
            unset($this->encounter);
            return $this;
        }
        $this->encounter = $encounter;
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
     * The date or period when the detected issue was initially identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime
     */
    public function getIdentifiedDateTime(): null|FHIRDateTime
    {
        return $this->identifiedDateTime ?? null;
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
     * The date or period when the detected issue was initially identified.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDateTime $identifiedDateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setIdentifiedDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $identifiedDateTime,
                                          ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $identifiedDateTime) {
            unset($this->identifiedDateTime);
            return $this;
        }
        if (!($identifiedDateTime instanceof FHIRDateTime)) {
            $identifiedDateTime = new FHIRDateTime(value: $identifiedDateTime);
        }
        $this->identifiedDateTime = $identifiedDateTime;
        if ($this->_valueXMLLocations[self::FIELD_IDENTIFIED_DATE_TIME] !== $valueXMLLocation) {
            $this->_setIdentifiedDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the identifiedDateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getIdentifiedDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_IDENTIFIED_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the identifiedDateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setIdentifiedDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_IDENTIFIED_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod
     */
    public function getIdentifiedPeriod(): null|FHIRPeriod
    {
        return $this->identifiedPeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or period when the detected issue was initially identified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRPeriod $identifiedPeriod
     * @return static
     */
    public function setIdentifiedPeriod(null|FHIRPeriod $identifiedPeriod): self
    {
        if (null === $identifiedPeriod) {
            unset($this->identifiedPeriod);
            return $this;
        }
        $this->identifiedPeriod = $identifiedPeriod;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getAuthor(): null|FHIRReference
    {
        return $this->author ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Individual or device responsible for the issue being raised. For example, a
     * decision support application or a pharmacist conducting a medication review.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $author
     * @return static
     */
    public function setAuthor(null|FHIRReference $author): self
    {
        if (null === $author) {
            unset($this->author);
            return $this;
        }
        $this->author = $author;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference[]
     */
    public function getImplicated(): array
    {
        return $this->implicated ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getImplicatedIterator(): iterable
    {
        if (!isset($this->implicated)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->implicated);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $implicated
     * @return static
     */
    public function addImplicated(FHIRReference $implicated): self
    {
        if (!isset($this->implicated)) {
            $this->implicated = [];
        }
        $this->implicated[] = $implicated;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the resource representing the current activity or proposed activity
     * that is potentially problematic.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$implicated
     * @return static
     */
    public function setImplicated(FHIRReference ...$implicated): self
    {
        if ([] === $implicated) {
            unset($this->implicated);
            return $this;
        }
        $this->implicated = $implicated;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
     * etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence[]
     */
    public function getEvidence(): array
    {
        return $this->evidence ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence>
     */
    public function getEvidenceIterator(): iterable
    {
        if (!isset($this->evidence)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->evidence);
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
     * etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence $evidence
     * @return static
     */
    public function addEvidence(FHIRDetectedIssueEvidence $evidence): self
    {
        if (!isset($this->evidence)) {
            $this->evidence = [];
        }
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
     * etc.
     *
     * Supporting evidence or manifestations that provide the basis for identifying the
     * detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence ...$evidence
     * @return static
     */
    public function setEvidence(FHIRDetectedIssueEvidence ...$evidence): self
    {
        if ([] === $evidence) {
            unset($this->evidence);
            return $this;
        }
        $this->evidence = $evidence;
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
     * A textual explanation of the detected issue.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown
     */
    public function getDetail(): null|FHIRMarkdown
    {
        return $this->detail ?? null;
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
     * A textual explanation of the detected issue.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRMarkdownPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRMarkdown $detail
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDetail(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $detail,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $detail) {
            unset($this->detail);
            return $this;
        }
        if (!($detail instanceof FHIRMarkdown)) {
            $detail = new FHIRMarkdown(value: $detail);
        }
        $this->detail = $detail;
        if ($this->_valueXMLLocations[self::FIELD_DETAIL] !== $valueXMLLocation) {
            $this->_setDetailValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the detail element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDetailValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DETAIL];
    }

    /**
     * Set the location the "value" field of the detail element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDetailValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DETAIL] = $valueXMLLocation;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getReference(): null|FHIRUri
    {
        return $this->reference ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The literature, knowledge-base or similar reference that describes the
     * propensity for the detected issue identified.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $reference
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setReference(null|string|FHIRUriPrimitive|FHIRUri $reference,
                                 ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $reference) {
            unset($this->reference);
            return $this;
        }
        if (!($reference instanceof FHIRUri)) {
            $reference = new FHIRUri(value: $reference);
        }
        $this->reference = $reference;
        if ($this->_valueXMLLocations[self::FIELD_REFERENCE] !== $valueXMLLocation) {
            $this->_setReferenceValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the reference element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getReferenceValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_REFERENCE];
    }

    /**
     * Set the location the "value" field of the reference element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setReferenceValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_REFERENCE] = $valueXMLLocation;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
     * etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation[]
     */
    public function getMitigation(): array
    {
        return $this->mitigation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation>
     */
    public function getMitigationIterator(): iterable
    {
        if (!isset($this->mitigation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->mitigation);
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
     * etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation $mitigation
     * @return static
     */
    public function addMitigation(FHIRDetectedIssueMitigation $mitigation): self
    {
        if (!isset($this->mitigation)) {
            $this->mitigation = [];
        }
        $this->mitigation[] = $mitigation;
        return $this;
    }

    /**
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * Ineffective treatment frequency, Procedure-condition conflict, gaps in care,
     * etc.
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate
     * the likelihood of the risk identified by the detected issue from manifesting.
     * Can also reflect an observation of known mitigating factors that may
     * reduce/eliminate the need for any action.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation ...$mitigation
     * @return static
     */
    public function setMitigation(FHIRDetectedIssueMitigation ...$mitigation): self
    {
        if ([] === $mitigation) {
            unset($this->mitigation);
            return $this;
        }
        $this->mitigation = $mitigation;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDetectedIssue $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDetectedIssue)) {
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
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRDetectedIssueStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CATEGORY === $cen) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SEVERITY === $cen) {
                $type->setSeverity(FHIRDetectedIssueSeverity::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBJECT === $cen) {
                $type->setSubject(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIED_DATE_TIME === $cen) {
                $type->setIdentifiedDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIED_PERIOD === $cen) {
                $type->setIdentifiedPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AUTHOR === $cen) {
                $type->setAuthor(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICATED === $cen) {
                $type->addImplicated(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVIDENCE === $cen) {
                $type->addEvidence(FHIRDetectedIssueEvidence::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DETAIL === $cen) {
                $type->setDetail(FHIRMarkdown::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REFERENCE === $cen) {
                $type->setReference(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MITIGATION === $cen) {
                $type->addMitigation(FHIRDetectedIssueMitigation::xmlUnserialize($ce, $config));
            }
        }
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
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
                $type->_setStatusValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_SEVERITY])) {
            if (isset($type->severity)) {
                $type->severity->setValue((string)$attributes[self::FIELD_SEVERITY]);
                $type->_setSeverityValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setSeverity((string)$attributes[self::FIELD_SEVERITY], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IDENTIFIED_DATE_TIME])) {
            if (isset($type->identifiedDateTime)) {
                $type->identifiedDateTime->setValue((string)$attributes[self::FIELD_IDENTIFIED_DATE_TIME]);
                $type->_setIdentifiedDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setIdentifiedDateTime((string)$attributes[self::FIELD_IDENTIFIED_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DETAIL])) {
            if (isset($type->detail)) {
                $type->detail->setValue((string)$attributes[self::FIELD_DETAIL]);
                $type->_setDetailValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDetail((string)$attributes[self::FIELD_DETAIL], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REFERENCE])) {
            if (isset($type->reference)) {
                $type->reference->setValue((string)$attributes[self::FIELD_REFERENCE]);
                $type->_setReferenceValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setReference((string)$attributes[self::FIELD_REFERENCE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('DetectedIssue', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->severity) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SEVERITY]) {
            $xw->writeAttribute(self::FIELD_SEVERITY, $this->severity->_getFormattedValue());
        }
        if (isset($this->identifiedDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_IDENTIFIED_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_IDENTIFIED_DATE_TIME, $this->identifiedDateTime->_getFormattedValue());
        }
        if (isset($this->detail) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DETAIL]) {
            $xw->writeAttribute(self::FIELD_DETAIL, $this->detail->_getFormattedValue());
        }
        if (isset($this->reference) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_REFERENCE]) {
            $xw->writeAttribute(self::FIELD_REFERENCE, $this->reference->_getFormattedValue());
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
        if (isset($this->category)) {
            foreach ($this->category as $v) {
                $xw->startElement(self::FIELD_CATEGORY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->code)) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->severity)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SEVERITY]
                || $this->severity->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SEVERITY);
            $this->severity->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SEVERITY]);
            $xw->endElement();
        }
        if (isset($this->subject)) {
            $xw->startElement(self::FIELD_SUBJECT);
            $this->subject->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->identifiedDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_IDENTIFIED_DATE_TIME]
                || $this->identifiedDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_IDENTIFIED_DATE_TIME);
            $this->identifiedDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_IDENTIFIED_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->identifiedPeriod)) {
            $xw->startElement(self::FIELD_IDENTIFIED_PERIOD);
            $this->identifiedPeriod->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->author)) {
            $xw->startElement(self::FIELD_AUTHOR);
            $this->author->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->implicated)) {
            foreach ($this->implicated as $v) {
                $xw->startElement(self::FIELD_IMPLICATED);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->evidence)) {
            foreach ($this->evidence as $v) {
                $xw->startElement(self::FIELD_EVIDENCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->detail)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DETAIL]
                || $this->detail->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DETAIL);
            $this->detail->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DETAIL]);
            $xw->endElement();
        }
        if (isset($this->reference)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_REFERENCE]
                || $this->reference->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_REFERENCE);
            $this->reference->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_REFERENCE]);
            $xw->endElement();
        }
        if (isset($this->mitigation)) {
            foreach ($this->mitigation as $v) {
                $xw->startElement(self::FIELD_MITIGATION);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDetectedIssue $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRResource\FHIRDomainResource\FHIRDetectedIssue
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDetectedIssue)) {
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
        if (isset($json[self::FIELD_IDENTIFIER]) || array_key_exists(self::FIELD_IDENTIFIER, $json)) {
            $vs = $json[self::FIELD_IDENTIFIER];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addIdentifier(FHIRIdentifier::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRDetectedIssueStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDetectedIssueStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_CATEGORY]) || array_key_exists(self::FIELD_CATEGORY, $json)) {
            $vs = $json[self::FIELD_CATEGORY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addCategory(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_CODE]) || array_key_exists(self::FIELD_CODE, $json)) {
            $type->setCode(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CODE], $config));
        }
        if (isset($json[self::FIELD_SEVERITY])
            || isset($json[self::FIELD_SEVERITY_EXT])
            || array_key_exists(self::FIELD_SEVERITY, $json)
            || array_key_exists(self::FIELD_SEVERITY_EXT, $json)) {
            $value = $json[self::FIELD_SEVERITY] ?? null;
            $type->setSeverity(FHIRDetectedIssueSeverity::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDetectedIssueSeverity::FIELD_VALUE => $value]) + ($json[self::FIELD_SEVERITY_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_SUBJECT]) || array_key_exists(self::FIELD_SUBJECT, $json)) {
            $type->setSubject(FHIRReference::jsonUnserialize($json[self::FIELD_SUBJECT], $config));
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            $type->setEncounter(FHIRReference::jsonUnserialize($json[self::FIELD_ENCOUNTER], $config));
        }
        if (isset($json[self::FIELD_IDENTIFIED_DATE_TIME])
            || isset($json[self::FIELD_IDENTIFIED_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_IDENTIFIED_DATE_TIME, $json)
            || array_key_exists(self::FIELD_IDENTIFIED_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_IDENTIFIED_DATE_TIME] ?? null;
            $type->setIdentifiedDateTime(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_IDENTIFIED_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_IDENTIFIED_PERIOD]) || array_key_exists(self::FIELD_IDENTIFIED_PERIOD, $json)) {
            $type->setIdentifiedPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_IDENTIFIED_PERIOD], $config));
        }
        if (isset($json[self::FIELD_AUTHOR]) || array_key_exists(self::FIELD_AUTHOR, $json)) {
            $type->setAuthor(FHIRReference::jsonUnserialize($json[self::FIELD_AUTHOR], $config));
        }
        if (isset($json[self::FIELD_IMPLICATED]) || array_key_exists(self::FIELD_IMPLICATED, $json)) {
            $vs = $json[self::FIELD_IMPLICATED];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addImplicated(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_EVIDENCE]) || array_key_exists(self::FIELD_EVIDENCE, $json)) {
            $vs = $json[self::FIELD_EVIDENCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEvidence(FHIRDetectedIssueEvidence::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_DETAIL])
            || isset($json[self::FIELD_DETAIL_EXT])
            || array_key_exists(self::FIELD_DETAIL, $json)
            || array_key_exists(self::FIELD_DETAIL_EXT, $json)) {
            $value = $json[self::FIELD_DETAIL] ?? null;
            $type->setDetail(FHIRMarkdown::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMarkdown::FIELD_VALUE => $value]) + ($json[self::FIELD_DETAIL_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_REFERENCE])
            || isset($json[self::FIELD_REFERENCE_EXT])
            || array_key_exists(self::FIELD_REFERENCE, $json)
            || array_key_exists(self::FIELD_REFERENCE_EXT, $json)) {
            $value = $json[self::FIELD_REFERENCE] ?? null;
            $type->setReference(FHIRUri::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUri::FIELD_VALUE => $value]) + ($json[self::FIELD_REFERENCE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_MITIGATION]) || array_key_exists(self::FIELD_MITIGATION, $json)) {
            $vs = $json[self::FIELD_MITIGATION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addMitigation(FHIRDetectedIssueMitigation::jsonUnserialize($v, $config));
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
            if ($this->status->_nonValueFieldDefined()) {
                $ext = $this->status->jsonSerialize();
                unset($ext->value);
                $out->_status = $ext;
            }
        }
        if (isset($this->category) && [] !== $this->category) {
            $out->category = $this->category;
        }
        if (isset($this->code)) {
            $out->code = $this->code;
        }
        if (isset($this->severity)) {
            if (null !== ($val = $this->severity->getValue())) {
                $out->severity = $val;
            }
            if ($this->severity->_nonValueFieldDefined()) {
                $ext = $this->severity->jsonSerialize();
                unset($ext->value);
                $out->_severity = $ext;
            }
        }
        if (isset($this->subject)) {
            $out->subject = $this->subject;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->identifiedDateTime)) {
            if (null !== ($val = $this->identifiedDateTime->getValue())) {
                $out->identifiedDateTime = $val;
            }
            if ($this->identifiedDateTime->_nonValueFieldDefined()) {
                $ext = $this->identifiedDateTime->jsonSerialize();
                unset($ext->value);
                $out->_identifiedDateTime = $ext;
            }
        }
        if (isset($this->identifiedPeriod)) {
            $out->identifiedPeriod = $this->identifiedPeriod;
        }
        if (isset($this->author)) {
            $out->author = $this->author;
        }
        if (isset($this->implicated) && [] !== $this->implicated) {
            $out->implicated = $this->implicated;
        }
        if (isset($this->evidence) && [] !== $this->evidence) {
            $out->evidence = $this->evidence;
        }
        if (isset($this->detail)) {
            if (null !== ($val = $this->detail->getValue())) {
                $out->detail = $val;
            }
            if ($this->detail->_nonValueFieldDefined()) {
                $ext = $this->detail->jsonSerialize();
                unset($ext->value);
                $out->_detail = $ext;
            }
        }
        if (isset($this->reference)) {
            if (null !== ($val = $this->reference->getValue())) {
                $out->reference = $val;
            }
            if ($this->reference->_nonValueFieldDefined()) {
                $ext = $this->reference->jsonSerialize();
                unset($ext->value);
                $out->_reference = $ext;
            }
        }
        if (isset($this->mitigation) && [] !== $this->mitigation) {
            $out->mitigation = $this->mitigation;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}