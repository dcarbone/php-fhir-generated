<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 22:01+0000
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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * This resource is primarily used for the identification and definition of a
 * medication. It covers the ingredients and the packaging for a medication.
 */
class FHIRMedicationPackage extends FHIRBackboneElement
{    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_MEDICATION_DOT_PACKAGE;

    /* class_default.php:47 */
    public const FIELD_CONTAINER = 'container';
    public const FIELD_CONTENT = 'content';
    public const FIELD_BATCH = 'batch';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
    ];

    /* class_default.php:107 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of container that this package comes as.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $container;
    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * A set of components that go to make up the described item.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent[] 
     */
    protected array $content;
    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Information about a group of medication produced or packaged from one production
     * run.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch[] 
     */
    protected array $batch;

    /* constructor.php:63 */
    /**
     * FHIRMedicationPackage Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $container
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent[] $content
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch[] $batch
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCodeableConcept $container = null,
                                null|iterable $content = null,
                                null|iterable $batch = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $container) {
            $this->setContainer($container);
        }
        if (null !== $content) {
            $this->setContent(...$content);
        }
        if (null !== $batch) {
            $this->setBatch(...$batch);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of container that this package comes as.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getContainer(): null|FHIRCodeableConcept
    {
        return $this->container ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The kind of container that this package comes as.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCodeableConcept $container
     * @return static
     */
    public function setContainer(null|FHIRCodeableConcept $container): self
    {
        if (null === $container) {
            unset($this->container);
            return $this;
        }
        $this->container = $container;
        return $this;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * A set of components that go to make up the described item.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent[]
     */
    public function getContent(): array
    {
        return $this->content ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent>
     */
    public function getContentIterator(): iterable
    {
        if (!isset($this->content)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->content);
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * A set of components that go to make up the described item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent $content
     * @return static
     */
    public function addContent(FHIRMedicationContent $content): self
    {
        if (!isset($this->content)) {
            $this->content = [];
        }
        $this->content[] = $content;
        return $this;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * A set of components that go to make up the described item.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationContent ...$content
     * @return static
     */
    public function setContent(FHIRMedicationContent ...$content): self
    {
        if ([] === $content) {
            unset($this->content);
            return $this;
        }
        $this->content = $content;
        return $this;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Information about a group of medication produced or packaged from one production
     * run.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch[]
     */
    public function getBatch(): array
    {
        return $this->batch ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch>
     */
    public function getBatchIterator(): iterable
    {
        if (!isset($this->batch)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->batch);
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Information about a group of medication produced or packaged from one production
     * run.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch $batch
     * @return static
     */
    public function addBatch(FHIRMedicationBatch $batch): self
    {
        if (!isset($this->batch)) {
            $this->batch = [];
        }
        $this->batch[] = $batch;
        return $this;
    }

    /**
     * This resource is primarily used for the identification and definition of a
     * medication. It covers the ingredients and the packaging for a medication.
     *
     * Information about a group of medication produced or packaged from one production
     * run.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationBatch ...$batch
     * @return static
     */
    public function setBatch(FHIRMedicationBatch ...$batch): self
    {
        if ([] === $batch) {
            unset($this->batch);
            return $this;
        }
        $this->batch = $batch;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
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
        if (isset($validationRules[self::FIELD_CONTAINER])) {
            $v = $this->getContainer();
            foreach($validationRules[self::FIELD_CONTAINER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINER])) {
                        $errs[self::FIELD_CONTAINER] = [];
                    }
                    $errs[self::FIELD_CONTAINER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT])) {
            $v = $this->getContent();
            foreach($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT])) {
                        $errs[self::FIELD_CONTENT] = [];
                    }
                    $errs[self::FIELD_CONTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BATCH])) {
            $v = $this->getBatch();
            foreach($validationRules[self::FIELD_BATCH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_BATCH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BATCH])) {
                        $errs[self::FIELD_BATCH] = [];
                    }
                    $errs[self::FIELD_BATCH][$rule] = $err;
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

    /* class_default.php:211 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationPackage)) {
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
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINER === $cen) {
                $type->setContainer(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTENT === $cen) {
                $type->addContent(FHIRMedicationContent::xmlUnserialize($ce, $config));
            } else if (self::FIELD_BATCH === $cen) {
                $type->addBatch(FHIRMedicationBatch::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->container)) {
            $xw->startElement(self::FIELD_CONTAINER);
            $this->container->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->content)) {
            foreach ($this->content as $v) {
                $xw->startElement(self::FIELD_CONTENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->batch)) {
            foreach ($this->batch as $v) {
                $xw->startElement(self::FIELD_BATCH);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRMedication\FHIRMedicationPackage
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRMedicationPackage)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_CONTAINER]) || array_key_exists(self::FIELD_CONTAINER, $json)) {
            $type->setContainer(FHIRCodeableConcept::jsonUnserialize($json[self::FIELD_CONTAINER], $config));
        }
        if (isset($json[self::FIELD_CONTENT]) || array_key_exists(self::FIELD_CONTENT, $json)) {
            $vs = $json[self::FIELD_CONTENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addContent(FHIRMedicationContent::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_BATCH]) || array_key_exists(self::FIELD_BATCH, $json)) {
            $vs = $json[self::FIELD_BATCH];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addBatch(FHIRMedicationBatch::jsonUnserialize($v, $config));
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
        if (isset($this->container)) {
            $out->container = $this->container;
        }
        if (isset($this->content) && [] !== $this->content) {
            $out->content = $this->content;
        }
        if (isset($this->batch) && [] !== $this->batch) {
            $out->batch = $this->batch;
        }
        return $out;
    }
}