<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Version;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * A scientific study of nature that sometimes includes processes involved in
 * health and disease. For example, clinical trials are research studies that
 * involve people. These studies may be related to new ways to screen, prevent,
 * diagnose, and treat disease. They may also study certain outcomes and certain
 * groups of people by looking at data collected in the past or future.
 */
class FHIRResearchStudyRecruitment extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_RESEARCH_STUDY_DOT_RECRUITMENT;

    /* class_default.php:47 */
    public const FIELD_TARGET_NUMBER = 'targetNumber';
    public const FIELD_TARGET_NUMBER_EXT = '_targetNumber';
    public const FIELD_ACTUAL_NUMBER = 'actualNumber';
    public const FIELD_ACTUAL_NUMBER_EXT = '_actualNumber';
    public const FIELD_ELIGIBILITY = 'eligibility';
    public const FIELD_ACTUAL_GROUP = 'actualGroup';

    /* class_default.php:66 */
    private static array $_validationRules = [];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_TARGET_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_ACTUAL_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Estimated total number of participants to be enrolled.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $targetNumber;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Actual total number of participants enrolled in study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt 
     */
    protected FHIRUnsignedInt $actualNumber;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Inclusion and exclusion criteria.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $eligibility;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Group of participants who were enrolled in study.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    protected FHIRReference $actualGroup;

    /* constructor.php:63 */
    /**
     * FHIRResearchStudyRecruitment Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension[] $modifierExtension
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $targetNumber
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $actualNumber
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $eligibility
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $actualGroup
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $targetNumber = null,
                                null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $actualNumber = null,
                                null|FHIRReference $eligibility = null,
                                null|FHIRReference $actualGroup = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $targetNumber) {
            $this->setTargetNumber($targetNumber);
        }
        if (null !== $actualNumber) {
            $this->setActualNumber($actualNumber);
        }
        if (null !== $eligibility) {
            $this->setEligibility($eligibility);
        }
        if (null !== $actualGroup) {
            $this->setActualGroup($actualGroup);
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
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Estimated total number of participants to be enrolled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getTargetNumber(): null|FHIRUnsignedInt
    {
        return $this->targetNumber ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Estimated total number of participants to be enrolled.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $targetNumber
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setTargetNumber(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $targetNumber,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $targetNumber) {
            unset($this->targetNumber);
            return $this;
        }
        if (!($targetNumber instanceof FHIRUnsignedInt)) {
            $targetNumber = new FHIRUnsignedInt(value: $targetNumber);
        }
        $this->targetNumber = $targetNumber;
        if ($this->_valueXMLLocations[self::FIELD_TARGET_NUMBER] !== $valueXMLLocation) {
            $this->_setTargetNumberValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the targetNumber element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getTargetNumberValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_TARGET_NUMBER];
    }

    /**
     * Set the location the "value" field of the targetNumber element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setTargetNumberValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_TARGET_NUMBER] = $valueXMLLocation;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Actual total number of participants enrolled in study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getActualNumber(): null|FHIRUnsignedInt
    {
        return $this->actualNumber ?? null;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Actual total number of participants enrolled in study.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRUnsignedInt $actualNumber
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setActualNumber(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $actualNumber,
                                    ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $actualNumber) {
            unset($this->actualNumber);
            return $this;
        }
        if (!($actualNumber instanceof FHIRUnsignedInt)) {
            $actualNumber = new FHIRUnsignedInt(value: $actualNumber);
        }
        $this->actualNumber = $actualNumber;
        if ($this->_valueXMLLocations[self::FIELD_ACTUAL_NUMBER] !== $valueXMLLocation) {
            $this->_setActualNumberValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the actualNumber element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getActualNumberValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ACTUAL_NUMBER];
    }

    /**
     * Set the location the "value" field of the actualNumber element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setActualNumberValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ACTUAL_NUMBER] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Inclusion and exclusion criteria.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEligibility(): null|FHIRReference
    {
        return $this->eligibility ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Inclusion and exclusion criteria.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $eligibility
     * @return static
     */
    public function setEligibility(null|FHIRReference $eligibility): self
    {
        if (null === $eligibility) {
            unset($this->eligibility);
            return $this;
        }
        $this->eligibility = $eligibility;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Group of participants who were enrolled in study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getActualGroup(): null|FHIRReference
    {
        return $this->actualGroup ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Group of participants who were enrolled in study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $actualGroup
     * @return static
     */
    public function setActualGroup(null|FHIRReference $actualGroup): self
    {
        if (null === $actualGroup) {
            unset($this->actualGroup);
            return $this;
        }
        $this->actualGroup = $actualGroup;
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
        if (isset($validationRules[self::FIELD_TARGET_NUMBER])) {
            $v = $this->getTargetNumber();
            foreach($validationRules[self::FIELD_TARGET_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TARGET_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_NUMBER])) {
                        $errs[self::FIELD_TARGET_NUMBER] = [];
                    }
                    $errs[self::FIELD_TARGET_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTUAL_NUMBER])) {
            $v = $this->getActualNumber();
            foreach($validationRules[self::FIELD_ACTUAL_NUMBER] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACTUAL_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTUAL_NUMBER])) {
                        $errs[self::FIELD_ACTUAL_NUMBER] = [];
                    }
                    $errs[self::FIELD_ACTUAL_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ELIGIBILITY])) {
            $v = $this->getEligibility();
            foreach($validationRules[self::FIELD_ELIGIBILITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ELIGIBILITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ELIGIBILITY])) {
                        $errs[self::FIELD_ELIGIBILITY] = [];
                    }
                    $errs[self::FIELD_ELIGIBILITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTUAL_GROUP])) {
            $v = $this->getActualGroup();
            foreach($validationRules[self::FIELD_ACTUAL_GROUP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACTUAL_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTUAL_GROUP])) {
                        $errs[self::FIELD_ACTUAL_GROUP] = [];
                    }
                    $errs[self::FIELD_ACTUAL_GROUP][$rule] = $err;
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

    /* class_default.php:212 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRResearchStudyRecruitment)) {
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
            } else if (self::FIELD_TARGET_NUMBER === $cen) {
                $type->setTargetNumber(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTUAL_NUMBER === $cen) {
                $type->setActualNumber(FHIRUnsignedInt::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ELIGIBILITY === $cen) {
                $type->setEligibility(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTUAL_GROUP === $cen) {
                $type->setActualGroup(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TARGET_NUMBER])) {
            if (isset($type->targetNumber)) {
                $type->targetNumber->setValue((string)$attributes[self::FIELD_TARGET_NUMBER]);
                $type->_setTargetNumberValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setTargetNumber((string)$attributes[self::FIELD_TARGET_NUMBER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ACTUAL_NUMBER])) {
            if (isset($type->actualNumber)) {
                $type->actualNumber->setValue((string)$attributes[self::FIELD_ACTUAL_NUMBER]);
                $type->_setActualNumberValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setActualNumber((string)$attributes[self::FIELD_ACTUAL_NUMBER], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->targetNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TARGET_NUMBER]) {
            $xw->writeAttribute(self::FIELD_TARGET_NUMBER, $this->targetNumber->_getFormattedValue());
        }
        if (isset($this->actualNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTUAL_NUMBER]) {
            $xw->writeAttribute(self::FIELD_ACTUAL_NUMBER, $this->actualNumber->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->targetNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TARGET_NUMBER]
                || $this->targetNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TARGET_NUMBER);
            $this->targetNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TARGET_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->actualNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACTUAL_NUMBER]
                || $this->actualNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACTUAL_NUMBER);
            $this->actualNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACTUAL_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->eligibility)) {
            $xw->startElement(self::FIELD_ELIGIBILITY);
            $this->eligibility->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->actualGroup)) {
            $xw->startElement(self::FIELD_ACTUAL_GROUP);
            $this->actualGroup->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRResearchStudyRecruitment)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_TARGET_NUMBER])
            || isset($json[self::FIELD_TARGET_NUMBER_EXT])
            || array_key_exists(self::FIELD_TARGET_NUMBER, $json)
            || array_key_exists(self::FIELD_TARGET_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_TARGET_NUMBER] ?? null;
            $type->setTargetNumber(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_TARGET_NUMBER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ACTUAL_NUMBER])
            || isset($json[self::FIELD_ACTUAL_NUMBER_EXT])
            || array_key_exists(self::FIELD_ACTUAL_NUMBER, $json)
            || array_key_exists(self::FIELD_ACTUAL_NUMBER_EXT, $json)) {
            $value = $json[self::FIELD_ACTUAL_NUMBER] ?? null;
            $type->setActualNumber(FHIRUnsignedInt::jsonUnserialize(
                (is_array($value) ? $value : [FHIRUnsignedInt::FIELD_VALUE => $value]) + ($json[self::FIELD_ACTUAL_NUMBER_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_ELIGIBILITY]) || array_key_exists(self::FIELD_ELIGIBILITY, $json)) {
            $type->setEligibility(FHIRReference::jsonUnserialize($json[self::FIELD_ELIGIBILITY], $config));
        }
        if (isset($json[self::FIELD_ACTUAL_GROUP]) || array_key_exists(self::FIELD_ACTUAL_GROUP, $json)) {
            $type->setActualGroup(FHIRReference::jsonUnserialize($json[self::FIELD_ACTUAL_GROUP], $config));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->targetNumber)) {
            if (null !== ($val = $this->targetNumber->getValue())) {
                $out->targetNumber = $val;
            }
            if ($this->targetNumber->_nonValueFieldDefined()) {
                $ext = $this->targetNumber->jsonSerialize();
                unset($ext->value);
                $out->_targetNumber = $ext;
            }
        }
        if (isset($this->actualNumber)) {
            if (null !== ($val = $this->actualNumber->getValue())) {
                $out->actualNumber = $val;
            }
            if ($this->actualNumber->_nonValueFieldDefined()) {
                $ext = $this->actualNumber->jsonSerialize();
                unset($ext->value);
                $out->_actualNumber = $ext;
            }
        }
        if (isset($this->eligibility)) {
            $out->eligibility = $this->eligibility;
        }
        if (isset($this->actualGroup)) {
            $out->actualGroup = $this->actualGroup;
        }
        return $out;
    }
}