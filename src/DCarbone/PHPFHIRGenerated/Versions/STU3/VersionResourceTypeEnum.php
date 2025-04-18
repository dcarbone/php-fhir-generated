<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

enum VersionResourceTypeEnum : string
{
    case ACCOUNT = VersionConstants::TYPE_NAME_ACCOUNT;
    case ACTIVITY_DEFINITION = VersionConstants::TYPE_NAME_ACTIVITY_DEFINITION;
    case ADVERSE_EVENT = VersionConstants::TYPE_NAME_ADVERSE_EVENT;
    case ALLERGY_INTOLERANCE = VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE;
    case APPOINTMENT = VersionConstants::TYPE_NAME_APPOINTMENT;
    case APPOINTMENT_RESPONSE = VersionConstants::TYPE_NAME_APPOINTMENT_RESPONSE;
    case AUDIT_EVENT = VersionConstants::TYPE_NAME_AUDIT_EVENT;
    case BASIC = VersionConstants::TYPE_NAME_BASIC;
    case BINARY = VersionConstants::TYPE_NAME_BINARY;
    case BODY_SITE = VersionConstants::TYPE_NAME_BODY_SITE;
    case CAPABILITY_STATEMENT = VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT;
    case CARE_PLAN = VersionConstants::TYPE_NAME_CARE_PLAN;
    case CARE_TEAM = VersionConstants::TYPE_NAME_CARE_TEAM;
    case CHARGE_ITEM = VersionConstants::TYPE_NAME_CHARGE_ITEM;
    case CLAIM = VersionConstants::TYPE_NAME_CLAIM;
    case CLAIM_RESPONSE = VersionConstants::TYPE_NAME_CLAIM_RESPONSE;
    case CLINICAL_IMPRESSION = VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION;
    case CODE_SYSTEM = VersionConstants::TYPE_NAME_CODE_SYSTEM;
    case COMMUNICATION = VersionConstants::TYPE_NAME_COMMUNICATION;
    case COMMUNICATION_REQUEST = VersionConstants::TYPE_NAME_COMMUNICATION_REQUEST;
    case COMPARTMENT_DEFINITION = VersionConstants::TYPE_NAME_COMPARTMENT_DEFINITION;
    case COMPOSITION = VersionConstants::TYPE_NAME_COMPOSITION;
    case CONCEPT_MAP = VersionConstants::TYPE_NAME_CONCEPT_MAP;
    case CONDITION = VersionConstants::TYPE_NAME_CONDITION;
    case CONSENT = VersionConstants::TYPE_NAME_CONSENT;
    case CONTRACT = VersionConstants::TYPE_NAME_CONTRACT;
    case COVERAGE = VersionConstants::TYPE_NAME_COVERAGE;
    case DATA_ELEMENT = VersionConstants::TYPE_NAME_DATA_ELEMENT;
    case DETECTED_ISSUE = VersionConstants::TYPE_NAME_DETECTED_ISSUE;
    case DEVICE = VersionConstants::TYPE_NAME_DEVICE;
    case DEVICE_COMPONENT = VersionConstants::TYPE_NAME_DEVICE_COMPONENT;
    case DEVICE_METRIC = VersionConstants::TYPE_NAME_DEVICE_METRIC;
    case DEVICE_REQUEST = VersionConstants::TYPE_NAME_DEVICE_REQUEST;
    case DEVICE_USE_STATEMENT = VersionConstants::TYPE_NAME_DEVICE_USE_STATEMENT;
    case DIAGNOSTIC_REPORT = VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT;
    case DOCUMENT_MANIFEST = VersionConstants::TYPE_NAME_DOCUMENT_MANIFEST;
    case DOCUMENT_REFERENCE = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE;
    case ELIGIBILITY_REQUEST = VersionConstants::TYPE_NAME_ELIGIBILITY_REQUEST;
    case ELIGIBILITY_RESPONSE = VersionConstants::TYPE_NAME_ELIGIBILITY_RESPONSE;
    case ENCOUNTER = VersionConstants::TYPE_NAME_ENCOUNTER;
    case ENDPOINT = VersionConstants::TYPE_NAME_ENDPOINT;
    case ENROLLMENT_REQUEST = VersionConstants::TYPE_NAME_ENROLLMENT_REQUEST;
    case ENROLLMENT_RESPONSE = VersionConstants::TYPE_NAME_ENROLLMENT_RESPONSE;
    case EPISODE_OF_CARE = VersionConstants::TYPE_NAME_EPISODE_OF_CARE;
    case EXPANSION_PROFILE = VersionConstants::TYPE_NAME_EXPANSION_PROFILE;
    case EXPLANATION_OF_BENEFIT = VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT;
    case FAMILY_MEMBER_HISTORY = VersionConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY;
    case FLAG = VersionConstants::TYPE_NAME_FLAG;
    case GOAL = VersionConstants::TYPE_NAME_GOAL;
    case GRAPH_DEFINITION = VersionConstants::TYPE_NAME_GRAPH_DEFINITION;
    case GROUP = VersionConstants::TYPE_NAME_GROUP;
    case GUIDANCE_RESPONSE = VersionConstants::TYPE_NAME_GUIDANCE_RESPONSE;
    case HEALTHCARE_SERVICE = VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE;
    case IMAGING_MANIFEST = VersionConstants::TYPE_NAME_IMAGING_MANIFEST;
    case IMAGING_STUDY = VersionConstants::TYPE_NAME_IMAGING_STUDY;
    case IMMUNIZATION = VersionConstants::TYPE_NAME_IMMUNIZATION;
    case IMMUNIZATION_RECOMMENDATION = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION;
    case IMPLEMENTATION_GUIDE = VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE;
    case LIBRARY = VersionConstants::TYPE_NAME_LIBRARY;
    case LINKAGE = VersionConstants::TYPE_NAME_LINKAGE;
    case LIST = VersionConstants::TYPE_NAME_LIST;
    case LOCATION = VersionConstants::TYPE_NAME_LOCATION;
    case MEASURE = VersionConstants::TYPE_NAME_MEASURE;
    case MEASURE_REPORT = VersionConstants::TYPE_NAME_MEASURE_REPORT;
    case MEDIA = VersionConstants::TYPE_NAME_MEDIA;
    case MEDICATION = VersionConstants::TYPE_NAME_MEDICATION;
    case MEDICATION_ADMINISTRATION = VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION;
    case MEDICATION_DISPENSE = VersionConstants::TYPE_NAME_MEDICATION_DISPENSE;
    case MEDICATION_REQUEST = VersionConstants::TYPE_NAME_MEDICATION_REQUEST;
    case MEDICATION_STATEMENT = VersionConstants::TYPE_NAME_MEDICATION_STATEMENT;
    case MESSAGE_DEFINITION = VersionConstants::TYPE_NAME_MESSAGE_DEFINITION;
    case MESSAGE_HEADER = VersionConstants::TYPE_NAME_MESSAGE_HEADER;
    case NAMING_SYSTEM = VersionConstants::TYPE_NAME_NAMING_SYSTEM;
    case NUTRITION_ORDER = VersionConstants::TYPE_NAME_NUTRITION_ORDER;
    case OBSERVATION = VersionConstants::TYPE_NAME_OBSERVATION;
    case OPERATION_DEFINITION = VersionConstants::TYPE_NAME_OPERATION_DEFINITION;
    case OPERATION_OUTCOME = VersionConstants::TYPE_NAME_OPERATION_OUTCOME;
    case ORGANIZATION = VersionConstants::TYPE_NAME_ORGANIZATION;
    case PARAMETERS = VersionConstants::TYPE_NAME_PARAMETERS;
    case PATIENT = VersionConstants::TYPE_NAME_PATIENT;
    case PAYMENT_NOTICE = VersionConstants::TYPE_NAME_PAYMENT_NOTICE;
    case PAYMENT_RECONCILIATION = VersionConstants::TYPE_NAME_PAYMENT_RECONCILIATION;
    case PERSON = VersionConstants::TYPE_NAME_PERSON;
    case PLAN_DEFINITION = VersionConstants::TYPE_NAME_PLAN_DEFINITION;
    case PRACTITIONER = VersionConstants::TYPE_NAME_PRACTITIONER;
    case PRACTITIONER_ROLE = VersionConstants::TYPE_NAME_PRACTITIONER_ROLE;
    case PROCEDURE = VersionConstants::TYPE_NAME_PROCEDURE;
    case PROCEDURE_REQUEST = VersionConstants::TYPE_NAME_PROCEDURE_REQUEST;
    case PROCESS_REQUEST = VersionConstants::TYPE_NAME_PROCESS_REQUEST;
    case PROCESS_RESPONSE = VersionConstants::TYPE_NAME_PROCESS_RESPONSE;
    case PROVENANCE = VersionConstants::TYPE_NAME_PROVENANCE;
    case QUESTIONNAIRE = VersionConstants::TYPE_NAME_QUESTIONNAIRE;
    case QUESTIONNAIRE_RESPONSE = VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE;
    case REFERRAL_REQUEST = VersionConstants::TYPE_NAME_REFERRAL_REQUEST;
    case RELATED_PERSON = VersionConstants::TYPE_NAME_RELATED_PERSON;
    case REQUEST_GROUP = VersionConstants::TYPE_NAME_REQUEST_GROUP;
    case RESEARCH_STUDY = VersionConstants::TYPE_NAME_RESEARCH_STUDY;
    case RESEARCH_SUBJECT = VersionConstants::TYPE_NAME_RESEARCH_SUBJECT;
    case RISK_ASSESSMENT = VersionConstants::TYPE_NAME_RISK_ASSESSMENT;
    case SCHEDULE = VersionConstants::TYPE_NAME_SCHEDULE;
    case SEARCH_PARAMETER = VersionConstants::TYPE_NAME_SEARCH_PARAMETER;
    case SEQUENCE = VersionConstants::TYPE_NAME_SEQUENCE;
    case SERVICE_DEFINITION = VersionConstants::TYPE_NAME_SERVICE_DEFINITION;
    case SLOT = VersionConstants::TYPE_NAME_SLOT;
    case SPECIMEN = VersionConstants::TYPE_NAME_SPECIMEN;
    case STRUCTURE_DEFINITION = VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION;
    case STRUCTURE_MAP = VersionConstants::TYPE_NAME_STRUCTURE_MAP;
    case SUBSCRIPTION = VersionConstants::TYPE_NAME_SUBSCRIPTION;
    case SUBSTANCE = VersionConstants::TYPE_NAME_SUBSTANCE;
    case SUPPLY_DELIVERY = VersionConstants::TYPE_NAME_SUPPLY_DELIVERY;
    case SUPPLY_REQUEST = VersionConstants::TYPE_NAME_SUPPLY_REQUEST;
    case TASK = VersionConstants::TYPE_NAME_TASK;
    case TEST_REPORT = VersionConstants::TYPE_NAME_TEST_REPORT;
    case TEST_SCRIPT = VersionConstants::TYPE_NAME_TEST_SCRIPT;
    case VALUE_SET = VersionConstants::TYPE_NAME_VALUE_SET;
    case VISION_PRESCRIPTION = VersionConstants::TYPE_NAME_VISION_PRESCRIPTION;
}

