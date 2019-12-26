<?php

namespace DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTests;

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
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use PHPUnit\Framework\TestCase;

/**
 * Class PHPFHIRConstantsTest
 * @package \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTests
 */
class PHPFHIRConstantsTest extends TestCase
{
    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRAccount()
    {
        $this->assertEquals('Account', PHPFHIRConstants::TYPE_NAME_ACCOUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAccount', PHPFHIRConstants::TYPE_CLASS_ACCOUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAccount_FHIRAccountCoverage()
    {
        $this->assertEquals('Account.Coverage', PHPFHIRConstants::TYPE_NAME_ACCOUNT_DOT_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage', PHPFHIRConstants::TYPE_CLASS_ACCOUNT_DOT_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAccount_FHIRAccountGuarantor()
    {
        $this->assertEquals('Account.Guarantor', PHPFHIRConstants::TYPE_NAME_ACCOUNT_DOT_GUARANTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor', PHPFHIRConstants::TYPE_CLASS_ACCOUNT_DOT_GUARANTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAccountStatus()
    {
        $this->assertEquals('AccountStatus', PHPFHIRConstants::TYPE_NAME_ACCOUNT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAccountStatus', PHPFHIRConstants::TYPE_CLASS_ACCOUNT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAccountStatusList()
    {
        $this->assertEquals('AccountStatus-list', PHPFHIRConstants::TYPE_NAME_ACCOUNT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAccountStatusList', PHPFHIRConstants::TYPE_CLASS_ACCOUNT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRActionCardinalityBehavior()
    {
        $this->assertEquals('ActionCardinalityBehavior', PHPFHIRConstants::TYPE_NAME_ACTION_CARDINALITY_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionCardinalityBehavior', PHPFHIRConstants::TYPE_CLASS_ACTION_CARDINALITY_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRActionCardinalityBehaviorList()
    {
        $this->assertEquals('ActionCardinalityBehavior-list', PHPFHIRConstants::TYPE_NAME_ACTION_CARDINALITY_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRActionCardinalityBehaviorList', PHPFHIRConstants::TYPE_CLASS_ACTION_CARDINALITY_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRActionConditionKind()
    {
        $this->assertEquals('ActionConditionKind', PHPFHIRConstants::TYPE_NAME_ACTION_CONDITION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionConditionKind', PHPFHIRConstants::TYPE_CLASS_ACTION_CONDITION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRActionConditionKindList()
    {
        $this->assertEquals('ActionConditionKind-list', PHPFHIRConstants::TYPE_NAME_ACTION_CONDITION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRActionConditionKindList', PHPFHIRConstants::TYPE_CLASS_ACTION_CONDITION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRActionGroupingBehavior()
    {
        $this->assertEquals('ActionGroupingBehavior', PHPFHIRConstants::TYPE_NAME_ACTION_GROUPING_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionGroupingBehavior', PHPFHIRConstants::TYPE_CLASS_ACTION_GROUPING_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRActionGroupingBehaviorList()
    {
        $this->assertEquals('ActionGroupingBehavior-list', PHPFHIRConstants::TYPE_NAME_ACTION_GROUPING_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRActionGroupingBehaviorList', PHPFHIRConstants::TYPE_CLASS_ACTION_GROUPING_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRActionList()
    {
        $this->assertEquals('ActionList', PHPFHIRConstants::TYPE_NAME_ACTION_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionList', PHPFHIRConstants::TYPE_CLASS_ACTION_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRActionListList()
    {
        $this->assertEquals('ActionList-list', PHPFHIRConstants::TYPE_NAME_ACTION_LIST_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRActionListList', PHPFHIRConstants::TYPE_CLASS_ACTION_LIST_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRActionParticipantType()
    {
        $this->assertEquals('ActionParticipantType', PHPFHIRConstants::TYPE_NAME_ACTION_PARTICIPANT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionParticipantType', PHPFHIRConstants::TYPE_CLASS_ACTION_PARTICIPANT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRActionParticipantTypeList()
    {
        $this->assertEquals('ActionParticipantType-list', PHPFHIRConstants::TYPE_NAME_ACTION_PARTICIPANT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRActionParticipantTypeList', PHPFHIRConstants::TYPE_CLASS_ACTION_PARTICIPANT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRActionPrecheckBehavior()
    {
        $this->assertEquals('ActionPrecheckBehavior', PHPFHIRConstants::TYPE_NAME_ACTION_PRECHECK_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionPrecheckBehavior', PHPFHIRConstants::TYPE_CLASS_ACTION_PRECHECK_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRActionPrecheckBehaviorList()
    {
        $this->assertEquals('ActionPrecheckBehavior-list', PHPFHIRConstants::TYPE_NAME_ACTION_PRECHECK_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRActionPrecheckBehaviorList', PHPFHIRConstants::TYPE_CLASS_ACTION_PRECHECK_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRActionRelationshipType()
    {
        $this->assertEquals('ActionRelationshipType', PHPFHIRConstants::TYPE_NAME_ACTION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRelationshipType', PHPFHIRConstants::TYPE_CLASS_ACTION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRActionRelationshipTypeList()
    {
        $this->assertEquals('ActionRelationshipType-list', PHPFHIRConstants::TYPE_NAME_ACTION_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRActionRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_ACTION_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRActionRequiredBehavior()
    {
        $this->assertEquals('ActionRequiredBehavior', PHPFHIRConstants::TYPE_NAME_ACTION_REQUIRED_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionRequiredBehavior', PHPFHIRConstants::TYPE_CLASS_ACTION_REQUIRED_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRActionRequiredBehaviorList()
    {
        $this->assertEquals('ActionRequiredBehavior-list', PHPFHIRConstants::TYPE_NAME_ACTION_REQUIRED_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRActionRequiredBehaviorList', PHPFHIRConstants::TYPE_CLASS_ACTION_REQUIRED_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRActionSelectionBehavior()
    {
        $this->assertEquals('ActionSelectionBehavior', PHPFHIRConstants::TYPE_NAME_ACTION_SELECTION_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRActionSelectionBehavior', PHPFHIRConstants::TYPE_CLASS_ACTION_SELECTION_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRActionSelectionBehaviorList()
    {
        $this->assertEquals('ActionSelectionBehavior-list', PHPFHIRConstants::TYPE_NAME_ACTION_SELECTION_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRActionSelectionBehaviorList', PHPFHIRConstants::TYPE_CLASS_ACTION_SELECTION_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRActivityDefinition()
    {
        $this->assertEquals('ActivityDefinition', PHPFHIRConstants::TYPE_NAME_ACTIVITY_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRActivityDefinition', PHPFHIRConstants::TYPE_CLASS_ACTIVITY_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRActivityDefinition_FHIRActivityDefinitionDynamicValue()
    {
        $this->assertEquals('ActivityDefinition.DynamicValue', PHPFHIRConstants::TYPE_NAME_ACTIVITY_DEFINITION_DOT_DYNAMIC_VALUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue', PHPFHIRConstants::TYPE_CLASS_ACTIVITY_DEFINITION_DOT_DYNAMIC_VALUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRActivityDefinition_FHIRActivityDefinitionParticipant()
    {
        $this->assertEquals('ActivityDefinition.Participant', PHPFHIRConstants::TYPE_NAME_ACTIVITY_DEFINITION_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant', PHPFHIRConstants::TYPE_CLASS_ACTIVITY_DEFINITION_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAddress()
    {
        $this->assertEquals('Address', PHPFHIRConstants::TYPE_NAME_ADDRESS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddress', PHPFHIRConstants::TYPE_CLASS_ADDRESS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAddressType()
    {
        $this->assertEquals('AddressType', PHPFHIRConstants::TYPE_NAME_ADDRESS_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddressType', PHPFHIRConstants::TYPE_CLASS_ADDRESS_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAddressTypeList()
    {
        $this->assertEquals('AddressType-list', PHPFHIRConstants::TYPE_NAME_ADDRESS_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAddressTypeList', PHPFHIRConstants::TYPE_CLASS_ADDRESS_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAddressUse()
    {
        $this->assertEquals('AddressUse', PHPFHIRConstants::TYPE_NAME_ADDRESS_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAddressUse', PHPFHIRConstants::TYPE_CLASS_ADDRESS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAddressUseList()
    {
        $this->assertEquals('AddressUse-list', PHPFHIRConstants::TYPE_NAME_ADDRESS_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAddressUseList', PHPFHIRConstants::TYPE_CLASS_ADDRESS_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAdministrativeGender()
    {
        $this->assertEquals('AdministrativeGender', PHPFHIRConstants::TYPE_NAME_ADMINISTRATIVE_GENDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdministrativeGender', PHPFHIRConstants::TYPE_CLASS_ADMINISTRATIVE_GENDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAdministrativeGenderList()
    {
        $this->assertEquals('AdministrativeGender-list', PHPFHIRConstants::TYPE_NAME_ADMINISTRATIVE_GENDER_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAdministrativeGenderList', PHPFHIRConstants::TYPE_CLASS_ADMINISTRATIVE_GENDER_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRAdverseEvent()
    {
        $this->assertEquals('AdverseEvent', PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAdverseEvent', PHPFHIRConstants::TYPE_CLASS_ADVERSE_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAdverseEvent_FHIRAdverseEventSuspectEntity()
    {
        $this->assertEquals('AdverseEvent.SuspectEntity', PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity', PHPFHIRConstants::TYPE_CLASS_ADVERSE_EVENT_DOT_SUSPECT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAdverseEventCategory()
    {
        $this->assertEquals('AdverseEventCategory', PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCategory', PHPFHIRConstants::TYPE_CLASS_ADVERSE_EVENT_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAdverseEventCategoryList()
    {
        $this->assertEquals('AdverseEventCategory-list', PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAdverseEventCategoryList', PHPFHIRConstants::TYPE_CLASS_ADVERSE_EVENT_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAdverseEventCausality()
    {
        $this->assertEquals('AdverseEventCausality', PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_CAUSALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAdverseEventCausality', PHPFHIRConstants::TYPE_CLASS_ADVERSE_EVENT_CAUSALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAdverseEventCausalityList()
    {
        $this->assertEquals('AdverseEventCausality-list', PHPFHIRConstants::TYPE_NAME_ADVERSE_EVENT_CAUSALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAdverseEventCausalityList', PHPFHIRConstants::TYPE_CLASS_ADVERSE_EVENT_CAUSALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQuantity_FHIRAge()
    {
        $this->assertEquals('Age', PHPFHIRConstants::TYPE_NAME_AGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRAge', PHPFHIRConstants::TYPE_CLASS_AGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAggregationMode()
    {
        $this->assertEquals('AggregationMode', PHPFHIRConstants::TYPE_NAME_AGGREGATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAggregationMode', PHPFHIRConstants::TYPE_CLASS_AGGREGATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAggregationModeList()
    {
        $this->assertEquals('AggregationMode-list', PHPFHIRConstants::TYPE_NAME_AGGREGATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAggregationModeList', PHPFHIRConstants::TYPE_CLASS_AGGREGATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRAllergyIntolerance()
    {
        $this->assertEquals('AllergyIntolerance', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAllergyIntolerance_FHIRAllergyIntoleranceReaction()
    {
        $this->assertEquals('AllergyIntolerance.Reaction', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAllergyIntoleranceCategory()
    {
        $this->assertEquals('AllergyIntoleranceCategory', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAllergyIntoleranceCategory', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAllergyIntoleranceCategoryList()
    {
        $this->assertEquals('AllergyIntoleranceCategory-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAllergyIntoleranceCategoryList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAllergyIntoleranceClinicalStatus()
    {
        $this->assertEquals('AllergyIntoleranceClinicalStatus', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CLINICAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAllergyIntoleranceClinicalStatus', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CLINICAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAllergyIntoleranceClinicalStatusList()
    {
        $this->assertEquals('AllergyIntoleranceClinicalStatus-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CLINICAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAllergyIntoleranceClinicalStatusList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CLINICAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAllergyIntoleranceCriticality()
    {
        $this->assertEquals('AllergyIntoleranceCriticality', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CRITICALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAllergyIntoleranceCriticality', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CRITICALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAllergyIntoleranceCriticalityList()
    {
        $this->assertEquals('AllergyIntoleranceCriticality-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CRITICALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAllergyIntoleranceCriticalityList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CRITICALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAllergyIntoleranceSeverity()
    {
        $this->assertEquals('AllergyIntoleranceSeverity', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAllergyIntoleranceSeverity', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAllergyIntoleranceSeverityList()
    {
        $this->assertEquals('AllergyIntoleranceSeverity-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAllergyIntoleranceSeverityList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAllergyIntoleranceType()
    {
        $this->assertEquals('AllergyIntoleranceType', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAllergyIntoleranceType', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAllergyIntoleranceTypeList()
    {
        $this->assertEquals('AllergyIntoleranceType-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAllergyIntoleranceTypeList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAllergyIntoleranceVerificationStatus()
    {
        $this->assertEquals('AllergyIntoleranceVerificationStatus', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_VERIFICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAllergyIntoleranceVerificationStatus', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_VERIFICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAllergyIntoleranceVerificationStatusList()
    {
        $this->assertEquals('AllergyIntoleranceVerificationStatus-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_VERIFICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAllergyIntoleranceVerificationStatusList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_VERIFICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAnnotation()
    {
        $this->assertEquals('Annotation', PHPFHIRConstants::TYPE_NAME_ANNOTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAnnotation', PHPFHIRConstants::TYPE_CLASS_ANNOTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRAppointment()
    {
        $this->assertEquals('Appointment', PHPFHIRConstants::TYPE_NAME_APPOINTMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointment', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAppointment_FHIRAppointmentParticipant()
    {
        $this->assertEquals('Appointment.Participant', PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRAppointmentResponse()
    {
        $this->assertEquals('AppointmentResponse', PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAppointmentStatus()
    {
        $this->assertEquals('AppointmentStatus', PHPFHIRConstants::TYPE_NAME_APPOINTMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAppointmentStatus', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAppointmentStatusList()
    {
        $this->assertEquals('AppointmentStatus-list', PHPFHIRConstants::TYPE_NAME_APPOINTMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAppointmentStatusList', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAssertionDirectionType()
    {
        $this->assertEquals('AssertionDirectionType', PHPFHIRConstants::TYPE_NAME_ASSERTION_DIRECTION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionDirectionType', PHPFHIRConstants::TYPE_CLASS_ASSERTION_DIRECTION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAssertionDirectionTypeList()
    {
        $this->assertEquals('AssertionDirectionType-list', PHPFHIRConstants::TYPE_NAME_ASSERTION_DIRECTION_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAssertionDirectionTypeList', PHPFHIRConstants::TYPE_CLASS_ASSERTION_DIRECTION_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAssertionOperatorType()
    {
        $this->assertEquals('AssertionOperatorType', PHPFHIRConstants::TYPE_NAME_ASSERTION_OPERATOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionOperatorType', PHPFHIRConstants::TYPE_CLASS_ASSERTION_OPERATOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAssertionOperatorTypeList()
    {
        $this->assertEquals('AssertionOperatorType-list', PHPFHIRConstants::TYPE_NAME_ASSERTION_OPERATOR_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAssertionOperatorTypeList', PHPFHIRConstants::TYPE_CLASS_ASSERTION_OPERATOR_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAssertionResponseTypes()
    {
        $this->assertEquals('AssertionResponseTypes', PHPFHIRConstants::TYPE_NAME_ASSERTION_RESPONSE_TYPES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAssertionResponseTypes', PHPFHIRConstants::TYPE_CLASS_ASSERTION_RESPONSE_TYPES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAssertionResponseTypesList()
    {
        $this->assertEquals('AssertionResponseTypes-list', PHPFHIRConstants::TYPE_NAME_ASSERTION_RESPONSE_TYPES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAssertionResponseTypesList', PHPFHIRConstants::TYPE_CLASS_ASSERTION_RESPONSE_TYPES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAttachment()
    {
        $this->assertEquals('Attachment', PHPFHIRConstants::TYPE_NAME_ATTACHMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAttachment', PHPFHIRConstants::TYPE_CLASS_ATTACHMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRAuditEvent()
    {
        $this->assertEquals('AuditEvent', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRAuditEvent', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventAgent()
    {
        $this->assertEquals('AuditEvent.Agent', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventDetail()
    {
        $this->assertEquals('AuditEvent.Detail', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventEntity()
    {
        $this->assertEquals('AuditEvent.Entity', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventNetwork()
    {
        $this->assertEquals('AuditEvent.Network', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_NETWORK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_NETWORK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventSource()
    {
        $this->assertEquals('AuditEvent.Source', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAuditEventAction()
    {
        $this->assertEquals('AuditEventAction', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAuditEventAction', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAuditEventActionList()
    {
        $this->assertEquals('AuditEventAction-list', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_ACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAuditEventActionList', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_ACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAuditEventAgentNetworkType()
    {
        $this->assertEquals('AuditEventAgentNetworkType', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_AGENT_NETWORK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAuditEventAgentNetworkType', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_AGENT_NETWORK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAuditEventAgentNetworkTypeList()
    {
        $this->assertEquals('AuditEventAgentNetworkType-list', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_AGENT_NETWORK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAuditEventAgentNetworkTypeList', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_AGENT_NETWORK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRAuditEventOutcome()
    {
        $this->assertEquals('AuditEventOutcome', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRAuditEventOutcome', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRAuditEventOutcomeList()
    {
        $this->assertEquals('AuditEventOutcome-list', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRAuditEventOutcomeList', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement()
    {
        $this->assertEquals('BackboneElement', PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement', PHPFHIRConstants::TYPE_CLASS_BACKBONE_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBase64Binary()
    {
        $this->assertEquals('base64Binary', PHPFHIRConstants::TYPE_NAME_BASE_64BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBase64Binary', PHPFHIRConstants::TYPE_CLASS_BASE_64BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRBase64BinaryPrimitive()
    {
        $this->assertEquals('base64Binary-primitive', PHPFHIRConstants::TYPE_NAME_BASE_64BINARY_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRBase64BinaryPrimitive', PHPFHIRConstants::TYPE_CLASS_BASE_64BINARY_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRBasic()
    {
        $this->assertEquals('Basic', PHPFHIRConstants::TYPE_NAME_BASIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBasic', PHPFHIRConstants::TYPE_CLASS_BASIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRBinary()
    {
        $this->assertEquals('Binary', PHPFHIRConstants::TYPE_NAME_BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBinary', PHPFHIRConstants::TYPE_CLASS_BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBindingStrength()
    {
        $this->assertEquals('BindingStrength', PHPFHIRConstants::TYPE_NAME_BINDING_STRENGTH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBindingStrength', PHPFHIRConstants::TYPE_CLASS_BINDING_STRENGTH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRBindingStrengthList()
    {
        $this->assertEquals('BindingStrength-list', PHPFHIRConstants::TYPE_NAME_BINDING_STRENGTH_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRBindingStrengthList', PHPFHIRConstants::TYPE_CLASS_BINDING_STRENGTH_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRBodySite()
    {
        $this->assertEquals('BodySite', PHPFHIRConstants::TYPE_NAME_BODY_SITE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRBodySite', PHPFHIRConstants::TYPE_CLASS_BODY_SITE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBoolean()
    {
        $this->assertEquals('boolean', PHPFHIRConstants::TYPE_NAME_BOOLEAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBoolean', PHPFHIRConstants::TYPE_CLASS_BOOLEAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRBooleanPrimitive()
    {
        $this->assertEquals('boolean-primitive', PHPFHIRConstants::TYPE_NAME_BOOLEAN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRBooleanPrimitive', PHPFHIRConstants::TYPE_CLASS_BOOLEAN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRBundle()
    {
        $this->assertEquals('Bundle', PHPFHIRConstants::TYPE_NAME_BUNDLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBundle', PHPFHIRConstants::TYPE_CLASS_BUNDLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleEntry()
    {
        $this->assertEquals('Bundle.Entry', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleLink()
    {
        $this->assertEquals('Bundle.Link', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleRequest()
    {
        $this->assertEquals('Bundle.Request', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleResponse()
    {
        $this->assertEquals('Bundle.Response', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleSearch()
    {
        $this->assertEquals('Bundle.Search', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_SEARCH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_SEARCH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBundleType()
    {
        $this->assertEquals('BundleType', PHPFHIRConstants::TYPE_NAME_BUNDLE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBundleType', PHPFHIRConstants::TYPE_CLASS_BUNDLE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRBundleTypeList()
    {
        $this->assertEquals('BundleType-list', PHPFHIRConstants::TYPE_NAME_BUNDLE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRBundleTypeList', PHPFHIRConstants::TYPE_CLASS_BUNDLE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRCapabilityStatement()
    {
        $this->assertEquals('CapabilityStatement', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementCertificate()
    {
        $this->assertEquals('CapabilityStatement.Certificate', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_CERTIFICATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementCertificate', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_CERTIFICATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementDocument()
    {
        $this->assertEquals('CapabilityStatement.Document', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_DOCUMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_DOCUMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementEndpoint()
    {
        $this->assertEquals('CapabilityStatement.Endpoint', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_ENDPOINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_ENDPOINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementEvent()
    {
        $this->assertEquals('CapabilityStatement.Event', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementImplementation()
    {
        $this->assertEquals('CapabilityStatement.Implementation', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_IMPLEMENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_IMPLEMENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementInteraction()
    {
        $this->assertEquals('CapabilityStatement.Interaction', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementInteraction1()
    {
        $this->assertEquals('CapabilityStatement.Interaction1', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_INTERACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_INTERACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementMessaging()
    {
        $this->assertEquals('CapabilityStatement.Messaging', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_MESSAGING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_MESSAGING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementOperation()
    {
        $this->assertEquals('CapabilityStatement.Operation', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementResource()
    {
        $this->assertEquals('CapabilityStatement.Resource', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementRest()
    {
        $this->assertEquals('CapabilityStatement.Rest', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_REST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_REST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSearchParam()
    {
        $this->assertEquals('CapabilityStatement.SearchParam', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SEARCH_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SEARCH_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSecurity()
    {
        $this->assertEquals('CapabilityStatement.Security', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SECURITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SECURITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSoftware()
    {
        $this->assertEquals('CapabilityStatement.Software', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SOFTWARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SOFTWARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSupportedMessage()
    {
        $this->assertEquals('CapabilityStatement.SupportedMessage', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SUPPORTED_MESSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SUPPORTED_MESSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCapabilityStatementKind()
    {
        $this->assertEquals('CapabilityStatementKind', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCapabilityStatementKind', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCapabilityStatementKindList()
    {
        $this->assertEquals('CapabilityStatementKind-list', PHPFHIRConstants::TYPE_NAME_CAPABILITY_STATEMENT_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCapabilityStatementKindList', PHPFHIRConstants::TYPE_CLASS_CAPABILITY_STATEMENT_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRCarePlan()
    {
        $this->assertEquals('CarePlan', PHPFHIRConstants::TYPE_NAME_CARE_PLAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCarePlan', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanActivity()
    {
        $this->assertEquals('CarePlan.Activity', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_ACTIVITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanDetail()
    {
        $this->assertEquals('CarePlan.Detail', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCarePlanActivityStatus()
    {
        $this->assertEquals('CarePlanActivityStatus', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCarePlanActivityStatus', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCarePlanActivityStatusList()
    {
        $this->assertEquals('CarePlanActivityStatus-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCarePlanActivityStatusList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCarePlanIntent()
    {
        $this->assertEquals('CarePlanIntent', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCarePlanIntent', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCarePlanIntentList()
    {
        $this->assertEquals('CarePlanIntent-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_INTENT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCarePlanIntentList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_INTENT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCarePlanStatus()
    {
        $this->assertEquals('CarePlanStatus', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCarePlanStatus', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCarePlanStatusList()
    {
        $this->assertEquals('CarePlanStatus-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCarePlanStatusList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRCareTeam()
    {
        $this->assertEquals('CareTeam', PHPFHIRConstants::TYPE_NAME_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCareTeam', PHPFHIRConstants::TYPE_CLASS_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCareTeam_FHIRCareTeamParticipant()
    {
        $this->assertEquals('CareTeam.Participant', PHPFHIRConstants::TYPE_NAME_CARE_TEAM_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCareTeam\FHIRCareTeamParticipant', PHPFHIRConstants::TYPE_CLASS_CARE_TEAM_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCareTeamStatus()
    {
        $this->assertEquals('CareTeamStatus', PHPFHIRConstants::TYPE_NAME_CARE_TEAM_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCareTeamStatus', PHPFHIRConstants::TYPE_CLASS_CARE_TEAM_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCareTeamStatusList()
    {
        $this->assertEquals('CareTeamStatus-list', PHPFHIRConstants::TYPE_NAME_CARE_TEAM_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCareTeamStatusList', PHPFHIRConstants::TYPE_CLASS_CARE_TEAM_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRChargeItem()
    {
        $this->assertEquals('ChargeItem', PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRChargeItem', PHPFHIRConstants::TYPE_CLASS_CHARGE_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRChargeItem_FHIRChargeItemParticipant()
    {
        $this->assertEquals('ChargeItem.Participant', PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemParticipant', PHPFHIRConstants::TYPE_CLASS_CHARGE_ITEM_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRChargeItemStatus()
    {
        $this->assertEquals('ChargeItemStatus', PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRChargeItemStatus', PHPFHIRConstants::TYPE_CLASS_CHARGE_ITEM_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRChargeItemStatusList()
    {
        $this->assertEquals('ChargeItemStatus-list', PHPFHIRConstants::TYPE_NAME_CHARGE_ITEM_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRChargeItemStatusList', PHPFHIRConstants::TYPE_CLASS_CHARGE_ITEM_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRClaim()
    {
        $this->assertEquals('Claim', PHPFHIRConstants::TYPE_NAME_CLAIM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaim', PHPFHIRConstants::TYPE_CLASS_CLAIM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimAccident()
    {
        $this->assertEquals('Claim.Accident', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ACCIDENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_ACCIDENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimCareTeam()
    {
        $this->assertEquals('Claim.CareTeam', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimDetail()
    {
        $this->assertEquals('Claim.Detail', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimDiagnosis()
    {
        $this->assertEquals('Claim.Diagnosis', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimInformation()
    {
        $this->assertEquals('Claim.Information', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_INFORMATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInformation', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_INFORMATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimInsurance()
    {
        $this->assertEquals('Claim.Insurance', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimItem()
    {
        $this->assertEquals('Claim.Item', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimPayee()
    {
        $this->assertEquals('Claim.Payee', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PAYEE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_PAYEE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimProcedure()
    {
        $this->assertEquals('Claim.Procedure', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimRelated()
    {
        $this->assertEquals('Claim.Related', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimSubDetail()
    {
        $this->assertEquals('Claim.SubDetail', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRClaimResponse()
    {
        $this->assertEquals('ClaimResponse', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClaimResponse', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAddItem()
    {
        $this->assertEquals('ClaimResponse.AddItem', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADD_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAdjudication()
    {
        $this->assertEquals('ClaimResponse.Adjudication', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADJUDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADJUDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseDetail()
    {
        $this->assertEquals('ClaimResponse.Detail', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseDetail1()
    {
        $this->assertEquals('ClaimResponse.Detail1', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_DETAIL_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseError()
    {
        $this->assertEquals('ClaimResponse.Error', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ERROR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseInsurance()
    {
        $this->assertEquals('ClaimResponse.Insurance', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseItem()
    {
        $this->assertEquals('ClaimResponse.Item', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponsePayment()
    {
        $this->assertEquals('ClaimResponse.Payment', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_PAYMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_PAYMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseProcessNote()
    {
        $this->assertEquals('ClaimResponse.ProcessNote', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseSubDetail()
    {
        $this->assertEquals('ClaimResponse.SubDetail', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRClinicalImpression()
    {
        $this->assertEquals('ClinicalImpression', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRClinicalImpression', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClinicalImpression_FHIRClinicalImpressionFinding()
    {
        $this->assertEquals('ClinicalImpression.Finding', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_FINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION_DOT_FINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRClinicalImpression_FHIRClinicalImpressionInvestigation()
    {
        $this->assertEquals('ClinicalImpression.Investigation', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_INVESTIGATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION_DOT_INVESTIGATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRClinicalImpressionStatus()
    {
        $this->assertEquals('ClinicalImpressionStatus', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRClinicalImpressionStatus', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRClinicalImpressionStatusList()
    {
        $this->assertEquals('ClinicalImpressionStatus-list', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRClinicalImpressionStatusList', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCode()
    {
        $this->assertEquals('code', PHPFHIRConstants::TYPE_NAME_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCode', PHPFHIRConstants::TYPE_CLASS_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive()
    {
        $this->assertEquals('code-primitive', PHPFHIRConstants::TYPE_NAME_CODE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive', PHPFHIRConstants::TYPE_CLASS_CODE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCodeableConcept()
    {
        $this->assertEquals('CodeableConcept', PHPFHIRConstants::TYPE_NAME_CODEABLE_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeableConcept', PHPFHIRConstants::TYPE_CLASS_CODEABLE_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRCodeSystem()
    {
        $this->assertEquals('CodeSystem', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCodeSystem', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemConcept()
    {
        $this->assertEquals('CodeSystem.Concept', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemDesignation()
    {
        $this->assertEquals('CodeSystem.Designation', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_DOT_DESIGNATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemDesignation', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM_DOT_DESIGNATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemFilter()
    {
        $this->assertEquals('CodeSystem.Filter', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemProperty()
    {
        $this->assertEquals('CodeSystem.Property', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_DOT_PROPERTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM_DOT_PROPERTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemProperty1()
    {
        $this->assertEquals('CodeSystem.Property1', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_DOT_PROPERTY_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty1', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM_DOT_PROPERTY_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCodeSystemContentMode()
    {
        $this->assertEquals('CodeSystemContentMode', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_CONTENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemContentMode', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM_CONTENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCodeSystemContentModeList()
    {
        $this->assertEquals('CodeSystemContentMode-list', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_CONTENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCodeSystemContentModeList', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM_CONTENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCodeSystemHierarchyMeaning()
    {
        $this->assertEquals('CodeSystemHierarchyMeaning', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_HIERARCHY_MEANING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCodeSystemHierarchyMeaning', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM_HIERARCHY_MEANING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCodeSystemHierarchyMeaningList()
    {
        $this->assertEquals('CodeSystemHierarchyMeaning-list', PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM_HIERARCHY_MEANING_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCodeSystemHierarchyMeaningList', PHPFHIRConstants::TYPE_CLASS_CODE_SYSTEM_HIERARCHY_MEANING_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCoding()
    {
        $this->assertEquals('Coding', PHPFHIRConstants::TYPE_NAME_CODING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCoding', PHPFHIRConstants::TYPE_CLASS_CODING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRCommunication()
    {
        $this->assertEquals('Communication', PHPFHIRConstants::TYPE_NAME_COMMUNICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunication', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCommunication_FHIRCommunicationPayload()
    {
        $this->assertEquals('Communication.Payload', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_DOT_PAYLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_DOT_PAYLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRCommunicationRequest()
    {
        $this->assertEquals('CommunicationRequest', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCommunicationRequest_FHIRCommunicationRequestPayload()
    {
        $this->assertEquals('CommunicationRequest.Payload', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_PAYLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_REQUEST_DOT_PAYLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCommunicationRequest_FHIRCommunicationRequestRequester()
    {
        $this->assertEquals('CommunicationRequest.Requester', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestRequester', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRCompartmentDefinition()
    {
        $this->assertEquals('CompartmentDefinition', PHPFHIRConstants::TYPE_NAME_COMPARTMENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition', PHPFHIRConstants::TYPE_CLASS_COMPARTMENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCompartmentDefinition_FHIRCompartmentDefinitionResource()
    {
        $this->assertEquals('CompartmentDefinition.Resource', PHPFHIRConstants::TYPE_NAME_COMPARTMENT_DEFINITION_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource', PHPFHIRConstants::TYPE_CLASS_COMPARTMENT_DEFINITION_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCompartmentType()
    {
        $this->assertEquals('CompartmentType', PHPFHIRConstants::TYPE_NAME_COMPARTMENT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCompartmentType', PHPFHIRConstants::TYPE_CLASS_COMPARTMENT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCompartmentTypeList()
    {
        $this->assertEquals('CompartmentType-list', PHPFHIRConstants::TYPE_NAME_COMPARTMENT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCompartmentTypeList', PHPFHIRConstants::TYPE_CLASS_COMPARTMENT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRComposition()
    {
        $this->assertEquals('Composition', PHPFHIRConstants::TYPE_NAME_COMPOSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRComposition', PHPFHIRConstants::TYPE_CLASS_COMPOSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionAttester()
    {
        $this->assertEquals('Composition.Attester', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_ATTESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionEvent()
    {
        $this->assertEquals('Composition.Event', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionRelatesTo()
    {
        $this->assertEquals('Composition.RelatesTo', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionRelatesTo', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionSection()
    {
        $this->assertEquals('Composition.Section', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_SECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCompositionAttestationMode()
    {
        $this->assertEquals('CompositionAttestationMode', PHPFHIRConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCompositionAttestationMode', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCompositionAttestationModeList()
    {
        $this->assertEquals('CompositionAttestationMode-list', PHPFHIRConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCompositionAttestationModeList', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRCompositionStatus()
    {
        $this->assertEquals('CompositionStatus', PHPFHIRConstants::TYPE_NAME_COMPOSITION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRCompositionStatus', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRCompositionStatusList()
    {
        $this->assertEquals('CompositionStatus-list', PHPFHIRConstants::TYPE_NAME_COMPOSITION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRCompositionStatusList', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRConceptMap()
    {
        $this->assertEquals('ConceptMap', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConceptMap', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapDependsOn()
    {
        $this->assertEquals('ConceptMap.DependsOn', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_DEPENDS_ON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapElement()
    {
        $this->assertEquals('ConceptMap.Element', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapGroup()
    {
        $this->assertEquals('ConceptMap.Group', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapTarget()
    {
        $this->assertEquals('ConceptMap.Target', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapUnmapped()
    {
        $this->assertEquals('ConceptMap.Unmapped', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_UNMAPPED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_UNMAPPED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConceptMapEquivalence()
    {
        $this->assertEquals('ConceptMapEquivalence', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConceptMapEquivalence', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConceptMapEquivalenceList()
    {
        $this->assertEquals('ConceptMapEquivalence-list', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConceptMapEquivalenceList', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConceptMapGroupUnmappedMode()
    {
        $this->assertEquals('ConceptMapGroupUnmappedMode', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_GROUP_UNMAPPED_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConceptMapGroupUnmappedMode', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_GROUP_UNMAPPED_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConceptMapGroupUnmappedModeList()
    {
        $this->assertEquals('ConceptMapGroupUnmappedMode-list', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_GROUP_UNMAPPED_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConceptMapGroupUnmappedModeList', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_GROUP_UNMAPPED_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRCondition()
    {
        $this->assertEquals('Condition', PHPFHIRConstants::TYPE_NAME_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCondition', PHPFHIRConstants::TYPE_CLASS_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionEvidence()
    {
        $this->assertEquals('Condition.Evidence', PHPFHIRConstants::TYPE_NAME_CONDITION_DOT_EVIDENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence', PHPFHIRConstants::TYPE_CLASS_CONDITION_DOT_EVIDENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionStage()
    {
        $this->assertEquals('Condition.Stage', PHPFHIRConstants::TYPE_NAME_CONDITION_DOT_STAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage', PHPFHIRConstants::TYPE_CLASS_CONDITION_DOT_STAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConditionalDeleteStatus()
    {
        $this->assertEquals('ConditionalDeleteStatus', PHPFHIRConstants::TYPE_NAME_CONDITIONAL_DELETE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalDeleteStatus', PHPFHIRConstants::TYPE_CLASS_CONDITIONAL_DELETE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConditionalDeleteStatusList()
    {
        $this->assertEquals('ConditionalDeleteStatus-list', PHPFHIRConstants::TYPE_NAME_CONDITIONAL_DELETE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConditionalDeleteStatusList', PHPFHIRConstants::TYPE_CLASS_CONDITIONAL_DELETE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConditionalReadStatus()
    {
        $this->assertEquals('ConditionalReadStatus', PHPFHIRConstants::TYPE_NAME_CONDITIONAL_READ_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionalReadStatus', PHPFHIRConstants::TYPE_CLASS_CONDITIONAL_READ_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConditionalReadStatusList()
    {
        $this->assertEquals('ConditionalReadStatus-list', PHPFHIRConstants::TYPE_NAME_CONDITIONAL_READ_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConditionalReadStatusList', PHPFHIRConstants::TYPE_CLASS_CONDITIONAL_READ_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConditionClinicalStatusCodes()
    {
        $this->assertEquals('ConditionClinicalStatusCodes', PHPFHIRConstants::TYPE_NAME_CONDITION_CLINICAL_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionClinicalStatusCodes', PHPFHIRConstants::TYPE_CLASS_CONDITION_CLINICAL_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConditionClinicalStatusCodesList()
    {
        $this->assertEquals('ConditionClinicalStatusCodes-list', PHPFHIRConstants::TYPE_NAME_CONDITION_CLINICAL_STATUS_CODES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConditionClinicalStatusCodesList', PHPFHIRConstants::TYPE_CLASS_CONDITION_CLINICAL_STATUS_CODES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConditionVerificationStatus()
    {
        $this->assertEquals('ConditionVerificationStatus', PHPFHIRConstants::TYPE_NAME_CONDITION_VERIFICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConditionVerificationStatus', PHPFHIRConstants::TYPE_CLASS_CONDITION_VERIFICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConditionVerificationStatusList()
    {
        $this->assertEquals('ConditionVerificationStatus-list', PHPFHIRConstants::TYPE_NAME_CONDITION_VERIFICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConditionVerificationStatusList', PHPFHIRConstants::TYPE_CLASS_CONDITION_VERIFICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConfidentialityClassification()
    {
        $this->assertEquals('ConfidentialityClassification', PHPFHIRConstants::TYPE_NAME_CONFIDENTIALITY_CLASSIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConfidentialityClassification', PHPFHIRConstants::TYPE_CLASS_CONFIDENTIALITY_CLASSIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConfidentialityClassificationList()
    {
        $this->assertEquals('ConfidentialityClassification-list', PHPFHIRConstants::TYPE_NAME_CONFIDENTIALITY_CLASSIFICATION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConfidentialityClassificationList', PHPFHIRConstants::TYPE_CLASS_CONFIDENTIALITY_CLASSIFICATION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRConsent()
    {
        $this->assertEquals('Consent', PHPFHIRConstants::TYPE_NAME_CONSENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRConsent', PHPFHIRConstants::TYPE_CLASS_CONSENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentActor()
    {
        $this->assertEquals('Consent.Actor', PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_ACTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor', PHPFHIRConstants::TYPE_CLASS_CONSENT_DOT_ACTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentActor1()
    {
        $this->assertEquals('Consent.Actor1', PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_ACTOR_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor1', PHPFHIRConstants::TYPE_CLASS_CONSENT_DOT_ACTOR_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentData()
    {
        $this->assertEquals('Consent.Data', PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData', PHPFHIRConstants::TYPE_CLASS_CONSENT_DOT_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentData1()
    {
        $this->assertEquals('Consent.Data1', PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_DATA_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData1', PHPFHIRConstants::TYPE_CLASS_CONSENT_DOT_DATA_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentExcept()
    {
        $this->assertEquals('Consent.Except', PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_EXCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept', PHPFHIRConstants::TYPE_CLASS_CONSENT_DOT_EXCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentPolicy()
    {
        $this->assertEquals('Consent.Policy', PHPFHIRConstants::TYPE_NAME_CONSENT_DOT_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy', PHPFHIRConstants::TYPE_CLASS_CONSENT_DOT_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConsentDataMeaning()
    {
        $this->assertEquals('ConsentDataMeaning', PHPFHIRConstants::TYPE_NAME_CONSENT_DATA_MEANING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentDataMeaning', PHPFHIRConstants::TYPE_CLASS_CONSENT_DATA_MEANING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConsentDataMeaningList()
    {
        $this->assertEquals('ConsentDataMeaning-list', PHPFHIRConstants::TYPE_NAME_CONSENT_DATA_MEANING_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConsentDataMeaningList', PHPFHIRConstants::TYPE_CLASS_CONSENT_DATA_MEANING_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConsentExceptType()
    {
        $this->assertEquals('ConsentExceptType', PHPFHIRConstants::TYPE_NAME_CONSENT_EXCEPT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentExceptType', PHPFHIRConstants::TYPE_CLASS_CONSENT_EXCEPT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConsentExceptTypeList()
    {
        $this->assertEquals('ConsentExceptType-list', PHPFHIRConstants::TYPE_NAME_CONSENT_EXCEPT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConsentExceptTypeList', PHPFHIRConstants::TYPE_CLASS_CONSENT_EXCEPT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConsentState()
    {
        $this->assertEquals('ConsentState', PHPFHIRConstants::TYPE_NAME_CONSENT_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConsentState', PHPFHIRConstants::TYPE_CLASS_CONSENT_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConsentStateList()
    {
        $this->assertEquals('ConsentState-list', PHPFHIRConstants::TYPE_NAME_CONSENT_STATE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConsentStateList', PHPFHIRConstants::TYPE_CLASS_CONSENT_STATE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRConstraintSeverity()
    {
        $this->assertEquals('ConstraintSeverity', PHPFHIRConstants::TYPE_NAME_CONSTRAINT_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRConstraintSeverity', PHPFHIRConstants::TYPE_CLASS_CONSTRAINT_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRConstraintSeverityList()
    {
        $this->assertEquals('ConstraintSeverity-list', PHPFHIRConstants::TYPE_NAME_CONSTRAINT_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRConstraintSeverityList', PHPFHIRConstants::TYPE_CLASS_CONSTRAINT_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRContactDetail()
    {
        $this->assertEquals('ContactDetail', PHPFHIRConstants::TYPE_NAME_CONTACT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactDetail', PHPFHIRConstants::TYPE_CLASS_CONTACT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRContactPoint()
    {
        $this->assertEquals('ContactPoint', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPoint', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRContactPointSystem()
    {
        $this->assertEquals('ContactPointSystem', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPointSystem', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRContactPointSystemList()
    {
        $this->assertEquals('ContactPointSystem-list', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT_SYSTEM_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRContactPointSystemList', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT_SYSTEM_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRContactPointUse()
    {
        $this->assertEquals('ContactPointUse', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContactPointUse', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRContactPointUseList()
    {
        $this->assertEquals('ContactPointUse-list', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRContactPointUseList', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRContentType()
    {
        $this->assertEquals('ContentType', PHPFHIRConstants::TYPE_NAME_CONTENT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContentType', PHPFHIRConstants::TYPE_CLASS_CONTENT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRContentTypeList()
    {
        $this->assertEquals('ContentType-list', PHPFHIRConstants::TYPE_NAME_CONTENT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRContentTypeList', PHPFHIRConstants::TYPE_CLASS_CONTENT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRContract()
    {
        $this->assertEquals('Contract', PHPFHIRConstants::TYPE_NAME_CONTRACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRContract', PHPFHIRConstants::TYPE_CLASS_CONTRACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractAgent()
    {
        $this->assertEquals('Contract.Agent', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractAgent1()
    {
        $this->assertEquals('Contract.Agent1', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_AGENT_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent1', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_AGENT_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractFriendly()
    {
        $this->assertEquals('Contract.Friendly', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_FRIENDLY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_FRIENDLY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractLegal()
    {
        $this->assertEquals('Contract.Legal', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_LEGAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_LEGAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractRule()
    {
        $this->assertEquals('Contract.Rule', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractSigner()
    {
        $this->assertEquals('Contract.Signer', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_SIGNER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_SIGNER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractTerm()
    {
        $this->assertEquals('Contract.Term', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_TERM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractValuedItem()
    {
        $this->assertEquals('Contract.ValuedItem', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_VALUED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractValuedItem1()
    {
        $this->assertEquals('Contract.ValuedItem1', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_VALUED_ITEM_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRContractResourceStatusCodes()
    {
        $this->assertEquals('ContractResourceStatusCodes', PHPFHIRConstants::TYPE_NAME_CONTRACT_RESOURCE_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContractResourceStatusCodes', PHPFHIRConstants::TYPE_CLASS_CONTRACT_RESOURCE_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRContractResourceStatusCodesList()
    {
        $this->assertEquals('ContractResourceStatusCodes-list', PHPFHIRConstants::TYPE_NAME_CONTRACT_RESOURCE_STATUS_CODES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRContractResourceStatusCodesList', PHPFHIRConstants::TYPE_CLASS_CONTRACT_RESOURCE_STATUS_CODES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRContributor()
    {
        $this->assertEquals('Contributor', PHPFHIRConstants::TYPE_NAME_CONTRIBUTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContributor', PHPFHIRConstants::TYPE_CLASS_CONTRIBUTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRContributorType()
    {
        $this->assertEquals('ContributorType', PHPFHIRConstants::TYPE_NAME_CONTRIBUTOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRContributorType', PHPFHIRConstants::TYPE_CLASS_CONTRIBUTOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRContributorTypeList()
    {
        $this->assertEquals('ContributorType-list', PHPFHIRConstants::TYPE_NAME_CONTRIBUTOR_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRContributorTypeList', PHPFHIRConstants::TYPE_CLASS_CONTRIBUTOR_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQuantity_FHIRCount()
    {
        $this->assertEquals('Count', PHPFHIRConstants::TYPE_NAME_COUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRCount', PHPFHIRConstants::TYPE_CLASS_COUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRCoverage()
    {
        $this->assertEquals('Coverage', PHPFHIRConstants::TYPE_NAME_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRCoverage', PHPFHIRConstants::TYPE_CLASS_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRCoverage_FHIRCoverageGrouping()
    {
        $this->assertEquals('Coverage.Grouping', PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping', PHPFHIRConstants::TYPE_CLASS_COVERAGE_DOT_GROUPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDataElement()
    {
        $this->assertEquals('DataElement', PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDataElement', PHPFHIRConstants::TYPE_CLASS_DATA_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDataElement_FHIRDataElementMapping()
    {
        $this->assertEquals('DataElement.Mapping', PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping', PHPFHIRConstants::TYPE_CLASS_DATA_ELEMENT_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDataElementStringency()
    {
        $this->assertEquals('DataElementStringency', PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT_STRINGENCY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataElementStringency', PHPFHIRConstants::TYPE_CLASS_DATA_ELEMENT_STRINGENCY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDataElementStringencyList()
    {
        $this->assertEquals('DataElementStringency-list', PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT_STRINGENCY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDataElementStringencyList', PHPFHIRConstants::TYPE_CLASS_DATA_ELEMENT_STRINGENCY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDataRequirement()
    {
        $this->assertEquals('DataRequirement', PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement', PHPFHIRConstants::TYPE_CLASS_DATA_REQUIREMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDataRequirement_FHIRDataRequirementCodeFilter()
    {
        $this->assertEquals('DataRequirement.CodeFilter', PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter', PHPFHIRConstants::TYPE_CLASS_DATA_REQUIREMENT_DOT_CODE_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDataRequirement_FHIRDataRequirementDateFilter()
    {
        $this->assertEquals('DataRequirement.DateFilter', PHPFHIRConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter', PHPFHIRConstants::TYPE_CLASS_DATA_REQUIREMENT_DOT_DATE_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDate()
    {
        $this->assertEquals('date', PHPFHIRConstants::TYPE_NAME_DATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDate', PHPFHIRConstants::TYPE_CLASS_DATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRDatePrimitive()
    {
        $this->assertEquals('date-primitive', PHPFHIRConstants::TYPE_NAME_DATE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRDatePrimitive', PHPFHIRConstants::TYPE_CLASS_DATE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDateTime()
    {
        $this->assertEquals('dateTime', PHPFHIRConstants::TYPE_NAME_DATE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDateTime', PHPFHIRConstants::TYPE_CLASS_DATE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRDateTimePrimitive()
    {
        $this->assertEquals('dateTime-primitive', PHPFHIRConstants::TYPE_NAME_DATE_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRDateTimePrimitive', PHPFHIRConstants::TYPE_CLASS_DATE_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDaysOfWeek()
    {
        $this->assertEquals('DaysOfWeek', PHPFHIRConstants::TYPE_NAME_DAYS_OF_WEEK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDaysOfWeek', PHPFHIRConstants::TYPE_CLASS_DAYS_OF_WEEK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDaysOfWeekList()
    {
        $this->assertEquals('DaysOfWeek-list', PHPFHIRConstants::TYPE_NAME_DAYS_OF_WEEK_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDaysOfWeekList', PHPFHIRConstants::TYPE_CLASS_DAYS_OF_WEEK_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDecimal()
    {
        $this->assertEquals('decimal', PHPFHIRConstants::TYPE_NAME_DECIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDecimal', PHPFHIRConstants::TYPE_CLASS_DECIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRDecimalPrimitive()
    {
        $this->assertEquals('decimal-primitive', PHPFHIRConstants::TYPE_NAME_DECIMAL_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRDecimalPrimitive', PHPFHIRConstants::TYPE_CLASS_DECIMAL_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDetectedIssue()
    {
        $this->assertEquals('DetectedIssue', PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDetectedIssue', PHPFHIRConstants::TYPE_CLASS_DETECTED_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDetectedIssue_FHIRDetectedIssueMitigation()
    {
        $this->assertEquals('DetectedIssue.Mitigation', PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_DOT_MITIGATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation', PHPFHIRConstants::TYPE_CLASS_DETECTED_ISSUE_DOT_MITIGATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDetectedIssueSeverity()
    {
        $this->assertEquals('DetectedIssueSeverity', PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDetectedIssueSeverity', PHPFHIRConstants::TYPE_CLASS_DETECTED_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDetectedIssueSeverityList()
    {
        $this->assertEquals('DetectedIssueSeverity-list', PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDetectedIssueSeverityList', PHPFHIRConstants::TYPE_CLASS_DETECTED_ISSUE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDevice()
    {
        $this->assertEquals('Device', PHPFHIRConstants::TYPE_NAME_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDevice', PHPFHIRConstants::TYPE_CLASS_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDevice_FHIRDeviceUdi()
    {
        $this->assertEquals('Device.Udi', PHPFHIRConstants::TYPE_NAME_DEVICE_DOT_UDI);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi', PHPFHIRConstants::TYPE_CLASS_DEVICE_DOT_UDI);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDeviceComponent()
    {
        $this->assertEquals('DeviceComponent', PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceComponent', PHPFHIRConstants::TYPE_CLASS_DEVICE_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDeviceComponent_FHIRDeviceComponentProductionSpecification()
    {
        $this->assertEquals('DeviceComponent.ProductionSpecification', PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification', PHPFHIRConstants::TYPE_CLASS_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDeviceMetric()
    {
        $this->assertEquals('DeviceMetric', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceMetric', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDeviceMetric_FHIRDeviceMetricCalibration()
    {
        $this->assertEquals('DeviceMetric.Calibration', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_DOT_CALIBRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDeviceMetricCalibrationState()
    {
        $this->assertEquals('DeviceMetricCalibrationState', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricCalibrationState', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDeviceMetricCalibrationStateList()
    {
        $this->assertEquals('DeviceMetricCalibrationState-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_STATE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDeviceMetricCalibrationStateList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_STATE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDeviceMetricCalibrationType()
    {
        $this->assertEquals('DeviceMetricCalibrationType', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricCalibrationType', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDeviceMetricCalibrationTypeList()
    {
        $this->assertEquals('DeviceMetricCalibrationType-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDeviceMetricCalibrationTypeList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDeviceMetricCategory()
    {
        $this->assertEquals('DeviceMetricCategory', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricCategory', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDeviceMetricCategoryList()
    {
        $this->assertEquals('DeviceMetricCategory-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDeviceMetricCategoryList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDeviceMetricColor()
    {
        $this->assertEquals('DeviceMetricColor', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_COLOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricColor', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_COLOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDeviceMetricColorList()
    {
        $this->assertEquals('DeviceMetricColor-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_COLOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDeviceMetricColorList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_COLOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDeviceMetricOperationalStatus()
    {
        $this->assertEquals('DeviceMetricOperationalStatus', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_OPERATIONAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceMetricOperationalStatus', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_OPERATIONAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDeviceMetricOperationalStatusList()
    {
        $this->assertEquals('DeviceMetricOperationalStatus-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_OPERATIONAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDeviceMetricOperationalStatusList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_OPERATIONAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDeviceRequest()
    {
        $this->assertEquals('DeviceRequest', PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceRequest', PHPFHIRConstants::TYPE_CLASS_DEVICE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDeviceRequest_FHIRDeviceRequestRequester()
    {
        $this->assertEquals('DeviceRequest.Requester', PHPFHIRConstants::TYPE_NAME_DEVICE_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDeviceRequest\FHIRDeviceRequestRequester', PHPFHIRConstants::TYPE_CLASS_DEVICE_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDeviceUseStatement()
    {
        $this->assertEquals('DeviceUseStatement', PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement', PHPFHIRConstants::TYPE_CLASS_DEVICE_USE_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDeviceUseStatementStatus()
    {
        $this->assertEquals('DeviceUseStatementStatus', PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDeviceUseStatementStatus', PHPFHIRConstants::TYPE_CLASS_DEVICE_USE_STATEMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDeviceUseStatementStatusList()
    {
        $this->assertEquals('DeviceUseStatementStatus-list', PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDeviceUseStatementStatusList', PHPFHIRConstants::TYPE_CLASS_DEVICE_USE_STATEMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDiagnosticReport()
    {
        $this->assertEquals('DiagnosticReport', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDiagnosticReport_FHIRDiagnosticReportImage()
    {
        $this->assertEquals('DiagnosticReport.Image', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_DOT_IMAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_DOT_IMAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDiagnosticReport_FHIRDiagnosticReportPerformer()
    {
        $this->assertEquals('DiagnosticReport.Performer', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportPerformer', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDiagnosticReportStatus()
    {
        $this->assertEquals('DiagnosticReportStatus', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDiagnosticReportStatus', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDiagnosticReportStatusList()
    {
        $this->assertEquals('DiagnosticReportStatus-list', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDiagnosticReportStatusList', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDigitalMediaType()
    {
        $this->assertEquals('DigitalMediaType', PHPFHIRConstants::TYPE_NAME_DIGITAL_MEDIA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDigitalMediaType', PHPFHIRConstants::TYPE_CLASS_DIGITAL_MEDIA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDigitalMediaTypeList()
    {
        $this->assertEquals('DigitalMediaType-list', PHPFHIRConstants::TYPE_NAME_DIGITAL_MEDIA_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDigitalMediaTypeList', PHPFHIRConstants::TYPE_CLASS_DIGITAL_MEDIA_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDiscriminatorType()
    {
        $this->assertEquals('DiscriminatorType', PHPFHIRConstants::TYPE_NAME_DISCRIMINATOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDiscriminatorType', PHPFHIRConstants::TYPE_CLASS_DISCRIMINATOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDiscriminatorTypeList()
    {
        $this->assertEquals('DiscriminatorType-list', PHPFHIRConstants::TYPE_NAME_DISCRIMINATOR_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDiscriminatorTypeList', PHPFHIRConstants::TYPE_CLASS_DISCRIMINATOR_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQuantity_FHIRDistance()
    {
        $this->assertEquals('Distance', PHPFHIRConstants::TYPE_NAME_DISTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDistance', PHPFHIRConstants::TYPE_CLASS_DISTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDocumentManifest()
    {
        $this->assertEquals('DocumentManifest', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentManifest', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MANIFEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDocumentManifest_FHIRDocumentManifestContent()
    {
        $this->assertEquals('DocumentManifest.Content', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MANIFEST_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDocumentManifest_FHIRDocumentManifestRelated()
    {
        $this->assertEquals('DocumentManifest.Related', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MANIFEST_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDocumentMode()
    {
        $this->assertEquals('DocumentMode', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDocumentMode', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDocumentModeList()
    {
        $this->assertEquals('DocumentMode-list', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDocumentModeList', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRDocumentReference()
    {
        $this->assertEquals('DocumentReference', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRDocumentReference', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContent()
    {
        $this->assertEquals('DocumentReference.Content', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContext()
    {
        $this->assertEquals('DocumentReference.Context', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceRelated()
    {
        $this->assertEquals('DocumentReference.Related', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelated', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceRelatesTo()
    {
        $this->assertEquals('DocumentReference.RelatesTo', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDocumentReferenceStatus()
    {
        $this->assertEquals('DocumentReferenceStatus', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDocumentReferenceStatus', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDocumentReferenceStatusList()
    {
        $this->assertEquals('DocumentReferenceStatus-list', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDocumentReferenceStatusList', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDocumentRelationshipType()
    {
        $this->assertEquals('DocumentRelationshipType', PHPFHIRConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDocumentRelationshipType', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRDocumentRelationshipTypeList()
    {
        $this->assertEquals('DocumentRelationshipType-list', PHPFHIRConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRDocumentRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource()
    {
        $this->assertEquals('DomainResource', PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource', PHPFHIRConstants::TYPE_CLASS_DOMAIN_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRDosage()
    {
        $this->assertEquals('Dosage', PHPFHIRConstants::TYPE_NAME_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRDosage', PHPFHIRConstants::TYPE_CLASS_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQuantity_FHIRDuration()
    {
        $this->assertEquals('Duration', PHPFHIRConstants::TYPE_NAME_DURATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRDuration', PHPFHIRConstants::TYPE_CLASS_DURATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement()
    {
        $this->assertEquals('Element', PHPFHIRConstants::TYPE_NAME_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement', PHPFHIRConstants::TYPE_CLASS_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRElementDefinition()
    {
        $this->assertEquals('ElementDefinition', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionBase()
    {
        $this->assertEquals('ElementDefinition.Base', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_BASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_BASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionBinding()
    {
        $this->assertEquals('ElementDefinition.Binding', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionConstraint()
    {
        $this->assertEquals('ElementDefinition.Constraint', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_CONSTRAINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_CONSTRAINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionDiscriminator()
    {
        $this->assertEquals('ElementDefinition.Discriminator', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_DISCRIMINATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionDiscriminator', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_DISCRIMINATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionExample()
    {
        $this->assertEquals('ElementDefinition.Example', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_EXAMPLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionMapping()
    {
        $this->assertEquals('ElementDefinition.Mapping', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionSlicing()
    {
        $this->assertEquals('ElementDefinition.Slicing', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_SLICING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionType()
    {
        $this->assertEquals('ElementDefinition.Type', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIREligibilityRequest()
    {
        $this->assertEquals('EligibilityRequest', PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityRequest', PHPFHIRConstants::TYPE_CLASS_ELIGIBILITY_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIREligibilityResponse()
    {
        $this->assertEquals('EligibilityResponse', PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREligibilityResponse', PHPFHIRConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREligibilityResponse_FHIREligibilityResponseBenefitBalance()
    {
        $this->assertEquals('EligibilityResponse.BenefitBalance', PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_BENEFIT_BALANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance', PHPFHIRConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_DOT_BENEFIT_BALANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREligibilityResponse_FHIREligibilityResponseError()
    {
        $this->assertEquals('EligibilityResponse.Error', PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_ERROR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseError', PHPFHIRConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_DOT_ERROR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREligibilityResponse_FHIREligibilityResponseFinancial()
    {
        $this->assertEquals('EligibilityResponse.Financial', PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_FINANCIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseFinancial', PHPFHIRConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_DOT_FINANCIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREligibilityResponse_FHIREligibilityResponseInsurance()
    {
        $this->assertEquals('EligibilityResponse.Insurance', PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance', PHPFHIRConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIREncounter()
    {
        $this->assertEquals('Encounter', PHPFHIRConstants::TYPE_NAME_ENCOUNTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREncounter', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterClassHistory()
    {
        $this->assertEquals('Encounter.ClassHistory', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_CLASS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_CLASS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterDiagnosis()
    {
        $this->assertEquals('Encounter.Diagnosis', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterHospitalization()
    {
        $this->assertEquals('Encounter.Hospitalization', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_HOSPITALIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterLocation()
    {
        $this->assertEquals('Encounter.Location', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterParticipant()
    {
        $this->assertEquals('Encounter.Participant', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterStatusHistory()
    {
        $this->assertEquals('Encounter.StatusHistory', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_STATUS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_STATUS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIREncounterLocationStatus()
    {
        $this->assertEquals('EncounterLocationStatus', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREncounterLocationStatus', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIREncounterLocationStatusList()
    {
        $this->assertEquals('EncounterLocationStatus-list', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_LOCATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIREncounterLocationStatusList', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_LOCATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIREncounterStatus()
    {
        $this->assertEquals('EncounterStatus', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREncounterStatus', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIREncounterStatusList()
    {
        $this->assertEquals('EncounterStatus-list', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIREncounterStatusList', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIREndpoint()
    {
        $this->assertEquals('Endpoint', PHPFHIRConstants::TYPE_NAME_ENDPOINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREndpoint', PHPFHIRConstants::TYPE_CLASS_ENDPOINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIREndpointStatus()
    {
        $this->assertEquals('EndpointStatus', PHPFHIRConstants::TYPE_NAME_ENDPOINT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREndpointStatus', PHPFHIRConstants::TYPE_CLASS_ENDPOINT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIREndpointStatusList()
    {
        $this->assertEquals('EndpointStatus-list', PHPFHIRConstants::TYPE_NAME_ENDPOINT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIREndpointStatusList', PHPFHIRConstants::TYPE_CLASS_ENDPOINT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIREnrollmentRequest()
    {
        $this->assertEquals('EnrollmentRequest', PHPFHIRConstants::TYPE_NAME_ENROLLMENT_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest', PHPFHIRConstants::TYPE_CLASS_ENROLLMENT_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIREnrollmentResponse()
    {
        $this->assertEquals('EnrollmentResponse', PHPFHIRConstants::TYPE_NAME_ENROLLMENT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse', PHPFHIRConstants::TYPE_CLASS_ENROLLMENT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIREpisodeOfCare()
    {
        $this->assertEquals('EpisodeOfCare', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREpisodeOfCare_FHIREpisodeOfCareDiagnosis()
    {
        $this->assertEquals('EpisodeOfCare.Diagnosis', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIREpisodeOfCare_FHIREpisodeOfCareStatusHistory()
    {
        $this->assertEquals('EpisodeOfCare.StatusHistory', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE_DOT_STATUS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE_DOT_STATUS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIREpisodeOfCareStatus()
    {
        $this->assertEquals('EpisodeOfCareStatus', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREpisodeOfCareStatus', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIREpisodeOfCareStatusList()
    {
        $this->assertEquals('EpisodeOfCareStatus-list', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIREpisodeOfCareStatusList', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIREventCapabilityMode()
    {
        $this->assertEquals('EventCapabilityMode', PHPFHIRConstants::TYPE_NAME_EVENT_CAPABILITY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventCapabilityMode', PHPFHIRConstants::TYPE_CLASS_EVENT_CAPABILITY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIREventCapabilityModeList()
    {
        $this->assertEquals('EventCapabilityMode-list', PHPFHIRConstants::TYPE_NAME_EVENT_CAPABILITY_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIREventCapabilityModeList', PHPFHIRConstants::TYPE_CLASS_EVENT_CAPABILITY_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIREventStatus()
    {
        $this->assertEquals('EventStatus', PHPFHIRConstants::TYPE_NAME_EVENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventStatus', PHPFHIRConstants::TYPE_CLASS_EVENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIREventStatusList()
    {
        $this->assertEquals('EventStatus-list', PHPFHIRConstants::TYPE_NAME_EVENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIREventStatusList', PHPFHIRConstants::TYPE_CLASS_EVENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIREventTiming()
    {
        $this->assertEquals('EventTiming', PHPFHIRConstants::TYPE_NAME_EVENT_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIREventTiming', PHPFHIRConstants::TYPE_CLASS_EVENT_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIREventTimingList()
    {
        $this->assertEquals('EventTiming-list', PHPFHIRConstants::TYPE_NAME_EVENT_TIMING_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIREventTimingList', PHPFHIRConstants::TYPE_CLASS_EVENT_TIMING_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRExpansionProfile()
    {
        $this->assertEquals('ExpansionProfile', PHPFHIRConstants::TYPE_NAME_EXPANSION_PROFILE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExpansionProfile', PHPFHIRConstants::TYPE_CLASS_EXPANSION_PROFILE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileDesignation()
    {
        $this->assertEquals('ExpansionProfile.Designation', PHPFHIRConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_DESIGNATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation', PHPFHIRConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_DESIGNATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileDesignation1()
    {
        $this->assertEquals('ExpansionProfile.Designation1', PHPFHIRConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_DESIGNATION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation1', PHPFHIRConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_DESIGNATION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileDesignation2()
    {
        $this->assertEquals('ExpansionProfile.Designation2', PHPFHIRConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_DESIGNATION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation2', PHPFHIRConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_DESIGNATION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileExclude()
    {
        $this->assertEquals('ExpansionProfile.Exclude', PHPFHIRConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_EXCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExclude', PHPFHIRConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_EXCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileExcludedSystem()
    {
        $this->assertEquals('ExpansionProfile.ExcludedSystem', PHPFHIRConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_EXCLUDED_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem', PHPFHIRConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_EXCLUDED_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileFixedVersion()
    {
        $this->assertEquals('ExpansionProfile.FixedVersion', PHPFHIRConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_FIXED_VERSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion', PHPFHIRConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_FIXED_VERSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileInclude()
    {
        $this->assertEquals('ExpansionProfile.Include', PHPFHIRConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_INCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileInclude', PHPFHIRConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_INCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRExplanationOfBenefit()
    {
        $this->assertEquals('ExplanationOfBenefit', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitAccident()
    {
        $this->assertEquals('ExplanationOfBenefit.Accident', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ACCIDENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ACCIDENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitAddItem()
    {
        $this->assertEquals('ExplanationOfBenefit.AddItem', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ADD_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ADD_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitAdjudication()
    {
        $this->assertEquals('ExplanationOfBenefit.Adjudication', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ADJUDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ADJUDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitBenefitBalance()
    {
        $this->assertEquals('ExplanationOfBenefit.BenefitBalance', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_BENEFIT_BALANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_BENEFIT_BALANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitCareTeam()
    {
        $this->assertEquals('ExplanationOfBenefit.CareTeam', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitDetail()
    {
        $this->assertEquals('ExplanationOfBenefit.Detail', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitDetail1()
    {
        $this->assertEquals('ExplanationOfBenefit.Detail1', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DETAIL_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_DETAIL_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitDiagnosis()
    {
        $this->assertEquals('ExplanationOfBenefit.Diagnosis', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitFinancial()
    {
        $this->assertEquals('ExplanationOfBenefit.Financial', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitInformation()
    {
        $this->assertEquals('ExplanationOfBenefit.Information', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_INFORMATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_INFORMATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitInsurance()
    {
        $this->assertEquals('ExplanationOfBenefit.Insurance', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitItem()
    {
        $this->assertEquals('ExplanationOfBenefit.Item', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitPayee()
    {
        $this->assertEquals('ExplanationOfBenefit.Payee', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PAYEE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PAYEE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitPayment()
    {
        $this->assertEquals('ExplanationOfBenefit.Payment', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PAYMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PAYMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitProcedure()
    {
        $this->assertEquals('ExplanationOfBenefit.Procedure', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitProcessNote()
    {
        $this->assertEquals('ExplanationOfBenefit.ProcessNote', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitRelated()
    {
        $this->assertEquals('ExplanationOfBenefit.Related', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitSubDetail()
    {
        $this->assertEquals('ExplanationOfBenefit.SubDetail', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRExplanationOfBenefitStatus()
    {
        $this->assertEquals('ExplanationOfBenefitStatus', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExplanationOfBenefitStatus', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRExplanationOfBenefitStatusList()
    {
        $this->assertEquals('ExplanationOfBenefitStatus-list', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRExplanationOfBenefitStatusList', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRExtension()
    {
        $this->assertEquals('Extension', PHPFHIRConstants::TYPE_NAME_EXTENSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtension', PHPFHIRConstants::TYPE_CLASS_EXTENSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRExtensionContext()
    {
        $this->assertEquals('ExtensionContext', PHPFHIRConstants::TYPE_NAME_EXTENSION_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRExtensionContext', PHPFHIRConstants::TYPE_CLASS_EXTENSION_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRExtensionContextList()
    {
        $this->assertEquals('ExtensionContext-list', PHPFHIRConstants::TYPE_NAME_EXTENSION_CONTEXT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRExtensionContextList', PHPFHIRConstants::TYPE_CLASS_EXTENSION_CONTEXT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRFamilyHistoryStatus()
    {
        $this->assertEquals('FamilyHistoryStatus', PHPFHIRConstants::TYPE_NAME_FAMILY_HISTORY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFamilyHistoryStatus', PHPFHIRConstants::TYPE_CLASS_FAMILY_HISTORY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRFamilyHistoryStatusList()
    {
        $this->assertEquals('FamilyHistoryStatus-list', PHPFHIRConstants::TYPE_NAME_FAMILY_HISTORY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRFamilyHistoryStatusList', PHPFHIRConstants::TYPE_CLASS_FAMILY_HISTORY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRFamilyMemberHistory()
    {
        $this->assertEquals('FamilyMemberHistory', PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory', PHPFHIRConstants::TYPE_CLASS_FAMILY_MEMBER_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRFamilyMemberHistory_FHIRFamilyMemberHistoryCondition()
    {
        $this->assertEquals('FamilyMemberHistory.Condition', PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition', PHPFHIRConstants::TYPE_CLASS_FAMILY_MEMBER_HISTORY_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRFHIRAllTypes()
    {
        $this->assertEquals('FHIRAllTypes', PHPFHIRConstants::TYPE_NAME_FHIRALL_TYPES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRAllTypes', PHPFHIRConstants::TYPE_CLASS_FHIRALL_TYPES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRFHIRAllTypesList()
    {
        $this->assertEquals('FHIRAllTypes-list', PHPFHIRConstants::TYPE_NAME_FHIRALL_TYPES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRFHIRAllTypesList', PHPFHIRConstants::TYPE_CLASS_FHIRALL_TYPES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRFHIRDefinedType()
    {
        $this->assertEquals('FHIRDefinedType', PHPFHIRConstants::TYPE_NAME_FHIRDEFINED_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDefinedType', PHPFHIRConstants::TYPE_CLASS_FHIRDEFINED_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRFHIRDefinedTypeList()
    {
        $this->assertEquals('FHIRDefinedType-list', PHPFHIRConstants::TYPE_NAME_FHIRDEFINED_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRFHIRDefinedTypeList', PHPFHIRConstants::TYPE_CLASS_FHIRDEFINED_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRFHIRDeviceStatus()
    {
        $this->assertEquals('FHIRDeviceStatus', PHPFHIRConstants::TYPE_NAME_FHIRDEVICE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRDeviceStatus', PHPFHIRConstants::TYPE_CLASS_FHIRDEVICE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRFHIRDeviceStatusList()
    {
        $this->assertEquals('FHIRDeviceStatus-list', PHPFHIRConstants::TYPE_NAME_FHIRDEVICE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRFHIRDeviceStatusList', PHPFHIRConstants::TYPE_CLASS_FHIRDEVICE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRFHIRSubstanceStatus()
    {
        $this->assertEquals('FHIRSubstanceStatus', PHPFHIRConstants::TYPE_NAME_FHIRSUBSTANCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFHIRSubstanceStatus', PHPFHIRConstants::TYPE_CLASS_FHIRSUBSTANCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRFHIRSubstanceStatusList()
    {
        $this->assertEquals('FHIRSubstanceStatus-list', PHPFHIRConstants::TYPE_NAME_FHIRSUBSTANCE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRFHIRSubstanceStatusList', PHPFHIRConstants::TYPE_CLASS_FHIRSUBSTANCE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRFilterOperator()
    {
        $this->assertEquals('FilterOperator', PHPFHIRConstants::TYPE_NAME_FILTER_OPERATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFilterOperator', PHPFHIRConstants::TYPE_CLASS_FILTER_OPERATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRFilterOperatorList()
    {
        $this->assertEquals('FilterOperator-list', PHPFHIRConstants::TYPE_NAME_FILTER_OPERATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRFilterOperatorList', PHPFHIRConstants::TYPE_CLASS_FILTER_OPERATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRFinancialResourceStatusCodes()
    {
        $this->assertEquals('FinancialResourceStatusCodes', PHPFHIRConstants::TYPE_NAME_FINANCIAL_RESOURCE_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFinancialResourceStatusCodes', PHPFHIRConstants::TYPE_CLASS_FINANCIAL_RESOURCE_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRFinancialResourceStatusCodesList()
    {
        $this->assertEquals('FinancialResourceStatusCodes-list', PHPFHIRConstants::TYPE_NAME_FINANCIAL_RESOURCE_STATUS_CODES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesList', PHPFHIRConstants::TYPE_CLASS_FINANCIAL_RESOURCE_STATUS_CODES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRFlag()
    {
        $this->assertEquals('Flag', PHPFHIRConstants::TYPE_NAME_FLAG);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRFlag', PHPFHIRConstants::TYPE_CLASS_FLAG);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRFlagStatus()
    {
        $this->assertEquals('FlagStatus', PHPFHIRConstants::TYPE_NAME_FLAG_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRFlagStatus', PHPFHIRConstants::TYPE_CLASS_FLAG_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRFlagStatusList()
    {
        $this->assertEquals('FlagStatus-list', PHPFHIRConstants::TYPE_NAME_FLAG_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRFlagStatusList', PHPFHIRConstants::TYPE_CLASS_FLAG_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRGoal()
    {
        $this->assertEquals('Goal', PHPFHIRConstants::TYPE_NAME_GOAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGoal', PHPFHIRConstants::TYPE_CLASS_GOAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRGoal_FHIRGoalTarget()
    {
        $this->assertEquals('Goal.Target', PHPFHIRConstants::TYPE_NAME_GOAL_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget', PHPFHIRConstants::TYPE_CLASS_GOAL_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRGoalStatus()
    {
        $this->assertEquals('GoalStatus', PHPFHIRConstants::TYPE_NAME_GOAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGoalStatus', PHPFHIRConstants::TYPE_CLASS_GOAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRGoalStatusList()
    {
        $this->assertEquals('GoalStatus-list', PHPFHIRConstants::TYPE_NAME_GOAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRGoalStatusList', PHPFHIRConstants::TYPE_CLASS_GOAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRGraphCompartmentRule()
    {
        $this->assertEquals('GraphCompartmentRule', PHPFHIRConstants::TYPE_NAME_GRAPH_COMPARTMENT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGraphCompartmentRule', PHPFHIRConstants::TYPE_CLASS_GRAPH_COMPARTMENT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRGraphCompartmentRuleList()
    {
        $this->assertEquals('GraphCompartmentRule-list', PHPFHIRConstants::TYPE_NAME_GRAPH_COMPARTMENT_RULE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRGraphCompartmentRuleList', PHPFHIRConstants::TYPE_CLASS_GRAPH_COMPARTMENT_RULE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRGraphDefinition()
    {
        $this->assertEquals('GraphDefinition', PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGraphDefinition', PHPFHIRConstants::TYPE_CLASS_GRAPH_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRGraphDefinition_FHIRGraphDefinitionCompartment()
    {
        $this->assertEquals('GraphDefinition.Compartment', PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_COMPARTMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment', PHPFHIRConstants::TYPE_CLASS_GRAPH_DEFINITION_DOT_COMPARTMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRGraphDefinition_FHIRGraphDefinitionLink()
    {
        $this->assertEquals('GraphDefinition.Link', PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink', PHPFHIRConstants::TYPE_CLASS_GRAPH_DEFINITION_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRGraphDefinition_FHIRGraphDefinitionTarget()
    {
        $this->assertEquals('GraphDefinition.Target', PHPFHIRConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget', PHPFHIRConstants::TYPE_CLASS_GRAPH_DEFINITION_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRGroup()
    {
        $this->assertEquals('Group', PHPFHIRConstants::TYPE_NAME_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGroup', PHPFHIRConstants::TYPE_CLASS_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupCharacteristic()
    {
        $this->assertEquals('Group.Characteristic', PHPFHIRConstants::TYPE_NAME_GROUP_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic', PHPFHIRConstants::TYPE_CLASS_GROUP_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupMember()
    {
        $this->assertEquals('Group.Member', PHPFHIRConstants::TYPE_NAME_GROUP_DOT_MEMBER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember', PHPFHIRConstants::TYPE_CLASS_GROUP_DOT_MEMBER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRGroupType()
    {
        $this->assertEquals('GroupType', PHPFHIRConstants::TYPE_NAME_GROUP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGroupType', PHPFHIRConstants::TYPE_CLASS_GROUP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRGroupTypeList()
    {
        $this->assertEquals('GroupType-list', PHPFHIRConstants::TYPE_NAME_GROUP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRGroupTypeList', PHPFHIRConstants::TYPE_CLASS_GROUP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRGuidanceResponse()
    {
        $this->assertEquals('GuidanceResponse', PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse', PHPFHIRConstants::TYPE_CLASS_GUIDANCE_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRGuidanceResponseStatus()
    {
        $this->assertEquals('GuidanceResponseStatus', PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidanceResponseStatus', PHPFHIRConstants::TYPE_CLASS_GUIDANCE_RESPONSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRGuidanceResponseStatusList()
    {
        $this->assertEquals('GuidanceResponseStatus-list', PHPFHIRConstants::TYPE_NAME_GUIDANCE_RESPONSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRGuidanceResponseStatusList', PHPFHIRConstants::TYPE_CLASS_GUIDANCE_RESPONSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRGuideDependencyType()
    {
        $this->assertEquals('GuideDependencyType', PHPFHIRConstants::TYPE_NAME_GUIDE_DEPENDENCY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuideDependencyType', PHPFHIRConstants::TYPE_CLASS_GUIDE_DEPENDENCY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRGuideDependencyTypeList()
    {
        $this->assertEquals('GuideDependencyType-list', PHPFHIRConstants::TYPE_NAME_GUIDE_DEPENDENCY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRGuideDependencyTypeList', PHPFHIRConstants::TYPE_CLASS_GUIDE_DEPENDENCY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRGuidePageKind()
    {
        $this->assertEquals('GuidePageKind', PHPFHIRConstants::TYPE_NAME_GUIDE_PAGE_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRGuidePageKind', PHPFHIRConstants::TYPE_CLASS_GUIDE_PAGE_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRGuidePageKindList()
    {
        $this->assertEquals('GuidePageKind-list', PHPFHIRConstants::TYPE_NAME_GUIDE_PAGE_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRGuidePageKindList', PHPFHIRConstants::TYPE_CLASS_GUIDE_PAGE_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRHealthcareService()
    {
        $this->assertEquals('HealthcareService', PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRHealthcareService', PHPFHIRConstants::TYPE_CLASS_HEALTHCARE_SERVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceAvailableTime()
    {
        $this->assertEquals('HealthcareService.AvailableTime', PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime', PHPFHIRConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceNotAvailable()
    {
        $this->assertEquals('HealthcareService.NotAvailable', PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_NOT_AVAILABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable', PHPFHIRConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_NOT_AVAILABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRHTTPVerb()
    {
        $this->assertEquals('HTTPVerb', PHPFHIRConstants::TYPE_NAME_HTTPVERB);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHTTPVerb', PHPFHIRConstants::TYPE_CLASS_HTTPVERB);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRHTTPVerbList()
    {
        $this->assertEquals('HTTPVerb-list', PHPFHIRConstants::TYPE_NAME_HTTPVERB_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRHTTPVerbList', PHPFHIRConstants::TYPE_CLASS_HTTPVERB_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRHumanName()
    {
        $this->assertEquals('HumanName', PHPFHIRConstants::TYPE_NAME_HUMAN_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRHumanName', PHPFHIRConstants::TYPE_CLASS_HUMAN_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRId()
    {
        $this->assertEquals('id', PHPFHIRConstants::TYPE_NAME_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRId', PHPFHIRConstants::TYPE_CLASS_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRIdPrimitive()
    {
        $this->assertEquals('id-primitive', PHPFHIRConstants::TYPE_NAME_ID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRIdPrimitive', PHPFHIRConstants::TYPE_CLASS_ID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRIdentifier()
    {
        $this->assertEquals('Identifier', PHPFHIRConstants::TYPE_NAME_IDENTIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifier', PHPFHIRConstants::TYPE_CLASS_IDENTIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRIdentifierUse()
    {
        $this->assertEquals('IdentifierUse', PHPFHIRConstants::TYPE_NAME_IDENTIFIER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentifierUse', PHPFHIRConstants::TYPE_CLASS_IDENTIFIER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRIdentifierUseList()
    {
        $this->assertEquals('IdentifierUse-list', PHPFHIRConstants::TYPE_NAME_IDENTIFIER_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRIdentifierUseList', PHPFHIRConstants::TYPE_CLASS_IDENTIFIER_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRIdentityAssuranceLevel()
    {
        $this->assertEquals('IdentityAssuranceLevel', PHPFHIRConstants::TYPE_NAME_IDENTITY_ASSURANCE_LEVEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIdentityAssuranceLevel', PHPFHIRConstants::TYPE_CLASS_IDENTITY_ASSURANCE_LEVEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRIdentityAssuranceLevelList()
    {
        $this->assertEquals('IdentityAssuranceLevel-list', PHPFHIRConstants::TYPE_NAME_IDENTITY_ASSURANCE_LEVEL_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRIdentityAssuranceLevelList', PHPFHIRConstants::TYPE_CLASS_IDENTITY_ASSURANCE_LEVEL_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRImagingManifest()
    {
        $this->assertEquals('ImagingManifest', PHPFHIRConstants::TYPE_NAME_IMAGING_MANIFEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingManifest', PHPFHIRConstants::TYPE_CLASS_IMAGING_MANIFEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImagingManifest_FHIRImagingManifestInstance()
    {
        $this->assertEquals('ImagingManifest.Instance', PHPFHIRConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestInstance', PHPFHIRConstants::TYPE_CLASS_IMAGING_MANIFEST_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImagingManifest_FHIRImagingManifestSeries()
    {
        $this->assertEquals('ImagingManifest.Series', PHPFHIRConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_SERIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestSeries', PHPFHIRConstants::TYPE_CLASS_IMAGING_MANIFEST_DOT_SERIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImagingManifest_FHIRImagingManifestStudy()
    {
        $this->assertEquals('ImagingManifest.Study', PHPFHIRConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestStudy', PHPFHIRConstants::TYPE_CLASS_IMAGING_MANIFEST_DOT_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRImagingStudy()
    {
        $this->assertEquals('ImagingStudy', PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImagingStudy', PHPFHIRConstants::TYPE_CLASS_IMAGING_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudyInstance()
    {
        $this->assertEquals('ImagingStudy.Instance', PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance', PHPFHIRConstants::TYPE_CLASS_IMAGING_STUDY_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudySeries()
    {
        $this->assertEquals('ImagingStudy.Series', PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY_DOT_SERIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries', PHPFHIRConstants::TYPE_CLASS_IMAGING_STUDY_DOT_SERIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRImmunization()
    {
        $this->assertEquals('Immunization', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunization', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationExplanation()
    {
        $this->assertEquals('Immunization.Explanation', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_EXPLANATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_EXPLANATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationPractitioner()
    {
        $this->assertEquals('Immunization.Practitioner', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_PRACTITIONER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_PRACTITIONER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationReaction()
    {
        $this->assertEquals('Immunization.Reaction', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationVaccinationProtocol()
    {
        $this->assertEquals('Immunization.VaccinationProtocol', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRImmunizationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationDateCriterion()
    {
        $this->assertEquals('ImmunizationRecommendation.DateCriterion', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationProtocol()
    {
        $this->assertEquals('ImmunizationRecommendation.Protocol', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation.Recommendation', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRImmunizationStatusCodes()
    {
        $this->assertEquals('ImmunizationStatusCodes', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRImmunizationStatusCodes', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRImmunizationStatusCodesList()
    {
        $this->assertEquals('ImmunizationStatusCodes-list', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_STATUS_CODES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRImmunizationStatusCodesList', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_STATUS_CODES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRImplementationGuide()
    {
        $this->assertEquals('ImplementationGuide', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRImplementationGuide', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideDependency()
    {
        $this->assertEquals('ImplementationGuide.Dependency', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEPENDENCY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_DEPENDENCY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideGlobal()
    {
        $this->assertEquals('ImplementationGuide.Global', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_GLOBAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_GLOBAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuidePackage()
    {
        $this->assertEquals('ImplementationGuide.Package', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PACKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_PACKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuidePage()
    {
        $this->assertEquals('ImplementationGuide.Page', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_PAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideResource()
    {
        $this->assertEquals('ImplementationGuide.Resource', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRInstanceAvailability()
    {
        $this->assertEquals('InstanceAvailability', PHPFHIRConstants::TYPE_NAME_INSTANCE_AVAILABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstanceAvailability', PHPFHIRConstants::TYPE_CLASS_INSTANCE_AVAILABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRInstanceAvailabilityList()
    {
        $this->assertEquals('InstanceAvailability-list', PHPFHIRConstants::TYPE_NAME_INSTANCE_AVAILABILITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRInstanceAvailabilityList', PHPFHIRConstants::TYPE_CLASS_INSTANCE_AVAILABILITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRInstant()
    {
        $this->assertEquals('instant', PHPFHIRConstants::TYPE_NAME_INSTANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInstant', PHPFHIRConstants::TYPE_CLASS_INSTANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRInstantPrimitive()
    {
        $this->assertEquals('instant-primitive', PHPFHIRConstants::TYPE_NAME_INSTANT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRInstantPrimitive', PHPFHIRConstants::TYPE_CLASS_INSTANT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRInteger()
    {
        $this->assertEquals('integer', PHPFHIRConstants::TYPE_NAME_INTEGER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRInteger', PHPFHIRConstants::TYPE_CLASS_INTEGER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRIntegerPrimitive()
    {
        $this->assertEquals('integer-primitive', PHPFHIRConstants::TYPE_NAME_INTEGER_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRIntegerPrimitive', PHPFHIRConstants::TYPE_CLASS_INTEGER_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRIssueSeverity()
    {
        $this->assertEquals('IssueSeverity', PHPFHIRConstants::TYPE_NAME_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueSeverity', PHPFHIRConstants::TYPE_CLASS_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRIssueSeverityList()
    {
        $this->assertEquals('IssueSeverity-list', PHPFHIRConstants::TYPE_NAME_ISSUE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRIssueSeverityList', PHPFHIRConstants::TYPE_CLASS_ISSUE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRIssueType()
    {
        $this->assertEquals('IssueType', PHPFHIRConstants::TYPE_NAME_ISSUE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRIssueType', PHPFHIRConstants::TYPE_CLASS_ISSUE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRIssueTypeList()
    {
        $this->assertEquals('IssueType-list', PHPFHIRConstants::TYPE_NAME_ISSUE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRIssueTypeList', PHPFHIRConstants::TYPE_CLASS_ISSUE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRLibrary()
    {
        $this->assertEquals('Library', PHPFHIRConstants::TYPE_NAME_LIBRARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLibrary', PHPFHIRConstants::TYPE_CLASS_LIBRARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRLinkage()
    {
        $this->assertEquals('Linkage', PHPFHIRConstants::TYPE_NAME_LINKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLinkage', PHPFHIRConstants::TYPE_CLASS_LINKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRLinkage_FHIRLinkageItem()
    {
        $this->assertEquals('Linkage.Item', PHPFHIRConstants::TYPE_NAME_LINKAGE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRLinkage\FHIRLinkageItem', PHPFHIRConstants::TYPE_CLASS_LINKAGE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRLinkageType()
    {
        $this->assertEquals('LinkageType', PHPFHIRConstants::TYPE_NAME_LINKAGE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRLinkageType', PHPFHIRConstants::TYPE_CLASS_LINKAGE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRLinkageTypeList()
    {
        $this->assertEquals('LinkageType-list', PHPFHIRConstants::TYPE_NAME_LINKAGE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRLinkageTypeList', PHPFHIRConstants::TYPE_CLASS_LINKAGE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRLinkType()
    {
        $this->assertEquals('LinkType', PHPFHIRConstants::TYPE_NAME_LINK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRLinkType', PHPFHIRConstants::TYPE_CLASS_LINK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRLinkTypeList()
    {
        $this->assertEquals('LinkType-list', PHPFHIRConstants::TYPE_NAME_LINK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRLinkTypeList', PHPFHIRConstants::TYPE_CLASS_LINK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRList()
    {
        $this->assertEquals('List', PHPFHIRConstants::TYPE_NAME_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRList', PHPFHIRConstants::TYPE_CLASS_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRList_FHIRListEntry()
    {
        $this->assertEquals('List.Entry', PHPFHIRConstants::TYPE_NAME_LIST_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry', PHPFHIRConstants::TYPE_CLASS_LIST_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRListMode()
    {
        $this->assertEquals('ListMode', PHPFHIRConstants::TYPE_NAME_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRListMode', PHPFHIRConstants::TYPE_CLASS_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRListModeList()
    {
        $this->assertEquals('ListMode-list', PHPFHIRConstants::TYPE_NAME_LIST_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRListModeList', PHPFHIRConstants::TYPE_CLASS_LIST_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRListStatus()
    {
        $this->assertEquals('ListStatus', PHPFHIRConstants::TYPE_NAME_LIST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRListStatus', PHPFHIRConstants::TYPE_CLASS_LIST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRListStatusList()
    {
        $this->assertEquals('ListStatus-list', PHPFHIRConstants::TYPE_NAME_LIST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRListStatusList', PHPFHIRConstants::TYPE_CLASS_LIST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRLocation()
    {
        $this->assertEquals('Location', PHPFHIRConstants::TYPE_NAME_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRLocation', PHPFHIRConstants::TYPE_CLASS_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRLocation_FHIRLocationPosition()
    {
        $this->assertEquals('Location.Position', PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition', PHPFHIRConstants::TYPE_CLASS_LOCATION_DOT_POSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRLocationMode()
    {
        $this->assertEquals('LocationMode', PHPFHIRConstants::TYPE_NAME_LOCATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRLocationMode', PHPFHIRConstants::TYPE_CLASS_LOCATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRLocationModeList()
    {
        $this->assertEquals('LocationMode-list', PHPFHIRConstants::TYPE_NAME_LOCATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRLocationModeList', PHPFHIRConstants::TYPE_CLASS_LOCATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRLocationStatus()
    {
        $this->assertEquals('LocationStatus', PHPFHIRConstants::TYPE_NAME_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRLocationStatus', PHPFHIRConstants::TYPE_CLASS_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRLocationStatusList()
    {
        $this->assertEquals('LocationStatus-list', PHPFHIRConstants::TYPE_NAME_LOCATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRLocationStatusList', PHPFHIRConstants::TYPE_CLASS_LOCATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMarkdown()
    {
        $this->assertEquals('markdown', PHPFHIRConstants::TYPE_NAME_MARKDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMarkdown', PHPFHIRConstants::TYPE_CLASS_MARKDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRMarkdownPrimitive()
    {
        $this->assertEquals('markdown-primitive', PHPFHIRConstants::TYPE_NAME_MARKDOWN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRMarkdownPrimitive', PHPFHIRConstants::TYPE_CLASS_MARKDOWN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMeasmntPrinciple()
    {
        $this->assertEquals('MeasmntPrinciple', PHPFHIRConstants::TYPE_NAME_MEASMNT_PRINCIPLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasmntPrinciple', PHPFHIRConstants::TYPE_CLASS_MEASMNT_PRINCIPLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMeasmntPrincipleList()
    {
        $this->assertEquals('MeasmntPrinciple-list', PHPFHIRConstants::TYPE_NAME_MEASMNT_PRINCIPLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMeasmntPrincipleList', PHPFHIRConstants::TYPE_CLASS_MEASMNT_PRINCIPLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMeasure()
    {
        $this->assertEquals('Measure', PHPFHIRConstants::TYPE_NAME_MEASURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasure', PHPFHIRConstants::TYPE_CLASS_MEASURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureGroup()
    {
        $this->assertEquals('Measure.Group', PHPFHIRConstants::TYPE_NAME_MEASURE_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup', PHPFHIRConstants::TYPE_CLASS_MEASURE_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasurePopulation()
    {
        $this->assertEquals('Measure.Population', PHPFHIRConstants::TYPE_NAME_MEASURE_DOT_POPULATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasurePopulation', PHPFHIRConstants::TYPE_CLASS_MEASURE_DOT_POPULATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureStratifier()
    {
        $this->assertEquals('Measure.Stratifier', PHPFHIRConstants::TYPE_NAME_MEASURE_DOT_STRATIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureStratifier', PHPFHIRConstants::TYPE_CLASS_MEASURE_DOT_STRATIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureSupplementalData()
    {
        $this->assertEquals('Measure.SupplementalData', PHPFHIRConstants::TYPE_NAME_MEASURE_DOT_SUPPLEMENTAL_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData', PHPFHIRConstants::TYPE_CLASS_MEASURE_DOT_SUPPLEMENTAL_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMeasureReport()
    {
        $this->assertEquals('MeasureReport', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMeasureReport', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportGroup()
    {
        $this->assertEquals('MeasureReport.Group', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportPopulation()
    {
        $this->assertEquals('MeasureReport.Population', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_POPULATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT_DOT_POPULATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportPopulation1()
    {
        $this->assertEquals('MeasureReport.Population1', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_POPULATION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT_DOT_POPULATION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportStratifier()
    {
        $this->assertEquals('MeasureReport.Stratifier', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_STRATIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT_DOT_STRATIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportStratum()
    {
        $this->assertEquals('MeasureReport.Stratum', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_DOT_STRATUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT_DOT_STRATUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMeasureReportStatus()
    {
        $this->assertEquals('MeasureReportStatus', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportStatus', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMeasureReportStatusList()
    {
        $this->assertEquals('MeasureReportStatus-list', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMeasureReportStatusList', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMeasureReportType()
    {
        $this->assertEquals('MeasureReportType', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeasureReportType', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMeasureReportTypeList()
    {
        $this->assertEquals('MeasureReportType-list', PHPFHIRConstants::TYPE_NAME_MEASURE_REPORT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMeasureReportTypeList', PHPFHIRConstants::TYPE_CLASS_MEASURE_REPORT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMedia()
    {
        $this->assertEquals('Media', PHPFHIRConstants::TYPE_NAME_MEDIA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedia', PHPFHIRConstants::TYPE_CLASS_MEDIA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMedication()
    {
        $this->assertEquals('Medication', PHPFHIRConstants::TYPE_NAME_MEDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedication', PHPFHIRConstants::TYPE_CLASS_MEDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationBatch()
    {
        $this->assertEquals('Medication.Batch', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_BATCH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_BATCH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationContent()
    {
        $this->assertEquals('Medication.Content', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationIngredient()
    {
        $this->assertEquals('Medication.Ingredient', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationPackage()
    {
        $this->assertEquals('Medication.Package', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_PACKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_PACKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMedicationAdministration()
    {
        $this->assertEquals('MedicationAdministration', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedicationAdministration_FHIRMedicationAdministrationDosage()
    {
        $this->assertEquals('MedicationAdministration.Dosage', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedicationAdministration_FHIRMedicationAdministrationPerformer()
    {
        $this->assertEquals('MedicationAdministration.Performer', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMedicationAdministrationStatus()
    {
        $this->assertEquals('MedicationAdministrationStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMedicationAdministrationStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMedicationAdministrationStatusList()
    {
        $this->assertEquals('MedicationAdministrationStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMedicationAdministrationStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMedicationDispense()
    {
        $this->assertEquals('MedicationDispense', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationDispense', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispensePerformer()
    {
        $this->assertEquals('MedicationDispense.Performer', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseSubstitution()
    {
        $this->assertEquals('MedicationDispense.Substitution', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMedicationDispenseStatus()
    {
        $this->assertEquals('MedicationDispenseStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMedicationDispenseStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMedicationDispenseStatusList()
    {
        $this->assertEquals('MedicationDispenseStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMedicationDispenseStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMedicationRequest()
    {
        $this->assertEquals('MedicationRequest', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationRequest', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedicationRequest_FHIRMedicationRequestDispenseRequest()
    {
        $this->assertEquals('MedicationRequest.DispenseRequest', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedicationRequest_FHIRMedicationRequestRequester()
    {
        $this->assertEquals('MedicationRequest.Requester', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestRequester', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMedicationRequest_FHIRMedicationRequestSubstitution()
    {
        $this->assertEquals('MedicationRequest.Substitution', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMedicationRequestIntent()
    {
        $this->assertEquals('MedicationRequestIntent', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMedicationRequestIntent', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMedicationRequestIntentList()
    {
        $this->assertEquals('MedicationRequestIntent-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_INTENT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMedicationRequestIntentList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST_INTENT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMedicationRequestPriority()
    {
        $this->assertEquals('MedicationRequestPriority', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMedicationRequestPriority', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMedicationRequestPriorityList()
    {
        $this->assertEquals('MedicationRequestPriority-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_PRIORITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMedicationRequestPriorityList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST_PRIORITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMedicationRequestStatus()
    {
        $this->assertEquals('MedicationRequestStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMedicationRequestStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMedicationRequestStatusList()
    {
        $this->assertEquals('MedicationRequestStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMedicationRequestStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMedicationStatement()
    {
        $this->assertEquals('MedicationStatement', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMedicationStatement', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMedicationStatementStatus()
    {
        $this->assertEquals('MedicationStatementStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMedicationStatementStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMedicationStatementStatusList()
    {
        $this->assertEquals('MedicationStatementStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMedicationStatementStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMedicationStatementTaken()
    {
        $this->assertEquals('MedicationStatementTaken', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT_TAKEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMedicationStatementTaken', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT_TAKEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMedicationStatementTakenList()
    {
        $this->assertEquals('MedicationStatementTaken-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT_TAKEN_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMedicationStatementTakenList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT_TAKEN_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMedicationStatus()
    {
        $this->assertEquals('MedicationStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMedicationStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMedicationStatusList()
    {
        $this->assertEquals('MedicationStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMedicationStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMessageDefinition()
    {
        $this->assertEquals('MessageDefinition', PHPFHIRConstants::TYPE_NAME_MESSAGE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageDefinition', PHPFHIRConstants::TYPE_CLASS_MESSAGE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMessageDefinition_FHIRMessageDefinitionAllowedResponse()
    {
        $this->assertEquals('MessageDefinition.AllowedResponse', PHPFHIRConstants::TYPE_NAME_MESSAGE_DEFINITION_DOT_ALLOWED_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse', PHPFHIRConstants::TYPE_CLASS_MESSAGE_DEFINITION_DOT_ALLOWED_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMessageDefinition_FHIRMessageDefinitionFocus()
    {
        $this->assertEquals('MessageDefinition.Focus', PHPFHIRConstants::TYPE_NAME_MESSAGE_DEFINITION_DOT_FOCUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionFocus', PHPFHIRConstants::TYPE_CLASS_MESSAGE_DEFINITION_DOT_FOCUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRMessageHeader()
    {
        $this->assertEquals('MessageHeader', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRMessageHeader', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderDestination()
    {
        $this->assertEquals('MessageHeader.Destination', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER_DOT_DESTINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_DESTINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderResponse()
    {
        $this->assertEquals('MessageHeader.Response', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderSource()
    {
        $this->assertEquals('MessageHeader.Source', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMessageSignificanceCategory()
    {
        $this->assertEquals('MessageSignificanceCategory', PHPFHIRConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMessageSignificanceCategory', PHPFHIRConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRMessageSignificanceCategoryList()
    {
        $this->assertEquals('MessageSignificanceCategory-list', PHPFHIRConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRMessageSignificanceCategoryList', PHPFHIRConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRMeta()
    {
        $this->assertEquals('Meta', PHPFHIRConstants::TYPE_NAME_META);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRMeta', PHPFHIRConstants::TYPE_CLASS_META);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQuantity_FHIRMoney()
    {
        $this->assertEquals('Money', PHPFHIRConstants::TYPE_NAME_MONEY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity\FHIRMoney', PHPFHIRConstants::TYPE_CLASS_MONEY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRNameUse()
    {
        $this->assertEquals('NameUse', PHPFHIRConstants::TYPE_NAME_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNameUse', PHPFHIRConstants::TYPE_CLASS_NAME_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRNameUseList()
    {
        $this->assertEquals('NameUse-list', PHPFHIRConstants::TYPE_NAME_NAME_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRNameUseList', PHPFHIRConstants::TYPE_CLASS_NAME_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRNamingSystem()
    {
        $this->assertEquals('NamingSystem', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNamingSystem', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRNamingSystem_FHIRNamingSystemUniqueId()
    {
        $this->assertEquals('NamingSystem.UniqueId', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_DOT_UNIQUE_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_DOT_UNIQUE_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRNamingSystemIdentifierType()
    {
        $this->assertEquals('NamingSystemIdentifierType', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_IDENTIFIER_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNamingSystemIdentifierType', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_IDENTIFIER_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRNamingSystemIdentifierTypeList()
    {
        $this->assertEquals('NamingSystemIdentifierType-list', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_IDENTIFIER_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRNamingSystemIdentifierTypeList', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_IDENTIFIER_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRNamingSystemType()
    {
        $this->assertEquals('NamingSystemType', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNamingSystemType', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRNamingSystemTypeList()
    {
        $this->assertEquals('NamingSystemType-list', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRNamingSystemTypeList', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRNarrative()
    {
        $this->assertEquals('Narrative', PHPFHIRConstants::TYPE_NAME_NARRATIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrative', PHPFHIRConstants::TYPE_CLASS_NARRATIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRNarrativeStatus()
    {
        $this->assertEquals('NarrativeStatus', PHPFHIRConstants::TYPE_NAME_NARRATIVE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNarrativeStatus', PHPFHIRConstants::TYPE_CLASS_NARRATIVE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRNarrativeStatusList()
    {
        $this->assertEquals('NarrativeStatus-list', PHPFHIRConstants::TYPE_NAME_NARRATIVE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRNarrativeStatusList', PHPFHIRConstants::TYPE_CLASS_NARRATIVE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRNoteType()
    {
        $this->assertEquals('NoteType', PHPFHIRConstants::TYPE_NAME_NOTE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNoteType', PHPFHIRConstants::TYPE_CLASS_NOTE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRNoteTypeList()
    {
        $this->assertEquals('NoteType-list', PHPFHIRConstants::TYPE_NAME_NOTE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRNoteTypeList', PHPFHIRConstants::TYPE_CLASS_NOTE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRNutritionOrder()
    {
        $this->assertEquals('NutritionOrder', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRNutritionOrder', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderAdministration()
    {
        $this->assertEquals('NutritionOrder.Administration', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderEnteralFormula()
    {
        $this->assertEquals('NutritionOrder.EnteralFormula', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ENTERAL_FORMULA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderNutrient()
    {
        $this->assertEquals('NutritionOrder.Nutrient', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_NUTRIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_NUTRIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderOralDiet()
    {
        $this->assertEquals('NutritionOrder.OralDiet', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ORAL_DIET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderSupplement()
    {
        $this->assertEquals('NutritionOrder.Supplement', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_SUPPLEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_SUPPLEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderTexture()
    {
        $this->assertEquals('NutritionOrder.Texture', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_TEXTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_TEXTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRNutritionOrderStatus()
    {
        $this->assertEquals('NutritionOrderStatus', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRNutritionOrderStatus', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRNutritionOrderStatusList()
    {
        $this->assertEquals('NutritionOrderStatus-list', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRNutritionOrderStatusList', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRObservation()
    {
        $this->assertEquals('Observation', PHPFHIRConstants::TYPE_NAME_OBSERVATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRObservation', PHPFHIRConstants::TYPE_CLASS_OBSERVATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationComponent()
    {
        $this->assertEquals('Observation.Component', PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_DOT_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationReferenceRange()
    {
        $this->assertEquals('Observation.ReferenceRange', PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_REFERENCE_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_DOT_REFERENCE_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationRelated()
    {
        $this->assertEquals('Observation.Related', PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRObservationRelationshipType()
    {
        $this->assertEquals('ObservationRelationshipType', PHPFHIRConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRObservationRelationshipType', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRObservationRelationshipTypeList()
    {
        $this->assertEquals('ObservationRelationshipType-list', PHPFHIRConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRObservationRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRObservationStatus()
    {
        $this->assertEquals('ObservationStatus', PHPFHIRConstants::TYPE_NAME_OBSERVATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRObservationStatus', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRObservationStatusList()
    {
        $this->assertEquals('ObservationStatus-list', PHPFHIRConstants::TYPE_NAME_OBSERVATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRObservationStatusList', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIROid()
    {
        $this->assertEquals('oid', PHPFHIRConstants::TYPE_NAME_OID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROid', PHPFHIRConstants::TYPE_CLASS_OID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIROidPrimitive()
    {
        $this->assertEquals('oid-primitive', PHPFHIRConstants::TYPE_NAME_OID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIROidPrimitive', PHPFHIRConstants::TYPE_CLASS_OID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIROperationDefinition()
    {
        $this->assertEquals('OperationDefinition', PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationDefinition', PHPFHIRConstants::TYPE_CLASS_OPERATION_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionBinding()
    {
        $this->assertEquals('OperationDefinition.Binding', PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding', PHPFHIRConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionOverload()
    {
        $this->assertEquals('OperationDefinition.Overload', PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_OVERLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload', PHPFHIRConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_OVERLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionParameter()
    {
        $this->assertEquals('OperationDefinition.Parameter', PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter', PHPFHIRConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIROperationKind()
    {
        $this->assertEquals('OperationKind', PHPFHIRConstants::TYPE_NAME_OPERATION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROperationKind', PHPFHIRConstants::TYPE_CLASS_OPERATION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIROperationKindList()
    {
        $this->assertEquals('OperationKind-list', PHPFHIRConstants::TYPE_NAME_OPERATION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIROperationKindList', PHPFHIRConstants::TYPE_CLASS_OPERATION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIROperationOutcome()
    {
        $this->assertEquals('OperationOutcome', PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROperationOutcome', PHPFHIRConstants::TYPE_CLASS_OPERATION_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIROperationOutcome_FHIROperationOutcomeIssue()
    {
        $this->assertEquals('OperationOutcome.Issue', PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue', PHPFHIRConstants::TYPE_CLASS_OPERATION_OUTCOME_DOT_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIROperationParameterUse()
    {
        $this->assertEquals('OperationParameterUse', PHPFHIRConstants::TYPE_NAME_OPERATION_PARAMETER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIROperationParameterUse', PHPFHIRConstants::TYPE_CLASS_OPERATION_PARAMETER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIROperationParameterUseList()
    {
        $this->assertEquals('OperationParameterUse-list', PHPFHIRConstants::TYPE_NAME_OPERATION_PARAMETER_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIROperationParameterUseList', PHPFHIRConstants::TYPE_CLASS_OPERATION_PARAMETER_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIROrganization()
    {
        $this->assertEquals('Organization', PHPFHIRConstants::TYPE_NAME_ORGANIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIROrganization', PHPFHIRConstants::TYPE_CLASS_ORGANIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIROrganization_FHIROrganizationContact()
    {
        $this->assertEquals('Organization.Contact', PHPFHIRConstants::TYPE_NAME_ORGANIZATION_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact', PHPFHIRConstants::TYPE_CLASS_ORGANIZATION_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRParameterDefinition()
    {
        $this->assertEquals('ParameterDefinition', PHPFHIRConstants::TYPE_NAME_PARAMETER_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRParameterDefinition', PHPFHIRConstants::TYPE_CLASS_PARAMETER_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRParameters()
    {
        $this->assertEquals('Parameters', PHPFHIRConstants::TYPE_NAME_PARAMETERS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRParameters', PHPFHIRConstants::TYPE_CLASS_PARAMETERS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRParameters_FHIRParametersParameter()
    {
        $this->assertEquals('Parameters.Parameter', PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter', PHPFHIRConstants::TYPE_CLASS_PARAMETERS_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRParticipantRequired()
    {
        $this->assertEquals('ParticipantRequired', PHPFHIRConstants::TYPE_NAME_PARTICIPANT_REQUIRED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRParticipantRequired', PHPFHIRConstants::TYPE_CLASS_PARTICIPANT_REQUIRED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRParticipantRequiredList()
    {
        $this->assertEquals('ParticipantRequired-list', PHPFHIRConstants::TYPE_NAME_PARTICIPANT_REQUIRED_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRParticipantRequiredList', PHPFHIRConstants::TYPE_CLASS_PARTICIPANT_REQUIRED_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRParticipationStatus()
    {
        $this->assertEquals('ParticipationStatus', PHPFHIRConstants::TYPE_NAME_PARTICIPATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRParticipationStatus', PHPFHIRConstants::TYPE_CLASS_PARTICIPATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRParticipationStatusList()
    {
        $this->assertEquals('ParticipationStatus-list', PHPFHIRConstants::TYPE_NAME_PARTICIPATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRParticipationStatusList', PHPFHIRConstants::TYPE_CLASS_PARTICIPATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRPatient()
    {
        $this->assertEquals('Patient', PHPFHIRConstants::TYPE_NAME_PATIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPatient', PHPFHIRConstants::TYPE_CLASS_PATIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientAnimal()
    {
        $this->assertEquals('Patient.Animal', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_ANIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_ANIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientCommunication()
    {
        $this->assertEquals('Patient.Communication', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_COMMUNICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_COMMUNICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientContact()
    {
        $this->assertEquals('Patient.Contact', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientLink()
    {
        $this->assertEquals('Patient.Link', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRPaymentNotice()
    {
        $this->assertEquals('PaymentNotice', PHPFHIRConstants::TYPE_NAME_PAYMENT_NOTICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentNotice', PHPFHIRConstants::TYPE_CLASS_PAYMENT_NOTICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRPaymentReconciliation()
    {
        $this->assertEquals('PaymentReconciliation', PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation', PHPFHIRConstants::TYPE_CLASS_PAYMENT_RECONCILIATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPaymentReconciliation_FHIRPaymentReconciliationDetail()
    {
        $this->assertEquals('PaymentReconciliation.Detail', PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail', PHPFHIRConstants::TYPE_CLASS_PAYMENT_RECONCILIATION_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPaymentReconciliation_FHIRPaymentReconciliationProcessNote()
    {
        $this->assertEquals('PaymentReconciliation.ProcessNote', PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote', PHPFHIRConstants::TYPE_CLASS_PAYMENT_RECONCILIATION_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRPeriod()
    {
        $this->assertEquals('Period', PHPFHIRConstants::TYPE_NAME_PERIOD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPeriod', PHPFHIRConstants::TYPE_CLASS_PERIOD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRPerson()
    {
        $this->assertEquals('Person', PHPFHIRConstants::TYPE_NAME_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPerson', PHPFHIRConstants::TYPE_CLASS_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPerson_FHIRPersonLink()
    {
        $this->assertEquals('Person.Link', PHPFHIRConstants::TYPE_NAME_PERSON_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink', PHPFHIRConstants::TYPE_CLASS_PERSON_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRPlanDefinition()
    {
        $this->assertEquals('PlanDefinition', PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPlanDefinition', PHPFHIRConstants::TYPE_CLASS_PLAN_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionAction()
    {
        $this->assertEquals('PlanDefinition.Action', PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction', PHPFHIRConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionCondition()
    {
        $this->assertEquals('PlanDefinition.Condition', PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition', PHPFHIRConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionDynamicValue()
    {
        $this->assertEquals('PlanDefinition.DynamicValue', PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_DYNAMIC_VALUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue', PHPFHIRConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_DYNAMIC_VALUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionGoal()
    {
        $this->assertEquals('PlanDefinition.Goal', PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_GOAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionGoal', PHPFHIRConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_GOAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionParticipant()
    {
        $this->assertEquals('PlanDefinition.Participant', PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant', PHPFHIRConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionRelatedAction()
    {
        $this->assertEquals('PlanDefinition.RelatedAction', PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_RELATED_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction', PHPFHIRConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_RELATED_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionTarget()
    {
        $this->assertEquals('PlanDefinition.Target', PHPFHIRConstants::TYPE_NAME_PLAN_DEFINITION_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget', PHPFHIRConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRPositiveInt()
    {
        $this->assertEquals('positiveInt', PHPFHIRConstants::TYPE_NAME_POSITIVE_INT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPositiveInt', PHPFHIRConstants::TYPE_CLASS_POSITIVE_INT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRPositiveIntPrimitive()
    {
        $this->assertEquals('positiveInt-primitive', PHPFHIRConstants::TYPE_NAME_POSITIVE_INT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRPositiveIntPrimitive', PHPFHIRConstants::TYPE_CLASS_POSITIVE_INT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRPractitioner()
    {
        $this->assertEquals('Practitioner', PHPFHIRConstants::TYPE_NAME_PRACTITIONER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitioner', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPractitioner_FHIRPractitionerQualification()
    {
        $this->assertEquals('Practitioner.Qualification', PHPFHIRConstants::TYPE_NAME_PRACTITIONER_DOT_QUALIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER_DOT_QUALIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRPractitionerRole()
    {
        $this->assertEquals('PractitionerRole', PHPFHIRConstants::TYPE_NAME_PRACTITIONER_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRPractitionerRole', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPractitionerRole_FHIRPractitionerRoleAvailableTime()
    {
        $this->assertEquals('PractitionerRole.AvailableTime', PHPFHIRConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRPractitionerRole_FHIRPractitionerRoleNotAvailable()
    {
        $this->assertEquals('PractitionerRole.NotAvailable', PHPFHIRConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_NOT_AVAILABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER_ROLE_DOT_NOT_AVAILABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRProcedure()
    {
        $this->assertEquals('Procedure', PHPFHIRConstants::TYPE_NAME_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedure', PHPFHIRConstants::TYPE_CLASS_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedureFocalDevice()
    {
        $this->assertEquals('Procedure.FocalDevice', PHPFHIRConstants::TYPE_NAME_PROCEDURE_DOT_FOCAL_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_DOT_FOCAL_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedurePerformer()
    {
        $this->assertEquals('Procedure.Performer', PHPFHIRConstants::TYPE_NAME_PROCEDURE_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRProcedureRequest()
    {
        $this->assertEquals('ProcedureRequest', PHPFHIRConstants::TYPE_NAME_PROCEDURE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcedureRequest', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRProcedureRequest_FHIRProcedureRequestRequester()
    {
        $this->assertEquals('ProcedureRequest.Requester', PHPFHIRConstants::TYPE_NAME_PROCEDURE_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcedureRequest\FHIRProcedureRequestRequester', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRProcessRequest()
    {
        $this->assertEquals('ProcessRequest', PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessRequest', PHPFHIRConstants::TYPE_CLASS_PROCESS_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRProcessRequest_FHIRProcessRequestItem()
    {
        $this->assertEquals('ProcessRequest.Item', PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem', PHPFHIRConstants::TYPE_CLASS_PROCESS_REQUEST_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRProcessResponse()
    {
        $this->assertEquals('ProcessResponse', PHPFHIRConstants::TYPE_NAME_PROCESS_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProcessResponse', PHPFHIRConstants::TYPE_CLASS_PROCESS_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRProcessResponse_FHIRProcessResponseProcessNote()
    {
        $this->assertEquals('ProcessResponse.ProcessNote', PHPFHIRConstants::TYPE_NAME_PROCESS_RESPONSE_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote', PHPFHIRConstants::TYPE_CLASS_PROCESS_RESPONSE_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRPropertyRepresentation()
    {
        $this->assertEquals('PropertyRepresentation', PHPFHIRConstants::TYPE_NAME_PROPERTY_REPRESENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPropertyRepresentation', PHPFHIRConstants::TYPE_CLASS_PROPERTY_REPRESENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRPropertyRepresentationList()
    {
        $this->assertEquals('PropertyRepresentation-list', PHPFHIRConstants::TYPE_NAME_PROPERTY_REPRESENTATION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRPropertyRepresentationList', PHPFHIRConstants::TYPE_CLASS_PROPERTY_REPRESENTATION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRPropertyType()
    {
        $this->assertEquals('PropertyType', PHPFHIRConstants::TYPE_NAME_PROPERTY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPropertyType', PHPFHIRConstants::TYPE_CLASS_PROPERTY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRPropertyTypeList()
    {
        $this->assertEquals('PropertyType-list', PHPFHIRConstants::TYPE_NAME_PROPERTY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRPropertyTypeList', PHPFHIRConstants::TYPE_CLASS_PROPERTY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRProvenance()
    {
        $this->assertEquals('Provenance', PHPFHIRConstants::TYPE_NAME_PROVENANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRProvenance', PHPFHIRConstants::TYPE_CLASS_PROVENANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceAgent()
    {
        $this->assertEquals('Provenance.Agent', PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceEntity()
    {
        $this->assertEquals('Provenance.Entity', PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_DOT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRProvenanceEntityRole()
    {
        $this->assertEquals('ProvenanceEntityRole', PHPFHIRConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRProvenanceEntityRole', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRProvenanceEntityRoleList()
    {
        $this->assertEquals('ProvenanceEntityRole-list', PHPFHIRConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRProvenanceEntityRoleList', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRPublicationStatus()
    {
        $this->assertEquals('PublicationStatus', PHPFHIRConstants::TYPE_NAME_PUBLICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRPublicationStatus', PHPFHIRConstants::TYPE_CLASS_PUBLICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRPublicationStatusList()
    {
        $this->assertEquals('PublicationStatus-list', PHPFHIRConstants::TYPE_NAME_PUBLICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRPublicationStatusList', PHPFHIRConstants::TYPE_CLASS_PUBLICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQualityType()
    {
        $this->assertEquals('qualityType', PHPFHIRConstants::TYPE_NAME_QUALITY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQualityType', PHPFHIRConstants::TYPE_CLASS_QUALITY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRQualityTypeList()
    {
        $this->assertEquals('qualityType-list', PHPFHIRConstants::TYPE_NAME_QUALITY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRQualityTypeList', PHPFHIRConstants::TYPE_CLASS_QUALITY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQuantity()
    {
        $this->assertEquals('Quantity', PHPFHIRConstants::TYPE_NAME_QUANTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantity', PHPFHIRConstants::TYPE_CLASS_QUANTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQuantityComparator()
    {
        $this->assertEquals('QuantityComparator', PHPFHIRConstants::TYPE_NAME_QUANTITY_COMPARATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuantityComparator', PHPFHIRConstants::TYPE_CLASS_QUANTITY_COMPARATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRQuantityComparatorList()
    {
        $this->assertEquals('QuantityComparator-list', PHPFHIRConstants::TYPE_NAME_QUANTITY_COMPARATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRQuantityComparatorList', PHPFHIRConstants::TYPE_CLASS_QUANTITY_COMPARATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRQuestionnaire()
    {
        $this->assertEquals('Questionnaire', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaire', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireEnableWhen()
    {
        $this->assertEquals('Questionnaire.EnableWhen', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_ENABLE_WHEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireItem()
    {
        $this->assertEquals('Questionnaire.Item', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireOption()
    {
        $this->assertEquals('Questionnaire.Option', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_OPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_OPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQuestionnaireItemType()
    {
        $this->assertEquals('QuestionnaireItemType', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_ITEM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuestionnaireItemType', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_ITEM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRQuestionnaireItemTypeList()
    {
        $this->assertEquals('QuestionnaireItemType-list', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_ITEM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRQuestionnaireItemTypeList', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_ITEM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRQuestionnaireResponse()
    {
        $this->assertEquals('QuestionnaireResponse', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRQuestionnaireResponse_FHIRQuestionnaireResponseAnswer()
    {
        $this->assertEquals('QuestionnaireResponse.Answer', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ANSWER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_DOT_ANSWER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRQuestionnaireResponse_FHIRQuestionnaireResponseItem()
    {
        $this->assertEquals('QuestionnaireResponse.Item', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRQuestionnaireResponseStatus()
    {
        $this->assertEquals('QuestionnaireResponseStatus', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRQuestionnaireResponseStatus', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRQuestionnaireResponseStatusList()
    {
        $this->assertEquals('QuestionnaireResponseStatus-list', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRQuestionnaireResponseStatusList', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRange()
    {
        $this->assertEquals('Range', PHPFHIRConstants::TYPE_NAME_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRange', PHPFHIRConstants::TYPE_CLASS_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRatio()
    {
        $this->assertEquals('Ratio', PHPFHIRConstants::TYPE_NAME_RATIO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRatio', PHPFHIRConstants::TYPE_CLASS_RATIO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRReference()
    {
        $this->assertEquals('Reference', PHPFHIRConstants::TYPE_NAME_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReference', PHPFHIRConstants::TYPE_CLASS_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRReferenceHandlingPolicy()
    {
        $this->assertEquals('ReferenceHandlingPolicy', PHPFHIRConstants::TYPE_NAME_REFERENCE_HANDLING_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceHandlingPolicy', PHPFHIRConstants::TYPE_CLASS_REFERENCE_HANDLING_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRReferenceHandlingPolicyList()
    {
        $this->assertEquals('ReferenceHandlingPolicy-list', PHPFHIRConstants::TYPE_NAME_REFERENCE_HANDLING_POLICY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRReferenceHandlingPolicyList', PHPFHIRConstants::TYPE_CLASS_REFERENCE_HANDLING_POLICY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRReferenceVersionRules()
    {
        $this->assertEquals('ReferenceVersionRules', PHPFHIRConstants::TYPE_NAME_REFERENCE_VERSION_RULES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRReferenceVersionRules', PHPFHIRConstants::TYPE_CLASS_REFERENCE_VERSION_RULES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRReferenceVersionRulesList()
    {
        $this->assertEquals('ReferenceVersionRules-list', PHPFHIRConstants::TYPE_NAME_REFERENCE_VERSION_RULES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRReferenceVersionRulesList', PHPFHIRConstants::TYPE_CLASS_REFERENCE_VERSION_RULES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRReferralRequest()
    {
        $this->assertEquals('ReferralRequest', PHPFHIRConstants::TYPE_NAME_REFERRAL_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRReferralRequest', PHPFHIRConstants::TYPE_CLASS_REFERRAL_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRReferralRequest_FHIRReferralRequestRequester()
    {
        $this->assertEquals('ReferralRequest.Requester', PHPFHIRConstants::TYPE_NAME_REFERRAL_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRReferralRequest\FHIRReferralRequestRequester', PHPFHIRConstants::TYPE_CLASS_REFERRAL_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRelatedArtifact()
    {
        $this->assertEquals('RelatedArtifact', PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifact', PHPFHIRConstants::TYPE_CLASS_RELATED_ARTIFACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRelatedArtifactType()
    {
        $this->assertEquals('RelatedArtifactType', PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRelatedArtifactType', PHPFHIRConstants::TYPE_CLASS_RELATED_ARTIFACT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRRelatedArtifactTypeList()
    {
        $this->assertEquals('RelatedArtifactType-list', PHPFHIRConstants::TYPE_NAME_RELATED_ARTIFACT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRRelatedArtifactTypeList', PHPFHIRConstants::TYPE_CLASS_RELATED_ARTIFACT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRRelatedPerson()
    {
        $this->assertEquals('RelatedPerson', PHPFHIRConstants::TYPE_NAME_RELATED_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRelatedPerson', PHPFHIRConstants::TYPE_CLASS_RELATED_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRemittanceOutcome()
    {
        $this->assertEquals('RemittanceOutcome', PHPFHIRConstants::TYPE_NAME_REMITTANCE_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRemittanceOutcome', PHPFHIRConstants::TYPE_CLASS_REMITTANCE_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRRemittanceOutcomeList()
    {
        $this->assertEquals('RemittanceOutcome-list', PHPFHIRConstants::TYPE_NAME_REMITTANCE_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRRemittanceOutcomeList', PHPFHIRConstants::TYPE_CLASS_REMITTANCE_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRepositoryType()
    {
        $this->assertEquals('repositoryType', PHPFHIRConstants::TYPE_NAME_REPOSITORY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRepositoryType', PHPFHIRConstants::TYPE_CLASS_REPOSITORY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRRepositoryTypeList()
    {
        $this->assertEquals('repositoryType-list', PHPFHIRConstants::TYPE_NAME_REPOSITORY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRRepositoryTypeList', PHPFHIRConstants::TYPE_CLASS_REPOSITORY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRRequestGroup()
    {
        $this->assertEquals('RequestGroup', PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRequestGroup', PHPFHIRConstants::TYPE_CLASS_REQUEST_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRRequestGroup_FHIRRequestGroupAction()
    {
        $this->assertEquals('RequestGroup.Action', PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction', PHPFHIRConstants::TYPE_CLASS_REQUEST_GROUP_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRRequestGroup_FHIRRequestGroupCondition()
    {
        $this->assertEquals('RequestGroup.Condition', PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition', PHPFHIRConstants::TYPE_CLASS_REQUEST_GROUP_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRRequestGroup_FHIRRequestGroupRelatedAction()
    {
        $this->assertEquals('RequestGroup.RelatedAction', PHPFHIRConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction', PHPFHIRConstants::TYPE_CLASS_REQUEST_GROUP_DOT_RELATED_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRequestIntent()
    {
        $this->assertEquals('RequestIntent', PHPFHIRConstants::TYPE_NAME_REQUEST_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestIntent', PHPFHIRConstants::TYPE_CLASS_REQUEST_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRRequestIntentList()
    {
        $this->assertEquals('RequestIntent-list', PHPFHIRConstants::TYPE_NAME_REQUEST_INTENT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRRequestIntentList', PHPFHIRConstants::TYPE_CLASS_REQUEST_INTENT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRequestPriority()
    {
        $this->assertEquals('RequestPriority', PHPFHIRConstants::TYPE_NAME_REQUEST_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestPriority', PHPFHIRConstants::TYPE_CLASS_REQUEST_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRRequestPriorityList()
    {
        $this->assertEquals('RequestPriority-list', PHPFHIRConstants::TYPE_NAME_REQUEST_PRIORITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRRequestPriorityList', PHPFHIRConstants::TYPE_CLASS_REQUEST_PRIORITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRequestStatus()
    {
        $this->assertEquals('RequestStatus', PHPFHIRConstants::TYPE_NAME_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRequestStatus', PHPFHIRConstants::TYPE_CLASS_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRRequestStatusList()
    {
        $this->assertEquals('RequestStatus-list', PHPFHIRConstants::TYPE_NAME_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRRequestStatusList', PHPFHIRConstants::TYPE_CLASS_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRResearchStudy()
    {
        $this->assertEquals('ResearchStudy', PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchStudy', PHPFHIRConstants::TYPE_CLASS_RESEARCH_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRResearchStudy_FHIRResearchStudyArm()
    {
        $this->assertEquals('ResearchStudy.Arm', PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY_DOT_ARM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm', PHPFHIRConstants::TYPE_CLASS_RESEARCH_STUDY_DOT_ARM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRResearchStudyStatus()
    {
        $this->assertEquals('ResearchStudyStatus', PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchStudyStatus', PHPFHIRConstants::TYPE_CLASS_RESEARCH_STUDY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRResearchStudyStatusList()
    {
        $this->assertEquals('ResearchStudyStatus-list', PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRResearchStudyStatusList', PHPFHIRConstants::TYPE_CLASS_RESEARCH_STUDY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRResearchSubject()
    {
        $this->assertEquals('ResearchSubject', PHPFHIRConstants::TYPE_NAME_RESEARCH_SUBJECT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRResearchSubject', PHPFHIRConstants::TYPE_CLASS_RESEARCH_SUBJECT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRResearchSubjectStatus()
    {
        $this->assertEquals('ResearchSubjectStatus', PHPFHIRConstants::TYPE_NAME_RESEARCH_SUBJECT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResearchSubjectStatus', PHPFHIRConstants::TYPE_CLASS_RESEARCH_SUBJECT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRResearchSubjectStatusList()
    {
        $this->assertEquals('ResearchSubjectStatus-list', PHPFHIRConstants::TYPE_NAME_RESEARCH_SUBJECT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRResearchSubjectStatusList', PHPFHIRConstants::TYPE_CLASS_RESEARCH_SUBJECT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource()
    {
        $this->assertEquals('Resource', PHPFHIRConstants::TYPE_NAME_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource', PHPFHIRConstants::TYPE_CLASS_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResourceContainer()
    {
        $this->assertEquals('ResourceContainer', PHPFHIRConstants::TYPE_NAME_RESOURCE_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResourceContainer', PHPFHIRConstants::TYPE_CLASS_RESOURCE_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRResourceType()
    {
        $this->assertEquals('ResourceType', PHPFHIRConstants::TYPE_NAME_RESOURCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceType', PHPFHIRConstants::TYPE_CLASS_RESOURCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRResourceTypeList()
    {
        $this->assertEquals('ResourceType-list', PHPFHIRConstants::TYPE_NAME_RESOURCE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRResourceTypeList', PHPFHIRConstants::TYPE_CLASS_RESOURCE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRResourceVersionPolicy()
    {
        $this->assertEquals('ResourceVersionPolicy', PHPFHIRConstants::TYPE_NAME_RESOURCE_VERSION_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResourceVersionPolicy', PHPFHIRConstants::TYPE_CLASS_RESOURCE_VERSION_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRResourceVersionPolicyList()
    {
        $this->assertEquals('ResourceVersionPolicy-list', PHPFHIRConstants::TYPE_NAME_RESOURCE_VERSION_POLICY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRResourceVersionPolicyList', PHPFHIRConstants::TYPE_CLASS_RESOURCE_VERSION_POLICY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRResponseType()
    {
        $this->assertEquals('ResponseType', PHPFHIRConstants::TYPE_NAME_RESPONSE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRResponseType', PHPFHIRConstants::TYPE_CLASS_RESPONSE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRResponseTypeList()
    {
        $this->assertEquals('ResponseType-list', PHPFHIRConstants::TYPE_NAME_RESPONSE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRResponseTypeList', PHPFHIRConstants::TYPE_CLASS_RESPONSE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRRestfulCapabilityMode()
    {
        $this->assertEquals('RestfulCapabilityMode', PHPFHIRConstants::TYPE_NAME_RESTFUL_CAPABILITY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRRestfulCapabilityMode', PHPFHIRConstants::TYPE_CLASS_RESTFUL_CAPABILITY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRRestfulCapabilityModeList()
    {
        $this->assertEquals('RestfulCapabilityMode-list', PHPFHIRConstants::TYPE_NAME_RESTFUL_CAPABILITY_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRRestfulCapabilityModeList', PHPFHIRConstants::TYPE_CLASS_RESTFUL_CAPABILITY_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRRiskAssessment()
    {
        $this->assertEquals('RiskAssessment', PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRRiskAssessment', PHPFHIRConstants::TYPE_CLASS_RISK_ASSESSMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRRiskAssessment_FHIRRiskAssessmentPrediction()
    {
        $this->assertEquals('RiskAssessment.Prediction', PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction', PHPFHIRConstants::TYPE_CLASS_RISK_ASSESSMENT_DOT_PREDICTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSampledData()
    {
        $this->assertEquals('SampledData', PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledData', PHPFHIRConstants::TYPE_CLASS_SAMPLED_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSampledDataDataType()
    {
        $this->assertEquals('SampledDataDataType', PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSampledDataDataType', PHPFHIRConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRSampledDataDataTypePrimitive()
    {
        $this->assertEquals('SampledDataDataType-primitive', PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRSampledDataDataTypePrimitive', PHPFHIRConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRSchedule()
    {
        $this->assertEquals('Schedule', PHPFHIRConstants::TYPE_NAME_SCHEDULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSchedule', PHPFHIRConstants::TYPE_CLASS_SCHEDULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSearchComparator()
    {
        $this->assertEquals('SearchComparator', PHPFHIRConstants::TYPE_NAME_SEARCH_COMPARATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchComparator', PHPFHIRConstants::TYPE_CLASS_SEARCH_COMPARATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSearchComparatorList()
    {
        $this->assertEquals('SearchComparator-list', PHPFHIRConstants::TYPE_NAME_SEARCH_COMPARATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSearchComparatorList', PHPFHIRConstants::TYPE_CLASS_SEARCH_COMPARATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSearchEntryMode()
    {
        $this->assertEquals('SearchEntryMode', PHPFHIRConstants::TYPE_NAME_SEARCH_ENTRY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchEntryMode', PHPFHIRConstants::TYPE_CLASS_SEARCH_ENTRY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSearchEntryModeList()
    {
        $this->assertEquals('SearchEntryMode-list', PHPFHIRConstants::TYPE_NAME_SEARCH_ENTRY_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSearchEntryModeList', PHPFHIRConstants::TYPE_CLASS_SEARCH_ENTRY_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSearchModifierCode()
    {
        $this->assertEquals('SearchModifierCode', PHPFHIRConstants::TYPE_NAME_SEARCH_MODIFIER_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchModifierCode', PHPFHIRConstants::TYPE_CLASS_SEARCH_MODIFIER_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSearchModifierCodeList()
    {
        $this->assertEquals('SearchModifierCode-list', PHPFHIRConstants::TYPE_NAME_SEARCH_MODIFIER_CODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSearchModifierCodeList', PHPFHIRConstants::TYPE_CLASS_SEARCH_MODIFIER_CODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRSearchParameter()
    {
        $this->assertEquals('SearchParameter', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSearchParameter', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSearchParameter_FHIRSearchParameterComponent()
    {
        $this->assertEquals('SearchParameter.Component', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAMETER_DOT_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAMETER_DOT_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSearchParamType()
    {
        $this->assertEquals('SearchParamType', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSearchParamType', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSearchParamTypeList()
    {
        $this->assertEquals('SearchParamType-list', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSearchParamTypeList', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRSequence()
    {
        $this->assertEquals('Sequence', PHPFHIRConstants::TYPE_NAME_SEQUENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSequence', PHPFHIRConstants::TYPE_CLASS_SEQUENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSequence_FHIRSequenceQuality()
    {
        $this->assertEquals('Sequence.Quality', PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_QUALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality', PHPFHIRConstants::TYPE_CLASS_SEQUENCE_DOT_QUALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSequence_FHIRSequenceReferenceSeq()
    {
        $this->assertEquals('Sequence.ReferenceSeq', PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq', PHPFHIRConstants::TYPE_CLASS_SEQUENCE_DOT_REFERENCE_SEQ);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSequence_FHIRSequenceRepository()
    {
        $this->assertEquals('Sequence.Repository', PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_REPOSITORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository', PHPFHIRConstants::TYPE_CLASS_SEQUENCE_DOT_REPOSITORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSequence_FHIRSequenceVariant()
    {
        $this->assertEquals('Sequence.Variant', PHPFHIRConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant', PHPFHIRConstants::TYPE_CLASS_SEQUENCE_DOT_VARIANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRServiceDefinition()
    {
        $this->assertEquals('ServiceDefinition', PHPFHIRConstants::TYPE_NAME_SERVICE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRServiceDefinition', PHPFHIRConstants::TYPE_CLASS_SERVICE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSignature()
    {
        $this->assertEquals('Signature', PHPFHIRConstants::TYPE_NAME_SIGNATURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSignature', PHPFHIRConstants::TYPE_CLASS_SIGNATURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSlicingRules()
    {
        $this->assertEquals('SlicingRules', PHPFHIRConstants::TYPE_NAME_SLICING_RULES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSlicingRules', PHPFHIRConstants::TYPE_CLASS_SLICING_RULES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSlicingRulesList()
    {
        $this->assertEquals('SlicingRules-list', PHPFHIRConstants::TYPE_NAME_SLICING_RULES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSlicingRulesList', PHPFHIRConstants::TYPE_CLASS_SLICING_RULES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRSlot()
    {
        $this->assertEquals('Slot', PHPFHIRConstants::TYPE_NAME_SLOT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSlot', PHPFHIRConstants::TYPE_CLASS_SLOT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSlotStatus()
    {
        $this->assertEquals('SlotStatus', PHPFHIRConstants::TYPE_NAME_SLOT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSlotStatus', PHPFHIRConstants::TYPE_CLASS_SLOT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSlotStatusList()
    {
        $this->assertEquals('SlotStatus-list', PHPFHIRConstants::TYPE_NAME_SLOT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSlotStatusList', PHPFHIRConstants::TYPE_CLASS_SLOT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRSpecimen()
    {
        $this->assertEquals('Specimen', PHPFHIRConstants::TYPE_NAME_SPECIMEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSpecimen', PHPFHIRConstants::TYPE_CLASS_SPECIMEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenCollection()
    {
        $this->assertEquals('Specimen.Collection', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_COLLECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenContainer()
    {
        $this->assertEquals('Specimen.Container', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenProcessing()
    {
        $this->assertEquals('Specimen.Processing', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_PROCESSING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_PROCESSING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSpecimenStatus()
    {
        $this->assertEquals('SpecimenStatus', PHPFHIRConstants::TYPE_NAME_SPECIMEN_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSpecimenStatus', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSpecimenStatusList()
    {
        $this->assertEquals('SpecimenStatus-list', PHPFHIRConstants::TYPE_NAME_SPECIMEN_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSpecimenStatusList', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRString()
    {
        $this->assertEquals('string', PHPFHIRConstants::TYPE_NAME_STRING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString', PHPFHIRConstants::TYPE_CLASS_STRING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRStringPrimitive()
    {
        $this->assertEquals('string-primitive', PHPFHIRConstants::TYPE_NAME_STRING_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRStringPrimitive', PHPFHIRConstants::TYPE_CLASS_STRING_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRStructureDefinition()
    {
        $this->assertEquals('StructureDefinition', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureDefinition', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionDifferential()
    {
        $this->assertEquals('StructureDefinition.Differential', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_DIFFERENTIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_DIFFERENTIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionMapping()
    {
        $this->assertEquals('StructureDefinition.Mapping', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionSnapshot()
    {
        $this->assertEquals('StructureDefinition.Snapshot', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_SNAPSHOT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_SNAPSHOT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRStructureDefinitionKind()
    {
        $this->assertEquals('StructureDefinitionKind', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureDefinitionKind', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRStructureDefinitionKindList()
    {
        $this->assertEquals('StructureDefinitionKind-list', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRStructureDefinitionKindList', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRStructureMap()
    {
        $this->assertEquals('StructureMap', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRStructureMap', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapDependent()
    {
        $this->assertEquals('StructureMap.Dependent', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_DEPENDENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapDependent', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_DEPENDENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapGroup()
    {
        $this->assertEquals('StructureMap.Group', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapInput()
    {
        $this->assertEquals('StructureMap.Input', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_INPUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_INPUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapParameter()
    {
        $this->assertEquals('StructureMap.Parameter', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapRule()
    {
        $this->assertEquals('StructureMap.Rule', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapSource()
    {
        $this->assertEquals('StructureMap.Source', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapStructure()
    {
        $this->assertEquals('StructureMap.Structure', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_STRUCTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_STRUCTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapTarget()
    {
        $this->assertEquals('StructureMap.Target', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRStructureMapContextType()
    {
        $this->assertEquals('StructureMapContextType', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_CONTEXT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapContextType', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_CONTEXT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRStructureMapContextTypeList()
    {
        $this->assertEquals('StructureMapContextType-list', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_CONTEXT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRStructureMapContextTypeList', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_CONTEXT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRStructureMapGroupTypeMode()
    {
        $this->assertEquals('StructureMapGroupTypeMode', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_GROUP_TYPE_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapGroupTypeMode', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_GROUP_TYPE_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRStructureMapGroupTypeModeList()
    {
        $this->assertEquals('StructureMapGroupTypeMode-list', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_GROUP_TYPE_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRStructureMapGroupTypeModeList', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_GROUP_TYPE_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRStructureMapInputMode()
    {
        $this->assertEquals('StructureMapInputMode', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_INPUT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapInputMode', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_INPUT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRStructureMapInputModeList()
    {
        $this->assertEquals('StructureMapInputMode-list', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_INPUT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRStructureMapInputModeList', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_INPUT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRStructureMapModelMode()
    {
        $this->assertEquals('StructureMapModelMode', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_MODEL_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapModelMode', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_MODEL_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRStructureMapModelModeList()
    {
        $this->assertEquals('StructureMapModelMode-list', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_MODEL_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRStructureMapModelModeList', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_MODEL_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRStructureMapSourceListMode()
    {
        $this->assertEquals('StructureMapSourceListMode', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_SOURCE_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapSourceListMode', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_SOURCE_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRStructureMapSourceListModeList()
    {
        $this->assertEquals('StructureMapSourceListMode-list', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_SOURCE_LIST_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRStructureMapSourceListModeList', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_SOURCE_LIST_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRStructureMapTargetListMode()
    {
        $this->assertEquals('StructureMapTargetListMode', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_TARGET_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTargetListMode', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_TARGET_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRStructureMapTargetListModeList()
    {
        $this->assertEquals('StructureMapTargetListMode-list', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_TARGET_LIST_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRStructureMapTargetListModeList', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_TARGET_LIST_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRStructureMapTransform()
    {
        $this->assertEquals('StructureMapTransform', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_TRANSFORM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRStructureMapTransform', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_TRANSFORM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRStructureMapTransformList()
    {
        $this->assertEquals('StructureMapTransform-list', PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_TRANSFORM_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRStructureMapTransformList', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_MAP_TRANSFORM_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRSubscription()
    {
        $this->assertEquals('Subscription', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubscription', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSubscription_FHIRSubscriptionChannel()
    {
        $this->assertEquals('Subscription.Channel', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_DOT_CHANNEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSubscriptionChannelType()
    {
        $this->assertEquals('SubscriptionChannelType', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_CHANNEL_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSubscriptionChannelType', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_CHANNEL_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSubscriptionChannelTypeList()
    {
        $this->assertEquals('SubscriptionChannelType-list', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_CHANNEL_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSubscriptionChannelTypeList', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_CHANNEL_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSubscriptionStatus()
    {
        $this->assertEquals('SubscriptionStatus', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSubscriptionStatus', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSubscriptionStatusList()
    {
        $this->assertEquals('SubscriptionStatus-list', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSubscriptionStatusList', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRSubstance()
    {
        $this->assertEquals('Substance', PHPFHIRConstants::TYPE_NAME_SUBSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSubstance', PHPFHIRConstants::TYPE_CLASS_SUBSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceIngredient()
    {
        $this->assertEquals('Substance.Ingredient', PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient', PHPFHIRConstants::TYPE_CLASS_SUBSTANCE_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceInstance()
    {
        $this->assertEquals('Substance.Instance', PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance', PHPFHIRConstants::TYPE_CLASS_SUBSTANCE_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRSupplyDelivery()
    {
        $this->assertEquals('SupplyDelivery', PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DELIVERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSupplyDelivery_FHIRSupplyDeliverySuppliedItem()
    {
        $this->assertEquals('SupplyDelivery.SuppliedItem', PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY_DOT_SUPPLIED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyDelivery\FHIRSupplyDeliverySuppliedItem', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DELIVERY_DOT_SUPPLIED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSupplyDeliveryStatus()
    {
        $this->assertEquals('SupplyDeliveryStatus', PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSupplyDeliveryStatus', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DELIVERY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSupplyDeliveryStatusList()
    {
        $this->assertEquals('SupplyDeliveryStatus-list', PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSupplyDeliveryStatusList', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DELIVERY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRSupplyRequest()
    {
        $this->assertEquals('SupplyRequest', PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRSupplyRequest', PHPFHIRConstants::TYPE_CLASS_SUPPLY_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSupplyRequest_FHIRSupplyRequestOrderedItem()
    {
        $this->assertEquals('SupplyRequest.OrderedItem', PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST_DOT_ORDERED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestOrderedItem', PHPFHIRConstants::TYPE_CLASS_SUPPLY_REQUEST_DOT_ORDERED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRSupplyRequest_FHIRSupplyRequestRequester()
    {
        $this->assertEquals('SupplyRequest.Requester', PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestRequester', PHPFHIRConstants::TYPE_CLASS_SUPPLY_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSupplyRequestStatus()
    {
        $this->assertEquals('SupplyRequestStatus', PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSupplyRequestStatus', PHPFHIRConstants::TYPE_CLASS_SUPPLY_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSupplyRequestStatusList()
    {
        $this->assertEquals('SupplyRequestStatus-list', PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSupplyRequestStatusList', PHPFHIRConstants::TYPE_CLASS_SUPPLY_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSystemRestfulInteraction()
    {
        $this->assertEquals('SystemRestfulInteraction', PHPFHIRConstants::TYPE_NAME_SYSTEM_RESTFUL_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSystemRestfulInteraction', PHPFHIRConstants::TYPE_CLASS_SYSTEM_RESTFUL_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSystemRestfulInteractionList()
    {
        $this->assertEquals('SystemRestfulInteraction-list', PHPFHIRConstants::TYPE_NAME_SYSTEM_RESTFUL_INTERACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSystemRestfulInteractionList', PHPFHIRConstants::TYPE_CLASS_SYSTEM_RESTFUL_INTERACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRSystemVersionProcessingMode()
    {
        $this->assertEquals('SystemVersionProcessingMode', PHPFHIRConstants::TYPE_NAME_SYSTEM_VERSION_PROCESSING_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRSystemVersionProcessingMode', PHPFHIRConstants::TYPE_CLASS_SYSTEM_VERSION_PROCESSING_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRSystemVersionProcessingModeList()
    {
        $this->assertEquals('SystemVersionProcessingMode-list', PHPFHIRConstants::TYPE_NAME_SYSTEM_VERSION_PROCESSING_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRSystemVersionProcessingModeList', PHPFHIRConstants::TYPE_CLASS_SYSTEM_VERSION_PROCESSING_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRTask()
    {
        $this->assertEquals('Task', PHPFHIRConstants::TYPE_NAME_TASK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTask', PHPFHIRConstants::TYPE_CLASS_TASK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskInput()
    {
        $this->assertEquals('Task.Input', PHPFHIRConstants::TYPE_NAME_TASK_DOT_INPUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput', PHPFHIRConstants::TYPE_CLASS_TASK_DOT_INPUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskOutput()
    {
        $this->assertEquals('Task.Output', PHPFHIRConstants::TYPE_NAME_TASK_DOT_OUTPUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput', PHPFHIRConstants::TYPE_CLASS_TASK_DOT_OUTPUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskRequester()
    {
        $this->assertEquals('Task.Requester', PHPFHIRConstants::TYPE_NAME_TASK_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRequester', PHPFHIRConstants::TYPE_CLASS_TASK_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskRestriction()
    {
        $this->assertEquals('Task.Restriction', PHPFHIRConstants::TYPE_NAME_TASK_DOT_RESTRICTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction', PHPFHIRConstants::TYPE_CLASS_TASK_DOT_RESTRICTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTaskStatus()
    {
        $this->assertEquals('TaskStatus', PHPFHIRConstants::TYPE_NAME_TASK_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTaskStatus', PHPFHIRConstants::TYPE_CLASS_TASK_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRTaskStatusList()
    {
        $this->assertEquals('TaskStatus-list', PHPFHIRConstants::TYPE_NAME_TASK_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRTaskStatusList', PHPFHIRConstants::TYPE_CLASS_TASK_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRTestReport()
    {
        $this->assertEquals('TestReport', PHPFHIRConstants::TYPE_NAME_TEST_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestReport', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAction()
    {
        $this->assertEquals('TestReport.Action', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAction1()
    {
        $this->assertEquals('TestReport.Action1', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction1', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_DOT_ACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAction2()
    {
        $this->assertEquals('TestReport.Action2', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ACTION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction2', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_DOT_ACTION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAssert()
    {
        $this->assertEquals('TestReport.Assert', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_DOT_ASSERT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportOperation()
    {
        $this->assertEquals('TestReport.Operation', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportOperation', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportParticipant()
    {
        $this->assertEquals('TestReport.Participant', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportSetup()
    {
        $this->assertEquals('TestReport.Setup', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_SETUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_DOT_SETUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportTeardown()
    {
        $this->assertEquals('TestReport.Teardown', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_TEARDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_DOT_TEARDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportTest()
    {
        $this->assertEquals('TestReport.Test', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_DOT_TEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_DOT_TEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTestReportActionResult()
    {
        $this->assertEquals('TestReportActionResult', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_ACTION_RESULT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportActionResult', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_ACTION_RESULT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRTestReportActionResultList()
    {
        $this->assertEquals('TestReportActionResult-list', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_ACTION_RESULT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRTestReportActionResultList', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_ACTION_RESULT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTestReportParticipantType()
    {
        $this->assertEquals('TestReportParticipantType', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_PARTICIPANT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportParticipantType', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_PARTICIPANT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRTestReportParticipantTypeList()
    {
        $this->assertEquals('TestReportParticipantType-list', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_PARTICIPANT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRTestReportParticipantTypeList', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_PARTICIPANT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTestReportResult()
    {
        $this->assertEquals('TestReportResult', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_RESULT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportResult', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_RESULT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRTestReportResultList()
    {
        $this->assertEquals('TestReportResult-list', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_RESULT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRTestReportResultList', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_RESULT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTestReportStatus()
    {
        $this->assertEquals('TestReportStatus', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestReportStatus', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRTestReportStatusList()
    {
        $this->assertEquals('TestReportStatus-list', PHPFHIRConstants::TYPE_NAME_TEST_REPORT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRTestReportStatusList', PHPFHIRConstants::TYPE_CLASS_TEST_REPORT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRTestScript()
    {
        $this->assertEquals('TestScript', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRTestScript', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction()
    {
        $this->assertEquals('TestScript.Action', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction1()
    {
        $this->assertEquals('TestScript.Action1', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction1', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction2()
    {
        $this->assertEquals('TestScript.Action2', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction2', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAssert()
    {
        $this->assertEquals('TestScript.Assert', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ASSERT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptCapability()
    {
        $this->assertEquals('TestScript.Capability', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_CAPABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptDestination()
    {
        $this->assertEquals('TestScript.Destination', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_DESTINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptDestination', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_DESTINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptFixture()
    {
        $this->assertEquals('TestScript.Fixture', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_FIXTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_FIXTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptLink()
    {
        $this->assertEquals('TestScript.Link', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptLink', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptMetadata()
    {
        $this->assertEquals('TestScript.Metadata', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_METADATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_METADATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptOperation()
    {
        $this->assertEquals('TestScript.Operation', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptOrigin()
    {
        $this->assertEquals('TestScript.Origin', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ORIGIN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOrigin', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ORIGIN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptParam()
    {
        $this->assertEquals('TestScript.Param', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptParam1()
    {
        $this->assertEquals('TestScript.Param1', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_PARAM_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam1', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_PARAM_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptParam2()
    {
        $this->assertEquals('TestScript.Param2', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_PARAM_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam2', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_PARAM_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptParam3()
    {
        $this->assertEquals('TestScript.Param3', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_PARAM_3);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam3', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_PARAM_3);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRequestHeader()
    {
        $this->assertEquals('TestScript.RequestHeader', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_REQUEST_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_REQUEST_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRule()
    {
        $this->assertEquals('TestScript.Rule', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRule1()
    {
        $this->assertEquals('TestScript.Rule1', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULE_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule1', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULE_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRule2()
    {
        $this->assertEquals('TestScript.Rule2', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULE_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule2', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULE_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRule3()
    {
        $this->assertEquals('TestScript.Rule3', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULE_3);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule3', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULE_3);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRuleset()
    {
        $this->assertEquals('TestScript.Ruleset', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULESET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULESET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRuleset1()
    {
        $this->assertEquals('TestScript.Ruleset1', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULESET_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset1', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULESET_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptSetup()
    {
        $this->assertEquals('TestScript.Setup', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_SETUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_SETUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptTeardown()
    {
        $this->assertEquals('TestScript.Teardown', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_TEARDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_TEARDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptTest()
    {
        $this->assertEquals('TestScript.Test', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_TEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_TEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptVariable()
    {
        $this->assertEquals('TestScript.Variable', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_VARIABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_VARIABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTestScriptRequestMethodCode()
    {
        $this->assertEquals('TestScriptRequestMethodCode', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_REQUEST_METHOD_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTestScriptRequestMethodCode', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_REQUEST_METHOD_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRTestScriptRequestMethodCodeList()
    {
        $this->assertEquals('TestScriptRequestMethodCode-list', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_REQUEST_METHOD_CODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRTestScriptRequestMethodCodeList', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_REQUEST_METHOD_CODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTime()
    {
        $this->assertEquals('time', PHPFHIRConstants::TYPE_NAME_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTime', PHPFHIRConstants::TYPE_CLASS_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRTimePrimitive()
    {
        $this->assertEquals('time-primitive', PHPFHIRConstants::TYPE_NAME_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRTimePrimitive', PHPFHIRConstants::TYPE_CLASS_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTiming()
    {
        $this->assertEquals('Timing', PHPFHIRConstants::TYPE_NAME_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming', PHPFHIRConstants::TYPE_CLASS_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTiming_FHIRTimingRepeat()
    {
        $this->assertEquals('Timing.Repeat', PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTiming\FHIRTimingRepeat', PHPFHIRConstants::TYPE_CLASS_TIMING_DOT_REPEAT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTriggerDefinition()
    {
        $this->assertEquals('TriggerDefinition', PHPFHIRConstants::TYPE_NAME_TRIGGER_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerDefinition', PHPFHIRConstants::TYPE_CLASS_TRIGGER_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTriggerType()
    {
        $this->assertEquals('TriggerType', PHPFHIRConstants::TYPE_NAME_TRIGGER_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTriggerType', PHPFHIRConstants::TYPE_CLASS_TRIGGER_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRTriggerTypeList()
    {
        $this->assertEquals('TriggerType-list', PHPFHIRConstants::TYPE_NAME_TRIGGER_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRTriggerTypeList', PHPFHIRConstants::TYPE_CLASS_TRIGGER_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTypeDerivationRule()
    {
        $this->assertEquals('TypeDerivationRule', PHPFHIRConstants::TYPE_NAME_TYPE_DERIVATION_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTypeDerivationRule', PHPFHIRConstants::TYPE_CLASS_TYPE_DERIVATION_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRTypeDerivationRuleList()
    {
        $this->assertEquals('TypeDerivationRule-list', PHPFHIRConstants::TYPE_NAME_TYPE_DERIVATION_RULE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRTypeDerivationRuleList', PHPFHIRConstants::TYPE_CLASS_TYPE_DERIVATION_RULE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRTypeRestfulInteraction()
    {
        $this->assertEquals('TypeRestfulInteraction', PHPFHIRConstants::TYPE_NAME_TYPE_RESTFUL_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRTypeRestfulInteraction', PHPFHIRConstants::TYPE_CLASS_TYPE_RESTFUL_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRTypeRestfulInteractionList()
    {
        $this->assertEquals('TypeRestfulInteraction-list', PHPFHIRConstants::TYPE_NAME_TYPE_RESTFUL_INTERACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRTypeRestfulInteractionList', PHPFHIRConstants::TYPE_CLASS_TYPE_RESTFUL_INTERACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRUDIEntryType()
    {
        $this->assertEquals('UDIEntryType', PHPFHIRConstants::TYPE_NAME_UDIENTRY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUDIEntryType', PHPFHIRConstants::TYPE_CLASS_UDIENTRY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRUDIEntryTypeList()
    {
        $this->assertEquals('UDIEntryType-list', PHPFHIRConstants::TYPE_NAME_UDIENTRY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRUDIEntryTypeList', PHPFHIRConstants::TYPE_CLASS_UDIENTRY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRUnitsOfTime()
    {
        $this->assertEquals('UnitsOfTime', PHPFHIRConstants::TYPE_NAME_UNITS_OF_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnitsOfTime', PHPFHIRConstants::TYPE_CLASS_UNITS_OF_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRUnitsOfTimeList()
    {
        $this->assertEquals('UnitsOfTime-list', PHPFHIRConstants::TYPE_NAME_UNITS_OF_TIME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRUnitsOfTimeList', PHPFHIRConstants::TYPE_CLASS_UNITS_OF_TIME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRUnknownContentCode()
    {
        $this->assertEquals('UnknownContentCode', PHPFHIRConstants::TYPE_NAME_UNKNOWN_CONTENT_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnknownContentCode', PHPFHIRConstants::TYPE_CLASS_UNKNOWN_CONTENT_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRUnknownContentCodeList()
    {
        $this->assertEquals('UnknownContentCode-list', PHPFHIRConstants::TYPE_NAME_UNKNOWN_CONTENT_CODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRUnknownContentCodeList', PHPFHIRConstants::TYPE_CLASS_UNKNOWN_CONTENT_CODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRUnsignedInt()
    {
        $this->assertEquals('unsignedInt', PHPFHIRConstants::TYPE_NAME_UNSIGNED_INT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUnsignedInt', PHPFHIRConstants::TYPE_CLASS_UNSIGNED_INT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRUnsignedIntPrimitive()
    {
        $this->assertEquals('unsignedInt-primitive', PHPFHIRConstants::TYPE_NAME_UNSIGNED_INT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRUnsignedIntPrimitive', PHPFHIRConstants::TYPE_CLASS_UNSIGNED_INT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRUri()
    {
        $this->assertEquals('uri', PHPFHIRConstants::TYPE_NAME_URI);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUri', PHPFHIRConstants::TYPE_CLASS_URI);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRUriPrimitive()
    {
        $this->assertEquals('uri-primitive', PHPFHIRConstants::TYPE_NAME_URI_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRUriPrimitive', PHPFHIRConstants::TYPE_CLASS_URI_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRUsageContext()
    {
        $this->assertEquals('UsageContext', PHPFHIRConstants::TYPE_NAME_USAGE_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUsageContext', PHPFHIRConstants::TYPE_CLASS_USAGE_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRUse()
    {
        $this->assertEquals('Use', PHPFHIRConstants::TYPE_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUse', PHPFHIRConstants::TYPE_CLASS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRUseList()
    {
        $this->assertEquals('Use-list', PHPFHIRConstants::TYPE_NAME_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRUseList', PHPFHIRConstants::TYPE_CLASS_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRUuid()
    {
        $this->assertEquals('uuid', PHPFHIRConstants::TYPE_NAME_UUID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRUuid', PHPFHIRConstants::TYPE_CLASS_UUID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRUuidPrimitive()
    {
        $this->assertEquals('uuid-primitive', PHPFHIRConstants::TYPE_NAME_UUID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRUuidPrimitive', PHPFHIRConstants::TYPE_CLASS_UUID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRValueSet()
    {
        $this->assertEquals('ValueSet', PHPFHIRConstants::TYPE_NAME_VALUE_SET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRValueSet', PHPFHIRConstants::TYPE_CLASS_VALUE_SET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetCompose()
    {
        $this->assertEquals('ValueSet.Compose', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_COMPOSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetConcept()
    {
        $this->assertEquals('ValueSet.Concept', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetContains()
    {
        $this->assertEquals('ValueSet.Contains', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONTAINS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_CONTAINS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetDesignation()
    {
        $this->assertEquals('ValueSet.Designation', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_DESIGNATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_DESIGNATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetExpansion()
    {
        $this->assertEquals('ValueSet.Expansion', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_EXPANSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetFilter()
    {
        $this->assertEquals('ValueSet.Filter', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetInclude()
    {
        $this->assertEquals('ValueSet.Include', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_INCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetParameter()
    {
        $this->assertEquals('ValueSet.Parameter', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRVisionBase()
    {
        $this->assertEquals('VisionBase', PHPFHIRConstants::TYPE_NAME_VISION_BASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRVisionBase', PHPFHIRConstants::TYPE_CLASS_VISION_BASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRVisionBaseList()
    {
        $this->assertEquals('VisionBase-list', PHPFHIRConstants::TYPE_NAME_VISION_BASE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRVisionBaseList', PHPFHIRConstants::TYPE_CLASS_VISION_BASE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRVisionEyes()
    {
        $this->assertEquals('VisionEyes', PHPFHIRConstants::TYPE_NAME_VISION_EYES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRVisionEyes', PHPFHIRConstants::TYPE_CLASS_VISION_EYES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRVisionEyesList()
    {
        $this->assertEquals('VisionEyes-list', PHPFHIRConstants::TYPE_NAME_VISION_EYES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRVisionEyesList', PHPFHIRConstants::TYPE_CLASS_VISION_EYES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRResource_FHIRDomainResource_FHIRVisionPrescription()
    {
        $this->assertEquals('VisionPrescription', PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRVisionPrescription', PHPFHIRConstants::TYPE_CLASS_VISION_PRESCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRBackboneElement_FHIRVisionPrescription_FHIRVisionPrescriptionDispense()
    {
        $this->assertEquals('VisionPrescription.Dispense', PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense', PHPFHIRConstants::TYPE_CLASS_VISION_PRESCRIPTION_DOT_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRElement_FHIRXPathUsageType()
    {
        $this->assertEquals('XPathUsageType', PHPFHIRConstants::TYPE_NAME_XPATH_USAGE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRXPathUsageType', PHPFHIRConstants::TYPE_CLASS_XPATH_USAGE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_STU3_FHIRCodePrimitive_FHIRXPathUsageTypeList()
    {
        $this->assertEquals('XPathUsageType-list', PHPFHIRConstants::TYPE_NAME_XPATH_USAGE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive\FHIRXPathUsageTypeList', PHPFHIRConstants::TYPE_CLASS_XPATH_USAGE_TYPE_HYPHEN_LIST);
    }

}
