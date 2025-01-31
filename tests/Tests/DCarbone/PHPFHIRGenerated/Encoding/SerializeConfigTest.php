<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Encoding;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 31st, 2025 00:19+0000
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
use PHPUnit\Framework\TestCase;

class SerializeConfigTest extends TestCase
{
    public function testCanConstructWithoutParams()
    {
        $sc = new SerializeConfig();
        $this->assertFalse($sc->getOverrideSourceXMLNS());
        $this->assertNull($sc->getRootXMLNS());
        $this->assertEquals(4728838, $sc->getXHTMLLibxmlOpts());
    }

    public function testCanConstructWithValidValues()
    {
        $sc = new SerializeConfig(overrideSourceXMLNS: true, rootXMLNS: 'urn:foo:bar', xhtmlLibxmlOpts: 123);
        $this->assertTrue($sc->getOverrideSourceXMLNS());
        $this->assertEquals('urn:foo:bar', $sc->getRootXMLNS());
        $this->assertEquals(123, $sc->getXHTMLLibxmlOpts());
    }
}
