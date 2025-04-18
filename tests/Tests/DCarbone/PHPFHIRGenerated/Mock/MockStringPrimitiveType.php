<?php declare(strict_types=1);

namespace Tests\DCarbone\PHPFHIRGenerated\Mock;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Types\PrimitiveTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;

class MockStringPrimitiveType extends AbstractMockType implements PrimitiveTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    private const _FHIR_VALIDATION_RULES = [];

    protected string $value;

    public function __construct(string $name = 'mock-string-primitive',
                                null|string $value = null,
                                array $validationRuleMap = [],
                                string $versionName = self::DEFAULT_MOCK_VERSION_NAME,
                                string $semanticVersion = self::DEFAULT_MOCK_SEMANTIC_VERSION)
    {
        parent::__construct($name, $versionName, $semanticVersion);

        $this->setValue($value);
        foreach($validationRuleMap as $field => $rules) {
            $this->_setFieldValidationRules($field, $rules);
        }
    }

    public function getValue(): null|string
    {
        return $this->value ?? null;
    }

    public function setValue(null|string $value): self
    {
        if (null === $value) {
            unset($this->value);
        } else {
            $this->value = $value;
        }
        return $this;
    }

    public function _getValueAsString(): string
    {
        return (string)$this->getValue();
    }

    public function jsonSerialize(): string
    {
        return $this->value ?? '';
    }

    public function __toString(): string
    {
        return $this->_getValueAsString();
    }
}
