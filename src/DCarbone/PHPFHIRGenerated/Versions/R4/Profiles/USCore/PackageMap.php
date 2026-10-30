<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\USCore;

use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\PackageMapInterface;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 30th, 2026 00:59+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2026 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 */

/**
 * Index of the generated profile classes of a single package, keyed by canonical profile url.
 */
abstract class PackageMap implements PackageMapInterface
{
    /** @var array<string, class-string> */
    private const _PROFILES = [
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-adi-documentreference' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreADIDocumentReferenceProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-allergyintolerance' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreAllergyIntolerance',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-average-blood-pressure' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreAverageBloodPressureProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-care-experience-preference' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreCareExperiencePreferenceProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-careplan' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreCarePlanProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-careteam' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreCareTeam',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-condition-encounter-diagnosis' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreConditionEncounterDiagnosisProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-condition-problems-health-concerns' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreConditionProblemsHealthConcernsProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-coverage' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreCoverageProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-device' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreDeviceProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-lab' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreDiagnosticReportProfileLaboratoryReporting',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-note' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreDiagnosticReportProfileNoteExchange',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-documentreference' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreDocumentReferenceProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-encounter' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreEncounterProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-familymemberhistory' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreFamilyMemberHistoryProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-goal' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreGoalProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-immunization' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreImmunizationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-location' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreLocationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-medication' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreMedicationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-medicationdispense' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreMedicationDispenseProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-medicationrequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreMedicationRequestProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-adi-documentation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationADIDocumentationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationClinicalResultProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-occupation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationOccupationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-pregnancyintent' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationPregnancyIntentProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-pregnancystatus' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationPregnancyStatusProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-screening-assessment' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationScreeningAssessmentProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-sexual-orientation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationSexualOrientationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-organization' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreOrganizationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePatientProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-practitioner' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePractitionerProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-practitionerrole' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePractitionerRoleProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-procedure' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreProcedureProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-provenance' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreProvenance',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-relatedperson' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreRelatedPersonProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-servicerequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreServiceRequestProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-simple-observation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreSimpleObservationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-smokingstatus' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreSmokingStatusProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-specimen' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreSpecimenProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-treatment-intervention-preference' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreTreatmentInterventionPreferenceProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-lab' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreLaboratoryResultObservationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-vital-signs' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreVitalSignsProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/head-occipital-frontal-circumference-percentile' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePediatricHeadOccipitalFrontalCircumferencePercentileProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/pediatric-bmi-for-age' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePediatricBMIforAgeObservationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/pediatric-weight-for-height' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePediatricWeightForHeightObservationProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-blood-pressure' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBloodPressureProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-bmi' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBMIProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-height' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBodyHeightProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-temperature' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBodyTemperatureProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-weight' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBodyWeightProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-head-circumference' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreHeadCircumferenceProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-heart-rate' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreHeartRateProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-pulse-oximetry' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePulseOximetryProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreQuestionnaireResponseProfile',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-respiratory-rate' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreRespiratoryRateProfile',
    ];

    /** @var array<string, string> */
    private const _BASE_TYPES = [
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-adi-documentreference' => 'DocumentReference',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-allergyintolerance' => 'AllergyIntolerance',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-average-blood-pressure' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-care-experience-preference' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-careplan' => 'CarePlan',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-careteam' => 'CareTeam',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-condition-encounter-diagnosis' => 'Condition',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-condition-problems-health-concerns' => 'Condition',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-coverage' => 'Coverage',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-device' => 'Device',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-lab' => 'DiagnosticReport',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-note' => 'DiagnosticReport',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-documentreference' => 'DocumentReference',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-encounter' => 'Encounter',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-familymemberhistory' => 'FamilyMemberHistory',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-goal' => 'Goal',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-immunization' => 'Immunization',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-location' => 'Location',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-medication' => 'Medication',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-medicationdispense' => 'MedicationDispense',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-medicationrequest' => 'MedicationRequest',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-adi-documentation' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-occupation' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-pregnancyintent' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-pregnancystatus' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-screening-assessment' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-sexual-orientation' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-organization' => 'Organization',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient' => 'Patient',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-practitioner' => 'Practitioner',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-practitionerrole' => 'PractitionerRole',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-procedure' => 'Procedure',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-provenance' => 'Provenance',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-relatedperson' => 'RelatedPerson',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-servicerequest' => 'ServiceRequest',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-simple-observation' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-smokingstatus' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-specimen' => 'Specimen',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-treatment-intervention-preference' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-lab' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-vital-signs' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/head-occipital-frontal-circumference-percentile' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/pediatric-bmi-for-age' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/pediatric-weight-for-height' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-blood-pressure' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-bmi' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-height' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-temperature' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-weight' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-head-circumference' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-heart-rate' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-pulse-oximetry' => 'Observation',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse' => 'QuestionnaireResponse',
        'http://hl7.org/fhir/us/core/StructureDefinition/us-core-respiratory-rate' => 'Observation',
    ];

    /**
     * @return array<string, class-string>
     */
    public static function getProfileClasses(): array
    {
        return self::_PROFILES;
    }

    /**
     * @param string $url Canonical profile url, without a "|version" suffix.
     * @return null|class-string
     */
    public static function getProfileClassname(string $url): null|string
    {
        return self::_PROFILES[$url] ?? null;
    }

    /**
     * @param string $url Canonical profile url, without a "|version" suffix.
     * @return null|string FHIR name of the type the profile constrains.
     */
    public static function getProfileBaseType(string $url): null|string
    {
        return self::_BASE_TYPES[$url] ?? null;
    }
}
