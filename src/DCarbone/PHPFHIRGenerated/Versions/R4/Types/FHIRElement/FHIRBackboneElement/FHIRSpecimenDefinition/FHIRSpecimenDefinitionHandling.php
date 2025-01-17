<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 17th, 2025 00:27+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A kind of specimen with associated set of requirements.
 */
class FHIRSpecimenDefinitionHandling extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SPECIMEN_DEFINITION_DOT_HANDLING;


    public const FIELD_TEMPERATURE_QUALIFIER = 'temperatureQualifier';
    public const FIELD_TEMPERATURE_RANGE = 'temperatureRange';
    public const FIELD_MAX_DURATION = 'maxDuration';
    public const FIELD_INSTRUCTION = 'instruction';
    public const FIELD_INSTRUCTION_EXT = '_instruction';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of
     * handling. Conditions that are not related to temperature may be handled in the
     * instruction element.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $temperatureQualifier;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The temperature interval for this set of handling instructions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $temperatureRange;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $maxDuration;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional textual instructions for the preservation or transport of the
     * specimen. For instance, 'Protect from light exposure'.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $instruction;

    /** Default validation map for fields in type SpecimenDefinition.Handling */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRSpecimenDefinitionHandling Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $temperatureQualifier
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $temperatureRange
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $maxDuration
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $instruction
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $temperatureQualifier = null,
                                null|FHIRRange $temperatureRange = null,
                                null|FHIRDuration $maxDuration = null,
                                null|string|FHIRStringPrimitive|FHIRString $instruction = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $temperatureQualifier) {
            $this->setTemperatureQualifier($temperatureQualifier);
        }
        if (null !== $temperatureRange) {
            $this->setTemperatureRange($temperatureRange);
        }
        if (null !== $maxDuration) {
            $this->setMaxDuration($maxDuration);
        }
        if (null !== $instruction) {
            $this->setInstruction($instruction);
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of
     * handling. Conditions that are not related to temperature may be handled in the
     * instruction element.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getTemperatureQualifier(): null|FHIRCodeableConcept
    {
        return $this->temperatureQualifier ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * It qualifies the interval of temperature, which characterizes an occurrence of
     * handling. Conditions that are not related to temperature may be handled in the
     * instruction element.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $temperatureQualifier
     * @return static
     */
    public function setTemperatureQualifier(null|FHIRCodeableConcept $temperatureQualifier): self
    {
        if (null === $temperatureQualifier) {
            unset($this->temperatureQualifier);
            return $this;
        }
        $this->temperatureQualifier = $temperatureQualifier;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The temperature interval for this set of handling instructions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange
     */
    public function getTemperatureRange(): null|FHIRRange
    {
        return $this->temperatureRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The temperature interval for this set of handling instructions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $temperatureRange
     * @return static
     */
    public function setTemperatureRange(null|FHIRRange $temperatureRange): self
    {
        if (null === $temperatureRange) {
            unset($this->temperatureRange);
            return $this;
        }
        $this->temperatureRange = $temperatureRange;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getMaxDuration(): null|FHIRDuration
    {
        return $this->maxDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum time interval of preservation of the specimen with these conditions.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $maxDuration
     * @return static
     */
    public function setMaxDuration(null|FHIRDuration $maxDuration): self
    {
        if (null === $maxDuration) {
            unset($this->maxDuration);
            return $this;
        }
        $this->maxDuration = $maxDuration;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional textual instructions for the preservation or transport of the
     * specimen. For instance, 'Protect from light exposure'.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getInstruction(): null|FHIRString
    {
        return $this->instruction ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Additional textual instructions for the preservation or transport of the
     * specimen. For instance, 'Protect from light exposure'.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $instruction
     * @return static
     */
    public function setInstruction(null|string|FHIRStringPrimitive|FHIRString $instruction): self
    {
        if (null === $instruction) {
            unset($this->instruction);
            return $this;
        }
        if (!($instruction instanceof FHIRString)) {
            $instruction = new FHIRString(value: $instruction);
        }
        $this->instruction = $instruction;
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
        if (isset($validationRules[self::FIELD_TEMPERATURE_QUALIFIER])) {
            $v = $this->getTemperatureQualifier();
            foreach($validationRules[self::FIELD_TEMPERATURE_QUALIFIER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEMPERATURE_QUALIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEMPERATURE_QUALIFIER])) {
                        $errs[self::FIELD_TEMPERATURE_QUALIFIER] = [];
                    }
                    $errs[self::FIELD_TEMPERATURE_QUALIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEMPERATURE_RANGE])) {
            $v = $this->getTemperatureRange();
            foreach($validationRules[self::FIELD_TEMPERATURE_RANGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEMPERATURE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEMPERATURE_RANGE])) {
                        $errs[self::FIELD_TEMPERATURE_RANGE] = [];
                    }
                    $errs[self::FIELD_TEMPERATURE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DURATION])) {
            $v = $this->getMaxDuration();
            foreach($validationRules[self::FIELD_MAX_DURATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MAX_DURATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DURATION])) {
                        $errs[self::FIELD_MAX_DURATION] = [];
                    }
                    $errs[self::FIELD_MAX_DURATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTRUCTION])) {
            $v = $this->getInstruction();
            foreach($validationRules[self::FIELD_INSTRUCTION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTRUCTION])) {
                        $errs[self::FIELD_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_INSTRUCTION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSpecimenDefinitionHandling)) {
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
                $v = new FHIRStringPrimitive(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEMPERATURE_QUALIFIER === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setTemperatureQualifier(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEMPERATURE_RANGE === $childName) {
                $v = new FHIRRange();
                $type->setTemperatureRange(FHIRRange::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MAX_DURATION === $childName) {
                $v = new FHIRDuration();
                $type->setMaxDuration(FHIRDuration::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_INSTRUCTION === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setInstruction(FHIRString::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRStringPrimitive(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_INSTRUCTION])) {
            $pt = $type->getInstruction();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_INSTRUCTION]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setInstruction(new FHIRString(
                    value: (string)$attributes[self::FIELD_INSTRUCTION],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
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
            $xw->openRootNode('SpecimenDefinitionHandling', $this->_getSourceXMLNS());
        }
        if (isset($this->instruction) && $this->instruction->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_INSTRUCTION, $this->instruction->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->temperatureQualifier)) {
            $xw->startElement(self::FIELD_TEMPERATURE_QUALIFIER);
            $this->temperatureQualifier->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->temperatureRange)) {
            $xw->startElement(self::FIELD_TEMPERATURE_RANGE);
            $this->temperatureRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maxDuration)) {
            $xw->startElement(self::FIELD_MAX_DURATION);
            $this->maxDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->instruction) && $this->instruction->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_INSTRUCTION);
            $this->instruction->xmlSerialize($xw, $config);
            $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSpecimenDefinition\FHIRSpecimenDefinitionHandling
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSpecimenDefinitionHandling)) {
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
        if (isset($json[self::FIELD_TEMPERATURE_QUALIFIER]) || array_key_exists(self::FIELD_TEMPERATURE_QUALIFIER, $json)) {
            if ($json[self::FIELD_TEMPERATURE_QUALIFIER] instanceof FHIRCodeableConcept) {
                $type->setTemperatureQualifier($json[self::FIELD_TEMPERATURE_QUALIFIER]);
            } else {
                $type->setTemperatureQualifier(new FHIRCodeableConcept($json[self::FIELD_TEMPERATURE_QUALIFIER]));
            }
        }
        if (isset($json[self::FIELD_TEMPERATURE_RANGE]) || array_key_exists(self::FIELD_TEMPERATURE_RANGE, $json)) {
            if ($json[self::FIELD_TEMPERATURE_RANGE] instanceof FHIRRange) {
                $type->setTemperatureRange($json[self::FIELD_TEMPERATURE_RANGE]);
            } else {
                $type->setTemperatureRange(new FHIRRange($json[self::FIELD_TEMPERATURE_RANGE]));
            }
        }
        if (isset($json[self::FIELD_MAX_DURATION]) || array_key_exists(self::FIELD_MAX_DURATION, $json)) {
            if ($json[self::FIELD_MAX_DURATION] instanceof FHIRDuration) {
                $type->setMaxDuration($json[self::FIELD_MAX_DURATION]);
            } else {
                $type->setMaxDuration(new FHIRDuration($json[self::FIELD_MAX_DURATION]));
            }
        }
        if (isset($json[self::FIELD_INSTRUCTION]) || isset($json[self::FIELD_INSTRUCTION_EXT]) || array_key_exists(self::FIELD_INSTRUCTION, $json) || array_key_exists(self::FIELD_INSTRUCTION_EXT, $json)) {
            $value = $json[self::FIELD_INSTRUCTION] ?? null;
            $ext = (isset($json[self::FIELD_INSTRUCTION_EXT]) && is_array($json[self::FIELD_INSTRUCTION_EXT])) ? $json[self::FIELD_INSTRUCTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setInstruction($value);
                } else if (is_array($value)) {
                    $type->setInstruction(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setInstruction(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setInstruction(new FHIRString($ext));
            } else {
                $type->setInstruction(new FHIRString(null));
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
        if (isset($this->temperatureQualifier)) {
            $out->temperatureQualifier = $this->temperatureQualifier;
        }
        if (isset($this->temperatureRange)) {
            $out->temperatureRange = $this->temperatureRange;
        }
        if (isset($this->maxDuration)) {
            $out->maxDuration = $this->maxDuration;
        }
        if (isset($this->instruction)) {
            if (null !== ($val = $this->instruction->getValue())) {
                $out->instruction = $val;
            }
            $ext = $this->instruction->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_instruction = $ext;
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