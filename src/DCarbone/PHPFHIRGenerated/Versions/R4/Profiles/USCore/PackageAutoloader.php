<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\USCore;

use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\PackageAutoloaderInterface;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 20th, 2026 01:17+0000
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

abstract class PackageAutoloader implements PackageAutoloaderInterface
{
    /** @var array<string, string> */
    private const _CLASS_MAP = [
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreADIDocumentReferenceProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreADIDocumentReferenceProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreAllergyIntolerance' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreAllergyIntolerance.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreAverageBloodPressureProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreAverageBloodPressureProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreCareExperiencePreferenceProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreCareExperiencePreferenceProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreCarePlanProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreCarePlanProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreCareTeam' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreCareTeam.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreConditionEncounterDiagnosisProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreConditionEncounterDiagnosisProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreConditionProblemsHealthConcernsProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreConditionProblemsHealthConcernsProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreCoverageProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreCoverageProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreDeviceProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreDeviceProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreDiagnosticReportProfileLaboratoryReporting' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreDiagnosticReportProfileLaboratoryReporting.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreDiagnosticReportProfileNoteExchange' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreDiagnosticReportProfileNoteExchange.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreDocumentReferenceProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreDocumentReferenceProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreEncounterProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreEncounterProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreFamilyMemberHistoryProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreFamilyMemberHistoryProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreGoalProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreGoalProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreImmunizationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreImmunizationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreLocationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreLocationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreMedicationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreMedicationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreMedicationDispenseProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreMedicationDispenseProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreMedicationRequestProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreMedicationRequestProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationADIDocumentationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreObservationADIDocumentationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationClinicalResultProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreObservationClinicalResultProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationOccupationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreObservationOccupationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationPregnancyIntentProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreObservationPregnancyIntentProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationPregnancyStatusProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreObservationPregnancyStatusProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationScreeningAssessmentProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreObservationScreeningAssessmentProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreObservationSexualOrientationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreObservationSexualOrientationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreOrganizationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreOrganizationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePatientProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCorePatientProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePractitionerProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCorePractitionerProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePractitionerRoleProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCorePractitionerRoleProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreProcedureProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreProcedureProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreProvenance' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreProvenance.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreRelatedPersonProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreRelatedPersonProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreServiceRequestProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreServiceRequestProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreSimpleObservationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreSimpleObservationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreSmokingStatusProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreSmokingStatusProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreSpecimenProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreSpecimenProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreTreatmentInterventionPreferenceProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreTreatmentInterventionPreferenceProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreLaboratoryResultObservationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreLaboratoryResultObservationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreVitalSignsProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreVitalSignsProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePediatricHeadOccipitalFrontalCircumferencePercentileProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCorePediatricHeadOccipitalFrontalCircumferencePercentileProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePediatricBMIforAgeObservationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCorePediatricBMIforAgeObservationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePediatricWeightForHeightObservationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCorePediatricWeightForHeightObservationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBloodPressureProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreBloodPressureProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBMIProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreBMIProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBodyHeightProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreBodyHeightProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBodyTemperatureProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreBodyTemperatureProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreBodyWeightProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreBodyWeightProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreHeadCircumferenceProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreHeadCircumferenceProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreHeartRateProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreHeartRateProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCorePulseOximetryProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCorePulseOximetryProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreQuestionnaireResponseProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreQuestionnaireResponseProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\FHIRResource\\FHIRDomainResource\\USCoreRespiratoryRateProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/USCoreRespiratoryRateProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\PackageMap' => __DIR__ . '/PackageMap.php',
    ];

    private static bool $_registered = false;

    public static function register(): bool
    {
        if (!self::$_registered) {
            self::$_registered = spl_autoload_register(self::class . '::loadClass', true);
        }
        return self::$_registered;
    }

    public static function unregister(): bool
    {
        if (self::$_registered && spl_autoload_unregister(self::class . '::loadClass')) {
            self::$_registered = false;
            return true;
        }
        return false;
    }

    public static function loadClass(string $class): null|bool
    {
        if (isset(self::_CLASS_MAP[$class])) {
            return (bool)require self::_CLASS_MAP[$class];
        }
        return null;
    }
}
