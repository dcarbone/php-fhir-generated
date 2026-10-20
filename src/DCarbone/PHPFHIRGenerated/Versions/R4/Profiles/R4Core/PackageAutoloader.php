<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\R4Core;

use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\PackageAutoloaderInterface;

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

abstract class PackageAutoloader implements PackageAutoloaderInterface
{
    /** @var array<string, string> */
    private const _CLASS_MAP = [
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRElement\\MoneyQuantity' => __DIR__ . '/FHIRElement/MoneyQuantity.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRElement\\SimpleQuantity' => __DIR__ . '/FHIRElement/SimpleQuantity.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ActualGroup' => __DIR__ . '/FHIRResource/FHIRDomainResource/ActualGroup.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ProfileForCatalog' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileForCatalog.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CDSHooksGuidanceResponse' => __DIR__ . '/FHIRResource/FHIRDomainResource/CDSHooksGuidanceResponse.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CDSHooksRequestGroup' => __DIR__ . '/FHIRResource/FHIRDomainResource/CDSHooksRequestGroup.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CDSHooksServicePlanDefinition' => __DIR__ . '/FHIRResource/FHIRDomainResource/CDSHooksServicePlanDefinition.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Cholesterol' => __DIR__ . '/FHIRResource/FHIRDomainResource/Cholesterol.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ClinicalDocument' => __DIR__ . '/FHIRResource/FHIRDomainResource/ClinicalDocument.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ComputablePlanDefinition' => __DIR__ . '/FHIRResource/FHIRDomainResource/ComputablePlanDefinition.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CQFQuestionnaire' => __DIR__ . '/FHIRResource/FHIRDomainResource/CQFQuestionnaire.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\CQLLibrary' => __DIR__ . '/FHIRResource/FHIRDomainResource/CQLLibrary.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\DeviceMetricObservationProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/DeviceMetricObservationProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\DiagnosticReportGenetics' => __DIR__ . '/FHIRResource/FHIRDomainResource/DiagnosticReportGenetics.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\EHRSFMRecordLifecycleEventAuditEvent' => __DIR__ . '/FHIRResource/FHIRDomainResource/EHRSFMRecordLifecycleEventAuditEvent.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\EHRSFMRecordLifecycleEventProvenance' => __DIR__ . '/FHIRResource/FHIRDomainResource/EHRSFMRecordLifecycleEventProvenance.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRElement\\FHIRBackboneElement\\DataElementConstraintOnElementDefinitionDataType' => __DIR__ . '/FHIRElement/FHIRBackboneElement/DataElementConstraintOnElementDefinitionDataType.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\DocumentStructure' => __DIR__ . '/FHIRResource/FHIRDomainResource/DocumentStructure.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\DocumentSectionLibrary' => __DIR__ . '/FHIRResource/FHIRDomainResource/DocumentSectionLibrary.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\FamilyMemberHistoryForGeneticsAnalysis' => __DIR__ . '/FHIRResource/FHIRDomainResource/FamilyMemberHistoryForGeneticsAnalysis.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\GroupDefinition' => __DIR__ . '/FHIRResource/FHIRDomainResource/GroupDefinition.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Hdlcholesterol' => __DIR__ . '/FHIRResource/FHIRDomainResource/Hdlcholesterol.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ProfileForHLAGenotypingResults' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProfileForHLAGenotypingResults.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Ldlcholesterol' => __DIR__ . '/FHIRResource/FHIRDomainResource/Ldlcholesterol.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Lipidprofile' => __DIR__ . '/FHIRResource/FHIRDomainResource/Lipidprofile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationGenetics' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationGenetics.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\PICOElementProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/PICOElementProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ProvenanceRelevantHistory' => __DIR__ . '/FHIRResource/FHIRDomainResource/ProvenanceRelevantHistory.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ServiceRequestGenetics' => __DIR__ . '/FHIRResource/FHIRDomainResource/ServiceRequestGenetics.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableActivityDefinition' => __DIR__ . '/FHIRResource/FHIRDomainResource/ShareableActivityDefinition.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableCodeSystem' => __DIR__ . '/FHIRResource/FHIRDomainResource/ShareableCodeSystem.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableLibrary' => __DIR__ . '/FHIRResource/FHIRDomainResource/ShareableLibrary.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableMeasure' => __DIR__ . '/FHIRResource/FHIRDomainResource/ShareableMeasure.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareablePlanDefinition' => __DIR__ . '/FHIRResource/FHIRDomainResource/ShareablePlanDefinition.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ShareableValueSet' => __DIR__ . '/FHIRResource/FHIRDomainResource/ShareableValueSet.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\EvidenceSynthesisProfile' => __DIR__ . '/FHIRResource/FHIRDomainResource/EvidenceSynthesisProfile.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\Triglyceride' => __DIR__ . '/FHIRResource/FHIRDomainResource/Triglyceride.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationVitalsigns' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationVitalsigns.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBmi' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationBmi.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBodyheight' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationBodyheight.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBodytemp' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationBodytemp.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBodyweight' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationBodyweight.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationBp' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationBp.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationHeadcircum' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationHeadcircum.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationHeartrate' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationHeartrate.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationOxygensat' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationOxygensat.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationResprate' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationResprate.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\FHIRResource\\FHIRDomainResource\\ObservationVitalspanel' => __DIR__ . '/FHIRResource/FHIRDomainResource/ObservationVitalspanel.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\PackageMap' => __DIR__ . '/PackageMap.php',
    ];

    private static bool $_registered = false;

    public static function register(): bool
    {
        if (!self::$_registered) {
            self::$_registered = spl_autoload_register(self::class . '::loadClass', true);
        }
        return self::$_registered;
    }

    public static function unregister(): bool
    {
        if (self::$_registered && spl_autoload_unregister(self::class . '::loadClass')) {
            self::$_registered = false;
            return true;
        }
        return false;
    }

    public static function loadClass(string $class): null|bool
    {
        if (isset(self::_CLASS_MAP[$class])) {
            return (bool)require self::_CLASS_MAP[$class];
        }
        return null;
    }
}
