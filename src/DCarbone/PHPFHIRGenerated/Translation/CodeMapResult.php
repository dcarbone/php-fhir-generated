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

final class CodeMapResult{
    public function __construct(
        private readonly string $sourceSystem,
        private readonly null|string $targetSystem,
        private readonly null|string $targetCode,
        private readonly null|string $targetVersion = null,
    ) {
    }

    public function isFailure(): bool
    {
        return null === $this->targetSystem || null === $this->targetCode;
    }

    public function changesSystem(): bool
    {
        return !$this->isFailure() && $this->sourceSystem !== $this->targetSystem;
    }

    public function getTargetVersion(): null|string
    {
        return $this->targetVersion;
    }

    public function getTargetValue(string $fieldName): string
    {
        if ($this->isFailure()) {
            throw new \LogicException('A failed code-map result has no target value.');
        }

        $value = match ($fieldName) {
            'system' => $this->targetSystem,
            'code' => $this->targetCode,
            default => throw new \InvalidArgumentException(sprintf(
                'Unsupported Coding field "%s" for code-map result.',
                $fieldName,
            )),
        };
        if (null === $value) {
            throw new \LogicException(sprintf('Code-map result has no target "%s".', $fieldName));
        }

        return $value;
    }
}
