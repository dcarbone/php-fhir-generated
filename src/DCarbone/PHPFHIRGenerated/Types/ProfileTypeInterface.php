<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Types;

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
 */


/**
 * Implemented by every class generated from a profile, such as a US Core StructureDefinition.
 */
interface ProfileTypeInterface extends TypeInterface
{
    /**
     * Returns the canonical url of the profile, without version.
     */
    public static function _getProfileUrl(): string;

    /**
     * Returns the business version of the profile, if it declares one.
     */
    public static function _getProfileVersion(): null|string;

    /**
     * Executes only the validation rules added or tightened by the profile, and by the profiles it derives from,
     * against this type.  Constraints the base type already enforces, and errors in the types held by this type's
     * fields, are not reported.
     *
     * The returned map is keyed by the field or path and valued by a map of rule name => error.  An empty array means
     * the type conforms to the profile's rules.
     */
    public function _getProfileValidationErrors(): array;
}
