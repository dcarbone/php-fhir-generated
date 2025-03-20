<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: March 20th, 2025 02:50+0000
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

enum VersionResourceTypeEnum : string
{
    case ADVERSE_REACTION = VersionConstants::TYPE_NAME_ADVERSE_REACTION;
    case ALERT = VersionConstants::TYPE_NAME_ALERT;
    case ALLERGY_INTOLERANCE = VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE;
    case BINARY = VersionConstants::TYPE_NAME_BINARY;
    case CARE_PLAN = VersionConstants::TYPE_NAME_CARE_PLAN;
    case COMPOSITION = VersionConstants::TYPE_NAME_COMPOSITION;
    case CONCEPT_MAP = VersionConstants::TYPE_NAME_CONCEPT_MAP;
    case CONDITION = VersionConstants::TYPE_NAME_CONDITION;
    case CONFORMANCE = VersionConstants::TYPE_NAME_CONFORMANCE;
    case DEVICE = VersionConstants::TYPE_NAME_DEVICE;
    case DEVICE_OBSERVATION_REPORT = VersionConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT;
    case DIAGNOSTIC_ORDER = VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER;
    case DIAGNOSTIC_REPORT = VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT;
    case DOCUMENT_MANIFEST = VersionConstants::TYPE_NAME_DOCUMENT_MANIFEST;
    case DOCUMENT_REFERENCE = VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE;
    case ENCOUNTER = VersionConstants::TYPE_NAME_ENCOUNTER;
    case FAMILY_HISTORY = VersionConstants::TYPE_NAME_FAMILY_HISTORY;
    case GROUP = VersionConstants::TYPE_NAME_GROUP;
    case IMAGING_STUDY = VersionConstants::TYPE_NAME_IMAGING_STUDY;
    case IMMUNIZATION = VersionConstants::TYPE_NAME_IMMUNIZATION;
    case IMMUNIZATION_RECOMMENDATION = VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION;
    case LIST = VersionConstants::TYPE_NAME_LIST;
    case LOCATION = VersionConstants::TYPE_NAME_LOCATION;
    case MEDIA = VersionConstants::TYPE_NAME_MEDIA;
    case MEDICATION = VersionConstants::TYPE_NAME_MEDICATION;
    case MEDICATION_ADMINISTRATION = VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION;
    case MEDICATION_DISPENSE = VersionConstants::TYPE_NAME_MEDICATION_DISPENSE;
    case MEDICATION_PRESCRIPTION = VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION;
    case MEDICATION_STATEMENT = VersionConstants::TYPE_NAME_MEDICATION_STATEMENT;
    case MESSAGE_HEADER = VersionConstants::TYPE_NAME_MESSAGE_HEADER;
    case OBSERVATION = VersionConstants::TYPE_NAME_OBSERVATION;
    case OPERATION_OUTCOME = VersionConstants::TYPE_NAME_OPERATION_OUTCOME;
    case ORDER = VersionConstants::TYPE_NAME_ORDER;
    case ORDER_RESPONSE = VersionConstants::TYPE_NAME_ORDER_RESPONSE;
    case ORGANIZATION = VersionConstants::TYPE_NAME_ORGANIZATION;
    case OTHER = VersionConstants::TYPE_NAME_OTHER;
    case PATIENT = VersionConstants::TYPE_NAME_PATIENT;
    case PRACTITIONER = VersionConstants::TYPE_NAME_PRACTITIONER;
    case PROCEDURE = VersionConstants::TYPE_NAME_PROCEDURE;
    case PROFILE = VersionConstants::TYPE_NAME_PROFILE;
    case PROVENANCE = VersionConstants::TYPE_NAME_PROVENANCE;
    case QUERY = VersionConstants::TYPE_NAME_QUERY;
    case QUESTIONNAIRE = VersionConstants::TYPE_NAME_QUESTIONNAIRE;
    case RELATED_PERSON = VersionConstants::TYPE_NAME_RELATED_PERSON;
    case SECURITY_EVENT = VersionConstants::TYPE_NAME_SECURITY_EVENT;
    case SPECIMEN = VersionConstants::TYPE_NAME_SPECIMEN;
    case SUBSTANCE = VersionConstants::TYPE_NAME_SUBSTANCE;
    case SUPPLY = VersionConstants::TYPE_NAME_SUPPLY;
    case VALUE_SET = VersionConstants::TYPE_NAME_VALUE_SET;
}

