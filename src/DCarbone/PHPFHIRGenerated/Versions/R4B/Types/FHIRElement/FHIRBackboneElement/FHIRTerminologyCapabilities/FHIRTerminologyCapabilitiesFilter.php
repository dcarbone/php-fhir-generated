<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 18:09+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors)
 * of a FHIR Terminology Server that may be used as a statement of actual server
 * functionality or a statement of required or desired server implementation.
 */
class FHIRTerminologyCapabilitiesFilter extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_TERMINOLOGY_CAPABILITIES_DOT_FILTER;


    public const FIELD_CODE = 'code';
    public const FIELD_CODE_EXT = '_code';
    public const FIELD_OP = 'op';
    public const FIELD_OP_EXT = '_op';

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Code of the property supported.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode 
     */
    protected FHIRCode $code;
    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Operations supported for the property.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode[] 
     */
    protected array $op;

    /** Default validation map for fields in type TerminologyCapabilities.Filter */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_CODE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_OP => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRTerminologyCapabilitiesFilter Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $code
     * @param null|string[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive[]|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode[] $op
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRCodePrimitive|FHIRCode $code = null,
                                null|iterable $op = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $code) {
            $this->setCode($code);
        }
        if (null !== $op) {
            $this->setOp(...$op);
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Code of the property supported.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode
     */
    public function getCode(): null|FHIRCode
    {
        return $this->code ?? null;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Code of the property supported.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $code
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCode(null|string|FHIRCodePrimitive|FHIRCode $code,
                            null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $code) {
            unset($this->code);
            return $this;
        }
        if (!($code instanceof FHIRCode)) {
            $code = new FHIRCode(value: $code);
        }
        if (null !== $valueXMLLocation) {
            $code->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $code->_getValueXMLLocation()) {
            $code->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->code = $code;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Operations supported for the property.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode[]
     */
    public function getOp(): array
    {
        return $this->op ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode>
     */
    public function getOpIterator(): iterable
    {
        if (!isset($this->op) || [] === $this->op) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->op);
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Operations supported for the property.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode $op
     * @return static
     */
    public function addOp(string|FHIRCodePrimitive|FHIRCode $op): self
    {
        if (!($op instanceof FHIRCode)) {
            $op = new FHIRCode(value: $op);
        }
        if (!isset($this->op)) {
            $this->op = [];
        }
        $this->op[] = $op;
        return $this;
    }

    /**
     * A string which has at least one character and no leading or trailing whitespace
     * and where there is no whitespace other than single spaces in the contents
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Operations supported for the property.
     *
     * @param string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCode ...$op
     * @return static
     */
    public function setOp(string|FHIRCodePrimitive|FHIRCode ...$op): self
    {
        $this->op = [];
        foreach($op as $v) {
            if ($v instanceof FHIRCode) {
                $this->op[] = $v;
            } else {
                $this->op[] = new FHIRCode(value: $v);
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_DEFAULT_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getOp())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OP, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OP])) {
            $v = $this->getOp();
            foreach($validationRules[self::FIELD_OP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OP])) {
                        $errs[self::FIELD_OP] = [];
                    }
                    $errs[self::FIELD_OP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTerminologyCapabilitiesFilter)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_ID === $childName) {
                $valueAttr = $n->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                 if (null !== $valueAttr) {
                    $value = (string)$valueAttr;
                } else if ($n->hasChildren()) {
                    $value = $n->saveXML();
                } else {
                    $value = (string)$n;
                }
                $type->setId($value, ValueXMLLocationEnum::ELEMENT);
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CODE === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCode(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_OP === $childName) {
                $v = new FHIRCode(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->addOp(FHIRCode::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_ID]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CODE])) {
            $pt = $type->getCode();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CODE]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCode(new FHIRCode(
                    value: (string)$attributes[self::FIELD_CODE],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_OP])) {
            $v = new FHIRCode(value: (string)$attributes[self::FIELD_OP],
                                                       valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE);
            $type->addOp($v);
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null, null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('TerminologyCapabilitiesFilter', $this->_getSourceXMLNS());
        }
        if (isset($this->code) && $this->code->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CODE, $this->code->getValue()?->_getFormattedValue());
        }
        if (isset($this->op)) {
           foreach($this->op as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
                    $xw->writeAttribute(self::FIELD_OP, $v->getValue()?->_getFormattedValue());
                    break;
                }
            }
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->code) && $this->code->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CODE);
            $this->code->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->op)) {
            foreach($this->op as $v) {
                if ($v->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
                    $xw->startElement(self::FIELD_OP);
                    $v->xmlSerialize($xw, $config);
                    $xw->endElement();
                }
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|array|\stdClass $json
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRTerminologyCapabilities\FHIRTerminologyCapabilitiesFilter
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRTerminologyCapabilitiesFilter)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
        }
        parent::jsonUnserialize($json, $type, $config);
        if (isset($json[self::FIELD_CODE]) || isset($json[self::FIELD_CODE_EXT]) || array_key_exists(self::FIELD_CODE, $json) || array_key_exists(self::FIELD_CODE_EXT, $json)) {
            $value = $json[self::FIELD_CODE] ?? null;
            $ext = (isset($json[self::FIELD_CODE_EXT]) && is_array($json[self::FIELD_CODE_EXT])) ? $json[self::FIELD_CODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->setCode($value);
                } else if (is_array($value)) {
                    $type->setCode(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->setCode(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setCode(new FHIRCode($ext));
            } else {
                $type->setCode(new FHIRCode(null));
            }
        }
        if (isset($json[self::FIELD_OP]) || isset($json[self::FIELD_OP_EXT]) || array_key_exists(self::FIELD_OP, $json) || array_key_exists(self::FIELD_OP_EXT, $json)) {
            $value = $json[self::FIELD_OP] ?? null;
            $ext = (isset($json[self::FIELD_OP_EXT]) && is_array($json[self::FIELD_OP_EXT])) ? $json[self::FIELD_OP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCode) {
                    $type->addOp($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCode) {
                            $type->addOp($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $type->addOp(new FHIRCode(array_merge($v, $iext)));
                            } else {
                                $type->addOp(new FHIRCode([FHIRCode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $type->addOp(new FHIRCode(array_merge($ext, $value)));
                } else {
                    $type->addOp(new FHIRCode([FHIRCode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $type->addOp(new FHIRCode($iext));
                }
            } else {
                $type->addOp(new FHIRCode(null));
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
        if (isset($this->code)) {
            if (null !== ($val = $this->code->getValue())) {
                $out->code = $val;
            }
            $ext = $this->code->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_code = $ext;
            }
        }
        if (isset($this->op) && [] !== $this->op) {
            $vals = [];
            $exts = [];
            foreach ($this->op as $v) {
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->value);
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->op = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->_op = $exts;
            }
        }
        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}