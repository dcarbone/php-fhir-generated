<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 3rd, 2024 22:35+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet;

/**
 * Class FHIRResourceInline
 * @package \DCarbone\PHPFHIRGenerated\DSTU1
 */
class FHIRResourceInline implements PHPFHIRCommentContainerInterface, PHPFHIRTypeInterface
{
    use PHPFHIRCommentContainerTrait;
    use PHPFHIRValidationAssertionsTrait;
    use PHPFHIRChangeTrackingTrait;
    use PHPFHIRSourceXmlNamespaceTrait;

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESOURCE_DOT_INLINE;

    const FIELD_BINARY = 'Binary';
    const FIELD_PROVENANCE = 'Provenance';
    const FIELD_CONDITION = 'Condition';
    const FIELD_CARE_PLAN = 'CarePlan';
    const FIELD_SUPPLY = 'Supply';
    const FIELD_DEVICE = 'Device';
    const FIELD_QUERY = 'Query';
    const FIELD_ORDER = 'Order';
    const FIELD_ORGANIZATION = 'Organization';
    const FIELD_PROCEDURE = 'Procedure';
    const FIELD_SUBSTANCE = 'Substance';
    const FIELD_DIAGNOSTIC_REPORT = 'DiagnosticReport';
    const FIELD_GROUP = 'Group';
    const FIELD_VALUE_SET = 'ValueSet';
    const FIELD_MEDICATION = 'Medication';
    const FIELD_MESSAGE_HEADER = 'MessageHeader';
    const FIELD_IMMUNIZATION_RECOMMENDATION = 'ImmunizationRecommendation';
    const FIELD_DOCUMENT_MANIFEST = 'DocumentManifest';
    const FIELD_MEDICATION_DISPENSE = 'MedicationDispense';
    const FIELD_MEDICATION_PRESCRIPTION = 'MedicationPrescription';
    const FIELD_MEDICATION_ADMINISTRATION = 'MedicationAdministration';
    const FIELD_ENCOUNTER = 'Encounter';
    const FIELD_SECURITY_EVENT = 'SecurityEvent';
    const FIELD_MEDICATION_STATEMENT = 'MedicationStatement';
    const FIELD_LIST = 'List';
    const FIELD_QUESTIONNAIRE = 'Questionnaire';
    const FIELD_COMPOSITION = 'Composition';
    const FIELD_DEVICE_OBSERVATION_REPORT = 'DeviceObservationReport';
    const FIELD_OPERATION_OUTCOME = 'OperationOutcome';
    const FIELD_CONFORMANCE = 'Conformance';
    const FIELD_MEDIA = 'Media';
    const FIELD_FAMILY_HISTORY = 'FamilyHistory';
    const FIELD_OTHER = 'Other';
    const FIELD_PROFILE = 'Profile';
    const FIELD_LOCATION = 'Location';
    const FIELD_OBSERVATION = 'Observation';
    const FIELD_ALLERGY_INTOLERANCE = 'AllergyIntolerance';
    const FIELD_DOCUMENT_REFERENCE = 'DocumentReference';
    const FIELD_IMMUNIZATION = 'Immunization';
    const FIELD_RELATED_PERSON = 'RelatedPerson';
    const FIELD_SPECIMEN = 'Specimen';
    const FIELD_ORDER_RESPONSE = 'OrderResponse';
    const FIELD_ALERT = 'Alert';
    const FIELD_CONCEPT_MAP = 'ConceptMap';
    const FIELD_PATIENT = 'Patient';
    const FIELD_PRACTITIONER = 'Practitioner';
    const FIELD_ADVERSE_REACTION = 'AdverseReaction';
    const FIELD_IMAGING_STUDY = 'ImagingStudy';
    const FIELD_DIAGNOSTIC_ORDER = 'DiagnosticOrder';

    /**
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary
     */
    protected null|FHIRBinary $Binary = null;
    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance
     */
    protected null|FHIRProvenance $Provenance = null;
    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition
     */
    protected null|FHIRCondition $Condition = null;
    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     */
    protected null|FHIRCarePlan $CarePlan = null;
    /**
     * A supply - a request for something, and provision of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply
     */
    protected null|FHIRSupply $Supply = null;
    /**
     * This resource identifies an instance of a manufactured thing that is used in the
     * provision of healthcare without being substantially changed through that
     * activity. The device may be a machine, an insert, a computer, an application,
     * etc. This includes durable (reusable) medical equipment as well as disposable
     * equipment used for diagnostic, treatment, and research for healthcare and public
     * health.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    protected null|FHIRDevice $Device = null;
    /**
     * A description of a query with a set of parameters.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
     */
    protected null|FHIRQuery $Query = null;
    /**
     * A request to perform an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder
     */
    protected null|FHIROrder $Order = null;
    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization
     */
    protected null|FHIROrganization $Organization = null;
    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    protected null|FHIRProcedure $Procedure = null;
    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance
     */
    protected null|FHIRSubstance $Substance = null;
    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    protected null|FHIRDiagnosticReport $DiagnosticReport = null;
    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized. I.e. A collection of entities that isn't an Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    protected null|FHIRGroup $Group = null;
    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet
     */
    protected null|FHIRValueSet $ValueSet = null;
    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    protected null|FHIRMedication $Medication = null;
    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader
     */
    protected null|FHIRMessageHeader $MessageHeader = null;
    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation
     */
    protected null|FHIRImmunizationRecommendation $ImmunizationRecommendation = null;
    /**
     * A manifest that defines a set of documents.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest
     */
    protected null|FHIRDocumentManifest $DocumentManifest = null;
    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense
     */
    protected null|FHIRMedicationDispense $MedicationDispense = null;
    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription
     */
    protected null|FHIRMedicationPrescription $MedicationPrescription = null;
    /**
     * Describes the event of a patient being given a dose of a medication. This may be
     * as simple as swallowing a tablet or it may be a long running infusion. Related
     * resources tie this event to the authorizing prescription, and the specific
     * encounter between patient and health care practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration
     */
    protected null|FHIRMedicationAdministration $MedicationAdministration = null;
    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter
     */
    protected null|FHIREncounter $Encounter = null;
    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent
     */
    protected null|FHIRSecurityEvent $SecurityEvent = null;
    /**
     * A record of medication being taken by a patient, or that the medication has been
     * given to a patient where the record is the result of a report from the patient
     * or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement
     */
    protected null|FHIRMedicationStatement $MedicationStatement = null;
    /**
     * A set of information summarized from a list of other resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList
     */
    protected null|FHIRList $List = null;
    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire
     */
    protected null|FHIRQuestionnaire $Questionnaire = null;
    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition
     */
    protected null|FHIRComposition $Composition = null;
    /**
     * Describes the data produced by a device at a point in time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    protected null|FHIRDeviceObservationReport $DeviceObservationReport = null;
    /**
     * A collection of error, warning or information messages that result from a system
     * action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome
     */
    protected null|FHIROperationOutcome $OperationOutcome = null;
    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance
     */
    protected null|FHIRConformance $Conformance = null;
    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia
     */
    protected null|FHIRMedia $Media = null;
    /**
     * Significant health events and conditions for people related to the subject
     * relevant in the context of care for the subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory
     */
    protected null|FHIRFamilyHistory $FamilyHistory = null;
    /**
     * Other is a conformant for handling resource concepts not yet defined for FHIR or
     * outside HL7's scope of interest.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther
     */
    protected null|FHIROther $Other = null;
    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile
     */
    protected null|FHIRProfile $Profile = null;
    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation
     */
    protected null|FHIRLocation $Location = null;
    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation
     */
    protected null|FHIRObservation $Observation = null;
    /**
     * Indicates the patient has a susceptibility to an adverse reaction upon exposure
     * to a specified substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance
     */
    protected null|FHIRAllergyIntolerance $AllergyIntolerance = null;
    /**
     * A reference to a document.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference
     */
    protected null|FHIRDocumentReference $DocumentReference = null;
    /**
     * Immunization event information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization
     */
    protected null|FHIRImmunization $Immunization = null;
    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson
     */
    protected null|FHIRRelatedPerson $RelatedPerson = null;
    /**
     * Sample for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen
     */
    protected null|FHIRSpecimen $Specimen = null;
    /**
     * A response to an order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    protected null|FHIROrderResponse $OrderResponse = null;
    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert
     */
    protected null|FHIRAlert $Alert = null;
    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap
     */
    protected null|FHIRConceptMap $ConceptMap = null;
    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient
     */
    protected null|FHIRPatient $Patient = null;
    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner
     */
    protected null|FHIRPractitioner $Practitioner = null;
    /**
     * Records an unexpected reaction suspected to be related to the exposure of the
     * reaction subject to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction
     */
    protected null|FHIRAdverseReaction $AdverseReaction = null;
    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy
     */
    protected null|FHIRImagingStudy $ImagingStudy = null;
    /**
     * A request for a diagnostic investigation service to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder
     */
    protected null|FHIRDiagnosticOrder $DiagnosticOrder = null;

