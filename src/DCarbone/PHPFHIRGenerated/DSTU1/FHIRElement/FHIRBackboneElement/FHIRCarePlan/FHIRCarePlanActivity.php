<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 28th, 2024 17:13+0000
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
 *   Copyright (c) 2011-2013, HL7, Inc.
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
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 */

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive\FHIRXmlIdRef;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient for a period of time, possibly limited to care for a
 * specific condition or set of conditions.
 *
 * Class FHIRCarePlanActivity
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan
 */
class FHIRCarePlanActivity extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY;
    const FIELD_GOAL = 'goal';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_PROHIBITED = 'prohibited';
    const FIELD_PROHIBITED_EXT = '_prohibited';
    const FIELD_ACTION_RESULTING = 'actionResulting';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';
    const FIELD_DETAIL = 'detail';
    const FIELD_SIMPLE = 'simple';

    /** @var string */
    private $_xmlns = '';

    /**
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive\FHIRXmlIdRef[]
     */
    protected $goal = [];

    /**
     * Indicates where the activity is at in its overall life cycle
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityStatus
     */
    protected $status = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    protected $prohibited = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that describe follow-on actions resulting from the plan, such as drug
     * prescriptions, encounter records, appointments, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $actionResulting = [];

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes about the execution of the activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $notes = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $detail = null;

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * A simple summary of details suitable for a general care plan system (e.g. form
     * driven) that doesn't know about specific resources such as procedure etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple
     */
    protected $simple = null;

    /**
     * Validation map for fields in type CarePlan.Activity
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCarePlanActivity Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlanActivity::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_GOAL])) {
            if (is_array($data[self::FIELD_GOAL])) {
                foreach($data[self::FIELD_GOAL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    $this->addGoal($v);
                }
            } else {
                $this->addGoal($data[self::FIELD_GOAL]);
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = isset($data[self::FIELD_STATUS]) ? $data[self::FIELD_STATUS] : null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $ext = $data[self::FIELD_STATUS_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRCarePlanActivityStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRCarePlanActivityStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRCarePlanActivityStatus([FHIRCarePlanActivityStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRCarePlanActivityStatus($ext));
            }
        }
        if (isset($data[self::FIELD_PROHIBITED]) || isset($data[self::FIELD_PROHIBITED_EXT])) {
            $value = isset($data[self::FIELD_PROHIBITED]) ? $data[self::FIELD_PROHIBITED] : null;
            $ext = (isset($data[self::FIELD_PROHIBITED_EXT]) && is_array($data[self::FIELD_PROHIBITED_EXT])) ? $ext = $data[self::FIELD_PROHIBITED_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setProhibited($value);
                } else if (is_array($value)) {
                    $this->setProhibited(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setProhibited(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setProhibited(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_ACTION_RESULTING])) {
            if (is_array($data[self::FIELD_ACTION_RESULTING])) {
                foreach($data[self::FIELD_ACTION_RESULTING] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addActionResulting($v);
                    } else {
                        $this->addActionResulting(new FHIRResourceReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ACTION_RESULTING] instanceof FHIRResourceReference) {
                $this->addActionResulting($data[self::FIELD_ACTION_RESULTING]);
            } else {
                $this->addActionResulting(new FHIRResourceReference($data[self::FIELD_ACTION_RESULTING]));
            }
        }
        if (isset($data[self::FIELD_NOTES]) || isset($data[self::FIELD_NOTES_EXT])) {
            $value = isset($data[self::FIELD_NOTES]) ? $data[self::FIELD_NOTES] : null;
            $ext = (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])) ? $ext = $data[self::FIELD_NOTES_EXT] : $ext = [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNotes($value);
                } else if (is_array($value)) {
                    $this->setNotes(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNotes(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DETAIL])) {
            if ($data[self::FIELD_DETAIL] instanceof FHIRResourceReference) {
                $this->setDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->setDetail(new FHIRResourceReference($data[self::FIELD_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_SIMPLE])) {
            if ($data[self::FIELD_SIMPLE] instanceof FHIRCarePlanSimple) {
                $this->setSimple($data[self::FIELD_SIMPLE]);
            } else {
                $this->setSimple(new FHIRCarePlanSimple($data[self::FIELD_SIMPLE]));
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
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<CarePlanActivity{$xmlns}></CarePlanActivity>";
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive\FHIRXmlIdRef[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive\FHIRXmlIdRef $goal
     * @return static
     */
    public function addGoal($goal = null)
    {
        if (null !== $goal && !($goal instanceof FHIRXmlIdRef)) {
            $goal = new FHIRXmlIdRef($goal);
        }
        $this->_trackValueAdded();
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive\FHIRXmlIdRef[] $goal
     * @return static
     */
    public function setGoal(array $goal = [])
    {
        if ([] !== $this->goal) {
            $this->_trackValuesRemoved(count($this->goal));
            $this->goal = [];
        }
        if ([] === $goal) {
            return $this;
        }
        foreach($goal as $v) {
            if ($v instanceof FHIRXmlIdRef) {
                $this->addGoal($v);
            } else {
                $this->addGoal(new FHIRXmlIdRef($v));
            }
        }
        return $this;
    }

    /**
     * Indicates where the activity is at in its overall life cycle
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates where the activity is at in its overall life cycle
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityStatus $status
     * @return static
     */
    public function setStatus(FHIRCarePlanActivityStatus $status = null)
    {
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean
     */
    public function getProhibited()
    {
        return $this->prohibited;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the described activity is one that must NOT be engaged
     * in when following the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBoolean $prohibited
     * @return static
     */
    public function setProhibited($prohibited = null)
    {
        if (null !== $prohibited && !($prohibited instanceof FHIRBoolean)) {
            $prohibited = new FHIRBoolean($prohibited);
        }
        $this->_trackValueSet($this->prohibited, $prohibited);
        $this->prohibited = $prohibited;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that describe follow-on actions resulting from the plan, such as drug
     * prescriptions, encounter records, appointments, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getActionResulting()
    {
        return $this->actionResulting;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that describe follow-on actions resulting from the plan, such as drug
     * prescriptions, encounter records, appointments, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $actionResulting
     * @return static
     */
    public function addActionResulting(FHIRResourceReference $actionResulting = null)
    {
        $this->_trackValueAdded();
        $this->actionResulting[] = $actionResulting;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Resources that describe follow-on actions resulting from the plan, such as drug
     * prescriptions, encounter records, appointments, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $actionResulting
     * @return static
     */
    public function setActionResulting(array $actionResulting = [])
    {
        if ([] !== $this->actionResulting) {
            $this->_trackValuesRemoved(count($this->actionResulting));
            $this->actionResulting = [];
        }
        if ([] === $actionResulting) {
            return $this;
        }
        foreach($actionResulting as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addActionResulting($v);
            } else {
                $this->addActionResulting(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes about the execution of the activity.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Notes about the execution of the activity.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $notes
     * @return static
     */
    public function setNotes($notes = null)
    {
        if (null !== $notes && !($notes instanceof FHIRString)) {
            $notes = new FHIRString($notes);
        }
        $this->_trackValueSet($this->notes, $notes);
        $this->notes = $notes;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The details of the proposed activity represented in a specific resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $detail
     * @return static
     */
    public function setDetail(FHIRResourceReference $detail = null)
    {
        $this->_trackValueSet($this->detail, $detail);
        $this->detail = $detail;
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * A simple summary of details suitable for a general care plan system (e.g. form
     * driven) that doesn't know about specific resources such as procedure etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple
     */
    public function getSimple()
    {
        return $this->simple;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * A simple summary of details suitable for a general care plan system (e.g. form
     * driven) that doesn't know about specific resources such as procedure etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanSimple $simple
     * @return static
     */
    public function setSimple(FHIRCarePlanSimple $simple = null)
    {
        $this->_trackValueSet($this->simple, $simple);
        $this->simple = $simple;
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
        if ([] !== ($vs = $this->getGoal())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GOAL, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getProhibited())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PROHIBITED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getActionResulting())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTION_RESULTING, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTES] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDetail())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DETAIL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSimple())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SIMPLE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_GOAL])) {
            $v = $this->getGoal();
            foreach($validationRules[self::FIELD_GOAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_GOAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GOAL])) {
                        $errs[self::FIELD_GOAL] = [];
                    }
                    $errs[self::FIELD_GOAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROHIBITED])) {
            $v = $this->getProhibited();
            foreach($validationRules[self::FIELD_PROHIBITED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_PROHIBITED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROHIBITED])) {
                        $errs[self::FIELD_PROHIBITED] = [];
                    }
                    $errs[self::FIELD_PROHIBITED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION_RESULTING])) {
            $v = $this->getActionResulting();
            foreach($validationRules[self::FIELD_ACTION_RESULTING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_ACTION_RESULTING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION_RESULTING])) {
                        $errs[self::FIELD_ACTION_RESULTING] = [];
                    }
                    $errs[self::FIELD_ACTION_RESULTING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETAIL])) {
            $v = $this->getDetail();
            foreach($validationRules[self::FIELD_DETAIL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_DETAIL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETAIL])) {
                        $errs[self::FIELD_DETAIL] = [];
                    }
                    $errs[self::FIELD_DETAIL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SIMPLE])) {
            $v = $this->getSimple();
            foreach($validationRules[self::FIELD_SIMPLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN_DOT_ACTIVITY, self::FIELD_SIMPLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SIMPLE])) {
                        $errs[self::FIELD_SIMPLE] = [];
                    }
                    $errs[self::FIELD_SIMPLE][$rule] = $err;
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
     * @param null|string|\DOMElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            $dom->loadXML($element, $libxmlOpts);
            if (false === $dom) {
                throw new \DomainException(sprintf('FHIRCarePlanActivity::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCarePlanActivity::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRCarePlanActivity(null);
        } elseif (!is_object($type) || !($type instanceof FHIRCarePlanActivity)) {
            throw new \RuntimeException(sprintf(
                'FHIRCarePlanActivity::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_GOAL === $n->nodeName) {
                $type->addGoal(FHIRXmlIdRef::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRCarePlanActivityStatus::xmlUnserialize($n));
            } elseif (self::FIELD_PROHIBITED === $n->nodeName) {
                $type->setProhibited(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_ACTION_RESULTING === $n->nodeName) {
                $type->addActionResulting(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_NOTES === $n->nodeName) {
                $type->setNotes(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DETAIL === $n->nodeName) {
                $type->setDetail(FHIRResourceReference::xmlUnserialize($n));
            } elseif (self::FIELD_SIMPLE === $n->nodeName) {
                $type->setSimple(FHIRCarePlanSimple::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_GOAL);
        if (null !== $n) {
            $pt = $type->getGoal();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->addGoal($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PROHIBITED);
        if (null !== $n) {
            $pt = $type->getProhibited();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setProhibited($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NOTES);
        if (null !== $n) {
            $pt = $type->getNotes();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNotes($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, $libxmlOpts = 591872)
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getGoal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_GOAL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getProhibited())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PROHIBITED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getActionResulting())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ACTION_RESULTING);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getNotes())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NOTES);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDetail())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DETAIL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSimple())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SIMPLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getGoal())) {
            $a[self::FIELD_GOAL] = $vs;
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_STATUS] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRCarePlanActivityStatus::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_STATUS_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getProhibited())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_PROHIBITED] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRBoolean::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_PROHIBITED_EXT] = $ext;
            }
        }
        if ([] !== ($vs = $this->getActionResulting())) {
            $a[self::FIELD_ACTION_RESULTING] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTION_RESULTING][] = $v;
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if (null !== ($val = $v->getValue())) {
                $a[self::FIELD_NOTES] = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext[FHIRString::FIELD_VALUE]);
            if ([] !== $ext) {
                $a[self::FIELD_NOTES_EXT] = $ext;
            }
        }
        if (null !== ($v = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = $v;
        }
        if (null !== ($v = $this->getSimple())) {
            $a[self::FIELD_SIMPLE] = $v;
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