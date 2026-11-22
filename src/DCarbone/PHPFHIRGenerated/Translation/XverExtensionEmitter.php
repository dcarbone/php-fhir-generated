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

use DCarbone\PHPFHIRGenerated\Types\PrimitiveContainerTypeInterface;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;

/**
 * Carries source fields the target version lacks as the official HL7 cross-version extensions that describe them.
 */
final class XverExtensionEmitter
{
    private const EXTENSION_TYPE_NAME = 'Extension';
    private const DATATYPE_EXTENSION_URL = 'http://hl7.org/fhir/StructureDefinition/_datatype';

    public function __construct(private readonly FieldMetadataFactoryInterface $metadataFactory)
    {
    }

    /**
     * Appends extensions carrying $value to $target.  Nothing is attached when this returns false: the
     * unmappable-field policy is not EXTENSION, the hop has no definition for the field, or the value cannot be
     * expressed through that definition.
     *
     * @param array<string, \DCarbone\PHPFHIRGenerated\Translation\FieldMetadata> $targetFields
     */
    public function emit(
        TypeInterface $source,
        TypeInterface $target,
        array $targetFields,
        string $fieldName,
        mixed $value,
        TranslationContext $context,
    ): bool {
        if (OnUnmappableFieldEnum::EXTENSION !== $context->getConfig()->getOnUnmappableField()) {
            return false;
        }
        $definition = $context->getHopMap()?->getXverExtensions()[$source->_getFHIRTypeName() . '.' . $fieldName] ?? null;
        if (!$definition instanceof XverExtension) {
            return false;
        }
        $holderField = $targetFields[$definition->isModifier() ? 'modifierExtension' : 'extension'] ?? null;
        if (null === $holderField || !method_exists($target, $holderField->getGetter()) || !method_exists($target, $holderField->getSetter())) {
            return false;
        }
        $typeMap = $context->getTargetVersion()->getTypeMap();
        $extensionClass = $typeMap::getTypeClassname(self::EXTENSION_TYPE_NAME);
        if (null === $extensionClass || !is_a($extensionClass, $holderField->getType(), true)) {
            return false;
        }

        $extensions = [];
        foreach (is_array($value) ? $value : [$value] as $item) {
            if (!$item instanceof TypeInterface) {
                return false;
            }
            $extension = $this->build($definition, $definition->getUrl(), $item, $fieldName, $extensionClass, $context);
            if (null === $extension) {
                return false;
            }
            $extensions[] = $extension;
        }

        $target->{$holderField->getSetter()}(...$target->{$holderField->getGetter()}(), ...$extensions);

        return true;
    }

    /**
     * @param class-string<TypeInterface> $extensionClass
     */
    private function build(
        XverExtension $definition,
        string $url,
        TypeInterface $item,
        string $path,
        string $extensionClass,
        TranslationContext $context,
    ): null|TypeInterface {
        $extension = new $extensionClass();
        $fields = $this->metadataFactory->forType($extension);
        if (!isset($fields['url'])) {
            return null;
        }
        $extension->{$fields['url']->getSetter()}($url);

        $built = $definition->isComplex()
            ? $this->setChildren($definition, $extension, $fields, $item, $path, $extensionClass, $context)
            : $this->setValue($definition, $extension, $fields, $item, $path, $context);

        return $built ? $extension : null;
    }

    /**
     * @param array<string, \DCarbone\PHPFHIRGenerated\Translation\FieldMetadata> $extensionFields
     */
    private function setValue(
        XverExtension $definition,
        TypeInterface $extension,
        array $extensionFields,
        TypeInterface $item,
        string $path,
        TranslationContext $context,
    ): bool {
        $typeName = $item->_getFHIRTypeName();
        $valueTypes = $definition->getValueTypes();
        $valueField = $extensionFields['value' . ucfirst($typeName)] ?? null;
        if (null !== $valueField && in_array($typeName, $valueTypes, true)) {
            $translated = $context->translateField($path, $item, $valueField->getType());
            if (!is_a($translated, $valueField->getType())) {
                return false;
            }
            $extension->{$valueField->getSetter()}($translated);
            return true;
        }

        // Enum-bound elements (e.g. Account.status) are described as plain codes by the extension definition.
        $codeField = $extensionFields['valueCode'] ?? null;
        if (null !== $codeField && $item instanceof PrimitiveContainerTypeInterface && in_array('code', $valueTypes, true)) {
            $translated = $this->translateEnumValue($item, $codeField->getType(), $context);
            if (null !== $translated && is_a($translated, $codeField->getType())) {
                $extension->{$codeField->getSetter()}($translated);
                return true;
            }
            if (!$this->hasPrimitiveMetadata($item)) {
                $value = method_exists($item, 'getValue') ? $item->getValue() : null;
                if ($value instanceof TypeInterface && method_exists($value, 'getValue')) {
                    $value = $value->getValue();
                }
                if ($value instanceof \BackedEnum) {
                    $value = $value->value;
                }
                if (is_string($value)) {
                    $extension->{$codeField->getSetter()}($value);
                    return true;
                }
            }
        }

        return false;
    }

