<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\R4Core;

use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\PackageMapInterface;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 20th, 2026 01:17+0000
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
 */

/**
 * Index of the generated profile classes of a single package, keyed by canonical profile url.
 */
abstract class PackageMap implements PackageMapInterface
{
    /** @var array<string, class-string> */
    private const _PROFILES = [
        'http://hl7.org/fhir/StructureDefinition/MoneyQuantity' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRElement\\MoneyQuantity',
        'http://hl7.org/fhir/StructureDefinition/SimpleQuantity' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRElement\\SimpleQuantity',
        'http://hl7.org/fhir/StructureDefinition/actualgroup' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ActualGroup',
        'http://hl7.org/fhir/StructureDefinition/catalog' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ProfileForCatalog',
        'http://hl7.org/fhir/StructureDefinition/cdshooksguidanceresponse' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CDSHooksGuidanceResponse',
        'http://hl7.org/fhir/StructureDefinition/cdshooksrequestgroup' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CDSHooksRequestGroup',
        'http://hl7.org/fhir/StructureDefinition/cdshooksserviceplandefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CDSHooksServicePlanDefinition',
        'http://hl7.org/fhir/StructureDefinition/cholesterol' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Cholesterol',
        'http://hl7.org/fhir/StructureDefinition/clinicaldocument' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ClinicalDocument',
        'http://hl7.org/fhir/StructureDefinition/computableplandefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ComputablePlanDefinition',
        'http://hl7.org/fhir/StructureDefinition/cqf-questionnaire' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CQFQuestionnaire',
        'http://hl7.org/fhir/StructureDefinition/cqllibrary' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CQLLibrary',
        'http://hl7.org/fhir/StructureDefinition/devicemetricobservation' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\DeviceMetricObservationProfile',
        'http://hl7.org/fhir/StructureDefinition/diagnosticreport-genetics' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\DiagnosticReportGenetics',
        'http://hl7.org/fhir/StructureDefinition/ehrsrle-auditevent' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\EHRSFMRecordLifecycleEventAuditEvent',
        'http://hl7.org/fhir/StructureDefinition/ehrsrle-provenance' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\EHRSFMRecordLifecycleEventProvenance',
        'http://hl7.org/fhir/StructureDefinition/elementdefinition-de' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRElement\\FHIRBackboneElement\\DataElementConstraintOnElementDefinitionDataType',
        'http://hl7.org/fhir/StructureDefinition/example-composition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\DocumentStructure',
        'http://hl7.org/fhir/StructureDefinition/example-section-library' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\DocumentSectionLibrary',
        'http://hl7.org/fhir/StructureDefinition/familymemberhistory-genetic' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\FamilyMemberHistoryForGeneticsAnalysis',
        'http://hl7.org/fhir/StructureDefinition/groupdefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\GroupDefinition',
        'http://hl7.org/fhir/StructureDefinition/hdlcholesterol' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Hdlcholesterol',
        'http://hl7.org/fhir/StructureDefinition/hlaresult' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ProfileForHLAGenotypingResults',
        'http://hl7.org/fhir/StructureDefinition/ldlcholesterol' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Ldlcholesterol',
        'http://hl7.org/fhir/StructureDefinition/lipidprofile' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Lipidprofile',
        'http://hl7.org/fhir/StructureDefinition/observation-genetics' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationGenetics',
        'http://hl7.org/fhir/StructureDefinition/picoelement' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\PICOElementProfile',
        'http://hl7.org/fhir/StructureDefinition/provenance-relevant-history' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ProvenanceRelevantHistory',
        'http://hl7.org/fhir/StructureDefinition/servicerequest-genetics' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ServiceRequestGenetics',
        'http://hl7.org/fhir/StructureDefinition/shareableactivitydefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableActivityDefinition',
        'http://hl7.org/fhir/StructureDefinition/shareablecodesystem' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableCodeSystem',
        'http://hl7.org/fhir/StructureDefinition/shareablelibrary' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableLibrary',
        'http://hl7.org/fhir/StructureDefinition/shareablemeasure' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableMeasure',
        'http://hl7.org/fhir/StructureDefinition/shareableplandefinition' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareablePlanDefinition',
        'http://hl7.org/fhir/StructureDefinition/shareablevalueset' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableValueSet',
        'http://hl7.org/fhir/StructureDefinition/synthesis' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\EvidenceSynthesisProfile',
        'http://hl7.org/fhir/StructureDefinition/triglyceride' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Triglyceride',
        'http://hl7.org/fhir/StructureDefinition/vitalsigns' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationVitalsigns',
        'http://hl7.org/fhir/StructureDefinition/bmi' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBmi',
        'http://hl7.org/fhir/StructureDefinition/bodyheight' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBodyheight',
        'http://hl7.org/fhir/StructureDefinition/bodytemp' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBodytemp',
        'http://hl7.org/fhir/StructureDefinition/bodyweight' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBodyweight',
        'http://hl7.org/fhir/StructureDefinition/bp' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBp',
        'http://hl7.org/fhir/StructureDefinition/headcircum' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationHeadcircum',
        'http://hl7.org/fhir/StructureDefinition/heartrate' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationHeartrate',
        'http://hl7.org/fhir/StructureDefinition/oxygensat' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationOxygensat',
        'http://hl7.org/fhir/StructureDefinition/resprate' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationResprate',
        'http://hl7.org/fhir/StructureDefinition/vitalspanel' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationVitalspanel',
    ];

