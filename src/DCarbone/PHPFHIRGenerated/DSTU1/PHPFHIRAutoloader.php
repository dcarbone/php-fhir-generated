<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 17th, 2019 04:21+0000
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

// if this class is used, assume not using Composer...

// interfaces
if (!interface_exists('\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeInterface.php';
}
if (!interface_exists('\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRContainedTypeInterface.php';
}
if (!interface_exists('\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRCommentContainerInterface', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerInterface.php';
}

// traits
if (!trait_exists('\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRCommentContainerTrait', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRCommentContainerTrait.php';
}

// common classes
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRConstants.php';
}
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeMap', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRTypeMap.php';
}
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRResponseParserConfig', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRResponseParserConfig.php';
}
if (!class_exists('\DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRResponseParser', false)) {
    require __DIR__ . DIRECTORY_SEPARATOR . 'PHPFHIRResponseParser.php';
}

/**
 * Class PHPFHIRAutoloader
 * @package \DCarbone\PHPFHIRGenerated\DSTU1
 */
abstract class PHPFHIRAutoloader
{
    const ROOT_DIR = __DIR__;

    /** @var bool */
    private static $_registered = false;

    /** @var array */
    private static $_classMap = [
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRAddressUseList' => 'FHIRAddressUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRAggregationModeList' => 'FHIRAggregationModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRAlertStatusList' => 'FHIRAlertStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRBase64BinaryPrimitive' => 'FHIRBase64BinaryPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary' => 'FHIRBinary.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRBindingConformanceList' => 'FHIRBindingConformanceList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRBooleanPrimitive' => 'FHIRBooleanPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRCarePlanActivityCategoryList' => 'FHIRCarePlanActivityCategoryList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRCarePlanActivityStatusList' => 'FHIRCarePlanActivityStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRCarePlanGoalStatusList' => 'FHIRCarePlanGoalStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRCarePlanStatusList' => 'FHIRCarePlanStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRCausalityExpectationList' => 'FHIRCausalityExpectationList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive' => 'FHIRCodePrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRCompositionAttestationModeList' => 'FHIRCompositionAttestationModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRCompositionStatusList' => 'FHIRCompositionStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRConceptMapEquivalenceList' => 'FHIRConceptMapEquivalenceList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRConditionRelationshipTypeList' => 'FHIRConditionRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRConditionStatusList' => 'FHIRConditionStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRConformanceEventModeList' => 'FHIRConformanceEventModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRConformanceStatementStatusList' => 'FHIRConformanceStatementStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRConstraintSeverityList' => 'FHIRConstraintSeverityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRContactSystemList' => 'FHIRContactSystemList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRContactUseList' => 'FHIRContactUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRCriticalityList' => 'FHIRCriticalityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRDatePrimitive' => 'FHIRDatePrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive' => 'FHIRDateTimePrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRDecimalPrimitive' => 'FHIRDecimalPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRDiagnosticOrderPriorityList' => 'FHIRDiagnosticOrderPriorityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRDiagnosticOrderStatusList' => 'FHIRDiagnosticOrderStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRDiagnosticReportStatusList' => 'FHIRDiagnosticReportStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRDocumentModeList' => 'FHIRDocumentModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRDocumentReferenceStatusList' => 'FHIRDocumentReferenceStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRDocumentRelationshipTypeList' => 'FHIRDocumentRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement' => 'FHIRElement.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress' => 'FHIRElement/FHIRAddress.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse' => 'FHIRElement/FHIRAddressUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAggregationMode' => 'FHIRElement/FHIRAggregationMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAlertStatus' => 'FHIRElement/FHIRAlertStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment' => 'FHIRElement/FHIRAttachment.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement' => 'FHIRElement/FHIRBackboneElement.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionExposure' => 'FHIRElement/FHIRBackboneElement/FHIRAdverseReaction/FHIRAdverseReactionExposure.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionSymptom' => 'FHIRElement/FHIRBackboneElement/FHIRAdverseReaction/FHIRAdverseReactionSymptom.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanActivity.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanGoal.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanParticipant.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple' => 'FHIRElement/FHIRBackboneElement/FHIRCarePlan/FHIRCarePlanSimple.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionAttester.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection' => 'FHIRElement/FHIRBackboneElement/FHIRComposition/FHIRCompositionSection.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapConcept' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapConcept.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapDependsOn.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap' => 'FHIRElement/FHIRBackboneElement/FHIRConceptMap/FHIRConceptMapMap.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionEvidence.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionLocation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionRelatedItem.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage' => 'FHIRElement/FHIRBackboneElement/FHIRCondition/FHIRConditionStage.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceCertificate.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceDocument.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceImplementation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceMessaging.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceOperation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceOperation1.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceQuery.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceResource.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceRest.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSearchParam.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSecurity.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware' => 'FHIRElement/FHIRBackboneElement/FHIRConformance/FHIRConformanceSoftware.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportChannel' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceObservationReport/FHIRDeviceObservationReportChannel.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportMetric' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceObservationReport/FHIRDeviceObservationReportMetric.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice' => 'FHIRElement/FHIRBackboneElement/FHIRDeviceObservationReport/FHIRDeviceObservationReportVirtualDevice.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticOrder/FHIRDiagnosticOrderItem.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage' => 'FHIRElement/FHIRBackboneElement/FHIRDiagnosticReport/FHIRDiagnosticReportImage.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceContext.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceParameter' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceParameter.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceRelatesTo.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService' => 'FHIRElement/FHIRBackboneElement/FHIRDocumentReference/FHIRDocumentReferenceService.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterAccomodation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterHospitalization.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterLocation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant' => 'FHIRElement/FHIRBackboneElement/FHIREncounter/FHIREncounterParticipant.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition' => 'FHIRElement/FHIRBackboneElement/FHIRFamilyHistory/FHIRFamilyHistoryCondition.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryRelation' => 'FHIRElement/FHIRBackboneElement/FHIRFamilyHistory/FHIRFamilyHistoryRelation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic' => 'FHIRElement/FHIRBackboneElement/FHIRGroup/FHIRGroupCharacteristic.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance' => 'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudyInstance.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries' => 'FHIRElement/FHIRBackboneElement/FHIRImagingStudy/FHIRImagingStudySeries.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationDateCriterion.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationProtocol.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation' => 'FHIRElement/FHIRBackboneElement/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationRecommendation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationExplanation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationReaction.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol' => 'FHIRElement/FHIRBackboneElement/FHIRImmunization/FHIRImmunizationVaccinationProtocol.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry' => 'FHIRElement/FHIRBackboneElement/FHIRList/FHIRListEntry.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition' => 'FHIRElement/FHIRBackboneElement/FHIRLocation/FHIRLocationPosition.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationAdministration/FHIRMedicationAdministrationDosage.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseDispense.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseDosage.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationDispense/FHIRMedicationDispenseSubstitution.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationPrescription/FHIRMedicationPrescriptionDispense.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationPrescription/FHIRMedicationPrescriptionDosageInstruction.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationPrescription/FHIRMedicationPrescriptionSubstitution.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage' => 'FHIRElement/FHIRBackboneElement/FHIRMedicationStatement/FHIRMedicationStatementDosage.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationContent.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationIngredient.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationPackage.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct' => 'FHIRElement/FHIRBackboneElement/FHIRMedication/FHIRMedicationProduct.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderDestination.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource' => 'FHIRElement/FHIRBackboneElement/FHIRMessageHeader/FHIRMessageHeaderSource.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationReferenceRange.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated' => 'FHIRElement/FHIRBackboneElement/FHIRObservation/FHIRObservationRelated.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue' => 'FHIRElement/FHIRBackboneElement/FHIROperationOutcome/FHIROperationOutcomeIssue.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROrder\FHIROrderWhen' => 'FHIRElement/FHIRBackboneElement/FHIROrder/FHIROrderWhen.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact' => 'FHIRElement/FHIRBackboneElement/FHIROrganization/FHIROrganizationContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientAnimal.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink' => 'FHIRElement/FHIRBackboneElement/FHIRPatient/FHIRPatientLink.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification' => 'FHIRElement/FHIRBackboneElement/FHIRPractitioner/FHIRPractitionerQualification.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer' => 'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedurePerformer.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem' => 'FHIRElement/FHIRBackboneElement/FHIRProcedure/FHIRProcedureRelatedItem.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileBinding.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileConstraint.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileDefinition.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileElement' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileElement.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileExtensionDefn' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileExtensionDefn.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileMapping.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileMapping1.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileQuery' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileQuery.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSearchParam' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileSearchParam.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileSlicing.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileStructure' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileStructure.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType' => 'FHIRElement/FHIRBackboneElement/FHIRProfile/FHIRProfileType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceAgent.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity' => 'FHIRElement/FHIRBackboneElement/FHIRProvenance/FHIRProvenanceEntity.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse' => 'FHIRElement/FHIRBackboneElement/FHIRQuery/FHIRQueryResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireGroup.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion' => 'FHIRElement/FHIRBackboneElement/FHIRQuestionnaire/FHIRQuestionnaireQuestion.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource' => 'FHIRElement/FHIRBackboneElement/FHIRResource.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRAdverseReaction.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRAlert.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRAllergyIntolerance.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRCarePlan.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRComposition.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRConceptMap.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRCondition.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRConformance.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDevice.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDeviceObservationReport.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDiagnosticOrder.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDiagnosticReport.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDocumentManifest.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRDocumentReference.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIREncounter.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRFamilyHistory.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRGroup.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRImagingStudy.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRImmunization.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRImmunizationRecommendation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRLocation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedia.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedication.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationAdministration.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationDispense.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationPrescription.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMedicationStatement.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRMessageHeader.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRObservation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROperationOutcome.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROrder.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROrderResponse.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROrganization.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIROther.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRPatient.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRPractitioner.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRProcedure.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRProfile.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRProvenance.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRQuery.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRQuestionnaire.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRRelatedPerson.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSecurityEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSpecimen.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSubstance.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRSupply.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet' => 'FHIRElement/FHIRBackboneElement/FHIRResource/FHIRValueSet.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventDetail' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventDetail.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventEvent.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventNetwork' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventNetwork.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventObject.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventParticipant.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventSource' => 'FHIRElement/FHIRBackboneElement/FHIRSecurityEvent/FHIRSecurityEventSource.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenCollection.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenContainer.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenSource.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment' => 'FHIRElement/FHIRBackboneElement/FHIRSpecimen/FHIRSpecimenTreatment.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient' => 'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceIngredient.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance' => 'FHIRElement/FHIRBackboneElement/FHIRSubstance/FHIRSubstanceInstance.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSupply\FHIRSupplyDispense' => 'FHIRElement/FHIRBackboneElement/FHIRSupply/FHIRSupplyDispense.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetCompose.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetConcept.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetContains.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDefine' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetDefine.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetExpansion.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetFilter.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude' => 'FHIRElement/FHIRBackboneElement/FHIRValueSet/FHIRValueSetInclude.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary' => 'FHIRElement/FHIRBase64Binary.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance' => 'FHIRElement/FHIRBindingConformance.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean' => 'FHIRElement/FHIRBoolean.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityCategory' => 'FHIRElement/FHIRCarePlanActivityCategory.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityStatus' => 'FHIRElement/FHIRCarePlanActivityStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanGoalStatus' => 'FHIRElement/FHIRCarePlanGoalStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanStatus' => 'FHIRElement/FHIRCarePlanStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCausalityExpectation' => 'FHIRElement/FHIRCausalityExpectation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode' => 'FHIRElement/FHIRCode.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept' => 'FHIRElement/FHIRCodeableConcept.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding' => 'FHIRElement/FHIRCoding.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCompositionAttestationMode' => 'FHIRElement/FHIRCompositionAttestationMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCompositionStatus' => 'FHIRElement/FHIRCompositionStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConceptMapEquivalence' => 'FHIRElement/FHIRConceptMapEquivalence.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConditionRelationshipType' => 'FHIRElement/FHIRConditionRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConditionStatus' => 'FHIRElement/FHIRConditionStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConformanceEventMode' => 'FHIRElement/FHIRConformanceEventMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConformanceStatementStatus' => 'FHIRElement/FHIRConformanceStatementStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConstraintSeverity' => 'FHIRElement/FHIRConstraintSeverity.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact' => 'FHIRElement/FHIRContact.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContactSystem' => 'FHIRElement/FHIRContactSystem.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContactUse' => 'FHIRElement/FHIRContactUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCriticality' => 'FHIRElement/FHIRCriticality.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate' => 'FHIRElement/FHIRDate.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime' => 'FHIRElement/FHIRDateTime.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal' => 'FHIRElement/FHIRDecimal.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal\FHIRScore' => 'FHIRElement/FHIRDecimal/FHIRScore.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticOrderPriority' => 'FHIRElement/FHIRDiagnosticOrderPriority.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticOrderStatus' => 'FHIRElement/FHIRDiagnosticOrderStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticReportStatus' => 'FHIRElement/FHIRDiagnosticReportStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentMode' => 'FHIRElement/FHIRDocumentMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentReferenceStatus' => 'FHIRElement/FHIRDocumentReferenceStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentRelationshipType' => 'FHIRElement/FHIRDocumentRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREncounterClass' => 'FHIRElement/FHIREncounterClass.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREncounterState' => 'FHIRElement/FHIREncounterState.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREventTiming' => 'FHIRElement/FHIREventTiming.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExposureType' => 'FHIRElement/FHIRExposureType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension' => 'FHIRElement/FHIRExtension.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtensionContext' => 'FHIRElement/FHIRExtensionContext.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRFilterOperator' => 'FHIRElement/FHIRFilterOperator.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRGroupType' => 'FHIRElement/FHIRGroupType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHierarchicalRelationshipType' => 'FHIRElement/FHIRHierarchicalRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName' => 'FHIRElement/FHIRHumanName.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId' => 'FHIRElement/FHIRId.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier' => 'FHIRElement/FHIRIdentifier.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifierUse' => 'FHIRElement/FHIRIdentifierUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRImagingModality' => 'FHIRElement/FHIRImagingModality.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability' => 'FHIRElement/FHIRInstanceAvailability.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant' => 'FHIRElement/FHIRInstant.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger' => 'FHIRElement/FHIRInteger.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger\FHIRTotalResults' => 'FHIRElement/FHIRInteger/FHIRTotalResults.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIssueSeverity' => 'FHIRElement/FHIRIssueSeverity.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRLinkType' => 'FHIRElement/FHIRLinkType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRListMode' => 'FHIRElement/FHIRListMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRLocationMode' => 'FHIRElement/FHIRLocationMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRLocationStatus' => 'FHIRElement/FHIRLocationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMediaType' => 'FHIRElement/FHIRMediaType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationAdministrationStatus' => 'FHIRElement/FHIRMedicationAdministrationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationDispenseStatus' => 'FHIRElement/FHIRMedicationDispenseStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationKind' => 'FHIRElement/FHIRMedicationKind.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationPrescriptionStatus' => 'FHIRElement/FHIRMedicationPrescriptionStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMessageSignificanceCategory' => 'FHIRElement/FHIRMessageSignificanceCategory.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRModality' => 'FHIRElement/FHIRModality.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNameUse' => 'FHIRElement/FHIRNameUse.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative' => 'FHIRElement/FHIRNarrative.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrativeStatus' => 'FHIRElement/FHIRNarrativeStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationRelationshipType' => 'FHIRElement/FHIRObservationRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationReliability' => 'FHIRElement/FHIRObservationReliability.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationStatus' => 'FHIRElement/FHIRObservationStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid' => 'FHIRElement/FHIROid.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROrderOutcomeStatus' => 'FHIRElement/FHIROrderOutcomeStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod' => 'FHIRElement/FHIRPeriod.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRProcedureRelationshipType' => 'FHIRElement/FHIRProcedureRelationshipType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPropertyRepresentation' => 'FHIRElement/FHIRPropertyRepresentation.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRProvenanceEntityRole' => 'FHIRElement/FHIRProvenanceEntityRole.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity' => 'FHIRElement/FHIRQuantity.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantityCompararator' => 'FHIRElement/FHIRQuantityCompararator.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRAge' => 'FHIRElement/FHIRQuantity/FHIRAge.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRCount' => 'FHIRElement/FHIRQuantity/FHIRCount.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRDistance' => 'FHIRElement/FHIRQuantity/FHIRDistance.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRDuration' => 'FHIRElement/FHIRQuantity/FHIRDuration.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRMoney' => 'FHIRElement/FHIRQuantity/FHIRMoney.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQueryOutcome' => 'FHIRElement/FHIRQueryOutcome.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuestionnaireStatus' => 'FHIRElement/FHIRQuestionnaireStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange' => 'FHIRElement/FHIRRange.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio' => 'FHIRElement/FHIRRatio.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRReactionSeverity' => 'FHIRElement/FHIRReactionSeverity.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceProfileStatus' => 'FHIRElement/FHIRResourceProfileStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference' => 'FHIRElement/FHIRResourceReference.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResponseType' => 'FHIRElement/FHIRResponseType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulConformanceMode' => 'FHIRElement/FHIRRestfulConformanceMode.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulOperationSystem' => 'FHIRElement/FHIRRestfulOperationSystem.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulOperationType' => 'FHIRElement/FHIRRestfulOperationType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData' => 'FHIRElement/FHIRSampledData.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledDataDataType' => 'FHIRElement/FHIRSampledDataDataType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule' => 'FHIRElement/FHIRSchedule.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat' => 'FHIRElement/FHIRSchedule/FHIRScheduleRepeat.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSearchParamType' => 'FHIRElement/FHIRSearchParamType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventAction' => 'FHIRElement/FHIRSecurityEventAction.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectLifecycle' => 'FHIRElement/FHIRSecurityEventObjectLifecycle.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectRole' => 'FHIRElement/FHIRSecurityEventObjectRole.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectType' => 'FHIRElement/FHIRSecurityEventObjectType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventOutcome' => 'FHIRElement/FHIRSecurityEventOutcome.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventParticipantNetworkType' => 'FHIRElement/FHIRSecurityEventParticipantNetworkType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityStatus' => 'FHIRElement/FHIRSensitivityStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityType' => 'FHIRElement/FHIRSensitivityType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSlicingRules' => 'FHIRElement/FHIRSlicingRules.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString' => 'FHIRElement/FHIRString.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSupplyDispenseStatus' => 'FHIRElement/FHIRSupplyDispenseStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSupplyStatus' => 'FHIRElement/FHIRSupplyStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUnitsOfTime' => 'FHIRElement/FHIRUnitsOfTime.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri' => 'FHIRElement/FHIRUri.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid' => 'FHIRElement/FHIRUuid.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRValueSetStatus' => 'FHIRElement/FHIRValueSetStatus.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIREncounterClassList' => 'FHIREncounterClassList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIREncounterStateList' => 'FHIREncounterStateList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIREventTimingList' => 'FHIREventTimingList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRExposureTypeList' => 'FHIRExposureTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRExtensionContextList' => 'FHIRExtensionContextList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRFilterOperatorList' => 'FHIRFilterOperatorList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRGroupTypeList' => 'FHIRGroupTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRHierarchicalRelationshipTypeList' => 'FHIRHierarchicalRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdentifierUseList' => 'FHIRIdentifierUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive' => 'FHIRIdPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive\FHIRXmlIdRef' => 'FHIRIdPrimitive/FHIRXmlIdRef.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRImagingModalityList' => 'FHIRImagingModalityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRInstanceAvailabilityList' => 'FHIRInstanceAvailabilityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRInstantPrimitive' => 'FHIRInstantPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive' => 'FHIRIntegerPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRIssueSeverityList' => 'FHIRIssueSeverityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRLinkTypeList' => 'FHIRLinkTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRListModeList' => 'FHIRListModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRLocationModeList' => 'FHIRLocationModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRLocationStatusList' => 'FHIRLocationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRMediaTypeList' => 'FHIRMediaTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRMedicationAdministrationStatusList' => 'FHIRMedicationAdministrationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRMedicationDispenseStatusList' => 'FHIRMedicationDispenseStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRMedicationKindList' => 'FHIRMedicationKindList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRMedicationPrescriptionStatusList' => 'FHIRMedicationPrescriptionStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRMessageSignificanceCategoryList' => 'FHIRMessageSignificanceCategoryList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRModalityList' => 'FHIRModalityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRNameUseList' => 'FHIRNameUseList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRNarrativeStatusList' => 'FHIRNarrativeStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRObservationRelationshipTypeList' => 'FHIRObservationRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRObservationReliabilityList' => 'FHIRObservationReliabilityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRObservationStatusList' => 'FHIRObservationStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIROidPrimitive' => 'FHIROidPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIROrderOutcomeStatusList' => 'FHIROrderOutcomeStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRProcedureRelationshipTypeList' => 'FHIRProcedureRelationshipTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRPropertyRepresentationList' => 'FHIRPropertyRepresentationList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRProvenanceEntityRoleList' => 'FHIRProvenanceEntityRoleList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRQuantityCompararatorList' => 'FHIRQuantityCompararatorList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRQueryOutcomeList' => 'FHIRQueryOutcomeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRQuestionnaireStatusList' => 'FHIRQuestionnaireStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRReactionSeverityList' => 'FHIRReactionSeverityList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceInline' => 'FHIRResourceInline.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceProfileStatusList' => 'FHIRResourceProfileStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceType' => 'FHIRResourceType.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceType\FHIRResourceNamesPlusBinary' => 'FHIRResourceType/FHIRResourceNamesPlusBinary.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRResponseTypeList' => 'FHIRResponseTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRRestfulConformanceModeList' => 'FHIRRestfulConformanceModeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRRestfulOperationSystemList' => 'FHIRRestfulOperationSystemList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRRestfulOperationTypeList' => 'FHIRRestfulOperationTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSampledDataDataTypePrimitive' => 'FHIRSampledDataDataTypePrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSearchParamTypeList' => 'FHIRSearchParamTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSecurityEventActionList' => 'FHIRSecurityEventActionList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSecurityEventObjectLifecycleList' => 'FHIRSecurityEventObjectLifecycleList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSecurityEventObjectRoleList' => 'FHIRSecurityEventObjectRoleList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSecurityEventObjectTypeList' => 'FHIRSecurityEventObjectTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSecurityEventOutcomeList' => 'FHIRSecurityEventOutcomeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSecurityEventParticipantNetworkTypeList' => 'FHIRSecurityEventParticipantNetworkTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSensitivityStatusList' => 'FHIRSensitivityStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSensitivityTypeList' => 'FHIRSensitivityTypeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSlicingRulesList' => 'FHIRSlicingRulesList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive' => 'FHIRStringPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSupplyDispenseStatusList' => 'FHIRSupplyDispenseStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRSupplyStatusList' => 'FHIRSupplyStatusList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRUnitsOfTimeList' => 'FHIRUnitsOfTimeList.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive' => 'FHIRUriPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRUuidPrimitive' => 'FHIRUuidPrimitive.php',
        'DCarbone\PHPFHIRGenerated\DSTU1\FHIRValueSetStatusList' => 'FHIRValueSetStatusList.php',
    ];

    /**
     * @return bool
     * @throws \Exception
     */
    public static function register()
    {
        if (self::$_registered) {
            return self::$_registered;
        }
        return self::$_registered = spl_autoload_register(array(__CLASS__, 'loadClass'), true);
    }

    /**
     * @return bool
     */
    public static function unregister()
    {
        if (self::$_registered) {
            if (spl_autoload_unregister(array(__CLASS__, 'loadClass'))) {
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
    public static function loadClass($class)
    {
        if (isset(self::$_classMap[$class])) {
            return (bool)require sprintf('%s/%s', self::ROOT_DIR, self::$_classMap[$class]);
        }
        return null;
    }
}
