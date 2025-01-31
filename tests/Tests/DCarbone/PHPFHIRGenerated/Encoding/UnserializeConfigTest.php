<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Encoding;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 23:45+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use PHPUnit\Framework\TestCase;

class UnserializeConfigTest extends TestCase
{
    public function testCanConstructWithoutParams()
    {
        $uc = new UnserializeConfig();
        $this->assertEquals(4728838, $uc->getLibxmlOpts());
        $this->assertEquals(512, $uc->getJSONDecodeMaxDepth());
    }

    public function testCanConstructWithValidValues()
    {
        $uc = new UnserializeConfig(libxmlOpts: 123, jsonDecodeMaxDepth: 456);
        $this->assertEquals(123, $uc->getLibxmlOpts());
        $this->assertEquals(456, $uc->getJSONDecodeMaxDepth());
    }
}

