<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Client;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 01:55+0000
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

use DCarbone\PHPFHIRGenerated\Client\Client;
use DCarbone\PHPFHIRGenerated\Client\Config;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testCanConstructWithOnlyAddress()
    {
        $cl = new Client('http://example.com');
        $this->assertEquals('http://example.com', $cl->getConfig()->getAddress());
    }

    public function testCanConstructWithConfig()
    {
        $c = new Config('http://example.com');
        $cl = new Client($c);
        $this->assertEquals('http://example.com', $cl->getConfig()->getAddress());
    }
}
