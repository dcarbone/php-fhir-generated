<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;

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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationOrderStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionTypeMap;

/**
 * An order for both supply of the medication and the instructions for
 * administration of the medication to a patient. The resource is called
 * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
 * across inpatient and outpatient settings as well as for care plans, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedicationOrder extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_ORDER;


    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_DATE_WRITTEN = 'dateWritten';
    public const FIELD_DATE_WRITTEN_EXT = '_dateWritten';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_DATE_ENDED = 'dateEnded';
    public const FIELD_DATE_ENDED_EXT = '_dateEnded';
    public const FIELD_REASON_ENDED = 'reasonEnded';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_PRESCRIBER = 'prescriber';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
    public const FIELD_REASON_REFERENCE = 'reasonReference';
    public const FIELD_NOTE = 'note';
    public const FIELD_NOTE_EXT = '_note';
    public const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    public const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    public const FIELD_DOSAGE_INSTRUCTION = 'dosageInstruction';
    public const FIELD_DISPENSE_REQUEST = 'dispenseRequest';
    public const FIELD_SUBSTITUTION = 'substitution';
    public const FIELD_PRIOR_PRESCRIPTION = 'priorPrescription';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an entire workflow process where records have to be tracked through an entire
     * system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $dateWritten;
    /**
     * A code specifying the state of the prescribing event. Describes the lifecycle of
     * the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the order. Generally this will be active or
     * completed state.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationOrderStatus 
     */
    protected FHIRMedicationOrderStatus $status;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was stopped.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $dateEnded;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the prescription was stopped, if it was.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $reasonEnded;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $prescriber;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource that identifies the particular occurrence of contact
     * between patient and health care provider.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $encounter;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $reasonCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $reasonReference;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $note;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $medicationCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $medicationReference;
    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction[] 
     */
    protected array $dosageInstruction;
    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates the specific details for the dispense or medication supply part of a
     * medication order (also known as a Medication Prescription). Note that this
     * information is NOT always sent with the order. There may be in some settings
     * (e.g. hospitals) institutional or system support for completing the dispense
     * details in the pharmacy department.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest 
     */
    protected FHIRMedicationOrderDispenseRequest $dispenseRequest;
    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution 
     */
    protected FHIRMedicationOrderSubstitution $substitution;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing an earlier order or prescription that this
     * order supersedes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $priorPrescription;

    /** Default validation map for fields in type MedicationOrder */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_MEDICATION_CODEABLE_CONCEPT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_MEDICATION_REFERENCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMedicationOrder Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $dateWritten
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationOrderStatus $status
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $dateEnded
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $reasonEnded
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $prescriber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $encounter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $reasonReference
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $medicationReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction[] $dosageInstruction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest $dispenseRequest
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution $substitution
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $priorPrescription
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
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateWritten = null,
                                null|FHIRMedicationOrderStatus $status = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateEnded = null,
                                null|FHIRCodeableConcept $reasonEnded = null,
                                null|FHIRReference $patient = null,
                                null|FHIRReference $prescriber = null,
                                null|FHIRReference $encounter = null,
                                null|FHIRCodeableConcept $reasonCodeableConcept = null,
                                null|FHIRReference $reasonReference = null,
                                null|string|FHIRStringPrimitive|FHIRString $note = null,
                                null|FHIRCodeableConcept $medicationCodeableConcept = null,
                                null|FHIRReference $medicationReference = null,
                                null|iterable $dosageInstruction = null,
                                null|FHIRMedicationOrderDispenseRequest $dispenseRequest = null,
                                null|FHIRMedicationOrderSubstitution $substitution = null,
                                null|FHIRReference $priorPrescription = null,
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
        if (null !== $dateWritten) {
            $this->setDateWritten($dateWritten);
        }
        if (null !== $status) {
            $this->setStatus($status);
        }
        if (null !== $dateEnded) {
            $this->setDateEnded($dateEnded);
        }
        if (null !== $reasonEnded) {
            $this->setReasonEnded($reasonEnded);
        }
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $prescriber) {
            $this->setPrescriber($prescriber);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $reasonCodeableConcept) {
            $this->setReasonCodeableConcept($reasonCodeableConcept);
        }
        if (null !== $reasonReference) {
            $this->setReasonReference($reasonReference);
        }
        if (null !== $note) {
            $this->setNote($note);
        }
        if (null !== $medicationCodeableConcept) {
            $this->setMedicationCodeableConcept($medicationCodeableConcept);
        }
        if (null !== $medicationReference) {
            $this->setMedicationReference($medicationReference);
        }
        if (null !== $dosageInstruction) {
            $this->setDosageInstruction(...$dosageInstruction);
        }
        if (null !== $dispenseRequest) {
            $this->setDispenseRequest($dispenseRequest);
        }
        if (null !== $substitution) {
            $this->setSubstitution($substitution);
        }
        if (null !== $priorPrescription) {
            $this->setPriorPrescription($priorPrescription);
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an entire workflow process where records have to be tracked through an entire
     * system.
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
        if (!isset($this->identifier) || [] === $this->identifier) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->identifier);
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an entire workflow process where records have to be tracked through an entire
     * system.
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
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an entire workflow process where records have to be tracked through an entire
     * system.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier ...$identifier
     * @return static
     */
    public function setIdentifier(FHIRIdentifier ...$identifier): self
    {
        $this->identifier = $identifier;
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
     * The date (and perhaps time) when the prescription was written.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
     */
    public function getDateWritten(): null|FHIRDateTime
    {
        return $this->dateWritten ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $dateWritten
     * @return static
     */
    public function setDateWritten(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateWritten): self
    {
        if (null === $dateWritten) {
            unset($this->dateWritten);
            return $this;
        }
        if (!($dateWritten instanceof FHIRDateTime)) {
            $dateWritten = new FHIRDateTime(value: $dateWritten);
        }
        $this->dateWritten = $dateWritten;
        return $this;
    }

    /**
     * A code specifying the state of the prescribing event. Describes the lifecycle of
     * the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the order. Generally this will be active or
     * completed state.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationOrderStatus
     */
    public function getStatus(): null|FHIRMedicationOrderStatus
    {
        return $this->status ?? null;
    }

    /**
     * A code specifying the state of the prescribing event. Describes the lifecycle of
     * the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the state of the order. Generally this will be active or
     * completed state.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationOrderStatus $status
     * @return static
     */
    public function setStatus(null|FHIRMedicationOrderStatus $status): self
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
     * The date (and perhaps time) when the prescription was stopped.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
     */
    public function getDateEnded(): null|FHIRDateTime
    {
        return $this->dateEnded ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was stopped.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $dateEnded
     * @return static
     */
    public function setDateEnded(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateEnded): self
    {
        if (null === $dateEnded) {
            unset($this->dateEnded);
            return $this;
        }
        if (!($dateEnded instanceof FHIRDateTime)) {
            $dateEnded = new FHIRDateTime(value: $dateEnded);
        }
        $this->dateEnded = $dateEnded;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the prescription was stopped, if it was.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonEnded(): null|FHIRCodeableConcept
    {
        return $this->reasonEnded ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason why the prescription was stopped, if it was.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $reasonEnded
     * @return static
     */
    public function setReasonEnded(null|FHIRCodeableConcept $reasonEnded): self
    {
        if (null === $reasonEnded) {
            unset($this->reasonEnded);
            return $this;
        }
        $this->reasonEnded = $reasonEnded;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
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
     * A link to a resource representing the person to whom the medication will be
     * given.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getPrescriber(): null|FHIRReference
    {
        return $this->prescriber ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $prescriber
     * @return static
     */
    public function setPrescriber(null|FHIRReference $prescriber): self
    {
        if (null === $prescriber) {
            unset($this->prescriber);
            return $this;
        }
        $this->prescriber = $prescriber;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource that identifies the particular occurrence of contact
     * between patient and health care provider.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
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
     * A link to a resource that identifies the particular occurrence of contact
     * between patient and health care provider.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $encounter
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->reasonCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @return static
     */
    public function setReasonCodeableConcept(null|FHIRCodeableConcept $reasonCodeableConcept): self
    {
        if (null === $reasonCodeableConcept) {
            unset($this->reasonCodeableConcept);
            return $this;
        }
        $this->reasonCodeableConcept = $reasonCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getReasonReference(): null|FHIRReference
    {
        return $this->reasonReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function setReasonReference(null|FHIRReference $reasonReference): self
    {
        if (null === $reasonReference) {
            unset($this->reasonReference);
            return $this;
        }
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getNote(): null|FHIRString
    {
        return $this->note ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $note
     * @return static
     */
    public function setNote(null|string|FHIRStringPrimitive|FHIRString $note): self
    {
        if (null === $note) {
            unset($this->note);
            return $this;
        }
        if (!($note instanceof FHIRString)) {
            $note = new FHIRString(value: $note);
        }
        $this->note = $note;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept(): null|FHIRCodeableConcept
    {
        return $this->medicationCodeableConcept ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return static
     */
    public function setMedicationCodeableConcept(null|FHIRCodeableConcept $medicationCodeableConcept): self
    {
        if (null === $medicationCodeableConcept) {
            unset($this->medicationCodeableConcept);
            return $this;
        }
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getMedicationReference(): null|FHIRReference
    {
        return $this->medicationReference ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $medicationReference
     * @return static
     */
    public function setMedicationReference(null|FHIRReference $medicationReference): self
    {
        if (null === $medicationReference) {
            unset($this->medicationReference);
            return $this;
        }
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction[]
     */
    public function getDosageInstruction(): array
    {
        return $this->dosageInstruction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction>
     */
    public function getDosageInstructionIterator(): iterable
    {
        if (!isset($this->dosageInstruction) || [] === $this->dosageInstruction) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dosageInstruction);
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction $dosageInstruction
     * @return static
     */
    public function addDosageInstruction(FHIRMedicationOrderDosageInstruction $dosageInstruction): self
    {
        if (!isset($this->dosageInstruction)) {
            $this->dosageInstruction = [];
        }
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction ...$dosageInstruction
     * @return static
     */
    public function setDosageInstruction(FHIRMedicationOrderDosageInstruction ...$dosageInstruction): self
    {
        $this->dosageInstruction = $dosageInstruction;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates the specific details for the dispense or medication supply part of a
     * medication order (also known as a Medication Prescription). Note that this
     * information is NOT always sent with the order. There may be in some settings
     * (e.g. hospitals) institutional or system support for completing the dispense
     * details in the pharmacy department.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest
     */
    public function getDispenseRequest(): null|FHIRMedicationOrderDispenseRequest
    {
        return $this->dispenseRequest ?? null;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates the specific details for the dispense or medication supply part of a
     * medication order (also known as a Medication Prescription). Note that this
     * information is NOT always sent with the order. There may be in some settings
     * (e.g. hospitals) institutional or system support for completing the dispense
     * details in the pharmacy department.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest $dispenseRequest
     * @return static
     */
    public function setDispenseRequest(null|FHIRMedicationOrderDispenseRequest $dispenseRequest): self
    {
        if (null === $dispenseRequest) {
            unset($this->dispenseRequest);
            return $this;
        }
        $this->dispenseRequest = $dispenseRequest;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution
     */
    public function getSubstitution(): null|FHIRMedicationOrderSubstitution
    {
        return $this->substitution ?? null;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationOrder" rather than "MedicationPrescription" to generalize the use
     * across inpatient and outpatient settings as well as for care plans, etc.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution $substitution
     * @return static
     */
    public function setSubstitution(null|FHIRMedicationOrderSubstitution $substitution): self
    {
        if (null === $substitution) {
            unset($this->substitution);
            return $this;
        }
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing an earlier order or prescription that this
     * order supersedes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getPriorPrescription(): null|FHIRReference
    {
        return $this->priorPrescription ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing an earlier order or prescription that this
     * order supersedes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $priorPrescription
     * @return static
     */
    public function setPriorPrescription(null|FHIRReference $priorPrescription): self
    {
        if (null === $priorPrescription) {
            unset($this->priorPrescription);
            return $this;
        }
        $this->priorPrescription = $priorPrescription;
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
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_REFERENCE] = $fieldErrs;
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
        if (isset($validationRules[self::FIELD_DATE_WRITTEN])) {
            $v = $this->getDateWritten();
            foreach($validationRules[self::FIELD_DATE_WRITTEN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE_WRITTEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_WRITTEN])) {
                        $errs[self::FIELD_DATE_WRITTEN] = [];
                    }
                    $errs[self::FIELD_DATE_WRITTEN][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_DATE_ENDED])) {
            $v = $this->getDateEnded();
            foreach($validationRules[self::FIELD_DATE_ENDED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DATE_ENDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_ENDED])) {
                        $errs[self::FIELD_DATE_ENDED] = [];
                    }
                    $errs[self::FIELD_DATE_ENDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_ENDED])) {
            $v = $this->getReasonEnded();
            foreach($validationRules[self::FIELD_REASON_ENDED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_ENDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_ENDED])) {
                        $errs[self::FIELD_REASON_ENDED] = [];
                    }
                    $errs[self::FIELD_REASON_ENDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESCRIBER])) {
            $v = $this->getPrescriber();
            foreach($validationRules[self::FIELD_PRESCRIBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRESCRIBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESCRIBER])) {
                        $errs[self::FIELD_PRESCRIBER] = [];
                    }
                    $errs[self::FIELD_PRESCRIBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT])) {
            $v = $this->getReasonCodeableConcept();
            foreach($validationRules[self::FIELD_REASON_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_REASON_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_REASON_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            $v = $this->getMedicationCodeableConcept();
            foreach($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEDICATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_REFERENCE])) {
            $v = $this->getMedicationReference();
            foreach($validationRules[self::FIELD_MEDICATION_REFERENCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEDICATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_REFERENCE])) {
                        $errs[self::FIELD_MEDICATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_MEDICATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE_INSTRUCTION])) {
            $v = $this->getDosageInstruction();
            foreach($validationRules[self::FIELD_DOSAGE_INSTRUCTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DOSAGE_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE_INSTRUCTION])) {
                        $errs[self::FIELD_DOSAGE_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_DOSAGE_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSE_REQUEST])) {
            $v = $this->getDispenseRequest();
            foreach($validationRules[self::FIELD_DISPENSE_REQUEST] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISPENSE_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSE_REQUEST])) {
                        $errs[self::FIELD_DISPENSE_REQUEST] = [];
                    }
                    $errs[self::FIELD_DISPENSE_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTITUTION])) {
            $v = $this->getSubstitution();
            foreach($validationRules[self::FIELD_SUBSTITUTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBSTITUTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTITUTION])) {
                        $errs[self::FIELD_SUBSTITUTION] = [];
                    }
                    $errs[self::FIELD_SUBSTITUTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIOR_PRESCRIPTION])) {
            $v = $this->getPriorPrescription();
            foreach($validationRules[self::FIELD_PRIOR_PRESCRIPTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PRIOR_PRESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIOR_PRESCRIPTION])) {
                        $errs[self::FIELD_PRIOR_PRESCRIPTION] = [];
                    }
                    $errs[self::FIELD_PRIOR_PRESCRIPTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationOrder $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationOrder
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationOrder)) {
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
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
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
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface $cn */
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
            } else if (self::FIELD_DATE_WRITTEN === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDateWritten(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_STATUS === $childName) {
                $v = new FHIRMedicationOrderStatus(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setStatus(FHIRMedicationOrderStatus::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DATE_ENDED === $childName) {
                $v = new FHIRDateTime(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setDateEnded(FHIRDateTime::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON_ENDED === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setReasonEnded(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATIENT === $childName) {
                $v = new FHIRReference();
                $type->setPatient(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRESCRIBER === $childName) {
                $v = new FHIRReference();
                $type->setPrescriber(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ENCOUNTER === $childName) {
                $v = new FHIRReference();
                $type->setEncounter(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REASON_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setReasonReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_NOTE === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setNote(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MEDICATION_CODEABLE_CONCEPT === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setMedicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MEDICATION_REFERENCE === $childName) {
                $v = new FHIRReference();
                $type->setMedicationReference(FHIRReference::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DOSAGE_INSTRUCTION === $childName) {
                $v = new FHIRMedicationOrderDosageInstruction();
                $type->addDosageInstruction(FHIRMedicationOrderDosageInstruction::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_DISPENSE_REQUEST === $childName) {
                $v = new FHIRMedicationOrderDispenseRequest();
                $type->setDispenseRequest(FHIRMedicationOrderDispenseRequest::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUBSTITUTION === $childName) {
                $v = new FHIRMedicationOrderSubstitution();
                $type->setSubstitution(FHIRMedicationOrderSubstitution::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PRIOR_PRESCRIPTION === $childName) {
                $v = new FHIRReference();
                $type->setPriorPrescription(FHIRReference::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
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
        if (isset($attributes[self::FIELD_DATE_WRITTEN])) {
            $pt = $type->getDateWritten();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE_WRITTEN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDateWritten(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE_WRITTEN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_DATE_ENDED])) {
            $pt = $type->getDateEnded();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE_ENDED]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setDateEnded(new FHIRDateTime(
                    value: (string)$attributes[self::FIELD_DATE_ENDED],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_NOTE])) {
            $pt = $type->getNote();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_NOTE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setNote(new FHIRString(
                    value: (string)$attributes[self::FIELD_NOTE],
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
            $xw->openRootNode('MedicationOrder', $this->_getSourceXMLNS());
        }
        if (isset($this->dateWritten) && $this->dateWritten->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE_WRITTEN, $this->dateWritten->getValue()?->getFormattedValue());
        }
        if (isset($this->dateEnded) && $this->dateEnded->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_DATE_ENDED, $this->dateEnded->getValue()?->getFormattedValue());
        }
        if (isset($this->note) && $this->note->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_NOTE, $this->note->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dateWritten) && $this->dateWritten->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE_WRITTEN);
            $this->dateWritten->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->status)) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dateEnded) && $this->dateEnded->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_DATE_ENDED);
            $this->dateEnded->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reasonEnded)) {
            $xw->startElement(self::FIELD_REASON_ENDED);
            $this->reasonEnded->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->prescriber)) {
            $xw->startElement(self::FIELD_PRESCRIBER);
            $this->prescriber->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reasonCodeableConcept)) {
            $xw->startElement(self::FIELD_REASON_CODEABLE_CONCEPT);
            $this->reasonCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->reasonReference)) {
            $xw->startElement(self::FIELD_REASON_REFERENCE);
            $this->reasonReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->note) && $this->note->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_NOTE);
            $this->note->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->medicationCodeableConcept)) {
            $xw->startElement(self::FIELD_MEDICATION_CODEABLE_CONCEPT);
            $this->medicationCodeableConcept->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->medicationReference)) {
            $xw->startElement(self::FIELD_MEDICATION_REFERENCE);
            $this->medicationReference->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dosageInstruction)) {
            foreach ($this->dosageInstruction as $v) {
                $xw->startElement(self::FIELD_DOSAGE_INSTRUCTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dispenseRequest)) {
            $xw->startElement(self::FIELD_DISPENSE_REQUEST);
            $this->dispenseRequest->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->substitution)) {
            $xw->startElement(self::FIELD_SUBSTITUTION);
            $this->substitution->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->priorPrescription)) {
            $xw->startElement(self::FIELD_PRIOR_PRESCRIPTION);
            $this->priorPrescription->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationOrder $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationOrder
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationOrder)) {
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
        if (isset($json[self::FIELD_DATE_WRITTEN]) || isset($json[self::FIELD_DATE_WRITTEN_EXT]) || array_key_exists(self::FIELD_DATE_WRITTEN, $json) || array_key_exists(self::FIELD_DATE_WRITTEN_EXT, $json)) {
            $value = $json[self::FIELD_DATE_WRITTEN] ?? null;
            $ext = (isset($json[self::FIELD_DATE_WRITTEN_EXT]) && is_array($json[self::FIELD_DATE_WRITTEN_EXT])) ? $json[self::FIELD_DATE_WRITTEN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDateWritten($value);
                } else if (is_array($value)) {
                    $type->setDateWritten(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDateWritten(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDateWritten(new FHIRDateTime($ext));
            } else {
                $type->setDateWritten(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_STATUS]) || isset($json[self::FIELD_STATUS_EXT]) || array_key_exists(self::FIELD_STATUS, $json) || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $ext = (isset($json[self::FIELD_STATUS_EXT]) && is_array($json[self::FIELD_STATUS_EXT])) ? $json[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMedicationOrderStatus) {
                    $type->setStatus($value);
                } else if (is_array($value)) {
                    $type->setStatus(new FHIRMedicationOrderStatus(array_merge($ext, $value)));
                } else {
                    $type->setStatus(new FHIRMedicationOrderStatus([FHIRMedicationOrderStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setStatus(new FHIRMedicationOrderStatus($ext));
            } else {
                $type->setStatus(new FHIRMedicationOrderStatus(null));
            }
        }
        if (isset($json[self::FIELD_DATE_ENDED]) || isset($json[self::FIELD_DATE_ENDED_EXT]) || array_key_exists(self::FIELD_DATE_ENDED, $json) || array_key_exists(self::FIELD_DATE_ENDED_EXT, $json)) {
            $value = $json[self::FIELD_DATE_ENDED] ?? null;
            $ext = (isset($json[self::FIELD_DATE_ENDED_EXT]) && is_array($json[self::FIELD_DATE_ENDED_EXT])) ? $json[self::FIELD_DATE_ENDED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $type->setDateEnded($value);
                } else if (is_array($value)) {
                    $type->setDateEnded(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $type->setDateEnded(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setDateEnded(new FHIRDateTime($ext));
            } else {
                $type->setDateEnded(new FHIRDateTime(null));
            }
        }
        if (isset($json[self::FIELD_REASON_ENDED]) || array_key_exists(self::FIELD_REASON_ENDED, $json)) {
            if ($json[self::FIELD_REASON_ENDED] instanceof FHIRCodeableConcept) {
                $type->setReasonEnded($json[self::FIELD_REASON_ENDED]);
            } else {
                $type->setReasonEnded(new FHIRCodeableConcept($json[self::FIELD_REASON_ENDED]));
            }
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            if ($json[self::FIELD_PATIENT] instanceof FHIRReference) {
                $type->setPatient($json[self::FIELD_PATIENT]);
            } else {
                $type->setPatient(new FHIRReference($json[self::FIELD_PATIENT]));
            }
        }
        if (isset($json[self::FIELD_PRESCRIBER]) || array_key_exists(self::FIELD_PRESCRIBER, $json)) {
            if ($json[self::FIELD_PRESCRIBER] instanceof FHIRReference) {
                $type->setPrescriber($json[self::FIELD_PRESCRIBER]);
            } else {
                $type->setPrescriber(new FHIRReference($json[self::FIELD_PRESCRIBER]));
            }
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            if ($json[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $type->setEncounter($json[self::FIELD_ENCOUNTER]);
            } else {
                $type->setEncounter(new FHIRReference($json[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($json[self::FIELD_REASON_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_REASON_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_REASON_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setReasonCodeableConcept($json[self::FIELD_REASON_CODEABLE_CONCEPT]);
            } else {
                $type->setReasonCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_REASON_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_REASON_REFERENCE]) || array_key_exists(self::FIELD_REASON_REFERENCE, $json)) {
            if ($json[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $type->setReasonReference($json[self::FIELD_REASON_REFERENCE]);
            } else {
                $type->setReasonReference(new FHIRReference($json[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_NOTE]) || isset($json[self::FIELD_NOTE_EXT]) || array_key_exists(self::FIELD_NOTE, $json) || array_key_exists(self::FIELD_NOTE_EXT, $json)) {
            $value = $json[self::FIELD_NOTE] ?? null;
            $ext = (isset($json[self::FIELD_NOTE_EXT]) && is_array($json[self::FIELD_NOTE_EXT])) ? $json[self::FIELD_NOTE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setNote($value);
                } else if (is_array($value)) {
                    $type->setNote(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setNote(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setNote(new FHIRString($ext));
            } else {
                $type->setNote(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_MEDICATION_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_MEDICATION_CODEABLE_CONCEPT, $json)) {
            if ($json[self::FIELD_MEDICATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $type->setMedicationCodeableConcept($json[self::FIELD_MEDICATION_CODEABLE_CONCEPT]);
            } else {
                $type->setMedicationCodeableConcept(new FHIRCodeableConcept($json[self::FIELD_MEDICATION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($json[self::FIELD_MEDICATION_REFERENCE]) || array_key_exists(self::FIELD_MEDICATION_REFERENCE, $json)) {
            if ($json[self::FIELD_MEDICATION_REFERENCE] instanceof FHIRReference) {
                $type->setMedicationReference($json[self::FIELD_MEDICATION_REFERENCE]);
            } else {
                $type->setMedicationReference(new FHIRReference($json[self::FIELD_MEDICATION_REFERENCE]));
            }
        }
        if (isset($json[self::FIELD_DOSAGE_INSTRUCTION]) || array_key_exists(self::FIELD_DOSAGE_INSTRUCTION, $json)) {
            if (is_array($json[self::FIELD_DOSAGE_INSTRUCTION])) {
                foreach($json[self::FIELD_DOSAGE_INSTRUCTION] as $v) {
                    if ($v instanceof FHIRMedicationOrderDosageInstruction) {
                        $type->addDosageInstruction($v);
                    } else {
                        $type->addDosageInstruction(new FHIRMedicationOrderDosageInstruction($v));
                    }
                }
            } elseif ($json[self::FIELD_DOSAGE_INSTRUCTION] instanceof FHIRMedicationOrderDosageInstruction) {
                $type->addDosageInstruction($json[self::FIELD_DOSAGE_INSTRUCTION]);
            } else {
                $type->addDosageInstruction(new FHIRMedicationOrderDosageInstruction($json[self::FIELD_DOSAGE_INSTRUCTION]));
            }
        }
        if (isset($json[self::FIELD_DISPENSE_REQUEST]) || array_key_exists(self::FIELD_DISPENSE_REQUEST, $json)) {
            if ($json[self::FIELD_DISPENSE_REQUEST] instanceof FHIRMedicationOrderDispenseRequest) {
                $type->setDispenseRequest($json[self::FIELD_DISPENSE_REQUEST]);
            } else {
                $type->setDispenseRequest(new FHIRMedicationOrderDispenseRequest($json[self::FIELD_DISPENSE_REQUEST]));
            }
        }
        if (isset($json[self::FIELD_SUBSTITUTION]) || array_key_exists(self::FIELD_SUBSTITUTION, $json)) {
            if ($json[self::FIELD_SUBSTITUTION] instanceof FHIRMedicationOrderSubstitution) {
                $type->setSubstitution($json[self::FIELD_SUBSTITUTION]);
            } else {
                $type->setSubstitution(new FHIRMedicationOrderSubstitution($json[self::FIELD_SUBSTITUTION]));
            }
        }
        if (isset($json[self::FIELD_PRIOR_PRESCRIPTION]) || array_key_exists(self::FIELD_PRIOR_PRESCRIPTION, $json)) {
            if ($json[self::FIELD_PRIOR_PRESCRIPTION] instanceof FHIRReference) {
                $type->setPriorPrescription($json[self::FIELD_PRIOR_PRESCRIPTION]);
            } else {
                $type->setPriorPrescription(new FHIRReference($json[self::FIELD_PRIOR_PRESCRIPTION]));
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
        if (isset($this->dateWritten)) {
            if (null !== ($val = $this->dateWritten->getValue())) {
                $out->dateWritten = $val;
            }
            $ext = $this->dateWritten->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dateWritten = $ext;
            }
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
        if (isset($this->dateEnded)) {
            if (null !== ($val = $this->dateEnded->getValue())) {
                $out->dateEnded = $val;
            }
            $ext = $this->dateEnded->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_dateEnded = $ext;
            }
        }
        if (isset($this->reasonEnded)) {
            $out->reasonEnded = $this->reasonEnded;
        }
        if (isset($this->patient)) {
            $out->patient = $this->patient;
        }
        if (isset($this->prescriber)) {
            $out->prescriber = $this->prescriber;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->reasonCodeableConcept)) {
            $out->reasonCodeableConcept = $this->reasonCodeableConcept;
        }
        if (isset($this->reasonReference)) {
            $out->reasonReference = $this->reasonReference;
        }
        if (isset($this->note)) {
            if (null !== ($val = $this->note->getValue())) {
                $out->note = $val;
            }
            $ext = $this->note->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_note = $ext;
            }
        }
        if (isset($this->medicationCodeableConcept)) {
            $out->medicationCodeableConcept = $this->medicationCodeableConcept;
        }
        if (isset($this->medicationReference)) {
            $out->medicationReference = $this->medicationReference;
        }
        if (isset($this->dosageInstruction) && [] !== $this->dosageInstruction) {
            $out->dosageInstruction = $this->dosageInstruction;
        }
        if (isset($this->dispenseRequest)) {
            $out->dispenseRequest = $this->dispenseRequest;
        }
        if (isset($this->substitution)) {
            $out->substitution = $this->substitution;
        }
        if (isset($this->priorPrescription)) {
            $out->priorPrescription = $this->priorPrescription;
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