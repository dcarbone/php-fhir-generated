<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTests;

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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use PHPUnit\Framework\TestCase;

/**
 * Class PHPFHIRConstantsTest
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTests
 */
class PHPFHIRConstantsTest extends TestCase
{
    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRAccount()
    {
        $this->assertEquals('Account', PHPFHIRConstants::TYPE_NAME_ACCOUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAccount', PHPFHIRConstants::TYPE_CLASS_ACCOUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAccountStatus()
    {
        $this->assertEquals('AccountStatus', PHPFHIRConstants::TYPE_NAME_ACCOUNT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAccountStatus', PHPFHIRConstants::TYPE_CLASS_ACCOUNT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAccountStatusList()
    {
        $this->assertEquals('AccountStatus-list', PHPFHIRConstants::TYPE_NAME_ACCOUNT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAccountStatusList', PHPFHIRConstants::TYPE_CLASS_ACCOUNT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRActionList()
    {
        $this->assertEquals('ActionList', PHPFHIRConstants::TYPE_NAME_ACTION_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRActionList', PHPFHIRConstants::TYPE_CLASS_ACTION_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRActionListList()
    {
        $this->assertEquals('ActionList-list', PHPFHIRConstants::TYPE_NAME_ACTION_LIST_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRActionListList', PHPFHIRConstants::TYPE_CLASS_ACTION_LIST_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAddress()
    {
        $this->assertEquals('Address', PHPFHIRConstants::TYPE_NAME_ADDRESS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAddress', PHPFHIRConstants::TYPE_CLASS_ADDRESS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAddressType()
    {
        $this->assertEquals('AddressType', PHPFHIRConstants::TYPE_NAME_ADDRESS_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAddressType', PHPFHIRConstants::TYPE_CLASS_ADDRESS_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAddressTypeList()
    {
        $this->assertEquals('AddressType-list', PHPFHIRConstants::TYPE_NAME_ADDRESS_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAddressTypeList', PHPFHIRConstants::TYPE_CLASS_ADDRESS_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAddressUse()
    {
        $this->assertEquals('AddressUse', PHPFHIRConstants::TYPE_NAME_ADDRESS_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAddressUse', PHPFHIRConstants::TYPE_CLASS_ADDRESS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAddressUseList()
    {
        $this->assertEquals('AddressUse-list', PHPFHIRConstants::TYPE_NAME_ADDRESS_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAddressUseList', PHPFHIRConstants::TYPE_CLASS_ADDRESS_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAdministrativeGender()
    {
        $this->assertEquals('AdministrativeGender', PHPFHIRConstants::TYPE_NAME_ADMINISTRATIVE_GENDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAdministrativeGender', PHPFHIRConstants::TYPE_CLASS_ADMINISTRATIVE_GENDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAdministrativeGenderList()
    {
        $this->assertEquals('AdministrativeGender-list', PHPFHIRConstants::TYPE_NAME_ADMINISTRATIVE_GENDER_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAdministrativeGenderList', PHPFHIRConstants::TYPE_CLASS_ADMINISTRATIVE_GENDER_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuantity_FHIRAge()
    {
        $this->assertEquals('Age', PHPFHIRConstants::TYPE_NAME_AGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRAge', PHPFHIRConstants::TYPE_CLASS_AGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAggregationMode()
    {
        $this->assertEquals('AggregationMode', PHPFHIRConstants::TYPE_NAME_AGGREGATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAggregationMode', PHPFHIRConstants::TYPE_CLASS_AGGREGATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAggregationModeList()
    {
        $this->assertEquals('AggregationMode-list', PHPFHIRConstants::TYPE_NAME_AGGREGATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAggregationModeList', PHPFHIRConstants::TYPE_CLASS_AGGREGATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRAllergyIntolerance()
    {
        $this->assertEquals('AllergyIntolerance', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAllergyIntolerance', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRAllergyIntolerance_FHIRAllergyIntoleranceReaction()
    {
        $this->assertEquals('AllergyIntolerance.Reaction', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAllergyIntoleranceCategory()
    {
        $this->assertEquals('AllergyIntoleranceCategory', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCategory', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAllergyIntoleranceCategoryList()
    {
        $this->assertEquals('AllergyIntoleranceCategory-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceCategoryList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAllergyIntoleranceCertainty()
    {
        $this->assertEquals('AllergyIntoleranceCertainty', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CERTAINTY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCertainty', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CERTAINTY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAllergyIntoleranceCertaintyList()
    {
        $this->assertEquals('AllergyIntoleranceCertainty-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CERTAINTY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceCertaintyList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CERTAINTY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAllergyIntoleranceCriticality()
    {
        $this->assertEquals('AllergyIntoleranceCriticality', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CRITICALITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceCriticality', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CRITICALITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAllergyIntoleranceCriticalityList()
    {
        $this->assertEquals('AllergyIntoleranceCriticality-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_CRITICALITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceCriticalityList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_CRITICALITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAllergyIntoleranceSeverity()
    {
        $this->assertEquals('AllergyIntoleranceSeverity', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceSeverity', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAllergyIntoleranceSeverityList()
    {
        $this->assertEquals('AllergyIntoleranceSeverity-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceSeverityList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAllergyIntoleranceStatus()
    {
        $this->assertEquals('AllergyIntoleranceStatus', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceStatus', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAllergyIntoleranceStatusList()
    {
        $this->assertEquals('AllergyIntoleranceStatus-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceStatusList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAllergyIntoleranceType()
    {
        $this->assertEquals('AllergyIntoleranceType', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAllergyIntoleranceType', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAllergyIntoleranceTypeList()
    {
        $this->assertEquals('AllergyIntoleranceType-list', PHPFHIRConstants::TYPE_NAME_ALLERGY_INTOLERANCE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAllergyIntoleranceTypeList', PHPFHIRConstants::TYPE_CLASS_ALLERGY_INTOLERANCE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAnnotation()
    {
        $this->assertEquals('Annotation', PHPFHIRConstants::TYPE_NAME_ANNOTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnnotation', PHPFHIRConstants::TYPE_CLASS_ANNOTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAnswerFormat()
    {
        $this->assertEquals('AnswerFormat', PHPFHIRConstants::TYPE_NAME_ANSWER_FORMAT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAnswerFormat', PHPFHIRConstants::TYPE_CLASS_ANSWER_FORMAT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAnswerFormatList()
    {
        $this->assertEquals('AnswerFormat-list', PHPFHIRConstants::TYPE_NAME_ANSWER_FORMAT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAnswerFormatList', PHPFHIRConstants::TYPE_CLASS_ANSWER_FORMAT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRAppointment()
    {
        $this->assertEquals('Appointment', PHPFHIRConstants::TYPE_NAME_APPOINTMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAppointment', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRAppointment_FHIRAppointmentParticipant()
    {
        $this->assertEquals('Appointment.Participant', PHPFHIRConstants::TYPE_NAME_APPOINTMENT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAppointment\FHIRAppointmentParticipant', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRAppointmentResponse()
    {
        $this->assertEquals('AppointmentResponse', PHPFHIRConstants::TYPE_NAME_APPOINTMENT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAppointmentResponse', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAppointmentStatus()
    {
        $this->assertEquals('AppointmentStatus', PHPFHIRConstants::TYPE_NAME_APPOINTMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAppointmentStatus', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAppointmentStatusList()
    {
        $this->assertEquals('AppointmentStatus-list', PHPFHIRConstants::TYPE_NAME_APPOINTMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAppointmentStatusList', PHPFHIRConstants::TYPE_CLASS_APPOINTMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAssertionDirectionType()
    {
        $this->assertEquals('AssertionDirectionType', PHPFHIRConstants::TYPE_NAME_ASSERTION_DIRECTION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionDirectionType', PHPFHIRConstants::TYPE_CLASS_ASSERTION_DIRECTION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAssertionDirectionTypeList()
    {
        $this->assertEquals('AssertionDirectionType-list', PHPFHIRConstants::TYPE_NAME_ASSERTION_DIRECTION_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAssertionDirectionTypeList', PHPFHIRConstants::TYPE_CLASS_ASSERTION_DIRECTION_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAssertionOperatorType()
    {
        $this->assertEquals('AssertionOperatorType', PHPFHIRConstants::TYPE_NAME_ASSERTION_OPERATOR_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionOperatorType', PHPFHIRConstants::TYPE_CLASS_ASSERTION_OPERATOR_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAssertionOperatorTypeList()
    {
        $this->assertEquals('AssertionOperatorType-list', PHPFHIRConstants::TYPE_NAME_ASSERTION_OPERATOR_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAssertionOperatorTypeList', PHPFHIRConstants::TYPE_CLASS_ASSERTION_OPERATOR_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAssertionResponseTypes()
    {
        $this->assertEquals('AssertionResponseTypes', PHPFHIRConstants::TYPE_NAME_ASSERTION_RESPONSE_TYPES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAssertionResponseTypes', PHPFHIRConstants::TYPE_CLASS_ASSERTION_RESPONSE_TYPES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAssertionResponseTypesList()
    {
        $this->assertEquals('AssertionResponseTypes-list', PHPFHIRConstants::TYPE_NAME_ASSERTION_RESPONSE_TYPES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAssertionResponseTypesList', PHPFHIRConstants::TYPE_CLASS_ASSERTION_RESPONSE_TYPES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAttachment()
    {
        $this->assertEquals('Attachment', PHPFHIRConstants::TYPE_NAME_ATTACHMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAttachment', PHPFHIRConstants::TYPE_CLASS_ATTACHMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRAuditEvent()
    {
        $this->assertEquals('AuditEvent', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRAuditEvent', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventDetail()
    {
        $this->assertEquals('AuditEvent.Detail', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventDetail', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventEvent()
    {
        $this->assertEquals('AuditEvent.Event', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventNetwork()
    {
        $this->assertEquals('AuditEvent.Network', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_NETWORK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventNetwork', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_NETWORK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventObject()
    {
        $this->assertEquals('AuditEvent.Object', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_OBJECT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventObject', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_OBJECT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventParticipant()
    {
        $this->assertEquals('AuditEvent.Participant', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventParticipant', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRAuditEvent_FHIRAuditEventSource()
    {
        $this->assertEquals('AuditEvent.Source', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAuditEventAction()
    {
        $this->assertEquals('AuditEventAction', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventAction', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAuditEventActionList()
    {
        $this->assertEquals('AuditEventAction-list', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_ACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAuditEventActionList', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_ACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAuditEventOutcome()
    {
        $this->assertEquals('AuditEventOutcome', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventOutcome', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAuditEventOutcomeList()
    {
        $this->assertEquals('AuditEventOutcome-list', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAuditEventOutcomeList', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRAuditEventParticipantNetworkType()
    {
        $this->assertEquals('AuditEventParticipantNetworkType', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_PARTICIPANT_NETWORK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventParticipantNetworkType', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_PARTICIPANT_NETWORK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRAuditEventParticipantNetworkTypeList()
    {
        $this->assertEquals('AuditEventParticipantNetworkType-list', PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_PARTICIPANT_NETWORK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRAuditEventParticipantNetworkTypeList', PHPFHIRConstants::TYPE_CLASS_AUDIT_EVENT_PARTICIPANT_NETWORK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement()
    {
        $this->assertEquals('BackboneElement', PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement', PHPFHIRConstants::TYPE_CLASS_BACKBONE_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBase64Binary()
    {
        $this->assertEquals('base64Binary', PHPFHIRConstants::TYPE_NAME_BASE_64BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBase64Binary', PHPFHIRConstants::TYPE_CLASS_BASE_64BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRBase64BinaryPrimitive()
    {
        $this->assertEquals('base64Binary-primitive', PHPFHIRConstants::TYPE_NAME_BASE_64BINARY_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRBase64BinaryPrimitive', PHPFHIRConstants::TYPE_CLASS_BASE_64BINARY_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRBasic()
    {
        $this->assertEquals('Basic', PHPFHIRConstants::TYPE_NAME_BASIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRBasic', PHPFHIRConstants::TYPE_CLASS_BASIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRBinary()
    {
        $this->assertEquals('Binary', PHPFHIRConstants::TYPE_NAME_BINARY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRBinary', PHPFHIRConstants::TYPE_CLASS_BINARY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBindingStrength()
    {
        $this->assertEquals('BindingStrength', PHPFHIRConstants::TYPE_NAME_BINDING_STRENGTH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBindingStrength', PHPFHIRConstants::TYPE_CLASS_BINDING_STRENGTH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRBindingStrengthList()
    {
        $this->assertEquals('BindingStrength-list', PHPFHIRConstants::TYPE_NAME_BINDING_STRENGTH_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRBindingStrengthList', PHPFHIRConstants::TYPE_CLASS_BINDING_STRENGTH_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRBodySite()
    {
        $this->assertEquals('BodySite', PHPFHIRConstants::TYPE_NAME_BODY_SITE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRBodySite', PHPFHIRConstants::TYPE_CLASS_BODY_SITE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBoolean()
    {
        $this->assertEquals('boolean', PHPFHIRConstants::TYPE_NAME_BOOLEAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBoolean', PHPFHIRConstants::TYPE_CLASS_BOOLEAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRBooleanPrimitive()
    {
        $this->assertEquals('boolean-primitive', PHPFHIRConstants::TYPE_NAME_BOOLEAN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRBooleanPrimitive', PHPFHIRConstants::TYPE_CLASS_BOOLEAN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRBundle()
    {
        $this->assertEquals('Bundle', PHPFHIRConstants::TYPE_NAME_BUNDLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRBundle', PHPFHIRConstants::TYPE_CLASS_BUNDLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleEntry()
    {
        $this->assertEquals('Bundle.Entry', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleEntry', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleLink()
    {
        $this->assertEquals('Bundle.Link', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleLink', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleRequest()
    {
        $this->assertEquals('Bundle.Request', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleRequest', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleResponse()
    {
        $this->assertEquals('Bundle.Response', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleResponse', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRBundle_FHIRBundleSearch()
    {
        $this->assertEquals('Bundle.Search', PHPFHIRConstants::TYPE_NAME_BUNDLE_DOT_SEARCH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRBundle\FHIRBundleSearch', PHPFHIRConstants::TYPE_CLASS_BUNDLE_DOT_SEARCH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBundleType()
    {
        $this->assertEquals('BundleType', PHPFHIRConstants::TYPE_NAME_BUNDLE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBundleType', PHPFHIRConstants::TYPE_CLASS_BUNDLE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRBundleTypeList()
    {
        $this->assertEquals('BundleType-list', PHPFHIRConstants::TYPE_NAME_BUNDLE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRBundleTypeList', PHPFHIRConstants::TYPE_CLASS_BUNDLE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRCarePlan()
    {
        $this->assertEquals('CarePlan', PHPFHIRConstants::TYPE_NAME_CARE_PLAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCarePlan', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanActivity()
    {
        $this->assertEquals('CarePlan.Activity', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_ACTIVITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanDetail()
    {
        $this->assertEquals('CarePlan.Detail', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanDetail', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanParticipant()
    {
        $this->assertEquals('CarePlan.Participant', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRCarePlan_FHIRCarePlanRelatedPlan()
    {
        $this->assertEquals('CarePlan.RelatedPlan', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_RELATED_PLAN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanRelatedPlan', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_DOT_RELATED_PLAN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCarePlanActivityStatus()
    {
        $this->assertEquals('CarePlanActivityStatus', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCarePlanActivityStatus', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRCarePlanActivityStatusList()
    {
        $this->assertEquals('CarePlanActivityStatus-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCarePlanActivityStatusList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_ACTIVITY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCarePlanRelationship()
    {
        $this->assertEquals('CarePlanRelationship', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_RELATIONSHIP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCarePlanRelationship', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_RELATIONSHIP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRCarePlanRelationshipList()
    {
        $this->assertEquals('CarePlanRelationship-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_RELATIONSHIP_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCarePlanRelationshipList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_RELATIONSHIP_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCarePlanStatus()
    {
        $this->assertEquals('CarePlanStatus', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCarePlanStatus', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRCarePlanStatusList()
    {
        $this->assertEquals('CarePlanStatus-list', PHPFHIRConstants::TYPE_NAME_CARE_PLAN_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCarePlanStatusList', PHPFHIRConstants::TYPE_CLASS_CARE_PLAN_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRClaim()
    {
        $this->assertEquals('Claim', PHPFHIRConstants::TYPE_NAME_CLAIM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaim', PHPFHIRConstants::TYPE_CLASS_CLAIM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimCoverage()
    {
        $this->assertEquals('Claim.Coverage', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimCoverage', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimDetail()
    {
        $this->assertEquals('Claim.Detail', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDetail', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimDiagnosis()
    {
        $this->assertEquals('Claim.Diagnosis', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_DIAGNOSIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimDiagnosis', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_DIAGNOSIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimItem()
    {
        $this->assertEquals('Claim.Item', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimItem', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimMissingTeeth()
    {
        $this->assertEquals('Claim.MissingTeeth', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_MISSING_TEETH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimMissingTeeth', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_MISSING_TEETH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimPayee()
    {
        $this->assertEquals('Claim.Payee', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PAYEE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimPayee', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_PAYEE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimProsthesis()
    {
        $this->assertEquals('Claim.Prosthesis', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_PROSTHESIS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimProsthesis', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_PROSTHESIS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaim_FHIRClaimSubDetail()
    {
        $this->assertEquals('Claim.SubDetail', PHPFHIRConstants::TYPE_NAME_CLAIM_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaim\FHIRClaimSubDetail', PHPFHIRConstants::TYPE_CLASS_CLAIM_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRClaimResponse()
    {
        $this->assertEquals('ClaimResponse', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClaimResponse', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAddItem()
    {
        $this->assertEquals('ClaimResponse.AddItem', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADD_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAddItem', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADD_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAdjudication()
    {
        $this->assertEquals('ClaimResponse.Adjudication', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADJUDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADJUDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAdjudication1()
    {
        $this->assertEquals('ClaimResponse.Adjudication1', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADJUDICATION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication1', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADJUDICATION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAdjudication2()
    {
        $this->assertEquals('ClaimResponse.Adjudication2', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADJUDICATION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication2', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADJUDICATION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAdjudication3()
    {
        $this->assertEquals('ClaimResponse.Adjudication3', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADJUDICATION_3);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication3', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADJUDICATION_3);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseAdjudication4()
    {
        $this->assertEquals('ClaimResponse.Adjudication4', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ADJUDICATION_4);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseAdjudication4', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ADJUDICATION_4);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseCoverage()
    {
        $this->assertEquals('ClaimResponse.Coverage', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseCoverage', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseDetail()
    {
        $this->assertEquals('ClaimResponse.Detail', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseDetail1()
    {
        $this->assertEquals('ClaimResponse.Detail1', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_DETAIL_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseDetail1', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_DETAIL_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseError()
    {
        $this->assertEquals('ClaimResponse.Error', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ERROR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseError', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ERROR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseItem()
    {
        $this->assertEquals('ClaimResponse.Item', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseItem', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseNote()
    {
        $this->assertEquals('ClaimResponse.Note', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseNote', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClaimResponse_FHIRClaimResponseSubDetail()
    {
        $this->assertEquals('ClaimResponse.SubDetail', PHPFHIRConstants::TYPE_NAME_CLAIM_RESPONSE_DOT_SUB_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClaimResponse\FHIRClaimResponseSubDetail', PHPFHIRConstants::TYPE_CLASS_CLAIM_RESPONSE_DOT_SUB_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRClaimType()
    {
        $this->assertEquals('ClaimType', PHPFHIRConstants::TYPE_NAME_CLAIM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClaimType', PHPFHIRConstants::TYPE_CLASS_CLAIM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRClaimTypeList()
    {
        $this->assertEquals('ClaimType-list', PHPFHIRConstants::TYPE_NAME_CLAIM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRClaimTypeList', PHPFHIRConstants::TYPE_CLASS_CLAIM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRClinicalImpression()
    {
        $this->assertEquals('ClinicalImpression', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRClinicalImpression', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClinicalImpression_FHIRClinicalImpressionFinding()
    {
        $this->assertEquals('ClinicalImpression.Finding', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_FINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionFinding', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION_DOT_FINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClinicalImpression_FHIRClinicalImpressionInvestigations()
    {
        $this->assertEquals('ClinicalImpression.Investigations', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_INVESTIGATIONS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION_DOT_INVESTIGATIONS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRClinicalImpression_FHIRClinicalImpressionRuledOut()
    {
        $this->assertEquals('ClinicalImpression.RuledOut', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_DOT_RULED_OUT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION_DOT_RULED_OUT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRClinicalImpressionStatus()
    {
        $this->assertEquals('ClinicalImpressionStatus', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRClinicalImpressionStatus', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRClinicalImpressionStatusList()
    {
        $this->assertEquals('ClinicalImpressionStatus-list', PHPFHIRConstants::TYPE_NAME_CLINICAL_IMPRESSION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRClinicalImpressionStatusList', PHPFHIRConstants::TYPE_CLASS_CLINICAL_IMPRESSION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCode()
    {
        $this->assertEquals('code', PHPFHIRConstants::TYPE_NAME_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCode', PHPFHIRConstants::TYPE_CLASS_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRCodePrimitive()
    {
        $this->assertEquals('code-primitive', PHPFHIRConstants::TYPE_NAME_CODE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRCodePrimitive', PHPFHIRConstants::TYPE_CLASS_CODE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCodeableConcept()
    {
        $this->assertEquals('CodeableConcept', PHPFHIRConstants::TYPE_NAME_CODEABLE_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCodeableConcept', PHPFHIRConstants::TYPE_CLASS_CODEABLE_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCoding()
    {
        $this->assertEquals('Coding', PHPFHIRConstants::TYPE_NAME_CODING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding', PHPFHIRConstants::TYPE_CLASS_CODING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRCommunication()
    {
        $this->assertEquals('Communication', PHPFHIRConstants::TYPE_NAME_COMMUNICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCommunication', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRCommunication_FHIRCommunicationPayload()
    {
        $this->assertEquals('Communication.Payload', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_DOT_PAYLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunication\FHIRCommunicationPayload', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_DOT_PAYLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRCommunicationRequest()
    {
        $this->assertEquals('CommunicationRequest', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCommunicationRequest', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRCommunicationRequest_FHIRCommunicationRequestPayload()
    {
        $this->assertEquals('CommunicationRequest.Payload', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST_DOT_PAYLOAD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCommunicationRequest\FHIRCommunicationRequestPayload', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_REQUEST_DOT_PAYLOAD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCommunicationRequestStatus()
    {
        $this->assertEquals('CommunicationRequestStatus', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCommunicationRequestStatus', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRCommunicationRequestStatusList()
    {
        $this->assertEquals('CommunicationRequestStatus-list', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCommunicationRequestStatusList', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCommunicationStatus()
    {
        $this->assertEquals('CommunicationStatus', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCommunicationStatus', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRCommunicationStatusList()
    {
        $this->assertEquals('CommunicationStatus-list', PHPFHIRConstants::TYPE_NAME_COMMUNICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCommunicationStatusList', PHPFHIRConstants::TYPE_CLASS_COMMUNICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRComposition()
    {
        $this->assertEquals('Composition', PHPFHIRConstants::TYPE_NAME_COMPOSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRComposition', PHPFHIRConstants::TYPE_CLASS_COMPOSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionAttester()
    {
        $this->assertEquals('Composition.Attester', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_ATTESTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionEvent()
    {
        $this->assertEquals('Composition.Event', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionEvent', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRComposition_FHIRCompositionSection()
    {
        $this->assertEquals('Composition.Section', PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_SECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionSection', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_DOT_SECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCompositionAttestationMode()
    {
        $this->assertEquals('CompositionAttestationMode', PHPFHIRConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCompositionAttestationMode', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRCompositionAttestationModeList()
    {
        $this->assertEquals('CompositionAttestationMode-list', PHPFHIRConstants::TYPE_NAME_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCompositionAttestationModeList', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_ATTESTATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRCompositionStatus()
    {
        $this->assertEquals('CompositionStatus', PHPFHIRConstants::TYPE_NAME_COMPOSITION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCompositionStatus', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRCompositionStatusList()
    {
        $this->assertEquals('CompositionStatus-list', PHPFHIRConstants::TYPE_NAME_COMPOSITION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRCompositionStatusList', PHPFHIRConstants::TYPE_CLASS_COMPOSITION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRConceptMap()
    {
        $this->assertEquals('ConceptMap', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRConceptMap', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapContact()
    {
        $this->assertEquals('ConceptMap.Contact', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapContact', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapDependsOn()
    {
        $this->assertEquals('ConceptMap.DependsOn', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_DEPENDS_ON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapDependsOn', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_DEPENDS_ON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapElement()
    {
        $this->assertEquals('ConceptMap.Element', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapElement', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConceptMap_FHIRConceptMapTarget()
    {
        $this->assertEquals('ConceptMap.Target', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_DOT_TARGET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConceptMap\FHIRConceptMapTarget', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_DOT_TARGET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRConceptMapEquivalence()
    {
        $this->assertEquals('ConceptMapEquivalence', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConceptMapEquivalence', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRConceptMapEquivalenceList()
    {
        $this->assertEquals('ConceptMapEquivalence-list', PHPFHIRConstants::TYPE_NAME_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConceptMapEquivalenceList', PHPFHIRConstants::TYPE_CLASS_CONCEPT_MAP_EQUIVALENCE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRCondition()
    {
        $this->assertEquals('Condition', PHPFHIRConstants::TYPE_NAME_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCondition', PHPFHIRConstants::TYPE_CLASS_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionEvidence()
    {
        $this->assertEquals('Condition.Evidence', PHPFHIRConstants::TYPE_NAME_CONDITION_DOT_EVIDENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionEvidence', PHPFHIRConstants::TYPE_CLASS_CONDITION_DOT_EVIDENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRCondition_FHIRConditionStage()
    {
        $this->assertEquals('Condition.Stage', PHPFHIRConstants::TYPE_NAME_CONDITION_DOT_STAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRCondition\FHIRConditionStage', PHPFHIRConstants::TYPE_CLASS_CONDITION_DOT_STAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRConditionalDeleteStatus()
    {
        $this->assertEquals('ConditionalDeleteStatus', PHPFHIRConstants::TYPE_NAME_CONDITIONAL_DELETE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConditionalDeleteStatus', PHPFHIRConstants::TYPE_CLASS_CONDITIONAL_DELETE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRConditionalDeleteStatusList()
    {
        $this->assertEquals('ConditionalDeleteStatus-list', PHPFHIRConstants::TYPE_NAME_CONDITIONAL_DELETE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConditionalDeleteStatusList', PHPFHIRConstants::TYPE_CLASS_CONDITIONAL_DELETE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRConditionVerificationStatus()
    {
        $this->assertEquals('ConditionVerificationStatus', PHPFHIRConstants::TYPE_NAME_CONDITION_VERIFICATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConditionVerificationStatus', PHPFHIRConstants::TYPE_CLASS_CONDITION_VERIFICATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRConditionVerificationStatusList()
    {
        $this->assertEquals('ConditionVerificationStatus-list', PHPFHIRConstants::TYPE_NAME_CONDITION_VERIFICATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConditionVerificationStatusList', PHPFHIRConstants::TYPE_CLASS_CONDITION_VERIFICATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRConformance()
    {
        $this->assertEquals('Conformance', PHPFHIRConstants::TYPE_NAME_CONFORMANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRConformance', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceCertificate()
    {
        $this->assertEquals('Conformance.Certificate', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_CERTIFICATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceCertificate', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_CERTIFICATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceContact()
    {
        $this->assertEquals('Conformance.Contact', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceContact', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceDocument()
    {
        $this->assertEquals('Conformance.Document', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_DOCUMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceDocument', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_DOCUMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceEndpoint()
    {
        $this->assertEquals('Conformance.Endpoint', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_ENDPOINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEndpoint', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_ENDPOINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceEvent()
    {
        $this->assertEquals('Conformance.Event', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceEvent', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceImplementation()
    {
        $this->assertEquals('Conformance.Implementation', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_IMPLEMENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceImplementation', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_IMPLEMENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceInteraction()
    {
        $this->assertEquals('Conformance.Interaction', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceInteraction1()
    {
        $this->assertEquals('Conformance.Interaction1', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_INTERACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceInteraction1', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_INTERACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceMessaging()
    {
        $this->assertEquals('Conformance.Messaging', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_MESSAGING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceMessaging', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_MESSAGING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceOperation()
    {
        $this->assertEquals('Conformance.Operation', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceResource()
    {
        $this->assertEquals('Conformance.Resource', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceResource', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceRest()
    {
        $this->assertEquals('Conformance.Rest', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_REST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceRest', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_REST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceSearchParam()
    {
        $this->assertEquals('Conformance.SearchParam', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SEARCH_PARAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSearchParam', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_SEARCH_PARAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceSecurity()
    {
        $this->assertEquals('Conformance.Security', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SECURITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSecurity', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_SECURITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRConformance_FHIRConformanceSoftware()
    {
        $this->assertEquals('Conformance.Software', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_DOT_SOFTWARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceSoftware', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_DOT_SOFTWARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRConformanceEventMode()
    {
        $this->assertEquals('ConformanceEventMode', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_EVENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceEventMode', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_EVENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRConformanceEventModeList()
    {
        $this->assertEquals('ConformanceEventMode-list', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_EVENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConformanceEventModeList', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_EVENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRConformanceResourceStatus()
    {
        $this->assertEquals('ConformanceResourceStatus', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_RESOURCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceResourceStatus', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_RESOURCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRConformanceResourceStatusList()
    {
        $this->assertEquals('ConformanceResourceStatus-list', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_RESOURCE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConformanceResourceStatusList', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_RESOURCE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRConformanceStatementKind()
    {
        $this->assertEquals('ConformanceStatementKind', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_STATEMENT_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConformanceStatementKind', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_STATEMENT_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRConformanceStatementKindList()
    {
        $this->assertEquals('ConformanceStatementKind-list', PHPFHIRConstants::TYPE_NAME_CONFORMANCE_STATEMENT_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConformanceStatementKindList', PHPFHIRConstants::TYPE_CLASS_CONFORMANCE_STATEMENT_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRConstraintSeverity()
    {
        $this->assertEquals('ConstraintSeverity', PHPFHIRConstants::TYPE_NAME_CONSTRAINT_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRConstraintSeverity', PHPFHIRConstants::TYPE_CLASS_CONSTRAINT_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRConstraintSeverityList()
    {
        $this->assertEquals('ConstraintSeverity-list', PHPFHIRConstants::TYPE_NAME_CONSTRAINT_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRConstraintSeverityList', PHPFHIRConstants::TYPE_CLASS_CONSTRAINT_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRContactPoint()
    {
        $this->assertEquals('ContactPoint', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPoint', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRContactPointSystem()
    {
        $this->assertEquals('ContactPointSystem', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPointSystem', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRContactPointSystemList()
    {
        $this->assertEquals('ContactPointSystem-list', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT_SYSTEM_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRContactPointSystemList', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT_SYSTEM_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRContactPointUse()
    {
        $this->assertEquals('ContactPointUse', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContactPointUse', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRContactPointUseList()
    {
        $this->assertEquals('ContactPointUse-list', PHPFHIRConstants::TYPE_NAME_CONTACT_POINT_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRContactPointUseList', PHPFHIRConstants::TYPE_CLASS_CONTACT_POINT_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRContentType()
    {
        $this->assertEquals('ContentType', PHPFHIRConstants::TYPE_NAME_CONTENT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRContentType', PHPFHIRConstants::TYPE_CLASS_CONTENT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRContentTypeList()
    {
        $this->assertEquals('ContentType-list', PHPFHIRConstants::TYPE_NAME_CONTENT_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRContentTypeList', PHPFHIRConstants::TYPE_CLASS_CONTENT_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRContract()
    {
        $this->assertEquals('Contract', PHPFHIRConstants::TYPE_NAME_CONTRACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRContract', PHPFHIRConstants::TYPE_CLASS_CONTRACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractActor()
    {
        $this->assertEquals('Contract.Actor', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_ACTOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractActor1()
    {
        $this->assertEquals('Contract.Actor1', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_ACTOR_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractActor1', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_ACTOR_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractFriendly()
    {
        $this->assertEquals('Contract.Friendly', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_FRIENDLY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractFriendly', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_FRIENDLY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractLegal()
    {
        $this->assertEquals('Contract.Legal', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_LEGAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractLegal', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_LEGAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractRule()
    {
        $this->assertEquals('Contract.Rule', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_RULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractRule', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_RULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractSigner()
    {
        $this->assertEquals('Contract.Signer', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_SIGNER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractSigner', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_SIGNER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractTerm()
    {
        $this->assertEquals('Contract.Term', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_TERM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractTerm', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_TERM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractValuedItem()
    {
        $this->assertEquals('Contract.ValuedItem', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_VALUED_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRContract_FHIRContractValuedItem1()
    {
        $this->assertEquals('Contract.ValuedItem1', PHPFHIRConstants::TYPE_NAME_CONTRACT_DOT_VALUED_ITEM_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRContract\FHIRContractValuedItem1', PHPFHIRConstants::TYPE_CLASS_CONTRACT_DOT_VALUED_ITEM_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuantity_FHIRCount()
    {
        $this->assertEquals('Count', PHPFHIRConstants::TYPE_NAME_COUNT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRCount', PHPFHIRConstants::TYPE_CLASS_COUNT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRCoverage()
    {
        $this->assertEquals('Coverage', PHPFHIRConstants::TYPE_NAME_COVERAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRCoverage', PHPFHIRConstants::TYPE_CLASS_COVERAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDataElement()
    {
        $this->assertEquals('DataElement', PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDataElement', PHPFHIRConstants::TYPE_CLASS_DATA_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDataElement_FHIRDataElementContact()
    {
        $this->assertEquals('DataElement.Contact', PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementContact', PHPFHIRConstants::TYPE_CLASS_DATA_ELEMENT_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDataElement_FHIRDataElementMapping()
    {
        $this->assertEquals('DataElement.Mapping', PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDataElement\FHIRDataElementMapping', PHPFHIRConstants::TYPE_CLASS_DATA_ELEMENT_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDataElementStringency()
    {
        $this->assertEquals('DataElementStringency', PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT_STRINGENCY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDataElementStringency', PHPFHIRConstants::TYPE_CLASS_DATA_ELEMENT_STRINGENCY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDataElementStringencyList()
    {
        $this->assertEquals('DataElementStringency-list', PHPFHIRConstants::TYPE_NAME_DATA_ELEMENT_STRINGENCY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDataElementStringencyList', PHPFHIRConstants::TYPE_CLASS_DATA_ELEMENT_STRINGENCY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDate()
    {
        $this->assertEquals('date', PHPFHIRConstants::TYPE_NAME_DATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDate', PHPFHIRConstants::TYPE_CLASS_DATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRDatePrimitive()
    {
        $this->assertEquals('date-primitive', PHPFHIRConstants::TYPE_NAME_DATE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRDatePrimitive', PHPFHIRConstants::TYPE_CLASS_DATE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDateTime()
    {
        $this->assertEquals('dateTime', PHPFHIRConstants::TYPE_NAME_DATE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDateTime', PHPFHIRConstants::TYPE_CLASS_DATE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRDateTimePrimitive()
    {
        $this->assertEquals('dateTime-primitive', PHPFHIRConstants::TYPE_NAME_DATE_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRDateTimePrimitive', PHPFHIRConstants::TYPE_CLASS_DATE_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDaysOfWeek()
    {
        $this->assertEquals('DaysOfWeek', PHPFHIRConstants::TYPE_NAME_DAYS_OF_WEEK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDaysOfWeek', PHPFHIRConstants::TYPE_CLASS_DAYS_OF_WEEK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDaysOfWeekList()
    {
        $this->assertEquals('DaysOfWeek-list', PHPFHIRConstants::TYPE_NAME_DAYS_OF_WEEK_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDaysOfWeekList', PHPFHIRConstants::TYPE_CLASS_DAYS_OF_WEEK_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDecimal()
    {
        $this->assertEquals('decimal', PHPFHIRConstants::TYPE_NAME_DECIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDecimal', PHPFHIRConstants::TYPE_CLASS_DECIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRDecimalPrimitive()
    {
        $this->assertEquals('decimal-primitive', PHPFHIRConstants::TYPE_NAME_DECIMAL_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRDecimalPrimitive', PHPFHIRConstants::TYPE_CLASS_DECIMAL_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDetectedIssue()
    {
        $this->assertEquals('DetectedIssue', PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDetectedIssue', PHPFHIRConstants::TYPE_CLASS_DETECTED_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDetectedIssue_FHIRDetectedIssueMitigation()
    {
        $this->assertEquals('DetectedIssue.Mitigation', PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_DOT_MITIGATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDetectedIssue\FHIRDetectedIssueMitigation', PHPFHIRConstants::TYPE_CLASS_DETECTED_ISSUE_DOT_MITIGATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDetectedIssueSeverity()
    {
        $this->assertEquals('DetectedIssueSeverity', PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDetectedIssueSeverity', PHPFHIRConstants::TYPE_CLASS_DETECTED_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDetectedIssueSeverityList()
    {
        $this->assertEquals('DetectedIssueSeverity-list', PHPFHIRConstants::TYPE_NAME_DETECTED_ISSUE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDetectedIssueSeverityList', PHPFHIRConstants::TYPE_CLASS_DETECTED_ISSUE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDevice()
    {
        $this->assertEquals('Device', PHPFHIRConstants::TYPE_NAME_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDevice', PHPFHIRConstants::TYPE_CLASS_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDeviceComponent()
    {
        $this->assertEquals('DeviceComponent', PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceComponent', PHPFHIRConstants::TYPE_CLASS_DEVICE_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDeviceComponent_FHIRDeviceComponentProductionSpecification()
    {
        $this->assertEquals('DeviceComponent.ProductionSpecification', PHPFHIRConstants::TYPE_NAME_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification', PHPFHIRConstants::TYPE_CLASS_DEVICE_COMPONENT_DOT_PRODUCTION_SPECIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDeviceMetric()
    {
        $this->assertEquals('DeviceMetric', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceMetric', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDeviceMetric_FHIRDeviceMetricCalibration()
    {
        $this->assertEquals('DeviceMetric.Calibration', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_DOT_CALIBRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDeviceMetric\FHIRDeviceMetricCalibration', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_DOT_CALIBRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDeviceMetricCalibrationState()
    {
        $this->assertEquals('DeviceMetricCalibrationState', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricCalibrationState', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDeviceMetricCalibrationStateList()
    {
        $this->assertEquals('DeviceMetricCalibrationState-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_STATE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricCalibrationStateList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_STATE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDeviceMetricCalibrationType()
    {
        $this->assertEquals('DeviceMetricCalibrationType', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricCalibrationType', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDeviceMetricCalibrationTypeList()
    {
        $this->assertEquals('DeviceMetricCalibrationType-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CALIBRATION_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricCalibrationTypeList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CALIBRATION_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDeviceMetricCategory()
    {
        $this->assertEquals('DeviceMetricCategory', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricCategory', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDeviceMetricCategoryList()
    {
        $this->assertEquals('DeviceMetricCategory-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricCategoryList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDeviceMetricColor()
    {
        $this->assertEquals('DeviceMetricColor', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_COLOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricColor', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_COLOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDeviceMetricColorList()
    {
        $this->assertEquals('DeviceMetricColor-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_COLOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricColorList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_COLOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDeviceMetricOperationalStatus()
    {
        $this->assertEquals('DeviceMetricOperationalStatus', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_OPERATIONAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceMetricOperationalStatus', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_OPERATIONAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDeviceMetricOperationalStatusList()
    {
        $this->assertEquals('DeviceMetricOperationalStatus-list', PHPFHIRConstants::TYPE_NAME_DEVICE_METRIC_OPERATIONAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceMetricOperationalStatusList', PHPFHIRConstants::TYPE_CLASS_DEVICE_METRIC_OPERATIONAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDeviceStatus()
    {
        $this->assertEquals('DeviceStatus', PHPFHIRConstants::TYPE_NAME_DEVICE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceStatus', PHPFHIRConstants::TYPE_CLASS_DEVICE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDeviceStatusList()
    {
        $this->assertEquals('DeviceStatus-list', PHPFHIRConstants::TYPE_NAME_DEVICE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceStatusList', PHPFHIRConstants::TYPE_CLASS_DEVICE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDeviceUseRequest()
    {
        $this->assertEquals('DeviceUseRequest', PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseRequest', PHPFHIRConstants::TYPE_CLASS_DEVICE_USE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDeviceUseRequestPriority()
    {
        $this->assertEquals('DeviceUseRequestPriority', PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestPriority', PHPFHIRConstants::TYPE_CLASS_DEVICE_USE_REQUEST_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDeviceUseRequestPriorityList()
    {
        $this->assertEquals('DeviceUseRequestPriority-list', PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST_PRIORITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceUseRequestPriorityList', PHPFHIRConstants::TYPE_CLASS_DEVICE_USE_REQUEST_PRIORITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDeviceUseRequestStatus()
    {
        $this->assertEquals('DeviceUseRequestStatus', PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDeviceUseRequestStatus', PHPFHIRConstants::TYPE_CLASS_DEVICE_USE_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDeviceUseRequestStatusList()
    {
        $this->assertEquals('DeviceUseRequestStatus-list', PHPFHIRConstants::TYPE_NAME_DEVICE_USE_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDeviceUseRequestStatusList', PHPFHIRConstants::TYPE_CLASS_DEVICE_USE_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDeviceUseStatement()
    {
        $this->assertEquals('DeviceUseStatement', PHPFHIRConstants::TYPE_NAME_DEVICE_USE_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDeviceUseStatement', PHPFHIRConstants::TYPE_CLASS_DEVICE_USE_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDiagnosticOrder()
    {
        $this->assertEquals('DiagnosticOrder', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticOrder', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDiagnosticOrder_FHIRDiagnosticOrderEvent()
    {
        $this->assertEquals('DiagnosticOrder.Event', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_EVENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_DOT_EVENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDiagnosticOrder_FHIRDiagnosticOrderItem()
    {
        $this->assertEquals('DiagnosticOrder.Item', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDiagnosticOrderPriority()
    {
        $this->assertEquals('DiagnosticOrderPriority', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticOrderPriority', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDiagnosticOrderPriorityList()
    {
        $this->assertEquals('DiagnosticOrderPriority-list', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_PRIORITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDiagnosticOrderPriorityList', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_PRIORITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDiagnosticOrderStatus()
    {
        $this->assertEquals('DiagnosticOrderStatus', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticOrderStatus', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDiagnosticOrderStatusList()
    {
        $this->assertEquals('DiagnosticOrderStatus-list', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_ORDER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDiagnosticOrderStatusList', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_ORDER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDiagnosticReport()
    {
        $this->assertEquals('DiagnosticReport', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDiagnosticReport', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDiagnosticReport_FHIRDiagnosticReportImage()
    {
        $this->assertEquals('DiagnosticReport.Image', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_DOT_IMAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDiagnosticReport\FHIRDiagnosticReportImage', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_DOT_IMAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDiagnosticReportStatus()
    {
        $this->assertEquals('DiagnosticReportStatus', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDiagnosticReportStatus', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDiagnosticReportStatusList()
    {
        $this->assertEquals('DiagnosticReportStatus-list', PHPFHIRConstants::TYPE_NAME_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDiagnosticReportStatusList', PHPFHIRConstants::TYPE_CLASS_DIAGNOSTIC_REPORT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDigitalMediaType()
    {
        $this->assertEquals('DigitalMediaType', PHPFHIRConstants::TYPE_NAME_DIGITAL_MEDIA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDigitalMediaType', PHPFHIRConstants::TYPE_CLASS_DIGITAL_MEDIA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDigitalMediaTypeList()
    {
        $this->assertEquals('DigitalMediaType-list', PHPFHIRConstants::TYPE_NAME_DIGITAL_MEDIA_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDigitalMediaTypeList', PHPFHIRConstants::TYPE_CLASS_DIGITAL_MEDIA_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuantity_FHIRDistance()
    {
        $this->assertEquals('Distance', PHPFHIRConstants::TYPE_NAME_DISTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDistance', PHPFHIRConstants::TYPE_CLASS_DISTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDocumentManifest()
    {
        $this->assertEquals('DocumentManifest', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDocumentManifest', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MANIFEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDocumentManifest_FHIRDocumentManifestContent()
    {
        $this->assertEquals('DocumentManifest.Content', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestContent', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MANIFEST_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDocumentManifest_FHIRDocumentManifestRelated()
    {
        $this->assertEquals('DocumentManifest.Related', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MANIFEST_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentManifest\FHIRDocumentManifestRelated', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MANIFEST_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDocumentMode()
    {
        $this->assertEquals('DocumentMode', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDocumentMode', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDocumentModeList()
    {
        $this->assertEquals('DocumentMode-list', PHPFHIRConstants::TYPE_NAME_DOCUMENT_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDocumentModeList', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRDocumentReference()
    {
        $this->assertEquals('DocumentReference', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRDocumentReference', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContent()
    {
        $this->assertEquals('DocumentReference.Content', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContent', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceContext()
    {
        $this->assertEquals('DocumentReference.Context', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceContext', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceRelated()
    {
        $this->assertEquals('DocumentReference.Related', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelated', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRDocumentReference_FHIRDocumentReferenceRelatesTo()
    {
        $this->assertEquals('DocumentReference.RelatesTo', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_DOT_RELATES_TO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_DOT_RELATES_TO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDocumentReferenceStatus()
    {
        $this->assertEquals('DocumentReferenceStatus', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDocumentReferenceStatus', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDocumentReferenceStatusList()
    {
        $this->assertEquals('DocumentReferenceStatus-list', PHPFHIRConstants::TYPE_NAME_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDocumentReferenceStatusList', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_REFERENCE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRDocumentRelationshipType()
    {
        $this->assertEquals('DocumentRelationshipType', PHPFHIRConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRDocumentRelationshipType', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRDocumentRelationshipTypeList()
    {
        $this->assertEquals('DocumentRelationshipType-list', PHPFHIRConstants::TYPE_NAME_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRDocumentRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_DOCUMENT_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource()
    {
        $this->assertEquals('DomainResource', PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource', PHPFHIRConstants::TYPE_CLASS_DOMAIN_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuantity_FHIRDuration()
    {
        $this->assertEquals('Duration', PHPFHIRConstants::TYPE_NAME_DURATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRDuration', PHPFHIRConstants::TYPE_CLASS_DURATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement()
    {
        $this->assertEquals('Element', PHPFHIRConstants::TYPE_NAME_ELEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement', PHPFHIRConstants::TYPE_CLASS_ELEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRElementDefinition()
    {
        $this->assertEquals('ElementDefinition', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionBase()
    {
        $this->assertEquals('ElementDefinition.Base', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_BASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBase', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_BASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionBinding()
    {
        $this->assertEquals('ElementDefinition.Binding', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionBinding', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionConstraint()
    {
        $this->assertEquals('ElementDefinition.Constraint', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_CONSTRAINT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionConstraint', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_CONSTRAINT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionMapping()
    {
        $this->assertEquals('ElementDefinition.Mapping', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionMapping', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionSlicing()
    {
        $this->assertEquals('ElementDefinition.Slicing', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_SLICING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionSlicing', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_SLICING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRElementDefinition_FHIRElementDefinitionType()
    {
        $this->assertEquals('ElementDefinition.Type', PHPFHIRConstants::TYPE_NAME_ELEMENT_DEFINITION_DOT_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRElementDefinition\FHIRElementDefinitionType', PHPFHIRConstants::TYPE_CLASS_ELEMENT_DEFINITION_DOT_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIREligibilityRequest()
    {
        $this->assertEquals('EligibilityRequest', PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREligibilityRequest', PHPFHIRConstants::TYPE_CLASS_ELIGIBILITY_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIREligibilityResponse()
    {
        $this->assertEquals('EligibilityResponse', PHPFHIRConstants::TYPE_NAME_ELIGIBILITY_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREligibilityResponse', PHPFHIRConstants::TYPE_CLASS_ELIGIBILITY_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIREncounter()
    {
        $this->assertEquals('Encounter', PHPFHIRConstants::TYPE_NAME_ENCOUNTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREncounter', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterHospitalization()
    {
        $this->assertEquals('Encounter.Hospitalization', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_HOSPITALIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterHospitalization', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_HOSPITALIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterLocation()
    {
        $this->assertEquals('Encounter.Location', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterLocation', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterParticipant()
    {
        $this->assertEquals('Encounter.Participant', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_PARTICIPANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterParticipant', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_PARTICIPANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIREncounter_FHIREncounterStatusHistory()
    {
        $this->assertEquals('Encounter.StatusHistory', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_DOT_STATUS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREncounter\FHIREncounterStatusHistory', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_DOT_STATUS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIREncounterClass()
    {
        $this->assertEquals('EncounterClass', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_CLASS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterClass', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_CLASS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIREncounterClassList()
    {
        $this->assertEquals('EncounterClass-list', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_CLASS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREncounterClassList', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_CLASS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIREncounterLocationStatus()
    {
        $this->assertEquals('EncounterLocationStatus', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterLocationStatus', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIREncounterLocationStatusList()
    {
        $this->assertEquals('EncounterLocationStatus-list', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_LOCATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREncounterLocationStatusList', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_LOCATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIREncounterState()
    {
        $this->assertEquals('EncounterState', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_STATE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREncounterState', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_STATE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIREncounterStateList()
    {
        $this->assertEquals('EncounterState-list', PHPFHIRConstants::TYPE_NAME_ENCOUNTER_STATE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREncounterStateList', PHPFHIRConstants::TYPE_CLASS_ENCOUNTER_STATE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIREnrollmentRequest()
    {
        $this->assertEquals('EnrollmentRequest', PHPFHIRConstants::TYPE_NAME_ENROLLMENT_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREnrollmentRequest', PHPFHIRConstants::TYPE_CLASS_ENROLLMENT_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIREnrollmentResponse()
    {
        $this->assertEquals('EnrollmentResponse', PHPFHIRConstants::TYPE_NAME_ENROLLMENT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREnrollmentResponse', PHPFHIRConstants::TYPE_CLASS_ENROLLMENT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIREpisodeOfCare()
    {
        $this->assertEquals('EpisodeOfCare', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIREpisodeOfCare', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIREpisodeOfCare_FHIREpisodeOfCareCareTeam()
    {
        $this->assertEquals('EpisodeOfCare.CareTeam', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE_DOT_CARE_TEAM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareCareTeam', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE_DOT_CARE_TEAM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIREpisodeOfCare_FHIREpisodeOfCareStatusHistory()
    {
        $this->assertEquals('EpisodeOfCare.StatusHistory', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE_DOT_STATUS_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIREpisodeOfCare\FHIREpisodeOfCareStatusHistory', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE_DOT_STATUS_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIREpisodeOfCareStatus()
    {
        $this->assertEquals('EpisodeOfCareStatus', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREpisodeOfCareStatus', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIREpisodeOfCareStatusList()
    {
        $this->assertEquals('EpisodeOfCareStatus-list', PHPFHIRConstants::TYPE_NAME_EPISODE_OF_CARE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREpisodeOfCareStatusList', PHPFHIRConstants::TYPE_CLASS_EPISODE_OF_CARE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIREventTiming()
    {
        $this->assertEquals('EventTiming', PHPFHIRConstants::TYPE_NAME_EVENT_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIREventTiming', PHPFHIRConstants::TYPE_CLASS_EVENT_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIREventTimingList()
    {
        $this->assertEquals('EventTiming-list', PHPFHIRConstants::TYPE_NAME_EVENT_TIMING_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIREventTimingList', PHPFHIRConstants::TYPE_CLASS_EVENT_TIMING_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRExplanationOfBenefit()
    {
        $this->assertEquals('ExplanationOfBenefit', PHPFHIRConstants::TYPE_NAME_EXPLANATION_OF_BENEFIT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit', PHPFHIRConstants::TYPE_CLASS_EXPLANATION_OF_BENEFIT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRExtension()
    {
        $this->assertEquals('Extension', PHPFHIRConstants::TYPE_NAME_EXTENSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension', PHPFHIRConstants::TYPE_CLASS_EXTENSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRExtensionContext()
    {
        $this->assertEquals('ExtensionContext', PHPFHIRConstants::TYPE_NAME_EXTENSION_CONTEXT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtensionContext', PHPFHIRConstants::TYPE_CLASS_EXTENSION_CONTEXT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRExtensionContextList()
    {
        $this->assertEquals('ExtensionContext-list', PHPFHIRConstants::TYPE_NAME_EXTENSION_CONTEXT_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRExtensionContextList', PHPFHIRConstants::TYPE_CLASS_EXTENSION_CONTEXT_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRFamilyHistoryStatus()
    {
        $this->assertEquals('FamilyHistoryStatus', PHPFHIRConstants::TYPE_NAME_FAMILY_HISTORY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFamilyHistoryStatus', PHPFHIRConstants::TYPE_CLASS_FAMILY_HISTORY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRFamilyHistoryStatusList()
    {
        $this->assertEquals('FamilyHistoryStatus-list', PHPFHIRConstants::TYPE_NAME_FAMILY_HISTORY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRFamilyHistoryStatusList', PHPFHIRConstants::TYPE_CLASS_FAMILY_HISTORY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRFamilyMemberHistory()
    {
        $this->assertEquals('FamilyMemberHistory', PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory', PHPFHIRConstants::TYPE_CLASS_FAMILY_MEMBER_HISTORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRFamilyMemberHistory_FHIRFamilyMemberHistoryCondition()
    {
        $this->assertEquals('FamilyMemberHistory.Condition', PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY_DOT_CONDITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition', PHPFHIRConstants::TYPE_CLASS_FAMILY_MEMBER_HISTORY_DOT_CONDITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRFilterOperator()
    {
        $this->assertEquals('FilterOperator', PHPFHIRConstants::TYPE_NAME_FILTER_OPERATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFilterOperator', PHPFHIRConstants::TYPE_CLASS_FILTER_OPERATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRFilterOperatorList()
    {
        $this->assertEquals('FilterOperator-list', PHPFHIRConstants::TYPE_NAME_FILTER_OPERATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRFilterOperatorList', PHPFHIRConstants::TYPE_CLASS_FILTER_OPERATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRFlag()
    {
        $this->assertEquals('Flag', PHPFHIRConstants::TYPE_NAME_FLAG);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRFlag', PHPFHIRConstants::TYPE_CLASS_FLAG);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRFlagStatus()
    {
        $this->assertEquals('FlagStatus', PHPFHIRConstants::TYPE_NAME_FLAG_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRFlagStatus', PHPFHIRConstants::TYPE_CLASS_FLAG_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRFlagStatusList()
    {
        $this->assertEquals('FlagStatus-list', PHPFHIRConstants::TYPE_NAME_FLAG_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRFlagStatusList', PHPFHIRConstants::TYPE_CLASS_FLAG_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRGoal()
    {
        $this->assertEquals('Goal', PHPFHIRConstants::TYPE_NAME_GOAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRGoal', PHPFHIRConstants::TYPE_CLASS_GOAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRGoal_FHIRGoalOutcome()
    {
        $this->assertEquals('Goal.Outcome', PHPFHIRConstants::TYPE_NAME_GOAL_DOT_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalOutcome', PHPFHIRConstants::TYPE_CLASS_GOAL_DOT_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRGoalStatus()
    {
        $this->assertEquals('GoalStatus', PHPFHIRConstants::TYPE_NAME_GOAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGoalStatus', PHPFHIRConstants::TYPE_CLASS_GOAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRGoalStatusList()
    {
        $this->assertEquals('GoalStatus-list', PHPFHIRConstants::TYPE_NAME_GOAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGoalStatusList', PHPFHIRConstants::TYPE_CLASS_GOAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRGroup()
    {
        $this->assertEquals('Group', PHPFHIRConstants::TYPE_NAME_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRGroup', PHPFHIRConstants::TYPE_CLASS_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupCharacteristic()
    {
        $this->assertEquals('Group.Characteristic', PHPFHIRConstants::TYPE_NAME_GROUP_DOT_CHARACTERISTIC);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupCharacteristic', PHPFHIRConstants::TYPE_CLASS_GROUP_DOT_CHARACTERISTIC);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRGroup_FHIRGroupMember()
    {
        $this->assertEquals('Group.Member', PHPFHIRConstants::TYPE_NAME_GROUP_DOT_MEMBER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRGroup\FHIRGroupMember', PHPFHIRConstants::TYPE_CLASS_GROUP_DOT_MEMBER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRGroupType()
    {
        $this->assertEquals('GroupType', PHPFHIRConstants::TYPE_NAME_GROUP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGroupType', PHPFHIRConstants::TYPE_CLASS_GROUP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRGroupTypeList()
    {
        $this->assertEquals('GroupType-list', PHPFHIRConstants::TYPE_NAME_GROUP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGroupTypeList', PHPFHIRConstants::TYPE_CLASS_GROUP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRGuideDependencyType()
    {
        $this->assertEquals('GuideDependencyType', PHPFHIRConstants::TYPE_NAME_GUIDE_DEPENDENCY_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuideDependencyType', PHPFHIRConstants::TYPE_CLASS_GUIDE_DEPENDENCY_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRGuideDependencyTypeList()
    {
        $this->assertEquals('GuideDependencyType-list', PHPFHIRConstants::TYPE_NAME_GUIDE_DEPENDENCY_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGuideDependencyTypeList', PHPFHIRConstants::TYPE_CLASS_GUIDE_DEPENDENCY_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRGuidePageKind()
    {
        $this->assertEquals('GuidePageKind', PHPFHIRConstants::TYPE_NAME_GUIDE_PAGE_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuidePageKind', PHPFHIRConstants::TYPE_CLASS_GUIDE_PAGE_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRGuidePageKindList()
    {
        $this->assertEquals('GuidePageKind-list', PHPFHIRConstants::TYPE_NAME_GUIDE_PAGE_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGuidePageKindList', PHPFHIRConstants::TYPE_CLASS_GUIDE_PAGE_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRGuideResourcePurpose()
    {
        $this->assertEquals('GuideResourcePurpose', PHPFHIRConstants::TYPE_NAME_GUIDE_RESOURCE_PURPOSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRGuideResourcePurpose', PHPFHIRConstants::TYPE_CLASS_GUIDE_RESOURCE_PURPOSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRGuideResourcePurposeList()
    {
        $this->assertEquals('GuideResourcePurpose-list', PHPFHIRConstants::TYPE_NAME_GUIDE_RESOURCE_PURPOSE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRGuideResourcePurposeList', PHPFHIRConstants::TYPE_CLASS_GUIDE_RESOURCE_PURPOSE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRHealthcareService()
    {
        $this->assertEquals('HealthcareService', PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRHealthcareService', PHPFHIRConstants::TYPE_CLASS_HEALTHCARE_SERVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceAvailableTime()
    {
        $this->assertEquals('HealthcareService.AvailableTime', PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime', PHPFHIRConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_AVAILABLE_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceNotAvailable()
    {
        $this->assertEquals('HealthcareService.NotAvailable', PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_NOT_AVAILABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable', PHPFHIRConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_NOT_AVAILABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRHealthcareService_FHIRHealthcareServiceServiceType()
    {
        $this->assertEquals('HealthcareService.ServiceType', PHPFHIRConstants::TYPE_NAME_HEALTHCARE_SERVICE_DOT_SERVICE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRHealthcareService\FHIRHealthcareServiceServiceType', PHPFHIRConstants::TYPE_CLASS_HEALTHCARE_SERVICE_DOT_SERVICE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRHTTPVerb()
    {
        $this->assertEquals('HTTPVerb', PHPFHIRConstants::TYPE_NAME_HTTPVERB);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHTTPVerb', PHPFHIRConstants::TYPE_CLASS_HTTPVERB);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRHTTPVerbList()
    {
        $this->assertEquals('HTTPVerb-list', PHPFHIRConstants::TYPE_NAME_HTTPVERB_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRHTTPVerbList', PHPFHIRConstants::TYPE_CLASS_HTTPVERB_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRHumanName()
    {
        $this->assertEquals('HumanName', PHPFHIRConstants::TYPE_NAME_HUMAN_NAME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRHumanName', PHPFHIRConstants::TYPE_CLASS_HUMAN_NAME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRId()
    {
        $this->assertEquals('id', PHPFHIRConstants::TYPE_NAME_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRId', PHPFHIRConstants::TYPE_CLASS_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRIdPrimitive()
    {
        $this->assertEquals('id-primitive', PHPFHIRConstants::TYPE_NAME_ID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive', PHPFHIRConstants::TYPE_CLASS_ID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRIdentifier()
    {
        $this->assertEquals('Identifier', PHPFHIRConstants::TYPE_NAME_IDENTIFIER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifier', PHPFHIRConstants::TYPE_CLASS_IDENTIFIER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRIdentifierUse()
    {
        $this->assertEquals('IdentifierUse', PHPFHIRConstants::TYPE_NAME_IDENTIFIER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentifierUse', PHPFHIRConstants::TYPE_CLASS_IDENTIFIER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRIdentifierUseList()
    {
        $this->assertEquals('IdentifierUse-list', PHPFHIRConstants::TYPE_NAME_IDENTIFIER_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRIdentifierUseList', PHPFHIRConstants::TYPE_CLASS_IDENTIFIER_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRIdentityAssuranceLevel()
    {
        $this->assertEquals('IdentityAssuranceLevel', PHPFHIRConstants::TYPE_NAME_IDENTITY_ASSURANCE_LEVEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIdentityAssuranceLevel', PHPFHIRConstants::TYPE_CLASS_IDENTITY_ASSURANCE_LEVEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRIdentityAssuranceLevelList()
    {
        $this->assertEquals('IdentityAssuranceLevel-list', PHPFHIRConstants::TYPE_NAME_IDENTITY_ASSURANCE_LEVEL_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRIdentityAssuranceLevelList', PHPFHIRConstants::TYPE_CLASS_IDENTITY_ASSURANCE_LEVEL_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRImagingObjectSelection()
    {
        $this->assertEquals('ImagingObjectSelection', PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingObjectSelection', PHPFHIRConstants::TYPE_CLASS_IMAGING_OBJECT_SELECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImagingObjectSelection_FHIRImagingObjectSelectionFrames()
    {
        $this->assertEquals('ImagingObjectSelection.Frames', PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_FRAMES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionFrames', PHPFHIRConstants::TYPE_CLASS_IMAGING_OBJECT_SELECTION_DOT_FRAMES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImagingObjectSelection_FHIRImagingObjectSelectionInstance()
    {
        $this->assertEquals('ImagingObjectSelection.Instance', PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionInstance', PHPFHIRConstants::TYPE_CLASS_IMAGING_OBJECT_SELECTION_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImagingObjectSelection_FHIRImagingObjectSelectionSeries()
    {
        $this->assertEquals('ImagingObjectSelection.Series', PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_SERIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionSeries', PHPFHIRConstants::TYPE_CLASS_IMAGING_OBJECT_SELECTION_DOT_SERIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImagingObjectSelection_FHIRImagingObjectSelectionStudy()
    {
        $this->assertEquals('ImagingObjectSelection.Study', PHPFHIRConstants::TYPE_NAME_IMAGING_OBJECT_SELECTION_DOT_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingObjectSelection\FHIRImagingObjectSelectionStudy', PHPFHIRConstants::TYPE_CLASS_IMAGING_OBJECT_SELECTION_DOT_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRImagingStudy()
    {
        $this->assertEquals('ImagingStudy', PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImagingStudy', PHPFHIRConstants::TYPE_CLASS_IMAGING_STUDY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudyInstance()
    {
        $this->assertEquals('ImagingStudy.Instance', PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudyInstance', PHPFHIRConstants::TYPE_CLASS_IMAGING_STUDY_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImagingStudy_FHIRImagingStudySeries()
    {
        $this->assertEquals('ImagingStudy.Series', PHPFHIRConstants::TYPE_NAME_IMAGING_STUDY_DOT_SERIES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImagingStudy\FHIRImagingStudySeries', PHPFHIRConstants::TYPE_CLASS_IMAGING_STUDY_DOT_SERIES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRImmunization()
    {
        $this->assertEquals('Immunization', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImmunization', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationExplanation()
    {
        $this->assertEquals('Immunization.Explanation', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_EXPLANATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationExplanation', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_EXPLANATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationReaction()
    {
        $this->assertEquals('Immunization.Reaction', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_REACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationReaction', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_REACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImmunization_FHIRImmunizationVaccinationProtocol()
    {
        $this->assertEquals('Immunization.VaccinationProtocol', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunization\FHIRImmunizationVaccinationProtocol', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_DOT_VACCINATION_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRImmunizationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImmunizationRecommendation', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationDateCriterion()
    {
        $this->assertEquals('ImmunizationRecommendation.DateCriterion', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationDateCriterion', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_DATE_CRITERION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationProtocol()
    {
        $this->assertEquals('ImmunizationRecommendation.Protocol', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationProtocol', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_PROTOCOL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImmunizationRecommendation_FHIRImmunizationRecommendationRecommendation()
    {
        $this->assertEquals('ImmunizationRecommendation.Recommendation', PHPFHIRConstants::TYPE_NAME_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation', PHPFHIRConstants::TYPE_CLASS_IMMUNIZATION_RECOMMENDATION_DOT_RECOMMENDATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRImplementationGuide()
    {
        $this->assertEquals('ImplementationGuide', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRImplementationGuide', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideContact()
    {
        $this->assertEquals('ImplementationGuide.Contact', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideContact', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideDependency()
    {
        $this->assertEquals('ImplementationGuide.Dependency', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_DEPENDENCY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideDependency', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_DEPENDENCY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideGlobal()
    {
        $this->assertEquals('ImplementationGuide.Global', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_GLOBAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideGlobal', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_GLOBAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuidePackage()
    {
        $this->assertEquals('ImplementationGuide.Package', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PACKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePackage', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_PACKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuidePage()
    {
        $this->assertEquals('ImplementationGuide.Page', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_PAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuidePage', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_PAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRImplementationGuide_FHIRImplementationGuideResource()
    {
        $this->assertEquals('ImplementationGuide.Resource', PHPFHIRConstants::TYPE_NAME_IMPLEMENTATION_GUIDE_DOT_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRImplementationGuide\FHIRImplementationGuideResource', PHPFHIRConstants::TYPE_CLASS_IMPLEMENTATION_GUIDE_DOT_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRInstanceAvailability()
    {
        $this->assertEquals('InstanceAvailability', PHPFHIRConstants::TYPE_NAME_INSTANCE_AVAILABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstanceAvailability', PHPFHIRConstants::TYPE_CLASS_INSTANCE_AVAILABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRInstanceAvailabilityList()
    {
        $this->assertEquals('InstanceAvailability-list', PHPFHIRConstants::TYPE_NAME_INSTANCE_AVAILABILITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRInstanceAvailabilityList', PHPFHIRConstants::TYPE_CLASS_INSTANCE_AVAILABILITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRInstant()
    {
        $this->assertEquals('instant', PHPFHIRConstants::TYPE_NAME_INSTANT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant', PHPFHIRConstants::TYPE_CLASS_INSTANT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRInstantPrimitive()
    {
        $this->assertEquals('instant-primitive', PHPFHIRConstants::TYPE_NAME_INSTANT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRInstantPrimitive', PHPFHIRConstants::TYPE_CLASS_INSTANT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRInteger()
    {
        $this->assertEquals('integer', PHPFHIRConstants::TYPE_NAME_INTEGER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInteger', PHPFHIRConstants::TYPE_CLASS_INTEGER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRIntegerPrimitive()
    {
        $this->assertEquals('integer-primitive', PHPFHIRConstants::TYPE_NAME_INTEGER_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRIntegerPrimitive', PHPFHIRConstants::TYPE_CLASS_INTEGER_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRIssueSeverity()
    {
        $this->assertEquals('IssueSeverity', PHPFHIRConstants::TYPE_NAME_ISSUE_SEVERITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIssueSeverity', PHPFHIRConstants::TYPE_CLASS_ISSUE_SEVERITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRIssueSeverityList()
    {
        $this->assertEquals('IssueSeverity-list', PHPFHIRConstants::TYPE_NAME_ISSUE_SEVERITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRIssueSeverityList', PHPFHIRConstants::TYPE_CLASS_ISSUE_SEVERITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRIssueType()
    {
        $this->assertEquals('IssueType', PHPFHIRConstants::TYPE_NAME_ISSUE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRIssueType', PHPFHIRConstants::TYPE_CLASS_ISSUE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRIssueTypeList()
    {
        $this->assertEquals('IssueType-list', PHPFHIRConstants::TYPE_NAME_ISSUE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRIssueTypeList', PHPFHIRConstants::TYPE_CLASS_ISSUE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRLinkType()
    {
        $this->assertEquals('LinkType', PHPFHIRConstants::TYPE_NAME_LINK_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRLinkType', PHPFHIRConstants::TYPE_CLASS_LINK_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRLinkTypeList()
    {
        $this->assertEquals('LinkType-list', PHPFHIRConstants::TYPE_NAME_LINK_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRLinkTypeList', PHPFHIRConstants::TYPE_CLASS_LINK_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRList()
    {
        $this->assertEquals('List', PHPFHIRConstants::TYPE_NAME_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRList', PHPFHIRConstants::TYPE_CLASS_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRList_FHIRListEntry()
    {
        $this->assertEquals('List.Entry', PHPFHIRConstants::TYPE_NAME_LIST_DOT_ENTRY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRList\FHIRListEntry', PHPFHIRConstants::TYPE_CLASS_LIST_DOT_ENTRY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRListMode()
    {
        $this->assertEquals('ListMode', PHPFHIRConstants::TYPE_NAME_LIST_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRListMode', PHPFHIRConstants::TYPE_CLASS_LIST_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRListModeList()
    {
        $this->assertEquals('ListMode-list', PHPFHIRConstants::TYPE_NAME_LIST_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRListModeList', PHPFHIRConstants::TYPE_CLASS_LIST_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRListStatus()
    {
        $this->assertEquals('ListStatus', PHPFHIRConstants::TYPE_NAME_LIST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRListStatus', PHPFHIRConstants::TYPE_CLASS_LIST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRListStatusList()
    {
        $this->assertEquals('ListStatus-list', PHPFHIRConstants::TYPE_NAME_LIST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRListStatusList', PHPFHIRConstants::TYPE_CLASS_LIST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRLocation()
    {
        $this->assertEquals('Location', PHPFHIRConstants::TYPE_NAME_LOCATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRLocation', PHPFHIRConstants::TYPE_CLASS_LOCATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRLocation_FHIRLocationPosition()
    {
        $this->assertEquals('Location.Position', PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition', PHPFHIRConstants::TYPE_CLASS_LOCATION_DOT_POSITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRLocationMode()
    {
        $this->assertEquals('LocationMode', PHPFHIRConstants::TYPE_NAME_LOCATION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRLocationMode', PHPFHIRConstants::TYPE_CLASS_LOCATION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRLocationModeList()
    {
        $this->assertEquals('LocationMode-list', PHPFHIRConstants::TYPE_NAME_LOCATION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRLocationModeList', PHPFHIRConstants::TYPE_CLASS_LOCATION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRLocationStatus()
    {
        $this->assertEquals('LocationStatus', PHPFHIRConstants::TYPE_NAME_LOCATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRLocationStatus', PHPFHIRConstants::TYPE_CLASS_LOCATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRLocationStatusList()
    {
        $this->assertEquals('LocationStatus-list', PHPFHIRConstants::TYPE_NAME_LOCATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRLocationStatusList', PHPFHIRConstants::TYPE_CLASS_LOCATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRMarkdown()
    {
        $this->assertEquals('markdown', PHPFHIRConstants::TYPE_NAME_MARKDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMarkdown', PHPFHIRConstants::TYPE_CLASS_MARKDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRMarkdownPrimitive()
    {
        $this->assertEquals('markdown-primitive', PHPFHIRConstants::TYPE_NAME_MARKDOWN_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRMarkdownPrimitive', PHPFHIRConstants::TYPE_CLASS_MARKDOWN_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRMeasmnt_Principle()
    {
        $this->assertEquals('Measmnt-Principle', PHPFHIRConstants::TYPE_NAME_MEASMNT_HYPHEN_PRINCIPLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeasmnt_Principle', PHPFHIRConstants::TYPE_CLASS_MEASMNT_HYPHEN_PRINCIPLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRMeasmnt_PrincipleList()
    {
        $this->assertEquals('Measmnt-Principle-list', PHPFHIRConstants::TYPE_NAME_MEASMNT_HYPHEN_PRINCIPLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMeasmnt_PrincipleList', PHPFHIRConstants::TYPE_CLASS_MEASMNT_HYPHEN_PRINCIPLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRMedia()
    {
        $this->assertEquals('Media', PHPFHIRConstants::TYPE_NAME_MEDIA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedia', PHPFHIRConstants::TYPE_CLASS_MEDIA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRMedication()
    {
        $this->assertEquals('Medication', PHPFHIRConstants::TYPE_NAME_MEDICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedication', PHPFHIRConstants::TYPE_CLASS_MEDICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationBatch()
    {
        $this->assertEquals('Medication.Batch', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_BATCH);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_BATCH);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationContent()
    {
        $this->assertEquals('Medication.Content', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_CONTENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_CONTENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationIngredient()
    {
        $this->assertEquals('Medication.Ingredient', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationIngredient', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationPackage()
    {
        $this->assertEquals('Medication.Package', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_PACKAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_PACKAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedication_FHIRMedicationProduct()
    {
        $this->assertEquals('Medication.Product', PHPFHIRConstants::TYPE_NAME_MEDICATION_DOT_PRODUCT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationProduct', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DOT_PRODUCT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRMedicationAdministration()
    {
        $this->assertEquals('MedicationAdministration', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationAdministration', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedicationAdministration_FHIRMedicationAdministrationDosage()
    {
        $this->assertEquals('MedicationAdministration.Dosage', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRMedicationAdministrationStatus()
    {
        $this->assertEquals('MedicationAdministrationStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationAdministrationStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRMedicationAdministrationStatusList()
    {
        $this->assertEquals('MedicationAdministrationStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMedicationAdministrationStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ADMINISTRATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRMedicationDispense()
    {
        $this->assertEquals('MedicationDispense', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationDispense', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseDosageInstruction()
    {
        $this->assertEquals('MedicationDispense.DosageInstruction', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseDosageInstruction', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_DOSAGE_INSTRUCTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedicationDispense_FHIRMedicationDispenseSubstitution()
    {
        $this->assertEquals('MedicationDispense.Substitution', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationDispense\FHIRMedicationDispenseSubstitution', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRMedicationDispenseStatus()
    {
        $this->assertEquals('MedicationDispenseStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationDispenseStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRMedicationDispenseStatusList()
    {
        $this->assertEquals('MedicationDispenseStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMedicationDispenseStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_DISPENSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRMedicationOrder()
    {
        $this->assertEquals('MedicationOrder', PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationOrder', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedicationOrder_FHIRMedicationOrderDispenseRequest()
    {
        $this->assertEquals('MedicationOrder.DispenseRequest', PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DISPENSE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDispenseRequest', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ORDER_DOT_DISPENSE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedicationOrder_FHIRMedicationOrderDosageInstruction()
    {
        $this->assertEquals('MedicationOrder.DosageInstruction', PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderDosageInstruction', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ORDER_DOT_DOSAGE_INSTRUCTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedicationOrder_FHIRMedicationOrderSubstitution()
    {
        $this->assertEquals('MedicationOrder.Substitution', PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_DOT_SUBSTITUTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationOrder\FHIRMedicationOrderSubstitution', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ORDER_DOT_SUBSTITUTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRMedicationOrderStatus()
    {
        $this->assertEquals('MedicationOrderStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationOrderStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ORDER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRMedicationOrderStatusList()
    {
        $this->assertEquals('MedicationOrderStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_ORDER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMedicationOrderStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_ORDER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRMedicationStatement()
    {
        $this->assertEquals('MedicationStatement', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMedicationStatement', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMedicationStatement_FHIRMedicationStatementDosage()
    {
        $this->assertEquals('MedicationStatement.Dosage', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT_DOT_DOSAGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMedicationStatement\FHIRMedicationStatementDosage', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT_DOT_DOSAGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRMedicationStatementStatus()
    {
        $this->assertEquals('MedicationStatementStatus', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMedicationStatementStatus', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRMedicationStatementStatusList()
    {
        $this->assertEquals('MedicationStatementStatus-list', PHPFHIRConstants::TYPE_NAME_MEDICATION_STATEMENT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMedicationStatementStatusList', PHPFHIRConstants::TYPE_CLASS_MEDICATION_STATEMENT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRMessageHeader()
    {
        $this->assertEquals('MessageHeader', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRMessageHeader', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderDestination()
    {
        $this->assertEquals('MessageHeader.Destination', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER_DOT_DESTINATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderDestination', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_DESTINATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderResponse()
    {
        $this->assertEquals('MessageHeader.Response', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER_DOT_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderResponse', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRMessageHeader_FHIRMessageHeaderSource()
    {
        $this->assertEquals('MessageHeader.Source', PHPFHIRConstants::TYPE_NAME_MESSAGE_HEADER_DOT_SOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRMessageHeader\FHIRMessageHeaderSource', PHPFHIRConstants::TYPE_CLASS_MESSAGE_HEADER_DOT_SOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRMessageSignificanceCategory()
    {
        $this->assertEquals('MessageSignificanceCategory', PHPFHIRConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMessageSignificanceCategory', PHPFHIRConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRMessageSignificanceCategoryList()
    {
        $this->assertEquals('MessageSignificanceCategory-list', PHPFHIRConstants::TYPE_NAME_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRMessageSignificanceCategoryList', PHPFHIRConstants::TYPE_CLASS_MESSAGE_SIGNIFICANCE_CATEGORY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRMeta()
    {
        $this->assertEquals('Meta', PHPFHIRConstants::TYPE_NAME_META);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRMeta', PHPFHIRConstants::TYPE_CLASS_META);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuantity_FHIRMoney()
    {
        $this->assertEquals('Money', PHPFHIRConstants::TYPE_NAME_MONEY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRMoney', PHPFHIRConstants::TYPE_CLASS_MONEY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRNameUse()
    {
        $this->assertEquals('NameUse', PHPFHIRConstants::TYPE_NAME_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNameUse', PHPFHIRConstants::TYPE_CLASS_NAME_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRNameUseList()
    {
        $this->assertEquals('NameUse-list', PHPFHIRConstants::TYPE_NAME_NAME_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNameUseList', PHPFHIRConstants::TYPE_CLASS_NAME_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRNamingSystem()
    {
        $this->assertEquals('NamingSystem', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRNamingSystem', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRNamingSystem_FHIRNamingSystemContact()
    {
        $this->assertEquals('NamingSystem.Contact', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemContact', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRNamingSystem_FHIRNamingSystemUniqueId()
    {
        $this->assertEquals('NamingSystem.UniqueId', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_DOT_UNIQUE_ID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNamingSystem\FHIRNamingSystemUniqueId', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_DOT_UNIQUE_ID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRNamingSystemIdentifierType()
    {
        $this->assertEquals('NamingSystemIdentifierType', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_IDENTIFIER_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNamingSystemIdentifierType', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_IDENTIFIER_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRNamingSystemIdentifierTypeList()
    {
        $this->assertEquals('NamingSystemIdentifierType-list', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_IDENTIFIER_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNamingSystemIdentifierTypeList', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_IDENTIFIER_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRNamingSystemType()
    {
        $this->assertEquals('NamingSystemType', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNamingSystemType', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRNamingSystemTypeList()
    {
        $this->assertEquals('NamingSystemType-list', PHPFHIRConstants::TYPE_NAME_NAMING_SYSTEM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNamingSystemTypeList', PHPFHIRConstants::TYPE_CLASS_NAMING_SYSTEM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRNarrative()
    {
        $this->assertEquals('Narrative', PHPFHIRConstants::TYPE_NAME_NARRATIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNarrative', PHPFHIRConstants::TYPE_CLASS_NARRATIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRNarrativeStatus()
    {
        $this->assertEquals('NarrativeStatus', PHPFHIRConstants::TYPE_NAME_NARRATIVE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNarrativeStatus', PHPFHIRConstants::TYPE_CLASS_NARRATIVE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRNarrativeStatusList()
    {
        $this->assertEquals('NarrativeStatus-list', PHPFHIRConstants::TYPE_NAME_NARRATIVE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNarrativeStatusList', PHPFHIRConstants::TYPE_CLASS_NARRATIVE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRNoteType()
    {
        $this->assertEquals('NoteType', PHPFHIRConstants::TYPE_NAME_NOTE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNoteType', PHPFHIRConstants::TYPE_CLASS_NOTE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRNoteTypeList()
    {
        $this->assertEquals('NoteType-list', PHPFHIRConstants::TYPE_NAME_NOTE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNoteTypeList', PHPFHIRConstants::TYPE_CLASS_NOTE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRNutritionOrder()
    {
        $this->assertEquals('NutritionOrder', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRNutritionOrder', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderAdministration()
    {
        $this->assertEquals('NutritionOrder.Administration', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ADMINISTRATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderAdministration', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ADMINISTRATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderEnteralFormula()
    {
        $this->assertEquals('NutritionOrder.EnteralFormula', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ENTERAL_FORMULA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderEnteralFormula', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ENTERAL_FORMULA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderNutrient()
    {
        $this->assertEquals('NutritionOrder.Nutrient', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_NUTRIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderNutrient', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_NUTRIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderOralDiet()
    {
        $this->assertEquals('NutritionOrder.OralDiet', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_ORAL_DIET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderOralDiet', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_ORAL_DIET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderSupplement()
    {
        $this->assertEquals('NutritionOrder.Supplement', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_SUPPLEMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderSupplement', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_SUPPLEMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRNutritionOrder_FHIRNutritionOrderTexture()
    {
        $this->assertEquals('NutritionOrder.Texture', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_DOT_TEXTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRNutritionOrder\FHIRNutritionOrderTexture', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_DOT_TEXTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRNutritionOrderStatus()
    {
        $this->assertEquals('NutritionOrderStatus', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRNutritionOrderStatus', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRNutritionOrderStatusList()
    {
        $this->assertEquals('NutritionOrderStatus-list', PHPFHIRConstants::TYPE_NAME_NUTRITION_ORDER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRNutritionOrderStatusList', PHPFHIRConstants::TYPE_CLASS_NUTRITION_ORDER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRObservation()
    {
        $this->assertEquals('Observation', PHPFHIRConstants::TYPE_NAME_OBSERVATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRObservation', PHPFHIRConstants::TYPE_CLASS_OBSERVATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationComponent()
    {
        $this->assertEquals('Observation.Component', PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_COMPONENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationComponent', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_DOT_COMPONENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationReferenceRange()
    {
        $this->assertEquals('Observation.ReferenceRange', PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_REFERENCE_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationReferenceRange', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_DOT_REFERENCE_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRObservation_FHIRObservationRelated()
    {
        $this->assertEquals('Observation.Related', PHPFHIRConstants::TYPE_NAME_OBSERVATION_DOT_RELATED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRObservation\FHIRObservationRelated', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_DOT_RELATED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRObservationRelationshipType()
    {
        $this->assertEquals('ObservationRelationshipType', PHPFHIRConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRObservationRelationshipType', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRObservationRelationshipTypeList()
    {
        $this->assertEquals('ObservationRelationshipType-list', PHPFHIRConstants::TYPE_NAME_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRObservationRelationshipTypeList', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_RELATIONSHIP_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRObservationStatus()
    {
        $this->assertEquals('ObservationStatus', PHPFHIRConstants::TYPE_NAME_OBSERVATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRObservationStatus', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRObservationStatusList()
    {
        $this->assertEquals('ObservationStatus-list', PHPFHIRConstants::TYPE_NAME_OBSERVATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRObservationStatusList', PHPFHIRConstants::TYPE_CLASS_OBSERVATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIROid()
    {
        $this->assertEquals('oid', PHPFHIRConstants::TYPE_NAME_OID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROid', PHPFHIRConstants::TYPE_CLASS_OID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIROidPrimitive()
    {
        $this->assertEquals('oid-primitive', PHPFHIRConstants::TYPE_NAME_OID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIROidPrimitive', PHPFHIRConstants::TYPE_CLASS_OID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIROperationDefinition()
    {
        $this->assertEquals('OperationDefinition', PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationDefinition', PHPFHIRConstants::TYPE_CLASS_OPERATION_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionBinding()
    {
        $this->assertEquals('OperationDefinition.Binding', PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_BINDING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionBinding', PHPFHIRConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_BINDING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionContact()
    {
        $this->assertEquals('OperationDefinition.Contact', PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionContact', PHPFHIRConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIROperationDefinition_FHIROperationDefinitionParameter()
    {
        $this->assertEquals('OperationDefinition.Parameter', PHPFHIRConstants::TYPE_NAME_OPERATION_DEFINITION_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationDefinition\FHIROperationDefinitionParameter', PHPFHIRConstants::TYPE_CLASS_OPERATION_DEFINITION_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIROperationKind()
    {
        $this->assertEquals('OperationKind', PHPFHIRConstants::TYPE_NAME_OPERATION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROperationKind', PHPFHIRConstants::TYPE_CLASS_OPERATION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIROperationKindList()
    {
        $this->assertEquals('OperationKind-list', PHPFHIRConstants::TYPE_NAME_OPERATION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIROperationKindList', PHPFHIRConstants::TYPE_CLASS_OPERATION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIROperationOutcome()
    {
        $this->assertEquals('OperationOutcome', PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROperationOutcome', PHPFHIRConstants::TYPE_CLASS_OPERATION_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIROperationOutcome_FHIROperationOutcomeIssue()
    {
        $this->assertEquals('OperationOutcome.Issue', PHPFHIRConstants::TYPE_NAME_OPERATION_OUTCOME_DOT_ISSUE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROperationOutcome\FHIROperationOutcomeIssue', PHPFHIRConstants::TYPE_CLASS_OPERATION_OUTCOME_DOT_ISSUE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIROperationParameterUse()
    {
        $this->assertEquals('OperationParameterUse', PHPFHIRConstants::TYPE_NAME_OPERATION_PARAMETER_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROperationParameterUse', PHPFHIRConstants::TYPE_CLASS_OPERATION_PARAMETER_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIROperationParameterUseList()
    {
        $this->assertEquals('OperationParameterUse-list', PHPFHIRConstants::TYPE_NAME_OPERATION_PARAMETER_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIROperationParameterUseList', PHPFHIRConstants::TYPE_CLASS_OPERATION_PARAMETER_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIROrder()
    {
        $this->assertEquals('Order', PHPFHIRConstants::TYPE_NAME_ORDER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROrder', PHPFHIRConstants::TYPE_CLASS_ORDER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIROrder_FHIROrderWhen()
    {
        $this->assertEquals('Order.When', PHPFHIRConstants::TYPE_NAME_ORDER_DOT_WHEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROrder\FHIROrderWhen', PHPFHIRConstants::TYPE_CLASS_ORDER_DOT_WHEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIROrderResponse()
    {
        $this->assertEquals('OrderResponse', PHPFHIRConstants::TYPE_NAME_ORDER_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROrderResponse', PHPFHIRConstants::TYPE_CLASS_ORDER_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIROrderStatus()
    {
        $this->assertEquals('OrderStatus', PHPFHIRConstants::TYPE_NAME_ORDER_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIROrderStatus', PHPFHIRConstants::TYPE_CLASS_ORDER_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIROrderStatusList()
    {
        $this->assertEquals('OrderStatus-list', PHPFHIRConstants::TYPE_NAME_ORDER_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIROrderStatusList', PHPFHIRConstants::TYPE_CLASS_ORDER_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIROrganization()
    {
        $this->assertEquals('Organization', PHPFHIRConstants::TYPE_NAME_ORGANIZATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIROrganization', PHPFHIRConstants::TYPE_CLASS_ORGANIZATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIROrganization_FHIROrganizationContact()
    {
        $this->assertEquals('Organization.Contact', PHPFHIRConstants::TYPE_NAME_ORGANIZATION_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIROrganization\FHIROrganizationContact', PHPFHIRConstants::TYPE_CLASS_ORGANIZATION_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRParameters()
    {
        $this->assertEquals('Parameters', PHPFHIRConstants::TYPE_NAME_PARAMETERS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRParameters', PHPFHIRConstants::TYPE_CLASS_PARAMETERS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRParameters_FHIRParametersParameter()
    {
        $this->assertEquals('Parameters.Parameter', PHPFHIRConstants::TYPE_NAME_PARAMETERS_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRParameters\FHIRParametersParameter', PHPFHIRConstants::TYPE_CLASS_PARAMETERS_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRParticipantRequired()
    {
        $this->assertEquals('ParticipantRequired', PHPFHIRConstants::TYPE_NAME_PARTICIPANT_REQUIRED);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRParticipantRequired', PHPFHIRConstants::TYPE_CLASS_PARTICIPANT_REQUIRED);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRParticipantRequiredList()
    {
        $this->assertEquals('ParticipantRequired-list', PHPFHIRConstants::TYPE_NAME_PARTICIPANT_REQUIRED_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRParticipantRequiredList', PHPFHIRConstants::TYPE_CLASS_PARTICIPANT_REQUIRED_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRParticipantStatus()
    {
        $this->assertEquals('ParticipantStatus', PHPFHIRConstants::TYPE_NAME_PARTICIPANT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRParticipantStatus', PHPFHIRConstants::TYPE_CLASS_PARTICIPANT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRParticipantStatusList()
    {
        $this->assertEquals('ParticipantStatus-list', PHPFHIRConstants::TYPE_NAME_PARTICIPANT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRParticipantStatusList', PHPFHIRConstants::TYPE_CLASS_PARTICIPANT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRParticipationStatus()
    {
        $this->assertEquals('ParticipationStatus', PHPFHIRConstants::TYPE_NAME_PARTICIPATION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRParticipationStatus', PHPFHIRConstants::TYPE_CLASS_PARTICIPATION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRParticipationStatusList()
    {
        $this->assertEquals('ParticipationStatus-list', PHPFHIRConstants::TYPE_NAME_PARTICIPATION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRParticipationStatusList', PHPFHIRConstants::TYPE_CLASS_PARTICIPATION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRPatient()
    {
        $this->assertEquals('Patient', PHPFHIRConstants::TYPE_NAME_PATIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPatient', PHPFHIRConstants::TYPE_CLASS_PATIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientAnimal()
    {
        $this->assertEquals('Patient.Animal', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_ANIMAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientAnimal', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_ANIMAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientCommunication()
    {
        $this->assertEquals('Patient.Communication', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_COMMUNICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientCommunication', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_COMMUNICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientContact()
    {
        $this->assertEquals('Patient.Contact', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientContact', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRPatient_FHIRPatientLink()
    {
        $this->assertEquals('Patient.Link', PHPFHIRConstants::TYPE_NAME_PATIENT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPatient\FHIRPatientLink', PHPFHIRConstants::TYPE_CLASS_PATIENT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRPaymentNotice()
    {
        $this->assertEquals('PaymentNotice', PHPFHIRConstants::TYPE_NAME_PAYMENT_NOTICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPaymentNotice', PHPFHIRConstants::TYPE_CLASS_PAYMENT_NOTICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRPaymentReconciliation()
    {
        $this->assertEquals('PaymentReconciliation', PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPaymentReconciliation', PHPFHIRConstants::TYPE_CLASS_PAYMENT_RECONCILIATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRPaymentReconciliation_FHIRPaymentReconciliationDetail()
    {
        $this->assertEquals('PaymentReconciliation.Detail', PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_DETAIL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationDetail', PHPFHIRConstants::TYPE_CLASS_PAYMENT_RECONCILIATION_DOT_DETAIL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRPaymentReconciliation_FHIRPaymentReconciliationNote()
    {
        $this->assertEquals('PaymentReconciliation.Note', PHPFHIRConstants::TYPE_NAME_PAYMENT_RECONCILIATION_DOT_NOTE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPaymentReconciliation\FHIRPaymentReconciliationNote', PHPFHIRConstants::TYPE_CLASS_PAYMENT_RECONCILIATION_DOT_NOTE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRPeriod()
    {
        $this->assertEquals('Period', PHPFHIRConstants::TYPE_NAME_PERIOD);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPeriod', PHPFHIRConstants::TYPE_CLASS_PERIOD);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRPerson()
    {
        $this->assertEquals('Person', PHPFHIRConstants::TYPE_NAME_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPerson', PHPFHIRConstants::TYPE_CLASS_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRPerson_FHIRPersonLink()
    {
        $this->assertEquals('Person.Link', PHPFHIRConstants::TYPE_NAME_PERSON_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPerson\FHIRPersonLink', PHPFHIRConstants::TYPE_CLASS_PERSON_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRPositiveInt()
    {
        $this->assertEquals('positiveInt', PHPFHIRConstants::TYPE_NAME_POSITIVE_INT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPositiveInt', PHPFHIRConstants::TYPE_CLASS_POSITIVE_INT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRPositiveIntPrimitive()
    {
        $this->assertEquals('positiveInt-primitive', PHPFHIRConstants::TYPE_NAME_POSITIVE_INT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRPositiveIntPrimitive', PHPFHIRConstants::TYPE_CLASS_POSITIVE_INT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRPractitioner()
    {
        $this->assertEquals('Practitioner', PHPFHIRConstants::TYPE_NAME_PRACTITIONER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRPractitioner', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRPractitioner_FHIRPractitionerPractitionerRole()
    {
        $this->assertEquals('Practitioner.PractitionerRole', PHPFHIRConstants::TYPE_NAME_PRACTITIONER_DOT_PRACTITIONER_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerPractitionerRole', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER_DOT_PRACTITIONER_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRPractitioner_FHIRPractitionerQualification()
    {
        $this->assertEquals('Practitioner.Qualification', PHPFHIRConstants::TYPE_NAME_PRACTITIONER_DOT_QUALIFICATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRPractitioner\FHIRPractitionerQualification', PHPFHIRConstants::TYPE_CLASS_PRACTITIONER_DOT_QUALIFICATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRProcedure()
    {
        $this->assertEquals('Procedure', PHPFHIRConstants::TYPE_NAME_PROCEDURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedure', PHPFHIRConstants::TYPE_CLASS_PROCEDURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedureFocalDevice()
    {
        $this->assertEquals('Procedure.FocalDevice', PHPFHIRConstants::TYPE_NAME_PROCEDURE_DOT_FOCAL_DEVICE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedureFocalDevice', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_DOT_FOCAL_DEVICE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRProcedure_FHIRProcedurePerformer()
    {
        $this->assertEquals('Procedure.Performer', PHPFHIRConstants::TYPE_NAME_PROCEDURE_DOT_PERFORMER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcedure\FHIRProcedurePerformer', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_DOT_PERFORMER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRProcedureRequest()
    {
        $this->assertEquals('ProcedureRequest', PHPFHIRConstants::TYPE_NAME_PROCEDURE_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedureRequest', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRProcedureRequestPriority()
    {
        $this->assertEquals('ProcedureRequestPriority', PHPFHIRConstants::TYPE_NAME_PROCEDURE_REQUEST_PRIORITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestPriority', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_REQUEST_PRIORITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRProcedureRequestPriorityList()
    {
        $this->assertEquals('ProcedureRequestPriority-list', PHPFHIRConstants::TYPE_NAME_PROCEDURE_REQUEST_PRIORITY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRProcedureRequestPriorityList', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_REQUEST_PRIORITY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRProcedureRequestStatus()
    {
        $this->assertEquals('ProcedureRequestStatus', PHPFHIRConstants::TYPE_NAME_PROCEDURE_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureRequestStatus', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRProcedureRequestStatusList()
    {
        $this->assertEquals('ProcedureRequestStatus-list', PHPFHIRConstants::TYPE_NAME_PROCEDURE_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRProcedureRequestStatusList', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRProcedureStatus()
    {
        $this->assertEquals('ProcedureStatus', PHPFHIRConstants::TYPE_NAME_PROCEDURE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProcedureStatus', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRProcedureStatusList()
    {
        $this->assertEquals('ProcedureStatus-list', PHPFHIRConstants::TYPE_NAME_PROCEDURE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRProcedureStatusList', PHPFHIRConstants::TYPE_CLASS_PROCEDURE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRProcessRequest()
    {
        $this->assertEquals('ProcessRequest', PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcessRequest', PHPFHIRConstants::TYPE_CLASS_PROCESS_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRProcessRequest_FHIRProcessRequestItem()
    {
        $this->assertEquals('ProcessRequest.Item', PHPFHIRConstants::TYPE_NAME_PROCESS_REQUEST_DOT_ITEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessRequest\FHIRProcessRequestItem', PHPFHIRConstants::TYPE_CLASS_PROCESS_REQUEST_DOT_ITEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRProcessResponse()
    {
        $this->assertEquals('ProcessResponse', PHPFHIRConstants::TYPE_NAME_PROCESS_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcessResponse', PHPFHIRConstants::TYPE_CLASS_PROCESS_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRProcessResponse_FHIRProcessResponseNotes()
    {
        $this->assertEquals('ProcessResponse.Notes', PHPFHIRConstants::TYPE_NAME_PROCESS_RESPONSE_DOT_NOTES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProcessResponse\FHIRProcessResponseNotes', PHPFHIRConstants::TYPE_CLASS_PROCESS_RESPONSE_DOT_NOTES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRPropertyRepresentation()
    {
        $this->assertEquals('PropertyRepresentation', PHPFHIRConstants::TYPE_NAME_PROPERTY_REPRESENTATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRPropertyRepresentation', PHPFHIRConstants::TYPE_CLASS_PROPERTY_REPRESENTATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRPropertyRepresentationList()
    {
        $this->assertEquals('PropertyRepresentation-list', PHPFHIRConstants::TYPE_NAME_PROPERTY_REPRESENTATION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRPropertyRepresentationList', PHPFHIRConstants::TYPE_CLASS_PROPERTY_REPRESENTATION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRProvenance()
    {
        $this->assertEquals('Provenance', PHPFHIRConstants::TYPE_NAME_PROVENANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProvenance', PHPFHIRConstants::TYPE_CLASS_PROVENANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceAgent()
    {
        $this->assertEquals('Provenance.Agent', PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceAgent', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_DOT_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceEntity()
    {
        $this->assertEquals('Provenance.Entity', PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_ENTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceEntity', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_DOT_ENTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRProvenance_FHIRProvenanceRelatedAgent()
    {
        $this->assertEquals('Provenance.RelatedAgent', PHPFHIRConstants::TYPE_NAME_PROVENANCE_DOT_RELATED_AGENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRProvenance\FHIRProvenanceRelatedAgent', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_DOT_RELATED_AGENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRProvenanceEntityRole()
    {
        $this->assertEquals('ProvenanceEntityRole', PHPFHIRConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRProvenanceEntityRole', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRProvenanceEntityRoleList()
    {
        $this->assertEquals('ProvenanceEntityRole-list', PHPFHIRConstants::TYPE_NAME_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRProvenanceEntityRoleList', PHPFHIRConstants::TYPE_CLASS_PROVENANCE_ENTITY_ROLE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuantity()
    {
        $this->assertEquals('Quantity', PHPFHIRConstants::TYPE_NAME_QUANTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity', PHPFHIRConstants::TYPE_CLASS_QUANTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuantityComparator()
    {
        $this->assertEquals('QuantityComparator', PHPFHIRConstants::TYPE_NAME_QUANTITY_COMPARATOR);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantityComparator', PHPFHIRConstants::TYPE_CLASS_QUANTITY_COMPARATOR);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRQuantityComparatorList()
    {
        $this->assertEquals('QuantityComparator-list', PHPFHIRConstants::TYPE_NAME_QUANTITY_COMPARATOR_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRQuantityComparatorList', PHPFHIRConstants::TYPE_CLASS_QUANTITY_COMPARATOR_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRQuestionnaire()
    {
        $this->assertEquals('Questionnaire', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRQuestionnaire', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireGroup()
    {
        $this->assertEquals('Questionnaire.Group', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireGroup', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRQuestionnaire_FHIRQuestionnaireQuestion()
    {
        $this->assertEquals('Questionnaire.Question', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_QUESTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireQuestion', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_DOT_QUESTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRQuestionnaireResponse()
    {
        $this->assertEquals('QuestionnaireResponse', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRQuestionnaireResponse', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRQuestionnaireResponse_FHIRQuestionnaireResponseAnswer()
    {
        $this->assertEquals('QuestionnaireResponse.Answer', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_ANSWER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseAnswer', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_DOT_ANSWER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRQuestionnaireResponse_FHIRQuestionnaireResponseGroup()
    {
        $this->assertEquals('QuestionnaireResponse.Group', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_GROUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_DOT_GROUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRQuestionnaireResponse_FHIRQuestionnaireResponseQuestion()
    {
        $this->assertEquals('QuestionnaireResponse.Question', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_DOT_QUESTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseQuestion', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_DOT_QUESTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuestionnaireResponseStatus()
    {
        $this->assertEquals('QuestionnaireResponseStatus', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuestionnaireResponseStatus', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRQuestionnaireResponseStatusList()
    {
        $this->assertEquals('QuestionnaireResponseStatus-list', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_RESPONSE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRQuestionnaireResponseStatusList', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_RESPONSE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuestionnaireStatus()
    {
        $this->assertEquals('QuestionnaireStatus', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuestionnaireStatus', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRQuestionnaireStatusList()
    {
        $this->assertEquals('QuestionnaireStatus-list', PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRQuestionnaireStatusList', PHPFHIRConstants::TYPE_CLASS_QUESTIONNAIRE_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRRange()
    {
        $this->assertEquals('Range', PHPFHIRConstants::TYPE_NAME_RANGE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRange', PHPFHIRConstants::TYPE_CLASS_RANGE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRRatio()
    {
        $this->assertEquals('Ratio', PHPFHIRConstants::TYPE_NAME_RATIO);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRatio', PHPFHIRConstants::TYPE_CLASS_RATIO);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRReference()
    {
        $this->assertEquals('Reference', PHPFHIRConstants::TYPE_NAME_REFERENCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReference', PHPFHIRConstants::TYPE_CLASS_REFERENCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRReferralRequest()
    {
        $this->assertEquals('ReferralRequest', PHPFHIRConstants::TYPE_NAME_REFERRAL_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRReferralRequest', PHPFHIRConstants::TYPE_CLASS_REFERRAL_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRReferralStatus()
    {
        $this->assertEquals('ReferralStatus', PHPFHIRConstants::TYPE_NAME_REFERRAL_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRReferralStatus', PHPFHIRConstants::TYPE_CLASS_REFERRAL_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRReferralStatusList()
    {
        $this->assertEquals('ReferralStatus-list', PHPFHIRConstants::TYPE_NAME_REFERRAL_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRReferralStatusList', PHPFHIRConstants::TYPE_CLASS_REFERRAL_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRRelatedPerson()
    {
        $this->assertEquals('RelatedPerson', PHPFHIRConstants::TYPE_NAME_RELATED_PERSON);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRRelatedPerson', PHPFHIRConstants::TYPE_CLASS_RELATED_PERSON);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRRemittanceOutcome()
    {
        $this->assertEquals('RemittanceOutcome', PHPFHIRConstants::TYPE_NAME_REMITTANCE_OUTCOME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRemittanceOutcome', PHPFHIRConstants::TYPE_CLASS_REMITTANCE_OUTCOME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRRemittanceOutcomeList()
    {
        $this->assertEquals('RemittanceOutcome-list', PHPFHIRConstants::TYPE_NAME_REMITTANCE_OUTCOME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRRemittanceOutcomeList', PHPFHIRConstants::TYPE_CLASS_REMITTANCE_OUTCOME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource()
    {
        $this->assertEquals('Resource', PHPFHIRConstants::TYPE_NAME_RESOURCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource', PHPFHIRConstants::TYPE_CLASS_RESOURCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResourceContainer()
    {
        $this->assertEquals('ResourceContainer', PHPFHIRConstants::TYPE_NAME_RESOURCE_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResourceContainer', PHPFHIRConstants::TYPE_CLASS_RESOURCE_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRResourceVersionPolicy()
    {
        $this->assertEquals('ResourceVersionPolicy', PHPFHIRConstants::TYPE_NAME_RESOURCE_VERSION_POLICY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRResourceVersionPolicy', PHPFHIRConstants::TYPE_CLASS_RESOURCE_VERSION_POLICY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRResourceVersionPolicyList()
    {
        $this->assertEquals('ResourceVersionPolicy-list', PHPFHIRConstants::TYPE_NAME_RESOURCE_VERSION_POLICY_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRResourceVersionPolicyList', PHPFHIRConstants::TYPE_CLASS_RESOURCE_VERSION_POLICY_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRResponseType()
    {
        $this->assertEquals('ResponseType', PHPFHIRConstants::TYPE_NAME_RESPONSE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRResponseType', PHPFHIRConstants::TYPE_CLASS_RESPONSE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRResponseTypeList()
    {
        $this->assertEquals('ResponseType-list', PHPFHIRConstants::TYPE_NAME_RESPONSE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRResponseTypeList', PHPFHIRConstants::TYPE_CLASS_RESPONSE_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRRestfulConformanceMode()
    {
        $this->assertEquals('RestfulConformanceMode', PHPFHIRConstants::TYPE_NAME_RESTFUL_CONFORMANCE_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRRestfulConformanceMode', PHPFHIRConstants::TYPE_CLASS_RESTFUL_CONFORMANCE_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRRestfulConformanceModeList()
    {
        $this->assertEquals('RestfulConformanceMode-list', PHPFHIRConstants::TYPE_NAME_RESTFUL_CONFORMANCE_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRRestfulConformanceModeList', PHPFHIRConstants::TYPE_CLASS_RESTFUL_CONFORMANCE_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRRiskAssessment()
    {
        $this->assertEquals('RiskAssessment', PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRRiskAssessment', PHPFHIRConstants::TYPE_CLASS_RISK_ASSESSMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRRiskAssessment_FHIRRiskAssessmentPrediction()
    {
        $this->assertEquals('RiskAssessment.Prediction', PHPFHIRConstants::TYPE_NAME_RISK_ASSESSMENT_DOT_PREDICTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRRiskAssessment\FHIRRiskAssessmentPrediction', PHPFHIRConstants::TYPE_CLASS_RISK_ASSESSMENT_DOT_PREDICTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSampledData()
    {
        $this->assertEquals('SampledData', PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledData', PHPFHIRConstants::TYPE_CLASS_SAMPLED_DATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSampledDataDataType()
    {
        $this->assertEquals('SampledDataDataType', PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSampledDataDataType', PHPFHIRConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRSampledDataDataTypePrimitive()
    {
        $this->assertEquals('SampledDataDataType-primitive', PHPFHIRConstants::TYPE_NAME_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRSampledDataDataTypePrimitive', PHPFHIRConstants::TYPE_CLASS_SAMPLED_DATA_DATA_TYPE_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRSchedule()
    {
        $this->assertEquals('Schedule', PHPFHIRConstants::TYPE_NAME_SCHEDULE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSchedule', PHPFHIRConstants::TYPE_CLASS_SCHEDULE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSearchEntryMode()
    {
        $this->assertEquals('SearchEntryMode', PHPFHIRConstants::TYPE_NAME_SEARCH_ENTRY_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSearchEntryMode', PHPFHIRConstants::TYPE_CLASS_SEARCH_ENTRY_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSearchEntryModeList()
    {
        $this->assertEquals('SearchEntryMode-list', PHPFHIRConstants::TYPE_NAME_SEARCH_ENTRY_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSearchEntryModeList', PHPFHIRConstants::TYPE_CLASS_SEARCH_ENTRY_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSearchModifierCode()
    {
        $this->assertEquals('SearchModifierCode', PHPFHIRConstants::TYPE_NAME_SEARCH_MODIFIER_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSearchModifierCode', PHPFHIRConstants::TYPE_CLASS_SEARCH_MODIFIER_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSearchModifierCodeList()
    {
        $this->assertEquals('SearchModifierCode-list', PHPFHIRConstants::TYPE_NAME_SEARCH_MODIFIER_CODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSearchModifierCodeList', PHPFHIRConstants::TYPE_CLASS_SEARCH_MODIFIER_CODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRSearchParameter()
    {
        $this->assertEquals('SearchParameter', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSearchParameter', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRSearchParameter_FHIRSearchParameterContact()
    {
        $this->assertEquals('SearchParameter.Contact', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAMETER_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSearchParameter\FHIRSearchParameterContact', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAMETER_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSearchParamType()
    {
        $this->assertEquals('SearchParamType', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAM_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSearchParamType', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAM_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSearchParamTypeList()
    {
        $this->assertEquals('SearchParamType-list', PHPFHIRConstants::TYPE_NAME_SEARCH_PARAM_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSearchParamTypeList', PHPFHIRConstants::TYPE_CLASS_SEARCH_PARAM_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSignature()
    {
        $this->assertEquals('Signature', PHPFHIRConstants::TYPE_NAME_SIGNATURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSignature', PHPFHIRConstants::TYPE_CLASS_SIGNATURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRQuantity_FHIRSimpleQuantity()
    {
        $this->assertEquals('SimpleQuantity', PHPFHIRConstants::TYPE_NAME_SIMPLE_QUANTITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRQuantity\FHIRSimpleQuantity', PHPFHIRConstants::TYPE_CLASS_SIMPLE_QUANTITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSlicingRules()
    {
        $this->assertEquals('SlicingRules', PHPFHIRConstants::TYPE_NAME_SLICING_RULES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSlicingRules', PHPFHIRConstants::TYPE_CLASS_SLICING_RULES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSlicingRulesList()
    {
        $this->assertEquals('SlicingRules-list', PHPFHIRConstants::TYPE_NAME_SLICING_RULES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSlicingRulesList', PHPFHIRConstants::TYPE_CLASS_SLICING_RULES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRSlot()
    {
        $this->assertEquals('Slot', PHPFHIRConstants::TYPE_NAME_SLOT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSlot', PHPFHIRConstants::TYPE_CLASS_SLOT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSlotStatus()
    {
        $this->assertEquals('SlotStatus', PHPFHIRConstants::TYPE_NAME_SLOT_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSlotStatus', PHPFHIRConstants::TYPE_CLASS_SLOT_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSlotStatusList()
    {
        $this->assertEquals('SlotStatus-list', PHPFHIRConstants::TYPE_NAME_SLOT_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSlotStatusList', PHPFHIRConstants::TYPE_CLASS_SLOT_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRSpecimen()
    {
        $this->assertEquals('Specimen', PHPFHIRConstants::TYPE_NAME_SPECIMEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSpecimen', PHPFHIRConstants::TYPE_CLASS_SPECIMEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenCollection()
    {
        $this->assertEquals('Specimen.Collection', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_COLLECTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenCollection', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_COLLECTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenContainer()
    {
        $this->assertEquals('Specimen.Container', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_CONTAINER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenContainer', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_CONTAINER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRSpecimen_FHIRSpecimenTreatment()
    {
        $this->assertEquals('Specimen.Treatment', PHPFHIRConstants::TYPE_NAME_SPECIMEN_DOT_TREATMENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSpecimen\FHIRSpecimenTreatment', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_DOT_TREATMENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSpecimenStatus()
    {
        $this->assertEquals('SpecimenStatus', PHPFHIRConstants::TYPE_NAME_SPECIMEN_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSpecimenStatus', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSpecimenStatusList()
    {
        $this->assertEquals('SpecimenStatus-list', PHPFHIRConstants::TYPE_NAME_SPECIMEN_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSpecimenStatusList', PHPFHIRConstants::TYPE_CLASS_SPECIMEN_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRString()
    {
        $this->assertEquals('string', PHPFHIRConstants::TYPE_NAME_STRING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString', PHPFHIRConstants::TYPE_CLASS_STRING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive()
    {
        $this->assertEquals('string-primitive', PHPFHIRConstants::TYPE_NAME_STRING_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive', PHPFHIRConstants::TYPE_CLASS_STRING_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRStructureDefinition()
    {
        $this->assertEquals('StructureDefinition', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRStructureDefinition', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionContact()
    {
        $this->assertEquals('StructureDefinition.Contact', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionContact', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionDifferential()
    {
        $this->assertEquals('StructureDefinition.Differential', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_DIFFERENTIAL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionDifferential', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_DIFFERENTIAL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionMapping()
    {
        $this->assertEquals('StructureDefinition.Mapping', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_MAPPING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionMapping', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_MAPPING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRStructureDefinition_FHIRStructureDefinitionSnapshot()
    {
        $this->assertEquals('StructureDefinition.Snapshot', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_DOT_SNAPSHOT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRStructureDefinition\FHIRStructureDefinitionSnapshot', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_DOT_SNAPSHOT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRStructureDefinitionKind()
    {
        $this->assertEquals('StructureDefinitionKind', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_KIND);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRStructureDefinitionKind', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_KIND);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRStructureDefinitionKindList()
    {
        $this->assertEquals('StructureDefinitionKind-list', PHPFHIRConstants::TYPE_NAME_STRUCTURE_DEFINITION_KIND_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRStructureDefinitionKindList', PHPFHIRConstants::TYPE_CLASS_STRUCTURE_DEFINITION_KIND_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRSubscription()
    {
        $this->assertEquals('Subscription', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSubscription', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRSubscription_FHIRSubscriptionChannel()
    {
        $this->assertEquals('Subscription.Channel', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_DOT_CHANNEL);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubscription\FHIRSubscriptionChannel', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_DOT_CHANNEL);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSubscriptionChannelType()
    {
        $this->assertEquals('SubscriptionChannelType', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_CHANNEL_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSubscriptionChannelType', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_CHANNEL_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSubscriptionChannelTypeList()
    {
        $this->assertEquals('SubscriptionChannelType-list', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_CHANNEL_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSubscriptionChannelTypeList', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_CHANNEL_TYPE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSubscriptionStatus()
    {
        $this->assertEquals('SubscriptionStatus', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSubscriptionStatus', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSubscriptionStatusList()
    {
        $this->assertEquals('SubscriptionStatus-list', PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSubscriptionStatusList', PHPFHIRConstants::TYPE_CLASS_SUBSCRIPTION_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRSubstance()
    {
        $this->assertEquals('Substance', PHPFHIRConstants::TYPE_NAME_SUBSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSubstance', PHPFHIRConstants::TYPE_CLASS_SUBSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceIngredient()
    {
        $this->assertEquals('Substance.Ingredient', PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DOT_INGREDIENT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceIngredient', PHPFHIRConstants::TYPE_CLASS_SUBSTANCE_DOT_INGREDIENT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRSubstance_FHIRSubstanceInstance()
    {
        $this->assertEquals('Substance.Instance', PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DOT_INSTANCE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSubstance\FHIRSubstanceInstance', PHPFHIRConstants::TYPE_CLASS_SUBSTANCE_DOT_INSTANCE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRSupplyDelivery()
    {
        $this->assertEquals('SupplyDelivery', PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyDelivery', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DELIVERY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSupplyDeliveryStatus()
    {
        $this->assertEquals('SupplyDeliveryStatus', PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSupplyDeliveryStatus', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DELIVERY_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSupplyDeliveryStatusList()
    {
        $this->assertEquals('SupplyDeliveryStatus-list', PHPFHIRConstants::TYPE_NAME_SUPPLY_DELIVERY_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSupplyDeliveryStatusList', PHPFHIRConstants::TYPE_CLASS_SUPPLY_DELIVERY_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRSupplyRequest()
    {
        $this->assertEquals('SupplyRequest', PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRSupplyRequest', PHPFHIRConstants::TYPE_CLASS_SUPPLY_REQUEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRSupplyRequest_FHIRSupplyRequestWhen()
    {
        $this->assertEquals('SupplyRequest.When', PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST_DOT_WHEN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRSupplyRequest\FHIRSupplyRequestWhen', PHPFHIRConstants::TYPE_CLASS_SUPPLY_REQUEST_DOT_WHEN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSupplyRequestStatus()
    {
        $this->assertEquals('SupplyRequestStatus', PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST_STATUS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSupplyRequestStatus', PHPFHIRConstants::TYPE_CLASS_SUPPLY_REQUEST_STATUS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSupplyRequestStatusList()
    {
        $this->assertEquals('SupplyRequestStatus-list', PHPFHIRConstants::TYPE_NAME_SUPPLY_REQUEST_STATUS_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSupplyRequestStatusList', PHPFHIRConstants::TYPE_CLASS_SUPPLY_REQUEST_STATUS_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRSystemRestfulInteraction()
    {
        $this->assertEquals('SystemRestfulInteraction', PHPFHIRConstants::TYPE_NAME_SYSTEM_RESTFUL_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRSystemRestfulInteraction', PHPFHIRConstants::TYPE_CLASS_SYSTEM_RESTFUL_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRSystemRestfulInteractionList()
    {
        $this->assertEquals('SystemRestfulInteraction-list', PHPFHIRConstants::TYPE_NAME_SYSTEM_RESTFUL_INTERACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRSystemRestfulInteractionList', PHPFHIRConstants::TYPE_CLASS_SYSTEM_RESTFUL_INTERACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRTestScript()
    {
        $this->assertEquals('TestScript', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRTestScript', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction()
    {
        $this->assertEquals('TestScript.Action', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction1()
    {
        $this->assertEquals('TestScript.Action1', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction1', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAction2()
    {
        $this->assertEquals('TestScript.Action2', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ACTION_2);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAction2', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ACTION_2);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptAssert()
    {
        $this->assertEquals('TestScript.Assert', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_ASSERT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptAssert', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_ASSERT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptCapability()
    {
        $this->assertEquals('TestScript.Capability', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CAPABILITY);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptCapability', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_CAPABILITY);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptContact()
    {
        $this->assertEquals('TestScript.Contact', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptContact', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptFixture()
    {
        $this->assertEquals('TestScript.Fixture', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_FIXTURE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptFixture', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_FIXTURE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptLink()
    {
        $this->assertEquals('TestScript.Link', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_LINK);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptLink', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_LINK);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptMetadata()
    {
        $this->assertEquals('TestScript.Metadata', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_METADATA);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptMetadata', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_METADATA);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptOperation()
    {
        $this->assertEquals('TestScript.Operation', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_OPERATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptOperation', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_OPERATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptRequestHeader()
    {
        $this->assertEquals('TestScript.RequestHeader', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_REQUEST_HEADER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptRequestHeader', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_REQUEST_HEADER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptSetup()
    {
        $this->assertEquals('TestScript.Setup', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_SETUP);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptSetup', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_SETUP);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptTeardown()
    {
        $this->assertEquals('TestScript.Teardown', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_TEARDOWN);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTeardown', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_TEARDOWN);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptTest()
    {
        $this->assertEquals('TestScript.Test', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_TEST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptTest', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_TEST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRTestScript_FHIRTestScriptVariable()
    {
        $this->assertEquals('TestScript.Variable', PHPFHIRConstants::TYPE_NAME_TEST_SCRIPT_DOT_VARIABLE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRTestScript\FHIRTestScriptVariable', PHPFHIRConstants::TYPE_CLASS_TEST_SCRIPT_DOT_VARIABLE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRTime()
    {
        $this->assertEquals('time', PHPFHIRConstants::TYPE_NAME_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTime', PHPFHIRConstants::TYPE_CLASS_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRTimePrimitive()
    {
        $this->assertEquals('time-primitive', PHPFHIRConstants::TYPE_NAME_TIME_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRTimePrimitive', PHPFHIRConstants::TYPE_CLASS_TIME_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRTiming()
    {
        $this->assertEquals('Timing', PHPFHIRConstants::TYPE_NAME_TIMING);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming', PHPFHIRConstants::TYPE_CLASS_TIMING);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRTiming_FHIRTimingRepeat()
    {
        $this->assertEquals('Timing.Repeat', PHPFHIRConstants::TYPE_NAME_TIMING_DOT_REPEAT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTiming\FHIRTimingRepeat', PHPFHIRConstants::TYPE_CLASS_TIMING_DOT_REPEAT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRTransactionMode()
    {
        $this->assertEquals('TransactionMode', PHPFHIRConstants::TYPE_NAME_TRANSACTION_MODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTransactionMode', PHPFHIRConstants::TYPE_CLASS_TRANSACTION_MODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRTransactionModeList()
    {
        $this->assertEquals('TransactionMode-list', PHPFHIRConstants::TYPE_NAME_TRANSACTION_MODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRTransactionModeList', PHPFHIRConstants::TYPE_CLASS_TRANSACTION_MODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRTypeRestfulInteraction()
    {
        $this->assertEquals('TypeRestfulInteraction', PHPFHIRConstants::TYPE_NAME_TYPE_RESTFUL_INTERACTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRTypeRestfulInteraction', PHPFHIRConstants::TYPE_CLASS_TYPE_RESTFUL_INTERACTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRTypeRestfulInteractionList()
    {
        $this->assertEquals('TypeRestfulInteraction-list', PHPFHIRConstants::TYPE_NAME_TYPE_RESTFUL_INTERACTION_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRTypeRestfulInteractionList', PHPFHIRConstants::TYPE_CLASS_TYPE_RESTFUL_INTERACTION_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRUnitsOfTime()
    {
        $this->assertEquals('UnitsOfTime', PHPFHIRConstants::TYPE_NAME_UNITS_OF_TIME);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnitsOfTime', PHPFHIRConstants::TYPE_CLASS_UNITS_OF_TIME);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRUnitsOfTimeList()
    {
        $this->assertEquals('UnitsOfTime-list', PHPFHIRConstants::TYPE_NAME_UNITS_OF_TIME_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRUnitsOfTimeList', PHPFHIRConstants::TYPE_CLASS_UNITS_OF_TIME_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRUnknownContentCode()
    {
        $this->assertEquals('UnknownContentCode', PHPFHIRConstants::TYPE_NAME_UNKNOWN_CONTENT_CODE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnknownContentCode', PHPFHIRConstants::TYPE_CLASS_UNKNOWN_CONTENT_CODE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRUnknownContentCodeList()
    {
        $this->assertEquals('UnknownContentCode-list', PHPFHIRConstants::TYPE_NAME_UNKNOWN_CONTENT_CODE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRUnknownContentCodeList', PHPFHIRConstants::TYPE_CLASS_UNKNOWN_CONTENT_CODE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRUnsignedInt()
    {
        $this->assertEquals('unsignedInt', PHPFHIRConstants::TYPE_NAME_UNSIGNED_INT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUnsignedInt', PHPFHIRConstants::TYPE_CLASS_UNSIGNED_INT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRUnsignedIntPrimitive()
    {
        $this->assertEquals('unsignedInt-primitive', PHPFHIRConstants::TYPE_NAME_UNSIGNED_INT_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRUnsignedIntPrimitive', PHPFHIRConstants::TYPE_CLASS_UNSIGNED_INT_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRUri()
    {
        $this->assertEquals('uri', PHPFHIRConstants::TYPE_NAME_URI);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUri', PHPFHIRConstants::TYPE_CLASS_URI);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRUriPrimitive()
    {
        $this->assertEquals('uri-primitive', PHPFHIRConstants::TYPE_NAME_URI_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRUriPrimitive', PHPFHIRConstants::TYPE_CLASS_URI_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRUse()
    {
        $this->assertEquals('Use', PHPFHIRConstants::TYPE_NAME_USE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUse', PHPFHIRConstants::TYPE_CLASS_USE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRUseList()
    {
        $this->assertEquals('Use-list', PHPFHIRConstants::TYPE_NAME_USE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRUseList', PHPFHIRConstants::TYPE_CLASS_USE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRUuid()
    {
        $this->assertEquals('uuid', PHPFHIRConstants::TYPE_NAME_UUID);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRUuid', PHPFHIRConstants::TYPE_CLASS_UUID);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRUuidPrimitive()
    {
        $this->assertEquals('uuid-primitive', PHPFHIRConstants::TYPE_NAME_UUID_HYPHEN_PRIMITIVE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRUuidPrimitive', PHPFHIRConstants::TYPE_CLASS_UUID_HYPHEN_PRIMITIVE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRValueSet()
    {
        $this->assertEquals('ValueSet', PHPFHIRConstants::TYPE_NAME_VALUE_SET);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRValueSet', PHPFHIRConstants::TYPE_CLASS_VALUE_SET);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetCodeSystem()
    {
        $this->assertEquals('ValueSet.CodeSystem', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CODE_SYSTEM);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCodeSystem', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_CODE_SYSTEM);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetCompose()
    {
        $this->assertEquals('ValueSet.Compose', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_COMPOSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetConcept()
    {
        $this->assertEquals('ValueSet.Concept', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_CONCEPT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetConcept1()
    {
        $this->assertEquals('ValueSet.Concept1', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONCEPT_1);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetConcept1', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_CONCEPT_1);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetContact()
    {
        $this->assertEquals('ValueSet.Contact', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONTACT);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContact', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_CONTACT);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetContains()
    {
        $this->assertEquals('ValueSet.Contains', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_CONTAINS);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetContains', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_CONTAINS);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetDesignation()
    {
        $this->assertEquals('ValueSet.Designation', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_DESIGNATION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetDesignation', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_DESIGNATION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetExpansion()
    {
        $this->assertEquals('ValueSet.Expansion', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_EXPANSION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetExpansion', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_EXPANSION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetFilter()
    {
        $this->assertEquals('ValueSet.Filter', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_FILTER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetFilter', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_FILTER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetInclude()
    {
        $this->assertEquals('ValueSet.Include', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_INCLUDE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_INCLUDE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRValueSet_FHIRValueSetParameter()
    {
        $this->assertEquals('ValueSet.Parameter', PHPFHIRConstants::TYPE_NAME_VALUE_SET_DOT_PARAMETER);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetParameter', PHPFHIRConstants::TYPE_CLASS_VALUE_SET_DOT_PARAMETER);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRVisionBase()
    {
        $this->assertEquals('VisionBase', PHPFHIRConstants::TYPE_NAME_VISION_BASE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionBase', PHPFHIRConstants::TYPE_CLASS_VISION_BASE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRVisionBaseList()
    {
        $this->assertEquals('VisionBase-list', PHPFHIRConstants::TYPE_NAME_VISION_BASE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRVisionBaseList', PHPFHIRConstants::TYPE_CLASS_VISION_BASE_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRVisionEyes()
    {
        $this->assertEquals('VisionEyes', PHPFHIRConstants::TYPE_NAME_VISION_EYES);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRVisionEyes', PHPFHIRConstants::TYPE_CLASS_VISION_EYES);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRVisionEyesList()
    {
        $this->assertEquals('VisionEyes-list', PHPFHIRConstants::TYPE_NAME_VISION_EYES_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRVisionEyesList', PHPFHIRConstants::TYPE_CLASS_VISION_EYES_HYPHEN_LIST);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRResource_FHIRDomainResource_FHIRVisionPrescription()
    {
        $this->assertEquals('VisionPrescription', PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRVisionPrescription', PHPFHIRConstants::TYPE_CLASS_VISION_PRESCRIPTION);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRBackboneElement_FHIRVisionPrescription_FHIRVisionPrescriptionDispense()
    {
        $this->assertEquals('VisionPrescription.Dispense', PHPFHIRConstants::TYPE_NAME_VISION_PRESCRIPTION_DOT_DISPENSE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRVisionPrescription\FHIRVisionPrescriptionDispense', PHPFHIRConstants::TYPE_CLASS_VISION_PRESCRIPTION_DOT_DISPENSE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRElement_FHIRXPathUsageType()
    {
        $this->assertEquals('XPathUsageType', PHPFHIRConstants::TYPE_NAME_XPATH_USAGE_TYPE);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRXPathUsageType', PHPFHIRConstants::TYPE_CLASS_XPATH_USAGE_TYPE);
    }

    public function testTypeConstantsDefinedDCarbone_PHPFHIRGenerated_DSTU2_FHIRStringPrimitive_FHIRXPathUsageTypeList()
    {
        $this->assertEquals('XPathUsageType-list', PHPFHIRConstants::TYPE_NAME_XPATH_USAGE_TYPE_HYPHEN_LIST);
        $this->assertEquals('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive\FHIRXPathUsageTypeList', PHPFHIRConstants::TYPE_CLASS_XPATH_USAGE_TYPE_HYPHEN_LIST);
    }

}
