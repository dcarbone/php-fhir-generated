<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESOURCE_DOT_INLINE;

    const FIELD_ADVERSE_REACTION = 'AdverseReaction';
    const FIELD_ALERT = 'Alert';
    const FIELD_ALLERGY_INTOLERANCE = 'AllergyIntolerance';
    const FIELD_BINARY = 'Binary';
    const FIELD_CARE_PLAN = 'CarePlan';
    const FIELD_COMPOSITION = 'Composition';
    const FIELD_CONCEPT_MAP = 'ConceptMap';
    const FIELD_CONDITION = 'Condition';
    const FIELD_CONFORMANCE = 'Conformance';
    const FIELD_DEVICE = 'Device';
    const FIELD_DEVICE_OBSERVATION_REPORT = 'DeviceObservationReport';
    const FIELD_DIAGNOSTIC_ORDER = 'DiagnosticOrder';
    const FIELD_DIAGNOSTIC_REPORT = 'DiagnosticReport';
    const FIELD_DOCUMENT_MANIFEST = 'DocumentManifest';
    const FIELD_DOCUMENT_REFERENCE = 'DocumentReference';
    const FIELD_ENCOUNTER = 'Encounter';
    const FIELD_FAMILY_HISTORY = 'FamilyHistory';
    const FIELD_GROUP = 'Group';
    const FIELD_IMAGING_STUDY = 'ImagingStudy';
    const FIELD_IMMUNIZATION = 'Immunization';
    const FIELD_IMMUNIZATION_RECOMMENDATION = 'ImmunizationRecommendation';
    const FIELD_LIST = 'List';
    const FIELD_LOCATION = 'Location';
    const FIELD_MEDIA = 'Media';
    const FIELD_MEDICATION = 'Medication';
    const FIELD_MEDICATION_ADMINISTRATION = 'MedicationAdministration';
    const FIELD_MEDICATION_DISPENSE = 'MedicationDispense';
    const FIELD_MEDICATION_PRESCRIPTION = 'MedicationPrescription';
    const FIELD_MEDICATION_STATEMENT = 'MedicationStatement';
    const FIELD_MESSAGE_HEADER = 'MessageHeader';
    const FIELD_OBSERVATION = 'Observation';
    const FIELD_OPERATION_OUTCOME = 'OperationOutcome';
    const FIELD_ORDER = 'Order';
    const FIELD_ORDER_RESPONSE = 'OrderResponse';
    const FIELD_ORGANIZATION = 'Organization';
    const FIELD_OTHER = 'Other';
    const FIELD_PATIENT = 'Patient';
    const FIELD_PRACTITIONER = 'Practitioner';
    const FIELD_PROCEDURE = 'Procedure';
    const FIELD_PROFILE = 'Profile';
    const FIELD_PROVENANCE = 'Provenance';
    const FIELD_QUERY = 'Query';
    const FIELD_QUESTIONNAIRE = 'Questionnaire';
    const FIELD_RELATED_PERSON = 'RelatedPerson';
    const FIELD_SECURITY_EVENT = 'SecurityEvent';
    const FIELD_SPECIMEN = 'Specimen';
    const FIELD_SUBSTANCE = 'Substance';
    const FIELD_SUPPLY = 'Supply';
    const FIELD_VALUE_SET = 'ValueSet';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Records an unexpected reaction suspected to be related to the exposure of the
     * reaction subject to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction
     */
    protected $AdverseReaction = null;

    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert
     */
    protected $Alert = null;

    /**
     * Indicates the patient has a susceptibility to an adverse reaction upon exposure
     * to a specified substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance
     */
    protected $AllergyIntolerance = null;

    /**
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary
     */
    protected $Binary = null;

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     */
    protected $CarePlan = null;

    /**
     * A set of healthcare-related information that is assembled together into a single
     * logical document that provides a single coherent statement of meaning,
     * establishes its own context and that has clinical attestation with regard to who
     * is making the statement.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition
     */
    protected $Composition = null;

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap
     */
    protected $ConceptMap = null;

    /**
     * Use to record detailed information about conditions, problems or diagnoses
     * recognized by a clinician. There are many uses including: recording a Diagnosis
     * during an Encounter; populating a problem List or a Summary Statement, such as a
     * Discharge Summary.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition
     */
    protected $Condition = null;

    /**
     * A conformance statement is a set of requirements for a desired implementation or
     * a description of how a target application fulfills those requirements in a
     * particular implementation.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance
     */
    protected $Conformance = null;

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
    protected $Device = null;

    /**
     * Describes the data produced by a device at a point in time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    protected $DeviceObservationReport = null;

    /**
     * A request for a diagnostic investigation service to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder
     */
    protected $DiagnosticOrder = null;

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
    protected $DiagnosticReport = null;

    /**
     * A manifest that defines a set of documents.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest
     */
    protected $DocumentManifest = null;

    /**
     * A reference to a document.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference
     */
    protected $DocumentReference = null;

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter
     */
    protected $Encounter = null;

    /**
     * Significant health events and conditions for people related to the subject
     * relevant in the context of care for the subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory
     */
    protected $FamilyHistory = null;

    /**
     * Represents a defined collection of entities that may be discussed or acted upon
     * collectively but which are not expected to act collectively and are not formally
     * or legally recognized. I.e. A collection of entities that isn't an Organization.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup
     */
    protected $Group = null;

    /**
     * Manifest of a set of images produced in study. The set of images may include
     * every image in the study, or it may be an incomplete sample, such as a list of
     * key images.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy
     */
    protected $ImagingStudy = null;

    /**
     * Immunization event information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization
     */
    protected $Immunization = null;

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation
     */
    protected $ImmunizationRecommendation = null;

    /**
     * A set of information summarized from a list of other resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList
     */
    protected $List = null;

    /**
     * Details and position information for a physical place where services are
     * provided and resources and participants may be stored, found, contained or
     * accommodated.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation
     */
    protected $Location = null;

    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia
     */
    protected $Media = null;

    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    protected $Medication = null;

    /**
     * Describes the event of a patient being given a dose of a medication. This may be
     * as simple as swallowing a tablet or it may be a long running infusion. Related
     * resources tie this event to the authorizing prescription, and the specific
     * encounter between patient and health care practitioner.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration
     */
    protected $MedicationAdministration = null;

    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense
     */
    protected $MedicationDispense = null;

    /**
     * An order for both supply of the medication and the instructions for
     * administration of the medicine to a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription
     */
    protected $MedicationPrescription = null;

    /**
     * A record of medication being taken by a patient, or that the medication has been
     * given to a patient where the record is the result of a report from the patient
     * or another clinician.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement
     */
    protected $MedicationStatement = null;

    /**
     * The header for a message exchange that is either requesting or responding to an
     * action. The resource(s) that are the subject of the action as well as other
     * Information related to the action are typically transmitted in a bundle in which
     * the MessageHeader resource instance is the first resource in the bundle.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader
     */
    protected $MessageHeader = null;

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation
     */
    protected $Observation = null;

    /**
     * A collection of error, warning or information messages that result from a system
     * action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome
     */
    protected $OperationOutcome = null;

    /**
     * A request to perform an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder
     */
    protected $Order = null;

    /**
     * A response to an order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    protected $OrderResponse = null;

    /**
     * A formally or informally recognized grouping of people or organizations formed
     * for the purpose of achieving some form of collective action. Includes companies,
     * institutions, corporations, departments, community groups, healthcare practice
     * groups, etc.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization
     */
    protected $Organization = null;

    /**
     * Other is a conformant for handling resource concepts not yet defined for FHIR or
     * outside HL7's scope of interest.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther
     */
    protected $Other = null;

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient
     */
    protected $Patient = null;

    /**
     * A person who is directly or indirectly involved in the provisioning of
     * healthcare.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner
     */
    protected $Practitioner = null;

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    protected $Procedure = null;

    /**
     * A Resource Profile - a statement of use of one or more FHIR Resources. It may
     * include constraints on Resources and Data Types, Terminology Binding Statements
     * and Extension Definitions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile
     */
    protected $Profile = null;

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
    protected $Provenance = null;

    /**
     * A description of a query with a set of parameters.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
     */
    protected $Query = null;

    /**
     * A structured set of questions and their answers. The Questionnaire may contain
     * questions, answers or both. The questions are ordered and grouped into coherent
     * subsets, corresponding to the structure of the grouping of the underlying
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire
     */
    protected $Questionnaire = null;

    /**
     * Information about a person that is involved in the care for a patient, but who
     * is not the target of healthcare, nor has a formal responsibility in the care
     * process.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson
     */
    protected $RelatedPerson = null;

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent
     */
    protected $SecurityEvent = null;

    /**
     * Sample for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen
     */
    protected $Specimen = null;

    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance
     */
    protected $Substance = null;

    /**
     * A supply - a request for something, and provision of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply
     */
    protected $Supply = null;

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet
     */
    protected $ValueSet = null;

    /**
     * Validation map for fields in type Resource.Inline
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRResourceInline Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRResourceInline::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        if (isset($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
            if (is_array($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
                $this->_setFHIRComments($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS]);
            } else if (is_string($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS])) {
                $this->_addFHIRComment($data[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS]);
            }
        }
        if (isset($data[self::FIELD_ADVERSE_REACTION])) {
            if ($data[self::FIELD_ADVERSE_REACTION] instanceof FHIRAdverseReaction) {
                $this->setAdverseReaction($data[self::FIELD_ADVERSE_REACTION]);
            } else {
                $this->setAdverseReaction(new FHIRAdverseReaction($data[self::FIELD_ADVERSE_REACTION]));
            }
        }
        if (isset($data[self::FIELD_ALERT])) {
            if ($data[self::FIELD_ALERT] instanceof FHIRAlert) {
                $this->setAlert($data[self::FIELD_ALERT]);
            } else {
                $this->setAlert(new FHIRAlert($data[self::FIELD_ALERT]));
            }
        }
        if (isset($data[self::FIELD_ALLERGY_INTOLERANCE])) {
            if ($data[self::FIELD_ALLERGY_INTOLERANCE] instanceof FHIRAllergyIntolerance) {
                $this->setAllergyIntolerance($data[self::FIELD_ALLERGY_INTOLERANCE]);
            } else {
                $this->setAllergyIntolerance(new FHIRAllergyIntolerance($data[self::FIELD_ALLERGY_INTOLERANCE]));
            }
        }
        if (isset($data[self::FIELD_BINARY])) {
            if ($data[self::FIELD_BINARY] instanceof FHIRBinary) {
                $this->setBinary($data[self::FIELD_BINARY]);
            } else {
                $this->setBinary(new FHIRBinary($data[self::FIELD_BINARY]));
            }
        }
        if (isset($data[self::FIELD_CARE_PLAN])) {
            if ($data[self::FIELD_CARE_PLAN] instanceof FHIRCarePlan) {
                $this->setCarePlan($data[self::FIELD_CARE_PLAN]);
            } else {
                $this->setCarePlan(new FHIRCarePlan($data[self::FIELD_CARE_PLAN]));
            }
        }
        if (isset($data[self::FIELD_COMPOSITION])) {
            if ($data[self::FIELD_COMPOSITION] instanceof FHIRComposition) {
                $this->setComposition($data[self::FIELD_COMPOSITION]);
            } else {
                $this->setComposition(new FHIRComposition($data[self::FIELD_COMPOSITION]));
            }
        }
        if (isset($data[self::FIELD_CONCEPT_MAP])) {
            if ($data[self::FIELD_CONCEPT_MAP] instanceof FHIRConceptMap) {
                $this->setConceptMap($data[self::FIELD_CONCEPT_MAP]);
            } else {
                $this->setConceptMap(new FHIRConceptMap($data[self::FIELD_CONCEPT_MAP]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if ($data[self::FIELD_CONDITION] instanceof FHIRCondition) {
                $this->setCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->setCondition(new FHIRCondition($data[self::FIELD_CONDITION]));
            }
        }
        if (isset($data[self::FIELD_CONFORMANCE])) {
            if ($data[self::FIELD_CONFORMANCE] instanceof FHIRConformance) {
                $this->setConformance($data[self::FIELD_CONFORMANCE]);
            } else {
                $this->setConformance(new FHIRConformance($data[self::FIELD_CONFORMANCE]));
            }
        }
        if (isset($data[self::FIELD_DEVICE])) {
            if ($data[self::FIELD_DEVICE] instanceof FHIRDevice) {
                $this->setDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->setDevice(new FHIRDevice($data[self::FIELD_DEVICE]));
            }
        }
        if (isset($data[self::FIELD_DEVICE_OBSERVATION_REPORT])) {
            if ($data[self::FIELD_DEVICE_OBSERVATION_REPORT] instanceof FHIRDeviceObservationReport) {
                $this->setDeviceObservationReport($data[self::FIELD_DEVICE_OBSERVATION_REPORT]);
            } else {
                $this->setDeviceObservationReport(new FHIRDeviceObservationReport($data[self::FIELD_DEVICE_OBSERVATION_REPORT]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSTIC_ORDER])) {
            if ($data[self::FIELD_DIAGNOSTIC_ORDER] instanceof FHIRDiagnosticOrder) {
                $this->setDiagnosticOrder($data[self::FIELD_DIAGNOSTIC_ORDER]);
            } else {
                $this->setDiagnosticOrder(new FHIRDiagnosticOrder($data[self::FIELD_DIAGNOSTIC_ORDER]));
            }
        }
        if (isset($data[self::FIELD_DIAGNOSTIC_REPORT])) {
            if ($data[self::FIELD_DIAGNOSTIC_REPORT] instanceof FHIRDiagnosticReport) {
                $this->setDiagnosticReport($data[self::FIELD_DIAGNOSTIC_REPORT]);
            } else {
                $this->setDiagnosticReport(new FHIRDiagnosticReport($data[self::FIELD_DIAGNOSTIC_REPORT]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENT_MANIFEST])) {
            if ($data[self::FIELD_DOCUMENT_MANIFEST] instanceof FHIRDocumentManifest) {
                $this->setDocumentManifest($data[self::FIELD_DOCUMENT_MANIFEST]);
            } else {
                $this->setDocumentManifest(new FHIRDocumentManifest($data[self::FIELD_DOCUMENT_MANIFEST]));
            }
        }
        if (isset($data[self::FIELD_DOCUMENT_REFERENCE])) {
            if ($data[self::FIELD_DOCUMENT_REFERENCE] instanceof FHIRDocumentReference) {
                $this->setDocumentReference($data[self::FIELD_DOCUMENT_REFERENCE]);
            } else {
                $this->setDocumentReference(new FHIRDocumentReference($data[self::FIELD_DOCUMENT_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIREncounter) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIREncounter($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_FAMILY_HISTORY])) {
            if ($data[self::FIELD_FAMILY_HISTORY] instanceof FHIRFamilyHistory) {
                $this->setFamilyHistory($data[self::FIELD_FAMILY_HISTORY]);
            } else {
                $this->setFamilyHistory(new FHIRFamilyHistory($data[self::FIELD_FAMILY_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_GROUP])) {
            if ($data[self::FIELD_GROUP] instanceof FHIRGroup) {
                $this->setGroup($data[self::FIELD_GROUP]);
            } else {
                $this->setGroup(new FHIRGroup($data[self::FIELD_GROUP]));
            }
        }
        if (isset($data[self::FIELD_IMAGING_STUDY])) {
            if ($data[self::FIELD_IMAGING_STUDY] instanceof FHIRImagingStudy) {
                $this->setImagingStudy($data[self::FIELD_IMAGING_STUDY]);
            } else {
                $this->setImagingStudy(new FHIRImagingStudy($data[self::FIELD_IMAGING_STUDY]));
            }
        }
        if (isset($data[self::FIELD_IMMUNIZATION])) {
            if ($data[self::FIELD_IMMUNIZATION] instanceof FHIRImmunization) {
                $this->setImmunization($data[self::FIELD_IMMUNIZATION]);
            } else {
                $this->setImmunization(new FHIRImmunization($data[self::FIELD_IMMUNIZATION]));
            }
        }
        if (isset($data[self::FIELD_IMMUNIZATION_RECOMMENDATION])) {
            if ($data[self::FIELD_IMMUNIZATION_RECOMMENDATION] instanceof FHIRImmunizationRecommendation) {
                $this->setImmunizationRecommendation($data[self::FIELD_IMMUNIZATION_RECOMMENDATION]);
            } else {
                $this->setImmunizationRecommendation(new FHIRImmunizationRecommendation($data[self::FIELD_IMMUNIZATION_RECOMMENDATION]));
            }
        }
        if (isset($data[self::FIELD_LIST])) {
            if ($data[self::FIELD_LIST] instanceof FHIRList) {
                $this->setList($data[self::FIELD_LIST]);
            } else {
                $this->setList(new FHIRList($data[self::FIELD_LIST]));
            }
        }
        if (isset($data[self::FIELD_LOCATION])) {
            if ($data[self::FIELD_LOCATION] instanceof FHIRLocation) {
                $this->setLocation($data[self::FIELD_LOCATION]);
            } else {
                $this->setLocation(new FHIRLocation($data[self::FIELD_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_MEDIA])) {
            if ($data[self::FIELD_MEDIA] instanceof FHIRMedia) {
                $this->setMedia($data[self::FIELD_MEDIA]);
            } else {
                $this->setMedia(new FHIRMedia($data[self::FIELD_MEDIA]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION])) {
            if ($data[self::FIELD_MEDICATION] instanceof FHIRMedication) {
                $this->setMedication($data[self::FIELD_MEDICATION]);
            } else {
                $this->setMedication(new FHIRMedication($data[self::FIELD_MEDICATION]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_ADMINISTRATION])) {
            if ($data[self::FIELD_MEDICATION_ADMINISTRATION] instanceof FHIRMedicationAdministration) {
                $this->setMedicationAdministration($data[self::FIELD_MEDICATION_ADMINISTRATION]);
            } else {
                $this->setMedicationAdministration(new FHIRMedicationAdministration($data[self::FIELD_MEDICATION_ADMINISTRATION]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_DISPENSE])) {
            if ($data[self::FIELD_MEDICATION_DISPENSE] instanceof FHIRMedicationDispense) {
                $this->setMedicationDispense($data[self::FIELD_MEDICATION_DISPENSE]);
            } else {
                $this->setMedicationDispense(new FHIRMedicationDispense($data[self::FIELD_MEDICATION_DISPENSE]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_PRESCRIPTION])) {
            if ($data[self::FIELD_MEDICATION_PRESCRIPTION] instanceof FHIRMedicationPrescription) {
                $this->setMedicationPrescription($data[self::FIELD_MEDICATION_PRESCRIPTION]);
            } else {
                $this->setMedicationPrescription(new FHIRMedicationPrescription($data[self::FIELD_MEDICATION_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_STATEMENT])) {
            if ($data[self::FIELD_MEDICATION_STATEMENT] instanceof FHIRMedicationStatement) {
                $this->setMedicationStatement($data[self::FIELD_MEDICATION_STATEMENT]);
            } else {
                $this->setMedicationStatement(new FHIRMedicationStatement($data[self::FIELD_MEDICATION_STATEMENT]));
            }
        }
        if (isset($data[self::FIELD_MESSAGE_HEADER])) {
            if ($data[self::FIELD_MESSAGE_HEADER] instanceof FHIRMessageHeader) {
                $this->setMessageHeader($data[self::FIELD_MESSAGE_HEADER]);
            } else {
                $this->setMessageHeader(new FHIRMessageHeader($data[self::FIELD_MESSAGE_HEADER]));
            }
        }
        if (isset($data[self::FIELD_OBSERVATION])) {
            if ($data[self::FIELD_OBSERVATION] instanceof FHIRObservation) {
                $this->setObservation($data[self::FIELD_OBSERVATION]);
            } else {
                $this->setObservation(new FHIRObservation($data[self::FIELD_OBSERVATION]));
            }
        }
        if (isset($data[self::FIELD_OPERATION_OUTCOME])) {
            if ($data[self::FIELD_OPERATION_OUTCOME] instanceof FHIROperationOutcome) {
                $this->setOperationOutcome($data[self::FIELD_OPERATION_OUTCOME]);
            } else {
                $this->setOperationOutcome(new FHIROperationOutcome($data[self::FIELD_OPERATION_OUTCOME]));
            }
        }
        if (isset($data[self::FIELD_ORDER])) {
            if ($data[self::FIELD_ORDER] instanceof FHIROrder) {
                $this->setOrder($data[self::FIELD_ORDER]);
            } else {
                $this->setOrder(new FHIROrder($data[self::FIELD_ORDER]));
            }
        }
        if (isset($data[self::FIELD_ORDER_RESPONSE])) {
            if ($data[self::FIELD_ORDER_RESPONSE] instanceof FHIROrderResponse) {
                $this->setOrderResponse($data[self::FIELD_ORDER_RESPONSE]);
            } else {
                $this->setOrderResponse(new FHIROrderResponse($data[self::FIELD_ORDER_RESPONSE]));
            }
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIROrganization) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIROrganization($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_OTHER])) {
            if ($data[self::FIELD_OTHER] instanceof FHIROther) {
                $this->setOther($data[self::FIELD_OTHER]);
            } else {
                $this->setOther(new FHIROther($data[self::FIELD_OTHER]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRPatient) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRPatient($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PRACTITIONER])) {
            if ($data[self::FIELD_PRACTITIONER] instanceof FHIRPractitioner) {
                $this->setPractitioner($data[self::FIELD_PRACTITIONER]);
            } else {
                $this->setPractitioner(new FHIRPractitioner($data[self::FIELD_PRACTITIONER]));
            }
        }
        if (isset($data[self::FIELD_PROCEDURE])) {
            if ($data[self::FIELD_PROCEDURE] instanceof FHIRProcedure) {
                $this->setProcedure($data[self::FIELD_PROCEDURE]);
            } else {
                $this->setProcedure(new FHIRProcedure($data[self::FIELD_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_PROFILE])) {
            if ($data[self::FIELD_PROFILE] instanceof FHIRProfile) {
                $this->setProfile($data[self::FIELD_PROFILE]);
            } else {
                $this->setProfile(new FHIRProfile($data[self::FIELD_PROFILE]));
            }
        }
        if (isset($data[self::FIELD_PROVENANCE])) {
            if ($data[self::FIELD_PROVENANCE] instanceof FHIRProvenance) {
                $this->setProvenance($data[self::FIELD_PROVENANCE]);
            } else {
                $this->setProvenance(new FHIRProvenance($data[self::FIELD_PROVENANCE]));
            }
        }
        if (isset($data[self::FIELD_QUERY])) {
            if ($data[self::FIELD_QUERY] instanceof FHIRQuery) {
                $this->setQuery($data[self::FIELD_QUERY]);
            } else {
                $this->setQuery(new FHIRQuery($data[self::FIELD_QUERY]));
            }
        }
        if (isset($data[self::FIELD_QUESTIONNAIRE])) {
            if ($data[self::FIELD_QUESTIONNAIRE] instanceof FHIRQuestionnaire) {
                $this->setQuestionnaire($data[self::FIELD_QUESTIONNAIRE]);
            } else {
                $this->setQuestionnaire(new FHIRQuestionnaire($data[self::FIELD_QUESTIONNAIRE]));
            }
        }
        if (isset($data[self::FIELD_RELATED_PERSON])) {
            if ($data[self::FIELD_RELATED_PERSON] instanceof FHIRRelatedPerson) {
                $this->setRelatedPerson($data[self::FIELD_RELATED_PERSON]);
            } else {
                $this->setRelatedPerson(new FHIRRelatedPerson($data[self::FIELD_RELATED_PERSON]));
            }
        }
        if (isset($data[self::FIELD_SECURITY_EVENT])) {
            if ($data[self::FIELD_SECURITY_EVENT] instanceof FHIRSecurityEvent) {
                $this->setSecurityEvent($data[self::FIELD_SECURITY_EVENT]);
            } else {
                $this->setSecurityEvent(new FHIRSecurityEvent($data[self::FIELD_SECURITY_EVENT]));
            }
        }
        if (isset($data[self::FIELD_SPECIMEN])) {
            if ($data[self::FIELD_SPECIMEN] instanceof FHIRSpecimen) {
                $this->setSpecimen($data[self::FIELD_SPECIMEN]);
            } else {
                $this->setSpecimen(new FHIRSpecimen($data[self::FIELD_SPECIMEN]));
            }
        }
        if (isset($data[self::FIELD_SUBSTANCE])) {
            if ($data[self::FIELD_SUBSTANCE] instanceof FHIRSubstance) {
                $this->setSubstance($data[self::FIELD_SUBSTANCE]);
            } else {
                $this->setSubstance(new FHIRSubstance($data[self::FIELD_SUBSTANCE]));
            }
        }
        if (isset($data[self::FIELD_SUPPLY])) {
            if ($data[self::FIELD_SUPPLY] instanceof FHIRSupply) {
                $this->setSupply($data[self::FIELD_SUPPLY]);
            } else {
                $this->setSupply(new FHIRSupply($data[self::FIELD_SUPPLY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET])) {
            if ($data[self::FIELD_VALUE_SET] instanceof FHIRValueSet) {
                $this->setValueSet($data[self::FIELD_VALUE_SET]);
            } else {
                $this->setValueSet(new FHIRValueSet($data[self::FIELD_VALUE_SET]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return static
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<ResourceInline{$xmlns}></ResourceInline>";
    }

    /**
     * Records an unexpected reaction suspected to be related to the exposure of the
     * reaction subject to a substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction
     */
    public function getAdverseReaction()
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
    public function setAdverseReaction(FHIRAdverseReaction $AdverseReaction = null)
    {
        $this->AdverseReaction = $AdverseReaction;
        return $this;
    }

    /**
     * Prospective warnings of potential issues when providing care to the patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert
     */
    public function getAlert()
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
    public function setAlert(FHIRAlert $Alert = null)
    {
        $this->Alert = $Alert;
        return $this;
    }

    /**
     * Indicates the patient has a susceptibility to an adverse reaction upon exposure
     * to a specified substance.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance
     */
    public function getAllergyIntolerance()
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
    public function setAllergyIntolerance(FHIRAllergyIntolerance $AllergyIntolerance = null)
    {
        $this->AllergyIntolerance = $AllergyIntolerance;
        return $this;
    }

    /**
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary
     */
    public function getBinary()
    {
        return $this->Binary;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary $Binary
     * @return static
     */
    public function setBinary(FHIRBinary $Binary = null)
    {
        $this->Binary = $Binary;
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
    public function getCarePlan()
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
    public function setCarePlan(FHIRCarePlan $CarePlan = null)
    {
        $this->CarePlan = $CarePlan;
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
    public function getComposition()
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
    public function setComposition(FHIRComposition $Composition = null)
    {
        $this->Composition = $Composition;
        return $this;
    }

    /**
     * A statement of relationships from one set of concepts to one or more other
     * concept systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap
     */
    public function getConceptMap()
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
    public function setConceptMap(FHIRConceptMap $ConceptMap = null)
    {
        $this->ConceptMap = $ConceptMap;
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
    public function getCondition()
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
    public function setCondition(FHIRCondition $Condition = null)
    {
        $this->Condition = $Condition;
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
    public function getConformance()
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
    public function setConformance(FHIRConformance $Conformance = null)
    {
        $this->Conformance = $Conformance;
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
    public function getDevice()
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
    public function setDevice(FHIRDevice $Device = null)
    {
        $this->Device = $Device;
        return $this;
    }

    /**
     * Describes the data produced by a device at a point in time.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport
     */
    public function getDeviceObservationReport()
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
    public function setDeviceObservationReport(FHIRDeviceObservationReport $DeviceObservationReport = null)
    {
        $this->DeviceObservationReport = $DeviceObservationReport;
        return $this;
    }

    /**
     * A request for a diagnostic investigation service to be performed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder
     */
    public function getDiagnosticOrder()
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
    public function setDiagnosticOrder(FHIRDiagnosticOrder $DiagnosticOrder = null)
    {
        $this->DiagnosticOrder = $DiagnosticOrder;
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
    public function getDiagnosticReport()
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
    public function setDiagnosticReport(FHIRDiagnosticReport $DiagnosticReport = null)
    {
        $this->DiagnosticReport = $DiagnosticReport;
        return $this;
    }

    /**
     * A manifest that defines a set of documents.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest
     */
    public function getDocumentManifest()
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
    public function setDocumentManifest(FHIRDocumentManifest $DocumentManifest = null)
    {
        $this->DocumentManifest = $DocumentManifest;
        return $this;
    }

    /**
     * A reference to a document.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference
     */
    public function getDocumentReference()
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
    public function setDocumentReference(FHIRDocumentReference $DocumentReference = null)
    {
        $this->DocumentReference = $DocumentReference;
        return $this;
    }

    /**
     * An interaction between a patient and healthcare provider(s) for the purpose of
     * providing healthcare service(s) or assessing the health status of a patient.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter
     */
    public function getEncounter()
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
    public function setEncounter(FHIREncounter $Encounter = null)
    {
        $this->Encounter = $Encounter;
        return $this;
    }

    /**
     * Significant health events and conditions for people related to the subject
     * relevant in the context of care for the subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory
     */
    public function getFamilyHistory()
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
    public function setFamilyHistory(FHIRFamilyHistory $FamilyHistory = null)
    {
        $this->FamilyHistory = $FamilyHistory;
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
    public function getGroup()
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
    public function setGroup(FHIRGroup $Group = null)
    {
        $this->Group = $Group;
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
    public function getImagingStudy()
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
    public function setImagingStudy(FHIRImagingStudy $ImagingStudy = null)
    {
        $this->ImagingStudy = $ImagingStudy;
        return $this;
    }

    /**
     * Immunization event information.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization
     */
    public function getImmunization()
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
    public function setImmunization(FHIRImmunization $Immunization = null)
    {
        $this->Immunization = $Immunization;
        return $this;
    }

    /**
     * A patient's point-of-time immunization status and recommendation with optional
     * supporting justification.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation
     */
    public function getImmunizationRecommendation()
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
    public function setImmunizationRecommendation(FHIRImmunizationRecommendation $ImmunizationRecommendation = null)
    {
        $this->ImmunizationRecommendation = $ImmunizationRecommendation;
        return $this;
    }

    /**
     * A set of information summarized from a list of other resources.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList
     */
    public function getList()
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
    public function setList(FHIRList $List = null)
    {
        $this->List = $List;
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
    public function getLocation()
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
    public function setLocation(FHIRLocation $Location = null)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * A photo, video, or audio recording acquired or used in healthcare. The actual
     * content may be inline or provided by direct reference.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia
     */
    public function getMedia()
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
    public function setMedia(FHIRMedia $Media = null)
    {
        $this->Media = $Media;
        return $this;
    }

    /**
     * Primarily used for identification and definition of Medication, but also covers
     * ingredients and packaging.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication
     */
    public function getMedication()
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
    public function setMedication(FHIRMedication $Medication = null)
    {
        $this->Medication = $Medication;
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
    public function getMedicationAdministration()
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
    public function setMedicationAdministration(FHIRMedicationAdministration $MedicationAdministration = null)
    {
        $this->MedicationAdministration = $MedicationAdministration;
        return $this;
    }

    /**
     * Dispensing a medication to a named patient. This includes a description of the
     * supply provided and the instructions for administering the medication.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense
     */
    public function getMedicationDispense()
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
    public function setMedicationDispense(FHIRMedicationDispense $MedicationDispense = null)
    {
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
    public function getMedicationPrescription()
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
    public function setMedicationPrescription(FHIRMedicationPrescription $MedicationPrescription = null)
    {
        $this->MedicationPrescription = $MedicationPrescription;
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
    public function getMedicationStatement()
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
    public function setMedicationStatement(FHIRMedicationStatement $MedicationStatement = null)
    {
        $this->MedicationStatement = $MedicationStatement;
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
    public function getMessageHeader()
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
    public function setMessageHeader(FHIRMessageHeader $MessageHeader = null)
    {
        $this->MessageHeader = $MessageHeader;
        return $this;
    }

    /**
     * Measurements and simple assertions made about a patient, device or other
     * subject.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation
     */
    public function getObservation()
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
    public function setObservation(FHIRObservation $Observation = null)
    {
        $this->Observation = $Observation;
        return $this;
    }

    /**
     * A collection of error, warning or information messages that result from a system
     * action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome
     */
    public function getOperationOutcome()
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
    public function setOperationOutcome(FHIROperationOutcome $OperationOutcome = null)
    {
        $this->OperationOutcome = $OperationOutcome;
        return $this;
    }

    /**
     * A request to perform an action.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder
     */
    public function getOrder()
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
    public function setOrder(FHIROrder $Order = null)
    {
        $this->Order = $Order;
        return $this;
    }

    /**
     * A response to an order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse
     */
    public function getOrderResponse()
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
    public function setOrderResponse(FHIROrderResponse $OrderResponse = null)
    {
        $this->OrderResponse = $OrderResponse;
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
    public function getOrganization()
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
    public function setOrganization(FHIROrganization $Organization = null)
    {
        $this->Organization = $Organization;
        return $this;
    }

    /**
     * Other is a conformant for handling resource concepts not yet defined for FHIR or
     * outside HL7's scope of interest.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther
     */
    public function getOther()
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
    public function setOther(FHIROther $Other = null)
    {
        $this->Other = $Other;
        return $this;
    }

    /**
     * Demographics and other administrative information about a person or animal
     * receiving care or other health-related services.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient
     */
    public function getPatient()
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
    public function setPatient(FHIRPatient $Patient = null)
    {
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
    public function getPractitioner()
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
    public function setPractitioner(FHIRPractitioner $Practitioner = null)
    {
        $this->Practitioner = $Practitioner;
        return $this;
    }

    /**
     * An action that is performed on a patient. This can be a physical 'thing' like an
     * operation, or less invasive like counseling or hypnotherapy.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure
     */
    public function getProcedure()
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
    public function setProcedure(FHIRProcedure $Procedure = null)
    {
        $this->Procedure = $Procedure;
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
    public function getProfile()
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
    public function setProfile(FHIRProfile $Profile = null)
    {
        $this->Profile = $Profile;
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
    public function getProvenance()
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
    public function setProvenance(FHIRProvenance $Provenance = null)
    {
        $this->Provenance = $Provenance;
        return $this;
    }

    /**
     * A description of a query with a set of parameters.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery
     */
    public function getQuery()
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
    public function setQuery(FHIRQuery $Query = null)
    {
        $this->Query = $Query;
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
    public function getQuestionnaire()
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
    public function setQuestionnaire(FHIRQuestionnaire $Questionnaire = null)
    {
        $this->Questionnaire = $Questionnaire;
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
    public function getRelatedPerson()
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
    public function setRelatedPerson(FHIRRelatedPerson $RelatedPerson = null)
    {
        $this->RelatedPerson = $RelatedPerson;
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
    public function getSecurityEvent()
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
    public function setSecurityEvent(FHIRSecurityEvent $SecurityEvent = null)
    {
        $this->SecurityEvent = $SecurityEvent;
        return $this;
    }

    /**
     * Sample for analysis.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen
     */
    public function getSpecimen()
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
    public function setSpecimen(FHIRSpecimen $Specimen = null)
    {
        $this->Specimen = $Specimen;
        return $this;
    }

    /**
     * A homogeneous material with a definite composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance
     */
    public function getSubstance()
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
    public function setSubstance(FHIRSubstance $Substance = null)
    {
        $this->Substance = $Substance;
        return $this;
    }

    /**
     * A supply - a request for something, and provision of what is supplied.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply
     */
    public function getSupply()
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
    public function setSupply(FHIRSupply $Supply = null)
    {
        $this->Supply = $Supply;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet
     */
    public function getValueSet()
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
    public function setValueSet(FHIRValueSet $ValueSet = null)
    {
        $this->ValueSet = $ValueSet;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = [];
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getAdverseReaction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADVERSE_REACTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAlert())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALERT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALLERGY_INTOLERANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBinary())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BINARY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCarePlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CARE_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getComposition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPOSITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConceptMap())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCEPT_MAP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCondition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONDITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConformance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONFORMANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeviceObservationReport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE_OBSERVATION_REPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiagnosticOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAGNOSTIC_ORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DIAGNOSTIC_REPORT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENT_MANIFEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENT_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFamilyHistory())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FAMILY_HISTORY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImagingStudy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMAGING_STUDY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImmunization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMMUNIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_IMMUNIZATION_RECOMMENDATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getList())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLocation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LOCATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedia())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDIA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_ADMINISTRATION] = $fieldErrs;
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
        if (null !== ($v = $this->getMedicationStatement())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_STATEMENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMessageHeader())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MESSAGE_HEADER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getObservation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OBSERVATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPERATION_OUTCOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrderResponse())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORDER_RESPONSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOther())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OTHER] = $fieldErrs;
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
        if (null !== ($v = $this->getProcedure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROCEDURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProfile())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROFILE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProvenance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROVENANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuery())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUERY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUESTIONNAIRE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATED_PERSON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSecurityEvent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SECURITY_EVENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSpecimen())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SPECIMEN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstance())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTANCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSupply())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUPPLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SET] = $fieldErrs;
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceInline $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceInline
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRResourceInline::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRResourceInline::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRResourceInline;
        } elseif (!is_object($type) || !($type instanceof FHIRResourceInline)) {
            throw new \RuntimeException(sprintf(
                'FHIRResourceInline::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceInline or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->AdverseReaction)) {
            $type->setAdverseReaction(FHIRAdverseReaction::xmlUnserialize($children->AdverseReaction));
        }
        if (isset($children->Alert)) {
            $type->setAlert(FHIRAlert::xmlUnserialize($children->Alert));
        }
        if (isset($children->AllergyIntolerance)) {
            $type->setAllergyIntolerance(FHIRAllergyIntolerance::xmlUnserialize($children->AllergyIntolerance));
        }
        if (isset($children->Binary)) {
            $type->setBinary(FHIRBinary::xmlUnserialize($children->Binary));
        }
        if (isset($children->CarePlan)) {
            $type->setCarePlan(FHIRCarePlan::xmlUnserialize($children->CarePlan));
        }
        if (isset($children->Composition)) {
            $type->setComposition(FHIRComposition::xmlUnserialize($children->Composition));
        }
        if (isset($children->ConceptMap)) {
            $type->setConceptMap(FHIRConceptMap::xmlUnserialize($children->ConceptMap));
        }
        if (isset($children->Condition)) {
            $type->setCondition(FHIRCondition::xmlUnserialize($children->Condition));
        }
        if (isset($children->Conformance)) {
            $type->setConformance(FHIRConformance::xmlUnserialize($children->Conformance));
        }
        if (isset($children->Device)) {
            $type->setDevice(FHIRDevice::xmlUnserialize($children->Device));
        }
        if (isset($children->DeviceObservationReport)) {
            $type->setDeviceObservationReport(FHIRDeviceObservationReport::xmlUnserialize($children->DeviceObservationReport));
        }
        if (isset($children->DiagnosticOrder)) {
            $type->setDiagnosticOrder(FHIRDiagnosticOrder::xmlUnserialize($children->DiagnosticOrder));
        }
        if (isset($children->DiagnosticReport)) {
            $type->setDiagnosticReport(FHIRDiagnosticReport::xmlUnserialize($children->DiagnosticReport));
        }
        if (isset($children->DocumentManifest)) {
            $type->setDocumentManifest(FHIRDocumentManifest::xmlUnserialize($children->DocumentManifest));
        }
        if (isset($children->DocumentReference)) {
            $type->setDocumentReference(FHIRDocumentReference::xmlUnserialize($children->DocumentReference));
        }
        if (isset($children->Encounter)) {
            $type->setEncounter(FHIREncounter::xmlUnserialize($children->Encounter));
        }
        if (isset($children->FamilyHistory)) {
            $type->setFamilyHistory(FHIRFamilyHistory::xmlUnserialize($children->FamilyHistory));
        }
        if (isset($children->Group)) {
            $type->setGroup(FHIRGroup::xmlUnserialize($children->Group));
        }
        if (isset($children->ImagingStudy)) {
            $type->setImagingStudy(FHIRImagingStudy::xmlUnserialize($children->ImagingStudy));
        }
        if (isset($children->Immunization)) {
            $type->setImmunization(FHIRImmunization::xmlUnserialize($children->Immunization));
        }
        if (isset($children->ImmunizationRecommendation)) {
            $type->setImmunizationRecommendation(FHIRImmunizationRecommendation::xmlUnserialize($children->ImmunizationRecommendation));
        }
        if (isset($children->List)) {
            $type->setList(FHIRList::xmlUnserialize($children->List));
        }
        if (isset($children->Location)) {
            $type->setLocation(FHIRLocation::xmlUnserialize($children->Location));
        }
        if (isset($children->Media)) {
            $type->setMedia(FHIRMedia::xmlUnserialize($children->Media));
        }
        if (isset($children->Medication)) {
            $type->setMedication(FHIRMedication::xmlUnserialize($children->Medication));
        }
        if (isset($children->MedicationAdministration)) {
            $type->setMedicationAdministration(FHIRMedicationAdministration::xmlUnserialize($children->MedicationAdministration));
        }
        if (isset($children->MedicationDispense)) {
            $type->setMedicationDispense(FHIRMedicationDispense::xmlUnserialize($children->MedicationDispense));
        }
        if (isset($children->MedicationPrescription)) {
            $type->setMedicationPrescription(FHIRMedicationPrescription::xmlUnserialize($children->MedicationPrescription));
        }
        if (isset($children->MedicationStatement)) {
            $type->setMedicationStatement(FHIRMedicationStatement::xmlUnserialize($children->MedicationStatement));
        }
        if (isset($children->MessageHeader)) {
            $type->setMessageHeader(FHIRMessageHeader::xmlUnserialize($children->MessageHeader));
        }
        if (isset($children->Observation)) {
            $type->setObservation(FHIRObservation::xmlUnserialize($children->Observation));
        }
        if (isset($children->OperationOutcome)) {
            $type->setOperationOutcome(FHIROperationOutcome::xmlUnserialize($children->OperationOutcome));
        }
        if (isset($children->Order)) {
            $type->setOrder(FHIROrder::xmlUnserialize($children->Order));
        }
        if (isset($children->OrderResponse)) {
            $type->setOrderResponse(FHIROrderResponse::xmlUnserialize($children->OrderResponse));
        }
        if (isset($children->Organization)) {
            $type->setOrganization(FHIROrganization::xmlUnserialize($children->Organization));
        }
        if (isset($children->Other)) {
            $type->setOther(FHIROther::xmlUnserialize($children->Other));
        }
        if (isset($children->Patient)) {
            $type->setPatient(FHIRPatient::xmlUnserialize($children->Patient));
        }
        if (isset($children->Practitioner)) {
            $type->setPractitioner(FHIRPractitioner::xmlUnserialize($children->Practitioner));
        }
        if (isset($children->Procedure)) {
            $type->setProcedure(FHIRProcedure::xmlUnserialize($children->Procedure));
        }
        if (isset($children->Profile)) {
            $type->setProfile(FHIRProfile::xmlUnserialize($children->Profile));
        }
        if (isset($children->Provenance)) {
            $type->setProvenance(FHIRProvenance::xmlUnserialize($children->Provenance));
        }
        if (isset($children->Query)) {
            $type->setQuery(FHIRQuery::xmlUnserialize($children->Query));
        }
        if (isset($children->Questionnaire)) {
            $type->setQuestionnaire(FHIRQuestionnaire::xmlUnserialize($children->Questionnaire));
        }
        if (isset($children->RelatedPerson)) {
            $type->setRelatedPerson(FHIRRelatedPerson::xmlUnserialize($children->RelatedPerson));
        }
        if (isset($children->SecurityEvent)) {
            $type->setSecurityEvent(FHIRSecurityEvent::xmlUnserialize($children->SecurityEvent));
        }
        if (isset($children->Specimen)) {
            $type->setSpecimen(FHIRSpecimen::xmlUnserialize($children->Specimen));
        }
        if (isset($children->Substance)) {
            $type->setSubstance(FHIRSubstance::xmlUnserialize($children->Substance));
        }
        if (isset($children->Supply)) {
            $type->setSupply(FHIRSupply::xmlUnserialize($children->Supply));
        }
        if (isset($children->ValueSet)) {
            $type->setValueSet(FHIRValueSet::xmlUnserialize($children->ValueSet));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null !== ($v = $this->getAdverseReaction())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getAlert())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getBinary())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCarePlan())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getComposition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getConceptMap())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getCondition())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getConformance())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDevice())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDeviceObservationReport())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDiagnosticOrder())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getDocumentReference())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getEncounter())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getFamilyHistory())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getGroup())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getImagingStudy())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getImmunization())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getList())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getLocation())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedia())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedication())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedicationPrescription())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getMessageHeader())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getObservation())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getOrder())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getOrderResponse())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getOrganization())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getOther())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getPatient())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getPractitioner())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getProcedure())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getProfile())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getProvenance())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getQuery())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSecurityEvent())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSpecimen())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSubstance())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getSupply())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null !== ($v = $this->getValueSet())) {
            return $v->xmlSerialize($sxe, $libxmlOpts);
        }
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        return $sxe;
    }

    /**
     * @return object|null
     */
    public function jsonSerialize()
    {
        if (null !== ($v = $this->getAdverseReaction())) {
            return $v;
        }
        if (null !== ($v = $this->getAlert())) {
            return $v;
        }
        if (null !== ($v = $this->getAllergyIntolerance())) {
            return $v;
        }
        if (null !== ($v = $this->getBinary())) {
            return $v;
        }
        if (null !== ($v = $this->getCarePlan())) {
            return $v;
        }
        if (null !== ($v = $this->getComposition())) {
            return $v;
        }
        if (null !== ($v = $this->getConceptMap())) {
            return $v;
        }
        if (null !== ($v = $this->getCondition())) {
            return $v;
        }
        if (null !== ($v = $this->getConformance())) {
            return $v;
        }
        if (null !== ($v = $this->getDevice())) {
            return $v;
        }
        if (null !== ($v = $this->getDeviceObservationReport())) {
            return $v;
        }
        if (null !== ($v = $this->getDiagnosticOrder())) {
            return $v;
        }
        if (null !== ($v = $this->getDiagnosticReport())) {
            return $v;
        }
        if (null !== ($v = $this->getDocumentManifest())) {
            return $v;
        }
        if (null !== ($v = $this->getDocumentReference())) {
            return $v;
        }
        if (null !== ($v = $this->getEncounter())) {
            return $v;
        }
        if (null !== ($v = $this->getFamilyHistory())) {
            return $v;
        }
        if (null !== ($v = $this->getGroup())) {
            return $v;
        }
        if (null !== ($v = $this->getImagingStudy())) {
            return $v;
        }
        if (null !== ($v = $this->getImmunization())) {
            return $v;
        }
        if (null !== ($v = $this->getImmunizationRecommendation())) {
            return $v;
        }
        if (null !== ($v = $this->getList())) {
            return $v;
        }
        if (null !== ($v = $this->getLocation())) {
            return $v;
        }
        if (null !== ($v = $this->getMedia())) {
            return $v;
        }
        if (null !== ($v = $this->getMedication())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationAdministration())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationDispense())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationPrescription())) {
            return $v;
        }
        if (null !== ($v = $this->getMedicationStatement())) {
            return $v;
        }
        if (null !== ($v = $this->getMessageHeader())) {
            return $v;
        }
        if (null !== ($v = $this->getObservation())) {
            return $v;
        }
        if (null !== ($v = $this->getOperationOutcome())) {
            return $v;
        }
        if (null !== ($v = $this->getOrder())) {
            return $v;
        }
        if (null !== ($v = $this->getOrderResponse())) {
            return $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            return $v;
        }
        if (null !== ($v = $this->getOther())) {
            return $v;
        }
        if (null !== ($v = $this->getPatient())) {
            return $v;
        }
        if (null !== ($v = $this->getPractitioner())) {
            return $v;
        }
        if (null !== ($v = $this->getProcedure())) {
            return $v;
        }
        if (null !== ($v = $this->getProfile())) {
            return $v;
        }
        if (null !== ($v = $this->getProvenance())) {
            return $v;
        }
        if (null !== ($v = $this->getQuery())) {
            return $v;
        }
        if (null !== ($v = $this->getQuestionnaire())) {
            return $v;
        }
        if (null !== ($v = $this->getRelatedPerson())) {
            return $v;
        }
        if (null !== ($v = $this->getSecurityEvent())) {
            return $v;
        }
        if (null !== ($v = $this->getSpecimen())) {
            return $v;
        }
        if (null !== ($v = $this->getSubstance())) {
            return $v;
        }
        if (null !== ($v = $this->getSupply())) {
            return $v;
        }
        if (null !== ($v = $this->getValueSet())) {
            return $v;
        }
        return null;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}