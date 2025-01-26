<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 26th, 2025 01:06+0000
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


interface VersionInterface
{
    /**
     * Must return the "name" of this version, e.g. DSTU1, STU3, R5, etc.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Must return source's reported version of FHIR
     *
     * @return string
     */
    public function getSourceVersion(): string;

    /**
     * Must return the date this FHIR version's source was generated
     *
     * @return string
     */
    public function getSourceGenerationDate(): string;

    /**
     * Must return config for this version
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface
     */
    public function getConfig(): VersionConfigInterface;

    /**
     * Must return the type map class for this version
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\VersionTypeMapInterface
     */
    public function getTypeMap(): VersionTypeMapInterface;
}
