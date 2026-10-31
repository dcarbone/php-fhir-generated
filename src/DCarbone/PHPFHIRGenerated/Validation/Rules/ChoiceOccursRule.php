<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Validation\Rules;

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

use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\RuleInterface;

class ChoiceOccursRule implements RuleInterface
{
    public const NAME = 'choice_occurs';
    public const DESCRIPTION = 'Asserts that the number of set variants of a choice element is within bounds and that only allowed variants are set.';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getDescription(): string
    {
        return self::DESCRIPTION;
    }

    public function assert(TypeInterface $type, string $field, mixed $constraint, mixed $value): null|string
    {
        $set = [];
        foreach ($constraint['fields'] as $variant) {
            $variantValue = $type->{'get' . $variant}();
            if (null !== $variantValue && [] !== $variantValue) {
                $set[] = $variant;
            }
        }
        $errs = [];
        if (isset($constraint['allowed'])) {
            $disallowed = array_diff($set, $constraint['allowed']);
            if ([] !== $disallowed) {
                $errs[] = sprintf('type(s) not allowed: %s', implode(', ', $disallowed));
            }
        }
        $count = count($set);
        if (isset($constraint['min']) && $count < $constraint['min']) {
            $errs[] = sprintf('requires at least %d, found %d', $constraint['min'], $count);
        }
        if (isset($constraint['max']) && $count > $constraint['max']) {
            $errs[] = sprintf('allows at most %d, found %d', $constraint['max'], $count);
        }
        if ([] === $errs) {
            return null;
        }
        return sprintf('Field "%s" on type "%s": %s', $field, $type->_getFHIRTypeName(), implode('; ', $errs));
    }
}
