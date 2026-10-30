<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\SDC;

use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\PackageAutoloaderInterface;

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

abstract class PackageAutoloader implements PackageAutoloaderInterface
{
    /** @var array<string, string> */
    private const _CLASS_MAP = [
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireAssembleIn' => __DIR__ . '/FHIRResource/SDCParametersQuestionnaireAssembleIn.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireAssembleOut' => __DIR__ . '/FHIRResource/SDCParametersQuestionnaireAssembleOut.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireNextQuestionnaireIn' => __DIR__ . '/FHIRResource/SDCParametersQuestionnaireNextQuestionnaireIn.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireNextQuestionnaireOut' => __DIR__ . '/FHIRResource/SDCParametersQuestionnaireNextQuestionnaireOut.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnairePopulateHtmlOut' => __DIR__ . '/FHIRResource/SDCParametersQuestionnairePopulateHtmlOut.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnairePopulateIn' => __DIR__ . '/FHIRResource/SDCParametersQuestionnairePopulateIn.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnairePopulateLinkOut' => __DIR__ . '/FHIRResource/SDCParametersQuestionnairePopulateLinkOut.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnairePopulateOut' => __DIR__ . '/FHIRResource/SDCParametersQuestionnairePopulateOut.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireProcessResponseIn' => __DIR__ . '/FHIRResource/SDCParametersQuestionnaireProcessResponseIn.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\SDCParametersQuestionnaireResponseExtractIn' => __DIR__ . '/FHIRResource/SDCParametersQuestionnaireResponseExtractIn.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireCommon' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireCommon.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireResponseCommon' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireResponseCommon.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireServiceRequest' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireServiceRequest.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRElement\\SDCUsageContext' => __DIR__ . '/FHIRElement/SDCUsageContext.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCCodeSystem' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCCodeSystem.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCLibrary' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCLibrary.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireAdapt' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireAdapt.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireSearch' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireSearch.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCBaseQuestionnaire' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCBaseQuestionnaire.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireResponseAdapt' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireResponseAdapt.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireResponse' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireResponse.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCTaskQuestionnaire' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCTaskQuestionnaire.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRElement\\SDCQuestionnaireLibraryUsageContext' => __DIR__ . '/FHIRElement/SDCQuestionnaireLibraryUsageContext.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCValueSet' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCValueSet.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireAdaptSearch' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireAdaptSearch.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireBehave' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireBehave.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireExtractDefinition' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireExtractDefinition.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireExtractObservation' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireExtractObservation.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireExtractStructureMap' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireExtractStructureMap.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireExtractTemplate' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireExtractTemplate.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCModularQuestionnaireLibrary' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCModularQuestionnaireLibrary.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCModularQuestionnaire' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCModularQuestionnaire.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnairePopulateExpression' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnairePopulateExpression.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnairePopulateObservation' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnairePopulateObservation.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnairePopulateStructureMap' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnairePopulateStructureMap.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\FHIRResource\\FHIRDomainResource\\SDCQuestionnaireRender' => __DIR__ . '/FHIRResource/FHIRDomainResource/SDCQuestionnaireRender.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\PackageMap' => __DIR__ . '/PackageMap.php',
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
