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

class PHPFHIRParserMap implements \ArrayAccess, \Iterator
{
    /** @var array */
    private $_bigDumbMap = array (
  'markdown' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'markdown-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'integer' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'integer-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'dateTime' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'dateTime-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'unsignedInt' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'unsignedInt-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'code' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'code-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'date' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDate',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'date-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'decimal' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'uri' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRUri',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'uri-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'id' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRId',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'base64Binary' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'base64Binary-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'time' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRTime',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'time-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'oid' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIROid',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'oid-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'positiveInt' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'positiveInt-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'string' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRString',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'boolean' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'boolean-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'uuid' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'uuid-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'instant' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'instant-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'ResourceContainer' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResourceContainer',
    'extendedElementName' => NULL,
    'properties' => 
    array (
      'Account' => 
      array (
        'setter' => 'setAccount',
        'element' => 'Account',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRAccount',
      ),
      'AllergyIntolerance' => 
      array (
        'setter' => 'setAllergyIntolerance',
        'element' => 'AllergyIntolerance',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRAllergyIntolerance',
      ),
      'Appointment' => 
      array (
        'setter' => 'setAppointment',
        'element' => 'Appointment',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRAppointment',
      ),
      'AppointmentResponse' => 
      array (
        'setter' => 'setAppointmentResponse',
        'element' => 'AppointmentResponse',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRAppointmentResponse',
      ),
      'AuditEvent' => 
      array (
        'setter' => 'setAuditEvent',
        'element' => 'AuditEvent',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRAuditEvent',
      ),
      'Basic' => 
      array (
        'setter' => 'setBasic',
        'element' => 'Basic',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRBasic',
      ),
      'Binary' => 
      array (
        'setter' => 'setBinary',
        'element' => 'Binary',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRBinary',
      ),
      'BodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'BodySite',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRBodySite',
      ),
      'Bundle' => 
      array (
        'setter' => 'setBundle',
        'element' => 'Bundle',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRBundle',
      ),
      'CarePlan' => 
      array (
        'setter' => 'setCarePlan',
        'element' => 'CarePlan',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRCarePlan',
      ),
      'Claim' => 
      array (
        'setter' => 'setClaim',
        'element' => 'Claim',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRClaim',
      ),
      'ClaimResponse' => 
      array (
        'setter' => 'setClaimResponse',
        'element' => 'ClaimResponse',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRClaimResponse',
      ),
      'ClinicalImpression' => 
      array (
        'setter' => 'setClinicalImpression',
        'element' => 'ClinicalImpression',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRClinicalImpression',
      ),
      'Communication' => 
      array (
        'setter' => 'setCommunication',
        'element' => 'Communication',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRCommunication',
      ),
      'CommunicationRequest' => 
      array (
        'setter' => 'setCommunicationRequest',
        'element' => 'CommunicationRequest',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRCommunicationRequest',
      ),
      'Composition' => 
      array (
        'setter' => 'setComposition',
        'element' => 'Composition',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRComposition',
      ),
      'ConceptMap' => 
      array (
        'setter' => 'setConceptMap',
        'element' => 'ConceptMap',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRConceptMap',
      ),
      'Condition' => 
      array (
        'setter' => 'setCondition',
        'element' => 'Condition',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRCondition',
      ),
      'Conformance' => 
      array (
        'setter' => 'setConformance',
        'element' => 'Conformance',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRConformance',
      ),
      'Contract' => 
      array (
        'setter' => 'setContract',
        'element' => 'Contract',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRContract',
      ),
      'Coverage' => 
      array (
        'setter' => 'setCoverage',
        'element' => 'Coverage',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRCoverage',
      ),
      'DataElement' => 
      array (
        'setter' => 'setDataElement',
        'element' => 'DataElement',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDataElement',
      ),
      'DetectedIssue' => 
      array (
        'setter' => 'setDetectedIssue',
        'element' => 'DetectedIssue',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDetectedIssue',
      ),
      'Device' => 
      array (
        'setter' => 'setDevice',
        'element' => 'Device',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDevice',
      ),
      'DeviceComponent' => 
      array (
        'setter' => 'setDeviceComponent',
        'element' => 'DeviceComponent',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDeviceComponent',
      ),
      'DeviceMetric' => 
      array (
        'setter' => 'setDeviceMetric',
        'element' => 'DeviceMetric',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDeviceMetric',
      ),
      'DeviceUseRequest' => 
      array (
        'setter' => 'setDeviceUseRequest',
        'element' => 'DeviceUseRequest',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDeviceUseRequest',
      ),
      'DeviceUseStatement' => 
      array (
        'setter' => 'setDeviceUseStatement',
        'element' => 'DeviceUseStatement',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDeviceUseStatement',
      ),
      'DiagnosticOrder' => 
      array (
        'setter' => 'setDiagnosticOrder',
        'element' => 'DiagnosticOrder',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDiagnosticOrder',
      ),
      'DiagnosticReport' => 
      array (
        'setter' => 'setDiagnosticReport',
        'element' => 'DiagnosticReport',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDiagnosticReport',
      ),
      'DocumentManifest' => 
      array (
        'setter' => 'setDocumentManifest',
        'element' => 'DocumentManifest',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDocumentManifest',
      ),
      'DocumentReference' => 
      array (
        'setter' => 'setDocumentReference',
        'element' => 'DocumentReference',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRDocumentReference',
      ),
      'EligibilityRequest' => 
      array (
        'setter' => 'setEligibilityRequest',
        'element' => 'EligibilityRequest',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIREligibilityRequest',
      ),
      'EligibilityResponse' => 
      array (
        'setter' => 'setEligibilityResponse',
        'element' => 'EligibilityResponse',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIREligibilityResponse',
      ),
      'Encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Encounter',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIREncounter',
      ),
      'EnrollmentRequest' => 
      array (
        'setter' => 'setEnrollmentRequest',
        'element' => 'EnrollmentRequest',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIREnrollmentRequest',
      ),
      'EnrollmentResponse' => 
      array (
        'setter' => 'setEnrollmentResponse',
        'element' => 'EnrollmentResponse',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIREnrollmentResponse',
      ),
      'EpisodeOfCare' => 
      array (
        'setter' => 'setEpisodeOfCare',
        'element' => 'EpisodeOfCare',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIREpisodeOfCare',
      ),
      'ExplanationOfBenefit' => 
      array (
        'setter' => 'setExplanationOfBenefit',
        'element' => 'ExplanationOfBenefit',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRExplanationOfBenefit',
      ),
      'FamilyMemberHistory' => 
      array (
        'setter' => 'setFamilyMemberHistory',
        'element' => 'FamilyMemberHistory',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRFamilyMemberHistory',
      ),
      'Flag' => 
      array (
        'setter' => 'setFlag',
        'element' => 'Flag',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRFlag',
      ),
      'Goal' => 
      array (
        'setter' => 'setGoal',
        'element' => 'Goal',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRGoal',
      ),
      'Group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'Group',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRGroup',
      ),
      'HealthcareService' => 
      array (
        'setter' => 'setHealthcareService',
        'element' => 'HealthcareService',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRHealthcareService',
      ),
      'ImagingObjectSelection' => 
      array (
        'setter' => 'setImagingObjectSelection',
        'element' => 'ImagingObjectSelection',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRImagingObjectSelection',
      ),
      'ImagingStudy' => 
      array (
        'setter' => 'setImagingStudy',
        'element' => 'ImagingStudy',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRImagingStudy',
      ),
      'Immunization' => 
      array (
        'setter' => 'setImmunization',
        'element' => 'Immunization',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRImmunization',
      ),
      'ImmunizationRecommendation' => 
      array (
        'setter' => 'setImmunizationRecommendation',
        'element' => 'ImmunizationRecommendation',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRImmunizationRecommendation',
      ),
      'ImplementationGuide' => 
      array (
        'setter' => 'setImplementationGuide',
        'element' => 'ImplementationGuide',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRImplementationGuide',
      ),
      'List' => 
      array (
        'setter' => 'setList',
        'element' => 'List',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRList',
      ),
      'Location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Location',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRLocation',
      ),
      'Media' => 
      array (
        'setter' => 'setMedia',
        'element' => 'Media',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedia',
      ),
      'Medication' => 
      array (
        'setter' => 'setMedication',
        'element' => 'Medication',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedication',
      ),
      'MedicationAdministration' => 
      array (
        'setter' => 'setMedicationAdministration',
        'element' => 'MedicationAdministration',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedicationAdministration',
      ),
      'MedicationDispense' => 
      array (
        'setter' => 'setMedicationDispense',
        'element' => 'MedicationDispense',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedicationDispense',
      ),
      'MedicationOrder' => 
      array (
        'setter' => 'setMedicationOrder',
        'element' => 'MedicationOrder',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedicationOrder',
      ),
      'MedicationStatement' => 
      array (
        'setter' => 'setMedicationStatement',
        'element' => 'MedicationStatement',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedicationStatement',
      ),
      'MessageHeader' => 
      array (
        'setter' => 'setMessageHeader',
        'element' => 'MessageHeader',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRMessageHeader',
      ),
      'NamingSystem' => 
      array (
        'setter' => 'setNamingSystem',
        'element' => 'NamingSystem',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRNamingSystem',
      ),
      'NutritionOrder' => 
      array (
        'setter' => 'setNutritionOrder',
        'element' => 'NutritionOrder',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRNutritionOrder',
      ),
      'Observation' => 
      array (
        'setter' => 'setObservation',
        'element' => 'Observation',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRObservation',
      ),
      'OperationDefinition' => 
      array (
        'setter' => 'setOperationDefinition',
        'element' => 'OperationDefinition',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIROperationDefinition',
      ),
      'OperationOutcome' => 
      array (
        'setter' => 'setOperationOutcome',
        'element' => 'OperationOutcome',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIROperationOutcome',
      ),
      'Order' => 
      array (
        'setter' => 'setOrder',
        'element' => 'Order',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIROrder',
      ),
      'OrderResponse' => 
      array (
        'setter' => 'setOrderResponse',
        'element' => 'OrderResponse',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIROrderResponse',
      ),
      'Organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Organization',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIROrganization',
      ),
      'Patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Patient',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRPatient',
      ),
      'PaymentNotice' => 
      array (
        'setter' => 'setPaymentNotice',
        'element' => 'PaymentNotice',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRPaymentNotice',
      ),
      'PaymentReconciliation' => 
      array (
        'setter' => 'setPaymentReconciliation',
        'element' => 'PaymentReconciliation',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRPaymentReconciliation',
      ),
      'Person' => 
      array (
        'setter' => 'setPerson',
        'element' => 'Person',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRPerson',
      ),
      'Practitioner' => 
      array (
        'setter' => 'setPractitioner',
        'element' => 'Practitioner',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRPractitioner',
      ),
      'Procedure' => 
      array (
        'setter' => 'setProcedure',
        'element' => 'Procedure',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRProcedure',
      ),
      'ProcedureRequest' => 
      array (
        'setter' => 'setProcedureRequest',
        'element' => 'ProcedureRequest',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRProcedureRequest',
      ),
      'ProcessRequest' => 
      array (
        'setter' => 'setProcessRequest',
        'element' => 'ProcessRequest',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRProcessRequest',
      ),
      'ProcessResponse' => 
      array (
        'setter' => 'setProcessResponse',
        'element' => 'ProcessResponse',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRProcessResponse',
      ),
      'Provenance' => 
      array (
        'setter' => 'setProvenance',
        'element' => 'Provenance',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRProvenance',
      ),
      'Questionnaire' => 
      array (
        'setter' => 'setQuestionnaire',
        'element' => 'Questionnaire',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRQuestionnaire',
      ),
      'QuestionnaireResponse' => 
      array (
        'setter' => 'setQuestionnaireResponse',
        'element' => 'QuestionnaireResponse',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRQuestionnaireResponse',
      ),
      'ReferralRequest' => 
      array (
        'setter' => 'setReferralRequest',
        'element' => 'ReferralRequest',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRReferralRequest',
      ),
      'RelatedPerson' => 
      array (
        'setter' => 'setRelatedPerson',
        'element' => 'RelatedPerson',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRRelatedPerson',
      ),
      'RiskAssessment' => 
      array (
        'setter' => 'setRiskAssessment',
        'element' => 'RiskAssessment',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRRiskAssessment',
      ),
      'Schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRSchedule',
      ),
      'SearchParameter' => 
      array (
        'setter' => 'setSearchParameter',
        'element' => 'SearchParameter',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRSearchParameter',
      ),
      'Slot' => 
      array (
        'setter' => 'setSlot',
        'element' => 'Slot',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRSlot',
      ),
      'Specimen' => 
      array (
        'setter' => 'setSpecimen',
        'element' => 'Specimen',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRSpecimen',
      ),
      'StructureDefinition' => 
      array (
        'setter' => 'setStructureDefinition',
        'element' => 'StructureDefinition',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRStructureDefinition',
      ),
      'Subscription' => 
      array (
        'setter' => 'setSubscription',
        'element' => 'Subscription',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRSubscription',
      ),
      'Substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'Substance',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRSubstance',
      ),
      'SupplyDelivery' => 
      array (
        'setter' => 'setSupplyDelivery',
        'element' => 'SupplyDelivery',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRSupplyDelivery',
      ),
      'SupplyRequest' => 
      array (
        'setter' => 'setSupplyRequest',
        'element' => 'SupplyRequest',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRSupplyRequest',
      ),
      'TestScript' => 
      array (
        'setter' => 'setTestScript',
        'element' => 'TestScript',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRTestScript',
      ),
      'ValueSet' => 
      array (
        'setter' => 'setValueSet',
        'element' => 'ValueSet',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRValueSet',
      ),
      'VisionPrescription' => 
      array (
        'setter' => 'setVisionPrescription',
        'element' => 'VisionPrescription',
        'type' => 'PHPFHIRGenerated\\FHIRDomainResource\\FHIRVisionPrescription',
      ),
      'Parameters' => 
      array (
        'setter' => 'setParameters',
        'element' => 'Parameters',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRParameters',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'valueInteger' => 
      array (
        'setter' => 'setValueInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'valueDecimal' => 
      array (
        'setter' => 'setValueDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'valueBase64Binary' => 
      array (
        'setter' => 'setValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'valueInstant' => 
      array (
        'setter' => 'setValueInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueUri' => 
      array (
        'setter' => 'setValueUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'valueDate' => 
      array (
        'setter' => 'setValueDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'valueCode' => 
      array (
        'setter' => 'setValueCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'valueOid' => 
      array (
        'setter' => 'setValueOid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'valueUuid' => 
      array (
        'setter' => 'setValueUuid',
        'element' => 'uuid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
      ),
      'valueId' => 
      array (
        'setter' => 'setValueId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'valueUnsignedInt' => 
      array (
        'setter' => 'setValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'valuePositiveInt' => 
      array (
        'setter' => 'setValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'valueMarkdown' => 
      array (
        'setter' => 'setValueMarkdown',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'valueAnnotation' => 
      array (
        'setter' => 'setValueAnnotation',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'valueIdentifier' => 
      array (
        'setter' => 'setValueIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueCoding' => 
      array (
        'setter' => 'setValueCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'valuePeriod' => 
      array (
        'setter' => 'setValuePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'valueRatio' => 
      array (
        'setter' => 'setValueRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'valueReference' => 
      array (
        'setter' => 'setValueReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'valueSignature' => 
      array (
        'setter' => 'setValueSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
      'valueHumanName' => 
      array (
        'setter' => 'setValueHumanName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'valueAddress' => 
      array (
        'setter' => 'setValueAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'valueContactPoint' => 
      array (
        'setter' => 'setValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'valueTiming' => 
      array (
        'setter' => 'setValueTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'valueMeta' => 
      array (
        'setter' => 'setValueMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'BackboneElement' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRBackboneElement',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
    ),
  ),
  'Narrative' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'NarrativeStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrativeStatus',
      ),
      'div' => 
      array (
        'setter' => 'setDiv',
        'element' => 'html',
        'type' => 'string',
      ),
    ),
  ),
  'NarrativeStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRNarrativeStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NarrativeStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Element' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement',
    'extendedElementName' => NULL,
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'Period' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'start' => 
      array (
        'setter' => 'setStart',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'Coding' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'userSelected' => 
      array (
        'setter' => 'setUserSelected',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'Range' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRRange',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'low' => 
      array (
        'setter' => 'setLow',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'high' => 
      array (
        'setter' => 'setHigh',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
    ),
  ),
  'Quantity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'QuantityComparator' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuantityComparator',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'QuantityComparator-list',
        'type' => 'string',
      ),
    ),
  ),
  'Attachment' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'data' => 
      array (
        'setter' => 'setData',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'size' => 
      array (
        'setter' => 'setSize',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'hash' => 
      array (
        'setter' => 'setHash',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'creation' => 
      array (
        'setter' => 'setCreation',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'Ratio' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'numerator' => 
      array (
        'setter' => 'setNumerator',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'denominator' => 
      array (
        'setter' => 'setDenominator',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
    ),
  ),
  'Annotation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'authorReference' => 
      array (
        'setter' => 'setAuthorReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'authorString' => 
      array (
        'setter' => 'setAuthorString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'time' => 
      array (
        'setter' => 'setTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'SampledData' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'origin' => 
      array (
        'setter' => 'setOrigin',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'lowerLimit' => 
      array (
        'setter' => 'setLowerLimit',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'upperLimit' => 
      array (
        'setter' => 'setUpperLimit',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'dimensions' => 
      array (
        'setter' => 'setDimensions',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'data' => 
      array (
        'setter' => 'setData',
        'element' => 'SampledDataDataType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledDataDataType',
      ),
    ),
  ),
  'SampledDataDataType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSampledDataDataType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SampledDataDataType-primitive',
        'type' => 'string',
      ),
    ),
  ),
  'Reference' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRReference',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'CodeableConcept' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'coding' => 
      array (
        'setter' => 'addCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Identifier' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'IdentifierUse',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifierUse',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'assigner' => 
      array (
        'setter' => 'setAssigner',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'IdentifierUse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRIdentifierUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'IdentifierUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'Signature' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'when' => 
      array (
        'setter' => 'setWhen',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'whoUri' => 
      array (
        'setter' => 'setWhoUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'whoReference' => 
      array (
        'setter' => 'setWhoReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'blob' => 
      array (
        'setter' => 'setBlob',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
    ),
  ),
  'Age' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRAge',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'Count' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRCount',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'Money' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRMoney',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'Distance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDistance',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'Duration' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDuration',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'SimpleQuantity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRSimpleQuantity',
    'extendedElementName' => 'Quantity',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'comparator' => 
      array (
        'setter' => 'setComparator',
        'element' => 'QuantityComparator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityComparator',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'ElementDefinition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRElementDefinition',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'path' => 
      array (
        'setter' => 'setPath',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'representation' => 
      array (
        'setter' => 'addRepresentation',
        'element' => 'PropertyRepresentation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPropertyRepresentation',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'label' => 
      array (
        'setter' => 'setLabel',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'addCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'slicing' => 
      array (
        'setter' => 'setSlicing',
        'element' => 'ElementDefinition.Slicing',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionSlicing',
      ),
      'short' => 
      array (
        'setter' => 'setShort',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'alias' => 
      array (
        'setter' => 'addAlias',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'min' => 
      array (
        'setter' => 'setMin',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'max' => 
      array (
        'setter' => 'setMax',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'ElementDefinition.Base',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionBase',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'ElementDefinition.Type',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionType',
      ),
      'nameReference' => 
      array (
        'setter' => 'setNameReference',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'defaultValueBoolean' => 
      array (
        'setter' => 'setDefaultValueBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'defaultValueInteger' => 
      array (
        'setter' => 'setDefaultValueInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'defaultValueDecimal' => 
      array (
        'setter' => 'setDefaultValueDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'defaultValueBase64Binary' => 
      array (
        'setter' => 'setDefaultValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'defaultValueInstant' => 
      array (
        'setter' => 'setDefaultValueInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'defaultValueString' => 
      array (
        'setter' => 'setDefaultValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'defaultValueUri' => 
      array (
        'setter' => 'setDefaultValueUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'defaultValueDate' => 
      array (
        'setter' => 'setDefaultValueDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'defaultValueDateTime' => 
      array (
        'setter' => 'setDefaultValueDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'defaultValueTime' => 
      array (
        'setter' => 'setDefaultValueTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'defaultValueCode' => 
      array (
        'setter' => 'setDefaultValueCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'defaultValueOid' => 
      array (
        'setter' => 'setDefaultValueOid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'defaultValueUuid' => 
      array (
        'setter' => 'setDefaultValueUuid',
        'element' => 'uuid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
      ),
      'defaultValueId' => 
      array (
        'setter' => 'setDefaultValueId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'defaultValueUnsignedInt' => 
      array (
        'setter' => 'setDefaultValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'defaultValuePositiveInt' => 
      array (
        'setter' => 'setDefaultValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'defaultValueMarkdown' => 
      array (
        'setter' => 'setDefaultValueMarkdown',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'defaultValueAnnotation' => 
      array (
        'setter' => 'setDefaultValueAnnotation',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'defaultValueAttachment' => 
      array (
        'setter' => 'setDefaultValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'defaultValueIdentifier' => 
      array (
        'setter' => 'setDefaultValueIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'defaultValueCodeableConcept' => 
      array (
        'setter' => 'setDefaultValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'defaultValueCoding' => 
      array (
        'setter' => 'setDefaultValueCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'defaultValueQuantity' => 
      array (
        'setter' => 'setDefaultValueQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'defaultValueRange' => 
      array (
        'setter' => 'setDefaultValueRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'defaultValuePeriod' => 
      array (
        'setter' => 'setDefaultValuePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'defaultValueRatio' => 
      array (
        'setter' => 'setDefaultValueRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'defaultValueReference' => 
      array (
        'setter' => 'setDefaultValueReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'defaultValueSampledData' => 
      array (
        'setter' => 'setDefaultValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'defaultValueSignature' => 
      array (
        'setter' => 'setDefaultValueSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
      'defaultValueHumanName' => 
      array (
        'setter' => 'setDefaultValueHumanName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'defaultValueAddress' => 
      array (
        'setter' => 'setDefaultValueAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'defaultValueContactPoint' => 
      array (
        'setter' => 'setDefaultValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'defaultValueTiming' => 
      array (
        'setter' => 'setDefaultValueTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'defaultValueMeta' => 
      array (
        'setter' => 'setDefaultValueMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'meaningWhenMissing' => 
      array (
        'setter' => 'setMeaningWhenMissing',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'fixedBoolean' => 
      array (
        'setter' => 'setFixedBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'fixedInteger' => 
      array (
        'setter' => 'setFixedInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'fixedDecimal' => 
      array (
        'setter' => 'setFixedDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'fixedBase64Binary' => 
      array (
        'setter' => 'setFixedBase64Binary',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'fixedInstant' => 
      array (
        'setter' => 'setFixedInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'fixedString' => 
      array (
        'setter' => 'setFixedString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'fixedUri' => 
      array (
        'setter' => 'setFixedUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'fixedDate' => 
      array (
        'setter' => 'setFixedDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'fixedDateTime' => 
      array (
        'setter' => 'setFixedDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'fixedTime' => 
      array (
        'setter' => 'setFixedTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'fixedCode' => 
      array (
        'setter' => 'setFixedCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'fixedOid' => 
      array (
        'setter' => 'setFixedOid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'fixedUuid' => 
      array (
        'setter' => 'setFixedUuid',
        'element' => 'uuid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
      ),
      'fixedId' => 
      array (
        'setter' => 'setFixedId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'fixedUnsignedInt' => 
      array (
        'setter' => 'setFixedUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'fixedPositiveInt' => 
      array (
        'setter' => 'setFixedPositiveInt',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'fixedMarkdown' => 
      array (
        'setter' => 'setFixedMarkdown',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'fixedAnnotation' => 
      array (
        'setter' => 'setFixedAnnotation',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'fixedAttachment' => 
      array (
        'setter' => 'setFixedAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'fixedIdentifier' => 
      array (
        'setter' => 'setFixedIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'fixedCodeableConcept' => 
      array (
        'setter' => 'setFixedCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'fixedCoding' => 
      array (
        'setter' => 'setFixedCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'fixedQuantity' => 
      array (
        'setter' => 'setFixedQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'fixedRange' => 
      array (
        'setter' => 'setFixedRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'fixedPeriod' => 
      array (
        'setter' => 'setFixedPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'fixedRatio' => 
      array (
        'setter' => 'setFixedRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'fixedReference' => 
      array (
        'setter' => 'setFixedReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'fixedSampledData' => 
      array (
        'setter' => 'setFixedSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'fixedSignature' => 
      array (
        'setter' => 'setFixedSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
      'fixedHumanName' => 
      array (
        'setter' => 'setFixedHumanName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'fixedAddress' => 
      array (
        'setter' => 'setFixedAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'fixedContactPoint' => 
      array (
        'setter' => 'setFixedContactPoint',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'fixedTiming' => 
      array (
        'setter' => 'setFixedTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'fixedMeta' => 
      array (
        'setter' => 'setFixedMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'patternBoolean' => 
      array (
        'setter' => 'setPatternBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'patternInteger' => 
      array (
        'setter' => 'setPatternInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'patternDecimal' => 
      array (
        'setter' => 'setPatternDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'patternBase64Binary' => 
      array (
        'setter' => 'setPatternBase64Binary',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'patternInstant' => 
      array (
        'setter' => 'setPatternInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'patternString' => 
      array (
        'setter' => 'setPatternString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'patternUri' => 
      array (
        'setter' => 'setPatternUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'patternDate' => 
      array (
        'setter' => 'setPatternDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'patternDateTime' => 
      array (
        'setter' => 'setPatternDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'patternTime' => 
      array (
        'setter' => 'setPatternTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'patternCode' => 
      array (
        'setter' => 'setPatternCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'patternOid' => 
      array (
        'setter' => 'setPatternOid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'patternUuid' => 
      array (
        'setter' => 'setPatternUuid',
        'element' => 'uuid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
      ),
      'patternId' => 
      array (
        'setter' => 'setPatternId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'patternUnsignedInt' => 
      array (
        'setter' => 'setPatternUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'patternPositiveInt' => 
      array (
        'setter' => 'setPatternPositiveInt',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'patternMarkdown' => 
      array (
        'setter' => 'setPatternMarkdown',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'patternAnnotation' => 
      array (
        'setter' => 'setPatternAnnotation',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'patternAttachment' => 
      array (
        'setter' => 'setPatternAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'patternIdentifier' => 
      array (
        'setter' => 'setPatternIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'patternCodeableConcept' => 
      array (
        'setter' => 'setPatternCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patternCoding' => 
      array (
        'setter' => 'setPatternCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'patternQuantity' => 
      array (
        'setter' => 'setPatternQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'patternRange' => 
      array (
        'setter' => 'setPatternRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'patternPeriod' => 
      array (
        'setter' => 'setPatternPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'patternRatio' => 
      array (
        'setter' => 'setPatternRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'patternReference' => 
      array (
        'setter' => 'setPatternReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'patternSampledData' => 
      array (
        'setter' => 'setPatternSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'patternSignature' => 
      array (
        'setter' => 'setPatternSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
      'patternHumanName' => 
      array (
        'setter' => 'setPatternHumanName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'patternAddress' => 
      array (
        'setter' => 'setPatternAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'patternContactPoint' => 
      array (
        'setter' => 'setPatternContactPoint',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'patternTiming' => 
      array (
        'setter' => 'setPatternTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'patternMeta' => 
      array (
        'setter' => 'setPatternMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'exampleBoolean' => 
      array (
        'setter' => 'setExampleBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'exampleInteger' => 
      array (
        'setter' => 'setExampleInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'exampleDecimal' => 
      array (
        'setter' => 'setExampleDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'exampleBase64Binary' => 
      array (
        'setter' => 'setExampleBase64Binary',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'exampleInstant' => 
      array (
        'setter' => 'setExampleInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'exampleString' => 
      array (
        'setter' => 'setExampleString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'exampleUri' => 
      array (
        'setter' => 'setExampleUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'exampleDate' => 
      array (
        'setter' => 'setExampleDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'exampleDateTime' => 
      array (
        'setter' => 'setExampleDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'exampleTime' => 
      array (
        'setter' => 'setExampleTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'exampleCode' => 
      array (
        'setter' => 'setExampleCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'exampleOid' => 
      array (
        'setter' => 'setExampleOid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'exampleUuid' => 
      array (
        'setter' => 'setExampleUuid',
        'element' => 'uuid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
      ),
      'exampleId' => 
      array (
        'setter' => 'setExampleId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'exampleUnsignedInt' => 
      array (
        'setter' => 'setExampleUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'examplePositiveInt' => 
      array (
        'setter' => 'setExamplePositiveInt',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'exampleMarkdown' => 
      array (
        'setter' => 'setExampleMarkdown',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'exampleAnnotation' => 
      array (
        'setter' => 'setExampleAnnotation',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'exampleAttachment' => 
      array (
        'setter' => 'setExampleAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'exampleIdentifier' => 
      array (
        'setter' => 'setExampleIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'exampleCodeableConcept' => 
      array (
        'setter' => 'setExampleCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'exampleCoding' => 
      array (
        'setter' => 'setExampleCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'exampleQuantity' => 
      array (
        'setter' => 'setExampleQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'exampleRange' => 
      array (
        'setter' => 'setExampleRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'examplePeriod' => 
      array (
        'setter' => 'setExamplePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'exampleRatio' => 
      array (
        'setter' => 'setExampleRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'exampleReference' => 
      array (
        'setter' => 'setExampleReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'exampleSampledData' => 
      array (
        'setter' => 'setExampleSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'exampleSignature' => 
      array (
        'setter' => 'setExampleSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
      'exampleHumanName' => 
      array (
        'setter' => 'setExampleHumanName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'exampleAddress' => 
      array (
        'setter' => 'setExampleAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'exampleContactPoint' => 
      array (
        'setter' => 'setExampleContactPoint',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'exampleTiming' => 
      array (
        'setter' => 'setExampleTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'exampleMeta' => 
      array (
        'setter' => 'setExampleMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'minValueBoolean' => 
      array (
        'setter' => 'setMinValueBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'minValueInteger' => 
      array (
        'setter' => 'setMinValueInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'minValueDecimal' => 
      array (
        'setter' => 'setMinValueDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'minValueBase64Binary' => 
      array (
        'setter' => 'setMinValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'minValueInstant' => 
      array (
        'setter' => 'setMinValueInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'minValueString' => 
      array (
        'setter' => 'setMinValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'minValueUri' => 
      array (
        'setter' => 'setMinValueUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'minValueDate' => 
      array (
        'setter' => 'setMinValueDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'minValueDateTime' => 
      array (
        'setter' => 'setMinValueDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'minValueTime' => 
      array (
        'setter' => 'setMinValueTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'minValueCode' => 
      array (
        'setter' => 'setMinValueCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'minValueOid' => 
      array (
        'setter' => 'setMinValueOid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'minValueUuid' => 
      array (
        'setter' => 'setMinValueUuid',
        'element' => 'uuid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
      ),
      'minValueId' => 
      array (
        'setter' => 'setMinValueId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'minValueUnsignedInt' => 
      array (
        'setter' => 'setMinValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'minValuePositiveInt' => 
      array (
        'setter' => 'setMinValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'minValueMarkdown' => 
      array (
        'setter' => 'setMinValueMarkdown',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'minValueAnnotation' => 
      array (
        'setter' => 'setMinValueAnnotation',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'minValueAttachment' => 
      array (
        'setter' => 'setMinValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'minValueIdentifier' => 
      array (
        'setter' => 'setMinValueIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'minValueCodeableConcept' => 
      array (
        'setter' => 'setMinValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'minValueCoding' => 
      array (
        'setter' => 'setMinValueCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'minValueQuantity' => 
      array (
        'setter' => 'setMinValueQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'minValueRange' => 
      array (
        'setter' => 'setMinValueRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'minValuePeriod' => 
      array (
        'setter' => 'setMinValuePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'minValueRatio' => 
      array (
        'setter' => 'setMinValueRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'minValueReference' => 
      array (
        'setter' => 'setMinValueReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'minValueSampledData' => 
      array (
        'setter' => 'setMinValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'minValueSignature' => 
      array (
        'setter' => 'setMinValueSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
      'minValueHumanName' => 
      array (
        'setter' => 'setMinValueHumanName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'minValueAddress' => 
      array (
        'setter' => 'setMinValueAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'minValueContactPoint' => 
      array (
        'setter' => 'setMinValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'minValueTiming' => 
      array (
        'setter' => 'setMinValueTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'minValueMeta' => 
      array (
        'setter' => 'setMinValueMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'maxValueBoolean' => 
      array (
        'setter' => 'setMaxValueBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'maxValueInteger' => 
      array (
        'setter' => 'setMaxValueInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'maxValueDecimal' => 
      array (
        'setter' => 'setMaxValueDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'maxValueBase64Binary' => 
      array (
        'setter' => 'setMaxValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'maxValueInstant' => 
      array (
        'setter' => 'setMaxValueInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'maxValueString' => 
      array (
        'setter' => 'setMaxValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'maxValueUri' => 
      array (
        'setter' => 'setMaxValueUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'maxValueDate' => 
      array (
        'setter' => 'setMaxValueDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'maxValueDateTime' => 
      array (
        'setter' => 'setMaxValueDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'maxValueTime' => 
      array (
        'setter' => 'setMaxValueTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'maxValueCode' => 
      array (
        'setter' => 'setMaxValueCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'maxValueOid' => 
      array (
        'setter' => 'setMaxValueOid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'maxValueUuid' => 
      array (
        'setter' => 'setMaxValueUuid',
        'element' => 'uuid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
      ),
      'maxValueId' => 
      array (
        'setter' => 'setMaxValueId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'maxValueUnsignedInt' => 
      array (
        'setter' => 'setMaxValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'maxValuePositiveInt' => 
      array (
        'setter' => 'setMaxValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'maxValueMarkdown' => 
      array (
        'setter' => 'setMaxValueMarkdown',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'maxValueAnnotation' => 
      array (
        'setter' => 'setMaxValueAnnotation',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'maxValueAttachment' => 
      array (
        'setter' => 'setMaxValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'maxValueIdentifier' => 
      array (
        'setter' => 'setMaxValueIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'maxValueCodeableConcept' => 
      array (
        'setter' => 'setMaxValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'maxValueCoding' => 
      array (
        'setter' => 'setMaxValueCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'maxValueQuantity' => 
      array (
        'setter' => 'setMaxValueQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'maxValueRange' => 
      array (
        'setter' => 'setMaxValueRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'maxValuePeriod' => 
      array (
        'setter' => 'setMaxValuePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'maxValueRatio' => 
      array (
        'setter' => 'setMaxValueRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'maxValueReference' => 
      array (
        'setter' => 'setMaxValueReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'maxValueSampledData' => 
      array (
        'setter' => 'setMaxValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'maxValueSignature' => 
      array (
        'setter' => 'setMaxValueSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
      'maxValueHumanName' => 
      array (
        'setter' => 'setMaxValueHumanName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'maxValueAddress' => 
      array (
        'setter' => 'setMaxValueAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'maxValueContactPoint' => 
      array (
        'setter' => 'setMaxValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'maxValueTiming' => 
      array (
        'setter' => 'setMaxValueTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'maxValueMeta' => 
      array (
        'setter' => 'setMaxValueMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'maxLength' => 
      array (
        'setter' => 'setMaxLength',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'condition' => 
      array (
        'setter' => 'addCondition',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'constraint' => 
      array (
        'setter' => 'addConstraint',
        'element' => 'ElementDefinition.Constraint',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionConstraint',
      ),
      'mustSupport' => 
      array (
        'setter' => 'setMustSupport',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'isModifier' => 
      array (
        'setter' => 'setIsModifier',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'isSummary' => 
      array (
        'setter' => 'setIsSummary',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'binding' => 
      array (
        'setter' => 'setBinding',
        'element' => 'ElementDefinition.Binding',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionBinding',
      ),
      'mapping' => 
      array (
        'setter' => 'addMapping',
        'element' => 'ElementDefinition.Mapping',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionMapping',
      ),
    ),
  ),
  'ElementDefinition.Mapping' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionMapping',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'identity' => 
      array (
        'setter' => 'setIdentity',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'map' => 
      array (
        'setter' => 'setMap',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ElementDefinition.Slicing' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionSlicing',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'discriminator' => 
      array (
        'setter' => 'addDiscriminator',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'ordered' => 
      array (
        'setter' => 'setOrdered',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'rules' => 
      array (
        'setter' => 'setRules',
        'element' => 'SlicingRules',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSlicingRules',
      ),
    ),
  ),
  'ElementDefinition.Binding' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionBinding',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'strength' => 
      array (
        'setter' => 'setStrength',
        'element' => 'BindingStrength',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBindingStrength',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueSetUri' => 
      array (
        'setter' => 'setValueSetUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'valueSetReference' => 
      array (
        'setter' => 'setValueSetReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ElementDefinition.Type' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'addProfile',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'aggregation' => 
      array (
        'setter' => 'addAggregation',
        'element' => 'AggregationMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAggregationMode',
      ),
    ),
  ),
  'ElementDefinition.Base' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionBase',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'path' => 
      array (
        'setter' => 'setPath',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'min' => 
      array (
        'setter' => 'setMin',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'max' => 
      array (
        'setter' => 'setMax',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ElementDefinition.Constraint' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRElementDefinition\\FHIRElementDefinitionConstraint',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'key' => 
      array (
        'setter' => 'setKey',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'ConstraintSeverity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRConstraintSeverity',
      ),
      'human' => 
      array (
        'setter' => 'setHuman',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'xpath' => 
      array (
        'setter' => 'setXpath',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'PropertyRepresentation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRPropertyRepresentation',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'PropertyRepresentation-list',
        'type' => 'string',
      ),
    ),
  ),
  'SlicingRules' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSlicingRules',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SlicingRules-list',
        'type' => 'string',
      ),
    ),
  ),
  'BindingStrength' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRBindingStrength',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'BindingStrength-list',
        'type' => 'string',
      ),
    ),
  ),
  'AggregationMode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAggregationMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AggregationMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConstraintSeverity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConstraintSeverity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConstraintSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'Timing' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'repeat' => 
      array (
        'setter' => 'setRepeat',
        'element' => 'Timing.Repeat',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTiming\\FHIRTimingRepeat',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Timing.Repeat' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTiming\\FHIRTimingRepeat',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'boundsQuantity' => 
      array (
        'setter' => 'setBoundsQuantity',
        'element' => 'Duration',
        'type' => 'PHPFHIRGenerated\\FHIRDuration',
      ),
      'boundsRange' => 
      array (
        'setter' => 'setBoundsRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'boundsPeriod' => 
      array (
        'setter' => 'setBoundsPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'count' => 
      array (
        'setter' => 'setCount',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'duration' => 
      array (
        'setter' => 'setDuration',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'durationMax' => 
      array (
        'setter' => 'setDurationMax',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'durationUnits' => 
      array (
        'setter' => 'setDurationUnits',
        'element' => 'UnitsOfTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnitsOfTime',
      ),
      'frequency' => 
      array (
        'setter' => 'setFrequency',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'frequencyMax' => 
      array (
        'setter' => 'setFrequencyMax',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'periodMax' => 
      array (
        'setter' => 'setPeriodMax',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'periodUnits' => 
      array (
        'setter' => 'setPeriodUnits',
        'element' => 'UnitsOfTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnitsOfTime',
      ),
      'when' => 
      array (
        'setter' => 'setWhen',
        'element' => 'EventTiming',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIREventTiming',
      ),
    ),
  ),
  'UnitsOfTime' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRUnitsOfTime',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'UnitsOfTime-list',
        'type' => 'string',
      ),
    ),
  ),
  'EventTiming' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIREventTiming',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EventTiming-list',
        'type' => 'string',
      ),
    ),
  ),
  'Address' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'AddressUse',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddressUse',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'AddressType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddressType',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'line' => 
      array (
        'setter' => 'addLine',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'city' => 
      array (
        'setter' => 'setCity',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'district' => 
      array (
        'setter' => 'setDistrict',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'state' => 
      array (
        'setter' => 'setState',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'postalCode' => 
      array (
        'setter' => 'setPostalCode',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'country' => 
      array (
        'setter' => 'setCountry',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'AddressUse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAddressUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AddressUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'AddressType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAddressType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AddressType-list',
        'type' => 'string',
      ),
    ),
  ),
  'HumanName' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'NameUse',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNameUse',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'family' => 
      array (
        'setter' => 'addFamily',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'given' => 
      array (
        'setter' => 'addGiven',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'prefix' => 
      array (
        'setter' => 'addPrefix',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'suffix' => 
      array (
        'setter' => 'addSuffix',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'NameUse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRNameUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NameUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'Meta' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'versionId' => 
      array (
        'setter' => 'setVersionId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'lastUpdated' => 
      array (
        'setter' => 'setLastUpdated',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'profile' => 
      array (
        'setter' => 'addProfile',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'security' => 
      array (
        'setter' => 'addSecurity',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'tag' => 
      array (
        'setter' => 'addTag',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'ContactPoint' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'ContactPointSystem',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPointSystem',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'ContactPointUse',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPointUse',
      ),
      'rank' => 
      array (
        'setter' => 'setRank',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'ContactPointSystem' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRContactPointSystem',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ContactPointSystem-list',
        'type' => 'string',
      ),
    ),
  ),
  'ContactPointUse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRContactPointUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ContactPointUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'Resource' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource',
    'extendedElementName' => NULL,
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'DomainResource' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDomainResource',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
    ),
  ),
  'NoteType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRNoteType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NoteType-list',
        'type' => 'string',
      ),
    ),
  ),
  'DocumentReferenceStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDocumentReferenceStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DocumentReferenceStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConceptMapEquivalence' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConceptMapEquivalence',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConceptMapEquivalence-list',
        'type' => 'string',
      ),
    ),
  ),
  'RemittanceOutcome' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRRemittanceOutcome',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'RemittanceOutcome-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConformanceResourceStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConformanceResourceStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConformanceResourceStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AdministrativeGender' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAdministrativeGender',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AdministrativeGender-list',
        'type' => 'string',
      ),
    ),
  ),
  'SearchParamType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSearchParamType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SearchParamType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Account' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRAccount',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'AccountStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAccountStatus',
      ),
      'activePeriod' => 
      array (
        'setter' => 'setActivePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'currency' => 
      array (
        'setter' => 'setCurrency',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'balance' => 
      array (
        'setter' => 'setBalance',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'coveragePeriod' => 
      array (
        'setter' => 'setCoveragePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'owner' => 
      array (
        'setter' => 'setOwner',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'AccountStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAccountStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AccountStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntolerance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRAllergyIntolerance',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'onset' => 
      array (
        'setter' => 'setOnset',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'recordedDate' => 
      array (
        'setter' => 'setRecordedDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'recorder' => 
      array (
        'setter' => 'setRecorder',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reporter' => 
      array (
        'setter' => 'setReporter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'AllergyIntoleranceStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceStatus',
      ),
      'criticality' => 
      array (
        'setter' => 'setCriticality',
        'element' => 'AllergyIntoleranceCriticality',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceCriticality',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'AllergyIntoleranceType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceType',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'AllergyIntoleranceCategory',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceCategory',
      ),
      'lastOccurence' => 
      array (
        'setter' => 'setLastOccurence',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'reaction' => 
      array (
        'setter' => 'addReaction',
        'element' => 'AllergyIntolerance.Reaction',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAllergyIntolerance\\FHIRAllergyIntoleranceReaction',
      ),
    ),
  ),
  'AllergyIntolerance.Reaction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAllergyIntolerance\\FHIRAllergyIntoleranceReaction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'certainty' => 
      array (
        'setter' => 'setCertainty',
        'element' => 'AllergyIntoleranceCertainty',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceCertainty',
      ),
      'manifestation' => 
      array (
        'setter' => 'addManifestation',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'onset' => 
      array (
        'setter' => 'setOnset',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'AllergyIntoleranceSeverity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceSeverity',
      ),
      'exposureRoute' => 
      array (
        'setter' => 'setExposureRoute',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
    ),
  ),
  'AllergyIntoleranceCertainty' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceCertainty',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceCertainty-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceType-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceSeverity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceSeverity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceCriticality' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceCriticality',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceCriticality-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceCategory' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceCategory',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceCategory-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntoleranceStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAllergyIntoleranceStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AllergyIntoleranceStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Appointment' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRAppointment',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'AppointmentStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAppointmentStatus',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'start' => 
      array (
        'setter' => 'setStart',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'minutesDuration' => 
      array (
        'setter' => 'setMinutesDuration',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'slot' => 
      array (
        'setter' => 'addSlot',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'Appointment.Participant',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAppointment\\FHIRAppointmentParticipant',
      ),
    ),
  ),
  'Appointment.Participant' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAppointment\\FHIRAppointmentParticipant',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'required' => 
      array (
        'setter' => 'setRequired',
        'element' => 'ParticipantRequired',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRParticipantRequired',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ParticipationStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRParticipationStatus',
      ),
    ),
  ),
  'ParticipantRequired' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRParticipantRequired',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ParticipantRequired-list',
        'type' => 'string',
      ),
    ),
  ),
  'AppointmentStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAppointmentStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AppointmentStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ParticipationStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRParticipationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ParticipationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AppointmentResponse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRAppointmentResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'appointment' => 
      array (
        'setter' => 'setAppointment',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'start' => 
      array (
        'setter' => 'setStart',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'participantType' => 
      array (
        'setter' => 'addParticipantType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'participantStatus' => 
      array (
        'setter' => 'setParticipantStatus',
        'element' => 'ParticipantStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRParticipantStatus',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ParticipantStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRParticipantStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ParticipantStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AuditEvent' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRAuditEvent',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'event' => 
      array (
        'setter' => 'setEvent',
        'element' => 'AuditEvent.Event',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventEvent',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'AuditEvent.Participant',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventParticipant',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'AuditEvent.Source',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventSource',
      ),
      'object' => 
      array (
        'setter' => 'addObject',
        'element' => 'AuditEvent.Object',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventObject',
      ),
    ),
  ),
  'AuditEvent.Event' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventEvent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'subtype' => 
      array (
        'setter' => 'addSubtype',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'AuditEventAction',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAuditEventAction',
      ),
      'dateTime' => 
      array (
        'setter' => 'setDateTime',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'AuditEventOutcome',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAuditEventOutcome',
      ),
      'outcomeDesc' => 
      array (
        'setter' => 'setOutcomeDesc',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'purposeOfEvent' => 
      array (
        'setter' => 'addPurposeOfEvent',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'AuditEvent.Participant' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventParticipant',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'addRole',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'userId' => 
      array (
        'setter' => 'setUserId',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'altId' => 
      array (
        'setter' => 'setAltId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'requestor' => 
      array (
        'setter' => 'setRequestor',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'policy' => 
      array (
        'setter' => 'addPolicy',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'media' => 
      array (
        'setter' => 'setMedia',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'network' => 
      array (
        'setter' => 'setNetwork',
        'element' => 'AuditEvent.Network',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventNetwork',
      ),
      'purposeOfUse' => 
      array (
        'setter' => 'addPurposeOfUse',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'AuditEvent.Network' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventNetwork',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'AuditEventParticipantNetworkType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAuditEventParticipantNetworkType',
      ),
    ),
  ),
  'AuditEvent.Source' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventSource',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'site' => 
      array (
        'setter' => 'setSite',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'AuditEvent.Object' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventObject',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'lifecycle' => 
      array (
        'setter' => 'setLifecycle',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'securityLabel' => 
      array (
        'setter' => 'addSecurityLabel',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'query' => 
      array (
        'setter' => 'setQuery',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'AuditEvent.Detail',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventDetail',
      ),
    ),
  ),
  'AuditEvent.Detail' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAuditEvent\\FHIRAuditEventDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
    ),
  ),
  'AuditEventAction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAuditEventAction',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AuditEventAction-list',
        'type' => 'string',
      ),
    ),
  ),
  'AuditEventOutcome' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAuditEventOutcome',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AuditEventOutcome-list',
        'type' => 'string',
      ),
    ),
  ),
  'AuditEventParticipantNetworkType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAuditEventParticipantNetworkType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AuditEventParticipantNetworkType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Basic' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRBasic',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
    ),
  ),
  'Binary' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRBinary',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'content' => 
      array (
        'setter' => 'setContent',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
    ),
  ),
  'BodySite' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRBodySite',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'modifier' => 
      array (
        'setter' => 'addModifier',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'image' => 
      array (
        'setter' => 'addImage',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'Bundle' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRBundle',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'BundleType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBundleType',
      ),
      'total' => 
      array (
        'setter' => 'setTotal',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'Bundle.Link',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleLink',
      ),
      'entry' => 
      array (
        'setter' => 'addEntry',
        'element' => 'Bundle.Entry',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleEntry',
      ),
      'signature' => 
      array (
        'setter' => 'setSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
    ),
  ),
  'Bundle.Link' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleLink',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'relation' => 
      array (
        'setter' => 'setRelation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Bundle.Entry' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleEntry',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'Bundle.Link',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleLink',
      ),
      'fullUrl' => 
      array (
        'setter' => 'setFullUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'search' => 
      array (
        'setter' => 'setSearch',
        'element' => 'Bundle.Search',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleSearch',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Bundle.Request',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleRequest',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'Bundle.Response',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleResponse',
      ),
    ),
  ),
  'Bundle.Search' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleSearch',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'SearchEntryMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSearchEntryMode',
      ),
      'score' => 
      array (
        'setter' => 'setScore',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'Bundle.Request' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleRequest',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'HTTPVerb',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHTTPVerb',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'ifNoneMatch' => 
      array (
        'setter' => 'setIfNoneMatch',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'ifModifiedSince' => 
      array (
        'setter' => 'setIfModifiedSince',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'ifMatch' => 
      array (
        'setter' => 'setIfMatch',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'ifNoneExist' => 
      array (
        'setter' => 'setIfNoneExist',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Bundle.Response' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRBundle\\FHIRBundleResponse',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'etag' => 
      array (
        'setter' => 'setEtag',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'lastModified' => 
      array (
        'setter' => 'setLastModified',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
    ),
  ),
  'HTTPVerb' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRHTTPVerb',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'HTTPVerb-list',
        'type' => 'string',
      ),
    ),
  ),
  'SearchEntryMode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSearchEntryMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SearchEntryMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'BundleType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRBundleType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'BundleType-list',
        'type' => 'string',
      ),
    ),
  ),
  'CarePlan' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRCarePlan',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CarePlanStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanStatus',
      ),
      'context' => 
      array (
        'setter' => 'setContext',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'author' => 
      array (
        'setter' => 'addAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'modified' => 
      array (
        'setter' => 'setModified',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'category' => 
      array (
        'setter' => 'addCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'addresses' => 
      array (
        'setter' => 'addAddresses',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'support' => 
      array (
        'setter' => 'addSupport',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'relatedPlan' => 
      array (
        'setter' => 'addRelatedPlan',
        'element' => 'CarePlan.RelatedPlan',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanRelatedPlan',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'CarePlan.Participant',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanParticipant',
      ),
      'goal' => 
      array (
        'setter' => 'addGoal',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'activity' => 
      array (
        'setter' => 'addActivity',
        'element' => 'CarePlan.Activity',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanActivity',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
    ),
  ),
  'CarePlan.RelatedPlan' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanRelatedPlan',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CarePlanRelationship',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanRelationship',
      ),
      'plan' => 
      array (
        'setter' => 'setPlan',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'CarePlan.Participant' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanParticipant',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'member' => 
      array (
        'setter' => 'setMember',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'CarePlan.Activity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanActivity',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'actionResulting' => 
      array (
        'setter' => 'addActionResulting',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'progress' => 
      array (
        'setter' => 'addProgress',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'detail' => 
      array (
        'setter' => 'setDetail',
        'element' => 'CarePlan.Detail',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanDetail',
      ),
    ),
  ),
  'CarePlan.Detail' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonCode' => 
      array (
        'setter' => 'addReasonCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'addReasonReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'goal' => 
      array (
        'setter' => 'addGoal',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CarePlanActivityStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanActivityStatus',
      ),
      'statusReason' => 
      array (
        'setter' => 'setStatusReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'prohibited' => 
      array (
        'setter' => 'setProhibited',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'scheduledTiming' => 
      array (
        'setter' => 'setScheduledTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'scheduledPeriod' => 
      array (
        'setter' => 'setScheduledPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'scheduledString' => 
      array (
        'setter' => 'setScheduledString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'performer' => 
      array (
        'setter' => 'addPerformer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'productCodeableConcept' => 
      array (
        'setter' => 'setProductCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'productReference' => 
      array (
        'setter' => 'setProductReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dailyAmount' => 
      array (
        'setter' => 'setDailyAmount',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'CarePlanStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CarePlanStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'CarePlanRelationship' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanRelationship',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CarePlanRelationship-list',
        'type' => 'string',
      ),
    ),
  ),
  'CarePlanActivityStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanActivityStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CarePlanActivityStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Claim' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRClaim',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'ClaimType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRClaimType',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'Use',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUse',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'fundsReserve' => 
      array (
        'setter' => 'setFundsReserve',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'enterer' => 
      array (
        'setter' => 'setEnterer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'facility' => 
      array (
        'setter' => 'setFacility',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'prescription' => 
      array (
        'setter' => 'setPrescription',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'originalPrescription' => 
      array (
        'setter' => 'setOriginalPrescription',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'payee' => 
      array (
        'setter' => 'setPayee',
        'element' => 'Claim.Payee',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimPayee',
      ),
      'referral' => 
      array (
        'setter' => 'setReferral',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'diagnosis' => 
      array (
        'setter' => 'addDiagnosis',
        'element' => 'Claim.Diagnosis',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimDiagnosis',
      ),
      'condition' => 
      array (
        'setter' => 'addCondition',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'coverage' => 
      array (
        'setter' => 'addCoverage',
        'element' => 'Claim.Coverage',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimCoverage',
      ),
      'exception' => 
      array (
        'setter' => 'addException',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'school' => 
      array (
        'setter' => 'setSchool',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'accident' => 
      array (
        'setter' => 'setAccident',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'accidentType' => 
      array (
        'setter' => 'setAccidentType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'interventionException' => 
      array (
        'setter' => 'addInterventionException',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'Claim.Item',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimItem',
      ),
      'additionalMaterials' => 
      array (
        'setter' => 'addAdditionalMaterials',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'missingTeeth' => 
      array (
        'setter' => 'addMissingTeeth',
        'element' => 'Claim.MissingTeeth',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimMissingTeeth',
      ),
    ),
  ),
  'Claim.Payee' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimPayee',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'person' => 
      array (
        'setter' => 'setPerson',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Claim.Diagnosis' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimDiagnosis',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'diagnosis' => 
      array (
        'setter' => 'setDiagnosis',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Claim.Coverage' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimCoverage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'focal' => 
      array (
        'setter' => 'setFocal',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'coverage' => 
      array (
        'setter' => 'setCoverage',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'businessArrangement' => 
      array (
        'setter' => 'setBusinessArrangement',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'preAuthRef' => 
      array (
        'setter' => 'addPreAuthRef',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'claimResponse' => 
      array (
        'setter' => 'setClaimResponse',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Claim.Item' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'diagnosisLinkId' => 
      array (
        'setter' => 'addDiagnosisLinkId',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'serviceDate' => 
      array (
        'setter' => 'setServiceDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'udi' => 
      array (
        'setter' => 'setUdi',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'subSite' => 
      array (
        'setter' => 'addSubSite',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'modifier' => 
      array (
        'setter' => 'addModifier',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'Claim.Detail',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimDetail',
      ),
      'prosthesis' => 
      array (
        'setter' => 'setProsthesis',
        'element' => 'Claim.Prosthesis',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimProsthesis',
      ),
    ),
  ),
  'Claim.Detail' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'udi' => 
      array (
        'setter' => 'setUdi',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'subDetail' => 
      array (
        'setter' => 'addSubDetail',
        'element' => 'Claim.SubDetail',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimSubDetail',
      ),
    ),
  ),
  'Claim.SubDetail' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimSubDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'udi' => 
      array (
        'setter' => 'setUdi',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Claim.Prosthesis' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimProsthesis',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'initial' => 
      array (
        'setter' => 'setInitial',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'priorDate' => 
      array (
        'setter' => 'setPriorDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'priorMaterial' => 
      array (
        'setter' => 'setPriorMaterial',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Claim.MissingTeeth' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaim\\FHIRClaimMissingTeeth',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'tooth' => 
      array (
        'setter' => 'setTooth',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'extractionDate' => 
      array (
        'setter' => 'setExtractionDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
    ),
  ),
  'ClaimType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRClaimType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ClaimType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Use' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'Use-list',
        'type' => 'string',
      ),
    ),
  ),
  'ClaimResponse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRClaimResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'payeeType' => 
      array (
        'setter' => 'setPayeeType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'ClaimResponse.Item',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseItem',
      ),
      'addItem' => 
      array (
        'setter' => 'addAddItem',
        'element' => 'ClaimResponse.AddItem',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAddItem',
      ),
      'error' => 
      array (
        'setter' => 'addError',
        'element' => 'ClaimResponse.Error',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseError',
      ),
      'totalCost' => 
      array (
        'setter' => 'setTotalCost',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'unallocDeductable' => 
      array (
        'setter' => 'setUnallocDeductable',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'totalBenefit' => 
      array (
        'setter' => 'setTotalBenefit',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'paymentAdjustment' => 
      array (
        'setter' => 'setPaymentAdjustment',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'paymentAdjustmentReason' => 
      array (
        'setter' => 'setPaymentAdjustmentReason',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'paymentDate' => 
      array (
        'setter' => 'setPaymentDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'paymentAmount' => 
      array (
        'setter' => 'setPaymentAmount',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'paymentRef' => 
      array (
        'setter' => 'setPaymentRef',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'reserved' => 
      array (
        'setter' => 'setReserved',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'form' => 
      array (
        'setter' => 'setForm',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'ClaimResponse.Note',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseNote',
      ),
      'coverage' => 
      array (
        'setter' => 'addCoverage',
        'element' => 'ClaimResponse.Coverage',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseCoverage',
      ),
    ),
  ),
  'ClaimResponse.Item' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'noteNumber' => 
      array (
        'setter' => 'addNoteNumber',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'ClaimResponse.Detail',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseDetail',
      ),
    ),
  ),
  'ClaimResponse.Adjudication' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.Detail' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication1',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication1',
      ),
      'subDetail' => 
      array (
        'setter' => 'addSubDetail',
        'element' => 'ClaimResponse.SubDetail',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseSubDetail',
      ),
    ),
  ),
  'ClaimResponse.Adjudication1' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.SubDetail' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseSubDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication2',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication2',
      ),
    ),
  ),
  'ClaimResponse.Adjudication2' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication2',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.AddItem' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAddItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'addSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'fee' => 
      array (
        'setter' => 'setFee',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'noteNumberLinkId' => 
      array (
        'setter' => 'addNoteNumberLinkId',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication3',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication3',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'ClaimResponse.Detail1',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseDetail1',
      ),
    ),
  ),
  'ClaimResponse.Adjudication3' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication3',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.Detail1' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseDetail1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'fee' => 
      array (
        'setter' => 'setFee',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'adjudication' => 
      array (
        'setter' => 'addAdjudication',
        'element' => 'ClaimResponse.Adjudication4',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication4',
      ),
    ),
  ),
  'ClaimResponse.Adjudication4' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseAdjudication4',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'ClaimResponse.Error' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseError',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'detailSequenceLinkId' => 
      array (
        'setter' => 'setDetailSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'subdetailSequenceLinkId' => 
      array (
        'setter' => 'setSubdetailSequenceLinkId',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'ClaimResponse.Note' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseNote',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'number' => 
      array (
        'setter' => 'setNumber',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ClaimResponse.Coverage' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClaimResponse\\FHIRClaimResponseCoverage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'focal' => 
      array (
        'setter' => 'setFocal',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'coverage' => 
      array (
        'setter' => 'setCoverage',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'businessArrangement' => 
      array (
        'setter' => 'setBusinessArrangement',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'preAuthRef' => 
      array (
        'setter' => 'addPreAuthRef',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'claimResponse' => 
      array (
        'setter' => 'setClaimResponse',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'ClinicalImpression' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRClinicalImpression',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'assessor' => 
      array (
        'setter' => 'setAssessor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ClinicalImpressionStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRClinicalImpressionStatus',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'previous' => 
      array (
        'setter' => 'setPrevious',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'problem' => 
      array (
        'setter' => 'addProblem',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'triggerCodeableConcept' => 
      array (
        'setter' => 'setTriggerCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'triggerReference' => 
      array (
        'setter' => 'setTriggerReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'investigations' => 
      array (
        'setter' => 'addInvestigations',
        'element' => 'ClinicalImpression.Investigations',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionInvestigations',
      ),
      'protocol' => 
      array (
        'setter' => 'setProtocol',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'summary' => 
      array (
        'setter' => 'setSummary',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'finding' => 
      array (
        'setter' => 'addFinding',
        'element' => 'ClinicalImpression.Finding',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionFinding',
      ),
      'resolved' => 
      array (
        'setter' => 'addResolved',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'ruledOut' => 
      array (
        'setter' => 'addRuledOut',
        'element' => 'ClinicalImpression.RuledOut',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionRuledOut',
      ),
      'prognosis' => 
      array (
        'setter' => 'setPrognosis',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'plan' => 
      array (
        'setter' => 'addPlan',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ClinicalImpression.Investigations' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionInvestigations',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ClinicalImpression.Finding' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionFinding',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'cause' => 
      array (
        'setter' => 'setCause',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ClinicalImpression.RuledOut' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRClinicalImpression\\FHIRClinicalImpressionRuledOut',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ClinicalImpressionStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRClinicalImpressionStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ClinicalImpressionStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Communication' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRCommunication',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'sender' => 
      array (
        'setter' => 'setSender',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'recipient' => 
      array (
        'setter' => 'addRecipient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'payload' => 
      array (
        'setter' => 'addPayload',
        'element' => 'Communication.Payload',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCommunication\\FHIRCommunicationPayload',
      ),
      'medium' => 
      array (
        'setter' => 'addMedium',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CommunicationStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCommunicationStatus',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'sent' => 
      array (
        'setter' => 'setSent',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'received' => 
      array (
        'setter' => 'setReceived',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestDetail' => 
      array (
        'setter' => 'setRequestDetail',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Communication.Payload' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCommunication\\FHIRCommunicationPayload',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'contentString' => 
      array (
        'setter' => 'setContentString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'CommunicationStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCommunicationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CommunicationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'CommunicationRequest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRCommunicationRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'sender' => 
      array (
        'setter' => 'setSender',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'recipient' => 
      array (
        'setter' => 'addRecipient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'payload' => 
      array (
        'setter' => 'addPayload',
        'element' => 'CommunicationRequest.Payload',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCommunicationRequest\\FHIRCommunicationRequestPayload',
      ),
      'medium' => 
      array (
        'setter' => 'addMedium',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requester' => 
      array (
        'setter' => 'setRequester',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CommunicationRequestStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCommunicationRequestStatus',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'scheduledDateTime' => 
      array (
        'setter' => 'setScheduledDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'scheduledPeriod' => 
      array (
        'setter' => 'setScheduledPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requestedOn' => 
      array (
        'setter' => 'setRequestedOn',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'CommunicationRequest.Payload' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCommunicationRequest\\FHIRCommunicationRequestPayload',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'contentString' => 
      array (
        'setter' => 'setContentString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'CommunicationRequestStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCommunicationRequestStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CommunicationRequestStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Composition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRComposition',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'class' => 
      array (
        'setter' => 'setClass',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CompositionStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCompositionStatus',
      ),
      'confidentiality' => 
      array (
        'setter' => 'setConfidentiality',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'addAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'attester' => 
      array (
        'setter' => 'addAttester',
        'element' => 'Composition.Attester',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionAttester',
      ),
      'custodian' => 
      array (
        'setter' => 'setCustodian',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'Composition.Event',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionEvent',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'section' => 
      array (
        'setter' => 'addSection',
        'element' => 'Composition.Section',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionSection',
      ),
    ),
  ),
  'Composition.Attester' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionAttester',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'mode' => 
      array (
        'setter' => 'addMode',
        'element' => 'CompositionAttestationMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCompositionAttestationMode',
      ),
      'time' => 
      array (
        'setter' => 'setTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'party' => 
      array (
        'setter' => 'setParty',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Composition.Event' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionEvent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'addCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Composition.Section' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionSection',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'orderedBy' => 
      array (
        'setter' => 'setOrderedBy',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'entry' => 
      array (
        'setter' => 'addEntry',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'emptyReason' => 
      array (
        'setter' => 'setEmptyReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'section' => 
      array (
        'setter' => 'addSection',
        'element' => 'Composition.Section',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionSection',
      ),
    ),
  ),
  'CompositionStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCompositionStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CompositionStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'CompositionAttestationMode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCompositionAttestationMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'CompositionAttestationMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConceptMap' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRConceptMap',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ConceptMap.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'sourceUri' => 
      array (
        'setter' => 'setSourceUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'sourceReference' => 
      array (
        'setter' => 'setSourceReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'targetUri' => 
      array (
        'setter' => 'setTargetUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'targetReference' => 
      array (
        'setter' => 'setTargetReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'element' => 
      array (
        'setter' => 'addElement',
        'element' => 'ConceptMap.Element',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapElement',
      ),
    ),
  ),
  'ConceptMap.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'ConceptMap.Element' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapElement',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'codeSystem' => 
      array (
        'setter' => 'setCodeSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'ConceptMap.Target',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapTarget',
      ),
    ),
  ),
  'ConceptMap.Target' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapTarget',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'codeSystem' => 
      array (
        'setter' => 'setCodeSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'equivalence' => 
      array (
        'setter' => 'setEquivalence',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'dependsOn' => 
      array (
        'setter' => 'addDependsOn',
        'element' => 'ConceptMap.DependsOn',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapDependsOn',
      ),
      'product' => 
      array (
        'setter' => 'addProduct',
        'element' => 'ConceptMap.DependsOn',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapDependsOn',
      ),
    ),
  ),
  'ConceptMap.DependsOn' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapDependsOn',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'element' => 
      array (
        'setter' => 'setElement',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'codeSystem' => 
      array (
        'setter' => 'setCodeSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Condition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRCondition',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'asserter' => 
      array (
        'setter' => 'setAsserter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dateRecorded' => 
      array (
        'setter' => 'setDateRecorded',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'clinicalStatus' => 
      array (
        'setter' => 'setClinicalStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'verificationStatus' => 
      array (
        'setter' => 'setVerificationStatus',
        'element' => 'ConditionVerificationStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRConditionVerificationStatus',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'onsetDateTime' => 
      array (
        'setter' => 'setOnsetDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'onsetQuantity' => 
      array (
        'setter' => 'setOnsetQuantity',
        'element' => 'Age',
        'type' => 'PHPFHIRGenerated\\FHIRAge',
      ),
      'onsetPeriod' => 
      array (
        'setter' => 'setOnsetPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'onsetRange' => 
      array (
        'setter' => 'setOnsetRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'onsetString' => 
      array (
        'setter' => 'setOnsetString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'abatementDateTime' => 
      array (
        'setter' => 'setAbatementDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'abatementQuantity' => 
      array (
        'setter' => 'setAbatementQuantity',
        'element' => 'Age',
        'type' => 'PHPFHIRGenerated\\FHIRAge',
      ),
      'abatementBoolean' => 
      array (
        'setter' => 'setAbatementBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'abatementPeriod' => 
      array (
        'setter' => 'setAbatementPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'abatementRange' => 
      array (
        'setter' => 'setAbatementRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'abatementString' => 
      array (
        'setter' => 'setAbatementString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'stage' => 
      array (
        'setter' => 'setStage',
        'element' => 'Condition.Stage',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionStage',
      ),
      'evidence' => 
      array (
        'setter' => 'addEvidence',
        'element' => 'Condition.Evidence',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionEvidence',
      ),
      'bodySite' => 
      array (
        'setter' => 'addBodySite',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Condition.Stage' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionStage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'summary' => 
      array (
        'setter' => 'setSummary',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'assessment' => 
      array (
        'setter' => 'addAssessment',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Condition.Evidence' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionEvidence',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ConditionVerificationStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConditionVerificationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConditionVerificationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConditionDefinition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRConditionDefinition',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ConditionDefinition.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConditionDefinition\\FHIRConditionDefinitionContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'occurance' => 
      array (
        'setter' => 'addOccurance',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'findingSite' => 
      array (
        'setter' => 'addFindingSite',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'morphology' => 
      array (
        'setter' => 'addMorphology',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'causedBy' => 
      array (
        'setter' => 'addCausedBy',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'associated' => 
      array (
        'setter' => 'addAssociated',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ConditionDefinition.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConditionDefinition\\FHIRConditionDefinitionContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'Conformance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRConformance',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'Conformance.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'ConformanceStatementKind',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRConformanceStatementKind',
      ),
      'software' => 
      array (
        'setter' => 'setSoftware',
        'element' => 'Conformance.Software',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSoftware',
      ),
      'implementation' => 
      array (
        'setter' => 'setImplementation',
        'element' => 'Conformance.Implementation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceImplementation',
      ),
      'fhirVersion' => 
      array (
        'setter' => 'setFhirVersion',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'acceptUnknown' => 
      array (
        'setter' => 'setAcceptUnknown',
        'element' => 'UnknownContentCode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnknownContentCode',
      ),
      'format' => 
      array (
        'setter' => 'addFormat',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'addProfile',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'rest' => 
      array (
        'setter' => 'addRest',
        'element' => 'Conformance.Rest',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceRest',
      ),
      'messaging' => 
      array (
        'setter' => 'addMessaging',
        'element' => 'Conformance.Messaging',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceMessaging',
      ),
      'document' => 
      array (
        'setter' => 'addDocument',
        'element' => 'Conformance.Document',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceDocument',
      ),
    ),
  ),
  'Conformance.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'Conformance.Software' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSoftware',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'releaseDate' => 
      array (
        'setter' => 'setReleaseDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'Conformance.Implementation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceImplementation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Conformance.Rest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceRest',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'RestfulConformanceMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRestfulConformanceMode',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'security' => 
      array (
        'setter' => 'setSecurity',
        'element' => 'Conformance.Security',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSecurity',
      ),
      'resource' => 
      array (
        'setter' => 'addResource',
        'element' => 'Conformance.Resource',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceResource',
      ),
      'interaction' => 
      array (
        'setter' => 'addInteraction',
        'element' => 'Conformance.Interaction1',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceInteraction1',
      ),
      'transactionMode' => 
      array (
        'setter' => 'setTransactionMode',
        'element' => 'TransactionMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTransactionMode',
      ),
      'searchParam' => 
      array (
        'setter' => 'addSearchParam',
        'element' => 'Conformance.SearchParam',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSearchParam',
      ),
      'operation' => 
      array (
        'setter' => 'addOperation',
        'element' => 'Conformance.Operation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceOperation',
      ),
      'compartment' => 
      array (
        'setter' => 'addCompartment',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Conformance.Security' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSecurity',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'cors' => 
      array (
        'setter' => 'setCors',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'service' => 
      array (
        'setter' => 'addService',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'certificate' => 
      array (
        'setter' => 'addCertificate',
        'element' => 'Conformance.Certificate',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceCertificate',
      ),
    ),
  ),
  'Conformance.Certificate' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceCertificate',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'blob' => 
      array (
        'setter' => 'setBlob',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
    ),
  ),
  'Conformance.Resource' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceResource',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'setProfile',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'interaction' => 
      array (
        'setter' => 'addInteraction',
        'element' => 'Conformance.Interaction',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceInteraction',
      ),
      'versioning' => 
      array (
        'setter' => 'setVersioning',
        'element' => 'ResourceVersionPolicy',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceVersionPolicy',
      ),
      'readHistory' => 
      array (
        'setter' => 'setReadHistory',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'updateCreate' => 
      array (
        'setter' => 'setUpdateCreate',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'conditionalCreate' => 
      array (
        'setter' => 'setConditionalCreate',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'conditionalUpdate' => 
      array (
        'setter' => 'setConditionalUpdate',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'conditionalDelete' => 
      array (
        'setter' => 'setConditionalDelete',
        'element' => 'ConditionalDeleteStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRConditionalDeleteStatus',
      ),
      'searchInclude' => 
      array (
        'setter' => 'addSearchInclude',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'searchRevInclude' => 
      array (
        'setter' => 'addSearchRevInclude',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'searchParam' => 
      array (
        'setter' => 'addSearchParam',
        'element' => 'Conformance.SearchParam',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSearchParam',
      ),
    ),
  ),
  'Conformance.Interaction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceInteraction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'TypeRestfulInteraction',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTypeRestfulInteraction',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.SearchParam' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSearchParam',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'modifier' => 
      array (
        'setter' => 'addModifier',
        'element' => 'SearchModifierCode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSearchModifierCode',
      ),
      'chain' => 
      array (
        'setter' => 'addChain',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.Interaction1' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceInteraction1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'SystemRestfulInteraction',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSystemRestfulInteraction',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.Operation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceOperation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Conformance.Messaging' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceMessaging',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'endpoint' => 
      array (
        'setter' => 'addEndpoint',
        'element' => 'Conformance.Endpoint',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceEndpoint',
      ),
      'reliableCache' => 
      array (
        'setter' => 'setReliableCache',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'Conformance.Event',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceEvent',
      ),
    ),
  ),
  'Conformance.Endpoint' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceEndpoint',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'protocol' => 
      array (
        'setter' => 'setProtocol',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Conformance.Event' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceEvent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'MessageSignificanceCategory',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMessageSignificanceCategory',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'ConformanceEventMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRConformanceEventMode',
      ),
      'focus' => 
      array (
        'setter' => 'setFocus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.Document' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceDocument',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'DocumentMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDocumentMode',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'profile' => 
      array (
        'setter' => 'setProfile',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DocumentMode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDocumentMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DocumentMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'SystemRestfulInteraction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSystemRestfulInteraction',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SystemRestfulInteraction-list',
        'type' => 'string',
      ),
    ),
  ),
  'ResourceVersionPolicy' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRResourceVersionPolicy',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ResourceVersionPolicy-list',
        'type' => 'string',
      ),
    ),
  ),
  'RestfulConformanceMode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRRestfulConformanceMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'RestfulConformanceMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'TypeRestfulInteraction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRTypeRestfulInteraction',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'TypeRestfulInteraction-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConditionalDeleteStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConditionalDeleteStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConditionalDeleteStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConformanceStatementKind' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConformanceStatementKind',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConformanceStatementKind-list',
        'type' => 'string',
      ),
    ),
  ),
  'SearchModifierCode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSearchModifierCode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SearchModifierCode-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConformanceEventMode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConformanceEventMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ConformanceEventMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'MessageSignificanceCategory' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMessageSignificanceCategory',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MessageSignificanceCategory-list',
        'type' => 'string',
      ),
    ),
  ),
  'UnknownContentCode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRUnknownContentCode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'UnknownContentCode-list',
        'type' => 'string',
      ),
    ),
  ),
  'TransactionMode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRTransactionMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'TransactionMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'Contract' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRContract',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'applies' => 
      array (
        'setter' => 'setApplies',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'subject' => 
      array (
        'setter' => 'addSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'authority' => 
      array (
        'setter' => 'addAuthority',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'domain' => 
      array (
        'setter' => 'addDomain',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subType' => 
      array (
        'setter' => 'addSubType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actionReason' => 
      array (
        'setter' => 'addActionReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'addActor',
        'element' => 'Contract.Actor',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractActor',
      ),
      'valuedItem' => 
      array (
        'setter' => 'addValuedItem',
        'element' => 'Contract.ValuedItem',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractValuedItem',
      ),
      'signer' => 
      array (
        'setter' => 'addSigner',
        'element' => 'Contract.Signer',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractSigner',
      ),
      'term' => 
      array (
        'setter' => 'addTerm',
        'element' => 'Contract.Term',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractTerm',
      ),
      'bindingAttachment' => 
      array (
        'setter' => 'setBindingAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'bindingReference' => 
      array (
        'setter' => 'setBindingReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'friendly' => 
      array (
        'setter' => 'addFriendly',
        'element' => 'Contract.Friendly',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractFriendly',
      ),
      'legal' => 
      array (
        'setter' => 'addLegal',
        'element' => 'Contract.Legal',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractLegal',
      ),
      'rule' => 
      array (
        'setter' => 'addRule',
        'element' => 'Contract.Rule',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractRule',
      ),
    ),
  ),
  'Contract.Actor' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractActor',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'entity' => 
      array (
        'setter' => 'setEntity',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'role' => 
      array (
        'setter' => 'addRole',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Contract.ValuedItem' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractValuedItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'entityCodeableConcept' => 
      array (
        'setter' => 'setEntityCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'entityReference' => 
      array (
        'setter' => 'setEntityReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'effectiveTime' => 
      array (
        'setter' => 'setEffectiveTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
    ),
  ),
  'Contract.Signer' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractSigner',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'party' => 
      array (
        'setter' => 'setParty',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'signature' => 
      array (
        'setter' => 'setSignature',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Contract.Term' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractTerm',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'applies' => 
      array (
        'setter' => 'setApplies',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subType' => 
      array (
        'setter' => 'setSubType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actionReason' => 
      array (
        'setter' => 'addActionReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'addActor',
        'element' => 'Contract.Actor1',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractActor1',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valuedItem' => 
      array (
        'setter' => 'addValuedItem',
        'element' => 'Contract.ValuedItem1',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractValuedItem1',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'Contract.Term',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractTerm',
      ),
    ),
  ),
  'Contract.Actor1' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractActor1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'entity' => 
      array (
        'setter' => 'setEntity',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'role' => 
      array (
        'setter' => 'addRole',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Contract.ValuedItem1' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractValuedItem1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'entityCodeableConcept' => 
      array (
        'setter' => 'setEntityCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'entityReference' => 
      array (
        'setter' => 'setEntityReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'effectiveTime' => 
      array (
        'setter' => 'setEffectiveTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'unitPrice' => 
      array (
        'setter' => 'setUnitPrice',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'factor' => 
      array (
        'setter' => 'setFactor',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'points' => 
      array (
        'setter' => 'setPoints',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'net' => 
      array (
        'setter' => 'setNet',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
    ),
  ),
  'Contract.Friendly' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractFriendly',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Contract.Legal' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractLegal',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Contract.Rule' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContract\\FHIRContractRule',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'contentAttachment' => 
      array (
        'setter' => 'setContentAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'contentReference' => 
      array (
        'setter' => 'setContentReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Contraindication' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRContraindication',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'ContraindicationSeverity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContraindicationSeverity',
      ),
      'implicated' => 
      array (
        'setter' => 'addImplicated',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'detail' => 
      array (
        'setter' => 'setDetail',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'mitigation' => 
      array (
        'setter' => 'addMitigation',
        'element' => 'Contraindication.Mitigation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRContraindication\\FHIRContraindicationMitigation',
      ),
    ),
  ),
  'Contraindication.Mitigation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRContraindication\\FHIRContraindicationMitigation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ContraindicationSeverity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRContraindicationSeverity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ContraindicationSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'Coverage' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRCoverage',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'issuer' => 
      array (
        'setter' => 'setIssuer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'bin' => 
      array (
        'setter' => 'setBin',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'subscriberId' => 
      array (
        'setter' => 'setSubscriberId',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'plan' => 
      array (
        'setter' => 'setPlan',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'subPlan' => 
      array (
        'setter' => 'setSubPlan',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'dependent' => 
      array (
        'setter' => 'setDependent',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'sequence' => 
      array (
        'setter' => 'setSequence',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'subscriber' => 
      array (
        'setter' => 'setSubscriber',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'network' => 
      array (
        'setter' => 'setNetwork',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'contract' => 
      array (
        'setter' => 'addContract',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DataElement' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDataElement',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'DataElement.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDataElement\\FHIRDataElementContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'stringency' => 
      array (
        'setter' => 'setStringency',
        'element' => 'DataElementStringency',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDataElementStringency',
      ),
      'mapping' => 
      array (
        'setter' => 'addMapping',
        'element' => 'DataElement.Mapping',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDataElement\\FHIRDataElementMapping',
      ),
      'element' => 
      array (
        'setter' => 'addElement',
        'element' => 'ElementDefinition',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRElementDefinition',
      ),
    ),
  ),
  'DataElement.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDataElement\\FHIRDataElementContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'DataElement.Mapping' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDataElement\\FHIRDataElementMapping',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identity' => 
      array (
        'setter' => 'setIdentity',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'uri' => 
      array (
        'setter' => 'setUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'DataElementStringency' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDataElementStringency',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DataElementStringency-list',
        'type' => 'string',
      ),
    ),
  ),
  'DetectedIssue' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDetectedIssue',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'DetectedIssueSeverity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDetectedIssueSeverity',
      ),
      'implicated' => 
      array (
        'setter' => 'addImplicated',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'detail' => 
      array (
        'setter' => 'setDetail',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'mitigation' => 
      array (
        'setter' => 'addMitigation',
        'element' => 'DetectedIssue.Mitigation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDetectedIssue\\FHIRDetectedIssueMitigation',
      ),
    ),
  ),
  'DetectedIssue.Mitigation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDetectedIssue\\FHIRDetectedIssueMitigation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DetectedIssueSeverity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDetectedIssueSeverity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DetectedIssueSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'Device' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDevice',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DeviceStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDeviceStatus',
      ),
      'manufacturer' => 
      array (
        'setter' => 'setManufacturer',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'model' => 
      array (
        'setter' => 'setModel',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'manufactureDate' => 
      array (
        'setter' => 'setManufactureDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'expiry' => 
      array (
        'setter' => 'setExpiry',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'udi' => 
      array (
        'setter' => 'setUdi',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'lotNumber' => 
      array (
        'setter' => 'setLotNumber',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'owner' => 
      array (
        'setter' => 'setOwner',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'DeviceStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDeviceStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceComponent' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDeviceComponent',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'lastSystemChange' => 
      array (
        'setter' => 'setLastSystemChange',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'parent' => 
      array (
        'setter' => 'setParent',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'operationalStatus' => 
      array (
        'setter' => 'addOperationalStatus',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'parameterGroup' => 
      array (
        'setter' => 'setParameterGroup',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'measurementPrinciple' => 
      array (
        'setter' => 'setMeasurementPrinciple',
        'element' => 'Measmnt-Principle',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeasmnt_Principle',
      ),
      'productionSpecification' => 
      array (
        'setter' => 'addProductionSpecification',
        'element' => 'DeviceComponent.ProductionSpecification',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceComponent\\FHIRDeviceComponentProductionSpecification',
      ),
      'languageCode' => 
      array (
        'setter' => 'setLanguageCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'DeviceComponent.ProductionSpecification' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDeviceComponent\\FHIRDeviceComponentProductionSpecification',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'specType' => 
      array (
        'setter' => 'setSpecType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'componentId' => 
      array (
        'setter' => 'setComponentId',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'productionSpec' => 
      array (
        'setter' => 'setProductionSpec',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Measmnt-Principle' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMeasmnt_Principle',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'Measmnt-Principle-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceMetric' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDeviceMetric',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'unit' => 
      array (
        'setter' => 'setUnit',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'parent' => 
      array (
        'setter' => 'setParent',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'operationalStatus' => 
      array (
        'setter' => 'setOperationalStatus',
        'element' => 'DeviceMetricOperationalStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricOperationalStatus',
      ),
      'color' => 
      array (
        'setter' => 'setColor',
        'element' => 'DeviceMetricColor',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricColor',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'DeviceMetricCategory',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricCategory',
      ),
      'measurementPeriod' => 
      array (
        'setter' => 'setMeasurementPeriod',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'calibration' => 
      array (
        'setter' => 'addCalibration',
        'element' => 'DeviceMetric.Calibration',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceMetric\\FHIRDeviceMetricCalibration',
      ),
    ),
  ),
  'DeviceMetric.Calibration' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDeviceMetric\\FHIRDeviceMetricCalibration',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'DeviceMetricCalibrationType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricCalibrationType',
      ),
      'state' => 
      array (
        'setter' => 'setState',
        'element' => 'DeviceMetricCalibrationState',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricCalibrationState',
      ),
      'time' => 
      array (
        'setter' => 'setTime',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
    ),
  ),
  'DeviceMetricColor' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricColor',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricColor-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceMetricCalibrationState' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricCalibrationState',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricCalibrationState-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceMetricCalibrationType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricCalibrationType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricCalibrationType-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceMetricCategory' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricCategory',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricCategory-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceMetricOperationalStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDeviceMetricOperationalStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceMetricOperationalStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceUseRequest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDeviceUseRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'bodySiteCodeableConcept' => 
      array (
        'setter' => 'setBodySiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySiteReference' => 
      array (
        'setter' => 'setBodySiteReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DeviceUseRequestStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDeviceUseRequestStatus',
      ),
      'device' => 
      array (
        'setter' => 'setDevice',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'indication' => 
      array (
        'setter' => 'addIndication',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'prnReason' => 
      array (
        'setter' => 'addPrnReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'orderedOn' => 
      array (
        'setter' => 'setOrderedOn',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'recordedOn' => 
      array (
        'setter' => 'setRecordedOn',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'timingTiming' => 
      array (
        'setter' => 'setTimingTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'timingPeriod' => 
      array (
        'setter' => 'setTimingPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'timingDateTime' => 
      array (
        'setter' => 'setTimingDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'DeviceUseRequestPriority',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDeviceUseRequestPriority',
      ),
    ),
  ),
  'DeviceUseRequestStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDeviceUseRequestStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceUseRequestStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceUseRequestPriority' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDeviceUseRequestPriority',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DeviceUseRequestPriority-list',
        'type' => 'string',
      ),
    ),
  ),
  'DeviceUseStatement' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDeviceUseStatement',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'bodySiteCodeableConcept' => 
      array (
        'setter' => 'setBodySiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySiteReference' => 
      array (
        'setter' => 'setBodySiteReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'whenUsed' => 
      array (
        'setter' => 'setWhenUsed',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'device' => 
      array (
        'setter' => 'setDevice',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'indication' => 
      array (
        'setter' => 'addIndication',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'recordedOn' => 
      array (
        'setter' => 'setRecordedOn',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'timingTiming' => 
      array (
        'setter' => 'setTimingTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'timingPeriod' => 
      array (
        'setter' => 'setTimingPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'timingDateTime' => 
      array (
        'setter' => 'setTimingDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'DiagnosticOrder' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDiagnosticOrder',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'orderer' => 
      array (
        'setter' => 'setOrderer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'supportingInformation' => 
      array (
        'setter' => 'addSupportingInformation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'specimen' => 
      array (
        'setter' => 'addSpecimen',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DiagnosticOrderStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticOrderStatus',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'DiagnosticOrderPriority',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticOrderPriority',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'DiagnosticOrder.Event',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderEvent',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'DiagnosticOrder.Item',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderItem',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
    ),
  ),
  'DiagnosticOrder.Event' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderEvent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DiagnosticOrderStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticOrderStatus',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dateTime' => 
      array (
        'setter' => 'setDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DiagnosticOrder.Item' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specimen' => 
      array (
        'setter' => 'addSpecimen',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DiagnosticOrderStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticOrderStatus',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'DiagnosticOrder.Event',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder\\FHIRDiagnosticOrderEvent',
      ),
    ),
  ),
  'DiagnosticOrderStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticOrderStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DiagnosticOrderStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'DiagnosticOrderPriority' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticOrderPriority',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DiagnosticOrderPriority-list',
        'type' => 'string',
      ),
    ),
  ),
  'DiagnosticReport' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDiagnosticReport',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DiagnosticReportStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticReportStatus',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'effectiveDateTime' => 
      array (
        'setter' => 'setEffectiveDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'effectivePeriod' => 
      array (
        'setter' => 'setEffectivePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'performer' => 
      array (
        'setter' => 'setPerformer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'request' => 
      array (
        'setter' => 'addRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'specimen' => 
      array (
        'setter' => 'addSpecimen',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'result' => 
      array (
        'setter' => 'addResult',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'imagingStudy' => 
      array (
        'setter' => 'addImagingStudy',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'image' => 
      array (
        'setter' => 'addImage',
        'element' => 'DiagnosticReport.Image',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticReport\\FHIRDiagnosticReportImage',
      ),
      'conclusion' => 
      array (
        'setter' => 'setConclusion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'codedDiagnosis' => 
      array (
        'setter' => 'addCodedDiagnosis',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'presentedForm' => 
      array (
        'setter' => 'addPresentedForm',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'DiagnosticReport.Image' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticReport\\FHIRDiagnosticReportImage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'link' => 
      array (
        'setter' => 'setLink',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DiagnosticReportStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticReportStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DiagnosticReportStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'DocumentManifest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDocumentManifest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'masterIdentifier' => 
      array (
        'setter' => 'setMasterIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'recipient' => 
      array (
        'setter' => 'addRecipient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'author' => 
      array (
        'setter' => 'addAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'content' => 
      array (
        'setter' => 'addContent',
        'element' => 'DocumentManifest.Content',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentManifest\\FHIRDocumentManifestContent',
      ),
      'related' => 
      array (
        'setter' => 'addRelated',
        'element' => 'DocumentManifest.Related',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentManifest\\FHIRDocumentManifestRelated',
      ),
    ),
  ),
  'DocumentManifest.Content' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentManifest\\FHIRDocumentManifestContent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'pAttachment' => 
      array (
        'setter' => 'setPAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'pReference' => 
      array (
        'setter' => 'setPReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DocumentManifest.Related' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentManifest\\FHIRDocumentManifestRelated',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'ref' => 
      array (
        'setter' => 'setRef',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DocumentReference' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRDocumentReference',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'masterIdentifier' => 
      array (
        'setter' => 'setMasterIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'class' => 
      array (
        'setter' => 'setClass',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'author' => 
      array (
        'setter' => 'addAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'custodian' => 
      array (
        'setter' => 'setCustodian',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'authenticator' => 
      array (
        'setter' => 'setAuthenticator',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'indexed' => 
      array (
        'setter' => 'setIndexed',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'docStatus' => 
      array (
        'setter' => 'setDocStatus',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'relatesTo' => 
      array (
        'setter' => 'addRelatesTo',
        'element' => 'DocumentReference.RelatesTo',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceRelatesTo',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'securityLabel' => 
      array (
        'setter' => 'addSecurityLabel',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'content' => 
      array (
        'setter' => 'addContent',
        'element' => 'DocumentReference.Content',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceContent',
      ),
      'context' => 
      array (
        'setter' => 'setContext',
        'element' => 'DocumentReference.Context',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceContext',
      ),
    ),
  ),
  'DocumentReference.RelatesTo' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceRelatesTo',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'DocumentRelationshipType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDocumentRelationshipType',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DocumentReference.Content' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceContent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'attachment' => 
      array (
        'setter' => 'setAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'format' => 
      array (
        'setter' => 'addFormat',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'DocumentReference.Context' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceContext',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'event' => 
      array (
        'setter' => 'addEvent',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'facilityType' => 
      array (
        'setter' => 'setFacilityType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'practiceSetting' => 
      array (
        'setter' => 'setPracticeSetting',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'sourcePatientInfo' => 
      array (
        'setter' => 'setSourcePatientInfo',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'related' => 
      array (
        'setter' => 'addRelated',
        'element' => 'DocumentReference.Related',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceRelated',
      ),
    ),
  ),
  'DocumentReference.Related' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceRelated',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'ref' => 
      array (
        'setter' => 'setRef',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'DocumentRelationshipType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDocumentRelationshipType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DocumentRelationshipType-list',
        'type' => 'string',
      ),
    ),
  ),
  'EligibilityRequest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIREligibilityRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'EligibilityResponse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIREligibilityResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Encounter' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIREncounter',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EncounterState',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIREncounterState',
      ),
      'statusHistory' => 
      array (
        'setter' => 'addStatusHistory',
        'element' => 'Encounter.StatusHistory',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterStatusHistory',
      ),
      'class' => 
      array (
        'setter' => 'setClass',
        'element' => 'EncounterClass',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIREncounterClass',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'episodeOfCare' => 
      array (
        'setter' => 'addEpisodeOfCare',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'incomingReferral' => 
      array (
        'setter' => 'addIncomingReferral',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'Encounter.Participant',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterParticipant',
      ),
      'appointment' => 
      array (
        'setter' => 'setAppointment',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'length' => 
      array (
        'setter' => 'setLength',
        'element' => 'Duration',
        'type' => 'PHPFHIRGenerated\\FHIRDuration',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'indication' => 
      array (
        'setter' => 'addIndication',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'hospitalization' => 
      array (
        'setter' => 'setHospitalization',
        'element' => 'Encounter.Hospitalization',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterHospitalization',
      ),
      'location' => 
      array (
        'setter' => 'addLocation',
        'element' => 'Encounter.Location',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterLocation',
      ),
      'serviceProvider' => 
      array (
        'setter' => 'setServiceProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'partOf' => 
      array (
        'setter' => 'setPartOf',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Encounter.StatusHistory' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterStatusHistory',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EncounterState',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIREncounterState',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'Encounter.Participant' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterParticipant',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'individual' => 
      array (
        'setter' => 'setIndividual',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Encounter.Hospitalization' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterHospitalization',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'preAdmissionIdentifier' => 
      array (
        'setter' => 'setPreAdmissionIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'origin' => 
      array (
        'setter' => 'setOrigin',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'admitSource' => 
      array (
        'setter' => 'setAdmitSource',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'admittingDiagnosis' => 
      array (
        'setter' => 'addAdmittingDiagnosis',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reAdmission' => 
      array (
        'setter' => 'setReAdmission',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dietPreference' => 
      array (
        'setter' => 'addDietPreference',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialCourtesy' => 
      array (
        'setter' => 'addSpecialCourtesy',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialArrangement' => 
      array (
        'setter' => 'addSpecialArrangement',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dischargeDisposition' => 
      array (
        'setter' => 'setDischargeDisposition',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dischargeDiagnosis' => 
      array (
        'setter' => 'addDischargeDiagnosis',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Encounter.Location' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterLocation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EncounterLocationStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIREncounterLocationStatus',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'EncounterLocationStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIREncounterLocationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EncounterLocationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'EncounterClass' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIREncounterClass',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EncounterClass-list',
        'type' => 'string',
      ),
    ),
  ),
  'EncounterState' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIREncounterState',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EncounterState-list',
        'type' => 'string',
      ),
    ),
  ),
  'EnrollmentRequest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIREnrollmentRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'coverage' => 
      array (
        'setter' => 'setCoverage',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'EnrollmentResponse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIREnrollmentResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'EpisodeOfCare' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIREpisodeOfCare',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EpisodeOfCareStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIREpisodeOfCareStatus',
      ),
      'statusHistory' => 
      array (
        'setter' => 'addStatusHistory',
        'element' => 'EpisodeOfCare.StatusHistory',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIREpisodeOfCare\\FHIREpisodeOfCareStatusHistory',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'condition' => 
      array (
        'setter' => 'addCondition',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'referralRequest' => 
      array (
        'setter' => 'addReferralRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'careManager' => 
      array (
        'setter' => 'setCareManager',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'careTeam' => 
      array (
        'setter' => 'addCareTeam',
        'element' => 'EpisodeOfCare.CareTeam',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIREpisodeOfCare\\FHIREpisodeOfCareCareTeam',
      ),
    ),
  ),
  'EpisodeOfCare.StatusHistory' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIREpisodeOfCare\\FHIREpisodeOfCareStatusHistory',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'EpisodeOfCareStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIREpisodeOfCareStatus',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'EpisodeOfCare.CareTeam' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIREpisodeOfCare\\FHIREpisodeOfCareCareTeam',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'addRole',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'member' => 
      array (
        'setter' => 'setMember',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'EpisodeOfCareStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIREpisodeOfCareStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'EpisodeOfCareStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ExplanationOfBenefit' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRExplanationOfBenefit',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'FamilyMemberHistory' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRFamilyMemberHistory',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'FamilyHistoryStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRFamilyHistoryStatus',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'bornPeriod' => 
      array (
        'setter' => 'setBornPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'bornDate' => 
      array (
        'setter' => 'setBornDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'bornString' => 
      array (
        'setter' => 'setBornString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'ageQuantity' => 
      array (
        'setter' => 'setAgeQuantity',
        'element' => 'Age',
        'type' => 'PHPFHIRGenerated\\FHIRAge',
      ),
      'ageRange' => 
      array (
        'setter' => 'setAgeRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'ageString' => 
      array (
        'setter' => 'setAgeString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'deceasedBoolean' => 
      array (
        'setter' => 'setDeceasedBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'deceasedQuantity' => 
      array (
        'setter' => 'setDeceasedQuantity',
        'element' => 'Age',
        'type' => 'PHPFHIRGenerated\\FHIRAge',
      ),
      'deceasedRange' => 
      array (
        'setter' => 'setDeceasedRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'deceasedDate' => 
      array (
        'setter' => 'setDeceasedDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'deceasedString' => 
      array (
        'setter' => 'setDeceasedString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'condition' => 
      array (
        'setter' => 'addCondition',
        'element' => 'FamilyMemberHistory.Condition',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRFamilyMemberHistory\\FHIRFamilyMemberHistoryCondition',
      ),
    ),
  ),
  'FamilyMemberHistory.Condition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRFamilyMemberHistory\\FHIRFamilyMemberHistoryCondition',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'onsetQuantity' => 
      array (
        'setter' => 'setOnsetQuantity',
        'element' => 'Age',
        'type' => 'PHPFHIRGenerated\\FHIRAge',
      ),
      'onsetRange' => 
      array (
        'setter' => 'setOnsetRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'onsetPeriod' => 
      array (
        'setter' => 'setOnsetPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'onsetString' => 
      array (
        'setter' => 'setOnsetString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
    ),
  ),
  'FamilyHistoryStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRFamilyHistoryStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'FamilyHistoryStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Flag' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRFlag',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'FlagStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRFlagStatus',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'FlagStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRFlagStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'FlagStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Goal' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRGoal',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'startDate' => 
      array (
        'setter' => 'setStartDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'startCodeableConcept' => 
      array (
        'setter' => 'setStartCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'targetDate' => 
      array (
        'setter' => 'setTargetDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'targetQuantity' => 
      array (
        'setter' => 'setTargetQuantity',
        'element' => 'Duration',
        'type' => 'PHPFHIRGenerated\\FHIRDuration',
      ),
      'category' => 
      array (
        'setter' => 'addCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'GoalStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRGoalStatus',
      ),
      'statusDate' => 
      array (
        'setter' => 'setStatusDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'statusReason' => 
      array (
        'setter' => 'setStatusReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'addresses' => 
      array (
        'setter' => 'addAddresses',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'outcome' => 
      array (
        'setter' => 'addOutcome',
        'element' => 'Goal.Outcome',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRGoal\\FHIRGoalOutcome',
      ),
    ),
  ),
  'Goal.Outcome' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRGoal\\FHIRGoalOutcome',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'resultCodeableConcept' => 
      array (
        'setter' => 'setResultCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'resultReference' => 
      array (
        'setter' => 'setResultReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'GoalStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRGoalStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GoalStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Group' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRGroup',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'GroupType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRGroupType',
      ),
      'actual' => 
      array (
        'setter' => 'setActual',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'characteristic' => 
      array (
        'setter' => 'addCharacteristic',
        'element' => 'Group.Characteristic',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRGroup\\FHIRGroupCharacteristic',
      ),
      'member' => 
      array (
        'setter' => 'addMember',
        'element' => 'Group.Member',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRGroup\\FHIRGroupMember',
      ),
    ),
  ),
  'Group.Characteristic' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRGroup\\FHIRGroupCharacteristic',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'exclude' => 
      array (
        'setter' => 'setExclude',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'Group.Member' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRGroup\\FHIRGroupMember',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'entity' => 
      array (
        'setter' => 'setEntity',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'inactive' => 
      array (
        'setter' => 'setInactive',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'GroupType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRGroupType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GroupType-list',
        'type' => 'string',
      ),
    ),
  ),
  'HealthcareService' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRHealthcareService',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'providedBy' => 
      array (
        'setter' => 'setProvidedBy',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'serviceCategory' => 
      array (
        'setter' => 'setServiceCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'serviceType' => 
      array (
        'setter' => 'addServiceType',
        'element' => 'HealthcareService.ServiceType',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceServiceType',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'serviceName' => 
      array (
        'setter' => 'setServiceName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'extraDetails' => 
      array (
        'setter' => 'setExtraDetails',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'photo' => 
      array (
        'setter' => 'setPhoto',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'coverageArea' => 
      array (
        'setter' => 'addCoverageArea',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'serviceProvisionCode' => 
      array (
        'setter' => 'addServiceProvisionCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'eligibility' => 
      array (
        'setter' => 'setEligibility',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'eligibilityNote' => 
      array (
        'setter' => 'setEligibilityNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'programName' => 
      array (
        'setter' => 'addProgramName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'characteristic' => 
      array (
        'setter' => 'addCharacteristic',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'referralMethod' => 
      array (
        'setter' => 'addReferralMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'publicKey' => 
      array (
        'setter' => 'setPublicKey',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'appointmentRequired' => 
      array (
        'setter' => 'setAppointmentRequired',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'availableTime' => 
      array (
        'setter' => 'addAvailableTime',
        'element' => 'HealthcareService.AvailableTime',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceAvailableTime',
      ),
      'notAvailable' => 
      array (
        'setter' => 'addNotAvailable',
        'element' => 'HealthcareService.NotAvailable',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceNotAvailable',
      ),
      'availabilityExceptions' => 
      array (
        'setter' => 'setAvailabilityExceptions',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'HealthcareService.ServiceType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceServiceType',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialty' => 
      array (
        'setter' => 'addSpecialty',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'HealthcareService.AvailableTime' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceAvailableTime',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'daysOfWeek' => 
      array (
        'setter' => 'addDaysOfWeek',
        'element' => 'DaysOfWeek',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDaysOfWeek',
      ),
      'allDay' => 
      array (
        'setter' => 'setAllDay',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'availableStartTime' => 
      array (
        'setter' => 'setAvailableStartTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'availableEndTime' => 
      array (
        'setter' => 'setAvailableEndTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
    ),
  ),
  'HealthcareService.NotAvailable' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRHealthcareService\\FHIRHealthcareServiceNotAvailable',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'during' => 
      array (
        'setter' => 'setDuring',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'DaysOfWeek' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDaysOfWeek',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DaysOfWeek-list',
        'type' => 'string',
      ),
    ),
  ),
  'ImagingObjectSelection' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRImagingObjectSelection',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'authoringTime' => 
      array (
        'setter' => 'setAuthoringTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'study' => 
      array (
        'setter' => 'addStudy',
        'element' => 'ImagingObjectSelection.Study',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionStudy',
      ),
    ),
  ),
  'ImagingObjectSelection.Study' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionStudy',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'imagingStudy' => 
      array (
        'setter' => 'setImagingStudy',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'series' => 
      array (
        'setter' => 'addSeries',
        'element' => 'ImagingObjectSelection.Series',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionSeries',
      ),
    ),
  ),
  'ImagingObjectSelection.Series' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionSeries',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'instance' => 
      array (
        'setter' => 'addInstance',
        'element' => 'ImagingObjectSelection.Instance',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionInstance',
      ),
    ),
  ),
  'ImagingObjectSelection.Instance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionInstance',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sopClass' => 
      array (
        'setter' => 'setSopClass',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'frames' => 
      array (
        'setter' => 'addFrames',
        'element' => 'ImagingObjectSelection.Frames',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionFrames',
      ),
    ),
  ),
  'ImagingObjectSelection.Frames' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImagingObjectSelection\\FHIRImagingObjectSelectionFrames',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'frameNumbers' => 
      array (
        'setter' => 'addFrameNumbers',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'ImagingStudy' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRImagingStudy',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'started' => 
      array (
        'setter' => 'setStarted',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'accession' => 
      array (
        'setter' => 'setAccession',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'order' => 
      array (
        'setter' => 'addOrder',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'modalityList' => 
      array (
        'setter' => 'addModalityList',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'referrer' => 
      array (
        'setter' => 'setReferrer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'availability' => 
      array (
        'setter' => 'setAvailability',
        'element' => 'InstanceAvailability',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstanceAvailability',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'numberOfSeries' => 
      array (
        'setter' => 'setNumberOfSeries',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'numberOfInstances' => 
      array (
        'setter' => 'setNumberOfInstances',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'procedure' => 
      array (
        'setter' => 'addProcedure',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'interpreter' => 
      array (
        'setter' => 'setInterpreter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'series' => 
      array (
        'setter' => 'addSeries',
        'element' => 'ImagingStudy.Series',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudySeries',
      ),
    ),
  ),
  'ImagingStudy.Series' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudySeries',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'number' => 
      array (
        'setter' => 'setNumber',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'modality' => 
      array (
        'setter' => 'setModality',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'numberOfInstances' => 
      array (
        'setter' => 'setNumberOfInstances',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'availability' => 
      array (
        'setter' => 'setAvailability',
        'element' => 'InstanceAvailability',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstanceAvailability',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'laterality' => 
      array (
        'setter' => 'setLaterality',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'started' => 
      array (
        'setter' => 'setStarted',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'instance' => 
      array (
        'setter' => 'addInstance',
        'element' => 'ImagingStudy.Instance',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudyInstance',
      ),
    ),
  ),
  'ImagingStudy.Instance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImagingStudy\\FHIRImagingStudyInstance',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'number' => 
      array (
        'setter' => 'setNumber',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'sopClass' => 
      array (
        'setter' => 'setSopClass',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'content' => 
      array (
        'setter' => 'addContent',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'InstanceAvailability' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRInstanceAvailability',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'InstanceAvailability-list',
        'type' => 'string',
      ),
    ),
  ),
  'Immunization' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRImmunization',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'vaccineCode' => 
      array (
        'setter' => 'setVaccineCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'wasNotGiven' => 
      array (
        'setter' => 'setWasNotGiven',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'reported' => 
      array (
        'setter' => 'setReported',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'performer' => 
      array (
        'setter' => 'setPerformer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requester' => 
      array (
        'setter' => 'setRequester',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'manufacturer' => 
      array (
        'setter' => 'setManufacturer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'lotNumber' => 
      array (
        'setter' => 'setLotNumber',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'expirationDate' => 
      array (
        'setter' => 'setExpirationDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'site' => 
      array (
        'setter' => 'setSite',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseQuantity' => 
      array (
        'setter' => 'setDoseQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'explanation' => 
      array (
        'setter' => 'setExplanation',
        'element' => 'Immunization.Explanation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImmunization\\FHIRImmunizationExplanation',
      ),
      'reaction' => 
      array (
        'setter' => 'addReaction',
        'element' => 'Immunization.Reaction',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImmunization\\FHIRImmunizationReaction',
      ),
      'vaccinationProtocol' => 
      array (
        'setter' => 'addVaccinationProtocol',
        'element' => 'Immunization.VaccinationProtocol',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImmunization\\FHIRImmunizationVaccinationProtocol',
      ),
    ),
  ),
  'Immunization.Explanation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImmunization\\FHIRImmunizationExplanation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonNotGiven' => 
      array (
        'setter' => 'addReasonNotGiven',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Immunization.Reaction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImmunization\\FHIRImmunizationReaction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'detail' => 
      array (
        'setter' => 'setDetail',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reported' => 
      array (
        'setter' => 'setReported',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'Immunization.VaccinationProtocol' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImmunization\\FHIRImmunizationVaccinationProtocol',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'doseSequence' => 
      array (
        'setter' => 'setDoseSequence',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'authority' => 
      array (
        'setter' => 'setAuthority',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'series' => 
      array (
        'setter' => 'setSeries',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'seriesDoses' => 
      array (
        'setter' => 'setSeriesDoses',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'targetDisease' => 
      array (
        'setter' => 'addTargetDisease',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseStatus' => 
      array (
        'setter' => 'setDoseStatus',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseStatusReason' => 
      array (
        'setter' => 'setDoseStatusReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'ImmunizationRecommendation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRImmunizationRecommendation',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'recommendation' => 
      array (
        'setter' => 'addRecommendation',
        'element' => 'ImmunizationRecommendation.Recommendation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationRecommendation',
      ),
    ),
  ),
  'ImmunizationRecommendation.Recommendation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationRecommendation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'vaccineCode' => 
      array (
        'setter' => 'setVaccineCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseNumber' => 
      array (
        'setter' => 'setDoseNumber',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'forecastStatus' => 
      array (
        'setter' => 'setForecastStatus',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dateCriterion' => 
      array (
        'setter' => 'addDateCriterion',
        'element' => 'ImmunizationRecommendation.DateCriterion',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationDateCriterion',
      ),
      'protocol' => 
      array (
        'setter' => 'setProtocol',
        'element' => 'ImmunizationRecommendation.Protocol',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationProtocol',
      ),
      'supportingImmunization' => 
      array (
        'setter' => 'addSupportingImmunization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'supportingPatientInformation' => 
      array (
        'setter' => 'addSupportingPatientInformation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ImmunizationRecommendation.DateCriterion' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationDateCriterion',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'ImmunizationRecommendation.Protocol' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation\\FHIRImmunizationRecommendationProtocol',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'doseSequence' => 
      array (
        'setter' => 'setDoseSequence',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'authority' => 
      array (
        'setter' => 'setAuthority',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'series' => 
      array (
        'setter' => 'setSeries',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ImplementationGuide' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRImplementationGuide',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ImplementationGuide.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'fhirVersion' => 
      array (
        'setter' => 'setFhirVersion',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'dependency' => 
      array (
        'setter' => 'addDependency',
        'element' => 'ImplementationGuide.Dependency',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideDependency',
      ),
      'package' => 
      array (
        'setter' => 'addPackage',
        'element' => 'ImplementationGuide.Package',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePackage',
      ),
      'global' => 
      array (
        'setter' => 'addGlobal',
        'element' => 'ImplementationGuide.Global',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideGlobal',
      ),
      'binary' => 
      array (
        'setter' => 'addBinary',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'page' => 
      array (
        'setter' => 'setPage',
        'element' => 'ImplementationGuide.Page',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePage',
      ),
    ),
  ),
  'ImplementationGuide.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'ImplementationGuide.Dependency' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideDependency',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'GuideDependencyType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRGuideDependencyType',
      ),
      'uri' => 
      array (
        'setter' => 'setUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'ImplementationGuide.Package' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePackage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'resource' => 
      array (
        'setter' => 'addResource',
        'element' => 'ImplementationGuide.Resource',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideResource',
      ),
    ),
  ),
  'ImplementationGuide.Resource' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideResource',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'purpose' => 
      array (
        'setter' => 'setPurpose',
        'element' => 'GuideResourcePurpose',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRGuideResourcePurpose',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'acronym' => 
      array (
        'setter' => 'setAcronym',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'sourceUri' => 
      array (
        'setter' => 'setSourceUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'sourceReference' => 
      array (
        'setter' => 'setSourceReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'exampleFor' => 
      array (
        'setter' => 'setExampleFor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ImplementationGuide.Global' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuideGlobal',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'setProfile',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ImplementationGuide.Page' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'GuidePageKind',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRGuidePageKind',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'package' => 
      array (
        'setter' => 'addPackage',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'format' => 
      array (
        'setter' => 'setFormat',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'page' => 
      array (
        'setter' => 'addPage',
        'element' => 'ImplementationGuide.Page',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImplementationGuide\\FHIRImplementationGuidePage',
      ),
    ),
  ),
  'GuideDependencyType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRGuideDependencyType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GuideDependencyType-list',
        'type' => 'string',
      ),
    ),
  ),
  'GuideResourcePurpose' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRGuideResourcePurpose',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GuideResourcePurpose-list',
        'type' => 'string',
      ),
    ),
  ),
  'GuidePageKind' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRGuidePageKind',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'GuidePageKind-list',
        'type' => 'string',
      ),
    ),
  ),
  'List' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRList',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ListStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRListStatus',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'orderedBy' => 
      array (
        'setter' => 'setOrderedBy',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'ListMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRListMode',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'entry' => 
      array (
        'setter' => 'addEntry',
        'element' => 'List.Entry',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRList\\FHIRListEntry',
      ),
      'emptyReason' => 
      array (
        'setter' => 'setEmptyReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'List.Entry' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRList\\FHIRListEntry',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'flag' => 
      array (
        'setter' => 'setFlag',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'deleted' => 
      array (
        'setter' => 'setDeleted',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ListStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRListStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ListStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ListMode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRListMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ListMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'Location' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRLocation',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'LocationStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRLocationStatus',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'LocationMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRLocationMode',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'physicalType' => 
      array (
        'setter' => 'setPhysicalType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'position' => 
      array (
        'setter' => 'setPosition',
        'element' => 'Location.Position',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRLocation\\FHIRLocationPosition',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'partOf' => 
      array (
        'setter' => 'setPartOf',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Location.Position' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRLocation\\FHIRLocationPosition',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'longitude' => 
      array (
        'setter' => 'setLongitude',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'latitude' => 
      array (
        'setter' => 'setLatitude',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'altitude' => 
      array (
        'setter' => 'setAltitude',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
    ),
  ),
  'LocationStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRLocationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'LocationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'LocationMode' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRLocationMode',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'LocationMode-list',
        'type' => 'string',
      ),
    ),
  ),
  'Media' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedia',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'DigitalMediaType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDigitalMediaType',
      ),
      'subtype' => 
      array (
        'setter' => 'setSubtype',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'operator' => 
      array (
        'setter' => 'setOperator',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'view' => 
      array (
        'setter' => 'setView',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'deviceName' => 
      array (
        'setter' => 'setDeviceName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'height' => 
      array (
        'setter' => 'setHeight',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'width' => 
      array (
        'setter' => 'setWidth',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'frames' => 
      array (
        'setter' => 'setFrames',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'duration' => 
      array (
        'setter' => 'setDuration',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'content' => 
      array (
        'setter' => 'setContent',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'DigitalMediaType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRDigitalMediaType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'DigitalMediaType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Medication' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedication',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'isBrand' => 
      array (
        'setter' => 'setIsBrand',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'manufacturer' => 
      array (
        'setter' => 'setManufacturer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'product' => 
      array (
        'setter' => 'setProduct',
        'element' => 'Medication.Product',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationProduct',
      ),
      'package' => 
      array (
        'setter' => 'setPackage',
        'element' => 'Medication.Package',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationPackage',
      ),
    ),
  ),
  'Medication.Product' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationProduct',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'form' => 
      array (
        'setter' => 'setForm',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'ingredient' => 
      array (
        'setter' => 'addIngredient',
        'element' => 'Medication.Ingredient',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationIngredient',
      ),
      'batch' => 
      array (
        'setter' => 'addBatch',
        'element' => 'Medication.Batch',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationBatch',
      ),
    ),
  ),
  'Medication.Ingredient' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationIngredient',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'Medication.Batch' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationBatch',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'lotNumber' => 
      array (
        'setter' => 'setLotNumber',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'expirationDate' => 
      array (
        'setter' => 'setExpirationDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
    ),
  ),
  'Medication.Package' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationPackage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'container' => 
      array (
        'setter' => 'setContainer',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'content' => 
      array (
        'setter' => 'addContent',
        'element' => 'Medication.Content',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationContent',
      ),
    ),
  ),
  'Medication.Content' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedication\\FHIRMedicationContent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'item' => 
      array (
        'setter' => 'setItem',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
    ),
  ),
  'MedicationAdministration' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedicationAdministration',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'MedicationAdministrationStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationAdministrationStatus',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'practitioner' => 
      array (
        'setter' => 'setPractitioner',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'prescription' => 
      array (
        'setter' => 'setPrescription',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'wasNotGiven' => 
      array (
        'setter' => 'setWasNotGiven',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'reasonNotGiven' => 
      array (
        'setter' => 'addReasonNotGiven',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonGiven' => 
      array (
        'setter' => 'addReasonGiven',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'effectiveTimeDateTime' => 
      array (
        'setter' => 'setEffectiveTimeDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'effectiveTimePeriod' => 
      array (
        'setter' => 'setEffectiveTimePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'device' => 
      array (
        'setter' => 'addDevice',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'dosage' => 
      array (
        'setter' => 'setDosage',
        'element' => 'MedicationAdministration.Dosage',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationAdministration\\FHIRMedicationAdministrationDosage',
      ),
    ),
  ),
  'MedicationAdministration.Dosage' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationAdministration\\FHIRMedicationAdministrationDosage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'siteCodeableConcept' => 
      array (
        'setter' => 'setSiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteReference' => 
      array (
        'setter' => 'setSiteReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'rateRange' => 
      array (
        'setter' => 'setRateRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
    ),
  ),
  'MedicationAdministrationStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMedicationAdministrationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MedicationAdministrationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'MedicationDispense' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedicationDispense',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'MedicationDispenseStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationDispenseStatus',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dispenser' => 
      array (
        'setter' => 'setDispenser',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'authorizingPrescription' => 
      array (
        'setter' => 'addAuthorizingPrescription',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'daysSupply' => 
      array (
        'setter' => 'setDaysSupply',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'whenPrepared' => 
      array (
        'setter' => 'setWhenPrepared',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'whenHandedOver' => 
      array (
        'setter' => 'setWhenHandedOver',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'receiver' => 
      array (
        'setter' => 'addReceiver',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'dosageInstruction' => 
      array (
        'setter' => 'addDosageInstruction',
        'element' => 'MedicationDispense.DosageInstruction',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDosageInstruction',
      ),
      'substitution' => 
      array (
        'setter' => 'setSubstitution',
        'element' => 'MedicationDispense.Substitution',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseSubstitution',
      ),
    ),
  ),
  'MedicationDispense.DosageInstruction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDosageInstruction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'additionalInstructions' => 
      array (
        'setter' => 'setAdditionalInstructions',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'timing' => 
      array (
        'setter' => 'setTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'asNeededBoolean' => 
      array (
        'setter' => 'setAsNeededBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'asNeededCodeableConcept' => 
      array (
        'setter' => 'setAsNeededCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteCodeableConcept' => 
      array (
        'setter' => 'setSiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteReference' => 
      array (
        'setter' => 'setSiteReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseRange' => 
      array (
        'setter' => 'setDoseRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'doseQuantity' => 
      array (
        'setter' => 'setDoseQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'rateRange' => 
      array (
        'setter' => 'setRateRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'maxDosePerPeriod' => 
      array (
        'setter' => 'setMaxDosePerPeriod',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'MedicationDispense.Substitution' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseSubstitution',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'responsibleParty' => 
      array (
        'setter' => 'addResponsibleParty',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'MedicationDispenseStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMedicationDispenseStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MedicationDispenseStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'MedicationOrder' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedicationOrder',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'dateWritten' => 
      array (
        'setter' => 'setDateWritten',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'MedicationOrderStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationOrderStatus',
      ),
      'dateEnded' => 
      array (
        'setter' => 'setDateEnded',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'reasonEnded' => 
      array (
        'setter' => 'setReasonEnded',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'prescriber' => 
      array (
        'setter' => 'setPrescriber',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dosageInstruction' => 
      array (
        'setter' => 'addDosageInstruction',
        'element' => 'MedicationOrder.DosageInstruction',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderDosageInstruction',
      ),
      'dispenseRequest' => 
      array (
        'setter' => 'setDispenseRequest',
        'element' => 'MedicationOrder.DispenseRequest',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderDispenseRequest',
      ),
      'substitution' => 
      array (
        'setter' => 'setSubstitution',
        'element' => 'MedicationOrder.Substitution',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderSubstitution',
      ),
      'priorPrescription' => 
      array (
        'setter' => 'setPriorPrescription',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'MedicationOrder.DosageInstruction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderDosageInstruction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'additionalInstructions' => 
      array (
        'setter' => 'setAdditionalInstructions',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'timing' => 
      array (
        'setter' => 'setTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'asNeededBoolean' => 
      array (
        'setter' => 'setAsNeededBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'asNeededCodeableConcept' => 
      array (
        'setter' => 'setAsNeededCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteCodeableConcept' => 
      array (
        'setter' => 'setSiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteReference' => 
      array (
        'setter' => 'setSiteReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseRange' => 
      array (
        'setter' => 'setDoseRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'doseQuantity' => 
      array (
        'setter' => 'setDoseQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'rateRange' => 
      array (
        'setter' => 'setRateRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'maxDosePerPeriod' => 
      array (
        'setter' => 'setMaxDosePerPeriod',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'MedicationOrder.DispenseRequest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderDispenseRequest',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'validityPeriod' => 
      array (
        'setter' => 'setValidityPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'numberOfRepeatsAllowed' => 
      array (
        'setter' => 'setNumberOfRepeatsAllowed',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'expectedSupplyDuration' => 
      array (
        'setter' => 'setExpectedSupplyDuration',
        'element' => 'Duration',
        'type' => 'PHPFHIRGenerated\\FHIRDuration',
      ),
    ),
  ),
  'MedicationOrder.Substitution' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationOrder\\FHIRMedicationOrderSubstitution',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'MedicationOrderStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMedicationOrderStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MedicationOrderStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'MedicationPrescription' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedicationPrescription',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'dateWritten' => 
      array (
        'setter' => 'setDateWritten',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'MedicationPrescriptionStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationPrescriptionStatus',
      ),
      'dateEnded' => 
      array (
        'setter' => 'setDateEnded',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'reasonEnded' => 
      array (
        'setter' => 'setReasonEnded',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'prescriber' => 
      array (
        'setter' => 'setPrescriber',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dosageInstruction' => 
      array (
        'setter' => 'addDosageInstruction',
        'element' => 'MedicationPrescription.DosageInstruction',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription\\FHIRMedicationPrescriptionDosageInstruction',
      ),
      'dispense' => 
      array (
        'setter' => 'setDispense',
        'element' => 'MedicationPrescription.Dispense',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription\\FHIRMedicationPrescriptionDispense',
      ),
      'substitution' => 
      array (
        'setter' => 'setSubstitution',
        'element' => 'MedicationPrescription.Substitution',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription\\FHIRMedicationPrescriptionSubstitution',
      ),
      'priorPrescription' => 
      array (
        'setter' => 'setPriorPrescription',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'MedicationPrescription.DosageInstruction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription\\FHIRMedicationPrescriptionDosageInstruction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'additionalInstructions' => 
      array (
        'setter' => 'setAdditionalInstructions',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'timing' => 
      array (
        'setter' => 'setTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'asNeededBoolean' => 
      array (
        'setter' => 'setAsNeededBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'asNeededCodeableConcept' => 
      array (
        'setter' => 'setAsNeededCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'site' => 
      array (
        'setter' => 'setSite',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseRange' => 
      array (
        'setter' => 'setDoseRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'doseQuantity' => 
      array (
        'setter' => 'setDoseQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'rateQuantity' => 
      array (
        'setter' => 'setRateQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'rateRange' => 
      array (
        'setter' => 'setRateRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'maxDosePerPeriod' => 
      array (
        'setter' => 'setMaxDosePerPeriod',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'MedicationPrescription.Dispense' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription\\FHIRMedicationPrescriptionDispense',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'validityPeriod' => 
      array (
        'setter' => 'setValidityPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'numberOfRepeatsAllowed' => 
      array (
        'setter' => 'setNumberOfRepeatsAllowed',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'expectedSupplyDuration' => 
      array (
        'setter' => 'setExpectedSupplyDuration',
        'element' => 'Duration',
        'type' => 'PHPFHIRGenerated\\FHIRDuration',
      ),
    ),
  ),
  'MedicationPrescription.Substitution' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription\\FHIRMedicationPrescriptionSubstitution',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'MedicationPrescriptionStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMedicationPrescriptionStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MedicationPrescriptionStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'MedicationStatement' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRMedicationStatement',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'informationSource' => 
      array (
        'setter' => 'setInformationSource',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dateAsserted' => 
      array (
        'setter' => 'setDateAsserted',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'MedicationStatementStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationStatementStatus',
      ),
      'wasNotTaken' => 
      array (
        'setter' => 'setWasNotTaken',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'reasonNotTaken' => 
      array (
        'setter' => 'addReasonNotTaken',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonForUseCodeableConcept' => 
      array (
        'setter' => 'setReasonForUseCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonForUseReference' => 
      array (
        'setter' => 'setReasonForUseReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'effectiveDateTime' => 
      array (
        'setter' => 'setEffectiveDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'effectivePeriod' => 
      array (
        'setter' => 'setEffectivePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'supportingInformation' => 
      array (
        'setter' => 'addSupportingInformation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'medicationCodeableConcept' => 
      array (
        'setter' => 'setMedicationCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'medicationReference' => 
      array (
        'setter' => 'setMedicationReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dosage' => 
      array (
        'setter' => 'addDosage',
        'element' => 'MedicationStatement.Dosage',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationStatement\\FHIRMedicationStatementDosage',
      ),
    ),
  ),
  'MedicationStatement.Dosage' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationStatement\\FHIRMedicationStatementDosage',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'timing' => 
      array (
        'setter' => 'setTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'asNeededBoolean' => 
      array (
        'setter' => 'setAsNeededBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'asNeededCodeableConcept' => 
      array (
        'setter' => 'setAsNeededCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteCodeableConcept' => 
      array (
        'setter' => 'setSiteCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'siteReference' => 
      array (
        'setter' => 'setSiteReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'route' => 
      array (
        'setter' => 'setRoute',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'quantityQuantity' => 
      array (
        'setter' => 'setQuantityQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'quantityRange' => 
      array (
        'setter' => 'setQuantityRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'rateRange' => 
      array (
        'setter' => 'setRateRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'maxDosePerPeriod' => 
      array (
        'setter' => 'setMaxDosePerPeriod',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'MedicationStatementStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMedicationStatementStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'MedicationStatementStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'MessageHeader' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRMessageHeader',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'timestamp' => 
      array (
        'setter' => 'setTimestamp',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'event' => 
      array (
        'setter' => 'setEvent',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'MessageHeader.Response',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderResponse',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'MessageHeader.Source',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderSource',
      ),
      'destination' => 
      array (
        'setter' => 'addDestination',
        'element' => 'MessageHeader.Destination',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderDestination',
      ),
      'enterer' => 
      array (
        'setter' => 'setEnterer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'receiver' => 
      array (
        'setter' => 'setReceiver',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'responsible' => 
      array (
        'setter' => 'setResponsible',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'data' => 
      array (
        'setter' => 'addData',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'MessageHeader.Response' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderResponse',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'ResponseType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResponseType',
      ),
      'details' => 
      array (
        'setter' => 'setDetails',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'MessageHeader.Source' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderSource',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'software' => 
      array (
        'setter' => 'setSoftware',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'setContact',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'endpoint' => 
      array (
        'setter' => 'setEndpoint',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'MessageHeader.Destination' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader\\FHIRMessageHeaderDestination',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'endpoint' => 
      array (
        'setter' => 'setEndpoint',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'ResponseType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRResponseType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ResponseType-list',
        'type' => 'string',
      ),
    ),
  ),
  'NamingSystem' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRNamingSystem',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'NamingSystemType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNamingSystemType',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'NamingSystem.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRNamingSystem\\FHIRNamingSystemContact',
      ),
      'responsible' => 
      array (
        'setter' => 'setResponsible',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'usage' => 
      array (
        'setter' => 'setUsage',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'uniqueId' => 
      array (
        'setter' => 'addUniqueId',
        'element' => 'NamingSystem.UniqueId',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRNamingSystem\\FHIRNamingSystemUniqueId',
      ),
      'replacedBy' => 
      array (
        'setter' => 'setReplacedBy',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'NamingSystem.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRNamingSystem\\FHIRNamingSystemContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'NamingSystem.UniqueId' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRNamingSystem\\FHIRNamingSystemUniqueId',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'NamingSystemIdentifierType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNamingSystemIdentifierType',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'preferred' => 
      array (
        'setter' => 'setPreferred',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'NamingSystemType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRNamingSystemType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NamingSystemType-list',
        'type' => 'string',
      ),
    ),
  ),
  'NamingSystemIdentifierType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRNamingSystemIdentifierType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NamingSystemIdentifierType-list',
        'type' => 'string',
      ),
    ),
  ),
  'NutritionOrder' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRNutritionOrder',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'orderer' => 
      array (
        'setter' => 'setOrderer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dateTime' => 
      array (
        'setter' => 'setDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'NutritionOrderStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNutritionOrderStatus',
      ),
      'allergyIntolerance' => 
      array (
        'setter' => 'addAllergyIntolerance',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'foodPreferenceModifier' => 
      array (
        'setter' => 'addFoodPreferenceModifier',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'excludeFoodModifier' => 
      array (
        'setter' => 'addExcludeFoodModifier',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'oralDiet' => 
      array (
        'setter' => 'setOralDiet',
        'element' => 'NutritionOrder.OralDiet',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderOralDiet',
      ),
      'supplement' => 
      array (
        'setter' => 'addSupplement',
        'element' => 'NutritionOrder.Supplement',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderSupplement',
      ),
      'enteralFormula' => 
      array (
        'setter' => 'setEnteralFormula',
        'element' => 'NutritionOrder.EnteralFormula',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderEnteralFormula',
      ),
    ),
  ),
  'NutritionOrder.OralDiet' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderOralDiet',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'schedule' => 
      array (
        'setter' => 'addSchedule',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'nutrient' => 
      array (
        'setter' => 'addNutrient',
        'element' => 'NutritionOrder.Nutrient',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderNutrient',
      ),
      'texture' => 
      array (
        'setter' => 'addTexture',
        'element' => 'NutritionOrder.Texture',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderTexture',
      ),
      'fluidConsistencyType' => 
      array (
        'setter' => 'addFluidConsistencyType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'instruction' => 
      array (
        'setter' => 'setInstruction',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'NutritionOrder.Nutrient' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderNutrient',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifier' => 
      array (
        'setter' => 'setModifier',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
    ),
  ),
  'NutritionOrder.Texture' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderTexture',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifier' => 
      array (
        'setter' => 'setModifier',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'foodType' => 
      array (
        'setter' => 'setFoodType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'NutritionOrder.Supplement' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderSupplement',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'productName' => 
      array (
        'setter' => 'setProductName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'schedule' => 
      array (
        'setter' => 'addSchedule',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'instruction' => 
      array (
        'setter' => 'setInstruction',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'NutritionOrder.EnteralFormula' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderEnteralFormula',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'baseFormulaType' => 
      array (
        'setter' => 'setBaseFormulaType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'baseFormulaProductName' => 
      array (
        'setter' => 'setBaseFormulaProductName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'additiveType' => 
      array (
        'setter' => 'setAdditiveType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'additiveProductName' => 
      array (
        'setter' => 'setAdditiveProductName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'caloricDensity' => 
      array (
        'setter' => 'setCaloricDensity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'routeofAdministration' => 
      array (
        'setter' => 'setRouteofAdministration',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'administration' => 
      array (
        'setter' => 'addAdministration',
        'element' => 'NutritionOrder.Administration',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderAdministration',
      ),
      'maxVolumeToDeliver' => 
      array (
        'setter' => 'setMaxVolumeToDeliver',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'administrationInstruction' => 
      array (
        'setter' => 'setAdministrationInstruction',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'NutritionOrder.Administration' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRNutritionOrder\\FHIRNutritionOrderAdministration',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'rateQuantity' => 
      array (
        'setter' => 'setRateQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'rateRatio' => 
      array (
        'setter' => 'setRateRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'NutritionOrderStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRNutritionOrderStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'NutritionOrderStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Observation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRObservation',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ObservationStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRObservationStatus',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'effectiveDateTime' => 
      array (
        'setter' => 'setEffectiveDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'effectivePeriod' => 
      array (
        'setter' => 'setEffectivePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'performer' => 
      array (
        'setter' => 'addPerformer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'valueRatio' => 
      array (
        'setter' => 'setValueRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'valuePeriod' => 
      array (
        'setter' => 'setValuePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'dataAbsentReason' => 
      array (
        'setter' => 'setDataAbsentReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'interpretation' => 
      array (
        'setter' => 'setInterpretation',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specimen' => 
      array (
        'setter' => 'setSpecimen',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'device' => 
      array (
        'setter' => 'setDevice',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'referenceRange' => 
      array (
        'setter' => 'addReferenceRange',
        'element' => 'Observation.ReferenceRange',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRObservation\\FHIRObservationReferenceRange',
      ),
      'related' => 
      array (
        'setter' => 'addRelated',
        'element' => 'Observation.Related',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRObservation\\FHIRObservationRelated',
      ),
      'component' => 
      array (
        'setter' => 'addComponent',
        'element' => 'Observation.Component',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRObservation\\FHIRObservationComponent',
      ),
    ),
  ),
  'Observation.ReferenceRange' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRObservation\\FHIRObservationReferenceRange',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'low' => 
      array (
        'setter' => 'setLow',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'high' => 
      array (
        'setter' => 'setHigh',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'meaning' => 
      array (
        'setter' => 'setMeaning',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'age' => 
      array (
        'setter' => 'setAge',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Observation.Related' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRObservation\\FHIRObservationRelated',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'ObservationRelationshipType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRObservationRelationshipType',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Observation.Component' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRObservation\\FHIRObservationComponent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'valueRatio' => 
      array (
        'setter' => 'setValueRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'valuePeriod' => 
      array (
        'setter' => 'setValuePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'dataAbsentReason' => 
      array (
        'setter' => 'setDataAbsentReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'referenceRange' => 
      array (
        'setter' => 'addReferenceRange',
        'element' => 'Observation.ReferenceRange',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRObservation\\FHIRObservationReferenceRange',
      ),
    ),
  ),
  'ObservationStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRObservationStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ObservationStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ObservationRelationshipType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRObservationRelationshipType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ObservationRelationshipType-list',
        'type' => 'string',
      ),
    ),
  ),
  'OperationDefinition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIROperationDefinition',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'OperationKind',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROperationKind',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'OperationDefinition.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'idempotent' => 
      array (
        'setter' => 'setIdempotent',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'instance' => 
      array (
        'setter' => 'setInstance',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'OperationDefinition.Parameter',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionParameter',
      ),
    ),
  ),
  'OperationDefinition.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'OperationDefinition.Parameter' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionParameter',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'OperationParameterUse',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROperationParameterUse',
      ),
      'min' => 
      array (
        'setter' => 'setMin',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'max' => 
      array (
        'setter' => 'setMax',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'profile' => 
      array (
        'setter' => 'setProfile',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'binding' => 
      array (
        'setter' => 'setBinding',
        'element' => 'OperationDefinition.Binding',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionBinding',
      ),
      'part' => 
      array (
        'setter' => 'addPart',
        'element' => 'OperationDefinition.Parameter',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionParameter',
      ),
    ),
  ),
  'OperationDefinition.Binding' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROperationDefinition\\FHIROperationDefinitionBinding',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'strength' => 
      array (
        'setter' => 'setStrength',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'valueSetUri' => 
      array (
        'setter' => 'setValueSetUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'valueSetReference' => 
      array (
        'setter' => 'setValueSetReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'OperationParameterUse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIROperationParameterUse',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'OperationParameterUse-list',
        'type' => 'string',
      ),
    ),
  ),
  'OperationKind' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIROperationKind',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'OperationKind-list',
        'type' => 'string',
      ),
    ),
  ),
  'OperationOutcome' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIROperationOutcome',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'issue' => 
      array (
        'setter' => 'addIssue',
        'element' => 'OperationOutcome.Issue',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROperationOutcome\\FHIROperationOutcomeIssue',
      ),
    ),
  ),
  'OperationOutcome.Issue' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROperationOutcome\\FHIROperationOutcomeIssue',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'IssueSeverity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIssueSeverity',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'IssueType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIssueType',
      ),
      'details' => 
      array (
        'setter' => 'setDetails',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'diagnostics' => 
      array (
        'setter' => 'setDiagnostics',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'location' => 
      array (
        'setter' => 'addLocation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'IssueType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRIssueType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'IssueType-list',
        'type' => 'string',
      ),
    ),
  ),
  'IssueSeverity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRIssueSeverity',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'IssueSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'Order' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIROrder',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'when' => 
      array (
        'setter' => 'setWhen',
        'element' => 'Order.When',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROrder\\FHIROrderWhen',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Order.When' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROrder\\FHIROrderWhen',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
    ),
  ),
  'OrderResponse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIROrderResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'who' => 
      array (
        'setter' => 'setWho',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'orderStatus' => 
      array (
        'setter' => 'setOrderStatus',
        'element' => 'OrderStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROrderStatus',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'fulfillment' => 
      array (
        'setter' => 'addFulfillment',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'OrderStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIROrderStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'OrderStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Organization' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIROrganization',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'partOf' => 
      array (
        'setter' => 'setPartOf',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'Organization.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROrganization\\FHIROrganizationContact',
      ),
    ),
  ),
  'Organization.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROrganization\\FHIROrganizationContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'purpose' => 
      array (
        'setter' => 'setPurpose',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
    ),
  ),
  'Parameters' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRParameters',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'Parameters.Parameter',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRParameters\\FHIRParametersParameter',
      ),
    ),
  ),
  'Parameters.Parameter' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRParameters\\FHIRParametersParameter',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'valueInteger' => 
      array (
        'setter' => 'setValueInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'valueDecimal' => 
      array (
        'setter' => 'setValueDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'valueBase64Binary' => 
      array (
        'setter' => 'setValueBase64Binary',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'valueInstant' => 
      array (
        'setter' => 'setValueInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueUri' => 
      array (
        'setter' => 'setValueUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'valueDate' => 
      array (
        'setter' => 'setValueDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'valueCode' => 
      array (
        'setter' => 'setValueCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'valueOid' => 
      array (
        'setter' => 'setValueOid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'valueUuid' => 
      array (
        'setter' => 'setValueUuid',
        'element' => 'uuid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
      ),
      'valueId' => 
      array (
        'setter' => 'setValueId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'valueUnsignedInt' => 
      array (
        'setter' => 'setValueUnsignedInt',
        'element' => 'unsignedInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnsignedInt',
      ),
      'valuePositiveInt' => 
      array (
        'setter' => 'setValuePositiveInt',
        'element' => 'positiveInt',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPositiveInt',
      ),
      'valueMarkdown' => 
      array (
        'setter' => 'setValueMarkdown',
        'element' => 'markdown',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMarkdown',
      ),
      'valueAnnotation' => 
      array (
        'setter' => 'setValueAnnotation',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'valueIdentifier' => 
      array (
        'setter' => 'setValueIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'valueCodeableConcept' => 
      array (
        'setter' => 'setValueCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'valueCoding' => 
      array (
        'setter' => 'setValueCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'valueRange' => 
      array (
        'setter' => 'setValueRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'valuePeriod' => 
      array (
        'setter' => 'setValuePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'valueRatio' => 
      array (
        'setter' => 'setValueRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'valueReference' => 
      array (
        'setter' => 'setValueReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'valueSignature' => 
      array (
        'setter' => 'setValueSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
      'valueHumanName' => 
      array (
        'setter' => 'setValueHumanName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'valueAddress' => 
      array (
        'setter' => 'setValueAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'valueContactPoint' => 
      array (
        'setter' => 'setValueContactPoint',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'valueTiming' => 
      array (
        'setter' => 'setValueTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'valueMeta' => 
      array (
        'setter' => 'setValueMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'valueElementDefinition' => 
      array (
        'setter' => 'setValueElementDefinition',
        'element' => 'ElementDefinition',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRElementDefinition',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'part' => 
      array (
        'setter' => 'addPart',
        'element' => 'Parameters.Parameter',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRParameters\\FHIRParametersParameter',
      ),
    ),
  ),
  'Patient' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRPatient',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'name' => 
      array (
        'setter' => 'addName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'deceasedBoolean' => 
      array (
        'setter' => 'setDeceasedBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'deceasedDateTime' => 
      array (
        'setter' => 'setDeceasedDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'maritalStatus' => 
      array (
        'setter' => 'setMaritalStatus',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'multipleBirthBoolean' => 
      array (
        'setter' => 'setMultipleBirthBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'multipleBirthInteger' => 
      array (
        'setter' => 'setMultipleBirthInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'photo' => 
      array (
        'setter' => 'addPhoto',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'Patient.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientContact',
      ),
      'animal' => 
      array (
        'setter' => 'setAnimal',
        'element' => 'Patient.Animal',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientAnimal',
      ),
      'communication' => 
      array (
        'setter' => 'addCommunication',
        'element' => 'Patient.Communication',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientCommunication',
      ),
      'careProvider' => 
      array (
        'setter' => 'addCareProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'Patient.Link',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientLink',
      ),
    ),
  ),
  'Patient.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'relationship' => 
      array (
        'setter' => 'addRelationship',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'Patient.Animal' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientAnimal',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'species' => 
      array (
        'setter' => 'setSpecies',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'breed' => 
      array (
        'setter' => 'setBreed',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'genderStatus' => 
      array (
        'setter' => 'setGenderStatus',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Patient.Communication' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientCommunication',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'preferred' => 
      array (
        'setter' => 'setPreferred',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'Patient.Link' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientLink',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'other' => 
      array (
        'setter' => 'setOther',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'LinkType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRLinkType',
      ),
    ),
  ),
  'LinkType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRLinkType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'LinkType-list',
        'type' => 'string',
      ),
    ),
  ),
  'PaymentNotice' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRPaymentNotice',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'paymentStatus' => 
      array (
        'setter' => 'setPaymentStatus',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'PaymentReconciliation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRPaymentReconciliation',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'detail' => 
      array (
        'setter' => 'addDetail',
        'element' => 'PaymentReconciliation.Detail',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPaymentReconciliation\\FHIRPaymentReconciliationDetail',
      ),
      'form' => 
      array (
        'setter' => 'setForm',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'total' => 
      array (
        'setter' => 'setTotal',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
      'note' => 
      array (
        'setter' => 'addNote',
        'element' => 'PaymentReconciliation.Note',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPaymentReconciliation\\FHIRPaymentReconciliationNote',
      ),
    ),
  ),
  'PaymentReconciliation.Detail' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPaymentReconciliation\\FHIRPaymentReconciliationDetail',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'responce' => 
      array (
        'setter' => 'setResponce',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'submitter' => 
      array (
        'setter' => 'setSubmitter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'payee' => 
      array (
        'setter' => 'setPayee',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Money',
        'type' => 'PHPFHIRGenerated\\FHIRMoney',
      ),
    ),
  ),
  'PaymentReconciliation.Note' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPaymentReconciliation\\FHIRPaymentReconciliationNote',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Person' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRPerson',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'name' => 
      array (
        'setter' => 'addName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'photo' => 
      array (
        'setter' => 'setPhoto',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'Person.Link',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPerson\\FHIRPersonLink',
      ),
    ),
  ),
  'Person.Link' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPerson\\FHIRPersonLink',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'assurance' => 
      array (
        'setter' => 'setAssurance',
        'element' => 'IdentityAssuranceLevel',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentityAssuranceLevel',
      ),
    ),
  ),
  'IdentityAssuranceLevel' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRIdentityAssuranceLevel',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'IdentityAssuranceLevel-list',
        'type' => 'string',
      ),
    ),
  ),
  'Practitioner' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRPractitioner',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'photo' => 
      array (
        'setter' => 'addPhoto',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'practitionerRole' => 
      array (
        'setter' => 'addPractitionerRole',
        'element' => 'Practitioner.PractitionerRole',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPractitioner\\FHIRPractitionerPractitionerRole',
      ),
      'qualification' => 
      array (
        'setter' => 'addQualification',
        'element' => 'Practitioner.Qualification',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPractitioner\\FHIRPractitionerQualification',
      ),
      'communication' => 
      array (
        'setter' => 'addCommunication',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Practitioner.PractitionerRole' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPractitioner\\FHIRPractitionerPractitionerRole',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialty' => 
      array (
        'setter' => 'addSpecialty',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'location' => 
      array (
        'setter' => 'addLocation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'healthcareService' => 
      array (
        'setter' => 'addHealthcareService',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Practitioner.Qualification' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPractitioner\\FHIRPractitionerQualification',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'issuer' => 
      array (
        'setter' => 'setIssuer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Procedure' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRProcedure',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ProcedureStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRProcedureStatus',
      ),
      'category' => 
      array (
        'setter' => 'setCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'notPerformed' => 
      array (
        'setter' => 'setNotPerformed',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'reasonNotPerformed' => 
      array (
        'setter' => 'addReasonNotPerformed',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySite' => 
      array (
        'setter' => 'addBodySite',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'performer' => 
      array (
        'setter' => 'addPerformer',
        'element' => 'Procedure.Performer',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProcedure\\FHIRProcedurePerformer',
      ),
      'performedDateTime' => 
      array (
        'setter' => 'setPerformedDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'performedPeriod' => 
      array (
        'setter' => 'setPerformedPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'report' => 
      array (
        'setter' => 'addReport',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'complication' => 
      array (
        'setter' => 'addComplication',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'followUp' => 
      array (
        'setter' => 'addFollowUp',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'focalDevice' => 
      array (
        'setter' => 'addFocalDevice',
        'element' => 'Procedure.FocalDevice',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProcedure\\FHIRProcedureFocalDevice',
      ),
      'used' => 
      array (
        'setter' => 'addUsed',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Procedure.Performer' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProcedure\\FHIRProcedurePerformer',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Procedure.FocalDevice' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProcedure\\FHIRProcedureFocalDevice',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'manipulated' => 
      array (
        'setter' => 'setManipulated',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'ProcedureStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRProcedureStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ProcedureStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ProcedureRequest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRProcedureRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySite' => 
      array (
        'setter' => 'addBodySite',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'scheduledDateTime' => 
      array (
        'setter' => 'setScheduledDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'scheduledPeriod' => 
      array (
        'setter' => 'setScheduledPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'scheduledTiming' => 
      array (
        'setter' => 'setScheduledTiming',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'performer' => 
      array (
        'setter' => 'setPerformer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ProcedureRequestStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRProcedureRequestStatus',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'Annotation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnnotation',
      ),
      'asNeededBoolean' => 
      array (
        'setter' => 'setAsNeededBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'asNeededCodeableConcept' => 
      array (
        'setter' => 'setAsNeededCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'orderedOn' => 
      array (
        'setter' => 'setOrderedOn',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'orderer' => 
      array (
        'setter' => 'setOrderer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'ProcedureRequestPriority',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRProcedureRequestPriority',
      ),
    ),
  ),
  'ProcedureRequestPriority' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRProcedureRequestPriority',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ProcedureRequestPriority-list',
        'type' => 'string',
      ),
    ),
  ),
  'ProcedureRequestStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRProcedureRequestStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ProcedureRequestStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ProcessRequest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRProcessRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'ActionList',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRActionList',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'provider' => 
      array (
        'setter' => 'setProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'nullify' => 
      array (
        'setter' => 'setNullify',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'item' => 
      array (
        'setter' => 'addItem',
        'element' => 'ProcessRequest.Item',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProcessRequest\\FHIRProcessRequestItem',
      ),
      'include' => 
      array (
        'setter' => 'addInclude',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'exclude' => 
      array (
        'setter' => 'addExclude',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'ProcessRequest.Item' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProcessRequest\\FHIRProcessRequestItem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'sequenceLinkId' => 
      array (
        'setter' => 'setSequenceLinkId',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
    ),
  ),
  'ActionList' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRActionList',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ActionList-list',
        'type' => 'string',
      ),
    ),
  ),
  'ProcessResponse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRProcessResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'request' => 
      array (
        'setter' => 'setRequest',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'disposition' => 
      array (
        'setter' => 'setDisposition',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'ruleset' => 
      array (
        'setter' => 'setRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'originalRuleset' => 
      array (
        'setter' => 'setOriginalRuleset',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestProvider' => 
      array (
        'setter' => 'setRequestProvider',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requestOrganization' => 
      array (
        'setter' => 'setRequestOrganization',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'form' => 
      array (
        'setter' => 'setForm',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'notes' => 
      array (
        'setter' => 'addNotes',
        'element' => 'ProcessResponse.Notes',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProcessResponse\\FHIRProcessResponseNotes',
      ),
      'error' => 
      array (
        'setter' => 'addError',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'ProcessResponse.Notes' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProcessResponse\\FHIRProcessResponseNotes',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Provenance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRProvenance',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'recorded' => 
      array (
        'setter' => 'setRecorded',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'reason' => 
      array (
        'setter' => 'addReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'activity' => 
      array (
        'setter' => 'setActivity',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'policy' => 
      array (
        'setter' => 'addPolicy',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'agent' => 
      array (
        'setter' => 'addAgent',
        'element' => 'Provenance.Agent',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProvenance\\FHIRProvenanceAgent',
      ),
      'entity' => 
      array (
        'setter' => 'addEntity',
        'element' => 'Provenance.Entity',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProvenance\\FHIRProvenanceEntity',
      ),
      'signature' => 
      array (
        'setter' => 'addSignature',
        'element' => 'Signature',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSignature',
      ),
    ),
  ),
  'Provenance.Agent' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProvenance\\FHIRProvenanceAgent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'userId' => 
      array (
        'setter' => 'setUserId',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'relatedAgent' => 
      array (
        'setter' => 'addRelatedAgent',
        'element' => 'Provenance.RelatedAgent',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProvenance\\FHIRProvenanceRelatedAgent',
      ),
    ),
  ),
  'Provenance.RelatedAgent' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProvenance\\FHIRProvenanceRelatedAgent',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'Provenance.Entity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProvenance\\FHIRProvenanceEntity',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'ProvenanceEntityRole',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRProvenanceEntityRole',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'reference' => 
      array (
        'setter' => 'setReference',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'agent' => 
      array (
        'setter' => 'setAgent',
        'element' => 'Provenance.Agent',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProvenance\\FHIRProvenanceAgent',
      ),
    ),
  ),
  'ProvenanceEntityRole' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRProvenanceEntityRole',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ProvenanceEntityRole-list',
        'type' => 'string',
      ),
    ),
  ),
  'Questionnaire' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRQuestionnaire',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'QuestionnaireStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuestionnaireStatus',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'subjectType' => 
      array (
        'setter' => 'addSubjectType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'Questionnaire.Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireGroup',
      ),
    ),
  ),
  'Questionnaire.Group' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireGroup',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'required' => 
      array (
        'setter' => 'setRequired',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'repeats' => 
      array (
        'setter' => 'setRepeats',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'Questionnaire.Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireGroup',
      ),
      'question' => 
      array (
        'setter' => 'addQuestion',
        'element' => 'Questionnaire.Question',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireQuestion',
      ),
    ),
  ),
  'Questionnaire.Question' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireQuestion',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'AnswerFormat',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAnswerFormat',
      ),
      'required' => 
      array (
        'setter' => 'setRequired',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'repeats' => 
      array (
        'setter' => 'setRepeats',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'options' => 
      array (
        'setter' => 'setOptions',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'option' => 
      array (
        'setter' => 'addOption',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'Questionnaire.Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire\\FHIRQuestionnaireGroup',
      ),
    ),
  ),
  'QuestionnaireStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuestionnaireStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'QuestionnaireStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AnswerFormat' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAnswerFormat',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AnswerFormat-list',
        'type' => 'string',
      ),
    ),
  ),
  'QuestionnaireAnswers' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRQuestionnaireAnswers',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'questionnaire' => 
      array (
        'setter' => 'setQuestionnaire',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'QuestionnaireAnswersStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuestionnaireAnswersStatus',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'authored' => 
      array (
        'setter' => 'setAuthored',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'QuestionnaireAnswers.Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireAnswers\\FHIRQuestionnaireAnswersGroup',
      ),
    ),
  ),
  'QuestionnaireAnswers.Group' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireAnswers\\FHIRQuestionnaireAnswersGroup',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'QuestionnaireAnswers.Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireAnswers\\FHIRQuestionnaireAnswersGroup',
      ),
      'question' => 
      array (
        'setter' => 'addQuestion',
        'element' => 'QuestionnaireAnswers.Question',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireAnswers\\FHIRQuestionnaireAnswersQuestion',
      ),
    ),
  ),
  'QuestionnaireAnswers.Question' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireAnswers\\FHIRQuestionnaireAnswersQuestion',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'answer' => 
      array (
        'setter' => 'addAnswer',
        'element' => 'QuestionnaireAnswers.Answer',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireAnswers\\FHIRQuestionnaireAnswersAnswer',
      ),
    ),
  ),
  'QuestionnaireAnswers.Answer' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireAnswers\\FHIRQuestionnaireAnswersAnswer',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'valueDecimal' => 
      array (
        'setter' => 'setValueDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'valueInteger' => 
      array (
        'setter' => 'setValueInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'valueDate' => 
      array (
        'setter' => 'setValueDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'valueInstant' => 
      array (
        'setter' => 'setValueInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueUri' => 
      array (
        'setter' => 'setValueUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'valueCoding' => 
      array (
        'setter' => 'setValueCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'valueMeasuredQuantity' => 
      array (
        'setter' => 'setValueMeasuredQuantity',
        'element' => 'MeasuredQuantity',
        'type' => NULL,
      ),
      'valueReference' => 
      array (
        'setter' => 'setValueReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'QuestionnaireAnswers.Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireAnswers\\FHIRQuestionnaireAnswersGroup',
      ),
    ),
  ),
  'QuestionnaireAnswersStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuestionnaireAnswersStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'QuestionnaireAnswersStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'QuestionnaireResponse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRQuestionnaireResponse',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'questionnaire' => 
      array (
        'setter' => 'setQuestionnaire',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'QuestionnaireResponseStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuestionnaireResponseStatus',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'authored' => 
      array (
        'setter' => 'setAuthored',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'QuestionnaireResponse.Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseGroup',
      ),
    ),
  ),
  'QuestionnaireResponse.Group' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseGroup',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'title' => 
      array (
        'setter' => 'setTitle',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'QuestionnaireResponse.Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseGroup',
      ),
      'question' => 
      array (
        'setter' => 'addQuestion',
        'element' => 'QuestionnaireResponse.Question',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseQuestion',
      ),
    ),
  ),
  'QuestionnaireResponse.Question' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseQuestion',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'linkId' => 
      array (
        'setter' => 'setLinkId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'answer' => 
      array (
        'setter' => 'addAnswer',
        'element' => 'QuestionnaireResponse.Answer',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseAnswer',
      ),
    ),
  ),
  'QuestionnaireResponse.Answer' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseAnswer',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'valueDecimal' => 
      array (
        'setter' => 'setValueDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'valueInteger' => 
      array (
        'setter' => 'setValueInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'valueDate' => 
      array (
        'setter' => 'setValueDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'valueDateTime' => 
      array (
        'setter' => 'setValueDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'valueInstant' => 
      array (
        'setter' => 'setValueInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'valueTime' => 
      array (
        'setter' => 'setValueTime',
        'element' => 'time',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTime',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueUri' => 
      array (
        'setter' => 'setValueUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'valueCoding' => 
      array (
        'setter' => 'setValueCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'valueQuantity' => 
      array (
        'setter' => 'setValueQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'valueReference' => 
      array (
        'setter' => 'setValueReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'group' => 
      array (
        'setter' => 'addGroup',
        'element' => 'QuestionnaireResponse.Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaireResponse\\FHIRQuestionnaireResponseGroup',
      ),
    ),
  ),
  'QuestionnaireResponseStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuestionnaireResponseStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'QuestionnaireResponseStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ReferralRequest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRReferralRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ReferralStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReferralStatus',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'specialty' => 
      array (
        'setter' => 'setSpecialty',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'requester' => 
      array (
        'setter' => 'setRequester',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'recipient' => 
      array (
        'setter' => 'addRecipient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dateSent' => 
      array (
        'setter' => 'setDateSent',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'serviceRequested' => 
      array (
        'setter' => 'addServiceRequested',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'supportingInformation' => 
      array (
        'setter' => 'addSupportingInformation',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'fulfillmentTime' => 
      array (
        'setter' => 'setFulfillmentTime',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'ReferralStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRReferralStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ReferralStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'RelatedPerson' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRRelatedPerson',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'address' => 
      array (
        'setter' => 'addAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'photo' => 
      array (
        'setter' => 'addPhoto',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'RiskAssessment' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRRiskAssessment',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'condition' => 
      array (
        'setter' => 'setCondition',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'performer' => 
      array (
        'setter' => 'setPerformer',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'basis' => 
      array (
        'setter' => 'addBasis',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'prediction' => 
      array (
        'setter' => 'addPrediction',
        'element' => 'RiskAssessment.Prediction',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRRiskAssessment\\FHIRRiskAssessmentPrediction',
      ),
      'mitigation' => 
      array (
        'setter' => 'setMitigation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'RiskAssessment.Prediction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRRiskAssessment\\FHIRRiskAssessmentPrediction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'probabilityDecimal' => 
      array (
        'setter' => 'setProbabilityDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'probabilityRange' => 
      array (
        'setter' => 'setProbabilityRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'probabilityCodeableConcept' => 
      array (
        'setter' => 'setProbabilityCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'relativeRisk' => 
      array (
        'setter' => 'setRelativeRisk',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'whenPeriod' => 
      array (
        'setter' => 'setWhenPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'whenRange' => 
      array (
        'setter' => 'setWhenRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'rationale' => 
      array (
        'setter' => 'setRationale',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Schedule' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRSchedule',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'actor' => 
      array (
        'setter' => 'setActor',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'planningHorizon' => 
      array (
        'setter' => 'setPlanningHorizon',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'SearchParameter' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRSearchParameter',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'SearchParameter.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSearchParameter\\FHIRSearchParameterContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'xpath' => 
      array (
        'setter' => 'setXpath',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'xpathUsage' => 
      array (
        'setter' => 'setXpathUsage',
        'element' => 'XPathUsageType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRXPathUsageType',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'SearchParameter.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSearchParameter\\FHIRSearchParameterContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'XPathUsageType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRXPathUsageType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'XPathUsageType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Slot' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRSlot',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'freeBusyType' => 
      array (
        'setter' => 'setFreeBusyType',
        'element' => 'SlotStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSlotStatus',
      ),
      'start' => 
      array (
        'setter' => 'setStart',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'overbooked' => 
      array (
        'setter' => 'setOverbooked',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'comment' => 
      array (
        'setter' => 'setComment',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'SlotStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSlotStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SlotStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Specimen' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRSpecimen',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SpecimenStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSpecimenStatus',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'parent' => 
      array (
        'setter' => 'addParent',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'accessionIdentifier' => 
      array (
        'setter' => 'setAccessionIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'receivedTime' => 
      array (
        'setter' => 'setReceivedTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'collection' => 
      array (
        'setter' => 'setCollection',
        'element' => 'Specimen.Collection',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenCollection',
      ),
      'treatment' => 
      array (
        'setter' => 'addTreatment',
        'element' => 'Specimen.Treatment',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenTreatment',
      ),
      'container' => 
      array (
        'setter' => 'addContainer',
        'element' => 'Specimen.Container',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenContainer',
      ),
    ),
  ),
  'Specimen.Collection' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenCollection',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'collector' => 
      array (
        'setter' => 'setCollector',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'comment' => 
      array (
        'setter' => 'addComment',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'collectedDateTime' => 
      array (
        'setter' => 'setCollectedDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'collectedPeriod' => 
      array (
        'setter' => 'setCollectedPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySite' => 
      array (
        'setter' => 'setBodySite',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Specimen.Treatment' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenTreatment',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'procedure' => 
      array (
        'setter' => 'setProcedure',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'additive' => 
      array (
        'setter' => 'addAdditive',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Specimen.Container' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenContainer',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'capacity' => 
      array (
        'setter' => 'setCapacity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'specimenQuantity' => 
      array (
        'setter' => 'setSpecimenQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'additiveCodeableConcept' => 
      array (
        'setter' => 'setAdditiveCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'additiveReference' => 
      array (
        'setter' => 'setAdditiveReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'SpecimenStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSpecimenStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SpecimenStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'StructureDefinition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRStructureDefinition',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'StructureDefinition.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'addCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'fhirVersion' => 
      array (
        'setter' => 'setFhirVersion',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'mapping' => 
      array (
        'setter' => 'addMapping',
        'element' => 'StructureDefinition.Mapping',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionMapping',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'StructureDefinitionKind',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRStructureDefinitionKind',
      ),
      'constrainedType' => 
      array (
        'setter' => 'setConstrainedType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'abstract' => 
      array (
        'setter' => 'setAbstract',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'contextType' => 
      array (
        'setter' => 'setContextType',
        'element' => 'ExtensionContext',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtensionContext',
      ),
      'context' => 
      array (
        'setter' => 'addContext',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'snapshot' => 
      array (
        'setter' => 'setSnapshot',
        'element' => 'StructureDefinition.Snapshot',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionSnapshot',
      ),
      'differential' => 
      array (
        'setter' => 'setDifferential',
        'element' => 'StructureDefinition.Differential',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionDifferential',
      ),
    ),
  ),
  'StructureDefinition.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'StructureDefinition.Mapping' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionMapping',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identity' => 
      array (
        'setter' => 'setIdentity',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'uri' => 
      array (
        'setter' => 'setUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'StructureDefinition.Snapshot' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionSnapshot',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'element' => 
      array (
        'setter' => 'addElement',
        'element' => 'ElementDefinition',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRElementDefinition',
      ),
    ),
  ),
  'StructureDefinition.Differential' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRStructureDefinition\\FHIRStructureDefinitionDifferential',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'element' => 
      array (
        'setter' => 'addElement',
        'element' => 'ElementDefinition',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRElementDefinition',
      ),
    ),
  ),
  'StructureDefinitionKind' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRStructureDefinitionKind',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'StructureDefinitionKind-list',
        'type' => 'string',
      ),
    ),
  ),
  'ExtensionContext' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRExtensionContext',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ExtensionContext-list',
        'type' => 'string',
      ),
    ),
  ),
  'Subscription' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRSubscription',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'criteria' => 
      array (
        'setter' => 'setCriteria',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SubscriptionStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSubscriptionStatus',
      ),
      'error' => 
      array (
        'setter' => 'setError',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'channel' => 
      array (
        'setter' => 'setChannel',
        'element' => 'Subscription.Channel',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSubscription\\FHIRSubscriptionChannel',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'tag' => 
      array (
        'setter' => 'addTag',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'Subscription.Channel' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSubscription\\FHIRSubscriptionChannel',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'SubscriptionChannelType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSubscriptionChannelType',
      ),
      'endpoint' => 
      array (
        'setter' => 'setEndpoint',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'payload' => 
      array (
        'setter' => 'setPayload',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'header' => 
      array (
        'setter' => 'setHeader',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'SubscriptionStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSubscriptionStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SubscriptionStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'SubscriptionChannelType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSubscriptionChannelType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SubscriptionChannelType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Substance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRSubstance',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'category' => 
      array (
        'setter' => 'addCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'instance' => 
      array (
        'setter' => 'addInstance',
        'element' => 'Substance.Instance',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSubstance\\FHIRSubstanceInstance',
      ),
      'ingredient' => 
      array (
        'setter' => 'addIngredient',
        'element' => 'Substance.Ingredient',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSubstance\\FHIRSubstanceIngredient',
      ),
    ),
  ),
  'Substance.Instance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSubstance\\FHIRSubstanceInstance',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'expiry' => 
      array (
        'setter' => 'setExpiry',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
    ),
  ),
  'Substance.Ingredient' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSubstance\\FHIRSubstanceIngredient',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'Supply' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRSupply',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SupplyStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSupplyStatus',
      ),
      'orderedItem' => 
      array (
        'setter' => 'setOrderedItem',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dispense' => 
      array (
        'setter' => 'addDispense',
        'element' => 'Supply.Dispense',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSupply\\FHIRSupplyDispense',
      ),
    ),
  ),
  'Supply.Dispense' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSupply\\FHIRSupplyDispense',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SupplyDispenseStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSupplyDispenseStatus',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'suppliedItem' => 
      array (
        'setter' => 'setSuppliedItem',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'supplier' => 
      array (
        'setter' => 'setSupplier',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'whenPrepared' => 
      array (
        'setter' => 'setWhenPrepared',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'whenHandedOver' => 
      array (
        'setter' => 'setWhenHandedOver',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'receiver' => 
      array (
        'setter' => 'addReceiver',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'SupplyDispenseStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSupplyDispenseStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SupplyDispenseStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'SupplyStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSupplyStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SupplyStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'SupplyDelivery' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRSupplyDelivery',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SupplyDeliveryStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSupplyDeliveryStatus',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'suppliedItem' => 
      array (
        'setter' => 'setSuppliedItem',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'supplier' => 
      array (
        'setter' => 'setSupplier',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'whenPrepared' => 
      array (
        'setter' => 'setWhenPrepared',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'time' => 
      array (
        'setter' => 'setTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'receiver' => 
      array (
        'setter' => 'addReceiver',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'SupplyDeliveryStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSupplyDeliveryStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SupplyDeliveryStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'SupplyRequest' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRSupplyRequest',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SupplyRequestStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSupplyRequestStatus',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'orderedItem' => 
      array (
        'setter' => 'setOrderedItem',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'supplier' => 
      array (
        'setter' => 'addSupplier',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'when' => 
      array (
        'setter' => 'setWhen',
        'element' => 'SupplyRequest.When',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSupplyRequest\\FHIRSupplyRequestWhen',
      ),
    ),
  ),
  'SupplyRequest.When' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSupplyRequest\\FHIRSupplyRequestWhen',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'schedule' => 
      array (
        'setter' => 'setSchedule',
        'element' => 'Timing',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRTiming',
      ),
    ),
  ),
  'SupplyRequestStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSupplyRequestStatus',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'SupplyRequestStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'TestScript' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRTestScript',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'TestScript.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'metadata' => 
      array (
        'setter' => 'setMetadata',
        'element' => 'TestScript.Metadata',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptMetadata',
      ),
      'multiserver' => 
      array (
        'setter' => 'setMultiserver',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'fixture' => 
      array (
        'setter' => 'addFixture',
        'element' => 'TestScript.Fixture',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptFixture',
      ),
      'profile' => 
      array (
        'setter' => 'addProfile',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'variable' => 
      array (
        'setter' => 'addVariable',
        'element' => 'TestScript.Variable',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptVariable',
      ),
      'setup' => 
      array (
        'setter' => 'setSetup',
        'element' => 'TestScript.Setup',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptSetup',
      ),
      'test' => 
      array (
        'setter' => 'addTest',
        'element' => 'TestScript.Test',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptTest',
      ),
      'teardown' => 
      array (
        'setter' => 'setTeardown',
        'element' => 'TestScript.Teardown',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptTeardown',
      ),
    ),
  ),
  'TestScript.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'TestScript.Metadata' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptMetadata',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'TestScript.Link',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptLink',
      ),
      'capability' => 
      array (
        'setter' => 'addCapability',
        'element' => 'TestScript.Capability',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptCapability',
      ),
    ),
  ),
  'TestScript.Link' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptLink',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'TestScript.Capability' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptCapability',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'required' => 
      array (
        'setter' => 'setRequired',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'validated' => 
      array (
        'setter' => 'setValidated',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'conformance' => 
      array (
        'setter' => 'setConformance',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'TestScript.Fixture' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptFixture',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'autocreate' => 
      array (
        'setter' => 'setAutocreate',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'autodelete' => 
      array (
        'setter' => 'setAutodelete',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
    ),
  ),
  'TestScript.Variable' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptVariable',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'headerField' => 
      array (
        'setter' => 'setHeaderField',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'path' => 
      array (
        'setter' => 'setPath',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'sourceId' => 
      array (
        'setter' => 'setSourceId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
    ),
  ),
  'TestScript.Setup' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptSetup',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'metadata' => 
      array (
        'setter' => 'setMetadata',
        'element' => 'TestScript.Metadata',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptMetadata',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'TestScript.Action',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction',
      ),
    ),
  ),
  'TestScript.Action' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'operation' => 
      array (
        'setter' => 'setOperation',
        'element' => 'TestScript.Operation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptOperation',
      ),
      'assert' => 
      array (
        'setter' => 'setAssert',
        'element' => 'TestScript.Assert',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAssert',
      ),
    ),
  ),
  'TestScript.Operation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptOperation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'label' => 
      array (
        'setter' => 'setLabel',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'accept' => 
      array (
        'setter' => 'setAccept',
        'element' => 'ContentType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContentType',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'ContentType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContentType',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'encodeRequestUrl' => 
      array (
        'setter' => 'setEncodeRequestUrl',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'params' => 
      array (
        'setter' => 'setParams',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'requestHeader' => 
      array (
        'setter' => 'addRequestHeader',
        'element' => 'TestScript.RequestHeader',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptRequestHeader',
      ),
      'responseId' => 
      array (
        'setter' => 'setResponseId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'sourceId' => 
      array (
        'setter' => 'setSourceId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'targetId' => 
      array (
        'setter' => 'setTargetId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'TestScript.RequestHeader' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptRequestHeader',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'field' => 
      array (
        'setter' => 'setField',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'TestScript.Assert' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAssert',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'label' => 
      array (
        'setter' => 'setLabel',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'direction' => 
      array (
        'setter' => 'setDirection',
        'element' => 'AssertionDirectionType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAssertionDirectionType',
      ),
      'compareToSourceId' => 
      array (
        'setter' => 'setCompareToSourceId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'compareToSourcePath' => 
      array (
        'setter' => 'setCompareToSourcePath',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'ContentType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContentType',
      ),
      'headerField' => 
      array (
        'setter' => 'setHeaderField',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'minimumId' => 
      array (
        'setter' => 'setMinimumId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'navigationLinks' => 
      array (
        'setter' => 'setNavigationLinks',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'operator' => 
      array (
        'setter' => 'setOperator',
        'element' => 'AssertionOperatorType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAssertionOperatorType',
      ),
      'path' => 
      array (
        'setter' => 'setPath',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'resource' => 
      array (
        'setter' => 'setResource',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'AssertionResponseTypes',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAssertionResponseTypes',
      ),
      'responseCode' => 
      array (
        'setter' => 'setResponseCode',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'sourceId' => 
      array (
        'setter' => 'setSourceId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'validateProfileId' => 
      array (
        'setter' => 'setValidateProfileId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'warningOnly' => 
      array (
        'setter' => 'setWarningOnly',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'TestScript.Test' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptTest',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'metadata' => 
      array (
        'setter' => 'setMetadata',
        'element' => 'TestScript.Metadata',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptMetadata',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'TestScript.Action1',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction1',
      ),
    ),
  ),
  'TestScript.Action1' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'operation' => 
      array (
        'setter' => 'setOperation',
        'element' => 'TestScript.Operation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptOperation',
      ),
      'assert' => 
      array (
        'setter' => 'setAssert',
        'element' => 'TestScript.Assert',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAssert',
      ),
    ),
  ),
  'TestScript.Teardown' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptTeardown',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'action' => 
      array (
        'setter' => 'addAction',
        'element' => 'TestScript.Action2',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction2',
      ),
    ),
  ),
  'TestScript.Action2' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptAction2',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'operation' => 
      array (
        'setter' => 'setOperation',
        'element' => 'TestScript.Operation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRTestScript\\FHIRTestScriptOperation',
      ),
    ),
  ),
  'AssertionDirectionType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAssertionDirectionType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AssertionDirectionType-list',
        'type' => 'string',
      ),
    ),
  ),
  'AssertionResponseTypes' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAssertionResponseTypes',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AssertionResponseTypes-list',
        'type' => 'string',
      ),
    ),
  ),
  'AssertionOperatorType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAssertionOperatorType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'AssertionOperatorType-list',
        'type' => 'string',
      ),
    ),
  ),
  'ContentType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRContentType',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'ContentType-list',
        'type' => 'string',
      ),
    ),
  ),
  'ValueSet' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRValueSet',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'ValueSet.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetContact',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'lockedDate' => 
      array (
        'setter' => 'setLockedDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'useContext' => 
      array (
        'setter' => 'addUseContext',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'immutable' => 
      array (
        'setter' => 'setImmutable',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'extensible' => 
      array (
        'setter' => 'setExtensible',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'codeSystem' => 
      array (
        'setter' => 'setCodeSystem',
        'element' => 'ValueSet.CodeSystem',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetCodeSystem',
      ),
      'compose' => 
      array (
        'setter' => 'setCompose',
        'element' => 'ValueSet.Compose',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetCompose',
      ),
      'expansion' => 
      array (
        'setter' => 'setExpansion',
        'element' => 'ValueSet.Expansion',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetExpansion',
      ),
    ),
  ),
  'ValueSet.Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetContact',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'ContactPoint',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactPoint',
      ),
    ),
  ),
  'ValueSet.CodeSystem' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetCodeSystem',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'caseSensitive' => 
      array (
        'setter' => 'setCaseSensitive',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'ValueSet.Concept',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept',
      ),
    ),
  ),
  'ValueSet.Concept' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'abstract' => 
      array (
        'setter' => 'setAbstract',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'designation' => 
      array (
        'setter' => 'addDesignation',
        'element' => 'ValueSet.Designation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetDesignation',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'ValueSet.Concept',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept',
      ),
    ),
  ),
  'ValueSet.Designation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetDesignation',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'use' => 
      array (
        'setter' => 'setUse',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'ValueSet.Compose' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetCompose',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'import' => 
      array (
        'setter' => 'addImport',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'include' => 
      array (
        'setter' => 'addInclude',
        'element' => 'ValueSet.Include',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetInclude',
      ),
      'exclude' => 
      array (
        'setter' => 'addExclude',
        'element' => 'ValueSet.Include',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetInclude',
      ),
    ),
  ),
  'ValueSet.Include' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetInclude',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'ValueSet.Concept1',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept1',
      ),
      'filter' => 
      array (
        'setter' => 'addFilter',
        'element' => 'ValueSet.Filter',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetFilter',
      ),
    ),
  ),
  'ValueSet.Concept1' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept1',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'designation' => 
      array (
        'setter' => 'addDesignation',
        'element' => 'ValueSet.Designation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetDesignation',
      ),
    ),
  ),
  'ValueSet.Filter' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetFilter',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'property' => 
      array (
        'setter' => 'setProperty',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'op' => 
      array (
        'setter' => 'setOp',
        'element' => 'FilterOperator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRFilterOperator',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'ValueSet.Expansion' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetExpansion',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'timestamp' => 
      array (
        'setter' => 'setTimestamp',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'total' => 
      array (
        'setter' => 'setTotal',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'offset' => 
      array (
        'setter' => 'setOffset',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'ValueSet.Parameter',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetParameter',
      ),
      'contains' => 
      array (
        'setter' => 'addContains',
        'element' => 'ValueSet.Contains',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetContains',
      ),
    ),
  ),
  'ValueSet.Parameter' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetParameter',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'valueBoolean' => 
      array (
        'setter' => 'setValueBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'valueInteger' => 
      array (
        'setter' => 'setValueInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'valueDecimal' => 
      array (
        'setter' => 'setValueDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'valueUri' => 
      array (
        'setter' => 'setValueUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'valueCode' => 
      array (
        'setter' => 'setValueCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'ValueSet.Contains' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetContains',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'system' => 
      array (
        'setter' => 'setSystem',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'abstract' => 
      array (
        'setter' => 'setAbstract',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'version' => 
      array (
        'setter' => 'setVersion',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'display' => 
      array (
        'setter' => 'setDisplay',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'contains' => 
      array (
        'setter' => 'addContains',
        'element' => 'ValueSet.Contains',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetContains',
      ),
    ),
  ),
  'FilterOperator' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRFilterOperator',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'FilterOperator-list',
        'type' => 'string',
      ),
    ),
  ),
  'VisionPrescription' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRDomainResource\\FHIRVisionPrescription',
    'extendedElementName' => 'DomainResource',
    'properties' => 
    array (
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'meta' => 
      array (
        'setter' => 'setMeta',
        'element' => 'Meta',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMeta',
      ),
      'implicitRules' => 
      array (
        'setter' => 'setImplicitRules',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'language' => 
      array (
        'setter' => 'setLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'ResourceContainer',
        'type' => 'PHPFHIRGenerated\\FHIRResourceContainer',
      ),
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'dateWritten' => 
      array (
        'setter' => 'setDateWritten',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'prescriber' => 
      array (
        'setter' => 'setPrescriber',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonReference' => 
      array (
        'setter' => 'setReasonReference',
        'element' => 'Reference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReference',
      ),
      'dispense' => 
      array (
        'setter' => 'addDispense',
        'element' => 'VisionPrescription.Dispense',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRVisionPrescription\\FHIRVisionPrescriptionDispense',
      ),
    ),
  ),
  'VisionPrescription.Dispense' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRVisionPrescription\\FHIRVisionPrescriptionDispense',
    'extendedElementName' => 'BackboneElement',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'modifierExtension' => 
      array (
        'setter' => 'addModifierExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'product' => 
      array (
        'setter' => 'setProduct',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'eye' => 
      array (
        'setter' => 'setEye',
        'element' => 'VisionEyes',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRVisionEyes',
      ),
      'sphere' => 
      array (
        'setter' => 'setSphere',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'cylinder' => 
      array (
        'setter' => 'setCylinder',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'axis' => 
      array (
        'setter' => 'setAxis',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'prism' => 
      array (
        'setter' => 'setPrism',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'base' => 
      array (
        'setter' => 'setBase',
        'element' => 'VisionBase',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRVisionBase',
      ),
      'add' => 
      array (
        'setter' => 'setAdd',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'power' => 
      array (
        'setter' => 'setPower',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'backCurve' => 
      array (
        'setter' => 'setBackCurve',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'diameter' => 
      array (
        'setter' => 'setDiameter',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'duration' => 
      array (
        'setter' => 'setDuration',
        'element' => 'SimpleQuantity',
        'type' => 'PHPFHIRGenerated\\FHIRSimpleQuantity',
      ),
      'color' => 
      array (
        'setter' => 'setColor',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'brand' => 
      array (
        'setter' => 'setBrand',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'VisionBase' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRVisionBase',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'VisionBase-list',
        'type' => 'string',
      ),
    ),
  ),
  'VisionEyes' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRVisionEyes',
    'extendedElementName' => 'Element',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'id' => 
      array (
        'setter' => 'setId',
        'element' => 'id-primitive',
        'type' => 'string',
      ),
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'VisionEyes-list',
        'type' => 'string',
      ),
    ),
  ),
);

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->_bigDumbMap[$offset]);
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        if (isset($this->_bigDumbMap[$offset]))
            return $this->_bigDumbMap[$offset];

        trigger_error(sprintf(
            'Offset %s does not exist in the FHIR element map, this could either mean a malformed response or a bug in the generator.',
            $offset
        ));

        return null;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        throw new \BadMethodCallException('Not allowed to set values on the FHIR parser element map');
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        throw new \BadMethodCallException('Not allowed to unset values in this FHIR parser element map');
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->_bigDumbMap);
    }

    /**
     * @return string
     */
    public function key()
    {
        return key($this->_bigDumbMap);
    }

    public function next()
    {
        next($this->_bigDumbMap);
    }

    public function rewind()
    {
        reset($this->_bigDumbMap);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return key($this->_bigDumbMap) !== null;
    }
}