<?php
namespace Tests\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Client\Client;
use DCarbone\PHPFHIRGenerated\Client\Config;
use DCarbone\PHPFHIRGenerated\Client\ResponseFormatEnum;
use DCarbone\PHPFHIRGenerated\Client\UnexpectedResponseCodeException;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRBundle;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource\FHIRNutritionOrder;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionClient;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypesEnum;
use PHPUnit\Framework\TestCase;

class FHIRNutritionOrderTest extends TestCase
{
    protected Version $_version;

    protected function setUp(): void
    {
        $this->_version = new Version();
    }

    protected function _getTestEndpoint(): string
    {
        return trim((string)getenv('PHPFHIR_TEST_SERVER_ADDR'));
    }

    protected function _getClient(): VersionClient
    {
        $testEndpoint = $this->_getTestEndpoint();
        if ('' === $testEndpoint) {
            $this->markTestSkipped('Environment variable PHPFHIR_TEST_SERVER_ADDR is not defined or empty');
        }
        return new VersionClient(
            new Client(
                new Config(
                    address: $testEndpoint,
                ),
            ),
            $this->_version,
        );
    }

    public function testCanConstructTypeNoArgs()
    {
        $type = new FHIRNutritionOrder();
        $this->assertEquals('NutritionOrder', $type->_getFHIRTypeName());
    }
    public function testCanTranscodeBundleJSON()
    {
        $client = $this->_getClient();
        $rc = $client->readRaw(
            resourceType: VersionTypesEnum::NUTRITION_ORDER,
            count: 5,
            format: ResponseFormatEnum::JSON,
        );
        if (404 === $rc->getCode()) {
            $this->markTestSkipped(sprintf(
                'Configured test endpoint "%s" has no resources of type "NutritionOrder"',
                $this->_getTestEndpoint(),
            ));
        }
        $this->assertIsString($rc->getResp());
        $this->assertJSON($rc->getResp());
        $this->assertEquals(200, $rc->getCode(), sprintf('Configured test endpoint "%s" returned non-200 response code', $this->_getTestEndpoint()));
        $bundle = FHIRBundle::jsonUnserialize(
            json: $rc->getResp(),
            config: $this->_version->getConfig()->getUnserializeConfig(),
        );
        $entry = $bundle->getEntry();
        $this->assertNotCount(0, $entry);
        foreach($entry as $ent) {
            $resource = $ent->getResource();
            $this->assertInstanceOf(FHIRNutritionOrder::class, $resource);
            $enc = json_encode($resource);
            $this->assertJson($enc);
        }
        $enc = json_encode($bundle);
        $this->assertJson($enc);
        $this->assertJsonStringEqualsJsonString($rc->getResp(), $enc);
    }

    public function testCanTranscodeBundleXML()
    {
        $client = $this->_getClient();
        $rc = $client->readRaw(
            resourceType: VersionTypesEnum::NUTRITION_ORDER,
            count: 5,
            format: ResponseFormatEnum::XML,
        );
        if (404 === $rc->getCode()) {
            $this->markTestSkipped(sprintf(
                'Configured test endpoint "%s" has no resources of type "NutritionOrder"',
                $this->_getTestEndpoint(),
            ));
        }
        $this->assertIsString($rc->getResp());
        $this->assertEquals(200, $rc->getCode(), sprintf('Configured test endpoint "%s" returned non-200 response code', $this->_getTestEndpoint()));
        $bundle = FHIRBundle::xmlUnserialize(
            element: $rc->getResp(),
            config: $this->_version->getConfig()->getUnserializeConfig(),
        );
        $entry = $bundle->getEntry();
        $this->assertNotCount(0, $entry);
        foreach($entry as $ent) {
            $resource = $ent->getResource();
            $this->assertInstanceOf(FHIRNutritionOrder::class, $resource);
        }
        $xw = $bundle->xmlSerialize(config: $this->_version->getConfig()->getSerializeConfig());
        $this->assertXmlStringEqualsXmlString($rc->getResp(), $xw->outputMemory());
    }
}
