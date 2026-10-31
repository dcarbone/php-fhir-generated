<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\SDC\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 31st, 2026 01:12+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2026 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 *
 * Profile Copyright Notice:
 *
 * Package: hl7.fhir.uv.sdc.r4 4.0.0
 * Author: HL7 International / FHIR Infrastructure
 * License: CC0-1.0
 */

use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Validation\ValueMatcher;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;

/**
 * Class SDCQuestionnaireExtractObservation
 *
 * Profile: http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-obsn
 * Title: Extractable Questionnaire - Observation
 * Constrains: Questionnaire
 */
class SDCQuestionnaireExtractObservation extends SDCBaseQuestionnaire
{
    public const PROFILE_URL = 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-obsn';
    public const PROFILE_VERSION = '4.0.0';
    public const PROFILE_NAME = 'SDCQuestionnaireExtractObservation';
    public const PROFILE_BASE_TYPE = 'Questionnaire';

    /**
     * Invariants declared by the profile.  Informational only; these are not evaluated.
     *
     * @var array<int, array<string, null|string>>
     */
    public const PROFILE_INVARIANTS = [
        [
            'key' => 'sdc-obsn-1',
            'severity' => 'error',
            'human' => 'Display items cannot be extracted to Observations.',
            'expression' => 'type!=\'display\' or extension(\'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-observationExtract\').empty()',
            'path' => 'item',
        ],
        [
            'key' => 'sdc-1',
            'severity' => 'error',
            'human' => 'An item cannot have an answerExpression if answerOption or answerValueSet is already present.',
            'expression' => 'extension(\'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-answerExpression\').empty().not() implies (answerOption.empty() and answerValueSet.empty())',
            'path' => 'item',
        ],
        [
            'key' => 'que-1a',
            'severity' => 'error',
            'human' => 'Group items must have nested items when Questionanire is complete',
            'expression' => '(type=\'group\' and %resource.status=\'complete\') implies item.empty().not()',
            'path' => 'item',
        ],
        [
            'key' => 'que-1b',
            'severity' => 'warning',
            'human' => 'Groups should have items',
            'expression' => 'type=\'group\' implies item.empty().not()',
            'path' => 'item',
        ],
        [
            'key' => 'que-1c',
            'severity' => 'error',
            'human' => 'Display items cannot have child items',
            'expression' => 'type=\'display\' implies item.empty()',
            'path' => 'item',
        ],
        [
            'key' => 'que-14',
            'severity' => 'warning',
            'human' => 'Can only have answerConstraint if answerOption, answerValueSet, or answerExpression are present. (This is a warning because other extensions may serve the same purpose)',
            'expression' => 'extension(\'http://hl7.org/fhir/5.0/StructureDefinition/extension-Questionnaire.item.answerConstraint\').exists() implies answerOption.exists() or answerValueSet.exists() or extension(\'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-answerExpression\').exists()',
            'path' => 'item',
        ],
        [
            'key' => 'cnl-1',
            'severity' => 'warning',
            'human' => 'Warning	Questionnaire.url	URL should not contain | or # - these characters make processing canonical references problematic',
            'expression' => 'exists() implies matches(\'^[^|# ]+$\')',
            'path' => 'url',
        ],
        [
            'key' => 'sdc-base-1',
            'severity' => 'error',
            'human' => 'AnswerOption.valueCoding must have at least one of code or display',
            'expression' => 'code.exists() or display.exists()',
            'path' => 'item.answerOption.value[x]',
        ],
        [
            'key' => 'sdc-base-2',
            'severity' => 'error',
            'human' => 'If code exists, system must exist',
            'expression' => 'code.exists() implies system.exists()',
            'path' => 'item.answerOption.value[x]',
        ],
        [
            'key' => 'sdc-base-4',
            'severity' => 'error',
            'human' => 'Reference must have at least one of reference, display, and identifier',
            'expression' => 'reference.exists() or display.exists() or identifier.exists()',
            'path' => 'item.answerOption.value[x]',
        ],
        [
            'key' => 'que-15',
            'severity' => 'error',
            'human' => 'Link ids must be 255 characters or less',
            'expression' => '$this.length() <= 255',
            'path' => 'item.linkId',
        ],
    ];

