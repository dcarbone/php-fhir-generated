<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 20:30+0000
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

use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Version as VersionDSTU1;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Version as VersionDSTU2;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version as VersionSTU3;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version as VersionR4;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version as VersionR4B;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version as VersionR5;

enum VersionEnum : string
{
    case DSTU1 = VersionDSTU1::NAME;
    case DSTU2 = VersionDSTU2::NAME;
    case STU3 = VersionSTU3::NAME;
    case R4 = VersionR4::NAME;
    case R4B = VersionR4B::NAME;
    case R5 = VersionR5::NAME;
}
