<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTests;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use PHPUnit\Framework\TestCase;

/**
 * Class PHPFHIRConstantsTest
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTests
 */
class PHPFHIRConstantsTest extends TestCase
{
    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRAddress()
    {
        $this->assertEquals('Address', PHPFHIRConstants::TYPE_NAME_ADDRESS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddress', PHPFHIRConstants::TYPE_CLASS_ADDRESS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRAddressUse()
    {
        $this->assertEquals('AddressUse', PHPFHIRConstants::TYPE_NAME_ADDRESS_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAddressUse', PHPFHIRConstants::TYPE_CLASS_ADDRESS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRAddressUseList()
    {
        $this->assertEquals('AddressUse-list', PHPFHIRConstants::TYPE_NAME_ADDRESS_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRAddressUseList', PHPFHIRConstants::TYPE_CLASS_ADDRESS_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRAdverseReaction()
    {
        $this->assertEquals('AdverseReaction', PHPFHIRConstants::TYPE_NAME_ADVERSE_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAdverseReaction', PHPFHIRConstants::TYPE_CLASS_ADVERSE_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRAdverseReaction_FHIRAdverseReactionExposure()
    {
        $this->assertEquals('AdverseReaction.Exposure', PHPFHIRConstants::TYPE_NAME_ADVERSE_REACTION_DOT_EXPOSURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionExposure', PHPFHIRConstants::TYPE_CLASS_ADVERSE_REACTION_DOT_EXPOSURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRAdverseReaction_FHIRAdverseReactionSymptom()
    {
        $this->assertEquals('AdverseReaction.Symptom', PHPFHIRConstants::TYPE_NAME_ADVERSE_REACTION_DOT_SYMPTOM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRAdverseReaction\FHIRAdverseReactionSymptom', PHPFHIRConstants::TYPE_CLASS_ADVERSE_REACTION_DOT_SYMPTOM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRQuantity_FHIRAge()
    {
        $this->assertEquals('Age', PHPFHIRConstants::TYPE_NAME_AGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRAge', PHPFHIRConstants::TYPE_CLASS_AGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRAggregationMode()
    {
        $this->assertEquals('AggregationMode', PHPFHIRConstants::TYPE_NAME_AGGREGATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAggregationMode', PHPFHIRConstants::TYPE_CLASS_AGGREGATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRAggregationModeList()
    {
        $this->assertEquals('AggregationMode-list', PHPFHIRConstants::TYPE_NAME_AGGREGATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRAggregationModeList', PHPFHIRConstants::TYPE_CLASS_AGGREGATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRAlert()
    {
        $this->assertEquals('Alert', PHPFHIRConstants::TYPE_NAME_ALERT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAlert', PHPFHIRConstants::TYPE_CLASS_ALERT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRAlertStatus()
    {
        $this->assertEquals('AlertStatus', PHPFHIRConstants::TYPE_NAME_ALERT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAlertStatus', PHPFHIRConstants::TYPE_CLASS_ALERT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRAlertStatusList()
    {
        $this->assertEquals('AlertStatus-list', PHPFHIRConstants::TYPE_NAME_ALERT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRAlertStatusList', PHPFHIRConstants::TYPE_CLASS_ALERT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRAllergyIntolerance()
    {
        $this->assertEquals('AllergyIntolerance', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRAllergyIntolerance', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRAttachment()
    {
        $this->assertEquals('Attachment', PHPFHIRConstants::TYPE_NAME_ATTACHMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRAttachment', PHPFHIRConstants::TYPE_CLASS_ATTACHMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement()
    {
        $this->assertEquals('BackboneElement', PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement', PHPFHIRConstants::TYPE_CLASS_BACKBONE_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBase64Binary()
    {
        $this->assertEquals('base64Binary', PHPFHIRConstants::TYPE_NAME_BASE_64BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBase64Binary', PHPFHIRConstants::TYPE_CLASS_BASE_64BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRBase64BinaryPrimitive()
    {
        $this->assertEquals('base64Binary-primitive', PHPFHIRConstants::TYPE_NAME_BASE_64BINARY_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBase64BinaryPrimitive', PHPFHIRConstants::TYPE_CLASS_BASE_64BINARY_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRBinary()
    {
        $this->assertEquals('Binary', PHPFHIRConstants::TYPE_NAME_BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBinary', PHPFHIRConstants::TYPE_CLASS_BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBindingConformance()
    {
        $this->assertEquals('BindingConformance', PHPFHIRConstants::TYPE_NAME_BINDING_CONFORMANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBindingConformance', PHPFHIRConstants::TYPE_CLASS_BINDING_CONFORMANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRBindingConformanceList()
    {
        $this->assertEquals('BindingConformance-list', PHPFHIRConstants::TYPE_NAME_BINDING_CONFORMANCE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRBindingConformanceList', PHPFHIRConstants::TYPE_CLASS_BINDING_CONFORMANCE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBoolean()
    {
        $this->assertEquals('boolean', PHPFHIRConstants::TYPE_NAME_BOOLEAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean', PHPFHIRConstants::TYPE_CLASS_BOOLEAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRBooleanPrimitive()
    {
        $this->assertEquals('boolean-primitive', PHPFHIRConstants::TYPE_NAME_BOOLEAN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRBooleanPrimitive', PHPFHIRConstants::TYPE_CLASS_BOOLEAN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRCarePlan()
    {
        $this->assertEquals('CarePlan', PHPFHIRConstants::TYPE_NAME_CARE_PLAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanActivity()
    {
        $this->assertEquals('CarePlan.Activity', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_ACTIVITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanGoal()
    {
        $this->assertEquals('CarePlan.Goal', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_GOAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_GOAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanParticipant()
    {
        $this->assertEquals('CarePlan.Participant', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanSimple()
    {
        $this->assertEquals('CarePlan.Simple', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_SIMPLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_SIMPLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCarePlanActivityCategory()
    {
        $this->assertEquals('CarePlanActivityCategory', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityCategory', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRCarePlanActivityCategoryList()
    {
        $this->assertEquals('CarePlanActivityCategory-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRCarePlanActivityCategoryList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCarePlanActivityStatus()
    {
        $this->assertEquals('CarePlanActivityStatus', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityStatus', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRCarePlanActivityStatusList()
    {
        $this->assertEquals('CarePlanActivityStatus-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRCarePlanActivityStatusList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCarePlanGoalStatus()
    {
        $this->assertEquals('CarePlanGoalStatus', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_GOAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanGoalStatus', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_GOAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRCarePlanGoalStatusList()
    {
        $this->assertEquals('CarePlanGoalStatus-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_GOAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRCarePlanGoalStatusList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_GOAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCarePlanStatus()
    {
        $this->assertEquals('CarePlanStatus', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanStatus', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRCarePlanStatusList()
    {
        $this->assertEquals('CarePlanStatus-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRCarePlanStatusList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCausalityExpectation()
    {
        $this->assertEquals('CausalityExpectation', PHPFHIRConstants::TYPE_NAME_CAUSALITY_EXPECTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCausalityExpectation', PHPFHIRConstants::TYPE_CLASS_CAUSALITY_EXPECTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRCausalityExpectationList()
    {
        $this->assertEquals('CausalityExpectation-list', PHPFHIRConstants::TYPE_NAME_CAUSALITY_EXPECTATION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRCausalityExpectationList', PHPFHIRConstants::TYPE_CLASS_CAUSALITY_EXPECTATION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCode()
    {
        $this->assertEquals('code', PHPFHIRConstants::TYPE_NAME_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCode', PHPFHIRConstants::TYPE_CLASS_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRCodePrimitive()
    {
        $this->assertEquals('code-primitive', PHPFHIRConstants::TYPE_NAME_CODE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRCodePrimitive', PHPFHIRConstants::TYPE_CLASS_CODE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCodeableConcept()
    {
        $this->assertEquals('CodeableConcept', PHPFHIRConstants::TYPE_NAME_CODEABLE_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCodeableConcept', PHPFHIRConstants::TYPE_CLASS_CODEABLE_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCoding()
    {
        $this->assertEquals('Coding', PHPFHIRConstants::TYPE_NAME_CODING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCoding', PHPFHIRConstants::TYPE_CLASS_CODING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRComposition()
    {
        $this->assertEquals('Composition', PHPFHIRConstants::TYPE_NAME_COMPOSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRComposition', PHPFHIRConstants::TYPE_CLASS_COMPOSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionAttester()
    {
        $this->assertEquals('Composition.Attester', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_ATTESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionEvent()
    {
        $this->assertEquals('Composition.Event', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionSection()
    {
        $this->assertEquals('Composition.Section', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_SECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCompositionAttestationMode()
    {
        $this->assertEquals('CompositionAttestationMode', PHPFHIRConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCompositionAttestationMode', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRCompositionAttestationModeList()
    {
        $this->assertEquals('CompositionAttestationMode-list', PHPFHIRConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRCompositionAttestationModeList', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCompositionStatus()
    {
        $this->assertEquals('CompositionStatus', PHPFHIRConstants::TYPE_NAME_COMPOSITION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCompositionStatus', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRCompositionStatusList()
    {
        $this->assertEquals('CompositionStatus-list', PHPFHIRConstants::TYPE_NAME_COMPOSITION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRCompositionStatusList', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRConceptMap()
    {
        $this->assertEquals('ConceptMap', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConceptMap', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapConcept()
    {
        $this->assertEquals('ConceptMap.Concept', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapConcept', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapDependsOn()
    {
        $this->assertEquals('ConceptMap.DependsOn', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_DEPENDS_ON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapMap()
    {
        $this->assertEquals('ConceptMap.Map', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapMap', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRConceptMapEquivalence()
    {
        $this->assertEquals('ConceptMapEquivalence', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConceptMapEquivalence', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRConceptMapEquivalenceList()
    {
        $this->assertEquals('ConceptMapEquivalence-list', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRConceptMapEquivalenceList', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRCondition()
    {
        $this->assertEquals('Condition', PHPFHIRConstants::TYPE_NAME_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCondition', PHPFHIRConstants::TYPE_CLASS_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionEvidence()
    {
        $this->assertEquals('Condition.Evidence', PHPFHIRConstants::TYPE_NAME_CONDITION_DOT_EVIDENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence', PHPFHIRConstants::TYPE_CLASS_CONDITION_DOT_EVIDENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionLocation()
    {
        $this->assertEquals('Condition.Location', PHPFHIRConstants::TYPE_NAME_CONDITION_DOT_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionLocation', PHPFHIRConstants::TYPE_CLASS_CONDITION_DOT_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionRelatedItem()
    {
        $this->assertEquals('Condition.RelatedItem', PHPFHIRConstants::TYPE_NAME_CONDITION_DOT_RELATED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionRelatedItem', PHPFHIRConstants::TYPE_CLASS_CONDITION_DOT_RELATED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionStage()
    {
        $this->assertEquals('Condition.Stage', PHPFHIRConstants::TYPE_NAME_CONDITION_DOT_STAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage', PHPFHIRConstants::TYPE_CLASS_CONDITION_DOT_STAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRConditionRelationshipType()
    {
        $this->assertEquals('ConditionRelationshipType', PHPFHIRConstants::TYPE_NAME_CONDITION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConditionRelationshipType', PHPFHIRConstants::TYPE_CLASS_CONDITION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRConditionRelationshipTypeList()
    {
        $this->assertEquals('ConditionRelationshipType-list', PHPFHIRConstants::TYPE_NAME_CONDITION_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRConditionRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_CONDITION_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRConditionStatus()
    {
        $this->assertEquals('ConditionStatus', PHPFHIRConstants::TYPE_NAME_CONDITION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConditionStatus', PHPFHIRConstants::TYPE_CLASS_CONDITION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRConditionStatusList()
    {
        $this->assertEquals('ConditionStatus-list', PHPFHIRConstants::TYPE_NAME_CONDITION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRConditionStatusList', PHPFHIRConstants::TYPE_CLASS_CONDITION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRConformance()
    {
        $this->assertEquals('Conformance', PHPFHIRConstants::TYPE_NAME_CONFORMANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRConformance', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceCertificate()
    {
        $this->assertEquals('Conformance.Certificate', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_CERTIFICATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_CERTIFICATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceDocument()
    {
        $this->assertEquals('Conformance.Document', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_DOCUMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_DOCUMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceEvent()
    {
        $this->assertEquals('Conformance.Event', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceImplementation()
    {
        $this->assertEquals('Conformance.Implementation', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_IMPLEMENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_IMPLEMENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceMessaging()
    {
        $this->assertEquals('Conformance.Messaging', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_MESSAGING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceOperation()
    {
        $this->assertEquals('Conformance.Operation', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceOperation1()
    {
        $this->assertEquals('Conformance.Operation1', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_OPERATION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_OPERATION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceQuery()
    {
        $this->assertEquals('Conformance.Query', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_QUERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceQuery', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_QUERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceResource()
    {
        $this->assertEquals('Conformance.Resource', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceRest()
    {
        $this->assertEquals('Conformance.Rest', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_REST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceSearchParam()
    {
        $this->assertEquals('Conformance.SearchParam', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SEARCH_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_SEARCH_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceSecurity()
    {
        $this->assertEquals('Conformance.Security', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SECURITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_SECURITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceSoftware()
    {
        $this->assertEquals('Conformance.Software', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SOFTWARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_SOFTWARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRConformanceEventMode()
    {
        $this->assertEquals('ConformanceEventMode', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_EVENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConformanceEventMode', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_EVENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRConformanceEventModeList()
    {
        $this->assertEquals('ConformanceEventMode-list', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_EVENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRConformanceEventModeList', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_EVENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRConformanceStatementStatus()
    {
        $this->assertEquals('ConformanceStatementStatus', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_STATEMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConformanceStatementStatus', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_STATEMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRConformanceStatementStatusList()
    {
        $this->assertEquals('ConformanceStatementStatus-list', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_STATEMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRConformanceStatementStatusList', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_STATEMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRConstraintSeverity()
    {
        $this->assertEquals('ConstraintSeverity', PHPFHIRConstants::TYPE_NAME_CONSTRAINT_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRConstraintSeverity', PHPFHIRConstants::TYPE_CLASS_CONSTRAINT_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRConstraintSeverityList()
    {
        $this->assertEquals('ConstraintSeverity-list', PHPFHIRConstants::TYPE_NAME_CONSTRAINT_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRConstraintSeverityList', PHPFHIRConstants::TYPE_CLASS_CONSTRAINT_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRContact()
    {
        $this->assertEquals('Contact', PHPFHIRConstants::TYPE_NAME_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContact', PHPFHIRConstants::TYPE_CLASS_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRContactSystem()
    {
        $this->assertEquals('ContactSystem', PHPFHIRConstants::TYPE_NAME_CONTACT_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContactSystem', PHPFHIRConstants::TYPE_CLASS_CONTACT_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRContactSystemList()
    {
        $this->assertEquals('ContactSystem-list', PHPFHIRConstants::TYPE_NAME_CONTACT_SYSTEM_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRContactSystemList', PHPFHIRConstants::TYPE_CLASS_CONTACT_SYSTEM_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRContactUse()
    {
        $this->assertEquals('ContactUse', PHPFHIRConstants::TYPE_NAME_CONTACT_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRContactUse', PHPFHIRConstants::TYPE_CLASS_CONTACT_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRContactUseList()
    {
        $this->assertEquals('ContactUse-list', PHPFHIRConstants::TYPE_NAME_CONTACT_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRContactUseList', PHPFHIRConstants::TYPE_CLASS_CONTACT_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRQuantity_FHIRCount()
    {
        $this->assertEquals('Count', PHPFHIRConstants::TYPE_NAME_COUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRCount', PHPFHIRConstants::TYPE_CLASS_COUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRCriticality()
    {
        $this->assertEquals('Criticality', PHPFHIRConstants::TYPE_NAME_CRITICALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCriticality', PHPFHIRConstants::TYPE_CLASS_CRITICALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRCriticalityList()
    {
        $this->assertEquals('Criticality-list', PHPFHIRConstants::TYPE_NAME_CRITICALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRCriticalityList', PHPFHIRConstants::TYPE_CLASS_CRITICALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDate()
    {
        $this->assertEquals('date', PHPFHIRConstants::TYPE_NAME_DATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDate', PHPFHIRConstants::TYPE_CLASS_DATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRDatePrimitive()
    {
        $this->assertEquals('date-primitive', PHPFHIRConstants::TYPE_NAME_DATE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDatePrimitive', PHPFHIRConstants::TYPE_CLASS_DATE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDateTime()
    {
        $this->assertEquals('dateTime', PHPFHIRConstants::TYPE_NAME_DATE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime', PHPFHIRConstants::TYPE_CLASS_DATE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRDateTimePrimitive()
    {
        $this->assertEquals('dateTime-primitive', PHPFHIRConstants::TYPE_NAME_DATE_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDateTimePrimitive', PHPFHIRConstants::TYPE_CLASS_DATE_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDecimal()
    {
        $this->assertEquals('decimal', PHPFHIRConstants::TYPE_NAME_DECIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal', PHPFHIRConstants::TYPE_CLASS_DECIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRDecimalPrimitive()
    {
        $this->assertEquals('decimal-primitive', PHPFHIRConstants::TYPE_NAME_DECIMAL_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRDecimalPrimitive', PHPFHIRConstants::TYPE_CLASS_DECIMAL_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRDevice()
    {
        $this->assertEquals('Device', PHPFHIRConstants::TYPE_NAME_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDevice', PHPFHIRConstants::TYPE_CLASS_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRDeviceObservationReport()
    {
        $this->assertEquals('DeviceObservationReport', PHPFHIRConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDeviceObservationReport', PHPFHIRConstants::TYPE_CLASS_DEVICE_OBSERVATION_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDeviceObservationReport_FHIRDeviceObservationReportChannel()
    {
        $this->assertEquals('DeviceObservationReport.Channel', PHPFHIRConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT_DOT_CHANNEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportChannel', PHPFHIRConstants::TYPE_CLASS_DEVICE_OBSERVATION_REPORT_DOT_CHANNEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDeviceObservationReport_FHIRDeviceObservationReportMetric()
    {
        $this->assertEquals('DeviceObservationReport.Metric', PHPFHIRConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT_DOT_METRIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportMetric', PHPFHIRConstants::TYPE_CLASS_DEVICE_OBSERVATION_REPORT_DOT_METRIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDeviceObservationReport_FHIRDeviceObservationReportVirtualDevice()
    {
        $this->assertEquals('DeviceObservationReport.VirtualDevice', PHPFHIRConstants::TYPE_NAME_DEVICE_OBSERVATION_REPORT_DOT_VIRTUAL_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDeviceObservationReport\FHIRDeviceObservationReportVirtualDevice', PHPFHIRConstants::TYPE_CLASS_DEVICE_OBSERVATION_REPORT_DOT_VIRTUAL_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRDiagnosticOrder()
    {
        $this->assertEquals('DiagnosticOrder', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticOrder', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDiagnosticOrder_FHIRDiagnosticOrderEvent()
    {
        $this->assertEquals('DiagnosticOrder.Event', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDiagnosticOrder_FHIRDiagnosticOrderItem()
    {
        $this->assertEquals('DiagnosticOrder.Item', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDiagnosticOrderPriority()
    {
        $this->assertEquals('DiagnosticOrderPriority', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticOrderPriority', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRDiagnosticOrderPriorityList()
    {
        $this->assertEquals('DiagnosticOrderPriority-list', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_PRIORITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_PRIORITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDiagnosticOrderStatus()
    {
        $this->assertEquals('DiagnosticOrderStatus', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticOrderStatus', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRDiagnosticOrderStatusList()
    {
        $this->assertEquals('DiagnosticOrderStatus-list', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRDiagnosticReport()
    {
        $this->assertEquals('DiagnosticReport', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDiagnosticReport', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDiagnosticReport_FHIRDiagnosticReportImage()
    {
        $this->assertEquals('DiagnosticReport.Image', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_DOT_IMAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_DOT_IMAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDiagnosticReportStatus()
    {
        $this->assertEquals('DiagnosticReportStatus', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDiagnosticReportStatus', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRDiagnosticReportStatusList()
    {
        $this->assertEquals('DiagnosticReportStatus-list', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRDiagnosticReportStatusList', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRQuantity_FHIRDistance()
    {
        $this->assertEquals('Distance', PHPFHIRConstants::TYPE_NAME_DISTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRDistance', PHPFHIRConstants::TYPE_CLASS_DISTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRDocumentManifest()
    {
        $this->assertEquals('DocumentManifest', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentManifest', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MANIFEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDocumentMode()
    {
        $this->assertEquals('DocumentMode', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentMode', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRDocumentModeList()
    {
        $this->assertEquals('DocumentMode-list', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRDocumentModeList', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRDocumentReference()
    {
        $this->assertEquals('DocumentReference', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRDocumentReference', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContext()
    {
        $this->assertEquals('DocumentReference.Context', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceParameter()
    {
        $this->assertEquals('DocumentReference.Parameter', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceParameter', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceRelatesTo()
    {
        $this->assertEquals('DocumentReference.RelatesTo', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceService()
    {
        $this->assertEquals('DocumentReference.Service', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_SERVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceService', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_SERVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDocumentReferenceStatus()
    {
        $this->assertEquals('DocumentReferenceStatus', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentReferenceStatus', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRDocumentReferenceStatusList()
    {
        $this->assertEquals('DocumentReferenceStatus-list', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRDocumentReferenceStatusList', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDocumentRelationshipType()
    {
        $this->assertEquals('DocumentRelationshipType', PHPFHIRConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDocumentRelationshipType', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRDocumentRelationshipTypeList()
    {
        $this->assertEquals('DocumentRelationshipType-list', PHPFHIRConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRDocumentRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRQuantity_FHIRDuration()
    {
        $this->assertEquals('Duration', PHPFHIRConstants::TYPE_NAME_DURATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRDuration', PHPFHIRConstants::TYPE_CLASS_DURATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement()
    {
        $this->assertEquals('Element', PHPFHIRConstants::TYPE_NAME_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement', PHPFHIRConstants::TYPE_CLASS_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIREncounter()
    {
        $this->assertEquals('Encounter', PHPFHIRConstants::TYPE_NAME_ENCOUNTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIREncounter', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterAccomodation()
    {
        $this->assertEquals('Encounter.Accomodation', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_ACCOMODATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterAccomodation', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_ACCOMODATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterHospitalization()
    {
        $this->assertEquals('Encounter.Hospitalization', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_HOSPITALIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterLocation()
    {
        $this->assertEquals('Encounter.Location', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterParticipant()
    {
        $this->assertEquals('Encounter.Participant', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIREncounterClass()
    {
        $this->assertEquals('EncounterClass', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_CLASS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREncounterClass', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_CLASS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIREncounterClassList()
    {
        $this->assertEquals('EncounterClass-list', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_CLASS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIREncounterClassList', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_CLASS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIREncounterState()
    {
        $this->assertEquals('EncounterState', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREncounterState', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIREncounterStateList()
    {
        $this->assertEquals('EncounterState-list', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_STATE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIREncounterStateList', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_STATE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIREventTiming()
    {
        $this->assertEquals('EventTiming', PHPFHIRConstants::TYPE_NAME_EVENT_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIREventTiming', PHPFHIRConstants::TYPE_CLASS_EVENT_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIREventTimingList()
    {
        $this->assertEquals('EventTiming-list', PHPFHIRConstants::TYPE_NAME_EVENT_TIMING_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIREventTimingList', PHPFHIRConstants::TYPE_CLASS_EVENT_TIMING_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRExposureType()
    {
        $this->assertEquals('ExposureType', PHPFHIRConstants::TYPE_NAME_EXPOSURE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExposureType', PHPFHIRConstants::TYPE_CLASS_EXPOSURE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRExposureTypeList()
    {
        $this->assertEquals('ExposureType-list', PHPFHIRConstants::TYPE_NAME_EXPOSURE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRExposureTypeList', PHPFHIRConstants::TYPE_CLASS_EXPOSURE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRExtension()
    {
        $this->assertEquals('Extension', PHPFHIRConstants::TYPE_NAME_EXTENSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension', PHPFHIRConstants::TYPE_CLASS_EXTENSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRExtensionContext()
    {
        $this->assertEquals('ExtensionContext', PHPFHIRConstants::TYPE_NAME_EXTENSION_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtensionContext', PHPFHIRConstants::TYPE_CLASS_EXTENSION_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRExtensionContextList()
    {
        $this->assertEquals('ExtensionContext-list', PHPFHIRConstants::TYPE_NAME_EXTENSION_CONTEXT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRExtensionContextList', PHPFHIRConstants::TYPE_CLASS_EXTENSION_CONTEXT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRFamilyHistory()
    {
        $this->assertEquals('FamilyHistory', PHPFHIRConstants::TYPE_NAME_FAMILY_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRFamilyHistory', PHPFHIRConstants::TYPE_CLASS_FAMILY_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRFamilyHistory_FHIRFamilyHistoryCondition()
    {
        $this->assertEquals('FamilyHistory.Condition', PHPFHIRConstants::TYPE_NAME_FAMILY_HISTORY_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryCondition', PHPFHIRConstants::TYPE_CLASS_FAMILY_HISTORY_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRFamilyHistory_FHIRFamilyHistoryRelation()
    {
        $this->assertEquals('FamilyHistory.Relation', PHPFHIRConstants::TYPE_NAME_FAMILY_HISTORY_DOT_RELATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRFamilyHistory\FHIRFamilyHistoryRelation', PHPFHIRConstants::TYPE_CLASS_FAMILY_HISTORY_DOT_RELATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRFilterOperator()
    {
        $this->assertEquals('FilterOperator', PHPFHIRConstants::TYPE_NAME_FILTER_OPERATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRFilterOperator', PHPFHIRConstants::TYPE_CLASS_FILTER_OPERATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRFilterOperatorList()
    {
        $this->assertEquals('FilterOperator-list', PHPFHIRConstants::TYPE_NAME_FILTER_OPERATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRFilterOperatorList', PHPFHIRConstants::TYPE_CLASS_FILTER_OPERATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRGroup()
    {
        $this->assertEquals('Group', PHPFHIRConstants::TYPE_NAME_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRGroup', PHPFHIRConstants::TYPE_CLASS_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupCharacteristic()
    {
        $this->assertEquals('Group.Characteristic', PHPFHIRConstants::TYPE_NAME_GROUP_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic', PHPFHIRConstants::TYPE_CLASS_GROUP_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRGroupType()
    {
        $this->assertEquals('GroupType', PHPFHIRConstants::TYPE_NAME_GROUP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRGroupType', PHPFHIRConstants::TYPE_CLASS_GROUP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRGroupTypeList()
    {
        $this->assertEquals('GroupType-list', PHPFHIRConstants::TYPE_NAME_GROUP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRGroupTypeList', PHPFHIRConstants::TYPE_CLASS_GROUP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRHierarchicalRelationshipType()
    {
        $this->assertEquals('HierarchicalRelationshipType', PHPFHIRConstants::TYPE_NAME_HIERARCHICAL_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHierarchicalRelationshipType', PHPFHIRConstants::TYPE_CLASS_HIERARCHICAL_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRHierarchicalRelationshipTypeList()
    {
        $this->assertEquals('HierarchicalRelationshipType-list', PHPFHIRConstants::TYPE_NAME_HIERARCHICAL_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRHierarchicalRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_HIERARCHICAL_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRHumanName()
    {
        $this->assertEquals('HumanName', PHPFHIRConstants::TYPE_NAME_HUMAN_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRHumanName', PHPFHIRConstants::TYPE_CLASS_HUMAN_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRId()
    {
        $this->assertEquals('id', PHPFHIRConstants::TYPE_NAME_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRId', PHPFHIRConstants::TYPE_CLASS_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRIdPrimitive()
    {
        $this->assertEquals('id-primitive', PHPFHIRConstants::TYPE_NAME_ID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive', PHPFHIRConstants::TYPE_CLASS_ID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRIdentifier()
    {
        $this->assertEquals('Identifier', PHPFHIRConstants::TYPE_NAME_IDENTIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier', PHPFHIRConstants::TYPE_CLASS_IDENTIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRIdentifierUse()
    {
        $this->assertEquals('IdentifierUse', PHPFHIRConstants::TYPE_NAME_IDENTIFIER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifierUse', PHPFHIRConstants::TYPE_CLASS_IDENTIFIER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRIdentifierUseList()
    {
        $this->assertEquals('IdentifierUse-list', PHPFHIRConstants::TYPE_NAME_IDENTIFIER_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRIdentifierUseList', PHPFHIRConstants::TYPE_CLASS_IDENTIFIER_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRImagingModality()
    {
        $this->assertEquals('ImagingModality', PHPFHIRConstants::TYPE_NAME_IMAGING_MODALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRImagingModality', PHPFHIRConstants::TYPE_CLASS_IMAGING_MODALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRImagingModalityList()
    {
        $this->assertEquals('ImagingModality-list', PHPFHIRConstants::TYPE_NAME_IMAGING_MODALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRImagingModalityList', PHPFHIRConstants::TYPE_CLASS_IMAGING_MODALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRImagingStudy()
    {
        $this->assertEquals('ImagingStudy', PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImagingStudy', PHPFHIRConstants::TYPE_CLASS_IMAGING_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudyInstance()
    {
        $this->assertEquals('ImagingStudy.Instance', PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance', PHPFHIRConstants::TYPE_CLASS_IMAGING_STUDY_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudySeries()
    {
        $this->assertEquals('ImagingStudy.Series', PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY_DOT_SERIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries', PHPFHIRConstants::TYPE_CLASS_IMAGING_STUDY_DOT_SERIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRImmunization()
    {
        $this->assertEquals('Immunization', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunization', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationExplanation()
    {
        $this->assertEquals('Immunization.Explanation', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_EXPLANATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_EXPLANATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationReaction()
    {
        $this->assertEquals('Immunization.Reaction', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationVaccinationProtocol()
    {
        $this->assertEquals('Immunization.VaccinationProtocol', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRImmunizationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRImmunizationRecommendation', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationDateCriterion()
    {
        $this->assertEquals('ImmunizationRecommendation.DateCriterion', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationProtocol()
    {
        $this->assertEquals('ImmunizationRecommendation.Protocol', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation.Recommendation', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRInstanceAvailability()
    {
        $this->assertEquals('InstanceAvailability', PHPFHIRConstants::TYPE_NAME_INSTANCE_AVAILABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstanceAvailability', PHPFHIRConstants::TYPE_CLASS_INSTANCE_AVAILABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRInstanceAvailabilityList()
    {
        $this->assertEquals('InstanceAvailability-list', PHPFHIRConstants::TYPE_NAME_INSTANCE_AVAILABILITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRInstanceAvailabilityList', PHPFHIRConstants::TYPE_CLASS_INSTANCE_AVAILABILITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRInstant()
    {
        $this->assertEquals('instant', PHPFHIRConstants::TYPE_NAME_INSTANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInstant', PHPFHIRConstants::TYPE_CLASS_INSTANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRInstantPrimitive()
    {
        $this->assertEquals('instant-primitive', PHPFHIRConstants::TYPE_NAME_INSTANT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRInstantPrimitive', PHPFHIRConstants::TYPE_CLASS_INSTANT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRInteger()
    {
        $this->assertEquals('integer', PHPFHIRConstants::TYPE_NAME_INTEGER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger', PHPFHIRConstants::TYPE_CLASS_INTEGER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRIntegerPrimitive()
    {
        $this->assertEquals('integer-primitive', PHPFHIRConstants::TYPE_NAME_INTEGER_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIntegerPrimitive', PHPFHIRConstants::TYPE_CLASS_INTEGER_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRIssueSeverity()
    {
        $this->assertEquals('IssueSeverity', PHPFHIRConstants::TYPE_NAME_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIssueSeverity', PHPFHIRConstants::TYPE_CLASS_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRIssueSeverityList()
    {
        $this->assertEquals('IssueSeverity-list', PHPFHIRConstants::TYPE_NAME_ISSUE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRIssueSeverityList', PHPFHIRConstants::TYPE_CLASS_ISSUE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRLinkType()
    {
        $this->assertEquals('LinkType', PHPFHIRConstants::TYPE_NAME_LINK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRLinkType', PHPFHIRConstants::TYPE_CLASS_LINK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRLinkTypeList()
    {
        $this->assertEquals('LinkType-list', PHPFHIRConstants::TYPE_NAME_LINK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRLinkTypeList', PHPFHIRConstants::TYPE_CLASS_LINK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRList()
    {
        $this->assertEquals('List', PHPFHIRConstants::TYPE_NAME_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRList', PHPFHIRConstants::TYPE_CLASS_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRList_FHIRListEntry()
    {
        $this->assertEquals('List.Entry', PHPFHIRConstants::TYPE_NAME_LIST_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry', PHPFHIRConstants::TYPE_CLASS_LIST_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRListMode()
    {
        $this->assertEquals('ListMode', PHPFHIRConstants::TYPE_NAME_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRListMode', PHPFHIRConstants::TYPE_CLASS_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRListModeList()
    {
        $this->assertEquals('ListMode-list', PHPFHIRConstants::TYPE_NAME_LIST_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRListModeList', PHPFHIRConstants::TYPE_CLASS_LIST_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRLocation()
    {
        $this->assertEquals('Location', PHPFHIRConstants::TYPE_NAME_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRLocation', PHPFHIRConstants::TYPE_CLASS_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRLocation_FHIRLocationPosition()
    {
        $this->assertEquals('Location.Position', PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition', PHPFHIRConstants::TYPE_CLASS_LOCATION_DOT_POSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRLocationMode()
    {
        $this->assertEquals('LocationMode', PHPFHIRConstants::TYPE_NAME_LOCATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRLocationMode', PHPFHIRConstants::TYPE_CLASS_LOCATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRLocationModeList()
    {
        $this->assertEquals('LocationMode-list', PHPFHIRConstants::TYPE_NAME_LOCATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRLocationModeList', PHPFHIRConstants::TYPE_CLASS_LOCATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRLocationStatus()
    {
        $this->assertEquals('LocationStatus', PHPFHIRConstants::TYPE_NAME_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRLocationStatus', PHPFHIRConstants::TYPE_CLASS_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRLocationStatusList()
    {
        $this->assertEquals('LocationStatus-list', PHPFHIRConstants::TYPE_NAME_LOCATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRLocationStatusList', PHPFHIRConstants::TYPE_CLASS_LOCATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRMedia()
    {
        $this->assertEquals('Media', PHPFHIRConstants::TYPE_NAME_MEDIA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedia', PHPFHIRConstants::TYPE_CLASS_MEDIA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRMediaType()
    {
        $this->assertEquals('MediaType', PHPFHIRConstants::TYPE_NAME_MEDIA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMediaType', PHPFHIRConstants::TYPE_CLASS_MEDIA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRMediaTypeList()
    {
        $this->assertEquals('MediaType-list', PHPFHIRConstants::TYPE_NAME_MEDIA_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRMediaTypeList', PHPFHIRConstants::TYPE_CLASS_MEDIA_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRMedication()
    {
        $this->assertEquals('Medication', PHPFHIRConstants::TYPE_NAME_MEDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedication', PHPFHIRConstants::TYPE_CLASS_MEDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationContent()
    {
        $this->assertEquals('Medication.Content', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationIngredient()
    {
        $this->assertEquals('Medication.Ingredient', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationPackage()
    {
        $this->assertEquals('Medication.Package', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_PACKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_PACKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationProduct()
    {
        $this->assertEquals('Medication.Product', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_PRODUCT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_PRODUCT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRMedicationAdministration()
    {
        $this->assertEquals('MedicationAdministration', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationAdministration', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedicationAdministration_FHIRMedicationAdministrationDosage()
    {
        $this->assertEquals('MedicationAdministration.Dosage', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRMedicationAdministrationStatus()
    {
        $this->assertEquals('MedicationAdministrationStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationAdministrationStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRMedicationAdministrationStatusList()
    {
        $this->assertEquals('MedicationAdministrationStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRMedicationDispense()
    {
        $this->assertEquals('MedicationDispense', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationDispense', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseDispense()
    {
        $this->assertEquals('MedicationDispense.Dispense', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDispense', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseDosage()
    {
        $this->assertEquals('MedicationDispense.Dosage', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosage', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseSubstitution()
    {
        $this->assertEquals('MedicationDispense.Substitution', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRMedicationDispenseStatus()
    {
        $this->assertEquals('MedicationDispenseStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationDispenseStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRMedicationDispenseStatusList()
    {
        $this->assertEquals('MedicationDispenseStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRMedicationDispenseStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRMedicationKind()
    {
        $this->assertEquals('MedicationKind', PHPFHIRConstants::TYPE_NAME_MEDICATION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationKind', PHPFHIRConstants::TYPE_CLASS_MEDICATION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRMedicationKindList()
    {
        $this->assertEquals('MedicationKind-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRMedicationKindList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRMedicationPrescription()
    {
        $this->assertEquals('MedicationPrescription', PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationPrescription', PHPFHIRConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedicationPrescription_FHIRMedicationPrescriptionDispense()
    {
        $this->assertEquals('MedicationPrescription.Dispense', PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDispense', PHPFHIRConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_DOT_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedicationPrescription_FHIRMedicationPrescriptionDosageInstruction()
    {
        $this->assertEquals('MedicationPrescription.DosageInstruction', PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_DOSAGE_INSTRUCTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionDosageInstruction', PHPFHIRConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_DOT_DOSAGE_INSTRUCTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedicationPrescription_FHIRMedicationPrescriptionSubstitution()
    {
        $this->assertEquals('MedicationPrescription.Substitution', PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationPrescription\FHIRMedicationPrescriptionSubstitution', PHPFHIRConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRMedicationPrescriptionStatus()
    {
        $this->assertEquals('MedicationPrescriptionStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMedicationPrescriptionStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRMedicationPrescriptionStatusList()
    {
        $this->assertEquals('MedicationPrescriptionStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_PRESCRIPTION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRMedicationPrescriptionStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_PRESCRIPTION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRMedicationStatement()
    {
        $this->assertEquals('MedicationStatement', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMedicationStatement', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMedicationStatement_FHIRMedicationStatementDosage()
    {
        $this->assertEquals('MedicationStatement.Dosage', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRMessageHeader()
    {
        $this->assertEquals('MessageHeader', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRMessageHeader', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderDestination()
    {
        $this->assertEquals('MessageHeader.Destination', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER_DOT_DESTINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_DESTINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderResponse()
    {
        $this->assertEquals('MessageHeader.Response', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderSource()
    {
        $this->assertEquals('MessageHeader.Source', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRMessageSignificanceCategory()
    {
        $this->assertEquals('MessageSignificanceCategory', PHPFHIRConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRMessageSignificanceCategory', PHPFHIRConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRMessageSignificanceCategoryList()
    {
        $this->assertEquals('MessageSignificanceCategory-list', PHPFHIRConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList', PHPFHIRConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRModality()
    {
        $this->assertEquals('Modality', PHPFHIRConstants::TYPE_NAME_MODALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRModality', PHPFHIRConstants::TYPE_CLASS_MODALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRModalityList()
    {
        $this->assertEquals('Modality-list', PHPFHIRConstants::TYPE_NAME_MODALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRModalityList', PHPFHIRConstants::TYPE_CLASS_MODALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRQuantity_FHIRMoney()
    {
        $this->assertEquals('Money', PHPFHIRConstants::TYPE_NAME_MONEY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity\FHIRMoney', PHPFHIRConstants::TYPE_CLASS_MONEY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRNameUse()
    {
        $this->assertEquals('NameUse', PHPFHIRConstants::TYPE_NAME_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNameUse', PHPFHIRConstants::TYPE_CLASS_NAME_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRNameUseList()
    {
        $this->assertEquals('NameUse-list', PHPFHIRConstants::TYPE_NAME_NAME_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRNameUseList', PHPFHIRConstants::TYPE_CLASS_NAME_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRNarrative()
    {
        $this->assertEquals('Narrative', PHPFHIRConstants::TYPE_NAME_NARRATIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrative', PHPFHIRConstants::TYPE_CLASS_NARRATIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRNarrativeStatus()
    {
        $this->assertEquals('NarrativeStatus', PHPFHIRConstants::TYPE_NAME_NARRATIVE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRNarrativeStatus', PHPFHIRConstants::TYPE_CLASS_NARRATIVE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRNarrativeStatusList()
    {
        $this->assertEquals('NarrativeStatus-list', PHPFHIRConstants::TYPE_NAME_NARRATIVE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRNarrativeStatusList', PHPFHIRConstants::TYPE_CLASS_NARRATIVE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRObservation()
    {
        $this->assertEquals('Observation', PHPFHIRConstants::TYPE_NAME_OBSERVATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRObservation', PHPFHIRConstants::TYPE_CLASS_OBSERVATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationReferenceRange()
    {
        $this->assertEquals('Observation.ReferenceRange', PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_REFERENCE_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_DOT_REFERENCE_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationRelated()
    {
        $this->assertEquals('Observation.Related', PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRObservationRelationshipType()
    {
        $this->assertEquals('ObservationRelationshipType', PHPFHIRConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationRelationshipType', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRObservationRelationshipTypeList()
    {
        $this->assertEquals('ObservationRelationshipType-list', PHPFHIRConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRObservationRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRObservationReliability()
    {
        $this->assertEquals('ObservationReliability', PHPFHIRConstants::TYPE_NAME_OBSERVATION_RELIABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationReliability', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_RELIABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRObservationReliabilityList()
    {
        $this->assertEquals('ObservationReliability-list', PHPFHIRConstants::TYPE_NAME_OBSERVATION_RELIABILITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRObservationReliabilityList', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_RELIABILITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRObservationStatus()
    {
        $this->assertEquals('ObservationStatus', PHPFHIRConstants::TYPE_NAME_OBSERVATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRObservationStatus', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRObservationStatusList()
    {
        $this->assertEquals('ObservationStatus-list', PHPFHIRConstants::TYPE_NAME_OBSERVATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRObservationStatusList', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIROid()
    {
        $this->assertEquals('oid', PHPFHIRConstants::TYPE_NAME_OID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROid', PHPFHIRConstants::TYPE_CLASS_OID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIROidPrimitive()
    {
        $this->assertEquals('oid-primitive', PHPFHIRConstants::TYPE_NAME_OID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIROidPrimitive', PHPFHIRConstants::TYPE_CLASS_OID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIROperationOutcome()
    {
        $this->assertEquals('OperationOutcome', PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROperationOutcome', PHPFHIRConstants::TYPE_CLASS_OPERATION_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIROperationOutcome_FHIROperationOutcomeIssue()
    {
        $this->assertEquals('OperationOutcome.Issue', PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue', PHPFHIRConstants::TYPE_CLASS_OPERATION_OUTCOME_DOT_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIROrder()
    {
        $this->assertEquals('Order', PHPFHIRConstants::TYPE_NAME_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrder', PHPFHIRConstants::TYPE_CLASS_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIROrder_FHIROrderWhen()
    {
        $this->assertEquals('Order.When', PHPFHIRConstants::TYPE_NAME_ORDER_DOT_WHEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROrder\FHIROrderWhen', PHPFHIRConstants::TYPE_CLASS_ORDER_DOT_WHEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIROrderOutcomeStatus()
    {
        $this->assertEquals('OrderOutcomeStatus', PHPFHIRConstants::TYPE_NAME_ORDER_OUTCOME_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIROrderOutcomeStatus', PHPFHIRConstants::TYPE_CLASS_ORDER_OUTCOME_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIROrderOutcomeStatusList()
    {
        $this->assertEquals('OrderOutcomeStatus-list', PHPFHIRConstants::TYPE_NAME_ORDER_OUTCOME_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIROrderOutcomeStatusList', PHPFHIRConstants::TYPE_CLASS_ORDER_OUTCOME_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIROrderResponse()
    {
        $this->assertEquals('OrderResponse', PHPFHIRConstants::TYPE_NAME_ORDER_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrderResponse', PHPFHIRConstants::TYPE_CLASS_ORDER_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIROrganization()
    {
        $this->assertEquals('Organization', PHPFHIRConstants::TYPE_NAME_ORGANIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROrganization', PHPFHIRConstants::TYPE_CLASS_ORGANIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIROrganization_FHIROrganizationContact()
    {
        $this->assertEquals('Organization.Contact', PHPFHIRConstants::TYPE_NAME_ORGANIZATION_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact', PHPFHIRConstants::TYPE_CLASS_ORGANIZATION_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIROther()
    {
        $this->assertEquals('Other', PHPFHIRConstants::TYPE_NAME_OTHER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIROther', PHPFHIRConstants::TYPE_CLASS_OTHER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRPatient()
    {
        $this->assertEquals('Patient', PHPFHIRConstants::TYPE_NAME_PATIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPatient', PHPFHIRConstants::TYPE_CLASS_PATIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientAnimal()
    {
        $this->assertEquals('Patient.Animal', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_ANIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_ANIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientContact()
    {
        $this->assertEquals('Patient.Contact', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientLink()
    {
        $this->assertEquals('Patient.Link', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRPeriod()
    {
        $this->assertEquals('Period', PHPFHIRConstants::TYPE_NAME_PERIOD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod', PHPFHIRConstants::TYPE_CLASS_PERIOD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRPractitioner()
    {
        $this->assertEquals('Practitioner', PHPFHIRConstants::TYPE_NAME_PRACTITIONER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRPractitioner', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRPractitioner_FHIRPractitionerQualification()
    {
        $this->assertEquals('Practitioner.Qualification', PHPFHIRConstants::TYPE_NAME_PRACTITIONER_DOT_QUALIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER_DOT_QUALIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRProcedure()
    {
        $this->assertEquals('Procedure', PHPFHIRConstants::TYPE_NAME_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProcedure', PHPFHIRConstants::TYPE_CLASS_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedurePerformer()
    {
        $this->assertEquals('Procedure.Performer', PHPFHIRConstants::TYPE_NAME_PROCEDURE_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedureRelatedItem()
    {
        $this->assertEquals('Procedure.RelatedItem', PHPFHIRConstants::TYPE_NAME_PROCEDURE_DOT_RELATED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureRelatedItem', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_DOT_RELATED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRProcedureRelationshipType()
    {
        $this->assertEquals('ProcedureRelationshipType', PHPFHIRConstants::TYPE_NAME_PROCEDURE_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRProcedureRelationshipType', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRProcedureRelationshipTypeList()
    {
        $this->assertEquals('ProcedureRelationshipType-list', PHPFHIRConstants::TYPE_NAME_PROCEDURE_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRProcedureRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRProfile()
    {
        $this->assertEquals('Profile', PHPFHIRConstants::TYPE_NAME_PROFILE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProfile', PHPFHIRConstants::TYPE_CLASS_PROFILE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileBinding()
    {
        $this->assertEquals('Profile.Binding', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileBinding', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileConstraint()
    {
        $this->assertEquals('Profile.Constraint', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_CONSTRAINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileConstraint', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_CONSTRAINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileDefinition()
    {
        $this->assertEquals('Profile.Definition', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileDefinition', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileElement()
    {
        $this->assertEquals('Profile.Element', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileElement', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileExtensionDefn()
    {
        $this->assertEquals('Profile.ExtensionDefn', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_EXTENSION_DEFN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileExtensionDefn', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_EXTENSION_DEFN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileMapping()
    {
        $this->assertEquals('Profile.Mapping', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileMapping1()
    {
        $this->assertEquals('Profile.Mapping1', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_MAPPING_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileMapping1', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_MAPPING_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileQuery()
    {
        $this->assertEquals('Profile.Query', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_QUERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileQuery', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_QUERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileSearchParam()
    {
        $this->assertEquals('Profile.SearchParam', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_SEARCH_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSearchParam', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_SEARCH_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileSlicing()
    {
        $this->assertEquals('Profile.Slicing', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_SLICING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileSlicing', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_SLICING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileStructure()
    {
        $this->assertEquals('Profile.Structure', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_STRUCTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileStructure', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_STRUCTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProfile_FHIRProfileType()
    {
        $this->assertEquals('Profile.Type', PHPFHIRConstants::TYPE_NAME_PROFILE_DOT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProfile\FHIRProfileType', PHPFHIRConstants::TYPE_CLASS_PROFILE_DOT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRPropertyRepresentation()
    {
        $this->assertEquals('PropertyRepresentation', PHPFHIRConstants::TYPE_NAME_PROPERTY_REPRESENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPropertyRepresentation', PHPFHIRConstants::TYPE_CLASS_PROPERTY_REPRESENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRPropertyRepresentationList()
    {
        $this->assertEquals('PropertyRepresentation-list', PHPFHIRConstants::TYPE_NAME_PROPERTY_REPRESENTATION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRPropertyRepresentationList', PHPFHIRConstants::TYPE_CLASS_PROPERTY_REPRESENTATION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRProvenance()
    {
        $this->assertEquals('Provenance', PHPFHIRConstants::TYPE_NAME_PROVENANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRProvenance', PHPFHIRConstants::TYPE_CLASS_PROVENANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceAgent()
    {
        $this->assertEquals('Provenance.Agent', PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceEntity()
    {
        $this->assertEquals('Provenance.Entity', PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_DOT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRProvenanceEntityRole()
    {
        $this->assertEquals('ProvenanceEntityRole', PHPFHIRConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRProvenanceEntityRole', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRProvenanceEntityRoleList()
    {
        $this->assertEquals('ProvenanceEntityRole-list', PHPFHIRConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRProvenanceEntityRoleList', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRQuantity()
    {
        $this->assertEquals('Quantity', PHPFHIRConstants::TYPE_NAME_QUANTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantity', PHPFHIRConstants::TYPE_CLASS_QUANTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRQuantityCompararator()
    {
        $this->assertEquals('QuantityCompararator', PHPFHIRConstants::TYPE_NAME_QUANTITY_COMPARARATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuantityCompararator', PHPFHIRConstants::TYPE_CLASS_QUANTITY_COMPARARATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRQuantityCompararatorList()
    {
        $this->assertEquals('QuantityCompararator-list', PHPFHIRConstants::TYPE_NAME_QUANTITY_COMPARARATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRQuantityCompararatorList', PHPFHIRConstants::TYPE_CLASS_QUANTITY_COMPARARATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRQuery()
    {
        $this->assertEquals('Query', PHPFHIRConstants::TYPE_NAME_QUERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuery', PHPFHIRConstants::TYPE_CLASS_QUERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRQuery_FHIRQueryResponse()
    {
        $this->assertEquals('Query.Response', PHPFHIRConstants::TYPE_NAME_QUERY_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuery\FHIRQueryResponse', PHPFHIRConstants::TYPE_CLASS_QUERY_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRQueryOutcome()
    {
        $this->assertEquals('QueryOutcome', PHPFHIRConstants::TYPE_NAME_QUERY_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQueryOutcome', PHPFHIRConstants::TYPE_CLASS_QUERY_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRQueryOutcomeList()
    {
        $this->assertEquals('QueryOutcome-list', PHPFHIRConstants::TYPE_NAME_QUERY_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRQueryOutcomeList', PHPFHIRConstants::TYPE_CLASS_QUERY_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRQuestionnaire()
    {
        $this->assertEquals('Questionnaire', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRQuestionnaire', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireGroup()
    {
        $this->assertEquals('Questionnaire.Group', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireQuestion()
    {
        $this->assertEquals('Questionnaire.Question', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_QUESTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRQuestionnaireStatus()
    {
        $this->assertEquals('QuestionnaireStatus', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRQuestionnaireStatus', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRQuestionnaireStatusList()
    {
        $this->assertEquals('QuestionnaireStatus-list', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRQuestionnaireStatusList', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRRange()
    {
        $this->assertEquals('Range', PHPFHIRConstants::TYPE_NAME_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRange', PHPFHIRConstants::TYPE_CLASS_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRRatio()
    {
        $this->assertEquals('Ratio', PHPFHIRConstants::TYPE_NAME_RATIO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRatio', PHPFHIRConstants::TYPE_CLASS_RATIO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRReactionSeverity()
    {
        $this->assertEquals('ReactionSeverity', PHPFHIRConstants::TYPE_NAME_REACTION_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRReactionSeverity', PHPFHIRConstants::TYPE_CLASS_REACTION_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRReactionSeverityList()
    {
        $this->assertEquals('ReactionSeverity-list', PHPFHIRConstants::TYPE_NAME_REACTION_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRReactionSeverityList', PHPFHIRConstants::TYPE_CLASS_REACTION_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRRelatedPerson()
    {
        $this->assertEquals('RelatedPerson', PHPFHIRConstants::TYPE_NAME_RELATED_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRRelatedPerson', PHPFHIRConstants::TYPE_CLASS_RELATED_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource()
    {
        $this->assertEquals('Resource', PHPFHIRConstants::TYPE_NAME_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource', PHPFHIRConstants::TYPE_CLASS_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRResourceInline()
    {
        $this->assertEquals('Resource.Inline', PHPFHIRConstants::TYPE_NAME_RESOURCE_DOT_INLINE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRResourceInline', PHPFHIRConstants::TYPE_CLASS_RESOURCE_DOT_INLINE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRResourceType_FHIRResourceNamesPlusBinary()
    {
        $this->assertEquals('ResourceNamesPlusBinary', PHPFHIRConstants::TYPE_NAME_RESOURCE_NAMES_PLUS_BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRResourceType\FHIRResourceNamesPlusBinary', PHPFHIRConstants::TYPE_CLASS_RESOURCE_NAMES_PLUS_BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRResourceProfileStatus()
    {
        $this->assertEquals('ResourceProfileStatus', PHPFHIRConstants::TYPE_NAME_RESOURCE_PROFILE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceProfileStatus', PHPFHIRConstants::TYPE_CLASS_RESOURCE_PROFILE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRResourceProfileStatusList()
    {
        $this->assertEquals('ResourceProfileStatus-list', PHPFHIRConstants::TYPE_NAME_RESOURCE_PROFILE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRResourceProfileStatusList', PHPFHIRConstants::TYPE_CLASS_RESOURCE_PROFILE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRResourceReference()
    {
        $this->assertEquals('ResourceReference', PHPFHIRConstants::TYPE_NAME_RESOURCE_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference', PHPFHIRConstants::TYPE_CLASS_RESOURCE_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRResourceType()
    {
        $this->assertEquals('ResourceType', PHPFHIRConstants::TYPE_NAME_RESOURCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRResourceType', PHPFHIRConstants::TYPE_CLASS_RESOURCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRResponseType()
    {
        $this->assertEquals('ResponseType', PHPFHIRConstants::TYPE_NAME_RESPONSE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResponseType', PHPFHIRConstants::TYPE_CLASS_RESPONSE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRResponseTypeList()
    {
        $this->assertEquals('ResponseType-list', PHPFHIRConstants::TYPE_NAME_RESPONSE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRResponseTypeList', PHPFHIRConstants::TYPE_CLASS_RESPONSE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRRestfulConformanceMode()
    {
        $this->assertEquals('RestfulConformanceMode', PHPFHIRConstants::TYPE_NAME_RESTFUL_CONFORMANCE_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulConformanceMode', PHPFHIRConstants::TYPE_CLASS_RESTFUL_CONFORMANCE_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRRestfulConformanceModeList()
    {
        $this->assertEquals('RestfulConformanceMode-list', PHPFHIRConstants::TYPE_NAME_RESTFUL_CONFORMANCE_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRRestfulConformanceModeList', PHPFHIRConstants::TYPE_CLASS_RESTFUL_CONFORMANCE_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRRestfulOperationSystem()
    {
        $this->assertEquals('RestfulOperationSystem', PHPFHIRConstants::TYPE_NAME_RESTFUL_OPERATION_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulOperationSystem', PHPFHIRConstants::TYPE_CLASS_RESTFUL_OPERATION_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRRestfulOperationSystemList()
    {
        $this->assertEquals('RestfulOperationSystem-list', PHPFHIRConstants::TYPE_NAME_RESTFUL_OPERATION_SYSTEM_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRRestfulOperationSystemList', PHPFHIRConstants::TYPE_CLASS_RESTFUL_OPERATION_SYSTEM_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRRestfulOperationType()
    {
        $this->assertEquals('RestfulOperationType', PHPFHIRConstants::TYPE_NAME_RESTFUL_OPERATION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRRestfulOperationType', PHPFHIRConstants::TYPE_CLASS_RESTFUL_OPERATION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRRestfulOperationTypeList()
    {
        $this->assertEquals('RestfulOperationType-list', PHPFHIRConstants::TYPE_NAME_RESTFUL_OPERATION_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRRestfulOperationTypeList', PHPFHIRConstants::TYPE_CLASS_RESTFUL_OPERATION_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSampledData()
    {
        $this->assertEquals('SampledData', PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledData', PHPFHIRConstants::TYPE_CLASS_SAMPLED_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSampledDataDataType()
    {
        $this->assertEquals('SampledDataDataType', PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSampledDataDataType', PHPFHIRConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRSampledDataDataTypePrimitive()
    {
        $this->assertEquals('SampledDataDataType-primitive', PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRSampledDataDataTypePrimitive', PHPFHIRConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSchedule()
    {
        $this->assertEquals('Schedule', PHPFHIRConstants::TYPE_NAME_SCHEDULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule', PHPFHIRConstants::TYPE_CLASS_SCHEDULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSchedule_FHIRScheduleRepeat()
    {
        $this->assertEquals('Schedule.Repeat', PHPFHIRConstants::TYPE_NAME_SCHEDULE_DOT_REPEAT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSchedule\FHIRScheduleRepeat', PHPFHIRConstants::TYPE_CLASS_SCHEDULE_DOT_REPEAT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRDecimal_FHIRScore()
    {
        $this->assertEquals('score', PHPFHIRConstants::TYPE_NAME_SCORE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDecimal\FHIRScore', PHPFHIRConstants::TYPE_CLASS_SCORE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSearchParamType()
    {
        $this->assertEquals('SearchParamType', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSearchParamType', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSearchParamTypeList()
    {
        $this->assertEquals('SearchParamType-list', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSearchParamTypeList', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRSecurityEvent()
    {
        $this->assertEquals('SecurityEvent', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSecurityEvent', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventDetail()
    {
        $this->assertEquals('SecurityEvent.Detail', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventDetail', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventEvent()
    {
        $this->assertEquals('SecurityEvent.Event', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventEvent', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventNetwork()
    {
        $this->assertEquals('SecurityEvent.Network', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_NETWORK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventNetwork', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_DOT_NETWORK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventObject()
    {
        $this->assertEquals('SecurityEvent.Object', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_OBJECT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventObject', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_DOT_OBJECT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventParticipant()
    {
        $this->assertEquals('SecurityEvent.Participant', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventParticipant', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSecurityEvent_FHIRSecurityEventSource()
    {
        $this->assertEquals('SecurityEvent.Source', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSecurityEvent\FHIRSecurityEventSource', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSecurityEventAction()
    {
        $this->assertEquals('SecurityEventAction', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventAction', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSecurityEventActionList()
    {
        $this->assertEquals('SecurityEventAction-list', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_ACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSecurityEventActionList', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_ACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSecurityEventObjectLifecycle()
    {
        $this->assertEquals('SecurityEventObjectLifecycle', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_LIFECYCLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectLifecycle', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_LIFECYCLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSecurityEventObjectLifecycleList()
    {
        $this->assertEquals('SecurityEventObjectLifecycle-list', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_LIFECYCLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSecurityEventObjectLifecycleList', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_LIFECYCLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSecurityEventObjectRole()
    {
        $this->assertEquals('SecurityEventObjectRole', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectRole', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSecurityEventObjectRoleList()
    {
        $this->assertEquals('SecurityEventObjectRole-list', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_ROLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSecurityEventObjectRoleList', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_ROLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSecurityEventObjectType()
    {
        $this->assertEquals('SecurityEventObjectType', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventObjectType', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSecurityEventObjectTypeList()
    {
        $this->assertEquals('SecurityEventObjectType-list', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_OBJECT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSecurityEventObjectTypeList', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_OBJECT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSecurityEventOutcome()
    {
        $this->assertEquals('SecurityEventOutcome', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventOutcome', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSecurityEventOutcomeList()
    {
        $this->assertEquals('SecurityEventOutcome-list', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSecurityEventOutcomeList', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSecurityEventParticipantNetworkType()
    {
        $this->assertEquals('SecurityEventParticipantNetworkType', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSecurityEventParticipantNetworkType', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSecurityEventParticipantNetworkTypeList()
    {
        $this->assertEquals('SecurityEventParticipantNetworkType-list', PHPFHIRConstants::TYPE_NAME_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSecurityEventParticipantNetworkTypeList', PHPFHIRConstants::TYPE_CLASS_SECURITY_EVENT_PARTICIPANT_NETWORK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSensitivityStatus()
    {
        $this->assertEquals('SensitivityStatus', PHPFHIRConstants::TYPE_NAME_SENSITIVITY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityStatus', PHPFHIRConstants::TYPE_CLASS_SENSITIVITY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSensitivityStatusList()
    {
        $this->assertEquals('SensitivityStatus-list', PHPFHIRConstants::TYPE_NAME_SENSITIVITY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSensitivityStatusList', PHPFHIRConstants::TYPE_CLASS_SENSITIVITY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSensitivityType()
    {
        $this->assertEquals('SensitivityType', PHPFHIRConstants::TYPE_NAME_SENSITIVITY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSensitivityType', PHPFHIRConstants::TYPE_CLASS_SENSITIVITY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSensitivityTypeList()
    {
        $this->assertEquals('SensitivityType-list', PHPFHIRConstants::TYPE_NAME_SENSITIVITY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSensitivityTypeList', PHPFHIRConstants::TYPE_CLASS_SENSITIVITY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSlicingRules()
    {
        $this->assertEquals('SlicingRules', PHPFHIRConstants::TYPE_NAME_SLICING_RULES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSlicingRules', PHPFHIRConstants::TYPE_CLASS_SLICING_RULES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSlicingRulesList()
    {
        $this->assertEquals('SlicingRules-list', PHPFHIRConstants::TYPE_NAME_SLICING_RULES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSlicingRulesList', PHPFHIRConstants::TYPE_CLASS_SLICING_RULES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRSpecimen()
    {
        $this->assertEquals('Specimen', PHPFHIRConstants::TYPE_NAME_SPECIMEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSpecimen', PHPFHIRConstants::TYPE_CLASS_SPECIMEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenCollection()
    {
        $this->assertEquals('Specimen.Collection', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_COLLECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenContainer()
    {
        $this->assertEquals('Specimen.Container', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenSource()
    {
        $this->assertEquals('Specimen.Source', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenSource', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenTreatment()
    {
        $this->assertEquals('Specimen.Treatment', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_TREATMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_TREATMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRString()
    {
        $this->assertEquals('string', PHPFHIRConstants::TYPE_NAME_STRING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString', PHPFHIRConstants::TYPE_CLASS_STRING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive()
    {
        $this->assertEquals('string-primitive', PHPFHIRConstants::TYPE_NAME_STRING_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive', PHPFHIRConstants::TYPE_CLASS_STRING_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRSubstance()
    {
        $this->assertEquals('Substance', PHPFHIRConstants::TYPE_NAME_SUBSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSubstance', PHPFHIRConstants::TYPE_CLASS_SUBSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceIngredient()
    {
        $this->assertEquals('Substance.Ingredient', PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient', PHPFHIRConstants::TYPE_CLASS_SUBSTANCE_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceInstance()
    {
        $this->assertEquals('Substance.Instance', PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance', PHPFHIRConstants::TYPE_CLASS_SUBSTANCE_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRSupply()
    {
        $this->assertEquals('Supply', PHPFHIRConstants::TYPE_NAME_SUPPLY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRSupply', PHPFHIRConstants::TYPE_CLASS_SUPPLY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRSupply_FHIRSupplyDispense()
    {
        $this->assertEquals('Supply.Dispense', PHPFHIRConstants::TYPE_NAME_SUPPLY_DOT_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRSupply\FHIRSupplyDispense', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DOT_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSupplyDispenseStatus()
    {
        $this->assertEquals('SupplyDispenseStatus', PHPFHIRConstants::TYPE_NAME_SUPPLY_DISPENSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSupplyDispenseStatus', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DISPENSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSupplyDispenseStatusList()
    {
        $this->assertEquals('SupplyDispenseStatus-list', PHPFHIRConstants::TYPE_NAME_SUPPLY_DISPENSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSupplyDispenseStatusList', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DISPENSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRSupplyStatus()
    {
        $this->assertEquals('SupplyStatus', PHPFHIRConstants::TYPE_NAME_SUPPLY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRSupplyStatus', PHPFHIRConstants::TYPE_CLASS_SUPPLY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRSupplyStatusList()
    {
        $this->assertEquals('SupplyStatus-list', PHPFHIRConstants::TYPE_NAME_SUPPLY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRSupplyStatusList', PHPFHIRConstants::TYPE_CLASS_SUPPLY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRInteger_FHIRTotalResults()
    {
        $this->assertEquals('totalResults', PHPFHIRConstants::TYPE_NAME_TOTAL_RESULTS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRInteger\FHIRTotalResults', PHPFHIRConstants::TYPE_CLASS_TOTAL_RESULTS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRUnitsOfTime()
    {
        $this->assertEquals('UnitsOfTime', PHPFHIRConstants::TYPE_NAME_UNITS_OF_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUnitsOfTime', PHPFHIRConstants::TYPE_CLASS_UNITS_OF_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRUnitsOfTimeList()
    {
        $this->assertEquals('UnitsOfTime-list', PHPFHIRConstants::TYPE_NAME_UNITS_OF_TIME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRUnitsOfTimeList', PHPFHIRConstants::TYPE_CLASS_UNITS_OF_TIME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRUri()
    {
        $this->assertEquals('uri', PHPFHIRConstants::TYPE_NAME_URI);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUri', PHPFHIRConstants::TYPE_CLASS_URI);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRUriPrimitive()
    {
        $this->assertEquals('uri-primitive', PHPFHIRConstants::TYPE_NAME_URI_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUriPrimitive', PHPFHIRConstants::TYPE_CLASS_URI_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRUuid()
    {
        $this->assertEquals('uuid', PHPFHIRConstants::TYPE_NAME_UUID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRUuid', PHPFHIRConstants::TYPE_CLASS_UUID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRUuidPrimitive()
    {
        $this->assertEquals('uuid-primitive', PHPFHIRConstants::TYPE_NAME_UUID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRUuidPrimitive', PHPFHIRConstants::TYPE_CLASS_UUID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRResource_FHIRValueSet()
    {
        $this->assertEquals('ValueSet', PHPFHIRConstants::TYPE_NAME_VALUE_SET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRValueSet', PHPFHIRConstants::TYPE_CLASS_VALUE_SET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetCompose()
    {
        $this->assertEquals('ValueSet.Compose', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_COMPOSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetConcept()
    {
        $this->assertEquals('ValueSet.Concept', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetContains()
    {
        $this->assertEquals('ValueSet.Contains', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONTAINS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_CONTAINS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetDefine()
    {
        $this->assertEquals('ValueSet.Define', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_DEFINE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDefine', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_DEFINE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetExpansion()
    {
        $this->assertEquals('ValueSet.Expansion', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_EXPANSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetFilter()
    {
        $this->assertEquals('ValueSet.Filter', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetInclude()
    {
        $this->assertEquals('ValueSet.Include', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_INCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRElement_FHIRValueSetStatus()
    {
        $this->assertEquals('ValueSetStatus', PHPFHIRConstants::TYPE_NAME_VALUE_SET_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRValueSetStatus', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRStringPrimitive_FHIRValueSetStatusList()
    {
        $this->assertEquals('ValueSetStatus-list', PHPFHIRConstants::TYPE_NAME_VALUE_SET_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRStringPrimitive\FHIRValueSetStatusList', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU1_FHIRIdPrimitive_FHIRXmlIdRef()
    {
        $this->assertEquals('xmlIdRef', PHPFHIRConstants::TYPE_NAME_XML_ID_REF);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive\FHIRXmlIdRef', PHPFHIRConstants::TYPE_CLASS_XML_ID_REF);
    }

}
