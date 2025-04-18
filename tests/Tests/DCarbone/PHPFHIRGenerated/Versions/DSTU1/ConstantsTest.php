<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Versions\DSTU1;

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
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;
use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase
{
    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRAddress()
    {
        $this->assertEquals('Address', VersionConstants::TYPE_NAME_ADDRESS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddress', VersionConstants::TYPE_CLASS_ADDRESS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRAddressUse()
    {
        $this->assertEquals('AddressUse', VersionConstants::TYPE_NAME_ADDRESS_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAddressUse', VersionConstants::TYPE_CLASS_ADDRESS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRAddressUseList()
    {
        $this->assertEquals('AddressUse-list', VersionConstants::TYPE_NAME_ADDRESS_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRAddressUseList', VersionConstants::TYPE_CLASS_ADDRESS_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRAdverseReaction()
    {
        $this->assertEquals('AdverseReaction', VersionConstants::TYPE_NAME_ADVERSE_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRAdverseReaction', VersionConstants::TYPE_CLASS_ADVERSE_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRAdverseReaction_FHIRAdverseReactionExposure()
    {
        $this->assertEquals('AdverseReaction.Exposure', VersionConstants::TYPE_NAME_ADVERSE_REACTION_DOT_EXPOSURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionExposure', VersionConstants::TYPE_CLASS_ADVERSE_REACTION_DOT_EXPOSURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRAdverseReaction_FHIRAdverseReactionSymptom()
    {
        $this->assertEquals('AdverseReaction.Symptom', VersionConstants::TYPE_NAME_ADVERSE_REACTION_DOT_SYMPTOM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionSymptom', VersionConstants::TYPE_CLASS_ADVERSE_REACTION_DOT_SYMPTOM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRQuantity_FHIRAge()
    {
        $this->assertEquals('Age', VersionConstants::TYPE_NAME_AGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRAge', VersionConstants::TYPE_CLASS_AGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRAggregationMode()
    {
        $this->assertEquals('AggregationMode', VersionConstants::TYPE_NAME_AGGREGATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAggregationMode', VersionConstants::TYPE_CLASS_AGGREGATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRAggregationModeList()
    {
        $this->assertEquals('AggregationMode-list', VersionConstants::TYPE_NAME_AGGREGATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRAggregationModeList', VersionConstants::TYPE_CLASS_AGGREGATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRAlert()
    {
        $this->assertEquals('Alert', VersionConstants::TYPE_NAME_ALERT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRAlert', VersionConstants::TYPE_CLASS_ALERT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRAlertStatus()
    {
        $this->assertEquals('AlertStatus', VersionConstants::TYPE_NAME_ALERT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAlertStatus', VersionConstants::TYPE_CLASS_ALERT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRAlertStatusList()
    {
        $this->assertEquals('AlertStatus-list', VersionConstants::TYPE_NAME_ALERT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRAlertStatusList', VersionConstants::TYPE_CLASS_ALERT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRAllergyIntolerance()
    {
        $this->assertEquals('AllergyIntolerance', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRAllergyIntolerance', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRAttachment()
    {
        $this->assertEquals('Attachment', VersionConstants::TYPE_NAME_ATTACHMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRAttachment', VersionConstants::TYPE_CLASS_ATTACHMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement()
    {
        $this->assertEquals('BackboneElement', VersionConstants::TYPE_NAME_BACKBONE_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement', VersionConstants::TYPE_CLASS_BACKBONE_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBase64Binary()
    {
        $this->assertEquals('base64Binary', VersionConstants::TYPE_NAME_BASE_64BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBase64Binary', VersionConstants::TYPE_CLASS_BASE_64BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRBase64BinaryPrimitive()
    {
        $this->assertEquals('base64Binary-primitive', VersionConstants::TYPE_NAME_BASE_64BINARY_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBase64BinaryPrimitive', VersionConstants::TYPE_CLASS_BASE_64BINARY_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRBinary()
    {
        $this->assertEquals('Binary', VersionConstants::TYPE_NAME_BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRBinary', VersionConstants::TYPE_CLASS_BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBindingConformance()
    {
        $this->assertEquals('BindingConformance', VersionConstants::TYPE_NAME_BINDING_CONFORMANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBindingConformance', VersionConstants::TYPE_CLASS_BINDING_CONFORMANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRBindingConformanceList()
    {
        $this->assertEquals('BindingConformance-list', VersionConstants::TYPE_NAME_BINDING_CONFORMANCE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRBindingConformanceList', VersionConstants::TYPE_CLASS_BINDING_CONFORMANCE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBoolean()
    {
        $this->assertEquals('boolean', VersionConstants::TYPE_NAME_BOOLEAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBoolean', VersionConstants::TYPE_CLASS_BOOLEAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRBooleanPrimitive()
    {
        $this->assertEquals('boolean-primitive', VersionConstants::TYPE_NAME_BOOLEAN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRBooleanPrimitive', VersionConstants::TYPE_CLASS_BOOLEAN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRCarePlan()
    {
        $this->assertEquals('CarePlan', VersionConstants::TYPE_NAME_CARE_PLAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRCarePlan', VersionConstants::TYPE_CLASS_CARE_PLAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanActivity()
    {
        $this->assertEquals('CarePlan.Activity', VersionConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity', VersionConstants::TYPE_CLASS_CARE_PLAN_DOT_ACTIVITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanGoal()
    {
        $this->assertEquals('CarePlan.Goal', VersionConstants::TYPE_NAME_CARE_PLAN_DOT_GOAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal', VersionConstants::TYPE_CLASS_CARE_PLAN_DOT_GOAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanParticipant()
    {
        $this->assertEquals('CarePlan.Participant', VersionConstants::TYPE_NAME_CARE_PLAN_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant', VersionConstants::TYPE_CLASS_CARE_PLAN_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanSimple()
    {
        $this->assertEquals('CarePlan.Simple', VersionConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple', VersionConstants::TYPE_CLASS_CARE_PLAN_DOT_SIMPLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCarePlanActivityCategory()
    {
        $this->assertEquals('CarePlanActivityCategory', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityCategory', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRCarePlanActivityCategoryList()
    {
        $this->assertEquals('CarePlanActivityCategory-list', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityCategoryList', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCarePlanActivityStatus()
    {
        $this->assertEquals('CarePlanActivityStatus', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanActivityStatus', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRCarePlanActivityStatusList()
    {
        $this->assertEquals('CarePlanActivityStatus-list', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanActivityStatusList', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCarePlanGoalStatus()
    {
        $this->assertEquals('CarePlanGoalStatus', VersionConstants::TYPE_NAME_CARE_PLAN_GOAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanGoalStatus', VersionConstants::TYPE_CLASS_CARE_PLAN_GOAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRCarePlanGoalStatusList()
    {
        $this->assertEquals('CarePlanGoalStatus-list', VersionConstants::TYPE_NAME_CARE_PLAN_GOAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanGoalStatusList', VersionConstants::TYPE_CLASS_CARE_PLAN_GOAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCarePlanStatus()
    {
        $this->assertEquals('CarePlanStatus', VersionConstants::TYPE_NAME_CARE_PLAN_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCarePlanStatus', VersionConstants::TYPE_CLASS_CARE_PLAN_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRCarePlanStatusList()
    {
        $this->assertEquals('CarePlanStatus-list', VersionConstants::TYPE_NAME_CARE_PLAN_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCarePlanStatusList', VersionConstants::TYPE_CLASS_CARE_PLAN_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCausalityExpectation()
    {
        $this->assertEquals('CausalityExpectation', VersionConstants::TYPE_NAME_CAUSALITY_EXPECTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCausalityExpectation', VersionConstants::TYPE_CLASS_CAUSALITY_EXPECTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRCausalityExpectationList()
    {
        $this->assertEquals('CausalityExpectation-list', VersionConstants::TYPE_NAME_CAUSALITY_EXPECTATION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCausalityExpectationList', VersionConstants::TYPE_CLASS_CAUSALITY_EXPECTATION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCode()
    {
        $this->assertEquals('code', VersionConstants::TYPE_NAME_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCode', VersionConstants::TYPE_CLASS_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRCodePrimitive()
    {
        $this->assertEquals('code-primitive', VersionConstants::TYPE_NAME_CODE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRCodePrimitive', VersionConstants::TYPE_CLASS_CODE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCodeableConcept()
    {
        $this->assertEquals('CodeableConcept', VersionConstants::TYPE_NAME_CODEABLE_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCodeableConcept', VersionConstants::TYPE_CLASS_CODEABLE_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCoding()
    {
        $this->assertEquals('Coding', VersionConstants::TYPE_NAME_CODING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCoding', VersionConstants::TYPE_CLASS_CODING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRComposition()
    {
        $this->assertEquals('Composition', VersionConstants::TYPE_NAME_COMPOSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRComposition', VersionConstants::TYPE_CLASS_COMPOSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionAttester()
    {
        $this->assertEquals('Composition.Attester', VersionConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_ATTESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionEvent()
    {
        $this->assertEquals('Composition.Event', VersionConstants::TYPE_NAME_COMPOSITION_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionSection()
    {
        $this->assertEquals('Composition.Section', VersionConstants::TYPE_NAME_COMPOSITION_DOT_SECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_SECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCompositionAttestationMode()
    {
        $this->assertEquals('CompositionAttestationMode', VersionConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCompositionAttestationMode', VersionConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRCompositionAttestationModeList()
    {
        $this->assertEquals('CompositionAttestationMode-list', VersionConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCompositionAttestationModeList', VersionConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCompositionStatus()
    {
        $this->assertEquals('CompositionStatus', VersionConstants::TYPE_NAME_COMPOSITION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCompositionStatus', VersionConstants::TYPE_CLASS_COMPOSITION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRCompositionStatusList()
    {
        $this->assertEquals('CompositionStatus-list', VersionConstants::TYPE_NAME_COMPOSITION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCompositionStatusList', VersionConstants::TYPE_CLASS_COMPOSITION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRConceptMap()
    {
        $this->assertEquals('ConceptMap', VersionConstants::TYPE_NAME_CONCEPT_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRConceptMap', VersionConstants::TYPE_CLASS_CONCEPT_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapConcept()
    {
        $this->assertEquals('ConceptMap.Concept', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapConcept', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapDependsOn()
    {
        $this->assertEquals('ConceptMap.DependsOn', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_DEPENDS_ON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapMap()
    {
        $this->assertEquals('ConceptMap.Map', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRConceptMapEquivalence()
    {
        $this->assertEquals('ConceptMapEquivalence', VersionConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConceptMapEquivalence', VersionConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRConceptMapEquivalenceList()
    {
        $this->assertEquals('ConceptMapEquivalence-list', VersionConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConceptMapEquivalenceList', VersionConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRCondition()
    {
        $this->assertEquals('Condition', VersionConstants::TYPE_NAME_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRCondition', VersionConstants::TYPE_CLASS_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionEvidence()
    {
        $this->assertEquals('Condition.Evidence', VersionConstants::TYPE_NAME_CONDITION_DOT_EVIDENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence', VersionConstants::TYPE_CLASS_CONDITION_DOT_EVIDENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionLocation()
    {
        $this->assertEquals('Condition.Location', VersionConstants::TYPE_NAME_CONDITION_DOT_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation', VersionConstants::TYPE_CLASS_CONDITION_DOT_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionRelatedItem()
    {
        $this->assertEquals('Condition.RelatedItem', VersionConstants::TYPE_NAME_CONDITION_DOT_RELATED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem', VersionConstants::TYPE_CLASS_CONDITION_DOT_RELATED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionStage()
    {
        $this->assertEquals('Condition.Stage', VersionConstants::TYPE_NAME_CONDITION_DOT_STAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage', VersionConstants::TYPE_CLASS_CONDITION_DOT_STAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRConditionRelationshipType()
    {
        $this->assertEquals('ConditionRelationshipType', VersionConstants::TYPE_NAME_CONDITION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConditionRelationshipType', VersionConstants::TYPE_CLASS_CONDITION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRConditionRelationshipTypeList()
    {
        $this->assertEquals('ConditionRelationshipType-list', VersionConstants::TYPE_NAME_CONDITION_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConditionRelationshipTypeList', VersionConstants::TYPE_CLASS_CONDITION_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRConditionStatus()
    {
        $this->assertEquals('ConditionStatus', VersionConstants::TYPE_NAME_CONDITION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConditionStatus', VersionConstants::TYPE_CLASS_CONDITION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRConditionStatusList()
    {
        $this->assertEquals('ConditionStatus-list', VersionConstants::TYPE_NAME_CONDITION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConditionStatusList', VersionConstants::TYPE_CLASS_CONDITION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRConformance()
    {
        $this->assertEquals('Conformance', VersionConstants::TYPE_NAME_CONFORMANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRConformance', VersionConstants::TYPE_CLASS_CONFORMANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceCertificate()
    {
        $this->assertEquals('Conformance.Certificate', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_CERTIFICATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_CERTIFICATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceDocument()
    {
        $this->assertEquals('Conformance.Document', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_DOCUMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_DOCUMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceEvent()
    {
        $this->assertEquals('Conformance.Event', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceImplementation()
    {
        $this->assertEquals('Conformance.Implementation', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_IMPLEMENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_IMPLEMENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceMessaging()
    {
        $this->assertEquals('Conformance.Messaging', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_MESSAGING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceOperation()
    {
        $this->assertEquals('Conformance.Operation', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceOperation1()
    {
        $this->assertEquals('Conformance.Operation1', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_OPERATION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_OPERATION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceQuery()
    {
        $this->assertEquals('Conformance.Query', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_QUERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_QUERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceResource()
    {
        $this->assertEquals('Conformance.Resource', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceRest()
    {
        $this->assertEquals('Conformance.Rest', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_REST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_REST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceSearchParam()
    {
        $this->assertEquals('Conformance.SearchParam', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_SEARCH_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_SEARCH_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceSecurity()
    {
        $this->assertEquals('Conformance.Security', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_SECURITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_SECURITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceSoftware()
    {
        $this->assertEquals('Conformance.Software', VersionConstants::TYPE_NAME_CONFORMANCE_DOT_SOFTWARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware', VersionConstants::TYPE_CLASS_CONFORMANCE_DOT_SOFTWARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRConformanceEventMode()
    {
        $this->assertEquals('ConformanceEventMode', VersionConstants::TYPE_NAME_CONFORMANCE_EVENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceEventMode', VersionConstants::TYPE_CLASS_CONFORMANCE_EVENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRConformanceEventModeList()
    {
        $this->assertEquals('ConformanceEventMode-list', VersionConstants::TYPE_NAME_CONFORMANCE_EVENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConformanceEventModeList', VersionConstants::TYPE_CLASS_CONFORMANCE_EVENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRConformanceStatementStatus()
    {
        $this->assertEquals('ConformanceStatementStatus', VersionConstants::TYPE_NAME_CONFORMANCE_STATEMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConformanceStatementStatus', VersionConstants::TYPE_CLASS_CONFORMANCE_STATEMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRConformanceStatementStatusList()
    {
        $this->assertEquals('ConformanceStatementStatus-list', VersionConstants::TYPE_NAME_CONFORMANCE_STATEMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConformanceStatementStatusList', VersionConstants::TYPE_CLASS_CONFORMANCE_STATEMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRConstraintSeverity()
    {
        $this->assertEquals('ConstraintSeverity', VersionConstants::TYPE_NAME_CONSTRAINT_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRConstraintSeverity', VersionConstants::TYPE_CLASS_CONSTRAINT_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRConstraintSeverityList()
    {
        $this->assertEquals('ConstraintSeverity-list', VersionConstants::TYPE_NAME_CONSTRAINT_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRConstraintSeverityList', VersionConstants::TYPE_CLASS_CONSTRAINT_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRContact()
    {
        $this->assertEquals('Contact', VersionConstants::TYPE_NAME_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContact', VersionConstants::TYPE_CLASS_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRContactSystem()
    {
        $this->assertEquals('ContactSystem', VersionConstants::TYPE_NAME_CONTACT_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContactSystem', VersionConstants::TYPE_CLASS_CONTACT_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRContactSystemList()
    {
        $this->assertEquals('ContactSystem-list', VersionConstants::TYPE_NAME_CONTACT_SYSTEM_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRContactSystemList', VersionConstants::TYPE_CLASS_CONTACT_SYSTEM_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRContactUse()
    {
        $this->assertEquals('ContactUse', VersionConstants::TYPE_NAME_CONTACT_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRContactUse', VersionConstants::TYPE_CLASS_CONTACT_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRContactUseList()
    {
        $this->assertEquals('ContactUse-list', VersionConstants::TYPE_NAME_CONTACT_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRContactUseList', VersionConstants::TYPE_CLASS_CONTACT_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRQuantity_FHIRCount()
    {
        $this->assertEquals('Count', VersionConstants::TYPE_NAME_COUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRCount', VersionConstants::TYPE_CLASS_COUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRCriticality()
    {
        $this->assertEquals('Criticality', VersionConstants::TYPE_NAME_CRITICALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRCriticality', VersionConstants::TYPE_CLASS_CRITICALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRCriticalityList()
    {
        $this->assertEquals('Criticality-list', VersionConstants::TYPE_NAME_CRITICALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRCriticalityList', VersionConstants::TYPE_CLASS_CRITICALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDate()
    {
        $this->assertEquals('date', VersionConstants::TYPE_NAME_DATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDate', VersionConstants::TYPE_CLASS_DATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRDatePrimitive()
    {
        $this->assertEquals('date-primitive', VersionConstants::TYPE_NAME_DATE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDatePrimitive', VersionConstants::TYPE_CLASS_DATE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDateTime()
    {
        $this->assertEquals('dateTime', VersionConstants::TYPE_NAME_DATE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDateTime', VersionConstants::TYPE_CLASS_DATE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRDateTimePrimitive()
    {
        $this->assertEquals('dateTime-primitive', VersionConstants::TYPE_NAME_DATE_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDateTimePrimitive', VersionConstants::TYPE_CLASS_DATE_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDecimal()
    {
        $this->assertEquals('decimal', VersionConstants::TYPE_NAME_DECIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal', VersionConstants::TYPE_CLASS_DECIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRDecimalPrimitive()
    {
        $this->assertEquals('decimal-primitive', VersionConstants::TYPE_NAME_DECIMAL_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRDecimalPrimitive', VersionConstants::TYPE_CLASS_DECIMAL_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRDevice()
    {
        $this->assertEquals('Device', VersionConstants::TYPE_NAME_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDevice', VersionConstants::TYPE_CLASS_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRDeviceObservationReport()
    {
        $this->assertEquals('DeviceObservationReport', VersionConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDeviceObservationReport', VersionConstants::TYPE_CLASS_DEVICE_OBSERVATION_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceObservationReport_FHIRDeviceObservationReportChannel()
    {
        $this->assertEquals('DeviceObservationReport.Channel', VersionConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT_DOT_CHANNEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportChannel', VersionConstants::TYPE_CLASS_DEVICE_OBSERVATION_REPORT_DOT_CHANNEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceObservationReport_FHIRDeviceObservationReportMetric()
    {
        $this->assertEquals('DeviceObservationReport.Metric', VersionConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT_DOT_METRIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportMetric', VersionConstants::TYPE_CLASS_DEVICE_OBSERVATION_REPORT_DOT_METRIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceObservationReport_FHIRDeviceObservationReportVirtualDevice()
    {
        $this->assertEquals('DeviceObservationReport.VirtualDevice', VersionConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT_DOT_VIRTUAL_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice', VersionConstants::TYPE_CLASS_DEVICE_OBSERVATION_REPORT_DOT_VIRTUAL_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRDiagnosticOrder()
    {
        $this->assertEquals('DiagnosticOrder', VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticOrder', VersionConstants::TYPE_CLASS_DIAGNOSTIC_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDiagnosticOrder_FHIRDiagnosticOrderEvent()
    {
        $this->assertEquals('DiagnosticOrder.Event', VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent', VersionConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDiagnosticOrder_FHIRDiagnosticOrderItem()
    {
        $this->assertEquals('DiagnosticOrder.Item', VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem', VersionConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDiagnosticOrderPriority()
    {
        $this->assertEquals('DiagnosticOrderPriority', VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderPriority', VersionConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRDiagnosticOrderPriorityList()
    {
        $this->assertEquals('DiagnosticOrderPriority-list', VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_PRIORITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList', VersionConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_PRIORITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDiagnosticOrderStatus()
    {
        $this->assertEquals('DiagnosticOrderStatus', VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticOrderStatus', VersionConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRDiagnosticOrderStatusList()
    {
        $this->assertEquals('DiagnosticOrderStatus-list', VersionConstants::TYPE_NAME_DIAGNOSTIC_ORDER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList', VersionConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRDiagnosticReport()
    {
        $this->assertEquals('DiagnosticReport', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDiagnosticReport', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDiagnosticReport_FHIRDiagnosticReportImage()
    {
        $this->assertEquals('DiagnosticReport.Image', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_DOT_IMAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_DOT_IMAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDiagnosticReportStatus()
    {
        $this->assertEquals('DiagnosticReportStatus', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDiagnosticReportStatus', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRDiagnosticReportStatusList()
    {
        $this->assertEquals('DiagnosticReportStatus-list', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDiagnosticReportStatusList', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRQuantity_FHIRDistance()
    {
        $this->assertEquals('Distance', VersionConstants::TYPE_NAME_DISTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRDistance', VersionConstants::TYPE_CLASS_DISTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRDocumentManifest()
    {
        $this->assertEquals('DocumentManifest', VersionConstants::TYPE_NAME_DOCUMENT_MANIFEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentManifest', VersionConstants::TYPE_CLASS_DOCUMENT_MANIFEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDocumentMode()
    {
        $this->assertEquals('DocumentMode', VersionConstants::TYPE_NAME_DOCUMENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentMode', VersionConstants::TYPE_CLASS_DOCUMENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRDocumentModeList()
    {
        $this->assertEquals('DocumentMode-list', VersionConstants::TYPE_NAME_DOCUMENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDocumentModeList', VersionConstants::TYPE_CLASS_DOCUMENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRDocumentReference()
    {
        $this->assertEquals('DocumentReference', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRDocumentReference', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContext()
    {
        $this->assertEquals('DocumentReference.Context', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceParameter()
    {
        $this->assertEquals('DocumentReference.Parameter', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceParameter', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceRelatesTo()
    {
        $this->assertEquals('DocumentReference.RelatesTo', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceService()
    {
        $this->assertEquals('DocumentReference.Service', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_SERVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_SERVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDocumentReferenceStatus()
    {
        $this->assertEquals('DocumentReferenceStatus', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentReferenceStatus', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRDocumentReferenceStatusList()
    {
        $this->assertEquals('DocumentReferenceStatus-list', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDocumentReferenceStatusList', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDocumentRelationshipType()
    {
        $this->assertEquals('DocumentRelationshipType', VersionConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDocumentRelationshipType', VersionConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRDocumentRelationshipTypeList()
    {
        $this->assertEquals('DocumentRelationshipType-list', VersionConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRDocumentRelationshipTypeList', VersionConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRQuantity_FHIRDuration()
    {
        $this->assertEquals('Duration', VersionConstants::TYPE_NAME_DURATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRDuration', VersionConstants::TYPE_CLASS_DURATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement()
    {
        $this->assertEquals('Element', VersionConstants::TYPE_NAME_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement', VersionConstants::TYPE_CLASS_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIREncounter()
    {
        $this->assertEquals('Encounter', VersionConstants::TYPE_NAME_ENCOUNTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIREncounter', VersionConstants::TYPE_CLASS_ENCOUNTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterAccomodation()
    {
        $this->assertEquals('Encounter.Accomodation', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_ACCOMODATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_ACCOMODATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterHospitalization()
    {
        $this->assertEquals('Encounter.Hospitalization', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_HOSPITALIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterLocation()
    {
        $this->assertEquals('Encounter.Location', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterParticipant()
    {
        $this->assertEquals('Encounter.Participant', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIREncounterClass()
    {
        $this->assertEquals('EncounterClass', VersionConstants::TYPE_NAME_ENCOUNTER_CLASS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREncounterClass', VersionConstants::TYPE_CLASS_ENCOUNTER_CLASS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIREncounterClassList()
    {
        $this->assertEquals('EncounterClass-list', VersionConstants::TYPE_NAME_ENCOUNTER_CLASS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIREncounterClassList', VersionConstants::TYPE_CLASS_ENCOUNTER_CLASS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIREncounterState()
    {
        $this->assertEquals('EncounterState', VersionConstants::TYPE_NAME_ENCOUNTER_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREncounterState', VersionConstants::TYPE_CLASS_ENCOUNTER_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIREncounterStateList()
    {
        $this->assertEquals('EncounterState-list', VersionConstants::TYPE_NAME_ENCOUNTER_STATE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIREncounterStateList', VersionConstants::TYPE_CLASS_ENCOUNTER_STATE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIREventTiming()
    {
        $this->assertEquals('EventTiming', VersionConstants::TYPE_NAME_EVENT_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIREventTiming', VersionConstants::TYPE_CLASS_EVENT_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIREventTimingList()
    {
        $this->assertEquals('EventTiming-list', VersionConstants::TYPE_NAME_EVENT_TIMING_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIREventTimingList', VersionConstants::TYPE_CLASS_EVENT_TIMING_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRExposureType()
    {
        $this->assertEquals('ExposureType', VersionConstants::TYPE_NAME_EXPOSURE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExposureType', VersionConstants::TYPE_CLASS_EXPOSURE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRExposureTypeList()
    {
        $this->assertEquals('ExposureType-list', VersionConstants::TYPE_NAME_EXPOSURE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRExposureTypeList', VersionConstants::TYPE_CLASS_EXPOSURE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRExtension()
    {
        $this->assertEquals('Extension', VersionConstants::TYPE_NAME_EXTENSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension', VersionConstants::TYPE_CLASS_EXTENSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRExtensionContext()
    {
        $this->assertEquals('ExtensionContext', VersionConstants::TYPE_NAME_EXTENSION_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtensionContext', VersionConstants::TYPE_CLASS_EXTENSION_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRExtensionContextList()
    {
        $this->assertEquals('ExtensionContext-list', VersionConstants::TYPE_NAME_EXTENSION_CONTEXT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRExtensionContextList', VersionConstants::TYPE_CLASS_EXTENSION_CONTEXT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRFamilyHistory()
    {
        $this->assertEquals('FamilyHistory', VersionConstants::TYPE_NAME_FAMILY_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRFamilyHistory', VersionConstants::TYPE_CLASS_FAMILY_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRFamilyHistory_FHIRFamilyHistoryCondition()
    {
        $this->assertEquals('FamilyHistory.Condition', VersionConstants::TYPE_NAME_FAMILY_HISTORY_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition', VersionConstants::TYPE_CLASS_FAMILY_HISTORY_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRFamilyHistory_FHIRFamilyHistoryRelation()
    {
        $this->assertEquals('FamilyHistory.Relation', VersionConstants::TYPE_NAME_FAMILY_HISTORY_DOT_RELATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryRelation', VersionConstants::TYPE_CLASS_FAMILY_HISTORY_DOT_RELATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRFilterOperator()
    {
        $this->assertEquals('FilterOperator', VersionConstants::TYPE_NAME_FILTER_OPERATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRFilterOperator', VersionConstants::TYPE_CLASS_FILTER_OPERATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRFilterOperatorList()
    {
        $this->assertEquals('FilterOperator-list', VersionConstants::TYPE_NAME_FILTER_OPERATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRFilterOperatorList', VersionConstants::TYPE_CLASS_FILTER_OPERATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRGroup()
    {
        $this->assertEquals('Group', VersionConstants::TYPE_NAME_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRGroup', VersionConstants::TYPE_CLASS_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupCharacteristic()
    {
        $this->assertEquals('Group.Characteristic', VersionConstants::TYPE_NAME_GROUP_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic', VersionConstants::TYPE_CLASS_GROUP_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRGroupType()
    {
        $this->assertEquals('GroupType', VersionConstants::TYPE_NAME_GROUP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRGroupType', VersionConstants::TYPE_CLASS_GROUP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRGroupTypeList()
    {
        $this->assertEquals('GroupType-list', VersionConstants::TYPE_NAME_GROUP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRGroupTypeList', VersionConstants::TYPE_CLASS_GROUP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRHierarchicalRelationshipType()
    {
        $this->assertEquals('HierarchicalRelationshipType', VersionConstants::TYPE_NAME_HIERARCHICAL_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHierarchicalRelationshipType', VersionConstants::TYPE_CLASS_HIERARCHICAL_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRHierarchicalRelationshipTypeList()
    {
        $this->assertEquals('HierarchicalRelationshipType-list', VersionConstants::TYPE_NAME_HIERARCHICAL_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRHierarchicalRelationshipTypeList', VersionConstants::TYPE_CLASS_HIERARCHICAL_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRHumanName()
    {
        $this->assertEquals('HumanName', VersionConstants::TYPE_NAME_HUMAN_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRHumanName', VersionConstants::TYPE_CLASS_HUMAN_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRId()
    {
        $this->assertEquals('id', VersionConstants::TYPE_NAME_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRId', VersionConstants::TYPE_CLASS_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRIdPrimitive()
    {
        $this->assertEquals('id-primitive', VersionConstants::TYPE_NAME_ID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive', VersionConstants::TYPE_CLASS_ID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRIdentifier()
    {
        $this->assertEquals('Identifier', VersionConstants::TYPE_NAME_IDENTIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifier', VersionConstants::TYPE_CLASS_IDENTIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRIdentifierUse()
    {
        $this->assertEquals('IdentifierUse', VersionConstants::TYPE_NAME_IDENTIFIER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIdentifierUse', VersionConstants::TYPE_CLASS_IDENTIFIER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRIdentifierUseList()
    {
        $this->assertEquals('IdentifierUse-list', VersionConstants::TYPE_NAME_IDENTIFIER_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRIdentifierUseList', VersionConstants::TYPE_CLASS_IDENTIFIER_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRImagingModality()
    {
        $this->assertEquals('ImagingModality', VersionConstants::TYPE_NAME_IMAGING_MODALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRImagingModality', VersionConstants::TYPE_CLASS_IMAGING_MODALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRImagingModalityList()
    {
        $this->assertEquals('ImagingModality-list', VersionConstants::TYPE_NAME_IMAGING_MODALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRImagingModalityList', VersionConstants::TYPE_CLASS_IMAGING_MODALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRImagingStudy()
    {
        $this->assertEquals('ImagingStudy', VersionConstants::TYPE_NAME_IMAGING_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRImagingStudy', VersionConstants::TYPE_CLASS_IMAGING_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudyInstance()
    {
        $this->assertEquals('ImagingStudy.Instance', VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance', VersionConstants::TYPE_CLASS_IMAGING_STUDY_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudySeries()
    {
        $this->assertEquals('ImagingStudy.Series', VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_SERIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries', VersionConstants::TYPE_CLASS_IMAGING_STUDY_DOT_SERIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRImmunization()
    {
        $this->assertEquals('Immunization', VersionConstants::TYPE_NAME_IMMUNIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRImmunization', VersionConstants::TYPE_CLASS_IMMUNIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationExplanation()
    {
        $this->assertEquals('Immunization.Explanation', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_EXPLANATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_EXPLANATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationReaction()
    {
        $this->assertEquals('Immunization.Reaction', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationVaccinationProtocol()
    {
        $this->assertEquals('Immunization.VaccinationProtocol', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRImmunizationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRImmunizationRecommendation', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationDateCriterion()
    {
        $this->assertEquals('ImmunizationRecommendation.DateCriterion', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationProtocol()
    {
        $this->assertEquals('ImmunizationRecommendation.Protocol', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation.Recommendation', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRInstanceAvailability()
    {
        $this->assertEquals('InstanceAvailability', VersionConstants::TYPE_NAME_INSTANCE_AVAILABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstanceAvailability', VersionConstants::TYPE_CLASS_INSTANCE_AVAILABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRInstanceAvailabilityList()
    {
        $this->assertEquals('InstanceAvailability-list', VersionConstants::TYPE_NAME_INSTANCE_AVAILABILITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRInstanceAvailabilityList', VersionConstants::TYPE_CLASS_INSTANCE_AVAILABILITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRInstant()
    {
        $this->assertEquals('instant', VersionConstants::TYPE_NAME_INSTANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInstant', VersionConstants::TYPE_CLASS_INSTANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRInstantPrimitive()
    {
        $this->assertEquals('instant-primitive', VersionConstants::TYPE_NAME_INSTANT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRInstantPrimitive', VersionConstants::TYPE_CLASS_INSTANT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRInteger()
    {
        $this->assertEquals('integer', VersionConstants::TYPE_NAME_INTEGER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger', VersionConstants::TYPE_CLASS_INTEGER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRIntegerPrimitive()
    {
        $this->assertEquals('integer-primitive', VersionConstants::TYPE_NAME_INTEGER_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIntegerPrimitive', VersionConstants::TYPE_CLASS_INTEGER_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRIssueSeverity()
    {
        $this->assertEquals('IssueSeverity', VersionConstants::TYPE_NAME_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRIssueSeverity', VersionConstants::TYPE_CLASS_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRIssueSeverityList()
    {
        $this->assertEquals('IssueSeverity-list', VersionConstants::TYPE_NAME_ISSUE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRIssueSeverityList', VersionConstants::TYPE_CLASS_ISSUE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRLinkType()
    {
        $this->assertEquals('LinkType', VersionConstants::TYPE_NAME_LINK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLinkType', VersionConstants::TYPE_CLASS_LINK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRLinkTypeList()
    {
        $this->assertEquals('LinkType-list', VersionConstants::TYPE_NAME_LINK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLinkTypeList', VersionConstants::TYPE_CLASS_LINK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRList()
    {
        $this->assertEquals('List', VersionConstants::TYPE_NAME_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRList', VersionConstants::TYPE_CLASS_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRList_FHIRListEntry()
    {
        $this->assertEquals('List.Entry', VersionConstants::TYPE_NAME_LIST_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry', VersionConstants::TYPE_CLASS_LIST_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRListMode()
    {
        $this->assertEquals('ListMode', VersionConstants::TYPE_NAME_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRListMode', VersionConstants::TYPE_CLASS_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRListModeList()
    {
        $this->assertEquals('ListMode-list', VersionConstants::TYPE_NAME_LIST_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRListModeList', VersionConstants::TYPE_CLASS_LIST_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRLocation()
    {
        $this->assertEquals('Location', VersionConstants::TYPE_NAME_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRLocation', VersionConstants::TYPE_CLASS_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRLocation_FHIRLocationPosition()
    {
        $this->assertEquals('Location.Position', VersionConstants::TYPE_NAME_LOCATION_DOT_POSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition', VersionConstants::TYPE_CLASS_LOCATION_DOT_POSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRLocationMode()
    {
        $this->assertEquals('LocationMode', VersionConstants::TYPE_NAME_LOCATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationMode', VersionConstants::TYPE_CLASS_LOCATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRLocationModeList()
    {
        $this->assertEquals('LocationMode-list', VersionConstants::TYPE_NAME_LOCATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationModeList', VersionConstants::TYPE_CLASS_LOCATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRLocationStatus()
    {
        $this->assertEquals('LocationStatus', VersionConstants::TYPE_NAME_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRLocationStatus', VersionConstants::TYPE_CLASS_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRLocationStatusList()
    {
        $this->assertEquals('LocationStatus-list', VersionConstants::TYPE_NAME_LOCATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRLocationStatusList', VersionConstants::TYPE_CLASS_LOCATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRMedia()
    {
        $this->assertEquals('Media', VersionConstants::TYPE_NAME_MEDIA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedia', VersionConstants::TYPE_CLASS_MEDIA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRMediaType()
    {
        $this->assertEquals('MediaType', VersionConstants::TYPE_NAME_MEDIA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMediaType', VersionConstants::TYPE_CLASS_MEDIA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRMediaTypeList()
    {
        $this->assertEquals('MediaType-list', VersionConstants::TYPE_NAME_MEDIA_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMediaTypeList', VersionConstants::TYPE_CLASS_MEDIA_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRMedication()
    {
        $this->assertEquals('Medication', VersionConstants::TYPE_NAME_MEDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedication', VersionConstants::TYPE_CLASS_MEDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationContent()
    {
        $this->assertEquals('Medication.Content', VersionConstants::TYPE_NAME_MEDICATION_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent', VersionConstants::TYPE_CLASS_MEDICATION_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationIngredient()
    {
        $this->assertEquals('Medication.Ingredient', VersionConstants::TYPE_NAME_MEDICATION_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient', VersionConstants::TYPE_CLASS_MEDICATION_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationPackage()
    {
        $this->assertEquals('Medication.Package', VersionConstants::TYPE_NAME_MEDICATION_DOT_PACKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage', VersionConstants::TYPE_CLASS_MEDICATION_DOT_PACKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationProduct()
    {
        $this->assertEquals('Medication.Product', VersionConstants::TYPE_NAME_MEDICATION_DOT_PRODUCT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct', VersionConstants::TYPE_CLASS_MEDICATION_DOT_PRODUCT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRMedicationAdministration()
    {
        $this->assertEquals('MedicationAdministration', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationAdministration', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationAdministration_FHIRMedicationAdministrationDosage()
    {
        $this->assertEquals('MedicationAdministration.Dosage', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRMedicationAdministrationStatus()
    {
        $this->assertEquals('MedicationAdministrationStatus', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationAdministrationStatus', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRMedicationAdministrationStatusList()
    {
        $this->assertEquals('MedicationAdministrationStatus-list', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRMedicationDispense()
    {
        $this->assertEquals('MedicationDispense', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationDispense', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseDispense()
    {
        $this->assertEquals('MedicationDispense.Dispense', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseDosage()
    {
        $this->assertEquals('MedicationDispense.Dosage', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosage', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseSubstitution()
    {
        $this->assertEquals('MedicationDispense.Substitution', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRMedicationDispenseStatus()
    {
        $this->assertEquals('MedicationDispenseStatus', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationDispenseStatus', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRMedicationDispenseStatusList()
    {
        $this->assertEquals('MedicationDispenseStatus-list', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationDispenseStatusList', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRMedicationKind()
    {
        $this->assertEquals('MedicationKind', VersionConstants::TYPE_NAME_MEDICATION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationKind', VersionConstants::TYPE_CLASS_MEDICATION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRMedicationKindList()
    {
        $this->assertEquals('MedicationKind-list', VersionConstants::TYPE_NAME_MEDICATION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationKindList', VersionConstants::TYPE_CLASS_MEDICATION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRMedicationPrescription()
    {
        $this->assertEquals('MedicationPrescription', VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationPrescription', VersionConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationPrescription_FHIRMedicationPrescriptionDispense()
    {
        $this->assertEquals('MedicationPrescription.Dispense', VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense', VersionConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_DOT_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationPrescription_FHIRMedicationPrescriptionDosageInstruction()
    {
        $this->assertEquals('MedicationPrescription.DosageInstruction', VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_DOSAGE_INSTRUCTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction', VersionConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_DOT_DOSAGE_INSTRUCTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationPrescription_FHIRMedicationPrescriptionSubstitution()
    {
        $this->assertEquals('MedicationPrescription.Substitution', VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution', VersionConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRMedicationPrescriptionStatus()
    {
        $this->assertEquals('MedicationPrescriptionStatus', VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMedicationPrescriptionStatus', VersionConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRMedicationPrescriptionStatusList()
    {
        $this->assertEquals('MedicationPrescriptionStatus-list', VersionConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMedicationPrescriptionStatusList', VersionConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRMedicationStatement()
    {
        $this->assertEquals('MedicationStatement', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMedicationStatement', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationStatement_FHIRMedicationStatementDosage()
    {
        $this->assertEquals('MedicationStatement.Dosage', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRMessageHeader()
    {
        $this->assertEquals('MessageHeader', VersionConstants::TYPE_NAME_MESSAGE_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRMessageHeader', VersionConstants::TYPE_CLASS_MESSAGE_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderDestination()
    {
        $this->assertEquals('MessageHeader.Destination', VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_DESTINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination', VersionConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_DESTINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderResponse()
    {
        $this->assertEquals('MessageHeader.Response', VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse', VersionConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderSource()
    {
        $this->assertEquals('MessageHeader.Source', VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource', VersionConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRMessageSignificanceCategory()
    {
        $this->assertEquals('MessageSignificanceCategory', VersionConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRMessageSignificanceCategory', VersionConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRMessageSignificanceCategoryList()
    {
        $this->assertEquals('MessageSignificanceCategory-list', VersionConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList', VersionConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRModality()
    {
        $this->assertEquals('Modality', VersionConstants::TYPE_NAME_MODALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRModality', VersionConstants::TYPE_CLASS_MODALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRModalityList()
    {
        $this->assertEquals('Modality-list', VersionConstants::TYPE_NAME_MODALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRModalityList', VersionConstants::TYPE_CLASS_MODALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRQuantity_FHIRMoney()
    {
        $this->assertEquals('Money', VersionConstants::TYPE_NAME_MONEY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity\FHIRMoney', VersionConstants::TYPE_CLASS_MONEY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRNameUse()
    {
        $this->assertEquals('NameUse', VersionConstants::TYPE_NAME_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNameUse', VersionConstants::TYPE_CLASS_NAME_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRNameUseList()
    {
        $this->assertEquals('NameUse-list', VersionConstants::TYPE_NAME_NAME_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRNameUseList', VersionConstants::TYPE_CLASS_NAME_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRNarrative()
    {
        $this->assertEquals('Narrative', VersionConstants::TYPE_NAME_NARRATIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrative', VersionConstants::TYPE_CLASS_NARRATIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRNarrativeStatus()
    {
        $this->assertEquals('NarrativeStatus', VersionConstants::TYPE_NAME_NARRATIVE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRNarrativeStatus', VersionConstants::TYPE_CLASS_NARRATIVE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRNarrativeStatusList()
    {
        $this->assertEquals('NarrativeStatus-list', VersionConstants::TYPE_NAME_NARRATIVE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRNarrativeStatusList', VersionConstants::TYPE_CLASS_NARRATIVE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRObservation()
    {
        $this->assertEquals('Observation', VersionConstants::TYPE_NAME_OBSERVATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRObservation', VersionConstants::TYPE_CLASS_OBSERVATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationReferenceRange()
    {
        $this->assertEquals('Observation.ReferenceRange', VersionConstants::TYPE_NAME_OBSERVATION_DOT_REFERENCE_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange', VersionConstants::TYPE_CLASS_OBSERVATION_DOT_REFERENCE_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationRelated()
    {
        $this->assertEquals('Observation.Related', VersionConstants::TYPE_NAME_OBSERVATION_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated', VersionConstants::TYPE_CLASS_OBSERVATION_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRObservationRelationshipType()
    {
        $this->assertEquals('ObservationRelationshipType', VersionConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRObservationRelationshipType', VersionConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRObservationRelationshipTypeList()
    {
        $this->assertEquals('ObservationRelationshipType-list', VersionConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRObservationRelationshipTypeList', VersionConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRObservationReliability()
    {
        $this->assertEquals('ObservationReliability', VersionConstants::TYPE_NAME_OBSERVATION_RELIABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRObservationReliability', VersionConstants::TYPE_CLASS_OBSERVATION_RELIABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRObservationReliabilityList()
    {
        $this->assertEquals('ObservationReliability-list', VersionConstants::TYPE_NAME_OBSERVATION_RELIABILITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRObservationReliabilityList', VersionConstants::TYPE_CLASS_OBSERVATION_RELIABILITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRObservationStatus()
    {
        $this->assertEquals('ObservationStatus', VersionConstants::TYPE_NAME_OBSERVATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRObservationStatus', VersionConstants::TYPE_CLASS_OBSERVATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRObservationStatusList()
    {
        $this->assertEquals('ObservationStatus-list', VersionConstants::TYPE_NAME_OBSERVATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRObservationStatusList', VersionConstants::TYPE_CLASS_OBSERVATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIROid()
    {
        $this->assertEquals('oid', VersionConstants::TYPE_NAME_OID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROid', VersionConstants::TYPE_CLASS_OID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIROidPrimitive()
    {
        $this->assertEquals('oid-primitive', VersionConstants::TYPE_NAME_OID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIROidPrimitive', VersionConstants::TYPE_CLASS_OID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIROperationOutcome()
    {
        $this->assertEquals('OperationOutcome', VersionConstants::TYPE_NAME_OPERATION_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROperationOutcome', VersionConstants::TYPE_CLASS_OPERATION_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIROperationOutcome_FHIROperationOutcomeIssue()
    {
        $this->assertEquals('OperationOutcome.Issue', VersionConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue', VersionConstants::TYPE_CLASS_OPERATION_OUTCOME_DOT_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIROrder()
    {
        $this->assertEquals('Order', VersionConstants::TYPE_NAME_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROrder', VersionConstants::TYPE_CLASS_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIROrder_FHIROrderWhen()
    {
        $this->assertEquals('Order.When', VersionConstants::TYPE_NAME_ORDER_DOT_WHEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROrder\FHIROrderWhen', VersionConstants::TYPE_CLASS_ORDER_DOT_WHEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIROrderOutcomeStatus()
    {
        $this->assertEquals('OrderOutcomeStatus', VersionConstants::TYPE_NAME_ORDER_OUTCOME_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIROrderOutcomeStatus', VersionConstants::TYPE_CLASS_ORDER_OUTCOME_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIROrderOutcomeStatusList()
    {
        $this->assertEquals('OrderOutcomeStatus-list', VersionConstants::TYPE_NAME_ORDER_OUTCOME_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIROrderOutcomeStatusList', VersionConstants::TYPE_CLASS_ORDER_OUTCOME_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIROrderResponse()
    {
        $this->assertEquals('OrderResponse', VersionConstants::TYPE_NAME_ORDER_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROrderResponse', VersionConstants::TYPE_CLASS_ORDER_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIROrganization()
    {
        $this->assertEquals('Organization', VersionConstants::TYPE_NAME_ORGANIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROrganization', VersionConstants::TYPE_CLASS_ORGANIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIROrganization_FHIROrganizationContact()
    {
        $this->assertEquals('Organization.Contact', VersionConstants::TYPE_NAME_ORGANIZATION_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact', VersionConstants::TYPE_CLASS_ORGANIZATION_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIROther()
    {
        $this->assertEquals('Other', VersionConstants::TYPE_NAME_OTHER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIROther', VersionConstants::TYPE_CLASS_OTHER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRPatient()
    {
        $this->assertEquals('Patient', VersionConstants::TYPE_NAME_PATIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPatient', VersionConstants::TYPE_CLASS_PATIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientAnimal()
    {
        $this->assertEquals('Patient.Animal', VersionConstants::TYPE_NAME_PATIENT_DOT_ANIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal', VersionConstants::TYPE_CLASS_PATIENT_DOT_ANIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientContact()
    {
        $this->assertEquals('Patient.Contact', VersionConstants::TYPE_NAME_PATIENT_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact', VersionConstants::TYPE_CLASS_PATIENT_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientLink()
    {
        $this->assertEquals('Patient.Link', VersionConstants::TYPE_NAME_PATIENT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink', VersionConstants::TYPE_CLASS_PATIENT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRPeriod()
    {
        $this->assertEquals('Period', VersionConstants::TYPE_NAME_PERIOD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPeriod', VersionConstants::TYPE_CLASS_PERIOD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRPractitioner()
    {
        $this->assertEquals('Practitioner', VersionConstants::TYPE_NAME_PRACTITIONER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRPractitioner', VersionConstants::TYPE_CLASS_PRACTITIONER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRPractitioner_FHIRPractitionerQualification()
    {
        $this->assertEquals('Practitioner.Qualification', VersionConstants::TYPE_NAME_PRACTITIONER_DOT_QUALIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification', VersionConstants::TYPE_CLASS_PRACTITIONER_DOT_QUALIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRProcedure()
    {
        $this->assertEquals('Procedure', VersionConstants::TYPE_NAME_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRProcedure', VersionConstants::TYPE_CLASS_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedurePerformer()
    {
        $this->assertEquals('Procedure.Performer', VersionConstants::TYPE_NAME_PROCEDURE_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer', VersionConstants::TYPE_CLASS_PROCEDURE_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedureRelatedItem()
    {
        $this->assertEquals('Procedure.RelatedItem', VersionConstants::TYPE_NAME_PROCEDURE_DOT_RELATED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem', VersionConstants::TYPE_CLASS_PROCEDURE_DOT_RELATED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRProcedureRelationshipType()
    {
        $this->assertEquals('ProcedureRelationshipType', VersionConstants::TYPE_NAME_PROCEDURE_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRProcedureRelationshipType', VersionConstants::TYPE_CLASS_PROCEDURE_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRProcedureRelationshipTypeList()
    {
        $this->assertEquals('ProcedureRelationshipType-list', VersionConstants::TYPE_NAME_PROCEDURE_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRProcedureRelationshipTypeList', VersionConstants::TYPE_CLASS_PROCEDURE_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRProfile()
    {
        $this->assertEquals('Profile', VersionConstants::TYPE_NAME_PROFILE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRProfile', VersionConstants::TYPE_CLASS_PROFILE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileBinding()
    {
        $this->assertEquals('Profile.Binding', VersionConstants::TYPE_NAME_PROFILE_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding', VersionConstants::TYPE_CLASS_PROFILE_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileConstraint()
    {
        $this->assertEquals('Profile.Constraint', VersionConstants::TYPE_NAME_PROFILE_DOT_CONSTRAINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint', VersionConstants::TYPE_CLASS_PROFILE_DOT_CONSTRAINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileDefinition()
    {
        $this->assertEquals('Profile.Definition', VersionConstants::TYPE_NAME_PROFILE_DOT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition', VersionConstants::TYPE_CLASS_PROFILE_DOT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileElement()
    {
        $this->assertEquals('Profile.Element', VersionConstants::TYPE_NAME_PROFILE_DOT_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileElement', VersionConstants::TYPE_CLASS_PROFILE_DOT_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileExtensionDefn()
    {
        $this->assertEquals('Profile.ExtensionDefn', VersionConstants::TYPE_NAME_PROFILE_DOT_EXTENSION_DEFN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileExtensionDefn', VersionConstants::TYPE_CLASS_PROFILE_DOT_EXTENSION_DEFN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileMapping()
    {
        $this->assertEquals('Profile.Mapping', VersionConstants::TYPE_NAME_PROFILE_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping', VersionConstants::TYPE_CLASS_PROFILE_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileMapping1()
    {
        $this->assertEquals('Profile.Mapping1', VersionConstants::TYPE_NAME_PROFILE_DOT_MAPPING_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1', VersionConstants::TYPE_CLASS_PROFILE_DOT_MAPPING_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileQuery()
    {
        $this->assertEquals('Profile.Query', VersionConstants::TYPE_NAME_PROFILE_DOT_QUERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileQuery', VersionConstants::TYPE_CLASS_PROFILE_DOT_QUERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileSearchParam()
    {
        $this->assertEquals('Profile.SearchParam', VersionConstants::TYPE_NAME_PROFILE_DOT_SEARCH_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSearchParam', VersionConstants::TYPE_CLASS_PROFILE_DOT_SEARCH_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileSlicing()
    {
        $this->assertEquals('Profile.Slicing', VersionConstants::TYPE_NAME_PROFILE_DOT_SLICING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing', VersionConstants::TYPE_CLASS_PROFILE_DOT_SLICING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileStructure()
    {
        $this->assertEquals('Profile.Structure', VersionConstants::TYPE_NAME_PROFILE_DOT_STRUCTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileStructure', VersionConstants::TYPE_CLASS_PROFILE_DOT_STRUCTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileType()
    {
        $this->assertEquals('Profile.Type', VersionConstants::TYPE_NAME_PROFILE_DOT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType', VersionConstants::TYPE_CLASS_PROFILE_DOT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRPropertyRepresentation()
    {
        $this->assertEquals('PropertyRepresentation', VersionConstants::TYPE_NAME_PROPERTY_REPRESENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRPropertyRepresentation', VersionConstants::TYPE_CLASS_PROPERTY_REPRESENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRPropertyRepresentationList()
    {
        $this->assertEquals('PropertyRepresentation-list', VersionConstants::TYPE_NAME_PROPERTY_REPRESENTATION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRPropertyRepresentationList', VersionConstants::TYPE_CLASS_PROPERTY_REPRESENTATION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRProvenance()
    {
        $this->assertEquals('Provenance', VersionConstants::TYPE_NAME_PROVENANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRProvenance', VersionConstants::TYPE_CLASS_PROVENANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceAgent()
    {
        $this->assertEquals('Provenance.Agent', VersionConstants::TYPE_NAME_PROVENANCE_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent', VersionConstants::TYPE_CLASS_PROVENANCE_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceEntity()
    {
        $this->assertEquals('Provenance.Entity', VersionConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity', VersionConstants::TYPE_CLASS_PROVENANCE_DOT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRProvenanceEntityRole()
    {
        $this->assertEquals('ProvenanceEntityRole', VersionConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRProvenanceEntityRole', VersionConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRProvenanceEntityRoleList()
    {
        $this->assertEquals('ProvenanceEntityRole-list', VersionConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRProvenanceEntityRoleList', VersionConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRQuantity()
    {
        $this->assertEquals('Quantity', VersionConstants::TYPE_NAME_QUANTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantity', VersionConstants::TYPE_CLASS_QUANTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRQuantityCompararator()
    {
        $this->assertEquals('QuantityCompararator', VersionConstants::TYPE_NAME_QUANTITY_COMPARARATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuantityCompararator', VersionConstants::TYPE_CLASS_QUANTITY_COMPARARATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRQuantityCompararatorList()
    {
        $this->assertEquals('QuantityCompararator-list', VersionConstants::TYPE_NAME_QUANTITY_COMPARARATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRQuantityCompararatorList', VersionConstants::TYPE_CLASS_QUANTITY_COMPARARATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRQuery()
    {
        $this->assertEquals('Query', VersionConstants::TYPE_NAME_QUERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRQuery', VersionConstants::TYPE_CLASS_QUERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRQuery_FHIRQueryResponse()
    {
        $this->assertEquals('Query.Response', VersionConstants::TYPE_NAME_QUERY_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse', VersionConstants::TYPE_CLASS_QUERY_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRQueryOutcome()
    {
        $this->assertEquals('QueryOutcome', VersionConstants::TYPE_NAME_QUERY_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQueryOutcome', VersionConstants::TYPE_CLASS_QUERY_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRQueryOutcomeList()
    {
        $this->assertEquals('QueryOutcome-list', VersionConstants::TYPE_NAME_QUERY_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRQueryOutcomeList', VersionConstants::TYPE_CLASS_QUERY_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRQuestionnaire()
    {
        $this->assertEquals('Questionnaire', VersionConstants::TYPE_NAME_QUESTIONNAIRE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRQuestionnaire', VersionConstants::TYPE_CLASS_QUESTIONNAIRE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireGroup()
    {
        $this->assertEquals('Questionnaire.Group', VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireQuestion()
    {
        $this->assertEquals('Questionnaire.Question', VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_QUESTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRQuestionnaireStatus()
    {
        $this->assertEquals('QuestionnaireStatus', VersionConstants::TYPE_NAME_QUESTIONNAIRE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRQuestionnaireStatus', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRQuestionnaireStatusList()
    {
        $this->assertEquals('QuestionnaireStatus-list', VersionConstants::TYPE_NAME_QUESTIONNAIRE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRQuestionnaireStatusList', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRRange()
    {
        $this->assertEquals('Range', VersionConstants::TYPE_NAME_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRange', VersionConstants::TYPE_CLASS_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRRatio()
    {
        $this->assertEquals('Ratio', VersionConstants::TYPE_NAME_RATIO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRatio', VersionConstants::TYPE_CLASS_RATIO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRReactionSeverity()
    {
        $this->assertEquals('ReactionSeverity', VersionConstants::TYPE_NAME_REACTION_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRReactionSeverity', VersionConstants::TYPE_CLASS_REACTION_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRReactionSeverityList()
    {
        $this->assertEquals('ReactionSeverity-list', VersionConstants::TYPE_NAME_REACTION_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRReactionSeverityList', VersionConstants::TYPE_CLASS_REACTION_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRRelatedPerson()
    {
        $this->assertEquals('RelatedPerson', VersionConstants::TYPE_NAME_RELATED_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRRelatedPerson', VersionConstants::TYPE_CLASS_RELATED_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource()
    {
        $this->assertEquals('Resource', VersionConstants::TYPE_NAME_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource', VersionConstants::TYPE_CLASS_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRResourceInline()
    {
        $this->assertEquals('Resource.Inline', VersionConstants::TYPE_NAME_RESOURCE_DOT_INLINE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRResourceInline', VersionConstants::TYPE_CLASS_RESOURCE_DOT_INLINE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRResourceType_FHIRResourceNamesPlusBinary()
    {
        $this->assertEquals('ResourceNamesPlusBinary', VersionConstants::TYPE_NAME_RESOURCE_NAMES_PLUS_BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRResourceType\FHIRResourceNamesPlusBinary', VersionConstants::TYPE_CLASS_RESOURCE_NAMES_PLUS_BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRResourceProfileStatus()
    {
        $this->assertEquals('ResourceProfileStatus', VersionConstants::TYPE_NAME_RESOURCE_PROFILE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceProfileStatus', VersionConstants::TYPE_CLASS_RESOURCE_PROFILE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRResourceProfileStatusList()
    {
        $this->assertEquals('ResourceProfileStatus-list', VersionConstants::TYPE_NAME_RESOURCE_PROFILE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRResourceProfileStatusList', VersionConstants::TYPE_CLASS_RESOURCE_PROFILE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRResourceReference()
    {
        $this->assertEquals('ResourceReference', VersionConstants::TYPE_NAME_RESOURCE_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResourceReference', VersionConstants::TYPE_CLASS_RESOURCE_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRResourceType()
    {
        $this->assertEquals('ResourceType', VersionConstants::TYPE_NAME_RESOURCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRResourceType', VersionConstants::TYPE_CLASS_RESOURCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRResponseType()
    {
        $this->assertEquals('ResponseType', VersionConstants::TYPE_NAME_RESPONSE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRResponseType', VersionConstants::TYPE_CLASS_RESPONSE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRResponseTypeList()
    {
        $this->assertEquals('ResponseType-list', VersionConstants::TYPE_NAME_RESPONSE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRResponseTypeList', VersionConstants::TYPE_CLASS_RESPONSE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRRestfulConformanceMode()
    {
        $this->assertEquals('RestfulConformanceMode', VersionConstants::TYPE_NAME_RESTFUL_CONFORMANCE_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulConformanceMode', VersionConstants::TYPE_CLASS_RESTFUL_CONFORMANCE_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRRestfulConformanceModeList()
    {
        $this->assertEquals('RestfulConformanceMode-list', VersionConstants::TYPE_NAME_RESTFUL_CONFORMANCE_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRRestfulConformanceModeList', VersionConstants::TYPE_CLASS_RESTFUL_CONFORMANCE_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRRestfulOperationSystem()
    {
        $this->assertEquals('RestfulOperationSystem', VersionConstants::TYPE_NAME_RESTFUL_OPERATION_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulOperationSystem', VersionConstants::TYPE_CLASS_RESTFUL_OPERATION_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRRestfulOperationSystemList()
    {
        $this->assertEquals('RestfulOperationSystem-list', VersionConstants::TYPE_NAME_RESTFUL_OPERATION_SYSTEM_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRRestfulOperationSystemList', VersionConstants::TYPE_CLASS_RESTFUL_OPERATION_SYSTEM_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRRestfulOperationType()
    {
        $this->assertEquals('RestfulOperationType', VersionConstants::TYPE_NAME_RESTFUL_OPERATION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulOperationType', VersionConstants::TYPE_CLASS_RESTFUL_OPERATION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRRestfulOperationTypeList()
    {
        $this->assertEquals('RestfulOperationType-list', VersionConstants::TYPE_NAME_RESTFUL_OPERATION_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRRestfulOperationTypeList', VersionConstants::TYPE_CLASS_RESTFUL_OPERATION_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSampledData()
    {
        $this->assertEquals('SampledData', VersionConstants::TYPE_NAME_SAMPLED_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledData', VersionConstants::TYPE_CLASS_SAMPLED_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSampledDataDataType()
    {
        $this->assertEquals('SampledDataDataType', VersionConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSampledDataDataType', VersionConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRSampledDataDataTypePrimitive()
    {
        $this->assertEquals('SampledDataDataType-primitive', VersionConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRSampledDataDataTypePrimitive', VersionConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSchedule()
    {
        $this->assertEquals('Schedule', VersionConstants::TYPE_NAME_SCHEDULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule', VersionConstants::TYPE_CLASS_SCHEDULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSchedule_FHIRScheduleRepeat()
    {
        $this->assertEquals('Schedule.Repeat', VersionConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSchedule\FHIRScheduleRepeat', VersionConstants::TYPE_CLASS_SCHEDULE_DOT_REPEAT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRDecimal_FHIRScore()
    {
        $this->assertEquals('score', VersionConstants::TYPE_NAME_SCORE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRDecimal\FHIRScore', VersionConstants::TYPE_CLASS_SCORE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSearchParamType()
    {
        $this->assertEquals('SearchParamType', VersionConstants::TYPE_NAME_SEARCH_PARAM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSearchParamType', VersionConstants::TYPE_CLASS_SEARCH_PARAM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSearchParamTypeList()
    {
        $this->assertEquals('SearchParamType-list', VersionConstants::TYPE_NAME_SEARCH_PARAM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSearchParamTypeList', VersionConstants::TYPE_CLASS_SEARCH_PARAM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRSecurityEvent()
    {
        $this->assertEquals('SecurityEvent', VersionConstants::TYPE_NAME_SECURITY_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSecurityEvent', VersionConstants::TYPE_CLASS_SECURITY_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventDetail()
    {
        $this->assertEquals('SecurityEvent.Detail', VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventDetail', VersionConstants::TYPE_CLASS_SECURITY_EVENT_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventEvent()
    {
        $this->assertEquals('SecurityEvent.Event', VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent', VersionConstants::TYPE_CLASS_SECURITY_EVENT_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventNetwork()
    {
        $this->assertEquals('SecurityEvent.Network', VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_NETWORK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventNetwork', VersionConstants::TYPE_CLASS_SECURITY_EVENT_DOT_NETWORK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventObject()
    {
        $this->assertEquals('SecurityEvent.Object', VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_OBJECT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject', VersionConstants::TYPE_CLASS_SECURITY_EVENT_DOT_OBJECT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventParticipant()
    {
        $this->assertEquals('SecurityEvent.Participant', VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant', VersionConstants::TYPE_CLASS_SECURITY_EVENT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventSource()
    {
        $this->assertEquals('SecurityEvent.Source', VersionConstants::TYPE_NAME_SECURITY_EVENT_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventSource', VersionConstants::TYPE_CLASS_SECURITY_EVENT_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSecurityEventAction()
    {
        $this->assertEquals('SecurityEventAction', VersionConstants::TYPE_NAME_SECURITY_EVENT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventAction', VersionConstants::TYPE_CLASS_SECURITY_EVENT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSecurityEventActionList()
    {
        $this->assertEquals('SecurityEventAction-list', VersionConstants::TYPE_NAME_SECURITY_EVENT_ACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventActionList', VersionConstants::TYPE_CLASS_SECURITY_EVENT_ACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSecurityEventObjectLifecycle()
    {
        $this->assertEquals('SecurityEventObjectLifecycle', VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_LIFECYCLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventObjectLifecycle', VersionConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_LIFECYCLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSecurityEventObjectLifecycleList()
    {
        $this->assertEquals('SecurityEventObjectLifecycle-list', VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_LIFECYCLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventObjectLifecycleList', VersionConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_LIFECYCLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSecurityEventObjectRole()
    {
        $this->assertEquals('SecurityEventObjectRole', VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventObjectRole', VersionConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSecurityEventObjectRoleList()
    {
        $this->assertEquals('SecurityEventObjectRole-list', VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_ROLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventObjectRoleList', VersionConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_ROLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSecurityEventObjectType()
    {
        $this->assertEquals('SecurityEventObjectType', VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventObjectType', VersionConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSecurityEventObjectTypeList()
    {
        $this->assertEquals('SecurityEventObjectType-list', VersionConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventObjectTypeList', VersionConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSecurityEventOutcome()
    {
        $this->assertEquals('SecurityEventOutcome', VersionConstants::TYPE_NAME_SECURITY_EVENT_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventOutcome', VersionConstants::TYPE_CLASS_SECURITY_EVENT_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSecurityEventOutcomeList()
    {
        $this->assertEquals('SecurityEventOutcome-list', VersionConstants::TYPE_NAME_SECURITY_EVENT_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventOutcomeList', VersionConstants::TYPE_CLASS_SECURITY_EVENT_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSecurityEventParticipantNetworkType()
    {
        $this->assertEquals('SecurityEventParticipantNetworkType', VersionConstants::TYPE_NAME_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSecurityEventParticipantNetworkType', VersionConstants::TYPE_CLASS_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSecurityEventParticipantNetworkTypeList()
    {
        $this->assertEquals('SecurityEventParticipantNetworkType-list', VersionConstants::TYPE_NAME_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSecurityEventParticipantNetworkTypeList', VersionConstants::TYPE_CLASS_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSensitivityStatus()
    {
        $this->assertEquals('SensitivityStatus', VersionConstants::TYPE_NAME_SENSITIVITY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSensitivityStatus', VersionConstants::TYPE_CLASS_SENSITIVITY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSensitivityStatusList()
    {
        $this->assertEquals('SensitivityStatus-list', VersionConstants::TYPE_NAME_SENSITIVITY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSensitivityStatusList', VersionConstants::TYPE_CLASS_SENSITIVITY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSensitivityType()
    {
        $this->assertEquals('SensitivityType', VersionConstants::TYPE_NAME_SENSITIVITY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSensitivityType', VersionConstants::TYPE_CLASS_SENSITIVITY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSensitivityTypeList()
    {
        $this->assertEquals('SensitivityType-list', VersionConstants::TYPE_NAME_SENSITIVITY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSensitivityTypeList', VersionConstants::TYPE_CLASS_SENSITIVITY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSlicingRules()
    {
        $this->assertEquals('SlicingRules', VersionConstants::TYPE_NAME_SLICING_RULES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSlicingRules', VersionConstants::TYPE_CLASS_SLICING_RULES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSlicingRulesList()
    {
        $this->assertEquals('SlicingRules-list', VersionConstants::TYPE_NAME_SLICING_RULES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSlicingRulesList', VersionConstants::TYPE_CLASS_SLICING_RULES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRSpecimen()
    {
        $this->assertEquals('Specimen', VersionConstants::TYPE_NAME_SPECIMEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSpecimen', VersionConstants::TYPE_CLASS_SPECIMEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenCollection()
    {
        $this->assertEquals('Specimen.Collection', VersionConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_COLLECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenContainer()
    {
        $this->assertEquals('Specimen.Container', VersionConstants::TYPE_NAME_SPECIMEN_DOT_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenSource()
    {
        $this->assertEquals('Specimen.Source', VersionConstants::TYPE_NAME_SPECIMEN_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenTreatment()
    {
        $this->assertEquals('Specimen.Treatment', VersionConstants::TYPE_NAME_SPECIMEN_DOT_TREATMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_TREATMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRString()
    {
        $this->assertEquals('string', VersionConstants::TYPE_NAME_STRING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString', VersionConstants::TYPE_CLASS_STRING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive()
    {
        $this->assertEquals('string-primitive', VersionConstants::TYPE_NAME_STRING_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive', VersionConstants::TYPE_CLASS_STRING_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRSubstance()
    {
        $this->assertEquals('Substance', VersionConstants::TYPE_NAME_SUBSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSubstance', VersionConstants::TYPE_CLASS_SUBSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceIngredient()
    {
        $this->assertEquals('Substance.Ingredient', VersionConstants::TYPE_NAME_SUBSTANCE_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient', VersionConstants::TYPE_CLASS_SUBSTANCE_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceInstance()
    {
        $this->assertEquals('Substance.Instance', VersionConstants::TYPE_NAME_SUBSTANCE_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance', VersionConstants::TYPE_CLASS_SUBSTANCE_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRSupply()
    {
        $this->assertEquals('Supply', VersionConstants::TYPE_NAME_SUPPLY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRSupply', VersionConstants::TYPE_CLASS_SUPPLY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRSupply_FHIRSupplyDispense()
    {
        $this->assertEquals('Supply.Dispense', VersionConstants::TYPE_NAME_SUPPLY_DOT_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRSupply\FHIRSupplyDispense', VersionConstants::TYPE_CLASS_SUPPLY_DOT_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSupplyDispenseStatus()
    {
        $this->assertEquals('SupplyDispenseStatus', VersionConstants::TYPE_NAME_SUPPLY_DISPENSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSupplyDispenseStatus', VersionConstants::TYPE_CLASS_SUPPLY_DISPENSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSupplyDispenseStatusList()
    {
        $this->assertEquals('SupplyDispenseStatus-list', VersionConstants::TYPE_NAME_SUPPLY_DISPENSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSupplyDispenseStatusList', VersionConstants::TYPE_CLASS_SUPPLY_DISPENSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRSupplyStatus()
    {
        $this->assertEquals('SupplyStatus', VersionConstants::TYPE_NAME_SUPPLY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRSupplyStatus', VersionConstants::TYPE_CLASS_SUPPLY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRSupplyStatusList()
    {
        $this->assertEquals('SupplyStatus-list', VersionConstants::TYPE_NAME_SUPPLY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRSupplyStatusList', VersionConstants::TYPE_CLASS_SUPPLY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRInteger_FHIRTotalResults()
    {
        $this->assertEquals('totalResults', VersionConstants::TYPE_NAME_TOTAL_RESULTS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRInteger\FHIRTotalResults', VersionConstants::TYPE_CLASS_TOTAL_RESULTS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRUnitsOfTime()
    {
        $this->assertEquals('UnitsOfTime', VersionConstants::TYPE_NAME_UNITS_OF_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUnitsOfTime', VersionConstants::TYPE_CLASS_UNITS_OF_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRUnitsOfTimeList()
    {
        $this->assertEquals('UnitsOfTime-list', VersionConstants::TYPE_NAME_UNITS_OF_TIME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRUnitsOfTimeList', VersionConstants::TYPE_CLASS_UNITS_OF_TIME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRUri()
    {
        $this->assertEquals('uri', VersionConstants::TYPE_NAME_URI);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUri', VersionConstants::TYPE_CLASS_URI);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRUriPrimitive()
    {
        $this->assertEquals('uri-primitive', VersionConstants::TYPE_NAME_URI_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUriPrimitive', VersionConstants::TYPE_CLASS_URI_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRUuid()
    {
        $this->assertEquals('uuid', VersionConstants::TYPE_NAME_UUID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRUuid', VersionConstants::TYPE_CLASS_UUID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRUuidPrimitive()
    {
        $this->assertEquals('uuid-primitive', VersionConstants::TYPE_NAME_UUID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRUuidPrimitive', VersionConstants::TYPE_CLASS_UUID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRResource_FHIRValueSet()
    {
        $this->assertEquals('ValueSet', VersionConstants::TYPE_NAME_VALUE_SET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRResource\FHIRValueSet', VersionConstants::TYPE_CLASS_VALUE_SET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetCompose()
    {
        $this->assertEquals('ValueSet.Compose', VersionConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_COMPOSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetConcept()
    {
        $this->assertEquals('ValueSet.Concept', VersionConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetContains()
    {
        $this->assertEquals('ValueSet.Contains', VersionConstants::TYPE_NAME_VALUE_SET_DOT_CONTAINS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_CONTAINS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetDefine()
    {
        $this->assertEquals('ValueSet.Define', VersionConstants::TYPE_NAME_VALUE_SET_DOT_DEFINE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDefine', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_DEFINE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetExpansion()
    {
        $this->assertEquals('ValueSet.Expansion', VersionConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_EXPANSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetFilter()
    {
        $this->assertEquals('ValueSet.Filter', VersionConstants::TYPE_NAME_VALUE_SET_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetInclude()
    {
        $this->assertEquals('ValueSet.Include', VersionConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_INCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRElement_FHIRValueSetStatus()
    {
        $this->assertEquals('ValueSetStatus', VersionConstants::TYPE_NAME_VALUE_SET_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRValueSetStatus', VersionConstants::TYPE_CLASS_VALUE_SET_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRStringPrimitive_FHIRValueSetStatusList()
    {
        $this->assertEquals('ValueSetStatus-list', VersionConstants::TYPE_NAME_VALUE_SET_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRValueSetStatusList', VersionConstants::TYPE_CLASS_VALUE_SET_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRXHTML()
    {
        $this->assertEquals('XHTML', VersionConstants::TYPE_NAME_XHTML);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRXHTML', VersionConstants::TYPE_CLASS_XHTML);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_DSTU1_Types_FHIRIdPrimitive_FHIRXmlIdRef()
    {
        $this->assertEquals('xmlIdRef', VersionConstants::TYPE_NAME_XML_ID_REF);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive\FHIRXmlIdRef', VersionConstants::TYPE_CLASS_XML_ID_REF);
    }

}
