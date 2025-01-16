<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:25+0000
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
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive;
use DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlWriter;

/**
 * Describes a stream of resource state changes or events and annotated with labels
 * useful to filter projections from this topic.
 *
 * Class FHIRSubscriptionTopicQueryCriteria
 * @package \DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic
 */
class FHIRSubscriptionTopicQueryCriteria extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA;

    const FIELD_PREVIOUS = 'previous';
    const FIELD_PREVIOUS_EXT = '_previous';
    const FIELD_RESULT_FOR_CREATE = 'resultForCreate';
    const FIELD_RESULT_FOR_CREATE_EXT = '_resultForCreate';
    const FIELD_CURRENT = 'current';
    const FIELD_CURRENT_EXT = '_current';
    const FIELD_RESULT_FOR_DELETE = 'resultForDelete';
    const FIELD_RESULT_FOR_DELETE_EXT = '_resultForDelete';
    const FIELD_REQUIRE_BOTH = 'requireBoth';
    const FIELD_REQUIRE_BOTH_EXT = '_requireBoth';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the previous resource state (e.g.,
     * state before an update).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $previous = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For `create` interactions, should the `previous` criteria count as an automatic
     * pass or an automatic fail. If not present, the testing behavior during `create`
     * interactions is unspecified (server discretion).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    protected null|FHIRCriteriaNotExistsBehavior $resultForCreate = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the current resource state (e.g.,
     * state after an update).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    protected null|FHIRString $current = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For 'delete' interactions, should the 'current' query criteria count as an
     * automatic pass or an automatic fail. If not present, the testing behavior during
     * `delete` interactions is unspecified (server discretion).
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    protected null|FHIRCriteriaNotExistsBehavior $resultForDelete = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to `true`, both the `current` and `previous` query criteria must evaluate
     * `true` to trigger a notification for this topic. If set to `false` or not
     * present, a notification for this topic will be triggered if either the `current`
     * or `previous` tests evaluate to `true`.
     * @var null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $requireBoth = null;

    /**
     * Validation map for fields in type SubscriptionTopic.QueryCriteria
     * @var array
     */
    private const _VALIDATION_RULES = [];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRSubscriptionTopicQueryCriteria Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_PREVIOUS, $data) || array_key_exists(self::FIELD_PREVIOUS_EXT, $data)) {
            $value = $data[self::FIELD_PREVIOUS] ?? null;
            $ext = (isset($data[self::FIELD_PREVIOUS_EXT]) && is_array($data[self::FIELD_PREVIOUS_EXT])) ? $data[self::FIELD_PREVIOUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPrevious($value);
                } else if (is_array($value)) {
                    $this->setPrevious(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPrevious(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrevious(new FHIRString($ext));
            } else {
                $this->setPrevious(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_RESULT_FOR_CREATE, $data) || array_key_exists(self::FIELD_RESULT_FOR_CREATE_EXT, $data)) {
            $value = $data[self::FIELD_RESULT_FOR_CREATE] ?? null;
            $ext = (isset($data[self::FIELD_RESULT_FOR_CREATE_EXT]) && is_array($data[self::FIELD_RESULT_FOR_CREATE_EXT])) ? $data[self::FIELD_RESULT_FOR_CREATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCriteriaNotExistsBehavior) {
                    $this->setResultForCreate($value);
                } else if (is_array($value)) {
                    $this->setResultForCreate(new FHIRCriteriaNotExistsBehavior(array_merge($ext, $value)));
                } else {
                    $this->setResultForCreate(new FHIRCriteriaNotExistsBehavior([FHIRCriteriaNotExistsBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResultForCreate(new FHIRCriteriaNotExistsBehavior($ext));
            } else {
                $this->setResultForCreate(new FHIRCriteriaNotExistsBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_CURRENT, $data) || array_key_exists(self::FIELD_CURRENT_EXT, $data)) {
            $value = $data[self::FIELD_CURRENT] ?? null;
            $ext = (isset($data[self::FIELD_CURRENT_EXT]) && is_array($data[self::FIELD_CURRENT_EXT])) ? $data[self::FIELD_CURRENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCurrent($value);
                } else if (is_array($value)) {
                    $this->setCurrent(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCurrent(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCurrent(new FHIRString($ext));
            } else {
                $this->setCurrent(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_RESULT_FOR_DELETE, $data) || array_key_exists(self::FIELD_RESULT_FOR_DELETE_EXT, $data)) {
            $value = $data[self::FIELD_RESULT_FOR_DELETE] ?? null;
            $ext = (isset($data[self::FIELD_RESULT_FOR_DELETE_EXT]) && is_array($data[self::FIELD_RESULT_FOR_DELETE_EXT])) ? $data[self::FIELD_RESULT_FOR_DELETE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCriteriaNotExistsBehavior) {
                    $this->setResultForDelete($value);
                } else if (is_array($value)) {
                    $this->setResultForDelete(new FHIRCriteriaNotExistsBehavior(array_merge($ext, $value)));
                } else {
                    $this->setResultForDelete(new FHIRCriteriaNotExistsBehavior([FHIRCriteriaNotExistsBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResultForDelete(new FHIRCriteriaNotExistsBehavior($ext));
            } else {
                $this->setResultForDelete(new FHIRCriteriaNotExistsBehavior(null));
            }
        }
        if (array_key_exists(self::FIELD_REQUIRE_BOTH, $data) || array_key_exists(self::FIELD_REQUIRE_BOTH_EXT, $data)) {
            $value = $data[self::FIELD_REQUIRE_BOTH] ?? null;
            $ext = (isset($data[self::FIELD_REQUIRE_BOTH_EXT]) && is_array($data[self::FIELD_REQUIRE_BOTH_EXT])) ? $data[self::FIELD_REQUIRE_BOTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setRequireBoth($value);
                } else if (is_array($value)) {
                    $this->setRequireBoth(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setRequireBoth(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequireBoth(new FHIRBoolean($ext));
            } else {
                $this->setRequireBoth(new FHIRBoolean(null));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the previous resource state (e.g.,
     * state before an update).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getPrevious(): null|FHIRString
    {
        return $this->previous;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the previous resource state (e.g.,
     * state before an update).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $previous
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setPrevious(null|string|FHIRStringPrimitive|FHIRString $previous = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $previous && !($previous instanceof FHIRString)) {
            $previous = new FHIRString($previous);
        }
        $this->_trackValueSet($this->previous, $previous);
        if (!isset($this->_xmlLocations[self::FIELD_PREVIOUS])) {
            $this->_xmlLocations[self::FIELD_PREVIOUS] = [];
        }
        $this->_xmlLocations[self::FIELD_PREVIOUS][0] = $xmlLocation;
        $this->previous = $previous;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For `create` interactions, should the `previous` criteria count as an automatic
     * pass or an automatic fail. If not present, the testing behavior during `create`
     * interactions is unspecified (server discretion).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    public function getResultForCreate(): null|FHIRCriteriaNotExistsBehavior
    {
        return $this->resultForCreate;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For `create` interactions, should the `previous` criteria count as an automatic
     * pass or an automatic fail. If not present, the testing behavior during `create`
     * interactions is unspecified (server discretion).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior $resultForCreate
     * @return static
     */
    public function setResultForCreate(null|FHIRCriteriaNotExistsBehavior $resultForCreate = null): self
    {
        if (null === $resultForCreate) {
            $resultForCreate = new FHIRCriteriaNotExistsBehavior();
        }
        $this->_trackValueSet($this->resultForCreate, $resultForCreate);
        $this->resultForCreate = $resultForCreate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the current resource state (e.g.,
     * state after an update).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString
     */
    public function getCurrent(): null|FHIRString
    {
        return $this->current;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1,048,576 (1024*1024) characters in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR query based rules are applied to the current resource state (e.g.,
     * state after an update).
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\R5\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRString $current
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setCurrent(null|string|FHIRStringPrimitive|FHIRString $current = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $current && !($current instanceof FHIRString)) {
            $current = new FHIRString($current);
        }
        $this->_trackValueSet($this->current, $current);
        if (!isset($this->_xmlLocations[self::FIELD_CURRENT])) {
            $this->_xmlLocations[self::FIELD_CURRENT] = [];
        }
        $this->_xmlLocations[self::FIELD_CURRENT][0] = $xmlLocation;
        $this->current = $current;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For 'delete' interactions, should the 'current' query criteria count as an
     * automatic pass or an automatic fail. If not present, the testing behavior during
     * `delete` interactions is unspecified (server discretion).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior
     */
    public function getResultForDelete(): null|FHIRCriteriaNotExistsBehavior
    {
        return $this->resultForDelete;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For 'delete' interactions, should the 'current' query criteria count as an
     * automatic pass or an automatic fail. If not present, the testing behavior during
     * `delete` interactions is unspecified (server discretion).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRCriteriaNotExistsBehavior $resultForDelete
     * @return static
     */
    public function setResultForDelete(null|FHIRCriteriaNotExistsBehavior $resultForDelete = null): self
    {
        if (null === $resultForDelete) {
            $resultForDelete = new FHIRCriteriaNotExistsBehavior();
        }
        $this->_trackValueSet($this->resultForDelete, $resultForDelete);
        $this->resultForDelete = $resultForDelete;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to `true`, both the `current` and `previous` query criteria must evaluate
     * `true` to trigger a notification for this topic. If set to `false` or not
     * present, a notification for this topic will be triggered if either the `current`
     * or `previous` tests evaluate to `true`.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean
     */
    public function getRequireBoth(): null|FHIRBoolean
    {
        return $this->requireBoth;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If set to `true`, both the `current` and `previous` query criteria must evaluate
     * `true` to trigger a notification for this topic. If set to `false` or not
     * present, a notification for this topic will be triggered if either the `current`
     * or `previous` tests evaluate to `true`.
     *
     * @param null|string|bool|\DCarbone\PHPFHIRGenerated\R5\FHIRBooleanPrimitive|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBoolean $requireBoth
     * @param \DCarbone\PHPFHIRGenerated\R5\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setRequireBoth(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $requireBoth = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $requireBoth && !($requireBoth instanceof FHIRBoolean)) {
            $requireBoth = new FHIRBoolean($requireBoth);
        }
        $this->_trackValueSet($this->requireBoth, $requireBoth);
        if (!isset($this->_xmlLocations[self::FIELD_REQUIRE_BOTH])) {
            $this->_xmlLocations[self::FIELD_REQUIRE_BOTH] = [];
        }
        $this->_xmlLocations[self::FIELD_REQUIRE_BOTH][0] = $xmlLocation;
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
        if (null !== ($v = $this->getPrevious())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREVIOUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResultForCreate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESULT_FOR_CREATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCurrent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CURRENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResultForDelete())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESULT_FOR_DELETE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequireBoth())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIRE_BOTH] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PREVIOUS])) {
            $v = $this->getPrevious();
            foreach($validationRules[self::FIELD_PREVIOUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_PREVIOUS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_RESULT_FOR_CREATE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_CURRENT, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_RESULT_FOR_DELETE, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_QUERY_CRITERIA, self::FIELD_REQUIRE_BOTH, $rule, $constraint, $v);
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
     * @param null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\R5\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\R5\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria
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
        } else if (!($type instanceof FHIRSubscriptionTopicQueryCriteria)) {
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
            if (self::FIELD_PREVIOUS === $childName) {
                $type->setPrevious(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RESULT_FOR_CREATE === $childName) {
                $type->setResultForCreate(FHIRCriteriaNotExistsBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_CURRENT === $childName) {
                $type->setCurrent(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_RESULT_FOR_DELETE === $childName) {
                $type->setResultForDelete(FHIRCriteriaNotExistsBehavior::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_REQUIRE_BOTH === $childName) {
                $type->setRequireBoth(FHIRBoolean::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_PREVIOUS])) {
            $pt = $type->getPrevious();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PREVIOUS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setPrevious((string)$attributes[self::FIELD_PREVIOUS], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_CURRENT])) {
            $pt = $type->getCurrent();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CURRENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setCurrent((string)$attributes[self::FIELD_CURRENT], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_REQUIRE_BOTH])) {
            $pt = $type->getRequireBoth();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_REQUIRE_BOTH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setRequireBoth((string)$attributes[self::FIELD_REQUIRE_BOTH], PHPFHIRXmlLocationEnum::ATTRIBUTE);
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
            $xw->openRootNode($config, 'SubscriptionTopicQueryCriteria', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_PREVIOUS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getPrevious())) {
            $xw->writeAttribute(self::FIELD_PREVIOUS, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_CURRENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getCurrent())) {
            $xw->writeAttribute(self::FIELD_CURRENT, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_REQUIRE_BOTH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getRequireBoth())) {
            $xw->writeAttribute(self::FIELD_REQUIRE_BOTH, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        $locs = $this->_xmlLocations[self::FIELD_PREVIOUS] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getPrevious())) {
            $xw->startElement(self::FIELD_PREVIOUS);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getResultForCreate())) {
            $xw->startElement(self::FIELD_RESULT_FOR_CREATE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_CURRENT] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getCurrent())) {
            $xw->startElement(self::FIELD_CURRENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getResultForDelete())) {
            $xw->startElement(self::FIELD_RESULT_FOR_DELETE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_REQUIRE_BOTH] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getRequireBoth())) {
            $xw->startElement(self::FIELD_REQUIRE_BOTH);
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
        if (null !== ($v = $this->getPrevious())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PREVIOUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREVIOUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResultForCreate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESULT_FOR_CREATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCriteriaNotExistsBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESULT_FOR_CREATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCurrent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CURRENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CURRENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResultForDelete())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESULT_FOR_DELETE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCriteriaNotExistsBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESULT_FOR_DELETE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequireBoth())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIRE_BOTH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIRE_BOTH_EXT} = $ext;
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