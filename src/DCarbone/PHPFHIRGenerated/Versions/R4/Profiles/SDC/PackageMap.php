<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\SDC;

use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\PackageMapInterface;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 30th, 2026 00:59+0000
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
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-assemble-in' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireAssembleIn',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-assemble-out' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireAssembleOut',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-next-question-in' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireNextQuestionnaireIn',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-next-question-out' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireNextQuestionnaireOut',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-populate-html-out' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnairePopulateHtmlOut',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-populate-in' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnairePopulateIn',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-populate-link-out' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnairePopulateLinkOut',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-populate-out' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnairePopulateOut',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-process-response-in' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireProcessResponseIn',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaireresponse-extract-in' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireResponseExtractIn',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnairecommon' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireCommon',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaireresponsecommon' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireResponseCommon',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-servicerequest' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireServiceRequest',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-usagecontext' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRElement\\SDCUsageContext',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-codesystem' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCCodeSystem',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-library' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCLibrary',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-adapt' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireAdapt',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-search' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireSearch',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCBaseQuestionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaireresponse-adapt' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireResponseAdapt',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaireresponse' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireResponse',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-task' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCTaskQuestionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-usagecontext-questionnaire-library' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRElement\\SDCQuestionnaireLibraryUsageContext',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-valueset' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCValueSet',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-adapt-srch' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireAdaptSearch',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-behave' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireBehave',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-defn' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireExtractDefinition',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-obsn' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireExtractObservation',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-smap' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireExtractStructureMap',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-template' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireExtractTemplate',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-modular-library' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCModularQuestionnaireLibrary',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-modular' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCModularQuestionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-pop-exp' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnairePopulateExpression',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-pop-obsn' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnairePopulateObservation',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-pop-smap' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnairePopulateStructureMap',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-render' => 'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireRender',
    ];

    /** @var array<string, string> */
    private const _BASE_TYPES = [
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-assemble-in' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-assemble-out' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-next-question-in' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-next-question-out' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-populate-html-out' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-populate-in' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-populate-link-out' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-populate-out' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaire-process-response-in' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/parameters-questionnaireresponse-extract-in' => 'Parameters',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnairecommon' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaireresponsecommon' => 'QuestionnaireResponse',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-servicerequest' => 'ServiceRequest',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-usagecontext' => 'UsageContext',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-codesystem' => 'CodeSystem',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-library' => 'Library',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-adapt' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-search' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaireresponse-adapt' => 'QuestionnaireResponse',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaireresponse' => 'QuestionnaireResponse',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-task' => 'Task',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-usagecontext-questionnaire-library' => 'UsageContext',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-valueset' => 'ValueSet',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-adapt-srch' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-behave' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-defn' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-obsn' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-smap' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-extr-template' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-modular-library' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-modular' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-pop-exp' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-pop-obsn' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-pop-smap' => 'Questionnaire',
        'http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-render' => 'Questionnaire',
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
