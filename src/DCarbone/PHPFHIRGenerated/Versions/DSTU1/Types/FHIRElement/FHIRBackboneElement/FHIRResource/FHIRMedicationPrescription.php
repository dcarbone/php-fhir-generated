<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationPrescriptionStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationPrescriptionStatusList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap;

/**
 * An order for both supply of the medication and the instructions for
 * administration of the medicine to a patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedicationPrescription extends FHIRResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION;

    /* class_default.php:47 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_DATE_WRITTEN = 'dateWritten';
    public const FIELD_DATE_WRITTEN_EXT = '_dateWritten';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_PRESCRIBER = 'prescriber';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_REASON_CODEABLE_CONCEPT = 'reasonCodeableConcept';
    public const FIELD_REASON_RESOURCE = 'reasonResource';
    public const FIELD_MEDICATION = 'medication';
    public const FIELD_DOSAGE_INSTRUCTION = 'dosageInstruction';
    public const FIELD_DISPENSE = 'dispense';
    public const FIELD_SUBSTITUTION = 'substitution';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_DATE_WRITTEN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an erntire workflow process where records have to be tracked through an entire
     * system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime 
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
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationPrescriptionStatus 
     */
    protected FHIRMedicationPrescriptionStatus $status;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The healthcare professional responsible for authorizing the prescription.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $prescriber;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource that identifies the particular occurrence of contact
     * between patient and health care provider.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $encounter;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $reasonCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $reasonResource;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference 
     */
    protected FHIRResourceReference $medication;
    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction[] 
     */
    protected array $dosageInstruction;
    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Deals with details of the dispense part of the order.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense 
     */
    protected FHIRMedicationPrescriptionDispense $dispense;
    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution 
     */
    protected FHIRMedicationPrescriptionSubstitution $substitution;

    /* constructor.php:63 */
    /**
     * FHIRMedicationPrescription Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $dateWritten
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationPrescriptionStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationPrescriptionStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $prescriber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $encounter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $reasonResource
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $medication
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction[] $dosageInstruction
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense $dispense
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution $substitution
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $identifier = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateWritten = null,
                                null|string|FHIRMedicationPrescriptionStatusList|FHIRMedicationPrescriptionStatus $status = null,
                                null|FHIRResourceReference $patient = null,
                                null|FHIRResourceReference $prescriber = null,
                                null|FHIRResourceReference $encounter = null,
                                null|FHIRCodeableConcept $reasonCodeableConcept = null,
                                null|FHIRResourceReference $reasonResource = null,
                                null|FHIRResourceReference $medication = null,
                                null|iterable $dosageInstruction = null,
                                null|FHIRMedicationPrescriptionDispense $dispense = null,
                                null|FHIRMedicationPrescriptionSubstitution $substitution = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            language: $language,
                            text: $text,
                            contained: $contained,
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
        if (null !== $reasonResource) {
            $this->setReasonResource($reasonResource);
        }
        if (null !== $medication) {
            $this->setMedication($medication);
        }
        if (null !== $dosageInstruction) {
            $this->setDosageInstruction(...$dosageInstruction);
        }
        if (null !== $dispense) {
            $this->setDispense($dispense);
        }
        if (null !== $substitution) {
            $this->setSubstitution($substitution);
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
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an erntire workflow process where records have to be tracked through an entire
     * system.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): array
    {
        return $this->identifier ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier>
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
     * External identifier - one that would be used by another non-FHIR system - for
     * example a re-imbursement system might issue its own id for each prescription
     * that is created. This is particularly important where FHIR only provides part of
     * an erntire workflow process where records have to be tracked through an entire
     * system.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier $identifier
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
     * an erntire workflow process where records have to be tracked through an entire
     * system.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier ...$identifier
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
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime
     */
    public function getDateWritten(): null|FHIRDateTime
    {
        return $this->dateWritten ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was written.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime $dateWritten
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDateWritten(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $dateWritten,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $dateWritten) {
            unset($this->dateWritten);
            return $this;
        }
        if (!($dateWritten instanceof FHIRDateTime)) {
            $dateWritten = new FHIRDateTime(value: $dateWritten);
        }
        $this->dateWritten = $dateWritten;
        if ($this->_valueXMLLocations[self::FIELD_DATE_WRITTEN] !== $valueXMLLocation) {
            $this->_setDateWrittenValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the dateWritten element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateWrittenValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE_WRITTEN];
    }

    /**
     * Set the location the "value" field of the dateWritten element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateWrittenValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE_WRITTEN] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationPrescriptionStatus
     */
    public function getStatus(): null|FHIRMedicationPrescriptionStatus
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
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationPrescriptionStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationPrescriptionStatus $status
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setStatus(null|string|FHIRMedicationPrescriptionStatusList|FHIRMedicationPrescriptionStatus $status,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRMedicationPrescriptionStatus)) {
            $status = new FHIRMedicationPrescriptionStatus(value: $status);
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person to whom the medication will be
     * given.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getPatient(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $patient
     * @return static
     */
    public function setPatient(null|FHIRResourceReference $patient): self
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getPrescriber(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $prescriber
     * @return static
     */
    public function setPrescriber(null|FHIRResourceReference $prescriber): self
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getEncounter(): null|FHIRResourceReference
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $encounter
     * @return static
     */
    public function setEncounter(null|FHIRResourceReference $encounter): self
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getReasonResource(): null|FHIRResourceReference
    {
        return $this->reasonResource ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Can be the reason or the indication for writing the prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $reasonResource
     * @return static
     */
    public function setReasonResource(null|FHIRResourceReference $reasonResource): self
    {
        if (null === $reasonResource) {
            unset($this->reasonResource);
            return $this;
        }
        $this->reasonResource = $reasonResource;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference
     */
    public function getMedication(): null|FHIRResourceReference
    {
        return $this->medication ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference $medication
     * @return static
     */
    public function setMedication(null|FHIRResourceReference $medication): self
    {
        if (null === $medication) {
            unset($this->medication);
            return $this;
        }
        $this->medication = $medication;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction[]
     */
    public function getDosageInstruction(): array
    {
        return $this->dosageInstruction ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction>
     */
    public function getDosageInstructionIterator(): iterable
    {
        if (!isset($this->dosageInstruction)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->dosageInstruction);
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction $dosageInstruction
     * @return static
     */
    public function addDosageInstruction(FHIRMedicationPrescriptionDosageInstruction $dosageInstruction): self
    {
        if (!isset($this->dosageInstruction)) {
            $this->dosageInstruction = [];
        }
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction ...$dosageInstruction
     * @return static
     */
    public function setDosageInstruction(FHIRMedicationPrescriptionDosageInstruction ...$dosageInstruction): self
    {
        if ([] === $dosageInstruction) {
            unset($this->dosageInstruction);
            return $this;
        }
        $this->dosageInstruction = $dosageInstruction;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Deals with details of the dispense part of the order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense
     */
    public function getDispense(): null|FHIRMedicationPrescriptionDispense
    {
        return $this->dispense ?? null;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Deals with details of the dispense part of the order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense $dispense
     * @return static
     */
    public function setDispense(null|FHIRMedicationPrescriptionDispense $dispense): self
    {
        if (null === $dispense) {
            unset($this->dispense);
            return $this;
        }
        $this->dispense = $dispense;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution
     */
    public function getSubstitution(): null|FHIRMedicationPrescriptionSubstitution
    {
        return $this->substitution ?? null;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases substitution must happen, in other cases substitution must not
     * happen, and in others it does not matter. This block explains the prescriber's
     * intent. If nothing is specified substitution may be done.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution $substitution
     * @return static
     */
    public function setSubstitution(null|FHIRMedicationPrescriptionSubstitution $substitution): self
    {
        if (null === $substitution) {
            unset($this->substitution);
            return $this;
        }
        $this->substitution = $substitution;
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
        if (isset($validationRules[self::FIELD_REASON_RESOURCE])) {
            $v = $this->getReasonResource();
            foreach($validationRules[self::FIELD_REASON_RESOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REASON_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_RESOURCE])) {
                        $errs[self::FIELD_REASON_RESOURCE] = [];
                    }
                    $errs[self::FIELD_REASON_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION])) {
            $v = $this->getMedication();
            foreach($validationRules[self::FIELD_MEDICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MEDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION])) {
                        $errs[self::FIELD_MEDICATION] = [];
                    }
                    $errs[self::FIELD_MEDICATION][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_DISPENSE])) {
            $v = $this->getDispense();
            foreach($validationRules[self::FIELD_DISPENSE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_DISPENSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSE])) {
                        $errs[self::FIELD_DISPENSE] = [];
                    }
                    $errs[self::FIELD_DISPENSE][$rule] = $err;
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
        return $errs;
    }

    /* class_default.php:212 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationPrescription)) {
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
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_WRITTEN === $cen) {
                $type->setDateWritten(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRMedicationPrescriptionStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESCRIBER === $cen) {
                $type->setPrescriber(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON_CODEABLE_CONCEPT === $cen) {
                $type->setReasonCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON_RESOURCE === $cen) {
                $type->setReasonResource(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEDICATION === $cen) {
                $type->setMedication(FHIRResourceReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSAGE_INSTRUCTION === $cen) {
                $type->addDosageInstruction(FHIRMedicationPrescriptionDosageInstruction::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DISPENSE === $cen) {
                $type->setDispense(FHIRMedicationPrescriptionDispense::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBSTITUTION === $cen) {
                $type->setSubstitution(FHIRMedicationPrescriptionSubstitution::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATE_WRITTEN])) {
            if (isset($type->dateWritten)) {
                $type->dateWritten->setValue((string)$attributes[self::FIELD_DATE_WRITTEN]);
                $type->_setDateWrittenValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDateWritten((string)$attributes[self::FIELD_DATE_WRITTEN], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('MedicationPrescription', $this->_getSourceXMLNS());
        }
        if (isset($this->dateWritten) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE_WRITTEN]) {
            $xw->writeAttribute(self::FIELD_DATE_WRITTEN, $this->dateWritten->_getFormattedValue());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->identifier)) {
            foreach ($this->identifier as $v) {
                $xw->startElement(self::FIELD_IDENTIFIER);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dateWritten)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE_WRITTEN]
                || $this->dateWritten->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE_WRITTEN);
            $this->dateWritten->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE_WRITTEN]);
            $xw->endElement();
        }
        if (isset($this->status)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_STATUS]
                || $this->status->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_STATUS);
            $this->status->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_STATUS]);
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
        if (isset($this->reasonResource)) {
            $xw->startElement(self::FIELD_REASON_RESOURCE);
            $this->reasonResource->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->medication)) {
            $xw->startElement(self::FIELD_MEDICATION);
            $this->medication->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->dosageInstruction)) {
            foreach ($this->dosageInstruction as $v) {
                $xw->startElement(self::FIELD_DOSAGE_INSTRUCTION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->dispense)) {
            $xw->startElement(self::FIELD_DISPENSE);
            $this->dispense->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->substitution)) {
            $xw->startElement(self::FIELD_SUBSTITUTION);
            $this->substitution->xmlSerialize($xw, $config);
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
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationPrescription)) {
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
        if (isset($json[self::FIELD_DATE_WRITTEN])
            || isset($json[self::FIELD_DATE_WRITTEN_EXT])
            || array_key_exists(self::FIELD_DATE_WRITTEN, $json)
            || array_key_exists(self::FIELD_DATE_WRITTEN_EXT, $json)) {
            $value = $json[self::FIELD_DATE_WRITTEN] ?? null;
            $type->setDateWritten(FHIRDateTime::jsonUnserialize(
                (is_array($value) ? $value : [FHIRDateTime::FIELD_VALUE => $value]) + ($json[self::FIELD_DATE_WRITTEN_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_STATUS])
            || isset($json[self::FIELD_STATUS_EXT])
            || array_key_exists(self::FIELD_STATUS, $json)
            || array_key_exists(self::FIELD_STATUS_EXT, $json)) {
            $value = $json[self::FIELD_STATUS] ?? null;
            $type->setStatus(FHIRMedicationPrescriptionStatus::jsonUnserialize(
                (is_array($value) ? $value : [FHIRMedicationPrescriptionStatus::FIELD_VALUE => $value]) + ($json[self::FIELD_STATUS_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PATIENT]) || array_key_exists(self::FIELD_PATIENT, $json)) {
            $type->setPatient(FHIRResourceReference::jsonUnserialize($json[self::FIELD_PATIENT], $config));
        }
        if (isset($json[self::FIELD_PRESCRIBER]) || array_key_exists(self::FIELD_PRESCRIBER, $json)) {
            $type->setPrescriber(FHIRResourceReference::jsonUnserialize($json[self::FIELD_PRESCRIBER], $config));
        }
        if (isset($json[self::FIELD_ENCOUNTER]) || array_key_exists(self::FIELD_ENCOUNTER, $json)) {
            $type->setEncounter(FHIRResourceReference::jsonUnserialize($json[self::FIELD_ENCOUNTER], $config));
        }
        if (isset($json[self::FIELD_REASON_CODEABLE_CONCEPT]) || array_key_exists(self::FIELD_REASON_CODEABLE_CONCEPT, $json)) {
            $type->setReasonCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_REASON_CODEABLE_CONCEPT], $config));
        }
        if (isset($json[self::FIELD_REASON_RESOURCE]) || array_key_exists(self::FIELD_REASON_RESOURCE, $json)) {
            $type->setReasonResource(FHIRResourceReference::jsonUnserialize($json[self::FIELD_REASON_RESOURCE], $config));
        }
        if (isset($json[self::FIELD_MEDICATION]) || array_key_exists(self::FIELD_MEDICATION, $json)) {
            $type->setMedication(FHIRResourceReference::jsonUnserialize($json[self::FIELD_MEDICATION], $config));
        }
        if (isset($json[self::FIELD_DOSAGE_INSTRUCTION]) || array_key_exists(self::FIELD_DOSAGE_INSTRUCTION, $json)) {
            $vs = $json[self::FIELD_DOSAGE_INSTRUCTION];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addDosageInstruction(FHIRMedicationPrescriptionDosageInstruction::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_DISPENSE]) || array_key_exists(self::FIELD_DISPENSE, $json)) {
            $type->setDispense(FHIRMedicationPrescriptionDispense::jsonUnserialize($json[self::FIELD_DISPENSE], $config));
        }
        if (isset($json[self::FIELD_SUBSTITUTION]) || array_key_exists(self::FIELD_SUBSTITUTION, $json)) {
            $type->setSubstitution(FHIRMedicationPrescriptionSubstitution::jsonUnserialize($json[self::FIELD_SUBSTITUTION], $config));
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
            if ($this->dateWritten->_nonValueFieldDefined()) {
                $ext = $this->dateWritten->jsonSerialize();
                unset($ext->value);
                $out->_dateWritten = $ext;
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
        if (isset($this->reasonResource)) {
            $out->reasonResource = $this->reasonResource;
        }
        if (isset($this->medication)) {
            $out->medication = $this->medication;
        }
        if (isset($this->dosageInstruction) && [] !== $this->dosageInstruction) {
            $out->dosageInstruction = $this->dosageInstruction;
        }
        if (isset($this->dispense)) {
            $out->dispense = $this->dispense;
        }
        if (isset($this->substitution)) {
            $out->substitution = $this->substitution;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}