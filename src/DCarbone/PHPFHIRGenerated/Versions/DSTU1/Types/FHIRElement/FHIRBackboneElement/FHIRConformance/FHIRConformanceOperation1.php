<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance;

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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */
use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\Rules\ValuePatternMatchRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulOperationSystem;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRRestfulOperationSystemList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU1\VersionConstants;

/**
 * A conformance statement is a set of requirements for a desired implementation or
 * a description of how a target application fulfills those requirements in a
 * particular implementation.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRConformanceOperation1 extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_CONFORMANCE_DOT_OPERATION_1;

    /* class_default.php:56 */
    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';
    public const FIELD_DOCUMENTATION = 'documentation';
    public const FIELD_DOCUMENTATION_EXT = '_documentation';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ID => [
            ValuePatternMatchRule::NAME => '/^[a-z0-9\\-\\.]{1,36}$/',
        ],
        self::FIELD_CODE => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_CODE => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DOCUMENTATION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * Operations supported by REST at the system level
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded identifier of the operation, supported by the system.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulOperationSystem 
     */
    #[FHIRRestfulOperationSystem]
    protected FHIRRestfulOperationSystem $code;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Guidance specific to the implementation of this operation, such as limitations
     * on the kind of transactions allowed, or information about system wide search is
     * implemented.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString 
     */
    #[FHIRString]
    protected FHIRString $documentation;

    /* constructor.php:61 */
    /**
     * FHIRConformanceOperation1 Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRIdPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRExtension> $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRRestfulOperationSystemList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulOperationSystem $code
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $documentation
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRRestfulOperationSystemList|FHIRRestfulOperationSystem $code = null,
                                null|string|FHIRStringPrimitive|FHIRString $documentation = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $documentation) {
            $this->setDocumentation($documentation);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * Operations supported by REST at the system level
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded identifier of the operation, supported by the system.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulOperationSystem
     */
    public function getCode(): null|FHIRRestfulOperationSystem
    {
        return $this->code ?? null;
    }

    /**
     * Operations supported by REST at the system level
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A coded identifier of the operation, supported by the system.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive\FHIRRestfulOperationSystemList|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRRestfulOperationSystem $code
     * @return static
     */
    public function setCode(null|string|FHIRRestfulOperationSystemList|FHIRRestfulOperationSystem $code): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        if (!($code instanceof FHIRRestfulOperationSystem)) {
            $code = new FHIRRestfulOperationSystem(value: $code);
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Guidance specific to the implementation of this operation, such as limitations
     * on the kind of transactions allowed, or information about system wide search is
     * implemented.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString
     */
    public function getDocumentation(): null|FHIRString
    {
        return $this->documentation ?? null;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Guidance specific to the implementation of this operation, such as limitations
     * on the kind of transactions allowed, or information about system wide search is
     * implemented.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRString $documentation
     * @return static
     */
    public function setDocumentation(null|string|FHIRStringPrimitive|FHIRString $documentation): self
    {
        if (null === $documentation) {
            unset($this->documentation);
            return $this;
        }
        if (!($documentation instanceof FHIRString)) {
            $documentation = new FHIRString(value: $documentation);
        }
        $this->documentation = $documentation;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1 $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceOperation1)) {
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
            } else if (self::FIELD_CODE === $cen) {
                $type->setCode(FHIRRestfulOperationSystem::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DOCUMENTATION === $cen) {
                $type->setDocumentation(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CODE])) {
            if (isset($type->code)) {
                $type->code->setValue((string)$attributes[self::FIELD_CODE]);
            } else {
                $type->setCode((string)$attributes[self::FIELD_CODE]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CODE, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_DOCUMENTATION])) {
            if (isset($type->documentation)) {
                $type->documentation->setValue((string)$attributes[self::FIELD_DOCUMENTATION]);
            } else {
                $type->setDocumentation((string)$attributes[self::FIELD_DOCUMENTATION]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_DOCUMENTATION, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->code) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CODE]) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->_getValueAsString());
        }
        if (isset($this->documentation) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]) {
            $xw->writeAttribute(self::FIELD_DOCUMENTATION, $this->documentation->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CODE]
                || $this->code->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CODE]);
            $xw->endElement();
        }
        if (isset($this->documentation)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]
                || $this->documentation->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DOCUMENTATION);
            $this->documentation->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DOCUMENTATION]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1 $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU1\Types\FHIRElement\FHIRBackboneElement\FHIRConformance\FHIRConformanceOperation1
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRConformanceOperation1)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->code)
            || isset($decoded->_code)
            || property_exists($decoded, self::FIELD_CODE)
            || property_exists($decoded, self::FIELD_CODE_EXT)) {
            $v = $decoded->_code ?? new \stdClass();
            $v->value = $decoded->code ?? null;
            $type->setCode(FHIRRestfulOperationSystem::jsonUnserialize($v, $config));
        }
        if (isset($decoded->documentation)
            || isset($decoded->_documentation)
            || property_exists($decoded, self::FIELD_DOCUMENTATION)
            || property_exists($decoded, self::FIELD_DOCUMENTATION_EXT)) {
            $v = $decoded->_documentation ?? new \stdClass();
            $v->value = $decoded->documentation ?? null;
            $type->setDocumentation(FHIRString::jsonUnserialize($v, $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->code)) {
            if (null !== ($val = $this->code->getValue())) {
                $out->code = $val;
            }
            if ($this->code->_nonValueFieldDefined()) {
                $ext = $this->code->jsonSerialize();
                unset($ext->value);
                $out->_code = $ext;
            }
        }
        if (isset($this->documentation)) {
            if (null !== ($val = $this->documentation->getValue())) {
                $out->documentation = $val;
            }
            if ($this->documentation->_nonValueFieldDefined()) {
                $ext = $this->documentation->jsonSerialize();
                unset($ext->value);
                $out->_documentation = $ext;
            }
        }
        return $out;
    }
}