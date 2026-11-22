<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Translation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: November 22nd, 2026 04:37+0000
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

use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;

final class TranslationResult
{
    /**
     * @param \DCarbone\PHPFHIRGenerated\Translation\TranslationNotice[] $notices
     */
    public function __construct(
        private readonly ResourceTypeInterface $resource,
        private readonly array $notices = [],
    ) {
        foreach ($this->notices as $notice) {
            if (!$notice instanceof TranslationNotice) {
                throw new \InvalidArgumentException(sprintf(
                    'Translation notices must be instances of %s; %s received.',
                    TranslationNotice::class,
                    get_debug_type($notice),
                ));
            }
        }
    }

    public function getResource(): ResourceTypeInterface
    {
        return $this->resource;
    }

    /**
     * @return \DCarbone\PHPFHIRGenerated\Translation\TranslationNotice[]
     */
    public function getNotices(): array
    {
        return $this->notices;
    }
}
