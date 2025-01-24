<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: January 24th, 2025 03:11+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\TypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4B\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4B\VersionConstants;

/**
 * Describes a stream of resource state changes or events and annotated with labels
 * useful to filter projections from this topic.
 */
class FHIRSubscriptionTopicQueryCriteria extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA;


    public const FIELD_PREVIOUS = 'previous';
    public const FIELD_PREVIOUS_EXT = '_previous';
    public const FIELD_RESULT_FOR_CREATE = 'resultForCreate';
    public const FIELD_RESULT_FOR_CREATE_EXT = '_resultForCreate';
    public const FIELD_CURRENT = 'current';
    public const FIELD_CURRENT_EXT = '_current';
    public const FIELD_RESULT_FOR_DELETE = 'resultForDelete';
    public const FIELD_RESULT_FOR_DELETE_EXT = '_resultForDelete';
    public const FIELD_REQUIRE_BOTH = 'requireBoth';
    public const FIELD_REQUIRE_BOTH_EXT = '_requireBoth';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the previous resource state (e.g.,
     * state before an update).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $previous;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For "create" interactions, should the "previous" criteria count as an automatic
     * pass or an automatic fail.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior 
     */
    protected FHIRCriteriaNotExistsBehavior $resultForCreate;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the current resource state (e.g.,
     * state after an update).
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $current;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For "delete" interactions, should the "current" criteria count as an automatic
     * pass or an automatic fail.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior 
     */
    protected FHIRCriteriaNotExistsBehavior $resultForDelete;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to true, both current and previous criteria must evaluate true to trigger
     * a notification for this topic. Otherwise a notification for this topic will be
     * triggered if either one evaluates to true.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean 
     */
    protected FHIRBoolean $requireBoth;

    /** Default validation map for fields in type SubscriptionTopic.QueryCriteria */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRSubscriptionTopicQueryCriteria Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $previous
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior $resultForCreate
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $current
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior $resultForDelete
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $requireBoth
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $previous = null,
                                null|FHIRCriteriaNotExistsBehavior $resultForCreate = null,
                                null|string|FHIRStringPrimitive|FHIRString $current = null,
                                null|FHIRCriteriaNotExistsBehavior $resultForDelete = null,
                                null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $requireBoth = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $previous) {
            $this->setPrevious($previous);
        }
        if (null !== $resultForCreate) {
            $this->setResultForCreate($resultForCreate);
        }
        if (null !== $current) {
            $this->setCurrent($current);
        }
        if (null !== $resultForDelete) {
            $this->setResultForDelete($resultForDelete);
        }
        if (null !== $requireBoth) {
            $this->setRequireBoth($requireBoth);
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
     * The FHIR query based rules are applied to the previous resource state (e.g.,
     * state before an update).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getPrevious(): null|FHIRString
    {
        return $this->previous ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the previous resource state (e.g.,
     * state before an update).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $previous
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setPrevious(null|string|FHIRStringPrimitive|FHIRString $previous,
                                null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $previous) {
            unset($this->previous);
            return $this;
        }
        if (!($previous instanceof FHIRString)) {
            $previous = new FHIRString(value: $previous);
        }
        if (null !== $valueXMLLocation) {
            $previous->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $previous->_getValueXMLLocation()) {
            $previous->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->previous = $previous;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For "create" interactions, should the "previous" criteria count as an automatic
     * pass or an automatic fail.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    public function getResultForCreate(): null|FHIRCriteriaNotExistsBehavior
    {
        return $this->resultForCreate ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For "create" interactions, should the "previous" criteria count as an automatic
     * pass or an automatic fail.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior $resultForCreate
     * @return static
     */
    public function setResultForCreate(null|FHIRCriteriaNotExistsBehavior $resultForCreate): self
    {
        if (null === $resultForCreate) {
            unset($this->resultForCreate);
            return $this;
        }
        $this->resultForCreate = $resultForCreate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the current resource state (e.g.,
     * state after an update).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString
     */
    public function getCurrent(): null|FHIRString
    {
        return $this->current ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the current resource state (e.g.,
     * state after an update).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRString $current
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setCurrent(null|string|FHIRStringPrimitive|FHIRString $current,
                               null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $current) {
            unset($this->current);
            return $this;
        }
        if (!($current instanceof FHIRString)) {
            $current = new FHIRString(value: $current);
        }
        if (null !== $valueXMLLocation) {
            $current->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $current->_getValueXMLLocation()) {
            $current->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->current = $current;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For "delete" interactions, should the "current" criteria count as an automatic
     * pass or an automatic fail.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    public function getResultForDelete(): null|FHIRCriteriaNotExistsBehavior
    {
        return $this->resultForDelete ?? null;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For "delete" interactions, should the "current" criteria count as an automatic
     * pass or an automatic fail.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRCriteriaNotExistsBehavior $resultForDelete
     * @return static
     */
    public function setResultForDelete(null|FHIRCriteriaNotExistsBehavior $resultForDelete): self
    {
        if (null === $resultForDelete) {
            unset($this->resultForDelete);
            return $this;
        }
        $this->resultForDelete = $resultForDelete;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to true, both current and previous criteria must evaluate true to trigger
     * a notification for this topic. Otherwise a notification for this topic will be
     * triggered if either one evaluates to true.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean
     */
    public function getRequireBoth(): null|FHIRBoolean
    {
        return $this->requireBoth ?? null;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to true, both current and previous criteria must evaluate true to trigger
     * a notification for this topic. Otherwise a notification for this topic will be
     * triggered if either one evaluates to true.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBoolean $requireBoth
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRequireBoth(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $requireBoth,
                                   null|ValueXMLLocationEnum $valueXMLLocation = null): self
    {
        if (null === $requireBoth) {
            unset($this->requireBoth);
            return $this;
        }
        if (!($requireBoth instanceof FHIRBoolean)) {
            $requireBoth = new FHIRBoolean(value: $requireBoth);
        }
        if (null !== $valueXMLLocation) {
            $requireBoth->_setValueXMLLocation($valueXMLLocation);
        } else if (null === $requireBoth->_getValueXMLLocation()) {
            $requireBoth->_setValueXMLLocation(ValueXMLLocationEnum::ELEMENT);
        }
        $this->requireBoth = $requireBoth;
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
        if (isset($validationRules[self::FIELD_PREVIOUS])) {
            $v = $this->getPrevious();
            foreach($validationRules[self::FIELD_PREVIOUS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PREVIOUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREVIOUS])) {
                        $errs[self::FIELD_PREVIOUS] = [];
                    }
                    $errs[self::FIELD_PREVIOUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT_FOR_CREATE])) {
            $v = $this->getResultForCreate();
            foreach($validationRules[self::FIELD_RESULT_FOR_CREATE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESULT_FOR_CREATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT_FOR_CREATE])) {
                        $errs[self::FIELD_RESULT_FOR_CREATE] = [];
                    }
                    $errs[self::FIELD_RESULT_FOR_CREATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CURRENT])) {
            $v = $this->getCurrent();
            foreach($validationRules[self::FIELD_CURRENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CURRENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CURRENT])) {
                        $errs[self::FIELD_CURRENT] = [];
                    }
                    $errs[self::FIELD_CURRENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESULT_FOR_DELETE])) {
            $v = $this->getResultForDelete();
            foreach($validationRules[self::FIELD_RESULT_FOR_DELETE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RESULT_FOR_DELETE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESULT_FOR_DELETE])) {
                        $errs[self::FIELD_RESULT_FOR_DELETE] = [];
                    }
                    $errs[self::FIELD_RESULT_FOR_DELETE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIRE_BOTH])) {
            $v = $this->getRequireBoth();
            foreach($validationRules[self::FIELD_REQUIRE_BOTH] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_REQUIRE_BOTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIRE_BOTH])) {
                        $errs[self::FIELD_REQUIRE_BOTH] = [];
                    }
                    $errs[self::FIELD_REQUIRE_BOTH][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionTopicQueryCriteria)) {
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
            } else if (self::FIELD_PREVIOUS === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setPrevious(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESULT_FOR_CREATE === $childName) {
                $v = new FHIRCriteriaNotExistsBehavior(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setResultForCreate(FHIRCriteriaNotExistsBehavior::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CURRENT === $childName) {
                $v = new FHIRString(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setCurrent(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_RESULT_FOR_DELETE === $childName) {
                $v = new FHIRCriteriaNotExistsBehavior(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setResultForDelete(FHIRCriteriaNotExistsBehavior::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_REQUIRE_BOTH === $childName) {
                $v = new FHIRBoolean(valueXMLLocation: ValueXMLLocationEnum::ELEMENT);
                $type->setRequireBoth(FHIRBoolean::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_PREVIOUS])) {
            $pt = $type->getPrevious();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_PREVIOUS]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrevious(new FHIRString(
                    value: (string)$attributes[self::FIELD_PREVIOUS],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CURRENT])) {
            $pt = $type->getCurrent();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_CURRENT]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setCurrent(new FHIRString(
                    value: (string)$attributes[self::FIELD_CURRENT],
                    valueXMLLocation: ValueXMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_REQUIRE_BOTH])) {
            $pt = $type->getRequireBoth();
            if (null !== $pt) {
                $pt->setValue(value:(string)$attributes[self::FIELD_REQUIRE_BOTH]);
                $pt->_setValueXMLLocation(ValueXMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequireBoth(new FHIRBoolean(
                    value: (string)$attributes[self::FIELD_REQUIRE_BOTH],
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
            $xw->openRootNode('SubscriptionTopicQueryCriteria', $this->_getSourceXMLNS());
        }
        if (isset($this->previous) && $this->previous->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PREVIOUS, $this->previous->getValue()?->_getFormattedValue());
        }
        if (isset($this->current) && $this->current->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CURRENT, $this->current->getValue()?->_getFormattedValue());
        }
        if (isset($this->requireBoth) && $this->requireBoth->_getValueXMLLocation() === ValueXMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_REQUIRE_BOTH, $this->requireBoth->getValue()?->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->previous) && $this->previous->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PREVIOUS);
            $this->previous->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->resultForCreate)) {
            $xw->startElement(self::FIELD_RESULT_FOR_CREATE);
            $this->resultForCreate->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->current) && $this->current->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CURRENT);
            $this->current->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->resultForDelete)) {
            $xw->startElement(self::FIELD_RESULT_FOR_DELETE);
            $this->resultForDelete->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->requireBoth) && $this->requireBoth->_getValueXMLLocation() === ValueXMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_REQUIRE_BOTH);
            $this->requireBoth->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4B\Types\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionTopicQueryCriteria)) {
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
        if (isset($json[self::FIELD_PREVIOUS]) || isset($json[self::FIELD_PREVIOUS_EXT]) || array_key_exists(self::FIELD_PREVIOUS, $json) || array_key_exists(self::FIELD_PREVIOUS_EXT, $json)) {
            $value = $json[self::FIELD_PREVIOUS] ?? null;
            $ext = (array)($json[self::FIELD_PREVIOUS_EXT] ?? []);
            $type->setPrevious(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RESULT_FOR_CREATE]) || isset($json[self::FIELD_RESULT_FOR_CREATE_EXT]) || array_key_exists(self::FIELD_RESULT_FOR_CREATE, $json) || array_key_exists(self::FIELD_RESULT_FOR_CREATE_EXT, $json)) {
            $value = $json[self::FIELD_RESULT_FOR_CREATE] ?? null;
            $ext = (array)($json[self::FIELD_RESULT_FOR_CREATE_EXT] ?? []);
            $type->setResultForCreate(FHIRCriteriaNotExistsBehavior::jsonUnserialize(
                json: [FHIRCriteriaNotExistsBehavior::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_CURRENT]) || isset($json[self::FIELD_CURRENT_EXT]) || array_key_exists(self::FIELD_CURRENT, $json) || array_key_exists(self::FIELD_CURRENT_EXT, $json)) {
            $value = $json[self::FIELD_CURRENT] ?? null;
            $ext = (array)($json[self::FIELD_CURRENT_EXT] ?? []);
            $type->setCurrent(FHIRString::jsonUnserialize(
                json: [FHIRString::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_RESULT_FOR_DELETE]) || isset($json[self::FIELD_RESULT_FOR_DELETE_EXT]) || array_key_exists(self::FIELD_RESULT_FOR_DELETE, $json) || array_key_exists(self::FIELD_RESULT_FOR_DELETE_EXT, $json)) {
            $value = $json[self::FIELD_RESULT_FOR_DELETE] ?? null;
            $ext = (array)($json[self::FIELD_RESULT_FOR_DELETE_EXT] ?? []);
            $type->setResultForDelete(FHIRCriteriaNotExistsBehavior::jsonUnserialize(
                json: [FHIRCriteriaNotExistsBehavior::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        if (isset($json[self::FIELD_REQUIRE_BOTH]) || isset($json[self::FIELD_REQUIRE_BOTH_EXT]) || array_key_exists(self::FIELD_REQUIRE_BOTH, $json) || array_key_exists(self::FIELD_REQUIRE_BOTH_EXT, $json)) {
            $value = $json[self::FIELD_REQUIRE_BOTH] ?? null;
            $ext = (array)($json[self::FIELD_REQUIRE_BOTH_EXT] ?? []);
            $type->setRequireBoth(FHIRBoolean::jsonUnserialize(
                json: [FHIRBoolean::FIELD_VALUE => $value] + $ext,
                config: $config,
            ));
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->previous)) {
            if (null !== ($val = $this->previous->getValue())) {
                $out->previous = $val;
            }
            $ext = $this->previous->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_previous = $ext;
            }
        }
        if (isset($this->resultForCreate)) {
            if (null !== ($val = $this->resultForCreate->getValue())) {
                $out->resultForCreate = $val;
            }
            $ext = $this->resultForCreate->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_resultForCreate = $ext;
            }
        }
        if (isset($this->current)) {
            if (null !== ($val = $this->current->getValue())) {
                $out->current = $val;
            }
            $ext = $this->current->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_current = $ext;
            }
        }
        if (isset($this->resultForDelete)) {
            if (null !== ($val = $this->resultForDelete->getValue())) {
                $out->resultForDelete = $val;
            }
            $ext = $this->resultForDelete->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_resultForDelete = $ext;
            }
        }
        if (isset($this->requireBoth)) {
            if (null !== ($val = $this->requireBoth->getValue())) {
                $out->requireBoth = $val;
            }
            $ext = $this->requireBoth->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_requireBoth = $ext;
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