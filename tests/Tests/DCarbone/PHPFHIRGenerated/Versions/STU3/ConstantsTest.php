<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Versions\STU3;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase
{
    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRAccount()
    {
        $this->assertEquals('Account', VersionConstants::TYPE_NAME_ACCOUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRAccount', VersionConstants::TYPE_CLASS_ACCOUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAccount_FHIRAccountCoverage()
    {
        $this->assertEquals('Account.Coverage', VersionConstants::TYPE_NAME_ACCOUNT_DOT_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage', VersionConstants::TYPE_CLASS_ACCOUNT_DOT_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAccount_FHIRAccountGuarantor()
    {
        $this->assertEquals('Account.Guarantor', VersionConstants::TYPE_NAME_ACCOUNT_DOT_GUARANTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor', VersionConstants::TYPE_CLASS_ACCOUNT_DOT_GUARANTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAccountStatus()
    {
        $this->assertEquals('AccountStatus', VersionConstants::TYPE_NAME_ACCOUNT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAccountStatus', VersionConstants::TYPE_CLASS_ACCOUNT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAccountStatusList()
    {
        $this->assertEquals('AccountStatus-list', VersionConstants::TYPE_NAME_ACCOUNT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAccountStatusList', VersionConstants::TYPE_CLASS_ACCOUNT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRActionCardinalityBehavior()
    {
        $this->assertEquals('ActionCardinalityBehavior', VersionConstants::TYPE_NAME_ACTION_CARDINALITY_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionCardinalityBehavior', VersionConstants::TYPE_CLASS_ACTION_CARDINALITY_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRActionCardinalityBehaviorList()
    {
        $this->assertEquals('ActionCardinalityBehavior-list', VersionConstants::TYPE_NAME_ACTION_CARDINALITY_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionCardinalityBehaviorList', VersionConstants::TYPE_CLASS_ACTION_CARDINALITY_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRActionConditionKind()
    {
        $this->assertEquals('ActionConditionKind', VersionConstants::TYPE_NAME_ACTION_CONDITION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionConditionKind', VersionConstants::TYPE_CLASS_ACTION_CONDITION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRActionConditionKindList()
    {
        $this->assertEquals('ActionConditionKind-list', VersionConstants::TYPE_NAME_ACTION_CONDITION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionConditionKindList', VersionConstants::TYPE_CLASS_ACTION_CONDITION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRActionGroupingBehavior()
    {
        $this->assertEquals('ActionGroupingBehavior', VersionConstants::TYPE_NAME_ACTION_GROUPING_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionGroupingBehavior', VersionConstants::TYPE_CLASS_ACTION_GROUPING_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRActionGroupingBehaviorList()
    {
        $this->assertEquals('ActionGroupingBehavior-list', VersionConstants::TYPE_NAME_ACTION_GROUPING_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionGroupingBehaviorList', VersionConstants::TYPE_CLASS_ACTION_GROUPING_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRActionList()
    {
        $this->assertEquals('ActionList', VersionConstants::TYPE_NAME_ACTION_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionList', VersionConstants::TYPE_CLASS_ACTION_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRActionListList()
    {
        $this->assertEquals('ActionList-list', VersionConstants::TYPE_NAME_ACTION_LIST_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionListList', VersionConstants::TYPE_CLASS_ACTION_LIST_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRActionParticipantType()
    {
        $this->assertEquals('ActionParticipantType', VersionConstants::TYPE_NAME_ACTION_PARTICIPANT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionParticipantType', VersionConstants::TYPE_CLASS_ACTION_PARTICIPANT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRActionParticipantTypeList()
    {
        $this->assertEquals('ActionParticipantType-list', VersionConstants::TYPE_NAME_ACTION_PARTICIPANT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionParticipantTypeList', VersionConstants::TYPE_CLASS_ACTION_PARTICIPANT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRActionPrecheckBehavior()
    {
        $this->assertEquals('ActionPrecheckBehavior', VersionConstants::TYPE_NAME_ACTION_PRECHECK_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionPrecheckBehavior', VersionConstants::TYPE_CLASS_ACTION_PRECHECK_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRActionPrecheckBehaviorList()
    {
        $this->assertEquals('ActionPrecheckBehavior-list', VersionConstants::TYPE_NAME_ACTION_PRECHECK_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionPrecheckBehaviorList', VersionConstants::TYPE_CLASS_ACTION_PRECHECK_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRActionRelationshipType()
    {
        $this->assertEquals('ActionRelationshipType', VersionConstants::TYPE_NAME_ACTION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionRelationshipType', VersionConstants::TYPE_CLASS_ACTION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRActionRelationshipTypeList()
    {
        $this->assertEquals('ActionRelationshipType-list', VersionConstants::TYPE_NAME_ACTION_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionRelationshipTypeList', VersionConstants::TYPE_CLASS_ACTION_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRActionRequiredBehavior()
    {
        $this->assertEquals('ActionRequiredBehavior', VersionConstants::TYPE_NAME_ACTION_REQUIRED_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionRequiredBehavior', VersionConstants::TYPE_CLASS_ACTION_REQUIRED_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRActionRequiredBehaviorList()
    {
        $this->assertEquals('ActionRequiredBehavior-list', VersionConstants::TYPE_NAME_ACTION_REQUIRED_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionRequiredBehaviorList', VersionConstants::TYPE_CLASS_ACTION_REQUIRED_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRActionSelectionBehavior()
    {
        $this->assertEquals('ActionSelectionBehavior', VersionConstants::TYPE_NAME_ACTION_SELECTION_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRActionSelectionBehavior', VersionConstants::TYPE_CLASS_ACTION_SELECTION_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRActionSelectionBehaviorList()
    {
        $this->assertEquals('ActionSelectionBehavior-list', VersionConstants::TYPE_NAME_ACTION_SELECTION_BEHAVIOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRActionSelectionBehaviorList', VersionConstants::TYPE_CLASS_ACTION_SELECTION_BEHAVIOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRActivityDefinition()
    {
        $this->assertEquals('ActivityDefinition', VersionConstants::TYPE_NAME_ACTIVITY_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRActivityDefinition', VersionConstants::TYPE_CLASS_ACTIVITY_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRActivityDefinition_FHIRActivityDefinitionDynamicValue()
    {
        $this->assertEquals('ActivityDefinition.DynamicValue', VersionConstants::TYPE_NAME_ACTIVITY_DEFINITION_DOT_DYNAMIC_VALUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue', VersionConstants::TYPE_CLASS_ACTIVITY_DEFINITION_DOT_DYNAMIC_VALUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRActivityDefinition_FHIRActivityDefinitionParticipant()
    {
        $this->assertEquals('ActivityDefinition.Participant', VersionConstants::TYPE_NAME_ACTIVITY_DEFINITION_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant', VersionConstants::TYPE_CLASS_ACTIVITY_DEFINITION_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAddress()
    {
        $this->assertEquals('Address', VersionConstants::TYPE_NAME_ADDRESS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddress', VersionConstants::TYPE_CLASS_ADDRESS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAddressType()
    {
        $this->assertEquals('AddressType', VersionConstants::TYPE_NAME_ADDRESS_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddressType', VersionConstants::TYPE_CLASS_ADDRESS_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAddressTypeList()
    {
        $this->assertEquals('AddressType-list', VersionConstants::TYPE_NAME_ADDRESS_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAddressTypeList', VersionConstants::TYPE_CLASS_ADDRESS_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAddressUse()
    {
        $this->assertEquals('AddressUse', VersionConstants::TYPE_NAME_ADDRESS_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAddressUse', VersionConstants::TYPE_CLASS_ADDRESS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAddressUseList()
    {
        $this->assertEquals('AddressUse-list', VersionConstants::TYPE_NAME_ADDRESS_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAddressUseList', VersionConstants::TYPE_CLASS_ADDRESS_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAdministrativeGender()
    {
        $this->assertEquals('AdministrativeGender', VersionConstants::TYPE_NAME_ADMINISTRATIVE_GENDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdministrativeGender', VersionConstants::TYPE_CLASS_ADMINISTRATIVE_GENDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAdministrativeGenderList()
    {
        $this->assertEquals('AdministrativeGender-list', VersionConstants::TYPE_NAME_ADMINISTRATIVE_GENDER_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAdministrativeGenderList', VersionConstants::TYPE_CLASS_ADMINISTRATIVE_GENDER_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRAdverseEvent()
    {
        $this->assertEquals('AdverseEvent', VersionConstants::TYPE_NAME_ADVERSE_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRAdverseEvent', VersionConstants::TYPE_CLASS_ADVERSE_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAdverseEvent_FHIRAdverseEventSuspectEntity()
    {
        $this->assertEquals('AdverseEvent.SuspectEntity', VersionConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity', VersionConstants::TYPE_CLASS_ADVERSE_EVENT_DOT_SUSPECT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAdverseEventCategory()
    {
        $this->assertEquals('AdverseEventCategory', VersionConstants::TYPE_NAME_ADVERSE_EVENT_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdverseEventCategory', VersionConstants::TYPE_CLASS_ADVERSE_EVENT_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAdverseEventCategoryList()
    {
        $this->assertEquals('AdverseEventCategory-list', VersionConstants::TYPE_NAME_ADVERSE_EVENT_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAdverseEventCategoryList', VersionConstants::TYPE_CLASS_ADVERSE_EVENT_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAdverseEventCausality()
    {
        $this->assertEquals('AdverseEventCausality', VersionConstants::TYPE_NAME_ADVERSE_EVENT_CAUSALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAdverseEventCausality', VersionConstants::TYPE_CLASS_ADVERSE_EVENT_CAUSALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAdverseEventCausalityList()
    {
        $this->assertEquals('AdverseEventCausality-list', VersionConstants::TYPE_NAME_ADVERSE_EVENT_CAUSALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAdverseEventCausalityList', VersionConstants::TYPE_CLASS_ADVERSE_EVENT_CAUSALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQuantity_FHIRAge()
    {
        $this->assertEquals('Age', VersionConstants::TYPE_NAME_AGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRAge', VersionConstants::TYPE_CLASS_AGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAggregationMode()
    {
        $this->assertEquals('AggregationMode', VersionConstants::TYPE_NAME_AGGREGATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAggregationMode', VersionConstants::TYPE_CLASS_AGGREGATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAggregationModeList()
    {
        $this->assertEquals('AggregationMode-list', VersionConstants::TYPE_NAME_AGGREGATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAggregationModeList', VersionConstants::TYPE_CLASS_AGGREGATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRAllergyIntolerance()
    {
        $this->assertEquals('AllergyIntolerance', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAllergyIntolerance_FHIRAllergyIntoleranceReaction()
    {
        $this->assertEquals('AllergyIntolerance.Reaction', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAllergyIntoleranceCategory()
    {
        $this->assertEquals('AllergyIntoleranceCategory', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAllergyIntoleranceCategory', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceCategoryList()
    {
        $this->assertEquals('AllergyIntoleranceCategory-list', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceCategoryList', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAllergyIntoleranceClinicalStatus()
    {
        $this->assertEquals('AllergyIntoleranceClinicalStatus', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CLINICAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAllergyIntoleranceClinicalStatus', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CLINICAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceClinicalStatusList()
    {
        $this->assertEquals('AllergyIntoleranceClinicalStatus-list', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CLINICAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceClinicalStatusList', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CLINICAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAllergyIntoleranceCriticality()
    {
        $this->assertEquals('AllergyIntoleranceCriticality', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CRITICALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAllergyIntoleranceCriticality', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CRITICALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceCriticalityList()
    {
        $this->assertEquals('AllergyIntoleranceCriticality-list', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CRITICALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceCriticalityList', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CRITICALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAllergyIntoleranceSeverity()
    {
        $this->assertEquals('AllergyIntoleranceSeverity', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAllergyIntoleranceSeverity', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceSeverityList()
    {
        $this->assertEquals('AllergyIntoleranceSeverity-list', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceSeverityList', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAllergyIntoleranceType()
    {
        $this->assertEquals('AllergyIntoleranceType', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAllergyIntoleranceType', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceTypeList()
    {
        $this->assertEquals('AllergyIntoleranceType-list', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceTypeList', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAllergyIntoleranceVerificationStatus()
    {
        $this->assertEquals('AllergyIntoleranceVerificationStatus', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_VERIFICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAllergyIntoleranceVerificationStatus', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_VERIFICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceVerificationStatusList()
    {
        $this->assertEquals('AllergyIntoleranceVerificationStatus-list', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_VERIFICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceVerificationStatusList', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_VERIFICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAnnotation()
    {
        $this->assertEquals('Annotation', VersionConstants::TYPE_NAME_ANNOTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAnnotation', VersionConstants::TYPE_CLASS_ANNOTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRAppointment()
    {
        $this->assertEquals('Appointment', VersionConstants::TYPE_NAME_APPOINTMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRAppointment', VersionConstants::TYPE_CLASS_APPOINTMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAppointment_FHIRAppointmentParticipant()
    {
        $this->assertEquals('Appointment.Participant', VersionConstants::TYPE_NAME_APPOINTMENT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant', VersionConstants::TYPE_CLASS_APPOINTMENT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRAppointmentResponse()
    {
        $this->assertEquals('AppointmentResponse', VersionConstants::TYPE_NAME_APPOINTMENT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse', VersionConstants::TYPE_CLASS_APPOINTMENT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAppointmentStatus()
    {
        $this->assertEquals('AppointmentStatus', VersionConstants::TYPE_NAME_APPOINTMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAppointmentStatus', VersionConstants::TYPE_CLASS_APPOINTMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAppointmentStatusList()
    {
        $this->assertEquals('AppointmentStatus-list', VersionConstants::TYPE_NAME_APPOINTMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAppointmentStatusList', VersionConstants::TYPE_CLASS_APPOINTMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAssertionDirectionType()
    {
        $this->assertEquals('AssertionDirectionType', VersionConstants::TYPE_NAME_ASSERTION_DIRECTION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAssertionDirectionType', VersionConstants::TYPE_CLASS_ASSERTION_DIRECTION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAssertionDirectionTypeList()
    {
        $this->assertEquals('AssertionDirectionType-list', VersionConstants::TYPE_NAME_ASSERTION_DIRECTION_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAssertionDirectionTypeList', VersionConstants::TYPE_CLASS_ASSERTION_DIRECTION_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAssertionOperatorType()
    {
        $this->assertEquals('AssertionOperatorType', VersionConstants::TYPE_NAME_ASSERTION_OPERATOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAssertionOperatorType', VersionConstants::TYPE_CLASS_ASSERTION_OPERATOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAssertionOperatorTypeList()
    {
        $this->assertEquals('AssertionOperatorType-list', VersionConstants::TYPE_NAME_ASSERTION_OPERATOR_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAssertionOperatorTypeList', VersionConstants::TYPE_CLASS_ASSERTION_OPERATOR_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAssertionResponseTypes()
    {
        $this->assertEquals('AssertionResponseTypes', VersionConstants::TYPE_NAME_ASSERTION_RESPONSE_TYPES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAssertionResponseTypes', VersionConstants::TYPE_CLASS_ASSERTION_RESPONSE_TYPES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAssertionResponseTypesList()
    {
        $this->assertEquals('AssertionResponseTypes-list', VersionConstants::TYPE_NAME_ASSERTION_RESPONSE_TYPES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAssertionResponseTypesList', VersionConstants::TYPE_CLASS_ASSERTION_RESPONSE_TYPES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAttachment()
    {
        $this->assertEquals('Attachment', VersionConstants::TYPE_NAME_ATTACHMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAttachment', VersionConstants::TYPE_CLASS_ATTACHMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRAuditEvent()
    {
        $this->assertEquals('AuditEvent', VersionConstants::TYPE_NAME_AUDIT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent', VersionConstants::TYPE_CLASS_AUDIT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventAgent()
    {
        $this->assertEquals('AuditEvent.Agent', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventDetail()
    {
        $this->assertEquals('AuditEvent.Detail', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventEntity()
    {
        $this->assertEquals('AuditEvent.Entity', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventNetwork()
    {
        $this->assertEquals('AuditEvent.Network', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_NETWORK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_NETWORK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventSource()
    {
        $this->assertEquals('AuditEvent.Source', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAuditEventAction()
    {
        $this->assertEquals('AuditEventAction', VersionConstants::TYPE_NAME_AUDIT_EVENT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAuditEventAction', VersionConstants::TYPE_CLASS_AUDIT_EVENT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAuditEventActionList()
    {
        $this->assertEquals('AuditEventAction-list', VersionConstants::TYPE_NAME_AUDIT_EVENT_ACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAuditEventActionList', VersionConstants::TYPE_CLASS_AUDIT_EVENT_ACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAuditEventAgentNetworkType()
    {
        $this->assertEquals('AuditEventAgentNetworkType', VersionConstants::TYPE_NAME_AUDIT_EVENT_AGENT_NETWORK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAuditEventAgentNetworkType', VersionConstants::TYPE_CLASS_AUDIT_EVENT_AGENT_NETWORK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAuditEventAgentNetworkTypeList()
    {
        $this->assertEquals('AuditEventAgentNetworkType-list', VersionConstants::TYPE_NAME_AUDIT_EVENT_AGENT_NETWORK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAuditEventAgentNetworkTypeList', VersionConstants::TYPE_CLASS_AUDIT_EVENT_AGENT_NETWORK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRAuditEventOutcome()
    {
        $this->assertEquals('AuditEventOutcome', VersionConstants::TYPE_NAME_AUDIT_EVENT_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRAuditEventOutcome', VersionConstants::TYPE_CLASS_AUDIT_EVENT_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRAuditEventOutcomeList()
    {
        $this->assertEquals('AuditEventOutcome-list', VersionConstants::TYPE_NAME_AUDIT_EVENT_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRAuditEventOutcomeList', VersionConstants::TYPE_CLASS_AUDIT_EVENT_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement()
    {
        $this->assertEquals('BackboneElement', VersionConstants::TYPE_NAME_BACKBONE_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement', VersionConstants::TYPE_CLASS_BACKBONE_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBase64Binary()
    {
        $this->assertEquals('base64Binary', VersionConstants::TYPE_NAME_BASE_64BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBase64Binary', VersionConstants::TYPE_CLASS_BASE_64BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRBase64BinaryPrimitive()
    {
        $this->assertEquals('base64Binary-primitive', VersionConstants::TYPE_NAME_BASE_64BINARY_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBase64BinaryPrimitive', VersionConstants::TYPE_CLASS_BASE_64BINARY_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRBasic()
    {
        $this->assertEquals('Basic', VersionConstants::TYPE_NAME_BASIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRBasic', VersionConstants::TYPE_CLASS_BASIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRBinary()
    {
        $this->assertEquals('Binary', VersionConstants::TYPE_NAME_BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRBinary', VersionConstants::TYPE_CLASS_BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBindingStrength()
    {
        $this->assertEquals('BindingStrength', VersionConstants::TYPE_NAME_BINDING_STRENGTH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBindingStrength', VersionConstants::TYPE_CLASS_BINDING_STRENGTH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRBindingStrengthList()
    {
        $this->assertEquals('BindingStrength-list', VersionConstants::TYPE_NAME_BINDING_STRENGTH_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRBindingStrengthList', VersionConstants::TYPE_CLASS_BINDING_STRENGTH_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRBodySite()
    {
        $this->assertEquals('BodySite', VersionConstants::TYPE_NAME_BODY_SITE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRBodySite', VersionConstants::TYPE_CLASS_BODY_SITE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBoolean()
    {
        $this->assertEquals('boolean', VersionConstants::TYPE_NAME_BOOLEAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBoolean', VersionConstants::TYPE_CLASS_BOOLEAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRBooleanPrimitive()
    {
        $this->assertEquals('boolean-primitive', VersionConstants::TYPE_NAME_BOOLEAN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRBooleanPrimitive', VersionConstants::TYPE_CLASS_BOOLEAN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRBundle()
    {
        $this->assertEquals('Bundle', VersionConstants::TYPE_NAME_BUNDLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRBundle', VersionConstants::TYPE_CLASS_BUNDLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleEntry()
    {
        $this->assertEquals('Bundle.Entry', VersionConstants::TYPE_NAME_BUNDLE_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry', VersionConstants::TYPE_CLASS_BUNDLE_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleLink()
    {
        $this->assertEquals('Bundle.Link', VersionConstants::TYPE_NAME_BUNDLE_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink', VersionConstants::TYPE_CLASS_BUNDLE_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleRequest()
    {
        $this->assertEquals('Bundle.Request', VersionConstants::TYPE_NAME_BUNDLE_DOT_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest', VersionConstants::TYPE_CLASS_BUNDLE_DOT_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleResponse()
    {
        $this->assertEquals('Bundle.Response', VersionConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse', VersionConstants::TYPE_CLASS_BUNDLE_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleSearch()
    {
        $this->assertEquals('Bundle.Search', VersionConstants::TYPE_NAME_BUNDLE_DOT_SEARCH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch', VersionConstants::TYPE_CLASS_BUNDLE_DOT_SEARCH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBundleType()
    {
        $this->assertEquals('BundleType', VersionConstants::TYPE_NAME_BUNDLE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBundleType', VersionConstants::TYPE_CLASS_BUNDLE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRBundleTypeList()
    {
        $this->assertEquals('BundleType-list', VersionConstants::TYPE_NAME_BUNDLE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRBundleTypeList', VersionConstants::TYPE_CLASS_BUNDLE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRCapabilityStatement()
    {
        $this->assertEquals('CapabilityStatement', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementCertificate()
    {
        $this->assertEquals('CapabilityStatement.Certificate', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_CERTIFICATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementCertificate', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_CERTIFICATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementDocument()
    {
        $this->assertEquals('CapabilityStatement.Document', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_DOCUMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_DOCUMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementEndpoint()
    {
        $this->assertEquals('CapabilityStatement.Endpoint', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_ENDPOINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_ENDPOINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementEvent()
    {
        $this->assertEquals('CapabilityStatement.Event', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEvent', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementImplementation()
    {
        $this->assertEquals('CapabilityStatement.Implementation', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_IMPLEMENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_IMPLEMENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementInteraction()
    {
        $this->assertEquals('CapabilityStatement.Interaction', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementInteraction1()
    {
        $this->assertEquals('CapabilityStatement.Interaction1', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_INTERACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_INTERACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementMessaging()
    {
        $this->assertEquals('CapabilityStatement.Messaging', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_MESSAGING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_MESSAGING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementOperation()
    {
        $this->assertEquals('CapabilityStatement.Operation', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementResource()
    {
        $this->assertEquals('CapabilityStatement.Resource', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementRest()
    {
        $this->assertEquals('CapabilityStatement.Rest', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_REST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_REST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSearchParam()
    {
        $this->assertEquals('CapabilityStatement.SearchParam', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SEARCH_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SEARCH_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSecurity()
    {
        $this->assertEquals('CapabilityStatement.Security', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SECURITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SECURITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSoftware()
    {
        $this->assertEquals('CapabilityStatement.Software', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SOFTWARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SOFTWARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSupportedMessage()
    {
        $this->assertEquals('CapabilityStatement.SupportedMessage', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SUPPORTED_MESSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SUPPORTED_MESSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCapabilityStatementKind()
    {
        $this->assertEquals('CapabilityStatementKind', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCapabilityStatementKind', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCapabilityStatementKindList()
    {
        $this->assertEquals('CapabilityStatementKind-list', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCapabilityStatementKindList', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRCarePlan()
    {
        $this->assertEquals('CarePlan', VersionConstants::TYPE_NAME_CARE_PLAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRCarePlan', VersionConstants::TYPE_CLASS_CARE_PLAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanActivity()
    {
        $this->assertEquals('CarePlan.Activity', VersionConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity', VersionConstants::TYPE_CLASS_CARE_PLAN_DOT_ACTIVITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanDetail()
    {
        $this->assertEquals('CarePlan.Detail', VersionConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail', VersionConstants::TYPE_CLASS_CARE_PLAN_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCarePlanActivityStatus()
    {
        $this->assertEquals('CarePlanActivityStatus', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCarePlanActivityStatus', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCarePlanActivityStatusList()
    {
        $this->assertEquals('CarePlanActivityStatus-list', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCarePlanActivityStatusList', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCarePlanIntent()
    {
        $this->assertEquals('CarePlanIntent', VersionConstants::TYPE_NAME_CARE_PLAN_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCarePlanIntent', VersionConstants::TYPE_CLASS_CARE_PLAN_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCarePlanIntentList()
    {
        $this->assertEquals('CarePlanIntent-list', VersionConstants::TYPE_NAME_CARE_PLAN_INTENT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCarePlanIntentList', VersionConstants::TYPE_CLASS_CARE_PLAN_INTENT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCarePlanStatus()
    {
        $this->assertEquals('CarePlanStatus', VersionConstants::TYPE_NAME_CARE_PLAN_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCarePlanStatus', VersionConstants::TYPE_CLASS_CARE_PLAN_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCarePlanStatusList()
    {
        $this->assertEquals('CarePlanStatus-list', VersionConstants::TYPE_NAME_CARE_PLAN_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCarePlanStatusList', VersionConstants::TYPE_CLASS_CARE_PLAN_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRCareTeam()
    {
        $this->assertEquals('CareTeam', VersionConstants::TYPE_NAME_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRCareTeam', VersionConstants::TYPE_CLASS_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCareTeam_FHIRCareTeamParticipant()
    {
        $this->assertEquals('CareTeam.Participant', VersionConstants::TYPE_NAME_CARE_TEAM_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCareTeam\FHIRCareTeamParticipant', VersionConstants::TYPE_CLASS_CARE_TEAM_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCareTeamStatus()
    {
        $this->assertEquals('CareTeamStatus', VersionConstants::TYPE_NAME_CARE_TEAM_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCareTeamStatus', VersionConstants::TYPE_CLASS_CARE_TEAM_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCareTeamStatusList()
    {
        $this->assertEquals('CareTeamStatus-list', VersionConstants::TYPE_NAME_CARE_TEAM_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCareTeamStatusList', VersionConstants::TYPE_CLASS_CARE_TEAM_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRChargeItem()
    {
        $this->assertEquals('ChargeItem', VersionConstants::TYPE_NAME_CHARGE_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRChargeItem', VersionConstants::TYPE_CLASS_CHARGE_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRChargeItem_FHIRChargeItemParticipant()
    {
        $this->assertEquals('ChargeItem.Participant', VersionConstants::TYPE_NAME_CHARGE_ITEM_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemParticipant', VersionConstants::TYPE_CLASS_CHARGE_ITEM_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRChargeItemStatus()
    {
        $this->assertEquals('ChargeItemStatus', VersionConstants::TYPE_NAME_CHARGE_ITEM_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRChargeItemStatus', VersionConstants::TYPE_CLASS_CHARGE_ITEM_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRChargeItemStatusList()
    {
        $this->assertEquals('ChargeItemStatus-list', VersionConstants::TYPE_NAME_CHARGE_ITEM_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRChargeItemStatusList', VersionConstants::TYPE_CLASS_CHARGE_ITEM_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRClaim()
    {
        $this->assertEquals('Claim', VersionConstants::TYPE_NAME_CLAIM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRClaim', VersionConstants::TYPE_CLASS_CLAIM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimAccident()
    {
        $this->assertEquals('Claim.Accident', VersionConstants::TYPE_NAME_CLAIM_DOT_ACCIDENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident', VersionConstants::TYPE_CLASS_CLAIM_DOT_ACCIDENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimCareTeam()
    {
        $this->assertEquals('Claim.CareTeam', VersionConstants::TYPE_NAME_CLAIM_DOT_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam', VersionConstants::TYPE_CLASS_CLAIM_DOT_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimDetail()
    {
        $this->assertEquals('Claim.Detail', VersionConstants::TYPE_NAME_CLAIM_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail', VersionConstants::TYPE_CLASS_CLAIM_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimDiagnosis()
    {
        $this->assertEquals('Claim.Diagnosis', VersionConstants::TYPE_NAME_CLAIM_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis', VersionConstants::TYPE_CLASS_CLAIM_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimInformation()
    {
        $this->assertEquals('Claim.Information', VersionConstants::TYPE_NAME_CLAIM_DOT_INFORMATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInformation', VersionConstants::TYPE_CLASS_CLAIM_DOT_INFORMATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimInsurance()
    {
        $this->assertEquals('Claim.Insurance', VersionConstants::TYPE_NAME_CLAIM_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance', VersionConstants::TYPE_CLASS_CLAIM_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimItem()
    {
        $this->assertEquals('Claim.Item', VersionConstants::TYPE_NAME_CLAIM_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem', VersionConstants::TYPE_CLASS_CLAIM_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimPayee()
    {
        $this->assertEquals('Claim.Payee', VersionConstants::TYPE_NAME_CLAIM_DOT_PAYEE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee', VersionConstants::TYPE_CLASS_CLAIM_DOT_PAYEE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimProcedure()
    {
        $this->assertEquals('Claim.Procedure', VersionConstants::TYPE_NAME_CLAIM_DOT_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure', VersionConstants::TYPE_CLASS_CLAIM_DOT_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimRelated()
    {
        $this->assertEquals('Claim.Related', VersionConstants::TYPE_NAME_CLAIM_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated', VersionConstants::TYPE_CLASS_CLAIM_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimSubDetail()
    {
        $this->assertEquals('Claim.SubDetail', VersionConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail', VersionConstants::TYPE_CLASS_CLAIM_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRClaimResponse()
    {
        $this->assertEquals('ClaimResponse', VersionConstants::TYPE_NAME_CLAIM_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAddItem()
    {
        $this->assertEquals('ClaimResponse.AddItem', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADD_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAdjudication()
    {
        $this->assertEquals('ClaimResponse.Adjudication', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADJUDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADJUDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseDetail()
    {
        $this->assertEquals('ClaimResponse.Detail', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseDetail1()
    {
        $this->assertEquals('ClaimResponse.Detail1', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_DETAIL_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseError()
    {
        $this->assertEquals('ClaimResponse.Error', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ERROR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseInsurance()
    {
        $this->assertEquals('ClaimResponse.Insurance', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseItem()
    {
        $this->assertEquals('ClaimResponse.Item', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponsePayment()
    {
        $this->assertEquals('ClaimResponse.Payment', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_PAYMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_PAYMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseProcessNote()
    {
        $this->assertEquals('ClaimResponse.ProcessNote', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseSubDetail()
    {
        $this->assertEquals('ClaimResponse.SubDetail', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRClinicalImpression()
    {
        $this->assertEquals('ClinicalImpression', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalImpression_FHIRClinicalImpressionFinding()
    {
        $this->assertEquals('ClinicalImpression.Finding', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_FINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION_DOT_FINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalImpression_FHIRClinicalImpressionInvestigation()
    {
        $this->assertEquals('ClinicalImpression.Investigation', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_INVESTIGATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION_DOT_INVESTIGATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRClinicalImpressionStatus()
    {
        $this->assertEquals('ClinicalImpressionStatus', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRClinicalImpressionStatus', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRClinicalImpressionStatusList()
    {
        $this->assertEquals('ClinicalImpressionStatus-list', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRClinicalImpressionStatusList', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCode()
    {
        $this->assertEquals('code', VersionConstants::TYPE_NAME_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode', VersionConstants::TYPE_CLASS_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive()
    {
        $this->assertEquals('code-primitive', VersionConstants::TYPE_NAME_CODE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive', VersionConstants::TYPE_CLASS_CODE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCodeableConcept()
    {
        $this->assertEquals('CodeableConcept', VersionConstants::TYPE_NAME_CODEABLE_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept', VersionConstants::TYPE_CLASS_CODEABLE_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRCodeSystem()
    {
        $this->assertEquals('CodeSystem', VersionConstants::TYPE_NAME_CODE_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRCodeSystem', VersionConstants::TYPE_CLASS_CODE_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemConcept()
    {
        $this->assertEquals('CodeSystem.Concept', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemDesignation()
    {
        $this->assertEquals('CodeSystem.Designation', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_DESIGNATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemDesignation', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_DESIGNATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemFilter()
    {
        $this->assertEquals('CodeSystem.Filter', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemProperty()
    {
        $this->assertEquals('CodeSystem.Property', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_PROPERTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_PROPERTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemProperty1()
    {
        $this->assertEquals('CodeSystem.Property1', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_PROPERTY_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty1', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_PROPERTY_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCodeSystemContentMode()
    {
        $this->assertEquals('CodeSystemContentMode', VersionConstants::TYPE_NAME_CODE_SYSTEM_CONTENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeSystemContentMode', VersionConstants::TYPE_CLASS_CODE_SYSTEM_CONTENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCodeSystemContentModeList()
    {
        $this->assertEquals('CodeSystemContentMode-list', VersionConstants::TYPE_NAME_CODE_SYSTEM_CONTENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCodeSystemContentModeList', VersionConstants::TYPE_CLASS_CODE_SYSTEM_CONTENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCodeSystemHierarchyMeaning()
    {
        $this->assertEquals('CodeSystemHierarchyMeaning', VersionConstants::TYPE_NAME_CODE_SYSTEM_HIERARCHY_MEANING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeSystemHierarchyMeaning', VersionConstants::TYPE_CLASS_CODE_SYSTEM_HIERARCHY_MEANING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCodeSystemHierarchyMeaningList()
    {
        $this->assertEquals('CodeSystemHierarchyMeaning-list', VersionConstants::TYPE_NAME_CODE_SYSTEM_HIERARCHY_MEANING_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCodeSystemHierarchyMeaningList', VersionConstants::TYPE_CLASS_CODE_SYSTEM_HIERARCHY_MEANING_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCoding()
    {
        $this->assertEquals('Coding', VersionConstants::TYPE_NAME_CODING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCoding', VersionConstants::TYPE_CLASS_CODING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRCommunication()
    {
        $this->assertEquals('Communication', VersionConstants::TYPE_NAME_COMMUNICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRCommunication', VersionConstants::TYPE_CLASS_COMMUNICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCommunication_FHIRCommunicationPayload()
    {
        $this->assertEquals('Communication.Payload', VersionConstants::TYPE_NAME_COMMUNICATION_DOT_PAYLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload', VersionConstants::TYPE_CLASS_COMMUNICATION_DOT_PAYLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRCommunicationRequest()
    {
        $this->assertEquals('CommunicationRequest', VersionConstants::TYPE_NAME_COMMUNICATION_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest', VersionConstants::TYPE_CLASS_COMMUNICATION_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCommunicationRequest_FHIRCommunicationRequestPayload()
    {
        $this->assertEquals('CommunicationRequest.Payload', VersionConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_PAYLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload', VersionConstants::TYPE_CLASS_COMMUNICATION_REQUEST_DOT_PAYLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCommunicationRequest_FHIRCommunicationRequestRequester()
    {
        $this->assertEquals('CommunicationRequest.Requester', VersionConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestRequester', VersionConstants::TYPE_CLASS_COMMUNICATION_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRCompartmentDefinition()
    {
        $this->assertEquals('CompartmentDefinition', VersionConstants::TYPE_NAME_COMPARTMENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition', VersionConstants::TYPE_CLASS_COMPARTMENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCompartmentDefinition_FHIRCompartmentDefinitionResource()
    {
        $this->assertEquals('CompartmentDefinition.Resource', VersionConstants::TYPE_NAME_COMPARTMENT_DEFINITION_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource', VersionConstants::TYPE_CLASS_COMPARTMENT_DEFINITION_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCompartmentType()
    {
        $this->assertEquals('CompartmentType', VersionConstants::TYPE_NAME_COMPARTMENT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCompartmentType', VersionConstants::TYPE_CLASS_COMPARTMENT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCompartmentTypeList()
    {
        $this->assertEquals('CompartmentType-list', VersionConstants::TYPE_NAME_COMPARTMENT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCompartmentTypeList', VersionConstants::TYPE_CLASS_COMPARTMENT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRComposition()
    {
        $this->assertEquals('Composition', VersionConstants::TYPE_NAME_COMPOSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRComposition', VersionConstants::TYPE_CLASS_COMPOSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionAttester()
    {
        $this->assertEquals('Composition.Attester', VersionConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_ATTESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionEvent()
    {
        $this->assertEquals('Composition.Event', VersionConstants::TYPE_NAME_COMPOSITION_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionRelatesTo()
    {
        $this->assertEquals('Composition.RelatesTo', VersionConstants::TYPE_NAME_COMPOSITION_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionRelatesTo', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionSection()
    {
        $this->assertEquals('Composition.Section', VersionConstants::TYPE_NAME_COMPOSITION_DOT_SECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_SECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCompositionAttestationMode()
    {
        $this->assertEquals('CompositionAttestationMode', VersionConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCompositionAttestationMode', VersionConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCompositionAttestationModeList()
    {
        $this->assertEquals('CompositionAttestationMode-list', VersionConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCompositionAttestationModeList', VersionConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRCompositionStatus()
    {
        $this->assertEquals('CompositionStatus', VersionConstants::TYPE_NAME_COMPOSITION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCompositionStatus', VersionConstants::TYPE_CLASS_COMPOSITION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRCompositionStatusList()
    {
        $this->assertEquals('CompositionStatus-list', VersionConstants::TYPE_NAME_COMPOSITION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRCompositionStatusList', VersionConstants::TYPE_CLASS_COMPOSITION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRConceptMap()
    {
        $this->assertEquals('ConceptMap', VersionConstants::TYPE_NAME_CONCEPT_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRConceptMap', VersionConstants::TYPE_CLASS_CONCEPT_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapDependsOn()
    {
        $this->assertEquals('ConceptMap.DependsOn', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_DEPENDS_ON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapElement()
    {
        $this->assertEquals('ConceptMap.Element', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapGroup()
    {
        $this->assertEquals('ConceptMap.Group', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapTarget()
    {
        $this->assertEquals('ConceptMap.Target', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapUnmapped()
    {
        $this->assertEquals('ConceptMap.Unmapped', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_UNMAPPED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_UNMAPPED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConceptMapEquivalence()
    {
        $this->assertEquals('ConceptMapEquivalence', VersionConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConceptMapEquivalence', VersionConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConceptMapEquivalenceList()
    {
        $this->assertEquals('ConceptMapEquivalence-list', VersionConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConceptMapEquivalenceList', VersionConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConceptMapGroupUnmappedMode()
    {
        $this->assertEquals('ConceptMapGroupUnmappedMode', VersionConstants::TYPE_NAME_CONCEPT_MAP_GROUP_UNMAPPED_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConceptMapGroupUnmappedMode', VersionConstants::TYPE_CLASS_CONCEPT_MAP_GROUP_UNMAPPED_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConceptMapGroupUnmappedModeList()
    {
        $this->assertEquals('ConceptMapGroupUnmappedMode-list', VersionConstants::TYPE_NAME_CONCEPT_MAP_GROUP_UNMAPPED_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConceptMapGroupUnmappedModeList', VersionConstants::TYPE_CLASS_CONCEPT_MAP_GROUP_UNMAPPED_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRCondition()
    {
        $this->assertEquals('Condition', VersionConstants::TYPE_NAME_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRCondition', VersionConstants::TYPE_CLASS_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionEvidence()
    {
        $this->assertEquals('Condition.Evidence', VersionConstants::TYPE_NAME_CONDITION_DOT_EVIDENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence', VersionConstants::TYPE_CLASS_CONDITION_DOT_EVIDENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionStage()
    {
        $this->assertEquals('Condition.Stage', VersionConstants::TYPE_NAME_CONDITION_DOT_STAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage', VersionConstants::TYPE_CLASS_CONDITION_DOT_STAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConditionalDeleteStatus()
    {
        $this->assertEquals('ConditionalDeleteStatus', VersionConstants::TYPE_NAME_CONDITIONAL_DELETE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalDeleteStatus', VersionConstants::TYPE_CLASS_CONDITIONAL_DELETE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConditionalDeleteStatusList()
    {
        $this->assertEquals('ConditionalDeleteStatus-list', VersionConstants::TYPE_NAME_CONDITIONAL_DELETE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionalDeleteStatusList', VersionConstants::TYPE_CLASS_CONDITIONAL_DELETE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConditionalReadStatus()
    {
        $this->assertEquals('ConditionalReadStatus', VersionConstants::TYPE_NAME_CONDITIONAL_READ_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionalReadStatus', VersionConstants::TYPE_CLASS_CONDITIONAL_READ_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConditionalReadStatusList()
    {
        $this->assertEquals('ConditionalReadStatus-list', VersionConstants::TYPE_NAME_CONDITIONAL_READ_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionalReadStatusList', VersionConstants::TYPE_CLASS_CONDITIONAL_READ_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConditionClinicalStatusCodes()
    {
        $this->assertEquals('ConditionClinicalStatusCodes', VersionConstants::TYPE_NAME_CONDITION_CLINICAL_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionClinicalStatusCodes', VersionConstants::TYPE_CLASS_CONDITION_CLINICAL_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConditionClinicalStatusCodesList()
    {
        $this->assertEquals('ConditionClinicalStatusCodes-list', VersionConstants::TYPE_NAME_CONDITION_CLINICAL_STATUS_CODES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionClinicalStatusCodesList', VersionConstants::TYPE_CLASS_CONDITION_CLINICAL_STATUS_CODES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConditionVerificationStatus()
    {
        $this->assertEquals('ConditionVerificationStatus', VersionConstants::TYPE_NAME_CONDITION_VERIFICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConditionVerificationStatus', VersionConstants::TYPE_CLASS_CONDITION_VERIFICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConditionVerificationStatusList()
    {
        $this->assertEquals('ConditionVerificationStatus-list', VersionConstants::TYPE_NAME_CONDITION_VERIFICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConditionVerificationStatusList', VersionConstants::TYPE_CLASS_CONDITION_VERIFICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConfidentialityClassification()
    {
        $this->assertEquals('ConfidentialityClassification', VersionConstants::TYPE_NAME_CONFIDENTIALITY_CLASSIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConfidentialityClassification', VersionConstants::TYPE_CLASS_CONFIDENTIALITY_CLASSIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConfidentialityClassificationList()
    {
        $this->assertEquals('ConfidentialityClassification-list', VersionConstants::TYPE_NAME_CONFIDENTIALITY_CLASSIFICATION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConfidentialityClassificationList', VersionConstants::TYPE_CLASS_CONFIDENTIALITY_CLASSIFICATION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRConsent()
    {
        $this->assertEquals('Consent', VersionConstants::TYPE_NAME_CONSENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRConsent', VersionConstants::TYPE_CLASS_CONSENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentActor()
    {
        $this->assertEquals('Consent.Actor', VersionConstants::TYPE_NAME_CONSENT_DOT_ACTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor', VersionConstants::TYPE_CLASS_CONSENT_DOT_ACTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentActor1()
    {
        $this->assertEquals('Consent.Actor1', VersionConstants::TYPE_NAME_CONSENT_DOT_ACTOR_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor1', VersionConstants::TYPE_CLASS_CONSENT_DOT_ACTOR_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentData()
    {
        $this->assertEquals('Consent.Data', VersionConstants::TYPE_NAME_CONSENT_DOT_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData', VersionConstants::TYPE_CLASS_CONSENT_DOT_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentData1()
    {
        $this->assertEquals('Consent.Data1', VersionConstants::TYPE_NAME_CONSENT_DOT_DATA_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData1', VersionConstants::TYPE_CLASS_CONSENT_DOT_DATA_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentExcept()
    {
        $this->assertEquals('Consent.Except', VersionConstants::TYPE_NAME_CONSENT_DOT_EXCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentExcept', VersionConstants::TYPE_CLASS_CONSENT_DOT_EXCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentPolicy()
    {
        $this->assertEquals('Consent.Policy', VersionConstants::TYPE_NAME_CONSENT_DOT_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy', VersionConstants::TYPE_CLASS_CONSENT_DOT_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConsentDataMeaning()
    {
        $this->assertEquals('ConsentDataMeaning', VersionConstants::TYPE_NAME_CONSENT_DATA_MEANING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConsentDataMeaning', VersionConstants::TYPE_CLASS_CONSENT_DATA_MEANING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConsentDataMeaningList()
    {
        $this->assertEquals('ConsentDataMeaning-list', VersionConstants::TYPE_NAME_CONSENT_DATA_MEANING_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConsentDataMeaningList', VersionConstants::TYPE_CLASS_CONSENT_DATA_MEANING_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConsentExceptType()
    {
        $this->assertEquals('ConsentExceptType', VersionConstants::TYPE_NAME_CONSENT_EXCEPT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConsentExceptType', VersionConstants::TYPE_CLASS_CONSENT_EXCEPT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConsentExceptTypeList()
    {
        $this->assertEquals('ConsentExceptType-list', VersionConstants::TYPE_NAME_CONSENT_EXCEPT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConsentExceptTypeList', VersionConstants::TYPE_CLASS_CONSENT_EXCEPT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConsentState()
    {
        $this->assertEquals('ConsentState', VersionConstants::TYPE_NAME_CONSENT_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConsentState', VersionConstants::TYPE_CLASS_CONSENT_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConsentStateList()
    {
        $this->assertEquals('ConsentState-list', VersionConstants::TYPE_NAME_CONSENT_STATE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConsentStateList', VersionConstants::TYPE_CLASS_CONSENT_STATE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRConstraintSeverity()
    {
        $this->assertEquals('ConstraintSeverity', VersionConstants::TYPE_NAME_CONSTRAINT_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRConstraintSeverity', VersionConstants::TYPE_CLASS_CONSTRAINT_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRConstraintSeverityList()
    {
        $this->assertEquals('ConstraintSeverity-list', VersionConstants::TYPE_NAME_CONSTRAINT_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRConstraintSeverityList', VersionConstants::TYPE_CLASS_CONSTRAINT_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRContactDetail()
    {
        $this->assertEquals('ContactDetail', VersionConstants::TYPE_NAME_CONTACT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactDetail', VersionConstants::TYPE_CLASS_CONTACT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRContactPoint()
    {
        $this->assertEquals('ContactPoint', VersionConstants::TYPE_NAME_CONTACT_POINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPoint', VersionConstants::TYPE_CLASS_CONTACT_POINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRContactPointSystem()
    {
        $this->assertEquals('ContactPointSystem', VersionConstants::TYPE_NAME_CONTACT_POINT_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPointSystem', VersionConstants::TYPE_CLASS_CONTACT_POINT_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRContactPointSystemList()
    {
        $this->assertEquals('ContactPointSystem-list', VersionConstants::TYPE_NAME_CONTACT_POINT_SYSTEM_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRContactPointSystemList', VersionConstants::TYPE_CLASS_CONTACT_POINT_SYSTEM_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRContactPointUse()
    {
        $this->assertEquals('ContactPointUse', VersionConstants::TYPE_NAME_CONTACT_POINT_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContactPointUse', VersionConstants::TYPE_CLASS_CONTACT_POINT_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRContactPointUseList()
    {
        $this->assertEquals('ContactPointUse-list', VersionConstants::TYPE_NAME_CONTACT_POINT_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRContactPointUseList', VersionConstants::TYPE_CLASS_CONTACT_POINT_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRContentType()
    {
        $this->assertEquals('ContentType', VersionConstants::TYPE_NAME_CONTENT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContentType', VersionConstants::TYPE_CLASS_CONTENT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRContentTypeList()
    {
        $this->assertEquals('ContentType-list', VersionConstants::TYPE_NAME_CONTENT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRContentTypeList', VersionConstants::TYPE_CLASS_CONTENT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRContract()
    {
        $this->assertEquals('Contract', VersionConstants::TYPE_NAME_CONTRACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRContract', VersionConstants::TYPE_CLASS_CONTRACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractAgent()
    {
        $this->assertEquals('Contract.Agent', VersionConstants::TYPE_NAME_CONTRACT_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent', VersionConstants::TYPE_CLASS_CONTRACT_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractAgent1()
    {
        $this->assertEquals('Contract.Agent1', VersionConstants::TYPE_NAME_CONTRACT_DOT_AGENT_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAgent1', VersionConstants::TYPE_CLASS_CONTRACT_DOT_AGENT_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractFriendly()
    {
        $this->assertEquals('Contract.Friendly', VersionConstants::TYPE_NAME_CONTRACT_DOT_FRIENDLY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly', VersionConstants::TYPE_CLASS_CONTRACT_DOT_FRIENDLY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractLegal()
    {
        $this->assertEquals('Contract.Legal', VersionConstants::TYPE_NAME_CONTRACT_DOT_LEGAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal', VersionConstants::TYPE_CLASS_CONTRACT_DOT_LEGAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractRule()
    {
        $this->assertEquals('Contract.Rule', VersionConstants::TYPE_NAME_CONTRACT_DOT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule', VersionConstants::TYPE_CLASS_CONTRACT_DOT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractSigner()
    {
        $this->assertEquals('Contract.Signer', VersionConstants::TYPE_NAME_CONTRACT_DOT_SIGNER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner', VersionConstants::TYPE_CLASS_CONTRACT_DOT_SIGNER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractTerm()
    {
        $this->assertEquals('Contract.Term', VersionConstants::TYPE_NAME_CONTRACT_DOT_TERM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm', VersionConstants::TYPE_CLASS_CONTRACT_DOT_TERM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractValuedItem()
    {
        $this->assertEquals('Contract.ValuedItem', VersionConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem', VersionConstants::TYPE_CLASS_CONTRACT_DOT_VALUED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractValuedItem1()
    {
        $this->assertEquals('Contract.ValuedItem1', VersionConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1', VersionConstants::TYPE_CLASS_CONTRACT_DOT_VALUED_ITEM_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRContractResourceStatusCodes()
    {
        $this->assertEquals('ContractResourceStatusCodes', VersionConstants::TYPE_NAME_CONTRACT_RESOURCE_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContractResourceStatusCodes', VersionConstants::TYPE_CLASS_CONTRACT_RESOURCE_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRContractResourceStatusCodesList()
    {
        $this->assertEquals('ContractResourceStatusCodes-list', VersionConstants::TYPE_NAME_CONTRACT_RESOURCE_STATUS_CODES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRContractResourceStatusCodesList', VersionConstants::TYPE_CLASS_CONTRACT_RESOURCE_STATUS_CODES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRContributor()
    {
        $this->assertEquals('Contributor', VersionConstants::TYPE_NAME_CONTRIBUTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributor', VersionConstants::TYPE_CLASS_CONTRIBUTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRContributorType()
    {
        $this->assertEquals('ContributorType', VersionConstants::TYPE_NAME_CONTRIBUTOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRContributorType', VersionConstants::TYPE_CLASS_CONTRIBUTOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRContributorTypeList()
    {
        $this->assertEquals('ContributorType-list', VersionConstants::TYPE_NAME_CONTRIBUTOR_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRContributorTypeList', VersionConstants::TYPE_CLASS_CONTRIBUTOR_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQuantity_FHIRCount()
    {
        $this->assertEquals('Count', VersionConstants::TYPE_NAME_COUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRCount', VersionConstants::TYPE_CLASS_COUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRCoverage()
    {
        $this->assertEquals('Coverage', VersionConstants::TYPE_NAME_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRCoverage', VersionConstants::TYPE_CLASS_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRCoverage_FHIRCoverageGrouping()
    {
        $this->assertEquals('Coverage.Grouping', VersionConstants::TYPE_NAME_COVERAGE_DOT_GROUPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping', VersionConstants::TYPE_CLASS_COVERAGE_DOT_GROUPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDataElement()
    {
        $this->assertEquals('DataElement', VersionConstants::TYPE_NAME_DATA_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDataElement', VersionConstants::TYPE_CLASS_DATA_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDataElement_FHIRDataElementMapping()
    {
        $this->assertEquals('DataElement.Mapping', VersionConstants::TYPE_NAME_DATA_ELEMENT_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping', VersionConstants::TYPE_CLASS_DATA_ELEMENT_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDataElementStringency()
    {
        $this->assertEquals('DataElementStringency', VersionConstants::TYPE_NAME_DATA_ELEMENT_STRINGENCY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataElementStringency', VersionConstants::TYPE_CLASS_DATA_ELEMENT_STRINGENCY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDataElementStringencyList()
    {
        $this->assertEquals('DataElementStringency-list', VersionConstants::TYPE_NAME_DATA_ELEMENT_STRINGENCY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDataElementStringencyList', VersionConstants::TYPE_CLASS_DATA_ELEMENT_STRINGENCY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDataRequirement()
    {
        $this->assertEquals('DataRequirement', VersionConstants::TYPE_NAME_DATA_REQUIREMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement', VersionConstants::TYPE_CLASS_DATA_REQUIREMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDataRequirement_FHIRDataRequirementCodeFilter()
    {
        $this->assertEquals('DataRequirement.CodeFilter', VersionConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter', VersionConstants::TYPE_CLASS_DATA_REQUIREMENT_DOT_CODE_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDataRequirement_FHIRDataRequirementDateFilter()
    {
        $this->assertEquals('DataRequirement.DateFilter', VersionConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter', VersionConstants::TYPE_CLASS_DATA_REQUIREMENT_DOT_DATE_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDate()
    {
        $this->assertEquals('date', VersionConstants::TYPE_NAME_DATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDate', VersionConstants::TYPE_CLASS_DATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRDatePrimitive()
    {
        $this->assertEquals('date-primitive', VersionConstants::TYPE_NAME_DATE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDatePrimitive', VersionConstants::TYPE_CLASS_DATE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDateTime()
    {
        $this->assertEquals('dateTime', VersionConstants::TYPE_NAME_DATE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDateTime', VersionConstants::TYPE_CLASS_DATE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRDateTimePrimitive()
    {
        $this->assertEquals('dateTime-primitive', VersionConstants::TYPE_NAME_DATE_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDateTimePrimitive', VersionConstants::TYPE_CLASS_DATE_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDaysOfWeek()
    {
        $this->assertEquals('DaysOfWeek', VersionConstants::TYPE_NAME_DAYS_OF_WEEK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDaysOfWeek', VersionConstants::TYPE_CLASS_DAYS_OF_WEEK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDaysOfWeekList()
    {
        $this->assertEquals('DaysOfWeek-list', VersionConstants::TYPE_NAME_DAYS_OF_WEEK_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDaysOfWeekList', VersionConstants::TYPE_CLASS_DAYS_OF_WEEK_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDecimal()
    {
        $this->assertEquals('decimal', VersionConstants::TYPE_NAME_DECIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDecimal', VersionConstants::TYPE_CLASS_DECIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRDecimalPrimitive()
    {
        $this->assertEquals('decimal-primitive', VersionConstants::TYPE_NAME_DECIMAL_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRDecimalPrimitive', VersionConstants::TYPE_CLASS_DECIMAL_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDetectedIssue()
    {
        $this->assertEquals('DetectedIssue', VersionConstants::TYPE_NAME_DETECTED_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDetectedIssue', VersionConstants::TYPE_CLASS_DETECTED_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDetectedIssue_FHIRDetectedIssueMitigation()
    {
        $this->assertEquals('DetectedIssue.Mitigation', VersionConstants::TYPE_NAME_DETECTED_ISSUE_DOT_MITIGATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation', VersionConstants::TYPE_CLASS_DETECTED_ISSUE_DOT_MITIGATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDetectedIssueSeverity()
    {
        $this->assertEquals('DetectedIssueSeverity', VersionConstants::TYPE_NAME_DETECTED_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDetectedIssueSeverity', VersionConstants::TYPE_CLASS_DETECTED_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDetectedIssueSeverityList()
    {
        $this->assertEquals('DetectedIssueSeverity-list', VersionConstants::TYPE_NAME_DETECTED_ISSUE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDetectedIssueSeverityList', VersionConstants::TYPE_CLASS_DETECTED_ISSUE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDevice()
    {
        $this->assertEquals('Device', VersionConstants::TYPE_NAME_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDevice', VersionConstants::TYPE_CLASS_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDevice_FHIRDeviceUdi()
    {
        $this->assertEquals('Device.Udi', VersionConstants::TYPE_NAME_DEVICE_DOT_UDI);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdi', VersionConstants::TYPE_CLASS_DEVICE_DOT_UDI);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDeviceComponent()
    {
        $this->assertEquals('DeviceComponent', VersionConstants::TYPE_NAME_DEVICE_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDeviceComponent', VersionConstants::TYPE_CLASS_DEVICE_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceComponent_FHIRDeviceComponentProductionSpecification()
    {
        $this->assertEquals('DeviceComponent.ProductionSpecification', VersionConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification', VersionConstants::TYPE_CLASS_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDeviceMetric()
    {
        $this->assertEquals('DeviceMetric', VersionConstants::TYPE_NAME_DEVICE_METRIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDeviceMetric', VersionConstants::TYPE_CLASS_DEVICE_METRIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceMetric_FHIRDeviceMetricCalibration()
    {
        $this->assertEquals('DeviceMetric.Calibration', VersionConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration', VersionConstants::TYPE_CLASS_DEVICE_METRIC_DOT_CALIBRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDeviceMetricCalibrationState()
    {
        $this->assertEquals('DeviceMetricCalibrationState', VersionConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDeviceMetricCalibrationState', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDeviceMetricCalibrationStateList()
    {
        $this->assertEquals('DeviceMetricCalibrationState-list', VersionConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_STATE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDeviceMetricCalibrationStateList', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_STATE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDeviceMetricCalibrationType()
    {
        $this->assertEquals('DeviceMetricCalibrationType', VersionConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDeviceMetricCalibrationType', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDeviceMetricCalibrationTypeList()
    {
        $this->assertEquals('DeviceMetricCalibrationType-list', VersionConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDeviceMetricCalibrationTypeList', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDeviceMetricCategory()
    {
        $this->assertEquals('DeviceMetricCategory', VersionConstants::TYPE_NAME_DEVICE_METRIC_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDeviceMetricCategory', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDeviceMetricCategoryList()
    {
        $this->assertEquals('DeviceMetricCategory-list', VersionConstants::TYPE_NAME_DEVICE_METRIC_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDeviceMetricCategoryList', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDeviceMetricColor()
    {
        $this->assertEquals('DeviceMetricColor', VersionConstants::TYPE_NAME_DEVICE_METRIC_COLOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDeviceMetricColor', VersionConstants::TYPE_CLASS_DEVICE_METRIC_COLOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDeviceMetricColorList()
    {
        $this->assertEquals('DeviceMetricColor-list', VersionConstants::TYPE_NAME_DEVICE_METRIC_COLOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDeviceMetricColorList', VersionConstants::TYPE_CLASS_DEVICE_METRIC_COLOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDeviceMetricOperationalStatus()
    {
        $this->assertEquals('DeviceMetricOperationalStatus', VersionConstants::TYPE_NAME_DEVICE_METRIC_OPERATIONAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDeviceMetricOperationalStatus', VersionConstants::TYPE_CLASS_DEVICE_METRIC_OPERATIONAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDeviceMetricOperationalStatusList()
    {
        $this->assertEquals('DeviceMetricOperationalStatus-list', VersionConstants::TYPE_NAME_DEVICE_METRIC_OPERATIONAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDeviceMetricOperationalStatusList', VersionConstants::TYPE_CLASS_DEVICE_METRIC_OPERATIONAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDeviceRequest()
    {
        $this->assertEquals('DeviceRequest', VersionConstants::TYPE_NAME_DEVICE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDeviceRequest', VersionConstants::TYPE_CLASS_DEVICE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceRequest_FHIRDeviceRequestRequester()
    {
        $this->assertEquals('DeviceRequest.Requester', VersionConstants::TYPE_NAME_DEVICE_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceRequest\FHIRDeviceRequestRequester', VersionConstants::TYPE_CLASS_DEVICE_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDeviceUseStatement()
    {
        $this->assertEquals('DeviceUseStatement', VersionConstants::TYPE_NAME_DEVICE_USE_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement', VersionConstants::TYPE_CLASS_DEVICE_USE_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDeviceUseStatementStatus()
    {
        $this->assertEquals('DeviceUseStatementStatus', VersionConstants::TYPE_NAME_DEVICE_USE_STATEMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDeviceUseStatementStatus', VersionConstants::TYPE_CLASS_DEVICE_USE_STATEMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDeviceUseStatementStatusList()
    {
        $this->assertEquals('DeviceUseStatementStatus-list', VersionConstants::TYPE_NAME_DEVICE_USE_STATEMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDeviceUseStatementStatusList', VersionConstants::TYPE_CLASS_DEVICE_USE_STATEMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDiagnosticReport()
    {
        $this->assertEquals('DiagnosticReport', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDiagnosticReport_FHIRDiagnosticReportImage()
    {
        $this->assertEquals('DiagnosticReport.Image', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_DOT_IMAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_DOT_IMAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDiagnosticReport_FHIRDiagnosticReportPerformer()
    {
        $this->assertEquals('DiagnosticReport.Performer', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportPerformer', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDiagnosticReportStatus()
    {
        $this->assertEquals('DiagnosticReportStatus', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDiagnosticReportStatus', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDiagnosticReportStatusList()
    {
        $this->assertEquals('DiagnosticReportStatus-list', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDiagnosticReportStatusList', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDigitalMediaType()
    {
        $this->assertEquals('DigitalMediaType', VersionConstants::TYPE_NAME_DIGITAL_MEDIA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDigitalMediaType', VersionConstants::TYPE_CLASS_DIGITAL_MEDIA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDigitalMediaTypeList()
    {
        $this->assertEquals('DigitalMediaType-list', VersionConstants::TYPE_NAME_DIGITAL_MEDIA_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDigitalMediaTypeList', VersionConstants::TYPE_CLASS_DIGITAL_MEDIA_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDiscriminatorType()
    {
        $this->assertEquals('DiscriminatorType', VersionConstants::TYPE_NAME_DISCRIMINATOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDiscriminatorType', VersionConstants::TYPE_CLASS_DISCRIMINATOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDiscriminatorTypeList()
    {
        $this->assertEquals('DiscriminatorType-list', VersionConstants::TYPE_NAME_DISCRIMINATOR_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDiscriminatorTypeList', VersionConstants::TYPE_CLASS_DISCRIMINATOR_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQuantity_FHIRDistance()
    {
        $this->assertEquals('Distance', VersionConstants::TYPE_NAME_DISTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDistance', VersionConstants::TYPE_CLASS_DISTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDocumentManifest()
    {
        $this->assertEquals('DocumentManifest', VersionConstants::TYPE_NAME_DOCUMENT_MANIFEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDocumentManifest', VersionConstants::TYPE_CLASS_DOCUMENT_MANIFEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentManifest_FHIRDocumentManifestContent()
    {
        $this->assertEquals('DocumentManifest.Content', VersionConstants::TYPE_NAME_DOCUMENT_MANIFEST_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent', VersionConstants::TYPE_CLASS_DOCUMENT_MANIFEST_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentManifest_FHIRDocumentManifestRelated()
    {
        $this->assertEquals('DocumentManifest.Related', VersionConstants::TYPE_NAME_DOCUMENT_MANIFEST_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated', VersionConstants::TYPE_CLASS_DOCUMENT_MANIFEST_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDocumentMode()
    {
        $this->assertEquals('DocumentMode', VersionConstants::TYPE_NAME_DOCUMENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDocumentMode', VersionConstants::TYPE_CLASS_DOCUMENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDocumentModeList()
    {
        $this->assertEquals('DocumentMode-list', VersionConstants::TYPE_NAME_DOCUMENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDocumentModeList', VersionConstants::TYPE_CLASS_DOCUMENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRDocumentReference()
    {
        $this->assertEquals('DocumentReference', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRDocumentReference', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContent()
    {
        $this->assertEquals('DocumentReference.Content', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContext()
    {
        $this->assertEquals('DocumentReference.Context', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceRelated()
    {
        $this->assertEquals('DocumentReference.Related', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelated', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceRelatesTo()
    {
        $this->assertEquals('DocumentReference.RelatesTo', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDocumentReferenceStatus()
    {
        $this->assertEquals('DocumentReferenceStatus', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDocumentReferenceStatus', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDocumentReferenceStatusList()
    {
        $this->assertEquals('DocumentReferenceStatus-list', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDocumentReferenceStatusList', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDocumentRelationshipType()
    {
        $this->assertEquals('DocumentRelationshipType', VersionConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDocumentRelationshipType', VersionConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRDocumentRelationshipTypeList()
    {
        $this->assertEquals('DocumentRelationshipType-list', VersionConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRDocumentRelationshipTypeList', VersionConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource()
    {
        $this->assertEquals('DomainResource', VersionConstants::TYPE_NAME_DOMAIN_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource', VersionConstants::TYPE_CLASS_DOMAIN_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRDosage()
    {
        $this->assertEquals('Dosage', VersionConstants::TYPE_NAME_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRDosage', VersionConstants::TYPE_CLASS_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQuantity_FHIRDuration()
    {
        $this->assertEquals('Duration', VersionConstants::TYPE_NAME_DURATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRDuration', VersionConstants::TYPE_CLASS_DURATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement()
    {
        $this->assertEquals('Element', VersionConstants::TYPE_NAME_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement', VersionConstants::TYPE_CLASS_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRElementDefinition()
    {
        $this->assertEquals('ElementDefinition', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionBase()
    {
        $this->assertEquals('ElementDefinition.Base', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_BASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_BASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionBinding()
    {
        $this->assertEquals('ElementDefinition.Binding', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionConstraint()
    {
        $this->assertEquals('ElementDefinition.Constraint', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_CONSTRAINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_CONSTRAINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionDiscriminator()
    {
        $this->assertEquals('ElementDefinition.Discriminator', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_DISCRIMINATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionDiscriminator', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_DISCRIMINATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionExample()
    {
        $this->assertEquals('ElementDefinition.Example', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionExample', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_EXAMPLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionMapping()
    {
        $this->assertEquals('ElementDefinition.Mapping', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionSlicing()
    {
        $this->assertEquals('ElementDefinition.Slicing', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_SLICING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionType()
    {
        $this->assertEquals('ElementDefinition.Type', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIREligibilityRequest()
    {
        $this->assertEquals('EligibilityRequest', VersionConstants::TYPE_NAME_ELIGIBILITY_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIREligibilityRequest', VersionConstants::TYPE_CLASS_ELIGIBILITY_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIREligibilityResponse()
    {
        $this->assertEquals('EligibilityResponse', VersionConstants::TYPE_NAME_ELIGIBILITY_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIREligibilityResponse', VersionConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREligibilityResponse_FHIREligibilityResponseBenefitBalance()
    {
        $this->assertEquals('EligibilityResponse.BenefitBalance', VersionConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_BENEFIT_BALANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseBenefitBalance', VersionConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_DOT_BENEFIT_BALANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREligibilityResponse_FHIREligibilityResponseError()
    {
        $this->assertEquals('EligibilityResponse.Error', VersionConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_ERROR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseError', VersionConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_DOT_ERROR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREligibilityResponse_FHIREligibilityResponseFinancial()
    {
        $this->assertEquals('EligibilityResponse.Financial', VersionConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_FINANCIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseFinancial', VersionConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_DOT_FINANCIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREligibilityResponse_FHIREligibilityResponseInsurance()
    {
        $this->assertEquals('EligibilityResponse.Insurance', VersionConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREligibilityResponse\FHIREligibilityResponseInsurance', VersionConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIREncounter()
    {
        $this->assertEquals('Encounter', VersionConstants::TYPE_NAME_ENCOUNTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIREncounter', VersionConstants::TYPE_CLASS_ENCOUNTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterClassHistory()
    {
        $this->assertEquals('Encounter.ClassHistory', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_CLASS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_CLASS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterDiagnosis()
    {
        $this->assertEquals('Encounter.Diagnosis', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterHospitalization()
    {
        $this->assertEquals('Encounter.Hospitalization', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_HOSPITALIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterLocation()
    {
        $this->assertEquals('Encounter.Location', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterParticipant()
    {
        $this->assertEquals('Encounter.Participant', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterStatusHistory()
    {
        $this->assertEquals('Encounter.StatusHistory', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_STATUS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_STATUS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIREncounterLocationStatus()
    {
        $this->assertEquals('EncounterLocationStatus', VersionConstants::TYPE_NAME_ENCOUNTER_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREncounterLocationStatus', VersionConstants::TYPE_CLASS_ENCOUNTER_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIREncounterLocationStatusList()
    {
        $this->assertEquals('EncounterLocationStatus-list', VersionConstants::TYPE_NAME_ENCOUNTER_LOCATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREncounterLocationStatusList', VersionConstants::TYPE_CLASS_ENCOUNTER_LOCATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIREncounterStatus()
    {
        $this->assertEquals('EncounterStatus', VersionConstants::TYPE_NAME_ENCOUNTER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREncounterStatus', VersionConstants::TYPE_CLASS_ENCOUNTER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIREncounterStatusList()
    {
        $this->assertEquals('EncounterStatus-list', VersionConstants::TYPE_NAME_ENCOUNTER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREncounterStatusList', VersionConstants::TYPE_CLASS_ENCOUNTER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIREndpoint()
    {
        $this->assertEquals('Endpoint', VersionConstants::TYPE_NAME_ENDPOINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIREndpoint', VersionConstants::TYPE_CLASS_ENDPOINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIREndpointStatus()
    {
        $this->assertEquals('EndpointStatus', VersionConstants::TYPE_NAME_ENDPOINT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREndpointStatus', VersionConstants::TYPE_CLASS_ENDPOINT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIREndpointStatusList()
    {
        $this->assertEquals('EndpointStatus-list', VersionConstants::TYPE_NAME_ENDPOINT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREndpointStatusList', VersionConstants::TYPE_CLASS_ENDPOINT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIREnrollmentRequest()
    {
        $this->assertEquals('EnrollmentRequest', VersionConstants::TYPE_NAME_ENROLLMENT_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest', VersionConstants::TYPE_CLASS_ENROLLMENT_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIREnrollmentResponse()
    {
        $this->assertEquals('EnrollmentResponse', VersionConstants::TYPE_NAME_ENROLLMENT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse', VersionConstants::TYPE_CLASS_ENROLLMENT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIREpisodeOfCare()
    {
        $this->assertEquals('EpisodeOfCare', VersionConstants::TYPE_NAME_EPISODE_OF_CARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREpisodeOfCare_FHIREpisodeOfCareDiagnosis()
    {
        $this->assertEquals('EpisodeOfCare.Diagnosis', VersionConstants::TYPE_NAME_EPISODE_OF_CARE_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIREpisodeOfCare_FHIREpisodeOfCareStatusHistory()
    {
        $this->assertEquals('EpisodeOfCare.StatusHistory', VersionConstants::TYPE_NAME_EPISODE_OF_CARE_DOT_STATUS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE_DOT_STATUS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIREpisodeOfCareStatus()
    {
        $this->assertEquals('EpisodeOfCareStatus', VersionConstants::TYPE_NAME_EPISODE_OF_CARE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREpisodeOfCareStatus', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIREpisodeOfCareStatusList()
    {
        $this->assertEquals('EpisodeOfCareStatus-list', VersionConstants::TYPE_NAME_EPISODE_OF_CARE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREpisodeOfCareStatusList', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIREventCapabilityMode()
    {
        $this->assertEquals('EventCapabilityMode', VersionConstants::TYPE_NAME_EVENT_CAPABILITY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventCapabilityMode', VersionConstants::TYPE_CLASS_EVENT_CAPABILITY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIREventCapabilityModeList()
    {
        $this->assertEquals('EventCapabilityMode-list', VersionConstants::TYPE_NAME_EVENT_CAPABILITY_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREventCapabilityModeList', VersionConstants::TYPE_CLASS_EVENT_CAPABILITY_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIREventStatus()
    {
        $this->assertEquals('EventStatus', VersionConstants::TYPE_NAME_EVENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventStatus', VersionConstants::TYPE_CLASS_EVENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIREventStatusList()
    {
        $this->assertEquals('EventStatus-list', VersionConstants::TYPE_NAME_EVENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREventStatusList', VersionConstants::TYPE_CLASS_EVENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIREventTiming()
    {
        $this->assertEquals('EventTiming', VersionConstants::TYPE_NAME_EVENT_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIREventTiming', VersionConstants::TYPE_CLASS_EVENT_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIREventTimingList()
    {
        $this->assertEquals('EventTiming-list', VersionConstants::TYPE_NAME_EVENT_TIMING_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIREventTimingList', VersionConstants::TYPE_CLASS_EVENT_TIMING_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRExpansionProfile()
    {
        $this->assertEquals('ExpansionProfile', VersionConstants::TYPE_NAME_EXPANSION_PROFILE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExpansionProfile', VersionConstants::TYPE_CLASS_EXPANSION_PROFILE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileDesignation()
    {
        $this->assertEquals('ExpansionProfile.Designation', VersionConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_DESIGNATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation', VersionConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_DESIGNATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileDesignation1()
    {
        $this->assertEquals('ExpansionProfile.Designation1', VersionConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_DESIGNATION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation1', VersionConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_DESIGNATION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileDesignation2()
    {
        $this->assertEquals('ExpansionProfile.Designation2', VersionConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_DESIGNATION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileDesignation2', VersionConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_DESIGNATION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileExclude()
    {
        $this->assertEquals('ExpansionProfile.Exclude', VersionConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_EXCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExclude', VersionConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_EXCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileExcludedSystem()
    {
        $this->assertEquals('ExpansionProfile.ExcludedSystem', VersionConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_EXCLUDED_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileExcludedSystem', VersionConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_EXCLUDED_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileFixedVersion()
    {
        $this->assertEquals('ExpansionProfile.FixedVersion', VersionConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_FIXED_VERSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileFixedVersion', VersionConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_FIXED_VERSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExpansionProfile_FHIRExpansionProfileInclude()
    {
        $this->assertEquals('ExpansionProfile.Include', VersionConstants::TYPE_NAME_EXPANSION_PROFILE_DOT_INCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExpansionProfile\FHIRExpansionProfileInclude', VersionConstants::TYPE_CLASS_EXPANSION_PROFILE_DOT_INCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRExplanationOfBenefit()
    {
        $this->assertEquals('ExplanationOfBenefit', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitAccident()
    {
        $this->assertEquals('ExplanationOfBenefit.Accident', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ACCIDENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ACCIDENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitAddItem()
    {
        $this->assertEquals('ExplanationOfBenefit.AddItem', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ADD_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ADD_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitAdjudication()
    {
        $this->assertEquals('ExplanationOfBenefit.Adjudication', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ADJUDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ADJUDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitBenefitBalance()
    {
        $this->assertEquals('ExplanationOfBenefit.BenefitBalance', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_BENEFIT_BALANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_BENEFIT_BALANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitCareTeam()
    {
        $this->assertEquals('ExplanationOfBenefit.CareTeam', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitDetail()
    {
        $this->assertEquals('ExplanationOfBenefit.Detail', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitDetail1()
    {
        $this->assertEquals('ExplanationOfBenefit.Detail1', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DETAIL_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_DETAIL_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitDiagnosis()
    {
        $this->assertEquals('ExplanationOfBenefit.Diagnosis', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitFinancial()
    {
        $this->assertEquals('ExplanationOfBenefit.Financial', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitInformation()
    {
        $this->assertEquals('ExplanationOfBenefit.Information', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_INFORMATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInformation', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_INFORMATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitInsurance()
    {
        $this->assertEquals('ExplanationOfBenefit.Insurance', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitItem()
    {
        $this->assertEquals('ExplanationOfBenefit.Item', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitPayee()
    {
        $this->assertEquals('ExplanationOfBenefit.Payee', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PAYEE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PAYEE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitPayment()
    {
        $this->assertEquals('ExplanationOfBenefit.Payment', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PAYMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PAYMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitProcedure()
    {
        $this->assertEquals('ExplanationOfBenefit.Procedure', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitProcessNote()
    {
        $this->assertEquals('ExplanationOfBenefit.ProcessNote', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitRelated()
    {
        $this->assertEquals('ExplanationOfBenefit.Related', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitSubDetail()
    {
        $this->assertEquals('ExplanationOfBenefit.SubDetail', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRExplanationOfBenefitStatus()
    {
        $this->assertEquals('ExplanationOfBenefitStatus', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExplanationOfBenefitStatus', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRExplanationOfBenefitStatusList()
    {
        $this->assertEquals('ExplanationOfBenefitStatus-list', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRExplanationOfBenefitStatusList', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRExtension()
    {
        $this->assertEquals('Extension', VersionConstants::TYPE_NAME_EXTENSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension', VersionConstants::TYPE_CLASS_EXTENSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRExtensionContext()
    {
        $this->assertEquals('ExtensionContext', VersionConstants::TYPE_NAME_EXTENSION_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtensionContext', VersionConstants::TYPE_CLASS_EXTENSION_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRExtensionContextList()
    {
        $this->assertEquals('ExtensionContext-list', VersionConstants::TYPE_NAME_EXTENSION_CONTEXT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRExtensionContextList', VersionConstants::TYPE_CLASS_EXTENSION_CONTEXT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRFamilyHistoryStatus()
    {
        $this->assertEquals('FamilyHistoryStatus', VersionConstants::TYPE_NAME_FAMILY_HISTORY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFamilyHistoryStatus', VersionConstants::TYPE_CLASS_FAMILY_HISTORY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRFamilyHistoryStatusList()
    {
        $this->assertEquals('FamilyHistoryStatus-list', VersionConstants::TYPE_NAME_FAMILY_HISTORY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRFamilyHistoryStatusList', VersionConstants::TYPE_CLASS_FAMILY_HISTORY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRFamilyMemberHistory()
    {
        $this->assertEquals('FamilyMemberHistory', VersionConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory', VersionConstants::TYPE_CLASS_FAMILY_MEMBER_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRFamilyMemberHistory_FHIRFamilyMemberHistoryCondition()
    {
        $this->assertEquals('FamilyMemberHistory.Condition', VersionConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition', VersionConstants::TYPE_CLASS_FAMILY_MEMBER_HISTORY_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRFHIRAllTypes()
    {
        $this->assertEquals('FHIRAllTypes', VersionConstants::TYPE_NAME_FHIRALL_TYPES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFHIRAllTypes', VersionConstants::TYPE_CLASS_FHIRALL_TYPES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRFHIRAllTypesList()
    {
        $this->assertEquals('FHIRAllTypes-list', VersionConstants::TYPE_NAME_FHIRALL_TYPES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRFHIRAllTypesList', VersionConstants::TYPE_CLASS_FHIRALL_TYPES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRFHIRDefinedType()
    {
        $this->assertEquals('FHIRDefinedType', VersionConstants::TYPE_NAME_FHIRDEFINED_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFHIRDefinedType', VersionConstants::TYPE_CLASS_FHIRDEFINED_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRFHIRDefinedTypeList()
    {
        $this->assertEquals('FHIRDefinedType-list', VersionConstants::TYPE_NAME_FHIRDEFINED_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRFHIRDefinedTypeList', VersionConstants::TYPE_CLASS_FHIRDEFINED_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRFHIRDeviceStatus()
    {
        $this->assertEquals('FHIRDeviceStatus', VersionConstants::TYPE_NAME_FHIRDEVICE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFHIRDeviceStatus', VersionConstants::TYPE_CLASS_FHIRDEVICE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRFHIRDeviceStatusList()
    {
        $this->assertEquals('FHIRDeviceStatus-list', VersionConstants::TYPE_NAME_FHIRDEVICE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRFHIRDeviceStatusList', VersionConstants::TYPE_CLASS_FHIRDEVICE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRFHIRSubstanceStatus()
    {
        $this->assertEquals('FHIRSubstanceStatus', VersionConstants::TYPE_NAME_FHIRSUBSTANCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFHIRSubstanceStatus', VersionConstants::TYPE_CLASS_FHIRSUBSTANCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRFHIRSubstanceStatusList()
    {
        $this->assertEquals('FHIRSubstanceStatus-list', VersionConstants::TYPE_NAME_FHIRSUBSTANCE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRFHIRSubstanceStatusList', VersionConstants::TYPE_CLASS_FHIRSUBSTANCE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRFilterOperator()
    {
        $this->assertEquals('FilterOperator', VersionConstants::TYPE_NAME_FILTER_OPERATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFilterOperator', VersionConstants::TYPE_CLASS_FILTER_OPERATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRFilterOperatorList()
    {
        $this->assertEquals('FilterOperator-list', VersionConstants::TYPE_NAME_FILTER_OPERATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRFilterOperatorList', VersionConstants::TYPE_CLASS_FILTER_OPERATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRFinancialResourceStatusCodes()
    {
        $this->assertEquals('FinancialResourceStatusCodes', VersionConstants::TYPE_NAME_FINANCIAL_RESOURCE_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFinancialResourceStatusCodes', VersionConstants::TYPE_CLASS_FINANCIAL_RESOURCE_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRFinancialResourceStatusCodesList()
    {
        $this->assertEquals('FinancialResourceStatusCodes-list', VersionConstants::TYPE_NAME_FINANCIAL_RESOURCE_STATUS_CODES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesList', VersionConstants::TYPE_CLASS_FINANCIAL_RESOURCE_STATUS_CODES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRFlag()
    {
        $this->assertEquals('Flag', VersionConstants::TYPE_NAME_FLAG);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRFlag', VersionConstants::TYPE_CLASS_FLAG);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRFlagStatus()
    {
        $this->assertEquals('FlagStatus', VersionConstants::TYPE_NAME_FLAG_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRFlagStatus', VersionConstants::TYPE_CLASS_FLAG_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRFlagStatusList()
    {
        $this->assertEquals('FlagStatus-list', VersionConstants::TYPE_NAME_FLAG_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRFlagStatusList', VersionConstants::TYPE_CLASS_FLAG_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRGoal()
    {
        $this->assertEquals('Goal', VersionConstants::TYPE_NAME_GOAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRGoal', VersionConstants::TYPE_CLASS_GOAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRGoal_FHIRGoalTarget()
    {
        $this->assertEquals('Goal.Target', VersionConstants::TYPE_NAME_GOAL_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget', VersionConstants::TYPE_CLASS_GOAL_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRGoalStatus()
    {
        $this->assertEquals('GoalStatus', VersionConstants::TYPE_NAME_GOAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRGoalStatus', VersionConstants::TYPE_CLASS_GOAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRGoalStatusList()
    {
        $this->assertEquals('GoalStatus-list', VersionConstants::TYPE_NAME_GOAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRGoalStatusList', VersionConstants::TYPE_CLASS_GOAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRGraphCompartmentRule()
    {
        $this->assertEquals('GraphCompartmentRule', VersionConstants::TYPE_NAME_GRAPH_COMPARTMENT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRGraphCompartmentRule', VersionConstants::TYPE_CLASS_GRAPH_COMPARTMENT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRGraphCompartmentRuleList()
    {
        $this->assertEquals('GraphCompartmentRule-list', VersionConstants::TYPE_NAME_GRAPH_COMPARTMENT_RULE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRGraphCompartmentRuleList', VersionConstants::TYPE_CLASS_GRAPH_COMPARTMENT_RULE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRGraphDefinition()
    {
        $this->assertEquals('GraphDefinition', VersionConstants::TYPE_NAME_GRAPH_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRGraphDefinition', VersionConstants::TYPE_CLASS_GRAPH_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRGraphDefinition_FHIRGraphDefinitionCompartment()
    {
        $this->assertEquals('GraphDefinition.Compartment', VersionConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_COMPARTMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment', VersionConstants::TYPE_CLASS_GRAPH_DEFINITION_DOT_COMPARTMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRGraphDefinition_FHIRGraphDefinitionLink()
    {
        $this->assertEquals('GraphDefinition.Link', VersionConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink', VersionConstants::TYPE_CLASS_GRAPH_DEFINITION_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRGraphDefinition_FHIRGraphDefinitionTarget()
    {
        $this->assertEquals('GraphDefinition.Target', VersionConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget', VersionConstants::TYPE_CLASS_GRAPH_DEFINITION_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRGroup()
    {
        $this->assertEquals('Group', VersionConstants::TYPE_NAME_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRGroup', VersionConstants::TYPE_CLASS_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupCharacteristic()
    {
        $this->assertEquals('Group.Characteristic', VersionConstants::TYPE_NAME_GROUP_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic', VersionConstants::TYPE_CLASS_GROUP_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupMember()
    {
        $this->assertEquals('Group.Member', VersionConstants::TYPE_NAME_GROUP_DOT_MEMBER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember', VersionConstants::TYPE_CLASS_GROUP_DOT_MEMBER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRGroupType()
    {
        $this->assertEquals('GroupType', VersionConstants::TYPE_NAME_GROUP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRGroupType', VersionConstants::TYPE_CLASS_GROUP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRGroupTypeList()
    {
        $this->assertEquals('GroupType-list', VersionConstants::TYPE_NAME_GROUP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRGroupTypeList', VersionConstants::TYPE_CLASS_GROUP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRGuidanceResponse()
    {
        $this->assertEquals('GuidanceResponse', VersionConstants::TYPE_NAME_GUIDANCE_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse', VersionConstants::TYPE_CLASS_GUIDANCE_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRGuidanceResponseStatus()
    {
        $this->assertEquals('GuidanceResponseStatus', VersionConstants::TYPE_NAME_GUIDANCE_RESPONSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRGuidanceResponseStatus', VersionConstants::TYPE_CLASS_GUIDANCE_RESPONSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRGuidanceResponseStatusList()
    {
        $this->assertEquals('GuidanceResponseStatus-list', VersionConstants::TYPE_NAME_GUIDANCE_RESPONSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRGuidanceResponseStatusList', VersionConstants::TYPE_CLASS_GUIDANCE_RESPONSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRGuideDependencyType()
    {
        $this->assertEquals('GuideDependencyType', VersionConstants::TYPE_NAME_GUIDE_DEPENDENCY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRGuideDependencyType', VersionConstants::TYPE_CLASS_GUIDE_DEPENDENCY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRGuideDependencyTypeList()
    {
        $this->assertEquals('GuideDependencyType-list', VersionConstants::TYPE_NAME_GUIDE_DEPENDENCY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRGuideDependencyTypeList', VersionConstants::TYPE_CLASS_GUIDE_DEPENDENCY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRGuidePageKind()
    {
        $this->assertEquals('GuidePageKind', VersionConstants::TYPE_NAME_GUIDE_PAGE_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRGuidePageKind', VersionConstants::TYPE_CLASS_GUIDE_PAGE_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRGuidePageKindList()
    {
        $this->assertEquals('GuidePageKind-list', VersionConstants::TYPE_NAME_GUIDE_PAGE_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRGuidePageKindList', VersionConstants::TYPE_CLASS_GUIDE_PAGE_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRHealthcareService()
    {
        $this->assertEquals('HealthcareService', VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService', VersionConstants::TYPE_CLASS_HEALTHCARE_SERVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceAvailableTime()
    {
        $this->assertEquals('HealthcareService.AvailableTime', VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime', VersionConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceNotAvailable()
    {
        $this->assertEquals('HealthcareService.NotAvailable', VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_NOT_AVAILABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable', VersionConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_NOT_AVAILABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRHTTPVerb()
    {
        $this->assertEquals('HTTPVerb', VersionConstants::TYPE_NAME_HTTPVERB);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHTTPVerb', VersionConstants::TYPE_CLASS_HTTPVERB);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRHTTPVerbList()
    {
        $this->assertEquals('HTTPVerb-list', VersionConstants::TYPE_NAME_HTTPVERB_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRHTTPVerbList', VersionConstants::TYPE_CLASS_HTTPVERB_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRHumanName()
    {
        $this->assertEquals('HumanName', VersionConstants::TYPE_NAME_HUMAN_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRHumanName', VersionConstants::TYPE_CLASS_HUMAN_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRId()
    {
        $this->assertEquals('id', VersionConstants::TYPE_NAME_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId', VersionConstants::TYPE_CLASS_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRIdPrimitive()
    {
        $this->assertEquals('id-primitive', VersionConstants::TYPE_NAME_ID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive', VersionConstants::TYPE_CLASS_ID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRIdentifier()
    {
        $this->assertEquals('Identifier', VersionConstants::TYPE_NAME_IDENTIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifier', VersionConstants::TYPE_CLASS_IDENTIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRIdentifierUse()
    {
        $this->assertEquals('IdentifierUse', VersionConstants::TYPE_NAME_IDENTIFIER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentifierUse', VersionConstants::TYPE_CLASS_IDENTIFIER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRIdentifierUseList()
    {
        $this->assertEquals('IdentifierUse-list', VersionConstants::TYPE_NAME_IDENTIFIER_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRIdentifierUseList', VersionConstants::TYPE_CLASS_IDENTIFIER_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRIdentityAssuranceLevel()
    {
        $this->assertEquals('IdentityAssuranceLevel', VersionConstants::TYPE_NAME_IDENTITY_ASSURANCE_LEVEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIdentityAssuranceLevel', VersionConstants::TYPE_CLASS_IDENTITY_ASSURANCE_LEVEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRIdentityAssuranceLevelList()
    {
        $this->assertEquals('IdentityAssuranceLevel-list', VersionConstants::TYPE_NAME_IDENTITY_ASSURANCE_LEVEL_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRIdentityAssuranceLevelList', VersionConstants::TYPE_CLASS_IDENTITY_ASSURANCE_LEVEL_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRImagingManifest()
    {
        $this->assertEquals('ImagingManifest', VersionConstants::TYPE_NAME_IMAGING_MANIFEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRImagingManifest', VersionConstants::TYPE_CLASS_IMAGING_MANIFEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImagingManifest_FHIRImagingManifestInstance()
    {
        $this->assertEquals('ImagingManifest.Instance', VersionConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestInstance', VersionConstants::TYPE_CLASS_IMAGING_MANIFEST_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImagingManifest_FHIRImagingManifestSeries()
    {
        $this->assertEquals('ImagingManifest.Series', VersionConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_SERIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestSeries', VersionConstants::TYPE_CLASS_IMAGING_MANIFEST_DOT_SERIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImagingManifest_FHIRImagingManifestStudy()
    {
        $this->assertEquals('ImagingManifest.Study', VersionConstants::TYPE_NAME_IMAGING_MANIFEST_DOT_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImagingManifest\FHIRImagingManifestStudy', VersionConstants::TYPE_CLASS_IMAGING_MANIFEST_DOT_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRImagingStudy()
    {
        $this->assertEquals('ImagingStudy', VersionConstants::TYPE_NAME_IMAGING_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRImagingStudy', VersionConstants::TYPE_CLASS_IMAGING_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudyInstance()
    {
        $this->assertEquals('ImagingStudy.Instance', VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance', VersionConstants::TYPE_CLASS_IMAGING_STUDY_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudySeries()
    {
        $this->assertEquals('ImagingStudy.Series', VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_SERIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries', VersionConstants::TYPE_CLASS_IMAGING_STUDY_DOT_SERIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRImmunization()
    {
        $this->assertEquals('Immunization', VersionConstants::TYPE_NAME_IMMUNIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRImmunization', VersionConstants::TYPE_CLASS_IMMUNIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationExplanation()
    {
        $this->assertEquals('Immunization.Explanation', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_EXPLANATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_EXPLANATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationPractitioner()
    {
        $this->assertEquals('Immunization.Practitioner', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_PRACTITIONER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPractitioner', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_PRACTITIONER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationReaction()
    {
        $this->assertEquals('Immunization.Reaction', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationVaccinationProtocol()
    {
        $this->assertEquals('Immunization.VaccinationProtocol', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRImmunizationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationDateCriterion()
    {
        $this->assertEquals('ImmunizationRecommendation.DateCriterion', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationProtocol()
    {
        $this->assertEquals('ImmunizationRecommendation.Protocol', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation.Recommendation', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRImmunizationStatusCodes()
    {
        $this->assertEquals('ImmunizationStatusCodes', VersionConstants::TYPE_NAME_IMMUNIZATION_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRImmunizationStatusCodes', VersionConstants::TYPE_CLASS_IMMUNIZATION_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRImmunizationStatusCodesList()
    {
        $this->assertEquals('ImmunizationStatusCodes-list', VersionConstants::TYPE_NAME_IMMUNIZATION_STATUS_CODES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRImmunizationStatusCodesList', VersionConstants::TYPE_CLASS_IMMUNIZATION_STATUS_CODES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRImplementationGuide()
    {
        $this->assertEquals('ImplementationGuide', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRImplementationGuide', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideDependency()
    {
        $this->assertEquals('ImplementationGuide.Dependency', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEPENDENCY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_DEPENDENCY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideGlobal()
    {
        $this->assertEquals('ImplementationGuide.Global', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_GLOBAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_GLOBAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuidePackage()
    {
        $this->assertEquals('ImplementationGuide.Package', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PACKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_PACKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuidePage()
    {
        $this->assertEquals('ImplementationGuide.Page', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_PAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideResource()
    {
        $this->assertEquals('ImplementationGuide.Resource', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRInstanceAvailability()
    {
        $this->assertEquals('InstanceAvailability', VersionConstants::TYPE_NAME_INSTANCE_AVAILABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstanceAvailability', VersionConstants::TYPE_CLASS_INSTANCE_AVAILABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRInstanceAvailabilityList()
    {
        $this->assertEquals('InstanceAvailability-list', VersionConstants::TYPE_NAME_INSTANCE_AVAILABILITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRInstanceAvailabilityList', VersionConstants::TYPE_CLASS_INSTANCE_AVAILABILITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRInstant()
    {
        $this->assertEquals('instant', VersionConstants::TYPE_NAME_INSTANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInstant', VersionConstants::TYPE_CLASS_INSTANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRInstantPrimitive()
    {
        $this->assertEquals('instant-primitive', VersionConstants::TYPE_NAME_INSTANT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRInstantPrimitive', VersionConstants::TYPE_CLASS_INSTANT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRInteger()
    {
        $this->assertEquals('integer', VersionConstants::TYPE_NAME_INTEGER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRInteger', VersionConstants::TYPE_CLASS_INTEGER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRIntegerPrimitive()
    {
        $this->assertEquals('integer-primitive', VersionConstants::TYPE_NAME_INTEGER_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIntegerPrimitive', VersionConstants::TYPE_CLASS_INTEGER_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRIssueSeverity()
    {
        $this->assertEquals('IssueSeverity', VersionConstants::TYPE_NAME_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIssueSeverity', VersionConstants::TYPE_CLASS_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRIssueSeverityList()
    {
        $this->assertEquals('IssueSeverity-list', VersionConstants::TYPE_NAME_ISSUE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRIssueSeverityList', VersionConstants::TYPE_CLASS_ISSUE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRIssueType()
    {
        $this->assertEquals('IssueType', VersionConstants::TYPE_NAME_ISSUE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRIssueType', VersionConstants::TYPE_CLASS_ISSUE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRIssueTypeList()
    {
        $this->assertEquals('IssueType-list', VersionConstants::TYPE_NAME_ISSUE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRIssueTypeList', VersionConstants::TYPE_CLASS_ISSUE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRLibrary()
    {
        $this->assertEquals('Library', VersionConstants::TYPE_NAME_LIBRARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRLibrary', VersionConstants::TYPE_CLASS_LIBRARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRLinkage()
    {
        $this->assertEquals('Linkage', VersionConstants::TYPE_NAME_LINKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRLinkage', VersionConstants::TYPE_CLASS_LINKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRLinkage_FHIRLinkageItem()
    {
        $this->assertEquals('Linkage.Item', VersionConstants::TYPE_NAME_LINKAGE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRLinkage\FHIRLinkageItem', VersionConstants::TYPE_CLASS_LINKAGE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRLinkageType()
    {
        $this->assertEquals('LinkageType', VersionConstants::TYPE_NAME_LINKAGE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRLinkageType', VersionConstants::TYPE_CLASS_LINKAGE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRLinkageTypeList()
    {
        $this->assertEquals('LinkageType-list', VersionConstants::TYPE_NAME_LINKAGE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRLinkageTypeList', VersionConstants::TYPE_CLASS_LINKAGE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRLinkType()
    {
        $this->assertEquals('LinkType', VersionConstants::TYPE_NAME_LINK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRLinkType', VersionConstants::TYPE_CLASS_LINK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRLinkTypeList()
    {
        $this->assertEquals('LinkType-list', VersionConstants::TYPE_NAME_LINK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRLinkTypeList', VersionConstants::TYPE_CLASS_LINK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRList()
    {
        $this->assertEquals('List', VersionConstants::TYPE_NAME_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRList', VersionConstants::TYPE_CLASS_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRList_FHIRListEntry()
    {
        $this->assertEquals('List.Entry', VersionConstants::TYPE_NAME_LIST_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry', VersionConstants::TYPE_CLASS_LIST_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRListMode()
    {
        $this->assertEquals('ListMode', VersionConstants::TYPE_NAME_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRListMode', VersionConstants::TYPE_CLASS_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRListModeList()
    {
        $this->assertEquals('ListMode-list', VersionConstants::TYPE_NAME_LIST_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRListModeList', VersionConstants::TYPE_CLASS_LIST_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRListStatus()
    {
        $this->assertEquals('ListStatus', VersionConstants::TYPE_NAME_LIST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRListStatus', VersionConstants::TYPE_CLASS_LIST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRListStatusList()
    {
        $this->assertEquals('ListStatus-list', VersionConstants::TYPE_NAME_LIST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRListStatusList', VersionConstants::TYPE_CLASS_LIST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRLocation()
    {
        $this->assertEquals('Location', VersionConstants::TYPE_NAME_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRLocation', VersionConstants::TYPE_CLASS_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRLocation_FHIRLocationPosition()
    {
        $this->assertEquals('Location.Position', VersionConstants::TYPE_NAME_LOCATION_DOT_POSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition', VersionConstants::TYPE_CLASS_LOCATION_DOT_POSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRLocationMode()
    {
        $this->assertEquals('LocationMode', VersionConstants::TYPE_NAME_LOCATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRLocationMode', VersionConstants::TYPE_CLASS_LOCATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRLocationModeList()
    {
        $this->assertEquals('LocationMode-list', VersionConstants::TYPE_NAME_LOCATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRLocationModeList', VersionConstants::TYPE_CLASS_LOCATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRLocationStatus()
    {
        $this->assertEquals('LocationStatus', VersionConstants::TYPE_NAME_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRLocationStatus', VersionConstants::TYPE_CLASS_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRLocationStatusList()
    {
        $this->assertEquals('LocationStatus-list', VersionConstants::TYPE_NAME_LOCATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRLocationStatusList', VersionConstants::TYPE_CLASS_LOCATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMarkdown()
    {
        $this->assertEquals('markdown', VersionConstants::TYPE_NAME_MARKDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMarkdown', VersionConstants::TYPE_CLASS_MARKDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRMarkdownPrimitive()
    {
        $this->assertEquals('markdown-primitive', VersionConstants::TYPE_NAME_MARKDOWN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRMarkdownPrimitive', VersionConstants::TYPE_CLASS_MARKDOWN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMeasmntPrinciple()
    {
        $this->assertEquals('MeasmntPrinciple', VersionConstants::TYPE_NAME_MEASMNT_PRINCIPLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeasmntPrinciple', VersionConstants::TYPE_CLASS_MEASMNT_PRINCIPLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMeasmntPrincipleList()
    {
        $this->assertEquals('MeasmntPrinciple-list', VersionConstants::TYPE_NAME_MEASMNT_PRINCIPLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMeasmntPrincipleList', VersionConstants::TYPE_CLASS_MEASMNT_PRINCIPLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMeasure()
    {
        $this->assertEquals('Measure', VersionConstants::TYPE_NAME_MEASURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMeasure', VersionConstants::TYPE_CLASS_MEASURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureGroup()
    {
        $this->assertEquals('Measure.Group', VersionConstants::TYPE_NAME_MEASURE_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup', VersionConstants::TYPE_CLASS_MEASURE_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasurePopulation()
    {
        $this->assertEquals('Measure.Population', VersionConstants::TYPE_NAME_MEASURE_DOT_POPULATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasurePopulation', VersionConstants::TYPE_CLASS_MEASURE_DOT_POPULATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureStratifier()
    {
        $this->assertEquals('Measure.Stratifier', VersionConstants::TYPE_NAME_MEASURE_DOT_STRATIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureStratifier', VersionConstants::TYPE_CLASS_MEASURE_DOT_STRATIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureSupplementalData()
    {
        $this->assertEquals('Measure.SupplementalData', VersionConstants::TYPE_NAME_MEASURE_DOT_SUPPLEMENTAL_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData', VersionConstants::TYPE_CLASS_MEASURE_DOT_SUPPLEMENTAL_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMeasureReport()
    {
        $this->assertEquals('MeasureReport', VersionConstants::TYPE_NAME_MEASURE_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMeasureReport', VersionConstants::TYPE_CLASS_MEASURE_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportGroup()
    {
        $this->assertEquals('MeasureReport.Group', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportPopulation()
    {
        $this->assertEquals('MeasureReport.Population', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_POPULATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_POPULATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportPopulation1()
    {
        $this->assertEquals('MeasureReport.Population1', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_POPULATION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_POPULATION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportStratifier()
    {
        $this->assertEquals('MeasureReport.Stratifier', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_STRATIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_STRATIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportStratum()
    {
        $this->assertEquals('MeasureReport.Stratum', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_STRATUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_STRATUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMeasureReportStatus()
    {
        $this->assertEquals('MeasureReportStatus', VersionConstants::TYPE_NAME_MEASURE_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeasureReportStatus', VersionConstants::TYPE_CLASS_MEASURE_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMeasureReportStatusList()
    {
        $this->assertEquals('MeasureReportStatus-list', VersionConstants::TYPE_NAME_MEASURE_REPORT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMeasureReportStatusList', VersionConstants::TYPE_CLASS_MEASURE_REPORT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMeasureReportType()
    {
        $this->assertEquals('MeasureReportType', VersionConstants::TYPE_NAME_MEASURE_REPORT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeasureReportType', VersionConstants::TYPE_CLASS_MEASURE_REPORT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMeasureReportTypeList()
    {
        $this->assertEquals('MeasureReportType-list', VersionConstants::TYPE_NAME_MEASURE_REPORT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMeasureReportTypeList', VersionConstants::TYPE_CLASS_MEASURE_REPORT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMedia()
    {
        $this->assertEquals('Media', VersionConstants::TYPE_NAME_MEDIA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedia', VersionConstants::TYPE_CLASS_MEDIA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMedication()
    {
        $this->assertEquals('Medication', VersionConstants::TYPE_NAME_MEDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedication', VersionConstants::TYPE_CLASS_MEDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationBatch()
    {
        $this->assertEquals('Medication.Batch', VersionConstants::TYPE_NAME_MEDICATION_DOT_BATCH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch', VersionConstants::TYPE_CLASS_MEDICATION_DOT_BATCH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationContent()
    {
        $this->assertEquals('Medication.Content', VersionConstants::TYPE_NAME_MEDICATION_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent', VersionConstants::TYPE_CLASS_MEDICATION_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationIngredient()
    {
        $this->assertEquals('Medication.Ingredient', VersionConstants::TYPE_NAME_MEDICATION_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient', VersionConstants::TYPE_CLASS_MEDICATION_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationPackage()
    {
        $this->assertEquals('Medication.Package', VersionConstants::TYPE_NAME_MEDICATION_DOT_PACKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage', VersionConstants::TYPE_CLASS_MEDICATION_DOT_PACKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMedicationAdministration()
    {
        $this->assertEquals('MedicationAdministration', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationAdministration_FHIRMedicationAdministrationDosage()
    {
        $this->assertEquals('MedicationAdministration.Dosage', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationAdministration_FHIRMedicationAdministrationPerformer()
    {
        $this->assertEquals('MedicationAdministration.Performer', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMedicationAdministrationStatus()
    {
        $this->assertEquals('MedicationAdministrationStatus', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationAdministrationStatus', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMedicationAdministrationStatusList()
    {
        $this->assertEquals('MedicationAdministrationStatus-list', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMedicationAdministrationStatusList', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMedicationDispense()
    {
        $this->assertEquals('MedicationDispense', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedicationDispense', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispensePerformer()
    {
        $this->assertEquals('MedicationDispense.Performer', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseSubstitution()
    {
        $this->assertEquals('MedicationDispense.Substitution', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMedicationDispenseStatus()
    {
        $this->assertEquals('MedicationDispenseStatus', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationDispenseStatus', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMedicationDispenseStatusList()
    {
        $this->assertEquals('MedicationDispenseStatus-list', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMedicationDispenseStatusList', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMedicationRequest()
    {
        $this->assertEquals('MedicationRequest', VersionConstants::TYPE_NAME_MEDICATION_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedicationRequest', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationRequest_FHIRMedicationRequestDispenseRequest()
    {
        $this->assertEquals('MedicationRequest.DispenseRequest', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationRequest_FHIRMedicationRequestRequester()
    {
        $this->assertEquals('MedicationRequest.Requester', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestRequester', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationRequest_FHIRMedicationRequestSubstitution()
    {
        $this->assertEquals('MedicationRequest.Substitution', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMedicationRequestIntent()
    {
        $this->assertEquals('MedicationRequestIntent', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationRequestIntent', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMedicationRequestIntentList()
    {
        $this->assertEquals('MedicationRequestIntent-list', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_INTENT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMedicationRequestIntentList', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_INTENT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMedicationRequestPriority()
    {
        $this->assertEquals('MedicationRequestPriority', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationRequestPriority', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMedicationRequestPriorityList()
    {
        $this->assertEquals('MedicationRequestPriority-list', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_PRIORITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMedicationRequestPriorityList', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_PRIORITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMedicationRequestStatus()
    {
        $this->assertEquals('MedicationRequestStatus', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationRequestStatus', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMedicationRequestStatusList()
    {
        $this->assertEquals('MedicationRequestStatus-list', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMedicationRequestStatusList', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMedicationStatement()
    {
        $this->assertEquals('MedicationStatement', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMedicationStatement', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMedicationStatementStatus()
    {
        $this->assertEquals('MedicationStatementStatus', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationStatementStatus', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMedicationStatementStatusList()
    {
        $this->assertEquals('MedicationStatementStatus-list', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMedicationStatementStatusList', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMedicationStatementTaken()
    {
        $this->assertEquals('MedicationStatementTaken', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT_TAKEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationStatementTaken', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT_TAKEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMedicationStatementTakenList()
    {
        $this->assertEquals('MedicationStatementTaken-list', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT_TAKEN_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMedicationStatementTakenList', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT_TAKEN_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMedicationStatus()
    {
        $this->assertEquals('MedicationStatus', VersionConstants::TYPE_NAME_MEDICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMedicationStatus', VersionConstants::TYPE_CLASS_MEDICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMedicationStatusList()
    {
        $this->assertEquals('MedicationStatus-list', VersionConstants::TYPE_NAME_MEDICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMedicationStatusList', VersionConstants::TYPE_CLASS_MEDICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMessageDefinition()
    {
        $this->assertEquals('MessageDefinition', VersionConstants::TYPE_NAME_MESSAGE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMessageDefinition', VersionConstants::TYPE_CLASS_MESSAGE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMessageDefinition_FHIRMessageDefinitionAllowedResponse()
    {
        $this->assertEquals('MessageDefinition.AllowedResponse', VersionConstants::TYPE_NAME_MESSAGE_DEFINITION_DOT_ALLOWED_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse', VersionConstants::TYPE_CLASS_MESSAGE_DEFINITION_DOT_ALLOWED_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMessageDefinition_FHIRMessageDefinitionFocus()
    {
        $this->assertEquals('MessageDefinition.Focus', VersionConstants::TYPE_NAME_MESSAGE_DEFINITION_DOT_FOCUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionFocus', VersionConstants::TYPE_CLASS_MESSAGE_DEFINITION_DOT_FOCUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRMessageHeader()
    {
        $this->assertEquals('MessageHeader', VersionConstants::TYPE_NAME_MESSAGE_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRMessageHeader', VersionConstants::TYPE_CLASS_MESSAGE_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderDestination()
    {
        $this->assertEquals('MessageHeader.Destination', VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_DESTINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination', VersionConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_DESTINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderResponse()
    {
        $this->assertEquals('MessageHeader.Response', VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse', VersionConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderSource()
    {
        $this->assertEquals('MessageHeader.Source', VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource', VersionConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMessageSignificanceCategory()
    {
        $this->assertEquals('MessageSignificanceCategory', VersionConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMessageSignificanceCategory', VersionConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRMessageSignificanceCategoryList()
    {
        $this->assertEquals('MessageSignificanceCategory-list', VersionConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRMessageSignificanceCategoryList', VersionConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRMeta()
    {
        $this->assertEquals('Meta', VersionConstants::TYPE_NAME_META);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta', VersionConstants::TYPE_CLASS_META);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQuantity_FHIRMoney()
    {
        $this->assertEquals('Money', VersionConstants::TYPE_NAME_MONEY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity\FHIRMoney', VersionConstants::TYPE_CLASS_MONEY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRNameUse()
    {
        $this->assertEquals('NameUse', VersionConstants::TYPE_NAME_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNameUse', VersionConstants::TYPE_CLASS_NAME_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRNameUseList()
    {
        $this->assertEquals('NameUse-list', VersionConstants::TYPE_NAME_NAME_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRNameUseList', VersionConstants::TYPE_CLASS_NAME_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRNamingSystem()
    {
        $this->assertEquals('NamingSystem', VersionConstants::TYPE_NAME_NAMING_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNamingSystem', VersionConstants::TYPE_CLASS_NAMING_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRNamingSystem_FHIRNamingSystemUniqueId()
    {
        $this->assertEquals('NamingSystem.UniqueId', VersionConstants::TYPE_NAME_NAMING_SYSTEM_DOT_UNIQUE_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_DOT_UNIQUE_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRNamingSystemIdentifierType()
    {
        $this->assertEquals('NamingSystemIdentifierType', VersionConstants::TYPE_NAME_NAMING_SYSTEM_IDENTIFIER_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNamingSystemIdentifierType', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_IDENTIFIER_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRNamingSystemIdentifierTypeList()
    {
        $this->assertEquals('NamingSystemIdentifierType-list', VersionConstants::TYPE_NAME_NAMING_SYSTEM_IDENTIFIER_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRNamingSystemIdentifierTypeList', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_IDENTIFIER_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRNamingSystemType()
    {
        $this->assertEquals('NamingSystemType', VersionConstants::TYPE_NAME_NAMING_SYSTEM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNamingSystemType', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRNamingSystemTypeList()
    {
        $this->assertEquals('NamingSystemType-list', VersionConstants::TYPE_NAME_NAMING_SYSTEM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRNamingSystemTypeList', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRNarrative()
    {
        $this->assertEquals('Narrative', VersionConstants::TYPE_NAME_NARRATIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative', VersionConstants::TYPE_CLASS_NARRATIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRNarrativeStatus()
    {
        $this->assertEquals('NarrativeStatus', VersionConstants::TYPE_NAME_NARRATIVE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrativeStatus', VersionConstants::TYPE_CLASS_NARRATIVE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRNarrativeStatusList()
    {
        $this->assertEquals('NarrativeStatus-list', VersionConstants::TYPE_NAME_NARRATIVE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRNarrativeStatusList', VersionConstants::TYPE_CLASS_NARRATIVE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRNoteType()
    {
        $this->assertEquals('NoteType', VersionConstants::TYPE_NAME_NOTE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNoteType', VersionConstants::TYPE_CLASS_NOTE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRNoteTypeList()
    {
        $this->assertEquals('NoteType-list', VersionConstants::TYPE_NAME_NOTE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRNoteTypeList', VersionConstants::TYPE_CLASS_NOTE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRNutritionOrder()
    {
        $this->assertEquals('NutritionOrder', VersionConstants::TYPE_NAME_NUTRITION_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder', VersionConstants::TYPE_CLASS_NUTRITION_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderAdministration()
    {
        $this->assertEquals('NutritionOrder.Administration', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderEnteralFormula()
    {
        $this->assertEquals('NutritionOrder.EnteralFormula', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ENTERAL_FORMULA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderNutrient()
    {
        $this->assertEquals('NutritionOrder.Nutrient', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_NUTRIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_NUTRIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderOralDiet()
    {
        $this->assertEquals('NutritionOrder.OralDiet', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ORAL_DIET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderSupplement()
    {
        $this->assertEquals('NutritionOrder.Supplement', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_SUPPLEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_SUPPLEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderTexture()
    {
        $this->assertEquals('NutritionOrder.Texture', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_TEXTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_TEXTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRNutritionOrderStatus()
    {
        $this->assertEquals('NutritionOrderStatus', VersionConstants::TYPE_NAME_NUTRITION_ORDER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNutritionOrderStatus', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRNutritionOrderStatusList()
    {
        $this->assertEquals('NutritionOrderStatus-list', VersionConstants::TYPE_NAME_NUTRITION_ORDER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRNutritionOrderStatusList', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRObservation()
    {
        $this->assertEquals('Observation', VersionConstants::TYPE_NAME_OBSERVATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRObservation', VersionConstants::TYPE_CLASS_OBSERVATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationComponent()
    {
        $this->assertEquals('Observation.Component', VersionConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent', VersionConstants::TYPE_CLASS_OBSERVATION_DOT_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationReferenceRange()
    {
        $this->assertEquals('Observation.ReferenceRange', VersionConstants::TYPE_NAME_OBSERVATION_DOT_REFERENCE_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange', VersionConstants::TYPE_CLASS_OBSERVATION_DOT_REFERENCE_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationRelated()
    {
        $this->assertEquals('Observation.Related', VersionConstants::TYPE_NAME_OBSERVATION_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated', VersionConstants::TYPE_CLASS_OBSERVATION_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRObservationRelationshipType()
    {
        $this->assertEquals('ObservationRelationshipType', VersionConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRObservationRelationshipType', VersionConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRObservationRelationshipTypeList()
    {
        $this->assertEquals('ObservationRelationshipType-list', VersionConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRObservationRelationshipTypeList', VersionConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRObservationStatus()
    {
        $this->assertEquals('ObservationStatus', VersionConstants::TYPE_NAME_OBSERVATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRObservationStatus', VersionConstants::TYPE_CLASS_OBSERVATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRObservationStatusList()
    {
        $this->assertEquals('ObservationStatus-list', VersionConstants::TYPE_NAME_OBSERVATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRObservationStatusList', VersionConstants::TYPE_CLASS_OBSERVATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIROid()
    {
        $this->assertEquals('oid', VersionConstants::TYPE_NAME_OID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROid', VersionConstants::TYPE_CLASS_OID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIROidPrimitive()
    {
        $this->assertEquals('oid-primitive', VersionConstants::TYPE_NAME_OID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIROidPrimitive', VersionConstants::TYPE_CLASS_OID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIROperationDefinition()
    {
        $this->assertEquals('OperationDefinition', VersionConstants::TYPE_NAME_OPERATION_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIROperationDefinition', VersionConstants::TYPE_CLASS_OPERATION_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionBinding()
    {
        $this->assertEquals('OperationDefinition.Binding', VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding', VersionConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionOverload()
    {
        $this->assertEquals('OperationDefinition.Overload', VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_OVERLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload', VersionConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_OVERLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionParameter()
    {
        $this->assertEquals('OperationDefinition.Parameter', VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter', VersionConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIROperationKind()
    {
        $this->assertEquals('OperationKind', VersionConstants::TYPE_NAME_OPERATION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROperationKind', VersionConstants::TYPE_CLASS_OPERATION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIROperationKindList()
    {
        $this->assertEquals('OperationKind-list', VersionConstants::TYPE_NAME_OPERATION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIROperationKindList', VersionConstants::TYPE_CLASS_OPERATION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIROperationOutcome()
    {
        $this->assertEquals('OperationOutcome', VersionConstants::TYPE_NAME_OPERATION_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIROperationOutcome', VersionConstants::TYPE_CLASS_OPERATION_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIROperationOutcome_FHIROperationOutcomeIssue()
    {
        $this->assertEquals('OperationOutcome.Issue', VersionConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue', VersionConstants::TYPE_CLASS_OPERATION_OUTCOME_DOT_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIROperationParameterUse()
    {
        $this->assertEquals('OperationParameterUse', VersionConstants::TYPE_NAME_OPERATION_PARAMETER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIROperationParameterUse', VersionConstants::TYPE_CLASS_OPERATION_PARAMETER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIROperationParameterUseList()
    {
        $this->assertEquals('OperationParameterUse-list', VersionConstants::TYPE_NAME_OPERATION_PARAMETER_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIROperationParameterUseList', VersionConstants::TYPE_CLASS_OPERATION_PARAMETER_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIROrganization()
    {
        $this->assertEquals('Organization', VersionConstants::TYPE_NAME_ORGANIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIROrganization', VersionConstants::TYPE_CLASS_ORGANIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIROrganization_FHIROrganizationContact()
    {
        $this->assertEquals('Organization.Contact', VersionConstants::TYPE_NAME_ORGANIZATION_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact', VersionConstants::TYPE_CLASS_ORGANIZATION_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRParameterDefinition()
    {
        $this->assertEquals('ParameterDefinition', VersionConstants::TYPE_NAME_PARAMETER_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRParameterDefinition', VersionConstants::TYPE_CLASS_PARAMETER_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRParameters()
    {
        $this->assertEquals('Parameters', VersionConstants::TYPE_NAME_PARAMETERS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRParameters', VersionConstants::TYPE_CLASS_PARAMETERS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRParameters_FHIRParametersParameter()
    {
        $this->assertEquals('Parameters.Parameter', VersionConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter', VersionConstants::TYPE_CLASS_PARAMETERS_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRParticipantRequired()
    {
        $this->assertEquals('ParticipantRequired', VersionConstants::TYPE_NAME_PARTICIPANT_REQUIRED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRParticipantRequired', VersionConstants::TYPE_CLASS_PARTICIPANT_REQUIRED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRParticipantRequiredList()
    {
        $this->assertEquals('ParticipantRequired-list', VersionConstants::TYPE_NAME_PARTICIPANT_REQUIRED_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRParticipantRequiredList', VersionConstants::TYPE_CLASS_PARTICIPANT_REQUIRED_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRParticipationStatus()
    {
        $this->assertEquals('ParticipationStatus', VersionConstants::TYPE_NAME_PARTICIPATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRParticipationStatus', VersionConstants::TYPE_CLASS_PARTICIPATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRParticipationStatusList()
    {
        $this->assertEquals('ParticipationStatus-list', VersionConstants::TYPE_NAME_PARTICIPATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRParticipationStatusList', VersionConstants::TYPE_CLASS_PARTICIPATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRPatient()
    {
        $this->assertEquals('Patient', VersionConstants::TYPE_NAME_PATIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRPatient', VersionConstants::TYPE_CLASS_PATIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientAnimal()
    {
        $this->assertEquals('Patient.Animal', VersionConstants::TYPE_NAME_PATIENT_DOT_ANIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal', VersionConstants::TYPE_CLASS_PATIENT_DOT_ANIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientCommunication()
    {
        $this->assertEquals('Patient.Communication', VersionConstants::TYPE_NAME_PATIENT_DOT_COMMUNICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication', VersionConstants::TYPE_CLASS_PATIENT_DOT_COMMUNICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientContact()
    {
        $this->assertEquals('Patient.Contact', VersionConstants::TYPE_NAME_PATIENT_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact', VersionConstants::TYPE_CLASS_PATIENT_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientLink()
    {
        $this->assertEquals('Patient.Link', VersionConstants::TYPE_NAME_PATIENT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink', VersionConstants::TYPE_CLASS_PATIENT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRPaymentNotice()
    {
        $this->assertEquals('PaymentNotice', VersionConstants::TYPE_NAME_PAYMENT_NOTICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRPaymentNotice', VersionConstants::TYPE_CLASS_PAYMENT_NOTICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRPaymentReconciliation()
    {
        $this->assertEquals('PaymentReconciliation', VersionConstants::TYPE_NAME_PAYMENT_RECONCILIATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation', VersionConstants::TYPE_CLASS_PAYMENT_RECONCILIATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPaymentReconciliation_FHIRPaymentReconciliationDetail()
    {
        $this->assertEquals('PaymentReconciliation.Detail', VersionConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail', VersionConstants::TYPE_CLASS_PAYMENT_RECONCILIATION_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPaymentReconciliation_FHIRPaymentReconciliationProcessNote()
    {
        $this->assertEquals('PaymentReconciliation.ProcessNote', VersionConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote', VersionConstants::TYPE_CLASS_PAYMENT_RECONCILIATION_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRPeriod()
    {
        $this->assertEquals('Period', VersionConstants::TYPE_NAME_PERIOD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPeriod', VersionConstants::TYPE_CLASS_PERIOD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRPerson()
    {
        $this->assertEquals('Person', VersionConstants::TYPE_NAME_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRPerson', VersionConstants::TYPE_CLASS_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPerson_FHIRPersonLink()
    {
        $this->assertEquals('Person.Link', VersionConstants::TYPE_NAME_PERSON_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink', VersionConstants::TYPE_CLASS_PERSON_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRPlanDefinition()
    {
        $this->assertEquals('PlanDefinition', VersionConstants::TYPE_NAME_PLAN_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRPlanDefinition', VersionConstants::TYPE_CLASS_PLAN_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionAction()
    {
        $this->assertEquals('PlanDefinition.Action', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionCondition()
    {
        $this->assertEquals('PlanDefinition.Condition', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionDynamicValue()
    {
        $this->assertEquals('PlanDefinition.DynamicValue', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_DYNAMIC_VALUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_DYNAMIC_VALUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionGoal()
    {
        $this->assertEquals('PlanDefinition.Goal', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_GOAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionGoal', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_GOAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionParticipant()
    {
        $this->assertEquals('PlanDefinition.Participant', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionRelatedAction()
    {
        $this->assertEquals('PlanDefinition.RelatedAction', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_RELATED_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_RELATED_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionTarget()
    {
        $this->assertEquals('PlanDefinition.Target', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRPositiveInt()
    {
        $this->assertEquals('positiveInt', VersionConstants::TYPE_NAME_POSITIVE_INT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPositiveInt', VersionConstants::TYPE_CLASS_POSITIVE_INT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRPositiveIntPrimitive()
    {
        $this->assertEquals('positiveInt-primitive', VersionConstants::TYPE_NAME_POSITIVE_INT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRPositiveIntPrimitive', VersionConstants::TYPE_CLASS_POSITIVE_INT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRPractitioner()
    {
        $this->assertEquals('Practitioner', VersionConstants::TYPE_NAME_PRACTITIONER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRPractitioner', VersionConstants::TYPE_CLASS_PRACTITIONER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPractitioner_FHIRPractitionerQualification()
    {
        $this->assertEquals('Practitioner.Qualification', VersionConstants::TYPE_NAME_PRACTITIONER_DOT_QUALIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification', VersionConstants::TYPE_CLASS_PRACTITIONER_DOT_QUALIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRPractitionerRole()
    {
        $this->assertEquals('PractitionerRole', VersionConstants::TYPE_NAME_PRACTITIONER_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRPractitionerRole', VersionConstants::TYPE_CLASS_PRACTITIONER_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPractitionerRole_FHIRPractitionerRoleAvailableTime()
    {
        $this->assertEquals('PractitionerRole.AvailableTime', VersionConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime', VersionConstants::TYPE_CLASS_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRPractitionerRole_FHIRPractitionerRoleNotAvailable()
    {
        $this->assertEquals('PractitionerRole.NotAvailable', VersionConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_NOT_AVAILABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable', VersionConstants::TYPE_CLASS_PRACTITIONER_ROLE_DOT_NOT_AVAILABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRProcedure()
    {
        $this->assertEquals('Procedure', VersionConstants::TYPE_NAME_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRProcedure', VersionConstants::TYPE_CLASS_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedureFocalDevice()
    {
        $this->assertEquals('Procedure.FocalDevice', VersionConstants::TYPE_NAME_PROCEDURE_DOT_FOCAL_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice', VersionConstants::TYPE_CLASS_PROCEDURE_DOT_FOCAL_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedurePerformer()
    {
        $this->assertEquals('Procedure.Performer', VersionConstants::TYPE_NAME_PROCEDURE_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer', VersionConstants::TYPE_CLASS_PROCEDURE_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRProcedureRequest()
    {
        $this->assertEquals('ProcedureRequest', VersionConstants::TYPE_NAME_PROCEDURE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRProcedureRequest', VersionConstants::TYPE_CLASS_PROCEDURE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRProcedureRequest_FHIRProcedureRequestRequester()
    {
        $this->assertEquals('ProcedureRequest.Requester', VersionConstants::TYPE_NAME_PROCEDURE_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProcedureRequest\FHIRProcedureRequestRequester', VersionConstants::TYPE_CLASS_PROCEDURE_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRProcessRequest()
    {
        $this->assertEquals('ProcessRequest', VersionConstants::TYPE_NAME_PROCESS_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRProcessRequest', VersionConstants::TYPE_CLASS_PROCESS_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRProcessRequest_FHIRProcessRequestItem()
    {
        $this->assertEquals('ProcessRequest.Item', VersionConstants::TYPE_NAME_PROCESS_REQUEST_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem', VersionConstants::TYPE_CLASS_PROCESS_REQUEST_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRProcessResponse()
    {
        $this->assertEquals('ProcessResponse', VersionConstants::TYPE_NAME_PROCESS_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRProcessResponse', VersionConstants::TYPE_CLASS_PROCESS_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRProcessResponse_FHIRProcessResponseProcessNote()
    {
        $this->assertEquals('ProcessResponse.ProcessNote', VersionConstants::TYPE_NAME_PROCESS_RESPONSE_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseProcessNote', VersionConstants::TYPE_CLASS_PROCESS_RESPONSE_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRPropertyRepresentation()
    {
        $this->assertEquals('PropertyRepresentation', VersionConstants::TYPE_NAME_PROPERTY_REPRESENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyRepresentation', VersionConstants::TYPE_CLASS_PROPERTY_REPRESENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRPropertyRepresentationList()
    {
        $this->assertEquals('PropertyRepresentation-list', VersionConstants::TYPE_NAME_PROPERTY_REPRESENTATION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPropertyRepresentationList', VersionConstants::TYPE_CLASS_PROPERTY_REPRESENTATION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRPropertyType()
    {
        $this->assertEquals('PropertyType', VersionConstants::TYPE_NAME_PROPERTY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPropertyType', VersionConstants::TYPE_CLASS_PROPERTY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRPropertyTypeList()
    {
        $this->assertEquals('PropertyType-list', VersionConstants::TYPE_NAME_PROPERTY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPropertyTypeList', VersionConstants::TYPE_CLASS_PROPERTY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRProvenance()
    {
        $this->assertEquals('Provenance', VersionConstants::TYPE_NAME_PROVENANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRProvenance', VersionConstants::TYPE_CLASS_PROVENANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceAgent()
    {
        $this->assertEquals('Provenance.Agent', VersionConstants::TYPE_NAME_PROVENANCE_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent', VersionConstants::TYPE_CLASS_PROVENANCE_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceEntity()
    {
        $this->assertEquals('Provenance.Entity', VersionConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity', VersionConstants::TYPE_CLASS_PROVENANCE_DOT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRProvenanceEntityRole()
    {
        $this->assertEquals('ProvenanceEntityRole', VersionConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRProvenanceEntityRole', VersionConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRProvenanceEntityRoleList()
    {
        $this->assertEquals('ProvenanceEntityRole-list', VersionConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRProvenanceEntityRoleList', VersionConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRPublicationStatus()
    {
        $this->assertEquals('PublicationStatus', VersionConstants::TYPE_NAME_PUBLICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRPublicationStatus', VersionConstants::TYPE_CLASS_PUBLICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRPublicationStatusList()
    {
        $this->assertEquals('PublicationStatus-list', VersionConstants::TYPE_NAME_PUBLICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRPublicationStatusList', VersionConstants::TYPE_CLASS_PUBLICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQualityType()
    {
        $this->assertEquals('qualityType', VersionConstants::TYPE_NAME_QUALITY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQualityType', VersionConstants::TYPE_CLASS_QUALITY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRQualityTypeList()
    {
        $this->assertEquals('qualityType-list', VersionConstants::TYPE_NAME_QUALITY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQualityTypeList', VersionConstants::TYPE_CLASS_QUALITY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQuantity()
    {
        $this->assertEquals('Quantity', VersionConstants::TYPE_NAME_QUANTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantity', VersionConstants::TYPE_CLASS_QUANTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQuantityComparator()
    {
        $this->assertEquals('QuantityComparator', VersionConstants::TYPE_NAME_QUANTITY_COMPARATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuantityComparator', VersionConstants::TYPE_CLASS_QUANTITY_COMPARATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRQuantityComparatorList()
    {
        $this->assertEquals('QuantityComparator-list', VersionConstants::TYPE_NAME_QUANTITY_COMPARATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQuantityComparatorList', VersionConstants::TYPE_CLASS_QUANTITY_COMPARATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRQuestionnaire()
    {
        $this->assertEquals('Questionnaire', VersionConstants::TYPE_NAME_QUESTIONNAIRE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaire', VersionConstants::TYPE_CLASS_QUESTIONNAIRE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireEnableWhen()
    {
        $this->assertEquals('Questionnaire.EnableWhen', VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_ENABLE_WHEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireItem()
    {
        $this->assertEquals('Questionnaire.Item', VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireOption()
    {
        $this->assertEquals('Questionnaire.Option', VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_OPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireOption', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_OPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQuestionnaireItemType()
    {
        $this->assertEquals('QuestionnaireItemType', VersionConstants::TYPE_NAME_QUESTIONNAIRE_ITEM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuestionnaireItemType', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_ITEM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRQuestionnaireItemTypeList()
    {
        $this->assertEquals('QuestionnaireItemType-list', VersionConstants::TYPE_NAME_QUESTIONNAIRE_ITEM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQuestionnaireItemTypeList', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_ITEM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRQuestionnaireResponse()
    {
        $this->assertEquals('QuestionnaireResponse', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaireResponse_FHIRQuestionnaireResponseAnswer()
    {
        $this->assertEquals('QuestionnaireResponse.Answer', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ANSWER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_DOT_ANSWER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaireResponse_FHIRQuestionnaireResponseItem()
    {
        $this->assertEquals('QuestionnaireResponse.Item', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRQuestionnaireResponseStatus()
    {
        $this->assertEquals('QuestionnaireResponseStatus', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRQuestionnaireResponseStatus', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRQuestionnaireResponseStatusList()
    {
        $this->assertEquals('QuestionnaireResponseStatus-list', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRQuestionnaireResponseStatusList', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRange()
    {
        $this->assertEquals('Range', VersionConstants::TYPE_NAME_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRange', VersionConstants::TYPE_CLASS_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRatio()
    {
        $this->assertEquals('Ratio', VersionConstants::TYPE_NAME_RATIO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRatio', VersionConstants::TYPE_CLASS_RATIO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRReference()
    {
        $this->assertEquals('Reference', VersionConstants::TYPE_NAME_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReference', VersionConstants::TYPE_CLASS_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRReferenceHandlingPolicy()
    {
        $this->assertEquals('ReferenceHandlingPolicy', VersionConstants::TYPE_NAME_REFERENCE_HANDLING_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceHandlingPolicy', VersionConstants::TYPE_CLASS_REFERENCE_HANDLING_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRReferenceHandlingPolicyList()
    {
        $this->assertEquals('ReferenceHandlingPolicy-list', VersionConstants::TYPE_NAME_REFERENCE_HANDLING_POLICY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRReferenceHandlingPolicyList', VersionConstants::TYPE_CLASS_REFERENCE_HANDLING_POLICY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRReferenceVersionRules()
    {
        $this->assertEquals('ReferenceVersionRules', VersionConstants::TYPE_NAME_REFERENCE_VERSION_RULES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRReferenceVersionRules', VersionConstants::TYPE_CLASS_REFERENCE_VERSION_RULES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRReferenceVersionRulesList()
    {
        $this->assertEquals('ReferenceVersionRules-list', VersionConstants::TYPE_NAME_REFERENCE_VERSION_RULES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRReferenceVersionRulesList', VersionConstants::TYPE_CLASS_REFERENCE_VERSION_RULES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRReferralRequest()
    {
        $this->assertEquals('ReferralRequest', VersionConstants::TYPE_NAME_REFERRAL_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRReferralRequest', VersionConstants::TYPE_CLASS_REFERRAL_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRReferralRequest_FHIRReferralRequestRequester()
    {
        $this->assertEquals('ReferralRequest.Requester', VersionConstants::TYPE_NAME_REFERRAL_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRReferralRequest\FHIRReferralRequestRequester', VersionConstants::TYPE_CLASS_REFERRAL_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRelatedArtifact()
    {
        $this->assertEquals('RelatedArtifact', VersionConstants::TYPE_NAME_RELATED_ARTIFACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifact', VersionConstants::TYPE_CLASS_RELATED_ARTIFACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRelatedArtifactType()
    {
        $this->assertEquals('RelatedArtifactType', VersionConstants::TYPE_NAME_RELATED_ARTIFACT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRelatedArtifactType', VersionConstants::TYPE_CLASS_RELATED_ARTIFACT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRRelatedArtifactTypeList()
    {
        $this->assertEquals('RelatedArtifactType-list', VersionConstants::TYPE_NAME_RELATED_ARTIFACT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRelatedArtifactTypeList', VersionConstants::TYPE_CLASS_RELATED_ARTIFACT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRRelatedPerson()
    {
        $this->assertEquals('RelatedPerson', VersionConstants::TYPE_NAME_RELATED_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRRelatedPerson', VersionConstants::TYPE_CLASS_RELATED_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRemittanceOutcome()
    {
        $this->assertEquals('RemittanceOutcome', VersionConstants::TYPE_NAME_REMITTANCE_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRemittanceOutcome', VersionConstants::TYPE_CLASS_REMITTANCE_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRRemittanceOutcomeList()
    {
        $this->assertEquals('RemittanceOutcome-list', VersionConstants::TYPE_NAME_REMITTANCE_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRemittanceOutcomeList', VersionConstants::TYPE_CLASS_REMITTANCE_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRepositoryType()
    {
        $this->assertEquals('repositoryType', VersionConstants::TYPE_NAME_REPOSITORY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRepositoryType', VersionConstants::TYPE_CLASS_REPOSITORY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRRepositoryTypeList()
    {
        $this->assertEquals('repositoryType-list', VersionConstants::TYPE_NAME_REPOSITORY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRepositoryTypeList', VersionConstants::TYPE_CLASS_REPOSITORY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRRequestGroup()
    {
        $this->assertEquals('RequestGroup', VersionConstants::TYPE_NAME_REQUEST_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRRequestGroup', VersionConstants::TYPE_CLASS_REQUEST_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRRequestGroup_FHIRRequestGroupAction()
    {
        $this->assertEquals('RequestGroup.Action', VersionConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction', VersionConstants::TYPE_CLASS_REQUEST_GROUP_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRRequestGroup_FHIRRequestGroupCondition()
    {
        $this->assertEquals('RequestGroup.Condition', VersionConstants::TYPE_NAME_REQUEST_GROUP_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition', VersionConstants::TYPE_CLASS_REQUEST_GROUP_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRRequestGroup_FHIRRequestGroupRelatedAction()
    {
        $this->assertEquals('RequestGroup.RelatedAction', VersionConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction', VersionConstants::TYPE_CLASS_REQUEST_GROUP_DOT_RELATED_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRequestIntent()
    {
        $this->assertEquals('RequestIntent', VersionConstants::TYPE_NAME_REQUEST_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestIntent', VersionConstants::TYPE_CLASS_REQUEST_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRRequestIntentList()
    {
        $this->assertEquals('RequestIntent-list', VersionConstants::TYPE_NAME_REQUEST_INTENT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestIntentList', VersionConstants::TYPE_CLASS_REQUEST_INTENT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRequestPriority()
    {
        $this->assertEquals('RequestPriority', VersionConstants::TYPE_NAME_REQUEST_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestPriority', VersionConstants::TYPE_CLASS_REQUEST_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRRequestPriorityList()
    {
        $this->assertEquals('RequestPriority-list', VersionConstants::TYPE_NAME_REQUEST_PRIORITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestPriorityList', VersionConstants::TYPE_CLASS_REQUEST_PRIORITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRequestStatus()
    {
        $this->assertEquals('RequestStatus', VersionConstants::TYPE_NAME_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRequestStatus', VersionConstants::TYPE_CLASS_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRRequestStatusList()
    {
        $this->assertEquals('RequestStatus-list', VersionConstants::TYPE_NAME_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRequestStatusList', VersionConstants::TYPE_CLASS_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRResearchStudy()
    {
        $this->assertEquals('ResearchStudy', VersionConstants::TYPE_NAME_RESEARCH_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRResearchStudy', VersionConstants::TYPE_CLASS_RESEARCH_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRResearchStudy_FHIRResearchStudyArm()
    {
        $this->assertEquals('ResearchStudy.Arm', VersionConstants::TYPE_NAME_RESEARCH_STUDY_DOT_ARM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm', VersionConstants::TYPE_CLASS_RESEARCH_STUDY_DOT_ARM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRResearchStudyStatus()
    {
        $this->assertEquals('ResearchStudyStatus', VersionConstants::TYPE_NAME_RESEARCH_STUDY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResearchStudyStatus', VersionConstants::TYPE_CLASS_RESEARCH_STUDY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRResearchStudyStatusList()
    {
        $this->assertEquals('ResearchStudyStatus-list', VersionConstants::TYPE_NAME_RESEARCH_STUDY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResearchStudyStatusList', VersionConstants::TYPE_CLASS_RESEARCH_STUDY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRResearchSubject()
    {
        $this->assertEquals('ResearchSubject', VersionConstants::TYPE_NAME_RESEARCH_SUBJECT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRResearchSubject', VersionConstants::TYPE_CLASS_RESEARCH_SUBJECT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRResearchSubjectStatus()
    {
        $this->assertEquals('ResearchSubjectStatus', VersionConstants::TYPE_NAME_RESEARCH_SUBJECT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResearchSubjectStatus', VersionConstants::TYPE_CLASS_RESEARCH_SUBJECT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRResearchSubjectStatusList()
    {
        $this->assertEquals('ResearchSubjectStatus-list', VersionConstants::TYPE_NAME_RESEARCH_SUBJECT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResearchSubjectStatusList', VersionConstants::TYPE_CLASS_RESEARCH_SUBJECT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource()
    {
        $this->assertEquals('Resource', VersionConstants::TYPE_NAME_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource', VersionConstants::TYPE_CLASS_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResourceContainer()
    {
        $this->assertEquals('ResourceContainer', VersionConstants::TYPE_NAME_RESOURCE_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer', VersionConstants::TYPE_CLASS_RESOURCE_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRResourceType()
    {
        $this->assertEquals('ResourceType', VersionConstants::TYPE_NAME_RESOURCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceType', VersionConstants::TYPE_CLASS_RESOURCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRResourceTypeList()
    {
        $this->assertEquals('ResourceType-list', VersionConstants::TYPE_NAME_RESOURCE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceTypeList', VersionConstants::TYPE_CLASS_RESOURCE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRResourceVersionPolicy()
    {
        $this->assertEquals('ResourceVersionPolicy', VersionConstants::TYPE_NAME_RESOURCE_VERSION_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResourceVersionPolicy', VersionConstants::TYPE_CLASS_RESOURCE_VERSION_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRResourceVersionPolicyList()
    {
        $this->assertEquals('ResourceVersionPolicy-list', VersionConstants::TYPE_NAME_RESOURCE_VERSION_POLICY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResourceVersionPolicyList', VersionConstants::TYPE_CLASS_RESOURCE_VERSION_POLICY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRResponseType()
    {
        $this->assertEquals('ResponseType', VersionConstants::TYPE_NAME_RESPONSE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRResponseType', VersionConstants::TYPE_CLASS_RESPONSE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRResponseTypeList()
    {
        $this->assertEquals('ResponseType-list', VersionConstants::TYPE_NAME_RESPONSE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRResponseTypeList', VersionConstants::TYPE_CLASS_RESPONSE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRRestfulCapabilityMode()
    {
        $this->assertEquals('RestfulCapabilityMode', VersionConstants::TYPE_NAME_RESTFUL_CAPABILITY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRRestfulCapabilityMode', VersionConstants::TYPE_CLASS_RESTFUL_CAPABILITY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRRestfulCapabilityModeList()
    {
        $this->assertEquals('RestfulCapabilityMode-list', VersionConstants::TYPE_NAME_RESTFUL_CAPABILITY_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRRestfulCapabilityModeList', VersionConstants::TYPE_CLASS_RESTFUL_CAPABILITY_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRRiskAssessment()
    {
        $this->assertEquals('RiskAssessment', VersionConstants::TYPE_NAME_RISK_ASSESSMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRRiskAssessment', VersionConstants::TYPE_CLASS_RISK_ASSESSMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRRiskAssessment_FHIRRiskAssessmentPrediction()
    {
        $this->assertEquals('RiskAssessment.Prediction', VersionConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction', VersionConstants::TYPE_CLASS_RISK_ASSESSMENT_DOT_PREDICTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSampledData()
    {
        $this->assertEquals('SampledData', VersionConstants::TYPE_NAME_SAMPLED_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledData', VersionConstants::TYPE_CLASS_SAMPLED_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSampledDataDataType()
    {
        $this->assertEquals('SampledDataDataType', VersionConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSampledDataDataType', VersionConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRSampledDataDataTypePrimitive()
    {
        $this->assertEquals('SampledDataDataType-primitive', VersionConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRSampledDataDataTypePrimitive', VersionConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRSchedule()
    {
        $this->assertEquals('Schedule', VersionConstants::TYPE_NAME_SCHEDULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRSchedule', VersionConstants::TYPE_CLASS_SCHEDULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSearchComparator()
    {
        $this->assertEquals('SearchComparator', VersionConstants::TYPE_NAME_SEARCH_COMPARATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSearchComparator', VersionConstants::TYPE_CLASS_SEARCH_COMPARATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSearchComparatorList()
    {
        $this->assertEquals('SearchComparator-list', VersionConstants::TYPE_NAME_SEARCH_COMPARATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSearchComparatorList', VersionConstants::TYPE_CLASS_SEARCH_COMPARATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSearchEntryMode()
    {
        $this->assertEquals('SearchEntryMode', VersionConstants::TYPE_NAME_SEARCH_ENTRY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSearchEntryMode', VersionConstants::TYPE_CLASS_SEARCH_ENTRY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSearchEntryModeList()
    {
        $this->assertEquals('SearchEntryMode-list', VersionConstants::TYPE_NAME_SEARCH_ENTRY_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSearchEntryModeList', VersionConstants::TYPE_CLASS_SEARCH_ENTRY_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSearchModifierCode()
    {
        $this->assertEquals('SearchModifierCode', VersionConstants::TYPE_NAME_SEARCH_MODIFIER_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSearchModifierCode', VersionConstants::TYPE_CLASS_SEARCH_MODIFIER_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSearchModifierCodeList()
    {
        $this->assertEquals('SearchModifierCode-list', VersionConstants::TYPE_NAME_SEARCH_MODIFIER_CODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSearchModifierCodeList', VersionConstants::TYPE_CLASS_SEARCH_MODIFIER_CODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRSearchParameter()
    {
        $this->assertEquals('SearchParameter', VersionConstants::TYPE_NAME_SEARCH_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRSearchParameter', VersionConstants::TYPE_CLASS_SEARCH_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSearchParameter_FHIRSearchParameterComponent()
    {
        $this->assertEquals('SearchParameter.Component', VersionConstants::TYPE_NAME_SEARCH_PARAMETER_DOT_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent', VersionConstants::TYPE_CLASS_SEARCH_PARAMETER_DOT_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSearchParamType()
    {
        $this->assertEquals('SearchParamType', VersionConstants::TYPE_NAME_SEARCH_PARAM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSearchParamType', VersionConstants::TYPE_CLASS_SEARCH_PARAM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSearchParamTypeList()
    {
        $this->assertEquals('SearchParamType-list', VersionConstants::TYPE_NAME_SEARCH_PARAM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSearchParamTypeList', VersionConstants::TYPE_CLASS_SEARCH_PARAM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRSequence()
    {
        $this->assertEquals('Sequence', VersionConstants::TYPE_NAME_SEQUENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRSequence', VersionConstants::TYPE_CLASS_SEQUENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSequence_FHIRSequenceQuality()
    {
        $this->assertEquals('Sequence.Quality', VersionConstants::TYPE_NAME_SEQUENCE_DOT_QUALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceQuality', VersionConstants::TYPE_CLASS_SEQUENCE_DOT_QUALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSequence_FHIRSequenceReferenceSeq()
    {
        $this->assertEquals('Sequence.ReferenceSeq', VersionConstants::TYPE_NAME_SEQUENCE_DOT_REFERENCE_SEQ);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceReferenceSeq', VersionConstants::TYPE_CLASS_SEQUENCE_DOT_REFERENCE_SEQ);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSequence_FHIRSequenceRepository()
    {
        $this->assertEquals('Sequence.Repository', VersionConstants::TYPE_NAME_SEQUENCE_DOT_REPOSITORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceRepository', VersionConstants::TYPE_CLASS_SEQUENCE_DOT_REPOSITORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSequence_FHIRSequenceVariant()
    {
        $this->assertEquals('Sequence.Variant', VersionConstants::TYPE_NAME_SEQUENCE_DOT_VARIANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSequence\FHIRSequenceVariant', VersionConstants::TYPE_CLASS_SEQUENCE_DOT_VARIANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRServiceDefinition()
    {
        $this->assertEquals('ServiceDefinition', VersionConstants::TYPE_NAME_SERVICE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRServiceDefinition', VersionConstants::TYPE_CLASS_SERVICE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSignature()
    {
        $this->assertEquals('Signature', VersionConstants::TYPE_NAME_SIGNATURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSignature', VersionConstants::TYPE_CLASS_SIGNATURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSlicingRules()
    {
        $this->assertEquals('SlicingRules', VersionConstants::TYPE_NAME_SLICING_RULES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSlicingRules', VersionConstants::TYPE_CLASS_SLICING_RULES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSlicingRulesList()
    {
        $this->assertEquals('SlicingRules-list', VersionConstants::TYPE_NAME_SLICING_RULES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSlicingRulesList', VersionConstants::TYPE_CLASS_SLICING_RULES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRSlot()
    {
        $this->assertEquals('Slot', VersionConstants::TYPE_NAME_SLOT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRSlot', VersionConstants::TYPE_CLASS_SLOT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSlotStatus()
    {
        $this->assertEquals('SlotStatus', VersionConstants::TYPE_NAME_SLOT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSlotStatus', VersionConstants::TYPE_CLASS_SLOT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSlotStatusList()
    {
        $this->assertEquals('SlotStatus-list', VersionConstants::TYPE_NAME_SLOT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSlotStatusList', VersionConstants::TYPE_CLASS_SLOT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRSpecimen()
    {
        $this->assertEquals('Specimen', VersionConstants::TYPE_NAME_SPECIMEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRSpecimen', VersionConstants::TYPE_CLASS_SPECIMEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenCollection()
    {
        $this->assertEquals('Specimen.Collection', VersionConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_COLLECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenContainer()
    {
        $this->assertEquals('Specimen.Container', VersionConstants::TYPE_NAME_SPECIMEN_DOT_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenProcessing()
    {
        $this->assertEquals('Specimen.Processing', VersionConstants::TYPE_NAME_SPECIMEN_DOT_PROCESSING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_PROCESSING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSpecimenStatus()
    {
        $this->assertEquals('SpecimenStatus', VersionConstants::TYPE_NAME_SPECIMEN_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSpecimenStatus', VersionConstants::TYPE_CLASS_SPECIMEN_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSpecimenStatusList()
    {
        $this->assertEquals('SpecimenStatus-list', VersionConstants::TYPE_NAME_SPECIMEN_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSpecimenStatusList', VersionConstants::TYPE_CLASS_SPECIMEN_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRString()
    {
        $this->assertEquals('string', VersionConstants::TYPE_NAME_STRING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString', VersionConstants::TYPE_CLASS_STRING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRStringPrimitive()
    {
        $this->assertEquals('string-primitive', VersionConstants::TYPE_NAME_STRING_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive', VersionConstants::TYPE_CLASS_STRING_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRStructureDefinition()
    {
        $this->assertEquals('StructureDefinition', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRStructureDefinition', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionDifferential()
    {
        $this->assertEquals('StructureDefinition.Differential', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_DIFFERENTIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_DIFFERENTIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionMapping()
    {
        $this->assertEquals('StructureDefinition.Mapping', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionSnapshot()
    {
        $this->assertEquals('StructureDefinition.Snapshot', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_SNAPSHOT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_SNAPSHOT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRStructureDefinitionKind()
    {
        $this->assertEquals('StructureDefinitionKind', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRStructureDefinitionKind', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRStructureDefinitionKindList()
    {
        $this->assertEquals('StructureDefinitionKind-list', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRStructureDefinitionKindList', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRStructureMap()
    {
        $this->assertEquals('StructureMap', VersionConstants::TYPE_NAME_STRUCTURE_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRStructureMap', VersionConstants::TYPE_CLASS_STRUCTURE_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapDependent()
    {
        $this->assertEquals('StructureMap.Dependent', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_DEPENDENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapDependent', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_DEPENDENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapGroup()
    {
        $this->assertEquals('StructureMap.Group', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapInput()
    {
        $this->assertEquals('StructureMap.Input', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_INPUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_INPUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapParameter()
    {
        $this->assertEquals('StructureMap.Parameter', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapRule()
    {
        $this->assertEquals('StructureMap.Rule', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapSource()
    {
        $this->assertEquals('StructureMap.Source', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapStructure()
    {
        $this->assertEquals('StructureMap.Structure', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_STRUCTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_STRUCTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapTarget()
    {
        $this->assertEquals('StructureMap.Target', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRStructureMapContextType()
    {
        $this->assertEquals('StructureMapContextType', VersionConstants::TYPE_NAME_STRUCTURE_MAP_CONTEXT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRStructureMapContextType', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_CONTEXT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRStructureMapContextTypeList()
    {
        $this->assertEquals('StructureMapContextType-list', VersionConstants::TYPE_NAME_STRUCTURE_MAP_CONTEXT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRStructureMapContextTypeList', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_CONTEXT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRStructureMapGroupTypeMode()
    {
        $this->assertEquals('StructureMapGroupTypeMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_GROUP_TYPE_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRStructureMapGroupTypeMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_GROUP_TYPE_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRStructureMapGroupTypeModeList()
    {
        $this->assertEquals('StructureMapGroupTypeMode-list', VersionConstants::TYPE_NAME_STRUCTURE_MAP_GROUP_TYPE_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRStructureMapGroupTypeModeList', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_GROUP_TYPE_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRStructureMapInputMode()
    {
        $this->assertEquals('StructureMapInputMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_INPUT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRStructureMapInputMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_INPUT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRStructureMapInputModeList()
    {
        $this->assertEquals('StructureMapInputMode-list', VersionConstants::TYPE_NAME_STRUCTURE_MAP_INPUT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRStructureMapInputModeList', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_INPUT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRStructureMapModelMode()
    {
        $this->assertEquals('StructureMapModelMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_MODEL_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRStructureMapModelMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_MODEL_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRStructureMapModelModeList()
    {
        $this->assertEquals('StructureMapModelMode-list', VersionConstants::TYPE_NAME_STRUCTURE_MAP_MODEL_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRStructureMapModelModeList', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_MODEL_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRStructureMapSourceListMode()
    {
        $this->assertEquals('StructureMapSourceListMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_SOURCE_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRStructureMapSourceListMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_SOURCE_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRStructureMapSourceListModeList()
    {
        $this->assertEquals('StructureMapSourceListMode-list', VersionConstants::TYPE_NAME_STRUCTURE_MAP_SOURCE_LIST_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRStructureMapSourceListModeList', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_SOURCE_LIST_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRStructureMapTargetListMode()
    {
        $this->assertEquals('StructureMapTargetListMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_TARGET_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRStructureMapTargetListMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_TARGET_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRStructureMapTargetListModeList()
    {
        $this->assertEquals('StructureMapTargetListMode-list', VersionConstants::TYPE_NAME_STRUCTURE_MAP_TARGET_LIST_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRStructureMapTargetListModeList', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_TARGET_LIST_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRStructureMapTransform()
    {
        $this->assertEquals('StructureMapTransform', VersionConstants::TYPE_NAME_STRUCTURE_MAP_TRANSFORM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRStructureMapTransform', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_TRANSFORM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRStructureMapTransformList()
    {
        $this->assertEquals('StructureMapTransform-list', VersionConstants::TYPE_NAME_STRUCTURE_MAP_TRANSFORM_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRStructureMapTransformList', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_TRANSFORM_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRSubscription()
    {
        $this->assertEquals('Subscription', VersionConstants::TYPE_NAME_SUBSCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRSubscription', VersionConstants::TYPE_CLASS_SUBSCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSubscription_FHIRSubscriptionChannel()
    {
        $this->assertEquals('Subscription.Channel', VersionConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel', VersionConstants::TYPE_CLASS_SUBSCRIPTION_DOT_CHANNEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSubscriptionChannelType()
    {
        $this->assertEquals('SubscriptionChannelType', VersionConstants::TYPE_NAME_SUBSCRIPTION_CHANNEL_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSubscriptionChannelType', VersionConstants::TYPE_CLASS_SUBSCRIPTION_CHANNEL_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSubscriptionChannelTypeList()
    {
        $this->assertEquals('SubscriptionChannelType-list', VersionConstants::TYPE_NAME_SUBSCRIPTION_CHANNEL_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSubscriptionChannelTypeList', VersionConstants::TYPE_CLASS_SUBSCRIPTION_CHANNEL_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSubscriptionStatus()
    {
        $this->assertEquals('SubscriptionStatus', VersionConstants::TYPE_NAME_SUBSCRIPTION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSubscriptionStatus', VersionConstants::TYPE_CLASS_SUBSCRIPTION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSubscriptionStatusList()
    {
        $this->assertEquals('SubscriptionStatus-list', VersionConstants::TYPE_NAME_SUBSCRIPTION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSubscriptionStatusList', VersionConstants::TYPE_CLASS_SUBSCRIPTION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRSubstance()
    {
        $this->assertEquals('Substance', VersionConstants::TYPE_NAME_SUBSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRSubstance', VersionConstants::TYPE_CLASS_SUBSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceIngredient()
    {
        $this->assertEquals('Substance.Ingredient', VersionConstants::TYPE_NAME_SUBSTANCE_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient', VersionConstants::TYPE_CLASS_SUBSTANCE_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceInstance()
    {
        $this->assertEquals('Substance.Instance', VersionConstants::TYPE_NAME_SUBSTANCE_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance', VersionConstants::TYPE_CLASS_SUBSTANCE_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRSupplyDelivery()
    {
        $this->assertEquals('SupplyDelivery', VersionConstants::TYPE_NAME_SUPPLY_DELIVERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery', VersionConstants::TYPE_CLASS_SUPPLY_DELIVERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSupplyDelivery_FHIRSupplyDeliverySuppliedItem()
    {
        $this->assertEquals('SupplyDelivery.SuppliedItem', VersionConstants::TYPE_NAME_SUPPLY_DELIVERY_DOT_SUPPLIED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSupplyDelivery\FHIRSupplyDeliverySuppliedItem', VersionConstants::TYPE_CLASS_SUPPLY_DELIVERY_DOT_SUPPLIED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSupplyDeliveryStatus()
    {
        $this->assertEquals('SupplyDeliveryStatus', VersionConstants::TYPE_NAME_SUPPLY_DELIVERY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSupplyDeliveryStatus', VersionConstants::TYPE_CLASS_SUPPLY_DELIVERY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSupplyDeliveryStatusList()
    {
        $this->assertEquals('SupplyDeliveryStatus-list', VersionConstants::TYPE_NAME_SUPPLY_DELIVERY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSupplyDeliveryStatusList', VersionConstants::TYPE_CLASS_SUPPLY_DELIVERY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRSupplyRequest()
    {
        $this->assertEquals('SupplyRequest', VersionConstants::TYPE_NAME_SUPPLY_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRSupplyRequest', VersionConstants::TYPE_CLASS_SUPPLY_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSupplyRequest_FHIRSupplyRequestOrderedItem()
    {
        $this->assertEquals('SupplyRequest.OrderedItem', VersionConstants::TYPE_NAME_SUPPLY_REQUEST_DOT_ORDERED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestOrderedItem', VersionConstants::TYPE_CLASS_SUPPLY_REQUEST_DOT_ORDERED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRSupplyRequest_FHIRSupplyRequestRequester()
    {
        $this->assertEquals('SupplyRequest.Requester', VersionConstants::TYPE_NAME_SUPPLY_REQUEST_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestRequester', VersionConstants::TYPE_CLASS_SUPPLY_REQUEST_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSupplyRequestStatus()
    {
        $this->assertEquals('SupplyRequestStatus', VersionConstants::TYPE_NAME_SUPPLY_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSupplyRequestStatus', VersionConstants::TYPE_CLASS_SUPPLY_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSupplyRequestStatusList()
    {
        $this->assertEquals('SupplyRequestStatus-list', VersionConstants::TYPE_NAME_SUPPLY_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSupplyRequestStatusList', VersionConstants::TYPE_CLASS_SUPPLY_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSystemRestfulInteraction()
    {
        $this->assertEquals('SystemRestfulInteraction', VersionConstants::TYPE_NAME_SYSTEM_RESTFUL_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSystemRestfulInteraction', VersionConstants::TYPE_CLASS_SYSTEM_RESTFUL_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSystemRestfulInteractionList()
    {
        $this->assertEquals('SystemRestfulInteraction-list', VersionConstants::TYPE_NAME_SYSTEM_RESTFUL_INTERACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSystemRestfulInteractionList', VersionConstants::TYPE_CLASS_SYSTEM_RESTFUL_INTERACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRSystemVersionProcessingMode()
    {
        $this->assertEquals('SystemVersionProcessingMode', VersionConstants::TYPE_NAME_SYSTEM_VERSION_PROCESSING_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRSystemVersionProcessingMode', VersionConstants::TYPE_CLASS_SYSTEM_VERSION_PROCESSING_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRSystemVersionProcessingModeList()
    {
        $this->assertEquals('SystemVersionProcessingMode-list', VersionConstants::TYPE_NAME_SYSTEM_VERSION_PROCESSING_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRSystemVersionProcessingModeList', VersionConstants::TYPE_CLASS_SYSTEM_VERSION_PROCESSING_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRTask()
    {
        $this->assertEquals('Task', VersionConstants::TYPE_NAME_TASK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRTask', VersionConstants::TYPE_CLASS_TASK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskInput()
    {
        $this->assertEquals('Task.Input', VersionConstants::TYPE_NAME_TASK_DOT_INPUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput', VersionConstants::TYPE_CLASS_TASK_DOT_INPUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskOutput()
    {
        $this->assertEquals('Task.Output', VersionConstants::TYPE_NAME_TASK_DOT_OUTPUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput', VersionConstants::TYPE_CLASS_TASK_DOT_OUTPUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskRequester()
    {
        $this->assertEquals('Task.Requester', VersionConstants::TYPE_NAME_TASK_DOT_REQUESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRequester', VersionConstants::TYPE_CLASS_TASK_DOT_REQUESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskRestriction()
    {
        $this->assertEquals('Task.Restriction', VersionConstants::TYPE_NAME_TASK_DOT_RESTRICTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction', VersionConstants::TYPE_CLASS_TASK_DOT_RESTRICTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTaskStatus()
    {
        $this->assertEquals('TaskStatus', VersionConstants::TYPE_NAME_TASK_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTaskStatus', VersionConstants::TYPE_CLASS_TASK_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRTaskStatusList()
    {
        $this->assertEquals('TaskStatus-list', VersionConstants::TYPE_NAME_TASK_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTaskStatusList', VersionConstants::TYPE_CLASS_TASK_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRTestReport()
    {
        $this->assertEquals('TestReport', VersionConstants::TYPE_NAME_TEST_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRTestReport', VersionConstants::TYPE_CLASS_TEST_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAction()
    {
        $this->assertEquals('TestReport.Action', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAction1()
    {
        $this->assertEquals('TestReport.Action1', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_ACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction1', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_ACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAction2()
    {
        $this->assertEquals('TestReport.Action2', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_ACTION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction2', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_ACTION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAssert()
    {
        $this->assertEquals('TestReport.Assert', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_ASSERT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportOperation()
    {
        $this->assertEquals('TestReport.Operation', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportOperation', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportParticipant()
    {
        $this->assertEquals('TestReport.Participant', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportSetup()
    {
        $this->assertEquals('TestReport.Setup', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_SETUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_SETUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportTeardown()
    {
        $this->assertEquals('TestReport.Teardown', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_TEARDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_TEARDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportTest()
    {
        $this->assertEquals('TestReport.Test', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_TEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_TEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTestReportActionResult()
    {
        $this->assertEquals('TestReportActionResult', VersionConstants::TYPE_NAME_TEST_REPORT_ACTION_RESULT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTestReportActionResult', VersionConstants::TYPE_CLASS_TEST_REPORT_ACTION_RESULT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRTestReportActionResultList()
    {
        $this->assertEquals('TestReportActionResult-list', VersionConstants::TYPE_NAME_TEST_REPORT_ACTION_RESULT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTestReportActionResultList', VersionConstants::TYPE_CLASS_TEST_REPORT_ACTION_RESULT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTestReportParticipantType()
    {
        $this->assertEquals('TestReportParticipantType', VersionConstants::TYPE_NAME_TEST_REPORT_PARTICIPANT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTestReportParticipantType', VersionConstants::TYPE_CLASS_TEST_REPORT_PARTICIPANT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRTestReportParticipantTypeList()
    {
        $this->assertEquals('TestReportParticipantType-list', VersionConstants::TYPE_NAME_TEST_REPORT_PARTICIPANT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTestReportParticipantTypeList', VersionConstants::TYPE_CLASS_TEST_REPORT_PARTICIPANT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTestReportResult()
    {
        $this->assertEquals('TestReportResult', VersionConstants::TYPE_NAME_TEST_REPORT_RESULT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTestReportResult', VersionConstants::TYPE_CLASS_TEST_REPORT_RESULT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRTestReportResultList()
    {
        $this->assertEquals('TestReportResult-list', VersionConstants::TYPE_NAME_TEST_REPORT_RESULT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTestReportResultList', VersionConstants::TYPE_CLASS_TEST_REPORT_RESULT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTestReportStatus()
    {
        $this->assertEquals('TestReportStatus', VersionConstants::TYPE_NAME_TEST_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTestReportStatus', VersionConstants::TYPE_CLASS_TEST_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRTestReportStatusList()
    {
        $this->assertEquals('TestReportStatus-list', VersionConstants::TYPE_NAME_TEST_REPORT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTestReportStatusList', VersionConstants::TYPE_CLASS_TEST_REPORT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRTestScript()
    {
        $this->assertEquals('TestScript', VersionConstants::TYPE_NAME_TEST_SCRIPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRTestScript', VersionConstants::TYPE_CLASS_TEST_SCRIPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction()
    {
        $this->assertEquals('TestScript.Action', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction1()
    {
        $this->assertEquals('TestScript.Action1', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction1', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction2()
    {
        $this->assertEquals('TestScript.Action2', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction2', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAssert()
    {
        $this->assertEquals('TestScript.Assert', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ASSERT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptCapability()
    {
        $this->assertEquals('TestScript.Capability', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_CAPABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptDestination()
    {
        $this->assertEquals('TestScript.Destination', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_DESTINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptDestination', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_DESTINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptFixture()
    {
        $this->assertEquals('TestScript.Fixture', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_FIXTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_FIXTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptLink()
    {
        $this->assertEquals('TestScript.Link', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptLink', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptMetadata()
    {
        $this->assertEquals('TestScript.Metadata', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_METADATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_METADATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptOperation()
    {
        $this->assertEquals('TestScript.Operation', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptOrigin()
    {
        $this->assertEquals('TestScript.Origin', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ORIGIN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOrigin', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ORIGIN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptParam()
    {
        $this->assertEquals('TestScript.Param', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptParam1()
    {
        $this->assertEquals('TestScript.Param1', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_PARAM_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam1', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_PARAM_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptParam2()
    {
        $this->assertEquals('TestScript.Param2', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_PARAM_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam2', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_PARAM_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptParam3()
    {
        $this->assertEquals('TestScript.Param3', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_PARAM_3);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptParam3', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_PARAM_3);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRequestHeader()
    {
        $this->assertEquals('TestScript.RequestHeader', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_REQUEST_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_REQUEST_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRule()
    {
        $this->assertEquals('TestScript.Rule', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRule1()
    {
        $this->assertEquals('TestScript.Rule1', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULE_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule1', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULE_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRule2()
    {
        $this->assertEquals('TestScript.Rule2', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULE_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule2', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULE_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRule3()
    {
        $this->assertEquals('TestScript.Rule3', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULE_3);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRule3', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULE_3);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRuleset()
    {
        $this->assertEquals('TestScript.Ruleset', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULESET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULESET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRuleset1()
    {
        $this->assertEquals('TestScript.Ruleset1', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_RULESET_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRuleset1', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_RULESET_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptSetup()
    {
        $this->assertEquals('TestScript.Setup', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_SETUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_SETUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptTeardown()
    {
        $this->assertEquals('TestScript.Teardown', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_TEARDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_TEARDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptTest()
    {
        $this->assertEquals('TestScript.Test', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_TEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_TEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptVariable()
    {
        $this->assertEquals('TestScript.Variable', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_VARIABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_VARIABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTestScriptRequestMethodCode()
    {
        $this->assertEquals('TestScriptRequestMethodCode', VersionConstants::TYPE_NAME_TEST_SCRIPT_REQUEST_METHOD_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTestScriptRequestMethodCode', VersionConstants::TYPE_CLASS_TEST_SCRIPT_REQUEST_METHOD_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRTestScriptRequestMethodCodeList()
    {
        $this->assertEquals('TestScriptRequestMethodCode-list', VersionConstants::TYPE_NAME_TEST_SCRIPT_REQUEST_METHOD_CODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTestScriptRequestMethodCodeList', VersionConstants::TYPE_CLASS_TEST_SCRIPT_REQUEST_METHOD_CODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTime()
    {
        $this->assertEquals('time', VersionConstants::TYPE_NAME_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTime', VersionConstants::TYPE_CLASS_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRTimePrimitive()
    {
        $this->assertEquals('time-primitive', VersionConstants::TYPE_NAME_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRTimePrimitive', VersionConstants::TYPE_CLASS_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTiming()
    {
        $this->assertEquals('Timing', VersionConstants::TYPE_NAME_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming', VersionConstants::TYPE_CLASS_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTiming_FHIRTimingRepeat()
    {
        $this->assertEquals('Timing.Repeat', VersionConstants::TYPE_NAME_TIMING_DOT_REPEAT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTiming\FHIRTimingRepeat', VersionConstants::TYPE_CLASS_TIMING_DOT_REPEAT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTriggerDefinition()
    {
        $this->assertEquals('TriggerDefinition', VersionConstants::TYPE_NAME_TRIGGER_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerDefinition', VersionConstants::TYPE_CLASS_TRIGGER_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTriggerType()
    {
        $this->assertEquals('TriggerType', VersionConstants::TYPE_NAME_TRIGGER_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTriggerType', VersionConstants::TYPE_CLASS_TRIGGER_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRTriggerTypeList()
    {
        $this->assertEquals('TriggerType-list', VersionConstants::TYPE_NAME_TRIGGER_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTriggerTypeList', VersionConstants::TYPE_CLASS_TRIGGER_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTypeDerivationRule()
    {
        $this->assertEquals('TypeDerivationRule', VersionConstants::TYPE_NAME_TYPE_DERIVATION_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTypeDerivationRule', VersionConstants::TYPE_CLASS_TYPE_DERIVATION_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRTypeDerivationRuleList()
    {
        $this->assertEquals('TypeDerivationRule-list', VersionConstants::TYPE_NAME_TYPE_DERIVATION_RULE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTypeDerivationRuleList', VersionConstants::TYPE_CLASS_TYPE_DERIVATION_RULE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRTypeRestfulInteraction()
    {
        $this->assertEquals('TypeRestfulInteraction', VersionConstants::TYPE_NAME_TYPE_RESTFUL_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRTypeRestfulInteraction', VersionConstants::TYPE_CLASS_TYPE_RESTFUL_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRTypeRestfulInteractionList()
    {
        $this->assertEquals('TypeRestfulInteraction-list', VersionConstants::TYPE_NAME_TYPE_RESTFUL_INTERACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRTypeRestfulInteractionList', VersionConstants::TYPE_CLASS_TYPE_RESTFUL_INTERACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRUDIEntryType()
    {
        $this->assertEquals('UDIEntryType', VersionConstants::TYPE_NAME_UDIENTRY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUDIEntryType', VersionConstants::TYPE_CLASS_UDIENTRY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRUDIEntryTypeList()
    {
        $this->assertEquals('UDIEntryType-list', VersionConstants::TYPE_NAME_UDIENTRY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUDIEntryTypeList', VersionConstants::TYPE_CLASS_UDIENTRY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRUnitsOfTime()
    {
        $this->assertEquals('UnitsOfTime', VersionConstants::TYPE_NAME_UNITS_OF_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnitsOfTime', VersionConstants::TYPE_CLASS_UNITS_OF_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRUnitsOfTimeList()
    {
        $this->assertEquals('UnitsOfTime-list', VersionConstants::TYPE_NAME_UNITS_OF_TIME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUnitsOfTimeList', VersionConstants::TYPE_CLASS_UNITS_OF_TIME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRUnknownContentCode()
    {
        $this->assertEquals('UnknownContentCode', VersionConstants::TYPE_NAME_UNKNOWN_CONTENT_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnknownContentCode', VersionConstants::TYPE_CLASS_UNKNOWN_CONTENT_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRUnknownContentCodeList()
    {
        $this->assertEquals('UnknownContentCode-list', VersionConstants::TYPE_NAME_UNKNOWN_CONTENT_CODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUnknownContentCodeList', VersionConstants::TYPE_CLASS_UNKNOWN_CONTENT_CODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRUnsignedInt()
    {
        $this->assertEquals('unsignedInt', VersionConstants::TYPE_NAME_UNSIGNED_INT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUnsignedInt', VersionConstants::TYPE_CLASS_UNSIGNED_INT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRUnsignedIntPrimitive()
    {
        $this->assertEquals('unsignedInt-primitive', VersionConstants::TYPE_NAME_UNSIGNED_INT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUnsignedIntPrimitive', VersionConstants::TYPE_CLASS_UNSIGNED_INT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRUri()
    {
        $this->assertEquals('uri', VersionConstants::TYPE_NAME_URI);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri', VersionConstants::TYPE_CLASS_URI);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRUriPrimitive()
    {
        $this->assertEquals('uri-primitive', VersionConstants::TYPE_NAME_URI_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive', VersionConstants::TYPE_CLASS_URI_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRUsageContext()
    {
        $this->assertEquals('UsageContext', VersionConstants::TYPE_NAME_USAGE_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUsageContext', VersionConstants::TYPE_CLASS_USAGE_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRUse()
    {
        $this->assertEquals('Use', VersionConstants::TYPE_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUse', VersionConstants::TYPE_CLASS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRUseList()
    {
        $this->assertEquals('Use-list', VersionConstants::TYPE_NAME_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRUseList', VersionConstants::TYPE_CLASS_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRUuid()
    {
        $this->assertEquals('uuid', VersionConstants::TYPE_NAME_UUID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUuid', VersionConstants::TYPE_CLASS_UUID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRUuidPrimitive()
    {
        $this->assertEquals('uuid-primitive', VersionConstants::TYPE_NAME_UUID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUuidPrimitive', VersionConstants::TYPE_CLASS_UUID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRValueSet()
    {
        $this->assertEquals('ValueSet', VersionConstants::TYPE_NAME_VALUE_SET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRValueSet', VersionConstants::TYPE_CLASS_VALUE_SET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetCompose()
    {
        $this->assertEquals('ValueSet.Compose', VersionConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_COMPOSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetConcept()
    {
        $this->assertEquals('ValueSet.Concept', VersionConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetContains()
    {
        $this->assertEquals('ValueSet.Contains', VersionConstants::TYPE_NAME_VALUE_SET_DOT_CONTAINS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_CONTAINS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetDesignation()
    {
        $this->assertEquals('ValueSet.Designation', VersionConstants::TYPE_NAME_VALUE_SET_DOT_DESIGNATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_DESIGNATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetExpansion()
    {
        $this->assertEquals('ValueSet.Expansion', VersionConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_EXPANSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetFilter()
    {
        $this->assertEquals('ValueSet.Filter', VersionConstants::TYPE_NAME_VALUE_SET_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetInclude()
    {
        $this->assertEquals('ValueSet.Include', VersionConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_INCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetParameter()
    {
        $this->assertEquals('ValueSet.Parameter', VersionConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRVisionBase()
    {
        $this->assertEquals('VisionBase', VersionConstants::TYPE_NAME_VISION_BASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionBase', VersionConstants::TYPE_CLASS_VISION_BASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRVisionBaseList()
    {
        $this->assertEquals('VisionBase-list', VersionConstants::TYPE_NAME_VISION_BASE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRVisionBaseList', VersionConstants::TYPE_CLASS_VISION_BASE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRVisionEyes()
    {
        $this->assertEquals('VisionEyes', VersionConstants::TYPE_NAME_VISION_EYES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRVisionEyes', VersionConstants::TYPE_CLASS_VISION_EYES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRVisionEyesList()
    {
        $this->assertEquals('VisionEyes-list', VersionConstants::TYPE_NAME_VISION_EYES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRVisionEyesList', VersionConstants::TYPE_CLASS_VISION_EYES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRResource_FHIRDomainResource_FHIRVisionPrescription()
    {
        $this->assertEquals('VisionPrescription', VersionConstants::TYPE_NAME_VISION_PRESCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRVisionPrescription', VersionConstants::TYPE_CLASS_VISION_PRESCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRBackboneElement_FHIRVisionPrescription_FHIRVisionPrescriptionDispense()
    {
        $this->assertEquals('VisionPrescription.Dispense', VersionConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense', VersionConstants::TYPE_CLASS_VISION_PRESCRIPTION_DOT_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRXHTML()
    {
        $this->assertEquals('XHTML', VersionConstants::TYPE_NAME_XHTML);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRXHTML', VersionConstants::TYPE_CLASS_XHTML);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRElement_FHIRXPathUsageType()
    {
        $this->assertEquals('XPathUsageType', VersionConstants::TYPE_NAME_XPATH_USAGE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRXPathUsageType', VersionConstants::TYPE_CLASS_XPATH_USAGE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_STU3_Types_FHIRCodePrimitive_FHIRXPathUsageTypeList()
    {
        $this->assertEquals('XPathUsageType-list', VersionConstants::TYPE_NAME_XPATH_USAGE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive\FHIRXPathUsageTypeList', VersionConstants::TYPE_CLASS_XPATH_USAGE_TYPE_HYPHEN_LIST);
    }

}
