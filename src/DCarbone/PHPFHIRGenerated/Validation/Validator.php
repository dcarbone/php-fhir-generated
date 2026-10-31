<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Validation;

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

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ChoiceOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\CodeBindingRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\FixedValueRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MaxOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\PatternValueRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\SliceOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMaxLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueMinLengthRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValueOneOfRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;

class Validator
{
    /**
     * Map of rules, keyed by name.
     *
     * @var \DCarbone\PHPFHIRGenerated\Validation\RuleInterface[]
     */
    protected static array $_rules = [];

    private static bool $_initialized = false;

    /**
     * Define a validation rule.  Will overwrite any pre-existing rule with the same name.
     */
    public static function setRule(RuleInterface $rule): void
    {
        self::$_rules[$rule->getName()] = $rule;
    }

    /**
     * Return a rule by name, if it exists
     */
    public static function getRule(string $ruleName): null|RuleInterface
    {
        return self::$_rules[$ruleName] ?? null;
    }

    /**
     * Return the current map of rules
     * @return \DCarbone\PHPFHIRGenerated\Validation\RuleInterface[]
     */
    public static function getRules(): array
    {
        return self::$_rules;
    }

    /**
     * @param string|\DCarbone\PHPFHIRGenerated\Validation\RuleInterface $rule Name of registered validation rule, or a specific rule instance to run.
     */
    public static function runRule(TypeInterface $type,
                                   string $field,
                                   string|RuleInterface $rule,
                                   mixed $constraint,
                                   mixed $value): null|string
    {
        if ($rule instanceof RuleInterface) {
            return $rule->assert($type, $field, $constraint, $value);
        }
        if (isset(self::$_rules[$rule])) {
            return self::$_rules[$rule]->assert($type, $field, $constraint, $value);
        }
        throw new \OutOfBoundsException(sprintf('No rule named "%s" registered.', $rule));
    }

    /**
     * Applies the rules of a constraining definition, such as a profile, on top of the rules of its base.  Unlike a
     * plain override, a constraint may only narrow its base: the greater of two minimums and the lesser of two
     * maximums win.  Any other rule present in both is replaced by the constraining definition's.
     *
     * @param array $base Map of ["rule" => {constraint}] of the base definition.
     * @param array $constraining Map of ["rule" => {constraint}] of the constraining definition.
     */
    public static function tighten(array $base, array $constraining): array
    {
        foreach ($constraining as $rule => $constraint) {
            if (!array_key_exists($rule, $base)) {
                $base[$rule] = $constraint;
            } elseif (MinOccursRule::NAME === $rule) {
                $base[$rule] = max($base[$rule], $constraint);
            } elseif (MaxOccursRule::NAME === $rule) {
                $base[$rule] = match (true) {
                    Constants::UNLIMITED === $base[$rule] => $constraint,
                    Constants::UNLIMITED === $constraint => $base[$rule],
                    default => min($base[$rule], $constraint),
                };
            } elseif (ChoiceOccursRule::NAME === $rule && is_array($base[$rule]) && is_array($constraint)) {
                $base[$rule] = self::_tightenChoice($base[$rule], $constraint);
            } else {
                $base[$rule] = $constraint;
            }
        }
        return $base;
    }

    /**
     * Examined fields are united, allowed variants intersected and bounds narrowed, so a profile never loosens its
     * parent's choice.
     */
    private static function _tightenChoice(array $base, array $constraining): array
    {
        $base['fields'] = array_values(array_unique(array_merge($base['fields'] ?? [], $constraining['fields'] ?? [])));
        if (isset($constraining['allowed'])) {
            $base['allowed'] = isset($base['allowed'])
                ? array_values(array_intersect($base['allowed'], $constraining['allowed']))
                : $constraining['allowed'];
        }
        if (isset($constraining['min'])) {
            $base['min'] = max($base['min'] ?? 0, $constraining['min']);
        }
        if (isset($constraining['max'])) {
            $base['max'] = isset($base['max']) ? min($base['max'], $constraining['max']) : $constraining['max'];
        }
        return $base;
    }

    public static function _init(): void
    {
        if (self::$_initialized) {
            return;
        }
        self::$_initialized = true;
        self::$_rules[ValueOneOfRule::NAME] = new ValueOneOfRule();
        self::$_rules[ValueMinLengthRule::NAME] = new ValueMinLengthRule();
        self::$_rules[ValueMaxLengthRule::NAME] = new ValueMaxLengthRule();
        self::$_rules[ValuePatternMatchRule::NAME] = new ValuePatternMatchRule();
        self::$_rules[MinOccursRule::NAME] = new MinOccursRule();
        self::$_rules[MaxOccursRule::NAME] = new MaxOccursRule();
        self::$_rules[FixedValueRule::NAME] = new FixedValueRule();
        self::$_rules[PatternValueRule::NAME] = new PatternValueRule();
        self::$_rules[SliceOccursRule::NAME] = new SliceOccursRule();
        self::$_rules[ChoiceOccursRule::NAME] = new ChoiceOccursRule();
        self::$_rules[CodeBindingRule::NAME] = new CodeBindingRule();
    }
}

Validator::_init();
