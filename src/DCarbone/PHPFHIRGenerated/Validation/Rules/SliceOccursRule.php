<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Validation\Rules;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 20th, 2026 01:17+0000
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
use DCarbone\PHPFHIRGenerated\Validation\ValueMatcher;

class SliceOccursRule implements RuleInterface
{
    public const NAME = 'slice_occurs';
    public const DESCRIPTION = 'Asserts that the number of values matching each declared slice is within its bounds.';

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
        $items = null === $value ? [] : (is_array($value) ? $value : [$value]);
        $errs = [];
        foreach ($constraint as $slice) {
            $count = 0;
            foreach ($items as $item) {
                if (ValueMatcher::matches($item, $slice['match'])) {
                    $count++;
                }
            }
            if (isset($slice['min']) && $count < $slice['min']) {
                $errs[] = sprintf('slice "%s" requires at least %d, found %d', $slice['name'], $slice['min'], $count);
            }
            if (isset($slice['max']) && $count > $slice['max']) {
                $errs[] = sprintf('slice "%s" allows at most %d, found %d', $slice['name'], $slice['max'], $count);
            }
        }
        if ([] === $errs) {
            return null;
        }
        return sprintf('Field "%s" on type "%s": %s', $field, $type->_getFHIRTypeName(), implode('; ', $errs));
    }
}
