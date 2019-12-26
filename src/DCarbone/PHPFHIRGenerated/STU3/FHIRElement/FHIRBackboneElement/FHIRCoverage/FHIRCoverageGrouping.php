<?php

namespace DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRBackboneElement\FHIRCoverage;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:43+0000
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

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $class = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the class.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $classDisplay = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $group = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $groupDisplay = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $plan = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $planDisplay = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $subClass = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subclass.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $subClassDisplay = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $subGroup = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subgroup.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $subGroupDisplay = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $subPlan = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subplan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString
     */
    protected $subPlanDisplay = null;

    /**
     * Validation map for fields in type Coverage.Grouping
     * @var array
     */
    private static $_validationRules = [    ];

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
        if (isset($data[self::FIELD_CLASS]) || isset($data[self::FIELD_CLASS_EXT])) {
            if (isset($data[self::FIELD_CLASS])) {
                $value = $data[self::FIELD_CLASS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CLASS_EXT]) && is_array($data[self::FIELD_CLASS_EXT])) {
                $ext = $data[self::FIELD_CLASS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setClass($value);
                } else if (is_array($value)) {
                    $this->setClass(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setClass(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setClass(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CLASS_DISPLAY]) || isset($data[self::FIELD_CLASS_DISPLAY_EXT])) {
            if (isset($data[self::FIELD_CLASS_DISPLAY])) {
                $value = $data[self::FIELD_CLASS_DISPLAY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_CLASS_DISPLAY_EXT]) && is_array($data[self::FIELD_CLASS_DISPLAY_EXT])) {
                $ext = $data[self::FIELD_CLASS_DISPLAY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setClassDisplay($value);
                } else if (is_array($value)) {
                    $this->setClassDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setClassDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setClassDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_GROUP]) || isset($data[self::FIELD_GROUP_EXT])) {
            if (isset($data[self::FIELD_GROUP])) {
                $value = $data[self::FIELD_GROUP];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_GROUP_EXT]) && is_array($data[self::FIELD_GROUP_EXT])) {
                $ext = $data[self::FIELD_GROUP_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setGroup($value);
                } else if (is_array($value)) {
                    $this->setGroup(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setGroup(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setGroup(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_GROUP_DISPLAY]) || isset($data[self::FIELD_GROUP_DISPLAY_EXT])) {
            if (isset($data[self::FIELD_GROUP_DISPLAY])) {
                $value = $data[self::FIELD_GROUP_DISPLAY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_GROUP_DISPLAY_EXT]) && is_array($data[self::FIELD_GROUP_DISPLAY_EXT])) {
                $ext = $data[self::FIELD_GROUP_DISPLAY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setGroupDisplay($value);
                } else if (is_array($value)) {
                    $this->setGroupDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setGroupDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setGroupDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PLAN]) || isset($data[self::FIELD_PLAN_EXT])) {
            if (isset($data[self::FIELD_PLAN])) {
                $value = $data[self::FIELD_PLAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PLAN_EXT]) && is_array($data[self::FIELD_PLAN_EXT])) {
                $ext = $data[self::FIELD_PLAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPlan($value);
                } else if (is_array($value)) {
                    $this->setPlan(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPlan(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPlan(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PLAN_DISPLAY]) || isset($data[self::FIELD_PLAN_DISPLAY_EXT])) {
            if (isset($data[self::FIELD_PLAN_DISPLAY])) {
                $value = $data[self::FIELD_PLAN_DISPLAY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PLAN_DISPLAY_EXT]) && is_array($data[self::FIELD_PLAN_DISPLAY_EXT])) {
                $ext = $data[self::FIELD_PLAN_DISPLAY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPlanDisplay($value);
                } else if (is_array($value)) {
                    $this->setPlanDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPlanDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPlanDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_CLASS]) || isset($data[self::FIELD_SUB_CLASS_EXT])) {
            if (isset($data[self::FIELD_SUB_CLASS])) {
                $value = $data[self::FIELD_SUB_CLASS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUB_CLASS_EXT]) && is_array($data[self::FIELD_SUB_CLASS_EXT])) {
                $ext = $data[self::FIELD_SUB_CLASS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubClass($value);
                } else if (is_array($value)) {
                    $this->setSubClass(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubClass(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubClass(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_CLASS_DISPLAY]) || isset($data[self::FIELD_SUB_CLASS_DISPLAY_EXT])) {
            if (isset($data[self::FIELD_SUB_CLASS_DISPLAY])) {
                $value = $data[self::FIELD_SUB_CLASS_DISPLAY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUB_CLASS_DISPLAY_EXT]) && is_array($data[self::FIELD_SUB_CLASS_DISPLAY_EXT])) {
                $ext = $data[self::FIELD_SUB_CLASS_DISPLAY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubClassDisplay($value);
                } else if (is_array($value)) {
                    $this->setSubClassDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubClassDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubClassDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_GROUP]) || isset($data[self::FIELD_SUB_GROUP_EXT])) {
            if (isset($data[self::FIELD_SUB_GROUP])) {
                $value = $data[self::FIELD_SUB_GROUP];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUB_GROUP_EXT]) && is_array($data[self::FIELD_SUB_GROUP_EXT])) {
                $ext = $data[self::FIELD_SUB_GROUP_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubGroup($value);
                } else if (is_array($value)) {
                    $this->setSubGroup(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubGroup(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubGroup(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_GROUP_DISPLAY]) || isset($data[self::FIELD_SUB_GROUP_DISPLAY_EXT])) {
            if (isset($data[self::FIELD_SUB_GROUP_DISPLAY])) {
                $value = $data[self::FIELD_SUB_GROUP_DISPLAY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUB_GROUP_DISPLAY_EXT]) && is_array($data[self::FIELD_SUB_GROUP_DISPLAY_EXT])) {
                $ext = $data[self::FIELD_SUB_GROUP_DISPLAY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubGroupDisplay($value);
                } else if (is_array($value)) {
                    $this->setSubGroupDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubGroupDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubGroupDisplay(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_PLAN]) || isset($data[self::FIELD_SUB_PLAN_EXT])) {
            if (isset($data[self::FIELD_SUB_PLAN])) {
                $value = $data[self::FIELD_SUB_PLAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUB_PLAN_EXT]) && is_array($data[self::FIELD_SUB_PLAN_EXT])) {
                $ext = $data[self::FIELD_SUB_PLAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubPlan($value);
                } else if (is_array($value)) {
                    $this->setSubPlan(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubPlan(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubPlan(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUB_PLAN_DISPLAY]) || isset($data[self::FIELD_SUB_PLAN_DISPLAY_EXT])) {
            if (isset($data[self::FIELD_SUB_PLAN_DISPLAY])) {
                $value = $data[self::FIELD_SUB_PLAN_DISPLAY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SUB_PLAN_DISPLAY_EXT]) && is_array($data[self::FIELD_SUB_PLAN_DISPLAY_EXT])) {
                $ext = $data[self::FIELD_SUB_PLAN_DISPLAY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setSubPlanDisplay($value);
                } else if (is_array($value)) {
                    $this->setSubPlanDisplay(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setSubPlanDisplay(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setSubPlanDisplay(new FHIRString($ext));
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issues by the underwriter, for
     * example may be used to identify a class of coverage such as a level of
     * deductables or co-payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $class
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the class.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $classDisplay
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify an employer group. May also be referred to as a
     * Policy or Group ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $group
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $groupDisplay
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a collection of benefits provided to employees.
     * May be referred to as a Section or Division ID.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $plan
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $planDisplay
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter,
     * for example may be used to identify a subclass of coverage such as a sub-level
     * of deductables or co-payment.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subClass
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subclass.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subClassDisplay
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a style or collective of coverage issued by the underwriter, for
     * example may be used to identify a subset of an employer group.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subGroup
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subgroup.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subGroupDisplay
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter,
     * for example may be used to identify a subset of a collection of benefits
     * provided to employees.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subPlan
     * @return static
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
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
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short description for the subplan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\STU3\FHIRElement\FHIRString $subPlanDisplay
     * @return static
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
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClassDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASS_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGroupDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPlanDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PLAN_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubClass())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_CLASS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubClassDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_CLASS_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubGroup())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_GROUP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubGroupDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_GROUP_DISPLAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubPlan())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_PLAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubPlanDisplay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUB_PLAN_DISPLAY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CLASS])) {
            $v = $this->getClass();
            foreach($validationRules[self::FIELD_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_CLASS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_CLASS_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASS_DISPLAY])) {
                        $errs[self::FIELD_CLASS_DISPLAY] = [];
                    }
                    $errs[self::FIELD_CLASS_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP])) {
            $v = $this->getGroup();
            foreach($validationRules[self::FIELD_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_GROUP, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_GROUP_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP_DISPLAY])) {
                        $errs[self::FIELD_GROUP_DISPLAY] = [];
                    }
                    $errs[self::FIELD_GROUP_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PLAN])) {
            $v = $this->getPlan();
            foreach($validationRules[self::FIELD_PLAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_PLAN, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_PLAN_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PLAN_DISPLAY])) {
                        $errs[self::FIELD_PLAN_DISPLAY] = [];
                    }
                    $errs[self::FIELD_PLAN_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_CLASS])) {
            $v = $this->getSubClass();
            foreach($validationRules[self::FIELD_SUB_CLASS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_CLASS, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_CLASS_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_CLASS_DISPLAY])) {
                        $errs[self::FIELD_SUB_CLASS_DISPLAY] = [];
                    }
                    $errs[self::FIELD_SUB_CLASS_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_GROUP])) {
            $v = $this->getSubGroup();
            foreach($validationRules[self::FIELD_SUB_GROUP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_GROUP, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_GROUP_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_GROUP_DISPLAY])) {
                        $errs[self::FIELD_SUB_GROUP_DISPLAY] = [];
                    }
                    $errs[self::FIELD_SUB_GROUP_DISPLAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUB_PLAN])) {
            $v = $this->getSubPlan();
            foreach($validationRules[self::FIELD_SUB_PLAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_PLAN, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COVERAGE_DOT_GROUPING, self::FIELD_SUB_PLAN_DISPLAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUB_PLAN_DISPLAY])) {
                        $errs[self::FIELD_SUB_PLAN_DISPLAY] = [];
                    }
                    $errs[self::FIELD_SUB_PLAN_DISPLAY][$rule] = $err;
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
        if (isset($children->class)) {
            $type->setClass(FHIRString::xmlUnserialize($children->class));
        }
        if (isset($attributes->class)) {
            $pt = $type->getClass();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->class);
            } else {
                $type->setClass((string)$attributes->class);
            }
        }
        if (isset($children->classDisplay)) {
            $type->setClassDisplay(FHIRString::xmlUnserialize($children->classDisplay));
        }
        if (isset($attributes->classDisplay)) {
            $pt = $type->getClassDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->classDisplay);
            } else {
                $type->setClassDisplay((string)$attributes->classDisplay);
            }
        }
        if (isset($children->group)) {
            $type->setGroup(FHIRString::xmlUnserialize($children->group));
        }
        if (isset($attributes->group)) {
            $pt = $type->getGroup();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->group);
            } else {
                $type->setGroup((string)$attributes->group);
            }
        }
        if (isset($children->groupDisplay)) {
            $type->setGroupDisplay(FHIRString::xmlUnserialize($children->groupDisplay));
        }
        if (isset($attributes->groupDisplay)) {
            $pt = $type->getGroupDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->groupDisplay);
            } else {
                $type->setGroupDisplay((string)$attributes->groupDisplay);
            }
        }
        if (isset($children->plan)) {
            $type->setPlan(FHIRString::xmlUnserialize($children->plan));
        }
        if (isset($attributes->plan)) {
            $pt = $type->getPlan();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->plan);
            } else {
                $type->setPlan((string)$attributes->plan);
            }
        }
        if (isset($children->planDisplay)) {
            $type->setPlanDisplay(FHIRString::xmlUnserialize($children->planDisplay));
        }
        if (isset($attributes->planDisplay)) {
            $pt = $type->getPlanDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->planDisplay);
            } else {
                $type->setPlanDisplay((string)$attributes->planDisplay);
            }
        }
        if (isset($children->subClass)) {
            $type->setSubClass(FHIRString::xmlUnserialize($children->subClass));
        }
        if (isset($attributes->subClass)) {
            $pt = $type->getSubClass();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subClass);
            } else {
                $type->setSubClass((string)$attributes->subClass);
            }
        }
        if (isset($children->subClassDisplay)) {
            $type->setSubClassDisplay(FHIRString::xmlUnserialize($children->subClassDisplay));
        }
        if (isset($attributes->subClassDisplay)) {
            $pt = $type->getSubClassDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subClassDisplay);
            } else {
                $type->setSubClassDisplay((string)$attributes->subClassDisplay);
            }
        }
        if (isset($children->subGroup)) {
            $type->setSubGroup(FHIRString::xmlUnserialize($children->subGroup));
        }
        if (isset($attributes->subGroup)) {
            $pt = $type->getSubGroup();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subGroup);
            } else {
                $type->setSubGroup((string)$attributes->subGroup);
            }
        }
        if (isset($children->subGroupDisplay)) {
            $type->setSubGroupDisplay(FHIRString::xmlUnserialize($children->subGroupDisplay));
        }
        if (isset($attributes->subGroupDisplay)) {
            $pt = $type->getSubGroupDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subGroupDisplay);
            } else {
                $type->setSubGroupDisplay((string)$attributes->subGroupDisplay);
            }
        }
        if (isset($children->subPlan)) {
            $type->setSubPlan(FHIRString::xmlUnserialize($children->subPlan));
        }
        if (isset($attributes->subPlan)) {
            $pt = $type->getSubPlan();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subPlan);
            } else {
                $type->setSubPlan((string)$attributes->subPlan);
            }
        }
        if (isset($children->subPlanDisplay)) {
            $type->setSubPlanDisplay(FHIRString::xmlUnserialize($children->subPlanDisplay));
        }
        if (isset($attributes->subPlanDisplay)) {
            $pt = $type->getSubPlanDisplay();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->subPlanDisplay);
            } else {
                $type->setSubPlanDisplay((string)$attributes->subPlanDisplay);
            }
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
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CLASS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getClassDisplay())) {
            $a[self::FIELD_CLASS_DISPLAY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_CLASS_DISPLAY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getGroup())) {
            $a[self::FIELD_GROUP] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_GROUP_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getGroupDisplay())) {
            $a[self::FIELD_GROUP_DISPLAY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_GROUP_DISPLAY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPlan())) {
            $a[self::FIELD_PLAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PLAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getPlanDisplay())) {
            $a[self::FIELD_PLAN_DISPLAY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_PLAN_DISPLAY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubClass())) {
            $a[self::FIELD_SUB_CLASS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUB_CLASS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubClassDisplay())) {
            $a[self::FIELD_SUB_CLASS_DISPLAY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUB_CLASS_DISPLAY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubGroup())) {
            $a[self::FIELD_SUB_GROUP] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUB_GROUP_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubGroupDisplay())) {
            $a[self::FIELD_SUB_GROUP_DISPLAY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUB_GROUP_DISPLAY_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubPlan())) {
            $a[self::FIELD_SUB_PLAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUB_PLAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubPlanDisplay())) {
            $a[self::FIELD_SUB_PLAN_DISPLAY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_SUB_PLAN_DISPLAY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
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