    /**
     * Validation map for fields in type Resource.Inline
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /** @var array */
    private array $_primitiveXmlLocations = [];

    /**
     * FHIRResourceInline Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }

        if (isset($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
            if (is_array($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
                $this->_setFHIRComments($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS]);
            } elseif (is_string($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
                $this->_addFHIRComment($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS]);
            }
        }
        if (array_key_exists(self::FIELD_BINARY, $data)) {
            if ($data[self::FIELD_BINARY] instanceof FHIRBinary) {
                $this->setBinary($data[self::FIELD_BINARY]);
            } else {
                $this->setBinary(new FHIRBinary($data[self::FIELD_BINARY]));
            }
        }
        if (array_key_exists(self::FIELD_PROVENANCE, $data)) {
            if ($data[self::FIELD_PROVENANCE] instanceof FHIRProvenance) {
                $this->setProvenance($data[self::FIELD_PROVENANCE]);
            } else {
                $this->setProvenance(new FHIRProvenance($data[self::FIELD_PROVENANCE]));
            }
        }
        if (array_key_exists(self::FIELD_CONDITION, $data)) {
            if ($data[self::FIELD_CONDITION] instanceof FHIRCondition) {
                $this->setCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->setCondition(new FHIRCondition($data[self::FIELD_CONDITION]));
            }
        }
        if (array_key_exists(self::FIELD_CARE_PLAN, $data)) {
            if ($data[self::FIELD_CARE_PLAN] instanceof FHIRCarePlan) {
                $this->setCarePlan($data[self::FIELD_CARE_PLAN]);
            } else {
                $this->setCarePlan(new FHIRCarePlan($data[self::FIELD_CARE_PLAN]));
            }
        }
        if (array_key_exists(self::FIELD_SUPPLY, $data)) {
            if ($data[self::FIELD_SUPPLY] instanceof FHIRSupply) {
                $this->setSupply($data[self::FIELD_SUPPLY]);
            } else {
                $this->setSupply(new FHIRSupply($data[self::FIELD_SUPPLY]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE, $data)) {
            if ($data[self::FIELD_DEVICE] instanceof FHIRDevice) {
                $this->setDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->setDevice(new FHIRDevice($data[self::FIELD_DEVICE]));
            }
        }
        if (array_key_exists(self::FIELD_QUERY, $data)) {
            if ($data[self::FIELD_QUERY] instanceof FHIRQuery) {
                $this->setQuery($data[self::FIELD_QUERY]);
            } else {
                $this->setQuery(new FHIRQuery($data[self::FIELD_QUERY]));
            }
        }
        if (array_key_exists(self::FIELD_ORDER, $data)) {
            if ($data[self::FIELD_ORDER] instanceof FHIROrder) {
                $this->setOrder($data[self::FIELD_ORDER]);
            } else {
                $this->setOrder(new FHIROrder($data[self::FIELD_ORDER]));
            }
        }
        if (array_key_exists(self::FIELD_ORGANIZATION, $data)) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIROrganization) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIROrganization($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_PROCEDURE, $data)) {
            if ($data[self::FIELD_PROCEDURE] instanceof FHIRProcedure) {
                $this->setProcedure($data[self::FIELD_PROCEDURE]);
            } else {
                $this->setProcedure(new FHIRProcedure($data[self::FIELD_PROCEDURE]));
            }
        }
        if (array_key_exists(self::FIELD_SUBSTANCE, $data)) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRSubstance) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRSubstance($data[self::FIELD_SUBSTANCE]));
            }
        }
        if (array_key_exists(self::FIELD_DIAGNOSTIC_REPORT, $data)) {
            if ($data[self::FIELD_DIAGNOSTIC_REPORT] instanceof FHIRDiagnosticReport) {
                $this->setDiagnosticReport($data[self::FIELD_DIAGNOSTIC_REPORT]);
            } else {
                $this->setDiagnosticReport(new FHIRDiagnosticReport($data[self::FIELD_DIAGNOSTIC_REPORT]));
            }
        }
        if (array_key_exists(self::FIELD_GROUP, $data)) {
            if ($data[self::FIELD_GROUP] instanceof FHIRGroup) {
                $this->setGroup($data[self::FIELD_GROUP]);
            } else {
                $this->setGroup(new FHIRGroup($data[self::FIELD_GROUP]));
            }
        }
        if (array_key_exists(self::FIELD_VALUE_SET, $data)) {
            if ($data[self::FIELD_VALUE_SET] instanceof FHIRValueSet) {
                $this->setValueSet($data[self::FIELD_VALUE_SET]);
            } else {
                $this->setValueSet(new FHIRValueSet($data[self::FIELD_VALUE_SET]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION, $data)) {
            if ($data[self::FIELD_MEDICATION] instanceof FHIRMedication) {
                $this->setMedication($data[self::FIELD_MEDICATION]);
            } else {
                $this->setMedication(new FHIRMedication($data[self::FIELD_MEDICATION]));
            }
        }
        if (array_key_exists(self::FIELD_MESSAGE_HEADER, $data)) {
            if ($data[self::FIELD_MESSAGE_HEADER] instanceof FHIRMessageHeader) {
                $this->setMessageHeader($data[self::FIELD_MESSAGE_HEADER]);
            } else {
                $this->setMessageHeader(new FHIRMessageHeader($data[self::FIELD_MESSAGE_HEADER]));
            }
        }
        if (array_key_exists(self::FIELD_IMMUNIZATION_RECOMMENDATION, $data)) {
            if ($data[self::FIELD_IMMUNIZATION_RECOMMENDATION] instanceof FHIRImmunizationRecommendation) {
                $this->setImmunizationRecommendation($data[self::FIELD_IMMUNIZATION_RECOMMENDATION]);
            } else {
                $this->setImmunizationRecommendation(new FHIRImmunizationRecommendation($data[self::FIELD_IMMUNIZATION_RECOMMENDATION]));
            }
        }
        if (array_key_exists(self::FIELD_DOCUMENT_MANIFEST, $data)) {
            if ($data[self::FIELD_DOCUMENT_MANIFEST] instanceof FHIRDocumentManifest) {
                $this->setDocumentManifest($data[self::FIELD_DOCUMENT_MANIFEST]);
            } else {
                $this->setDocumentManifest(new FHIRDocumentManifest($data[self::FIELD_DOCUMENT_MANIFEST]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_DISPENSE, $data)) {
            if ($data[self::FIELD_MEDICATION_DISPENSE] instanceof FHIRMedicationDispense) {
                $this->setMedicationDispense($data[self::FIELD_MEDICATION_DISPENSE]);
            } else {
                $this->setMedicationDispense(new FHIRMedicationDispense($data[self::FIELD_MEDICATION_DISPENSE]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_PRESCRIPTION, $data)) {
            if ($data[self::FIELD_MEDICATION_PRESCRIPTION] instanceof FHIRMedicationPrescription) {
                $this->setMedicationPrescription($data[self::FIELD_MEDICATION_PRESCRIPTION]);
            } else {
                $this->setMedicationPrescription(new FHIRMedicationPrescription($data[self::FIELD_MEDICATION_PRESCRIPTION]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_ADMINISTRATION, $data)) {
            if ($data[self::FIELD_MEDICATION_ADMINISTRATION] instanceof FHIRMedicationAdministration) {
                $this->setMedicationAdministration($data[self::FIELD_MEDICATION_ADMINISTRATION]);
            } else {
                $this->setMedicationAdministration(new FHIRMedicationAdministration($data[self::FIELD_MEDICATION_ADMINISTRATION]));
            }
        }
        if (array_key_exists(self::FIELD_ENCOUNTER, $data)) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIREncounter) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIREncounter($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (array_key_exists(self::FIELD_SECURITY_EVENT, $data)) {
            if ($data[self::FIELD_SECURITY_EVENT] instanceof FHIRSecurityEvent) {
                $this->setSecurityEvent($data[self::FIELD_SECURITY_EVENT]);
            } else {
                $this->setSecurityEvent(new FHIRSecurityEvent($data[self::FIELD_SECURITY_EVENT]));
            }
        }
        if (array_key_exists(self::FIELD_MEDICATION_STATEMENT, $data)) {
            if ($data[self::FIELD_MEDICATION_STATEMENT] instanceof FHIRMedicationStatement) {
                $this->setMedicationStatement($data[self::FIELD_MEDICATION_STATEMENT]);
            } else {
                $this->setMedicationStatement(new FHIRMedicationStatement($data[self::FIELD_MEDICATION_STATEMENT]));
            }
        }
        if (array_key_exists(self::FIELD_LIST, $data)) {
            if ($data[self::FIELD_LIST] instanceof FHIRList) {
                $this->setList($data[self::FIELD_LIST]);
            } else {
                $this->setList(new FHIRList($data[self::FIELD_LIST]));
            }
        }
        if (array_key_exists(self::FIELD_QUESTIONNAIRE, $data)) {
            if ($data[self::FIELD_QUESTIONNAIRE] instanceof FHIRQuestionnaire) {
                $this->setQuestionnaire($data[self::FIELD_QUESTIONNAIRE]);
            } else {
                $this->setQuestionnaire(new FHIRQuestionnaire($data[self::FIELD_QUESTIONNAIRE]));
            }
        }
        if (array_key_exists(self::FIELD_COMPOSITION, $data)) {
            if ($data[self::FIELD_COMPOSITION] instanceof FHIRComposition) {
                $this->setComposition($data[self::FIELD_COMPOSITION]);
            } else {
                $this->setComposition(new FHIRComposition($data[self::FIELD_COMPOSITION]));
            }
        }
        if (array_key_exists(self::FIELD_DEVICE_OBSERVATION_REPORT, $data)) {
            if ($data[self::FIELD_DEVICE_OBSERVATION_REPORT] instanceof FHIRDeviceObservationReport) {
                $this->setDeviceObservationReport($data[self::FIELD_DEVICE_OBSERVATION_REPORT]);
            } else {
                $this->setDeviceObservationReport(new FHIRDeviceObservationReport($data[self::FIELD_DEVICE_OBSERVATION_REPORT]));
            }
        }
        if (array_key_exists(self::FIELD_OPERATION_OUTCOME, $data)) {
            if ($data[self::FIELD_OPERATION_OUTCOME] instanceof FHIROperationOutcome) {
                $this->setOperationOutcome($data[self::FIELD_OPERATION_OUTCOME]);
            } else {
                $this->setOperationOutcome(new FHIROperationOutcome($data[self::FIELD_OPERATION_OUTCOME]));
            }
        }
        if (array_key_exists(self::FIELD_CONFORMANCE, $data)) {
            if ($data[self::FIELD_CONFORMANCE] instanceof FHIRConformance) {
                $this->setConformance($data[self::FIELD_CONFORMANCE]);
            } else {
                $this->setConformance(new FHIRConformance($data[self::FIELD_CONFORMANCE]));
            }
        }
        if (array_key_exists(self::FIELD_MEDIA, $data)) {
            if ($data[self::FIELD_MEDIA] instanceof FHIRMedia) {
                $this->setMedia($data[self::FIELD_MEDIA]);
            } else {
                $this->setMedia(new FHIRMedia($data[self::FIELD_MEDIA]));
            }
        }
        if (array_key_exists(self::FIELD_FAMILY_HISTORY, $data)) {
            if ($data[self::FIELD_FAMILY_HISTORY] instanceof FHIRFamilyHistory) {
                $this->setFamilyHistory($data[self::FIELD_FAMILY_HISTORY]);
            } else {
                $this->setFamilyHistory(new FHIRFamilyHistory($data[self::FIELD_FAMILY_HISTORY]));
            }
        }
        if (array_key_exists(self::FIELD_OTHER, $data)) {
            if ($data[self::FIELD_OTHER] instanceof FHIROther) {
                $this->setOther($data[self::FIELD_OTHER]);
            } else {
                $this->setOther(new FHIROther($data[self::FIELD_OTHER]));
            }
        }
        if (array_key_exists(self::FIELD_PROFILE, $data)) {
            if ($data[self::FIELD_PROFILE] instanceof FHIRProfile) {
                $this->setProfile($data[self::FIELD_PROFILE]);
            } else {
                $this->setProfile(new FHIRProfile($data[self::FIELD_PROFILE]));
            }
        }
        if (array_key_exists(self::FIELD_LOCATION, $data)) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRLocation) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRLocation($data[self::FIELD_LOCATION]));
            }
        }
        if (array_key_exists(self::FIELD_OBSERVATION, $data)) {
            if ($data[self::FIELD_OBSERVATION] instanceof FHIRObservation) {
                $this->setObservation($data[self::FIELD_OBSERVATION]);
            } else {
                $this->setObservation(new FHIRObservation($data[self::FIELD_OBSERVATION]));
            }
        }
        if (array_key_exists(self::FIELD_ALLERGY_INTOLERANCE, $data)) {
            if ($data[self::FIELD_ALLERGY_INTOLERANCE] instanceof FHIRAllergyIntolerance) {
                $this->setAllergyIntolerance($data[self::FIELD_ALLERGY_INTOLERANCE]);
            } else {
                $this->setAllergyIntolerance(new FHIRAllergyIntolerance($data[self::FIELD_ALLERGY_INTOLERANCE]));
            }
        }
        if (array_key_exists(self::FIELD_DOCUMENT_REFERENCE, $data)) {
            if ($data[self::FIELD_DOCUMENT_REFERENCE] instanceof FHIRDocumentReference) {
                $this->setDocumentReference($data[self::FIELD_DOCUMENT_REFERENCE]);
            } else {
                $this->setDocumentReference(new FHIRDocumentReference($data[self::FIELD_DOCUMENT_REFERENCE]));
            }
        }
        if (array_key_exists(self::FIELD_IMMUNIZATION, $data)) {
            if ($data[self::FIELD_IMMUNIZATION] instanceof FHIRImmunization) {
                $this->setImmunization($data[self::FIELD_IMMUNIZATION]);
            } else {
                $this->setImmunization(new FHIRImmunization($data[self::FIELD_IMMUNIZATION]));
            }
        }
        if (array_key_exists(self::FIELD_RELATED_PERSON, $data)) {
            if ($data[self::FIELD_RELATED_PERSON] instanceof FHIRRelatedPerson) {
                $this->setRelatedPerson($data[self::FIELD_RELATED_PERSON]);
            } else {
                $this->setRelatedPerson(new FHIRRelatedPerson($data[self::FIELD_RELATED_PERSON]));
            }
        }
        if (array_key_exists(self::FIELD_SPECIMEN, $data)) {
            if ($data[self::FIELD_SPECIMEN] instanceof FHIRSpecimen) {
                $this->setSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->setSpecimen(new FHIRSpecimen($data[self::FIELD_SPECIMEN]));
            }
        }
        if (array_key_exists(self::FIELD_ORDER_RESPONSE, $data)) {
            if ($data[self::FIELD_ORDER_RESPONSE] instanceof FHIROrderResponse) {
                $this->setOrderResponse($data[self::FIELD_ORDER_RESPONSE]);
            } else {
                $this->setOrderResponse(new FHIROrderResponse($data[self::FIELD_ORDER_RESPONSE]));
            }
        }
        if (array_key_exists(self::FIELD_ALERT, $data)) {
            if ($data[self::FIELD_ALERT] instanceof FHIRAlert) {
                $this->setAlert($data[self::FIELD_ALERT]);
            } else {
                $this->setAlert(new FHIRAlert($data[self::FIELD_ALERT]));
            }
        }
        if (array_key_exists(self::FIELD_CONCEPT_MAP, $data)) {
            if ($data[self::FIELD_CONCEPT_MAP] instanceof FHIRConceptMap) {
                $this->setConceptMap($data[self::FIELD_CONCEPT_MAP]);
            } else {
                $this->setConceptMap(new FHIRConceptMap($data[self::FIELD_CONCEPT_MAP]));
            }
        }
        if (array_key_exists(self::FIELD_PATIENT, $data)) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRPatient) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRPatient($data[self::FIELD_PATIENT]));
            }
        }
        if (array_key_exists(self::FIELD_PRACTITIONER, $data)) {
            if ($data[self::FIELD_PRACTITIONER] instanceof FHIRPractitioner) {
                $this->setPractitioner($data[self::FIELD_PRACTITIONER]);
            } else {
                $this->setPractitioner(new FHIRPractitioner($data[self::FIELD_PRACTITIONER]));
            }
        }
        if (array_key_exists(self::FIELD_ADVERSE_REACTION, $data)) {
            if ($data[self::FIELD_ADVERSE_REACTION] instanceof FHIRAdverseReaction) {
                $this->setAdverseReaction($data[self::FIELD_ADVERSE_REACTION]);
            } else {
                $this->setAdverseReaction(new FHIRAdverseReaction($data[self::FIELD_ADVERSE_REACTION]));
            }
        }
        if (array_key_exists(self::FIELD_IMAGING_STUDY, $data)) {
            if ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRImagingStudy) {
                $this->setImagingStudy($data[self::FIELD_IMAGING_STUDY]);
            } else {
                $this->setImagingStudy(new FHIRImagingStudy($data[self::FIELD_IMAGING_STUDY]));
            }
        }
        if (array_key_exists(self::FIELD_DIAGNOSTIC_ORDER, $data)) {
            if ($data[self::FIELD_DIAGNOSTIC_ORDER] instanceof FHIRDiagnosticOrder) {
                $this->setDiagnosticOrder($data[self::FIELD_DIAGNOSTIC_ORDER]);
            } else {
                $this->setDiagnosticOrder(new FHIRDiagnosticOrder($data[self::FIELD_DIAGNOSTIC_ORDER]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary
     */
    public function getBinary(): null|FHIRBinary
    {
        return $this->Binary;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary $Binary
     * @return static
     */
    public function setBinary(null|FHIRBinary $Binary = null): self
    {
        if (null === $Binary) {
            $Binary = new FHIRBinary();
        }
        $this->_trackValueSet($this->Binary, $Binary);
        $this->Binary = $Binary;
        return $this;
    }

    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance
     */
    public function getProvenance(): null|FHIRProvenance
    {
        return $this->Provenance;
    }

    /**
     * Provenance information that describes the activity that led to the creation of a
     * set of resources. This information can be used to help determine their
     * reliability or trace where the information in them came from. The focus of the
     * provenance resource is record keeping, audit and traceability, and not explicit
     * statements of clinical significance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance $Provenance
     * @return static
     */
    public function setProvenance(null|FHIRProvenance $Provenance = null): self
    {
        if (null === $Provenance) {
            $Provenance = new FHIRProvenance();
        }
        $this->_trackValueSet($this->Provenance, $Provenance);
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition
     */
    public function getCondition(): null|FHIRCondition
    {
        return $this->Condition;
    }

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition $Condition
     * @return static
     */
    public function setCondition(null|FHIRCondition $Condition = null): self
    {
        if (null === $Condition) {
            $Condition = new FHIRCondition();
        }
        $this->_trackValueSet($this->Condition, $Condition);
        $this->Condition = $Condition;
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     */
    public function getCarePlan(): null|FHIRCarePlan
    {
        return $this->CarePlan;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan $CarePlan
     * @return static
     */
    public function setCarePlan(null|FHIRCarePlan $CarePlan = null): self
    {
        if (null === $CarePlan) {
            $CarePlan = new FHIRCarePlan();
        }
        $this->_trackValueSet($this->CarePlan, $CarePlan);
        $this->CarePlan = $CarePlan;
        return $this;
    }

    /**
     * A supply - a request for something, and provision of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply
     */
    public function getSupply(): null|FHIRSupply
    {
        return $this->Supply;
    }

    /**
     * A supply - a request for something, and provision of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply $Supply
     * @return static
     */
    public function setSupply(null|FHIRSupply $Supply = null): self
    {
        if (null === $Supply) {
            $Supply = new FHIRSupply();
        }
        $this->_trackValueSet($this->Supply, $Supply);
        $this->Supply = $Supply;
        return $this;
    }

    /**
     * This resource identifies an instance of a manufactured thing that is used in the
     * provision of healthcare without being substantially changed through that
     * activity. The device may be a machine, an insert, a computer, an application,
     * etc. This includes durable (reusable) medical equipment as well as disposable
     * equipment used for diagnostic, treatment, and research for healthcare and public
     * health.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice
     */
    public function getDevice(): null|FHIRDevice
    {
        return $this->Device;
    }

    /**
     * This resource identifies an instance of a manufactured thing that is used in the
     * provision of healthcare without being substantially changed through that
     * activity. The device may be a machine, an insert, a computer, an application,
     * etc. This includes durable (reusable) medical equipment as well as disposable
     * equipment used for diagnostic, treatment, and research for healthcare and public
     * health.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice $Device
     * @return static
     */
    public function setDevice(null|FHIRDevice $Device = null): self
    {
        if (null === $Device) {
            $Device = new FHIRDevice();
        }
        $this->_trackValueSet($this->Device, $Device);
        $this->Device = $Device;
        return $this;
    }

    /**
     * A description of a query with a set of parameters.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
     */
    public function getQuery(): null|FHIRQuery
    {
        return $this->Query;
    }

    /**
     * A description of a query with a set of parameters.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery $Query
     * @return static
     */
    public function setQuery(null|FHIRQuery $Query = null): self
    {
        if (null === $Query) {
            $Query = new FHIRQuery();
        }
        $this->_trackValueSet($this->Query, $Query);
        $this->Query = $Query;
        return $this;
    }

    /**
     * A request to perform an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder
     */
    public function getOrder(): null|FHIROrder
    {
        return $this->Order;
    }

    /**
     * A request to perform an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder $Order
     * @return static
     */
    public function setOrder(null|FHIROrder $Order = null): self
    {
        if (null === $Order) {
            $Order = new FHIROrder();
        }
        $this->_trackValueSet($this->Order, $Order);
        $this->Order = $Order;
        return $this;
    }

    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization
     */
    public function getOrganization(): null|FHIROrganization
    {
        return $this->Organization;
    }

    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization $Organization
     * @return static
     */
    public function setOrganization(null|FHIROrganization $Organization = null): self
    {
        if (null === $Organization) {
            $Organization = new FHIROrganization();
        }
        $this->_trackValueSet($this->Organization, $Organization);
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function getProcedure(): null|FHIRProcedure
    {
        return $this->Procedure;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure $Procedure
     * @return static
     */
    public function setProcedure(null|FHIRProcedure $Procedure = null): self
    {
        if (null === $Procedure) {
            $Procedure = new FHIRProcedure();
        }
        $this->_trackValueSet($this->Procedure, $Procedure);
        $this->Procedure = $Procedure;
        return $this;
    }

    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance
     */
    public function getSubstance(): null|FHIRSubstance
    {
        return $this->Substance;
    }

    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance $Substance
     * @return static
     */
    public function setSubstance(null|FHIRSubstance $Substance = null): self
    {
        if (null === $Substance) {
            $Substance = new FHIRSubstance();
        }
        $this->_trackValueSet($this->Substance, $Substance);
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport
     */
    public function getDiagnosticReport(): null|FHIRDiagnosticReport
    {
        return $this->DiagnosticReport;
    }

    /**
     * The findings and interpretation of diagnostic tests performed on patients,
     * groups of patients, devices, and locations, and/or specimens derived from these.
     * The report includes clinical context such as requesting and provider
     * information, and some mix of atomic results, images, textual and coded
     * interpretation, and formatted representation of diagnostic reports.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport $DiagnosticReport
     * @return static
     */
    public function setDiagnosticReport(null|FHIRDiagnosticReport $DiagnosticReport = null): self
    {
        if (null === $DiagnosticReport) {
            $DiagnosticReport = new FHIRDiagnosticReport();
        }
        $this->_trackValueSet($this->DiagnosticReport, $DiagnosticReport);
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized. I.e. A collection of entities that isn't an Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    public function getGroup(): null|FHIRGroup
    {
        return $this->Group;
    }

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized. I.e. A collection of entities that isn't an Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup $Group
     * @return static
     */
    public function setGroup(null|FHIRGroup $Group = null): self
    {
        if (null === $Group) {
            $Group = new FHIRGroup();
        }
        $this->_trackValueSet($this->Group, $Group);
        $this->Group = $Group;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet
     */
    public function getValueSet(): null|FHIRValueSet
    {
        return $this->ValueSet;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet $ValueSet
     * @return static
     */
    public function setValueSet(null|FHIRValueSet $ValueSet = null): self
    {
        if (null === $ValueSet) {
            $ValueSet = new FHIRValueSet();
        }
        $this->_trackValueSet($this->ValueSet, $ValueSet);
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public function getMedication(): null|FHIRMedication
    {
        return $this->Medication;
    }

    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication $Medication
     * @return static
     */
    public function setMedication(null|FHIRMedication $Medication = null): self
    {
        if (null === $Medication) {
            $Medication = new FHIRMedication();
        }
        $this->_trackValueSet($this->Medication, $Medication);
        $this->Medication = $Medication;
        return $this;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader
     */
    public function getMessageHeader(): null|FHIRMessageHeader
    {
        return $this->MessageHeader;
    }

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader $MessageHeader
     * @return static
     */
    public function setMessageHeader(null|FHIRMessageHeader $MessageHeader = null): self
    {
        if (null === $MessageHeader) {
            $MessageHeader = new FHIRMessageHeader();
        }
        $this->_trackValueSet($this->MessageHeader, $MessageHeader);
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation(): null|FHIRImmunizationRecommendation
    {
        return $this->ImmunizationRecommendation;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation $ImmunizationRecommendation
     * @return static
     */
    public function setImmunizationRecommendation(null|FHIRImmunizationRecommendation $ImmunizationRecommendation = null): self
    {
        if (null === $ImmunizationRecommendation) {
            $ImmunizationRecommendation = new FHIRImmunizationRecommendation();
        }
        $this->_trackValueSet($this->ImmunizationRecommendation, $ImmunizationRecommendation);
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * A manifest that defines a set of documents.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest
     */
    public function getDocumentManifest(): null|FHIRDocumentManifest
    {
        return $this->DocumentManifest;
    }

    /**
     * A manifest that defines a set of documents.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest $DocumentManifest
     * @return static
     */
    public function setDocumentManifest(null|FHIRDocumentManifest $DocumentManifest = null): self
    {
        if (null === $DocumentManifest) {
            $DocumentManifest = new FHIRDocumentManifest();
        }
        $this->_trackValueSet($this->DocumentManifest, $DocumentManifest);
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense
     */
    public function getMedicationDispense(): null|FHIRMedicationDispense
    {
        return $this->MedicationDispense;
    }

    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense $MedicationDispense
     * @return static
     */
    public function setMedicationDispense(null|FHIRMedicationDispense $MedicationDispense = null): self
    {
        if (null === $MedicationDispense) {
            $MedicationDispense = new FHIRMedicationDispense();
        }
        $this->_trackValueSet($this->MedicationDispense, $MedicationDispense);
        $this->MedicationDispense = $MedicationDispense;
        return $this;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription
     */
    public function getMedicationPrescription(): null|FHIRMedicationPrescription
    {
        return $this->MedicationPrescription;
    }

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription $MedicationPrescription
     * @return static
     */
    public function setMedicationPrescription(null|FHIRMedicationPrescription $MedicationPrescription = null): self
    {
        if (null === $MedicationPrescription) {
            $MedicationPrescription = new FHIRMedicationPrescription();
        }
        $this->_trackValueSet($this->MedicationPrescription, $MedicationPrescription);
        $this->MedicationPrescription = $MedicationPrescription;
        return $this;
    }

    /**
     * Describes the event of a patient being given a dose of a medication. This may be
     * as simple as swallowing a tablet or it may be a long running infusion. Related
     * resources tie this event to the authorizing prescription, and the specific
     * encounter between patient and health care practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration
     */
    public function getMedicationAdministration(): null|FHIRMedicationAdministration
    {
        return $this->MedicationAdministration;
    }

    /**
     * Describes the event of a patient being given a dose of a medication. This may be
     * as simple as swallowing a tablet or it may be a long running infusion. Related
     * resources tie this event to the authorizing prescription, and the specific
     * encounter between patient and health care practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration $MedicationAdministration
     * @return static
     */
    public function setMedicationAdministration(null|FHIRMedicationAdministration $MedicationAdministration = null): self
    {
        if (null === $MedicationAdministration) {
            $MedicationAdministration = new FHIRMedicationAdministration();
        }
        $this->_trackValueSet($this->MedicationAdministration, $MedicationAdministration);
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter
     */
    public function getEncounter(): null|FHIREncounter
    {
        return $this->Encounter;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter $Encounter
     * @return static
     */
    public function setEncounter(null|FHIREncounter $Encounter = null): self
    {
        if (null === $Encounter) {
            $Encounter = new FHIREncounter();
        }
        $this->_trackValueSet($this->Encounter, $Encounter);
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent
     */
    public function getSecurityEvent(): null|FHIRSecurityEvent
    {
        return $this->SecurityEvent;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent $SecurityEvent
     * @return static
     */
    public function setSecurityEvent(null|FHIRSecurityEvent $SecurityEvent = null): self
    {
        if (null === $SecurityEvent) {
            $SecurityEvent = new FHIRSecurityEvent();
        }
        $this->_trackValueSet($this->SecurityEvent, $SecurityEvent);
        $this->SecurityEvent = $SecurityEvent;
        return $this;
    }

    /**
     * A record of medication being taken by a patient, or that the medication has been
     * given to a patient where the record is the result of a report from the patient
     * or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement
     */
    public function getMedicationStatement(): null|FHIRMedicationStatement
    {
        return $this->MedicationStatement;
    }

    /**
     * A record of medication being taken by a patient, or that the medication has been
     * given to a patient where the record is the result of a report from the patient
     * or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement $MedicationStatement
     * @return static
     */
    public function setMedicationStatement(null|FHIRMedicationStatement $MedicationStatement = null): self
    {
        if (null === $MedicationStatement) {
            $MedicationStatement = new FHIRMedicationStatement();
        }
        $this->_trackValueSet($this->MedicationStatement, $MedicationStatement);
        $this->MedicationStatement = $MedicationStatement;
        return $this;
    }

    /**
     * A set of information summarized from a list of other resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList
     */
    public function getList(): null|FHIRList
    {
        return $this->List;
    }

    /**
     * A set of information summarized from a list of other resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList $List
     * @return static
     */
    public function setList(null|FHIRList $List = null): self
    {
        if (null === $List) {
            $List = new FHIRList();
        }
        $this->_trackValueSet($this->List, $List);
        $this->List = $List;
        return $this;
    }

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire
     */
    public function getQuestionnaire(): null|FHIRQuestionnaire
    {
        return $this->Questionnaire;
    }

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire $Questionnaire
     * @return static
     */
    public function setQuestionnaire(null|FHIRQuestionnaire $Questionnaire = null): self
    {
        if (null === $Questionnaire) {
            $Questionnaire = new FHIRQuestionnaire();
        }
        $this->_trackValueSet($this->Questionnaire, $Questionnaire);
        $this->Questionnaire = $Questionnaire;
        return $this;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition
     */
    public function getComposition(): null|FHIRComposition
    {
        return $this->Composition;
    }

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition $Composition
     * @return static
     */
    public function setComposition(null|FHIRComposition $Composition = null): self
    {
        if (null === $Composition) {
            $Composition = new FHIRComposition();
        }
        $this->_trackValueSet($this->Composition, $Composition);
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * Describes the data produced by a device at a point in time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    public function getDeviceObservationReport(): null|FHIRDeviceObservationReport
    {
        return $this->DeviceObservationReport;
    }

    /**
     * Describes the data produced by a device at a point in time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport $DeviceObservationReport
     * @return static
     */
    public function setDeviceObservationReport(null|FHIRDeviceObservationReport $DeviceObservationReport = null): self
    {
        if (null === $DeviceObservationReport) {
            $DeviceObservationReport = new FHIRDeviceObservationReport();
        }
        $this->_trackValueSet($this->DeviceObservationReport, $DeviceObservationReport);
        $this->DeviceObservationReport = $DeviceObservationReport;
        return $this;
    }

    /**
     * A collection of error, warning or information messages that result from a system
     * action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome
     */
    public function getOperationOutcome(): null|FHIROperationOutcome
    {
        return $this->OperationOutcome;
    }

    /**
     * A collection of error, warning or information messages that result from a system
     * action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome $OperationOutcome
     * @return static
     */
    public function setOperationOutcome(null|FHIROperationOutcome $OperationOutcome = null): self
    {
        if (null === $OperationOutcome) {
            $OperationOutcome = new FHIROperationOutcome();
        }
        $this->_trackValueSet($this->OperationOutcome, $OperationOutcome);
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance
     */
    public function getConformance(): null|FHIRConformance
    {
        return $this->Conformance;
    }

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance $Conformance
     * @return static
     */
    public function setConformance(null|FHIRConformance $Conformance = null): self
    {
        if (null === $Conformance) {
            $Conformance = new FHIRConformance();
        }
        $this->_trackValueSet($this->Conformance, $Conformance);
        $this->Conformance = $Conformance;
        return $this;
    }

    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia
     */
    public function getMedia(): null|FHIRMedia
    {
        return $this->Media;
    }

    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia $Media
     * @return static
     */
    public function setMedia(null|FHIRMedia $Media = null): self
    {
        if (null === $Media) {
            $Media = new FHIRMedia();
        }
        $this->_trackValueSet($this->Media, $Media);
        $this->Media = $Media;
        return $this;
    }

    /**
     * Significant health events and conditions for people related to the subject
     * relevant in the context of care for the subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory
     */
    public function getFamilyHistory(): null|FHIRFamilyHistory
    {
        return $this->FamilyHistory;
    }

    /**
     * Significant health events and conditions for people related to the subject
     * relevant in the context of care for the subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory $FamilyHistory
     * @return static
     */
    public function setFamilyHistory(null|FHIRFamilyHistory $FamilyHistory = null): self
    {
        if (null === $FamilyHistory) {
            $FamilyHistory = new FHIRFamilyHistory();
        }
        $this->_trackValueSet($this->FamilyHistory, $FamilyHistory);
        $this->FamilyHistory = $FamilyHistory;
        return $this;
    }

    /**
     * Other is a conformant for handling resource concepts not yet defined for FHIR or
     * outside HL7's scope of interest.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther
     */
    public function getOther(): null|FHIROther
    {
        return $this->Other;
    }

    /**
     * Other is a conformant for handling resource concepts not yet defined for FHIR or
     * outside HL7's scope of interest.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther $Other
     * @return static
     */
    public function setOther(null|FHIROther $Other = null): self
    {
        if (null === $Other) {
            $Other = new FHIROther();
        }
        $this->_trackValueSet($this->Other, $Other);
        $this->Other = $Other;
        return $this;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile
     */
    public function getProfile(): null|FHIRProfile
    {
        return $this->Profile;
    }

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile $Profile
     * @return static
     */
    public function setProfile(null|FHIRProfile $Profile = null): self
    {
        if (null === $Profile) {
            $Profile = new FHIRProfile();
        }
        $this->_trackValueSet($this->Profile, $Profile);
        $this->Profile = $Profile;
        return $this;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation
     */
    public function getLocation(): null|FHIRLocation
    {
        return $this->Location;
    }

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation $Location
     * @return static
     */
    public function setLocation(null|FHIRLocation $Location = null): self
    {
        if (null === $Location) {
            $Location = new FHIRLocation();
        }
        $this->_trackValueSet($this->Location, $Location);
        $this->Location = $Location;
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation
     */
    public function getObservation(): null|FHIRObservation
    {
        return $this->Observation;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation $Observation
     * @return static
     */
    public function setObservation(null|FHIRObservation $Observation = null): self
    {
        if (null === $Observation) {
            $Observation = new FHIRObservation();
        }
        $this->_trackValueSet($this->Observation, $Observation);
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * Indicates the patient has a susceptibility to an adverse reaction upon exposure
     * to a specified substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance(): null|FHIRAllergyIntolerance
    {
        return $this->AllergyIntolerance;
    }

    /**
     * Indicates the patient has a susceptibility to an adverse reaction upon exposure
     * to a specified substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance $AllergyIntolerance
     * @return static
     */
    public function setAllergyIntolerance(null|FHIRAllergyIntolerance $AllergyIntolerance = null): self
    {
        if (null === $AllergyIntolerance) {
            $AllergyIntolerance = new FHIRAllergyIntolerance();
        }
        $this->_trackValueSet($this->AllergyIntolerance, $AllergyIntolerance);
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * A reference to a document.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference
     */
    public function getDocumentReference(): null|FHIRDocumentReference
    {
        return $this->DocumentReference;
    }

    /**
     * A reference to a document.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference $DocumentReference
     * @return static
     */
    public function setDocumentReference(null|FHIRDocumentReference $DocumentReference = null): self
    {
        if (null === $DocumentReference) {
            $DocumentReference = new FHIRDocumentReference();
        }
        $this->_trackValueSet($this->DocumentReference, $DocumentReference);
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * Immunization event information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization
     */
    public function getImmunization(): null|FHIRImmunization
    {
        return $this->Immunization;
    }

    /**
     * Immunization event information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization $Immunization
     * @return static
     */
    public function setImmunization(null|FHIRImmunization $Immunization = null): self
    {
        if (null === $Immunization) {
            $Immunization = new FHIRImmunization();
        }
        $this->_trackValueSet($this->Immunization, $Immunization);
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson
     */
    public function getRelatedPerson(): null|FHIRRelatedPerson
    {
        return $this->RelatedPerson;
    }

    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson $RelatedPerson
     * @return static
     */
    public function setRelatedPerson(null|FHIRRelatedPerson $RelatedPerson = null): self
    {
        if (null === $RelatedPerson) {
            $RelatedPerson = new FHIRRelatedPerson();
        }
        $this->_trackValueSet($this->RelatedPerson, $RelatedPerson);
        $this->RelatedPerson = $RelatedPerson;
        return $this;
    }

    /**
     * Sample for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen
     */
    public function getSpecimen(): null|FHIRSpecimen
    {
        return $this->Specimen;
    }

    /**
     * Sample for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen $Specimen
     * @return static
     */
    public function setSpecimen(null|FHIRSpecimen $Specimen = null): self
    {
        if (null === $Specimen) {
            $Specimen = new FHIRSpecimen();
        }
        $this->_trackValueSet($this->Specimen, $Specimen);
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * A response to an order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function getOrderResponse(): null|FHIROrderResponse
    {
        return $this->OrderResponse;
    }

    /**
     * A response to an order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse $OrderResponse
     * @return static
     */
    public function setOrderResponse(null|FHIROrderResponse $OrderResponse = null): self
    {
        if (null === $OrderResponse) {
            $OrderResponse = new FHIROrderResponse();
        }
        $this->_trackValueSet($this->OrderResponse, $OrderResponse);
        $this->OrderResponse = $OrderResponse;
        return $this;
    }

    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert
     */
    public function getAlert(): null|FHIRAlert
    {
        return $this->Alert;
    }

    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert $Alert
     * @return static
     */
    public function setAlert(null|FHIRAlert $Alert = null): self
    {
        if (null === $Alert) {
            $Alert = new FHIRAlert();
        }
        $this->_trackValueSet($this->Alert, $Alert);
        $this->Alert = $Alert;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap
     */
    public function getConceptMap(): null|FHIRConceptMap
    {
        return $this->ConceptMap;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap $ConceptMap
     * @return static
     */
    public function setConceptMap(null|FHIRConceptMap $ConceptMap = null): self
    {
        if (null === $ConceptMap) {
            $ConceptMap = new FHIRConceptMap();
        }
        $this->_trackValueSet($this->ConceptMap, $ConceptMap);
        $this->ConceptMap = $ConceptMap;
        return $this;
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient
     */
    public function getPatient(): null|FHIRPatient
    {
        return $this->Patient;
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient $Patient
     * @return static
     */
    public function setPatient(null|FHIRPatient $Patient = null): self
    {
        if (null === $Patient) {
            $Patient = new FHIRPatient();
        }
        $this->_trackValueSet($this->Patient, $Patient);
        $this->Patient = $Patient;
        return $this;
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner
     */
    public function getPractitioner(): null|FHIRPractitioner
    {
        return $this->Practitioner;
    }

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner $Practitioner
     * @return static
     */
    public function setPractitioner(null|FHIRPractitioner $Practitioner = null): self
    {
        if (null === $Practitioner) {
            $Practitioner = new FHIRPractitioner();
        }
        $this->_trackValueSet($this->Practitioner, $Practitioner);
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * Records an unexpected reaction suspected to be related to the exposure of the
     * reaction subject to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction
     */
    public function getAdverseReaction(): null|FHIRAdverseReaction
    {
        return $this->AdverseReaction;
    }

    /**
     * Records an unexpected reaction suspected to be related to the exposure of the
     * reaction subject to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction $AdverseReaction
     * @return static
     */
    public function setAdverseReaction(null|FHIRAdverseReaction $AdverseReaction = null): self
    {
        if (null === $AdverseReaction) {
            $AdverseReaction = new FHIRAdverseReaction();
        }
        $this->_trackValueSet($this->AdverseReaction, $AdverseReaction);
        $this->AdverseReaction = $AdverseReaction;
        return $this;
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy
     */
    public function getImagingStudy(): null|FHIRImagingStudy
    {
        return $this->ImagingStudy;
    }

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy $ImagingStudy
     * @return static
     */
    public function setImagingStudy(null|FHIRImagingStudy $ImagingStudy = null): self
    {
        if (null === $ImagingStudy) {
            $ImagingStudy = new FHIRImagingStudy();
        }
        $this->_trackValueSet($this->ImagingStudy, $ImagingStudy);
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * A request for a diagnostic investigation service to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder
     */
    public function getDiagnosticOrder(): null|FHIRDiagnosticOrder
    {
        return $this->DiagnosticOrder;
    }

    /**
     * A request for a diagnostic investigation service to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder $DiagnosticOrder
     * @return static
     */
    public function setDiagnosticOrder(null|FHIRDiagnosticOrder $DiagnosticOrder = null): self
    {
        if (null === $DiagnosticOrder) {
            $DiagnosticOrder = new FHIRDiagnosticOrder();
        }
        $this->_trackValueSet($this->DiagnosticOrder, $DiagnosticOrder);
        $this->DiagnosticOrder = $DiagnosticOrder;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = [];
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getBinary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProvenance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVENANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCarePlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CARE_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSupply())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUPPLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuery())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUERY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProcedure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROCEDURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAGNOSTIC_REPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMessageHeader())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MESSAGE_HEADER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMMUNIZATION_RECOMMENDATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENT_MANIFEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_DISPENSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationPrescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_PRESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_ADMINISTRATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSecurityEvent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SECURITY_EVENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_STATEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getList())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUESTIONNAIRE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComposition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPOSITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeviceObservationReport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_OBSERVATION_REPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION_OUTCOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConformance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONFORMANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedia())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDIA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFamilyHistory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FAMILY_HISTORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOther())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OTHER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROFILE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getObservation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OBSERVATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALLERGY_INTOLERANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENT_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImmunization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMMUNIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATED_PERSON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecimen())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIMEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrderResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDER_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAlert())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALERT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConceptMap())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCEPT_MAP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPractitioner())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRACTITIONER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdverseReaction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADVERSE_REACTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImagingStudy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMAGING_STUDY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiagnosticOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAGNOSTIC_ORDER] = $fieldErrs;
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceInline $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceInline
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRResourceInline)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_BINARY === $childName) {
                $type->setBinary(FHIRBinary::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROVENANCE === $childName) {
                $type->setProvenance(FHIRProvenance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONDITION === $childName) {
                $type->setCondition(FHIRCondition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CARE_PLAN === $childName) {
                $type->setCarePlan(FHIRCarePlan::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUPPLY === $childName) {
                $type->setSupply(FHIRSupply::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE === $childName) {
                $type->setDevice(FHIRDevice::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUERY === $childName) {
                $type->setQuery(FHIRQuery::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORDER === $childName) {
                $type->setOrder(FHIROrder::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORGANIZATION === $childName) {
                $type->setOrganization(FHIROrganization::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROCEDURE === $childName) {
                $type->setProcedure(FHIRProcedure::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBSTANCE === $childName) {
                $type->setSubstance(FHIRSubstance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DIAGNOSTIC_REPORT === $childName) {
                $type->setDiagnosticReport(FHIRDiagnosticReport::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_GROUP === $childName) {
                $type->setGroup(FHIRGroup::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_VALUE_SET === $childName) {
                $type->setValueSet(FHIRValueSet::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION === $childName) {
                $type->setMedication(FHIRMedication::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MESSAGE_HEADER === $childName) {
                $type->setMessageHeader(FHIRMessageHeader::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMMUNIZATION_RECOMMENDATION === $childName) {
                $type->setImmunizationRecommendation(FHIRImmunizationRecommendation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOCUMENT_MANIFEST === $childName) {
                $type->setDocumentManifest(FHIRDocumentManifest::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_DISPENSE === $childName) {
                $type->setMedicationDispense(FHIRMedicationDispense::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_PRESCRIPTION === $childName) {
                $type->setMedicationPrescription(FHIRMedicationPrescription::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_ADMINISTRATION === $childName) {
                $type->setMedicationAdministration(FHIRMedicationAdministration::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ENCOUNTER === $childName) {
                $type->setEncounter(FHIREncounter::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SECURITY_EVENT === $childName) {
                $type->setSecurityEvent(FHIRSecurityEvent::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDICATION_STATEMENT === $childName) {
                $type->setMedicationStatement(FHIRMedicationStatement::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LIST === $childName) {
                $type->setList(FHIRList::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_QUESTIONNAIRE === $childName) {
                $type->setQuestionnaire(FHIRQuestionnaire::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_COMPOSITION === $childName) {
                $type->setComposition(FHIRComposition::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DEVICE_OBSERVATION_REPORT === $childName) {
                $type->setDeviceObservationReport(FHIRDeviceObservationReport::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OPERATION_OUTCOME === $childName) {
                $type->setOperationOutcome(FHIROperationOutcome::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONFORMANCE === $childName) {
                $type->setConformance(FHIRConformance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MEDIA === $childName) {
                $type->setMedia(FHIRMedia::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_FAMILY_HISTORY === $childName) {
                $type->setFamilyHistory(FHIRFamilyHistory::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OTHER === $childName) {
                $type->setOther(FHIROther::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PROFILE === $childName) {
                $type->setProfile(FHIRProfile::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_LOCATION === $childName) {
                $type->setLocation(FHIRLocation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OBSERVATION === $childName) {
                $type->setObservation(FHIRObservation::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ALLERGY_INTOLERANCE === $childName) {
                $type->setAllergyIntolerance(FHIRAllergyIntolerance::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DOCUMENT_REFERENCE === $childName) {
                $type->setDocumentReference(FHIRDocumentReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMMUNIZATION === $childName) {
                $type->setImmunization(FHIRImmunization::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_RELATED_PERSON === $childName) {
                $type->setRelatedPerson(FHIRRelatedPerson::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SPECIMEN === $childName) {
                $type->setSpecimen(FHIRSpecimen::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ORDER_RESPONSE === $childName) {
                $type->setOrderResponse(FHIROrderResponse::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ALERT === $childName) {
                $type->setAlert(FHIRAlert::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CONCEPT_MAP === $childName) {
                $type->setConceptMap(FHIRConceptMap::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PATIENT === $childName) {
                $type->setPatient(FHIRPatient::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_PRACTITIONER === $childName) {
                $type->setPractitioner(FHIRPractitioner::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ADVERSE_REACTION === $childName) {
                $type->setAdverseReaction(FHIRAdverseReaction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_IMAGING_STUDY === $childName) {
                $type->setImagingStudy(FHIRImagingStudy::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DIAGNOSTIC_ORDER === $childName) {
                $type->setDiagnosticOrder(FHIRDiagnosticOrder::xmlUnserialize($n, null, $config));
            }
        }
        $attributes = $element->attributes();
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (null !== ($v = $this->getBinary())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getProvenance())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCondition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getCarePlan())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSupply())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDevice())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getQuery())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getOrder())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getOrganization())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getProcedure())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSubstance())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getGroup())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getValueSet())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedication())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMessageHeader())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicationPrescription())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getEncounter())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSecurityEvent())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getList())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getComposition())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDeviceObservationReport())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getConformance())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getMedia())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getFamilyHistory())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getOther())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getProfile())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getLocation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getObservation())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDocumentReference())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getImmunization())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getSpecimen())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getOrderResponse())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getAlert())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getConceptMap())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getPatient())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getPractitioner())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getAdverseReaction())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getImagingStudy())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (null !== ($v = $this->getDiagnosticOrder())) {
            return $v->xmlSerialize($xw, $config);
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ResourceInline', $this->_getSourceXmlns());
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return null|object
     */
    public function jsonSerialize(): mixed
    {
        if (null !== ($v = $this->getBinary())) {
            return $v;
        }
        if (null !== ($v = $this->getProvenance())) {
            return $v;
        }
        if (null !== ($v = $this->getCondition())) {
            return $v;
        }
        if (null !== ($v = $this->getCarePlan())) {
            return $v;
        }
        if (null !== ($v = $this->getSupply())) {
            return $v;
        }
        if (null !== ($v = $this->getDevice())) {
            return $v;
        }
        if (null !== ($v = $this->getQuery())) {
            return $v;
        }
        if (null !== ($v = $this->getOrder())) {
            return $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            return $v;
        }
        if (null !== ($v = $this->getProcedure())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            return $v;
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            return $v;
        }
        if (null !== ($v = $this->getGroup())) {
            return $v;
        }
        if (null !== ($v = $this->getValueSet())) {
            return $v;
        }
        if (null !== ($v = $this->getMedication())) {
            return $v;
        }
        if (null !== ($v = $this->getMessageHeader())) {
            return $v;
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            return $v;
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationPrescription())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            return $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            return $v;
        }
        if (null !== ($v = $this->getSecurityEvent())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            return $v;
        }
        if (null !== ($v = $this->getList())) {
            return $v;
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            return $v;
        }
        if (null !== ($v = $this->getComposition())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceObservationReport())) {
            return $v;
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            return $v;
        }
        if (null !== ($v = $this->getConformance())) {
            return $v;
        }
        if (null !== ($v = $this->getMedia())) {
            return $v;
        }
        if (null !== ($v = $this->getFamilyHistory())) {
            return $v;
        }
        if (null !== ($v = $this->getOther())) {
            return $v;
        }
        if (null !== ($v = $this->getProfile())) {
            return $v;
        }
        if (null !== ($v = $this->getLocation())) {
            return $v;
        }
        if (null !== ($v = $this->getObservation())) {
            return $v;
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            return $v;
        }
        if (null !== ($v = $this->getDocumentReference())) {
            return $v;
        }
        if (null !== ($v = $this->getImmunization())) {
            return $v;
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            return $v;
        }
        if (null !== ($v = $this->getSpecimen())) {
            return $v;
        }
        if (null !== ($v = $this->getOrderResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getAlert())) {
            return $v;
        }
        if (null !== ($v = $this->getConceptMap())) {
            return $v;
        }
        if (null !== ($v = $this->getPatient())) {
            return $v;
        }
        if (null !== ($v = $this->getPractitioner())) {
            return $v;
        }
        if (null !== ($v = $this->getAdverseReaction())) {
            return $v;
        }
        if (null !== ($v = $this->getImagingStudy())) {
            return $v;
        }
        if (null !== ($v = $this->getDiagnosticOrder())) {
            return $v;
        }
        return null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}