<?php namespace PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 28th, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 */

class PHPFHIRAutoloader
{
    const ROOT_DIR = __DIR__;

    /** @var array */
    private static $_classMap = array (
  'PHPFHIRGenerated\\PHPFHIRParserMap' => 'PHPFHIRParserMap.php',
  'PHPFHIRGenerated\\JsonSerializable' => 'JsonSerializable.php',
  'PHPFHIRGenerated\\FHIRElement' => 'FHIRElement.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRBackboneElement' => 'FHIRElement/FHIRBackboneElement.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRInteger' => 'FHIRElement/FHIRInteger.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime' => 'FHIRElement/FHIRDateTime.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCode' => 'FHIRElement/FHIRCode.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRDate' => 'FHIRElement/FHIRDate.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal' => 'FHIRElement/FHIRDecimal.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRUri' => 'FHIRElement/FHIRUri.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRId' => 'FHIRElement/FHIRId.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary' => 'FHIRElement/FHIRBase64Binary.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIROid' => 'FHIRElement/FHIROid.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRString' => 'FHIRElement/FHIRString.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean' => 'FHIRElement/FHIRBoolean.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRUuid' => 'FHIRElement/FHIRUuid.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRInstant' => 'FHIRElement/FHIRInstant.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline' => 'FHIRResource/FHIRResource/FHIRResourceInline.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRResource' => 'FHIRResource/FHIRResource.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRExtension' => 'FHIRElement/FHIRExtension.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative' => 'FHIRElement/FHIRNarrative.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRNarrativeStatus' => 'FHIRElement/FHIRNarrativeStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod' => 'FHIRElement/FHIRPeriod.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCoding' => 'FHIRElement/FHIRCoding.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRRange' => 'FHIRElement/FHIRRange.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity' => 'FHIRElement/FHIRQuantity.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityCompararator' => 'FHIRElement/FHIRQuantityCompararator.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment' => 'FHIRElement/FHIRAttachment.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRRatio' => 'FHIRElement/FHIRRatio.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData' => 'FHIRElement/FHIRSampledData.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSampledDataDataType' => 'FHIRElement/FHIRSampledDataDataType.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference' => 'FHIRElement/FHIRResourceReference.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept' => 'FHIRElement/FHIRCodeableConcept.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier' => 'FHIRElement/FHIRIdentifier.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifierUse' => 'FHIRElement/FHIRIdentifierUse.php',
  'PHPFHIRGenerated\\FHIRAge' => 'FHIRAge.php',
  'PHPFHIRGenerated\\FHIRCount' => 'FHIRCount.php',
  'PHPFHIRGenerated\\FHIRMoney' => 'FHIRMoney.php',
  'PHPFHIRGenerated\\FHIRDistance' => 'FHIRDistance.php',
  'PHPFHIRGenerated\\FHIRDuration' => 'FHIRDuration.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule' => 'FHIRElement/FHIRSchedule.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSchedule\\FHIRScheduleRepeat' => 'FHIRResource/FHIRSchedule/FHIRScheduleRepeat.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIREventTiming' => 'FHIRElement/FHIREventTiming.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRUnitsOfTime' => 'FHIRElement/FHIRUnitsOfTime.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRContact' => 'FHIRElement/FHIRContact.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRContactSystem' => 'FHIRElement/FHIRContactSystem.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRContactUse' => 'FHIRElement/FHIRContactUse.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRAddress' => 'FHIRElement/FHIRAddress.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRAddressUse' => 'FHIRElement/FHIRAddressUse.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName' => 'FHIRElement/FHIRHumanName.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRNameUse' => 'FHIRElement/FHIRNameUse.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRDocumentReferenceStatus' => 'FHIRElement/FHIRDocumentReferenceStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSearchParamType' => 'FHIRElement/FHIRSearchParamType.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRValueSetStatus' => 'FHIRElement/FHIRValueSetStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRAdverseReaction' => 'FHIRResource/FHIRAdverseReaction.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRAdverseReaction\\FHIRAdverseReactionSymptom' => 'FHIRResource/FHIRAdverseReaction/FHIRAdverseReactionSymptom.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRAdverseReaction\\FHIRAdverseReactionExposure' => 'FHIRResource/FHIRAdverseReaction/FHIRAdverseReactionExposure.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRReactionSeverity' => 'FHIRElement/FHIRReactionSeverity.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRExposureType' => 'FHIRElement/FHIRExposureType.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCausalityExpectation' => 'FHIRElement/FHIRCausalityExpectation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRAlert' => 'FHIRResource/FHIRAlert.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRAlertStatus' => 'FHIRElement/FHIRAlertStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRAllergyIntolerance' => 'FHIRResource/FHIRAllergyIntolerance.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSensitivityStatus' => 'FHIRElement/FHIRSensitivityStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCriticality' => 'FHIRElement/FHIRCriticality.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSensitivityType' => 'FHIRElement/FHIRSensitivityType.php',
  'PHPFHIRGenerated\\FHIRBinary' => 'FHIRBinary.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan' => 'FHIRResource/FHIRCarePlan.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanParticipant' => 'FHIRResource/FHIRCarePlan/FHIRCarePlanParticipant.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanGoal' => 'FHIRResource/FHIRCarePlan/FHIRCarePlanGoal.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanActivity' => 'FHIRResource/FHIRCarePlan/FHIRCarePlanActivity.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanSimple' => 'FHIRResource/FHIRCarePlan/FHIRCarePlanSimple.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanStatus' => 'FHIRElement/FHIRCarePlanStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanActivityCategory' => 'FHIRElement/FHIRCarePlanActivityCategory.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanGoalStatus' => 'FHIRElement/FHIRCarePlanGoalStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanActivityStatus' => 'FHIRElement/FHIRCarePlanActivityStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRComposition' => 'FHIRResource/FHIRComposition.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionAttester' => 'FHIRResource/FHIRComposition/FHIRCompositionAttester.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionEvent' => 'FHIRResource/FHIRComposition/FHIRCompositionEvent.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionSection' => 'FHIRResource/FHIRComposition/FHIRCompositionSection.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCompositionStatus' => 'FHIRElement/FHIRCompositionStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRCompositionAttestationMode' => 'FHIRElement/FHIRCompositionAttestationMode.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap' => 'FHIRResource/FHIRConceptMap.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapConcept' => 'FHIRResource/FHIRConceptMap/FHIRConceptMapConcept.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapDependsOn' => 'FHIRResource/FHIRConceptMap/FHIRConceptMapDependsOn.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapMap' => 'FHIRResource/FHIRConceptMap/FHIRConceptMapMap.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRConceptMapEquivalence' => 'FHIRElement/FHIRConceptMapEquivalence.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCondition' => 'FHIRResource/FHIRCondition.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionStage' => 'FHIRResource/FHIRCondition/FHIRConditionStage.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionEvidence' => 'FHIRResource/FHIRCondition/FHIRConditionEvidence.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionLocation' => 'FHIRResource/FHIRCondition/FHIRConditionLocation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionRelatedItem' => 'FHIRResource/FHIRCondition/FHIRConditionRelatedItem.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRConditionStatus' => 'FHIRElement/FHIRConditionStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRConditionRelationshipType' => 'FHIRElement/FHIRConditionRelationshipType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance' => 'FHIRResource/FHIRConformance.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSoftware' => 'FHIRResource/FHIRConformance/FHIRConformanceSoftware.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceImplementation' => 'FHIRResource/FHIRConformance/FHIRConformanceImplementation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceRest' => 'FHIRResource/FHIRConformance/FHIRConformanceRest.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSecurity' => 'FHIRResource/FHIRConformance/FHIRConformanceSecurity.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceCertificate' => 'FHIRResource/FHIRConformance/FHIRConformanceCertificate.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceResource' => 'FHIRResource/FHIRConformance/FHIRConformanceResource.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceOperation' => 'FHIRResource/FHIRConformance/FHIRConformanceOperation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSearchParam' => 'FHIRResource/FHIRConformance/FHIRConformanceSearchParam.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceOperation1' => 'FHIRResource/FHIRConformance/FHIRConformanceOperation1.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceQuery' => 'FHIRResource/FHIRConformance/FHIRConformanceQuery.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceMessaging' => 'FHIRResource/FHIRConformance/FHIRConformanceMessaging.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceEvent' => 'FHIRResource/FHIRConformance/FHIRConformanceEvent.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceDocument' => 'FHIRResource/FHIRConformance/FHIRConformanceDocument.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRDocumentMode' => 'FHIRElement/FHIRDocumentMode.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRRestfulConformanceMode' => 'FHIRElement/FHIRRestfulConformanceMode.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRConformanceEventMode' => 'FHIRElement/FHIRConformanceEventMode.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRMessageSignificanceCategory' => 'FHIRElement/FHIRMessageSignificanceCategory.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRRestfulOperationType' => 'FHIRElement/FHIRRestfulOperationType.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRConformanceStatementStatus' => 'FHIRElement/FHIRConformanceStatementStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRRestfulOperationSystem' => 'FHIRElement/FHIRRestfulOperationSystem.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDevice' => 'FHIRResource/FHIRDevice.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport' => 'FHIRResource/FHIRDeviceObservationReport.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport\\FHIRDeviceObservationReportVirtualDevice' => 'FHIRResource/FHIRDeviceObservationReport/FHIRDeviceObservationReportVirtualDevice.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport\\FHIRDeviceObservationReportChannel' => 'FHIRResource/FHIRDeviceObservationReport/FHIRDeviceObservationReportChannel.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport\\FHIRDeviceObservationReportMetric' => 'FHIRResource/FHIRDeviceObservationReport/FHIRDeviceObservationReportMetric.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder' => 'FHIRResource/FHIRDiagnosticOrder.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderEvent' => 'FHIRResource/FHIRDiagnosticOrder/FHIRDiagnosticOrderEvent.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderItem' => 'FHIRResource/FHIRDiagnosticOrder/FHIRDiagnosticOrderItem.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticOrderStatus' => 'FHIRElement/FHIRDiagnosticOrderStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticOrderPriority' => 'FHIRElement/FHIRDiagnosticOrderPriority.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticReport' => 'FHIRResource/FHIRDiagnosticReport.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticReport\\FHIRDiagnosticReportImage' => 'FHIRResource/FHIRDiagnosticReport/FHIRDiagnosticReportImage.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticReportStatus' => 'FHIRElement/FHIRDiagnosticReportStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentManifest' => 'FHIRResource/FHIRDocumentManifest.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference' => 'FHIRResource/FHIRDocumentReference.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceRelatesTo' => 'FHIRResource/FHIRDocumentReference/FHIRDocumentReferenceRelatesTo.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceService' => 'FHIRResource/FHIRDocumentReference/FHIRDocumentReferenceService.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceParameter' => 'FHIRResource/FHIRDocumentReference/FHIRDocumentReferenceParameter.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceContext' => 'FHIRResource/FHIRDocumentReference/FHIRDocumentReferenceContext.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRDocumentRelationshipType' => 'FHIRElement/FHIRDocumentRelationshipType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIREncounter' => 'FHIRResource/FHIREncounter.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterParticipant' => 'FHIRResource/FHIREncounter/FHIREncounterParticipant.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterHospitalization' => 'FHIRResource/FHIREncounter/FHIREncounterHospitalization.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterAccomodation' => 'FHIRResource/FHIREncounter/FHIREncounterAccomodation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterLocation' => 'FHIRResource/FHIREncounter/FHIREncounterLocation.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIREncounterClass' => 'FHIRElement/FHIREncounterClass.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIREncounterState' => 'FHIRElement/FHIREncounterState.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRFamilyHistory' => 'FHIRResource/FHIRFamilyHistory.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRFamilyHistory\\FHIRFamilyHistoryRelation' => 'FHIRResource/FHIRFamilyHistory/FHIRFamilyHistoryRelation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRFamilyHistory\\FHIRFamilyHistoryCondition' => 'FHIRResource/FHIRFamilyHistory/FHIRFamilyHistoryCondition.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRGroup' => 'FHIRResource/FHIRGroup.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRGroup\\FHIRGroupCharacteristic' => 'FHIRResource/FHIRGroup/FHIRGroupCharacteristic.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRGroupType' => 'FHIRElement/FHIRGroupType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImagingStudy' => 'FHIRResource/FHIRImagingStudy.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudySeries' => 'FHIRResource/FHIRImagingStudy/FHIRImagingStudySeries.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudyInstance' => 'FHIRResource/FHIRImagingStudy/FHIRImagingStudyInstance.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRImagingModality' => 'FHIRElement/FHIRImagingModality.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRInstanceAvailability' => 'FHIRElement/FHIRInstanceAvailability.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRModality' => 'FHIRElement/FHIRModality.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImmunization' => 'FHIRResource/FHIRImmunization.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImmunization\\FHIRImmunizationExplanation' => 'FHIRResource/FHIRImmunization/FHIRImmunizationExplanation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImmunization\\FHIRImmunizationReaction' => 'FHIRResource/FHIRImmunization/FHIRImmunizationReaction.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImmunization\\FHIRImmunizationVaccinationProtocol' => 'FHIRResource/FHIRImmunization/FHIRImmunizationVaccinationProtocol.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation' => 'FHIRResource/FHIRImmunizationRecommendation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationRecommendation' => 'FHIRResource/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationRecommendation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationDateCriterion' => 'FHIRResource/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationDateCriterion.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationProtocol' => 'FHIRResource/FHIRImmunizationRecommendation/FHIRImmunizationRecommendationProtocol.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRList' => 'FHIRResource/FHIRList.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRList\\FHIRListEntry' => 'FHIRResource/FHIRList/FHIRListEntry.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRListMode' => 'FHIRElement/FHIRListMode.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRLocation' => 'FHIRResource/FHIRLocation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRLocation\\FHIRLocationPosition' => 'FHIRResource/FHIRLocation/FHIRLocationPosition.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRLocationStatus' => 'FHIRElement/FHIRLocationStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRLocationMode' => 'FHIRElement/FHIRLocationMode.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedia' => 'FHIRResource/FHIRMedia.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRMediaType' => 'FHIRElement/FHIRMediaType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedication' => 'FHIRResource/FHIRMedication.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationProduct' => 'FHIRResource/FHIRMedication/FHIRMedicationProduct.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationIngredient' => 'FHIRResource/FHIRMedication/FHIRMedicationIngredient.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationPackage' => 'FHIRResource/FHIRMedication/FHIRMedicationPackage.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationContent' => 'FHIRResource/FHIRMedication/FHIRMedicationContent.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationKind' => 'FHIRElement/FHIRMedicationKind.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationAdministration' => 'FHIRResource/FHIRMedicationAdministration.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationAdministration\\FHIRMedicationAdministrationDosage' => 'FHIRResource/FHIRMedicationAdministration/FHIRMedicationAdministrationDosage.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationAdministrationStatus' => 'FHIRElement/FHIRMedicationAdministrationStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense' => 'FHIRResource/FHIRMedicationDispense.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDispense' => 'FHIRResource/FHIRMedicationDispense/FHIRMedicationDispenseDispense.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDosage' => 'FHIRResource/FHIRMedicationDispense/FHIRMedicationDispenseDosage.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseSubstitution' => 'FHIRResource/FHIRMedicationDispense/FHIRMedicationDispenseSubstitution.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationDispenseStatus' => 'FHIRElement/FHIRMedicationDispenseStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription' => 'FHIRResource/FHIRMedicationPrescription.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription\\FHIRMedicationPrescriptionDosageInstruction' => 'FHIRResource/FHIRMedicationPrescription/FHIRMedicationPrescriptionDosageInstruction.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription\\FHIRMedicationPrescriptionDispense' => 'FHIRResource/FHIRMedicationPrescription/FHIRMedicationPrescriptionDispense.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription\\FHIRMedicationPrescriptionSubstitution' => 'FHIRResource/FHIRMedicationPrescription/FHIRMedicationPrescriptionSubstitution.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationPrescriptionStatus' => 'FHIRElement/FHIRMedicationPrescriptionStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationStatement' => 'FHIRResource/FHIRMedicationStatement.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationStatement\\FHIRMedicationStatementDosage' => 'FHIRResource/FHIRMedicationStatement/FHIRMedicationStatementDosage.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader' => 'FHIRResource/FHIRMessageHeader.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderResponse' => 'FHIRResource/FHIRMessageHeader/FHIRMessageHeaderResponse.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderSource' => 'FHIRResource/FHIRMessageHeader/FHIRMessageHeaderSource.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderDestination' => 'FHIRResource/FHIRMessageHeader/FHIRMessageHeaderDestination.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRResponseType' => 'FHIRElement/FHIRResponseType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRObservation' => 'FHIRResource/FHIRObservation.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRObservation\\FHIRObservationReferenceRange' => 'FHIRResource/FHIRObservation/FHIRObservationReferenceRange.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRObservation\\FHIRObservationRelated' => 'FHIRResource/FHIRObservation/FHIRObservationRelated.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRObservationReliability' => 'FHIRElement/FHIRObservationReliability.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRObservationStatus' => 'FHIRElement/FHIRObservationStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRObservationRelationshipType' => 'FHIRElement/FHIRObservationRelationshipType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIROperationOutcome' => 'FHIRResource/FHIROperationOutcome.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIROperationOutcome\\FHIROperationOutcomeIssue' => 'FHIRResource/FHIROperationOutcome/FHIROperationOutcomeIssue.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRIssueSeverity' => 'FHIRElement/FHIRIssueSeverity.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIROrder' => 'FHIRResource/FHIROrder.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIROrder\\FHIROrderWhen' => 'FHIRResource/FHIROrder/FHIROrderWhen.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIROrderResponse' => 'FHIRResource/FHIROrderResponse.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIROrderOutcomeStatus' => 'FHIRElement/FHIROrderOutcomeStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIROrganization' => 'FHIRResource/FHIROrganization.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIROrganization\\FHIROrganizationContact' => 'FHIRResource/FHIROrganization/FHIROrganizationContact.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIROther' => 'FHIRResource/FHIROther.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRPatient' => 'FHIRResource/FHIRPatient.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientContact' => 'FHIRResource/FHIRPatient/FHIRPatientContact.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientAnimal' => 'FHIRResource/FHIRPatient/FHIRPatientAnimal.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientLink' => 'FHIRResource/FHIRPatient/FHIRPatientLink.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRLinkType' => 'FHIRElement/FHIRLinkType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRPractitioner' => 'FHIRResource/FHIRPractitioner.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRPractitioner\\FHIRPractitionerQualification' => 'FHIRResource/FHIRPractitioner/FHIRPractitionerQualification.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProcedure' => 'FHIRResource/FHIRProcedure.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProcedure\\FHIRProcedurePerformer' => 'FHIRResource/FHIRProcedure/FHIRProcedurePerformer.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProcedure\\FHIRProcedureRelatedItem' => 'FHIRResource/FHIRProcedure/FHIRProcedureRelatedItem.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRProcedureRelationshipType' => 'FHIRElement/FHIRProcedureRelationshipType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile' => 'FHIRResource/FHIRProfile.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileMapping' => 'FHIRResource/FHIRProfile/FHIRProfileMapping.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileStructure' => 'FHIRResource/FHIRProfile/FHIRProfileStructure.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileElement' => 'FHIRResource/FHIRProfile/FHIRProfileElement.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileSlicing' => 'FHIRResource/FHIRProfile/FHIRProfileSlicing.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileDefinition' => 'FHIRResource/FHIRProfile/FHIRProfileDefinition.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileType' => 'FHIRResource/FHIRProfile/FHIRProfileType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileConstraint' => 'FHIRResource/FHIRProfile/FHIRProfileConstraint.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileBinding' => 'FHIRResource/FHIRProfile/FHIRProfileBinding.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileMapping1' => 'FHIRResource/FHIRProfile/FHIRProfileMapping1.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileSearchParam' => 'FHIRResource/FHIRProfile/FHIRProfileSearchParam.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileExtensionDefn' => 'FHIRResource/FHIRProfile/FHIRProfileExtensionDefn.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileQuery' => 'FHIRResource/FHIRProfile/FHIRProfileQuery.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRBindingConformance' => 'FHIRElement/FHIRBindingConformance.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRConstraintSeverity' => 'FHIRElement/FHIRConstraintSeverity.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRResourceProfileStatus' => 'FHIRElement/FHIRResourceProfileStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRPropertyRepresentation' => 'FHIRElement/FHIRPropertyRepresentation.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRAggregationMode' => 'FHIRElement/FHIRAggregationMode.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRExtensionContext' => 'FHIRElement/FHIRExtensionContext.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSlicingRules' => 'FHIRElement/FHIRSlicingRules.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProvenance' => 'FHIRResource/FHIRProvenance.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProvenance\\FHIRProvenanceAgent' => 'FHIRResource/FHIRProvenance/FHIRProvenanceAgent.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRProvenance\\FHIRProvenanceEntity' => 'FHIRResource/FHIRProvenance/FHIRProvenanceEntity.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRProvenanceEntityRole' => 'FHIRElement/FHIRProvenanceEntityRole.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRQuery' => 'FHIRResource/FHIRQuery.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRQuery\\FHIRQueryResponse' => 'FHIRResource/FHIRQuery/FHIRQueryResponse.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRQueryOutcome' => 'FHIRElement/FHIRQueryOutcome.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire' => 'FHIRResource/FHIRQuestionnaire.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireGroup' => 'FHIRResource/FHIRQuestionnaire/FHIRQuestionnaireGroup.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireQuestion' => 'FHIRResource/FHIRQuestionnaire/FHIRQuestionnaireQuestion.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRQuestionnaireStatus' => 'FHIRElement/FHIRQuestionnaireStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRRelatedPerson' => 'FHIRResource/FHIRRelatedPerson.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent' => 'FHIRResource/FHIRSecurityEvent.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventEvent' => 'FHIRResource/FHIRSecurityEvent/FHIRSecurityEventEvent.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventParticipant' => 'FHIRResource/FHIRSecurityEvent/FHIRSecurityEventParticipant.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventNetwork' => 'FHIRResource/FHIRSecurityEvent/FHIRSecurityEventNetwork.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventSource' => 'FHIRResource/FHIRSecurityEvent/FHIRSecurityEventSource.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventObject' => 'FHIRResource/FHIRSecurityEvent/FHIRSecurityEventObject.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventDetail' => 'FHIRResource/FHIRSecurityEvent/FHIRSecurityEventDetail.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventObjectRole' => 'FHIRElement/FHIRSecurityEventObjectRole.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventObjectType' => 'FHIRElement/FHIRSecurityEventObjectType.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventAction' => 'FHIRElement/FHIRSecurityEventAction.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventObjectLifecycle' => 'FHIRElement/FHIRSecurityEventObjectLifecycle.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventParticipantNetworkType' => 'FHIRElement/FHIRSecurityEventParticipantNetworkType.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventOutcome' => 'FHIRElement/FHIRSecurityEventOutcome.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen' => 'FHIRResource/FHIRSpecimen.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenSource' => 'FHIRResource/FHIRSpecimen/FHIRSpecimenSource.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenCollection' => 'FHIRResource/FHIRSpecimen/FHIRSpecimenCollection.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenTreatment' => 'FHIRResource/FHIRSpecimen/FHIRSpecimenTreatment.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenContainer' => 'FHIRResource/FHIRSpecimen/FHIRSpecimenContainer.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRHierarchicalRelationshipType' => 'FHIRElement/FHIRHierarchicalRelationshipType.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSubstance' => 'FHIRResource/FHIRSubstance.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSubstance\\FHIRSubstanceInstance' => 'FHIRResource/FHIRSubstance/FHIRSubstanceInstance.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSubstance\\FHIRSubstanceIngredient' => 'FHIRResource/FHIRSubstance/FHIRSubstanceIngredient.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSupply' => 'FHIRResource/FHIRSupply.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRSupply\\FHIRSupplyDispense' => 'FHIRResource/FHIRSupply/FHIRSupplyDispense.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSupplyDispenseStatus' => 'FHIRElement/FHIRSupplyDispenseStatus.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRSupplyStatus' => 'FHIRElement/FHIRSupplyStatus.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet' => 'FHIRResource/FHIRValueSet.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetDefine' => 'FHIRResource/FHIRValueSet/FHIRValueSetDefine.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept' => 'FHIRResource/FHIRValueSet/FHIRValueSetConcept.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetCompose' => 'FHIRResource/FHIRValueSet/FHIRValueSetCompose.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetInclude' => 'FHIRResource/FHIRValueSet/FHIRValueSetInclude.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetFilter' => 'FHIRResource/FHIRValueSet/FHIRValueSetFilter.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetExpansion' => 'FHIRResource/FHIRValueSet/FHIRValueSetExpansion.php',
  'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetContains' => 'FHIRResource/FHIRValueSet/FHIRValueSetContains.php',
  'PHPFHIRGenerated\\FHIRElement\\FHIRFilterOperator' => 'FHIRElement/FHIRFilterOperator.php',
);

    /** @var bool */
    private static $_registered = false;

    /**
     * @return bool
     * @throws \Exception
     */
    public static function register()
    {
        if (self::$_registered)
            return self::$_registered;
        return self::$_registered = spl_autoload_register(array(__CLASS__, 'loadClass'), true);
    }

    /**
     * @return bool
     */
    public static function unregister()
    {
        self::$_registered = !spl_autoload_unregister(array(__CLASS__, 'loadClass'));
        return !self::$_registered;
    }

    /**
     * Please see associated documentation for more information on what this method looks for.
     *
     * @param string $class
     * @return bool|null
     */
    public static function loadClass($class)
    {
        if (isset(self::$_classMap[$class]))
            return (bool)require sprintf('%s/%s', self::ROOT_DIR, self::$_classMap[$class]);
        return null;
    }
}