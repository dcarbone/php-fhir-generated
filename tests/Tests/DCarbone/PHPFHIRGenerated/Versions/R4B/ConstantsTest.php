<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Versions\R4B;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;
use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase
{
    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRAccount()
    {
        $this->assertEquals('Account', VersionConstants::TYPE_NAME_ACCOUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAccount', VersionConstants::TYPE_CLASS_ACCOUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAccount_FHIRAccountCoverage()
    {
        $this->assertEquals('Account.Coverage', VersionConstants::TYPE_NAME_ACCOUNT_DOT_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountCoverage', VersionConstants::TYPE_CLASS_ACCOUNT_DOT_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAccount_FHIRAccountGuarantor()
    {
        $this->assertEquals('Account.Guarantor', VersionConstants::TYPE_NAME_ACCOUNT_DOT_GUARANTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAccount\FHIRAccountGuarantor', VersionConstants::TYPE_CLASS_ACCOUNT_DOT_GUARANTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAccountStatus()
    {
        $this->assertEquals('AccountStatus', VersionConstants::TYPE_NAME_ACCOUNT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAccountStatus', VersionConstants::TYPE_CLASS_ACCOUNT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAccountStatusEnum()
    {
        $this->assertEquals('AccountStatusEnum', VersionConstants::TYPE_NAME_ACCOUNT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAccountStatusEnum', VersionConstants::TYPE_CLASS_ACCOUNT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRActionCardinalityBehavior()
    {
        $this->assertEquals('ActionCardinalityBehavior', VersionConstants::TYPE_NAME_ACTION_CARDINALITY_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionCardinalityBehavior', VersionConstants::TYPE_CLASS_ACTION_CARDINALITY_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRActionCardinalityBehaviorEnum()
    {
        $this->assertEquals('ActionCardinalityBehaviorEnum', VersionConstants::TYPE_NAME_ACTION_CARDINALITY_BEHAVIOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRActionCardinalityBehaviorEnum', VersionConstants::TYPE_CLASS_ACTION_CARDINALITY_BEHAVIOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRActionConditionKind()
    {
        $this->assertEquals('ActionConditionKind', VersionConstants::TYPE_NAME_ACTION_CONDITION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionConditionKind', VersionConstants::TYPE_CLASS_ACTION_CONDITION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRActionConditionKindEnum()
    {
        $this->assertEquals('ActionConditionKindEnum', VersionConstants::TYPE_NAME_ACTION_CONDITION_KIND_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRActionConditionKindEnum', VersionConstants::TYPE_CLASS_ACTION_CONDITION_KIND_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRActionGroupingBehavior()
    {
        $this->assertEquals('ActionGroupingBehavior', VersionConstants::TYPE_NAME_ACTION_GROUPING_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionGroupingBehavior', VersionConstants::TYPE_CLASS_ACTION_GROUPING_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRActionGroupingBehaviorEnum()
    {
        $this->assertEquals('ActionGroupingBehaviorEnum', VersionConstants::TYPE_NAME_ACTION_GROUPING_BEHAVIOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRActionGroupingBehaviorEnum', VersionConstants::TYPE_CLASS_ACTION_GROUPING_BEHAVIOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRActionParticipantType()
    {
        $this->assertEquals('ActionParticipantType', VersionConstants::TYPE_NAME_ACTION_PARTICIPANT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionParticipantType', VersionConstants::TYPE_CLASS_ACTION_PARTICIPANT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRActionParticipantTypeEnum()
    {
        $this->assertEquals('ActionParticipantTypeEnum', VersionConstants::TYPE_NAME_ACTION_PARTICIPANT_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRActionParticipantTypeEnum', VersionConstants::TYPE_CLASS_ACTION_PARTICIPANT_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRActionPrecheckBehavior()
    {
        $this->assertEquals('ActionPrecheckBehavior', VersionConstants::TYPE_NAME_ACTION_PRECHECK_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionPrecheckBehavior', VersionConstants::TYPE_CLASS_ACTION_PRECHECK_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRActionPrecheckBehaviorEnum()
    {
        $this->assertEquals('ActionPrecheckBehaviorEnum', VersionConstants::TYPE_NAME_ACTION_PRECHECK_BEHAVIOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRActionPrecheckBehaviorEnum', VersionConstants::TYPE_CLASS_ACTION_PRECHECK_BEHAVIOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRActionRelationshipType()
    {
        $this->assertEquals('ActionRelationshipType', VersionConstants::TYPE_NAME_ACTION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionRelationshipType', VersionConstants::TYPE_CLASS_ACTION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRActionRelationshipTypeEnum()
    {
        $this->assertEquals('ActionRelationshipTypeEnum', VersionConstants::TYPE_NAME_ACTION_RELATIONSHIP_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRActionRelationshipTypeEnum', VersionConstants::TYPE_CLASS_ACTION_RELATIONSHIP_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRActionRequiredBehavior()
    {
        $this->assertEquals('ActionRequiredBehavior', VersionConstants::TYPE_NAME_ACTION_REQUIRED_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionRequiredBehavior', VersionConstants::TYPE_CLASS_ACTION_REQUIRED_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRActionRequiredBehaviorEnum()
    {
        $this->assertEquals('ActionRequiredBehaviorEnum', VersionConstants::TYPE_NAME_ACTION_REQUIRED_BEHAVIOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRActionRequiredBehaviorEnum', VersionConstants::TYPE_CLASS_ACTION_REQUIRED_BEHAVIOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRActionSelectionBehavior()
    {
        $this->assertEquals('ActionSelectionBehavior', VersionConstants::TYPE_NAME_ACTION_SELECTION_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRActionSelectionBehavior', VersionConstants::TYPE_CLASS_ACTION_SELECTION_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRActionSelectionBehaviorEnum()
    {
        $this->assertEquals('ActionSelectionBehaviorEnum', VersionConstants::TYPE_NAME_ACTION_SELECTION_BEHAVIOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRActionSelectionBehaviorEnum', VersionConstants::TYPE_CLASS_ACTION_SELECTION_BEHAVIOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRActivityDefinition()
    {
        $this->assertEquals('ActivityDefinition', VersionConstants::TYPE_NAME_ACTIVITY_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRActivityDefinition', VersionConstants::TYPE_CLASS_ACTIVITY_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRActivityDefinition_FHIRActivityDefinitionDynamicValue()
    {
        $this->assertEquals('ActivityDefinition.DynamicValue', VersionConstants::TYPE_NAME_ACTIVITY_DEFINITION_DOT_DYNAMIC_VALUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionDynamicValue', VersionConstants::TYPE_CLASS_ACTIVITY_DEFINITION_DOT_DYNAMIC_VALUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRActivityDefinition_FHIRActivityDefinitionParticipant()
    {
        $this->assertEquals('ActivityDefinition.Participant', VersionConstants::TYPE_NAME_ACTIVITY_DEFINITION_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRActivityDefinition\FHIRActivityDefinitionParticipant', VersionConstants::TYPE_CLASS_ACTIVITY_DEFINITION_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAddress()
    {
        $this->assertEquals('Address', VersionConstants::TYPE_NAME_ADDRESS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddress', VersionConstants::TYPE_CLASS_ADDRESS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAddressType()
    {
        $this->assertEquals('AddressType', VersionConstants::TYPE_NAME_ADDRESS_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddressType', VersionConstants::TYPE_CLASS_ADDRESS_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAddressTypeEnum()
    {
        $this->assertEquals('AddressTypeEnum', VersionConstants::TYPE_NAME_ADDRESS_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAddressTypeEnum', VersionConstants::TYPE_CLASS_ADDRESS_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAddressUse()
    {
        $this->assertEquals('AddressUse', VersionConstants::TYPE_NAME_ADDRESS_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAddressUse', VersionConstants::TYPE_CLASS_ADDRESS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAddressUseEnum()
    {
        $this->assertEquals('AddressUseEnum', VersionConstants::TYPE_NAME_ADDRESS_USE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAddressUseEnum', VersionConstants::TYPE_CLASS_ADDRESS_USE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRAdministrableProductDefinition()
    {
        $this->assertEquals('AdministrableProductDefinition', VersionConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition', VersionConstants::TYPE_CLASS_ADMINISTRABLE_PRODUCT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAdministrableProductDefinition_FHIRAdministrableProductDefinitionProperty()
    {
        $this->assertEquals('AdministrableProductDefinition.Property', VersionConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_PROPERTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty', VersionConstants::TYPE_CLASS_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_PROPERTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAdministrableProductDefinition_FHIRAdministrableProductDefinitionRouteOfAdministration()
    {
        $this->assertEquals('AdministrableProductDefinition.RouteOfAdministration', VersionConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration', VersionConstants::TYPE_CLASS_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAdministrableProductDefinition_FHIRAdministrableProductDefinitionTargetSpecies()
    {
        $this->assertEquals('AdministrableProductDefinition.TargetSpecies', VersionConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_TARGET_SPECIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionTargetSpecies', VersionConstants::TYPE_CLASS_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_TARGET_SPECIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAdministrableProductDefinition_FHIRAdministrableProductDefinitionWithdrawalPeriod()
    {
        $this->assertEquals('AdministrableProductDefinition.WithdrawalPeriod', VersionConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_WITHDRAWAL_PERIOD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionWithdrawalPeriod', VersionConstants::TYPE_CLASS_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_WITHDRAWAL_PERIOD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAdministrativeGender()
    {
        $this->assertEquals('AdministrativeGender', VersionConstants::TYPE_NAME_ADMINISTRATIVE_GENDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAdministrativeGender', VersionConstants::TYPE_CLASS_ADMINISTRATIVE_GENDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAdministrativeGenderEnum()
    {
        $this->assertEquals('AdministrativeGenderEnum', VersionConstants::TYPE_NAME_ADMINISTRATIVE_GENDER_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAdministrativeGenderEnum', VersionConstants::TYPE_CLASS_ADMINISTRATIVE_GENDER_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRAdverseEvent()
    {
        $this->assertEquals('AdverseEvent', VersionConstants::TYPE_NAME_ADVERSE_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAdverseEvent', VersionConstants::TYPE_CLASS_ADVERSE_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAdverseEvent_FHIRAdverseEventCausality()
    {
        $this->assertEquals('AdverseEvent.Causality', VersionConstants::TYPE_NAME_ADVERSE_EVENT_DOT_CAUSALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventCausality', VersionConstants::TYPE_CLASS_ADVERSE_EVENT_DOT_CAUSALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAdverseEvent_FHIRAdverseEventSuspectEntity()
    {
        $this->assertEquals('AdverseEvent.SuspectEntity', VersionConstants::TYPE_NAME_ADVERSE_EVENT_DOT_SUSPECT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAdverseEvent\FHIRAdverseEventSuspectEntity', VersionConstants::TYPE_CLASS_ADVERSE_EVENT_DOT_SUSPECT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAdverseEventActuality()
    {
        $this->assertEquals('AdverseEventActuality', VersionConstants::TYPE_NAME_ADVERSE_EVENT_ACTUALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAdverseEventActuality', VersionConstants::TYPE_CLASS_ADVERSE_EVENT_ACTUALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAdverseEventActualityEnum()
    {
        $this->assertEquals('AdverseEventActualityEnum', VersionConstants::TYPE_NAME_ADVERSE_EVENT_ACTUALITY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAdverseEventActualityEnum', VersionConstants::TYPE_CLASS_ADVERSE_EVENT_ACTUALITY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQuantity_FHIRAge()
    {
        $this->assertEquals('Age', VersionConstants::TYPE_NAME_AGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRAge', VersionConstants::TYPE_CLASS_AGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAgeUnits()
    {
        $this->assertEquals('AgeUnits', VersionConstants::TYPE_NAME_AGE_UNITS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAgeUnits', VersionConstants::TYPE_CLASS_AGE_UNITS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAgeUnitsEnum()
    {
        $this->assertEquals('AgeUnitsEnum', VersionConstants::TYPE_NAME_AGE_UNITS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAgeUnitsEnum', VersionConstants::TYPE_CLASS_AGE_UNITS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAggregationMode()
    {
        $this->assertEquals('AggregationMode', VersionConstants::TYPE_NAME_AGGREGATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAggregationMode', VersionConstants::TYPE_CLASS_AGGREGATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAggregationModeEnum()
    {
        $this->assertEquals('AggregationModeEnum', VersionConstants::TYPE_NAME_AGGREGATION_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAggregationModeEnum', VersionConstants::TYPE_CLASS_AGGREGATION_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRAllergyIntolerance()
    {
        $this->assertEquals('AllergyIntolerance', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAllergyIntolerance_FHIRAllergyIntoleranceReaction()
    {
        $this->assertEquals('AllergyIntolerance.Reaction', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAllergyIntoleranceCategory()
    {
        $this->assertEquals('AllergyIntoleranceCategory', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCategory', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceCategoryEnum()
    {
        $this->assertEquals('AllergyIntoleranceCategoryEnum', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CATEGORY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceCategoryEnum', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CATEGORY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAllergyIntoleranceCriticality()
    {
        $this->assertEquals('AllergyIntoleranceCriticality', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CRITICALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceCriticality', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CRITICALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceCriticalityEnum()
    {
        $this->assertEquals('AllergyIntoleranceCriticalityEnum', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CRITICALITY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceCriticalityEnum', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CRITICALITY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAllergyIntoleranceSeverity()
    {
        $this->assertEquals('AllergyIntoleranceSeverity', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceSeverity', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceSeverityEnum()
    {
        $this->assertEquals('AllergyIntoleranceSeverityEnum', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_SEVERITY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceSeverityEnum', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_SEVERITY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAllergyIntoleranceType()
    {
        $this->assertEquals('AllergyIntoleranceType', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAllergyIntoleranceType', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAllergyIntoleranceTypeEnum()
    {
        $this->assertEquals('AllergyIntoleranceTypeEnum', VersionConstants::TYPE_NAME_ALLERGY_INTOLERANCE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAllergyIntoleranceTypeEnum', VersionConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAnnotation()
    {
        $this->assertEquals('Annotation', VersionConstants::TYPE_NAME_ANNOTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAnnotation', VersionConstants::TYPE_CLASS_ANNOTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRAppointment()
    {
        $this->assertEquals('Appointment', VersionConstants::TYPE_NAME_APPOINTMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAppointment', VersionConstants::TYPE_CLASS_APPOINTMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAppointment_FHIRAppointmentParticipant()
    {
        $this->assertEquals('Appointment.Participant', VersionConstants::TYPE_NAME_APPOINTMENT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant', VersionConstants::TYPE_CLASS_APPOINTMENT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRAppointmentResponse()
    {
        $this->assertEquals('AppointmentResponse', VersionConstants::TYPE_NAME_APPOINTMENT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse', VersionConstants::TYPE_CLASS_APPOINTMENT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAppointmentStatus()
    {
        $this->assertEquals('AppointmentStatus', VersionConstants::TYPE_NAME_APPOINTMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAppointmentStatus', VersionConstants::TYPE_CLASS_APPOINTMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAppointmentStatusEnum()
    {
        $this->assertEquals('AppointmentStatusEnum', VersionConstants::TYPE_NAME_APPOINTMENT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAppointmentStatusEnum', VersionConstants::TYPE_CLASS_APPOINTMENT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAssertionDirectionType()
    {
        $this->assertEquals('AssertionDirectionType', VersionConstants::TYPE_NAME_ASSERTION_DIRECTION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAssertionDirectionType', VersionConstants::TYPE_CLASS_ASSERTION_DIRECTION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAssertionDirectionTypeEnum()
    {
        $this->assertEquals('AssertionDirectionTypeEnum', VersionConstants::TYPE_NAME_ASSERTION_DIRECTION_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAssertionDirectionTypeEnum', VersionConstants::TYPE_CLASS_ASSERTION_DIRECTION_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAssertionOperatorType()
    {
        $this->assertEquals('AssertionOperatorType', VersionConstants::TYPE_NAME_ASSERTION_OPERATOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAssertionOperatorType', VersionConstants::TYPE_CLASS_ASSERTION_OPERATOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAssertionOperatorTypeEnum()
    {
        $this->assertEquals('AssertionOperatorTypeEnum', VersionConstants::TYPE_NAME_ASSERTION_OPERATOR_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAssertionOperatorTypeEnum', VersionConstants::TYPE_CLASS_ASSERTION_OPERATOR_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAssertionResponseTypes()
    {
        $this->assertEquals('AssertionResponseTypes', VersionConstants::TYPE_NAME_ASSERTION_RESPONSE_TYPES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAssertionResponseTypes', VersionConstants::TYPE_CLASS_ASSERTION_RESPONSE_TYPES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAssertionResponseTypesEnum()
    {
        $this->assertEquals('AssertionResponseTypesEnum', VersionConstants::TYPE_NAME_ASSERTION_RESPONSE_TYPES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAssertionResponseTypesEnum', VersionConstants::TYPE_CLASS_ASSERTION_RESPONSE_TYPES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAttachment()
    {
        $this->assertEquals('Attachment', VersionConstants::TYPE_NAME_ATTACHMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAttachment', VersionConstants::TYPE_CLASS_ATTACHMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRAuditEvent()
    {
        $this->assertEquals('AuditEvent', VersionConstants::TYPE_NAME_AUDIT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent', VersionConstants::TYPE_CLASS_AUDIT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventAgent()
    {
        $this->assertEquals('AuditEvent.Agent', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventDetail()
    {
        $this->assertEquals('AuditEvent.Detail', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventEntity()
    {
        $this->assertEquals('AuditEvent.Entity', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventNetwork()
    {
        $this->assertEquals('AuditEvent.Network', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_NETWORK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_NETWORK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventSource()
    {
        $this->assertEquals('AuditEvent.Source', VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource', VersionConstants::TYPE_CLASS_AUDIT_EVENT_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAuditEventAction()
    {
        $this->assertEquals('AuditEventAction', VersionConstants::TYPE_NAME_AUDIT_EVENT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAuditEventAction', VersionConstants::TYPE_CLASS_AUDIT_EVENT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAuditEventActionEnum()
    {
        $this->assertEquals('AuditEventActionEnum', VersionConstants::TYPE_NAME_AUDIT_EVENT_ACTION_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAuditEventActionEnum', VersionConstants::TYPE_CLASS_AUDIT_EVENT_ACTION_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAuditEventAgentNetworkType()
    {
        $this->assertEquals('AuditEventAgentNetworkType', VersionConstants::TYPE_NAME_AUDIT_EVENT_AGENT_NETWORK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAuditEventAgentNetworkType', VersionConstants::TYPE_CLASS_AUDIT_EVENT_AGENT_NETWORK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAuditEventAgentNetworkTypeEnum()
    {
        $this->assertEquals('AuditEventAgentNetworkTypeEnum', VersionConstants::TYPE_NAME_AUDIT_EVENT_AGENT_NETWORK_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAuditEventAgentNetworkTypeEnum', VersionConstants::TYPE_CLASS_AUDIT_EVENT_AGENT_NETWORK_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRAuditEventOutcome()
    {
        $this->assertEquals('AuditEventOutcome', VersionConstants::TYPE_NAME_AUDIT_EVENT_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRAuditEventOutcome', VersionConstants::TYPE_CLASS_AUDIT_EVENT_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRAuditEventOutcomeEnum()
    {
        $this->assertEquals('AuditEventOutcomeEnum', VersionConstants::TYPE_NAME_AUDIT_EVENT_OUTCOME_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRAuditEventOutcomeEnum', VersionConstants::TYPE_CLASS_AUDIT_EVENT_OUTCOME_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement()
    {
        $this->assertEquals('BackboneElement', VersionConstants::TYPE_NAME_BACKBONE_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement', VersionConstants::TYPE_CLASS_BACKBONE_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBase64Binary()
    {
        $this->assertEquals('base64Binary', VersionConstants::TYPE_NAME_BASE_64BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBase64Binary', VersionConstants::TYPE_CLASS_BASE_64BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRBase64BinaryPrimitive()
    {
        $this->assertEquals('base64Binary-primitive', VersionConstants::TYPE_NAME_BASE_64BINARY_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBase64BinaryPrimitive', VersionConstants::TYPE_CLASS_BASE_64BINARY_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRBasic()
    {
        $this->assertEquals('Basic', VersionConstants::TYPE_NAME_BASIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRBasic', VersionConstants::TYPE_CLASS_BASIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRBinary()
    {
        $this->assertEquals('Binary', VersionConstants::TYPE_NAME_BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRBinary', VersionConstants::TYPE_CLASS_BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBindingStrength()
    {
        $this->assertEquals('BindingStrength', VersionConstants::TYPE_NAME_BINDING_STRENGTH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBindingStrength', VersionConstants::TYPE_CLASS_BINDING_STRENGTH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRBindingStrengthEnum()
    {
        $this->assertEquals('BindingStrengthEnum', VersionConstants::TYPE_NAME_BINDING_STRENGTH_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRBindingStrengthEnum', VersionConstants::TYPE_CLASS_BINDING_STRENGTH_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRBiologicallyDerivedProduct()
    {
        $this->assertEquals('BiologicallyDerivedProduct', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRBiologicallyDerivedProduct', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRBiologicallyDerivedProduct_FHIRBiologicallyDerivedProductCollection()
    {
        $this->assertEquals('BiologicallyDerivedProduct.Collection', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_COLLECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductCollection', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_DOT_COLLECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRBiologicallyDerivedProduct_FHIRBiologicallyDerivedProductManipulation()
    {
        $this->assertEquals('BiologicallyDerivedProduct.Manipulation', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_MANIPULATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductManipulation', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_DOT_MANIPULATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRBiologicallyDerivedProduct_FHIRBiologicallyDerivedProductProcessing()
    {
        $this->assertEquals('BiologicallyDerivedProduct.Processing', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_PROCESSING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductProcessing', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_DOT_PROCESSING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRBiologicallyDerivedProduct_FHIRBiologicallyDerivedProductStorage()
    {
        $this->assertEquals('BiologicallyDerivedProduct.Storage', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRBiologicallyDerivedProduct\FHIRBiologicallyDerivedProductStorage', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_DOT_STORAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBiologicallyDerivedProductCategory()
    {
        $this->assertEquals('BiologicallyDerivedProductCategory', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBiologicallyDerivedProductCategory', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRBiologicallyDerivedProductCategoryEnum()
    {
        $this->assertEquals('BiologicallyDerivedProductCategoryEnum', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_CATEGORY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRBiologicallyDerivedProductCategoryEnum', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_CATEGORY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBiologicallyDerivedProductStatus()
    {
        $this->assertEquals('BiologicallyDerivedProductStatus', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBiologicallyDerivedProductStatus', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRBiologicallyDerivedProductStatusEnum()
    {
        $this->assertEquals('BiologicallyDerivedProductStatusEnum', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRBiologicallyDerivedProductStatusEnum', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBiologicallyDerivedProductStorageScale()
    {
        $this->assertEquals('BiologicallyDerivedProductStorageScale', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_STORAGE_SCALE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBiologicallyDerivedProductStorageScale', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_STORAGE_SCALE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRBiologicallyDerivedProductStorageScaleEnum()
    {
        $this->assertEquals('BiologicallyDerivedProductStorageScaleEnum', VersionConstants::TYPE_NAME_BIOLOGICALLY_DERIVED_PRODUCT_STORAGE_SCALE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRBiologicallyDerivedProductStorageScaleEnum', VersionConstants::TYPE_CLASS_BIOLOGICALLY_DERIVED_PRODUCT_STORAGE_SCALE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRBodyStructure()
    {
        $this->assertEquals('BodyStructure', VersionConstants::TYPE_NAME_BODY_STRUCTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRBodyStructure', VersionConstants::TYPE_CLASS_BODY_STRUCTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBoolean()
    {
        $this->assertEquals('boolean', VersionConstants::TYPE_NAME_BOOLEAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean', VersionConstants::TYPE_CLASS_BOOLEAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRBooleanPrimitive()
    {
        $this->assertEquals('boolean-primitive', VersionConstants::TYPE_NAME_BOOLEAN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive', VersionConstants::TYPE_CLASS_BOOLEAN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRBundle()
    {
        $this->assertEquals('Bundle', VersionConstants::TYPE_NAME_BUNDLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRBundle', VersionConstants::TYPE_CLASS_BUNDLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleEntry()
    {
        $this->assertEquals('Bundle.Entry', VersionConstants::TYPE_NAME_BUNDLE_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry', VersionConstants::TYPE_CLASS_BUNDLE_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleLink()
    {
        $this->assertEquals('Bundle.Link', VersionConstants::TYPE_NAME_BUNDLE_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink', VersionConstants::TYPE_CLASS_BUNDLE_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleRequest()
    {
        $this->assertEquals('Bundle.Request', VersionConstants::TYPE_NAME_BUNDLE_DOT_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest', VersionConstants::TYPE_CLASS_BUNDLE_DOT_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleResponse()
    {
        $this->assertEquals('Bundle.Response', VersionConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse', VersionConstants::TYPE_CLASS_BUNDLE_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleSearch()
    {
        $this->assertEquals('Bundle.Search', VersionConstants::TYPE_NAME_BUNDLE_DOT_SEARCH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch', VersionConstants::TYPE_CLASS_BUNDLE_DOT_SEARCH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBundleType()
    {
        $this->assertEquals('BundleType', VersionConstants::TYPE_NAME_BUNDLE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBundleType', VersionConstants::TYPE_CLASS_BUNDLE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRBundleTypeEnum()
    {
        $this->assertEquals('BundleTypeEnum', VersionConstants::TYPE_NAME_BUNDLE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRBundleTypeEnum', VersionConstants::TYPE_CLASS_BUNDLE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCanonical()
    {
        $this->assertEquals('canonical', VersionConstants::TYPE_NAME_CANONICAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCanonical', VersionConstants::TYPE_CLASS_CANONICAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCanonicalPrimitive()
    {
        $this->assertEquals('canonical-primitive', VersionConstants::TYPE_NAME_CANONICAL_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCanonicalPrimitive', VersionConstants::TYPE_CLASS_CANONICAL_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCapabilityStatement()
    {
        $this->assertEquals('CapabilityStatement', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCapabilityStatement', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementDocument()
    {
        $this->assertEquals('CapabilityStatement.Document', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_DOCUMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementDocument', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_DOCUMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementEndpoint()
    {
        $this->assertEquals('CapabilityStatement.Endpoint', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_ENDPOINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementEndpoint', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_ENDPOINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementImplementation()
    {
        $this->assertEquals('CapabilityStatement.Implementation', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_IMPLEMENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementImplementation', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_IMPLEMENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementInteraction()
    {
        $this->assertEquals('CapabilityStatement.Interaction', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementInteraction1()
    {
        $this->assertEquals('CapabilityStatement.Interaction1', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_INTERACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementInteraction1', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_INTERACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementMessaging()
    {
        $this->assertEquals('CapabilityStatement.Messaging', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_MESSAGING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementMessaging', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_MESSAGING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementOperation()
    {
        $this->assertEquals('CapabilityStatement.Operation', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementOperation', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementResource()
    {
        $this->assertEquals('CapabilityStatement.Resource', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementResource', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementRest()
    {
        $this->assertEquals('CapabilityStatement.Rest', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_REST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementRest', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_REST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSearchParam()
    {
        $this->assertEquals('CapabilityStatement.SearchParam', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SEARCH_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSearchParam', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SEARCH_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSecurity()
    {
        $this->assertEquals('CapabilityStatement.Security', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SECURITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSecurity', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SECURITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSoftware()
    {
        $this->assertEquals('CapabilityStatement.Software', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SOFTWARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSoftware', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SOFTWARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCapabilityStatement_FHIRCapabilityStatementSupportedMessage()
    {
        $this->assertEquals('CapabilityStatement.SupportedMessage', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_DOT_SUPPORTED_MESSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCapabilityStatement\FHIRCapabilityStatementSupportedMessage', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_DOT_SUPPORTED_MESSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCapabilityStatementKind()
    {
        $this->assertEquals('CapabilityStatementKind', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCapabilityStatementKind', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCapabilityStatementKindEnum()
    {
        $this->assertEquals('CapabilityStatementKindEnum', VersionConstants::TYPE_NAME_CAPABILITY_STATEMENT_KIND_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCapabilityStatementKindEnum', VersionConstants::TYPE_CLASS_CAPABILITY_STATEMENT_KIND_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCarePlan()
    {
        $this->assertEquals('CarePlan', VersionConstants::TYPE_NAME_CARE_PLAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCarePlan', VersionConstants::TYPE_CLASS_CARE_PLAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanActivity()
    {
        $this->assertEquals('CarePlan.Activity', VersionConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity', VersionConstants::TYPE_CLASS_CARE_PLAN_DOT_ACTIVITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanDetail()
    {
        $this->assertEquals('CarePlan.Detail', VersionConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail', VersionConstants::TYPE_CLASS_CARE_PLAN_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCarePlanActivityKind()
    {
        $this->assertEquals('CarePlanActivityKind', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCarePlanActivityKind', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCarePlanActivityKindEnum()
    {
        $this->assertEquals('CarePlanActivityKindEnum', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_KIND_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCarePlanActivityKindEnum', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_KIND_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCarePlanActivityStatus()
    {
        $this->assertEquals('CarePlanActivityStatus', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCarePlanActivityStatus', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCarePlanActivityStatusEnum()
    {
        $this->assertEquals('CarePlanActivityStatusEnum', VersionConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCarePlanActivityStatusEnum', VersionConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCarePlanIntent()
    {
        $this->assertEquals('CarePlanIntent', VersionConstants::TYPE_NAME_CARE_PLAN_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCarePlanIntent', VersionConstants::TYPE_CLASS_CARE_PLAN_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCarePlanIntentEnum()
    {
        $this->assertEquals('CarePlanIntentEnum', VersionConstants::TYPE_NAME_CARE_PLAN_INTENT_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCarePlanIntentEnum', VersionConstants::TYPE_CLASS_CARE_PLAN_INTENT_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCareTeam()
    {
        $this->assertEquals('CareTeam', VersionConstants::TYPE_NAME_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCareTeam', VersionConstants::TYPE_CLASS_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCareTeam_FHIRCareTeamParticipant()
    {
        $this->assertEquals('CareTeam.Participant', VersionConstants::TYPE_NAME_CARE_TEAM_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCareTeam\FHIRCareTeamParticipant', VersionConstants::TYPE_CLASS_CARE_TEAM_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCareTeamStatus()
    {
        $this->assertEquals('CareTeamStatus', VersionConstants::TYPE_NAME_CARE_TEAM_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCareTeamStatus', VersionConstants::TYPE_CLASS_CARE_TEAM_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCareTeamStatusEnum()
    {
        $this->assertEquals('CareTeamStatusEnum', VersionConstants::TYPE_NAME_CARE_TEAM_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCareTeamStatusEnum', VersionConstants::TYPE_CLASS_CARE_TEAM_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCatalogEntry()
    {
        $this->assertEquals('CatalogEntry', VersionConstants::TYPE_NAME_CATALOG_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCatalogEntry', VersionConstants::TYPE_CLASS_CATALOG_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCatalogEntry_FHIRCatalogEntryRelatedEntry()
    {
        $this->assertEquals('CatalogEntry.RelatedEntry', VersionConstants::TYPE_NAME_CATALOG_ENTRY_DOT_RELATED_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCatalogEntry\FHIRCatalogEntryRelatedEntry', VersionConstants::TYPE_CLASS_CATALOG_ENTRY_DOT_RELATED_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCatalogEntryRelationType()
    {
        $this->assertEquals('CatalogEntryRelationType', VersionConstants::TYPE_NAME_CATALOG_ENTRY_RELATION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCatalogEntryRelationType', VersionConstants::TYPE_CLASS_CATALOG_ENTRY_RELATION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCatalogEntryRelationTypeEnum()
    {
        $this->assertEquals('CatalogEntryRelationTypeEnum', VersionConstants::TYPE_NAME_CATALOG_ENTRY_RELATION_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCatalogEntryRelationTypeEnum', VersionConstants::TYPE_CLASS_CATALOG_ENTRY_RELATION_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCharacteristicCombination()
    {
        $this->assertEquals('CharacteristicCombination', VersionConstants::TYPE_NAME_CHARACTERISTIC_COMBINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCharacteristicCombination', VersionConstants::TYPE_CLASS_CHARACTERISTIC_COMBINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCharacteristicCombinationEnum()
    {
        $this->assertEquals('CharacteristicCombinationEnum', VersionConstants::TYPE_NAME_CHARACTERISTIC_COMBINATION_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCharacteristicCombinationEnum', VersionConstants::TYPE_CLASS_CHARACTERISTIC_COMBINATION_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRChargeItem()
    {
        $this->assertEquals('ChargeItem', VersionConstants::TYPE_NAME_CHARGE_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRChargeItem', VersionConstants::TYPE_CLASS_CHARGE_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRChargeItem_FHIRChargeItemPerformer()
    {
        $this->assertEquals('ChargeItem.Performer', VersionConstants::TYPE_NAME_CHARGE_ITEM_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRChargeItem\FHIRChargeItemPerformer', VersionConstants::TYPE_CLASS_CHARGE_ITEM_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRChargeItemDefinition()
    {
        $this->assertEquals('ChargeItemDefinition', VersionConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRChargeItemDefinition', VersionConstants::TYPE_CLASS_CHARGE_ITEM_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRChargeItemDefinition_FHIRChargeItemDefinitionApplicability()
    {
        $this->assertEquals('ChargeItemDefinition.Applicability', VersionConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION_DOT_APPLICABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionApplicability', VersionConstants::TYPE_CLASS_CHARGE_ITEM_DEFINITION_DOT_APPLICABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRChargeItemDefinition_FHIRChargeItemDefinitionPriceComponent()
    {
        $this->assertEquals('ChargeItemDefinition.PriceComponent', VersionConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION_DOT_PRICE_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPriceComponent', VersionConstants::TYPE_CLASS_CHARGE_ITEM_DEFINITION_DOT_PRICE_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRChargeItemDefinition_FHIRChargeItemDefinitionPropertyGroup()
    {
        $this->assertEquals('ChargeItemDefinition.PropertyGroup', VersionConstants::TYPE_NAME_CHARGE_ITEM_DEFINITION_DOT_PROPERTY_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRChargeItemDefinition\FHIRChargeItemDefinitionPropertyGroup', VersionConstants::TYPE_CLASS_CHARGE_ITEM_DEFINITION_DOT_PROPERTY_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRChargeItemStatus()
    {
        $this->assertEquals('ChargeItemStatus', VersionConstants::TYPE_NAME_CHARGE_ITEM_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRChargeItemStatus', VersionConstants::TYPE_CLASS_CHARGE_ITEM_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRChargeItemStatusEnum()
    {
        $this->assertEquals('ChargeItemStatusEnum', VersionConstants::TYPE_NAME_CHARGE_ITEM_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRChargeItemStatusEnum', VersionConstants::TYPE_CLASS_CHARGE_ITEM_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCitation()
    {
        $this->assertEquals('Citation', VersionConstants::TYPE_NAME_CITATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCitation', VersionConstants::TYPE_CLASS_CITATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationAbstract()
    {
        $this->assertEquals('Citation.Abstract', VersionConstants::TYPE_NAME_CITATION_DOT_ABSTRACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract', VersionConstants::TYPE_CLASS_CITATION_DOT_ABSTRACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationAffiliationInfo()
    {
        $this->assertEquals('Citation.AffiliationInfo', VersionConstants::TYPE_NAME_CITATION_DOT_AFFILIATION_INFO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo', VersionConstants::TYPE_CLASS_CITATION_DOT_AFFILIATION_INFO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationCitedArtifact()
    {
        $this->assertEquals('Citation.CitedArtifact', VersionConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact', VersionConstants::TYPE_CLASS_CITATION_DOT_CITED_ARTIFACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationClassification()
    {
        $this->assertEquals('Citation.Classification', VersionConstants::TYPE_NAME_CITATION_DOT_CLASSIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification', VersionConstants::TYPE_CLASS_CITATION_DOT_CLASSIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationClassification1()
    {
        $this->assertEquals('Citation.Classification1', VersionConstants::TYPE_NAME_CITATION_DOT_CLASSIFICATION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1', VersionConstants::TYPE_CLASS_CITATION_DOT_CLASSIFICATION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationContributionInstance()
    {
        $this->assertEquals('Citation.ContributionInstance', VersionConstants::TYPE_NAME_CITATION_DOT_CONTRIBUTION_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance', VersionConstants::TYPE_CLASS_CITATION_DOT_CONTRIBUTION_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationContributorship()
    {
        $this->assertEquals('Citation.Contributorship', VersionConstants::TYPE_NAME_CITATION_DOT_CONTRIBUTORSHIP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship', VersionConstants::TYPE_CLASS_CITATION_DOT_CONTRIBUTORSHIP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationDateOfPublication()
    {
        $this->assertEquals('Citation.DateOfPublication', VersionConstants::TYPE_NAME_CITATION_DOT_DATE_OF_PUBLICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication', VersionConstants::TYPE_CLASS_CITATION_DOT_DATE_OF_PUBLICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationEntry()
    {
        $this->assertEquals('Citation.Entry', VersionConstants::TYPE_NAME_CITATION_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry', VersionConstants::TYPE_CLASS_CITATION_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationPart()
    {
        $this->assertEquals('Citation.Part', VersionConstants::TYPE_NAME_CITATION_DOT_PART);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart', VersionConstants::TYPE_CLASS_CITATION_DOT_PART);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationPeriodicRelease()
    {
        $this->assertEquals('Citation.PeriodicRelease', VersionConstants::TYPE_NAME_CITATION_DOT_PERIODIC_RELEASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease', VersionConstants::TYPE_CLASS_CITATION_DOT_PERIODIC_RELEASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationPublicationForm()
    {
        $this->assertEquals('Citation.PublicationForm', VersionConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm', VersionConstants::TYPE_CLASS_CITATION_DOT_PUBLICATION_FORM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationPublishedIn()
    {
        $this->assertEquals('Citation.PublishedIn', VersionConstants::TYPE_NAME_CITATION_DOT_PUBLISHED_IN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn', VersionConstants::TYPE_CLASS_CITATION_DOT_PUBLISHED_IN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationRelatesTo()
    {
        $this->assertEquals('Citation.RelatesTo', VersionConstants::TYPE_NAME_CITATION_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo', VersionConstants::TYPE_CLASS_CITATION_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationRelatesTo1()
    {
        $this->assertEquals('Citation.RelatesTo1', VersionConstants::TYPE_NAME_CITATION_DOT_RELATES_TO_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1', VersionConstants::TYPE_CLASS_CITATION_DOT_RELATES_TO_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationStatusDate()
    {
        $this->assertEquals('Citation.StatusDate', VersionConstants::TYPE_NAME_CITATION_DOT_STATUS_DATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate', VersionConstants::TYPE_CLASS_CITATION_DOT_STATUS_DATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationStatusDate1()
    {
        $this->assertEquals('Citation.StatusDate1', VersionConstants::TYPE_NAME_CITATION_DOT_STATUS_DATE_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1', VersionConstants::TYPE_CLASS_CITATION_DOT_STATUS_DATE_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationSummary()
    {
        $this->assertEquals('Citation.Summary', VersionConstants::TYPE_NAME_CITATION_DOT_SUMMARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationSummary', VersionConstants::TYPE_CLASS_CITATION_DOT_SUMMARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationSummary1()
    {
        $this->assertEquals('Citation.Summary1', VersionConstants::TYPE_NAME_CITATION_DOT_SUMMARY_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationSummary1', VersionConstants::TYPE_CLASS_CITATION_DOT_SUMMARY_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationTitle()
    {
        $this->assertEquals('Citation.Title', VersionConstants::TYPE_NAME_CITATION_DOT_TITLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle', VersionConstants::TYPE_CLASS_CITATION_DOT_TITLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationVersion()
    {
        $this->assertEquals('Citation.Version', VersionConstants::TYPE_NAME_CITATION_DOT_VERSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion', VersionConstants::TYPE_CLASS_CITATION_DOT_VERSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationWebLocation()
    {
        $this->assertEquals('Citation.WebLocation', VersionConstants::TYPE_NAME_CITATION_DOT_WEB_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation', VersionConstants::TYPE_CLASS_CITATION_DOT_WEB_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCitation_FHIRCitationWhoClassified()
    {
        $this->assertEquals('Citation.WhoClassified', VersionConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified', VersionConstants::TYPE_CLASS_CITATION_DOT_WHO_CLASSIFIED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRClaim()
    {
        $this->assertEquals('Claim', VersionConstants::TYPE_NAME_CLAIM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRClaim', VersionConstants::TYPE_CLASS_CLAIM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimAccident()
    {
        $this->assertEquals('Claim.Accident', VersionConstants::TYPE_NAME_CLAIM_DOT_ACCIDENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimAccident', VersionConstants::TYPE_CLASS_CLAIM_DOT_ACCIDENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimCareTeam()
    {
        $this->assertEquals('Claim.CareTeam', VersionConstants::TYPE_NAME_CLAIM_DOT_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCareTeam', VersionConstants::TYPE_CLASS_CLAIM_DOT_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimDetail()
    {
        $this->assertEquals('Claim.Detail', VersionConstants::TYPE_NAME_CLAIM_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail', VersionConstants::TYPE_CLASS_CLAIM_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimDiagnosis()
    {
        $this->assertEquals('Claim.Diagnosis', VersionConstants::TYPE_NAME_CLAIM_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis', VersionConstants::TYPE_CLASS_CLAIM_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimInsurance()
    {
        $this->assertEquals('Claim.Insurance', VersionConstants::TYPE_NAME_CLAIM_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimInsurance', VersionConstants::TYPE_CLASS_CLAIM_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimItem()
    {
        $this->assertEquals('Claim.Item', VersionConstants::TYPE_NAME_CLAIM_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem', VersionConstants::TYPE_CLASS_CLAIM_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimPayee()
    {
        $this->assertEquals('Claim.Payee', VersionConstants::TYPE_NAME_CLAIM_DOT_PAYEE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee', VersionConstants::TYPE_CLASS_CLAIM_DOT_PAYEE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimProcedure()
    {
        $this->assertEquals('Claim.Procedure', VersionConstants::TYPE_NAME_CLAIM_DOT_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProcedure', VersionConstants::TYPE_CLASS_CLAIM_DOT_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimRelated()
    {
        $this->assertEquals('Claim.Related', VersionConstants::TYPE_NAME_CLAIM_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimRelated', VersionConstants::TYPE_CLASS_CLAIM_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimSubDetail()
    {
        $this->assertEquals('Claim.SubDetail', VersionConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail', VersionConstants::TYPE_CLASS_CLAIM_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimSupportingInfo()
    {
        $this->assertEquals('Claim.SupportingInfo', VersionConstants::TYPE_NAME_CLAIM_DOT_SUPPORTING_INFO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSupportingInfo', VersionConstants::TYPE_CLASS_CLAIM_DOT_SUPPORTING_INFO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRClaimResponse()
    {
        $this->assertEquals('ClaimResponse', VersionConstants::TYPE_NAME_CLAIM_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRClaimResponse', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAddItem()
    {
        $this->assertEquals('ClaimResponse.AddItem', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADD_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAdjudication()
    {
        $this->assertEquals('ClaimResponse.Adjudication', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADJUDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADJUDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseDetail()
    {
        $this->assertEquals('ClaimResponse.Detail', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseDetail1()
    {
        $this->assertEquals('ClaimResponse.Detail1', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_DETAIL_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseError()
    {
        $this->assertEquals('ClaimResponse.Error', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ERROR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseInsurance()
    {
        $this->assertEquals('ClaimResponse.Insurance', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseInsurance', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseItem()
    {
        $this->assertEquals('ClaimResponse.Item', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponsePayment()
    {
        $this->assertEquals('ClaimResponse.Payment', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_PAYMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponsePayment', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_PAYMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseProcessNote()
    {
        $this->assertEquals('ClaimResponse.ProcessNote', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseProcessNote', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseSubDetail()
    {
        $this->assertEquals('ClaimResponse.SubDetail', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseSubDetail1()
    {
        $this->assertEquals('ClaimResponse.SubDetail1', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_SUB_DETAIL_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail1', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_SUB_DETAIL_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseTotal()
    {
        $this->assertEquals('ClaimResponse.Total', VersionConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_TOTAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseTotal', VersionConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_TOTAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRClinicalImpression()
    {
        $this->assertEquals('ClinicalImpression', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRClinicalImpression', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalImpression_FHIRClinicalImpressionFinding()
    {
        $this->assertEquals('ClinicalImpression.Finding', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_FINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION_DOT_FINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalImpression_FHIRClinicalImpressionInvestigation()
    {
        $this->assertEquals('ClinicalImpression.Investigation', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_INVESTIGATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigation', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION_DOT_INVESTIGATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRClinicalImpressionStatus()
    {
        $this->assertEquals('ClinicalImpressionStatus', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRClinicalImpressionStatus', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRClinicalImpressionStatusEnum()
    {
        $this->assertEquals('ClinicalImpressionStatusEnum', VersionConstants::TYPE_NAME_CLINICAL_IMPRESSION_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRClinicalImpressionStatusEnum', VersionConstants::TYPE_CLASS_CLINICAL_IMPRESSION_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRClinicalUseDefinition()
    {
        $this->assertEquals('ClinicalUseDefinition', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRClinicalUseDefinition', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalUseDefinition_FHIRClinicalUseDefinitionContraindication()
    {
        $this->assertEquals('ClinicalUseDefinition.Contraindication', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_CONTRAINDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionContraindication', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION_DOT_CONTRAINDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalUseDefinition_FHIRClinicalUseDefinitionIndication()
    {
        $this->assertEquals('ClinicalUseDefinition.Indication', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION_DOT_INDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalUseDefinition_FHIRClinicalUseDefinitionInteractant()
    {
        $this->assertEquals('ClinicalUseDefinition.Interactant', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INTERACTANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteractant', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION_DOT_INTERACTANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalUseDefinition_FHIRClinicalUseDefinitionInteraction()
    {
        $this->assertEquals('ClinicalUseDefinition.Interaction', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionInteraction', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION_DOT_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalUseDefinition_FHIRClinicalUseDefinitionOtherTherapy()
    {
        $this->assertEquals('ClinicalUseDefinition.OtherTherapy', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_OTHER_THERAPY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION_DOT_OTHER_THERAPY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalUseDefinition_FHIRClinicalUseDefinitionUndesirableEffect()
    {
        $this->assertEquals('ClinicalUseDefinition.UndesirableEffect', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_UNDESIRABLE_EFFECT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionUndesirableEffect', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION_DOT_UNDESIRABLE_EFFECT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRClinicalUseDefinition_FHIRClinicalUseDefinitionWarning()
    {
        $this->assertEquals('ClinicalUseDefinition.Warning', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_WARNING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionWarning', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION_DOT_WARNING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRClinicalUseDefinitionType()
    {
        $this->assertEquals('ClinicalUseDefinitionType', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRClinicalUseDefinitionType', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRClinicalUseDefinitionTypeEnum()
    {
        $this->assertEquals('ClinicalUseDefinitionTypeEnum', VersionConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRClinicalUseDefinitionTypeEnum', VersionConstants::TYPE_CLASS_CLINICAL_USE_DEFINITION_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCode()
    {
        $this->assertEquals('code', VersionConstants::TYPE_NAME_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode', VersionConstants::TYPE_CLASS_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive()
    {
        $this->assertEquals('code-primitive', VersionConstants::TYPE_NAME_CODE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive', VersionConstants::TYPE_CLASS_CODE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCodeableConcept()
    {
        $this->assertEquals('CodeableConcept', VersionConstants::TYPE_NAME_CODEABLE_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableConcept', VersionConstants::TYPE_CLASS_CODEABLE_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCodeableReference()
    {
        $this->assertEquals('CodeableReference', VersionConstants::TYPE_NAME_CODEABLE_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeableReference', VersionConstants::TYPE_CLASS_CODEABLE_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCodeSearchSupport()
    {
        $this->assertEquals('CodeSearchSupport', VersionConstants::TYPE_NAME_CODE_SEARCH_SUPPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeSearchSupport', VersionConstants::TYPE_CLASS_CODE_SEARCH_SUPPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCodeSearchSupportEnum()
    {
        $this->assertEquals('CodeSearchSupportEnum', VersionConstants::TYPE_NAME_CODE_SEARCH_SUPPORT_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCodeSearchSupportEnum', VersionConstants::TYPE_CLASS_CODE_SEARCH_SUPPORT_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCodeSystem()
    {
        $this->assertEquals('CodeSystem', VersionConstants::TYPE_NAME_CODE_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCodeSystem', VersionConstants::TYPE_CLASS_CODE_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemConcept()
    {
        $this->assertEquals('CodeSystem.Concept', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemDesignation()
    {
        $this->assertEquals('CodeSystem.Designation', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_DESIGNATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemDesignation', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_DESIGNATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemFilter()
    {
        $this->assertEquals('CodeSystem.Filter', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemProperty()
    {
        $this->assertEquals('CodeSystem.Property', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_PROPERTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_PROPERTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCodeSystem_FHIRCodeSystemProperty1()
    {
        $this->assertEquals('CodeSystem.Property1', VersionConstants::TYPE_NAME_CODE_SYSTEM_DOT_PROPERTY_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty1', VersionConstants::TYPE_CLASS_CODE_SYSTEM_DOT_PROPERTY_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCodeSystemContentMode()
    {
        $this->assertEquals('CodeSystemContentMode', VersionConstants::TYPE_NAME_CODE_SYSTEM_CONTENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeSystemContentMode', VersionConstants::TYPE_CLASS_CODE_SYSTEM_CONTENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCodeSystemContentModeEnum()
    {
        $this->assertEquals('CodeSystemContentModeEnum', VersionConstants::TYPE_NAME_CODE_SYSTEM_CONTENT_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCodeSystemContentModeEnum', VersionConstants::TYPE_CLASS_CODE_SYSTEM_CONTENT_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCodeSystemHierarchyMeaning()
    {
        $this->assertEquals('CodeSystemHierarchyMeaning', VersionConstants::TYPE_NAME_CODE_SYSTEM_HIERARCHY_MEANING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCodeSystemHierarchyMeaning', VersionConstants::TYPE_CLASS_CODE_SYSTEM_HIERARCHY_MEANING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCodeSystemHierarchyMeaningEnum()
    {
        $this->assertEquals('CodeSystemHierarchyMeaningEnum', VersionConstants::TYPE_NAME_CODE_SYSTEM_HIERARCHY_MEANING_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCodeSystemHierarchyMeaningEnum', VersionConstants::TYPE_CLASS_CODE_SYSTEM_HIERARCHY_MEANING_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCoding()
    {
        $this->assertEquals('Coding', VersionConstants::TYPE_NAME_CODING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCoding', VersionConstants::TYPE_CLASS_CODING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCommunication()
    {
        $this->assertEquals('Communication', VersionConstants::TYPE_NAME_COMMUNICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCommunication', VersionConstants::TYPE_CLASS_COMMUNICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCommunication_FHIRCommunicationPayload()
    {
        $this->assertEquals('Communication.Payload', VersionConstants::TYPE_NAME_COMMUNICATION_DOT_PAYLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload', VersionConstants::TYPE_CLASS_COMMUNICATION_DOT_PAYLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCommunicationRequest()
    {
        $this->assertEquals('CommunicationRequest', VersionConstants::TYPE_NAME_COMMUNICATION_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest', VersionConstants::TYPE_CLASS_COMMUNICATION_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCommunicationRequest_FHIRCommunicationRequestPayload()
    {
        $this->assertEquals('CommunicationRequest.Payload', VersionConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_PAYLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload', VersionConstants::TYPE_CLASS_COMMUNICATION_REQUEST_DOT_PAYLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCompartmentDefinition()
    {
        $this->assertEquals('CompartmentDefinition', VersionConstants::TYPE_NAME_COMPARTMENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCompartmentDefinition', VersionConstants::TYPE_CLASS_COMPARTMENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCompartmentDefinition_FHIRCompartmentDefinitionResource()
    {
        $this->assertEquals('CompartmentDefinition.Resource', VersionConstants::TYPE_NAME_COMPARTMENT_DEFINITION_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCompartmentDefinition\FHIRCompartmentDefinitionResource', VersionConstants::TYPE_CLASS_COMPARTMENT_DEFINITION_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCompartmentType()
    {
        $this->assertEquals('CompartmentType', VersionConstants::TYPE_NAME_COMPARTMENT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCompartmentType', VersionConstants::TYPE_CLASS_COMPARTMENT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCompartmentTypeEnum()
    {
        $this->assertEquals('CompartmentTypeEnum', VersionConstants::TYPE_NAME_COMPARTMENT_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCompartmentTypeEnum', VersionConstants::TYPE_CLASS_COMPARTMENT_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRComposition()
    {
        $this->assertEquals('Composition', VersionConstants::TYPE_NAME_COMPOSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRComposition', VersionConstants::TYPE_CLASS_COMPOSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionAttester()
    {
        $this->assertEquals('Composition.Attester', VersionConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_ATTESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionEvent()
    {
        $this->assertEquals('Composition.Event', VersionConstants::TYPE_NAME_COMPOSITION_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionRelatesTo()
    {
        $this->assertEquals('Composition.RelatesTo', VersionConstants::TYPE_NAME_COMPOSITION_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionRelatesTo', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionSection()
    {
        $this->assertEquals('Composition.Section', VersionConstants::TYPE_NAME_COMPOSITION_DOT_SECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection', VersionConstants::TYPE_CLASS_COMPOSITION_DOT_SECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCompositionAttestationMode()
    {
        $this->assertEquals('CompositionAttestationMode', VersionConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCompositionAttestationMode', VersionConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCompositionAttestationModeEnum()
    {
        $this->assertEquals('CompositionAttestationModeEnum', VersionConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCompositionAttestationModeEnum', VersionConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCompositionStatus()
    {
        $this->assertEquals('CompositionStatus', VersionConstants::TYPE_NAME_COMPOSITION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCompositionStatus', VersionConstants::TYPE_CLASS_COMPOSITION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCompositionStatusEnum()
    {
        $this->assertEquals('CompositionStatusEnum', VersionConstants::TYPE_NAME_COMPOSITION_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCompositionStatusEnum', VersionConstants::TYPE_CLASS_COMPOSITION_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRConceptMap()
    {
        $this->assertEquals('ConceptMap', VersionConstants::TYPE_NAME_CONCEPT_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRConceptMap', VersionConstants::TYPE_CLASS_CONCEPT_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapDependsOn()
    {
        $this->assertEquals('ConceptMap.DependsOn', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_DEPENDS_ON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapElement()
    {
        $this->assertEquals('ConceptMap.Element', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapGroup()
    {
        $this->assertEquals('ConceptMap.Group', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapGroup', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapTarget()
    {
        $this->assertEquals('ConceptMap.Target', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapUnmapped()
    {
        $this->assertEquals('ConceptMap.Unmapped', VersionConstants::TYPE_NAME_CONCEPT_MAP_DOT_UNMAPPED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapUnmapped', VersionConstants::TYPE_CLASS_CONCEPT_MAP_DOT_UNMAPPED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRConceptMapEquivalence()
    {
        $this->assertEquals('ConceptMapEquivalence', VersionConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRConceptMapEquivalence', VersionConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRConceptMapEquivalenceEnum()
    {
        $this->assertEquals('ConceptMapEquivalenceEnum', VersionConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRConceptMapEquivalenceEnum', VersionConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRConceptMapGroupUnmappedMode()
    {
        $this->assertEquals('ConceptMapGroupUnmappedMode', VersionConstants::TYPE_NAME_CONCEPT_MAP_GROUP_UNMAPPED_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRConceptMapGroupUnmappedMode', VersionConstants::TYPE_CLASS_CONCEPT_MAP_GROUP_UNMAPPED_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRConceptMapGroupUnmappedModeEnum()
    {
        $this->assertEquals('ConceptMapGroupUnmappedModeEnum', VersionConstants::TYPE_NAME_CONCEPT_MAP_GROUP_UNMAPPED_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRConceptMapGroupUnmappedModeEnum', VersionConstants::TYPE_CLASS_CONCEPT_MAP_GROUP_UNMAPPED_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCondition()
    {
        $this->assertEquals('Condition', VersionConstants::TYPE_NAME_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCondition', VersionConstants::TYPE_CLASS_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionEvidence()
    {
        $this->assertEquals('Condition.Evidence', VersionConstants::TYPE_NAME_CONDITION_DOT_EVIDENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence', VersionConstants::TYPE_CLASS_CONDITION_DOT_EVIDENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionStage()
    {
        $this->assertEquals('Condition.Stage', VersionConstants::TYPE_NAME_CONDITION_DOT_STAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage', VersionConstants::TYPE_CLASS_CONDITION_DOT_STAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRConditionalDeleteStatus()
    {
        $this->assertEquals('ConditionalDeleteStatus', VersionConstants::TYPE_NAME_CONDITIONAL_DELETE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRConditionalDeleteStatus', VersionConstants::TYPE_CLASS_CONDITIONAL_DELETE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRConditionalDeleteStatusEnum()
    {
        $this->assertEquals('ConditionalDeleteStatusEnum', VersionConstants::TYPE_NAME_CONDITIONAL_DELETE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRConditionalDeleteStatusEnum', VersionConstants::TYPE_CLASS_CONDITIONAL_DELETE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRConditionalReadStatus()
    {
        $this->assertEquals('ConditionalReadStatus', VersionConstants::TYPE_NAME_CONDITIONAL_READ_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRConditionalReadStatus', VersionConstants::TYPE_CLASS_CONDITIONAL_READ_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRConditionalReadStatusEnum()
    {
        $this->assertEquals('ConditionalReadStatusEnum', VersionConstants::TYPE_NAME_CONDITIONAL_READ_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRConditionalReadStatusEnum', VersionConstants::TYPE_CLASS_CONDITIONAL_READ_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRConfidentiality()
    {
        $this->assertEquals('Confidentiality', VersionConstants::TYPE_NAME_CONFIDENTIALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRConfidentiality', VersionConstants::TYPE_CLASS_CONFIDENTIALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRConfidentialityEnum()
    {
        $this->assertEquals('ConfidentialityEnum', VersionConstants::TYPE_NAME_CONFIDENTIALITY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRConfidentialityEnum', VersionConstants::TYPE_CLASS_CONFIDENTIALITY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRConsent()
    {
        $this->assertEquals('Consent', VersionConstants::TYPE_NAME_CONSENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRConsent', VersionConstants::TYPE_CLASS_CONSENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentActor()
    {
        $this->assertEquals('Consent.Actor', VersionConstants::TYPE_NAME_CONSENT_DOT_ACTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentActor', VersionConstants::TYPE_CLASS_CONSENT_DOT_ACTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentData()
    {
        $this->assertEquals('Consent.Data', VersionConstants::TYPE_NAME_CONSENT_DOT_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentData', VersionConstants::TYPE_CLASS_CONSENT_DOT_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentPolicy()
    {
        $this->assertEquals('Consent.Policy', VersionConstants::TYPE_NAME_CONSENT_DOT_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentPolicy', VersionConstants::TYPE_CLASS_CONSENT_DOT_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentProvision()
    {
        $this->assertEquals('Consent.Provision', VersionConstants::TYPE_NAME_CONSENT_DOT_PROVISION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentProvision', VersionConstants::TYPE_CLASS_CONSENT_DOT_PROVISION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRConsent_FHIRConsentVerification()
    {
        $this->assertEquals('Consent.Verification', VersionConstants::TYPE_NAME_CONSENT_DOT_VERIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRConsent\FHIRConsentVerification', VersionConstants::TYPE_CLASS_CONSENT_DOT_VERIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRConsentDataMeaning()
    {
        $this->assertEquals('ConsentDataMeaning', VersionConstants::TYPE_NAME_CONSENT_DATA_MEANING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRConsentDataMeaning', VersionConstants::TYPE_CLASS_CONSENT_DATA_MEANING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRConsentDataMeaningEnum()
    {
        $this->assertEquals('ConsentDataMeaningEnum', VersionConstants::TYPE_NAME_CONSENT_DATA_MEANING_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRConsentDataMeaningEnum', VersionConstants::TYPE_CLASS_CONSENT_DATA_MEANING_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRConsentProvisionType()
    {
        $this->assertEquals('ConsentProvisionType', VersionConstants::TYPE_NAME_CONSENT_PROVISION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRConsentProvisionType', VersionConstants::TYPE_CLASS_CONSENT_PROVISION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRConsentProvisionTypeEnum()
    {
        $this->assertEquals('ConsentProvisionTypeEnum', VersionConstants::TYPE_NAME_CONSENT_PROVISION_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRConsentProvisionTypeEnum', VersionConstants::TYPE_CLASS_CONSENT_PROVISION_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRConsentState()
    {
        $this->assertEquals('ConsentState', VersionConstants::TYPE_NAME_CONSENT_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRConsentState', VersionConstants::TYPE_CLASS_CONSENT_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRConsentStateEnum()
    {
        $this->assertEquals('ConsentStateEnum', VersionConstants::TYPE_NAME_CONSENT_STATE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRConsentStateEnum', VersionConstants::TYPE_CLASS_CONSENT_STATE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRConstraintSeverity()
    {
        $this->assertEquals('ConstraintSeverity', VersionConstants::TYPE_NAME_CONSTRAINT_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRConstraintSeverity', VersionConstants::TYPE_CLASS_CONSTRAINT_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRConstraintSeverityEnum()
    {
        $this->assertEquals('ConstraintSeverityEnum', VersionConstants::TYPE_NAME_CONSTRAINT_SEVERITY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRConstraintSeverityEnum', VersionConstants::TYPE_CLASS_CONSTRAINT_SEVERITY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRContactDetail()
    {
        $this->assertEquals('ContactDetail', VersionConstants::TYPE_NAME_CONTACT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactDetail', VersionConstants::TYPE_CLASS_CONTACT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRContactPoint()
    {
        $this->assertEquals('ContactPoint', VersionConstants::TYPE_NAME_CONTACT_POINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPoint', VersionConstants::TYPE_CLASS_CONTACT_POINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRContactPointSystem()
    {
        $this->assertEquals('ContactPointSystem', VersionConstants::TYPE_NAME_CONTACT_POINT_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPointSystem', VersionConstants::TYPE_CLASS_CONTACT_POINT_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRContactPointSystemEnum()
    {
        $this->assertEquals('ContactPointSystemEnum', VersionConstants::TYPE_NAME_CONTACT_POINT_SYSTEM_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRContactPointSystemEnum', VersionConstants::TYPE_CLASS_CONTACT_POINT_SYSTEM_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRContactPointUse()
    {
        $this->assertEquals('ContactPointUse', VersionConstants::TYPE_NAME_CONTACT_POINT_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContactPointUse', VersionConstants::TYPE_CLASS_CONTACT_POINT_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRContactPointUseEnum()
    {
        $this->assertEquals('ContactPointUseEnum', VersionConstants::TYPE_NAME_CONTACT_POINT_USE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRContactPointUseEnum', VersionConstants::TYPE_CLASS_CONTACT_POINT_USE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRContract()
    {
        $this->assertEquals('Contract', VersionConstants::TYPE_NAME_CONTRACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRContract', VersionConstants::TYPE_CLASS_CONTRACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractAction()
    {
        $this->assertEquals('Contract.Action', VersionConstants::TYPE_NAME_CONTRACT_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAction', VersionConstants::TYPE_CLASS_CONTRACT_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractAnswer()
    {
        $this->assertEquals('Contract.Answer', VersionConstants::TYPE_NAME_CONTRACT_DOT_ANSWER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAnswer', VersionConstants::TYPE_CLASS_CONTRACT_DOT_ANSWER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractAsset()
    {
        $this->assertEquals('Contract.Asset', VersionConstants::TYPE_NAME_CONTRACT_DOT_ASSET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractAsset', VersionConstants::TYPE_CLASS_CONTRACT_DOT_ASSET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractContentDefinition()
    {
        $this->assertEquals('Contract.ContentDefinition', VersionConstants::TYPE_NAME_CONTRACT_DOT_CONTENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContentDefinition', VersionConstants::TYPE_CLASS_CONTRACT_DOT_CONTENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractContext()
    {
        $this->assertEquals('Contract.Context', VersionConstants::TYPE_NAME_CONTRACT_DOT_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractContext', VersionConstants::TYPE_CLASS_CONTRACT_DOT_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractFriendly()
    {
        $this->assertEquals('Contract.Friendly', VersionConstants::TYPE_NAME_CONTRACT_DOT_FRIENDLY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly', VersionConstants::TYPE_CLASS_CONTRACT_DOT_FRIENDLY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractLegal()
    {
        $this->assertEquals('Contract.Legal', VersionConstants::TYPE_NAME_CONTRACT_DOT_LEGAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal', VersionConstants::TYPE_CLASS_CONTRACT_DOT_LEGAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractOffer()
    {
        $this->assertEquals('Contract.Offer', VersionConstants::TYPE_NAME_CONTRACT_DOT_OFFER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractOffer', VersionConstants::TYPE_CLASS_CONTRACT_DOT_OFFER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractParty()
    {
        $this->assertEquals('Contract.Party', VersionConstants::TYPE_NAME_CONTRACT_DOT_PARTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractParty', VersionConstants::TYPE_CLASS_CONTRACT_DOT_PARTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractRule()
    {
        $this->assertEquals('Contract.Rule', VersionConstants::TYPE_NAME_CONTRACT_DOT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule', VersionConstants::TYPE_CLASS_CONTRACT_DOT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractSecurityLabel()
    {
        $this->assertEquals('Contract.SecurityLabel', VersionConstants::TYPE_NAME_CONTRACT_DOT_SECURITY_LABEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSecurityLabel', VersionConstants::TYPE_CLASS_CONTRACT_DOT_SECURITY_LABEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractSigner()
    {
        $this->assertEquals('Contract.Signer', VersionConstants::TYPE_NAME_CONTRACT_DOT_SIGNER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner', VersionConstants::TYPE_CLASS_CONTRACT_DOT_SIGNER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractSubject()
    {
        $this->assertEquals('Contract.Subject', VersionConstants::TYPE_NAME_CONTRACT_DOT_SUBJECT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSubject', VersionConstants::TYPE_CLASS_CONTRACT_DOT_SUBJECT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractTerm()
    {
        $this->assertEquals('Contract.Term', VersionConstants::TYPE_NAME_CONTRACT_DOT_TERM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm', VersionConstants::TYPE_CLASS_CONTRACT_DOT_TERM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractValuedItem()
    {
        $this->assertEquals('Contract.ValuedItem', VersionConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem', VersionConstants::TYPE_CLASS_CONTRACT_DOT_VALUED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRContractResourcePublicationStatusCodes()
    {
        $this->assertEquals('ContractResourcePublicationStatusCodes', VersionConstants::TYPE_NAME_CONTRACT_RESOURCE_PUBLICATION_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContractResourcePublicationStatusCodes', VersionConstants::TYPE_CLASS_CONTRACT_RESOURCE_PUBLICATION_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRContractResourcePublicationStatusCodesEnum()
    {
        $this->assertEquals('ContractResourcePublicationStatusCodesEnum', VersionConstants::TYPE_NAME_CONTRACT_RESOURCE_PUBLICATION_STATUS_CODES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRContractResourcePublicationStatusCodesEnum', VersionConstants::TYPE_CLASS_CONTRACT_RESOURCE_PUBLICATION_STATUS_CODES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRContractResourceStatusCodes()
    {
        $this->assertEquals('ContractResourceStatusCodes', VersionConstants::TYPE_NAME_CONTRACT_RESOURCE_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContractResourceStatusCodes', VersionConstants::TYPE_CLASS_CONTRACT_RESOURCE_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRContractResourceStatusCodesEnum()
    {
        $this->assertEquals('ContractResourceStatusCodesEnum', VersionConstants::TYPE_NAME_CONTRACT_RESOURCE_STATUS_CODES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRContractResourceStatusCodesEnum', VersionConstants::TYPE_CLASS_CONTRACT_RESOURCE_STATUS_CODES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRContributor()
    {
        $this->assertEquals('Contributor', VersionConstants::TYPE_NAME_CONTRIBUTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContributor', VersionConstants::TYPE_CLASS_CONTRIBUTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRContributorType()
    {
        $this->assertEquals('ContributorType', VersionConstants::TYPE_NAME_CONTRIBUTOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRContributorType', VersionConstants::TYPE_CLASS_CONTRIBUTOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRContributorTypeEnum()
    {
        $this->assertEquals('ContributorTypeEnum', VersionConstants::TYPE_NAME_CONTRIBUTOR_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRContributorTypeEnum', VersionConstants::TYPE_CLASS_CONTRIBUTOR_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQuantity_FHIRCount()
    {
        $this->assertEquals('Count', VersionConstants::TYPE_NAME_COUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRCount', VersionConstants::TYPE_CLASS_COUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCoverage()
    {
        $this->assertEquals('Coverage', VersionConstants::TYPE_NAME_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCoverage', VersionConstants::TYPE_CLASS_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverage_FHIRCoverageClass()
    {
        $this->assertEquals('Coverage.Class', VersionConstants::TYPE_NAME_COVERAGE_DOT_CLASS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageClass', VersionConstants::TYPE_CLASS_COVERAGE_DOT_CLASS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverage_FHIRCoverageCostToBeneficiary()
    {
        $this->assertEquals('Coverage.CostToBeneficiary', VersionConstants::TYPE_NAME_COVERAGE_DOT_COST_TO_BENEFICIARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageCostToBeneficiary', VersionConstants::TYPE_CLASS_COVERAGE_DOT_COST_TO_BENEFICIARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverage_FHIRCoverageException()
    {
        $this->assertEquals('Coverage.Exception', VersionConstants::TYPE_NAME_COVERAGE_DOT_EXCEPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageException', VersionConstants::TYPE_CLASS_COVERAGE_DOT_EXCEPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCoverageEligibilityRequest()
    {
        $this->assertEquals('CoverageEligibilityRequest', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityRequest', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverageEligibilityRequest_FHIRCoverageEligibilityRequestDiagnosis()
    {
        $this->assertEquals('CoverageEligibilityRequest.Diagnosis', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestDiagnosis', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_REQUEST_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverageEligibilityRequest_FHIRCoverageEligibilityRequestInsurance()
    {
        $this->assertEquals('CoverageEligibilityRequest.Insurance', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestInsurance', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_REQUEST_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverageEligibilityRequest_FHIRCoverageEligibilityRequestItem()
    {
        $this->assertEquals('CoverageEligibilityRequest.Item', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestItem', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_REQUEST_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverageEligibilityRequest_FHIRCoverageEligibilityRequestSupportingInfo()
    {
        $this->assertEquals('CoverageEligibilityRequest.SupportingInfo', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_REQUEST_DOT_SUPPORTING_INFO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityRequest\FHIRCoverageEligibilityRequestSupportingInfo', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_REQUEST_DOT_SUPPORTING_INFO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRCoverageEligibilityResponse()
    {
        $this->assertEquals('CoverageEligibilityResponse', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRCoverageEligibilityResponse', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverageEligibilityResponse_FHIRCoverageEligibilityResponseBenefit()
    {
        $this->assertEquals('CoverageEligibilityResponse.Benefit', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_BENEFIT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseBenefit', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_RESPONSE_DOT_BENEFIT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverageEligibilityResponse_FHIRCoverageEligibilityResponseError()
    {
        $this->assertEquals('CoverageEligibilityResponse.Error', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ERROR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseError', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ERROR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverageEligibilityResponse_FHIRCoverageEligibilityResponseInsurance()
    {
        $this->assertEquals('CoverageEligibilityResponse.Insurance', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseInsurance', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_RESPONSE_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRCoverageEligibilityResponse_FHIRCoverageEligibilityResponseItem()
    {
        $this->assertEquals('CoverageEligibilityResponse.Item', VersionConstants::TYPE_NAME_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRCoverageEligibilityResponse\FHIRCoverageEligibilityResponseItem', VersionConstants::TYPE_CLASS_COVERAGE_ELIGIBILITY_RESPONSE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRCriteriaNotExistsBehavior()
    {
        $this->assertEquals('CriteriaNotExistsBehavior', VersionConstants::TYPE_NAME_CRITERIA_NOT_EXISTS_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior', VersionConstants::TYPE_CLASS_CRITERIA_NOT_EXISTS_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRCriteriaNotExistsBehaviorEnum()
    {
        $this->assertEquals('CriteriaNotExistsBehaviorEnum', VersionConstants::TYPE_NAME_CRITERIA_NOT_EXISTS_BEHAVIOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRCriteriaNotExistsBehaviorEnum', VersionConstants::TYPE_CLASS_CRITERIA_NOT_EXISTS_BEHAVIOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDataRequirement()
    {
        $this->assertEquals('DataRequirement', VersionConstants::TYPE_NAME_DATA_REQUIREMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement', VersionConstants::TYPE_CLASS_DATA_REQUIREMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDataRequirement_FHIRDataRequirementCodeFilter()
    {
        $this->assertEquals('DataRequirement.CodeFilter', VersionConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_CODE_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementCodeFilter', VersionConstants::TYPE_CLASS_DATA_REQUIREMENT_DOT_CODE_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDataRequirement_FHIRDataRequirementDateFilter()
    {
        $this->assertEquals('DataRequirement.DateFilter', VersionConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_DATE_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementDateFilter', VersionConstants::TYPE_CLASS_DATA_REQUIREMENT_DOT_DATE_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDataRequirement_FHIRDataRequirementSort()
    {
        $this->assertEquals('DataRequirement.Sort', VersionConstants::TYPE_NAME_DATA_REQUIREMENT_DOT_SORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDataRequirement\FHIRDataRequirementSort', VersionConstants::TYPE_CLASS_DATA_REQUIREMENT_DOT_SORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDate()
    {
        $this->assertEquals('date', VersionConstants::TYPE_NAME_DATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDate', VersionConstants::TYPE_CLASS_DATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRDatePrimitive()
    {
        $this->assertEquals('date-primitive', VersionConstants::TYPE_NAME_DATE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDatePrimitive', VersionConstants::TYPE_CLASS_DATE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDateTime()
    {
        $this->assertEquals('dateTime', VersionConstants::TYPE_NAME_DATE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDateTime', VersionConstants::TYPE_CLASS_DATE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRDateTimePrimitive()
    {
        $this->assertEquals('dateTime-primitive', VersionConstants::TYPE_NAME_DATE_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDateTimePrimitive', VersionConstants::TYPE_CLASS_DATE_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDaysOfWeek()
    {
        $this->assertEquals('DaysOfWeek', VersionConstants::TYPE_NAME_DAYS_OF_WEEK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDaysOfWeek', VersionConstants::TYPE_CLASS_DAYS_OF_WEEK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDaysOfWeekEnum()
    {
        $this->assertEquals('DaysOfWeekEnum', VersionConstants::TYPE_NAME_DAYS_OF_WEEK_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDaysOfWeekEnum', VersionConstants::TYPE_CLASS_DAYS_OF_WEEK_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDecimal()
    {
        $this->assertEquals('decimal', VersionConstants::TYPE_NAME_DECIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDecimal', VersionConstants::TYPE_CLASS_DECIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRDecimalPrimitive()
    {
        $this->assertEquals('decimal-primitive', VersionConstants::TYPE_NAME_DECIMAL_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRDecimalPrimitive', VersionConstants::TYPE_CLASS_DECIMAL_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDefinitionResourceType()
    {
        $this->assertEquals('DefinitionResourceType', VersionConstants::TYPE_NAME_DEFINITION_RESOURCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDefinitionResourceType', VersionConstants::TYPE_CLASS_DEFINITION_RESOURCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDefinitionResourceTypeEnum()
    {
        $this->assertEquals('DefinitionResourceTypeEnum', VersionConstants::TYPE_NAME_DEFINITION_RESOURCE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDefinitionResourceTypeEnum', VersionConstants::TYPE_CLASS_DEFINITION_RESOURCE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRDetectedIssue()
    {
        $this->assertEquals('DetectedIssue', VersionConstants::TYPE_NAME_DETECTED_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRDetectedIssue', VersionConstants::TYPE_CLASS_DETECTED_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDetectedIssue_FHIRDetectedIssueEvidence()
    {
        $this->assertEquals('DetectedIssue.Evidence', VersionConstants::TYPE_NAME_DETECTED_ISSUE_DOT_EVIDENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueEvidence', VersionConstants::TYPE_CLASS_DETECTED_ISSUE_DOT_EVIDENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDetectedIssue_FHIRDetectedIssueMitigation()
    {
        $this->assertEquals('DetectedIssue.Mitigation', VersionConstants::TYPE_NAME_DETECTED_ISSUE_DOT_MITIGATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation', VersionConstants::TYPE_CLASS_DETECTED_ISSUE_DOT_MITIGATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDetectedIssueSeverity()
    {
        $this->assertEquals('DetectedIssueSeverity', VersionConstants::TYPE_NAME_DETECTED_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDetectedIssueSeverity', VersionConstants::TYPE_CLASS_DETECTED_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDetectedIssueSeverityEnum()
    {
        $this->assertEquals('DetectedIssueSeverityEnum', VersionConstants::TYPE_NAME_DETECTED_ISSUE_SEVERITY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDetectedIssueSeverityEnum', VersionConstants::TYPE_CLASS_DETECTED_ISSUE_SEVERITY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRDevice()
    {
        $this->assertEquals('Device', VersionConstants::TYPE_NAME_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRDevice', VersionConstants::TYPE_CLASS_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDevice_FHIRDeviceDeviceName()
    {
        $this->assertEquals('Device.DeviceName', VersionConstants::TYPE_NAME_DEVICE_DOT_DEVICE_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceDeviceName', VersionConstants::TYPE_CLASS_DEVICE_DOT_DEVICE_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDevice_FHIRDeviceProperty()
    {
        $this->assertEquals('Device.Property', VersionConstants::TYPE_NAME_DEVICE_DOT_PROPERTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceProperty', VersionConstants::TYPE_CLASS_DEVICE_DOT_PROPERTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDevice_FHIRDeviceSpecialization()
    {
        $this->assertEquals('Device.Specialization', VersionConstants::TYPE_NAME_DEVICE_DOT_SPECIALIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceSpecialization', VersionConstants::TYPE_CLASS_DEVICE_DOT_SPECIALIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDevice_FHIRDeviceUdiCarrier()
    {
        $this->assertEquals('Device.UdiCarrier', VersionConstants::TYPE_NAME_DEVICE_DOT_UDI_CARRIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceUdiCarrier', VersionConstants::TYPE_CLASS_DEVICE_DOT_UDI_CARRIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDevice_FHIRDeviceVersion()
    {
        $this->assertEquals('Device.Version', VersionConstants::TYPE_NAME_DEVICE_DOT_VERSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDevice\FHIRDeviceVersion', VersionConstants::TYPE_CLASS_DEVICE_DOT_VERSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRDeviceDefinition()
    {
        $this->assertEquals('DeviceDefinition', VersionConstants::TYPE_NAME_DEVICE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRDeviceDefinition', VersionConstants::TYPE_CLASS_DEVICE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceDefinition_FHIRDeviceDefinitionCapability()
    {
        $this->assertEquals('DeviceDefinition.Capability', VersionConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_CAPABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionCapability', VersionConstants::TYPE_CLASS_DEVICE_DEFINITION_DOT_CAPABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceDefinition_FHIRDeviceDefinitionDeviceName()
    {
        $this->assertEquals('DeviceDefinition.DeviceName', VersionConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_DEVICE_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionDeviceName', VersionConstants::TYPE_CLASS_DEVICE_DEFINITION_DOT_DEVICE_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceDefinition_FHIRDeviceDefinitionMaterial()
    {
        $this->assertEquals('DeviceDefinition.Material', VersionConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_MATERIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionMaterial', VersionConstants::TYPE_CLASS_DEVICE_DEFINITION_DOT_MATERIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceDefinition_FHIRDeviceDefinitionProperty()
    {
        $this->assertEquals('DeviceDefinition.Property', VersionConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_PROPERTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionProperty', VersionConstants::TYPE_CLASS_DEVICE_DEFINITION_DOT_PROPERTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceDefinition_FHIRDeviceDefinitionSpecialization()
    {
        $this->assertEquals('DeviceDefinition.Specialization', VersionConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_SPECIALIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionSpecialization', VersionConstants::TYPE_CLASS_DEVICE_DEFINITION_DOT_SPECIALIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceDefinition_FHIRDeviceDefinitionUdiDeviceIdentifier()
    {
        $this->assertEquals('DeviceDefinition.UdiDeviceIdentifier', VersionConstants::TYPE_NAME_DEVICE_DEFINITION_DOT_UDI_DEVICE_IDENTIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceDefinition\FHIRDeviceDefinitionUdiDeviceIdentifier', VersionConstants::TYPE_CLASS_DEVICE_DEFINITION_DOT_UDI_DEVICE_IDENTIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRDeviceMetric()
    {
        $this->assertEquals('DeviceMetric', VersionConstants::TYPE_NAME_DEVICE_METRIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRDeviceMetric', VersionConstants::TYPE_CLASS_DEVICE_METRIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceMetric_FHIRDeviceMetricCalibration()
    {
        $this->assertEquals('DeviceMetric.Calibration', VersionConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration', VersionConstants::TYPE_CLASS_DEVICE_METRIC_DOT_CALIBRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDeviceMetricCalibrationState()
    {
        $this->assertEquals('DeviceMetricCalibrationState', VersionConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDeviceMetricCalibrationState', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDeviceMetricCalibrationStateEnum()
    {
        $this->assertEquals('DeviceMetricCalibrationStateEnum', VersionConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_STATE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDeviceMetricCalibrationStateEnum', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_STATE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDeviceMetricCalibrationType()
    {
        $this->assertEquals('DeviceMetricCalibrationType', VersionConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDeviceMetricCalibrationType', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDeviceMetricCalibrationTypeEnum()
    {
        $this->assertEquals('DeviceMetricCalibrationTypeEnum', VersionConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDeviceMetricCalibrationTypeEnum', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDeviceMetricCategory()
    {
        $this->assertEquals('DeviceMetricCategory', VersionConstants::TYPE_NAME_DEVICE_METRIC_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDeviceMetricCategory', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDeviceMetricCategoryEnum()
    {
        $this->assertEquals('DeviceMetricCategoryEnum', VersionConstants::TYPE_NAME_DEVICE_METRIC_CATEGORY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDeviceMetricCategoryEnum', VersionConstants::TYPE_CLASS_DEVICE_METRIC_CATEGORY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDeviceMetricColor()
    {
        $this->assertEquals('DeviceMetricColor', VersionConstants::TYPE_NAME_DEVICE_METRIC_COLOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDeviceMetricColor', VersionConstants::TYPE_CLASS_DEVICE_METRIC_COLOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDeviceMetricColorEnum()
    {
        $this->assertEquals('DeviceMetricColorEnum', VersionConstants::TYPE_NAME_DEVICE_METRIC_COLOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDeviceMetricColorEnum', VersionConstants::TYPE_CLASS_DEVICE_METRIC_COLOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDeviceMetricOperationalStatus()
    {
        $this->assertEquals('DeviceMetricOperationalStatus', VersionConstants::TYPE_NAME_DEVICE_METRIC_OPERATIONAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDeviceMetricOperationalStatus', VersionConstants::TYPE_CLASS_DEVICE_METRIC_OPERATIONAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDeviceMetricOperationalStatusEnum()
    {
        $this->assertEquals('DeviceMetricOperationalStatusEnum', VersionConstants::TYPE_NAME_DEVICE_METRIC_OPERATIONAL_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDeviceMetricOperationalStatusEnum', VersionConstants::TYPE_CLASS_DEVICE_METRIC_OPERATIONAL_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDeviceNameType()
    {
        $this->assertEquals('DeviceNameType', VersionConstants::TYPE_NAME_DEVICE_NAME_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDeviceNameType', VersionConstants::TYPE_CLASS_DEVICE_NAME_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDeviceNameTypeEnum()
    {
        $this->assertEquals('DeviceNameTypeEnum', VersionConstants::TYPE_NAME_DEVICE_NAME_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDeviceNameTypeEnum', VersionConstants::TYPE_CLASS_DEVICE_NAME_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRDeviceRequest()
    {
        $this->assertEquals('DeviceRequest', VersionConstants::TYPE_NAME_DEVICE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRDeviceRequest', VersionConstants::TYPE_CLASS_DEVICE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDeviceRequest_FHIRDeviceRequestParameter()
    {
        $this->assertEquals('DeviceRequest.Parameter', VersionConstants::TYPE_NAME_DEVICE_REQUEST_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDeviceRequest\FHIRDeviceRequestParameter', VersionConstants::TYPE_CLASS_DEVICE_REQUEST_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRDeviceUseStatement()
    {
        $this->assertEquals('DeviceUseStatement', VersionConstants::TYPE_NAME_DEVICE_USE_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement', VersionConstants::TYPE_CLASS_DEVICE_USE_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDeviceUseStatementStatus()
    {
        $this->assertEquals('DeviceUseStatementStatus', VersionConstants::TYPE_NAME_DEVICE_USE_STATEMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDeviceUseStatementStatus', VersionConstants::TYPE_CLASS_DEVICE_USE_STATEMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDeviceUseStatementStatusEnum()
    {
        $this->assertEquals('DeviceUseStatementStatusEnum', VersionConstants::TYPE_NAME_DEVICE_USE_STATEMENT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDeviceUseStatementStatusEnum', VersionConstants::TYPE_CLASS_DEVICE_USE_STATEMENT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRDiagnosticReport()
    {
        $this->assertEquals('DiagnosticReport', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDiagnosticReport_FHIRDiagnosticReportMedia()
    {
        $this->assertEquals('DiagnosticReport.Media', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_DOT_MEDIA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportMedia', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_DOT_MEDIA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDiagnosticReportStatus()
    {
        $this->assertEquals('DiagnosticReportStatus', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDiagnosticReportStatus', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDiagnosticReportStatusEnum()
    {
        $this->assertEquals('DiagnosticReportStatusEnum', VersionConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDiagnosticReportStatusEnum', VersionConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDiscriminatorType()
    {
        $this->assertEquals('DiscriminatorType', VersionConstants::TYPE_NAME_DISCRIMINATOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDiscriminatorType', VersionConstants::TYPE_CLASS_DISCRIMINATOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDiscriminatorTypeEnum()
    {
        $this->assertEquals('DiscriminatorTypeEnum', VersionConstants::TYPE_NAME_DISCRIMINATOR_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDiscriminatorTypeEnum', VersionConstants::TYPE_CLASS_DISCRIMINATOR_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQuantity_FHIRDistance()
    {
        $this->assertEquals('Distance', VersionConstants::TYPE_NAME_DISTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDistance', VersionConstants::TYPE_CLASS_DISTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRDocumentManifest()
    {
        $this->assertEquals('DocumentManifest', VersionConstants::TYPE_NAME_DOCUMENT_MANIFEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRDocumentManifest', VersionConstants::TYPE_CLASS_DOCUMENT_MANIFEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentManifest_FHIRDocumentManifestRelated()
    {
        $this->assertEquals('DocumentManifest.Related', VersionConstants::TYPE_NAME_DOCUMENT_MANIFEST_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated', VersionConstants::TYPE_CLASS_DOCUMENT_MANIFEST_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDocumentMode()
    {
        $this->assertEquals('DocumentMode', VersionConstants::TYPE_NAME_DOCUMENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDocumentMode', VersionConstants::TYPE_CLASS_DOCUMENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDocumentModeEnum()
    {
        $this->assertEquals('DocumentModeEnum', VersionConstants::TYPE_NAME_DOCUMENT_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDocumentModeEnum', VersionConstants::TYPE_CLASS_DOCUMENT_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRDocumentReference()
    {
        $this->assertEquals('DocumentReference', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRDocumentReference', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContent()
    {
        $this->assertEquals('DocumentReference.Content', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContext()
    {
        $this->assertEquals('DocumentReference.Context', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceRelatesTo()
    {
        $this->assertEquals('DocumentReference.RelatesTo', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDocumentReferenceStatus()
    {
        $this->assertEquals('DocumentReferenceStatus', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDocumentReferenceStatus', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDocumentReferenceStatusEnum()
    {
        $this->assertEquals('DocumentReferenceStatusEnum', VersionConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDocumentReferenceStatusEnum', VersionConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRDocumentRelationshipType()
    {
        $this->assertEquals('DocumentRelationshipType', VersionConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRDocumentRelationshipType', VersionConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRDocumentRelationshipTypeEnum()
    {
        $this->assertEquals('DocumentRelationshipTypeEnum', VersionConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRDocumentRelationshipTypeEnum', VersionConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource()
    {
        $this->assertEquals('DomainResource', VersionConstants::TYPE_NAME_DOMAIN_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource', VersionConstants::TYPE_CLASS_DOMAIN_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDosage()
    {
        $this->assertEquals('Dosage', VersionConstants::TYPE_NAME_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDosage', VersionConstants::TYPE_CLASS_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRDosage_FHIRDosageDoseAndRate()
    {
        $this->assertEquals('Dosage.DoseAndRate', VersionConstants::TYPE_NAME_DOSAGE_DOT_DOSE_AND_RATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRDosage\FHIRDosageDoseAndRate', VersionConstants::TYPE_CLASS_DOSAGE_DOT_DOSE_AND_RATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQuantity_FHIRDuration()
    {
        $this->assertEquals('Duration', VersionConstants::TYPE_NAME_DURATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity\FHIRDuration', VersionConstants::TYPE_CLASS_DURATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement()
    {
        $this->assertEquals('Element', VersionConstants::TYPE_NAME_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement', VersionConstants::TYPE_CLASS_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRElementDefinition()
    {
        $this->assertEquals('ElementDefinition', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRElementDefinition', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRElementDefinition_FHIRElementDefinitionBase()
    {
        $this->assertEquals('ElementDefinition.Base', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_BASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBase', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_BASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRElementDefinition_FHIRElementDefinitionBinding()
    {
        $this->assertEquals('ElementDefinition.Binding', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionBinding', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRElementDefinition_FHIRElementDefinitionConstraint()
    {
        $this->assertEquals('ElementDefinition.Constraint', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_CONSTRAINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionConstraint', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_CONSTRAINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRElementDefinition_FHIRElementDefinitionDiscriminator()
    {
        $this->assertEquals('ElementDefinition.Discriminator', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_DISCRIMINATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionDiscriminator', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_DISCRIMINATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRElementDefinition_FHIRElementDefinitionExample()
    {
        $this->assertEquals('ElementDefinition.Example', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_EXAMPLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionExample', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_EXAMPLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRElementDefinition_FHIRElementDefinitionMapping()
    {
        $this->assertEquals('ElementDefinition.Mapping', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionMapping', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRElementDefinition_FHIRElementDefinitionSlicing()
    {
        $this->assertEquals('ElementDefinition.Slicing', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionSlicing', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_SLICING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRElementDefinition_FHIRElementDefinitionType()
    {
        $this->assertEquals('ElementDefinition.Type', VersionConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRElementDefinition\FHIRElementDefinitionType', VersionConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREligibilityRequestPurpose()
    {
        $this->assertEquals('EligibilityRequestPurpose', VersionConstants::TYPE_NAME_ELIGIBILITY_REQUEST_PURPOSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREligibilityRequestPurpose', VersionConstants::TYPE_CLASS_ELIGIBILITY_REQUEST_PURPOSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREligibilityRequestPurposeEnum()
    {
        $this->assertEquals('EligibilityRequestPurposeEnum', VersionConstants::TYPE_NAME_ELIGIBILITY_REQUEST_PURPOSE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREligibilityRequestPurposeEnum', VersionConstants::TYPE_CLASS_ELIGIBILITY_REQUEST_PURPOSE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREligibilityResponsePurpose()
    {
        $this->assertEquals('EligibilityResponsePurpose', VersionConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_PURPOSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREligibilityResponsePurpose', VersionConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_PURPOSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREligibilityResponsePurposeEnum()
    {
        $this->assertEquals('EligibilityResponsePurposeEnum', VersionConstants::TYPE_NAME_ELIGIBILITY_RESPONSE_PURPOSE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREligibilityResponsePurposeEnum', VersionConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE_PURPOSE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREnableWhenBehavior()
    {
        $this->assertEquals('EnableWhenBehavior', VersionConstants::TYPE_NAME_ENABLE_WHEN_BEHAVIOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREnableWhenBehavior', VersionConstants::TYPE_CLASS_ENABLE_WHEN_BEHAVIOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREnableWhenBehaviorEnum()
    {
        $this->assertEquals('EnableWhenBehaviorEnum', VersionConstants::TYPE_NAME_ENABLE_WHEN_BEHAVIOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREnableWhenBehaviorEnum', VersionConstants::TYPE_CLASS_ENABLE_WHEN_BEHAVIOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIREncounter()
    {
        $this->assertEquals('Encounter', VersionConstants::TYPE_NAME_ENCOUNTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIREncounter', VersionConstants::TYPE_CLASS_ENCOUNTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterClassHistory()
    {
        $this->assertEquals('Encounter.ClassHistory', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_CLASS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterClassHistory', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_CLASS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterDiagnosis()
    {
        $this->assertEquals('Encounter.Diagnosis', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterDiagnosis', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterHospitalization()
    {
        $this->assertEquals('Encounter.Hospitalization', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_HOSPITALIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterLocation()
    {
        $this->assertEquals('Encounter.Location', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterParticipant()
    {
        $this->assertEquals('Encounter.Participant', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterStatusHistory()
    {
        $this->assertEquals('Encounter.StatusHistory', VersionConstants::TYPE_NAME_ENCOUNTER_DOT_STATUS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory', VersionConstants::TYPE_CLASS_ENCOUNTER_DOT_STATUS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREncounterLocationStatus()
    {
        $this->assertEquals('EncounterLocationStatus', VersionConstants::TYPE_NAME_ENCOUNTER_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREncounterLocationStatus', VersionConstants::TYPE_CLASS_ENCOUNTER_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREncounterLocationStatusEnum()
    {
        $this->assertEquals('EncounterLocationStatusEnum', VersionConstants::TYPE_NAME_ENCOUNTER_LOCATION_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREncounterLocationStatusEnum', VersionConstants::TYPE_CLASS_ENCOUNTER_LOCATION_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREncounterStatus()
    {
        $this->assertEquals('EncounterStatus', VersionConstants::TYPE_NAME_ENCOUNTER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREncounterStatus', VersionConstants::TYPE_CLASS_ENCOUNTER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREncounterStatusEnum()
    {
        $this->assertEquals('EncounterStatusEnum', VersionConstants::TYPE_NAME_ENCOUNTER_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREncounterStatusEnum', VersionConstants::TYPE_CLASS_ENCOUNTER_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIREndpoint()
    {
        $this->assertEquals('Endpoint', VersionConstants::TYPE_NAME_ENDPOINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIREndpoint', VersionConstants::TYPE_CLASS_ENDPOINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREndpointStatus()
    {
        $this->assertEquals('EndpointStatus', VersionConstants::TYPE_NAME_ENDPOINT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREndpointStatus', VersionConstants::TYPE_CLASS_ENDPOINT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREndpointStatusEnum()
    {
        $this->assertEquals('EndpointStatusEnum', VersionConstants::TYPE_NAME_ENDPOINT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREndpointStatusEnum', VersionConstants::TYPE_CLASS_ENDPOINT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIREnrollmentRequest()
    {
        $this->assertEquals('EnrollmentRequest', VersionConstants::TYPE_NAME_ENROLLMENT_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest', VersionConstants::TYPE_CLASS_ENROLLMENT_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIREnrollmentResponse()
    {
        $this->assertEquals('EnrollmentResponse', VersionConstants::TYPE_NAME_ENROLLMENT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse', VersionConstants::TYPE_CLASS_ENROLLMENT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIREpisodeOfCare()
    {
        $this->assertEquals('EpisodeOfCare', VersionConstants::TYPE_NAME_EPISODE_OF_CARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREpisodeOfCare_FHIREpisodeOfCareDiagnosis()
    {
        $this->assertEquals('EpisodeOfCare.Diagnosis', VersionConstants::TYPE_NAME_EPISODE_OF_CARE_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareDiagnosis', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREpisodeOfCare_FHIREpisodeOfCareStatusHistory()
    {
        $this->assertEquals('EpisodeOfCare.StatusHistory', VersionConstants::TYPE_NAME_EPISODE_OF_CARE_DOT_STATUS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE_DOT_STATUS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREpisodeOfCareStatus()
    {
        $this->assertEquals('EpisodeOfCareStatus', VersionConstants::TYPE_NAME_EPISODE_OF_CARE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREpisodeOfCareStatus', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREpisodeOfCareStatusEnum()
    {
        $this->assertEquals('EpisodeOfCareStatusEnum', VersionConstants::TYPE_NAME_EPISODE_OF_CARE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREpisodeOfCareStatusEnum', VersionConstants::TYPE_CLASS_EPISODE_OF_CARE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREventCapabilityMode()
    {
        $this->assertEquals('EventCapabilityMode', VersionConstants::TYPE_NAME_EVENT_CAPABILITY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREventCapabilityMode', VersionConstants::TYPE_CLASS_EVENT_CAPABILITY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREventCapabilityModeEnum()
    {
        $this->assertEquals('EventCapabilityModeEnum', VersionConstants::TYPE_NAME_EVENT_CAPABILITY_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREventCapabilityModeEnum', VersionConstants::TYPE_CLASS_EVENT_CAPABILITY_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIREventDefinition()
    {
        $this->assertEquals('EventDefinition', VersionConstants::TYPE_NAME_EVENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIREventDefinition', VersionConstants::TYPE_CLASS_EVENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREventOrRequestResourceTypes()
    {
        $this->assertEquals('EventOrRequestResourceTypes', VersionConstants::TYPE_NAME_EVENT_OR_REQUEST_RESOURCE_TYPES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREventOrRequestResourceTypes', VersionConstants::TYPE_CLASS_EVENT_OR_REQUEST_RESOURCE_TYPES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREventOrRequestResourceTypesEnum()
    {
        $this->assertEquals('EventOrRequestResourceTypesEnum', VersionConstants::TYPE_NAME_EVENT_OR_REQUEST_RESOURCE_TYPES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREventOrRequestResourceTypesEnum', VersionConstants::TYPE_CLASS_EVENT_OR_REQUEST_RESOURCE_TYPES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREventResourceType()
    {
        $this->assertEquals('EventResourceType', VersionConstants::TYPE_NAME_EVENT_RESOURCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREventResourceType', VersionConstants::TYPE_CLASS_EVENT_RESOURCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREventResourceTypeEnum()
    {
        $this->assertEquals('EventResourceTypeEnum', VersionConstants::TYPE_NAME_EVENT_RESOURCE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREventResourceTypeEnum', VersionConstants::TYPE_CLASS_EVENT_RESOURCE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREventStatus()
    {
        $this->assertEquals('EventStatus', VersionConstants::TYPE_NAME_EVENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREventStatus', VersionConstants::TYPE_CLASS_EVENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREventStatusEnum()
    {
        $this->assertEquals('EventStatusEnum', VersionConstants::TYPE_NAME_EVENT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREventStatusEnum', VersionConstants::TYPE_CLASS_EVENT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREventTiming()
    {
        $this->assertEquals('EventTiming', VersionConstants::TYPE_NAME_EVENT_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREventTiming', VersionConstants::TYPE_CLASS_EVENT_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREventTimingEnum()
    {
        $this->assertEquals('EventTimingEnum', VersionConstants::TYPE_NAME_EVENT_TIMING_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREventTimingEnum', VersionConstants::TYPE_CLASS_EVENT_TIMING_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIREvidence()
    {
        $this->assertEquals('Evidence', VersionConstants::TYPE_NAME_EVIDENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIREvidence', VersionConstants::TYPE_CLASS_EVIDENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidence_FHIREvidenceAttributeEstimate()
    {
        $this->assertEquals('Evidence.AttributeEstimate', VersionConstants::TYPE_NAME_EVIDENCE_DOT_ATTRIBUTE_ESTIMATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceAttributeEstimate', VersionConstants::TYPE_CLASS_EVIDENCE_DOT_ATTRIBUTE_ESTIMATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidence_FHIREvidenceCertainty()
    {
        $this->assertEquals('Evidence.Certainty', VersionConstants::TYPE_NAME_EVIDENCE_DOT_CERTAINTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceCertainty', VersionConstants::TYPE_CLASS_EVIDENCE_DOT_CERTAINTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidence_FHIREvidenceModelCharacteristic()
    {
        $this->assertEquals('Evidence.ModelCharacteristic', VersionConstants::TYPE_NAME_EVIDENCE_DOT_MODEL_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceModelCharacteristic', VersionConstants::TYPE_CLASS_EVIDENCE_DOT_MODEL_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidence_FHIREvidenceSampleSize()
    {
        $this->assertEquals('Evidence.SampleSize', VersionConstants::TYPE_NAME_EVIDENCE_DOT_SAMPLE_SIZE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceSampleSize', VersionConstants::TYPE_CLASS_EVIDENCE_DOT_SAMPLE_SIZE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidence_FHIREvidenceStatistic()
    {
        $this->assertEquals('Evidence.Statistic', VersionConstants::TYPE_NAME_EVIDENCE_DOT_STATISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceStatistic', VersionConstants::TYPE_CLASS_EVIDENCE_DOT_STATISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidence_FHIREvidenceVariable()
    {
        $this->assertEquals('Evidence.Variable', VersionConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable', VersionConstants::TYPE_CLASS_EVIDENCE_DOT_VARIABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidence_FHIREvidenceVariableDefinition()
    {
        $this->assertEquals('Evidence.VariableDefinition', VersionConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariableDefinition', VersionConstants::TYPE_CLASS_EVIDENCE_DOT_VARIABLE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIREvidenceReport()
    {
        $this->assertEquals('EvidenceReport', VersionConstants::TYPE_NAME_EVIDENCE_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIREvidenceReport', VersionConstants::TYPE_CLASS_EVIDENCE_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidenceReport_FHIREvidenceReportCharacteristic()
    {
        $this->assertEquals('EvidenceReport.Characteristic', VersionConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportCharacteristic', VersionConstants::TYPE_CLASS_EVIDENCE_REPORT_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidenceReport_FHIREvidenceReportRelatesTo()
    {
        $this->assertEquals('EvidenceReport.RelatesTo', VersionConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportRelatesTo', VersionConstants::TYPE_CLASS_EVIDENCE_REPORT_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidenceReport_FHIREvidenceReportSection()
    {
        $this->assertEquals('EvidenceReport.Section', VersionConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportSection', VersionConstants::TYPE_CLASS_EVIDENCE_REPORT_DOT_SECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidenceReport_FHIREvidenceReportSubject()
    {
        $this->assertEquals('EvidenceReport.Subject', VersionConstants::TYPE_NAME_EVIDENCE_REPORT_DOT_SUBJECT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceReport\FHIREvidenceReportSubject', VersionConstants::TYPE_CLASS_EVIDENCE_REPORT_DOT_SUBJECT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIREvidenceVariable()
    {
        $this->assertEquals('EvidenceVariable', VersionConstants::TYPE_NAME_EVIDENCE_VARIABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIREvidenceVariable', VersionConstants::TYPE_CLASS_EVIDENCE_VARIABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidenceVariable_FHIREvidenceVariableCategory()
    {
        $this->assertEquals('EvidenceVariable.Category', VersionConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCategory', VersionConstants::TYPE_CLASS_EVIDENCE_VARIABLE_DOT_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidenceVariable_FHIREvidenceVariableCharacteristic()
    {
        $this->assertEquals('EvidenceVariable.Characteristic', VersionConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableCharacteristic', VersionConstants::TYPE_CLASS_EVIDENCE_VARIABLE_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIREvidenceVariable_FHIREvidenceVariableTimeFromStart()
    {
        $this->assertEquals('EvidenceVariable.TimeFromStart', VersionConstants::TYPE_NAME_EVIDENCE_VARIABLE_DOT_TIME_FROM_START);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIREvidenceVariable\FHIREvidenceVariableTimeFromStart', VersionConstants::TYPE_CLASS_EVIDENCE_VARIABLE_DOT_TIME_FROM_START);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIREvidenceVariableHandling()
    {
        $this->assertEquals('EvidenceVariableHandling', VersionConstants::TYPE_NAME_EVIDENCE_VARIABLE_HANDLING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIREvidenceVariableHandling', VersionConstants::TYPE_CLASS_EVIDENCE_VARIABLE_HANDLING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIREvidenceVariableHandlingEnum()
    {
        $this->assertEquals('EvidenceVariableHandlingEnum', VersionConstants::TYPE_NAME_EVIDENCE_VARIABLE_HANDLING_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIREvidenceVariableHandlingEnum', VersionConstants::TYPE_CLASS_EVIDENCE_VARIABLE_HANDLING_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRExampleScenario()
    {
        $this->assertEquals('ExampleScenario', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRExampleScenario', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExampleScenario_FHIRExampleScenarioActor()
    {
        $this->assertEquals('ExampleScenario.Actor', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_ACTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioActor', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_DOT_ACTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExampleScenario_FHIRExampleScenarioAlternative()
    {
        $this->assertEquals('ExampleScenario.Alternative', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_ALTERNATIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioAlternative', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_DOT_ALTERNATIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExampleScenario_FHIRExampleScenarioContainedInstance()
    {
        $this->assertEquals('ExampleScenario.ContainedInstance', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_CONTAINED_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioContainedInstance', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_DOT_CONTAINED_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExampleScenario_FHIRExampleScenarioInstance()
    {
        $this->assertEquals('ExampleScenario.Instance', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioInstance', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExampleScenario_FHIRExampleScenarioOperation()
    {
        $this->assertEquals('ExampleScenario.Operation', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioOperation', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExampleScenario_FHIRExampleScenarioProcess()
    {
        $this->assertEquals('ExampleScenario.Process', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_PROCESS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioProcess', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_DOT_PROCESS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExampleScenario_FHIRExampleScenarioStep()
    {
        $this->assertEquals('ExampleScenario.Step', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_STEP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioStep', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_DOT_STEP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExampleScenario_FHIRExampleScenarioVersion()
    {
        $this->assertEquals('ExampleScenario.Version', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_DOT_VERSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExampleScenario\FHIRExampleScenarioVersion', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_DOT_VERSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRExampleScenarioActorType()
    {
        $this->assertEquals('ExampleScenarioActorType', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_ACTOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExampleScenarioActorType', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_ACTOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRExampleScenarioActorTypeEnum()
    {
        $this->assertEquals('ExampleScenarioActorTypeEnum', VersionConstants::TYPE_NAME_EXAMPLE_SCENARIO_ACTOR_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRExampleScenarioActorTypeEnum', VersionConstants::TYPE_CLASS_EXAMPLE_SCENARIO_ACTOR_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRExplanationOfBenefit()
    {
        $this->assertEquals('ExplanationOfBenefit', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitAccident()
    {
        $this->assertEquals('ExplanationOfBenefit.Accident', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ACCIDENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAccident', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ACCIDENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitAddItem()
    {
        $this->assertEquals('ExplanationOfBenefit.AddItem', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ADD_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAddItem', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ADD_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitAdjudication()
    {
        $this->assertEquals('ExplanationOfBenefit.Adjudication', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ADJUDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitAdjudication', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ADJUDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitBenefitBalance()
    {
        $this->assertEquals('ExplanationOfBenefit.BenefitBalance', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_BENEFIT_BALANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitBenefitBalance', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_BENEFIT_BALANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitCareTeam()
    {
        $this->assertEquals('ExplanationOfBenefit.CareTeam', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitCareTeam', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitDetail()
    {
        $this->assertEquals('ExplanationOfBenefit.Detail', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitDetail1()
    {
        $this->assertEquals('ExplanationOfBenefit.Detail1', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DETAIL_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDetail1', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_DETAIL_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitDiagnosis()
    {
        $this->assertEquals('ExplanationOfBenefit.Diagnosis', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitDiagnosis', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitFinancial()
    {
        $this->assertEquals('ExplanationOfBenefit.Financial', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitFinancial', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_FINANCIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitInsurance()
    {
        $this->assertEquals('ExplanationOfBenefit.Insurance', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_INSURANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitInsurance', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_INSURANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitItem()
    {
        $this->assertEquals('ExplanationOfBenefit.Item', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitItem', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitPayee()
    {
        $this->assertEquals('ExplanationOfBenefit.Payee', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PAYEE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayee', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PAYEE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitPayment()
    {
        $this->assertEquals('ExplanationOfBenefit.Payment', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PAYMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitPayment', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PAYMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitProcedure()
    {
        $this->assertEquals('ExplanationOfBenefit.Procedure', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcedure', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitProcessNote()
    {
        $this->assertEquals('ExplanationOfBenefit.ProcessNote', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitProcessNote', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitRelated()
    {
        $this->assertEquals('ExplanationOfBenefit.Related', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitRelated', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitSubDetail()
    {
        $this->assertEquals('ExplanationOfBenefit.SubDetail', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitSubDetail1()
    {
        $this->assertEquals('ExplanationOfBenefit.SubDetail1', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_SUB_DETAIL_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSubDetail1', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_SUB_DETAIL_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitSupportingInfo()
    {
        $this->assertEquals('ExplanationOfBenefit.SupportingInfo', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_SUPPORTING_INFO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitSupportingInfo', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_SUPPORTING_INFO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRExplanationOfBenefit_FHIRExplanationOfBenefitTotal()
    {
        $this->assertEquals('ExplanationOfBenefit.Total', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_DOT_TOTAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRExplanationOfBenefit\FHIRExplanationOfBenefitTotal', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_DOT_TOTAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRExplanationOfBenefitStatus()
    {
        $this->assertEquals('ExplanationOfBenefitStatus', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExplanationOfBenefitStatus', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRExplanationOfBenefitStatusEnum()
    {
        $this->assertEquals('ExplanationOfBenefitStatusEnum', VersionConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRExplanationOfBenefitStatusEnum', VersionConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRExpression()
    {
        $this->assertEquals('Expression', VersionConstants::TYPE_NAME_EXPRESSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpression', VersionConstants::TYPE_CLASS_EXPRESSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRExpressionLanguage()
    {
        $this->assertEquals('ExpressionLanguage', VersionConstants::TYPE_NAME_EXPRESSION_LANGUAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExpressionLanguage', VersionConstants::TYPE_CLASS_EXPRESSION_LANGUAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRExpressionLanguageEnum()
    {
        $this->assertEquals('ExpressionLanguageEnum', VersionConstants::TYPE_NAME_EXPRESSION_LANGUAGE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRExpressionLanguageEnum', VersionConstants::TYPE_CLASS_EXPRESSION_LANGUAGE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRExtension()
    {
        $this->assertEquals('Extension', VersionConstants::TYPE_NAME_EXTENSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension', VersionConstants::TYPE_CLASS_EXTENSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRExtensionContextType()
    {
        $this->assertEquals('ExtensionContextType', VersionConstants::TYPE_NAME_EXTENSION_CONTEXT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtensionContextType', VersionConstants::TYPE_CLASS_EXTENSION_CONTEXT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRExtensionContextTypeEnum()
    {
        $this->assertEquals('ExtensionContextTypeEnum', VersionConstants::TYPE_NAME_EXTENSION_CONTEXT_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRExtensionContextTypeEnum', VersionConstants::TYPE_CLASS_EXTENSION_CONTEXT_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFamilyHistoryStatus()
    {
        $this->assertEquals('FamilyHistoryStatus', VersionConstants::TYPE_NAME_FAMILY_HISTORY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFamilyHistoryStatus', VersionConstants::TYPE_CLASS_FAMILY_HISTORY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFamilyHistoryStatusEnum()
    {
        $this->assertEquals('FamilyHistoryStatusEnum', VersionConstants::TYPE_NAME_FAMILY_HISTORY_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFamilyHistoryStatusEnum', VersionConstants::TYPE_CLASS_FAMILY_HISTORY_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRFamilyMemberHistory()
    {
        $this->assertEquals('FamilyMemberHistory', VersionConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory', VersionConstants::TYPE_CLASS_FAMILY_MEMBER_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRFamilyMemberHistory_FHIRFamilyMemberHistoryCondition()
    {
        $this->assertEquals('FamilyMemberHistory.Condition', VersionConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition', VersionConstants::TYPE_CLASS_FAMILY_MEMBER_HISTORY_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFHIRAllTypes()
    {
        $this->assertEquals('FHIRAllTypes', VersionConstants::TYPE_NAME_FHIRALL_TYPES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFHIRAllTypes', VersionConstants::TYPE_CLASS_FHIRALL_TYPES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFHIRAllTypesEnum()
    {
        $this->assertEquals('FHIRAllTypesEnum', VersionConstants::TYPE_NAME_FHIRALL_TYPES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFHIRAllTypesEnum', VersionConstants::TYPE_CLASS_FHIRALL_TYPES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFHIRDefinedType()
    {
        $this->assertEquals('FHIRDefinedType', VersionConstants::TYPE_NAME_FHIRDEFINED_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFHIRDefinedType', VersionConstants::TYPE_CLASS_FHIRDEFINED_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFHIRDefinedTypeEnum()
    {
        $this->assertEquals('FHIRDefinedTypeEnum', VersionConstants::TYPE_NAME_FHIRDEFINED_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFHIRDefinedTypeEnum', VersionConstants::TYPE_CLASS_FHIRDEFINED_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFHIRDeviceStatus()
    {
        $this->assertEquals('FHIRDeviceStatus', VersionConstants::TYPE_NAME_FHIRDEVICE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFHIRDeviceStatus', VersionConstants::TYPE_CLASS_FHIRDEVICE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFHIRDeviceStatusEnum()
    {
        $this->assertEquals('FHIRDeviceStatusEnum', VersionConstants::TYPE_NAME_FHIRDEVICE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFHIRDeviceStatusEnum', VersionConstants::TYPE_CLASS_FHIRDEVICE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFHIRPathTypes()
    {
        $this->assertEquals('FHIRPathTypes', VersionConstants::TYPE_NAME_FHIRPATH_TYPES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFHIRPathTypes', VersionConstants::TYPE_CLASS_FHIRPATH_TYPES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFHIRPathTypesEnum()
    {
        $this->assertEquals('FHIRPathTypesEnum', VersionConstants::TYPE_NAME_FHIRPATH_TYPES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFHIRPathTypesEnum', VersionConstants::TYPE_CLASS_FHIRPATH_TYPES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFHIRSubstanceStatus()
    {
        $this->assertEquals('FHIRSubstanceStatus', VersionConstants::TYPE_NAME_FHIRSUBSTANCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFHIRSubstanceStatus', VersionConstants::TYPE_CLASS_FHIRSUBSTANCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFHIRSubstanceStatusEnum()
    {
        $this->assertEquals('FHIRSubstanceStatusEnum', VersionConstants::TYPE_NAME_FHIRSUBSTANCE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFHIRSubstanceStatusEnum', VersionConstants::TYPE_CLASS_FHIRSUBSTANCE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFHIRVersion()
    {
        $this->assertEquals('FHIRVersion', VersionConstants::TYPE_NAME_FHIRVERSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFHIRVersion', VersionConstants::TYPE_CLASS_FHIRVERSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFHIRVersionEnum()
    {
        $this->assertEquals('FHIRVersionEnum', VersionConstants::TYPE_NAME_FHIRVERSION_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFHIRVersionEnum', VersionConstants::TYPE_CLASS_FHIRVERSION_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFilterOperator()
    {
        $this->assertEquals('FilterOperator', VersionConstants::TYPE_NAME_FILTER_OPERATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFilterOperator', VersionConstants::TYPE_CLASS_FILTER_OPERATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFilterOperatorEnum()
    {
        $this->assertEquals('FilterOperatorEnum', VersionConstants::TYPE_NAME_FILTER_OPERATOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFilterOperatorEnum', VersionConstants::TYPE_CLASS_FILTER_OPERATOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFinancialResourceStatusCodes()
    {
        $this->assertEquals('FinancialResourceStatusCodes', VersionConstants::TYPE_NAME_FINANCIAL_RESOURCE_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFinancialResourceStatusCodes', VersionConstants::TYPE_CLASS_FINANCIAL_RESOURCE_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFinancialResourceStatusCodesEnum()
    {
        $this->assertEquals('FinancialResourceStatusCodesEnum', VersionConstants::TYPE_NAME_FINANCIAL_RESOURCE_STATUS_CODES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFinancialResourceStatusCodesEnum', VersionConstants::TYPE_CLASS_FINANCIAL_RESOURCE_STATUS_CODES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRFlag()
    {
        $this->assertEquals('Flag', VersionConstants::TYPE_NAME_FLAG);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRFlag', VersionConstants::TYPE_CLASS_FLAG);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRFlagStatus()
    {
        $this->assertEquals('FlagStatus', VersionConstants::TYPE_NAME_FLAG_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRFlagStatus', VersionConstants::TYPE_CLASS_FLAG_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRFlagStatusEnum()
    {
        $this->assertEquals('FlagStatusEnum', VersionConstants::TYPE_NAME_FLAG_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRFlagStatusEnum', VersionConstants::TYPE_CLASS_FLAG_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRGoal()
    {
        $this->assertEquals('Goal', VersionConstants::TYPE_NAME_GOAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRGoal', VersionConstants::TYPE_CLASS_GOAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRGoal_FHIRGoalTarget()
    {
        $this->assertEquals('Goal.Target', VersionConstants::TYPE_NAME_GOAL_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget', VersionConstants::TYPE_CLASS_GOAL_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRGoalLifecycleStatus()
    {
        $this->assertEquals('GoalLifecycleStatus', VersionConstants::TYPE_NAME_GOAL_LIFECYCLE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGoalLifecycleStatus', VersionConstants::TYPE_CLASS_GOAL_LIFECYCLE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRGoalLifecycleStatusEnum()
    {
        $this->assertEquals('GoalLifecycleStatusEnum', VersionConstants::TYPE_NAME_GOAL_LIFECYCLE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGoalLifecycleStatusEnum', VersionConstants::TYPE_CLASS_GOAL_LIFECYCLE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRGraphCompartmentRule()
    {
        $this->assertEquals('GraphCompartmentRule', VersionConstants::TYPE_NAME_GRAPH_COMPARTMENT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGraphCompartmentRule', VersionConstants::TYPE_CLASS_GRAPH_COMPARTMENT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRGraphCompartmentRuleEnum()
    {
        $this->assertEquals('GraphCompartmentRuleEnum', VersionConstants::TYPE_NAME_GRAPH_COMPARTMENT_RULE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGraphCompartmentRuleEnum', VersionConstants::TYPE_CLASS_GRAPH_COMPARTMENT_RULE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRGraphCompartmentUse()
    {
        $this->assertEquals('GraphCompartmentUse', VersionConstants::TYPE_NAME_GRAPH_COMPARTMENT_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGraphCompartmentUse', VersionConstants::TYPE_CLASS_GRAPH_COMPARTMENT_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRGraphCompartmentUseEnum()
    {
        $this->assertEquals('GraphCompartmentUseEnum', VersionConstants::TYPE_NAME_GRAPH_COMPARTMENT_USE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGraphCompartmentUseEnum', VersionConstants::TYPE_CLASS_GRAPH_COMPARTMENT_USE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRGraphDefinition()
    {
        $this->assertEquals('GraphDefinition', VersionConstants::TYPE_NAME_GRAPH_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRGraphDefinition', VersionConstants::TYPE_CLASS_GRAPH_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRGraphDefinition_FHIRGraphDefinitionCompartment()
    {
        $this->assertEquals('GraphDefinition.Compartment', VersionConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_COMPARTMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionCompartment', VersionConstants::TYPE_CLASS_GRAPH_DEFINITION_DOT_COMPARTMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRGraphDefinition_FHIRGraphDefinitionLink()
    {
        $this->assertEquals('GraphDefinition.Link', VersionConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionLink', VersionConstants::TYPE_CLASS_GRAPH_DEFINITION_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRGraphDefinition_FHIRGraphDefinitionTarget()
    {
        $this->assertEquals('GraphDefinition.Target', VersionConstants::TYPE_NAME_GRAPH_DEFINITION_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGraphDefinition\FHIRGraphDefinitionTarget', VersionConstants::TYPE_CLASS_GRAPH_DEFINITION_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRGroup()
    {
        $this->assertEquals('Group', VersionConstants::TYPE_NAME_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRGroup', VersionConstants::TYPE_CLASS_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupCharacteristic()
    {
        $this->assertEquals('Group.Characteristic', VersionConstants::TYPE_NAME_GROUP_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic', VersionConstants::TYPE_CLASS_GROUP_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupMember()
    {
        $this->assertEquals('Group.Member', VersionConstants::TYPE_NAME_GROUP_DOT_MEMBER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember', VersionConstants::TYPE_CLASS_GROUP_DOT_MEMBER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRGroupMeasure()
    {
        $this->assertEquals('GroupMeasure', VersionConstants::TYPE_NAME_GROUP_MEASURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupMeasure', VersionConstants::TYPE_CLASS_GROUP_MEASURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRGroupMeasureEnum()
    {
        $this->assertEquals('GroupMeasureEnum', VersionConstants::TYPE_NAME_GROUP_MEASURE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGroupMeasureEnum', VersionConstants::TYPE_CLASS_GROUP_MEASURE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRGroupType()
    {
        $this->assertEquals('GroupType', VersionConstants::TYPE_NAME_GROUP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGroupType', VersionConstants::TYPE_CLASS_GROUP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRGroupTypeEnum()
    {
        $this->assertEquals('GroupTypeEnum', VersionConstants::TYPE_NAME_GROUP_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGroupTypeEnum', VersionConstants::TYPE_CLASS_GROUP_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRGuidanceResponse()
    {
        $this->assertEquals('GuidanceResponse', VersionConstants::TYPE_NAME_GUIDANCE_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRGuidanceResponse', VersionConstants::TYPE_CLASS_GUIDANCE_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRGuidanceResponseStatus()
    {
        $this->assertEquals('GuidanceResponseStatus', VersionConstants::TYPE_NAME_GUIDANCE_RESPONSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGuidanceResponseStatus', VersionConstants::TYPE_CLASS_GUIDANCE_RESPONSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRGuidanceResponseStatusEnum()
    {
        $this->assertEquals('GuidanceResponseStatusEnum', VersionConstants::TYPE_NAME_GUIDANCE_RESPONSE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGuidanceResponseStatusEnum', VersionConstants::TYPE_CLASS_GUIDANCE_RESPONSE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRGuidePageGeneration()
    {
        $this->assertEquals('GuidePageGeneration', VersionConstants::TYPE_NAME_GUIDE_PAGE_GENERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGuidePageGeneration', VersionConstants::TYPE_CLASS_GUIDE_PAGE_GENERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRGuidePageGenerationEnum()
    {
        $this->assertEquals('GuidePageGenerationEnum', VersionConstants::TYPE_NAME_GUIDE_PAGE_GENERATION_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGuidePageGenerationEnum', VersionConstants::TYPE_CLASS_GUIDE_PAGE_GENERATION_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRGuideParameterCode()
    {
        $this->assertEquals('GuideParameterCode', VersionConstants::TYPE_NAME_GUIDE_PARAMETER_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRGuideParameterCode', VersionConstants::TYPE_CLASS_GUIDE_PARAMETER_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRGuideParameterCodeEnum()
    {
        $this->assertEquals('GuideParameterCodeEnum', VersionConstants::TYPE_NAME_GUIDE_PARAMETER_CODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRGuideParameterCodeEnum', VersionConstants::TYPE_CLASS_GUIDE_PARAMETER_CODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRHealthcareService()
    {
        $this->assertEquals('HealthcareService', VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRHealthcareService', VersionConstants::TYPE_CLASS_HEALTHCARE_SERVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceAvailableTime()
    {
        $this->assertEquals('HealthcareService.AvailableTime', VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime', VersionConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceEligibility()
    {
        $this->assertEquals('HealthcareService.Eligibility', VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_ELIGIBILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceEligibility', VersionConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_ELIGIBILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceNotAvailable()
    {
        $this->assertEquals('HealthcareService.NotAvailable', VersionConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_NOT_AVAILABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable', VersionConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_NOT_AVAILABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRHTTPVerb()
    {
        $this->assertEquals('HTTPVerb', VersionConstants::TYPE_NAME_HTTPVERB);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRHTTPVerb', VersionConstants::TYPE_CLASS_HTTPVERB);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRHTTPVerbEnum()
    {
        $this->assertEquals('HTTPVerbEnum', VersionConstants::TYPE_NAME_HTTPVERB_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRHTTPVerbEnum', VersionConstants::TYPE_CLASS_HTTPVERB_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRHumanName()
    {
        $this->assertEquals('HumanName', VersionConstants::TYPE_NAME_HUMAN_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRHumanName', VersionConstants::TYPE_CLASS_HUMAN_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRId()
    {
        $this->assertEquals('id', VersionConstants::TYPE_NAME_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRId', VersionConstants::TYPE_CLASS_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRIdPrimitive()
    {
        $this->assertEquals('id-primitive', VersionConstants::TYPE_NAME_ID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIdPrimitive', VersionConstants::TYPE_CLASS_ID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRIdentifier()
    {
        $this->assertEquals('Identifier', VersionConstants::TYPE_NAME_IDENTIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifier', VersionConstants::TYPE_CLASS_IDENTIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRIdentifierUse()
    {
        $this->assertEquals('IdentifierUse', VersionConstants::TYPE_NAME_IDENTIFIER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentifierUse', VersionConstants::TYPE_CLASS_IDENTIFIER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRIdentifierUseEnum()
    {
        $this->assertEquals('IdentifierUseEnum', VersionConstants::TYPE_NAME_IDENTIFIER_USE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRIdentifierUseEnum', VersionConstants::TYPE_CLASS_IDENTIFIER_USE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRIdentityAssuranceLevel()
    {
        $this->assertEquals('IdentityAssuranceLevel', VersionConstants::TYPE_NAME_IDENTITY_ASSURANCE_LEVEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIdentityAssuranceLevel', VersionConstants::TYPE_CLASS_IDENTITY_ASSURANCE_LEVEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRIdentityAssuranceLevelEnum()
    {
        $this->assertEquals('IdentityAssuranceLevelEnum', VersionConstants::TYPE_NAME_IDENTITY_ASSURANCE_LEVEL_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRIdentityAssuranceLevelEnum', VersionConstants::TYPE_CLASS_IDENTITY_ASSURANCE_LEVEL_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRImagingStudy()
    {
        $this->assertEquals('ImagingStudy', VersionConstants::TYPE_NAME_IMAGING_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRImagingStudy', VersionConstants::TYPE_CLASS_IMAGING_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudyInstance()
    {
        $this->assertEquals('ImagingStudy.Instance', VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance', VersionConstants::TYPE_CLASS_IMAGING_STUDY_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudyPerformer()
    {
        $this->assertEquals('ImagingStudy.Performer', VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyPerformer', VersionConstants::TYPE_CLASS_IMAGING_STUDY_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudySeries()
    {
        $this->assertEquals('ImagingStudy.Series', VersionConstants::TYPE_NAME_IMAGING_STUDY_DOT_SERIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries', VersionConstants::TYPE_CLASS_IMAGING_STUDY_DOT_SERIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRImagingStudyStatus()
    {
        $this->assertEquals('ImagingStudyStatus', VersionConstants::TYPE_NAME_IMAGING_STUDY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRImagingStudyStatus', VersionConstants::TYPE_CLASS_IMAGING_STUDY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRImagingStudyStatusEnum()
    {
        $this->assertEquals('ImagingStudyStatusEnum', VersionConstants::TYPE_NAME_IMAGING_STUDY_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRImagingStudyStatusEnum', VersionConstants::TYPE_CLASS_IMAGING_STUDY_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRImmunization()
    {
        $this->assertEquals('Immunization', VersionConstants::TYPE_NAME_IMMUNIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRImmunization', VersionConstants::TYPE_CLASS_IMMUNIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationEducation()
    {
        $this->assertEquals('Immunization.Education', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_EDUCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationEducation', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_EDUCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationPerformer()
    {
        $this->assertEquals('Immunization.Performer', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationPerformer', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationProtocolApplied()
    {
        $this->assertEquals('Immunization.ProtocolApplied', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_PROTOCOL_APPLIED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationProtocolApplied', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_PROTOCOL_APPLIED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationReaction()
    {
        $this->assertEquals('Immunization.Reaction', VersionConstants::TYPE_NAME_IMMUNIZATION_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction', VersionConstants::TYPE_CLASS_IMMUNIZATION_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRImmunizationEvaluation()
    {
        $this->assertEquals('ImmunizationEvaluation', VersionConstants::TYPE_NAME_IMMUNIZATION_EVALUATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationEvaluation', VersionConstants::TYPE_CLASS_IMMUNIZATION_EVALUATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRImmunizationEvaluationStatusCodes()
    {
        $this->assertEquals('ImmunizationEvaluationStatusCodes', VersionConstants::TYPE_NAME_IMMUNIZATION_EVALUATION_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRImmunizationEvaluationStatusCodes', VersionConstants::TYPE_CLASS_IMMUNIZATION_EVALUATION_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRImmunizationEvaluationStatusCodesEnum()
    {
        $this->assertEquals('ImmunizationEvaluationStatusCodesEnum', VersionConstants::TYPE_NAME_IMMUNIZATION_EVALUATION_STATUS_CODES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRImmunizationEvaluationStatusCodesEnum', VersionConstants::TYPE_CLASS_IMMUNIZATION_EVALUATION_STATUS_CODES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRImmunizationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationDateCriterion()
    {
        $this->assertEquals('ImmunizationRecommendation.DateCriterion', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation.Recommendation', VersionConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation', VersionConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRImmunizationStatusCodes()
    {
        $this->assertEquals('ImmunizationStatusCodes', VersionConstants::TYPE_NAME_IMMUNIZATION_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRImmunizationStatusCodes', VersionConstants::TYPE_CLASS_IMMUNIZATION_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRImmunizationStatusCodesEnum()
    {
        $this->assertEquals('ImmunizationStatusCodesEnum', VersionConstants::TYPE_NAME_IMMUNIZATION_STATUS_CODES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRImmunizationStatusCodesEnum', VersionConstants::TYPE_CLASS_IMMUNIZATION_STATUS_CODES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRImplementationGuide()
    {
        $this->assertEquals('ImplementationGuide', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRImplementationGuide', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideDefinition()
    {
        $this->assertEquals('ImplementationGuide.Definition', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDefinition', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideDependsOn()
    {
        $this->assertEquals('ImplementationGuide.DependsOn', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEPENDS_ON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependsOn', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_DEPENDS_ON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideGlobal()
    {
        $this->assertEquals('ImplementationGuide.Global', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_GLOBAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_GLOBAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideGrouping()
    {
        $this->assertEquals('ImplementationGuide.Grouping', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_GROUPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGrouping', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_GROUPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideManifest()
    {
        $this->assertEquals('ImplementationGuide.Manifest', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_MANIFEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideManifest', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_MANIFEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuidePage()
    {
        $this->assertEquals('ImplementationGuide.Page', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_PAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuidePage1()
    {
        $this->assertEquals('ImplementationGuide.Page1', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage1', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_PAGE_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideParameter()
    {
        $this->assertEquals('ImplementationGuide.Parameter', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideParameter', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideResource()
    {
        $this->assertEquals('ImplementationGuide.Resource', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideResource1()
    {
        $this->assertEquals('ImplementationGuide.Resource1', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource1', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_RESOURCE_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideTemplate()
    {
        $this->assertEquals('ImplementationGuide.Template', VersionConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_TEMPLATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideTemplate', VersionConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_TEMPLATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRIngredient()
    {
        $this->assertEquals('Ingredient', VersionConstants::TYPE_NAME_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRIngredient', VersionConstants::TYPE_CLASS_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRIngredient_FHIRIngredientManufacturer()
    {
        $this->assertEquals('Ingredient.Manufacturer', VersionConstants::TYPE_NAME_INGREDIENT_DOT_MANUFACTURER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientManufacturer', VersionConstants::TYPE_CLASS_INGREDIENT_DOT_MANUFACTURER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRIngredient_FHIRIngredientReferenceStrength()
    {
        $this->assertEquals('Ingredient.ReferenceStrength', VersionConstants::TYPE_NAME_INGREDIENT_DOT_REFERENCE_STRENGTH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength', VersionConstants::TYPE_CLASS_INGREDIENT_DOT_REFERENCE_STRENGTH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRIngredient_FHIRIngredientStrength()
    {
        $this->assertEquals('Ingredient.Strength', VersionConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength', VersionConstants::TYPE_CLASS_INGREDIENT_DOT_STRENGTH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRIngredient_FHIRIngredientSubstance()
    {
        $this->assertEquals('Ingredient.Substance', VersionConstants::TYPE_NAME_INGREDIENT_DOT_SUBSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientSubstance', VersionConstants::TYPE_CLASS_INGREDIENT_DOT_SUBSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRIngredientManufacturerRole()
    {
        $this->assertEquals('IngredientManufacturerRole', VersionConstants::TYPE_NAME_INGREDIENT_MANUFACTURER_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIngredientManufacturerRole', VersionConstants::TYPE_CLASS_INGREDIENT_MANUFACTURER_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRIngredientManufacturerRoleEnum()
    {
        $this->assertEquals('IngredientManufacturerRoleEnum', VersionConstants::TYPE_NAME_INGREDIENT_MANUFACTURER_ROLE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRIngredientManufacturerRoleEnum', VersionConstants::TYPE_CLASS_INGREDIENT_MANUFACTURER_ROLE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRInstant()
    {
        $this->assertEquals('instant', VersionConstants::TYPE_NAME_INSTANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInstant', VersionConstants::TYPE_CLASS_INSTANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRInstantPrimitive()
    {
        $this->assertEquals('instant-primitive', VersionConstants::TYPE_NAME_INSTANT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRInstantPrimitive', VersionConstants::TYPE_CLASS_INSTANT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRInsurancePlan()
    {
        $this->assertEquals('InsurancePlan', VersionConstants::TYPE_NAME_INSURANCE_PLAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRInsurancePlan', VersionConstants::TYPE_CLASS_INSURANCE_PLAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInsurancePlan_FHIRInsurancePlanBenefit()
    {
        $this->assertEquals('InsurancePlan.Benefit', VersionConstants::TYPE_NAME_INSURANCE_PLAN_DOT_BENEFIT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanBenefit', VersionConstants::TYPE_CLASS_INSURANCE_PLAN_DOT_BENEFIT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInsurancePlan_FHIRInsurancePlanBenefit1()
    {
        $this->assertEquals('InsurancePlan.Benefit1', VersionConstants::TYPE_NAME_INSURANCE_PLAN_DOT_BENEFIT_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanBenefit1', VersionConstants::TYPE_CLASS_INSURANCE_PLAN_DOT_BENEFIT_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInsurancePlan_FHIRInsurancePlanContact()
    {
        $this->assertEquals('InsurancePlan.Contact', VersionConstants::TYPE_NAME_INSURANCE_PLAN_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanContact', VersionConstants::TYPE_CLASS_INSURANCE_PLAN_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInsurancePlan_FHIRInsurancePlanCost()
    {
        $this->assertEquals('InsurancePlan.Cost', VersionConstants::TYPE_NAME_INSURANCE_PLAN_DOT_COST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCost', VersionConstants::TYPE_CLASS_INSURANCE_PLAN_DOT_COST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInsurancePlan_FHIRInsurancePlanCoverage()
    {
        $this->assertEquals('InsurancePlan.Coverage', VersionConstants::TYPE_NAME_INSURANCE_PLAN_DOT_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanCoverage', VersionConstants::TYPE_CLASS_INSURANCE_PLAN_DOT_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInsurancePlan_FHIRInsurancePlanGeneralCost()
    {
        $this->assertEquals('InsurancePlan.GeneralCost', VersionConstants::TYPE_NAME_INSURANCE_PLAN_DOT_GENERAL_COST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanGeneralCost', VersionConstants::TYPE_CLASS_INSURANCE_PLAN_DOT_GENERAL_COST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInsurancePlan_FHIRInsurancePlanLimit()
    {
        $this->assertEquals('InsurancePlan.Limit', VersionConstants::TYPE_NAME_INSURANCE_PLAN_DOT_LIMIT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanLimit', VersionConstants::TYPE_CLASS_INSURANCE_PLAN_DOT_LIMIT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInsurancePlan_FHIRInsurancePlanPlan()
    {
        $this->assertEquals('InsurancePlan.Plan', VersionConstants::TYPE_NAME_INSURANCE_PLAN_DOT_PLAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanPlan', VersionConstants::TYPE_CLASS_INSURANCE_PLAN_DOT_PLAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInsurancePlan_FHIRInsurancePlanSpecificCost()
    {
        $this->assertEquals('InsurancePlan.SpecificCost', VersionConstants::TYPE_NAME_INSURANCE_PLAN_DOT_SPECIFIC_COST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInsurancePlan\FHIRInsurancePlanSpecificCost', VersionConstants::TYPE_CLASS_INSURANCE_PLAN_DOT_SPECIFIC_COST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRInteger()
    {
        $this->assertEquals('integer', VersionConstants::TYPE_NAME_INTEGER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteger', VersionConstants::TYPE_CLASS_INTEGER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRIntegerPrimitive()
    {
        $this->assertEquals('integer-primitive', VersionConstants::TYPE_NAME_INTEGER_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRIntegerPrimitive', VersionConstants::TYPE_CLASS_INTEGER_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRInteractionTrigger()
    {
        $this->assertEquals('InteractionTrigger', VersionConstants::TYPE_NAME_INTERACTION_TRIGGER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInteractionTrigger', VersionConstants::TYPE_CLASS_INTERACTION_TRIGGER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRInteractionTriggerEnum()
    {
        $this->assertEquals('InteractionTriggerEnum', VersionConstants::TYPE_NAME_INTERACTION_TRIGGER_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRInteractionTriggerEnum', VersionConstants::TYPE_CLASS_INTERACTION_TRIGGER_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRInvoice()
    {
        $this->assertEquals('Invoice', VersionConstants::TYPE_NAME_INVOICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRInvoice', VersionConstants::TYPE_CLASS_INVOICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInvoice_FHIRInvoiceLineItem()
    {
        $this->assertEquals('Invoice.LineItem', VersionConstants::TYPE_NAME_INVOICE_DOT_LINE_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceLineItem', VersionConstants::TYPE_CLASS_INVOICE_DOT_LINE_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInvoice_FHIRInvoiceParticipant()
    {
        $this->assertEquals('Invoice.Participant', VersionConstants::TYPE_NAME_INVOICE_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoiceParticipant', VersionConstants::TYPE_CLASS_INVOICE_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRInvoice_FHIRInvoicePriceComponent()
    {
        $this->assertEquals('Invoice.PriceComponent', VersionConstants::TYPE_NAME_INVOICE_DOT_PRICE_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRInvoice\FHIRInvoicePriceComponent', VersionConstants::TYPE_CLASS_INVOICE_DOT_PRICE_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRInvoicePriceComponentType()
    {
        $this->assertEquals('InvoicePriceComponentType', VersionConstants::TYPE_NAME_INVOICE_PRICE_COMPONENT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInvoicePriceComponentType', VersionConstants::TYPE_CLASS_INVOICE_PRICE_COMPONENT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRInvoicePriceComponentTypeEnum()
    {
        $this->assertEquals('InvoicePriceComponentTypeEnum', VersionConstants::TYPE_NAME_INVOICE_PRICE_COMPONENT_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRInvoicePriceComponentTypeEnum', VersionConstants::TYPE_CLASS_INVOICE_PRICE_COMPONENT_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRInvoiceStatus()
    {
        $this->assertEquals('InvoiceStatus', VersionConstants::TYPE_NAME_INVOICE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRInvoiceStatus', VersionConstants::TYPE_CLASS_INVOICE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRInvoiceStatusEnum()
    {
        $this->assertEquals('InvoiceStatusEnum', VersionConstants::TYPE_NAME_INVOICE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRInvoiceStatusEnum', VersionConstants::TYPE_CLASS_INVOICE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRIssueSeverity()
    {
        $this->assertEquals('IssueSeverity', VersionConstants::TYPE_NAME_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIssueSeverity', VersionConstants::TYPE_CLASS_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRIssueSeverityEnum()
    {
        $this->assertEquals('IssueSeverityEnum', VersionConstants::TYPE_NAME_ISSUE_SEVERITY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRIssueSeverityEnum', VersionConstants::TYPE_CLASS_ISSUE_SEVERITY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRIssueType()
    {
        $this->assertEquals('IssueType', VersionConstants::TYPE_NAME_ISSUE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRIssueType', VersionConstants::TYPE_CLASS_ISSUE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRIssueTypeEnum()
    {
        $this->assertEquals('IssueTypeEnum', VersionConstants::TYPE_NAME_ISSUE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRIssueTypeEnum', VersionConstants::TYPE_CLASS_ISSUE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRKnowledgeResourceType()
    {
        $this->assertEquals('KnowledgeResourceType', VersionConstants::TYPE_NAME_KNOWLEDGE_RESOURCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRKnowledgeResourceType', VersionConstants::TYPE_CLASS_KNOWLEDGE_RESOURCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRKnowledgeResourceTypeEnum()
    {
        $this->assertEquals('KnowledgeResourceTypeEnum', VersionConstants::TYPE_NAME_KNOWLEDGE_RESOURCE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRKnowledgeResourceTypeEnum', VersionConstants::TYPE_CLASS_KNOWLEDGE_RESOURCE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRLibrary()
    {
        $this->assertEquals('Library', VersionConstants::TYPE_NAME_LIBRARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRLibrary', VersionConstants::TYPE_CLASS_LIBRARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRLinkage()
    {
        $this->assertEquals('Linkage', VersionConstants::TYPE_NAME_LINKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRLinkage', VersionConstants::TYPE_CLASS_LINKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRLinkage_FHIRLinkageItem()
    {
        $this->assertEquals('Linkage.Item', VersionConstants::TYPE_NAME_LINKAGE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLinkage\FHIRLinkageItem', VersionConstants::TYPE_CLASS_LINKAGE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRLinkageType()
    {
        $this->assertEquals('LinkageType', VersionConstants::TYPE_NAME_LINKAGE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLinkageType', VersionConstants::TYPE_CLASS_LINKAGE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRLinkageTypeEnum()
    {
        $this->assertEquals('LinkageTypeEnum', VersionConstants::TYPE_NAME_LINKAGE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLinkageTypeEnum', VersionConstants::TYPE_CLASS_LINKAGE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRLinkType()
    {
        $this->assertEquals('LinkType', VersionConstants::TYPE_NAME_LINK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLinkType', VersionConstants::TYPE_CLASS_LINK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRLinkTypeEnum()
    {
        $this->assertEquals('LinkTypeEnum', VersionConstants::TYPE_NAME_LINK_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLinkTypeEnum', VersionConstants::TYPE_CLASS_LINK_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRList()
    {
        $this->assertEquals('List', VersionConstants::TYPE_NAME_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRList', VersionConstants::TYPE_CLASS_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRList_FHIRListEntry()
    {
        $this->assertEquals('List.Entry', VersionConstants::TYPE_NAME_LIST_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry', VersionConstants::TYPE_CLASS_LIST_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRListMode()
    {
        $this->assertEquals('ListMode', VersionConstants::TYPE_NAME_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRListMode', VersionConstants::TYPE_CLASS_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRListModeEnum()
    {
        $this->assertEquals('ListModeEnum', VersionConstants::TYPE_NAME_LIST_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRListModeEnum', VersionConstants::TYPE_CLASS_LIST_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRListStatus()
    {
        $this->assertEquals('ListStatus', VersionConstants::TYPE_NAME_LIST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRListStatus', VersionConstants::TYPE_CLASS_LIST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRListStatusEnum()
    {
        $this->assertEquals('ListStatusEnum', VersionConstants::TYPE_NAME_LIST_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRListStatusEnum', VersionConstants::TYPE_CLASS_LIST_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRLocation()
    {
        $this->assertEquals('Location', VersionConstants::TYPE_NAME_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRLocation', VersionConstants::TYPE_CLASS_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRLocation_FHIRLocationHoursOfOperation()
    {
        $this->assertEquals('Location.HoursOfOperation', VersionConstants::TYPE_NAME_LOCATION_DOT_HOURS_OF_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationHoursOfOperation', VersionConstants::TYPE_CLASS_LOCATION_DOT_HOURS_OF_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRLocation_FHIRLocationPosition()
    {
        $this->assertEquals('Location.Position', VersionConstants::TYPE_NAME_LOCATION_DOT_POSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition', VersionConstants::TYPE_CLASS_LOCATION_DOT_POSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRLocationMode()
    {
        $this->assertEquals('LocationMode', VersionConstants::TYPE_NAME_LOCATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationMode', VersionConstants::TYPE_CLASS_LOCATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRLocationModeEnum()
    {
        $this->assertEquals('LocationModeEnum', VersionConstants::TYPE_NAME_LOCATION_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLocationModeEnum', VersionConstants::TYPE_CLASS_LOCATION_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRLocationStatus()
    {
        $this->assertEquals('LocationStatus', VersionConstants::TYPE_NAME_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRLocationStatus', VersionConstants::TYPE_CLASS_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRLocationStatusEnum()
    {
        $this->assertEquals('LocationStatusEnum', VersionConstants::TYPE_NAME_LOCATION_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRLocationStatusEnum', VersionConstants::TYPE_CLASS_LOCATION_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRManufacturedItemDefinition()
    {
        $this->assertEquals('ManufacturedItemDefinition', VersionConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRManufacturedItemDefinition', VersionConstants::TYPE_CLASS_MANUFACTURED_ITEM_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRManufacturedItemDefinition_FHIRManufacturedItemDefinitionProperty()
    {
        $this->assertEquals('ManufacturedItemDefinition.Property', VersionConstants::TYPE_NAME_MANUFACTURED_ITEM_DEFINITION_DOT_PROPERTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRManufacturedItemDefinition\FHIRManufacturedItemDefinitionProperty', VersionConstants::TYPE_CLASS_MANUFACTURED_ITEM_DEFINITION_DOT_PROPERTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMarkdown()
    {
        $this->assertEquals('markdown', VersionConstants::TYPE_NAME_MARKDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMarkdown', VersionConstants::TYPE_CLASS_MARKDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRMarkdownPrimitive()
    {
        $this->assertEquals('markdown-primitive', VersionConstants::TYPE_NAME_MARKDOWN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRMarkdownPrimitive', VersionConstants::TYPE_CLASS_MARKDOWN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMarketingStatus()
    {
        $this->assertEquals('MarketingStatus', VersionConstants::TYPE_NAME_MARKETING_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus', VersionConstants::TYPE_CLASS_MARKETING_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMeasure()
    {
        $this->assertEquals('Measure', VersionConstants::TYPE_NAME_MEASURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMeasure', VersionConstants::TYPE_CLASS_MEASURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureComponent()
    {
        $this->assertEquals('Measure.Component', VersionConstants::TYPE_NAME_MEASURE_DOT_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureComponent', VersionConstants::TYPE_CLASS_MEASURE_DOT_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureGroup()
    {
        $this->assertEquals('Measure.Group', VersionConstants::TYPE_NAME_MEASURE_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureGroup', VersionConstants::TYPE_CLASS_MEASURE_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasurePopulation()
    {
        $this->assertEquals('Measure.Population', VersionConstants::TYPE_NAME_MEASURE_DOT_POPULATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasurePopulation', VersionConstants::TYPE_CLASS_MEASURE_DOT_POPULATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureStratifier()
    {
        $this->assertEquals('Measure.Stratifier', VersionConstants::TYPE_NAME_MEASURE_DOT_STRATIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureStratifier', VersionConstants::TYPE_CLASS_MEASURE_DOT_STRATIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasure_FHIRMeasureSupplementalData()
    {
        $this->assertEquals('Measure.SupplementalData', VersionConstants::TYPE_NAME_MEASURE_DOT_SUPPLEMENTAL_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasure\FHIRMeasureSupplementalData', VersionConstants::TYPE_CLASS_MEASURE_DOT_SUPPLEMENTAL_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMeasureReport()
    {
        $this->assertEquals('MeasureReport', VersionConstants::TYPE_NAME_MEASURE_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMeasureReport', VersionConstants::TYPE_CLASS_MEASURE_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportComponent()
    {
        $this->assertEquals('MeasureReport.Component', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportComponent', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportGroup()
    {
        $this->assertEquals('MeasureReport.Group', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportGroup', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportPopulation()
    {
        $this->assertEquals('MeasureReport.Population', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_POPULATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_POPULATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportPopulation1()
    {
        $this->assertEquals('MeasureReport.Population1', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_POPULATION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportPopulation1', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_POPULATION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportStratifier()
    {
        $this->assertEquals('MeasureReport.Stratifier', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_STRATIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratifier', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_STRATIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMeasureReport_FHIRMeasureReportStratum()
    {
        $this->assertEquals('MeasureReport.Stratum', VersionConstants::TYPE_NAME_MEASURE_REPORT_DOT_STRATUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMeasureReport\FHIRMeasureReportStratum', VersionConstants::TYPE_CLASS_MEASURE_REPORT_DOT_STRATUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMeasureReportStatus()
    {
        $this->assertEquals('MeasureReportStatus', VersionConstants::TYPE_NAME_MEASURE_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeasureReportStatus', VersionConstants::TYPE_CLASS_MEASURE_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRMeasureReportStatusEnum()
    {
        $this->assertEquals('MeasureReportStatusEnum', VersionConstants::TYPE_NAME_MEASURE_REPORT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRMeasureReportStatusEnum', VersionConstants::TYPE_CLASS_MEASURE_REPORT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMeasureReportType()
    {
        $this->assertEquals('MeasureReportType', VersionConstants::TYPE_NAME_MEASURE_REPORT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeasureReportType', VersionConstants::TYPE_CLASS_MEASURE_REPORT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRMeasureReportTypeEnum()
    {
        $this->assertEquals('MeasureReportTypeEnum', VersionConstants::TYPE_NAME_MEASURE_REPORT_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRMeasureReportTypeEnum', VersionConstants::TYPE_CLASS_MEASURE_REPORT_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMedia()
    {
        $this->assertEquals('Media', VersionConstants::TYPE_NAME_MEDIA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedia', VersionConstants::TYPE_CLASS_MEDIA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMedication()
    {
        $this->assertEquals('Medication', VersionConstants::TYPE_NAME_MEDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedication', VersionConstants::TYPE_CLASS_MEDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationBatch()
    {
        $this->assertEquals('Medication.Batch', VersionConstants::TYPE_NAME_MEDICATION_DOT_BATCH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch', VersionConstants::TYPE_CLASS_MEDICATION_DOT_BATCH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationIngredient()
    {
        $this->assertEquals('Medication.Ingredient', VersionConstants::TYPE_NAME_MEDICATION_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient', VersionConstants::TYPE_CLASS_MEDICATION_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMedicationAdministration()
    {
        $this->assertEquals('MedicationAdministration', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationAdministration_FHIRMedicationAdministrationDosage()
    {
        $this->assertEquals('MedicationAdministration.Dosage', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationAdministration_FHIRMedicationAdministrationPerformer()
    {
        $this->assertEquals('MedicationAdministration.Performer', VersionConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer', VersionConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMedicationDispense()
    {
        $this->assertEquals('MedicationDispense', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicationDispense', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispensePerformer()
    {
        $this->assertEquals('MedicationDispense.Performer', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispensePerformer', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseSubstitution()
    {
        $this->assertEquals('MedicationDispense.Substitution', VersionConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution', VersionConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMedicationKnowledge()
    {
        $this->assertEquals('MedicationKnowledge', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicationKnowledge', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeAdministrationGuidelines()
    {
        $this->assertEquals('MedicationKnowledge.AdministrationGuidelines', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_ADMINISTRATION_GUIDELINES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeAdministrationGuidelines', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_ADMINISTRATION_GUIDELINES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeCost()
    {
        $this->assertEquals('MedicationKnowledge.Cost', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_COST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeCost', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_COST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeDosage()
    {
        $this->assertEquals('MedicationKnowledge.Dosage', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDosage', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeDrugCharacteristic()
    {
        $this->assertEquals('MedicationKnowledge.DrugCharacteristic', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_DRUG_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeDrugCharacteristic', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_DRUG_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeIngredient()
    {
        $this->assertEquals('MedicationKnowledge.Ingredient', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeIngredient', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeKinetics()
    {
        $this->assertEquals('MedicationKnowledge.Kinetics', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_KINETICS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeKinetics', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_KINETICS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeMaxDispense()
    {
        $this->assertEquals('MedicationKnowledge.MaxDispense', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_MAX_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMaxDispense', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_MAX_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeMedicineClassification()
    {
        $this->assertEquals('MedicationKnowledge.MedicineClassification', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_MEDICINE_CLASSIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_MEDICINE_CLASSIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeMonitoringProgram()
    {
        $this->assertEquals('MedicationKnowledge.MonitoringProgram', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_MONITORING_PROGRAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonitoringProgram', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_MONITORING_PROGRAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeMonograph()
    {
        $this->assertEquals('MedicationKnowledge.Monograph', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_MONOGRAPH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMonograph', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_MONOGRAPH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgePackaging()
    {
        $this->assertEquals('MedicationKnowledge.Packaging', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_PACKAGING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePackaging', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_PACKAGING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgePatientCharacteristics()
    {
        $this->assertEquals('MedicationKnowledge.PatientCharacteristics', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_PATIENT_CHARACTERISTICS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgePatientCharacteristics', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_PATIENT_CHARACTERISTICS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeRegulatory()
    {
        $this->assertEquals('MedicationKnowledge.Regulatory', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_REGULATORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRegulatory', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_REGULATORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeRelatedMedicationKnowledge()
    {
        $this->assertEquals('MedicationKnowledge.RelatedMedicationKnowledge', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_RELATED_MEDICATION_KNOWLEDGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeRelatedMedicationKnowledge', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_RELATED_MEDICATION_KNOWLEDGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeSchedule()
    {
        $this->assertEquals('MedicationKnowledge.Schedule', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_SCHEDULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSchedule', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_SCHEDULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationKnowledge_FHIRMedicationKnowledgeSubstitution()
    {
        $this->assertEquals('MedicationKnowledge.Substitution', VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeSubstitution', VersionConstants::TYPE_CLASS_MEDICATION_KNOWLEDGE_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMedicationRequest()
    {
        $this->assertEquals('MedicationRequest', VersionConstants::TYPE_NAME_MEDICATION_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicationRequest', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationRequest_FHIRMedicationRequestDispenseRequest()
    {
        $this->assertEquals('MedicationRequest.DispenseRequest', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_DOT_DISPENSE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationRequest_FHIRMedicationRequestInitialFill()
    {
        $this->assertEquals('MedicationRequest.InitialFill', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_INITIAL_FILL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestInitialFill', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_DOT_INITIAL_FILL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicationRequest_FHIRMedicationRequestSubstitution()
    {
        $this->assertEquals('MedicationRequest.Substitution', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMedicationRequestIntent()
    {
        $this->assertEquals('medicationRequestIntent', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMedicationRequestIntent', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRMedicationRequestIntentEnum()
    {
        $this->assertEquals('medicationRequestIntentEnum', VersionConstants::TYPE_NAME_MEDICATION_REQUEST_INTENT_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRMedicationRequestIntentEnum', VersionConstants::TYPE_CLASS_MEDICATION_REQUEST_INTENT_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMedicationrequestStatus()
    {
        $this->assertEquals('medicationrequestStatus', VersionConstants::TYPE_NAME_MEDICATIONREQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMedicationrequestStatus', VersionConstants::TYPE_CLASS_MEDICATIONREQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRMedicationrequestStatusEnum()
    {
        $this->assertEquals('medicationrequestStatusEnum', VersionConstants::TYPE_NAME_MEDICATIONREQUEST_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRMedicationrequestStatusEnum', VersionConstants::TYPE_CLASS_MEDICATIONREQUEST_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMedicationStatement()
    {
        $this->assertEquals('MedicationStatement', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicationStatement', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMedicationStatementStatusCodes()
    {
        $this->assertEquals('MedicationStatementStatusCodes', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMedicationStatementStatusCodes', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRMedicationStatementStatusCodesEnum()
    {
        $this->assertEquals('MedicationStatementStatusCodesEnum', VersionConstants::TYPE_NAME_MEDICATION_STATEMENT_STATUS_CODES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRMedicationStatementStatusCodesEnum', VersionConstants::TYPE_CLASS_MEDICATION_STATEMENT_STATUS_CODES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMedicationStatusCodes()
    {
        $this->assertEquals('MedicationStatusCodes', VersionConstants::TYPE_NAME_MEDICATION_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMedicationStatusCodes', VersionConstants::TYPE_CLASS_MEDICATION_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRMedicationStatusCodesEnum()
    {
        $this->assertEquals('MedicationStatusCodesEnum', VersionConstants::TYPE_NAME_MEDICATION_STATUS_CODES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRMedicationStatusCodesEnum', VersionConstants::TYPE_CLASS_MEDICATION_STATUS_CODES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMedicinalProductDefinition()
    {
        $this->assertEquals('MedicinalProductDefinition', VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition', VersionConstants::TYPE_CLASS_MEDICINAL_PRODUCT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicinalProductDefinition_FHIRMedicinalProductDefinitionCharacteristic()
    {
        $this->assertEquals('MedicinalProductDefinition.Characteristic', VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic', VersionConstants::TYPE_CLASS_MEDICINAL_PRODUCT_DEFINITION_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicinalProductDefinition_FHIRMedicinalProductDefinitionContact()
    {
        $this->assertEquals('MedicinalProductDefinition.Contact', VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact', VersionConstants::TYPE_CLASS_MEDICINAL_PRODUCT_DEFINITION_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicinalProductDefinition_FHIRMedicinalProductDefinitionCountryLanguage()
    {
        $this->assertEquals('MedicinalProductDefinition.CountryLanguage', VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION_DOT_COUNTRY_LANGUAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCountryLanguage', VersionConstants::TYPE_CLASS_MEDICINAL_PRODUCT_DEFINITION_DOT_COUNTRY_LANGUAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicinalProductDefinition_FHIRMedicinalProductDefinitionCrossReference()
    {
        $this->assertEquals('MedicinalProductDefinition.CrossReference', VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION_DOT_CROSS_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference', VersionConstants::TYPE_CLASS_MEDICINAL_PRODUCT_DEFINITION_DOT_CROSS_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicinalProductDefinition_FHIRMedicinalProductDefinitionName()
    {
        $this->assertEquals('MedicinalProductDefinition.Name', VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION_DOT_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName', VersionConstants::TYPE_CLASS_MEDICINAL_PRODUCT_DEFINITION_DOT_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicinalProductDefinition_FHIRMedicinalProductDefinitionNamePart()
    {
        $this->assertEquals('MedicinalProductDefinition.NamePart', VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION_DOT_NAME_PART);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionNamePart', VersionConstants::TYPE_CLASS_MEDICINAL_PRODUCT_DEFINITION_DOT_NAME_PART);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMedicinalProductDefinition_FHIRMedicinalProductDefinitionOperation()
    {
        $this->assertEquals('MedicinalProductDefinition.Operation', VersionConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation', VersionConstants::TYPE_CLASS_MEDICINAL_PRODUCT_DEFINITION_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMessageDefinition()
    {
        $this->assertEquals('MessageDefinition', VersionConstants::TYPE_NAME_MESSAGE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMessageDefinition', VersionConstants::TYPE_CLASS_MESSAGE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMessageDefinition_FHIRMessageDefinitionAllowedResponse()
    {
        $this->assertEquals('MessageDefinition.AllowedResponse', VersionConstants::TYPE_NAME_MESSAGE_DEFINITION_DOT_ALLOWED_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionAllowedResponse', VersionConstants::TYPE_CLASS_MESSAGE_DEFINITION_DOT_ALLOWED_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMessageDefinition_FHIRMessageDefinitionFocus()
    {
        $this->assertEquals('MessageDefinition.Focus', VersionConstants::TYPE_NAME_MESSAGE_DEFINITION_DOT_FOCUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageDefinition\FHIRMessageDefinitionFocus', VersionConstants::TYPE_CLASS_MESSAGE_DEFINITION_DOT_FOCUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMessageHeader()
    {
        $this->assertEquals('MessageHeader', VersionConstants::TYPE_NAME_MESSAGE_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMessageHeader', VersionConstants::TYPE_CLASS_MESSAGE_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderDestination()
    {
        $this->assertEquals('MessageHeader.Destination', VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_DESTINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination', VersionConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_DESTINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderResponse()
    {
        $this->assertEquals('MessageHeader.Response', VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse', VersionConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderSource()
    {
        $this->assertEquals('MessageHeader.Source', VersionConstants::TYPE_NAME_MESSAGE_HEADER_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource', VersionConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMessageheaderResponseRequest()
    {
        $this->assertEquals('messageheaderResponseRequest', VersionConstants::TYPE_NAME_MESSAGEHEADER_RESPONSE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMessageheaderResponseRequest', VersionConstants::TYPE_CLASS_MESSAGEHEADER_RESPONSE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRMessageheaderResponseRequestEnum()
    {
        $this->assertEquals('messageheaderResponseRequestEnum', VersionConstants::TYPE_NAME_MESSAGEHEADER_RESPONSE_REQUEST_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRMessageheaderResponseRequestEnum', VersionConstants::TYPE_CLASS_MESSAGEHEADER_RESPONSE_REQUEST_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMessageSignificanceCategory()
    {
        $this->assertEquals('MessageSignificanceCategory', VersionConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMessageSignificanceCategory', VersionConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRMessageSignificanceCategoryEnum()
    {
        $this->assertEquals('MessageSignificanceCategoryEnum', VersionConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRMessageSignificanceCategoryEnum', VersionConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMeta()
    {
        $this->assertEquals('Meta', VersionConstants::TYPE_NAME_META);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMeta', VersionConstants::TYPE_CLASS_META);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRMolecularSequence()
    {
        $this->assertEquals('MolecularSequence', VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRMolecularSequence', VersionConstants::TYPE_CLASS_MOLECULAR_SEQUENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMolecularSequence_FHIRMolecularSequenceInner()
    {
        $this->assertEquals('MolecularSequence.Inner', VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_INNER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceInner', VersionConstants::TYPE_CLASS_MOLECULAR_SEQUENCE_DOT_INNER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMolecularSequence_FHIRMolecularSequenceOuter()
    {
        $this->assertEquals('MolecularSequence.Outer', VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_OUTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceOuter', VersionConstants::TYPE_CLASS_MOLECULAR_SEQUENCE_DOT_OUTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMolecularSequence_FHIRMolecularSequenceQuality()
    {
        $this->assertEquals('MolecularSequence.Quality', VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_QUALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceQuality', VersionConstants::TYPE_CLASS_MOLECULAR_SEQUENCE_DOT_QUALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMolecularSequence_FHIRMolecularSequenceReferenceSeq()
    {
        $this->assertEquals('MolecularSequence.ReferenceSeq', VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REFERENCE_SEQ);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceReferenceSeq', VersionConstants::TYPE_CLASS_MOLECULAR_SEQUENCE_DOT_REFERENCE_SEQ);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMolecularSequence_FHIRMolecularSequenceRepository()
    {
        $this->assertEquals('MolecularSequence.Repository', VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REPOSITORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository', VersionConstants::TYPE_CLASS_MOLECULAR_SEQUENCE_DOT_REPOSITORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMolecularSequence_FHIRMolecularSequenceRoc()
    {
        $this->assertEquals('MolecularSequence.Roc', VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc', VersionConstants::TYPE_CLASS_MOLECULAR_SEQUENCE_DOT_ROC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMolecularSequence_FHIRMolecularSequenceStructureVariant()
    {
        $this->assertEquals('MolecularSequence.StructureVariant', VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_STRUCTURE_VARIANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceStructureVariant', VersionConstants::TYPE_CLASS_MOLECULAR_SEQUENCE_DOT_STRUCTURE_VARIANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRMolecularSequence_FHIRMolecularSequenceVariant()
    {
        $this->assertEquals('MolecularSequence.Variant', VersionConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_VARIANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceVariant', VersionConstants::TYPE_CLASS_MOLECULAR_SEQUENCE_DOT_VARIANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRMoney()
    {
        $this->assertEquals('Money', VersionConstants::TYPE_NAME_MONEY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRMoney', VersionConstants::TYPE_CLASS_MONEY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRNameUse()
    {
        $this->assertEquals('NameUse', VersionConstants::TYPE_NAME_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNameUse', VersionConstants::TYPE_CLASS_NAME_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRNameUseEnum()
    {
        $this->assertEquals('NameUseEnum', VersionConstants::TYPE_NAME_NAME_USE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRNameUseEnum', VersionConstants::TYPE_CLASS_NAME_USE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRNamingSystem()
    {
        $this->assertEquals('NamingSystem', VersionConstants::TYPE_NAME_NAMING_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRNamingSystem', VersionConstants::TYPE_CLASS_NAMING_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNamingSystem_FHIRNamingSystemUniqueId()
    {
        $this->assertEquals('NamingSystem.UniqueId', VersionConstants::TYPE_NAME_NAMING_SYSTEM_DOT_UNIQUE_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_DOT_UNIQUE_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRNamingSystemIdentifierType()
    {
        $this->assertEquals('NamingSystemIdentifierType', VersionConstants::TYPE_NAME_NAMING_SYSTEM_IDENTIFIER_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNamingSystemIdentifierType', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_IDENTIFIER_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRNamingSystemIdentifierTypeEnum()
    {
        $this->assertEquals('NamingSystemIdentifierTypeEnum', VersionConstants::TYPE_NAME_NAMING_SYSTEM_IDENTIFIER_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRNamingSystemIdentifierTypeEnum', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_IDENTIFIER_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRNamingSystemType()
    {
        $this->assertEquals('NamingSystemType', VersionConstants::TYPE_NAME_NAMING_SYSTEM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNamingSystemType', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRNamingSystemTypeEnum()
    {
        $this->assertEquals('NamingSystemTypeEnum', VersionConstants::TYPE_NAME_NAMING_SYSTEM_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRNamingSystemTypeEnum', VersionConstants::TYPE_CLASS_NAMING_SYSTEM_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRNarrative()
    {
        $this->assertEquals('Narrative', VersionConstants::TYPE_NAME_NARRATIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrative', VersionConstants::TYPE_CLASS_NARRATIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRNarrativeStatus()
    {
        $this->assertEquals('NarrativeStatus', VersionConstants::TYPE_NAME_NARRATIVE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNarrativeStatus', VersionConstants::TYPE_CLASS_NARRATIVE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRNarrativeStatusEnum()
    {
        $this->assertEquals('NarrativeStatusEnum', VersionConstants::TYPE_NAME_NARRATIVE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRNarrativeStatusEnum', VersionConstants::TYPE_CLASS_NARRATIVE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRNoteType()
    {
        $this->assertEquals('NoteType', VersionConstants::TYPE_NAME_NOTE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNoteType', VersionConstants::TYPE_CLASS_NOTE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRNoteTypeEnum()
    {
        $this->assertEquals('NoteTypeEnum', VersionConstants::TYPE_NAME_NOTE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRNoteTypeEnum', VersionConstants::TYPE_CLASS_NOTE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRNutritionOrder()
    {
        $this->assertEquals('NutritionOrder', VersionConstants::TYPE_NAME_NUTRITION_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder', VersionConstants::TYPE_CLASS_NUTRITION_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderAdministration()
    {
        $this->assertEquals('NutritionOrder.Administration', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderEnteralFormula()
    {
        $this->assertEquals('NutritionOrder.EnteralFormula', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ENTERAL_FORMULA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderNutrient()
    {
        $this->assertEquals('NutritionOrder.Nutrient', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_NUTRIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_NUTRIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderOralDiet()
    {
        $this->assertEquals('NutritionOrder.OralDiet', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ORAL_DIET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderSupplement()
    {
        $this->assertEquals('NutritionOrder.Supplement', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_SUPPLEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_SUPPLEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderTexture()
    {
        $this->assertEquals('NutritionOrder.Texture', VersionConstants::TYPE_NAME_NUTRITION_ORDER_DOT_TEXTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture', VersionConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_TEXTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRNutritionProduct()
    {
        $this->assertEquals('NutritionProduct', VersionConstants::TYPE_NAME_NUTRITION_PRODUCT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRNutritionProduct', VersionConstants::TYPE_CLASS_NUTRITION_PRODUCT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionProduct_FHIRNutritionProductIngredient()
    {
        $this->assertEquals('NutritionProduct.Ingredient', VersionConstants::TYPE_NAME_NUTRITION_PRODUCT_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionProduct\FHIRNutritionProductIngredient', VersionConstants::TYPE_CLASS_NUTRITION_PRODUCT_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionProduct_FHIRNutritionProductInstance()
    {
        $this->assertEquals('NutritionProduct.Instance', VersionConstants::TYPE_NAME_NUTRITION_PRODUCT_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionProduct\FHIRNutritionProductInstance', VersionConstants::TYPE_CLASS_NUTRITION_PRODUCT_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionProduct_FHIRNutritionProductNutrient()
    {
        $this->assertEquals('NutritionProduct.Nutrient', VersionConstants::TYPE_NAME_NUTRITION_PRODUCT_DOT_NUTRIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionProduct\FHIRNutritionProductNutrient', VersionConstants::TYPE_CLASS_NUTRITION_PRODUCT_DOT_NUTRIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRNutritionProduct_FHIRNutritionProductProductCharacteristic()
    {
        $this->assertEquals('NutritionProduct.ProductCharacteristic', VersionConstants::TYPE_NAME_NUTRITION_PRODUCT_DOT_PRODUCT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRNutritionProduct\FHIRNutritionProductProductCharacteristic', VersionConstants::TYPE_CLASS_NUTRITION_PRODUCT_DOT_PRODUCT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRNutritionProductStatus()
    {
        $this->assertEquals('NutritionProductStatus', VersionConstants::TYPE_NAME_NUTRITION_PRODUCT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRNutritionProductStatus', VersionConstants::TYPE_CLASS_NUTRITION_PRODUCT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRNutritionProductStatusEnum()
    {
        $this->assertEquals('NutritionProductStatusEnum', VersionConstants::TYPE_NAME_NUTRITION_PRODUCT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRNutritionProductStatusEnum', VersionConstants::TYPE_CLASS_NUTRITION_PRODUCT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRObservation()
    {
        $this->assertEquals('Observation', VersionConstants::TYPE_NAME_OBSERVATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRObservation', VersionConstants::TYPE_CLASS_OBSERVATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationComponent()
    {
        $this->assertEquals('Observation.Component', VersionConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent', VersionConstants::TYPE_CLASS_OBSERVATION_DOT_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationReferenceRange()
    {
        $this->assertEquals('Observation.ReferenceRange', VersionConstants::TYPE_NAME_OBSERVATION_DOT_REFERENCE_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange', VersionConstants::TYPE_CLASS_OBSERVATION_DOT_REFERENCE_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRObservationDataType()
    {
        $this->assertEquals('ObservationDataType', VersionConstants::TYPE_NAME_OBSERVATION_DATA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRObservationDataType', VersionConstants::TYPE_CLASS_OBSERVATION_DATA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRObservationDataTypeEnum()
    {
        $this->assertEquals('ObservationDataTypeEnum', VersionConstants::TYPE_NAME_OBSERVATION_DATA_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRObservationDataTypeEnum', VersionConstants::TYPE_CLASS_OBSERVATION_DATA_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRObservationDefinition()
    {
        $this->assertEquals('ObservationDefinition', VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRObservationDefinition', VersionConstants::TYPE_CLASS_OBSERVATION_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRObservationDefinition_FHIRObservationDefinitionQualifiedInterval()
    {
        $this->assertEquals('ObservationDefinition.QualifiedInterval', VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQualifiedInterval', VersionConstants::TYPE_CLASS_OBSERVATION_DEFINITION_DOT_QUALIFIED_INTERVAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRObservationDefinition_FHIRObservationDefinitionQuantitativeDetails()
    {
        $this->assertEquals('ObservationDefinition.QuantitativeDetails', VersionConstants::TYPE_NAME_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRObservationDefinition\FHIRObservationDefinitionQuantitativeDetails', VersionConstants::TYPE_CLASS_OBSERVATION_DEFINITION_DOT_QUANTITATIVE_DETAILS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRObservationRangeCategory()
    {
        $this->assertEquals('ObservationRangeCategory', VersionConstants::TYPE_NAME_OBSERVATION_RANGE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRObservationRangeCategory', VersionConstants::TYPE_CLASS_OBSERVATION_RANGE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRObservationRangeCategoryEnum()
    {
        $this->assertEquals('ObservationRangeCategoryEnum', VersionConstants::TYPE_NAME_OBSERVATION_RANGE_CATEGORY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRObservationRangeCategoryEnum', VersionConstants::TYPE_CLASS_OBSERVATION_RANGE_CATEGORY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRObservationStatus()
    {
        $this->assertEquals('ObservationStatus', VersionConstants::TYPE_NAME_OBSERVATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRObservationStatus', VersionConstants::TYPE_CLASS_OBSERVATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRObservationStatusEnum()
    {
        $this->assertEquals('ObservationStatusEnum', VersionConstants::TYPE_NAME_OBSERVATION_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRObservationStatusEnum', VersionConstants::TYPE_CLASS_OBSERVATION_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIROid()
    {
        $this->assertEquals('oid', VersionConstants::TYPE_NAME_OID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIROid', VersionConstants::TYPE_CLASS_OID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIROidPrimitive()
    {
        $this->assertEquals('oid-primitive', VersionConstants::TYPE_NAME_OID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIROidPrimitive', VersionConstants::TYPE_CLASS_OID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIROperationDefinition()
    {
        $this->assertEquals('OperationDefinition', VersionConstants::TYPE_NAME_OPERATION_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIROperationDefinition', VersionConstants::TYPE_CLASS_OPERATION_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionBinding()
    {
        $this->assertEquals('OperationDefinition.Binding', VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding', VersionConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionOverload()
    {
        $this->assertEquals('OperationDefinition.Overload', VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_OVERLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionOverload', VersionConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_OVERLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionParameter()
    {
        $this->assertEquals('OperationDefinition.Parameter', VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter', VersionConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionReferencedFrom()
    {
        $this->assertEquals('OperationDefinition.ReferencedFrom', VersionConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_REFERENCED_FROM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionReferencedFrom', VersionConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_REFERENCED_FROM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIROperationKind()
    {
        $this->assertEquals('OperationKind', VersionConstants::TYPE_NAME_OPERATION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIROperationKind', VersionConstants::TYPE_CLASS_OPERATION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIROperationKindEnum()
    {
        $this->assertEquals('OperationKindEnum', VersionConstants::TYPE_NAME_OPERATION_KIND_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIROperationKindEnum', VersionConstants::TYPE_CLASS_OPERATION_KIND_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIROperationOutcome()
    {
        $this->assertEquals('OperationOutcome', VersionConstants::TYPE_NAME_OPERATION_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIROperationOutcome', VersionConstants::TYPE_CLASS_OPERATION_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIROperationOutcome_FHIROperationOutcomeIssue()
    {
        $this->assertEquals('OperationOutcome.Issue', VersionConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue', VersionConstants::TYPE_CLASS_OPERATION_OUTCOME_DOT_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIROperationParameterUse()
    {
        $this->assertEquals('OperationParameterUse', VersionConstants::TYPE_NAME_OPERATION_PARAMETER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIROperationParameterUse', VersionConstants::TYPE_CLASS_OPERATION_PARAMETER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIROperationParameterUseEnum()
    {
        $this->assertEquals('OperationParameterUseEnum', VersionConstants::TYPE_NAME_OPERATION_PARAMETER_USE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIROperationParameterUseEnum', VersionConstants::TYPE_CLASS_OPERATION_PARAMETER_USE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIROrganization()
    {
        $this->assertEquals('Organization', VersionConstants::TYPE_NAME_ORGANIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIROrganization', VersionConstants::TYPE_CLASS_ORGANIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIROrganization_FHIROrganizationContact()
    {
        $this->assertEquals('Organization.Contact', VersionConstants::TYPE_NAME_ORGANIZATION_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact', VersionConstants::TYPE_CLASS_ORGANIZATION_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIROrganizationAffiliation()
    {
        $this->assertEquals('OrganizationAffiliation', VersionConstants::TYPE_NAME_ORGANIZATION_AFFILIATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIROrganizationAffiliation', VersionConstants::TYPE_CLASS_ORGANIZATION_AFFILIATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIROrientationType()
    {
        $this->assertEquals('orientationType', VersionConstants::TYPE_NAME_ORIENTATION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIROrientationType', VersionConstants::TYPE_CLASS_ORIENTATION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIROrientationTypeEnum()
    {
        $this->assertEquals('orientationTypeEnum', VersionConstants::TYPE_NAME_ORIENTATION_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIROrientationTypeEnum', VersionConstants::TYPE_CLASS_ORIENTATION_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRPackagedProductDefinition()
    {
        $this->assertEquals('PackagedProductDefinition', VersionConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPackagedProductDefinition', VersionConstants::TYPE_CLASS_PACKAGED_PRODUCT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPackagedProductDefinition_FHIRPackagedProductDefinitionContainedItem()
    {
        $this->assertEquals('PackagedProductDefinition.ContainedItem', VersionConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_CONTAINED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem', VersionConstants::TYPE_CLASS_PACKAGED_PRODUCT_DEFINITION_DOT_CONTAINED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPackagedProductDefinition_FHIRPackagedProductDefinitionLegalStatusOfSupply()
    {
        $this->assertEquals('PackagedProductDefinition.LegalStatusOfSupply', VersionConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_LEGAL_STATUS_OF_SUPPLY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionLegalStatusOfSupply', VersionConstants::TYPE_CLASS_PACKAGED_PRODUCT_DEFINITION_DOT_LEGAL_STATUS_OF_SUPPLY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPackagedProductDefinition_FHIRPackagedProductDefinitionPackage()
    {
        $this->assertEquals('PackagedProductDefinition.Package', VersionConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage', VersionConstants::TYPE_CLASS_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPackagedProductDefinition_FHIRPackagedProductDefinitionProperty()
    {
        $this->assertEquals('PackagedProductDefinition.Property', VersionConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PROPERTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty', VersionConstants::TYPE_CLASS_PACKAGED_PRODUCT_DEFINITION_DOT_PROPERTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPackagedProductDefinition_FHIRPackagedProductDefinitionShelfLifeStorage()
    {
        $this->assertEquals('PackagedProductDefinition.ShelfLifeStorage', VersionConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_SHELF_LIFE_STORAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage', VersionConstants::TYPE_CLASS_PACKAGED_PRODUCT_DEFINITION_DOT_SHELF_LIFE_STORAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRParameterDefinition()
    {
        $this->assertEquals('ParameterDefinition', VersionConstants::TYPE_NAME_PARAMETER_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRParameterDefinition', VersionConstants::TYPE_CLASS_PARAMETER_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRParameters()
    {
        $this->assertEquals('Parameters', VersionConstants::TYPE_NAME_PARAMETERS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRParameters', VersionConstants::TYPE_CLASS_PARAMETERS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRParameters_FHIRParametersParameter()
    {
        $this->assertEquals('Parameters.Parameter', VersionConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter', VersionConstants::TYPE_CLASS_PARAMETERS_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRParticipantRequired()
    {
        $this->assertEquals('ParticipantRequired', VersionConstants::TYPE_NAME_PARTICIPANT_REQUIRED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRParticipantRequired', VersionConstants::TYPE_CLASS_PARTICIPANT_REQUIRED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRParticipantRequiredEnum()
    {
        $this->assertEquals('ParticipantRequiredEnum', VersionConstants::TYPE_NAME_PARTICIPANT_REQUIRED_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRParticipantRequiredEnum', VersionConstants::TYPE_CLASS_PARTICIPANT_REQUIRED_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRParticipationStatus()
    {
        $this->assertEquals('ParticipationStatus', VersionConstants::TYPE_NAME_PARTICIPATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRParticipationStatus', VersionConstants::TYPE_CLASS_PARTICIPATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRParticipationStatusEnum()
    {
        $this->assertEquals('ParticipationStatusEnum', VersionConstants::TYPE_NAME_PARTICIPATION_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRParticipationStatusEnum', VersionConstants::TYPE_CLASS_PARTICIPATION_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRPatient()
    {
        $this->assertEquals('Patient', VersionConstants::TYPE_NAME_PATIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPatient', VersionConstants::TYPE_CLASS_PATIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientCommunication()
    {
        $this->assertEquals('Patient.Communication', VersionConstants::TYPE_NAME_PATIENT_DOT_COMMUNICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication', VersionConstants::TYPE_CLASS_PATIENT_DOT_COMMUNICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientContact()
    {
        $this->assertEquals('Patient.Contact', VersionConstants::TYPE_NAME_PATIENT_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact', VersionConstants::TYPE_CLASS_PATIENT_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientLink()
    {
        $this->assertEquals('Patient.Link', VersionConstants::TYPE_NAME_PATIENT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink', VersionConstants::TYPE_CLASS_PATIENT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRPaymentNotice()
    {
        $this->assertEquals('PaymentNotice', VersionConstants::TYPE_NAME_PAYMENT_NOTICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPaymentNotice', VersionConstants::TYPE_CLASS_PAYMENT_NOTICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRPaymentReconciliation()
    {
        $this->assertEquals('PaymentReconciliation', VersionConstants::TYPE_NAME_PAYMENT_RECONCILIATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation', VersionConstants::TYPE_CLASS_PAYMENT_RECONCILIATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPaymentReconciliation_FHIRPaymentReconciliationDetail()
    {
        $this->assertEquals('PaymentReconciliation.Detail', VersionConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail', VersionConstants::TYPE_CLASS_PAYMENT_RECONCILIATION_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPaymentReconciliation_FHIRPaymentReconciliationProcessNote()
    {
        $this->assertEquals('PaymentReconciliation.ProcessNote', VersionConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_PROCESS_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationProcessNote', VersionConstants::TYPE_CLASS_PAYMENT_RECONCILIATION_DOT_PROCESS_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRPeriod()
    {
        $this->assertEquals('Period', VersionConstants::TYPE_NAME_PERIOD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPeriod', VersionConstants::TYPE_CLASS_PERIOD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRPerson()
    {
        $this->assertEquals('Person', VersionConstants::TYPE_NAME_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPerson', VersionConstants::TYPE_CLASS_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPerson_FHIRPersonLink()
    {
        $this->assertEquals('Person.Link', VersionConstants::TYPE_NAME_PERSON_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink', VersionConstants::TYPE_CLASS_PERSON_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRPlanDefinition()
    {
        $this->assertEquals('PlanDefinition', VersionConstants::TYPE_NAME_PLAN_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPlanDefinition', VersionConstants::TYPE_CLASS_PLAN_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionAction()
    {
        $this->assertEquals('PlanDefinition.Action', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionAction', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionCondition()
    {
        $this->assertEquals('PlanDefinition.Condition', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionCondition', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionDynamicValue()
    {
        $this->assertEquals('PlanDefinition.DynamicValue', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_DYNAMIC_VALUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionDynamicValue', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_DYNAMIC_VALUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionGoal()
    {
        $this->assertEquals('PlanDefinition.Goal', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_GOAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionGoal', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_GOAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionParticipant()
    {
        $this->assertEquals('PlanDefinition.Participant', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionParticipant', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionRelatedAction()
    {
        $this->assertEquals('PlanDefinition.RelatedAction', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_RELATED_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionRelatedAction', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_RELATED_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPlanDefinition_FHIRPlanDefinitionTarget()
    {
        $this->assertEquals('PlanDefinition.Target', VersionConstants::TYPE_NAME_PLAN_DEFINITION_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPlanDefinition\FHIRPlanDefinitionTarget', VersionConstants::TYPE_CLASS_PLAN_DEFINITION_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPopulation()
    {
        $this->assertEquals('Population', VersionConstants::TYPE_NAME_POPULATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPopulation', VersionConstants::TYPE_CLASS_POPULATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRPositiveInt()
    {
        $this->assertEquals('positiveInt', VersionConstants::TYPE_NAME_POSITIVE_INT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPositiveInt', VersionConstants::TYPE_CLASS_POSITIVE_INT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRPositiveIntPrimitive()
    {
        $this->assertEquals('positiveInt-primitive', VersionConstants::TYPE_NAME_POSITIVE_INT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRPositiveIntPrimitive', VersionConstants::TYPE_CLASS_POSITIVE_INT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRPractitioner()
    {
        $this->assertEquals('Practitioner', VersionConstants::TYPE_NAME_PRACTITIONER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPractitioner', VersionConstants::TYPE_CLASS_PRACTITIONER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPractitioner_FHIRPractitionerQualification()
    {
        $this->assertEquals('Practitioner.Qualification', VersionConstants::TYPE_NAME_PRACTITIONER_DOT_QUALIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification', VersionConstants::TYPE_CLASS_PRACTITIONER_DOT_QUALIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRPractitionerRole()
    {
        $this->assertEquals('PractitionerRole', VersionConstants::TYPE_NAME_PRACTITIONER_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRPractitionerRole', VersionConstants::TYPE_CLASS_PRACTITIONER_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPractitionerRole_FHIRPractitionerRoleAvailableTime()
    {
        $this->assertEquals('PractitionerRole.AvailableTime', VersionConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleAvailableTime', VersionConstants::TYPE_CLASS_PRACTITIONER_ROLE_DOT_AVAILABLE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRPractitionerRole_FHIRPractitionerRoleNotAvailable()
    {
        $this->assertEquals('PractitionerRole.NotAvailable', VersionConstants::TYPE_NAME_PRACTITIONER_ROLE_DOT_NOT_AVAILABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRPractitionerRole\FHIRPractitionerRoleNotAvailable', VersionConstants::TYPE_CLASS_PRACTITIONER_ROLE_DOT_NOT_AVAILABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRProcedure()
    {
        $this->assertEquals('Procedure', VersionConstants::TYPE_NAME_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRProcedure', VersionConstants::TYPE_CLASS_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedureFocalDevice()
    {
        $this->assertEquals('Procedure.FocalDevice', VersionConstants::TYPE_NAME_PROCEDURE_DOT_FOCAL_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice', VersionConstants::TYPE_CLASS_PROCEDURE_DOT_FOCAL_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedurePerformer()
    {
        $this->assertEquals('Procedure.Performer', VersionConstants::TYPE_NAME_PROCEDURE_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer', VersionConstants::TYPE_CLASS_PROCEDURE_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRProdCharacteristic()
    {
        $this->assertEquals('ProdCharacteristic', VersionConstants::TYPE_NAME_PROD_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRProdCharacteristic', VersionConstants::TYPE_CLASS_PROD_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRProductShelfLife()
    {
        $this->assertEquals('ProductShelfLife', VersionConstants::TYPE_NAME_PRODUCT_SHELF_LIFE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRProductShelfLife', VersionConstants::TYPE_CLASS_PRODUCT_SHELF_LIFE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRPropertyRepresentation()
    {
        $this->assertEquals('PropertyRepresentation', VersionConstants::TYPE_NAME_PROPERTY_REPRESENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPropertyRepresentation', VersionConstants::TYPE_CLASS_PROPERTY_REPRESENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRPropertyRepresentationEnum()
    {
        $this->assertEquals('PropertyRepresentationEnum', VersionConstants::TYPE_NAME_PROPERTY_REPRESENTATION_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRPropertyRepresentationEnum', VersionConstants::TYPE_CLASS_PROPERTY_REPRESENTATION_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRPropertyType()
    {
        $this->assertEquals('PropertyType', VersionConstants::TYPE_NAME_PROPERTY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPropertyType', VersionConstants::TYPE_CLASS_PROPERTY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRPropertyTypeEnum()
    {
        $this->assertEquals('PropertyTypeEnum', VersionConstants::TYPE_NAME_PROPERTY_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRPropertyTypeEnum', VersionConstants::TYPE_CLASS_PROPERTY_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRProvenance()
    {
        $this->assertEquals('Provenance', VersionConstants::TYPE_NAME_PROVENANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRProvenance', VersionConstants::TYPE_CLASS_PROVENANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceAgent()
    {
        $this->assertEquals('Provenance.Agent', VersionConstants::TYPE_NAME_PROVENANCE_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent', VersionConstants::TYPE_CLASS_PROVENANCE_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceEntity()
    {
        $this->assertEquals('Provenance.Entity', VersionConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity', VersionConstants::TYPE_CLASS_PROVENANCE_DOT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRProvenanceEntityRole()
    {
        $this->assertEquals('ProvenanceEntityRole', VersionConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRProvenanceEntityRole', VersionConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRProvenanceEntityRoleEnum()
    {
        $this->assertEquals('ProvenanceEntityRoleEnum', VersionConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRProvenanceEntityRoleEnum', VersionConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRPublicationStatus()
    {
        $this->assertEquals('PublicationStatus', VersionConstants::TYPE_NAME_PUBLICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRPublicationStatus', VersionConstants::TYPE_CLASS_PUBLICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRPublicationStatusEnum()
    {
        $this->assertEquals('PublicationStatusEnum', VersionConstants::TYPE_NAME_PUBLICATION_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRPublicationStatusEnum', VersionConstants::TYPE_CLASS_PUBLICATION_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQualityType()
    {
        $this->assertEquals('qualityType', VersionConstants::TYPE_NAME_QUALITY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQualityType', VersionConstants::TYPE_CLASS_QUALITY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRQualityTypeEnum()
    {
        $this->assertEquals('qualityTypeEnum', VersionConstants::TYPE_NAME_QUALITY_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRQualityTypeEnum', VersionConstants::TYPE_CLASS_QUALITY_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQuantity()
    {
        $this->assertEquals('Quantity', VersionConstants::TYPE_NAME_QUANTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantity', VersionConstants::TYPE_CLASS_QUANTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQuantityComparator()
    {
        $this->assertEquals('QuantityComparator', VersionConstants::TYPE_NAME_QUANTITY_COMPARATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuantityComparator', VersionConstants::TYPE_CLASS_QUANTITY_COMPARATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRQuantityComparatorEnum()
    {
        $this->assertEquals('QuantityComparatorEnum', VersionConstants::TYPE_NAME_QUANTITY_COMPARATOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRQuantityComparatorEnum', VersionConstants::TYPE_CLASS_QUANTITY_COMPARATOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRQuestionnaire()
    {
        $this->assertEquals('Questionnaire', VersionConstants::TYPE_NAME_QUESTIONNAIRE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaire', VersionConstants::TYPE_CLASS_QUESTIONNAIRE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireAnswerOption()
    {
        $this->assertEquals('Questionnaire.AnswerOption', VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ANSWER_OPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_ANSWER_OPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireEnableWhen()
    {
        $this->assertEquals('Questionnaire.EnableWhen', VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ENABLE_WHEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_ENABLE_WHEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireInitial()
    {
        $this->assertEquals('Questionnaire.Initial', VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_INITIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_INITIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireItem()
    {
        $this->assertEquals('Questionnaire.Item', VersionConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQuestionnaireItemOperator()
    {
        $this->assertEquals('QuestionnaireItemOperator', VersionConstants::TYPE_NAME_QUESTIONNAIRE_ITEM_OPERATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireItemOperator', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_ITEM_OPERATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRQuestionnaireItemOperatorEnum()
    {
        $this->assertEquals('QuestionnaireItemOperatorEnum', VersionConstants::TYPE_NAME_QUESTIONNAIRE_ITEM_OPERATOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRQuestionnaireItemOperatorEnum', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_ITEM_OPERATOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQuestionnaireItemType()
    {
        $this->assertEquals('QuestionnaireItemType', VersionConstants::TYPE_NAME_QUESTIONNAIRE_ITEM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireItemType', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_ITEM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRQuestionnaireItemTypeEnum()
    {
        $this->assertEquals('QuestionnaireItemTypeEnum', VersionConstants::TYPE_NAME_QUESTIONNAIRE_ITEM_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRQuestionnaireItemTypeEnum', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_ITEM_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRQuestionnaireResponse()
    {
        $this->assertEquals('QuestionnaireResponse', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaireResponse_FHIRQuestionnaireResponseAnswer()
    {
        $this->assertEquals('QuestionnaireResponse.Answer', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ANSWER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_DOT_ANSWER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRQuestionnaireResponse_FHIRQuestionnaireResponseItem()
    {
        $this->assertEquals('QuestionnaireResponse.Item', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseItem', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRQuestionnaireResponseStatus()
    {
        $this->assertEquals('QuestionnaireResponseStatus', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRQuestionnaireResponseStatus', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRQuestionnaireResponseStatusEnum()
    {
        $this->assertEquals('QuestionnaireResponseStatusEnum', VersionConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRQuestionnaireResponseStatusEnum', VersionConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRange()
    {
        $this->assertEquals('Range', VersionConstants::TYPE_NAME_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRange', VersionConstants::TYPE_CLASS_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRatio()
    {
        $this->assertEquals('Ratio', VersionConstants::TYPE_NAME_RATIO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatio', VersionConstants::TYPE_CLASS_RATIO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRatioRange()
    {
        $this->assertEquals('RatioRange', VersionConstants::TYPE_NAME_RATIO_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRatioRange', VersionConstants::TYPE_CLASS_RATIO_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRReference()
    {
        $this->assertEquals('Reference', VersionConstants::TYPE_NAME_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReference', VersionConstants::TYPE_CLASS_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRReferenceHandlingPolicy()
    {
        $this->assertEquals('ReferenceHandlingPolicy', VersionConstants::TYPE_NAME_REFERENCE_HANDLING_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReferenceHandlingPolicy', VersionConstants::TYPE_CLASS_REFERENCE_HANDLING_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRReferenceHandlingPolicyEnum()
    {
        $this->assertEquals('ReferenceHandlingPolicyEnum', VersionConstants::TYPE_NAME_REFERENCE_HANDLING_POLICY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRReferenceHandlingPolicyEnum', VersionConstants::TYPE_CLASS_REFERENCE_HANDLING_POLICY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRReferenceVersionRules()
    {
        $this->assertEquals('ReferenceVersionRules', VersionConstants::TYPE_NAME_REFERENCE_VERSION_RULES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReferenceVersionRules', VersionConstants::TYPE_CLASS_REFERENCE_VERSION_RULES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRReferenceVersionRulesEnum()
    {
        $this->assertEquals('ReferenceVersionRulesEnum', VersionConstants::TYPE_NAME_REFERENCE_VERSION_RULES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRReferenceVersionRulesEnum', VersionConstants::TYPE_CLASS_REFERENCE_VERSION_RULES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRRegulatedAuthorization()
    {
        $this->assertEquals('RegulatedAuthorization', VersionConstants::TYPE_NAME_REGULATED_AUTHORIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRRegulatedAuthorization', VersionConstants::TYPE_CLASS_REGULATED_AUTHORIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRRegulatedAuthorization_FHIRRegulatedAuthorizationCase()
    {
        $this->assertEquals('RegulatedAuthorization.Case', VersionConstants::TYPE_NAME_REGULATED_AUTHORIZATION_DOT_CASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRegulatedAuthorization\FHIRRegulatedAuthorizationCase', VersionConstants::TYPE_CLASS_REGULATED_AUTHORIZATION_DOT_CASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRelatedArtifact()
    {
        $this->assertEquals('RelatedArtifact', VersionConstants::TYPE_NAME_RELATED_ARTIFACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifact', VersionConstants::TYPE_CLASS_RELATED_ARTIFACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRelatedArtifactType()
    {
        $this->assertEquals('RelatedArtifactType', VersionConstants::TYPE_NAME_RELATED_ARTIFACT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRelatedArtifactType', VersionConstants::TYPE_CLASS_RELATED_ARTIFACT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRRelatedArtifactTypeEnum()
    {
        $this->assertEquals('RelatedArtifactTypeEnum', VersionConstants::TYPE_NAME_RELATED_ARTIFACT_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRRelatedArtifactTypeEnum', VersionConstants::TYPE_CLASS_RELATED_ARTIFACT_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRRelatedPerson()
    {
        $this->assertEquals('RelatedPerson', VersionConstants::TYPE_NAME_RELATED_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRRelatedPerson', VersionConstants::TYPE_CLASS_RELATED_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRRelatedPerson_FHIRRelatedPersonCommunication()
    {
        $this->assertEquals('RelatedPerson.Communication', VersionConstants::TYPE_NAME_RELATED_PERSON_DOT_COMMUNICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRelatedPerson\FHIRRelatedPersonCommunication', VersionConstants::TYPE_CLASS_RELATED_PERSON_DOT_COMMUNICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRemittanceOutcome()
    {
        $this->assertEquals('RemittanceOutcome', VersionConstants::TYPE_NAME_REMITTANCE_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRemittanceOutcome', VersionConstants::TYPE_CLASS_REMITTANCE_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRRemittanceOutcomeEnum()
    {
        $this->assertEquals('RemittanceOutcomeEnum', VersionConstants::TYPE_NAME_REMITTANCE_OUTCOME_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRRemittanceOutcomeEnum', VersionConstants::TYPE_CLASS_REMITTANCE_OUTCOME_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRReportRelationshipType()
    {
        $this->assertEquals('ReportRelationshipType', VersionConstants::TYPE_NAME_REPORT_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRReportRelationshipType', VersionConstants::TYPE_CLASS_REPORT_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRReportRelationshipTypeEnum()
    {
        $this->assertEquals('ReportRelationshipTypeEnum', VersionConstants::TYPE_NAME_REPORT_RELATIONSHIP_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRReportRelationshipTypeEnum', VersionConstants::TYPE_CLASS_REPORT_RELATIONSHIP_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRepositoryType()
    {
        $this->assertEquals('repositoryType', VersionConstants::TYPE_NAME_REPOSITORY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRepositoryType', VersionConstants::TYPE_CLASS_REPOSITORY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRRepositoryTypeEnum()
    {
        $this->assertEquals('repositoryTypeEnum', VersionConstants::TYPE_NAME_REPOSITORY_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRRepositoryTypeEnum', VersionConstants::TYPE_CLASS_REPOSITORY_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRRequestGroup()
    {
        $this->assertEquals('RequestGroup', VersionConstants::TYPE_NAME_REQUEST_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRRequestGroup', VersionConstants::TYPE_CLASS_REQUEST_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRRequestGroup_FHIRRequestGroupAction()
    {
        $this->assertEquals('RequestGroup.Action', VersionConstants::TYPE_NAME_REQUEST_GROUP_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupAction', VersionConstants::TYPE_CLASS_REQUEST_GROUP_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRRequestGroup_FHIRRequestGroupCondition()
    {
        $this->assertEquals('RequestGroup.Condition', VersionConstants::TYPE_NAME_REQUEST_GROUP_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupCondition', VersionConstants::TYPE_CLASS_REQUEST_GROUP_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRRequestGroup_FHIRRequestGroupRelatedAction()
    {
        $this->assertEquals('RequestGroup.RelatedAction', VersionConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction', VersionConstants::TYPE_CLASS_REQUEST_GROUP_DOT_RELATED_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRequestIntent()
    {
        $this->assertEquals('RequestIntent', VersionConstants::TYPE_NAME_REQUEST_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestIntent', VersionConstants::TYPE_CLASS_REQUEST_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRRequestIntentEnum()
    {
        $this->assertEquals('RequestIntentEnum', VersionConstants::TYPE_NAME_REQUEST_INTENT_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRRequestIntentEnum', VersionConstants::TYPE_CLASS_REQUEST_INTENT_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRequestPriority()
    {
        $this->assertEquals('RequestPriority', VersionConstants::TYPE_NAME_REQUEST_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestPriority', VersionConstants::TYPE_CLASS_REQUEST_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRRequestPriorityEnum()
    {
        $this->assertEquals('RequestPriorityEnum', VersionConstants::TYPE_NAME_REQUEST_PRIORITY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRRequestPriorityEnum', VersionConstants::TYPE_CLASS_REQUEST_PRIORITY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRequestResourceType()
    {
        $this->assertEquals('RequestResourceType', VersionConstants::TYPE_NAME_REQUEST_RESOURCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestResourceType', VersionConstants::TYPE_CLASS_REQUEST_RESOURCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRRequestResourceTypeEnum()
    {
        $this->assertEquals('RequestResourceTypeEnum', VersionConstants::TYPE_NAME_REQUEST_RESOURCE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRRequestResourceTypeEnum', VersionConstants::TYPE_CLASS_REQUEST_RESOURCE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRequestStatus()
    {
        $this->assertEquals('RequestStatus', VersionConstants::TYPE_NAME_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRequestStatus', VersionConstants::TYPE_CLASS_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRRequestStatusEnum()
    {
        $this->assertEquals('RequestStatusEnum', VersionConstants::TYPE_NAME_REQUEST_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRRequestStatusEnum', VersionConstants::TYPE_CLASS_REQUEST_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRResearchDefinition()
    {
        $this->assertEquals('ResearchDefinition', VersionConstants::TYPE_NAME_RESEARCH_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRResearchDefinition', VersionConstants::TYPE_CLASS_RESEARCH_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRResearchElementDefinition()
    {
        $this->assertEquals('ResearchElementDefinition', VersionConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRResearchElementDefinition', VersionConstants::TYPE_CLASS_RESEARCH_ELEMENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRResearchElementDefinition_FHIRResearchElementDefinitionCharacteristic()
    {
        $this->assertEquals('ResearchElementDefinition.Characteristic', VersionConstants::TYPE_NAME_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRResearchElementDefinition\FHIRResearchElementDefinitionCharacteristic', VersionConstants::TYPE_CLASS_RESEARCH_ELEMENT_DEFINITION_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRResearchElementType()
    {
        $this->assertEquals('ResearchElementType', VersionConstants::TYPE_NAME_RESEARCH_ELEMENT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResearchElementType', VersionConstants::TYPE_CLASS_RESEARCH_ELEMENT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRResearchElementTypeEnum()
    {
        $this->assertEquals('ResearchElementTypeEnum', VersionConstants::TYPE_NAME_RESEARCH_ELEMENT_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRResearchElementTypeEnum', VersionConstants::TYPE_CLASS_RESEARCH_ELEMENT_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRResearchStudy()
    {
        $this->assertEquals('ResearchStudy', VersionConstants::TYPE_NAME_RESEARCH_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRResearchStudy', VersionConstants::TYPE_CLASS_RESEARCH_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRResearchStudy_FHIRResearchStudyArm()
    {
        $this->assertEquals('ResearchStudy.Arm', VersionConstants::TYPE_NAME_RESEARCH_STUDY_DOT_ARM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyArm', VersionConstants::TYPE_CLASS_RESEARCH_STUDY_DOT_ARM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRResearchStudy_FHIRResearchStudyObjective()
    {
        $this->assertEquals('ResearchStudy.Objective', VersionConstants::TYPE_NAME_RESEARCH_STUDY_DOT_OBJECTIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyObjective', VersionConstants::TYPE_CLASS_RESEARCH_STUDY_DOT_OBJECTIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRResearchStudyStatus()
    {
        $this->assertEquals('ResearchStudyStatus', VersionConstants::TYPE_NAME_RESEARCH_STUDY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResearchStudyStatus', VersionConstants::TYPE_CLASS_RESEARCH_STUDY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRResearchStudyStatusEnum()
    {
        $this->assertEquals('ResearchStudyStatusEnum', VersionConstants::TYPE_NAME_RESEARCH_STUDY_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRResearchStudyStatusEnum', VersionConstants::TYPE_CLASS_RESEARCH_STUDY_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRResearchSubject()
    {
        $this->assertEquals('ResearchSubject', VersionConstants::TYPE_NAME_RESEARCH_SUBJECT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRResearchSubject', VersionConstants::TYPE_CLASS_RESEARCH_SUBJECT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRResearchSubjectStatus()
    {
        $this->assertEquals('ResearchSubjectStatus', VersionConstants::TYPE_NAME_RESEARCH_SUBJECT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResearchSubjectStatus', VersionConstants::TYPE_CLASS_RESEARCH_SUBJECT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRResearchSubjectStatusEnum()
    {
        $this->assertEquals('ResearchSubjectStatusEnum', VersionConstants::TYPE_NAME_RESEARCH_SUBJECT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRResearchSubjectStatusEnum', VersionConstants::TYPE_CLASS_RESEARCH_SUBJECT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource()
    {
        $this->assertEquals('Resource', VersionConstants::TYPE_NAME_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource', VersionConstants::TYPE_CLASS_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResourceContainer()
    {
        $this->assertEquals('ResourceContainer', VersionConstants::TYPE_NAME_RESOURCE_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResourceContainer', VersionConstants::TYPE_CLASS_RESOURCE_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRResourceType()
    {
        $this->assertEquals('ResourceType', VersionConstants::TYPE_NAME_RESOURCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResourceType', VersionConstants::TYPE_CLASS_RESOURCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRResourceTypeEnum()
    {
        $this->assertEquals('ResourceTypeEnum', VersionConstants::TYPE_NAME_RESOURCE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRResourceTypeEnum', VersionConstants::TYPE_CLASS_RESOURCE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRResourceVersionPolicy()
    {
        $this->assertEquals('ResourceVersionPolicy', VersionConstants::TYPE_NAME_RESOURCE_VERSION_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResourceVersionPolicy', VersionConstants::TYPE_CLASS_RESOURCE_VERSION_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRResourceVersionPolicyEnum()
    {
        $this->assertEquals('ResourceVersionPolicyEnum', VersionConstants::TYPE_NAME_RESOURCE_VERSION_POLICY_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRResourceVersionPolicyEnum', VersionConstants::TYPE_CLASS_RESOURCE_VERSION_POLICY_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRResponseType()
    {
        $this->assertEquals('ResponseType', VersionConstants::TYPE_NAME_RESPONSE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRResponseType', VersionConstants::TYPE_CLASS_RESPONSE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRResponseTypeEnum()
    {
        $this->assertEquals('ResponseTypeEnum', VersionConstants::TYPE_NAME_RESPONSE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRResponseTypeEnum', VersionConstants::TYPE_CLASS_RESPONSE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRRestfulCapabilityMode()
    {
        $this->assertEquals('RestfulCapabilityMode', VersionConstants::TYPE_NAME_RESTFUL_CAPABILITY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRRestfulCapabilityMode', VersionConstants::TYPE_CLASS_RESTFUL_CAPABILITY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRRestfulCapabilityModeEnum()
    {
        $this->assertEquals('RestfulCapabilityModeEnum', VersionConstants::TYPE_NAME_RESTFUL_CAPABILITY_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRRestfulCapabilityModeEnum', VersionConstants::TYPE_CLASS_RESTFUL_CAPABILITY_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRRiskAssessment()
    {
        $this->assertEquals('RiskAssessment', VersionConstants::TYPE_NAME_RISK_ASSESSMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRRiskAssessment', VersionConstants::TYPE_CLASS_RISK_ASSESSMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRRiskAssessment_FHIRRiskAssessmentPrediction()
    {
        $this->assertEquals('RiskAssessment.Prediction', VersionConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction', VersionConstants::TYPE_CLASS_RISK_ASSESSMENT_DOT_PREDICTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSampledData()
    {
        $this->assertEquals('SampledData', VersionConstants::TYPE_NAME_SAMPLED_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSampledData', VersionConstants::TYPE_CLASS_SAMPLED_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSampledDataDataType()
    {
        $this->assertEquals('SampledDataDataType', VersionConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSampledDataDataType', VersionConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRSampledDataDataTypePrimitive()
    {
        $this->assertEquals('SampledDataDataType-primitive', VersionConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRSampledDataDataTypePrimitive', VersionConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSchedule()
    {
        $this->assertEquals('Schedule', VersionConstants::TYPE_NAME_SCHEDULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSchedule', VersionConstants::TYPE_CLASS_SCHEDULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSearchComparator()
    {
        $this->assertEquals('SearchComparator', VersionConstants::TYPE_NAME_SEARCH_COMPARATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSearchComparator', VersionConstants::TYPE_CLASS_SEARCH_COMPARATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSearchComparatorEnum()
    {
        $this->assertEquals('SearchComparatorEnum', VersionConstants::TYPE_NAME_SEARCH_COMPARATOR_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSearchComparatorEnum', VersionConstants::TYPE_CLASS_SEARCH_COMPARATOR_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSearchEntryMode()
    {
        $this->assertEquals('SearchEntryMode', VersionConstants::TYPE_NAME_SEARCH_ENTRY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSearchEntryMode', VersionConstants::TYPE_CLASS_SEARCH_ENTRY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSearchEntryModeEnum()
    {
        $this->assertEquals('SearchEntryModeEnum', VersionConstants::TYPE_NAME_SEARCH_ENTRY_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSearchEntryModeEnum', VersionConstants::TYPE_CLASS_SEARCH_ENTRY_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSearchModifierCode()
    {
        $this->assertEquals('SearchModifierCode', VersionConstants::TYPE_NAME_SEARCH_MODIFIER_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSearchModifierCode', VersionConstants::TYPE_CLASS_SEARCH_MODIFIER_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSearchModifierCodeEnum()
    {
        $this->assertEquals('SearchModifierCodeEnum', VersionConstants::TYPE_NAME_SEARCH_MODIFIER_CODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSearchModifierCodeEnum', VersionConstants::TYPE_CLASS_SEARCH_MODIFIER_CODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSearchParameter()
    {
        $this->assertEquals('SearchParameter', VersionConstants::TYPE_NAME_SEARCH_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSearchParameter', VersionConstants::TYPE_CLASS_SEARCH_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSearchParameter_FHIRSearchParameterComponent()
    {
        $this->assertEquals('SearchParameter.Component', VersionConstants::TYPE_NAME_SEARCH_PARAMETER_DOT_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterComponent', VersionConstants::TYPE_CLASS_SEARCH_PARAMETER_DOT_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSearchParamType()
    {
        $this->assertEquals('SearchParamType', VersionConstants::TYPE_NAME_SEARCH_PARAM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSearchParamType', VersionConstants::TYPE_CLASS_SEARCH_PARAM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSearchParamTypeEnum()
    {
        $this->assertEquals('SearchParamTypeEnum', VersionConstants::TYPE_NAME_SEARCH_PARAM_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSearchParamTypeEnum', VersionConstants::TYPE_CLASS_SEARCH_PARAM_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSequenceType()
    {
        $this->assertEquals('sequenceType', VersionConstants::TYPE_NAME_SEQUENCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSequenceType', VersionConstants::TYPE_CLASS_SEQUENCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSequenceTypeEnum()
    {
        $this->assertEquals('sequenceTypeEnum', VersionConstants::TYPE_NAME_SEQUENCE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSequenceTypeEnum', VersionConstants::TYPE_CLASS_SEQUENCE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRServiceRequest()
    {
        $this->assertEquals('ServiceRequest', VersionConstants::TYPE_NAME_SERVICE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRServiceRequest', VersionConstants::TYPE_CLASS_SERVICE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSignature()
    {
        $this->assertEquals('Signature', VersionConstants::TYPE_NAME_SIGNATURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSignature', VersionConstants::TYPE_CLASS_SIGNATURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSlicingRules()
    {
        $this->assertEquals('SlicingRules', VersionConstants::TYPE_NAME_SLICING_RULES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSlicingRules', VersionConstants::TYPE_CLASS_SLICING_RULES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSlicingRulesEnum()
    {
        $this->assertEquals('SlicingRulesEnum', VersionConstants::TYPE_NAME_SLICING_RULES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSlicingRulesEnum', VersionConstants::TYPE_CLASS_SLICING_RULES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSlot()
    {
        $this->assertEquals('Slot', VersionConstants::TYPE_NAME_SLOT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSlot', VersionConstants::TYPE_CLASS_SLOT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSlotStatus()
    {
        $this->assertEquals('SlotStatus', VersionConstants::TYPE_NAME_SLOT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSlotStatus', VersionConstants::TYPE_CLASS_SLOT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSlotStatusEnum()
    {
        $this->assertEquals('SlotStatusEnum', VersionConstants::TYPE_NAME_SLOT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSlotStatusEnum', VersionConstants::TYPE_CLASS_SLOT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSortDirection()
    {
        $this->assertEquals('SortDirection', VersionConstants::TYPE_NAME_SORT_DIRECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSortDirection', VersionConstants::TYPE_CLASS_SORT_DIRECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSortDirectionEnum()
    {
        $this->assertEquals('SortDirectionEnum', VersionConstants::TYPE_NAME_SORT_DIRECTION_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSortDirectionEnum', VersionConstants::TYPE_CLASS_SORT_DIRECTION_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSPDXLicense()
    {
        $this->assertEquals('SPDXLicense', VersionConstants::TYPE_NAME_SPDXLICENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSPDXLicense', VersionConstants::TYPE_CLASS_SPDXLICENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSPDXLicenseEnum()
    {
        $this->assertEquals('SPDXLicenseEnum', VersionConstants::TYPE_NAME_SPDXLICENSE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSPDXLicenseEnum', VersionConstants::TYPE_CLASS_SPDXLICENSE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSpecimen()
    {
        $this->assertEquals('Specimen', VersionConstants::TYPE_NAME_SPECIMEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSpecimen', VersionConstants::TYPE_CLASS_SPECIMEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenCollection()
    {
        $this->assertEquals('Specimen.Collection', VersionConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_COLLECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenContainer()
    {
        $this->assertEquals('Specimen.Container', VersionConstants::TYPE_NAME_SPECIMEN_DOT_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenProcessing()
    {
        $this->assertEquals('Specimen.Processing', VersionConstants::TYPE_NAME_SPECIMEN_DOT_PROCESSING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenProcessing', VersionConstants::TYPE_CLASS_SPECIMEN_DOT_PROCESSING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSpecimenContainedPreference()
    {
        $this->assertEquals('SpecimenContainedPreference', VersionConstants::TYPE_NAME_SPECIMEN_CONTAINED_PREFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSpecimenContainedPreference', VersionConstants::TYPE_CLASS_SPECIMEN_CONTAINED_PREFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSpecimenContainedPreferenceEnum()
    {
        $this->assertEquals('SpecimenContainedPreferenceEnum', VersionConstants::TYPE_NAME_SPECIMEN_CONTAINED_PREFERENCE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSpecimenContainedPreferenceEnum', VersionConstants::TYPE_CLASS_SPECIMEN_CONTAINED_PREFERENCE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSpecimenDefinition()
    {
        $this->assertEquals('SpecimenDefinition', VersionConstants::TYPE_NAME_SPECIMEN_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSpecimenDefinition', VersionConstants::TYPE_CLASS_SPECIMEN_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimenDefinition_FHIRSpecimenDefinitionAdditive()
    {
        $this->assertEquals('SpecimenDefinition.Additive', VersionConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_ADDITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionAdditive', VersionConstants::TYPE_CLASS_SPECIMEN_DEFINITION_DOT_ADDITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimenDefinition_FHIRSpecimenDefinitionContainer()
    {
        $this->assertEquals('SpecimenDefinition.Container', VersionConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionContainer', VersionConstants::TYPE_CLASS_SPECIMEN_DEFINITION_DOT_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimenDefinition_FHIRSpecimenDefinitionHandling()
    {
        $this->assertEquals('SpecimenDefinition.Handling', VersionConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_HANDLING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling', VersionConstants::TYPE_CLASS_SPECIMEN_DEFINITION_DOT_HANDLING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSpecimenDefinition_FHIRSpecimenDefinitionTypeTested()
    {
        $this->assertEquals('SpecimenDefinition.TypeTested', VersionConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_TYPE_TESTED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionTypeTested', VersionConstants::TYPE_CLASS_SPECIMEN_DEFINITION_DOT_TYPE_TESTED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSpecimenStatus()
    {
        $this->assertEquals('SpecimenStatus', VersionConstants::TYPE_NAME_SPECIMEN_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSpecimenStatus', VersionConstants::TYPE_CLASS_SPECIMEN_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSpecimenStatusEnum()
    {
        $this->assertEquals('SpecimenStatusEnum', VersionConstants::TYPE_NAME_SPECIMEN_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSpecimenStatusEnum', VersionConstants::TYPE_CLASS_SPECIMEN_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStatus()
    {
        $this->assertEquals('status', VersionConstants::TYPE_NAME_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStatus', VersionConstants::TYPE_CLASS_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStatusEnum()
    {
        $this->assertEquals('statusEnum', VersionConstants::TYPE_NAME_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStatusEnum', VersionConstants::TYPE_CLASS_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStrandType()
    {
        $this->assertEquals('strandType', VersionConstants::TYPE_NAME_STRAND_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStrandType', VersionConstants::TYPE_CLASS_STRAND_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStrandTypeEnum()
    {
        $this->assertEquals('strandTypeEnum', VersionConstants::TYPE_NAME_STRAND_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStrandTypeEnum', VersionConstants::TYPE_CLASS_STRAND_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRString()
    {
        $this->assertEquals('string', VersionConstants::TYPE_NAME_STRING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString', VersionConstants::TYPE_CLASS_STRING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRStringPrimitive()
    {
        $this->assertEquals('string-primitive', VersionConstants::TYPE_NAME_STRING_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive', VersionConstants::TYPE_CLASS_STRING_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRStructureDefinition()
    {
        $this->assertEquals('StructureDefinition', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRStructureDefinition', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionContext()
    {
        $this->assertEquals('StructureDefinition.Context', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContext', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionDifferential()
    {
        $this->assertEquals('StructureDefinition.Differential', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_DIFFERENTIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_DIFFERENTIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionMapping()
    {
        $this->assertEquals('StructureDefinition.Mapping', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionSnapshot()
    {
        $this->assertEquals('StructureDefinition.Snapshot', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_SNAPSHOT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_SNAPSHOT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStructureDefinitionKind()
    {
        $this->assertEquals('StructureDefinitionKind', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureDefinitionKind', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStructureDefinitionKindEnum()
    {
        $this->assertEquals('StructureDefinitionKindEnum', VersionConstants::TYPE_NAME_STRUCTURE_DEFINITION_KIND_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStructureDefinitionKindEnum', VersionConstants::TYPE_CLASS_STRUCTURE_DEFINITION_KIND_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRStructureMap()
    {
        $this->assertEquals('StructureMap', VersionConstants::TYPE_NAME_STRUCTURE_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRStructureMap', VersionConstants::TYPE_CLASS_STRUCTURE_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapDependent()
    {
        $this->assertEquals('StructureMap.Dependent', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_DEPENDENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapDependent', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_DEPENDENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapGroup()
    {
        $this->assertEquals('StructureMap.Group', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapGroup', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapInput()
    {
        $this->assertEquals('StructureMap.Input', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_INPUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_INPUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapParameter()
    {
        $this->assertEquals('StructureMap.Parameter', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapParameter', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapRule()
    {
        $this->assertEquals('StructureMap.Rule', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapRule', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapSource()
    {
        $this->assertEquals('StructureMap.Source', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapSource', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapStructure()
    {
        $this->assertEquals('StructureMap.Structure', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_STRUCTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapStructure', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_STRUCTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRStructureMap_FHIRStructureMapTarget()
    {
        $this->assertEquals('StructureMap.Target', VersionConstants::TYPE_NAME_STRUCTURE_MAP_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapTarget', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStructureMapContextType()
    {
        $this->assertEquals('StructureMapContextType', VersionConstants::TYPE_NAME_STRUCTURE_MAP_CONTEXT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapContextType', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_CONTEXT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStructureMapContextTypeEnum()
    {
        $this->assertEquals('StructureMapContextTypeEnum', VersionConstants::TYPE_NAME_STRUCTURE_MAP_CONTEXT_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStructureMapContextTypeEnum', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_CONTEXT_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStructureMapGroupTypeMode()
    {
        $this->assertEquals('StructureMapGroupTypeMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_GROUP_TYPE_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapGroupTypeMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_GROUP_TYPE_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStructureMapGroupTypeModeEnum()
    {
        $this->assertEquals('StructureMapGroupTypeModeEnum', VersionConstants::TYPE_NAME_STRUCTURE_MAP_GROUP_TYPE_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStructureMapGroupTypeModeEnum', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_GROUP_TYPE_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStructureMapInputMode()
    {
        $this->assertEquals('StructureMapInputMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_INPUT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapInputMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_INPUT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStructureMapInputModeEnum()
    {
        $this->assertEquals('StructureMapInputModeEnum', VersionConstants::TYPE_NAME_STRUCTURE_MAP_INPUT_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStructureMapInputModeEnum', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_INPUT_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStructureMapModelMode()
    {
        $this->assertEquals('StructureMapModelMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_MODEL_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapModelMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_MODEL_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStructureMapModelModeEnum()
    {
        $this->assertEquals('StructureMapModelModeEnum', VersionConstants::TYPE_NAME_STRUCTURE_MAP_MODEL_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStructureMapModelModeEnum', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_MODEL_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStructureMapSourceListMode()
    {
        $this->assertEquals('StructureMapSourceListMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_SOURCE_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapSourceListMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_SOURCE_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStructureMapSourceListModeEnum()
    {
        $this->assertEquals('StructureMapSourceListModeEnum', VersionConstants::TYPE_NAME_STRUCTURE_MAP_SOURCE_LIST_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStructureMapSourceListModeEnum', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_SOURCE_LIST_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStructureMapTargetListMode()
    {
        $this->assertEquals('StructureMapTargetListMode', VersionConstants::TYPE_NAME_STRUCTURE_MAP_TARGET_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTargetListMode', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_TARGET_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStructureMapTargetListModeEnum()
    {
        $this->assertEquals('StructureMapTargetListModeEnum', VersionConstants::TYPE_NAME_STRUCTURE_MAP_TARGET_LIST_MODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStructureMapTargetListModeEnum', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_TARGET_LIST_MODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRStructureMapTransform()
    {
        $this->assertEquals('StructureMapTransform', VersionConstants::TYPE_NAME_STRUCTURE_MAP_TRANSFORM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRStructureMapTransform', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_TRANSFORM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRStructureMapTransformEnum()
    {
        $this->assertEquals('StructureMapTransformEnum', VersionConstants::TYPE_NAME_STRUCTURE_MAP_TRANSFORM_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRStructureMapTransformEnum', VersionConstants::TYPE_CLASS_STRUCTURE_MAP_TRANSFORM_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSubscription()
    {
        $this->assertEquals('Subscription', VersionConstants::TYPE_NAME_SUBSCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSubscription', VersionConstants::TYPE_CLASS_SUBSCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubscription_FHIRSubscriptionChannel()
    {
        $this->assertEquals('Subscription.Channel', VersionConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel', VersionConstants::TYPE_CLASS_SUBSCRIPTION_DOT_CHANNEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSubscriptionChannelType()
    {
        $this->assertEquals('SubscriptionChannelType', VersionConstants::TYPE_NAME_SUBSCRIPTION_CHANNEL_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSubscriptionChannelType', VersionConstants::TYPE_CLASS_SUBSCRIPTION_CHANNEL_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSubscriptionChannelTypeEnum()
    {
        $this->assertEquals('SubscriptionChannelTypeEnum', VersionConstants::TYPE_NAME_SUBSCRIPTION_CHANNEL_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSubscriptionChannelTypeEnum', VersionConstants::TYPE_CLASS_SUBSCRIPTION_CHANNEL_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSubscriptionNotificationType()
    {
        $this->assertEquals('SubscriptionNotificationType', VersionConstants::TYPE_NAME_SUBSCRIPTION_NOTIFICATION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSubscriptionNotificationType', VersionConstants::TYPE_CLASS_SUBSCRIPTION_NOTIFICATION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSubscriptionNotificationTypeEnum()
    {
        $this->assertEquals('SubscriptionNotificationTypeEnum', VersionConstants::TYPE_NAME_SUBSCRIPTION_NOTIFICATION_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSubscriptionNotificationTypeEnum', VersionConstants::TYPE_CLASS_SUBSCRIPTION_NOTIFICATION_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSubscriptionStatus()
    {
        $this->assertEquals('SubscriptionStatus', VersionConstants::TYPE_NAME_SUBSCRIPTION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSubscriptionStatus', VersionConstants::TYPE_CLASS_SUBSCRIPTION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubscriptionStatus_FHIRSubscriptionStatusNotificationEvent()
    {
        $this->assertEquals('SubscriptionStatus.NotificationEvent', VersionConstants::TYPE_NAME_SUBSCRIPTION_STATUS_DOT_NOTIFICATION_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent', VersionConstants::TYPE_CLASS_SUBSCRIPTION_STATUS_DOT_NOTIFICATION_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSubscriptionStatusCodes()
    {
        $this->assertEquals('SubscriptionStatusCodes', VersionConstants::TYPE_NAME_SUBSCRIPTION_STATUS_CODES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSubscriptionStatusCodes', VersionConstants::TYPE_CLASS_SUBSCRIPTION_STATUS_CODES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSubscriptionStatusCodesEnum()
    {
        $this->assertEquals('SubscriptionStatusCodesEnum', VersionConstants::TYPE_NAME_SUBSCRIPTION_STATUS_CODES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSubscriptionStatusCodesEnum', VersionConstants::TYPE_CLASS_SUBSCRIPTION_STATUS_CODES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSubscriptionTopic()
    {
        $this->assertEquals('SubscriptionTopic', VersionConstants::TYPE_NAME_SUBSCRIPTION_TOPIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSubscriptionTopic', VersionConstants::TYPE_CLASS_SUBSCRIPTION_TOPIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubscriptionTopic_FHIRSubscriptionTopicCanFilterBy()
    {
        $this->assertEquals('SubscriptionTopic.CanFilterBy', VersionConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_CAN_FILTER_BY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicCanFilterBy', VersionConstants::TYPE_CLASS_SUBSCRIPTION_TOPIC_DOT_CAN_FILTER_BY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubscriptionTopic_FHIRSubscriptionTopicEventTrigger()
    {
        $this->assertEquals('SubscriptionTopic.EventTrigger', VersionConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_EVENT_TRIGGER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicEventTrigger', VersionConstants::TYPE_CLASS_SUBSCRIPTION_TOPIC_DOT_EVENT_TRIGGER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubscriptionTopic_FHIRSubscriptionTopicNotificationShape()
    {
        $this->assertEquals('SubscriptionTopic.NotificationShape', VersionConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_NOTIFICATION_SHAPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicNotificationShape', VersionConstants::TYPE_CLASS_SUBSCRIPTION_TOPIC_DOT_NOTIFICATION_SHAPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubscriptionTopic_FHIRSubscriptionTopicQueryCriteria()
    {
        $this->assertEquals('SubscriptionTopic.QueryCriteria', VersionConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria', VersionConstants::TYPE_CLASS_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubscriptionTopic_FHIRSubscriptionTopicResourceTrigger()
    {
        $this->assertEquals('SubscriptionTopic.ResourceTrigger', VersionConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger', VersionConstants::TYPE_CLASS_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSubstance()
    {
        $this->assertEquals('Substance', VersionConstants::TYPE_NAME_SUBSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSubstance', VersionConstants::TYPE_CLASS_SUBSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceIngredient()
    {
        $this->assertEquals('Substance.Ingredient', VersionConstants::TYPE_NAME_SUBSTANCE_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient', VersionConstants::TYPE_CLASS_SUBSTANCE_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceInstance()
    {
        $this->assertEquals('Substance.Instance', VersionConstants::TYPE_NAME_SUBSTANCE_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance', VersionConstants::TYPE_CLASS_SUBSTANCE_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSubstanceDefinition()
    {
        $this->assertEquals('SubstanceDefinition', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSubstanceDefinition', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionCode()
    {
        $this->assertEquals('SubstanceDefinition.Code', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionCode', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionMoiety()
    {
        $this->assertEquals('SubstanceDefinition.Moiety', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_MOIETY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMoiety', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_MOIETY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionMolecularWeight()
    {
        $this->assertEquals('SubstanceDefinition.MolecularWeight', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_MOLECULAR_WEIGHT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_MOLECULAR_WEIGHT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionName()
    {
        $this->assertEquals('SubstanceDefinition.Name', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionName', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionOfficial()
    {
        $this->assertEquals('SubstanceDefinition.Official', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_OFFICIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionOfficial', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_OFFICIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionProperty()
    {
        $this->assertEquals('SubstanceDefinition.Property', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_PROPERTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionProperty', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_PROPERTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionRelationship()
    {
        $this->assertEquals('SubstanceDefinition.Relationship', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRelationship', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_RELATIONSHIP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionRepresentation()
    {
        $this->assertEquals('SubstanceDefinition.Representation', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_REPRESENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_REPRESENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionSourceMaterial()
    {
        $this->assertEquals('SubstanceDefinition.SourceMaterial', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_SOURCE_MATERIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionSourceMaterial', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_SOURCE_MATERIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSubstanceDefinition_FHIRSubstanceDefinitionStructure()
    {
        $this->assertEquals('SubstanceDefinition.Structure', VersionConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure', VersionConstants::TYPE_CLASS_SUBSTANCE_DEFINITION_DOT_STRUCTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSupplyDelivery()
    {
        $this->assertEquals('SupplyDelivery', VersionConstants::TYPE_NAME_SUPPLY_DELIVERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery', VersionConstants::TYPE_CLASS_SUPPLY_DELIVERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSupplyDelivery_FHIRSupplyDeliverySuppliedItem()
    {
        $this->assertEquals('SupplyDelivery.SuppliedItem', VersionConstants::TYPE_NAME_SUPPLY_DELIVERY_DOT_SUPPLIED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSupplyDelivery\FHIRSupplyDeliverySuppliedItem', VersionConstants::TYPE_CLASS_SUPPLY_DELIVERY_DOT_SUPPLIED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSupplyDeliveryStatus()
    {
        $this->assertEquals('SupplyDeliveryStatus', VersionConstants::TYPE_NAME_SUPPLY_DELIVERY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSupplyDeliveryStatus', VersionConstants::TYPE_CLASS_SUPPLY_DELIVERY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSupplyDeliveryStatusEnum()
    {
        $this->assertEquals('SupplyDeliveryStatusEnum', VersionConstants::TYPE_NAME_SUPPLY_DELIVERY_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSupplyDeliveryStatusEnum', VersionConstants::TYPE_CLASS_SUPPLY_DELIVERY_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRSupplyRequest()
    {
        $this->assertEquals('SupplyRequest', VersionConstants::TYPE_NAME_SUPPLY_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRSupplyRequest', VersionConstants::TYPE_CLASS_SUPPLY_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRSupplyRequest_FHIRSupplyRequestParameter()
    {
        $this->assertEquals('SupplyRequest.Parameter', VersionConstants::TYPE_NAME_SUPPLY_REQUEST_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestParameter', VersionConstants::TYPE_CLASS_SUPPLY_REQUEST_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSupplyRequestStatus()
    {
        $this->assertEquals('SupplyRequestStatus', VersionConstants::TYPE_NAME_SUPPLY_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSupplyRequestStatus', VersionConstants::TYPE_CLASS_SUPPLY_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSupplyRequestStatusEnum()
    {
        $this->assertEquals('SupplyRequestStatusEnum', VersionConstants::TYPE_NAME_SUPPLY_REQUEST_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSupplyRequestStatusEnum', VersionConstants::TYPE_CLASS_SUPPLY_REQUEST_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRSystemRestfulInteraction()
    {
        $this->assertEquals('SystemRestfulInteraction', VersionConstants::TYPE_NAME_SYSTEM_RESTFUL_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRSystemRestfulInteraction', VersionConstants::TYPE_CLASS_SYSTEM_RESTFUL_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRSystemRestfulInteractionEnum()
    {
        $this->assertEquals('SystemRestfulInteractionEnum', VersionConstants::TYPE_NAME_SYSTEM_RESTFUL_INTERACTION_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRSystemRestfulInteractionEnum', VersionConstants::TYPE_CLASS_SYSTEM_RESTFUL_INTERACTION_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRTask()
    {
        $this->assertEquals('Task', VersionConstants::TYPE_NAME_TASK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRTask', VersionConstants::TYPE_CLASS_TASK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskInput()
    {
        $this->assertEquals('Task.Input', VersionConstants::TYPE_NAME_TASK_DOT_INPUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskInput', VersionConstants::TYPE_CLASS_TASK_DOT_INPUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskOutput()
    {
        $this->assertEquals('Task.Output', VersionConstants::TYPE_NAME_TASK_DOT_OUTPUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskOutput', VersionConstants::TYPE_CLASS_TASK_DOT_OUTPUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTask_FHIRTaskRestriction()
    {
        $this->assertEquals('Task.Restriction', VersionConstants::TYPE_NAME_TASK_DOT_RESTRICTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTask\FHIRTaskRestriction', VersionConstants::TYPE_CLASS_TASK_DOT_RESTRICTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTaskIntent()
    {
        $this->assertEquals('TaskIntent', VersionConstants::TYPE_NAME_TASK_INTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTaskIntent', VersionConstants::TYPE_CLASS_TASK_INTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTaskIntentEnum()
    {
        $this->assertEquals('TaskIntentEnum', VersionConstants::TYPE_NAME_TASK_INTENT_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTaskIntentEnum', VersionConstants::TYPE_CLASS_TASK_INTENT_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTaskStatus()
    {
        $this->assertEquals('TaskStatus', VersionConstants::TYPE_NAME_TASK_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTaskStatus', VersionConstants::TYPE_CLASS_TASK_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTaskStatusEnum()
    {
        $this->assertEquals('TaskStatusEnum', VersionConstants::TYPE_NAME_TASK_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTaskStatusEnum', VersionConstants::TYPE_CLASS_TASK_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRTerminologyCapabilities()
    {
        $this->assertEquals('TerminologyCapabilities', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRTerminologyCapabilities', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesClosure()
    {
        $this->assertEquals('TerminologyCapabilities.Closure', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_CLOSURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesClosure', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_CLOSURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesCodeSystem()
    {
        $this->assertEquals('TerminologyCapabilities.CodeSystem', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_CODE_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesCodeSystem', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_CODE_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesExpansion()
    {
        $this->assertEquals('TerminologyCapabilities.Expansion', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_EXPANSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesExpansion', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_EXPANSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesFilter()
    {
        $this->assertEquals('TerminologyCapabilities.Filter', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesImplementation()
    {
        $this->assertEquals('TerminologyCapabilities.Implementation', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_IMPLEMENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesImplementation', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_IMPLEMENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesParameter()
    {
        $this->assertEquals('TerminologyCapabilities.Parameter', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesParameter', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesSoftware()
    {
        $this->assertEquals('TerminologyCapabilities.Software', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_SOFTWARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesSoftware', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_SOFTWARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesTranslation()
    {
        $this->assertEquals('TerminologyCapabilities.Translation', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_TRANSLATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesTranslation', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_TRANSLATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesValidateCode()
    {
        $this->assertEquals('TerminologyCapabilities.ValidateCode', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_VALIDATE_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesValidateCode', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_VALIDATE_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTerminologyCapabilities_FHIRTerminologyCapabilitiesVersion()
    {
        $this->assertEquals('TerminologyCapabilities.Version', VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_VERSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesVersion', VersionConstants::TYPE_CLASS_TERMINOLOGY_CAPABILITIES_DOT_VERSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRTestReport()
    {
        $this->assertEquals('TestReport', VersionConstants::TYPE_NAME_TEST_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRTestReport', VersionConstants::TYPE_CLASS_TEST_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAction()
    {
        $this->assertEquals('TestReport.Action', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAction1()
    {
        $this->assertEquals('TestReport.Action1', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_ACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction1', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_ACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAction2()
    {
        $this->assertEquals('TestReport.Action2', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_ACTION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAction2', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_ACTION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportAssert()
    {
        $this->assertEquals('TestReport.Assert', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_ASSERT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportAssert', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_ASSERT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportOperation()
    {
        $this->assertEquals('TestReport.Operation', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportOperation', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportParticipant()
    {
        $this->assertEquals('TestReport.Participant', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportParticipant', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportSetup()
    {
        $this->assertEquals('TestReport.Setup', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_SETUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportSetup', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_SETUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportTeardown()
    {
        $this->assertEquals('TestReport.Teardown', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_TEARDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTeardown', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_TEARDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestReport_FHIRTestReportTest()
    {
        $this->assertEquals('TestReport.Test', VersionConstants::TYPE_NAME_TEST_REPORT_DOT_TEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestReport\FHIRTestReportTest', VersionConstants::TYPE_CLASS_TEST_REPORT_DOT_TEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTestReportActionResult()
    {
        $this->assertEquals('TestReportActionResult', VersionConstants::TYPE_NAME_TEST_REPORT_ACTION_RESULT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTestReportActionResult', VersionConstants::TYPE_CLASS_TEST_REPORT_ACTION_RESULT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTestReportActionResultEnum()
    {
        $this->assertEquals('TestReportActionResultEnum', VersionConstants::TYPE_NAME_TEST_REPORT_ACTION_RESULT_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTestReportActionResultEnum', VersionConstants::TYPE_CLASS_TEST_REPORT_ACTION_RESULT_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTestReportParticipantType()
    {
        $this->assertEquals('TestReportParticipantType', VersionConstants::TYPE_NAME_TEST_REPORT_PARTICIPANT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTestReportParticipantType', VersionConstants::TYPE_CLASS_TEST_REPORT_PARTICIPANT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTestReportParticipantTypeEnum()
    {
        $this->assertEquals('TestReportParticipantTypeEnum', VersionConstants::TYPE_NAME_TEST_REPORT_PARTICIPANT_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTestReportParticipantTypeEnum', VersionConstants::TYPE_CLASS_TEST_REPORT_PARTICIPANT_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTestReportResult()
    {
        $this->assertEquals('TestReportResult', VersionConstants::TYPE_NAME_TEST_REPORT_RESULT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTestReportResult', VersionConstants::TYPE_CLASS_TEST_REPORT_RESULT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTestReportResultEnum()
    {
        $this->assertEquals('TestReportResultEnum', VersionConstants::TYPE_NAME_TEST_REPORT_RESULT_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTestReportResultEnum', VersionConstants::TYPE_CLASS_TEST_REPORT_RESULT_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTestReportStatus()
    {
        $this->assertEquals('TestReportStatus', VersionConstants::TYPE_NAME_TEST_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTestReportStatus', VersionConstants::TYPE_CLASS_TEST_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTestReportStatusEnum()
    {
        $this->assertEquals('TestReportStatusEnum', VersionConstants::TYPE_NAME_TEST_REPORT_STATUS_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTestReportStatusEnum', VersionConstants::TYPE_CLASS_TEST_REPORT_STATUS_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRTestScript()
    {
        $this->assertEquals('TestScript', VersionConstants::TYPE_NAME_TEST_SCRIPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRTestScript', VersionConstants::TYPE_CLASS_TEST_SCRIPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction()
    {
        $this->assertEquals('TestScript.Action', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction1()
    {
        $this->assertEquals('TestScript.Action1', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction1', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction2()
    {
        $this->assertEquals('TestScript.Action2', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction2', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAssert()
    {
        $this->assertEquals('TestScript.Assert', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ASSERT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptCapability()
    {
        $this->assertEquals('TestScript.Capability', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_CAPABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptDestination()
    {
        $this->assertEquals('TestScript.Destination', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_DESTINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptDestination', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_DESTINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptFixture()
    {
        $this->assertEquals('TestScript.Fixture', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_FIXTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_FIXTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptLink()
    {
        $this->assertEquals('TestScript.Link', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptLink', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptMetadata()
    {
        $this->assertEquals('TestScript.Metadata', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_METADATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_METADATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptOperation()
    {
        $this->assertEquals('TestScript.Operation', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptOrigin()
    {
        $this->assertEquals('TestScript.Origin', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_ORIGIN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOrigin', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ORIGIN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRequestHeader()
    {
        $this->assertEquals('TestScript.RequestHeader', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_REQUEST_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_REQUEST_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptSetup()
    {
        $this->assertEquals('TestScript.Setup', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_SETUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_SETUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptTeardown()
    {
        $this->assertEquals('TestScript.Teardown', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_TEARDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_TEARDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptTest()
    {
        $this->assertEquals('TestScript.Test', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_TEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_TEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptVariable()
    {
        $this->assertEquals('TestScript.Variable', VersionConstants::TYPE_NAME_TEST_SCRIPT_DOT_VARIABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable', VersionConstants::TYPE_CLASS_TEST_SCRIPT_DOT_VARIABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTestScriptRequestMethodCode()
    {
        $this->assertEquals('TestScriptRequestMethodCode', VersionConstants::TYPE_NAME_TEST_SCRIPT_REQUEST_METHOD_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTestScriptRequestMethodCode', VersionConstants::TYPE_CLASS_TEST_SCRIPT_REQUEST_METHOD_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTestScriptRequestMethodCodeEnum()
    {
        $this->assertEquals('TestScriptRequestMethodCodeEnum', VersionConstants::TYPE_NAME_TEST_SCRIPT_REQUEST_METHOD_CODE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTestScriptRequestMethodCodeEnum', VersionConstants::TYPE_CLASS_TEST_SCRIPT_REQUEST_METHOD_CODE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTime()
    {
        $this->assertEquals('time', VersionConstants::TYPE_NAME_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTime', VersionConstants::TYPE_CLASS_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRTimePrimitive()
    {
        $this->assertEquals('time-primitive', VersionConstants::TYPE_NAME_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRTimePrimitive', VersionConstants::TYPE_CLASS_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTiming()
    {
        $this->assertEquals('Timing', VersionConstants::TYPE_NAME_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming', VersionConstants::TYPE_CLASS_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRTiming_FHIRTimingRepeat()
    {
        $this->assertEquals('Timing.Repeat', VersionConstants::TYPE_NAME_TIMING_DOT_REPEAT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTiming\FHIRTimingRepeat', VersionConstants::TYPE_CLASS_TIMING_DOT_REPEAT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTriggerDefinition()
    {
        $this->assertEquals('TriggerDefinition', VersionConstants::TYPE_NAME_TRIGGER_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTriggerDefinition', VersionConstants::TYPE_CLASS_TRIGGER_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTriggerType()
    {
        $this->assertEquals('TriggerType', VersionConstants::TYPE_NAME_TRIGGER_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTriggerType', VersionConstants::TYPE_CLASS_TRIGGER_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTriggerTypeEnum()
    {
        $this->assertEquals('TriggerTypeEnum', VersionConstants::TYPE_NAME_TRIGGER_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTriggerTypeEnum', VersionConstants::TYPE_CLASS_TRIGGER_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTypeDerivationRule()
    {
        $this->assertEquals('TypeDerivationRule', VersionConstants::TYPE_NAME_TYPE_DERIVATION_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTypeDerivationRule', VersionConstants::TYPE_CLASS_TYPE_DERIVATION_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTypeDerivationRuleEnum()
    {
        $this->assertEquals('TypeDerivationRuleEnum', VersionConstants::TYPE_NAME_TYPE_DERIVATION_RULE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTypeDerivationRuleEnum', VersionConstants::TYPE_CLASS_TYPE_DERIVATION_RULE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRTypeRestfulInteraction()
    {
        $this->assertEquals('TypeRestfulInteraction', VersionConstants::TYPE_NAME_TYPE_RESTFUL_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRTypeRestfulInteraction', VersionConstants::TYPE_CLASS_TYPE_RESTFUL_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRTypeRestfulInteractionEnum()
    {
        $this->assertEquals('TypeRestfulInteractionEnum', VersionConstants::TYPE_NAME_TYPE_RESTFUL_INTERACTION_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRTypeRestfulInteractionEnum', VersionConstants::TYPE_CLASS_TYPE_RESTFUL_INTERACTION_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRUDIEntryType()
    {
        $this->assertEquals('UDIEntryType', VersionConstants::TYPE_NAME_UDIENTRY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUDIEntryType', VersionConstants::TYPE_CLASS_UDIENTRY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRUDIEntryTypeEnum()
    {
        $this->assertEquals('UDIEntryTypeEnum', VersionConstants::TYPE_NAME_UDIENTRY_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRUDIEntryTypeEnum', VersionConstants::TYPE_CLASS_UDIENTRY_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRUnitsOfTime()
    {
        $this->assertEquals('UnitsOfTime', VersionConstants::TYPE_NAME_UNITS_OF_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnitsOfTime', VersionConstants::TYPE_CLASS_UNITS_OF_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRUnitsOfTimeEnum()
    {
        $this->assertEquals('UnitsOfTimeEnum', VersionConstants::TYPE_NAME_UNITS_OF_TIME_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRUnitsOfTimeEnum', VersionConstants::TYPE_CLASS_UNITS_OF_TIME_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRUnsignedInt()
    {
        $this->assertEquals('unsignedInt', VersionConstants::TYPE_NAME_UNSIGNED_INT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUnsignedInt', VersionConstants::TYPE_CLASS_UNSIGNED_INT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRUnsignedIntPrimitive()
    {
        $this->assertEquals('unsignedInt-primitive', VersionConstants::TYPE_NAME_UNSIGNED_INT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUnsignedIntPrimitive', VersionConstants::TYPE_CLASS_UNSIGNED_INT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRUri()
    {
        $this->assertEquals('uri', VersionConstants::TYPE_NAME_URI);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUri', VersionConstants::TYPE_CLASS_URI);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRUriPrimitive()
    {
        $this->assertEquals('uri-primitive', VersionConstants::TYPE_NAME_URI_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUriPrimitive', VersionConstants::TYPE_CLASS_URI_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRUrl()
    {
        $this->assertEquals('url', VersionConstants::TYPE_NAME_URL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUrl', VersionConstants::TYPE_CLASS_URL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRUrlPrimitive()
    {
        $this->assertEquals('url-primitive', VersionConstants::TYPE_NAME_URL_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUrlPrimitive', VersionConstants::TYPE_CLASS_URL_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRUsageContext()
    {
        $this->assertEquals('UsageContext', VersionConstants::TYPE_NAME_USAGE_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUsageContext', VersionConstants::TYPE_CLASS_USAGE_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRUse()
    {
        $this->assertEquals('Use', VersionConstants::TYPE_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUse', VersionConstants::TYPE_CLASS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRUseEnum()
    {
        $this->assertEquals('UseEnum', VersionConstants::TYPE_NAME_USE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRUseEnum', VersionConstants::TYPE_CLASS_USE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRUuid()
    {
        $this->assertEquals('uuid', VersionConstants::TYPE_NAME_UUID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRUuid', VersionConstants::TYPE_CLASS_UUID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRUuidPrimitive()
    {
        $this->assertEquals('uuid-primitive', VersionConstants::TYPE_NAME_UUID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRUuidPrimitive', VersionConstants::TYPE_CLASS_UUID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRValueSet()
    {
        $this->assertEquals('ValueSet', VersionConstants::TYPE_NAME_VALUE_SET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRValueSet', VersionConstants::TYPE_CLASS_VALUE_SET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetCompose()
    {
        $this->assertEquals('ValueSet.Compose', VersionConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_COMPOSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetConcept()
    {
        $this->assertEquals('ValueSet.Concept', VersionConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetContains()
    {
        $this->assertEquals('ValueSet.Contains', VersionConstants::TYPE_NAME_VALUE_SET_DOT_CONTAINS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_CONTAINS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetDesignation()
    {
        $this->assertEquals('ValueSet.Designation', VersionConstants::TYPE_NAME_VALUE_SET_DOT_DESIGNATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_DESIGNATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetExpansion()
    {
        $this->assertEquals('ValueSet.Expansion', VersionConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_EXPANSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetFilter()
    {
        $this->assertEquals('ValueSet.Filter', VersionConstants::TYPE_NAME_VALUE_SET_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetInclude()
    {
        $this->assertEquals('ValueSet.Include', VersionConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_INCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetParameter()
    {
        $this->assertEquals('ValueSet.Parameter', VersionConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter', VersionConstants::TYPE_CLASS_VALUE_SET_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRVariableType()
    {
        $this->assertEquals('VariableType', VersionConstants::TYPE_NAME_VARIABLE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRVariableType', VersionConstants::TYPE_CLASS_VARIABLE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRVariableTypeEnum()
    {
        $this->assertEquals('VariableTypeEnum', VersionConstants::TYPE_NAME_VARIABLE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRVariableTypeEnum', VersionConstants::TYPE_CLASS_VARIABLE_TYPE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRVerificationResult()
    {
        $this->assertEquals('VerificationResult', VersionConstants::TYPE_NAME_VERIFICATION_RESULT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRVerificationResult', VersionConstants::TYPE_CLASS_VERIFICATION_RESULT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRVerificationResult_FHIRVerificationResultAttestation()
    {
        $this->assertEquals('VerificationResult.Attestation', VersionConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_ATTESTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultAttestation', VersionConstants::TYPE_CLASS_VERIFICATION_RESULT_DOT_ATTESTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRVerificationResult_FHIRVerificationResultPrimarySource()
    {
        $this->assertEquals('VerificationResult.PrimarySource', VersionConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultPrimarySource', VersionConstants::TYPE_CLASS_VERIFICATION_RESULT_DOT_PRIMARY_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRVerificationResult_FHIRVerificationResultValidator()
    {
        $this->assertEquals('VerificationResult.Validator', VersionConstants::TYPE_NAME_VERIFICATION_RESULT_DOT_VALIDATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVerificationResult\FHIRVerificationResultValidator', VersionConstants::TYPE_CLASS_VERIFICATION_RESULT_DOT_VALIDATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRVisionBase()
    {
        $this->assertEquals('VisionBase', VersionConstants::TYPE_NAME_VISION_BASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRVisionBase', VersionConstants::TYPE_CLASS_VISION_BASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRVisionBaseEnum()
    {
        $this->assertEquals('VisionBaseEnum', VersionConstants::TYPE_NAME_VISION_BASE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRVisionBaseEnum', VersionConstants::TYPE_CLASS_VISION_BASE_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRVisionEyes()
    {
        $this->assertEquals('VisionEyes', VersionConstants::TYPE_NAME_VISION_EYES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRVisionEyes', VersionConstants::TYPE_CLASS_VISION_EYES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRVisionEyesEnum()
    {
        $this->assertEquals('VisionEyesEnum', VersionConstants::TYPE_NAME_VISION_EYES_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRVisionEyesEnum', VersionConstants::TYPE_CLASS_VISION_EYES_ENUM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRResource_FHIRDomainResource_FHIRVisionPrescription()
    {
        $this->assertEquals('VisionPrescription', VersionConstants::TYPE_NAME_VISION_PRESCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRResource\FHIRDomainResource\FHIRVisionPrescription', VersionConstants::TYPE_CLASS_VISION_PRESCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRVisionPrescription_FHIRVisionPrescriptionLensSpecification()
    {
        $this->assertEquals('VisionPrescription.LensSpecification', VersionConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionLensSpecification', VersionConstants::TYPE_CLASS_VISION_PRESCRIPTION_DOT_LENS_SPECIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRBackboneElement_FHIRVisionPrescription_FHIRVisionPrescriptionPrism()
    {
        $this->assertEquals('VisionPrescription.Prism', VersionConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_PRISM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionPrism', VersionConstants::TYPE_CLASS_VISION_PRESCRIPTION_DOT_PRISM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRXHTML()
    {
        $this->assertEquals('XHTML', VersionConstants::TYPE_NAME_XHTML);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRXHTML', VersionConstants::TYPE_CLASS_XHTML);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRElement_FHIRXPathUsageType()
    {
        $this->assertEquals('XPathUsageType', VersionConstants::TYPE_NAME_XPATH_USAGE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRXPathUsageType', VersionConstants::TYPE_CLASS_XPATH_USAGE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_Versions_R4B_Types_FHIRCodePrimitive_FHIRXPathUsageTypeEnum()
    {
        $this->assertEquals('XPathUsageTypeEnum', VersionConstants::TYPE_NAME_XPATH_USAGE_TYPE_ENUM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive\FHIRXPathUsageTypeEnum', VersionConstants::TYPE_CLASS_XPATH_USAGE_TYPE_ENUM);
    }

}
