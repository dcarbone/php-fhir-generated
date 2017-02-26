<?php namespace PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 26th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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
  'Resource.Inline' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
    'extendedElementName' => NULL,
    'properties' => 
    array (
      'Binary' => 
      array (
        'setter' => 'setBinary',
        'element' => 'Binary',
        'type' => 'PHPFHIRGenerated\\FHIRBinary',
      ),
      'Provenance' => 
      array (
        'setter' => 'setProvenance',
        'element' => 'Provenance',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProvenance',
      ),
      'Condition' => 
      array (
        'setter' => 'setCondition',
        'element' => 'Condition',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCondition',
      ),
      'CarePlan' => 
      array (
        'setter' => 'setCarePlan',
        'element' => 'CarePlan',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan',
      ),
      'Supply' => 
      array (
        'setter' => 'setSupply',
        'element' => 'Supply',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSupply',
      ),
      'Device' => 
      array (
        'setter' => 'setDevice',
        'element' => 'Device',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDevice',
      ),
      'Query' => 
      array (
        'setter' => 'setQuery',
        'element' => 'Query',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuery',
      ),
      'Order' => 
      array (
        'setter' => 'setOrder',
        'element' => 'Order',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROrder',
      ),
      'Organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'Organization',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROrganization',
      ),
      'Procedure' => 
      array (
        'setter' => 'setProcedure',
        'element' => 'Procedure',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProcedure',
      ),
      'Substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'Substance',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSubstance',
      ),
      'DiagnosticReport' => 
      array (
        'setter' => 'setDiagnosticReport',
        'element' => 'DiagnosticReport',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticReport',
      ),
      'Group' => 
      array (
        'setter' => 'setGroup',
        'element' => 'Group',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRGroup',
      ),
      'ValueSet' => 
      array (
        'setter' => 'setValueSet',
        'element' => 'ValueSet',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet',
      ),
      'Medication' => 
      array (
        'setter' => 'setMedication',
        'element' => 'Medication',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedication',
      ),
      'MessageHeader' => 
      array (
        'setter' => 'setMessageHeader',
        'element' => 'MessageHeader',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader',
      ),
      'ImmunizationRecommendation' => 
      array (
        'setter' => 'setImmunizationRecommendation',
        'element' => 'ImmunizationRecommendation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation',
      ),
      'DocumentManifest' => 
      array (
        'setter' => 'setDocumentManifest',
        'element' => 'DocumentManifest',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentManifest',
      ),
      'MedicationDispense' => 
      array (
        'setter' => 'setMedicationDispense',
        'element' => 'MedicationDispense',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense',
      ),
      'MedicationPrescription' => 
      array (
        'setter' => 'setMedicationPrescription',
        'element' => 'MedicationPrescription',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription',
      ),
      'MedicationAdministration' => 
      array (
        'setter' => 'setMedicationAdministration',
        'element' => 'MedicationAdministration',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationAdministration',
      ),
      'Encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'Encounter',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIREncounter',
      ),
      'SecurityEvent' => 
      array (
        'setter' => 'setSecurityEvent',
        'element' => 'SecurityEvent',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent',
      ),
      'MedicationStatement' => 
      array (
        'setter' => 'setMedicationStatement',
        'element' => 'MedicationStatement',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationStatement',
      ),
      'List' => 
      array (
        'setter' => 'setList',
        'element' => 'List',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRList',
      ),
      'Questionnaire' => 
      array (
        'setter' => 'setQuestionnaire',
        'element' => 'Questionnaire',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire',
      ),
      'Composition' => 
      array (
        'setter' => 'setComposition',
        'element' => 'Composition',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRComposition',
      ),
      'DeviceObservationReport' => 
      array (
        'setter' => 'setDeviceObservationReport',
        'element' => 'DeviceObservationReport',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport',
      ),
      'OperationOutcome' => 
      array (
        'setter' => 'setOperationOutcome',
        'element' => 'OperationOutcome',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROperationOutcome',
      ),
      'Conformance' => 
      array (
        'setter' => 'setConformance',
        'element' => 'Conformance',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance',
      ),
      'Media' => 
      array (
        'setter' => 'setMedia',
        'element' => 'Media',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedia',
      ),
      'FamilyHistory' => 
      array (
        'setter' => 'setFamilyHistory',
        'element' => 'FamilyHistory',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRFamilyHistory',
      ),
      'Other' => 
      array (
        'setter' => 'setOther',
        'element' => 'Other',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROther',
      ),
      'Profile' => 
      array (
        'setter' => 'setProfile',
        'element' => 'Profile',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile',
      ),
      'Location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'Location',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRLocation',
      ),
      'Observation' => 
      array (
        'setter' => 'setObservation',
        'element' => 'Observation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRObservation',
      ),
      'AllergyIntolerance' => 
      array (
        'setter' => 'setAllergyIntolerance',
        'element' => 'AllergyIntolerance',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAllergyIntolerance',
      ),
      'DocumentReference' => 
      array (
        'setter' => 'setDocumentReference',
        'element' => 'DocumentReference',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference',
      ),
      'Immunization' => 
      array (
        'setter' => 'setImmunization',
        'element' => 'Immunization',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImmunization',
      ),
      'RelatedPerson' => 
      array (
        'setter' => 'setRelatedPerson',
        'element' => 'RelatedPerson',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRRelatedPerson',
      ),
      'Specimen' => 
      array (
        'setter' => 'setSpecimen',
        'element' => 'Specimen',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen',
      ),
      'OrderResponse' => 
      array (
        'setter' => 'setOrderResponse',
        'element' => 'OrderResponse',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROrderResponse',
      ),
      'Alert' => 
      array (
        'setter' => 'setAlert',
        'element' => 'Alert',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAlert',
      ),
      'ConceptMap' => 
      array (
        'setter' => 'setConceptMap',
        'element' => 'ConceptMap',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap',
      ),
      'Patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'Patient',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPatient',
      ),
      'Practitioner' => 
      array (
        'setter' => 'setPractitioner',
        'element' => 'Practitioner',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPractitioner',
      ),
      'AdverseReaction' => 
      array (
        'setter' => 'setAdverseReaction',
        'element' => 'AdverseReaction',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAdverseReaction',
      ),
      'ImagingStudy' => 
      array (
        'setter' => 'setImagingStudy',
        'element' => 'ImagingStudy',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRImagingStudy',
      ),
      'DiagnosticOrder' => 
      array (
        'setter' => 'setDiagnosticOrder',
        'element' => 'DiagnosticOrder',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder',
      ),
    ),
  ),
  'Resource' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRResource',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
      'valueCode' => 
      array (
        'setter' => 'setValueCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
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
      'valueResource' => 
      array (
        'setter' => 'setValueResource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
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
      'valueContact' => 
      array (
        'setter' => 'setValueContact',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'valueSchedule' => 
      array (
        'setter' => 'setValueSchedule',
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri-primitive',
        'type' => 'string',
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
      'primary' => 
      array (
        'setter' => 'setPrimary',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'valueSet' => 
      array (
        'setter' => 'setValueSet',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'high' => 
      array (
        'setter' => 'setHigh',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
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
        'element' => 'QuantityCompararator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityCompararator',
      ),
      'units' => 
      array (
        'setter' => 'setUnits',
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
  'QuantityCompararator' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuantityCompararator',
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
        'element' => 'QuantityCompararator-list',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
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
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
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
  'ResourceReference' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'label' => 
      array (
        'setter' => 'setLabel',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
  'Age' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRAge',
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
        'element' => 'QuantityCompararator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityCompararator',
      ),
      'units' => 
      array (
        'setter' => 'setUnits',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRCount',
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
        'element' => 'QuantityCompararator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityCompararator',
      ),
      'units' => 
      array (
        'setter' => 'setUnits',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRMoney',
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
        'element' => 'QuantityCompararator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityCompararator',
      ),
      'units' => 
      array (
        'setter' => 'setUnits',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRDistance',
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
        'element' => 'QuantityCompararator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityCompararator',
      ),
      'units' => 
      array (
        'setter' => 'setUnits',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRDuration',
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
        'element' => 'QuantityCompararator',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantityCompararator',
      ),
      'units' => 
      array (
        'setter' => 'setUnits',
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
  'Schedule' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
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
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'repeat' => 
      array (
        'setter' => 'setRepeat',
        'element' => 'Schedule.Repeat',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSchedule\\FHIRScheduleRepeat',
      ),
    ),
  ),
  'Schedule.Repeat' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSchedule\\FHIRScheduleRepeat',
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
      'frequency' => 
      array (
        'setter' => 'setFrequency',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'when' => 
      array (
        'setter' => 'setWhen',
        'element' => 'EventTiming',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIREventTiming',
      ),
      'duration' => 
      array (
        'setter' => 'setDuration',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'units' => 
      array (
        'setter' => 'setUnits',
        'element' => 'UnitsOfTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUnitsOfTime',
      ),
      'count' => 
      array (
        'setter' => 'setCount',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'end' => 
      array (
        'setter' => 'setEnd',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
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
  'Contact' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRContact',
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
        'element' => 'ContactSystem',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactSystem',
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
        'element' => 'ContactUse',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContactUse',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
    ),
  ),
  'ContactSystem' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRContactSystem',
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
        'element' => 'ContactSystem-list',
        'type' => 'string',
      ),
    ),
  ),
  'ContactUse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRContactUse',
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
        'element' => 'ContactUse-list',
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
      'state' => 
      array (
        'setter' => 'setState',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'zip' => 
      array (
        'setter' => 'setZip',
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
  'ValueSetStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRValueSetStatus',
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
        'element' => 'ValueSetStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AdverseReaction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAdverseReaction',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'didNotOccurFlag' => 
      array (
        'setter' => 'setDidNotOccurFlag',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'recorder' => 
      array (
        'setter' => 'setRecorder',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'symptom' => 
      array (
        'setter' => 'addSymptom',
        'element' => 'AdverseReaction.Symptom',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAdverseReaction\\FHIRAdverseReactionSymptom',
      ),
      'exposure' => 
      array (
        'setter' => 'addExposure',
        'element' => 'AdverseReaction.Exposure',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRAdverseReaction\\FHIRAdverseReactionExposure',
      ),
    ),
  ),
  'AdverseReaction.Symptom' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAdverseReaction\\FHIRAdverseReactionSymptom',
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
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'ReactionSeverity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRReactionSeverity',
      ),
    ),
  ),
  'AdverseReaction.Exposure' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAdverseReaction\\FHIRAdverseReactionExposure',
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
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'ExposureType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExposureType',
      ),
      'causalityExpectation' => 
      array (
        'setter' => 'setCausalityExpectation',
        'element' => 'CausalityExpectation',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCausalityExpectation',
      ),
      'substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'ReactionSeverity' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRReactionSeverity',
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
        'element' => 'ReactionSeverity-list',
        'type' => 'string',
      ),
    ),
  ),
  'ExposureType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRExposureType',
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
        'element' => 'ExposureType-list',
        'type' => 'string',
      ),
    ),
  ),
  'CausalityExpectation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCausalityExpectation',
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
        'element' => 'CausalityExpectation-list',
        'type' => 'string',
      ),
    ),
  ),
  'Alert' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAlert',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'AlertStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAlertStatus',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'AlertStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRAlertStatus',
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
        'element' => 'AlertStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'AllergyIntolerance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRAllergyIntolerance',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'identifier' => 
      array (
        'setter' => 'addIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'criticality' => 
      array (
        'setter' => 'setCriticality',
        'element' => 'Criticality',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCriticality',
      ),
      'sensitivityType' => 
      array (
        'setter' => 'setSensitivityType',
        'element' => 'SensitivityType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSensitivityType',
      ),
      'recordedDate' => 
      array (
        'setter' => 'setRecordedDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'SensitivityStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSensitivityStatus',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'recorder' => 
      array (
        'setter' => 'setRecorder',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'substance' => 
      array (
        'setter' => 'setSubstance',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'reaction' => 
      array (
        'setter' => 'addReaction',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'sensitivityTest' => 
      array (
        'setter' => 'addSensitivityTest',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'SensitivityStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSensitivityStatus',
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
        'element' => 'SensitivityStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Criticality' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCriticality',
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
        'element' => 'Criticality-list',
        'type' => 'string',
      ),
    ),
  ),
  'SensitivityType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSensitivityType',
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
        'element' => 'SensitivityType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Binary' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRBinary',
    'extendedElementName' => 'base64Binary',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'contentType' => 
      array (
        'setter' => 'setContentType',
        'element' => 'xs:string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'CarePlan' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CarePlanStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanStatus',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'modified' => 
      array (
        'setter' => 'setModified',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'concern' => 
      array (
        'setter' => 'addConcern',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'CarePlan.Goal',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanGoal',
      ),
      'activity' => 
      array (
        'setter' => 'addActivity',
        'element' => 'CarePlan.Activity',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanActivity',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'CarePlan.Goal' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanGoal',
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
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CarePlanGoalStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanGoalStatus',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'concern' => 
      array (
        'setter' => 'addConcern',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'goal' => 
      array (
        'setter' => 'addGoal',
        'element' => 'xmlIdRef',
        'type' => NULL,
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'CarePlanActivityStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanActivityStatus',
      ),
      'prohibited' => 
      array (
        'setter' => 'setProhibited',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'actionResulting' => 
      array (
        'setter' => 'addActionResulting',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'detail' => 
      array (
        'setter' => 'setDetail',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'simple' => 
      array (
        'setter' => 'setSimple',
        'element' => 'CarePlan.Simple',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanSimple',
      ),
    ),
  ),
  'CarePlan.Simple' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCarePlan\\FHIRCarePlanSimple',
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
        'element' => 'CarePlanActivityCategory',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanActivityCategory',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'timingSchedule' => 
      array (
        'setter' => 'setTimingSchedule',
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
      ),
      'timingPeriod' => 
      array (
        'setter' => 'setTimingPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'timingString' => 
      array (
        'setter' => 'setTimingString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'performer' => 
      array (
        'setter' => 'addPerformer',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'product' => 
      array (
        'setter' => 'setProduct',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'dailyAmount' => 
      array (
        'setter' => 'setDailyAmount',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'details' => 
      array (
        'setter' => 'setDetails',
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
  'CarePlanActivityCategory' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanActivityCategory',
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
        'element' => 'CarePlanActivityCategory-list',
        'type' => 'string',
      ),
    ),
  ),
  'CarePlanGoalStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRCarePlanGoalStatus',
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
        'element' => 'CarePlanGoalStatus-list',
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
  'Composition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRComposition',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'author' => 
      array (
        'setter' => 'addAuthor',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'event' => 
      array (
        'setter' => 'setEvent',
        'element' => 'Composition.Event',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRComposition\\FHIRCompositionEvent',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'content' => 
      array (
        'setter' => 'setContent',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ValueSetStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRValueSetStatus',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'ConceptMap.Concept',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapConcept',
      ),
    ),
  ),
  'ConceptMap.Concept' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapConcept',
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
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'dependsOn' => 
      array (
        'setter' => 'addDependsOn',
        'element' => 'ConceptMap.DependsOn',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapDependsOn',
      ),
      'map' => 
      array (
        'setter' => 'addMap',
        'element' => 'ConceptMap.Map',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapMap',
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
      'concept' => 
      array (
        'setter' => 'setConcept',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
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
  'ConceptMap.Map' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapMap',
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
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'equivalence' => 
      array (
        'setter' => 'setEquivalence',
        'element' => 'ConceptMapEquivalence',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRConceptMapEquivalence',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'product' => 
      array (
        'setter' => 'addProduct',
        'element' => 'ConceptMap.DependsOn',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConceptMap\\FHIRConceptMapDependsOn',
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
  'Condition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCondition',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'asserter' => 
      array (
        'setter' => 'setAsserter',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'dateAsserted' => 
      array (
        'setter' => 'setDateAsserted',
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
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ConditionStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRConditionStatus',
      ),
      'certainty' => 
      array (
        'setter' => 'setCertainty',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'severity' => 
      array (
        'setter' => 'setSeverity',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'onsetDate' => 
      array (
        'setter' => 'setOnsetDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'onsetAge' => 
      array (
        'setter' => 'setOnsetAge',
        'element' => 'Age',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRAge',
      ),
      'abatementDate' => 
      array (
        'setter' => 'setAbatementDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'abatementAge' => 
      array (
        'setter' => 'setAbatementAge',
        'element' => 'Age',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRAge',
      ),
      'abatementBoolean' => 
      array (
        'setter' => 'setAbatementBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
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
      'location' => 
      array (
        'setter' => 'addLocation',
        'element' => 'Condition.Location',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionLocation',
      ),
      'relatedItem' => 
      array (
        'setter' => 'addRelatedItem',
        'element' => 'Condition.RelatedItem',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionRelatedItem',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'Condition.Location' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionLocation',
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
        'setter' => 'setDetail',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Condition.RelatedItem' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRCondition\\FHIRConditionRelatedItem',
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
        'element' => 'ConditionRelationshipType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRConditionRelationshipType',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'ConditionStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConditionStatus',
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
        'element' => 'ConditionStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConditionRelationshipType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConditionRelationshipType',
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
        'element' => 'ConditionRelationshipType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Conformance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
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
        'element' => 'ConformanceStatementStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRConformanceStatementStatus',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
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
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'operation' => 
      array (
        'setter' => 'addOperation',
        'element' => 'Conformance.Operation1',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceOperation1',
      ),
      'query' => 
      array (
        'setter' => 'addQuery',
        'element' => 'Conformance.Query',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceQuery',
      ),
      'documentMailbox' => 
      array (
        'setter' => 'addDocumentMailbox',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'operation' => 
      array (
        'setter' => 'addOperation',
        'element' => 'Conformance.Operation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceOperation',
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
      'searchInclude' => 
      array (
        'setter' => 'addSearchInclude',
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
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'RestfulOperationType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRestfulOperationType',
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
        'element' => 'SearchParamType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSearchParamType',
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
      'chain' => 
      array (
        'setter' => 'addChain',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.Operation1' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceOperation1',
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
        'element' => 'RestfulOperationSystem',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRestfulOperationSystem',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Conformance.Query' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceQuery',
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
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'Conformance.SearchParam',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRConformance\\FHIRConformanceSearchParam',
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
        'setter' => 'setEndpoint',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'reliableCache' => 
      array (
        'setter' => 'setReliableCache',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
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
      'protocol' => 
      array (
        'setter' => 'addProtocol',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
  'RestfulOperationType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRRestfulOperationType',
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
        'element' => 'RestfulOperationType-list',
        'type' => 'string',
      ),
    ),
  ),
  'ConformanceStatementStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRConformanceStatementStatus',
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
        'element' => 'ConformanceStatementStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'RestfulOperationSystem' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRRestfulOperationSystem',
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
        'element' => 'RestfulOperationSystem-list',
        'type' => 'string',
      ),
    ),
  ),
  'Device' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDevice',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
      'expiry' => 
      array (
        'setter' => 'setExpiry',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
    ),
  ),
  'DeviceObservationReport' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'instant' => 
      array (
        'setter' => 'setInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'virtualDevice' => 
      array (
        'setter' => 'addVirtualDevice',
        'element' => 'DeviceObservationReport.VirtualDevice',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport\\FHIRDeviceObservationReportVirtualDevice',
      ),
    ),
  ),
  'DeviceObservationReport.VirtualDevice' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport\\FHIRDeviceObservationReportVirtualDevice',
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
      'channel' => 
      array (
        'setter' => 'addChannel',
        'element' => 'DeviceObservationReport.Channel',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport\\FHIRDeviceObservationReportChannel',
      ),
    ),
  ),
  'DeviceObservationReport.Channel' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport\\FHIRDeviceObservationReportChannel',
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
      'metric' => 
      array (
        'setter' => 'addMetric',
        'element' => 'DeviceObservationReport.Metric',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport\\FHIRDeviceObservationReportMetric',
      ),
    ),
  ),
  'DeviceObservationReport.Metric' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDeviceObservationReport\\FHIRDeviceObservationReportMetric',
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
      'observation' => 
      array (
        'setter' => 'setObservation',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'DiagnosticOrder' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticOrder',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'orderer' => 
      array (
        'setter' => 'setOrderer',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'clinicalNotes' => 
      array (
        'setter' => 'setClinicalNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'specimen' => 
      array (
        'setter' => 'addSpecimen',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDiagnosticReport',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'DiagnosticReportStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDiagnosticReportStatus',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'performer' => 
      array (
        'setter' => 'setPerformer',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'requestDetail' => 
      array (
        'setter' => 'addRequestDetail',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'serviceCategory' => 
      array (
        'setter' => 'setServiceCategory',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'diagnosticDateTime' => 
      array (
        'setter' => 'setDiagnosticDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'diagnosticPeriod' => 
      array (
        'setter' => 'setDiagnosticPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'specimen' => 
      array (
        'setter' => 'addSpecimen',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'result' => 
      array (
        'setter' => 'addResult',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'imagingStudy' => 
      array (
        'setter' => 'addImagingStudy',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentManifest',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'setter' => 'addSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'recipient' => 
      array (
        'setter' => 'addRecipient',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'DocumentReferenceStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDocumentReferenceStatus',
      ),
      'supercedes' => 
      array (
        'setter' => 'setSupercedes',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'confidentiality' => 
      array (
        'setter' => 'setConfidentiality',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'content' => 
      array (
        'setter' => 'addContent',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'DocumentReference' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'custodian' => 
      array (
        'setter' => 'setCustodian',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'policyManager' => 
      array (
        'setter' => 'setPolicyManager',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'authenticator' => 
      array (
        'setter' => 'setAuthenticator',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'DocumentReferenceStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDocumentReferenceStatus',
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
      'confidentiality' => 
      array (
        'setter' => 'addConfidentiality',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'primaryLanguage' => 
      array (
        'setter' => 'setPrimaryLanguage',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'mimeType' => 
      array (
        'setter' => 'setMimeType',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'format' => 
      array (
        'setter' => 'addFormat',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'size' => 
      array (
        'setter' => 'setSize',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'hash' => 
      array (
        'setter' => 'setHash',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'service' => 
      array (
        'setter' => 'setService',
        'element' => 'DocumentReference.Service',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceService',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'DocumentReference.Service' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceService',
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
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'DocumentReference.Parameter',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceParameter',
      ),
    ),
  ),
  'DocumentReference.Parameter' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRDocumentReference\\FHIRDocumentReferenceParameter',
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
      'value' => 
      array (
        'setter' => 'setValue',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
  'Encounter' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIREncounter',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'Encounter.Participant',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterParticipant',
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
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRDuration',
      ),
      'reason' => 
      array (
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'indication' => 
      array (
        'setter' => 'setIndication',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'priority' => 
      array (
        'setter' => 'setPriority',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'partOf' => 
      array (
        'setter' => 'setPartOf',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'individual' => 
      array (
        'setter' => 'setIndividual',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'admitSource' => 
      array (
        'setter' => 'setAdmitSource',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'accomodation' => 
      array (
        'setter' => 'addAccomodation',
        'element' => 'Encounter.Accomodation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterAccomodation',
      ),
      'diet' => 
      array (
        'setter' => 'setDiet',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'dischargeDisposition' => 
      array (
        'setter' => 'setDischargeDisposition',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dischargeDiagnosis' => 
      array (
        'setter' => 'setDischargeDiagnosis',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'reAdmission' => 
      array (
        'setter' => 'setReAdmission',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
    ),
  ),
  'Encounter.Accomodation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIREncounter\\FHIREncounterAccomodation',
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
      'bed' => 
      array (
        'setter' => 'setBed',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'period' => 
      array (
        'setter' => 'setPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
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
  'FamilyHistory' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRFamilyHistory',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'relation' => 
      array (
        'setter' => 'addRelation',
        'element' => 'FamilyHistory.Relation',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRFamilyHistory\\FHIRFamilyHistoryRelation',
      ),
    ),
  ),
  'FamilyHistory.Relation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRFamilyHistory\\FHIRFamilyHistoryRelation',
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
      'relationship' => 
      array (
        'setter' => 'setRelationship',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
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
      'deceasedBoolean' => 
      array (
        'setter' => 'setDeceasedBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'deceasedAge' => 
      array (
        'setter' => 'setDeceasedAge',
        'element' => 'Age',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRAge',
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
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'condition' => 
      array (
        'setter' => 'addCondition',
        'element' => 'FamilyHistory.Condition',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRFamilyHistory\\FHIRFamilyHistoryCondition',
      ),
    ),
  ),
  'FamilyHistory.Condition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRFamilyHistory\\FHIRFamilyHistoryCondition',
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
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'onsetAge' => 
      array (
        'setter' => 'setOnsetAge',
        'element' => 'Age',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRAge',
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
      'note' => 
      array (
        'setter' => 'setNote',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Group' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRGroup',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
  'ImagingStudy' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImagingStudy',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'dateTime' => 
      array (
        'setter' => 'setDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'accessionNo' => 
      array (
        'setter' => 'setAccessionNo',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'modality' => 
      array (
        'setter' => 'addModality',
        'element' => 'ImagingModality',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRImagingModality',
      ),
      'referrer' => 
      array (
        'setter' => 'setReferrer',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'numberOfInstances' => 
      array (
        'setter' => 'setNumberOfInstances',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'clinicalInformation' => 
      array (
        'setter' => 'setClinicalInformation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'procedure' => 
      array (
        'setter' => 'addProcedure',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'interpreter' => 
      array (
        'setter' => 'setInterpreter',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'modality' => 
      array (
        'setter' => 'setModality',
        'element' => 'Modality',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRModality',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
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
      'dateTime' => 
      array (
        'setter' => 'setDateTime',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'uid' => 
      array (
        'setter' => 'setUid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'sopclass' => 
      array (
        'setter' => 'setSopclass',
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
      'url' => 
      array (
        'setter' => 'setUrl',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'attachment' => 
      array (
        'setter' => 'setAttachment',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'ImagingModality' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRImagingModality',
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
        'element' => 'ImagingModality-list',
        'type' => 'string',
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
  'Modality' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRModality',
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
        'element' => 'Modality-list',
        'type' => 'string',
      ),
    ),
  ),
  'Immunization' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImmunization',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
      'vaccineType' => 
      array (
        'setter' => 'setVaccineType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'refusedIndicator' => 
      array (
        'setter' => 'setRefusedIndicator',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'requester' => 
      array (
        'setter' => 'setRequester',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'manufacturer' => 
      array (
        'setter' => 'setManufacturer',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
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
      'refusalReason' => 
      array (
        'setter' => 'addRefusalReason',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'doseTarget' => 
      array (
        'setter' => 'setDoseTarget',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRImmunizationRecommendation',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'vaccineType' => 
      array (
        'setter' => 'setVaccineType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'doseNumber' => 
      array (
        'setter' => 'setDoseNumber',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'supportingPatientInformation' => 
      array (
        'setter' => 'addSupportingPatientInformation',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'series' => 
      array (
        'setter' => 'setSeries',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'List' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRList',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'ordered' => 
      array (
        'setter' => 'setOrdered',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'ListMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRListMode',
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
        'setter' => 'addFlag',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRLocation',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
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
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'LocationStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRLocationStatus',
      ),
      'partOf' => 
      array (
        'setter' => 'setPartOf',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'mode' => 
      array (
        'setter' => 'setMode',
        'element' => 'LocationMode',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRLocationMode',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedia',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'MediaType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMediaType',
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
      'dateTime' => 
      array (
        'setter' => 'setDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'operator' => 
      array (
        'setter' => 'setOperator',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'width' => 
      array (
        'setter' => 'setWidth',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'frames' => 
      array (
        'setter' => 'setFrames',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'length' => 
      array (
        'setter' => 'setLength',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'content' => 
      array (
        'setter' => 'setContent',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'MediaType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMediaType',
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
        'element' => 'MediaType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Medication' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedication',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'kind' => 
      array (
        'setter' => 'setKind',
        'element' => 'MedicationKind',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationKind',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'amount' => 
      array (
        'setter' => 'setAmount',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
    ),
  ),
  'MedicationKind' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRMedicationKind',
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
        'element' => 'MedicationKind-list',
        'type' => 'string',
      ),
    ),
  ),
  'MedicationAdministration' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationAdministration',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'practitioner' => 
      array (
        'setter' => 'setPractitioner',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'prescription' => 
      array (
        'setter' => 'setPrescription',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'whenGiven' => 
      array (
        'setter' => 'setWhenGiven',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'medication' => 
      array (
        'setter' => 'setMedication',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'device' => 
      array (
        'setter' => 'addDevice',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'dosage' => 
      array (
        'setter' => 'addDosage',
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
      'timingDateTime' => 
      array (
        'setter' => 'setTimingDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'timingPeriod' => 
      array (
        'setter' => 'setTimingPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
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
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'rate' => 
      array (
        'setter' => 'setRate',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'maxDosePerPeriod' => 
      array (
        'setter' => 'setMaxDosePerPeriod',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'dispenser' => 
      array (
        'setter' => 'setDispenser',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'authorizingPrescription' => 
      array (
        'setter' => 'addAuthorizingPrescription',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'dispense' => 
      array (
        'setter' => 'addDispense',
        'element' => 'MedicationDispense.Dispense',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDispense',
      ),
      'substitution' => 
      array (
        'setter' => 'setSubstitution',
        'element' => 'MedicationDispense.Substitution',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseSubstitution',
      ),
    ),
  ),
  'MedicationDispense.Dispense' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDispense',
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
        'element' => 'MedicationDispenseStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRMedicationDispenseStatus',
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
      'medication' => 
      array (
        'setter' => 'setMedication',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'receiver' => 
      array (
        'setter' => 'addReceiver',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'dosage' => 
      array (
        'setter' => 'addDosage',
        'element' => 'MedicationDispense.Dosage',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDosage',
      ),
    ),
  ),
  'MedicationDispense.Dosage' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationDispense\\FHIRMedicationDispenseDosage',
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
      'additionalInstructions' => 
      array (
        'setter' => 'setAdditionalInstructions',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'timingDateTime' => 
      array (
        'setter' => 'setTimingDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'timingPeriod' => 
      array (
        'setter' => 'setTimingPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'timingSchedule' => 
      array (
        'setter' => 'setTimingSchedule',
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
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
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'rate' => 
      array (
        'setter' => 'setRate',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
  'MedicationPrescription' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationPrescription',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'prescriber' => 
      array (
        'setter' => 'setPrescriber',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonResource' => 
      array (
        'setter' => 'setReasonResource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'medication' => 
      array (
        'setter' => 'setMedication',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'timingDateTime' => 
      array (
        'setter' => 'setTimingDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'timingPeriod' => 
      array (
        'setter' => 'setTimingPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'timingSchedule' => 
      array (
        'setter' => 'setTimingSchedule',
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
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
      'doseQuantity' => 
      array (
        'setter' => 'setDoseQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'rate' => 
      array (
        'setter' => 'setRate',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
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
      'medication' => 
      array (
        'setter' => 'setMedication',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'expectedSupplyDuration' => 
      array (
        'setter' => 'setExpectedSupplyDuration',
        'element' => 'Duration',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity\\FHIRDuration',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMedicationStatement',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'whenGiven' => 
      array (
        'setter' => 'setWhenGiven',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'medication' => 
      array (
        'setter' => 'setMedication',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'device' => 
      array (
        'setter' => 'addDevice',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'timing' => 
      array (
        'setter' => 'setTiming',
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
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
      'quantity' => 
      array (
        'setter' => 'setQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'rate' => 
      array (
        'setter' => 'setRate',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'maxDosePerPeriod' => 
      array (
        'setter' => 'setMaxDosePerPeriod',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
    ),
  ),
  'MessageHeader' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRMessageHeader',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'receiver' => 
      array (
        'setter' => 'setReceiver',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'responsible' => 
      array (
        'setter' => 'setResponsible',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
  'Observation' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRObservation',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'name' => 
      array (
        'setter' => 'setName',
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
      'valueAttachment' => 
      array (
        'setter' => 'setValueAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'valueRatio' => 
      array (
        'setter' => 'setValueRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'valuePeriod' => 
      array (
        'setter' => 'setValuePeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'valueString' => 
      array (
        'setter' => 'setValueString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
      'appliesDateTime' => 
      array (
        'setter' => 'setAppliesDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'appliesPeriod' => 
      array (
        'setter' => 'setAppliesPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'issued' => 
      array (
        'setter' => 'setIssued',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ObservationStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRObservationStatus',
      ),
      'reliability' => 
      array (
        'setter' => 'setReliability',
        'element' => 'ObservationReliability',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRObservationReliability',
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
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'specimen' => 
      array (
        'setter' => 'setSpecimen',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'performer' => 
      array (
        'setter' => 'addPerformer',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'high' => 
      array (
        'setter' => 'setHigh',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'ObservationReliability' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRObservationReliability',
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
        'element' => 'ObservationReliability-list',
        'type' => 'string',
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
  'OperationOutcome' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROperationOutcome',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'details' => 
      array (
        'setter' => 'setDetails',
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
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROrder',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'reasonCodeableConcept' => 
      array (
        'setter' => 'setReasonCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'reasonResource' => 
      array (
        'setter' => 'setReasonResource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'authority' => 
      array (
        'setter' => 'setAuthority',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
      ),
    ),
  ),
  'OrderResponse' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROrderResponse',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'authorityCodeableConcept' => 
      array (
        'setter' => 'setAuthorityCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'authorityResource' => 
      array (
        'setter' => 'setAuthorityResource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'code' => 
      array (
        'setter' => 'setCode',
        'element' => 'OrderOutcomeStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROrderOutcomeStatus',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'OrderOutcomeStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIROrderOutcomeStatus',
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
        'element' => 'OrderOutcomeStatus-list',
        'type' => 'string',
      ),
    ),
  ),
  'Organization' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROrganization',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'contact' => 
      array (
        'setter' => 'addContact',
        'element' => 'Organization.Contact',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIROrganization\\FHIROrganizationContact',
      ),
      'location' => 
      array (
        'setter' => 'addLocation',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
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
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
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
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Other' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIROther',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'created' => 
      array (
        'setter' => 'setCreated',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
    ),
  ),
  'Patient' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPatient',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
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
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'careProvider' => 
      array (
        'setter' => 'addCareProvider',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'managingOrganization' => 
      array (
        'setter' => 'setManagingOrganization',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'link' => 
      array (
        'setter' => 'addLink',
        'element' => 'Patient.Link',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRPatient\\FHIRPatientLink',
      ),
      'active' => 
      array (
        'setter' => 'setActive',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
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
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
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
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
  'Practitioner' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRPractitioner',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
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
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'birthDate' => 
      array (
        'setter' => 'setBirthDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'photo' => 
      array (
        'setter' => 'addPhoto',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'organization' => 
      array (
        'setter' => 'setOrganization',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'role' => 
      array (
        'setter' => 'addRole',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'Procedure' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProcedure',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'bodySite' => 
      array (
        'setter' => 'addBodySite',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'indication' => 
      array (
        'setter' => 'addIndication',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'performer' => 
      array (
        'setter' => 'addPerformer',
        'element' => 'Procedure.Performer',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProcedure\\FHIRProcedurePerformer',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'encounter' => 
      array (
        'setter' => 'setEncounter',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'report' => 
      array (
        'setter' => 'addReport',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'complication' => 
      array (
        'setter' => 'addComplication',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'followUp' => 
      array (
        'setter' => 'setFollowUp',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'relatedItem' => 
      array (
        'setter' => 'addRelatedItem',
        'element' => 'Procedure.RelatedItem',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProcedure\\FHIRProcedureRelatedItem',
      ),
      'notes' => 
      array (
        'setter' => 'setNotes',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
      'person' => 
      array (
        'setter' => 'setPerson',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
    ),
  ),
  'Procedure.RelatedItem' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProcedure\\FHIRProcedureRelatedItem',
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
        'element' => 'ProcedureRelationshipType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRProcedureRelationshipType',
      ),
      'target' => 
      array (
        'setter' => 'setTarget',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'ProcedureRelationshipType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRProcedureRelationshipType',
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
        'element' => 'ProcedureRelationshipType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Profile' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'code' => 
      array (
        'setter' => 'addCode',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ResourceProfileStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceProfileStatus',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
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
      'fhirVersion' => 
      array (
        'setter' => 'setFhirVersion',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'mapping' => 
      array (
        'setter' => 'addMapping',
        'element' => 'Profile.Mapping',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileMapping',
      ),
      'structure' => 
      array (
        'setter' => 'addStructure',
        'element' => 'Profile.Structure',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileStructure',
      ),
      'extensionDefn' => 
      array (
        'setter' => 'addExtensionDefn',
        'element' => 'Profile.ExtensionDefn',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileExtensionDefn',
      ),
      'query' => 
      array (
        'setter' => 'addQuery',
        'element' => 'Profile.Query',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileQuery',
      ),
    ),
  ),
  'Profile.Mapping' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileMapping',
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
  'Profile.Structure' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileStructure',
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
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'publish' => 
      array (
        'setter' => 'setPublish',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'purpose' => 
      array (
        'setter' => 'setPurpose',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'element' => 
      array (
        'setter' => 'addElement',
        'element' => 'Profile.Element',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileElement',
      ),
      'searchParam' => 
      array (
        'setter' => 'addSearchParam',
        'element' => 'Profile.SearchParam',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileSearchParam',
      ),
    ),
  ),
  'Profile.Element' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileElement',
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
      'slicing' => 
      array (
        'setter' => 'setSlicing',
        'element' => 'Profile.Slicing',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileSlicing',
      ),
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'Profile.Definition',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileDefinition',
      ),
    ),
  ),
  'Profile.Slicing' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileSlicing',
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
      'discriminator' => 
      array (
        'setter' => 'setDiscriminator',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
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
  'Profile.Definition' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileDefinition',
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
      'short' => 
      array (
        'setter' => 'setShort',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'formal' => 
      array (
        'setter' => 'setFormal',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'comments' => 
      array (
        'setter' => 'setComments',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'requirements' => 
      array (
        'setter' => 'setRequirements',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'synonym' => 
      array (
        'setter' => 'addSynonym',
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
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'Profile.Type',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileType',
      ),
      'nameReference' => 
      array (
        'setter' => 'setNameReference',
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
      'valueResource' => 
      array (
        'setter' => 'setValueResource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'valueSampledData' => 
      array (
        'setter' => 'setValueSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
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
      'valueContact' => 
      array (
        'setter' => 'setValueContact',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'valueSchedule' => 
      array (
        'setter' => 'setValueSchedule',
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
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
      'exampleResource' => 
      array (
        'setter' => 'setExampleResource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'exampleSampledData' => 
      array (
        'setter' => 'setExampleSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
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
      'exampleContact' => 
      array (
        'setter' => 'setExampleContact',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'exampleSchedule' => 
      array (
        'setter' => 'setExampleSchedule',
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
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
        'element' => 'Profile.Constraint',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileConstraint',
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
      'binding' => 
      array (
        'setter' => 'setBinding',
        'element' => 'Profile.Binding',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileBinding',
      ),
      'mapping' => 
      array (
        'setter' => 'addMapping',
        'element' => 'Profile.Mapping1',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileMapping1',
      ),
    ),
  ),
  'Profile.Type' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileType',
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
      'profile' => 
      array (
        'setter' => 'setProfile',
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
  'Profile.Constraint' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileConstraint',
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
      'key' => 
      array (
        'setter' => 'setKey',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'name' => 
      array (
        'setter' => 'setName',
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
  'Profile.Binding' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileBinding',
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
      'isExtensible' => 
      array (
        'setter' => 'setIsExtensible',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'conformance' => 
      array (
        'setter' => 'setConformance',
        'element' => 'BindingConformance',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBindingConformance',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'referenceUri' => 
      array (
        'setter' => 'setReferenceUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'referenceResource' => 
      array (
        'setter' => 'setReferenceResource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'Profile.Mapping1' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileMapping1',
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
      'map' => 
      array (
        'setter' => 'setMap',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'Profile.SearchParam' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileSearchParam',
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
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'SearchParamType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSearchParamType',
      ),
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'xpath' => 
      array (
        'setter' => 'setXpath',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
    ),
  ),
  'Profile.ExtensionDefn' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileExtensionDefn',
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
      'definition' => 
      array (
        'setter' => 'setDefinition',
        'element' => 'Profile.Definition',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileDefinition',
      ),
    ),
  ),
  'Profile.Query' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileQuery',
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
      'documentation' => 
      array (
        'setter' => 'setDocumentation',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'Profile.SearchParam',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRProfile\\FHIRProfileSearchParam',
      ),
    ),
  ),
  'BindingConformance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRBindingConformance',
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
        'element' => 'BindingConformance-list',
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
  'ResourceProfileStatus' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRResourceProfileStatus',
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
        'element' => 'ResourceProfileStatus-list',
        'type' => 'string',
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
  'Provenance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRProvenance',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'setter' => 'setReason',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'location' => 
      array (
        'setter' => 'setLocation',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'integritySignature' => 
      array (
        'setter' => 'setIntegritySignature',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
  'Query' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuery',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'response' => 
      array (
        'setter' => 'setResponse',
        'element' => 'Query.Response',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRQuery\\FHIRQueryResponse',
      ),
    ),
  ),
  'Query.Response' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuery\\FHIRQueryResponse',
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
      'outcome' => 
      array (
        'setter' => 'setOutcome',
        'element' => 'QueryOutcome',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQueryOutcome',
      ),
      'total' => 
      array (
        'setter' => 'setTotal',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'parameter' => 
      array (
        'setter' => 'addParameter',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'first' => 
      array (
        'setter' => 'addFirst',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'previous' => 
      array (
        'setter' => 'addPrevious',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'next' => 
      array (
        'setter' => 'addNext',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'last' => 
      array (
        'setter' => 'addLast',
        'element' => 'Extension',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRExtension',
      ),
      'reference' => 
      array (
        'setter' => 'addReference',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'QueryOutcome' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRQueryOutcome',
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
        'element' => 'QueryOutcome-list',
        'type' => 'string',
      ),
    ),
  ),
  'Questionnaire' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRQuestionnaire',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'QuestionnaireStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuestionnaireStatus',
      ),
      'authored' => 
      array (
        'setter' => 'setAuthored',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'author' => 
      array (
        'setter' => 'setAuthor',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'header' => 
      array (
        'setter' => 'setHeader',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
      'name' => 
      array (
        'setter' => 'setName',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'answerDecimal' => 
      array (
        'setter' => 'setAnswerDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'answerInteger' => 
      array (
        'setter' => 'setAnswerInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'answerBoolean' => 
      array (
        'setter' => 'setAnswerBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'answerDate' => 
      array (
        'setter' => 'setAnswerDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'answerString' => 
      array (
        'setter' => 'setAnswerString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'answerDateTime' => 
      array (
        'setter' => 'setAnswerDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'answerInstant' => 
      array (
        'setter' => 'setAnswerInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'choice' => 
      array (
        'setter' => 'addChoice',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'options' => 
      array (
        'setter' => 'setOptions',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'dataBoolean' => 
      array (
        'setter' => 'setDataBoolean',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'dataInteger' => 
      array (
        'setter' => 'setDataInteger',
        'element' => 'integer',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInteger',
      ),
      'dataDecimal' => 
      array (
        'setter' => 'setDataDecimal',
        'element' => 'decimal',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDecimal',
      ),
      'dataBase64Binary' => 
      array (
        'setter' => 'setDataBase64Binary',
        'element' => 'base64Binary',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBase64Binary',
      ),
      'dataInstant' => 
      array (
        'setter' => 'setDataInstant',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'dataString' => 
      array (
        'setter' => 'setDataString',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'dataUri' => 
      array (
        'setter' => 'setDataUri',
        'element' => 'uri',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUri',
      ),
      'dataDate' => 
      array (
        'setter' => 'setDataDate',
        'element' => 'date',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDate',
      ),
      'dataDateTime' => 
      array (
        'setter' => 'setDataDateTime',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'dataCode' => 
      array (
        'setter' => 'setDataCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'dataOid' => 
      array (
        'setter' => 'setDataOid',
        'element' => 'oid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIROid',
      ),
      'dataUuid' => 
      array (
        'setter' => 'setDataUuid',
        'element' => 'uuid',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRUuid',
      ),
      'dataId' => 
      array (
        'setter' => 'setDataId',
        'element' => 'id',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRId',
      ),
      'dataAttachment' => 
      array (
        'setter' => 'setDataAttachment',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
      'dataIdentifier' => 
      array (
        'setter' => 'setDataIdentifier',
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'dataCodeableConcept' => 
      array (
        'setter' => 'setDataCodeableConcept',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'dataCoding' => 
      array (
        'setter' => 'setDataCoding',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'dataQuantity' => 
      array (
        'setter' => 'setDataQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'dataRange' => 
      array (
        'setter' => 'setDataRange',
        'element' => 'Range',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRange',
      ),
      'dataPeriod' => 
      array (
        'setter' => 'setDataPeriod',
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'dataRatio' => 
      array (
        'setter' => 'setDataRatio',
        'element' => 'Ratio',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRRatio',
      ),
      'dataResource' => 
      array (
        'setter' => 'setDataResource',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'dataSampledData' => 
      array (
        'setter' => 'setDataSampledData',
        'element' => 'SampledData',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSampledData',
      ),
      'dataHumanName' => 
      array (
        'setter' => 'setDataHumanName',
        'element' => 'HumanName',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHumanName',
      ),
      'dataAddress' => 
      array (
        'setter' => 'setDataAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'dataContact' => 
      array (
        'setter' => 'setDataContact',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'dataSchedule' => 
      array (
        'setter' => 'setDataSchedule',
        'element' => 'Schedule',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSchedule',
      ),
      'remarks' => 
      array (
        'setter' => 'setRemarks',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
  'RelatedPerson' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRRelatedPerson',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'gender' => 
      array (
        'setter' => 'setGender',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'address' => 
      array (
        'setter' => 'setAddress',
        'element' => 'Address',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAddress',
      ),
      'photo' => 
      array (
        'setter' => 'addPhoto',
        'element' => 'Attachment',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRAttachment',
      ),
    ),
  ),
  'SecurityEvent' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'event' => 
      array (
        'setter' => 'setEvent',
        'element' => 'SecurityEvent.Event',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventEvent',
      ),
      'participant' => 
      array (
        'setter' => 'addParticipant',
        'element' => 'SecurityEvent.Participant',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventParticipant',
      ),
      'source' => 
      array (
        'setter' => 'setSource',
        'element' => 'SecurityEvent.Source',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventSource',
      ),
      'object' => 
      array (
        'setter' => 'addObject',
        'element' => 'SecurityEvent.Object',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventObject',
      ),
    ),
  ),
  'SecurityEvent.Event' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventEvent',
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
      'subtype' => 
      array (
        'setter' => 'addSubtype',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'action' => 
      array (
        'setter' => 'setAction',
        'element' => 'SecurityEventAction',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventAction',
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
        'element' => 'SecurityEventOutcome',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventOutcome',
      ),
      'outcomeDesc' => 
      array (
        'setter' => 'setOutcomeDesc',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
    ),
  ),
  'SecurityEvent.Participant' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventParticipant',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'userId' => 
      array (
        'setter' => 'setUserId',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
      'media' => 
      array (
        'setter' => 'setMedia',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
      'network' => 
      array (
        'setter' => 'setNetwork',
        'element' => 'SecurityEvent.Network',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventNetwork',
      ),
    ),
  ),
  'SecurityEvent.Network' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventNetwork',
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
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'SecurityEventParticipantNetworkType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventParticipantNetworkType',
      ),
    ),
  ),
  'SecurityEvent.Source' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventSource',
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
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'type' => 
      array (
        'setter' => 'addType',
        'element' => 'Coding',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCoding',
      ),
    ),
  ),
  'SecurityEvent.Object' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventObject',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'type' => 
      array (
        'setter' => 'setType',
        'element' => 'SecurityEventObjectType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventObjectType',
      ),
      'role' => 
      array (
        'setter' => 'setRole',
        'element' => 'SecurityEventObjectRole',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventObjectRole',
      ),
      'lifecycle' => 
      array (
        'setter' => 'setLifecycle',
        'element' => 'SecurityEventObjectLifecycle',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventObjectLifecycle',
      ),
      'sensitivity' => 
      array (
        'setter' => 'setSensitivity',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
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
        'element' => 'SecurityEvent.Detail',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventDetail',
      ),
    ),
  ),
  'SecurityEvent.Detail' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSecurityEvent\\FHIRSecurityEventDetail',
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
  'SecurityEventObjectRole' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventObjectRole',
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
        'element' => 'SecurityEventObjectRole-list',
        'type' => 'string',
      ),
    ),
  ),
  'SecurityEventObjectType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventObjectType',
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
        'element' => 'SecurityEventObjectType-list',
        'type' => 'string',
      ),
    ),
  ),
  'SecurityEventAction' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventAction',
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
        'element' => 'SecurityEventAction-list',
        'type' => 'string',
      ),
    ),
  ),
  'SecurityEventObjectLifecycle' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventObjectLifecycle',
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
        'element' => 'SecurityEventObjectLifecycle-list',
        'type' => 'string',
      ),
    ),
  ),
  'SecurityEventParticipantNetworkType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventParticipantNetworkType',
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
        'element' => 'SecurityEventParticipantNetworkType-list',
        'type' => 'string',
      ),
    ),
  ),
  'SecurityEventOutcome' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRSecurityEventOutcome',
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
        'element' => 'SecurityEventOutcome-list',
        'type' => 'string',
      ),
    ),
  ),
  'Specimen' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
      'source' => 
      array (
        'setter' => 'addSource',
        'element' => 'Specimen.Source',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenSource',
      ),
      'subject' => 
      array (
        'setter' => 'setSubject',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
  'Specimen.Source' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSpecimen\\FHIRSpecimenSource',
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
        'setter' => 'setRelationship',
        'element' => 'HierarchicalRelationshipType',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRHierarchicalRelationshipType',
      ),
      'target' => 
      array (
        'setter' => 'addTarget',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'method' => 
      array (
        'setter' => 'setMethod',
        'element' => 'CodeableConcept',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCodeableConcept',
      ),
      'sourceSite' => 
      array (
        'setter' => 'setSourceSite',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'specimenQuantity' => 
      array (
        'setter' => 'setSpecimenQuantity',
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
      ),
      'additive' => 
      array (
        'setter' => 'setAdditive',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'HierarchicalRelationshipType' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRElement\\FHIRHierarchicalRelationshipType',
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
        'element' => 'HierarchicalRelationshipType-list',
        'type' => 'string',
      ),
    ),
  ),
  'Substance' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSubstance',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
      'instance' => 
      array (
        'setter' => 'setInstance',
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
        'element' => 'Quantity',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRQuantity',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
    ),
  ),
  'Supply' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRSupply',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'patient' => 
      array (
        'setter' => 'setPatient',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'supplier' => 
      array (
        'setter' => 'setSupplier',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
        'element' => 'Period',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRPeriod',
      ),
      'destination' => 
      array (
        'setter' => 'setDestination',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
      ),
      'receiver' => 
      array (
        'setter' => 'addReceiver',
        'element' => 'ResourceReference',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRResourceReference',
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
  'ValueSet' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet',
    'extendedElementName' => 'Resource',
    'properties' => 
    array (
      'extension' => 
      array (
        'setter' => 'addExtension',
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
      'text' => 
      array (
        'setter' => 'setText',
        'element' => 'Narrative',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRNarrative',
      ),
      'contained' => 
      array (
        'setter' => 'addContained',
        'element' => 'Resource.Inline',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRResource\\FHIRResourceInline',
      ),
      'identifier' => 
      array (
        'setter' => 'setIdentifier',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
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
      'publisher' => 
      array (
        'setter' => 'setPublisher',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'telecom' => 
      array (
        'setter' => 'addTelecom',
        'element' => 'Contact',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRContact',
      ),
      'description' => 
      array (
        'setter' => 'setDescription',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'copyright' => 
      array (
        'setter' => 'setCopyright',
        'element' => 'string',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRString',
      ),
      'status' => 
      array (
        'setter' => 'setStatus',
        'element' => 'ValueSetStatus',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRValueSetStatus',
      ),
      'experimental' => 
      array (
        'setter' => 'setExperimental',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'extensible' => 
      array (
        'setter' => 'setExtensible',
        'element' => 'boolean',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRBoolean',
      ),
      'date' => 
      array (
        'setter' => 'setDate',
        'element' => 'dateTime',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRDateTime',
      ),
      'define' => 
      array (
        'setter' => 'setDefine',
        'element' => 'ValueSet.Define',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetDefine',
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
  'ValueSet.Define' => 
  array (
    'fullClassName' => '\\PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetDefine',
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
      'concept' => 
      array (
        'setter' => 'addConcept',
        'element' => 'ValueSet.Concept',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetConcept',
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
      'code' => 
      array (
        'setter' => 'addCode',
        'element' => 'code',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRCode',
      ),
      'filter' => 
      array (
        'setter' => 'addFilter',
        'element' => 'ValueSet.Filter',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetFilter',
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
        'element' => 'Identifier',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRIdentifier',
      ),
      'timestamp' => 
      array (
        'setter' => 'setTimestamp',
        'element' => 'instant',
        'type' => 'PHPFHIRGenerated\\FHIRElement\\FHIRInstant',
      ),
      'contains' => 
      array (
        'setter' => 'addContains',
        'element' => 'ValueSet.Contains',
        'type' => 'PHPFHIRGenerated\\FHIRResource\\FHIRValueSet\\FHIRValueSetContains',
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