    private function hasPrimitiveMetadata(PrimitiveContainerTypeInterface $source): bool
    {
        foreach ($this->metadataFactory->forType($source) as $fieldName => $field) {
            if ('value' === $fieldName) {
                continue;
            }
            $value = $source->{$field->getGetter()}();
            if (null !== $value && [] !== $value) {
                return true;
            }
        }

        return false;
    }

    /**
     * Converts an enum-bound primitive container to a plain code, translating its element metadata.
     *
     * @param class-string<TypeInterface> $targetClass
     */
    private function translateEnumValue(
        PrimitiveContainerTypeInterface $source,
        string $targetClass,
        TranslationContext $context,
    ): null|TypeInterface {
        $value = method_exists($source, 'getValue') ? $source->getValue() : null;
        $valueType = $value instanceof TypeInterface ? $value->_getFHIRTypeName() : null;
        if ($value instanceof TypeInterface && method_exists($value, 'getValue')) {
            $value = $value->getValue();
        }
        if ($value instanceof \BackedEnum) {
            $value = $value->value;
        }
        if (!is_string($value)) {
            return null;
        }

        if (!(new \ReflectionClass($targetClass))->isInstantiable()) {
            $typeMap = $context->getTargetVersion()->getTypeMap();
            $concreteClass = null === $valueType ? null : $typeMap::getTypeClassname($valueType);
            if (null === $concreteClass || !is_a($concreteClass, $targetClass, true)) {
                return null;
            }
            $targetClass = $concreteClass;
        }

        $target = new $targetClass();
        if (!$target instanceof PrimitiveContainerTypeInterface || !method_exists($target, 'setValue')) {
            return null;
        }
        $target->setValue($value);

        $sourceFields = $this->metadataFactory->forType($source);
        $targetFields = $this->metadataFactory->forType($target);
        foreach ($sourceFields as $fieldName => $sourceField) {
            if ('value' === $fieldName) {
                continue;
            }
            $sourceValue = $source->{$sourceField->getGetter()}();
            if (null === $sourceValue || [] === $sourceValue) {
                continue;
            }
            $targetField = $targetFields[$fieldName] ?? null;
            if (null === $targetField) {
                return null;
            }

            $translatedValues = [];
            foreach (is_array($sourceValue) ? $sourceValue : [$sourceValue] as $sourceItem) {
                if (!$sourceItem instanceof TypeInterface) {
                    return null;
                }
                $translatedItem = $context->translateField($fieldName, $sourceItem, $targetField->getType());
                if (null === $translatedItem || !is_a($translatedItem, $targetField->getType())) {
                    return null;
                }
                $translatedValues[] = $translatedItem;
            }
            if ([] === $translatedValues) {
                continue;
            }

            if ($targetField->isCollection()) {
                $target->{$targetField->getSetter()}(...$translatedValues);
            } else {
                $target->{$targetField->getSetter()}($translatedValues[0]);
            }
        }

        return $target;
    }

    /**
     * @param array<string, \DCarbone\PHPFHIRGenerated\Translation\FieldMetadata> $extensionFields
     * @param class-string<TypeInterface> $extensionClass
     */
    private function setChildren(
        XverExtension $definition,
        TypeInterface $extension,
        array $extensionFields,
        TypeInterface $item,
        string $path,
        string $extensionClass,
        TranslationContext $context,
    ): bool {
        if (!isset($extensionFields['extension'])) {
            return false;
        }

        $children = [];
        foreach ($definition->getChildren() as $child) {
            $children[$child->getField()] = $child;
        }

        $itemFields = $this->metadataFactory->forType($item);
        foreach ($itemFields as $fieldName => $itemField) {
            $value = $item->{$itemField->getGetter()}();
            if (null !== $value && [] !== $value && !isset($children[$fieldName])) {
                // Anything the definition has no slice for (including the element's own id/extension) would be lost.
                return false;
            }
        }

        $nested = [];
        foreach ($children as $fieldName => $child) {
            if (!isset($itemFields[$fieldName])) {
                continue;
            }
            $value = $item->{$itemFields[$fieldName]->getGetter()}();
            if (null === $value || [] === $value) {
                continue;
            }
            foreach (is_array($value) ? $value : [$value] as $childItem) {
                if (!$childItem instanceof TypeInterface) {
                    return false;
                }
                $childExtension = $this->build($child, $child->getUrl(), $childItem, $path . '.' . $fieldName, $extensionClass, $context);
                if (null === $childExtension) {
                    return false;
                }
                $nested[] = $childExtension;
            }
        }

        if (null !== $definition->getDatatype()) {
            $datatype = $this->buildDatatype($definition->getDatatype(), $extensionClass);
            if (null === $datatype) {
                return false;
            }
            $nested[] = $datatype;
        }

        $extension->{$extensionFields['extension']->getSetter()}(...$nested);

        return true;
    }

    /**
     * @param class-string<TypeInterface> $extensionClass
     */
    private function buildDatatype(string $datatype, string $extensionClass): null|TypeInterface
    {
        $extension = new $extensionClass();
        $fields = $this->metadataFactory->forType($extension);
        if (!isset($fields['url'], $fields['valueString'])) {
            return null;
        }
        $extension->{$fields['url']->getSetter()}(self::DATATYPE_EXTENSION_URL);
        $extension->{$fields['valueString']->getSetter()}($datatype);

        return $extension;
    }
}
