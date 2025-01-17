<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge;

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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
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
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * Information about a medication that is used to support knowledge.
 */
class FHIRMedicationKnowledgeMedicineClassification extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_KNOWLEDGE_DOT_MEDICINE_CLASSIFICATION;


    public const FIELD_TYPE = 'type';
    public const FIELD_SOURCE_STRING = 'sourceString';
    public const FIELD_SOURCE_STRING_EXT = '_sourceString';
    public const FIELD_SOURCE_URI = 'sourceUri';
    public const FIELD_SOURCE_URI_EXT = '_sourceUri';
    public const FIELD_CLASSIFICATION = 'classification';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of category for the medication (for example, therapeutic
     * classification, therapeutic sub-classification).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $type;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either a textual source of the classification or a reference to an online
     * source.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString 
     */
    protected FHIRString $sourceString;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either a textual source of the classification or a reference to an online
     * source.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri 
     */
    protected FHIRUri $sourceUri;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific category assigned to the medication (e.g. anti-infective,
     * anti-hypertensive, antibiotic, etc.).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] 
     */
    protected array $classification;

    /** Default validation map for fields in type MedicationKnowledge.MedicineClassification */
    private const _DEFAULT_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMedicationKnowledgeMedicineClassification Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sourceString
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $sourceUri
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[] $classification
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $type = null,
                                null|string|FHIRStringPrimitive|FHIRString $sourceString = null,
                                null|string|FHIRUriPrimitive|FHIRUri $sourceUri = null,
                                null|iterable $classification = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $sourceString) {
            $this->setSourceString($sourceString);
        }
        if (null !== $sourceUri) {
            $this->setSourceUri($sourceUri);
        }
        if (null !== $classification) {
            $this->setClassification(...$classification);
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
     * The type of category for the medication (for example, therapeutic
     * classification, therapeutic sub-classification).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept
     */
    public function getType(): null|FHIRCodeableConcept
    {
        return $this->type ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of category for the medication (for example, therapeutic
     * classification, therapeutic sub-classification).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(null|FHIRCodeableConcept $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
        $this->type = $type;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either a textual source of the classification or a reference to an online
     * source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString
     */
    public function getSourceString(): null|FHIRString
    {
        return $this->sourceString ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either a textual source of the classification or a reference to an online
     * source.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRString $sourceString
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSourceString(null|string|FHIRStringPrimitive|FHIRString $sourceString,
                                    null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sourceString) {
            unset($this->sourceString);
            return $this;
        }
        if (!($sourceString instanceof FHIRString)) {
            $sourceString = new FHIRString(value: $sourceString);
        }
        if (null !== $valueXMLLocation) {
            $sourceString->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sourceString->_getValueXMLLocation()) {
            $sourceString->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->sourceString = $sourceString;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either a textual source of the classification or a reference to an online
     * source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri
     */
    public function getSourceUri(): null|FHIRUri
    {
        return $this->sourceUri ?? null;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either a textual source of the classification or a reference to an online
     * source.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUri $sourceUri
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setSourceUri(null|string|FHIRUriPrimitive|FHIRUri $sourceUri,
                                 null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $sourceUri) {
            unset($this->sourceUri);
            return $this;
        }
        if (!($sourceUri instanceof FHIRUri)) {
            $sourceUri = new FHIRUri(value: $sourceUri);
        }
        if (null !== $valueXMLLocation) {
            $sourceUri->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $sourceUri->_getValueXMLLocation()) {
            $sourceUri->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->sourceUri = $sourceUri;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific category assigned to the medication (e.g. anti-infective,
     * anti-hypertensive, antibiotic, etc.).
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept[]
     */
    public function getClassification(): array
    {
        return $this->classification ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept>
     */
    public function getClassificationIterator(): iterable
    {
        if (!isset($this->classification) || [] === $this->classification) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->classification);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific category assigned to the medication (e.g. anti-infective,
     * anti-hypertensive, antibiotic, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept $classification
     * @return static
     */
    public function addClassification(FHIRCodeableConcept $classification): self
    {
        if (!isset($this->classification)) {
            $this->classification = [];
        }
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Specific category assigned to the medication (e.g. anti-infective,
     * anti-hypertensive, antibiotic, etc.).
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRCodeableConcept ...$classification
     * @return static
     */
    public function setClassification(FHIRCodeableConcept ...$classification): self
    {
        $this->classification = $classification;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_STRING])) {
            $v = $this->getSourceString();
            foreach($validationRules[self::FIELD_SOURCE_STRING] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_STRING])) {
                        $errs[self::FIELD_SOURCE_STRING] = [];
                    }
                    $errs[self::FIELD_SOURCE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_URI])) {
            $v = $this->getSourceUri();
            foreach($validationRules[self::FIELD_SOURCE_URI] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_URI])) {
                        $errs[self::FIELD_SOURCE_URI] = [];
                    }
                    $errs[self::FIELD_SOURCE_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeMedicineClassification)) {
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
            } else if (self::FIELD_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_STRING === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSourceString(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SOURCE_URI === $childName) {
                $v = new FHIRUri(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setSourceUri(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLASSIFICATION === $childName) {
                $v = new FHIRCodeableConcept();
                $type->addClassification(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_SOURCE_STRING])) {
            $pt = $type->getSourceString();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SOURCE_STRING]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSourceString(new FHIRString(
                    value: (string)$attributes[self::FIELD_SOURCE_STRING],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SOURCE_URI])) {
            $pt = $type->getSourceUri();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_SOURCE_URI]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSourceUri(new FHIRUri(
                    value: (string)$attributes[self::FIELD_SOURCE_URI],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
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
            $xw->openRootNode('MedicationKnowledgeMedicineClassification', $this->_getSourceXMLNS());
        }
        if (isset($this->sourceString) && $this->sourceString->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SOURCE_STRING, $this->sourceString->getValue()?->_getFormattedValue());
        }
        if (isset($this->sourceUri) && $this->sourceUri->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SOURCE_URI, $this->sourceUri->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceString) && $this->sourceString->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SOURCE_STRING);
            $this->sourceString->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->sourceUri) && $this->sourceUri->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SOURCE_URI);
            $this->sourceUri->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->classification)) {
            foreach ($this->classification as $v) {
                $xw->startElement(self::FIELD_CLASSIFICATION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRMedicationKnowledge\FHIRMedicationKnowledgeMedicineClassification
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationKnowledgeMedicineClassification)) {
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
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            if ($json[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $type->setType($json[self::FIELD_TYPE]);
            } else {
                $type->setType(new FHIRCodeableConcept($json[self::FIELD_TYPE]));
            }
        }
        if (isset($json[self::FIELD_SOURCE_STRING]) || isset($json[self::FIELD_SOURCE_STRING_EXT]) || array_key_exists(self::FIELD_SOURCE_STRING, $json) || array_key_exists(self::FIELD_SOURCE_STRING_EXT, $json)) {
            $value = $json[self::FIELD_SOURCE_STRING] ?? null;
            $ext = (isset($json[self::FIELD_SOURCE_STRING_EXT]) && is_array($json[self::FIELD_SOURCE_STRING_EXT])) ? $json[self::FIELD_SOURCE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSourceString($value);
                } else if (is_array($value)) {
                    $type->setSourceString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSourceString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSourceString(new FHIRString($ext));
            } else {
                $type->setSourceString(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SOURCE_URI]) || isset($json[self::FIELD_SOURCE_URI_EXT]) || array_key_exists(self::FIELD_SOURCE_URI, $json) || array_key_exists(self::FIELD_SOURCE_URI_EXT, $json)) {
            $value = $json[self::FIELD_SOURCE_URI] ?? null;
            $ext = (isset($json[self::FIELD_SOURCE_URI_EXT]) && is_array($json[self::FIELD_SOURCE_URI_EXT])) ? $json[self::FIELD_SOURCE_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $type->setSourceUri($value);
                } else if (is_array($value)) {
                    $type->setSourceUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $type->setSourceUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSourceUri(new FHIRUri($ext));
            } else {
                $type->setSourceUri(new FHIRUri(null));
            }
        }
        if (isset($json[self::FIELD_CLASSIFICATION]) || array_key_exists(self::FIELD_CLASSIFICATION, $json)) {
            if (is_array($json[self::FIELD_CLASSIFICATION])) {
                foreach($json[self::FIELD_CLASSIFICATION] as $v) {
                    if ($v instanceof FHIRCodeableConcept) {
                        $type->addClassification($v);
                    } else {
                        $type->addClassification(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($json[self::FIELD_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $type->addClassification($json[self::FIELD_CLASSIFICATION]);
            } else {
                $type->addClassification(new FHIRCodeableConcept($json[self::FIELD_CLASSIFICATION]));
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
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->sourceString)) {
            if (null !== ($val = $this->sourceString->getValue())) {
                $out->sourceString = $val;
            }
            $ext = $this->sourceString->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sourceString = $ext;
            }
        }
        if (isset($this->sourceUri)) {
            if (null !== ($val = $this->sourceUri->getValue())) {
                $out->sourceUri = $val;
            }
            $ext = $this->sourceUri->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_sourceUri = $ext;
            }
        }
        if (isset($this->classification) && [] !== $this->classification) {
            $out->classification = $this->classification;
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