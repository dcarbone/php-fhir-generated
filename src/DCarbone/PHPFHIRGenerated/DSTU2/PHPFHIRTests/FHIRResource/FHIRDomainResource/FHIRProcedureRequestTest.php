<?php

namespace DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTests\FHIRResource\FHIRDomainResource;
/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPUnit\Framework\TestCase;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedureRequest;
use PHPUnit\Framework\AssertionFailedError;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRBundle;

/**
 * Class FHIRProcedureRequestTest
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTests\FHIRResource\FHIRDomainResource
 */
class FHIRProcedureRequestTest extends TestCase
{
    public function testCanConstructTypeNoArgs()
    {
        $type = new FHIRProcedureRequest();
        $this->assertInstanceOf('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedureRequest', $type);
    }



    /** @var array */
    private $_fetchedResources = [];

    /** @var array */
    private static $_ignoreErrs = [
        'Unable to provide support for code system',
        ' minimum required =',
        ' Unable to resolve resource',
        'Identifier.system must be an absolute reference',
        ' Unknown Code System ',
        ' URL value ',
        ' None of the codes provided are in the value set ',
        'and a code is required from this value set',
    ];

    /**
     * @var string $filename
     * @return array
     */
    protected function _runFHIRValidationJAR($filename)
    {
        $output = [];
        $code = -1;
        $cmd = sprintf(
            'java -jar %s %s -version 1.0.2',
            PHPFHIR_FHIR_VALIDATION_JAR,
            $filename
        );

        exec($cmd, $output, $code);

        $onlyWarn = false;
        if (0 !== $code) {
            foreach($output as $line) {
                foreach(self::$_ignoreErrs as $ignoreMe) {
                    if (false !== strpos($line, $ignoreMe)) {
                        $onlyWarn = true;
                        break;
                    }
                }
            }
        }

        return [$code, $output, $onlyWarn];
    }

    /**
     * @param string $format Either xml or json
     * @return string
     */
    protected function fetchResource($format)
    {
        if (isset($this->_fetchedResources[$format])) {
            return $this->_fetchedResources[$format];
        }
        $url = sprintf('http://hapi.fhir.org/baseDstu2/ProcedureRequest/?_count=1&_format=%s', $format);
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
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
        $this->_fetchedResources[$format] = $res;
        $fname = sprintf('%s/ProcedureRequest-v1.0.2-source.%s', PHPFHIR_OUTPUT_TMP_DIR, $format);
        file_put_contents($fname, $res);
        return $res;
    }

    /**
     * @param string $sourceJSON
     * @param bool $asArray
     * @return mixed
     */
    protected function decodeJSON($sourceJSON, $asArray)
    {
        $this->assertJson($sourceJSON);
        $decoded = json_decode($sourceJSON, $asArray);
        if (JSON_ERROR_NONE !== json_last_error()) {
            $this->fail(sprintf(
                'Error decoded JSON: %s; Raw: %s',
                function_exists('json_last_error_msg') ? json_last_error_msg() : ('Code: '.json_last_error()),
                $sourceJSON
            ));
        }
        return $decoded;
    }

