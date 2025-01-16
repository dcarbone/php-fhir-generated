<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 16th, 2025 01:05+0000
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
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * Source material shall capture information on the taxonomic and anatomical
 * origins as well as the fraction of a material that can result in or can be
 * modified to form a substance. This set of data elements shall be used to define
 * polymer substances isolated from biological matrices. Taxonomic and anatomical
 * origins shall be described using a controlled vocabulary as required. This
 * information is captured for naturally derived polymers ( . starch) and
 * structurally diverse substances. For Organisms belonging to the Kingdom Plantae
 * the Substance level defines the fresh material of a single species or
 * infraspecies, the Herbal Drug and the Herbal preparation. For Herbal
 * preparations, the fraction information will be captured at the Substance
 * information level and additional information for herbal extracts will be
 * captured at the Specified Substance Group 1 information level. See for further
 * explanation the Substance Class: Structurally Diverse and the herbal annex.
 */
class FHIRSubstanceSourceMaterialHybrid extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSTANCE_SOURCE_MATERIAL_DOT_HYBRID;


    public const FIELD_MATERNAL_ORGANISM_ID = 'maternalOrganismId';
    public const FIELD_MATERNAL_ORGANISM_ID_EXT = '_maternalOrganismId';
    public const FIELD_MATERNAL_ORGANISM_NAME = 'maternalOrganismName';
    public const FIELD_MATERNAL_ORGANISM_NAME_EXT = '_maternalOrganismName';
    public const FIELD_PATERNAL_ORGANISM_ID = 'paternalOrganismId';
    public const FIELD_PATERNAL_ORGANISM_ID_EXT = '_paternalOrganismId';
    public const FIELD_PATERNAL_ORGANISM_NAME = 'paternalOrganismName';
    public const FIELD_PATERNAL_ORGANISM_NAME_EXT = '_paternalOrganismName';
    public const FIELD_HYBRID_TYPE = 'hybridType';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $maternalOrganismId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $maternalOrganismName;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $paternalOrganismId;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $paternalOrganismName;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept 
     */
    protected FHIRCodeableConcept $hybridType;

    /** Default validation map for fields in type SubstanceSourceMaterial.Hybrid */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRSubstanceSourceMaterialHybrid Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $maternalOrganismId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $maternalOrganismName
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $paternalOrganismId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $paternalOrganismName
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $hybridType
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $maternalOrganismId = null,
                                null|string|FHIRStringPrimitive|FHIRString $maternalOrganismName = null,
                                null|string|FHIRStringPrimitive|FHIRString $paternalOrganismId = null,
                                null|string|FHIRStringPrimitive|FHIRString $paternalOrganismName = null,
                                null|FHIRCodeableConcept $hybridType = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $maternalOrganismId) {
            $this->setMaternalOrganismId($maternalOrganismId);
        }
        if (null !== $maternalOrganismName) {
            $this->setMaternalOrganismName($maternalOrganismName);
        }
        if (null !== $paternalOrganismId) {
            $this->setPaternalOrganismId($paternalOrganismId);
        }
        if (null !== $paternalOrganismName) {
            $this->setPaternalOrganismName($paternalOrganismName);
        }
        if (null !== $hybridType) {
            $this->setHybridType($hybridType);
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getMaternalOrganismId(): null|FHIRString
    {
        return $this->maternalOrganismId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the maternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary. For plants, the parents aren’t
     * always known, and it is unlikely that it will be known which is maternal and
     * which is paternal.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $maternalOrganismId
     * @return static
     */
    public function setMaternalOrganismId(null|string|FHIRStringPrimitive|FHIRString $maternalOrganismId): self
    {
        if (null === $maternalOrganismId) {
            unset($this->maternalOrganismId);
            return $this;
        }
        if (!($maternalOrganismId instanceof FHIRString)) {
            $maternalOrganismId = new FHIRString(value: $maternalOrganismId);
        }
        $this->maternalOrganismId = $maternalOrganismId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getMaternalOrganismName(): null|FHIRString
    {
        return $this->maternalOrganismName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the maternal species constituting the hybrid organism shall be
     * specified. For plants, the parents aren’t always known, and it is unlikely
     * that it will be known which is maternal and which is paternal.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $maternalOrganismName
     * @return static
     */
    public function setMaternalOrganismName(null|string|FHIRStringPrimitive|FHIRString $maternalOrganismName): self
    {
        if (null === $maternalOrganismName) {
            unset($this->maternalOrganismName);
            return $this;
        }
        if (!($maternalOrganismName instanceof FHIRString)) {
            $maternalOrganismName = new FHIRString(value: $maternalOrganismName);
        }
        $this->maternalOrganismName = $maternalOrganismName;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getPaternalOrganismId(): null|FHIRString
    {
        return $this->paternalOrganismId ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier of the paternal species constituting the hybrid organism shall be
     * specified based on a controlled vocabulary.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $paternalOrganismId
     * @return static
     */
    public function setPaternalOrganismId(null|string|FHIRStringPrimitive|FHIRString $paternalOrganismId): self
    {
        if (null === $paternalOrganismId) {
            unset($this->paternalOrganismId);
            return $this;
        }
        if (!($paternalOrganismId instanceof FHIRString)) {
            $paternalOrganismId = new FHIRString(value: $paternalOrganismId);
        }
        $this->paternalOrganismId = $paternalOrganismId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getPaternalOrganismName(): null|FHIRString
    {
        return $this->paternalOrganismName ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the paternal species constituting the hybrid organism shall be
     * specified.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $paternalOrganismName
     * @return static
     */
    public function setPaternalOrganismName(null|string|FHIRStringPrimitive|FHIRString $paternalOrganismName): self
    {
        if (null === $paternalOrganismName) {
            unset($this->paternalOrganismName);
            return $this;
        }
        if (!($paternalOrganismName instanceof FHIRString)) {
            $paternalOrganismName = new FHIRString(value: $paternalOrganismName);
        }
        $this->paternalOrganismName = $paternalOrganismName;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept
     */
    public function getHybridType(): null|FHIRCodeableConcept
    {
        return $this->hybridType ?? null;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The hybrid type of an organism shall be specified.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $hybridType
     * @return static
     */
    public function setHybridType(null|FHIRCodeableConcept $hybridType): self
    {
        if (null === $hybridType) {
            unset($this->hybridType);
            return $this;
        }
        $this->hybridType = $hybridType;
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
        if (isset($validationRules[self::FIELD_MATERNAL_ORGANISM_ID])) {
            $v = $this->getMaternalOrganismId();
            foreach($validationRules[self::FIELD_MATERNAL_ORGANISM_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MATERNAL_ORGANISM_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERNAL_ORGANISM_ID])) {
                        $errs[self::FIELD_MATERNAL_ORGANISM_ID] = [];
                    }
                    $errs[self::FIELD_MATERNAL_ORGANISM_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MATERNAL_ORGANISM_NAME])) {
            $v = $this->getMaternalOrganismName();
            foreach($validationRules[self::FIELD_MATERNAL_ORGANISM_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MATERNAL_ORGANISM_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERNAL_ORGANISM_NAME])) {
                        $errs[self::FIELD_MATERNAL_ORGANISM_NAME] = [];
                    }
                    $errs[self::FIELD_MATERNAL_ORGANISM_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATERNAL_ORGANISM_ID])) {
            $v = $this->getPaternalOrganismId();
            foreach($validationRules[self::FIELD_PATERNAL_ORGANISM_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATERNAL_ORGANISM_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATERNAL_ORGANISM_ID])) {
                        $errs[self::FIELD_PATERNAL_ORGANISM_ID] = [];
                    }
                    $errs[self::FIELD_PATERNAL_ORGANISM_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATERNAL_ORGANISM_NAME])) {
            $v = $this->getPaternalOrganismName();
            foreach($validationRules[self::FIELD_PATERNAL_ORGANISM_NAME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PATERNAL_ORGANISM_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATERNAL_ORGANISM_NAME])) {
                        $errs[self::FIELD_PATERNAL_ORGANISM_NAME] = [];
                    }
                    $errs[self::FIELD_PATERNAL_ORGANISM_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HYBRID_TYPE])) {
            $v = $this->getHybridType();
            foreach($validationRules[self::FIELD_HYBRID_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_HYBRID_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HYBRID_TYPE])) {
                        $errs[self::FIELD_HYBRID_TYPE] = [];
                    }
                    $errs[self::FIELD_HYBRID_TYPE][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceSourceMaterialHybrid)) {
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
            } else if (self::FIELD_MATERNAL_ORGANISM_ID === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaternalOrganismId(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_MATERNAL_ORGANISM_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setMaternalOrganismName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATERNAL_ORGANISM_ID === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPaternalOrganismId(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PATERNAL_ORGANISM_NAME === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPaternalOrganismName(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_HYBRID_TYPE === $childName) {
                $v = new FHIRCodeableConcept();
                $type->setHybridType(FHIRCodeableConcept::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_MATERNAL_ORGANISM_ID])) {
            $pt = $type->getMaternalOrganismId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MATERNAL_ORGANISM_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaternalOrganismId(new FHIRString(
                    value: (string)$attributes[self::FIELD_MATERNAL_ORGANISM_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_MATERNAL_ORGANISM_NAME])) {
            $pt = $type->getMaternalOrganismName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_MATERNAL_ORGANISM_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setMaternalOrganismName(new FHIRString(
                    value: (string)$attributes[self::FIELD_MATERNAL_ORGANISM_NAME],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATERNAL_ORGANISM_ID])) {
            $pt = $type->getPaternalOrganismId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATERNAL_ORGANISM_ID]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPaternalOrganismId(new FHIRString(
                    value: (string)$attributes[self::FIELD_PATERNAL_ORGANISM_ID],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PATERNAL_ORGANISM_NAME])) {
            $pt = $type->getPaternalOrganismName();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PATERNAL_ORGANISM_NAME]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPaternalOrganismName(new FHIRString(
                    value: (string)$attributes[self::FIELD_PATERNAL_ORGANISM_NAME],
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
        if (null === $xw) {
            $xw = new XMLWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode($config, 'SubstanceSourceMaterialHybrid', $this->_getSourceXMLNS());
        }
        if (isset($this->maternalOrganismId) && $this->maternalOrganismId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MATERNAL_ORGANISM_ID, $this->maternalOrganismId->getValue()?->getFormattedValue());
        }
        if (isset($this->maternalOrganismName) && $this->maternalOrganismName->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_MATERNAL_ORGANISM_NAME, $this->maternalOrganismName->getValue()?->getFormattedValue());
        }
        if (isset($this->paternalOrganismId) && $this->paternalOrganismId->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATERNAL_ORGANISM_ID, $this->paternalOrganismId->getValue()?->getFormattedValue());
        }
        if (isset($this->paternalOrganismName) && $this->paternalOrganismName->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PATERNAL_ORGANISM_NAME, $this->paternalOrganismName->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->maternalOrganismId) && $this->maternalOrganismId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MATERNAL_ORGANISM_ID);
            $this->maternalOrganismId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->maternalOrganismName) && $this->maternalOrganismName->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_MATERNAL_ORGANISM_NAME);
            $this->maternalOrganismName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->paternalOrganismId) && $this->paternalOrganismId->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATERNAL_ORGANISM_ID);
            $this->paternalOrganismId->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->paternalOrganismName) && $this->paternalOrganismName->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PATERNAL_ORGANISM_NAME);
            $this->paternalOrganismName->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->hybridType)) {
            $xw->startElement(self::FIELD_HYBRID_TYPE);
            $this->hybridType->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRSubstanceSourceMaterial\FHIRSubstanceSourceMaterialHybrid
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubstanceSourceMaterialHybrid)) {
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
        if (isset($json[self::FIELD_MATERNAL_ORGANISM_ID]) || isset($json[self::FIELD_MATERNAL_ORGANISM_ID_EXT]) || array_key_exists(self::FIELD_MATERNAL_ORGANISM_ID, $json) || array_key_exists(self::FIELD_MATERNAL_ORGANISM_ID_EXT, $json)) {
            $value = $json[self::FIELD_MATERNAL_ORGANISM_ID] ?? null;
            $ext = (isset($json[self::FIELD_MATERNAL_ORGANISM_ID_EXT]) && is_array($json[self::FIELD_MATERNAL_ORGANISM_ID_EXT])) ? $json[self::FIELD_MATERNAL_ORGANISM_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setMaternalOrganismId($value);
                } else if (is_array($value)) {
                    $type->setMaternalOrganismId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setMaternalOrganismId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaternalOrganismId(new FHIRString($ext));
            } else {
                $type->setMaternalOrganismId(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_MATERNAL_ORGANISM_NAME]) || isset($json[self::FIELD_MATERNAL_ORGANISM_NAME_EXT]) || array_key_exists(self::FIELD_MATERNAL_ORGANISM_NAME, $json) || array_key_exists(self::FIELD_MATERNAL_ORGANISM_NAME_EXT, $json)) {
            $value = $json[self::FIELD_MATERNAL_ORGANISM_NAME] ?? null;
            $ext = (isset($json[self::FIELD_MATERNAL_ORGANISM_NAME_EXT]) && is_array($json[self::FIELD_MATERNAL_ORGANISM_NAME_EXT])) ? $json[self::FIELD_MATERNAL_ORGANISM_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setMaternalOrganismName($value);
                } else if (is_array($value)) {
                    $type->setMaternalOrganismName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setMaternalOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setMaternalOrganismName(new FHIRString($ext));
            } else {
                $type->setMaternalOrganismName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PATERNAL_ORGANISM_ID]) || isset($json[self::FIELD_PATERNAL_ORGANISM_ID_EXT]) || array_key_exists(self::FIELD_PATERNAL_ORGANISM_ID, $json) || array_key_exists(self::FIELD_PATERNAL_ORGANISM_ID_EXT, $json)) {
            $value = $json[self::FIELD_PATERNAL_ORGANISM_ID] ?? null;
            $ext = (isset($json[self::FIELD_PATERNAL_ORGANISM_ID_EXT]) && is_array($json[self::FIELD_PATERNAL_ORGANISM_ID_EXT])) ? $json[self::FIELD_PATERNAL_ORGANISM_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPaternalOrganismId($value);
                } else if (is_array($value)) {
                    $type->setPaternalOrganismId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPaternalOrganismId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPaternalOrganismId(new FHIRString($ext));
            } else {
                $type->setPaternalOrganismId(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PATERNAL_ORGANISM_NAME]) || isset($json[self::FIELD_PATERNAL_ORGANISM_NAME_EXT]) || array_key_exists(self::FIELD_PATERNAL_ORGANISM_NAME, $json) || array_key_exists(self::FIELD_PATERNAL_ORGANISM_NAME_EXT, $json)) {
            $value = $json[self::FIELD_PATERNAL_ORGANISM_NAME] ?? null;
            $ext = (isset($json[self::FIELD_PATERNAL_ORGANISM_NAME_EXT]) && is_array($json[self::FIELD_PATERNAL_ORGANISM_NAME_EXT])) ? $json[self::FIELD_PATERNAL_ORGANISM_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPaternalOrganismName($value);
                } else if (is_array($value)) {
                    $type->setPaternalOrganismName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPaternalOrganismName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPaternalOrganismName(new FHIRString($ext));
            } else {
                $type->setPaternalOrganismName(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_HYBRID_TYPE]) || array_key_exists(self::FIELD_HYBRID_TYPE, $json)) {
            if ($json[self::FIELD_HYBRID_TYPE] instanceof FHIRCodeableConcept) {
                $type->setHybridType($json[self::FIELD_HYBRID_TYPE]);
            } else {
                $type->setHybridType(new FHIRCodeableConcept($json[self::FIELD_HYBRID_TYPE]));
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
        if (isset($this->maternalOrganismId)) {
            if (null !== ($val = $this->maternalOrganismId->getValue())) {
                $out->maternalOrganismId = $val;
            }
            $ext = $this->maternalOrganismId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maternalOrganismId = $ext;
            }
        }
        if (isset($this->maternalOrganismName)) {
            if (null !== ($val = $this->maternalOrganismName->getValue())) {
                $out->maternalOrganismName = $val;
            }
            $ext = $this->maternalOrganismName->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_maternalOrganismName = $ext;
            }
        }
        if (isset($this->paternalOrganismId)) {
            if (null !== ($val = $this->paternalOrganismId->getValue())) {
                $out->paternalOrganismId = $val;
            }
            $ext = $this->paternalOrganismId->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_paternalOrganismId = $ext;
            }
        }
        if (isset($this->paternalOrganismName)) {
            if (null !== ($val = $this->paternalOrganismName->getValue())) {
                $out->paternalOrganismName = $val;
            }
            $ext = $this->paternalOrganismName->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_paternalOrganismName = $ext;
            }
        }
        if (isset($this->hybridType)) {
            $out->hybridType = $this->hybridType;
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