<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\SmartAppLaunch;

use DCarbone\PHPFHIRGenerated\Versions\R4\Profiles\PackageAutoloaderInterface;

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
 */

abstract class PackageAutoloader implements PackageAutoloaderInterface
{
    /** @var array<string, string> */
    private const _CLASS_MAP = [
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SmartAppLaunch\\FHIRResource\\FHIRDomainResource\\SMARTAppStateBasic' => __DIR__ . '/FHIRResource/FHIRDomainResource/SMARTAppStateBasic.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SmartAppLaunch\\FHIRResource\\FHIRDomainResource\\TaskEhrLaunch' => __DIR__ . '/FHIRResource/FHIRDomainResource/TaskEhrLaunch.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SmartAppLaunch\\FHIRResource\\FHIRDomainResource\\TaskStandaloneLaunch' => __DIR__ . '/FHIRResource/FHIRDomainResource/TaskStandaloneLaunch.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SmartAppLaunch\\FHIRResource\\FHIRDomainResource\\UserAccessBrand' => __DIR__ . '/FHIRResource/FHIRDomainResource/UserAccessBrand.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SmartAppLaunch\\FHIRResource\\UserAccessBrandsBundle' => __DIR__ . '/FHIRResource/UserAccessBrandsBundle.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SmartAppLaunch\\FHIRResource\\FHIRDomainResource\\UserAccessEndpoint' => __DIR__ . '/FHIRResource/FHIRDomainResource/UserAccessEndpoint.php',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SmartAppLaunch\\PackageMap' => __DIR__ . '/PackageMap.php',
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
