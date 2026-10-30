<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Profiles;

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

use DCarbone\PHPFHIRGenerated\Encoding\OnAmbiguousProfileEnum;
use DCarbone\PHPFHIRGenerated\Encoding\OnProfileVersionMismatchEnum;
use DCarbone\PHPFHIRGenerated\Encoding\OnUnknownProfileEnum;
use DCarbone\PHPFHIRGenerated\Types\ProfileTypeInterface;
use UnexpectedValueException;

/**
 * Entry point for looking up the generated profile classes.  The classes themselves are indexed per package, see the
 * package maps, which are only loaded when a lookup reaches them.
 */
abstract class ProfileMap
{
    /** @var string[] Loaded one at a time, and only when a lookup gets to them. */
    private const _PACKAGE_MAPS = [
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\R4Core\\PackageMap',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\XverR5R4\\PackageMap',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SmartAppLaunch\\PackageMap',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\SDC\\PackageMap',
        'DCarbone\\PHPFHIRGenerated\\Versions\\R4\\Profiles\\USCore\\PackageMap',
    ];

    /**
     * @return array<string, class-string<ProfileTypeInterface>>
     */
    public static function getProfileClasses(): array
    {
        $out = [];
        foreach (self::_PACKAGE_MAPS as $map) {
            /** @var class-string<PackageMapInterface> $map */
            foreach ($map::getProfileClasses() as $url => $class) {
                $out[$url] = $class;
            }
        }
        return $out;
    }

    /**
     * @param string $canonical Canonical profile url, with or without a "|version" suffix.
     * @return null|class-string<ProfileTypeInterface>
     */
    public static function getProfileClassname(string $canonical): null|string
    {
        $pos = strpos($canonical, '|');
        if (false !== $pos) {
            $canonical = substr($canonical, 0, $pos);
        }
        foreach (self::_PACKAGE_MAPS as $map) {
            /** @var class-string<PackageMapInterface> $map */
            $class = $map::getProfileClassname($canonical);
            if (null !== $class) {
                return $class;
            }
        }
        return null;
    }

    /**
     * @param string $canonical Canonical profile url, with or without a "|version" suffix.
     * @return null|string FHIR name of the type the profile constrains.
     */
    public static function getProfileBaseType(string $canonical): null|string
    {
        $pos = strpos($canonical, '|');
        if (false !== $pos) {
            $canonical = substr($canonical, 0, $pos);
        }
        foreach (self::_PACKAGE_MAPS as $map) {
            /** @var class-string<PackageMapInterface> $map */
            $type = $map::getProfileBaseType($canonical);
            if (null !== $type) {
                return $type;
            }
        }
        return null;
    }

    /**
     * Selects the profile class to unserialize a resource into, given the values of its "meta.profile".
     *
     * @param class-string $baseClassName Class of the resource's declared FHIR type.
     * @param string[] $declared Canonical profile urls, in declaration order, optionally with a "|version" suffix.
     * @return null|class-string<ProfileTypeInterface> Null when the base class should be used.
     * @throws UnexpectedValueException
     */
    public static function resolve(string $baseClassName,
                                   array $declared,
                                   OnUnknownProfileEnum $onUnknown,
                                   OnAmbiguousProfileEnum $onAmbiguous,
                                   OnProfileVersionMismatchEnum $onVersionMismatch): null|string
    {
        $candidates = [];
        foreach ($declared as $canonical) {
            if (!is_string($canonical) || '' === $canonical) {
                continue;
            }
            /** @var null|class-string<ProfileTypeInterface> $class */
            $class = self::getProfileClassname($canonical);
            if (null === $class || !is_a($class, $baseClassName, true)) {
                if (OnUnknownProfileEnum::EXCEPTION === $onUnknown) {
                    throw new UnexpectedValueException(sprintf(
                        'Profile "%s" is not a known profile of "%s"',
                        $canonical,
                        $baseClassName
                    ));
                }
                continue;
            }
            $pos = strpos($canonical, '|');
            if (false !== $pos && OnProfileVersionMismatchEnum::IGNORE_VERSION !== $onVersionMismatch) {
                $declaredVersion = substr($canonical, $pos + 1);
                $generatedVersion = $class::_getProfileVersion();
                if (null !== $generatedVersion && $declaredVersion !== $generatedVersion) {
                    if (OnProfileVersionMismatchEnum::EXCEPTION === $onVersionMismatch) {
                        throw new UnexpectedValueException(sprintf(
                            'Profile "%s" was generated from version "%s"',
                            $canonical,
                            $generatedVersion
                        ));
                    }
                    continue;
                }
            }
            if (!in_array($class, $candidates, true)) {
                $candidates[] = $class;
            }
        }

        if ([] === $candidates) {
            return null;
        }
        if (1 === count($candidates)) {
            return $candidates[0];
        }

        // the most specific profile is the one that refines all of the others
        foreach ($candidates as $candidate) {
            $refinesAll = true;
            foreach ($candidates as $other) {
                if ($candidate !== $other && !is_a($candidate, $other, true)) {
                    $refinesAll = false;
                    break;
                }
            }
            if ($refinesAll) {
                return $candidate;
            }
        }

        return match ($onAmbiguous) {
            OnAmbiguousProfileEnum::FIRST_DECLARED => $candidates[0],
            OnAmbiguousProfileEnum::FALLBACK => null,
            default => throw new UnexpectedValueException(sprintf(
                'Ambiguous profiles declared for "%s": ["%s"]',
                $baseClassName,
                implode('","', $candidates)
            )),
        };
    }
}
