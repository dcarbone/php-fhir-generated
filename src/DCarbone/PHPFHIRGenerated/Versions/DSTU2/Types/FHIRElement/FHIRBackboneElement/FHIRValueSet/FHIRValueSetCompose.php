<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet;

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
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A value set specifies a set of codes drawn from one or more code systems.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRValueSetCompose extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_VALUE_SET_DOT_COMPOSE;

    /* class_default.php:56 */
    public const FIELD_IMPORT = 'import';
    public const FIELD_IMPORT_EXT = '_import';
    public const FIELD_INCLUDE = 'include';
    public const FIELD_EXCLUDE = 'exclude';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[A-Za-z0-9\\-\\.]{1,64}$/',
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:112 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Includes the contents of the referenced value set as a part of the contents of
     * this value set. This is an absolute URI that is a reference to ValueSet.uri.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri> 
     */
    #[FHIRUri]
    protected array $import;
    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Include one or more codes from a code system.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude> 
     */
    #[FHIRValueSetInclude]
    protected array $include;
    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Exclude one or more codes from the value set.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude> 
     */
    #[FHIRValueSetInclude]
    protected array $exclude;

    /* constructor.php:61 */
    /**
     * FHIRValueSetCompose Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|iterable<string>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive>|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri> $import
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude> $include
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude> $exclude
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $import = null,
                                null|iterable $include = null,
                                null|iterable $exclude = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $import) {
            $this->setImport(...$import);
        }
        if (null !== $include) {
            $this->setInclude(...$include);
        }
        if (null !== $exclude) {
            $this->setExclude(...$exclude);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Includes the contents of the referenced value set as a part of the contents of
     * this value set. This is an absolute URI that is a reference to ValueSet.uri.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri>
     */
    public function getImport(): array
    {
        return $this->import ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri>
     */
    public function getImportIterator(): iterable
    {
        if (!isset($this->import)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->import);
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Includes the contents of the referenced value set as a part of the contents of
     * this value set. This is an absolute URI that is a reference to ValueSet.uri.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri $import
     * @return static
     */
    public function addImport(string|FHIRUriPrimitive|FHIRUri $import): self
    {
        if (!($import instanceof FHIRUri)) {
            $import = new FHIRUri(value: $import);
        }
        if (!isset($this->import)) {
            $this->import = [];
        }
        $this->import[] = $import;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Includes the contents of the referenced value set as a part of the contents of
     * this value set. This is an absolute URI that is a reference to ValueSet.uri.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRUri ...$import
     * @return static
     */
    public function setImport(string|FHIRUriPrimitive|FHIRUri ...$import): self
    {
        if ([] === $import) {
            unset($this->import);
            return $this;
        }
        $this->import = [];
        foreach($import as $v) {
            if ($v instanceof FHIRUri) {
                $this->import[] = $v;
            } else {
                $this->import[] = new FHIRUri(value: $v);
            }
        }
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Include one or more codes from a code system.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getInclude(): array
    {
        return $this->include ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getIncludeIterator(): iterable
    {
        if (!isset($this->include)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->include);
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Include one or more codes from a code system.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $include
     * @return static
     */
    public function addInclude(FHIRValueSetInclude $include): self
    {
        if (!isset($this->include)) {
            $this->include = [];
        }
        $this->include[] = $include;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Include one or more codes from a code system.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude ...$include
     * @return static
     */
    public function setInclude(FHIRValueSetInclude ...$include): self
    {
        if ([] === $include) {
            unset($this->include);
            return $this;
        }
        $this->include = $include;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Exclude one or more codes from the value set.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getExclude(): array
    {
        return $this->exclude ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude>
     */
    public function getExcludeIterator(): iterable
    {
        if (!isset($this->exclude)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->exclude);
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Exclude one or more codes from the value set.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude $exclude
     * @return static
     */
    public function addExclude(FHIRValueSetInclude $exclude): self
    {
        if (!isset($this->exclude)) {
            $this->exclude = [];
        }
        $this->exclude[] = $exclude;
        return $this;
    }

    /**
     * A value set specifies a set of codes drawn from one or more code systems.
     *
     * Exclude one or more codes from the value set.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetInclude ...$exclude
     * @return static
     */
    public function setExclude(FHIRValueSetInclude ...$exclude): self
    {
        if ([] === $exclude) {
            unset($this->exclude);
            return $this;
        }
        $this->exclude = $exclude;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetCompose)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPORT === $cen) {
                $type->addImport(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_INCLUDE === $cen) {
                $type->addInclude(FHIRValueSetInclude::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EXCLUDE === $cen) {
                $type->addExclude(FHIRValueSetInclude::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        return $type;
    }

    /**
     * @param \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param \DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     */
    public function xmlSerialize(XMLWriter $xw,
                                 SerializeConfig $config): void
    {
        parent::xmlSerialize($xw, $config);
        if (isset($this->import) && [] !== $this->import) {
            foreach($this->import as $v) {
                $xw->startElement(self::FIELD_IMPORT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->include)) {
            foreach ($this->include as $v) {
                $xw->startElement(self::FIELD_INCLUDE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->exclude)) {
            foreach ($this->exclude as $v) {
                $xw->startElement(self::FIELD_EXCLUDE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRValueSet\FHIRValueSetCompose
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRValueSetCompose)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->import)
            || isset($decoded->_import)
            || property_exists($decoded, self::FIELD_IMPORT)
            || property_exists($decoded, self::FIELD_IMPORT_EXT)) {
            $vals = (array)($decoded->import ?? []);
            $exts = (array)($decoded->FIELD_IMPORT_EXT ?? []);
            $valCnt = count($vals);
            $extCnt = count($exts);
            if ($extCnt > $valCnt) {
                $valCnt = $extCnt;
            }
            for ($i = 0; $i < $valCnt; $i++) {
                $v = $exts[$i] ?? new \stdClass();
                $v->value = $vals[$i] ?? null;
                $type->addImport(FHIRUri::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->include) || property_exists($decoded, self::FIELD_INCLUDE)) {
            if (is_object($decoded->include)) {
                $vals = [$decoded->include];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_INCLUDE, true);
            } else {
                $vals = $decoded->include;
            }
            foreach($vals as $v) {
                $type->addInclude(FHIRValueSetInclude::jsonUnserialize($v, $config));
            }
        }
        if (isset($decoded->exclude) || property_exists($decoded, self::FIELD_EXCLUDE)) {
            if (is_object($decoded->exclude)) {
                $vals = [$decoded->exclude];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_EXCLUDE, true);
            } else {
                $vals = $decoded->exclude;
            }
            foreach($vals as $v) {
                $type->addExclude(FHIRValueSetInclude::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->import) && [] !== $this->import) {
            $vals = [];
            $exts = [];
            $hasVals = false;
            $hasExts = false;
            foreach ($this->import as $v) {
                $val = $v->getValue();
                if (null !== $val) {
                    $hasVals = true;
                    $vals[] = $val;
                } else {
                    $vals[] = null;
                }
                if ($v->_nonValueFieldDefined()) {
                    $hasExts = true;
                    $ext = $v->jsonSerialize();
                    unset($ext->value);
                    $exts[] = $ext;
                } else {
                    $exts[] = null;
                }
            }
            if ($hasVals) {
                $out->import = $vals;
            }
            if ($hasExts) {
                $out->_import = $exts;
            }
        }
        if (isset($this->include) && [] !== $this->include) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_INCLUDE) && 1 === count($this->include)) {
                $out->include = $this->include[0];
            } else {
                $out->include = $this->include;
            }
        }
        if (isset($this->exclude) && [] !== $this->exclude) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_EXCLUDE) && 1 === count($this->exclude)) {
                $out->exclude = $this->exclude[0];
            } else {
                $out->exclude = $this->exclude;
            }
        }
        return $out;
    }
}