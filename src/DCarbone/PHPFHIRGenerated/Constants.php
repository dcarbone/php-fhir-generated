<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated;

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

final class Constants
{
    // PHPFHIR
    public const CODE_GENERATION_DATE = 'January 31st, 2025 23:45+0000';

    // Common
    public const JSON_FIELD_RESOURCE_TYPE = 'resourceType';
    public const JSON_FIELD_FHIR_COMMENTS = 'fhir_comments';
    public const STRING_TRUE = 'true';
    public const STRING_FALSE = 'false';

    // Date and time formats
    public const DATE_FORMAT_YEAR = 'Y';
    public const DATE_FORMAT_YEAR_MONTH = 'Y-m';
    public const DATE_FORMAT_YEAR_MONTH_DAY = 'Y-m-d';
    public const DATE_FORMAT_YEAR_MONTH_DAY_TIME = 'Y-m-d\TH:i:s\.uP';
    public const DATE_FORMAT_INSTANT = 'Y-m-d\TH:i:s\.uP';
    public const TIME_FORMAT = 'H:i:s';

    public const UNLIMITED = -1;

    // Validation
    public const VALIDATE_ENUM = 'enum';
    public const VALIDATE_MIN_LENGTH = 'min_length';
    public const VALIDATE_MAX_LENGTH = 'max_length';
    public const VALIDATE_PATTERN = 'pattern';
    public const VALIDATE_MIN_OCCURS = 'min_occurs';
    public const VALIDATE_MAX_OCCURS = 'max_occurs';
}
