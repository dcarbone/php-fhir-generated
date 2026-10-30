<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Validation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: October 30th, 2026 00:59+0000
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
use DCarbone\PHPFHIRGenerated\Types\ValueContainerTypeInterface;

/**
 * Resolves dotted field paths, such as "contact.relationship", against a root type.
 *
 * Collections encountered along the way are expanded, so a single path may resolve to many parent instances.
 */
class PathResolver
{
    public const SEPARATOR = '.';
    public const CHOICE_SUFFIX = '[x]';

    /**
     * Returns true if the key must be resolved against the type rather than read as a single set property: it has
     * more than one segment, or it names a choice element such as "deceased[x]".
     */
    public static function isPath(string $path): bool
    {
        return str_contains($path, self::SEPARATOR) || str_ends_with($path, self::CHOICE_SUFFIX);
    }

    /**
     * Resolves every instance on which the final segment of $path is defined.
     *
     * Each returned entry is a map with the keys "type" (the parent instance), "field" (the final segment) and
     * "path" (the concrete path from $root, including collection indexes, e.g. "contact.0.relationship").
     * Missing or unset intermediate values resolve to no instances.
     */
    public static function resolveParents(TypeInterface $root, string $path): array
    {
        $segments = explode(self::SEPARATOR, $path);
        $field = array_pop($segments);
        $parents = [['type' => $root, 'path' => '']];
        foreach ($segments as $segment) {
            $next = [];
            foreach ($parents as $parent) {
                $value = $parent['type']->{'get' . $segment}();
                $prefix = '' === $parent['path'] ? $segment : "{$parent['path']}.{$segment}";
                if ($value instanceof TypeInterface) {
                    $next[] = ['type' => $value, 'path' => $prefix];
                } elseif (is_array($value)) {
                    foreach ($value as $i => $vv) {
                        if ($vv instanceof TypeInterface) {
                            $next[] = ['type' => $vv, 'path' => "{$prefix}.{$i}"];
                        }
                    }
                }
            }
            $parents = $next;
        }
        $out = [];
        foreach ($parents as $parent) {
            $out[] = [
                'type' => $parent['type'],
                'field' => $field,
                'path' => '' === $parent['path'] ? $field : "{$parent['path']}.{$field}",
            ];
        }
        return $out;
    }

    /**
     * Unwraps primitives and primitive containers until a raw scalar (or null) is reached.  Complex types, which have
     * no single value, are returned as-is.
     */
    public static function unwrap(mixed $value): mixed
    {
        while ($value instanceof ValueContainerTypeInterface) {
            $value = $value->getValue();
        }
        return $value;
    }
}
