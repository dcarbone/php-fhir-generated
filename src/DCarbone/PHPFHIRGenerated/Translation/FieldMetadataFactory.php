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

use DCarbone\PHPFHIRGenerated\Types\ContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\ResourceContainerTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;

final class FieldMetadataFactory implements FieldMetadataFactoryInterface
{
    /** @var array<class-string<TypeInterface>, array<string, \DCarbone\PHPFHIRGenerated\Translation\FieldMetadata>> */
    private array $_cache = [];

    /**
     * @return array<string, \DCarbone\PHPFHIRGenerated\Translation\FieldMetadata>
     */
    public function forType(TypeInterface $type): array
    {
        $className = $type::class;
        if (isset($this->_cache[$className])) {
            return $this->_cache[$className];
        }

        $fields = [];
        $reflection = new \ReflectionClass($className);
        foreach ($reflection->getProperties() as $property) {
            if ($property->isStatic()) {
                continue;
            }

            foreach ($property->getAttributes() as $attribute) {
                $fieldType = $attribute->getName();
                if (!is_a($fieldType, TypeInterface::class, true)) {
                    continue;
                }

                $fieldName = $property->getName();
                $setter = 'set' . ucfirst($fieldName);
                if (is_a($fieldType, ResourceContainerTypeInterface::class, true)) {
                    // Resource container fields hold the unwrapped resource, so describe them by the contained
                    // resource interface their setter accepts rather than the container wrapper class.
                    $fieldType = $this->getContainedType($reflection, $setter);
                }
                $propertyType = $property->getType();
                $fields[$fieldName] = new FieldMetadata(
                    type: $fieldType,
                    collection: $propertyType instanceof \ReflectionNamedType
                        && 'array' === $propertyType->getName(),
                    getter: 'get' . ucfirst($fieldName),
                    setter: $setter,
                );
                break;
            }
        }

        return $this->_cache[$className] = $fields;
    }

    /**
     * @return class-string<ContainedTypeInterface>
     */
    private function getContainedType(\ReflectionClass $reflection, string $setter): string
    {
        if ($reflection->hasMethod($setter)) {
            $parameters = $reflection->getMethod($setter)->getParameters();
            $parameterType = isset($parameters[0]) ? $parameters[0]->getType() : null;
            $namedTypes = match (true) {
                $parameterType instanceof \ReflectionNamedType => [$parameterType],
                $parameterType instanceof \ReflectionUnionType => $parameterType->getTypes(),
                default => [],
            };
            foreach ($namedTypes as $namedType) {
                if ($namedType instanceof \ReflectionNamedType
                    && !$namedType->isBuiltin()
                    && is_a($namedType->getName(), ContainedTypeInterface::class, true)) {
                    return $namedType->getName();
                }
            }
        }

        throw new \UnexpectedValueException(sprintf(
            'Generated type "%s" resource container setter "%s()" must accept a %s.',
            $reflection->getName(),
            $setter,
            ContainedTypeInterface::class,
        ));
    }
}
