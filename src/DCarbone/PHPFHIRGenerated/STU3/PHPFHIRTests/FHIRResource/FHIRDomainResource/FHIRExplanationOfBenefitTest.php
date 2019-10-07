<?php

namespace DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTests\FHIRResource\FHIRDomainResource;
/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 7th, 2019 22:31+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPUnit\Framework\TestCase;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit;
use DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBundle;


/**
 * Class FHIRExplanationOfBenefitTest
 * @package \DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTests\FHIRResource\FHIRDomainResource
 */
class FHIRExplanationOfBenefitTest extends TestCase
{
    public function testCanConstructTypeNoArgs()
    {
        $type = new FHIRExplanationOfBenefit();
        $this->assertInstanceOf('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit', $type);
    }

    /**
     * @param string $format Either xml or json
     * @return string
     */
    protected function fetchResource($format)
    {
        $url = sprintf('http://hapi.fhir.org/baseDstu3/ExplanationOfBenefit/?_count=1&_format=%s&_pretty=true', $format);
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT        => 10, // set low timeout to move things along...
        ]);
        $res = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        $this->assertEmpty($err, sprintf('curl error seen: %s', $err));
        if (method_exists($this, 'assertIsString')) {
            $this->assertIsString($res);
        } else {
            $this->assertInternalType('string', $res);
        }
        return $res;
    }

    // TODO: precompile list of resource id's and use them specifically?
    public function testXML()
    {
        $xml = $this->fetchResource('xml');
        try {
            $type = FHIRExplanationOfBenefit::xmlUnserialize($xml);
        } catch (\Exception $e) {
            $this->fail(sprintf(
                'Error building type "Bundle" from XML: %s; Returned XML: %s',
                $e->getMessage(),
                $xml
            ));
        }
        $bundle = FHIRBundle::xmlUnserialize($xml);
        $this->assertInstanceOf('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRBundle', $bundle);
        if (0 === count($bundle->getEntry())) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "http://hapi.fhir.org/baseDstu3" does not have any "ExplanationOfBenefit" entries to test against (returned xml: %s)',
                $xml
            ));
            return;
        }
        $this->assertCount(1, $bundle->getEntry());
        $entry = $bundle->getEntry()[0]->getResource();
        $xml2 = $entry->xmlSerialize()->saveXML();
        try {
            $type = FHIRExplanationOfBenefit::xmlUnserialize($xml2);
        } catch (\Exception $e) {
            $this->fail(sprintf(
                'Error building type "ExplanationOfBenefit" from XML: %s; Returned XML: %s',
                $e->getMessage(),
                $xml2
            ));
        }
        $this->assertInstanceOf('\DCarbone\PHPFHIRGenerated\STU3\FHIRResource\FHIRDomainResource\FHIRExplanationOfBenefit', $type);
        $this->assertEquals($entry->xmlSerialize()->saveXML(), $type->xmlSerialize()->saveXML());
    }
}
