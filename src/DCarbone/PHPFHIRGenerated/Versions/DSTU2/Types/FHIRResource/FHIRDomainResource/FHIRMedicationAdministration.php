<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 12th, 2025 19:32+0000
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
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationAdministrationStatus;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionTypeMap;

/**
 * Describes the event of a patient consuming or otherwise being administered a
 * medication. This may be as simple as swallowing a tablet or it may be a long
 * running infusion. Related resources tie this event to the authorizing
 * prescription, and the specific encounter between patient and health care
 * practitioner.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRMedicationAdministration extends FHIRDomainResource implements VersionContainedTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION;

    /* class_default.php:55 */
    public const FIELD_IDENTIFIER = 'identifier';
    public const FIELD_STATUS = 'status';
    public const FIELD_STATUS_EXT = '_status';
    public const FIELD_PATIENT = 'patient';
    public const FIELD_PRACTITIONER = 'practitioner';
    public const FIELD_ENCOUNTER = 'encounter';
    public const FIELD_PRESCRIPTION = 'prescription';
    public const FIELD_WAS_NOT_GIVEN = 'wasNotGiven';
    public const FIELD_WAS_NOT_GIVEN_EXT = '_wasNotGiven';
    public const FIELD_REASON_NOT_GIVEN = 'reasonNotGiven';
    public const FIELD_REASON_GIVEN = 'reasonGiven';
    public const FIELD_EFFECTIVE_TIME_DATE_TIME = 'effectiveTimeDateTime';
    public const FIELD_EFFECTIVE_TIME_DATE_TIME_EXT = '_effectiveTimeDateTime';
    public const FIELD_EFFECTIVE_TIME_PERIOD = 'effectiveTimePeriod';
    public const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    public const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    public const FIELD_DEVICE = 'device';
    public const FIELD_NOTE = 'note';
    public const FIELD_NOTE_EXT = '_note';
    public const FIELD_DOSAGE = 'dosage';

    /* class_default.php:74 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_STATUS => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_PATIENT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_EFFECTIVE_TIME_DATE_TIME => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_EFFECTIVE_TIME_PERIOD => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_MEDICATION_CODEABLE_CONCEPT => [
            MinOccursRule::NAME => 1,
        ],
        self::FIELD_MEDICATION_REFERENCE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_STATUS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_WAS_NOT_GIVEN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_EFFECTIVE_TIME_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_NOTE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] 
     */
    protected array $identifier;
    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationAdministrationStatus 
     */
    protected FHIRMedicationAdministrationStatus $status;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal receiving the medication.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $patient;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $practitioner;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $encounter;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $prescription;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $wasNotGiven;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $reasonNotGiven;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $reasonGiven;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime 
     */
    protected FHIRDateTime $effectiveTimeDateTime;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $effectiveTimePeriod;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $medicationCodeableConcept;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference 
     */
    protected FHIRReference $medicationReference;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] 
     */
    protected array $device;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $note;
    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * Describes the medication dosage information details e.g. dose, rate, site,
     * route, etc.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage 
     */
    protected FHIRMedicationAdministrationDosage $dosage;

    /* constructor.php:61 */
    /**
     * FHIRMedicationAdministration Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRIdentifier[] $identifier
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationAdministrationStatus $status
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $patient
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $practitioner
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $encounter
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $prescription
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $wasNotGiven
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $reasonNotGiven
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[] $reasonGiven
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $effectiveTimeDateTime
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $effectiveTimePeriod
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $medicationReference
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[] $device
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $note
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $dosage
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
                                null|string|FHIRMedicationAdministrationStatusList|FHIRMedicationAdministrationStatus $status = null,
                                null|FHIRReference $patient = null,
                                null|FHIRReference $practitioner = null,
                                null|FHIRReference $encounter = null,
                                null|FHIRReference $prescription = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $wasNotGiven = null,
                                null|iterable $reasonNotGiven = null,
                                null|iterable $reasonGiven = null,
                                null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $effectiveTimeDateTime = null,
                                null|FHIRPeriod $effectiveTimePeriod = null,
                                null|FHIRCodeableConcept $medicationCodeableConcept = null,
                                null|FHIRReference $medicationReference = null,
                                null|iterable $device = null,
                                null|string|FHIRStringPrimitive|FHIRString $note = null,
                                null|FHIRMedicationAdministrationDosage $dosage = null,
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
        if (null !== $patient) {
            $this->setPatient($patient);
        }
        if (null !== $practitioner) {
            $this->setPractitioner($practitioner);
        }
        if (null !== $encounter) {
            $this->setEncounter($encounter);
        }
        if (null !== $prescription) {
            $this->setPrescription($prescription);
        }
        if (null !== $wasNotGiven) {
            $this->setWasNotGiven($wasNotGiven);
        }
        if (null !== $reasonNotGiven) {
            $this->setReasonNotGiven(...$reasonNotGiven);
        }
        if (null !== $reasonGiven) {
            $this->setReasonGiven(...$reasonGiven);
        }
        if (null !== $effectiveTimeDateTime) {
            $this->setEffectiveTimeDateTime($effectiveTimeDateTime);
        }
        if (null !== $effectiveTimePeriod) {
            $this->setEffectiveTimePeriod($effectiveTimePeriod);
        }
        if (null !== $medicationCodeableConcept) {
            $this->setMedicationCodeableConcept($medicationCodeableConcept);
        }
        if (null !== $medicationReference) {
            $this->setMedicationReference($medicationReference);
        }
        if (null !== $device) {
            $this->setDevice(...$device);
        }
        if (null !== $note) {
            $this->setNote($note);
        }
        if (null !== $dosage) {
            $this->setDosage($dosage);
        }
    }

    /* class_default.php:144 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:171 */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:182 */
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
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
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
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
     * External identifier - FHIR will generate its own internal identifiers (probably
     * URLs) which do not need to be explicitly managed by the resource. The identifier
     * here is one that would be used by another non-FHIR system - for example an
     * automated medication pump would provide a record each time it operated; an
     * administration while the patient was off the ward might be made with a different
     * system and entered after the event. Particularly important if these records have
     * to be updated.
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
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public function getStatus(): null|FHIRMedicationAdministrationStatus
    {
        return $this->status ?? null;
    }

    /**
     * A set of codes indicating the current status of a MedicationAdministration.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Will generally be set to show that the administration has been completed. For
     * some long running administrations such as infusions it is possible for an
     * administration to be started but not completed or it may be paused while some
     * other process is under way.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRMedicationAdministrationStatus $status
     * @return static
     */
    public function setStatus(null|string|FHIRMedicationAdministrationStatusList|FHIRMedicationAdministrationStatus $status): self
    {
        if (null === $status) {
            unset($this->status);
            return $this;
        }
        if (!($status instanceof FHIRMedicationAdministrationStatus)) {
            $status = new FHIRMedicationAdministrationStatus(value: $status);
        }
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person or animal receiving the medication.
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
     * The person or animal receiving the medication.
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
     * The individual who was responsible for giving the medication to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference
     */
    public function getPractitioner(): null|FHIRReference
    {
        return $this->practitioner ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual who was responsible for giving the medication to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $practitioner
     * @return static
     */
    public function setPractitioner(null|FHIRReference $practitioner): self
    {
        if (null === $practitioner) {
            unset($this->practitioner);
            return $this;
        }
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
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
     * The visit, admission or other contact between patient and health care provider
     * the medication administration was performed as part of.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The original request, instruction or authority to perform the administration.
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
     * The original request, instruction or authority to perform the administration.
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
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean
     */
    public function getWasNotGiven(): null|FHIRBoolean
    {
        return $this->wasNotGiven ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Set this to true if the record is saying that the medication was NOT
     * administered.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBoolean $wasNotGiven
     * @return static
     */
    public function setWasNotGiven(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $wasNotGiven): self
    {
        if (null === $wasNotGiven) {
            unset($this->wasNotGiven);
            return $this;
        }
        if (!($wasNotGiven instanceof FHIRBoolean)) {
            $wasNotGiven = new FHIRBoolean(value: $wasNotGiven);
        }
        $this->wasNotGiven = $wasNotGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotGiven(): array
    {
        return $this->reasonNotGiven ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getReasonNotGivenIterator(): iterable
    {
        if (!isset($this->reasonNotGiven)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reasonNotGiven);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $reasonNotGiven
     * @return static
     */
    public function addReasonNotGiven(FHIRCodeableConcept $reasonNotGiven): self
    {
        if (!isset($this->reasonNotGiven)) {
            $this->reasonNotGiven = [];
        }
        $this->reasonNotGiven[] = $reasonNotGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the administration was not performed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$reasonNotGiven
     * @return static
     */
    public function setReasonNotGiven(FHIRCodeableConcept ...$reasonNotGiven): self
    {
        if ([] === $reasonNotGiven) {
            unset($this->reasonNotGiven);
            return $this;
        }
        $this->reasonNotGiven = $reasonNotGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonGiven(): array
    {
        return $this->reasonGiven ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getReasonGivenIterator(): iterable
    {
        if (!isset($this->reasonGiven)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->reasonGiven);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept $reasonGiven
     * @return static
     */
    public function addReasonGiven(FHIRCodeableConcept $reasonGiven): self
    {
        if (!isset($this->reasonGiven)) {
            $this->reasonGiven = [];
        }
        $this->reasonGiven[] = $reasonGiven;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code indicating why the medication was given.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCodeableConcept ...$reasonGiven
     * @return static
     */
    public function setReasonGiven(FHIRCodeableConcept ...$reasonGiven): self
    {
        if ([] === $reasonGiven) {
            unset($this->reasonGiven);
            return $this;
        }
        $this->reasonGiven = $reasonGiven;
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
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime
     */
    public function getEffectiveTimeDateTime(): null|FHIRDateTime
    {
        return $this->effectiveTimeDateTime ?? null;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRDateTimePrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRDateTime $effectiveTimeDateTime
     * @return static
     */
    public function setEffectiveTimeDateTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $effectiveTimeDateTime): self
    {
        if (null === $effectiveTimeDateTime) {
            unset($this->effectiveTimeDateTime);
            return $this;
        }
        if (!($effectiveTimeDateTime instanceof FHIRDateTime)) {
            $effectiveTimeDateTime = new FHIRDateTime(value: $effectiveTimeDateTime);
        }
        $this->effectiveTimeDateTime = $effectiveTimeDateTime;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod
     */
    public function getEffectiveTimePeriod(): null|FHIRPeriod
    {
        return $this->effectiveTimePeriod ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A specific date/time or interval of time during which the administration took
     * place (or did not take place, when the 'notGiven' attribute is true). For many
     * administrations, such as swallowing a tablet the use of dateTime is more
     * appropriate.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRPeriod $effectiveTimePeriod
     * @return static
     */
    public function setEffectiveTimePeriod(null|FHIRPeriod $effectiveTimePeriod): self
    {
        if (null === $effectiveTimePeriod) {
            unset($this->effectiveTimePeriod);
            return $this;
        }
        $this->effectiveTimePeriod = $effectiveTimePeriod;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
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
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
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
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
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
     * Identifies the medication that was administered. This is either a link to a
     * resource representing the details of the medication or a simple attribute
     * carrying a code that identifies the medication from a known list of medications.
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
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference[]
     */
    public function getDevice(): array
    {
        return $this->device ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference>
     */
    public function getDeviceIterator(): iterable
    {
        if (!isset($this->device)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->device);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference $device
     * @return static
     */
    public function addDevice(FHIRReference $device): self
    {
        if (!isset($this->device)) {
            $this->device = [];
        }
        $this->device[] = $device;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The device used in administering the medication to the patient. For example, a
     * particular infusion pump.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRReference ...$device
     * @return static
     */
    public function setDevice(FHIRReference ...$device): self
    {
        if ([] === $device) {
            unset($this->device);
            return $this;
        }
        $this->device = $device;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
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
     * Extra information about the medication administration that is not conveyed by
     * the other attributes.
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
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * Describes the medication dosage information details e.g. dose, rate, site,
     * route, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public function getDosage(): null|FHIRMedicationAdministrationDosage
    {
        return $this->dosage ?? null;
    }

    /**
     * Describes the event of a patient consuming or otherwise being administered a
     * medication. This may be as simple as swallowing a tablet or it may be a long
     * running infusion. Related resources tie this event to the authorizing
     * prescription, and the specific encounter between patient and health care
     * practitioner.
     *
     * Describes the medication dosage information details e.g. dose, rate, site,
     * route, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $dosage
     * @return static
     */
    public function setDosage(null|FHIRMedicationAdministrationDosage $dosage): self
    {
        if (null === $dosage) {
            unset($this->dosage);
            return $this;
        }
        $this->dosage = $dosage;
        return $this;
    }

    /* class_default.php:209 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationAdministration)) {
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
                    $cn = VersionTypeMap::mustGetContainedTypeClassnameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IDENTIFIER === $cen) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($ce, $config));
            } else if (self::FIELD_STATUS === $cen) {
                $type->setStatus(FHIRMedicationAdministrationStatus::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PATIENT === $cen) {
                $type->setPatient(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRACTITIONER === $cen) {
                $type->setPractitioner(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENCOUNTER === $cen) {
                $type->setEncounter(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PRESCRIPTION === $cen) {
                $type->setPrescription(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_WAS_NOT_GIVEN === $cen) {
                $type->setWasNotGiven(FHIRBoolean::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON_NOT_GIVEN === $cen) {
                $type->addReasonNotGiven(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_REASON_GIVEN === $cen) {
                $type->addReasonGiven(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EFFECTIVE_TIME_DATE_TIME === $cen) {
                $type->setEffectiveTimeDateTime(FHIRDateTime::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EFFECTIVE_TIME_PERIOD === $cen) {
                $type->setEffectiveTimePeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEDICATION_CODEABLE_CONCEPT === $cen) {
                $type->setMedicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MEDICATION_REFERENCE === $cen) {
                $type->setMedicationReference(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DEVICE === $cen) {
                $type->addDevice(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_NOTE === $cen) {
                $type->setNote(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOSAGE === $cen) {
                $type->setDosage(FHIRMedicationAdministrationDosage::xmlUnserialize($ce, $config));
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
        if (isset($attributes[self::FIELD_STATUS])) {
            if (isset($type->status)) {
                $type->status->setValue((string)$attributes[self::FIELD_STATUS]);
            } else {
                $type->setStatus((string)$attributes[self::FIELD_STATUS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_STATUS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_WAS_NOT_GIVEN])) {
            if (isset($type->wasNotGiven)) {
                $type->wasNotGiven->setValue((string)$attributes[self::FIELD_WAS_NOT_GIVEN]);
            } else {
                $type->setWasNotGiven((string)$attributes[self::FIELD_WAS_NOT_GIVEN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_WAS_NOT_GIVEN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EFFECTIVE_TIME_DATE_TIME])) {
            if (isset($type->effectiveTimeDateTime)) {
                $type->effectiveTimeDateTime->setValue((string)$attributes[self::FIELD_EFFECTIVE_TIME_DATE_TIME]);
            } else {
                $type->setEffectiveTimeDateTime((string)$attributes[self::FIELD_EFFECTIVE_TIME_DATE_TIME]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EFFECTIVE_TIME_DATE_TIME, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_NOTE])) {
            if (isset($type->note)) {
                $type->note->setValue((string)$attributes[self::FIELD_NOTE]);
            } else {
                $type->setNote((string)$attributes[self::FIELD_NOTE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_NOTE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
            $xw->openRootNode('MedicationAdministration', $this->_getSourceXMLNS());
        }
        if (isset($this->status) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_STATUS]) {
            $xw->writeAttribute(self::FIELD_STATUS, $this->status->_getValueAsString());
        }
        if (isset($this->wasNotGiven) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_WAS_NOT_GIVEN]) {
            $xw->writeAttribute(self::FIELD_WAS_NOT_GIVEN, $this->wasNotGiven->_getValueAsString());
        }
        if (isset($this->effectiveTimeDateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EFFECTIVE_TIME_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_EFFECTIVE_TIME_DATE_TIME, $this->effectiveTimeDateTime->_getValueAsString());
        }
        if (isset($this->note) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_NOTE]) {
            $xw->writeAttribute(self::FIELD_NOTE, $this->note->_getValueAsString());
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
        if (isset($this->patient)) {
            $xw->startElement(self::FIELD_PATIENT);
            $this->patient->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->practitioner)) {
            $xw->startElement(self::FIELD_PRACTITIONER);
            $this->practitioner->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->encounter)) {
            $xw->startElement(self::FIELD_ENCOUNTER);
            $this->encounter->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->prescription)) {
            $xw->startElement(self::FIELD_PRESCRIPTION);
            $this->prescription->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->wasNotGiven)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_WAS_NOT_GIVEN]
                || $this->wasNotGiven->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_WAS_NOT_GIVEN);
            $this->wasNotGiven->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_WAS_NOT_GIVEN]);
            $xw->endElement();
        }
        if (isset($this->reasonNotGiven)) {
            foreach ($this->reasonNotGiven as $v) {
                $xw->startElement(self::FIELD_REASON_NOT_GIVEN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->reasonGiven)) {
            foreach ($this->reasonGiven as $v) {
                $xw->startElement(self::FIELD_REASON_GIVEN);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->effectiveTimeDateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EFFECTIVE_TIME_DATE_TIME]
                || $this->effectiveTimeDateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EFFECTIVE_TIME_DATE_TIME);
            $this->effectiveTimeDateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EFFECTIVE_TIME_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->effectiveTimePeriod)) {
            $xw->startElement(self::FIELD_EFFECTIVE_TIME_PERIOD);
            $this->effectiveTimePeriod->xmlSerialize($xw, $config);
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
        if (isset($this->device)) {
            foreach ($this->device as $v) {
                $xw->startElement(self::FIELD_DEVICE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->note)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_NOTE]
                || $this->note->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_NOTE);
            $this->note->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_NOTE]);
            $xw->endElement();
        }
        if (isset($this->dosage)) {
            $xw->startElement(self::FIELD_DOSAGE);
            $this->dosage->xmlSerialize($xw, $config);
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
     * @param string|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationAdministration)) {
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
        if (isset($json->status)
            || isset($json->_status)
            || property_exists($json, self::FIELD_STATUS)
            || property_exists($json, self::FIELD_STATUS_EXT)) {
            $v = $json->_status ?? new \stdClass();
            $v->value = $json->status ?? null;
            $type->setStatus(FHIRMedicationAdministrationStatus::jsonUnserialize($v, $config));
        }
        if (isset($json->patient) || property_exists($json, self::FIELD_PATIENT)) {
            if (is_array($json->patient)) {
                $type->setPatient(FHIRReference::jsonUnserialize(reset($json->patient), $config));
            } else {
                $type->setPatient(FHIRReference::jsonUnserialize($json->patient, $config));
            }
        }
        if (isset($json->practitioner) || property_exists($json, self::FIELD_PRACTITIONER)) {
            if (is_array($json->practitioner)) {
                $type->setPractitioner(FHIRReference::jsonUnserialize(reset($json->practitioner), $config));
            } else {
                $type->setPractitioner(FHIRReference::jsonUnserialize($json->practitioner, $config));
            }
        }
        if (isset($json->encounter) || property_exists($json, self::FIELD_ENCOUNTER)) {
            if (is_array($json->encounter)) {
                $type->setEncounter(FHIRReference::jsonUnserialize(reset($json->encounter), $config));
            } else {
                $type->setEncounter(FHIRReference::jsonUnserialize($json->encounter, $config));
            }
        }
        if (isset($json->prescription) || property_exists($json, self::FIELD_PRESCRIPTION)) {
            if (is_array($json->prescription)) {
                $type->setPrescription(FHIRReference::jsonUnserialize(reset($json->prescription), $config));
            } else {
                $type->setPrescription(FHIRReference::jsonUnserialize($json->prescription, $config));
            }
        }
        if (isset($json->wasNotGiven)
            || isset($json->_wasNotGiven)
            || property_exists($json, self::FIELD_WAS_NOT_GIVEN)
            || property_exists($json, self::FIELD_WAS_NOT_GIVEN_EXT)) {
            $v = $json->_wasNotGiven ?? new \stdClass();
            $v->value = $json->wasNotGiven ?? null;
            $type->setWasNotGiven(FHIRBoolean::jsonUnserialize($v, $config));
        }
        if (isset($json->reasonNotGiven) || property_exists($json, self::FIELD_REASON_NOT_GIVEN)) {
            if (is_object($json->reasonNotGiven)) {
                $vals = [$json->reasonNotGiven];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REASON_NOT_GIVEN, true);
            } else {
                $vals = $json->reasonNotGiven;
            }
            foreach($vals as $v) {
                $type->addReasonNotGiven(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->reasonGiven) || property_exists($json, self::FIELD_REASON_GIVEN)) {
            if (is_object($json->reasonGiven)) {
                $vals = [$json->reasonGiven];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_REASON_GIVEN, true);
            } else {
                $vals = $json->reasonGiven;
            }
            foreach($vals as $v) {
                $type->addReasonGiven(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->effectiveTimeDateTime)
            || isset($json->_effectiveTimeDateTime)
            || property_exists($json, self::FIELD_EFFECTIVE_TIME_DATE_TIME)
            || property_exists($json, self::FIELD_EFFECTIVE_TIME_DATE_TIME_EXT)) {
            $v = $json->_effectiveTimeDateTime ?? new \stdClass();
            $v->value = $json->effectiveTimeDateTime ?? null;
            $type->setEffectiveTimeDateTime(FHIRDateTime::jsonUnserialize($v, $config));
        }
        if (isset($json->effectiveTimePeriod) || property_exists($json, self::FIELD_EFFECTIVE_TIME_PERIOD)) {
            if (is_array($json->effectiveTimePeriod)) {
                $type->setEffectiveTimePeriod(FHIRPeriod::jsonUnserialize(reset($json->effectiveTimePeriod), $config));
            } else {
                $type->setEffectiveTimePeriod(FHIRPeriod::jsonUnserialize($json->effectiveTimePeriod, $config));
            }
        }
        if (isset($json->medicationCodeableConcept) || property_exists($json, self::FIELD_MEDICATION_CODEABLE_CONCEPT)) {
            if (is_array($json->medicationCodeableConcept)) {
                $type->setMedicationCodeableConcept(FHIRCodeableConcept::jsonUnserialize(reset($json->medicationCodeableConcept), $config));
            } else {
                $type->setMedicationCodeableConcept(FHIRCodeableConcept::jsonUnserialize($json->medicationCodeableConcept, $config));
            }
        }
        if (isset($json->medicationReference) || property_exists($json, self::FIELD_MEDICATION_REFERENCE)) {
            if (is_array($json->medicationReference)) {
                $type->setMedicationReference(FHIRReference::jsonUnserialize(reset($json->medicationReference), $config));
            } else {
                $type->setMedicationReference(FHIRReference::jsonUnserialize($json->medicationReference, $config));
            }
        }
        if (isset($json->device) || property_exists($json, self::FIELD_DEVICE)) {
            if (is_object($json->device)) {
                $vals = [$json->device];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_DEVICE, true);
            } else {
                $vals = $json->device;
            }
            foreach($vals as $v) {
                $type->addDevice(FHIRReference::jsonUnserialize($v, $config));
            }
        }
        if (isset($json->note)
            || isset($json->_note)
            || property_exists($json, self::FIELD_NOTE)
            || property_exists($json, self::FIELD_NOTE_EXT)) {
            $v = $json->_note ?? new \stdClass();
            $v->value = $json->note ?? null;
            $type->setNote(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->dosage) || property_exists($json, self::FIELD_DOSAGE)) {
            if (is_array($json->dosage)) {
                $type->setDosage(FHIRMedicationAdministrationDosage::jsonUnserialize(reset($json->dosage), $config));
            } else {
                $type->setDosage(FHIRMedicationAdministrationDosage::jsonUnserialize($json->dosage, $config));
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
        if (isset($this->practitioner)) {
            $out->practitioner = $this->practitioner;
        }
        if (isset($this->encounter)) {
            $out->encounter = $this->encounter;
        }
        if (isset($this->prescription)) {
            $out->prescription = $this->prescription;
        }
        if (isset($this->wasNotGiven)) {
            if (null !== ($val = $this->wasNotGiven->getValue())) {
                $out->wasNotGiven = $val;
            }
            if ($this->wasNotGiven->_nonValueFieldDefined()) {
                $ext = $this->wasNotGiven->jsonSerialize();
                unset($ext->value);
                $out->_wasNotGiven = $ext;
            }
        }
        if (isset($this->reasonNotGiven) && [] !== $this->reasonNotGiven) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REASON_NOT_GIVEN) && 1 === count($this->reasonNotGiven)) {
                $out->reasonNotGiven = $this->reasonNotGiven[0];
            } else {
                $out->reasonNotGiven = $this->reasonNotGiven;
            }
        }
        if (isset($this->reasonGiven) && [] !== $this->reasonGiven) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_REASON_GIVEN) && 1 === count($this->reasonGiven)) {
                $out->reasonGiven = $this->reasonGiven[0];
            } else {
                $out->reasonGiven = $this->reasonGiven;
            }
        }
        if (isset($this->effectiveTimeDateTime)) {
            if (null !== ($val = $this->effectiveTimeDateTime->getValue())) {
                $out->effectiveTimeDateTime = $val;
            }
            if ($this->effectiveTimeDateTime->_nonValueFieldDefined()) {
                $ext = $this->effectiveTimeDateTime->jsonSerialize();
                unset($ext->value);
                $out->_effectiveTimeDateTime = $ext;
            }
        }
        if (isset($this->effectiveTimePeriod)) {
            $out->effectiveTimePeriod = $this->effectiveTimePeriod;
        }
        if (isset($this->medicationCodeableConcept)) {
            $out->medicationCodeableConcept = $this->medicationCodeableConcept;
        }
        if (isset($this->medicationReference)) {
            $out->medicationReference = $this->medicationReference;
        }
        if (isset($this->device) && [] !== $this->device) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_DEVICE) && 1 === count($this->device)) {
                $out->device = $this->device[0];
            } else {
                $out->device = $this->device;
            }
        }
        if (isset($this->note)) {
            if (null !== ($val = $this->note->getValue())) {
                $out->note = $val;
            }
            if ($this->note->_nonValueFieldDefined()) {
                $ext = $this->note->jsonSerialize();
                unset($ext->value);
                $out->_note = $ext;
            }
        }
        if (isset($this->dosage)) {
            $out->dosage = $this->dosage;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}