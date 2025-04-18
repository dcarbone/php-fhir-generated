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
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\PrimitiveContainerTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\PrimitiveTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;

class MockPrimitiveContainerType extends MockElementType implements PrimitiveContainerTypeInterface
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait,
        MockTypeFieldsTrait;

    private const _FHIR_VALIDATION_RULES = [];

    private array $_valueXMLLocations = [];

    public function __construct(string $name,
                                array $fields = [],
                                array $validationRuleMap = [],
                                array $fhirComments = [],
                                mixed $value = null,
                                string $versionName = self::DEFAULT_MOCK_VERSION_NAME,
                                string $semanticVersion = self::DEFAULT_MOCK_SEMANTIC_VERSION)
    {
        if (!isset($fields['value'])
            || !isset($fields['value']['class'])
            || !is_a($fields['value']['class'], PrimitiveTypeInterface::class, true)) {
            throw new \InvalidArgumentException(sprintf(
                'Primitive container type "%s" must have a "value" field and it must be a primitive type.',
                $name,
            ));
        }
        if (null !== $value) {
            $fields['value']['value'] = $value;
        }
        parent::__construct($name, $fields, $validationRuleMap, $fhirComments, $versionName, $semanticVersion);
    }

    public function _nonValueFieldDefined(): bool
    {
        foreach($this->_fields as $field => $def) {
            if ('value' !== $field && isset($def['value']) && [] !== $def['value']) {
                return true;
            }
        }
        return false;
    }

    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config,
                                 null|ValueXMLLocationEnum $valueLocation = null): void
    {
        $this->_xmlSerialize($xw, $config, $valueLocation);
    }

    public function _getValueAsString(): string
    {
        return (string)$this->getValue();
    }
}
