<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Types;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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


/**
 * Interface ContainedTypeInterface
 *
 * This is a meta interface that must never be directly implemented by a class.  It exists purely to ensure type safety
 * throughout the base package.
 */
interface ContainedTypeInterface extends ResourceTypeInterface
{
    /**
     * The return from this method is used only when json serializing this type
     *
     * @return string
     */
    public function _getResourceType(): string;
}
