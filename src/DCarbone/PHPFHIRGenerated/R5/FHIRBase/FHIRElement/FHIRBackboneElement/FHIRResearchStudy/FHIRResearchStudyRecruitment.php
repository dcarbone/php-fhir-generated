<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:24+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRUnsignedIntPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * A scientific study of nature that sometimes includes processes involved in
 * health and disease. For example, clinical trials are research studies that
 * involve people. These studies may be related to new ways to screen, prevent,
 * diagnose, and treat disease. They may also study certain outcomes and certain
 * groups of people by looking at data collected in the past or future.
 *
 * Class FHIRResearchStudyRecruitment
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy
 */
class FHIRResearchStudyRecruitment extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY_DOT_RECRUITMENT;

    const FIELD_TARGET_NUMBER = 'targetNumber';
    const FIELD_TARGET_NUMBER_EXT = '_targetNumber';
    const FIELD_ACTUAL_NUMBER = 'actualNumber';
    const FIELD_ACTUAL_NUMBER_EXT = '_actualNumber';
    const FIELD_ELIGIBILITY = 'eligibility';
    const FIELD_ACTUAL_GROUP = 'actualGroup';

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Estimated total number of participants to be enrolled.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $targetNumber = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Actual total number of participants enrolled in study.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $actualNumber = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Inclusion and exclusion criteria.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $eligibility = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Group of participants who were enrolled in study.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    protected null|FHIRReference $actualGroup = null;

    /**
     * Validation map for fields in type ResearchStudy.Recruitment
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRResearchStudyRecruitment Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TARGET_NUMBER, $data) || array_key_exists(self::FIELD_TARGET_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_TARGET_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_TARGET_NUMBER_EXT]) && is_array($data[self::FIELD_TARGET_NUMBER_EXT])) ? $data[self::FIELD_TARGET_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setTargetNumber($value);
                } else if (is_array($value)) {
                    $this->setTargetNumber(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setTargetNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTargetNumber(new FHIRUnsignedInt($ext));
            } else {
                $this->setTargetNumber(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_ACTUAL_NUMBER, $data) || array_key_exists(self::FIELD_ACTUAL_NUMBER_EXT, $data)) {
            $value = $data[self::FIELD_ACTUAL_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_ACTUAL_NUMBER_EXT]) && is_array($data[self::FIELD_ACTUAL_NUMBER_EXT])) ? $data[self::FIELD_ACTUAL_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setActualNumber($value);
                } else if (is_array($value)) {
                    $this->setActualNumber(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setActualNumber(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setActualNumber(new FHIRUnsignedInt($ext));
            } else {
                $this->setActualNumber(new FHIRUnsignedInt(null));
            }
        }
        if (array_key_exists(self::FIELD_ELIGIBILITY, $data)) {
            if ($data[self::FIELD_ELIGIBILITY] instanceof FHIRReference) {
                $this->setEligibility($data[self::FIELD_ELIGIBILITY]);
            } else {
                $this->setEligibility(new FHIRReference($data[self::FIELD_ELIGIBILITY]));
            }
        }
        if (array_key_exists(self::FIELD_ACTUAL_GROUP, $data)) {
            if ($data[self::FIELD_ACTUAL_GROUP] instanceof FHIRReference) {
                $this->setActualGroup($data[self::FIELD_ACTUAL_GROUP]);
            } else {
                $this->setActualGroup(new FHIRReference($data[self::FIELD_ACTUAL_GROUP]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Estimated total number of participants to be enrolled.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getTargetNumber(): null|FHIRUnsignedInt
    {
        return $this->targetNumber;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Estimated total number of participants to be enrolled.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $targetNumber
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setTargetNumber(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $targetNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $targetNumber && !($targetNumber instanceof FHIRUnsignedInt)) {
            $targetNumber = new FHIRUnsignedInt($targetNumber);
        }
        $this->_trackValueSet($this->targetNumber, $targetNumber);
        if (!isset($this->_xmlLocations[self::FIELD_TARGET_NUMBER])) {
            $this->_xmlLocations[self::FIELD_TARGET_NUMBER] = [];
        }
        $this->_xmlLocations[self::FIELD_TARGET_NUMBER][0] = $xmlLocation;
        $this->targetNumber = $targetNumber;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Actual total number of participants enrolled in study.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt
     */
    public function getActualNumber(): null|FHIRUnsignedInt
    {
        return $this->actualNumber;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Actual total number of participants enrolled in study.
     *
     * @param null|string|int|float|\DCarbone\PHPFHIRGenerated\R5\FHIRUnsignedIntPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRUnsignedInt $actualNumber
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setActualNumber(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $actualNumber = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $actualNumber && !($actualNumber instanceof FHIRUnsignedInt)) {
            $actualNumber = new FHIRUnsignedInt($actualNumber);
        }
        $this->_trackValueSet($this->actualNumber, $actualNumber);
        if (!isset($this->_xmlLocations[self::FIELD_ACTUAL_NUMBER])) {
            $this->_xmlLocations[self::FIELD_ACTUAL_NUMBER] = [];
        }
        $this->_xmlLocations[self::FIELD_ACTUAL_NUMBER][0] = $xmlLocation;
        $this->actualNumber = $actualNumber;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Inclusion and exclusion criteria.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getEligibility(): null|FHIRReference
    {
        return $this->eligibility;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Inclusion and exclusion criteria.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $eligibility
     * @return static
     */
    public function setEligibility(null|FHIRReference $eligibility = null): self
    {
        if (null === $eligibility) {
            $eligibility = new FHIRReference();
        }
        $this->_trackValueSet($this->eligibility, $eligibility);
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
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getActualGroup(): null|FHIRReference
    {
        return $this->actualGroup;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Group of participants who were enrolled in study.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $actualGroup
     * @return static
     */
    public function setActualGroup(null|FHIRReference $actualGroup = null): self
    {
        if (null === $actualGroup) {
            $actualGroup = new FHIRReference();
        }
        $this->_trackValueSet($this->actualGroup, $actualGroup);
        $this->actualGroup = $actualGroup;
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getTargetNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getActualNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTUAL_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEligibility())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ELIGIBILITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getActualGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTUAL_GROUP] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_NUMBER])) {
            $v = $this->getTargetNumber();
            foreach($validationRules[self::FIELD_TARGET_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY_DOT_RECRUITMENT, self::FIELD_TARGET_NUMBER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY_DOT_RECRUITMENT, self::FIELD_ACTUAL_NUMBER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY_DOT_RECRUITMENT, self::FIELD_ELIGIBILITY, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESEARCH_STUDY_DOT_RECRUITMENT, self::FIELD_ACTUAL_GROUP, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRResearchStudy\FHIRResearchStudyRecruitment
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRResearchStudyRecruitment)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_TARGET_NUMBER === $childName) {
                $type->setTargetNumber(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ACTUAL_NUMBER === $childName) {
                $type->setActualNumber(FHIRUnsignedInt::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_ELIGIBILITY === $childName) {
                $type->setEligibility(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTUAL_GROUP === $childName) {
                $type->setActualGroup(FHIRReference::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_TARGET_NUMBER])) {
            $pt = $type->getTargetNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_TARGET_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setTargetNumber((string)$attributes[self::FIELD_TARGET_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ACTUAL_NUMBER])) {
            $pt = $type->getActualNumber();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ACTUAL_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setActualNumber((string)$attributes[self::FIELD_ACTUAL_NUMBER], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'ResearchStudyRecruitment', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_TARGET_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getTargetNumber())) {
            $xw->writeAttribute(self::FIELD_TARGET_NUMBER, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_ACTUAL_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getActualNumber())) {
            $xw->writeAttribute(self::FIELD_ACTUAL_NUMBER, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_TARGET_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getTargetNumber())) {
            $xw->startElement(self::FIELD_TARGET_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_ACTUAL_NUMBER] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getActualNumber())) {
            $xw->startElement(self::FIELD_ACTUAL_NUMBER);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getEligibility())) {
            $xw->startElement(self::FIELD_ELIGIBILITY);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getActualGroup())) {
            $xw->startElement(self::FIELD_ACTUAL_GROUP);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getTargetNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TARGET_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TARGET_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getActualNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ACTUAL_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ACTUAL_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEligibility())) {
            $out->{self::FIELD_ELIGIBILITY} = $v;
        }
        if (null !== ($v = $this->getActualGroup())) {
            $out->{self::FIELD_ACTUAL_GROUP} = $v;
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