    public function testXML()
    {
        $sourceXML = $this->fetchResource('xml');
        try {
            $bundle = FHIRBundle::xmlUnserialize($sourceXML);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from XML: %s; Returned XML: %s',
                    $e->getMessage(),
                    $sourceXML
                ),
                $e->getCode(),
                $e
            );
        }
        $this->assertInstanceOf('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRBundle', $bundle);
        if (0 === count($bundle->getEntry())) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "http://hapi.fhir.org/baseDstu2" does not have any "ProcedureRequest" entries to test against (returned xml: %s)',
                $sourceXML
            ));
            return;
        }
        $this->assertCount(1, $bundle->getEntry());
        $entry = $bundle->getEntry()[0]->getResource();
        $entryElement = $entry->xmlSerialize();
        $entryXML = $entryElement->ownerDocument->saveXML($entryElement);
        try {
            $type = FHIRProcedureRequest::xmlUnserialize($entryXML);
        } catch (\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "ProcedureRequest" from XML: %s; XML: %s',
                    $e->getMessage(),
                    $entryXML
                ),
                $e->getCode(),
                $e
            );
        }
        $this->assertInstanceOf('\DCarbone\PHPFHIRGenerated\DSTU2\FHIRResource\FHIRDomainResource\FHIRProcedureRequest', $type);
        $typeElement = $type->xmlSerialize();
        $this->assertEquals($entryXML, $typeElement->ownerDocument->saveXML($typeElement));
        $bundleElement = $bundle->xmlSerialize();
        $this->assertXmlStringEqualsXmlString($sourceXML, $bundleElement->ownerDocument->saveXML());
    }

    public function testJSON()
    {
        $sourceJSON = $this->fetchResource('json');
        $decoded = $this->decodeJSON($sourceJSON, true);
        try {
            $bundle = new FHIRBundle($decoded);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from JSON: %s; Returned JSON: %s',
                    $e->getMessage(),
                    $sourceJSON
                ),
                $e->getCode(),
                $e
            );
        }
        if (0 === count($bundle->getEntry())) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "http://hapi.fhir.org/baseDstu2" does not have any ProcedureRequest" entries to test against (returned json: %s)',
                $sourceJSON
            ));
            return;
        }

        $reEncoded = json_encode($bundle);
        try {
            $this->assertEquals($decoded, $this->decodeJSON($reEncoded, true));
        } catch (\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    "json_encode output of \"FHIRProcedureRequest\" does not match input: %s\nSource:\n%s\nRe-encoded:\n%s\n",
                    $e->getMessage(),
                    $sourceJSON,
                    $reEncoded
                ),
                $e->getCode(),
                $e
            );
        }
    }

    public function testValidationXML()
    {
        $sourceXML = $this->fetchResource('xml');
        try {
            $bundle = FHIRBundle::xmlUnserialize($sourceXML);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from XML: %s; Returned XML: %s',
                    $e->getMessage(),
                    $sourceXML
                ),
                $e->getCode(),
                $e
            );
        }
        if (0 === count($bundle->getEntry())) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "http://hapi.fhir.org/baseDstu2" does not have any ProcedureRequest" entries to test against (returned XML: %s)',
                $sourceXML
            ));
            return;
        }
        $errs = $bundle->_getValidationErrors();
        try {
            $this->assertCount(0, $errs);
        } catch (\Exception $e) {
            $this->markTestSkipped(sprintf('Validation errors seen: %s', json_encode($errs, JSON_PRETTY_PRINT)));
        }
    }

    public function testValidationJSON()
    {
        $sourceJSON = $this->fetchResource('json');
        $decoded = $this->decodeJSON($sourceJSON, true);
        try {
            $bundle = new FHIRBundle($decoded);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from JSON: %s; Returned JSON: %s',
                    $e->getMessage(),
                    $sourceJSON
                ),
                $e->getCode(),
                $e
            );
        }
        if (0 === count($bundle->getEntry())) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "http://hapi.fhir.org/baseDstu2" does not have any ProcedureRequest" entries to test against (returned json: %s)',
                $sourceJSON
            ));
            return;
        }
        $errs = $bundle->_getValidationErrors();
        try {
            $this->assertCount(0, $errs);
        } catch (\Exception $e) {
            $this->markTestSkipped(sprintf('Validation errors seen: %s', json_encode($errs, JSON_PRETTY_PRINT)));
        }
    }

    public function testFHIRValidationXML()
    {
        $sourceXML = $this->fetchResource('xml');
        try {
            $bundle = FHIRBundle::xmlUnserialize($sourceXML);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from XML: %s; Returned XML: %s',
                    $e->getMessage(),
                    $sourceXML
                ),
                $e->getCode(),
                $e
            );
        }
        if (0 === count($bundle->getEntry())) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "http://hapi.fhir.org/baseDstu2" does not have any ProcedureRequest" entries to test against (returned xml: %s)',
                $sourceXML
            ));
            return;
        }
        $entry = $bundle->getEntry()[0]->getResource();
        $fname = PHPFHIR_OUTPUT_TMP_DIR . '/' . $entry->_getFHIRTypeName() . '-v1.0.2.xml';
        file_put_contents($fname, $bundle->xmlSerialize()->ownerDocument->saveXML());
        $this->assertFileExists($fname);

        list($code, $output, $onlyWarn) = $this->_runFHIRValidationJAR($fname);

        if ($onlyWarn) {
            $this->markTestSkipped(sprintf(
                'FHIR validation failed with nonsense code error: %s',
                implode("\n", $output)
            ));
        } else {
            $this->assertEquals(
                0,
                $code,
                sprintf(
                    "Expected exit code 0, saw %d:\n%s",
                    $code,
                    implode("\n", $output)
                )
            );
        }
    }

    public function testFHIRValidationJSON()
    {
        $sourceJSON = $this->fetchResource('json');
        $decoded = $this->decodeJSON($sourceJSON, true);
        try {
            $bundle = new FHIRBundle($decoded);
        } catch(\Exception $e) {
            throw new AssertionFailedError(
                sprintf(
                    'Error building type "Bundle" from JSON: %s; Returned JSON: %s',
                    $e->getMessage(),
                    $sourceJSON
                ),
                $e->getCode(),
                $e
            );
        }
        if (0 === count($bundle->getEntry())) {
            $this->markTestSkipped(sprintf(
                'Provided test endpoint "http://hapi.fhir.org/baseDstu2" does not have any ProcedureRequest" entries to test against (returned json: %s)',
                $sourceJSON
            ));
            return;
        }
        $entry = $bundle->getEntry()[0]->getResource();
        $fname = PHPFHIR_OUTPUT_TMP_DIR . '/' . $entry->_getFHIRTypeName() . '-v1.0.2.json';
        file_put_contents($fname, json_encode($bundle));
        $this->assertFileExists($fname);

        list($code, $output, $onlyWarn) = $this->_runFHIRValidationJAR($fname);

        if ($onlyWarn) {
            $this->markTestSkipped(sprintf(
                'FHIR validation failed with nonsense code error: %s',
                implode("\n", $output)
            ));
        } else {
            $this->assertEquals(
                0,
                $code,
                sprintf(
                    "Expected exit code 0, saw %d:\n%s",
                    $code,
                    implode("\n", $output)
                )
            );
        }
    }
}
