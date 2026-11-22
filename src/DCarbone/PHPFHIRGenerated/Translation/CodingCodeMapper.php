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

use DCarbone\PHPFHIRGenerated\Types\TypeInterface;

final class CodingCodeMapper{
    /**
     * @param array<string, \DCarbone\PHPFHIRGenerated\Translation\FieldMetadata> $sourceFields
     */
    public function map(
        TypeInterface $source,
        array $sourceFields,
        HopMapInterface $hopMap,
        TranslationContext $context,
    ): null|CodeMapResult {
        $codeMaps = $hopMap->getCodeMaps();
        if ([] === $codeMaps) {
            return null;
        }

        $sourceSystem = $this->getStringFieldValue($source, $sourceFields, 'system');
        $sourceCode = $this->getStringFieldValue($source, $sourceFields, 'code');
        if (null === $sourceSystem || null === $sourceCode) {
            return null;
        }
        $sourceVersion = $this->getStringFieldValue($source, $sourceFields, 'version');

        $sourceSystemMatched = false;
        /** @var array<string, CodeMapResult> $candidateTargets */
        $candidateTargets = [];
        foreach ($codeMaps as $codeMap) {
            if (!$codeMap instanceof CodeMap) {
                throw new \UnexpectedValueException(sprintf(
                    'Hop map returned %s for code maps; expected %s.',
                    get_debug_type($codeMap),
                    CodeMap::class,
                ));
            }
            if ($codeMap->getSourceSystem() !== $sourceSystem) {
                continue;
            }
            $sourceSystemMatched = true;
            if (null !== $codeMap->getSourceVersion() && $codeMap->getSourceVersion() !== $sourceVersion) {
                continue;
            }
            // A source system can have several maps; only maps that translate this code are candidates.
            if ($codeMap->hasSourceCode($sourceCode)
                && null !== ($candidateCode = $codeMap->getTargetCode($sourceCode))) {
                $targetSystem = $codeMap->getTargetSystem();
                $targetVersion = $codeMap->getTargetVersion() ?? ($targetSystem === $sourceSystem ? $sourceVersion : null);
                $key = json_encode([$targetSystem, $candidateCode, $targetVersion], JSON_THROW_ON_ERROR);
                $candidateTargets[$key] = new CodeMapResult(
                    $sourceSystem,
                    $targetSystem,
                    $candidateCode,
                    $targetVersion,
                );
            }
        }
        if (!$sourceSystemMatched) {
            return null;
        }
        if (1 !== count($candidateTargets)) {
            $context->handleUnmappableField('code', get_debug_type($sourceCode));
            return new CodeMapResult($sourceSystem, null, null);
        }

        foreach ($candidateTargets as $candidateTarget) {
            return $candidateTarget;
        }

        throw new \LogicException('Expected a unique candidate target after validating its count.');
    }

    /**
     * @param array<string, \DCarbone\PHPFHIRGenerated\Translation\FieldMetadata> $fields
     */
    private function getStringFieldValue(TypeInterface $owner, array $fields, string $fieldName): null|string
    {
        if (!isset($fields[$fieldName])) {
            return null;
        }
        $getter = $fields[$fieldName]->getGetter();
        if (!method_exists($owner, $getter)) {
            throw new \UnexpectedValueException(sprintf(
                'Generated type "%s" is missing field getter "%s()".',
                $owner::class,
                $getter,
            ));
        }
        $value = $owner->{$getter}();
        if (null === $value) {
            return null;
        }
        if (!$value instanceof TypeInterface || !method_exists($value, 'getValue')) {
            throw new \UnexpectedValueException(sprintf(
                'FHIR field "%s::%s()" must return a value-bearing type.',
                $owner::class,
                $getter,
            ));
        }
        // Elements wrap primitives (e.g. uri -> uri-primitive), so unwrap until a scalar is reached.
        do {
            $value = $value->getValue();
        } while ($value instanceof TypeInterface && method_exists($value, 'getValue'));
        if (null !== $value && !is_string($value)) {
            throw new \UnexpectedValueException(sprintf(
                'FHIR field "%s::%s()" must contain a string value.',
                $owner::class,
                $getter,
            ));
        }
        return $value;
    }
}
