<?php declare(strict_types=1);

namespace Tests\DCarbone\PHPFHIRGenerated\Mock;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: September 20th, 2025 13:35+0000
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


trait MockJSONFieldExtractorTrait
{
    protected static function _buildFieldsFromJSON(\stdClass $decoded): array
    {
        $fields = [];

        foreach($decoded as $name => $value) {
            // quick check for collection field.
            $collection = is_array($value);

            // no way to handle ambiguous fields right now.
            if (null === $value || ($collection && [] === $value)) {
                continue;
            }

            // get "example" value.
            $exValue = $collection ? $value[0] : $value;

            // initialize field definition
            $field = [
                'class' => match(true) {
                    is_scalar($exValue) => MockStringPrimitiveType::class,
                    isset($exValue->value) => MockPrimitiveContainerType::class,
                    default => MockElementType::class,
                },
                'collection' => $collection,
            ];

            if (is_scalar($exValue)) {
                // If the value is a scalar, simply set the field's value to the
                // json value and move on.  The mock constructor will handle the rest of initialization.
                $field['value'] = $value;
            } else if ($collection) {
                // For collection values, we'll need to iterate over each to be sure that each value
                // has all appropriate field definitions.
                //
                // Eventually maybe merge all the defs, but meh.
                $field['value'] = [];
                foreach($value as $v) {
                    $field['value'][] = new $field['class'](
                        name: $name,
                        fields: static::_buildFieldsFromJson($v)
                    );
                }
            } else {
                $field['value'] = new $field['class'](
                    name: $name,
                    fields: static::_buildFieldsFromJson($value)
                );
            }

            $fields[$name] = $field;
        }

        return $fields;
    }
}
