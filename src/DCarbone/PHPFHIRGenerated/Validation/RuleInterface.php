<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Validation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 11th, 2025 15:51+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2025 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\Types\TypeInterface;

interface RuleInterface
{
    /**
     * Must return the name of this rule.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Should return a human-readable description of the purpose of this validator
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Perform assertion for this rule.
     *
     * @param \DCarbone\PHPFHIRGenerated\Types\TypeInterface $type
     * @param string $field
     * @param mixed $constraint
     * @param mixed $value
     * @return null|string

     */
    public function assert(TypeInterface $type, string $field, mixed $constraint, mixed $value): null|string;
}
