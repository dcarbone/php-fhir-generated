<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 00:09+0000
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

use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\STU3\VersionConstants;

/**
 * Financial instrument which may be used to reimburse or pay for health care
 * products and services.
 */
class FHIRCoverageGrouping extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_COVERAGE_DOT_GROUPING;

    /* class_default.php:50 */
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

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_GROUP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_GROUP_DISPLAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUB_GROUP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUB_GROUP_DISPLAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PLAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_PLAN_DISPLAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUB_PLAN => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUB_PLAN_DISPLAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CLASS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_CLASS_DISPLAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUB_CLASS => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_SUB_CLASS_DISPLAY => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
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

    /* constructor.php:61 */
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

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
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

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
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
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ID === $cen) {
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GROUP === $cen) {
                $type->setGroup(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_GROUP_DISPLAY === $cen) {
                $type->setGroupDisplay(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_GROUP === $cen) {
                $type->setSubGroup(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_GROUP_DISPLAY === $cen) {
                $type->setSubGroupDisplay(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PLAN === $cen) {
                $type->setPlan(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PLAN_DISPLAY === $cen) {
                $type->setPlanDisplay(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_PLAN === $cen) {
                $type->setSubPlan(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_PLAN_DISPLAY === $cen) {
                $type->setSubPlanDisplay(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLASS === $cen) {
                $type->setClass(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CLASS_DISPLAY === $cen) {
                $type->setClassDisplay(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_CLASS === $cen) {
                $type->setSubClass(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUB_CLASS_DISPLAY === $cen) {
                $type->setSubClassDisplay(FHIRString::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_GROUP])) {
            if (isset($type->group)) {
                $type->group->setValue((string)$attributes[self::FIELD_GROUP]);
            } else {
                $type->setGroup((string)$attributes[self::FIELD_GROUP]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_GROUP, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_GROUP_DISPLAY])) {
            if (isset($type->groupDisplay)) {
                $type->groupDisplay->setValue((string)$attributes[self::FIELD_GROUP_DISPLAY]);
            } else {
                $type->setGroupDisplay((string)$attributes[self::FIELD_GROUP_DISPLAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_GROUP_DISPLAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUB_GROUP])) {
            if (isset($type->subGroup)) {
                $type->subGroup->setValue((string)$attributes[self::FIELD_SUB_GROUP]);
            } else {
                $type->setSubGroup((string)$attributes[self::FIELD_SUB_GROUP]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUB_GROUP, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUB_GROUP_DISPLAY])) {
            if (isset($type->subGroupDisplay)) {
                $type->subGroupDisplay->setValue((string)$attributes[self::FIELD_SUB_GROUP_DISPLAY]);
            } else {
                $type->setSubGroupDisplay((string)$attributes[self::FIELD_SUB_GROUP_DISPLAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUB_GROUP_DISPLAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PLAN])) {
            if (isset($type->plan)) {
                $type->plan->setValue((string)$attributes[self::FIELD_PLAN]);
            } else {
                $type->setPlan((string)$attributes[self::FIELD_PLAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PLAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_PLAN_DISPLAY])) {
            if (isset($type->planDisplay)) {
                $type->planDisplay->setValue((string)$attributes[self::FIELD_PLAN_DISPLAY]);
            } else {
                $type->setPlanDisplay((string)$attributes[self::FIELD_PLAN_DISPLAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_PLAN_DISPLAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUB_PLAN])) {
            if (isset($type->subPlan)) {
                $type->subPlan->setValue((string)$attributes[self::FIELD_SUB_PLAN]);
            } else {
                $type->setSubPlan((string)$attributes[self::FIELD_SUB_PLAN]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUB_PLAN, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUB_PLAN_DISPLAY])) {
            if (isset($type->subPlanDisplay)) {
                $type->subPlanDisplay->setValue((string)$attributes[self::FIELD_SUB_PLAN_DISPLAY]);
            } else {
                $type->setSubPlanDisplay((string)$attributes[self::FIELD_SUB_PLAN_DISPLAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUB_PLAN_DISPLAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CLASS])) {
            if (isset($type->class)) {
                $type->class->setValue((string)$attributes[self::FIELD_CLASS]);
            } else {
                $type->setClass((string)$attributes[self::FIELD_CLASS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CLASS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_CLASS_DISPLAY])) {
            if (isset($type->classDisplay)) {
                $type->classDisplay->setValue((string)$attributes[self::FIELD_CLASS_DISPLAY]);
            } else {
                $type->setClassDisplay((string)$attributes[self::FIELD_CLASS_DISPLAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_CLASS_DISPLAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUB_CLASS])) {
            if (isset($type->subClass)) {
                $type->subClass->setValue((string)$attributes[self::FIELD_SUB_CLASS]);
            } else {
                $type->setSubClass((string)$attributes[self::FIELD_SUB_CLASS]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUB_CLASS, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_SUB_CLASS_DISPLAY])) {
            if (isset($type->subClassDisplay)) {
                $type->subClassDisplay->setValue((string)$attributes[self::FIELD_SUB_CLASS_DISPLAY]);
            } else {
                $type->setSubClassDisplay((string)$attributes[self::FIELD_SUB_CLASS_DISPLAY]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_SUB_CLASS_DISPLAY, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->group) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GROUP]) {
            $xw->writeAttribute(self::FIELD_GROUP, $this->group->_getValueAsString());
        }
        if (isset($this->groupDisplay) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_GROUP_DISPLAY]) {
            $xw->writeAttribute(self::FIELD_GROUP_DISPLAY, $this->groupDisplay->_getValueAsString());
        }
        if (isset($this->subGroup) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUB_GROUP]) {
            $xw->writeAttribute(self::FIELD_SUB_GROUP, $this->subGroup->_getValueAsString());
        }
        if (isset($this->subGroupDisplay) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUB_GROUP_DISPLAY]) {
            $xw->writeAttribute(self::FIELD_SUB_GROUP_DISPLAY, $this->subGroupDisplay->_getValueAsString());
        }
        if (isset($this->plan) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PLAN]) {
            $xw->writeAttribute(self::FIELD_PLAN, $this->plan->_getValueAsString());
        }
        if (isset($this->planDisplay) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_PLAN_DISPLAY]) {
            $xw->writeAttribute(self::FIELD_PLAN_DISPLAY, $this->planDisplay->_getValueAsString());
        }
        if (isset($this->subPlan) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUB_PLAN]) {
            $xw->writeAttribute(self::FIELD_SUB_PLAN, $this->subPlan->_getValueAsString());
        }
        if (isset($this->subPlanDisplay) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUB_PLAN_DISPLAY]) {
            $xw->writeAttribute(self::FIELD_SUB_PLAN_DISPLAY, $this->subPlanDisplay->_getValueAsString());
        }
        if (isset($this->class) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CLASS]) {
            $xw->writeAttribute(self::FIELD_CLASS, $this->class->_getValueAsString());
        }
        if (isset($this->classDisplay) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_CLASS_DISPLAY]) {
            $xw->writeAttribute(self::FIELD_CLASS_DISPLAY, $this->classDisplay->_getValueAsString());
        }
        if (isset($this->subClass) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUB_CLASS]) {
            $xw->writeAttribute(self::FIELD_SUB_CLASS, $this->subClass->_getValueAsString());
        }
        if (isset($this->subClassDisplay) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_SUB_CLASS_DISPLAY]) {
            $xw->writeAttribute(self::FIELD_SUB_CLASS_DISPLAY, $this->subClassDisplay->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->group)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GROUP]
                || $this->group->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GROUP);
            $this->group->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GROUP]);
            $xw->endElement();
        }
        if (isset($this->groupDisplay)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_GROUP_DISPLAY]
                || $this->groupDisplay->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_GROUP_DISPLAY);
            $this->groupDisplay->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_GROUP_DISPLAY]);
            $xw->endElement();
        }
        if (isset($this->subGroup)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUB_GROUP]
                || $this->subGroup->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUB_GROUP);
            $this->subGroup->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUB_GROUP]);
            $xw->endElement();
        }
        if (isset($this->subGroupDisplay)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUB_GROUP_DISPLAY]
                || $this->subGroupDisplay->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUB_GROUP_DISPLAY);
            $this->subGroupDisplay->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUB_GROUP_DISPLAY]);
            $xw->endElement();
        }
        if (isset($this->plan)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PLAN]
                || $this->plan->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PLAN);
            $this->plan->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PLAN]);
            $xw->endElement();
        }
        if (isset($this->planDisplay)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_PLAN_DISPLAY]
                || $this->planDisplay->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_PLAN_DISPLAY);
            $this->planDisplay->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_PLAN_DISPLAY]);
            $xw->endElement();
        }
        if (isset($this->subPlan)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUB_PLAN]
                || $this->subPlan->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUB_PLAN);
            $this->subPlan->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUB_PLAN]);
            $xw->endElement();
        }
        if (isset($this->subPlanDisplay)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUB_PLAN_DISPLAY]
                || $this->subPlanDisplay->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUB_PLAN_DISPLAY);
            $this->subPlanDisplay->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUB_PLAN_DISPLAY]);
            $xw->endElement();
        }
        if (isset($this->class)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CLASS]
                || $this->class->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CLASS);
            $this->class->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CLASS]);
            $xw->endElement();
        }
        if (isset($this->classDisplay)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_CLASS_DISPLAY]
                || $this->classDisplay->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_CLASS_DISPLAY);
            $this->classDisplay->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_CLASS_DISPLAY]);
            $xw->endElement();
        }
        if (isset($this->subClass)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUB_CLASS]
                || $this->subClass->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUB_CLASS);
            $this->subClass->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUB_CLASS]);
            $xw->endElement();
        }
        if (isset($this->subClassDisplay)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_SUB_CLASS_DISPLAY]
                || $this->subClassDisplay->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_SUB_CLASS_DISPLAY);
            $this->subClassDisplay->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_SUB_CLASS_DISPLAY]);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\STU3\Types\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
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
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->group)
            || isset($json->_group)
            || property_exists($json, self::FIELD_GROUP)
            || property_exists($json, self::FIELD_GROUP_EXT)) {
            $v = $json->_group ?? new \stdClass();
            $v->value = $json->group ?? null;
            $type->setGroup(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->groupDisplay)
            || isset($json->_groupDisplay)
            || property_exists($json, self::FIELD_GROUP_DISPLAY)
            || property_exists($json, self::FIELD_GROUP_DISPLAY_EXT)) {
            $v = $json->_groupDisplay ?? new \stdClass();
            $v->value = $json->groupDisplay ?? null;
            $type->setGroupDisplay(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->subGroup)
            || isset($json->_subGroup)
            || property_exists($json, self::FIELD_SUB_GROUP)
            || property_exists($json, self::FIELD_SUB_GROUP_EXT)) {
            $v = $json->_subGroup ?? new \stdClass();
            $v->value = $json->subGroup ?? null;
            $type->setSubGroup(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->subGroupDisplay)
            || isset($json->_subGroupDisplay)
            || property_exists($json, self::FIELD_SUB_GROUP_DISPLAY)
            || property_exists($json, self::FIELD_SUB_GROUP_DISPLAY_EXT)) {
            $v = $json->_subGroupDisplay ?? new \stdClass();
            $v->value = $json->subGroupDisplay ?? null;
            $type->setSubGroupDisplay(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->plan)
            || isset($json->_plan)
            || property_exists($json, self::FIELD_PLAN)
            || property_exists($json, self::FIELD_PLAN_EXT)) {
            $v = $json->_plan ?? new \stdClass();
            $v->value = $json->plan ?? null;
            $type->setPlan(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->planDisplay)
            || isset($json->_planDisplay)
            || property_exists($json, self::FIELD_PLAN_DISPLAY)
            || property_exists($json, self::FIELD_PLAN_DISPLAY_EXT)) {
            $v = $json->_planDisplay ?? new \stdClass();
            $v->value = $json->planDisplay ?? null;
            $type->setPlanDisplay(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->subPlan)
            || isset($json->_subPlan)
            || property_exists($json, self::FIELD_SUB_PLAN)
            || property_exists($json, self::FIELD_SUB_PLAN_EXT)) {
            $v = $json->_subPlan ?? new \stdClass();
            $v->value = $json->subPlan ?? null;
            $type->setSubPlan(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->subPlanDisplay)
            || isset($json->_subPlanDisplay)
            || property_exists($json, self::FIELD_SUB_PLAN_DISPLAY)
            || property_exists($json, self::FIELD_SUB_PLAN_DISPLAY_EXT)) {
            $v = $json->_subPlanDisplay ?? new \stdClass();
            $v->value = $json->subPlanDisplay ?? null;
            $type->setSubPlanDisplay(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->class)
            || isset($json->_class)
            || property_exists($json, self::FIELD_CLASS)
            || property_exists($json, self::FIELD_CLASS_EXT)) {
            $v = $json->_class ?? new \stdClass();
            $v->value = $json->class ?? null;
            $type->setClass(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->classDisplay)
            || isset($json->_classDisplay)
            || property_exists($json, self::FIELD_CLASS_DISPLAY)
            || property_exists($json, self::FIELD_CLASS_DISPLAY_EXT)) {
            $v = $json->_classDisplay ?? new \stdClass();
            $v->value = $json->classDisplay ?? null;
            $type->setClassDisplay(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->subClass)
            || isset($json->_subClass)
            || property_exists($json, self::FIELD_SUB_CLASS)
            || property_exists($json, self::FIELD_SUB_CLASS_EXT)) {
            $v = $json->_subClass ?? new \stdClass();
            $v->value = $json->subClass ?? null;
            $type->setSubClass(FHIRString::jsonUnserialize($v, $config));
        }
        if (isset($json->subClassDisplay)
            || isset($json->_subClassDisplay)
            || property_exists($json, self::FIELD_SUB_CLASS_DISPLAY)
            || property_exists($json, self::FIELD_SUB_CLASS_DISPLAY_EXT)) {
            $v = $json->_subClassDisplay ?? new \stdClass();
            $v->value = $json->subClassDisplay ?? null;
            $type->setSubClassDisplay(FHIRString::jsonUnserialize($v, $config));
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
            if ($this->group->_nonValueFieldDefined()) {
                $ext = $this->group->jsonSerialize();
                unset($ext->value);
                $out->_group = $ext;
            }
        }
        if (isset($this->groupDisplay)) {
            if (null !== ($val = $this->groupDisplay->getValue())) {
                $out->groupDisplay = $val;
            }
            if ($this->groupDisplay->_nonValueFieldDefined()) {
                $ext = $this->groupDisplay->jsonSerialize();
                unset($ext->value);
                $out->_groupDisplay = $ext;
            }
        }
        if (isset($this->subGroup)) {
            if (null !== ($val = $this->subGroup->getValue())) {
                $out->subGroup = $val;
            }
            if ($this->subGroup->_nonValueFieldDefined()) {
                $ext = $this->subGroup->jsonSerialize();
                unset($ext->value);
                $out->_subGroup = $ext;
            }
        }
        if (isset($this->subGroupDisplay)) {
            if (null !== ($val = $this->subGroupDisplay->getValue())) {
                $out->subGroupDisplay = $val;
            }
            if ($this->subGroupDisplay->_nonValueFieldDefined()) {
                $ext = $this->subGroupDisplay->jsonSerialize();
                unset($ext->value);
                $out->_subGroupDisplay = $ext;
            }
        }
        if (isset($this->plan)) {
            if (null !== ($val = $this->plan->getValue())) {
                $out->plan = $val;
            }
            if ($this->plan->_nonValueFieldDefined()) {
                $ext = $this->plan->jsonSerialize();
                unset($ext->value);
                $out->_plan = $ext;
            }
        }
        if (isset($this->planDisplay)) {
            if (null !== ($val = $this->planDisplay->getValue())) {
                $out->planDisplay = $val;
            }
            if ($this->planDisplay->_nonValueFieldDefined()) {
                $ext = $this->planDisplay->jsonSerialize();
                unset($ext->value);
                $out->_planDisplay = $ext;
            }
        }
        if (isset($this->subPlan)) {
            if (null !== ($val = $this->subPlan->getValue())) {
                $out->subPlan = $val;
            }
            if ($this->subPlan->_nonValueFieldDefined()) {
                $ext = $this->subPlan->jsonSerialize();
                unset($ext->value);
                $out->_subPlan = $ext;
            }
        }
        if (isset($this->subPlanDisplay)) {
            if (null !== ($val = $this->subPlanDisplay->getValue())) {
                $out->subPlanDisplay = $val;
            }
            if ($this->subPlanDisplay->_nonValueFieldDefined()) {
                $ext = $this->subPlanDisplay->jsonSerialize();
                unset($ext->value);
                $out->_subPlanDisplay = $ext;
            }
        }
        if (isset($this->class)) {
            if (null !== ($val = $this->class->getValue())) {
                $out->class = $val;
            }
            if ($this->class->_nonValueFieldDefined()) {
                $ext = $this->class->jsonSerialize();
                unset($ext->value);
                $out->_class = $ext;
            }
        }
        if (isset($this->classDisplay)) {
            if (null !== ($val = $this->classDisplay->getValue())) {
                $out->classDisplay = $val;
            }
            if ($this->classDisplay->_nonValueFieldDefined()) {
                $ext = $this->classDisplay->jsonSerialize();
                unset($ext->value);
                $out->_classDisplay = $ext;
            }
        }
        if (isset($this->subClass)) {
            if (null !== ($val = $this->subClass->getValue())) {
                $out->subClass = $val;
            }
            if ($this->subClass->_nonValueFieldDefined()) {
                $ext = $this->subClass->jsonSerialize();
                unset($ext->value);
                $out->_subClass = $ext;
            }
        }
        if (isset($this->subClassDisplay)) {
            if (null !== ($val = $this->subClassDisplay->getValue())) {
                $out->subClassDisplay = $val;
            }
            if ($this->subClassDisplay->_nonValueFieldDefined()) {
                $ext = $this->subClassDisplay->jsonSerialize();
                unset($ext->value);
                $out->_subClassDisplay = $ext;
            }
        }
        return $out;
    }
}