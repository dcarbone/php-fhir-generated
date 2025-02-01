<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStatusEnum;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStatus;
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
 * Describes validation requirements, source(s), status and dates for one or more
 * elements.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRVerificationResult extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VERIFICATION_RESULT;

    /* class_default.php:47 */
    public const FIELD_TARGET = 'target';
    public const FIELD_TARGET_LOCATION = 'targetLocation';
    public const FIELD_TARGET_LOCATION_EXT = '_targetLocation';
    public const FIELD_NEED = 'need';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_STATUS_DATE = 'statusDate';
    public const FIELD_STATUS_DATE_EXT = '_statusDate';
    public const FIELD_VALIDATION_TYPE = 'validationType';
    public const FIELD_VALIDATION_PROCESS = 'validationProcess';
    public const FIELD_FREQUENCY = 'frequency';
    public const FIELD_LAST_PERFORMED = 'lastPerformed';
    public const FIELD_LAST_PERFORMED_EXT = '_lastPerformed';
    public const FIELD_NEXT_SCHEDULED = 'nextScheduled';
    public const FIELD_NEXT_SCHEDULED_EXT = '_nextScheduled';
    public const FIELD_FAILURE_ACTION = 'failureAction';
    public const FIELD_PRIMARY_SOURCE = 'primarySource';
    public const FIELD_ATTESTATION = 'attestation';
    public const FIELD_VALIDATOR = 'validator';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_STATUS => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS_DATE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_LAST_PERFORMED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NEXT_SCHEDULED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] 
     */
    protected array $target;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] 
     */
    protected array $targetLocation;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $need;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStatus 
     */
    protected FHIRStatus $status;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the validation status was updated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $statusDate;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $validationType;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $validationProcess;
    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Frequency of revalidation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming 
     */
    protected FHIRTiming $frequency;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $lastPerformed;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate 
     */
    protected FHIRDate $nextScheduled;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $failureAction;
    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[] 
     */
    protected array $primarySource;
    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation 
     */
    protected FHIRVerificationResultAttestation $attestation;
    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[] 
     */
    protected array $validator;

    /* constructor.php:63 */
    /**
     * FHIRVerificationResult Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[] $target
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[] $targetLocation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $need
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStatus $status
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $statusDate
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $validationType
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[] $validationProcess
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $frequency
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $lastPerformed
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $nextScheduled
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $failureAction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[] $primarySource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation $attestation
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[] $validator
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
                                null|iterable $target = null,
                                null|iterable $targetLocation = null,
                                null|FHIRCodeableConcept $need = null,
                                null|string|FHIRStatusEnum|FHIRStatus $status = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $statusDate = null,
                                null|FHIRCodeableConcept $validationType = null,
                                null|iterable $validationProcess = null,
                                null|FHIRTiming $frequency = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastPerformed = null,
                                null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $nextScheduled = null,
                                null|FHIRCodeableConcept $failureAction = null,
                                null|iterable $primarySource = null,
                                null|FHIRVerificationResultAttestation $attestation = null,
                                null|iterable $validator = null,
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
        if (null !== $target) {
            $this->setTarget(...$target);
        }
        if (null !== $targetLocation) {
            $this->setTargetLocation(...$targetLocation);
        }
        if (null !== $need) {
            $this->setNeed($need);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $statusDate) {
            $this->setStatusDate($statusDate);
        }
        if (null !== $validationType) {
            $this->setValidationType($validationType);
        }
        if (null !== $validationProcess) {
            $this->setValidationProcess(...$validationProcess);
        }
        if (null !== $frequency) {
            $this->setFrequency($frequency);
        }
        if (null !== $lastPerformed) {
            $this->setLastPerformed($lastPerformed);
        }
        if (null !== $nextScheduled) {
            $this->setNextScheduled($nextScheduled);
        }
        if (null !== $failureAction) {
            $this->setFailureAction($failureAction);
        }
        if (null !== $primarySource) {
            $this->setPrimarySource(...$primarySource);
        }
        if (null !== $attestation) {
            $this->setAttestation($attestation);
        }
        if (null !== $validator) {
            $this->setValidator(...$validator);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:148 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference[]
     */
    public function getTarget(): array
    {
        return $this->target ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference>
     */
    public function getTargetIterator(): iterable
    {
        if (!isset($this->target)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->target);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference $target
     * @return static
     */
    public function addTarget(FHIRReference $target): self
    {
        if (!isset($this->target)) {
            $this->target = [];
        }
        $this->target[] = $target;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A resource that was validated.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference ...$target
     * @return static
     */
    public function setTarget(FHIRReference ...$target): self
    {
        if ([] === $target) {
            unset($this->target);
            return $this;
        }
        $this->target = $target;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString[]
     */
    public function getTargetLocation(): array
    {
        return $this->targetLocation ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString>
     */
    public function getTargetLocationIterator(): iterable
    {
        if (!isset($this->targetLocation)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->targetLocation);
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $targetLocation
     * @return static
     */
    public function addTargetLocation(string|FHIRStringPrimitive|FHIRString $targetLocation): self
    {
        if (!($targetLocation instanceof FHIRString)) {
            $targetLocation = new FHIRString(value: $targetLocation);
        }
        if (!isset($this->targetLocation)) {
            $this->targetLocation = [];
        }
        $this->targetLocation[] = $targetLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The fhirpath location(s) within the resource that was validated.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString ...$targetLocation
     * @return static
     */
    public function setTargetLocation(string|FHIRStringPrimitive|FHIRString ...$targetLocation): self
    {
        if ([] === $targetLocation) {
            unset($this->targetLocation);
            return $this;
        }
        $this->targetLocation = [];
        foreach($targetLocation as $v) {
            if ($v instanceof FHIRString) {
                $this->targetLocation[] = $v;
            } else {
                $this->targetLocation[] = new FHIRString(value: $v);
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
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getNeed(): null|FHIRCodeableConcept
    {
        return $this->need ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The frequency with which the target must be validated (none; initial; periodic).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $need
     * @return static
     */
    public function setNeed(null|FHIRCodeableConcept $need): self
    {
        if (null === $need) {
            unset($this->need);
            return $this;
        }
        $this->need = $need;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStatus
     */
    public function getStatus(): null|FHIRStatus
    {
        return $this->status ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The validation status of the target (attested; validated; in process; requires
     * revalidation; validation failed; revalidation failed).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStatusEnum|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRStatusEnum|FHIRStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRStatus)) {
            $status = new FHIRStatus(value: $status);
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the validation status was updated.
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
     * When the validation status was updated.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $statusDate
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getValidationType(): null|FHIRCodeableConcept
    {
        return $this->validationType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * What the target is validated against (nothing; primary source; multiple
     * sources).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $validationType
     * @return static
     */
    public function setValidationType(null|FHIRCodeableConcept $validationType): self
    {
        if (null === $validationType) {
            unset($this->validationType);
            return $this;
        }
        $this->validationType = $validationType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getValidationProcess(): array
    {
        return $this->validationProcess ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getValidationProcessIterator(): iterable
    {
        if (!isset($this->validationProcess)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->validationProcess);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $validationProcess
     * @return static
     */
    public function addValidationProcess(FHIRCodeableConcept $validationProcess): self
    {
        if (!isset($this->validationProcess)) {
            $this->validationProcess = [];
        }
        $this->validationProcess[] = $validationProcess;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The primary process by which the target is validated (edit check; value set;
     * primary source; multiple sources; standalone; in context).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept ...$validationProcess
     * @return static
     */
    public function setValidationProcess(FHIRCodeableConcept ...$validationProcess): self
    {
        if ([] === $validationProcess) {
            unset($this->validationProcess);
            return $this;
        }
        $this->validationProcess = $validationProcess;
        return $this;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Frequency of revalidation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming
     */
    public function getFrequency(): null|FHIRTiming
    {
        return $this->frequency ?? null;
    }

    /**
     * Specifies an event that may occur multiple times. Timing schedules are used to
     * record when things are planned, expected or requested to occur. The most common
     * usage is in dosage instructions for medications. They are also used when
     * planning care of various kinds, and may be used for reporting the schedule to
     * which past regular activities were carried out.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Frequency of revalidation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming $frequency
     * @return static
     */
    public function setFrequency(null|FHIRTiming $frequency): self
    {
        if (null === $frequency) {
            unset($this->frequency);
            return $this;
        }
        $this->frequency = $frequency;
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
     * The date/time validation was last completed (including failed validations).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime
     */
    public function getLastPerformed(): null|FHIRDateTime
    {
        return $this->lastPerformed ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date/time validation was last completed (including failed validations).
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime $lastPerformed
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setLastPerformed(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $lastPerformed,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $lastPerformed) {
            unset($this->lastPerformed);
            return $this;
        }
        if (!($lastPerformed instanceof FHIRDateTime)) {
            $lastPerformed = new FHIRDateTime(value: $lastPerformed);
        }
        $this->lastPerformed = $lastPerformed;
        if ($this->_valueXMLLocations[self::FIELD_LAST_PERFORMED] !== $valueXMLLocation) {
            $this->_setLastPerformedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the lastPerformed element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getLastPerformedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_LAST_PERFORMED];
    }

    /**
     * Set the location the "value" field of the lastPerformed element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setLastPerformedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_LAST_PERFORMED] = $valueXMLLocation;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate
     */
    public function getNextScheduled(): null|FHIRDate
    {
        return $this->nextScheduled ?? null;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date when target is next validated, if appropriate.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate $nextScheduled
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setNextScheduled(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $nextScheduled,
                                     ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $nextScheduled) {
            unset($this->nextScheduled);
            return $this;
        }
        if (!($nextScheduled instanceof FHIRDate)) {
            $nextScheduled = new FHIRDate(value: $nextScheduled);
        }
        $this->nextScheduled = $nextScheduled;
        if ($this->_valueXMLLocations[self::FIELD_NEXT_SCHEDULED] !== $valueXMLLocation) {
            $this->_setNextScheduledValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the nextScheduled element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getNextScheduledValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_NEXT_SCHEDULED];
    }

    /**
     * Set the location the "value" field of the nextScheduled element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setNextScheduledValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_NEXT_SCHEDULED] = $valueXMLLocation;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getFailureAction(): null|FHIRCodeableConcept
    {
        return $this->failureAction ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The result if validation fails (fatal; warning; record only; none).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept $failureAction
     * @return static
     */
    public function setFailureAction(null|FHIRCodeableConcept $failureAction): self
    {
        if (null === $failureAction) {
            unset($this->failureAction);
            return $this;
        }
        $this->failureAction = $failureAction;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource[]
     */
    public function getPrimarySource(): array
    {
        return $this->primarySource ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource>
     */
    public function getPrimarySourceIterator(): iterable
    {
        if (!isset($this->primarySource)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->primarySource);
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource $primarySource
     * @return static
     */
    public function addPrimarySource(FHIRVerificationResultPrimarySource $primarySource): self
    {
        if (!isset($this->primarySource)) {
            $this->primarySource = [];
        }
        $this->primarySource[] = $primarySource;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the primary source(s) involved in validation.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource ...$primarySource
     * @return static
     */
    public function setPrimarySource(FHIRVerificationResultPrimarySource ...$primarySource): self
    {
        if ([] === $primarySource) {
            unset($this->primarySource);
            return $this;
        }
        $this->primarySource = $primarySource;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation
     */
    public function getAttestation(): null|FHIRVerificationResultAttestation
    {
        return $this->attestation ?? null;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity attesting to information.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation $attestation
     * @return static
     */
    public function setAttestation(null|FHIRVerificationResultAttestation $attestation): self
    {
        if (null === $attestation) {
            unset($this->attestation);
            return $this;
        }
        $this->attestation = $attestation;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator[]
     */
    public function getValidator(): array
    {
        return $this->validator ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator>
     */
    public function getValidatorIterator(): iterable
    {
        if (!isset($this->validator)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->validator);
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator $validator
     * @return static
     */
    public function addValidator(FHIRVerificationResultValidator $validator): self
    {
        if (!isset($this->validator)) {
            $this->validator = [];
        }
        $this->validator[] = $validator;
        return $this;
    }

    /**
     * Describes validation requirements, source(s), status and dates for one or more
     * elements.
     *
     * Information about the entity validating information.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator ...$validator
     * @return static
     */
    public function setValidator(FHIRVerificationResultValidator ...$validator): self
    {
        if ([] === $validator) {
            unset($this->validator);
            return $this;
        }
        $this->validator = $validator;
        return $this;
    }

    /* class_default.php:188 */
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
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_LOCATION])) {
            $v = $this->getTargetLocation();
            foreach($validationRules[self::FIELD_TARGET_LOCATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_LOCATION])) {
                        $errs[self::FIELD_TARGET_LOCATION] = [];
                    }
                    $errs[self::FIELD_TARGET_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NEED])) {
            $v = $this->getNeed();
            foreach($validationRules[self::FIELD_NEED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NEED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NEED])) {
                        $errs[self::FIELD_NEED] = [];
                    }
                    $errs[self::FIELD_NEED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_VALIDATION_TYPE])) {
            $v = $this->getValidationType();
            foreach($validationRules[self::FIELD_VALIDATION_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALIDATION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_TYPE])) {
                        $errs[self::FIELD_VALIDATION_TYPE] = [];
                    }
                    $errs[self::FIELD_VALIDATION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATION_PROCESS])) {
            $v = $this->getValidationProcess();
            foreach($validationRules[self::FIELD_VALIDATION_PROCESS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALIDATION_PROCESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATION_PROCESS])) {
                        $errs[self::FIELD_VALIDATION_PROCESS] = [];
                    }
                    $errs[self::FIELD_VALIDATION_PROCESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREQUENCY])) {
            $v = $this->getFrequency();
            foreach($validationRules[self::FIELD_FREQUENCY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FREQUENCY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREQUENCY])) {
                        $errs[self::FIELD_FREQUENCY] = [];
                    }
                    $errs[self::FIELD_FREQUENCY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_PERFORMED])) {
            $v = $this->getLastPerformed();
            foreach($validationRules[self::FIELD_LAST_PERFORMED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LAST_PERFORMED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_PERFORMED])) {
                        $errs[self::FIELD_LAST_PERFORMED] = [];
                    }
                    $errs[self::FIELD_LAST_PERFORMED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NEXT_SCHEDULED])) {
            $v = $this->getNextScheduled();
            foreach($validationRules[self::FIELD_NEXT_SCHEDULED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NEXT_SCHEDULED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NEXT_SCHEDULED])) {
                        $errs[self::FIELD_NEXT_SCHEDULED] = [];
                    }
                    $errs[self::FIELD_NEXT_SCHEDULED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FAILURE_ACTION])) {
            $v = $this->getFailureAction();
            foreach($validationRules[self::FIELD_FAILURE_ACTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_FAILURE_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FAILURE_ACTION])) {
                        $errs[self::FIELD_FAILURE_ACTION] = [];
                    }
                    $errs[self::FIELD_FAILURE_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIMARY_SOURCE])) {
            $v = $this->getPrimarySource();
            foreach($validationRules[self::FIELD_PRIMARY_SOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRIMARY_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIMARY_SOURCE])) {
                        $errs[self::FIELD_PRIMARY_SOURCE] = [];
                    }
                    $errs[self::FIELD_PRIMARY_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTESTATION])) {
            $v = $this->getAttestation();
            foreach($validationRules[self::FIELD_ATTESTATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ATTESTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTESTATION])) {
                        $errs[self::FIELD_ATTESTATION] = [];
                    }
                    $errs[self::FIELD_ATTESTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALIDATOR])) {
            $v = $this->getValidator();
            foreach($validationRules[self::FIELD_VALIDATOR] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_VALIDATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALIDATOR])) {
                        $errs[self::FIELD_VALIDATOR] = [];
                    }
                    $errs[self::FIELD_VALIDATOR][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRVerificationResult $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVerificationResult)) {
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
                $type->setId(FHIRString::xmlUnserialize($ce, $config));
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
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET === $cen) {
                $type->addTarget(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TARGET_LOCATION === $cen) {
                $type->addTargetLocation(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NEED === $cen) {
                $type->setNeed(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS_DATE === $cen) {
                $type->setStatusDate(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALIDATION_TYPE === $cen) {
                $type->setValidationType(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALIDATION_PROCESS === $cen) {
                $type->addValidationProcess(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FREQUENCY === $cen) {
                $type->setFrequency(FHIRTiming::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LAST_PERFORMED === $cen) {
                $type->setLastPerformed(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NEXT_SCHEDULED === $cen) {
                $type->setNextScheduled(FHIRDate::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FAILURE_ACTION === $cen) {
                $type->setFailureAction(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRIMARY_SOURCE === $cen) {
                $type->addPrimarySource(FHIRVerificationResultPrimarySource::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ATTESTATION === $cen) {
                $type->setAttestation(FHIRVerificationResultAttestation::xmlUnserialize($ce, $config));
            } else if (self::FIELD_VALIDATOR === $cen) {
                $type->addValidator(FHIRVerificationResultValidator::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_STATUS_DATE])) {
            if (isset($type->statusDate)) {
                $type->statusDate->setValue((string)$attributes[self::FIELD_STATUS_DATE]);
                $type->_setStatusDateValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setStatusDate((string)$attributes[self::FIELD_STATUS_DATE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LAST_PERFORMED])) {
            if (isset($type->lastPerformed)) {
                $type->lastPerformed->setValue((string)$attributes[self::FIELD_LAST_PERFORMED]);
                $type->_setLastPerformedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLastPerformed((string)$attributes[self::FIELD_LAST_PERFORMED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_NEXT_SCHEDULED])) {
            if (isset($type->nextScheduled)) {
                $type->nextScheduled->setValue((string)$attributes[self::FIELD_NEXT_SCHEDULED]);
                $type->_setNextScheduledValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setNextScheduled((string)$attributes[self::FIELD_NEXT_SCHEDULED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('VerificationResult', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        if (isset($this->statusDate) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS_DATE]) {
            $xw->writeAttribute(self::FIELD_STATUS_DATE, $this->statusDate->_getFormattedValue());
        }
        if (isset($this->lastPerformed) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_LAST_PERFORMED]) {
            $xw->writeAttribute(self::FIELD_LAST_PERFORMED, $this->lastPerformed->_getFormattedValue());
        }
        if (isset($this->nextScheduled) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NEXT_SCHEDULED]) {
            $xw->writeAttribute(self::FIELD_NEXT_SCHEDULED, $this->nextScheduled->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->target)) {
            foreach ($this->target as $v) {
                $xw->startElement(self::FIELD_TARGET);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->targetLocation) && [] !== $this->targetLocation) {
            foreach($this->targetLocation as $v) {
                $xw->startElement(self::FIELD_TARGET_LOCATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->need)) {
            $xw->startElement(self::FIELD_NEED);
            $this->need->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
            $xw->endElement();
        }
        if (isset($this->statusDate)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS_DATE]
                || $this->statusDate->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS_DATE);
            $this->statusDate->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS_DATE]);
            $xw->endElement();
        }
        if (isset($this->validationType)) {
            $xw->startElement(self::FIELD_VALIDATION_TYPE);
            $this->validationType->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->validationProcess)) {
            foreach ($this->validationProcess as $v) {
                $xw->startElement(self::FIELD_VALIDATION_PROCESS);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->frequency)) {
            $xw->startElement(self::FIELD_FREQUENCY);
            $this->frequency->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->lastPerformed)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_LAST_PERFORMED]
                || $this->lastPerformed->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_LAST_PERFORMED);
            $this->lastPerformed->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_LAST_PERFORMED]);
            $xw->endElement();
        }
        if (isset($this->nextScheduled)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NEXT_SCHEDULED]
                || $this->nextScheduled->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NEXT_SCHEDULED);
            $this->nextScheduled->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NEXT_SCHEDULED]);
            $xw->endElement();
        }
        if (isset($this->failureAction)) {
            $xw->startElement(self::FIELD_FAILURE_ACTION);
            $this->failureAction->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->primarySource)) {
            foreach ($this->primarySource as $v) {
                $xw->startElement(self::FIELD_PRIMARY_SOURCE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->attestation)) {
            $xw->startElement(self::FIELD_ATTESTATION);
            $this->attestation->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->validator)) {
            foreach ($this->validator as $v) {
                $xw->startElement(self::FIELD_VALIDATOR);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRVerificationResult $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRVerificationResult
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRVerificationResult)) {
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
        if (isset($json[self::FIELD_TARGET]) || array_key_exists(self::FIELD_TARGET, $json)) {
            $vs = $json[self::FIELD_TARGET];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addTarget(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_TARGET_LOCATION])
            || isset($json[self::FIELD_TARGET_LOCATION_EXT])
            || array_key_exists(self::FIELD_TARGET_LOCATION, $json)
            || array_key_exists(self::FIELD_TARGET_LOCATION_EXT, $json)) {
            $value = (array)($json[self::FIELD_TARGET_LOCATION] ?? []);
            $ext = (array)($json[self::FIELD_TARGET_LOCATION_EXT] ?? []);
            $cnt = count($value);
            $extCnt = count($ext);
            if ($extCnt > $cnt) {
                $cnt = $extCnt;
            }
            for ($i = 0; $i < $cnt; $i++) {
                $type->addTargetLocation(FHIRString::jsonUnserialize(
                    [FHIRString::FIELD_VALUE => $value[$i] ?? null] + ($ext[$i] ?? []),
                    $config,
                ));
            }
        }
        if (isset($json[self::FIELD_NEED]) || array_key_exists(self::FIELD_NEED, $json)) {
            $type->setNeed(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_NEED], $config));
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STATUS_DATE])
            || isset($json[self::FIELD_STATUS_DATE_EXT])
            || array_key_exists(self::FIELD_STATUS_DATE, $json)
            || array_key_exists(self::FIELD_STATUS_DATE_EXT, $json)) {
            $value = $json[self::FIELD_STATUS_DATE] ?? null;
            $type->setStatusDate(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_DATE_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_VALIDATION_TYPE]) || array_key_exists(self::FIELD_VALIDATION_TYPE, $json)) {
            $type->setValidationType(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_VALIDATION_TYPE], $config));
        }
        if (isset($json[self::FIELD_VALIDATION_PROCESS]) || array_key_exists(self::FIELD_VALIDATION_PROCESS, $json)) {
            $vs = $json[self::FIELD_VALIDATION_PROCESS];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addValidationProcess(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_FREQUENCY]) || array_key_exists(self::FIELD_FREQUENCY, $json)) {
            $type->setFrequency(FHIRTiming::jsonUnserialize($json[self::FIELD_FREQUENCY], $config));
        }
        if (isset($json[self::FIELD_LAST_PERFORMED])
            || isset($json[self::FIELD_LAST_PERFORMED_EXT])
            || array_key_exists(self::FIELD_LAST_PERFORMED, $json)
            || array_key_exists(self::FIELD_LAST_PERFORMED_EXT, $json)) {
            $value = $json[self::FIELD_LAST_PERFORMED] ?? null;
            $type->setLastPerformed(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_LAST_PERFORMED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_NEXT_SCHEDULED])
            || isset($json[self::FIELD_NEXT_SCHEDULED_EXT])
            || array_key_exists(self::FIELD_NEXT_SCHEDULED, $json)
            || array_key_exists(self::FIELD_NEXT_SCHEDULED_EXT, $json)) {
            $value = $json[self::FIELD_NEXT_SCHEDULED] ?? null;
            $type->setNextScheduled(FHIRDate::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDate::FIELD_VALUE => $value]) + ($json[self::FIELD_NEXT_SCHEDULED_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_FAILURE_ACTION]) || array_key_exists(self::FIELD_FAILURE_ACTION, $json)) {
            $type->setFailureAction(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_FAILURE_ACTION], $config));
        }
        if (isset($json[self::FIELD_PRIMARY_SOURCE]) || array_key_exists(self::FIELD_PRIMARY_SOURCE, $json)) {
            $vs = $json[self::FIELD_PRIMARY_SOURCE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPrimarySource(FHIRVerificationResultPrimarySource::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ATTESTATION]) || array_key_exists(self::FIELD_ATTESTATION, $json)) {
            $type->setAttestation(FHIRVerificationResultAttestation::jsonUnserialize($json[self::FIELD_ATTESTATION], $config));
        }
        if (isset($json[self::FIELD_VALIDATOR]) || array_key_exists(self::FIELD_VALIDATOR, $json)) {
            $vs = $json[self::FIELD_VALIDATOR];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addValidator(FHIRVerificationResultValidator::jsonUnserialize($v, $config));
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
        if (isset($this->target) && [] !== $this->target) {
            $out->target = $this->target;
        }
        if (isset($this->targetLocation) && [] !== $this->targetLocation) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->targetLocation as $v) {
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
                $out->targetLocation = $vals;
            }
            if ($hasExts) {
                $out->_targetLocation = $exts;
            }
        }
        if (isset($this->need)) {
            $out->need = $this->need;
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
        if (isset($this->validationType)) {
            $out->validationType = $this->validationType;
        }
        if (isset($this->validationProcess) && [] !== $this->validationProcess) {
            $out->validationProcess = $this->validationProcess;
        }
        if (isset($this->frequency)) {
            $out->frequency = $this->frequency;
        }
        if (isset($this->lastPerformed)) {
            if (null !== ($val = $this->lastPerformed->getValue())) {
                $out->lastPerformed = $val;
            }
            if ($this->lastPerformed->_nonValueFieldDefined()) {
                $ext = $this->lastPerformed->jsonSerialize();
                unset($ext->value);
                $out->_lastPerformed = $ext;
            }
        }
        if (isset($this->nextScheduled)) {
            if (null !== ($val = $this->nextScheduled->getValue())) {
                $out->nextScheduled = $val;
            }
            if ($this->nextScheduled->_nonValueFieldDefined()) {
                $ext = $this->nextScheduled->jsonSerialize();
                unset($ext->value);
                $out->_nextScheduled = $ext;
            }
        }
        if (isset($this->failureAction)) {
            $out->failureAction = $this->failureAction;
        }
        if (isset($this->primarySource) && [] !== $this->primarySource) {
            $out->primarySource = $this->primarySource;
        }
        if (isset($this->attestation)) {
            $out->attestation = $this->attestation;
        }
        if (isset($this->validator) && [] !== $this->validator) {
            $out->validator = $this->validator;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}