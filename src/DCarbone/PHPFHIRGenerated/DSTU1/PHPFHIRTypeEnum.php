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

/**
 * Enum PHPFHIRTypeEnum
 * @package \DCarbone\PHPFHIRGenerated\DSTU1
 */
enum PHPFHIRTypeEnum : string
{
    case ADDRESS = 'Address';
    case ADDRESS_USE = 'AddressUse';
    case ADDRESS_USE_HYPHEN_LIST = 'AddressUse-list';
    case ADVERSE_REACTION = 'AdverseReaction';
    case ADVERSE_REACTION_DOT_EXPOSURE = 'AdverseReaction.Exposure';
    case ADVERSE_REACTION_DOT_SYMPTOM = 'AdverseReaction.Symptom';
    case AGE = 'Age';
    case AGGREGATION_MODE = 'AggregationMode';
    case AGGREGATION_MODE_HYPHEN_LIST = 'AggregationMode-list';
    case ALERT = 'Alert';
    case ALERT_STATUS = 'AlertStatus';
    case ALERT_STATUS_HYPHEN_LIST = 'AlertStatus-list';
    case ALLERGY_INTOLERANCE = 'AllergyIntolerance';
    case ATTACHMENT = 'Attachment';
    case BACKBONE_ELEMENT = 'BackboneElement';
    case BASE_64BINARY = 'base64Binary';
    case BASE_64BINARY_HYPHEN_PRIMITIVE = 'base64Binary-primitive';
    case BINARY = 'Binary';
    case BINDING_CONFORMANCE = 'BindingConformance';
    case BINDING_CONFORMANCE_HYPHEN_LIST = 'BindingConformance-list';
    case BOOLEAN = 'boolean';
    case BOOLEAN_HYPHEN_PRIMITIVE = 'boolean-primitive';
    case CARE_PLAN = 'CarePlan';
    case CARE_PLAN_DOT_ACTIVITY = 'CarePlan.Activity';
    case CARE_PLAN_DOT_GOAL = 'CarePlan.Goal';
    case CARE_PLAN_DOT_PARTICIPANT = 'CarePlan.Participant';
    case CARE_PLAN_DOT_SIMPLE = 'CarePlan.Simple';
    case CARE_PLAN_ACTIVITY_CATEGORY = 'CarePlanActivityCategory';
    case CARE_PLAN_ACTIVITY_CATEGORY_HYPHEN_LIST = 'CarePlanActivityCategory-list';
    case CARE_PLAN_ACTIVITY_STATUS = 'CarePlanActivityStatus';
    case CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST = 'CarePlanActivityStatus-list';
    case CARE_PLAN_GOAL_STATUS = 'CarePlanGoalStatus';
    case CARE_PLAN_GOAL_STATUS_HYPHEN_LIST = 'CarePlanGoalStatus-list';
    case CARE_PLAN_STATUS = 'CarePlanStatus';
    case CARE_PLAN_STATUS_HYPHEN_LIST = 'CarePlanStatus-list';
    case CAUSALITY_EXPECTATION = 'CausalityExpectation';
    case CAUSALITY_EXPECTATION_HYPHEN_LIST = 'CausalityExpectation-list';
    case CODE = 'code';
    case CODE_HYPHEN_PRIMITIVE = 'code-primitive';
    case CODEABLE_CONCEPT = 'CodeableConcept';
    case CODING = 'Coding';
    case COMPOSITION = 'Composition';
    case COMPOSITION_DOT_ATTESTER = 'Composition.Attester';
    case COMPOSITION_DOT_EVENT = 'Composition.Event';
    case COMPOSITION_DOT_SECTION = 'Composition.Section';
    case COMPOSITION_ATTESTATION_MODE = 'CompositionAttestationMode';
    case COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST = 'CompositionAttestationMode-list';
    case COMPOSITION_STATUS = 'CompositionStatus';
    case COMPOSITION_STATUS_HYPHEN_LIST = 'CompositionStatus-list';
    case CONCEPT_MAP = 'ConceptMap';
    case CONCEPT_MAP_DOT_CONCEPT = 'ConceptMap.Concept';
    case CONCEPT_MAP_DOT_DEPENDS_ON = 'ConceptMap.DependsOn';
    case CONCEPT_MAP_DOT_MAP = 'ConceptMap.Map';
    case CONCEPT_MAP_EQUIVALENCE = 'ConceptMapEquivalence';
    case CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST = 'ConceptMapEquivalence-list';
    case CONDITION = 'Condition';
    case CONDITION_DOT_EVIDENCE = 'Condition.Evidence';
    case CONDITION_DOT_LOCATION = 'Condition.Location';
    case CONDITION_DOT_RELATED_ITEM = 'Condition.RelatedItem';
    case CONDITION_DOT_STAGE = 'Condition.Stage';
    case CONDITION_RELATIONSHIP_TYPE = 'ConditionRelationshipType';
    case CONDITION_RELATIONSHIP_TYPE_HYPHEN_LIST = 'ConditionRelationshipType-list';
    case CONDITION_STATUS = 'ConditionStatus';
    case CONDITION_STATUS_HYPHEN_LIST = 'ConditionStatus-list';
    case CONFORMANCE = 'Conformance';
    case CONFORMANCE_DOT_CERTIFICATE = 'Conformance.Certificate';
    case CONFORMANCE_DOT_DOCUMENT = 'Conformance.Document';
    case CONFORMANCE_DOT_EVENT = 'Conformance.Event';
    case CONFORMANCE_DOT_IMPLEMENTATION = 'Conformance.Implementation';
    case CONFORMANCE_DOT_MESSAGING = 'Conformance.Messaging';
    case CONFORMANCE_DOT_OPERATION = 'Conformance.Operation';
    case CONFORMANCE_DOT_OPERATION_1 = 'Conformance.Operation1';
    case CONFORMANCE_DOT_QUERY = 'Conformance.Query';
    case CONFORMANCE_DOT_RESOURCE = 'Conformance.Resource';
    case CONFORMANCE_DOT_REST = 'Conformance.Rest';
    case CONFORMANCE_DOT_SEARCH_PARAM = 'Conformance.SearchParam';
    case CONFORMANCE_DOT_SECURITY = 'Conformance.Security';
    case CONFORMANCE_DOT_SOFTWARE = 'Conformance.Software';
    case CONFORMANCE_EVENT_MODE = 'ConformanceEventMode';
    case CONFORMANCE_EVENT_MODE_HYPHEN_LIST = 'ConformanceEventMode-list';
    case CONFORMANCE_STATEMENT_STATUS = 'ConformanceStatementStatus';
    case CONFORMANCE_STATEMENT_STATUS_HYPHEN_LIST = 'ConformanceStatementStatus-list';
    case CONSTRAINT_SEVERITY = 'ConstraintSeverity';
    case CONSTRAINT_SEVERITY_HYPHEN_LIST = 'ConstraintSeverity-list';
    case CONTACT = 'Contact';
    case CONTACT_SYSTEM = 'ContactSystem';
    case CONTACT_SYSTEM_HYPHEN_LIST = 'ContactSystem-list';
    case CONTACT_USE = 'ContactUse';
    case CONTACT_USE_HYPHEN_LIST = 'ContactUse-list';
    case COUNT = 'Count';
    case CRITICALITY = 'Criticality';
    case CRITICALITY_HYPHEN_LIST = 'Criticality-list';
    case DATE = 'date';
    case DATE_HYPHEN_PRIMITIVE = 'date-primitive';
    case DATE_TIME = 'dateTime';
    case DATE_TIME_HYPHEN_PRIMITIVE = 'dateTime-primitive';
    case DECIMAL = 'decimal';
    case DECIMAL_HYPHEN_PRIMITIVE = 'decimal-primitive';
    case DEVICE = 'Device';
    case DEVICE_OBSERVATION_REPORT = 'DeviceObservationReport';
    case DEVICE_OBSERVATION_REPORT_DOT_CHANNEL = 'DeviceObservationReport.Channel';
    case DEVICE_OBSERVATION_REPORT_DOT_METRIC = 'DeviceObservationReport.Metric';
    case DEVICE_OBSERVATION_REPORT_DOT_VIRTUAL_DEVICE = 'DeviceObservationReport.VirtualDevice';
    case DIAGNOSTIC_ORDER = 'DiagnosticOrder';
    case DIAGNOSTIC_ORDER_DOT_EVENT = 'DiagnosticOrder.Event';
    case DIAGNOSTIC_ORDER_DOT_ITEM = 'DiagnosticOrder.Item';
    case DIAGNOSTIC_ORDER_PRIORITY = 'DiagnosticOrderPriority';
    case DIAGNOSTIC_ORDER_PRIORITY_HYPHEN_LIST = 'DiagnosticOrderPriority-list';
    case DIAGNOSTIC_ORDER_STATUS = 'DiagnosticOrderStatus';
    case DIAGNOSTIC_ORDER_STATUS_HYPHEN_LIST = 'DiagnosticOrderStatus-list';
    case DIAGNOSTIC_REPORT = 'DiagnosticReport';
    case DIAGNOSTIC_REPORT_DOT_IMAGE = 'DiagnosticReport.Image';
    case DIAGNOSTIC_REPORT_STATUS = 'DiagnosticReportStatus';
    case DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST = 'DiagnosticReportStatus-list';
    case DISTANCE = 'Distance';
    case DOCUMENT_MANIFEST = 'DocumentManifest';
    case DOCUMENT_MODE = 'DocumentMode';
    case DOCUMENT_MODE_HYPHEN_LIST = 'DocumentMode-list';
    case DOCUMENT_REFERENCE = 'DocumentReference';
    case DOCUMENT_REFERENCE_DOT_CONTEXT = 'DocumentReference.Context';
    case DOCUMENT_REFERENCE_DOT_PARAMETER = 'DocumentReference.Parameter';
    case DOCUMENT_REFERENCE_DOT_RELATES_TO = 'DocumentReference.RelatesTo';
    case DOCUMENT_REFERENCE_DOT_SERVICE = 'DocumentReference.Service';
    case DOCUMENT_REFERENCE_STATUS = 'DocumentReferenceStatus';
    case DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST = 'DocumentReferenceStatus-list';
    case DOCUMENT_RELATIONSHIP_TYPE = 'DocumentRelationshipType';
    case DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST = 'DocumentRelationshipType-list';
    case DURATION = 'Duration';
    case ELEMENT = 'Element';
    case ENCOUNTER = 'Encounter';
    case ENCOUNTER_DOT_ACCOMODATION = 'Encounter.Accomodation';
    case ENCOUNTER_DOT_HOSPITALIZATION = 'Encounter.Hospitalization';
    case ENCOUNTER_DOT_LOCATION = 'Encounter.Location';
    case ENCOUNTER_DOT_PARTICIPANT = 'Encounter.Participant';
    case ENCOUNTER_CLASS = 'EncounterClass';
    case ENCOUNTER_CLASS_HYPHEN_LIST = 'EncounterClass-list';
    case ENCOUNTER_STATE = 'EncounterState';
    case ENCOUNTER_STATE_HYPHEN_LIST = 'EncounterState-list';
    case EVENT_TIMING = 'EventTiming';
    case EVENT_TIMING_HYPHEN_LIST = 'EventTiming-list';
    case EXPOSURE_TYPE = 'ExposureType';
    case EXPOSURE_TYPE_HYPHEN_LIST = 'ExposureType-list';
    case EXTENSION = 'Extension';
    case EXTENSION_CONTEXT = 'ExtensionContext';
    case EXTENSION_CONTEXT_HYPHEN_LIST = 'ExtensionContext-list';
    case FAMILY_HISTORY = 'FamilyHistory';
    case FAMILY_HISTORY_DOT_CONDITION = 'FamilyHistory.Condition';
    case FAMILY_HISTORY_DOT_RELATION = 'FamilyHistory.Relation';
    case FILTER_OPERATOR = 'FilterOperator';
    case FILTER_OPERATOR_HYPHEN_LIST = 'FilterOperator-list';
    case GROUP = 'Group';
    case GROUP_DOT_CHARACTERISTIC = 'Group.Characteristic';
    case GROUP_TYPE = 'GroupType';
    case GROUP_TYPE_HYPHEN_LIST = 'GroupType-list';
    case HIERARCHICAL_RELATIONSHIP_TYPE = 'HierarchicalRelationshipType';
    case HIERARCHICAL_RELATIONSHIP_TYPE_HYPHEN_LIST = 'HierarchicalRelationshipType-list';
    case HUMAN_NAME = 'HumanName';
    case ID = 'id';
    case ID_HYPHEN_PRIMITIVE = 'id-primitive';
    case IDENTIFIER = 'Identifier';
    case IDENTIFIER_USE = 'IdentifierUse';
    case IDENTIFIER_USE_HYPHEN_LIST = 'IdentifierUse-list';
    case IMAGING_MODALITY = 'ImagingModality';
    case IMAGING_MODALITY_HYPHEN_LIST = 'ImagingModality-list';
    case IMAGING_STUDY = 'ImagingStudy';
    case IMAGING_STUDY_DOT_INSTANCE = 'ImagingStudy.Instance';
    case IMAGING_STUDY_DOT_SERIES = 'ImagingStudy.Series';
    case IMMUNIZATION = 'Immunization';
    case IMMUNIZATION_DOT_EXPLANATION = 'Immunization.Explanation';
    case IMMUNIZATION_DOT_REACTION = 'Immunization.Reaction';
    case IMMUNIZATION_DOT_VACCINATION_PROTOCOL = 'Immunization.VaccinationProtocol';
    case IMMUNIZATION_RECOMMENDATION = 'ImmunizationRecommendation';
    case IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION = 'ImmunizationRecommendation.DateCriterion';
    case IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL = 'ImmunizationRecommendation.Protocol';
    case IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION = 'ImmunizationRecommendation.Recommendation';
    case INSTANCE_AVAILABILITY = 'InstanceAvailability';
    case INSTANCE_AVAILABILITY_HYPHEN_LIST = 'InstanceAvailability-list';
    case INSTANT = 'instant';
    case INSTANT_HYPHEN_PRIMITIVE = 'instant-primitive';
    case INTEGER = 'integer';
    case INTEGER_HYPHEN_PRIMITIVE = 'integer-primitive';
    case ISSUE_SEVERITY = 'IssueSeverity';
    case ISSUE_SEVERITY_HYPHEN_LIST = 'IssueSeverity-list';
    case LINK_TYPE = 'LinkType';
    case LINK_TYPE_HYPHEN_LIST = 'LinkType-list';
    case LIST = 'List';
    case LIST_DOT_ENTRY = 'List.Entry';
    case LIST_MODE = 'ListMode';
    case LIST_MODE_HYPHEN_LIST = 'ListMode-list';
    case LOCATION = 'Location';
    case LOCATION_DOT_POSITION = 'Location.Position';
    case LOCATION_MODE = 'LocationMode';
    case LOCATION_MODE_HYPHEN_LIST = 'LocationMode-list';
    case LOCATION_STATUS = 'LocationStatus';
    case LOCATION_STATUS_HYPHEN_LIST = 'LocationStatus-list';
    case MEDIA = 'Media';
    case MEDIA_TYPE = 'MediaType';
    case MEDIA_TYPE_HYPHEN_LIST = 'MediaType-list';
    case MEDICATION = 'Medication';
    case MEDICATION_DOT_CONTENT = 'Medication.Content';
    case MEDICATION_DOT_INGREDIENT = 'Medication.Ingredient';
    case MEDICATION_DOT_PACKAGE = 'Medication.Package';
    case MEDICATION_DOT_PRODUCT = 'Medication.Product';
    case MEDICATION_ADMINISTRATION = 'MedicationAdministration';
    case MEDICATION_ADMINISTRATION_DOT_DOSAGE = 'MedicationAdministration.Dosage';
    case MEDICATION_ADMINISTRATION_STATUS = 'MedicationAdministrationStatus';
    case MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST = 'MedicationAdministrationStatus-list';
    case MEDICATION_DISPENSE = 'MedicationDispense';
    case MEDICATION_DISPENSE_DOT_DISPENSE = 'MedicationDispense.Dispense';
    case MEDICATION_DISPENSE_DOT_DOSAGE = 'MedicationDispense.Dosage';
    case MEDICATION_DISPENSE_DOT_SUBSTITUTION = 'MedicationDispense.Substitution';
    case MEDICATION_DISPENSE_STATUS = 'MedicationDispenseStatus';
    case MEDICATION_DISPENSE_STATUS_HYPHEN_LIST = 'MedicationDispenseStatus-list';
    case MEDICATION_KIND = 'MedicationKind';
    case MEDICATION_KIND_HYPHEN_LIST = 'MedicationKind-list';
    case MEDICATION_PRESCRIPTION = 'MedicationPrescription';
    case MEDICATION_PRESCRIPTION_DOT_DISPENSE = 'MedicationPrescription.Dispense';
    case MEDICATION_PRESCRIPTION_DOT_DOSAGE_INSTRUCTION = 'MedicationPrescription.DosageInstruction';
    case MEDICATION_PRESCRIPTION_DOT_SUBSTITUTION = 'MedicationPrescription.Substitution';
    case MEDICATION_PRESCRIPTION_STATUS = 'MedicationPrescriptionStatus';
    case MEDICATION_PRESCRIPTION_STATUS_HYPHEN_LIST = 'MedicationPrescriptionStatus-list';
    case MEDICATION_STATEMENT = 'MedicationStatement';
    case MEDICATION_STATEMENT_DOT_DOSAGE = 'MedicationStatement.Dosage';
    case MESSAGE_HEADER = 'MessageHeader';
    case MESSAGE_HEADER_DOT_DESTINATION = 'MessageHeader.Destination';
    case MESSAGE_HEADER_DOT_RESPONSE = 'MessageHeader.Response';
    case MESSAGE_HEADER_DOT_SOURCE = 'MessageHeader.Source';
    case MESSAGE_SIGNIFICANCE_CATEGORY = 'MessageSignificanceCategory';
    case MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST = 'MessageSignificanceCategory-list';
    case MODALITY = 'Modality';
    case MODALITY_HYPHEN_LIST = 'Modality-list';
    case MONEY = 'Money';
    case NAME_USE = 'NameUse';
    case NAME_USE_HYPHEN_LIST = 'NameUse-list';
    case NARRATIVE = 'Narrative';
    case NARRATIVE_STATUS = 'NarrativeStatus';
    case NARRATIVE_STATUS_HYPHEN_LIST = 'NarrativeStatus-list';
    case OBSERVATION = 'Observation';
    case OBSERVATION_DOT_REFERENCE_RANGE = 'Observation.ReferenceRange';
    case OBSERVATION_DOT_RELATED = 'Observation.Related';
    case OBSERVATION_RELATIONSHIP_TYPE = 'ObservationRelationshipType';
    case OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST = 'ObservationRelationshipType-list';
    case OBSERVATION_RELIABILITY = 'ObservationReliability';
    case OBSERVATION_RELIABILITY_HYPHEN_LIST = 'ObservationReliability-list';
    case OBSERVATION_STATUS = 'ObservationStatus';
    case OBSERVATION_STATUS_HYPHEN_LIST = 'ObservationStatus-list';
    case OID = 'oid';
    case OID_HYPHEN_PRIMITIVE = 'oid-primitive';
    case OPERATION_OUTCOME = 'OperationOutcome';
    case OPERATION_OUTCOME_DOT_ISSUE = 'OperationOutcome.Issue';
    case ORDER = 'Order';
    case ORDER_DOT_WHEN = 'Order.When';
    case ORDER_OUTCOME_STATUS = 'OrderOutcomeStatus';
    case ORDER_OUTCOME_STATUS_HYPHEN_LIST = 'OrderOutcomeStatus-list';
    case ORDER_RESPONSE = 'OrderResponse';
    case ORGANIZATION = 'Organization';
    case ORGANIZATION_DOT_CONTACT = 'Organization.Contact';
    case OTHER = 'Other';
    case PATIENT = 'Patient';
    case PATIENT_DOT_ANIMAL = 'Patient.Animal';
    case PATIENT_DOT_CONTACT = 'Patient.Contact';
    case PATIENT_DOT_LINK = 'Patient.Link';
    case PERIOD = 'Period';
    case PRACTITIONER = 'Practitioner';
    case PRACTITIONER_DOT_QUALIFICATION = 'Practitioner.Qualification';
    case PROCEDURE = 'Procedure';
    case PROCEDURE_DOT_PERFORMER = 'Procedure.Performer';
    case PROCEDURE_DOT_RELATED_ITEM = 'Procedure.RelatedItem';
    case PROCEDURE_RELATIONSHIP_TYPE = 'ProcedureRelationshipType';
    case PROCEDURE_RELATIONSHIP_TYPE_HYPHEN_LIST = 'ProcedureRelationshipType-list';
    case PROFILE = 'Profile';
    case PROFILE_DOT_BINDING = 'Profile.Binding';
    case PROFILE_DOT_CONSTRAINT = 'Profile.Constraint';
    case PROFILE_DOT_DEFINITION = 'Profile.Definition';
    case PROFILE_DOT_ELEMENT = 'Profile.Element';
    case PROFILE_DOT_EXTENSION_DEFN = 'Profile.ExtensionDefn';
    case PROFILE_DOT_MAPPING = 'Profile.Mapping';
    case PROFILE_DOT_MAPPING_1 = 'Profile.Mapping1';
    case PROFILE_DOT_QUERY = 'Profile.Query';
    case PROFILE_DOT_SEARCH_PARAM = 'Profile.SearchParam';
    case PROFILE_DOT_SLICING = 'Profile.Slicing';
    case PROFILE_DOT_STRUCTURE = 'Profile.Structure';
    case PROFILE_DOT_TYPE = 'Profile.Type';
    case PROPERTY_REPRESENTATION = 'PropertyRepresentation';
    case PROPERTY_REPRESENTATION_HYPHEN_LIST = 'PropertyRepresentation-list';
    case PROVENANCE = 'Provenance';
    case PROVENANCE_DOT_AGENT = 'Provenance.Agent';
    case PROVENANCE_DOT_ENTITY = 'Provenance.Entity';
    case PROVENANCE_ENTITY_ROLE = 'ProvenanceEntityRole';
    case PROVENANCE_ENTITY_ROLE_HYPHEN_LIST = 'ProvenanceEntityRole-list';
    case QUANTITY = 'Quantity';
    case QUANTITY_COMPARARATOR = 'QuantityCompararator';
    case QUANTITY_COMPARARATOR_HYPHEN_LIST = 'QuantityCompararator-list';
    case QUERY = 'Query';
    case QUERY_DOT_RESPONSE = 'Query.Response';
    case QUERY_OUTCOME = 'QueryOutcome';
    case QUERY_OUTCOME_HYPHEN_LIST = 'QueryOutcome-list';
    case QUESTIONNAIRE = 'Questionnaire';
    case QUESTIONNAIRE_DOT_GROUP = 'Questionnaire.Group';
    case QUESTIONNAIRE_DOT_QUESTION = 'Questionnaire.Question';
    case QUESTIONNAIRE_STATUS = 'QuestionnaireStatus';
    case QUESTIONNAIRE_STATUS_HYPHEN_LIST = 'QuestionnaireStatus-list';
    case RANGE = 'Range';
    case RATIO = 'Ratio';
    case REACTION_SEVERITY = 'ReactionSeverity';
    case REACTION_SEVERITY_HYPHEN_LIST = 'ReactionSeverity-list';
    case RELATED_PERSON = 'RelatedPerson';
    case RESOURCE = 'Resource';
    case RESOURCE_DOT_INLINE = 'Resource.Inline';
    case RESOURCE_NAMES_PLUS_BINARY = 'ResourceNamesPlusBinary';
    case RESOURCE_PROFILE_STATUS = 'ResourceProfileStatus';
    case RESOURCE_PROFILE_STATUS_HYPHEN_LIST = 'ResourceProfileStatus-list';
    case RESOURCE_REFERENCE = 'ResourceReference';
    case RESOURCE_TYPE = 'ResourceType';
    case RESPONSE_TYPE = 'ResponseType';
    case RESPONSE_TYPE_HYPHEN_LIST = 'ResponseType-list';
    case RESTFUL_CONFORMANCE_MODE = 'RestfulConformanceMode';
    case RESTFUL_CONFORMANCE_MODE_HYPHEN_LIST = 'RestfulConformanceMode-list';
    case RESTFUL_OPERATION_SYSTEM = 'RestfulOperationSystem';
    case RESTFUL_OPERATION_SYSTEM_HYPHEN_LIST = 'RestfulOperationSystem-list';
    case RESTFUL_OPERATION_TYPE = 'RestfulOperationType';
    case RESTFUL_OPERATION_TYPE_HYPHEN_LIST = 'RestfulOperationType-list';
    case SAMPLED_DATA = 'SampledData';
    case SAMPLED_DATA_DATA_TYPE = 'SampledDataDataType';
    case SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE = 'SampledDataDataType-primitive';
    case SCHEDULE = 'Schedule';
    case SCHEDULE_DOT_REPEAT = 'Schedule.Repeat';
    case SCORE = 'score';
    case SEARCH_PARAM_TYPE = 'SearchParamType';
    case SEARCH_PARAM_TYPE_HYPHEN_LIST = 'SearchParamType-list';
    case SECURITY_EVENT = 'SecurityEvent';
    case SECURITY_EVENT_DOT_DETAIL = 'SecurityEvent.Detail';
    case SECURITY_EVENT_DOT_EVENT = 'SecurityEvent.Event';
    case SECURITY_EVENT_DOT_NETWORK = 'SecurityEvent.Network';
    case SECURITY_EVENT_DOT_OBJECT = 'SecurityEvent.Object';
    case SECURITY_EVENT_DOT_PARTICIPANT = 'SecurityEvent.Participant';
    case SECURITY_EVENT_DOT_SOURCE = 'SecurityEvent.Source';
    case SECURITY_EVENT_ACTION = 'SecurityEventAction';
    case SECURITY_EVENT_ACTION_HYPHEN_LIST = 'SecurityEventAction-list';
    case SECURITY_EVENT_OBJECT_LIFECYCLE = 'SecurityEventObjectLifecycle';
    case SECURITY_EVENT_OBJECT_LIFECYCLE_HYPHEN_LIST = 'SecurityEventObjectLifecycle-list';
    case SECURITY_EVENT_OBJECT_ROLE = 'SecurityEventObjectRole';
    case SECURITY_EVENT_OBJECT_ROLE_HYPHEN_LIST = 'SecurityEventObjectRole-list';
    case SECURITY_EVENT_OBJECT_TYPE = 'SecurityEventObjectType';
    case SECURITY_EVENT_OBJECT_TYPE_HYPHEN_LIST = 'SecurityEventObjectType-list';
    case SECURITY_EVENT_OUTCOME = 'SecurityEventOutcome';
    case SECURITY_EVENT_OUTCOME_HYPHEN_LIST = 'SecurityEventOutcome-list';
    case SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE = 'SecurityEventParticipantNetworkType';
    case SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE_HYPHEN_LIST = 'SecurityEventParticipantNetworkType-list';
    case SENSITIVITY_STATUS = 'SensitivityStatus';
    case SENSITIVITY_STATUS_HYPHEN_LIST = 'SensitivityStatus-list';
    case SENSITIVITY_TYPE = 'SensitivityType';
    case SENSITIVITY_TYPE_HYPHEN_LIST = 'SensitivityType-list';
    case SLICING_RULES = 'SlicingRules';
    case SLICING_RULES_HYPHEN_LIST = 'SlicingRules-list';
    case SPECIMEN = 'Specimen';
    case SPECIMEN_DOT_COLLECTION = 'Specimen.Collection';
    case SPECIMEN_DOT_CONTAINER = 'Specimen.Container';
    case SPECIMEN_DOT_SOURCE = 'Specimen.Source';
    case SPECIMEN_DOT_TREATMENT = 'Specimen.Treatment';
    case STRING = 'string';
    case STRING_HYPHEN_PRIMITIVE = 'string-primitive';
    case SUBSTANCE = 'Substance';
    case SUBSTANCE_DOT_INGREDIENT = 'Substance.Ingredient';
    case SUBSTANCE_DOT_INSTANCE = 'Substance.Instance';
    case SUPPLY = 'Supply';
    case SUPPLY_DOT_DISPENSE = 'Supply.Dispense';
    case SUPPLY_DISPENSE_STATUS = 'SupplyDispenseStatus';
    case SUPPLY_DISPENSE_STATUS_HYPHEN_LIST = 'SupplyDispenseStatus-list';
    case SUPPLY_STATUS = 'SupplyStatus';
    case SUPPLY_STATUS_HYPHEN_LIST = 'SupplyStatus-list';
    case TOTAL_RESULTS = 'totalResults';
    case UNITS_OF_TIME = 'UnitsOfTime';
    case UNITS_OF_TIME_HYPHEN_LIST = 'UnitsOfTime-list';
    case URI = 'uri';
    case URI_HYPHEN_PRIMITIVE = 'uri-primitive';
    case UUID = 'uuid';
    case UUID_HYPHEN_PRIMITIVE = 'uuid-primitive';
    case VALUE_SET = 'ValueSet';
    case VALUE_SET_DOT_COMPOSE = 'ValueSet.Compose';
    case VALUE_SET_DOT_CONCEPT = 'ValueSet.Concept';
    case VALUE_SET_DOT_CONTAINS = 'ValueSet.Contains';
    case VALUE_SET_DOT_DEFINE = 'ValueSet.Define';
    case VALUE_SET_DOT_EXPANSION = 'ValueSet.Expansion';
    case VALUE_SET_DOT_FILTER = 'ValueSet.Filter';
    case VALUE_SET_DOT_INCLUDE = 'ValueSet.Include';
    case VALUE_SET_STATUS = 'ValueSetStatus';
    case VALUE_SET_STATUS_HYPHEN_LIST = 'ValueSetStatus-list';
    case XHTML = 'Xhtml';
    case XML_ID_REF = 'xmlIdRef';
}

