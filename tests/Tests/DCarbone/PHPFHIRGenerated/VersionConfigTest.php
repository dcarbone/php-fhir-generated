<?php

namespace Tests\DCarbone\PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 23:46+0000
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
use DCarbone\PHPFHIRGenerated\Versions\VersionConfig;
use PHPUnit\Framework\TestCase;

class VersionConfigTest extends TestCase
{
    public function testCanConstructWithoutParams()
    {
        $vc = new VersionConfig();
        $uc = $vc->getUnserializeConfig();
        $this->assertInstanceOf(UnserializeConfig::class, $uc);
        $this->assertEquals(4728838, $uc->getLibxmlOpts());
        $this->assertEquals(512, $uc->getJSONDecodeMaxDepth());
        $sc = $vc->getSerializeConfig();
        $this->assertInstanceOf(SerializeConfig::class, $sc);
        $this->assertFalse($sc->getOverrideSourceXMLNS());
        $this->assertNull($sc->getRootXMLNS());
        $this->assertEquals(4728838, $sc->getXHTMLLibxmlOpts());
    }

    public function testCanConstructWithValidMapParams()
    {
        $vc = new VersionConfig(
            unserializeConfig: ['libxmlOpts' => 456, 'jsonDecodeMaxDepth' => 789],
            serializeConfig: ['overrideSourceXMLNS' => true, 'rootXMLNS' => 'urn:foo:bar', 'xhtmlLibxmlOpts' => 123],
        );
        $uc = $vc->getUnserializeConfig();
        $this->assertInstanceOf(UnserializeConfig::class, $uc);
        $this->assertEquals(456, $uc->getLibxmlOpts());
        $this->assertEquals(789, $uc->getJSONDecodeMaxDepth());
        $sc = $vc->getSerializeConfig();
        $this->assertInstanceOf(SerializeConfig::class, $sc);
        $this->assertTrue($sc->getOverrideSourceXMLNS());
        $this->assertEquals('urn:foo:bar', $sc->getRootXMLNS());
        $this->assertEquals(123, $sc->getXHTMLLibxmlOpts());
    }

    public function testCanConstructWithValidObjectParams()
    {
        $vc = new VersionConfig(
            unserializeConfig: new UnserializeConfig(),
            serializeConfig: new SerializeConfig(),
        );
        $uc = $vc->getUnserializeConfig();
        $this->assertInstanceOf(UnserializeConfig::class, $uc);
        $this->assertEquals(4728838, $uc->getLibxmlOpts());
        $this->assertEquals(512, $uc->getJSONDecodeMaxDepth());
        $sc = $vc->getSerializeConfig();
        $this->assertInstanceOf(SerializeConfig::class, $sc);
        $this->assertFalse($sc->getOverrideSourceXMLNS());
        $this->assertNull($sc->getRootXMLNS());
        $this->assertEquals(4728838, $sc->getXHTMLLibxmlOpts());
    }
}
