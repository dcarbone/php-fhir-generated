<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\XMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionTypeMap;

/**
 * A resource that includes narrative, extensions, and contained resources.
 */
class FHIRDomainResource extends FHIRResource
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_DOMAIN_RESOURCE;


    public const FIELD_TEXT = 'text';
    public const FIELD_CONTAINED = 'contained';
    public const FIELD_EXTENSION = 'extension';
    public const FIELD_MODIFIER_EXTENSION = 'modifierExtension';

    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains a summary of the resource, and may be
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative. Resource
     * definitions may define what content should be represented in the narrative to
     * ensure clinical safety.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative 
     */
    protected FHIRNarrative $text;
    /**
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] 
     */
    protected array $contained;
    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. In order to make the use of extensions safe and
     * manageable, there is a strict set of governance applied to the definition and
     * use of extensions. Though any implementer is allowed to define an extension,
     * there is a set of requirements that SHALL be met as part of the definition of
     * the extension.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] 
     */
    protected array $extension;
    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource, and that modifies the understanding of the element
     * that contains it. Usually modifier elements provide negation or qualification.
     * In order to make the use of extensions safe and manageable, there is a strict
     * set of governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] 
     */
    protected array $modifierExtension;

    /** Default validation map for fields in type DomainResource */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRDomainResource Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            fhirComments: $fhirComments);
        if (null !== $text) {
            $this->setText($text);
        }
        if (null !== $contained) {
            $this->setContained(...$contained);
        }
        if (null !== $extension) {
            $this->setExtension(...$extension);
        }
        if (null !== $modifierExtension) {
            $this->setModifierExtension(...$modifierExtension);
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
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains a summary of the resource, and may be
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative. Resource
     * definitions may define what content should be represented in the narrative to
     * ensure clinical safety.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative
     */
    public function getText(): null|FHIRNarrative
    {
        return $this->text ?? null;
    }

    /**
     * A human-readable formatted text, including images.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A human-readable narrative that contains a summary of the resource, and may be
     * used to represent the content of the resource to a human. The narrative need not
     * encode all the structured data, but is required to contain sufficient detail to
     * make it "clinically safe" for a human to just read the narrative. Resource
     * definitions may define what content should be represented in the narrative to
     * ensure clinical safety.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRNarrative $text
     * @return static
     */
    public function setText(null|FHIRNarrative $text): self
    {
        if (null === $text) {
            unset($this->text);
            return $this;
        }
        $this->text = $text;
        return $this;
    }

    /**
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface[]
     */
    public function getContained(): array
    {
        return $this->contained ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer>
     */
    public function getContainedIterator(): iterable
    {
        if (!isset($this->contained) || [] === $this->contained) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->contained);
    }

    /**
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $contained
     * @return static
     */
    public function addContained(FHIRResourceContainer|VersionContainedTypeInterface $contained): self
    {
        if ($contained instanceof FHIRResourceContainer) {
            $contained = $contained->getContainedType();
        }
        if (!isset($this->contained)) {
            $this->contained = [];
        }
        $this->contained[] = $contained;
        return $this;
    }

    /**
     * These resources do not have an independent existence apart from the resource
     * that contains them - they cannot be identified independently, and nor can they
     * have their own independent transaction scope.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResourceContainer|\DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface ...$contained
     * @return static
     */
    public function setContained(FHIRResourceContainer|VersionContainedTypeInterface ...$contained): self
    {
        $this->contained = $contained;
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. In order to make the use of extensions safe and
     * manageable, there is a strict set of governance applied to the definition and
     * use of extensions. Though any implementer is allowed to define an extension,
     * there is a set of requirements that SHALL be met as part of the definition of
     * the extension.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[]
     */
    public function getExtension(): array
    {
        return $this->extension ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension>
     */
    public function getExtensionIterator(): iterable
    {
        if (!isset($this->extension) || [] === $this->extension) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->extension);
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. In order to make the use of extensions safe and
     * manageable, there is a strict set of governance applied to the definition and
     * use of extensions. Though any implementer is allowed to define an extension,
     * there is a set of requirements that SHALL be met as part of the definition of
     * the extension.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension $extension
     * @return static
     */
    public function addExtension(FHIRExtension $extension): self
    {
        if (!isset($this->extension)) {
            $this->extension = [];
        }
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource. In order to make the use of extensions safe and
     * manageable, there is a strict set of governance applied to the definition and
     * use of extensions. Though any implementer is allowed to define an extension,
     * there is a set of requirements that SHALL be met as part of the definition of
     * the extension.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension ...$extension
     * @return static
     */
    public function setExtension(FHIRExtension ...$extension): self
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource, and that modifies the understanding of the element
     * that contains it. Usually modifier elements provide negation or qualification.
     * In order to make the use of extensions safe and manageable, there is a strict
     * set of governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[]
     */
    public function getModifierExtension(): array
    {
        return $this->modifierExtension ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension>
     */
    public function getModifierExtensionIterator(): iterable
    {
        if (!isset($this->modifierExtension) || [] === $this->modifierExtension) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->modifierExtension);
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource, and that modifies the understanding of the element
     * that contains it. Usually modifier elements provide negation or qualification.
     * In order to make the use of extensions safe and manageable, there is a strict
     * set of governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension $modifierExtension
     * @return static
     */
    public function addModifierExtension(FHIRExtension $modifierExtension): self
    {
        if (!isset($this->modifierExtension)) {
            $this->modifierExtension = [];
        }
        $this->modifierExtension[] = $modifierExtension;
        return $this;
    }

    /**
     * Optional Extension Element - found in all resources.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * May be used to represent additional information that is not part of the basic
     * definition of the resource, and that modifies the understanding of the element
     * that contains it. Usually modifier elements provide negation or qualification.
     * In order to make the use of extensions safe and manageable, there is a strict
     * set of governance applied to the definition and use of extensions. Though any
     * implementer is allowed to define an extension, there is a set of requirements
     * that SHALL be met as part of the definition of the extension. Applications
     * processing a resource are required to check for modifier extensions.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension ...$modifierExtension
     * @return static
     */
    public function setModifierExtension(FHIRExtension ...$modifierExtension): self
    {
        $this->modifierExtension = $modifierExtension;
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
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDomainResource)) {
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
            if (self::FIELD_ID === $childName) {
                $v = new FHIRId(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setId(FHIRId::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_META === $childName) {
                $v = new FHIRMeta();
                $type->setMeta(FHIRMeta::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $childName) {
                $v = new FHIRUri(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_LANGUAGE === $childName) {
                $v = new FHIRCode(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setLanguage(FHIRCode::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_TEXT === $childName) {
                $v = new FHIRNarrative();
                $type->setText(FHIRNarrative::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CONTAINED === $childName) {
                foreach ($n->children() as $nn) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($nn);
                    $type->addContained($cn::xmlUnserialize($nn, null, $config));
                }
            } else if (self::FIELD_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $v = new FHIRExtension();
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, $v, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setId(new FHIRId(
                    value: (string)$attributes[self::FIELD_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setImplicitRules(new FHIRUri(
                    value: (string)$attributes[self::FIELD_IMPLICIT_RULES],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setLanguage(new FHIRCode(
                    value: (string)$attributes[self::FIELD_LANGUAGE],
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
            $xw->openRootNode('DomainResource', $this->_getSourceXMLNS());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->text)) {
            $xw->startElement(self::FIELD_TEXT);
            $this->text->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->contained)) {
            foreach($this->contained as $v) {
                $xw->startElement(self::FIELD_CONTAINED);
                $xw->startElement($v->_getFHIRTypeName());
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
                $xw->endElement();
            }
        }
        if (isset($this->extension)) {
            foreach ($this->extension as $v) {
                $xw->startElement(self::FIELD_EXTENSION);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->modifierExtension)) {
            foreach ($this->modifierExtension as $v) {
                $xw->startElement(self::FIELD_MODIFIER_EXTENSION);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRResource\FHIRDomainResource
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRDomainResource)) {
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
        if (isset($json[self::FIELD_TEXT]) || array_key_exists(self::FIELD_TEXT, $json)) {
            if ($json[self::FIELD_TEXT] instanceof FHIRNarrative) {
                $type->setText($json[self::FIELD_TEXT]);
            } else {
                $type->setText(new FHIRNarrative($json[self::FIELD_TEXT]));
            }
        }
        if (isset($data[self::FIELD_CONTAINED])) {
            if (is_array($data[self::FIELD_CONTAINED])) {
                if (is_int(key($data[self::FIELD_CONTAINED]))) {
                    $type->addContained($data[self::FIELD_CONTAINED]);
                } else {
                    $typeClassName = VersionTypeMap::getContainedTypeClassNameFromArray($data[self::FIELD_CONTAINED]);
                    $d = $data[self::FIELD_CONTAINED];
                    unset($d[Constants::JSON_FIELD_RESOURCE_TYPE]);
                    $type->addContained(new $typeClassName($d));
                }
            } elseif (!is_object($data[self::FIELD_CONTAINED]) || !($data[self::FIELD_CONTAINED] instanceof VersionContainedTypeInterface)) {
                throw new \InvalidArgumentException(sprintf(
                    'FHIRResourceContainer - Field "contained" must be an array of objects implementing \DCarbone\PHPFHIRGenerated\Versions\STU3\VersionContainedTypeInterface, value of type %s seen',
                    is_object($data[self::FIELD_CONTAINED]) ? get_class($data[self::FIELD_CONTAINED]) : gettype($data[self::FIELD_CONTAINED])
                ));
            } else {
                $type->addContained($data[self::FIELD_CONTAINED]);
            }
        }
        if (isset($json[self::FIELD_EXTENSION]) || array_key_exists(self::FIELD_EXTENSION, $json)) {
            if (is_array($json[self::FIELD_EXTENSION])) {
                foreach($json[self::FIELD_EXTENSION] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $type->addExtension($v);
                    } else {
                        $type->addExtension(new FHIRExtension($v));
                    }
                }
            } elseif ($json[self::FIELD_EXTENSION] instanceof FHIRExtension) {
                $type->addExtension($json[self::FIELD_EXTENSION]);
            } else {
                $type->addExtension(new FHIRExtension($json[self::FIELD_EXTENSION]));
            }
        }
        if (isset($json[self::FIELD_MODIFIER_EXTENSION]) || array_key_exists(self::FIELD_MODIFIER_EXTENSION, $json)) {
            if (is_array($json[self::FIELD_MODIFIER_EXTENSION])) {
                foreach($json[self::FIELD_MODIFIER_EXTENSION] as $v) {
                    if ($v instanceof FHIRExtension) {
                        $type->addModifierExtension($v);
                    } else {
                        $type->addModifierExtension(new FHIRExtension($v));
                    }
                }
            } elseif ($json[self::FIELD_MODIFIER_EXTENSION] instanceof FHIRExtension) {
                $type->addModifierExtension($json[self::FIELD_MODIFIER_EXTENSION]);
            } else {
                $type->addModifierExtension(new FHIRExtension($json[self::FIELD_MODIFIER_EXTENSION]));
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
        if (isset($this->text)) {
            $out->text = $this->text;
        }
        if (isset($this->contained) && [] !== $this->contained) {
            $out->contained = $this->contained;
        }
        if (isset($this->extension) && [] !== $this->extension) {
            $out->extension = $this->extension;
        }
        if (isset($this->modifierExtension) && [] !== $this->modifierExtension) {
            $out->modifierExtension = $this->modifierExtension;
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