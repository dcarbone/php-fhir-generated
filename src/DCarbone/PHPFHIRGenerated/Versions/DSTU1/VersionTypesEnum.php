<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1;

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

enum VersionTypesEnum : string
{
    case ADDRESS = VersionConstants::TYPE_NAME_ADDRESS;
    case ADDRESS_USE = VersionConstants::TYPE_NAME_ADDRESS_USE;
    case ADDRESS_USE_HYPHEN_LIST = VersionConstants::TYPE_NAME_ADDRESS_USE_HYPHEN_LIST;
    case ADVERSE_REACTION = VersionConstants::TYPE_NAME_ADVERSE_REACTION;
    case ADVERSE_REACTION_DOT_EXPOSURE = VersionConstants::TYPE_NAME_ADVERSE_REACTION_DOT_EXPOSURE;
    case ADVERSE_REACTION_DOT_SYMPTOM = VersionConstants::TYPE_NAME_ADVERSE_REACTION_DOT_SYMPTOM;
    case AGE = VersionConstants::TYPE_NAME_AGE;
    case AGGREGATION_MODE = VersionConstants::TYPE_NAME_AGGREGATION_MODE;
    case AGGREGATION_MODE_HYPHEN_LIST = VersionConstants::TYPE_NAME_AGGREGATION_MODE_HYPHEN_LIST;
    case ALERT = VersionConstants::TYPE_NAME_ALERT;
    case ALERT_STATUS = VersionConstants::TYPE_NAME_ALERT_STATUS;
    case ALERT_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_ALERT_STATUS_HYPHEN_LIST;
    case ALLERGY_INTOLERANCE = VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE;
    case ATTACHMENT = VersionConstants::TYPE_NAME_ATTACHMENT;
    case BACKBONE_ELEMENT = VersionConstants::TYPE_NAME_BACKBONE_ELEMENT;
    case BASE_64BINARY = VersionConstants::TYPE_NAME_BASE_64BINARY;
    case BASE_64BINARY_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_BASE_64BINARY_HYPHEN_PRIMITIVE;
    case BINARY = VersionConstants::TYPE_NAME_BINARY;
    case BINDING_CONFORMANCE = VersionConstants::TYPE_NAME_BINDING_CONFORMANCE;
    case BINDING_CONFORMANCE_HYPHEN_LIST = VersionConstants::TYPE_NAME_BINDING_CONFORMANCE_HYPHEN_LIST;
    case BOOLEAN = VersionConstants::TYPE_NAME_BOOLEAN;
    case BOOLEAN_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_BOOLEAN_HYPHEN_PRIMITIVE;
    case CARE_PLAN = VersionConstants::TYPE_NAME_CARE_PLAN;
    case CARE_PLAN_DOT_ACTIVITY = VersionConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY;
    case CARE_PLAN_DOT_GOAL = VersionConstants::TYPE_NAME_CARE_PLAN_DOT_GOAL;
    case CARE_PLAN_DOT_PARTICIPANT = VersionConstants::TYPE_NAME_CARE_PLAN_DOT_PARTICIPANT;
    case CARE_PLAN_DOT_SIMPLE = VersionConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE;
    case CARE_PLAN_ACTIVITY_CATEGORY = VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_CATEGORY;
    case CARE_PLAN_ACTIVITY_CATEGORY_HYPHEN_LIST = VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_CATEGORY_HYPHEN_LIST;
    case CARE_PLAN_ACTIVITY_STATUS = VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS;
    case CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST;
    case CARE_PLAN_GOAL_STATUS = VersionConstants::TYPE_NAME_CARE_PLAN_GOAL_STATUS;
    case CARE_PLAN_GOAL_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_CARE_PLAN_GOAL_STATUS_HYPHEN_LIST;
    case CARE_PLAN_STATUS = VersionConstants::TYPE_NAME_CARE_PLAN_STATUS;
    case CARE_PLAN_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_CARE_PLAN_STATUS_HYPHEN_LIST;
    case CAUSALITY_EXPECTATION = VersionConstants::TYPE_NAME_CAUSALITY_EXPECTATION;
    case CAUSALITY_EXPECTATION_HYPHEN_LIST = VersionConstants::TYPE_NAME_CAUSALITY_EXPECTATION_HYPHEN_LIST;
    case CODE = VersionConstants::TYPE_NAME_CODE;
    case CODE_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_CODE_HYPHEN_PRIMITIVE;
    case CODEABLE_CONCEPT = VersionConstants::TYPE_NAME_CODEABLE_CONCEPT;
    case CODING = VersionConstants::TYPE_NAME_CODING;
    case COMPOSITION = VersionConstants::TYPE_NAME_COMPOSITION;
    case COMPOSITION_DOT_ATTESTER = VersionConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER;
    case COMPOSITION_DOT_EVENT = VersionConstants::TYPE_NAME_COMPOSITION_DOT_EVENT;
    case COMPOSITION_DOT_SECTION = VersionConstants::TYPE_NAME_COMPOSITION_DOT_SECTION;
    case COMPOSITION_ATTESTATION_MODE = VersionConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE;
    case COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST = VersionConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST;
    case COMPOSITION_STATUS = VersionConstants::TYPE_NAME_COMPOSITION_STATUS;
    case COMPOSITION_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_COMPOSITION_STATUS_HYPHEN_LIST;
    case CONCEPT_MAP = VersionConstants::TYPE_NAME_CONCEPT_MAP;
    case CONCEPT_MAP_DOT_CONCEPT = VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_CONCEPT;
    case CONCEPT_MAP_DOT_DEPENDS_ON = VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON;
    case CONCEPT_MAP_DOT_MAP = VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_MAP;
    case CONCEPT_MAP_EQUIVALENCE = VersionConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE;
    case CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST = VersionConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST;
    case CONDITION = VersionConstants::TYPE_NAME_CONDITION;
    case CONDITION_DOT_EVIDENCE = VersionConstants::TYPE_NAME_CONDITION_DOT_EVIDENCE;
    case CONDITION_DOT_LOCATION = VersionConstants::TYPE_NAME_CONDITION_DOT_LOCATION;
    case CONDITION_DOT_RELATED_ITEM = VersionConstants::TYPE_NAME_CONDITION_DOT_RELATED_ITEM;
    case CONDITION_DOT_STAGE = VersionConstants::TYPE_NAME_CONDITION_DOT_STAGE;
    case CONDITION_RELATIONSHIP_TYPE = VersionConstants::TYPE_NAME_CONDITION_RELATIONSHIP_TYPE;
    case CONDITION_RELATIONSHIP_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_CONDITION_RELATIONSHIP_TYPE_HYPHEN_LIST;
    case CONDITION_STATUS = VersionConstants::TYPE_NAME_CONDITION_STATUS;
    case CONDITION_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_CONDITION_STATUS_HYPHEN_LIST;
    case CONFORMANCE = VersionConstants::TYPE_NAME_CONFORMANCE;
    case CONFORMANCE_DOT_CERTIFICATE = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_CERTIFICATE;
    case CONFORMANCE_DOT_DOCUMENT = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_DOCUMENT;
    case CONFORMANCE_DOT_EVENT = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT;
    case CONFORMANCE_DOT_IMPLEMENTATION = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_IMPLEMENTATION;
    case CONFORMANCE_DOT_MESSAGING = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING;
    case CONFORMANCE_DOT_OPERATION = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_OPERATION;
    case CONFORMANCE_DOT_OPERATION_1 = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_OPERATION_1;
    case CONFORMANCE_DOT_QUERY = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_QUERY;
    case CONFORMANCE_DOT_RESOURCE = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE;
    case CONFORMANCE_DOT_REST = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_REST;
    case CONFORMANCE_DOT_SEARCH_PARAM = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_SEARCH_PARAM;
    case CONFORMANCE_DOT_SECURITY = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_SECURITY;
    case CONFORMANCE_DOT_SOFTWARE = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_SOFTWARE;
    case CONFORMANCE_EVENT_MODE = VersionConstants::TYPE_NAME_CONFORMANCE_EVENT_MODE;
    case CONFORMANCE_EVENT_MODE_HYPHEN_LIST = VersionConstants::TYPE_NAME_CONFORMANCE_EVENT_MODE_HYPHEN_LIST;
    case CONFORMANCE_STATEMENT_STATUS = VersionConstants::TYPE_NAME_CONFORMANCE_STATEMENT_STATUS;
    case CONFORMANCE_STATEMENT_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_CONFORMANCE_STATEMENT_STATUS_HYPHEN_LIST;
    case CONSTRAINT_SEVERITY = VersionConstants::TYPE_NAME_CONSTRAINT_SEVERITY;
    case CONSTRAINT_SEVERITY_HYPHEN_LIST = VersionConstants::TYPE_NAME_CONSTRAINT_SEVERITY_HYPHEN_LIST;
    case CONTACT = VersionConstants::TYPE_NAME_CONTACT;
    case CONTACT_SYSTEM = VersionConstants::TYPE_NAME_CONTACT_SYSTEM;
    case CONTACT_SYSTEM_HYPHEN_LIST = VersionConstants::TYPE_NAME_CONTACT_SYSTEM_HYPHEN_LIST;
    case CONTACT_USE = VersionConstants::TYPE_NAME_CONTACT_USE;
    case CONTACT_USE_HYPHEN_LIST = VersionConstants::TYPE_NAME_CONTACT_USE_HYPHEN_LIST;
    case COUNT = VersionConstants::TYPE_NAME_COUNT;
    case CRITICALITY = VersionConstants::TYPE_NAME_CRITICALITY;
    case CRITICALITY_HYPHEN_LIST = VersionConstants::TYPE_NAME_CRITICALITY_HYPHEN_LIST;
    case DATE = VersionConstants::TYPE_NAME_DATE;
    case DATE_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_DATE_HYPHEN_PRIMITIVE;
    case DATE_TIME = VersionConstants::TYPE_NAME_DATE_TIME;
    case DATE_TIME_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_DATE_TIME_HYPHEN_PRIMITIVE;
    case DECIMAL = VersionConstants::TYPE_NAME_DECIMAL;
    case DECIMAL_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_DECIMAL_HYPHEN_PRIMITIVE;
    case DEVICE = VersionConstants::TYPE_NAME_DEVICE;
    case DEVICE_OBSERVATION_REPORT = VersionConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT;
    case DEVICE_OBSERVATION_REPORT_DOT_CHANNEL = VersionConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT_DOT_CHANNEL;
    case DEVICE_OBSERVATION_REPORT_DOT_METRIC = VersionConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT_DOT_METRIC;
    case DEVICE_OBSERVATION_REPORT_DOT_VIRTUAL_DEVICE = VersionConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT_DOT_VIRTUAL_DEVICE;
    case DIAGNOSTIC_ORDER = VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER;
    case DIAGNOSTIC_ORDER_DOT_EVENT = VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_EVENT;
    case DIAGNOSTIC_ORDER_DOT_ITEM = VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM;
    case DIAGNOSTIC_ORDER_PRIORITY = VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_PRIORITY;
    case DIAGNOSTIC_ORDER_PRIORITY_HYPHEN_LIST = VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_PRIORITY_HYPHEN_LIST;
    case DIAGNOSTIC_ORDER_STATUS = VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_STATUS;
    case DIAGNOSTIC_ORDER_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_STATUS_HYPHEN_LIST;
    case DIAGNOSTIC_REPORT = VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT;
    case DIAGNOSTIC_REPORT_DOT_IMAGE = VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_DOT_IMAGE;
    case DIAGNOSTIC_REPORT_STATUS = VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS;
    case DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST;
    case DISTANCE = VersionConstants::TYPE_NAME_DISTANCE;
    case DOCUMENT_MANIFEST = VersionConstants::TYPE_NAME_DOCUMENT_MANIFEST;
    case DOCUMENT_MODE = VersionConstants::TYPE_NAME_DOCUMENT_MODE;
    case DOCUMENT_MODE_HYPHEN_LIST = VersionConstants::TYPE_NAME_DOCUMENT_MODE_HYPHEN_LIST;
    case DOCUMENT_REFERENCE = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE;
    case DOCUMENT_REFERENCE_DOT_CONTEXT = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTEXT;
    case DOCUMENT_REFERENCE_DOT_PARAMETER = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_PARAMETER;
    case DOCUMENT_REFERENCE_DOT_RELATES_TO = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATES_TO;
    case DOCUMENT_REFERENCE_DOT_SERVICE = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_SERVICE;
    case DOCUMENT_REFERENCE_STATUS = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS;
    case DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST;
    case DOCUMENT_RELATIONSHIP_TYPE = VersionConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE;
    case DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST;
    case DURATION = VersionConstants::TYPE_NAME_DURATION;
    case ELEMENT = VersionConstants::TYPE_NAME_ELEMENT;
    case ENCOUNTER = VersionConstants::TYPE_NAME_ENCOUNTER;
    case ENCOUNTER_DOT_ACCOMODATION = VersionConstants::TYPE_NAME_ENCOUNTER_DOT_ACCOMODATION;
    case ENCOUNTER_DOT_HOSPITALIZATION = VersionConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION;
    case ENCOUNTER_DOT_LOCATION = VersionConstants::TYPE_NAME_ENCOUNTER_DOT_LOCATION;
    case ENCOUNTER_DOT_PARTICIPANT = VersionConstants::TYPE_NAME_ENCOUNTER_DOT_PARTICIPANT;
    case ENCOUNTER_CLASS = VersionConstants::TYPE_NAME_ENCOUNTER_CLASS;
    case ENCOUNTER_CLASS_HYPHEN_LIST = VersionConstants::TYPE_NAME_ENCOUNTER_CLASS_HYPHEN_LIST;
    case ENCOUNTER_STATE = VersionConstants::TYPE_NAME_ENCOUNTER_STATE;
    case ENCOUNTER_STATE_HYPHEN_LIST = VersionConstants::TYPE_NAME_ENCOUNTER_STATE_HYPHEN_LIST;
    case EVENT_TIMING = VersionConstants::TYPE_NAME_EVENT_TIMING;
    case EVENT_TIMING_HYPHEN_LIST = VersionConstants::TYPE_NAME_EVENT_TIMING_HYPHEN_LIST;
    case EXPOSURE_TYPE = VersionConstants::TYPE_NAME_EXPOSURE_TYPE;
    case EXPOSURE_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_EXPOSURE_TYPE_HYPHEN_LIST;
    case EXTENSION = VersionConstants::TYPE_NAME_EXTENSION;
    case EXTENSION_CONTEXT = VersionConstants::TYPE_NAME_EXTENSION_CONTEXT;
    case EXTENSION_CONTEXT_HYPHEN_LIST = VersionConstants::TYPE_NAME_EXTENSION_CONTEXT_HYPHEN_LIST;
    case FAMILY_HISTORY = VersionConstants::TYPE_NAME_FAMILY_HISTORY;
    case FAMILY_HISTORY_DOT_CONDITION = VersionConstants::TYPE_NAME_FAMILY_HISTORY_DOT_CONDITION;
    case FAMILY_HISTORY_DOT_RELATION = VersionConstants::TYPE_NAME_FAMILY_HISTORY_DOT_RELATION;
    case FILTER_OPERATOR = VersionConstants::TYPE_NAME_FILTER_OPERATOR;
    case FILTER_OPERATOR_HYPHEN_LIST = VersionConstants::TYPE_NAME_FILTER_OPERATOR_HYPHEN_LIST;
    case GROUP = VersionConstants::TYPE_NAME_GROUP;
    case GROUP_DOT_CHARACTERISTIC = VersionConstants::TYPE_NAME_GROUP_DOT_CHARACTERISTIC;
    case GROUP_TYPE = VersionConstants::TYPE_NAME_GROUP_TYPE;
    case GROUP_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_GROUP_TYPE_HYPHEN_LIST;
    case HIERARCHICAL_RELATIONSHIP_TYPE = VersionConstants::TYPE_NAME_HIERARCHICAL_RELATIONSHIP_TYPE;
    case HIERARCHICAL_RELATIONSHIP_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_HIERARCHICAL_RELATIONSHIP_TYPE_HYPHEN_LIST;
    case HUMAN_NAME = VersionConstants::TYPE_NAME_HUMAN_NAME;
    case ID = VersionConstants::TYPE_NAME_ID;
    case ID_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_ID_HYPHEN_PRIMITIVE;
    case IDENTIFIER = VersionConstants::TYPE_NAME_IDENTIFIER;
    case IDENTIFIER_USE = VersionConstants::TYPE_NAME_IDENTIFIER_USE;
    case IDENTIFIER_USE_HYPHEN_LIST = VersionConstants::TYPE_NAME_IDENTIFIER_USE_HYPHEN_LIST;
    case IMAGING_MODALITY = VersionConstants::TYPE_NAME_IMAGING_MODALITY;
    case IMAGING_MODALITY_HYPHEN_LIST = VersionConstants::TYPE_NAME_IMAGING_MODALITY_HYPHEN_LIST;
    case IMAGING_STUDY = VersionConstants::TYPE_NAME_IMAGING_STUDY;
    case IMAGING_STUDY_DOT_INSTANCE = VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_INSTANCE;
    case IMAGING_STUDY_DOT_SERIES = VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_SERIES;
    case IMMUNIZATION = VersionConstants::TYPE_NAME_IMMUNIZATION;
    case IMMUNIZATION_DOT_EXPLANATION = VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_EXPLANATION;
    case IMMUNIZATION_DOT_REACTION = VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_REACTION;
    case IMMUNIZATION_DOT_VACCINATION_PROTOCOL = VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL;
    case IMMUNIZATION_RECOMMENDATION = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION;
    case IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION;
    case IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL;
    case IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION;
    case INSTANCE_AVAILABILITY = VersionConstants::TYPE_NAME_INSTANCE_AVAILABILITY;
    case INSTANCE_AVAILABILITY_HYPHEN_LIST = VersionConstants::TYPE_NAME_INSTANCE_AVAILABILITY_HYPHEN_LIST;
    case INSTANT = VersionConstants::TYPE_NAME_INSTANT;
    case INSTANT_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_INSTANT_HYPHEN_PRIMITIVE;
    case INTEGER = VersionConstants::TYPE_NAME_INTEGER;
    case INTEGER_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_INTEGER_HYPHEN_PRIMITIVE;
    case ISSUE_SEVERITY = VersionConstants::TYPE_NAME_ISSUE_SEVERITY;
    case ISSUE_SEVERITY_HYPHEN_LIST = VersionConstants::TYPE_NAME_ISSUE_SEVERITY_HYPHEN_LIST;
    case LINK_TYPE = VersionConstants::TYPE_NAME_LINK_TYPE;
    case LINK_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_LINK_TYPE_HYPHEN_LIST;
    case LIST = VersionConstants::TYPE_NAME_LIST;
    case LIST_DOT_ENTRY = VersionConstants::TYPE_NAME_LIST_DOT_ENTRY;
    case LIST_MODE = VersionConstants::TYPE_NAME_LIST_MODE;
    case LIST_MODE_HYPHEN_LIST = VersionConstants::TYPE_NAME_LIST_MODE_HYPHEN_LIST;
    case LOCATION = VersionConstants::TYPE_NAME_LOCATION;
    case LOCATION_DOT_POSITION = VersionConstants::TYPE_NAME_LOCATION_DOT_POSITION;
    case LOCATION_MODE = VersionConstants::TYPE_NAME_LOCATION_MODE;
    case LOCATION_MODE_HYPHEN_LIST = VersionConstants::TYPE_NAME_LOCATION_MODE_HYPHEN_LIST;
    case LOCATION_STATUS = VersionConstants::TYPE_NAME_LOCATION_STATUS;
    case LOCATION_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_LOCATION_STATUS_HYPHEN_LIST;
    case MEDIA = VersionConstants::TYPE_NAME_MEDIA;
    case MEDIA_TYPE = VersionConstants::TYPE_NAME_MEDIA_TYPE;
    case MEDIA_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_MEDIA_TYPE_HYPHEN_LIST;
    case MEDICATION = VersionConstants::TYPE_NAME_MEDICATION;
    case MEDICATION_DOT_CONTENT = VersionConstants::TYPE_NAME_MEDICATION_DOT_CONTENT;
    case MEDICATION_DOT_INGREDIENT = VersionConstants::TYPE_NAME_MEDICATION_DOT_INGREDIENT;
    case MEDICATION_DOT_PACKAGE = VersionConstants::TYPE_NAME_MEDICATION_DOT_PACKAGE;
    case MEDICATION_DOT_PRODUCT = VersionConstants::TYPE_NAME_MEDICATION_DOT_PRODUCT;
    case MEDICATION_ADMINISTRATION = VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION;
    case MEDICATION_ADMINISTRATION_DOT_DOSAGE = VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE;
    case MEDICATION_ADMINISTRATION_STATUS = VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS;
    case MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST;
    case MEDICATION_DISPENSE = VersionConstants::TYPE_NAME_MEDICATION_DISPENSE;
    case MEDICATION_DISPENSE_DOT_DISPENSE = VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DISPENSE;
    case MEDICATION_DISPENSE_DOT_DOSAGE = VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE;
    case MEDICATION_DISPENSE_DOT_SUBSTITUTION = VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION;
    case MEDICATION_DISPENSE_STATUS = VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS;
    case MEDICATION_DISPENSE_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST;
    case MEDICATION_KIND = VersionConstants::TYPE_NAME_MEDICATION_KIND;
    case MEDICATION_KIND_HYPHEN_LIST = VersionConstants::TYPE_NAME_MEDICATION_KIND_HYPHEN_LIST;
    case MEDICATION_PRESCRIPTION = VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION;
    case MEDICATION_PRESCRIPTION_DOT_DISPENSE = VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_DISPENSE;
    case MEDICATION_PRESCRIPTION_DOT_DOSAGE_INSTRUCTION = VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_DOSAGE_INSTRUCTION;
    case MEDICATION_PRESCRIPTION_DOT_SUBSTITUTION = VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_SUBSTITUTION;
    case MEDICATION_PRESCRIPTION_STATUS = VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_STATUS;
    case MEDICATION_PRESCRIPTION_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_STATUS_HYPHEN_LIST;
    case MEDICATION_STATEMENT = VersionConstants::TYPE_NAME_MEDICATION_STATEMENT;
    case MEDICATION_STATEMENT_DOT_DOSAGE = VersionConstants::TYPE_NAME_MEDICATION_STATEMENT_DOT_DOSAGE;
    case MESSAGE_HEADER = VersionConstants::TYPE_NAME_MESSAGE_HEADER;
    case MESSAGE_HEADER_DOT_DESTINATION = VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_DESTINATION;
    case MESSAGE_HEADER_DOT_RESPONSE = VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_RESPONSE;
    case MESSAGE_HEADER_DOT_SOURCE = VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_SOURCE;
    case MESSAGE_SIGNIFICANCE_CATEGORY = VersionConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY;
    case MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST = VersionConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST;
    case MODALITY = VersionConstants::TYPE_NAME_MODALITY;
    case MODALITY_HYPHEN_LIST = VersionConstants::TYPE_NAME_MODALITY_HYPHEN_LIST;
    case MONEY = VersionConstants::TYPE_NAME_MONEY;
    case NAME_USE = VersionConstants::TYPE_NAME_NAME_USE;
    case NAME_USE_HYPHEN_LIST = VersionConstants::TYPE_NAME_NAME_USE_HYPHEN_LIST;
    case NARRATIVE = VersionConstants::TYPE_NAME_NARRATIVE;
    case NARRATIVE_STATUS = VersionConstants::TYPE_NAME_NARRATIVE_STATUS;
    case NARRATIVE_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_NARRATIVE_STATUS_HYPHEN_LIST;
    case OBSERVATION = VersionConstants::TYPE_NAME_OBSERVATION;
    case OBSERVATION_DOT_REFERENCE_RANGE = VersionConstants::TYPE_NAME_OBSERVATION_DOT_REFERENCE_RANGE;
    case OBSERVATION_DOT_RELATED = VersionConstants::TYPE_NAME_OBSERVATION_DOT_RELATED;
    case OBSERVATION_RELATIONSHIP_TYPE = VersionConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE;
    case OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST;
    case OBSERVATION_RELIABILITY = VersionConstants::TYPE_NAME_OBSERVATION_RELIABILITY;
    case OBSERVATION_RELIABILITY_HYPHEN_LIST = VersionConstants::TYPE_NAME_OBSERVATION_RELIABILITY_HYPHEN_LIST;
    case OBSERVATION_STATUS = VersionConstants::TYPE_NAME_OBSERVATION_STATUS;
    case OBSERVATION_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_OBSERVATION_STATUS_HYPHEN_LIST;
    case OID = VersionConstants::TYPE_NAME_OID;
    case OID_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_OID_HYPHEN_PRIMITIVE;
    case OPERATION_OUTCOME = VersionConstants::TYPE_NAME_OPERATION_OUTCOME;
    case OPERATION_OUTCOME_DOT_ISSUE = VersionConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE;
    case ORDER = VersionConstants::TYPE_NAME_ORDER;
    case ORDER_DOT_WHEN = VersionConstants::TYPE_NAME_ORDER_DOT_WHEN;
    case ORDER_OUTCOME_STATUS = VersionConstants::TYPE_NAME_ORDER_OUTCOME_STATUS;
    case ORDER_OUTCOME_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_ORDER_OUTCOME_STATUS_HYPHEN_LIST;
    case ORDER_RESPONSE = VersionConstants::TYPE_NAME_ORDER_RESPONSE;
    case ORGANIZATION = VersionConstants::TYPE_NAME_ORGANIZATION;
    case ORGANIZATION_DOT_CONTACT = VersionConstants::TYPE_NAME_ORGANIZATION_DOT_CONTACT;
    case OTHER = VersionConstants::TYPE_NAME_OTHER;
    case PATIENT = VersionConstants::TYPE_NAME_PATIENT;
    case PATIENT_DOT_ANIMAL = VersionConstants::TYPE_NAME_PATIENT_DOT_ANIMAL;
    case PATIENT_DOT_CONTACT = VersionConstants::TYPE_NAME_PATIENT_DOT_CONTACT;
    case PATIENT_DOT_LINK = VersionConstants::TYPE_NAME_PATIENT_DOT_LINK;
    case PERIOD = VersionConstants::TYPE_NAME_PERIOD;
    case PRACTITIONER = VersionConstants::TYPE_NAME_PRACTITIONER;
    case PRACTITIONER_DOT_QUALIFICATION = VersionConstants::TYPE_NAME_PRACTITIONER_DOT_QUALIFICATION;
    case PROCEDURE = VersionConstants::TYPE_NAME_PROCEDURE;
    case PROCEDURE_DOT_PERFORMER = VersionConstants::TYPE_NAME_PROCEDURE_DOT_PERFORMER;
    case PROCEDURE_DOT_RELATED_ITEM = VersionConstants::TYPE_NAME_PROCEDURE_DOT_RELATED_ITEM;
    case PROCEDURE_RELATIONSHIP_TYPE = VersionConstants::TYPE_NAME_PROCEDURE_RELATIONSHIP_TYPE;
    case PROCEDURE_RELATIONSHIP_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_PROCEDURE_RELATIONSHIP_TYPE_HYPHEN_LIST;
    case PROFILE = VersionConstants::TYPE_NAME_PROFILE;
    case PROFILE_DOT_BINDING = VersionConstants::TYPE_NAME_PROFILE_DOT_BINDING;
    case PROFILE_DOT_CONSTRAINT = VersionConstants::TYPE_NAME_PROFILE_DOT_CONSTRAINT;
    case PROFILE_DOT_DEFINITION = VersionConstants::TYPE_NAME_PROFILE_DOT_DEFINITION;
    case PROFILE_DOT_ELEMENT = VersionConstants::TYPE_NAME_PROFILE_DOT_ELEMENT;
    case PROFILE_DOT_EXTENSION_DEFN = VersionConstants::TYPE_NAME_PROFILE_DOT_EXTENSION_DEFN;
    case PROFILE_DOT_MAPPING = VersionConstants::TYPE_NAME_PROFILE_DOT_MAPPING;
    case PROFILE_DOT_MAPPING_1 = VersionConstants::TYPE_NAME_PROFILE_DOT_MAPPING_1;
    case PROFILE_DOT_QUERY = VersionConstants::TYPE_NAME_PROFILE_DOT_QUERY;
    case PROFILE_DOT_SEARCH_PARAM = VersionConstants::TYPE_NAME_PROFILE_DOT_SEARCH_PARAM;
    case PROFILE_DOT_SLICING = VersionConstants::TYPE_NAME_PROFILE_DOT_SLICING;
    case PROFILE_DOT_STRUCTURE = VersionConstants::TYPE_NAME_PROFILE_DOT_STRUCTURE;
    case PROFILE_DOT_TYPE = VersionConstants::TYPE_NAME_PROFILE_DOT_TYPE;
    case PROPERTY_REPRESENTATION = VersionConstants::TYPE_NAME_PROPERTY_REPRESENTATION;
    case PROPERTY_REPRESENTATION_HYPHEN_LIST = VersionConstants::TYPE_NAME_PROPERTY_REPRESENTATION_HYPHEN_LIST;
    case PROVENANCE = VersionConstants::TYPE_NAME_PROVENANCE;
    case PROVENANCE_DOT_AGENT = VersionConstants::TYPE_NAME_PROVENANCE_DOT_AGENT;
    case PROVENANCE_DOT_ENTITY = VersionConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY;
    case PROVENANCE_ENTITY_ROLE = VersionConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE;
    case PROVENANCE_ENTITY_ROLE_HYPHEN_LIST = VersionConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST;
    case QUANTITY = VersionConstants::TYPE_NAME_QUANTITY;
    case QUANTITY_COMPARARATOR = VersionConstants::TYPE_NAME_QUANTITY_COMPARARATOR;
    case QUANTITY_COMPARARATOR_HYPHEN_LIST = VersionConstants::TYPE_NAME_QUANTITY_COMPARARATOR_HYPHEN_LIST;
    case QUERY = VersionConstants::TYPE_NAME_QUERY;
    case QUERY_DOT_RESPONSE = VersionConstants::TYPE_NAME_QUERY_DOT_RESPONSE;
    case QUERY_OUTCOME = VersionConstants::TYPE_NAME_QUERY_OUTCOME;
    case QUERY_OUTCOME_HYPHEN_LIST = VersionConstants::TYPE_NAME_QUERY_OUTCOME_HYPHEN_LIST;
    case QUESTIONNAIRE = VersionConstants::TYPE_NAME_QUESTIONNAIRE;
    case QUESTIONNAIRE_DOT_GROUP = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_GROUP;
    case QUESTIONNAIRE_DOT_QUESTION = VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION;
    case QUESTIONNAIRE_STATUS = VersionConstants::TYPE_NAME_QUESTIONNAIRE_STATUS;
    case QUESTIONNAIRE_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_QUESTIONNAIRE_STATUS_HYPHEN_LIST;
    case RANGE = VersionConstants::TYPE_NAME_RANGE;
    case RATIO = VersionConstants::TYPE_NAME_RATIO;
    case REACTION_SEVERITY = VersionConstants::TYPE_NAME_REACTION_SEVERITY;
    case REACTION_SEVERITY_HYPHEN_LIST = VersionConstants::TYPE_NAME_REACTION_SEVERITY_HYPHEN_LIST;
    case RELATED_PERSON = VersionConstants::TYPE_NAME_RELATED_PERSON;
    case RESOURCE = VersionConstants::TYPE_NAME_RESOURCE;
    case RESOURCE_DOT_INLINE = VersionConstants::TYPE_NAME_RESOURCE_DOT_INLINE;
    case RESOURCE_NAMES_PLUS_BINARY = VersionConstants::TYPE_NAME_RESOURCE_NAMES_PLUS_BINARY;
    case RESOURCE_PROFILE_STATUS = VersionConstants::TYPE_NAME_RESOURCE_PROFILE_STATUS;
    case RESOURCE_PROFILE_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_RESOURCE_PROFILE_STATUS_HYPHEN_LIST;
    case RESOURCE_REFERENCE = VersionConstants::TYPE_NAME_RESOURCE_REFERENCE;
    case RESOURCE_TYPE = VersionConstants::TYPE_NAME_RESOURCE_TYPE;
    case RESPONSE_TYPE = VersionConstants::TYPE_NAME_RESPONSE_TYPE;
    case RESPONSE_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_RESPONSE_TYPE_HYPHEN_LIST;
    case RESTFUL_CONFORMANCE_MODE = VersionConstants::TYPE_NAME_RESTFUL_CONFORMANCE_MODE;
    case RESTFUL_CONFORMANCE_MODE_HYPHEN_LIST = VersionConstants::TYPE_NAME_RESTFUL_CONFORMANCE_MODE_HYPHEN_LIST;
    case RESTFUL_OPERATION_SYSTEM = VersionConstants::TYPE_NAME_RESTFUL_OPERATION_SYSTEM;
    case RESTFUL_OPERATION_SYSTEM_HYPHEN_LIST = VersionConstants::TYPE_NAME_RESTFUL_OPERATION_SYSTEM_HYPHEN_LIST;
    case RESTFUL_OPERATION_TYPE = VersionConstants::TYPE_NAME_RESTFUL_OPERATION_TYPE;
    case RESTFUL_OPERATION_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_RESTFUL_OPERATION_TYPE_HYPHEN_LIST;
    case SAMPLED_DATA = VersionConstants::TYPE_NAME_SAMPLED_DATA;
    case SAMPLED_DATA_DATA_TYPE = VersionConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE;
    case SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE;
    case SCHEDULE = VersionConstants::TYPE_NAME_SCHEDULE;
    case SCHEDULE_DOT_REPEAT = VersionConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT;
    case SCORE = VersionConstants::TYPE_NAME_SCORE;
    case SEARCH_PARAM_TYPE = VersionConstants::TYPE_NAME_SEARCH_PARAM_TYPE;
    case SEARCH_PARAM_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_SEARCH_PARAM_TYPE_HYPHEN_LIST;
    case SECURITY_EVENT = VersionConstants::TYPE_NAME_SECURITY_EVENT;
    case SECURITY_EVENT_DOT_DETAIL = VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_DETAIL;
    case SECURITY_EVENT_DOT_EVENT = VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_EVENT;
    case SECURITY_EVENT_DOT_NETWORK = VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_NETWORK;
    case SECURITY_EVENT_DOT_OBJECT = VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_OBJECT;
    case SECURITY_EVENT_DOT_PARTICIPANT = VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT;
    case SECURITY_EVENT_DOT_SOURCE = VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_SOURCE;
    case SECURITY_EVENT_ACTION = VersionConstants::TYPE_NAME_SECURITY_EVENT_ACTION;
    case SECURITY_EVENT_ACTION_HYPHEN_LIST = VersionConstants::TYPE_NAME_SECURITY_EVENT_ACTION_HYPHEN_LIST;
    case SECURITY_EVENT_OBJECT_LIFECYCLE = VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_LIFECYCLE;
    case SECURITY_EVENT_OBJECT_LIFECYCLE_HYPHEN_LIST = VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_LIFECYCLE_HYPHEN_LIST;
    case SECURITY_EVENT_OBJECT_ROLE = VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_ROLE;
    case SECURITY_EVENT_OBJECT_ROLE_HYPHEN_LIST = VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_ROLE_HYPHEN_LIST;
    case SECURITY_EVENT_OBJECT_TYPE = VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_TYPE;
    case SECURITY_EVENT_OBJECT_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_TYPE_HYPHEN_LIST;
    case SECURITY_EVENT_OUTCOME = VersionConstants::TYPE_NAME_SECURITY_EVENT_OUTCOME;
    case SECURITY_EVENT_OUTCOME_HYPHEN_LIST = VersionConstants::TYPE_NAME_SECURITY_EVENT_OUTCOME_HYPHEN_LIST;
    case SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE = VersionConstants::TYPE_NAME_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE;
    case SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE_HYPHEN_LIST;
    case SENSITIVITY_STATUS = VersionConstants::TYPE_NAME_SENSITIVITY_STATUS;
    case SENSITIVITY_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_SENSITIVITY_STATUS_HYPHEN_LIST;
    case SENSITIVITY_TYPE = VersionConstants::TYPE_NAME_SENSITIVITY_TYPE;
    case SENSITIVITY_TYPE_HYPHEN_LIST = VersionConstants::TYPE_NAME_SENSITIVITY_TYPE_HYPHEN_LIST;
    case SLICING_RULES = VersionConstants::TYPE_NAME_SLICING_RULES;
    case SLICING_RULES_HYPHEN_LIST = VersionConstants::TYPE_NAME_SLICING_RULES_HYPHEN_LIST;
    case SPECIMEN = VersionConstants::TYPE_NAME_SPECIMEN;
    case SPECIMEN_DOT_COLLECTION = VersionConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION;
    case SPECIMEN_DOT_CONTAINER = VersionConstants::TYPE_NAME_SPECIMEN_DOT_CONTAINER;
    case SPECIMEN_DOT_SOURCE = VersionConstants::TYPE_NAME_SPECIMEN_DOT_SOURCE;
    case SPECIMEN_DOT_TREATMENT = VersionConstants::TYPE_NAME_SPECIMEN_DOT_TREATMENT;
    case STRING = VersionConstants::TYPE_NAME_STRING;
    case STRING_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_STRING_HYPHEN_PRIMITIVE;
    case SUBSTANCE = VersionConstants::TYPE_NAME_SUBSTANCE;
    case SUBSTANCE_DOT_INGREDIENT = VersionConstants::TYPE_NAME_SUBSTANCE_DOT_INGREDIENT;
    case SUBSTANCE_DOT_INSTANCE = VersionConstants::TYPE_NAME_SUBSTANCE_DOT_INSTANCE;
    case SUPPLY = VersionConstants::TYPE_NAME_SUPPLY;
    case SUPPLY_DOT_DISPENSE = VersionConstants::TYPE_NAME_SUPPLY_DOT_DISPENSE;
    case SUPPLY_DISPENSE_STATUS = VersionConstants::TYPE_NAME_SUPPLY_DISPENSE_STATUS;
    case SUPPLY_DISPENSE_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_SUPPLY_DISPENSE_STATUS_HYPHEN_LIST;
    case SUPPLY_STATUS = VersionConstants::TYPE_NAME_SUPPLY_STATUS;
    case SUPPLY_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_SUPPLY_STATUS_HYPHEN_LIST;
    case TOTAL_RESULTS = VersionConstants::TYPE_NAME_TOTAL_RESULTS;
    case UNITS_OF_TIME = VersionConstants::TYPE_NAME_UNITS_OF_TIME;
    case UNITS_OF_TIME_HYPHEN_LIST = VersionConstants::TYPE_NAME_UNITS_OF_TIME_HYPHEN_LIST;
    case URI = VersionConstants::TYPE_NAME_URI;
    case URI_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_URI_HYPHEN_PRIMITIVE;
    case UUID = VersionConstants::TYPE_NAME_UUID;
    case UUID_HYPHEN_PRIMITIVE = VersionConstants::TYPE_NAME_UUID_HYPHEN_PRIMITIVE;
    case VALUE_SET = VersionConstants::TYPE_NAME_VALUE_SET;
    case VALUE_SET_DOT_COMPOSE = VersionConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE;
    case VALUE_SET_DOT_CONCEPT = VersionConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT;
    case VALUE_SET_DOT_CONTAINS = VersionConstants::TYPE_NAME_VALUE_SET_DOT_CONTAINS;
    case VALUE_SET_DOT_DEFINE = VersionConstants::TYPE_NAME_VALUE_SET_DOT_DEFINE;
    case VALUE_SET_DOT_EXPANSION = VersionConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION;
    case VALUE_SET_DOT_FILTER = VersionConstants::TYPE_NAME_VALUE_SET_DOT_FILTER;
    case VALUE_SET_DOT_INCLUDE = VersionConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE;
    case VALUE_SET_STATUS = VersionConstants::TYPE_NAME_VALUE_SET_STATUS;
    case VALUE_SET_STATUS_HYPHEN_LIST = VersionConstants::TYPE_NAME_VALUE_SET_STATUS_HYPHEN_LIST;
    case XHTML = VersionConstants::TYPE_NAME_XHTML;
    case XML_ID_REF = VersionConstants::TYPE_NAME_XML_ID_REF;
}

