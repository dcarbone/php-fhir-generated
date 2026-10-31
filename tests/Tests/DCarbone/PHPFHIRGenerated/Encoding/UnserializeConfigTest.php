<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Encoding;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 31st, 2026 01:12+0000
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2026 Daniel Carbone (daniel.p.carbone@gmail.com)
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
use DCarbone\PHPFHIRGenerated\Encoding\OnAmbiguousProfileEnum;
use DCarbone\PHPFHIRGenerated\Encoding\OnProfileVersionMismatchEnum;
use DCarbone\PHPFHIRGenerated\Encoding\OnProfileViolationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\OnUnknownProfileEnum;
use DCarbone\PHPFHIRGenerated\Encoding\ProfileResolutionEnum;
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

    public function testProfileOptionDefaults()
    {
        $uc = new UnserializeConfig();
        $this->assertSame(ProfileResolutionEnum::OFF, $uc->getProfileResolution());
        $this->assertSame(OnUnknownProfileEnum::FALLBACK, $uc->getOnUnknownProfile());
        $this->assertSame(OnAmbiguousProfileEnum::FIRST_DECLARED, $uc->getOnAmbiguousProfile());
        $this->assertSame(OnProfileVersionMismatchEnum::IGNORE_VERSION, $uc->getOnProfileVersionMismatch());
        $this->assertSame(OnProfileViolationEnum::KEEP, $uc->getOnProfileViolation());
    }

    public function testProfileOptionsAcceptEnumsAndStrings()
    {
        $uc = new UnserializeConfig(
            profileResolution: 'auto',
            onUnknownProfile: OnUnknownProfileEnum::EXCEPTION,
            onAmbiguousProfile: 'exception',
            onProfileVersionMismatch: OnProfileVersionMismatchEnum::FALLBACK,
            onProfileViolation: 'exception',
        );
        $this->assertSame(ProfileResolutionEnum::AUTO, $uc->getProfileResolution());
        $this->assertSame(OnUnknownProfileEnum::EXCEPTION, $uc->getOnUnknownProfile());
        $this->assertSame(OnAmbiguousProfileEnum::EXCEPTION, $uc->getOnAmbiguousProfile());
        $this->assertSame(OnProfileVersionMismatchEnum::FALLBACK, $uc->getOnProfileVersionMismatch());
        $this->assertSame(OnProfileViolationEnum::EXCEPTION, $uc->getOnProfileViolation());
    }

    public function testInvalidProfileOptionStringThrows()
    {
        $this->expectException(\InvalidArgumentException::class);
        (new UnserializeConfig())->setOnProfileViolation('ignore');
    }
}
