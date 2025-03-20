<?php declare(strict_types=1);

namespace Tests\DCarbone\PHPFHIRGenerated\Mock;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: March 20th, 2025 02:50+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Versions\VersionConfigInterface;

class MockVersionConfig implements VersionConfigInterface
{
    private UnserializeConfig $_unserializeConfig;
    private SerializeConfig $_serializeConfig;

    public function __construct(null|UnserializeConfig $unserializeConfig = null,
                                null|SerializeConfig $serializeConfig = null)
    {
        $this->_unserializeConfig = $unserializeConfig ?? new UnserializeConfig();
        $this->_serializeConfig = $serializeConfig ?? new SerializeConfig();
    }

    public function getUnserializeConfig(): UnserializeConfig
    {
        return $this->_unserializeConfig;
    }

    public function getSerializeConfig(): SerializeConfig
    {
        return $this->_serializeConfig;
    }
}
