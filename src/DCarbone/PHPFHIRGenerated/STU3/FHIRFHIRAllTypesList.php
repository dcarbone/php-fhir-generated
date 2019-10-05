<?php

namespace DCarbone\PHPFHIRGenerated\STU3;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 5th, 2019 12:57+0000
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

/**
 * Class FHIRFHIRAllTypesList
 * @package \DCarbone\PHPFHIRGenerated\STU3
 */
class FHIRFHIRAllTypesList implements PHPFHIRTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_FHIRALL_TYPES_HYPHEN_LIST;

    const FIELD_VALUE = 'value';

    /** @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive */
    private $value = null;

    /**
     * The list of values allowed by FHIRAllTypes-list
     * @var array
     */
    private static $valueList = [
        'Address',
        'Age',
        'Annotation',
        'Attachment',
        'BackboneElement',
        'CodeableConcept',
        'Coding',
        'ContactDetail',
        'ContactPoint',
        'Contributor',
        'Count',
        'DataRequirement',
        'Distance',
        'Dosage',
        'Duration',
        'Element',
        'ElementDefinition',
        'Extension',
        'HumanName',
        'Identifier',
        'Meta',
        'Money',
        'Narrative',
        'ParameterDefinition',
        'Period',
        'Quantity',
        'Range',
        'Ratio',
        'Reference',
        'RelatedArtifact',
        'SampledData',
        'Signature',
        'SimpleQuantity',
        'Timing',
        'TriggerDefinition',
        'UsageContext',
        'base64Binary',
        'boolean',
        'code',
        'date',
        'dateTime',
        'decimal',
        'id',
        'instant',
        'integer',
        'markdown',
        'oid',
        'positiveInt',
        'string',
        'time',
        'unsignedInt',
        'uri',
        'uuid',
        'xhtml',
        'Account',
        'ActivityDefinition',
        'AdverseEvent',
        'AllergyIntolerance',
        'Appointment',
        'AppointmentResponse',
        'AuditEvent',
        'Basic',
        'Binary',
        'BodySite',
        'Bundle',
        'CapabilityStatement',
        'CarePlan',
        'CareTeam',
        'ChargeItem',
        'Claim',
        'ClaimResponse',
        'ClinicalImpression',
        'CodeSystem',
        'Communication',
        'CommunicationRequest',
        'CompartmentDefinition',
        'Composition',
        'ConceptMap',
        'Condition',
        'Consent',
        'Contract',
        'Coverage',
        'DataElement',
        'DetectedIssue',
        'Device',
        'DeviceComponent',
        'DeviceMetric',
        'DeviceRequest',
        'DeviceUseStatement',
        'DiagnosticReport',
        'DocumentManifest',
        'DocumentReference',
        'DomainResource',
        'EligibilityRequest',
        'EligibilityResponse',
        'Encounter',
        'Endpoint',
        'EnrollmentRequest',
        'EnrollmentResponse',
        'EpisodeOfCare',
        'ExpansionProfile',
        'ExplanationOfBenefit',
        'FamilyMemberHistory',
        'Flag',
        'Goal',
        'GraphDefinition',
        'Group',
        'GuidanceResponse',
        'HealthcareService',
        'ImagingManifest',
        'ImagingStudy',
        'Immunization',
        'ImmunizationRecommendation',
        'ImplementationGuide',
        'Library',
        'Linkage',
        'List',
        'Location',
        'Measure',
        'MeasureReport',
        'Media',
        'Medication',
        'MedicationAdministration',
        'MedicationDispense',
        'MedicationRequest',
        'MedicationStatement',
        'MessageDefinition',
        'MessageHeader',
        'NamingSystem',
        'NutritionOrder',
        'Observation',
        'OperationDefinition',
        'OperationOutcome',
        'Organization',
        'Parameters',
        'Patient',
        'PaymentNotice',
        'PaymentReconciliation',
        'Person',
        'PlanDefinition',
        'Practitioner',
        'PractitionerRole',
        'Procedure',
        'ProcedureRequest',
        'ProcessRequest',
        'ProcessResponse',
        'Provenance',
        'Questionnaire',
        'QuestionnaireResponse',
        'ReferralRequest',
        'RelatedPerson',
        'RequestGroup',
        'ResearchStudy',
        'ResearchSubject',
        'Resource',
        'RiskAssessment',
        'Schedule',
        'SearchParameter',
        'Sequence',
        'ServiceDefinition',
        'Slot',
        'Specimen',
        'StructureDefinition',
        'StructureMap',
        'Subscription',
        'Substance',
        'SupplyDelivery',
        'SupplyRequest',
        'Task',
        'TestReport',
        'TestScript',
        'ValueSet',
        'VisionPrescription',
        'Type',
        'Any',
    ];

    /**
     * FHIRFHIRAllTypesList Constructor
     * @param null|string $value;
     */
    public function __construct($value = null)
    {
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive $value;
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRFHIRAllTypesList
     */
    public function setValue($value = null)
    {
        if (null === $value) {
            $this->value = null;
            return $this;
        }
        if ($value instanceof FHIRCodePrimitive) {
            $this->value = $value;
            return $this;
        }
        $this->value = new FHIRCodePrimitive($value);
        return $this;
    }

    /**
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRCodePrimitive     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns the list of allowed values for this type
     * @return string[]
     */
    public function getValueList()
    {
        return self::$valueList;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        $v = $this->getValue();
        return null === $v || in_array((string)$v, self::$valueList, true);
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRFHIRAllTypesList $type
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRFHIRAllTypesList
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRFHIRAllTypesList::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRFHIRAllTypesList::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new static();
        } elseif (!is_object($type) || !($type instanceof FHIRFHIRAllTypesList)) {
            throw new \RuntimeException(sprintf(
                'FHIRFHIRAllTypesList::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRFHIRAllTypesList or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->value)) {
            return $type->setValue((string)$attributes->value);
        }
        if (isset($children->value)) {
            return $type->setValue((string)$children->value);
        }
        if ('' !== ($v = (string)$sxe)) {
            return $type->setValue($v);
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<FHIRAllTypes_list xmlns="http://hl7.org/fhir"></FHIRAllTypes_list>');
        }
        $sxe->addAttribute(self::FIELD_VALUE, (string)$this);
        return $sxe;
    }

    /**
     * @return null|string
     */
    public function jsonSerialize()
    {
        return $this->getValue();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }
}