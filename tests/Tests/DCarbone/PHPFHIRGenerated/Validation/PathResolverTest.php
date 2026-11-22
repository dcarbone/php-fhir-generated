<?php

namespace Tests\DCarbone\PHPFHIRGenerated\Validation;

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

use DCarbone\PHPFHIRGenerated\Validation\PathResolver;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockElementType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockResourceType;
use Tests\DCarbone\PHPFHIRGenerated\Mock\MockStringPrimitiveType;
use PHPUnit\Framework\TestCase;

class PathResolverTest extends TestCase
{
    private function buildResource(): MockResourceType
    {
        $contacts = [];
        foreach ([['a', 'b'], ['c']] as $codes) {
            $values = [];
            foreach ($codes as $code) {
                $values[] = new MockStringPrimitiveType(value: $code);
            }
            $contacts[] = new MockElementType(
                name: 'contact',
                fields: [
                    'code' => [
                        'class' => MockStringPrimitiveType::class,
                        'collection' => true,
                        'value' => $values,
                    ],
                ],
            );
        }
        return new MockResourceType(
            name: 'mock',
            fields: [
                'contact' => [
                    'class' => MockElementType::class,
                    'collection' => true,
                    'value' => $contacts,
                ],
            ],
        );
    }

    public function testIsPath()
    {
        $this->assertFalse(PathResolver::isPath('contact'));
        $this->assertTrue(PathResolver::isPath('contact.code'));
    }

    public function testSingleSegmentResolvesToRoot()
    {
        $type = $this->buildResource();
        $resolved = PathResolver::resolveParents($type, 'contact');
        $this->assertCount(1, $resolved);
        $this->assertSame($type, $resolved[0]['type']);
        $this->assertSame('contact', $resolved[0]['field']);
        $this->assertSame('contact', $resolved[0]['path']);
    }

    public function testCollectionIsExpandedWithIndexes()
    {
        $type = $this->buildResource();
        $resolved = PathResolver::resolveParents($type, 'contact.code');
        $this->assertCount(2, $resolved);
        $this->assertSame('contact.0.code', $resolved[0]['path']);
        $this->assertSame('contact.1.code', $resolved[1]['path']);
        $this->assertSame('code', $resolved[0]['field']);
        $this->assertSame($type->getContact()[0], $resolved[0]['type']);
        $this->assertSame($type->getContact()[1], $resolved[1]['type']);
    }

    public function testMultiLevelCollectionsExpand()
    {
        $type = $this->buildResource();
        $resolved = PathResolver::resolveParents($type, 'contact.code.value');
        $this->assertCount(3, $resolved);
        $this->assertSame('contact.0.code.0.value', $resolved[0]['path']);
        $this->assertSame('contact.0.code.1.value', $resolved[1]['path']);
        $this->assertSame('contact.1.code.0.value', $resolved[2]['path']);
    }

    public function testUnsetIntermediateResolvesToNothing()
    {
        $type = $this->buildResource();
        $empty = new MockResourceType(name: 'mock', fields: ['contact' => ['class' => MockElementType::class, 'collection' => true]]);
        $this->assertSame([], PathResolver::resolveParents($empty, 'contact.code'));
        $unset = new MockResourceType(name: 'mock', fields: ['code' => ['class' => MockStringPrimitiveType::class, 'collection' => true]]);
        $this->assertSame([], PathResolver::resolveParents($unset, 'code.value'));
    }

    public function testUnwrapStopsAtComplexTypes()
    {
        $this->assertSame('a', PathResolver::unwrap(new MockStringPrimitiveType(value: 'a')));
        $this->assertSame('b', PathResolver::unwrap('b'));
        $this->assertNull(PathResolver::unwrap(null));
        $contact = $this->buildResource()->getContact()[0];
        $this->assertSame($contact, PathResolver::unwrap($contact));
    }
}
