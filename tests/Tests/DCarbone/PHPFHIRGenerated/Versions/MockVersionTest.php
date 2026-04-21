<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Versions;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 21st, 2026 03:50+0000
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

use DCarbone\PHPFHIRGenerated\FHIRVersion;
use DCarbone\PHPFHIRGenerated\Versions\VersionInterface;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockVersion;
use PHPUnit\Framework\TestCase;

class MockVersionTest extends TestCase
{
    public function testImplementsVersionInterface(): void
    {
        $this->assertInstanceOf(VersionInterface::class, new MockVersion());
    }

    public function testGetName(): void
    {
        $this->assertSame(MockVersion::NAME, (new MockVersion())->getName());
    }

    public function testGetFHIRSemanticVersion(): void
    {
        $this->assertSame(MockVersion::FHIR_SEMANTIC_VERSION, (new MockVersion())->getFHIRSemanticVersion());
    }

    public function testGetFHIRShortVersion(): void
    {
        $this->assertSame(MockVersion::FHIR_SHORT_VERSION, (new MockVersion())->getFHIRShortVersion());
    }

    public function testGetFHIRVersionInteger(): void
    {
        $this->assertSame(MockVersion::FHIR_VERSION_INTEGER, (new MockVersion())->getFHIRVersionInteger());
    }

    public function testGetFHIRPreReleaseIsNullForGAMock(): void
    {
        $this->assertNull((new MockVersion())->getFHIRPreRelease());
    }

    public function testIsFHIRPreReleaseIsFalseForGAMock(): void
    {
        $this->assertFalse((new MockVersion())->isFHIRPreRelease());
    }

    public function testGetFHIRVersionReturnsFHIRVersionInstance(): void
    {
        $fv = MockVersion::getFHIRVersion();
        $this->assertInstanceOf(FHIRVersion::class, $fv);
    }

    public function testGetFHIRVersionCarriesCorrectValues(): void
    {
        $fv = MockVersion::getFHIRVersion();
        $this->assertSame(MockVersion::NAME, $fv->getName());
        $this->assertSame(MockVersion::FHIR_SEMANTIC_VERSION, $fv->getFHIRSemanticVersion());
        $this->assertSame(MockVersion::FHIR_SHORT_VERSION, $fv->getFHIRShortVersion());
        $this->assertSame(MockVersion::FHIR_VERSION_INTEGER, $fv->getFHIRVersionInteger());
        $this->assertNull($fv->getFHIRPreRelease());
        $this->assertFalse($fv->isFHIRPreRelease());
    }

    public function testGetFHIRVersionIsSingleton(): void
    {
        $this->assertSame(MockVersion::getFHIRVersion(), MockVersion::getFHIRVersion());
    }
}