    private const _PROFILE_VALIDATION_RULES = [
        self::FIELD_EXTENSION => [
            'slice_occurs' => [
                [
                    'name' => 'observationExtract',
                    'match' => self::_SLICE_MATCH_0,
                    'max' => 1,
                ],
                [
                    'name' => 'designNote',
                    'match' => self::_SLICE_MATCH_8,
                    'max' => 1,
                ],
                [
                    'name' => 'assemble-expectation',
                    'match' => self::_SLICE_MATCH_10,
                    'max' => 1,
                ],
                [
                    'name' => 'versionAlgorithm',
                    'match' => self::_SLICE_MATCH_14,
                    'max' => 1,
                ],
                [
                    'name' => 'copyrightLabel',
                    'match' => self::_SLICE_MATCH_15,
                    'max' => 1,
                ],
            ],
        ],
        'item.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'unit',
                    'match' => self::_SLICE_MATCH_2,
                    'max' => 1,
                ],
                [
                    'name' => 'observationExtract',
                    'match' => self::_SLICE_MATCH_3,
                    'max' => 1,
                ],
                [
                    'name' => 'isSubject',
                    'match' => self::_SLICE_MATCH_5,
                    'max' => 1,
                ],
                [
                    'name' => 'observationExtractEntry',
                    'match' => self::_SLICE_MATCH_6,
                    'max' => 1,
                ],
                [
                    'name' => 'designNote',
                    'match' => self::_SLICE_MATCH_11,
                    'max' => 1,
                ],
                [
                    'name' => 'itemOptionalDisplay',
                    'match' => self::_SLICE_MATCH_12,
                    'max' => 1,
                ],
                [
                    'name' => 'hidden',
                    'match' => self::_SLICE_MATCH_17,
                    'max' => 1,
                ],
                [
                    'name' => 'disabledDisplay',
                    'match' => self::_SLICE_MATCH_19,
                    'max' => 1,
                ],
                [
                    'name' => 'answerConstraint',
                    'match' => self::_SLICE_MATCH_20,
                    'max' => 1,
                ],
            ],
        ],
        'item.code.extension' => [
            'slice_occurs' => [
                [
                    'name' => 'observationExtract',
                    'match' => self::_SLICE_MATCH_7,
                    'max' => 1,
                ],
            ],
        ],
        self::FIELD_URL => [
            'min_occurs' => 1,
        ],
        self::FIELD_SUBJECT_TYPE => [
            'code_binding' => [
                [
                    'http://hl7.org/fhir/resource-types',
                    'Account',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ActivityDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'AdverseEvent',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'AllergyIntolerance',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Appointment',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'AppointmentResponse',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'AuditEvent',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Basic',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Binary',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'BiologicallyDerivedProduct',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'BodyStructure',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Bundle',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'CapabilityStatement',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'CarePlan',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'CareTeam',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'CatalogEntry',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ChargeItem',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ChargeItemDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Claim',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ClaimResponse',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ClinicalImpression',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'CodeSystem',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Communication',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'CommunicationRequest',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'CompartmentDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Composition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ConceptMap',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Condition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Consent',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Contract',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Coverage',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'CoverageEligibilityRequest',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'CoverageEligibilityResponse',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'DetectedIssue',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Device',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'DeviceDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'DeviceMetric',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'DeviceRequest',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'DeviceUseStatement',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'DiagnosticReport',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'DocumentManifest',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'DocumentReference',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'DomainResource',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'EffectEvidenceSynthesis',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Encounter',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Endpoint',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'EnrollmentRequest',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'EnrollmentResponse',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'EpisodeOfCare',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'EventDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Evidence',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'EvidenceVariable',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ExampleScenario',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ExplanationOfBenefit',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'FamilyMemberHistory',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Flag',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Goal',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'GraphDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Group',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'GuidanceResponse',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'HealthcareService',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ImagingStudy',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Immunization',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ImmunizationEvaluation',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ImmunizationRecommendation',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ImplementationGuide',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'InsurancePlan',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Invoice',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Library',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Linkage',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'List',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Location',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Measure',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MeasureReport',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Media',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Medication',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicationAdministration',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicationDispense',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicationKnowledge',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicationRequest',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicationStatement',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProduct',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProductAuthorization',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProductContraindication',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProductIndication',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProductIngredient',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProductInteraction',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProductManufactured',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProductPackaged',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProductPharmaceutical',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MedicinalProductUndesirableEffect',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MessageDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MessageHeader',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'MolecularSequence',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'NamingSystem',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'NutritionOrder',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Observation',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ObservationDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'OperationDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'OperationOutcome',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Organization',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'OrganizationAffiliation',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Parameters',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Patient',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'PaymentNotice',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'PaymentReconciliation',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Person',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'PlanDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Practitioner',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'PractitionerRole',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Procedure',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Provenance',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Questionnaire',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'QuestionnaireResponse',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'RelatedPerson',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'RequestGroup',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ResearchDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ResearchElementDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ResearchStudy',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ResearchSubject',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Resource',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'RiskAssessment',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'RiskEvidenceSynthesis',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Schedule',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SearchParameter',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ServiceRequest',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Slot',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Specimen',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SpecimenDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'StructureDefinition',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'StructureMap',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Subscription',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Substance',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SubstanceNucleicAcid',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SubstancePolymer',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SubstanceProtein',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SubstanceReferenceInformation',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SubstanceSourceMaterial',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SubstanceSpecification',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SupplyDelivery',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'SupplyRequest',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'Task',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'TerminologyCapabilities',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'TestReport',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'TestScript',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'ValueSet',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'VerificationResult',
                ],
                [
                    'http://hl7.org/fhir/resource-types',
                    'VisionPrescription',
                ],
            ],
        ],
        'item.answerOption.value[x]' => [
            'choice_occurs' => [
                'fields' => [
                    'valueInteger',
                    'valueDate',
                    'valueTime',
                    'valueString',
                    'valueCoding',
                    'valueReference',
                ],
                'min' => 1,
                'max' => 1,
            ],
        ],
        self::FIELD_STATUS => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/publication-status',
                    'draft',
                ],
                [
                    'http://hl7.org/fhir/publication-status',
                    'active',
                ],
                [
                    'http://hl7.org/fhir/publication-status',
                    'retired',
                ],
                [
                    'http://hl7.org/fhir/publication-status',
                    'unknown',
                ],
            ],
        ],
        'item.linkId' => [
            'min_occurs' => 1,
        ],
        'item.type' => [
            'min_occurs' => 1,
            'code_binding' => [
                [
                    'http://hl7.org/fhir/item-type',
                    'group',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'display',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'question',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'boolean',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'decimal',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'integer',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'date',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'dateTime',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'time',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'string',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'text',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'url',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'choice',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'open-choice',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'attachment',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'reference',
                ],
                [
                    'http://hl7.org/fhir/item-type',
                    'quantity',
                ],
            ],
        ],
        'item.initial.value[x]' => [
            'choice_occurs' => [
                'fields' => [
                    'valueBoolean',
                    'valueDecimal',
                    'valueInteger',
                    'valueDate',
                    'valueDateTime',
                    'valueTime',
                    'valueString',
                    'valueUri',
                    'valueAttachment',
                    'valueCoding',
                    'valueQuantity',
                    'valueReference',
                ],
                'min' => 1,
                'max' => 1,
            ],
        ],
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_0 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-observationExtract',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_1 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-observation-extract-category',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_2 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/questionnaire-unit',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_3 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-observationExtract',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_4 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-observation-extract-category',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_5 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-isSubject',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_6 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-observationExtractEntry',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_7 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-observationExtract',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_8 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/designNote',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_9 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-performerType',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_10 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_11 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/designNote',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_12 = [
        'url' => 'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-optionalDisplay',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_13 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/preferredTerminologyServer',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_14 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-versionAlgorithm',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_15 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/artifact-copyrightLabel',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_17 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/questionnaire-hidden',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_18 = [
        'url' => 'http://hl7.org/fhir/StructureDefinition/preferredTerminologyServer',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_19 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Questionnaire.item.disabledDisplay',
    ];

    /** @var array<string, mixed> */
    private const _SLICE_MATCH_20 = [
        'url' => 'http://hl7.org/fhir/5.0/StructureDefinition/extension-Questionnaire.item.answerConstraint',
    ];

    public static function _getProfileUrl(): string
    {
        return self::PROFILE_URL;
    }

    public static function _getProfileVersion(): null|string
    {
        return self::PROFILE_VERSION;
    }

    /**
     * Returns the rules set by this profile and the profiles it derives from, as a map of field => [rule => true].
     *
     * @return array<string, array<string, bool>>
     */
    protected static function _getProfileValidationRuleNames(): array
    {
        $out = parent::_getProfileValidationRuleNames();
        foreach (self::_PROFILE_VALIDATION_RULES as $field => $rules) {
            foreach ($rules as $rule => $_) {
                $out[$field][$rule] = true;
            }
        }
        return $out;
    }

    /**
     * Returns the type's validation rules with those of the profile applied on top.  A profile may only constrain its
     * base: cardinalities are tightened, never loosened.
     */
    public function _getCombinedValidationRules(): array
    {
        $out = parent::_getCombinedValidationRules();
        foreach (self::_PROFILE_VALIDATION_RULES as $field => $rules) {
            $out[$field] = Validator::tighten($out[$field] ?? [], $rules);
        }
        return $out;
    }

    /**
     * @return null|FHIRExtension The "observationExtract" slice of extension, if present.
     */
    public function getObservationExtractExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_0)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "observationExtractCategory" slice of extension.
     */
    public function getObservationExtractCategoryExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_1)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "designNote" slice of extension, if present.
     */
    public function getDesignNoteExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_8)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "performerType" slice of extension.
     */
    public function getPerformerTypeExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_9)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "assemble-expectation" slice of extension, if present.
     */
    public function getAssembleExpectationExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_10)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return FHIRExtension[] The items of the "terminologyServer" slice of extension.
     */
    public function getTerminologyServerExtension(): array
    {
        $matched = [];
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_13)) {
                $matched[] = $item;
            }
        }
        return $matched;
    }

    /**
     * @return null|FHIRExtension The "versionAlgorithm" slice of extension, if present.
     */
    public function getVersionAlgorithmExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_14)) {
                return $item;
            }
        }
        return null;
    }

    /**
     * @return null|FHIRExtension The "copyrightLabel" slice of extension, if present.
     */
    public function getCopyrightLabelExtension(): null|FHIRExtension
    {
        foreach ($this->getExtension() as $item) {
            if (ValueMatcher::matches($item, self::_SLICE_MATCH_15)) {
                return $item;
            }
        }
        return null;
    }
}
