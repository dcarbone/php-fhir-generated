<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 21st, 2019 04:04+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\STU3\PHPFHIRTypeInterface;

/**
 * Financial instrument which may be used to reimburse or pay for health care
 * products and services.
 *
 * Class FHIRCoverageGrouping
 * @package \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage
 */
class FHIRCoverageGrouping extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING;

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    const FIELD_CLASS = 'class';
    const FIELD_CLASS_EXT = '_class';
    const FIELD_CLASS_DISPLAY = 'classDisplay';
    const FIELD_CLASS_DISPLAY_EXT = '_classDisplay';
    const FIELD_GROUP = 'group';
    const FIELD_GROUP_EXT = '_group';
    const FIELD_GROUP_DISPLAY = 'groupDisplay';
    const FIELD_GROUP_DISPLAY_EXT = '_groupDisplay';
    const FIELD_PLAN = 'plan';
    const FIELD_PLAN_EXT = '_plan';
    const FIELD_PLAN_DISPLAY = 'planDisplay';
    const FIELD_PLAN_DISPLAY_EXT = '_planDisplay';
    const FIELD_SUB_CLASS = 'subClass';
    const FIELD_SUB_CLASS_EXT = '_subClass';
    const FIELD_SUB_CLASS_DISPLAY = 'subClassDisplay';
    const FIELD_SUB_CLASS_DISPLAY_EXT = '_subClassDisplay';
    const FIELD_SUB_GROUP = 'subGroup';
    const FIELD_SUB_GROUP_EXT = '_subGroup';
    const FIELD_SUB_GROUP_DISPLAY = 'subGroupDisplay';
    const FIELD_SUB_GROUP_DISPLAY_EXT = '_subGroupDisplay';
    const FIELD_SUB_PLAN = 'subPlan';
    const FIELD_SUB_PLAN_EXT = '_subPlan';
    const FIELD_SUB_PLAN_DISPLAY = 'subPlanDisplay';
    const FIELD_SUB_PLAN_DISPLAY_EXT = '_subPlanDisplay';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $class = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the class.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $classDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $group = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $groupDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $plan = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $planDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $subClass = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the subclass.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $subClassDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $subGroup = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the subgroup.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $subGroupDisplay = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $subPlan = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the subplan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    private $subPlanDisplay = null;

    /**
     * FHIRCoverageGrouping Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCoverageGrouping::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CLASS])) {
            $ext = (isset($data[self::FIELD_CLASS_EXT]) && is_array($data[self::FIELD_CLASS_EXT]))
                ? $data[self::FIELD_CLASS_EXT]
                : null;
            if ($data[self::FIELD_CLASS] instanceof FHIRString) {
                $this->setClass($data[self::FIELD_CLASS]);
            } elseif ($ext && is_scalar($data[self::FIELD_CLASS])) {
                $this->setClass(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CLASS]] + $ext));
            } else {
                $this->setClass(new FHIRString($data[self::FIELD_CLASS]));
            }
        }
        if (isset($data[self::FIELD_CLASS_DISPLAY])) {
            $ext = (isset($data[self::FIELD_CLASS_DISPLAY_EXT]) && is_array($data[self::FIELD_CLASS_DISPLAY_EXT]))
                ? $data[self::FIELD_CLASS_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_CLASS_DISPLAY] instanceof FHIRString) {
                $this->setClassDisplay($data[self::FIELD_CLASS_DISPLAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_CLASS_DISPLAY])) {
                $this->setClassDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_CLASS_DISPLAY]] + $ext));
            } else {
                $this->setClassDisplay(new FHIRString($data[self::FIELD_CLASS_DISPLAY]));
            }
        }
        if (isset($data[self::FIELD_GROUP])) {
            $ext = (isset($data[self::FIELD_GROUP_EXT]) && is_array($data[self::FIELD_GROUP_EXT]))
                ? $data[self::FIELD_GROUP_EXT]
                : null;
            if ($data[self::FIELD_GROUP] instanceof FHIRString) {
                $this->setGroup($data[self::FIELD_GROUP]);
            } elseif ($ext && is_scalar($data[self::FIELD_GROUP])) {
                $this->setGroup(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_GROUP]] + $ext));
            } else {
                $this->setGroup(new FHIRString($data[self::FIELD_GROUP]));
            }
        }
        if (isset($data[self::FIELD_GROUP_DISPLAY])) {
            $ext = (isset($data[self::FIELD_GROUP_DISPLAY_EXT]) && is_array($data[self::FIELD_GROUP_DISPLAY_EXT]))
                ? $data[self::FIELD_GROUP_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_GROUP_DISPLAY] instanceof FHIRString) {
                $this->setGroupDisplay($data[self::FIELD_GROUP_DISPLAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_GROUP_DISPLAY])) {
                $this->setGroupDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_GROUP_DISPLAY]] + $ext));
            } else {
                $this->setGroupDisplay(new FHIRString($data[self::FIELD_GROUP_DISPLAY]));
            }
        }
        if (isset($data[self::FIELD_PLAN])) {
            $ext = (isset($data[self::FIELD_PLAN_EXT]) && is_array($data[self::FIELD_PLAN_EXT]))
                ? $data[self::FIELD_PLAN_EXT]
                : null;
            if ($data[self::FIELD_PLAN] instanceof FHIRString) {
                $this->setPlan($data[self::FIELD_PLAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_PLAN])) {
                $this->setPlan(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PLAN]] + $ext));
            } else {
                $this->setPlan(new FHIRString($data[self::FIELD_PLAN]));
            }
        }
        if (isset($data[self::FIELD_PLAN_DISPLAY])) {
            $ext = (isset($data[self::FIELD_PLAN_DISPLAY_EXT]) && is_array($data[self::FIELD_PLAN_DISPLAY_EXT]))
                ? $data[self::FIELD_PLAN_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_PLAN_DISPLAY] instanceof FHIRString) {
                $this->setPlanDisplay($data[self::FIELD_PLAN_DISPLAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_PLAN_DISPLAY])) {
                $this->setPlanDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_PLAN_DISPLAY]] + $ext));
            } else {
                $this->setPlanDisplay(new FHIRString($data[self::FIELD_PLAN_DISPLAY]));
            }
        }
        if (isset($data[self::FIELD_SUB_CLASS])) {
            $ext = (isset($data[self::FIELD_SUB_CLASS_EXT]) && is_array($data[self::FIELD_SUB_CLASS_EXT]))
                ? $data[self::FIELD_SUB_CLASS_EXT]
                : null;
            if ($data[self::FIELD_SUB_CLASS] instanceof FHIRString) {
                $this->setSubClass($data[self::FIELD_SUB_CLASS]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUB_CLASS])) {
                $this->setSubClass(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUB_CLASS]] + $ext));
            } else {
                $this->setSubClass(new FHIRString($data[self::FIELD_SUB_CLASS]));
            }
        }
        if (isset($data[self::FIELD_SUB_CLASS_DISPLAY])) {
            $ext = (isset($data[self::FIELD_SUB_CLASS_DISPLAY_EXT]) && is_array($data[self::FIELD_SUB_CLASS_DISPLAY_EXT]))
                ? $data[self::FIELD_SUB_CLASS_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_SUB_CLASS_DISPLAY] instanceof FHIRString) {
                $this->setSubClassDisplay($data[self::FIELD_SUB_CLASS_DISPLAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUB_CLASS_DISPLAY])) {
                $this->setSubClassDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUB_CLASS_DISPLAY]] + $ext));
            } else {
                $this->setSubClassDisplay(new FHIRString($data[self::FIELD_SUB_CLASS_DISPLAY]));
            }
        }
        if (isset($data[self::FIELD_SUB_GROUP])) {
            $ext = (isset($data[self::FIELD_SUB_GROUP_EXT]) && is_array($data[self::FIELD_SUB_GROUP_EXT]))
                ? $data[self::FIELD_SUB_GROUP_EXT]
                : null;
            if ($data[self::FIELD_SUB_GROUP] instanceof FHIRString) {
                $this->setSubGroup($data[self::FIELD_SUB_GROUP]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUB_GROUP])) {
                $this->setSubGroup(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUB_GROUP]] + $ext));
            } else {
                $this->setSubGroup(new FHIRString($data[self::FIELD_SUB_GROUP]));
            }
        }
        if (isset($data[self::FIELD_SUB_GROUP_DISPLAY])) {
            $ext = (isset($data[self::FIELD_SUB_GROUP_DISPLAY_EXT]) && is_array($data[self::FIELD_SUB_GROUP_DISPLAY_EXT]))
                ? $data[self::FIELD_SUB_GROUP_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_SUB_GROUP_DISPLAY] instanceof FHIRString) {
                $this->setSubGroupDisplay($data[self::FIELD_SUB_GROUP_DISPLAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUB_GROUP_DISPLAY])) {
                $this->setSubGroupDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUB_GROUP_DISPLAY]] + $ext));
            } else {
                $this->setSubGroupDisplay(new FHIRString($data[self::FIELD_SUB_GROUP_DISPLAY]));
            }
        }
        if (isset($data[self::FIELD_SUB_PLAN])) {
            $ext = (isset($data[self::FIELD_SUB_PLAN_EXT]) && is_array($data[self::FIELD_SUB_PLAN_EXT]))
                ? $data[self::FIELD_SUB_PLAN_EXT]
                : null;
            if ($data[self::FIELD_SUB_PLAN] instanceof FHIRString) {
                $this->setSubPlan($data[self::FIELD_SUB_PLAN]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUB_PLAN])) {
                $this->setSubPlan(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUB_PLAN]] + $ext));
            } else {
                $this->setSubPlan(new FHIRString($data[self::FIELD_SUB_PLAN]));
            }
        }
        if (isset($data[self::FIELD_SUB_PLAN_DISPLAY])) {
            $ext = (isset($data[self::FIELD_SUB_PLAN_DISPLAY_EXT]) && is_array($data[self::FIELD_SUB_PLAN_DISPLAY_EXT]))
                ? $data[self::FIELD_SUB_PLAN_DISPLAY_EXT]
                : null;
            if ($data[self::FIELD_SUB_PLAN_DISPLAY] instanceof FHIRString) {
                $this->setSubPlanDisplay($data[self::FIELD_SUB_PLAN_DISPLAY]);
            } elseif ($ext && is_scalar($data[self::FIELD_SUB_PLAN_DISPLAY])) {
                $this->setSubPlanDisplay(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_SUB_PLAN_DISPLAY]] + $ext));
            } else {
                $this->setSubPlanDisplay(new FHIRString($data[self::FIELD_SUB_PLAN_DISPLAY]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string|null
     */
    public function _getFHIRXMLNamespace()
    {
        return '' === $this->_xmlns ? null : $this->_xmlns;
    }

    /**
     * @param null|string $xmlNamespace
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function _setFHIRXMLNamespace($xmlNamespace)
    {
        if (null === $xmlNamespace || is_string($xmlNamespace)) {
            $this->_xmlns = (string)$xmlNamespace;
            return $this;
        }
        throw new \InvalidArgumentException(sprintf(
            '$xmlNamespace must be a null or string value, %s seen.',
            gettype($xmlNamespace)
        ));
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<CoverageGrouping{$xmlns}></CoverageGrouping>";
    }


    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $class
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setClass($class = null)
    {
        if (null === $class) {
            $this->class = null;
            return $this;
        }
        if ($class instanceof FHIRString) {
            $this->class = $class;
            return $this;
        }
        $this->class = new FHIRString($class);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the class.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getClassDisplay()
    {
        return $this->classDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the class.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $classDisplay
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setClassDisplay($classDisplay = null)
    {
        if (null === $classDisplay) {
            $this->classDisplay = null;
            return $this;
        }
        if ($classDisplay instanceof FHIRString) {
            $this->classDisplay = $classDisplay;
            return $this;
        }
        $this->classDisplay = new FHIRString($classDisplay);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $group
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setGroup($group = null)
    {
        if (null === $group) {
            $this->group = null;
            return $this;
        }
        if ($group instanceof FHIRString) {
            $this->group = $group;
            return $this;
        }
        $this->group = new FHIRString($group);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getGroupDisplay()
    {
        return $this->groupDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $groupDisplay
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setGroupDisplay($groupDisplay = null)
    {
        if (null === $groupDisplay) {
            $this->groupDisplay = null;
            return $this;
        }
        if ($groupDisplay instanceof FHIRString) {
            $this->groupDisplay = $groupDisplay;
            return $this;
        }
        $this->groupDisplay = new FHIRString($groupDisplay);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $plan
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setPlan($plan = null)
    {
        if (null === $plan) {
            $this->plan = null;
            return $this;
        }
        if ($plan instanceof FHIRString) {
            $this->plan = $plan;
            return $this;
        }
        $this->plan = new FHIRString($plan);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getPlanDisplay()
    {
        return $this->planDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $planDisplay
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setPlanDisplay($planDisplay = null)
    {
        if (null === $planDisplay) {
            $this->planDisplay = null;
            return $this;
        }
        if ($planDisplay instanceof FHIRString) {
            $this->planDisplay = $planDisplay;
            return $this;
        }
        $this->planDisplay = new FHIRString($planDisplay);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSubClass()
    {
        return $this->subClass;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subClass
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setSubClass($subClass = null)
    {
        if (null === $subClass) {
            $this->subClass = null;
            return $this;
        }
        if ($subClass instanceof FHIRString) {
            $this->subClass = $subClass;
            return $this;
        }
        $this->subClass = new FHIRString($subClass);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the subclass.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSubClassDisplay()
    {
        return $this->subClassDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the subclass.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subClassDisplay
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setSubClassDisplay($subClassDisplay = null)
    {
        if (null === $subClassDisplay) {
            $this->subClassDisplay = null;
            return $this;
        }
        if ($subClassDisplay instanceof FHIRString) {
            $this->subClassDisplay = $subClassDisplay;
            return $this;
        }
        $this->subClassDisplay = new FHIRString($subClassDisplay);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSubGroup()
    {
        return $this->subGroup;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subGroup
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setSubGroup($subGroup = null)
    {
        if (null === $subGroup) {
            $this->subGroup = null;
            return $this;
        }
        if ($subGroup instanceof FHIRString) {
            $this->subGroup = $subGroup;
            return $this;
        }
        $this->subGroup = new FHIRString($subGroup);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the subgroup.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSubGroupDisplay()
    {
        return $this->subGroupDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the subgroup.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subGroupDisplay
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setSubGroupDisplay($subGroupDisplay = null)
    {
        if (null === $subGroupDisplay) {
            $this->subGroupDisplay = null;
            return $this;
        }
        if ($subGroupDisplay instanceof FHIRString) {
            $this->subGroupDisplay = $subGroupDisplay;
            return $this;
        }
        $this->subGroupDisplay = new FHIRString($subGroupDisplay);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSubPlan()
    {
        return $this->subPlan;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subPlan
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setSubPlan($subPlan = null)
    {
        if (null === $subPlan) {
            $this->subPlan = null;
            return $this;
        }
        if ($subPlan instanceof FHIRString) {
            $this->subPlan = $subPlan;
            return $this;
        }
        $this->subPlan = new FHIRString($subPlan);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the subplan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    public function getSubPlanDisplay()
    {
        return $this->subPlanDisplay;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * A short description for the subplan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subPlanDisplay
     * @return \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public function setSubPlanDisplay($subPlanDisplay = null)
    {
        if (null === $subPlanDisplay) {
            $this->subPlanDisplay = null;
            return $this;
        }
        if ($subPlanDisplay instanceof FHIRString) {
            $this->subPlanDisplay = $subPlanDisplay;
            return $this;
        }
        $this->subPlanDisplay = new FHIRString($subPlanDisplay);
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRCoverageGrouping::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCoverageGrouping::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCoverageGrouping;
        } elseif (!is_object($type) || !($type instanceof FHIRCoverageGrouping)) {
            throw new \RuntimeException(sprintf(
                'FHIRCoverageGrouping::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage\FHIRCoverageGrouping or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($attributes->class)) {
            $type->setClass((string)$attributes->class);
        }
        if (isset($children->class)) {
            $type->setClass(FHIRString::xmlUnserialize($children->class));
        }
        if (isset($attributes->classDisplay)) {
            $type->setClassDisplay((string)$attributes->classDisplay);
        }
        if (isset($children->classDisplay)) {
            $type->setClassDisplay(FHIRString::xmlUnserialize($children->classDisplay));
        }
        if (isset($attributes->group)) {
            $type->setGroup((string)$attributes->group);
        }
        if (isset($children->group)) {
            $type->setGroup(FHIRString::xmlUnserialize($children->group));
        }
        if (isset($attributes->groupDisplay)) {
            $type->setGroupDisplay((string)$attributes->groupDisplay);
        }
        if (isset($children->groupDisplay)) {
            $type->setGroupDisplay(FHIRString::xmlUnserialize($children->groupDisplay));
        }
        if (isset($attributes->plan)) {
            $type->setPlan((string)$attributes->plan);
        }
        if (isset($children->plan)) {
            $type->setPlan(FHIRString::xmlUnserialize($children->plan));
        }
        if (isset($attributes->planDisplay)) {
            $type->setPlanDisplay((string)$attributes->planDisplay);
        }
        if (isset($children->planDisplay)) {
            $type->setPlanDisplay(FHIRString::xmlUnserialize($children->planDisplay));
        }
        if (isset($attributes->subClass)) {
            $type->setSubClass((string)$attributes->subClass);
        }
        if (isset($children->subClass)) {
            $type->setSubClass(FHIRString::xmlUnserialize($children->subClass));
        }
        if (isset($attributes->subClassDisplay)) {
            $type->setSubClassDisplay((string)$attributes->subClassDisplay);
        }
        if (isset($children->subClassDisplay)) {
            $type->setSubClassDisplay(FHIRString::xmlUnserialize($children->subClassDisplay));
        }
        if (isset($attributes->subGroup)) {
            $type->setSubGroup((string)$attributes->subGroup);
        }
        if (isset($children->subGroup)) {
            $type->setSubGroup(FHIRString::xmlUnserialize($children->subGroup));
        }
        if (isset($attributes->subGroupDisplay)) {
            $type->setSubGroupDisplay((string)$attributes->subGroupDisplay);
        }
        if (isset($children->subGroupDisplay)) {
            $type->setSubGroupDisplay(FHIRString::xmlUnserialize($children->subGroupDisplay));
        }
        if (isset($attributes->subPlan)) {
            $type->setSubPlan((string)$attributes->subPlan);
        }
        if (isset($children->subPlan)) {
            $type->setSubPlan(FHIRString::xmlUnserialize($children->subPlan));
        }
        if (isset($attributes->subPlanDisplay)) {
            $type->setSubPlanDisplay((string)$attributes->subPlanDisplay);
        }
        if (isset($children->subPlanDisplay)) {
            $type->setSubPlanDisplay(FHIRString::xmlUnserialize($children->subPlanDisplay));
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getClassDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_CLASS_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGroup())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getGroupDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPlan())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PLAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPlanDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PLAN_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubClass())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_CLASS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubClassDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_CLASS_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubGroup())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_GROUP, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubGroupDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_GROUP_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubPlan())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_PLAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubPlanDisplay())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUB_PLAN_DISPLAY, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getClass())) {
            $a[self::FIELD_CLASS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CLASS_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getClassDisplay())) {
            $a[self::FIELD_CLASS_DISPLAY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_CLASS_DISPLAY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getGroup())) {
            $a[self::FIELD_GROUP] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_GROUP_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getGroupDisplay())) {
            $a[self::FIELD_GROUP_DISPLAY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_GROUP_DISPLAY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getPlan())) {
            $a[self::FIELD_PLAN] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PLAN_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getPlanDisplay())) {
            $a[self::FIELD_PLAN_DISPLAY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_PLAN_DISPLAY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSubClass())) {
            $a[self::FIELD_SUB_CLASS] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SUB_CLASS_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSubClassDisplay())) {
            $a[self::FIELD_SUB_CLASS_DISPLAY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SUB_CLASS_DISPLAY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSubGroup())) {
            $a[self::FIELD_SUB_GROUP] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SUB_GROUP_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSubGroupDisplay())) {
            $a[self::FIELD_SUB_GROUP_DISPLAY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SUB_GROUP_DISPLAY_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSubPlan())) {
            $a[self::FIELD_SUB_PLAN] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SUB_PLAN_EXT] = $v;
            }
        }
        if (null !== ($v = $this->getSubPlanDisplay())) {
            $a[self::FIELD_SUB_PLAN_DISPLAY] = $v->getValue();
            if ($v->_hasNonValueFieldsDefined()) {
                $a[self::FIELD_SUB_PLAN_DISPLAY_EXT] = $v;
            }
        }
        return $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}