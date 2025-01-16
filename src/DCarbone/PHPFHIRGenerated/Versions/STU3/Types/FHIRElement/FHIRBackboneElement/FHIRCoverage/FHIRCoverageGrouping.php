<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage;

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
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
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
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Version;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Financial instrument which may be used to reimburse or pay for health care
 * products and services.
 */
class FHIRCoverageGrouping extends FHIRBackboneElement
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_COVERAGE_DOT_GROUPING;


    public const FIELD_GROUP = 'group';
    public const FIELD_GROUP_EXT = '_group';
    public const FIELD_GROUP_DISPLAY = 'groupDisplay';
    public const FIELD_GROUP_DISPLAY_EXT = '_groupDisplay';
    public const FIELD_SUB_GROUP = 'subGroup';
    public const FIELD_SUB_GROUP_EXT = '_subGroup';
    public const FIELD_SUB_GROUP_DISPLAY = 'subGroupDisplay';
    public const FIELD_SUB_GROUP_DISPLAY_EXT = '_subGroupDisplay';
    public const FIELD_PLAN = 'plan';
    public const FIELD_PLAN_EXT = '_plan';
    public const FIELD_PLAN_DISPLAY = 'planDisplay';
    public const FIELD_PLAN_DISPLAY_EXT = '_planDisplay';
    public const FIELD_SUB_PLAN = 'subPlan';
    public const FIELD_SUB_PLAN_EXT = '_subPlan';
    public const FIELD_SUB_PLAN_DISPLAY = 'subPlanDisplay';
    public const FIELD_SUB_PLAN_DISPLAY_EXT = '_subPlanDisplay';
    public const FIELD_CLASS = 'class';
    public const FIELD_CLASS_EXT = '_class';
    public const FIELD_CLASS_DISPLAY = 'classDisplay';
    public const FIELD_CLASS_DISPLAY_EXT = '_classDisplay';
    public const FIELD_SUB_CLASS = 'subClass';
    public const FIELD_SUB_CLASS_EXT = '_subClass';
    public const FIELD_SUB_CLASS_DISPLAY = 'subClassDisplay';
    public const FIELD_SUB_CLASS_DISPLAY_EXT = '_subClassDisplay';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $group;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $groupDisplay;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $subGroup;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subgroup.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $subGroupDisplay;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $plan;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the plan.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $planDisplay;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $subPlan;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subplan.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $subPlanDisplay;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $class;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the class.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $classDisplay;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $subClass;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subclass.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $subClassDisplay;

    /** Default validation map for fields in type Coverage.Grouping */
    private const _DEFAULT_VALIDATION_RULES = [];

    /**
     * FHIRCoverageGrouping Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $group
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $groupDisplay
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subGroup
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subGroupDisplay
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $plan
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $planDisplay
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subPlan
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subPlanDisplay
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $class
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $classDisplay
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subClass
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subClassDisplay
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRStringPrimitive|FHIRString $group = null,
                                null|string|FHIRStringPrimitive|FHIRString $groupDisplay = null,
                                null|string|FHIRStringPrimitive|FHIRString $subGroup = null,
                                null|string|FHIRStringPrimitive|FHIRString $subGroupDisplay = null,
                                null|string|FHIRStringPrimitive|FHIRString $plan = null,
                                null|string|FHIRStringPrimitive|FHIRString $planDisplay = null,
                                null|string|FHIRStringPrimitive|FHIRString $subPlan = null,
                                null|string|FHIRStringPrimitive|FHIRString $subPlanDisplay = null,
                                null|string|FHIRStringPrimitive|FHIRString $class = null,
                                null|string|FHIRStringPrimitive|FHIRString $classDisplay = null,
                                null|string|FHIRStringPrimitive|FHIRString $subClass = null,
                                null|string|FHIRStringPrimitive|FHIRString $subClassDisplay = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $group) {
            $this->setGroup($group);
        }
        if (null !== $groupDisplay) {
            $this->setGroupDisplay($groupDisplay);
        }
        if (null !== $subGroup) {
            $this->setSubGroup($subGroup);
        }
        if (null !== $subGroupDisplay) {
            $this->setSubGroupDisplay($subGroupDisplay);
        }
        if (null !== $plan) {
            $this->setPlan($plan);
        }
        if (null !== $planDisplay) {
            $this->setPlanDisplay($planDisplay);
        }
        if (null !== $subPlan) {
            $this->setSubPlan($subPlan);
        }
        if (null !== $subPlanDisplay) {
            $this->setSubPlanDisplay($subPlanDisplay);
        }
        if (null !== $class) {
            $this->setClass($class);
        }
        if (null !== $classDisplay) {
            $this->setClassDisplay($classDisplay);
        }
        if (null !== $subClass) {
            $this->setSubClass($subClass);
        }
        if (null !== $subClassDisplay) {
            $this->setSubClassDisplay($subClassDisplay);
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
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getGroup(): null|FHIRString
    {
        return $this->group ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $group
     * @return static
     */
    public function setGroup(null|string|FHIRStringPrimitive|FHIRString $group): self
    {
        if (null === $group) {
            unset($this->group);
            return $this;
        }
        if (!($group instanceof FHIRString)) {
            $group = new FHIRString(value: $group);
        }
        $this->group = $group;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getGroupDisplay(): null|FHIRString
    {
        return $this->groupDisplay ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the group.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $groupDisplay
     * @return static
     */
    public function setGroupDisplay(null|string|FHIRStringPrimitive|FHIRString $groupDisplay): self
    {
        if (null === $groupDisplay) {
            unset($this->groupDisplay);
            return $this;
        }
        if (!($groupDisplay instanceof FHIRString)) {
            $groupDisplay = new FHIRString(value: $groupDisplay);
        }
        $this->groupDisplay = $groupDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getSubGroup(): null|FHIRString
    {
        return $this->subGroup ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subGroup
     * @return static
     */
    public function setSubGroup(null|string|FHIRStringPrimitive|FHIRString $subGroup): self
    {
        if (null === $subGroup) {
            unset($this->subGroup);
            return $this;
        }
        if (!($subGroup instanceof FHIRString)) {
            $subGroup = new FHIRString(value: $subGroup);
        }
        $this->subGroup = $subGroup;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subgroup.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getSubGroupDisplay(): null|FHIRString
    {
        return $this->subGroupDisplay ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subgroup.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subGroupDisplay
     * @return static
     */
    public function setSubGroupDisplay(null|string|FHIRStringPrimitive|FHIRString $subGroupDisplay): self
    {
        if (null === $subGroupDisplay) {
            unset($this->subGroupDisplay);
            return $this;
        }
        if (!($subGroupDisplay instanceof FHIRString)) {
            $subGroupDisplay = new FHIRString(value: $subGroupDisplay);
        }
        $this->subGroupDisplay = $subGroupDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getPlan(): null|FHIRString
    {
        return $this->plan ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $plan
     * @return static
     */
    public function setPlan(null|string|FHIRStringPrimitive|FHIRString $plan): self
    {
        if (null === $plan) {
            unset($this->plan);
            return $this;
        }
        if (!($plan instanceof FHIRString)) {
            $plan = new FHIRString(value: $plan);
        }
        $this->plan = $plan;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getPlanDisplay(): null|FHIRString
    {
        return $this->planDisplay ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the plan.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $planDisplay
     * @return static
     */
    public function setPlanDisplay(null|string|FHIRStringPrimitive|FHIRString $planDisplay): self
    {
        if (null === $planDisplay) {
            unset($this->planDisplay);
            return $this;
        }
        if (!($planDisplay instanceof FHIRString)) {
            $planDisplay = new FHIRString(value: $planDisplay);
        }
        $this->planDisplay = $planDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getSubPlan(): null|FHIRString
    {
        return $this->subPlan ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subPlan
     * @return static
     */
    public function setSubPlan(null|string|FHIRStringPrimitive|FHIRString $subPlan): self
    {
        if (null === $subPlan) {
            unset($this->subPlan);
            return $this;
        }
        if (!($subPlan instanceof FHIRString)) {
            $subPlan = new FHIRString(value: $subPlan);
        }
        $this->subPlan = $subPlan;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subplan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getSubPlanDisplay(): null|FHIRString
    {
        return $this->subPlanDisplay ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subplan.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subPlanDisplay
     * @return static
     */
    public function setSubPlanDisplay(null|string|FHIRStringPrimitive|FHIRString $subPlanDisplay): self
    {
        if (null === $subPlanDisplay) {
            unset($this->subPlanDisplay);
            return $this;
        }
        if (!($subPlanDisplay instanceof FHIRString)) {
            $subPlanDisplay = new FHIRString(value: $subPlanDisplay);
        }
        $this->subPlanDisplay = $subPlanDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getClass(): null|FHIRString
    {
        return $this->class ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $class
     * @return static
     */
    public function setClass(null|string|FHIRStringPrimitive|FHIRString $class): self
    {
        if (null === $class) {
            unset($this->class);
            return $this;
        }
        if (!($class instanceof FHIRString)) {
            $class = new FHIRString(value: $class);
        }
        $this->class = $class;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the class.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getClassDisplay(): null|FHIRString
    {
        return $this->classDisplay ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the class.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $classDisplay
     * @return static
     */
    public function setClassDisplay(null|string|FHIRStringPrimitive|FHIRString $classDisplay): self
    {
        if (null === $classDisplay) {
            unset($this->classDisplay);
            return $this;
        }
        if (!($classDisplay instanceof FHIRString)) {
            $classDisplay = new FHIRString(value: $classDisplay);
        }
        $this->classDisplay = $classDisplay;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getSubClass(): null|FHIRString
    {
        return $this->subClass ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subClass
     * @return static
     */
    public function setSubClass(null|string|FHIRStringPrimitive|FHIRString $subClass): self
    {
        if (null === $subClass) {
            unset($this->subClass);
            return $this;
        }
        if (!($subClass instanceof FHIRString)) {
            $subClass = new FHIRString(value: $subClass);
        }
        $this->subClass = $subClass;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subclass.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString
     */
    public function getSubClassDisplay(): null|FHIRString
    {
        return $this->subClassDisplay ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subclass.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString $subClassDisplay
     * @return static
     */
    public function setSubClassDisplay(null|string|FHIRStringPrimitive|FHIRString $subClassDisplay): self
    {
        if (null === $subClassDisplay) {
            unset($this->subClassDisplay);
            return $this;
        }
        if (!($subClassDisplay instanceof FHIRString)) {
            $subClassDisplay = new FHIRString(value: $subClassDisplay);
        }
        $this->subClassDisplay = $subClassDisplay;
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
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP])) {
                        $errs[self::FIELD_GROUP] = [];
                    }
                    $errs[self::FIELD_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP_DISPLAY])) {
            $v = $this->getGroupDisplay();
            foreach($validationRules[self::FIELD_GROUP_DISPLAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_GROUP_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP_DISPLAY])) {
                        $errs[self::FIELD_GROUP_DISPLAY] = [];
                    }
                    $errs[self::FIELD_GROUP_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_GROUP])) {
            $v = $this->getSubGroup();
            foreach($validationRules[self::FIELD_SUB_GROUP] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUB_GROUP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_GROUP])) {
                        $errs[self::FIELD_SUB_GROUP] = [];
                    }
                    $errs[self::FIELD_SUB_GROUP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_GROUP_DISPLAY])) {
            $v = $this->getSubGroupDisplay();
            foreach($validationRules[self::FIELD_SUB_GROUP_DISPLAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUB_GROUP_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_GROUP_DISPLAY])) {
                        $errs[self::FIELD_SUB_GROUP_DISPLAY] = [];
                    }
                    $errs[self::FIELD_SUB_GROUP_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLAN])) {
            $v = $this->getPlan();
            foreach($validationRules[self::FIELD_PLAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLAN])) {
                        $errs[self::FIELD_PLAN] = [];
                    }
                    $errs[self::FIELD_PLAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLAN_DISPLAY])) {
            $v = $this->getPlanDisplay();
            foreach($validationRules[self::FIELD_PLAN_DISPLAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PLAN_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLAN_DISPLAY])) {
                        $errs[self::FIELD_PLAN_DISPLAY] = [];
                    }
                    $errs[self::FIELD_PLAN_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_PLAN])) {
            $v = $this->getSubPlan();
            foreach($validationRules[self::FIELD_SUB_PLAN] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUB_PLAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_PLAN])) {
                        $errs[self::FIELD_SUB_PLAN] = [];
                    }
                    $errs[self::FIELD_SUB_PLAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_PLAN_DISPLAY])) {
            $v = $this->getSubPlanDisplay();
            foreach($validationRules[self::FIELD_SUB_PLAN_DISPLAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUB_PLAN_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_PLAN_DISPLAY])) {
                        $errs[self::FIELD_SUB_PLAN_DISPLAY] = [];
                    }
                    $errs[self::FIELD_SUB_PLAN_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS])) {
                        $errs[self::FIELD_CLASS] = [];
                    }
                    $errs[self::FIELD_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASS_DISPLAY])) {
            $v = $this->getClassDisplay();
            foreach($validationRules[self::FIELD_CLASS_DISPLAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CLASS_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS_DISPLAY])) {
                        $errs[self::FIELD_CLASS_DISPLAY] = [];
                    }
                    $errs[self::FIELD_CLASS_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_CLASS])) {
            $v = $this->getSubClass();
            foreach($validationRules[self::FIELD_SUB_CLASS] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUB_CLASS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_CLASS])) {
                        $errs[self::FIELD_SUB_CLASS] = [];
                    }
                    $errs[self::FIELD_SUB_CLASS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_CLASS_DISPLAY])) {
            $v = $this->getSubClassDisplay();
            foreach($validationRules[self::FIELD_SUB_CLASS_DISPLAY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUB_CLASS_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_CLASS_DISPLAY])) {
                        $errs[self::FIELD_SUB_CLASS_DISPLAY] = [];
                    }
                    $errs[self::FIELD_SUB_CLASS_DISPLAY][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|TypeInterface $type = null,
                                          null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCoverageGrouping)) {
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
            } else if (self::FIELD_GROUP === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setGroup(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_GROUP_DISPLAY === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setGroupDisplay(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUB_GROUP === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSubGroup(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUB_GROUP_DISPLAY === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSubGroupDisplay(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PLAN === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPlan(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_PLAN_DISPLAY === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setPlanDisplay(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUB_PLAN === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSubPlan(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUB_PLAN_DISPLAY === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSubPlanDisplay(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLASS === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setClass(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_CLASS_DISPLAY === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setClassDisplay(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUB_CLASS === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSubClass(FHIRString::xmlUnserialize($n, $v, $config));
            } else if (self::FIELD_SUB_CLASS_DISPLAY === $childName) {
                $v = new FHIRString(xmlLocation: XMLLocationEnum::ELEMENT);
                $type->setSubClassDisplay(FHIRString::xmlUnserialize($n, $v, $config));
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
        if (isset($attributes[self::FIELD_GROUP])) {
            $pt = $type->getGroup();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_GROUP]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setGroup(new FHIRString(
                    value: (string)$attributes[self::FIELD_GROUP],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_GROUP_DISPLAY])) {
            $pt = $type->getGroupDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_GROUP_DISPLAY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setGroupDisplay(new FHIRString(
                    value: (string)$attributes[self::FIELD_GROUP_DISPLAY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUB_GROUP])) {
            $pt = $type->getSubGroup();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUB_GROUP]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubGroup(new FHIRString(
                    value: (string)$attributes[self::FIELD_SUB_GROUP],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUB_GROUP_DISPLAY])) {
            $pt = $type->getSubGroupDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUB_GROUP_DISPLAY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubGroupDisplay(new FHIRString(
                    value: (string)$attributes[self::FIELD_SUB_GROUP_DISPLAY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PLAN])) {
            $pt = $type->getPlan();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PLAN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPlan(new FHIRString(
                    value: (string)$attributes[self::FIELD_PLAN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_PLAN_DISPLAY])) {
            $pt = $type->getPlanDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_PLAN_DISPLAY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setPlanDisplay(new FHIRString(
                    value: (string)$attributes[self::FIELD_PLAN_DISPLAY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUB_PLAN])) {
            $pt = $type->getSubPlan();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUB_PLAN]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubPlan(new FHIRString(
                    value: (string)$attributes[self::FIELD_SUB_PLAN],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUB_PLAN_DISPLAY])) {
            $pt = $type->getSubPlanDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUB_PLAN_DISPLAY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubPlanDisplay(new FHIRString(
                    value: (string)$attributes[self::FIELD_SUB_PLAN_DISPLAY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CLASS])) {
            $pt = $type->getClass();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CLASS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setClass(new FHIRString(
                    value: (string)$attributes[self::FIELD_CLASS],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_CLASS_DISPLAY])) {
            $pt = $type->getClassDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_CLASS_DISPLAY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setClassDisplay(new FHIRString(
                    value: (string)$attributes[self::FIELD_CLASS_DISPLAY],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUB_CLASS])) {
            $pt = $type->getSubClass();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUB_CLASS]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubClass(new FHIRString(
                    value: (string)$attributes[self::FIELD_SUB_CLASS],
                    xmlLocation: XMLLocationEnum::ATTRIBUTE,
                ));
            }
        }
        if (isset($attributes[self::FIELD_SUB_CLASS_DISPLAY])) {
            $pt = $type->getSubClassDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_SUB_CLASS_DISPLAY]);
                $pt->_setXMLLocation(XMLLocationEnum::ATTRIBUTE);
            } else {
                $type->setSubClassDisplay(new FHIRString(
                    value: (string)$attributes[self::FIELD_SUB_CLASS_DISPLAY],
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
            $xw->openRootNode($config, 'CoverageGrouping', $this->_getSourceXMLNS());
        }
        if (isset($this->group) && $this->group->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_GROUP, $this->group->getValue()?->getFormattedValue());
        }
        if (isset($this->groupDisplay) && $this->groupDisplay->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_GROUP_DISPLAY, $this->groupDisplay->getValue()?->getFormattedValue());
        }
        if (isset($this->subGroup) && $this->subGroup->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUB_GROUP, $this->subGroup->getValue()?->getFormattedValue());
        }
        if (isset($this->subGroupDisplay) && $this->subGroupDisplay->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUB_GROUP_DISPLAY, $this->subGroupDisplay->getValue()?->getFormattedValue());
        }
        if (isset($this->plan) && $this->plan->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PLAN, $this->plan->getValue()?->getFormattedValue());
        }
        if (isset($this->planDisplay) && $this->planDisplay->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_PLAN_DISPLAY, $this->planDisplay->getValue()?->getFormattedValue());
        }
        if (isset($this->subPlan) && $this->subPlan->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUB_PLAN, $this->subPlan->getValue()?->getFormattedValue());
        }
        if (isset($this->subPlanDisplay) && $this->subPlanDisplay->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUB_PLAN_DISPLAY, $this->subPlanDisplay->getValue()?->getFormattedValue());
        }
        if (isset($this->class) && $this->class->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CLASS, $this->class->getValue()?->getFormattedValue());
        }
        if (isset($this->classDisplay) && $this->classDisplay->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_CLASS_DISPLAY, $this->classDisplay->getValue()?->getFormattedValue());
        }
        if (isset($this->subClass) && $this->subClass->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUB_CLASS, $this->subClass->getValue()?->getFormattedValue());
        }
        if (isset($this->subClassDisplay) && $this->subClassDisplay->_getXMLLocation() === XMLLocationEnum::ATTRIBUTE) {
            $xw->writeAttribute(self::FIELD_SUB_CLASS_DISPLAY, $this->subClassDisplay->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->group) && $this->group->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_GROUP);
            $this->group->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->groupDisplay) && $this->groupDisplay->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_GROUP_DISPLAY);
            $this->groupDisplay->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subGroup) && $this->subGroup->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUB_GROUP);
            $this->subGroup->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subGroupDisplay) && $this->subGroupDisplay->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUB_GROUP_DISPLAY);
            $this->subGroupDisplay->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->plan) && $this->plan->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PLAN);
            $this->plan->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->planDisplay) && $this->planDisplay->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_PLAN_DISPLAY);
            $this->planDisplay->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subPlan) && $this->subPlan->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUB_PLAN);
            $this->subPlan->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subPlanDisplay) && $this->subPlanDisplay->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUB_PLAN_DISPLAY);
            $this->subPlanDisplay->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->class) && $this->class->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CLASS);
            $this->class->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->classDisplay) && $this->classDisplay->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_CLASS_DISPLAY);
            $this->classDisplay->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subClass) && $this->subClass->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUB_CLASS);
            $this->subClass->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subClassDisplay) && $this->subClassDisplay->_getXMLLocation() === XMLLocationEnum::ELEMENT) {
            $xw->startElement(self::FIELD_SUB_CLASS_DISPLAY);
            $this->subClassDisplay->xmlSerialize($xw, $config);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping $type
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     * @throws \Exception
     */
    public static function jsonUnserialize(string|array|\stdClass $json,
                                           null|TypeInterface $type = null,
                                           null|UnserializeConfig $config = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRCoverageGrouping)) {
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
        if (isset($json[self::FIELD_GROUP]) || isset($json[self::FIELD_GROUP_EXT]) || array_key_exists(self::FIELD_GROUP, $json) || array_key_exists(self::FIELD_GROUP_EXT, $json)) {
            $value = $json[self::FIELD_GROUP] ?? null;
            $ext = (isset($json[self::FIELD_GROUP_EXT]) && is_array($json[self::FIELD_GROUP_EXT])) ? $json[self::FIELD_GROUP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setGroup($value);
                } else if (is_array($value)) {
                    $type->setGroup(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setGroup(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setGroup(new FHIRString($ext));
            } else {
                $type->setGroup(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_GROUP_DISPLAY]) || isset($json[self::FIELD_GROUP_DISPLAY_EXT]) || array_key_exists(self::FIELD_GROUP_DISPLAY, $json) || array_key_exists(self::FIELD_GROUP_DISPLAY_EXT, $json)) {
            $value = $json[self::FIELD_GROUP_DISPLAY] ?? null;
            $ext = (isset($json[self::FIELD_GROUP_DISPLAY_EXT]) && is_array($json[self::FIELD_GROUP_DISPLAY_EXT])) ? $json[self::FIELD_GROUP_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setGroupDisplay($value);
                } else if (is_array($value)) {
                    $type->setGroupDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setGroupDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setGroupDisplay(new FHIRString($ext));
            } else {
                $type->setGroupDisplay(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SUB_GROUP]) || isset($json[self::FIELD_SUB_GROUP_EXT]) || array_key_exists(self::FIELD_SUB_GROUP, $json) || array_key_exists(self::FIELD_SUB_GROUP_EXT, $json)) {
            $value = $json[self::FIELD_SUB_GROUP] ?? null;
            $ext = (isset($json[self::FIELD_SUB_GROUP_EXT]) && is_array($json[self::FIELD_SUB_GROUP_EXT])) ? $json[self::FIELD_SUB_GROUP_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSubGroup($value);
                } else if (is_array($value)) {
                    $type->setSubGroup(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSubGroup(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubGroup(new FHIRString($ext));
            } else {
                $type->setSubGroup(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SUB_GROUP_DISPLAY]) || isset($json[self::FIELD_SUB_GROUP_DISPLAY_EXT]) || array_key_exists(self::FIELD_SUB_GROUP_DISPLAY, $json) || array_key_exists(self::FIELD_SUB_GROUP_DISPLAY_EXT, $json)) {
            $value = $json[self::FIELD_SUB_GROUP_DISPLAY] ?? null;
            $ext = (isset($json[self::FIELD_SUB_GROUP_DISPLAY_EXT]) && is_array($json[self::FIELD_SUB_GROUP_DISPLAY_EXT])) ? $json[self::FIELD_SUB_GROUP_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSubGroupDisplay($value);
                } else if (is_array($value)) {
                    $type->setSubGroupDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSubGroupDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubGroupDisplay(new FHIRString($ext));
            } else {
                $type->setSubGroupDisplay(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PLAN]) || isset($json[self::FIELD_PLAN_EXT]) || array_key_exists(self::FIELD_PLAN, $json) || array_key_exists(self::FIELD_PLAN_EXT, $json)) {
            $value = $json[self::FIELD_PLAN] ?? null;
            $ext = (isset($json[self::FIELD_PLAN_EXT]) && is_array($json[self::FIELD_PLAN_EXT])) ? $json[self::FIELD_PLAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPlan($value);
                } else if (is_array($value)) {
                    $type->setPlan(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPlan(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPlan(new FHIRString($ext));
            } else {
                $type->setPlan(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_PLAN_DISPLAY]) || isset($json[self::FIELD_PLAN_DISPLAY_EXT]) || array_key_exists(self::FIELD_PLAN_DISPLAY, $json) || array_key_exists(self::FIELD_PLAN_DISPLAY_EXT, $json)) {
            $value = $json[self::FIELD_PLAN_DISPLAY] ?? null;
            $ext = (isset($json[self::FIELD_PLAN_DISPLAY_EXT]) && is_array($json[self::FIELD_PLAN_DISPLAY_EXT])) ? $json[self::FIELD_PLAN_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setPlanDisplay($value);
                } else if (is_array($value)) {
                    $type->setPlanDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setPlanDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setPlanDisplay(new FHIRString($ext));
            } else {
                $type->setPlanDisplay(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SUB_PLAN]) || isset($json[self::FIELD_SUB_PLAN_EXT]) || array_key_exists(self::FIELD_SUB_PLAN, $json) || array_key_exists(self::FIELD_SUB_PLAN_EXT, $json)) {
            $value = $json[self::FIELD_SUB_PLAN] ?? null;
            $ext = (isset($json[self::FIELD_SUB_PLAN_EXT]) && is_array($json[self::FIELD_SUB_PLAN_EXT])) ? $json[self::FIELD_SUB_PLAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSubPlan($value);
                } else if (is_array($value)) {
                    $type->setSubPlan(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSubPlan(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubPlan(new FHIRString($ext));
            } else {
                $type->setSubPlan(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SUB_PLAN_DISPLAY]) || isset($json[self::FIELD_SUB_PLAN_DISPLAY_EXT]) || array_key_exists(self::FIELD_SUB_PLAN_DISPLAY, $json) || array_key_exists(self::FIELD_SUB_PLAN_DISPLAY_EXT, $json)) {
            $value = $json[self::FIELD_SUB_PLAN_DISPLAY] ?? null;
            $ext = (isset($json[self::FIELD_SUB_PLAN_DISPLAY_EXT]) && is_array($json[self::FIELD_SUB_PLAN_DISPLAY_EXT])) ? $json[self::FIELD_SUB_PLAN_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSubPlanDisplay($value);
                } else if (is_array($value)) {
                    $type->setSubPlanDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSubPlanDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubPlanDisplay(new FHIRString($ext));
            } else {
                $type->setSubPlanDisplay(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CLASS]) || isset($json[self::FIELD_CLASS_EXT]) || array_key_exists(self::FIELD_CLASS, $json) || array_key_exists(self::FIELD_CLASS_EXT, $json)) {
            $value = $json[self::FIELD_CLASS] ?? null;
            $ext = (isset($json[self::FIELD_CLASS_EXT]) && is_array($json[self::FIELD_CLASS_EXT])) ? $json[self::FIELD_CLASS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setClass($value);
                } else if (is_array($value)) {
                    $type->setClass(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setClass(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setClass(new FHIRString($ext));
            } else {
                $type->setClass(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_CLASS_DISPLAY]) || isset($json[self::FIELD_CLASS_DISPLAY_EXT]) || array_key_exists(self::FIELD_CLASS_DISPLAY, $json) || array_key_exists(self::FIELD_CLASS_DISPLAY_EXT, $json)) {
            $value = $json[self::FIELD_CLASS_DISPLAY] ?? null;
            $ext = (isset($json[self::FIELD_CLASS_DISPLAY_EXT]) && is_array($json[self::FIELD_CLASS_DISPLAY_EXT])) ? $json[self::FIELD_CLASS_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setClassDisplay($value);
                } else if (is_array($value)) {
                    $type->setClassDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setClassDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setClassDisplay(new FHIRString($ext));
            } else {
                $type->setClassDisplay(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SUB_CLASS]) || isset($json[self::FIELD_SUB_CLASS_EXT]) || array_key_exists(self::FIELD_SUB_CLASS, $json) || array_key_exists(self::FIELD_SUB_CLASS_EXT, $json)) {
            $value = $json[self::FIELD_SUB_CLASS] ?? null;
            $ext = (isset($json[self::FIELD_SUB_CLASS_EXT]) && is_array($json[self::FIELD_SUB_CLASS_EXT])) ? $json[self::FIELD_SUB_CLASS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSubClass($value);
                } else if (is_array($value)) {
                    $type->setSubClass(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSubClass(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubClass(new FHIRString($ext));
            } else {
                $type->setSubClass(new FHIRString(null));
            }
        }
        if (isset($json[self::FIELD_SUB_CLASS_DISPLAY]) || isset($json[self::FIELD_SUB_CLASS_DISPLAY_EXT]) || array_key_exists(self::FIELD_SUB_CLASS_DISPLAY, $json) || array_key_exists(self::FIELD_SUB_CLASS_DISPLAY_EXT, $json)) {
            $value = $json[self::FIELD_SUB_CLASS_DISPLAY] ?? null;
            $ext = (isset($json[self::FIELD_SUB_CLASS_DISPLAY_EXT]) && is_array($json[self::FIELD_SUB_CLASS_DISPLAY_EXT])) ? $json[self::FIELD_SUB_CLASS_DISPLAY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $type->setSubClassDisplay($value);
                } else if (is_array($value)) {
                    $type->setSubClassDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $type->setSubClassDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $type->setSubClassDisplay(new FHIRString($ext));
            } else {
                $type->setSubClassDisplay(new FHIRString(null));
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
        if (isset($this->group)) {
            if (null !== ($val = $this->group->getValue())) {
                $out->group = $val;
            }
            $ext = $this->group->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_group = $ext;
            }
        }
        if (isset($this->groupDisplay)) {
            if (null !== ($val = $this->groupDisplay->getValue())) {
                $out->groupDisplay = $val;
            }
            $ext = $this->groupDisplay->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_groupDisplay = $ext;
            }
        }
        if (isset($this->subGroup)) {
            if (null !== ($val = $this->subGroup->getValue())) {
                $out->subGroup = $val;
            }
            $ext = $this->subGroup->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subGroup = $ext;
            }
        }
        if (isset($this->subGroupDisplay)) {
            if (null !== ($val = $this->subGroupDisplay->getValue())) {
                $out->subGroupDisplay = $val;
            }
            $ext = $this->subGroupDisplay->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subGroupDisplay = $ext;
            }
        }
        if (isset($this->plan)) {
            if (null !== ($val = $this->plan->getValue())) {
                $out->plan = $val;
            }
            $ext = $this->plan->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_plan = $ext;
            }
        }
        if (isset($this->planDisplay)) {
            if (null !== ($val = $this->planDisplay->getValue())) {
                $out->planDisplay = $val;
            }
            $ext = $this->planDisplay->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_planDisplay = $ext;
            }
        }
        if (isset($this->subPlan)) {
            if (null !== ($val = $this->subPlan->getValue())) {
                $out->subPlan = $val;
            }
            $ext = $this->subPlan->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subPlan = $ext;
            }
        }
        if (isset($this->subPlanDisplay)) {
            if (null !== ($val = $this->subPlanDisplay->getValue())) {
                $out->subPlanDisplay = $val;
            }
            $ext = $this->subPlanDisplay->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subPlanDisplay = $ext;
            }
        }
        if (isset($this->class)) {
            if (null !== ($val = $this->class->getValue())) {
                $out->class = $val;
            }
            $ext = $this->class->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_class = $ext;
            }
        }
        if (isset($this->classDisplay)) {
            if (null !== ($val = $this->classDisplay->getValue())) {
                $out->classDisplay = $val;
            }
            $ext = $this->classDisplay->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_classDisplay = $ext;
            }
        }
        if (isset($this->subClass)) {
            if (null !== ($val = $this->subClass->getValue())) {
                $out->subClass = $val;
            }
            $ext = $this->subClass->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subClass = $ext;
            }
        }
        if (isset($this->subClassDisplay)) {
            if (null !== ($val = $this->subClassDisplay->getValue())) {
                $out->subClassDisplay = $val;
            }
            $ext = $this->subClassDisplay->jsonSerialize();
            unset($ext->value);
            if (count((array)$ext) > 0) {
                $out->_subClassDisplay = $ext;
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