    /** @var array<string, string> */
    private const _BASE_TYPES = [
        'http://hl7.org/fhir/StructureDefinition/MoneyQuantity' => 'Quantity',
        'http://hl7.org/fhir/StructureDefinition/SimpleQuantity' => 'Quantity',
        'http://hl7.org/fhir/StructureDefinition/actualgroup' => 'Group',
        'http://hl7.org/fhir/StructureDefinition/catalog' => 'Composition',
        'http://hl7.org/fhir/StructureDefinition/cdshooksguidanceresponse' => 'GuidanceResponse',
        'http://hl7.org/fhir/StructureDefinition/cdshooksrequestgroup' => 'RequestGroup',
        'http://hl7.org/fhir/StructureDefinition/cdshooksserviceplandefinition' => 'PlanDefinition',
        'http://hl7.org/fhir/StructureDefinition/cholesterol' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/clinicaldocument' => 'Composition',
        'http://hl7.org/fhir/StructureDefinition/computableplandefinition' => 'PlanDefinition',
        'http://hl7.org/fhir/StructureDefinition/cqf-questionnaire' => 'Questionnaire',
        'http://hl7.org/fhir/StructureDefinition/cqllibrary' => 'Library',
        'http://hl7.org/fhir/StructureDefinition/devicemetricobservation' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/diagnosticreport-genetics' => 'DiagnosticReport',
        'http://hl7.org/fhir/StructureDefinition/ehrsrle-auditevent' => 'AuditEvent',
        'http://hl7.org/fhir/StructureDefinition/ehrsrle-provenance' => 'Provenance',
        'http://hl7.org/fhir/StructureDefinition/elementdefinition-de' => 'ElementDefinition',
        'http://hl7.org/fhir/StructureDefinition/example-composition' => 'Composition',
        'http://hl7.org/fhir/StructureDefinition/example-section-library' => 'Composition',
        'http://hl7.org/fhir/StructureDefinition/familymemberhistory-genetic' => 'FamilyMemberHistory',
        'http://hl7.org/fhir/StructureDefinition/groupdefinition' => 'Group',
        'http://hl7.org/fhir/StructureDefinition/hdlcholesterol' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/hlaresult' => 'DiagnosticReport',
        'http://hl7.org/fhir/StructureDefinition/ldlcholesterol' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/lipidprofile' => 'DiagnosticReport',
        'http://hl7.org/fhir/StructureDefinition/observation-genetics' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/picoelement' => 'EvidenceVariable',
        'http://hl7.org/fhir/StructureDefinition/provenance-relevant-history' => 'Provenance',
        'http://hl7.org/fhir/StructureDefinition/servicerequest-genetics' => 'ServiceRequest',
        'http://hl7.org/fhir/StructureDefinition/shareableactivitydefinition' => 'ActivityDefinition',
        'http://hl7.org/fhir/StructureDefinition/shareablecodesystem' => 'CodeSystem',
        'http://hl7.org/fhir/StructureDefinition/shareablelibrary' => 'Library',
        'http://hl7.org/fhir/StructureDefinition/shareablemeasure' => 'Measure',
        'http://hl7.org/fhir/StructureDefinition/shareableplandefinition' => 'PlanDefinition',
        'http://hl7.org/fhir/StructureDefinition/shareablevalueset' => 'ValueSet',
        'http://hl7.org/fhir/StructureDefinition/synthesis' => 'Evidence',
        'http://hl7.org/fhir/StructureDefinition/triglyceride' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/vitalsigns' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/bmi' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/bodyheight' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/bodytemp' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/bodyweight' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/bp' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/headcircum' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/heartrate' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/oxygensat' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/resprate' => 'Observation',
        'http://hl7.org/fhir/StructureDefinition/vitalspanel' => 'Observation',
    ];

    /**
     * @return array<string, class-string>
     */
    public static function getProfileClasses(): array
    {
        return self::_PROFILES;
    }

    /**
     * @param string $url Canonical profile url, without a "|version" suffix.
     * @return null|class-string
     */
    public static function getProfileClassname(string $url): null|string
    {
        return self::_PROFILES[$url] ?? null;
    }

    /**
     * @param string $url Canonical profile url, without a "|version" suffix.
     * @return null|string FHIR name of the type the profile constrains.
     */
    public static function getProfileBaseType(string $url): null|string
    {
        return self::_BASE_TYPES[$url] ?? null;
    }
}
