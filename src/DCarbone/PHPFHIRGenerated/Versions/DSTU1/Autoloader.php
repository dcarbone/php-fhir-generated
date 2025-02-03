<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 23:46+0000
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

abstract class Autoloader
{
    /** @var array */
    private const _CLASS_MAP = [
        // version core types
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants' => __DIR__ . '/VersionConstants.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionClient' => __DIR__ . '/VersionClient.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version' => __DIR__ . '/Version.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypesEnum' => __DIR__ . '/VersionTypesEnum.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionTypeMap' => __DIR__ . '/VersionTypeMap.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionContainedTypeInterface' => __DIR__ . '/VersionContainedTypeInterface.php',

        // version fhir types
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBase64BinaryPrimitive' => __DIR__ . '/Types/FHIRBase64BinaryPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive' => __DIR__ . '/Types/FHIRBooleanPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive' => __DIR__ . '/Types/FHIRCodePrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive' => __DIR__ . '/Types/FHIRDatePrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive' => __DIR__ . '/Types/FHIRDateTimePrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive' => __DIR__ . '/Types/FHIRDecimalPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement' => __DIR__ . '/Types/FHIRElement.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress' => __DIR__ . '/Types/FHIRElement/FHIRAddress.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddressUse' => __DIR__ . '/Types/FHIRElement/FHIRAddressUse.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAggregationMode' => __DIR__ . '/Types/FHIRElement/FHIRAggregationMode.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAlertStatus' => __DIR__ . '/Types/FHIRElement/FHIRAlertStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment' => __DIR__ . '/Types/FHIRElement/FHIRAttachment.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionExposure' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRAdverseReaction/FHIRAdverseReactionExposure.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionSymptom' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRAdverseReaction/FHIRAdverseReactionSymptom.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanActivity.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanGoal.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanParticipant.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanSimple.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionAttester.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionEvent.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionSection.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapConcept' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapConcept.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapDependsOn.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapMap.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionEvidence.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionLocation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionRelatedItem.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionStage.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceCertificate.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceDocument.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceEvent.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceImplementation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceMessaging.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceOperation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceOperation1.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceQuery.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceResource.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceRest.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSearchParam.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSecurity.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSoftware.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportChannel' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDeviceObservationReport/FHIRDeviceObservationReportChannel.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportMetric' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDeviceObservationReport/FHIRDeviceObservationReportMetric.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDeviceObservationReport/FHIRDeviceObservationReportVirtualDevice.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderEvent.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderItem.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDiagnosticReport/FHIRDiagnosticReportImage.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceContext.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceParameter' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceParameter.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceRelatesTo.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceService.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterAccomodation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterHospitalization.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterLocation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterParticipant.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRFamilyHistory/FHIRFamilyHistoryCondition.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryRelation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRFamilyHistory/FHIRFamilyHistoryRelation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRGroup/FHIRGroupCharacteristic.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudyInstance.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudySeries.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationDateCriterion.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationProtocol.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationRecommendation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationExplanation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationReaction.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationVaccinationProtocol.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRList/FHIRListEntry.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRLocation/FHIRLocationPosition.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedicationAdministration/FHIRMedicationAdministrationDosage.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseDispense.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosage' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseDosage.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseSubstitution.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedicationPrescription/FHIRMedicationPrescriptionDispense.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedicationPrescription/FHIRMedicationPrescriptionDosageInstruction.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedicationPrescription/FHIRMedicationPrescriptionSubstitution.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedicationStatement/FHIRMedicationStatementDosage.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationContent.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationIngredient.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationPackage.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationProduct.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderDestination.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderResponse.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderSource.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationReferenceRange.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationRelated.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIROperationOutcome/FHIROperationOutcomeIssue.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROrder\FHIROrderWhen' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIROrder/FHIROrderWhen.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIROrganization/FHIROrganizationContact.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientAnimal.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientContact.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientLink.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRPractitioner/FHIRPractitionerQualification.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedurePerformer.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedureRelatedItem.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileBinding.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileConstraint.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileDefinition.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileElement' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileElement.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileExtensionDefn' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileExtensionDefn.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileMapping.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileMapping1.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileQuery' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileQuery.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSearchParam' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileSearchParam.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileSlicing.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileStructure' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileStructure.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceAgent.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceEntity.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRQuery/FHIRQueryResponse.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireGroup.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireQuestion.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRAdverseReaction.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRAlert.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRAllergyIntolerance.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRCarePlan.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRComposition.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRConceptMap.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRCondition.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRConformance.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDevice.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDeviceObservationReport.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDiagnosticOrder.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDiagnosticReport.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDocumentManifest.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDocumentReference.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIREncounter.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRFamilyHistory.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRGroup.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRImagingStudy.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRImmunization.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRImmunizationRecommendation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRLocation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedia.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedication.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationAdministration.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationDispense.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationPrescription.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationStatement.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMessageHeader.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRObservation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIROperationOutcome.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIROrder.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIROrderResponse.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIROrganization.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIROther.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRPatient.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRPractitioner.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRProcedure.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRProfile.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRProvenance.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRQuery.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRQuestionnaire.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRRelatedPerson.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSecurityEvent.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSpecimen.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSubstance.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSupply.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRResource/FHIRValueSet.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventDetail' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventDetail.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventEvent.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventNetwork' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventNetwork.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventObject.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventParticipant.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventSource' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventSource.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenCollection.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenContainer.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenSource.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenTreatment.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceIngredient.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceInstance.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSupply\FHIRSupplyDispense' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRSupply/FHIRSupplyDispense.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetCompose.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetConcept.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetContains.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDefine' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetDefine.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetExpansion.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetFilter.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude' => __DIR__ . '/Types/FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetInclude.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary' => __DIR__ . '/Types/FHIRElement/FHIRBase64Binary.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary\FHIRBinary' => __DIR__ . '/Types/FHIRElement/FHIRBase64Binary/FHIRBinary.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBindingConformance' => __DIR__ . '/Types/FHIRElement/FHIRBindingConformance.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean' => __DIR__ . '/Types/FHIRElement/FHIRBoolean.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityCategory' => __DIR__ . '/Types/FHIRElement/FHIRCarePlanActivityCategory.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityStatus' => __DIR__ . '/Types/FHIRElement/FHIRCarePlanActivityStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanGoalStatus' => __DIR__ . '/Types/FHIRElement/FHIRCarePlanGoalStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanStatus' => __DIR__ . '/Types/FHIRElement/FHIRCarePlanStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCausalityExpectation' => __DIR__ . '/Types/FHIRElement/FHIRCausalityExpectation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode' => __DIR__ . '/Types/FHIRElement/FHIRCode.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept' => __DIR__ . '/Types/FHIRElement/FHIRCodeableConcept.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding' => __DIR__ . '/Types/FHIRElement/FHIRCoding.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCompositionAttestationMode' => __DIR__ . '/Types/FHIRElement/FHIRCompositionAttestationMode.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCompositionStatus' => __DIR__ . '/Types/FHIRElement/FHIRCompositionStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConceptMapEquivalence' => __DIR__ . '/Types/FHIRElement/FHIRConceptMapEquivalence.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConditionRelationshipType' => __DIR__ . '/Types/FHIRElement/FHIRConditionRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConditionStatus' => __DIR__ . '/Types/FHIRElement/FHIRConditionStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceEventMode' => __DIR__ . '/Types/FHIRElement/FHIRConformanceEventMode.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceStatementStatus' => __DIR__ . '/Types/FHIRElement/FHIRConformanceStatementStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConstraintSeverity' => __DIR__ . '/Types/FHIRElement/FHIRConstraintSeverity.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact' => __DIR__ . '/Types/FHIRElement/FHIRContact.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContactSystem' => __DIR__ . '/Types/FHIRElement/FHIRContactSystem.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContactUse' => __DIR__ . '/Types/FHIRElement/FHIRContactUse.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCriticality' => __DIR__ . '/Types/FHIRElement/FHIRCriticality.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate' => __DIR__ . '/Types/FHIRElement/FHIRDate.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime' => __DIR__ . '/Types/FHIRElement/FHIRDateTime.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal' => __DIR__ . '/Types/FHIRElement/FHIRDecimal.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal\FHIRScore' => __DIR__ . '/Types/FHIRElement/FHIRDecimal/FHIRScore.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderPriority' => __DIR__ . '/Types/FHIRElement/FHIRDiagnosticOrderPriority.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderStatus' => __DIR__ . '/Types/FHIRElement/FHIRDiagnosticOrderStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticReportStatus' => __DIR__ . '/Types/FHIRElement/FHIRDiagnosticReportStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentMode' => __DIR__ . '/Types/FHIRElement/FHIRDocumentMode.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentReferenceStatus' => __DIR__ . '/Types/FHIRElement/FHIRDocumentReferenceStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentRelationshipType' => __DIR__ . '/Types/FHIRElement/FHIRDocumentRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREncounterClass' => __DIR__ . '/Types/FHIRElement/FHIREncounterClass.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREncounterState' => __DIR__ . '/Types/FHIRElement/FHIREncounterState.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREventTiming' => __DIR__ . '/Types/FHIRElement/FHIREventTiming.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExposureType' => __DIR__ . '/Types/FHIRElement/FHIRExposureType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension' => __DIR__ . '/Types/FHIRElement/FHIRExtension.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtensionContext' => __DIR__ . '/Types/FHIRElement/FHIRExtensionContext.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRFilterOperator' => __DIR__ . '/Types/FHIRElement/FHIRFilterOperator.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRGroupType' => __DIR__ . '/Types/FHIRElement/FHIRGroupType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHierarchicalRelationshipType' => __DIR__ . '/Types/FHIRElement/FHIRHierarchicalRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName' => __DIR__ . '/Types/FHIRElement/FHIRHumanName.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId' => __DIR__ . '/Types/FHIRElement/FHIRId.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier' => __DIR__ . '/Types/FHIRElement/FHIRIdentifier.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifierUse' => __DIR__ . '/Types/FHIRElement/FHIRIdentifierUse.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRImagingModality' => __DIR__ . '/Types/FHIRElement/FHIRImagingModality.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstanceAvailability' => __DIR__ . '/Types/FHIRElement/FHIRInstanceAvailability.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant' => __DIR__ . '/Types/FHIRElement/FHIRInstant.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger' => __DIR__ . '/Types/FHIRElement/FHIRInteger.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger\FHIRTotalResults' => __DIR__ . '/Types/FHIRElement/FHIRInteger/FHIRTotalResults.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity' => __DIR__ . '/Types/FHIRElement/FHIRIssueSeverity.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLinkType' => __DIR__ . '/Types/FHIRElement/FHIRLinkType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRListMode' => __DIR__ . '/Types/FHIRElement/FHIRListMode.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationMode' => __DIR__ . '/Types/FHIRElement/FHIRLocationMode.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationStatus' => __DIR__ . '/Types/FHIRElement/FHIRLocationStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMediaType' => __DIR__ . '/Types/FHIRElement/FHIRMediaType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationAdministrationStatus' => __DIR__ . '/Types/FHIRElement/FHIRMedicationAdministrationStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationDispenseStatus' => __DIR__ . '/Types/FHIRElement/FHIRMedicationDispenseStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationKind' => __DIR__ . '/Types/FHIRElement/FHIRMedicationKind.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationPrescriptionStatus' => __DIR__ . '/Types/FHIRElement/FHIRMedicationPrescriptionStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMessageSignificanceCategory' => __DIR__ . '/Types/FHIRElement/FHIRMessageSignificanceCategory.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRModality' => __DIR__ . '/Types/FHIRElement/FHIRModality.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNameUse' => __DIR__ . '/Types/FHIRElement/FHIRNameUse.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative' => __DIR__ . '/Types/FHIRElement/FHIRNarrative.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrativeStatus' => __DIR__ . '/Types/FHIRElement/FHIRNarrativeStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRObservationRelationshipType' => __DIR__ . '/Types/FHIRElement/FHIRObservationRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRObservationReliability' => __DIR__ . '/Types/FHIRElement/FHIRObservationReliability.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRObservationStatus' => __DIR__ . '/Types/FHIRElement/FHIRObservationStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid' => __DIR__ . '/Types/FHIRElement/FHIROid.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROrderOutcomeStatus' => __DIR__ . '/Types/FHIRElement/FHIROrderOutcomeStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod' => __DIR__ . '/Types/FHIRElement/FHIRPeriod.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRProcedureRelationshipType' => __DIR__ . '/Types/FHIRElement/FHIRProcedureRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPropertyRepresentation' => __DIR__ . '/Types/FHIRElement/FHIRPropertyRepresentation.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRProvenanceEntityRole' => __DIR__ . '/Types/FHIRElement/FHIRProvenanceEntityRole.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity' => __DIR__ . '/Types/FHIRElement/FHIRQuantity.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantityCompararator' => __DIR__ . '/Types/FHIRElement/FHIRQuantityCompararator.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge' => __DIR__ . '/Types/FHIRElement/FHIRQuantity/FHIRAge.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRCount' => __DIR__ . '/Types/FHIRElement/FHIRQuantity/FHIRCount.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRDistance' => __DIR__ . '/Types/FHIRElement/FHIRQuantity/FHIRDistance.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRDuration' => __DIR__ . '/Types/FHIRElement/FHIRQuantity/FHIRDuration.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRMoney' => __DIR__ . '/Types/FHIRElement/FHIRQuantity/FHIRMoney.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQueryOutcome' => __DIR__ . '/Types/FHIRElement/FHIRQueryOutcome.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuestionnaireStatus' => __DIR__ . '/Types/FHIRElement/FHIRQuestionnaireStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange' => __DIR__ . '/Types/FHIRElement/FHIRRange.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio' => __DIR__ . '/Types/FHIRElement/FHIRRatio.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRReactionSeverity' => __DIR__ . '/Types/FHIRElement/FHIRReactionSeverity.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceProfileStatus' => __DIR__ . '/Types/FHIRElement/FHIRResourceProfileStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference' => __DIR__ . '/Types/FHIRElement/FHIRResourceReference.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResponseType' => __DIR__ . '/Types/FHIRElement/FHIRResponseType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulConformanceMode' => __DIR__ . '/Types/FHIRElement/FHIRRestfulConformanceMode.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulOperationSystem' => __DIR__ . '/Types/FHIRElement/FHIRRestfulOperationSystem.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulOperationType' => __DIR__ . '/Types/FHIRElement/FHIRRestfulOperationType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData' => __DIR__ . '/Types/FHIRElement/FHIRSampledData.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledDataDataType' => __DIR__ . '/Types/FHIRElement/FHIRSampledDataDataType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule' => __DIR__ . '/Types/FHIRElement/FHIRSchedule.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat' => __DIR__ . '/Types/FHIRElement/FHIRSchedule/FHIRScheduleRepeat.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSearchParamType' => __DIR__ . '/Types/FHIRElement/FHIRSearchParamType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventAction' => __DIR__ . '/Types/FHIRElement/FHIRSecurityEventAction.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventObjectLifecycle' => __DIR__ . '/Types/FHIRElement/FHIRSecurityEventObjectLifecycle.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventObjectRole' => __DIR__ . '/Types/FHIRElement/FHIRSecurityEventObjectRole.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventObjectType' => __DIR__ . '/Types/FHIRElement/FHIRSecurityEventObjectType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventOutcome' => __DIR__ . '/Types/FHIRElement/FHIRSecurityEventOutcome.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventParticipantNetworkType' => __DIR__ . '/Types/FHIRElement/FHIRSecurityEventParticipantNetworkType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSensitivityStatus' => __DIR__ . '/Types/FHIRElement/FHIRSensitivityStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSensitivityType' => __DIR__ . '/Types/FHIRElement/FHIRSensitivityType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules' => __DIR__ . '/Types/FHIRElement/FHIRSlicingRules.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString' => __DIR__ . '/Types/FHIRElement/FHIRString.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSupplyDispenseStatus' => __DIR__ . '/Types/FHIRElement/FHIRSupplyDispenseStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSupplyStatus' => __DIR__ . '/Types/FHIRElement/FHIRSupplyStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUnitsOfTime' => __DIR__ . '/Types/FHIRElement/FHIRUnitsOfTime.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri' => __DIR__ . '/Types/FHIRElement/FHIRUri.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid' => __DIR__ . '/Types/FHIRElement/FHIRUuid.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRValueSetStatus' => __DIR__ . '/Types/FHIRElement/FHIRValueSetStatus.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive' => __DIR__ . '/Types/FHIRIdPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive\FHIRXmlIdRef' => __DIR__ . '/Types/FHIRIdPrimitive/FHIRXmlIdRef.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive' => __DIR__ . '/Types/FHIRInstantPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive' => __DIR__ . '/Types/FHIRIntegerPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive' => __DIR__ . '/Types/FHIROidPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline' => __DIR__ . '/Types/FHIRResource/FHIRResourceInline.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRSampledDataDataTypePrimitive' => __DIR__ . '/Types/FHIRSampledDataDataTypePrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive' => __DIR__ . '/Types/FHIRStringPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRAddressUseList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRAddressUseList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRAggregationModeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRAggregationModeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRAlertStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRAlertStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRBindingConformanceList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRBindingConformanceList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityCategoryList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRCarePlanActivityCategoryList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRCarePlanActivityStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanGoalStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRCarePlanGoalStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRCarePlanStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCausalityExpectationList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRCausalityExpectationList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCompositionAttestationModeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRCompositionAttestationModeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCompositionStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRCompositionStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConceptMapEquivalenceList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRConceptMapEquivalenceList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConditionRelationshipTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRConditionRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConditionStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRConditionStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConformanceEventModeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRConformanceEventModeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConformanceStatementStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRConformanceStatementStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConstraintSeverityList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRConstraintSeverityList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRContactSystemList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRContactSystemList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRContactUseList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRContactUseList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCriticalityList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRCriticalityList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRDiagnosticOrderPriorityList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRDiagnosticOrderStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticReportStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRDiagnosticReportStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDocumentModeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRDocumentModeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDocumentReferenceStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRDocumentReferenceStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDocumentRelationshipTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRDocumentRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIREncounterClassList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIREncounterClassList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIREncounterStateList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIREncounterStateList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIREventTimingList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIREventTimingList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRExposureTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRExposureTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRExtensionContextList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRExtensionContextList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRFilterOperatorList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRFilterOperatorList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRGroupTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRGroupTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRHierarchicalRelationshipTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRHierarchicalRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRIdentifierUseList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRIdentifierUseList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRImagingModalityList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRImagingModalityList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRInstanceAvailabilityList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRInstanceAvailabilityList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRIssueSeverityList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRIssueSeverityList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLinkTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRLinkTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRListModeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRListModeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationModeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRLocationModeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRLocationStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMediaTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRMediaTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRMedicationAdministrationStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationDispenseStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRMedicationDispenseStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationKindList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRMedicationKindList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationPrescriptionStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRMedicationPrescriptionStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRMessageSignificanceCategoryList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRModalityList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRModalityList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRNameUseList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRNameUseList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRNarrativeStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRNarrativeStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRObservationRelationshipTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRObservationRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRObservationReliabilityList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRObservationReliabilityList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRObservationStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRObservationStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIROrderOutcomeStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIROrderOutcomeStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRProcedureRelationshipTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRProcedureRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRPropertyRepresentationList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRPropertyRepresentationList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRProvenanceEntityRoleList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRProvenanceEntityRoleList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRQuantityCompararatorList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRQuantityCompararatorList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRQueryOutcomeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRQueryOutcomeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRQuestionnaireStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRQuestionnaireStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRReactionSeverityList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRReactionSeverityList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRResourceProfileStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRResourceProfileStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRResourceType' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRResourceType.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRResourceType\FHIRResourceNamesPlusBinary' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRResourceType/FHIRResourceNamesPlusBinary.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRResponseTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRResponseTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRRestfulConformanceModeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRRestfulConformanceModeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRRestfulOperationSystemList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRRestfulOperationSystemList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRRestfulOperationTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRRestfulOperationTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSearchParamTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSearchParamTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventActionList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSecurityEventActionList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventObjectLifecycleList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSecurityEventObjectLifecycleList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventObjectRoleList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSecurityEventObjectRoleList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventObjectTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSecurityEventObjectTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventOutcomeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSecurityEventOutcomeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventParticipantNetworkTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSecurityEventParticipantNetworkTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSensitivityStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSensitivityStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSensitivityTypeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSensitivityTypeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSlicingRulesList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSlicingRulesList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSupplyDispenseStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSupplyDispenseStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSupplyStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRSupplyStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRUnitsOfTimeList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRValueSetStatusList' => __DIR__ . '/Types/FHIRStringPrimitive/FHIRValueSetStatusList.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive' => __DIR__ . '/Types/FHIRUriPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUuidPrimitive' => __DIR__ . '/Types/FHIRUuidPrimitive.php',
        'DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRXHTML' => __DIR__ . '/Types/FHIRXHTML.php',
    ];

    /** @var bool */
    private static bool $_registered = false;

    /**
     * @return bool
     * @throws \Exception
     */
    public static function register(): bool
    {
        if (!self::$_registered) {
            self::$_registered = spl_autoload_register(__CLASS__ . '::loadClass', true);
        }
        return self::$_registered;
    }

    /**
     * @return bool
     */
    public static function unregister(): bool
    {
        if (self::$_registered) {
            if (spl_autoload_unregister(__CLASS__ . '::loadClass')) {
                self::$_registered = false;
                return true;
            }
        }
        return false;
    }

    /**
     * Please see associated documentation for more information on what this method looks for.
     *
     * @param string $class
     * @return bool|null
     */
    public static function loadClass(string $class): null|bool
    {
        if (isset(self::_CLASS_MAP[$class])) {
            return (bool)require self::_CLASS_MAP[$class];
        }
        return null;
    }
}
