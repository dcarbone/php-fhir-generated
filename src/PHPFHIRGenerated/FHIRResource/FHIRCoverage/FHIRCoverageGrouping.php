<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCoverage;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 20th, 2017
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Financial instrument which may be used to reimburse or pay for health care products and services.
 */
class FHIRCoverageGrouping extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifies a style or collective of coverage issued by the underwriter, for example may be used to identify an employer group. May also be referred to as a Policy or Group ID.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $group = null;

    /**
     * A short description for the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $groupDisplay = null;

    /**
     * Identifies a style or collective of coverage issued by the underwriter, for example may be used to identify a subset of an employer group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subGroup = null;

    /**
     * A short description for the subgroup.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subGroupDisplay = null;

    /**
     * Identifies a style or collective of coverage issued by the underwriter, for example may be used to identify a collection of benefits provided to employees. May be referred to as a Section or Division ID.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $plan = null;

    /**
     * A short description for the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $planDisplay = null;

    /**
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter, for example may be used to identify a subset of a collection of benefits provided to employees.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subPlan = null;

    /**
     * A short description for the subplan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subPlanDisplay = null;

    /**
     * Identifies a style or collective of coverage issues by the underwriter, for example may be used to identify a class of coverage such as a level of deductables or co-payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $class = null;

    /**
     * A short description for the class.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $classDisplay = null;

    /**
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter, for example may be used to identify a subclass of coverage such as a sub-level of deductables or co-payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subClass = null;

    /**
     * A short description for the subclass.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $subClassDisplay = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Coverage.Grouping';

    /**
     * Identifies a style or collective of coverage issued by the underwriter, for example may be used to identify an employer group. May also be referred to as a Policy or Group ID.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Identifies a style or collective of coverage issued by the underwriter, for example may be used to identify an employer group. May also be referred to as a Policy or Group ID.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $group
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * A short description for the group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getGroupDisplay()
    {
        return $this->groupDisplay;
    }

    /**
     * A short description for the group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $groupDisplay
     * @return $this
     */
    public function setGroupDisplay($groupDisplay)
    {
        $this->groupDisplay = $groupDisplay;
        return $this;
    }

    /**
     * Identifies a style or collective of coverage issued by the underwriter, for example may be used to identify a subset of an employer group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubGroup()
    {
        return $this->subGroup;
    }

    /**
     * Identifies a style or collective of coverage issued by the underwriter, for example may be used to identify a subset of an employer group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $subGroup
     * @return $this
     */
    public function setSubGroup($subGroup)
    {
        $this->subGroup = $subGroup;
        return $this;
    }

    /**
     * A short description for the subgroup.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubGroupDisplay()
    {
        return $this->subGroupDisplay;
    }

    /**
     * A short description for the subgroup.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $subGroupDisplay
     * @return $this
     */
    public function setSubGroupDisplay($subGroupDisplay)
    {
        $this->subGroupDisplay = $subGroupDisplay;
        return $this;
    }

    /**
     * Identifies a style or collective of coverage issued by the underwriter, for example may be used to identify a collection of benefits provided to employees. May be referred to as a Section or Division ID.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Identifies a style or collective of coverage issued by the underwriter, for example may be used to identify a collection of benefits provided to employees. May be referred to as a Section or Division ID.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $plan
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * A short description for the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPlanDisplay()
    {
        return $this->planDisplay;
    }

    /**
     * A short description for the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $planDisplay
     * @return $this
     */
    public function setPlanDisplay($planDisplay)
    {
        $this->planDisplay = $planDisplay;
        return $this;
    }

    /**
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter, for example may be used to identify a subset of a collection of benefits provided to employees.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubPlan()
    {
        return $this->subPlan;
    }

    /**
     * Identifies a sub-style or sub-collective of coverage issued by the underwriter, for example may be used to identify a subset of a collection of benefits provided to employees.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $subPlan
     * @return $this
     */
    public function setSubPlan($subPlan)
    {
        $this->subPlan = $subPlan;
        return $this;
    }

    /**
     * A short description for the subplan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubPlanDisplay()
    {
        return $this->subPlanDisplay;
    }

    /**
     * A short description for the subplan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $subPlanDisplay
     * @return $this
     */
    public function setSubPlanDisplay($subPlanDisplay)
    {
        $this->subPlanDisplay = $subPlanDisplay;
        return $this;
    }

    /**
     * Identifies a style or collective of coverage issues by the underwriter, for example may be used to identify a class of coverage such as a level of deductables or co-payment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Identifies a style or collective of coverage issues by the underwriter, for example may be used to identify a class of coverage such as a level of deductables or co-payment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * A short description for the class.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getClassDisplay()
    {
        return $this->classDisplay;
    }

    /**
     * A short description for the class.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $classDisplay
     * @return $this
     */
    public function setClassDisplay($classDisplay)
    {
        $this->classDisplay = $classDisplay;
        return $this;
    }

    /**
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter, for example may be used to identify a subclass of coverage such as a sub-level of deductables or co-payment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubClass()
    {
        return $this->subClass;
    }

    /**
     * Identifies a sub-style or sub-collective of coverage issues by the underwriter, for example may be used to identify a subclass of coverage such as a sub-level of deductables or co-payment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $subClass
     * @return $this
     */
    public function setSubClass($subClass)
    {
        $this->subClass = $subClass;
        return $this;
    }

    /**
     * A short description for the subclass.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSubClassDisplay()
    {
        return $this->subClassDisplay;
    }

    /**
     * A short description for the subclass.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $subClassDisplay
     * @return $this
     */
    public function setSubClassDisplay($subClassDisplay)
    {
        $this->subClassDisplay = $subClassDisplay;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (null !== $this->group) $json['group'] = json_encode($this->group);
        if (null !== $this->groupDisplay) $json['groupDisplay'] = json_encode($this->groupDisplay);
        if (null !== $this->subGroup) $json['subGroup'] = json_encode($this->subGroup);
        if (null !== $this->subGroupDisplay) $json['subGroupDisplay'] = json_encode($this->subGroupDisplay);
        if (null !== $this->plan) $json['plan'] = json_encode($this->plan);
        if (null !== $this->planDisplay) $json['planDisplay'] = json_encode($this->planDisplay);
        if (null !== $this->subPlan) $json['subPlan'] = json_encode($this->subPlan);
        if (null !== $this->subPlanDisplay) $json['subPlanDisplay'] = json_encode($this->subPlanDisplay);
        if (null !== $this->class) $json['class'] = json_encode($this->class);
        if (null !== $this->classDisplay) $json['classDisplay'] = json_encode($this->classDisplay);
        if (null !== $this->subClass) $json['subClass'] = json_encode($this->subClass);
        if (null !== $this->subClassDisplay) $json['subClassDisplay'] = json_encode($this->subClassDisplay);
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CoverageGrouping xmlns="http://hl7.org/fhir"></CoverageGrouping>');
        parent::xmlSerialize(true, $sxe);
        if (null !== $this->group) $this->group->xmlSerialize(true, $sxe->addChild('group'));
        if (null !== $this->groupDisplay) $this->groupDisplay->xmlSerialize(true, $sxe->addChild('groupDisplay'));
        if (null !== $this->subGroup) $this->subGroup->xmlSerialize(true, $sxe->addChild('subGroup'));
        if (null !== $this->subGroupDisplay) $this->subGroupDisplay->xmlSerialize(true, $sxe->addChild('subGroupDisplay'));
        if (null !== $this->plan) $this->plan->xmlSerialize(true, $sxe->addChild('plan'));
        if (null !== $this->planDisplay) $this->planDisplay->xmlSerialize(true, $sxe->addChild('planDisplay'));
        if (null !== $this->subPlan) $this->subPlan->xmlSerialize(true, $sxe->addChild('subPlan'));
        if (null !== $this->subPlanDisplay) $this->subPlanDisplay->xmlSerialize(true, $sxe->addChild('subPlanDisplay'));
        if (null !== $this->class) $this->class->xmlSerialize(true, $sxe->addChild('class'));
        if (null !== $this->classDisplay) $this->classDisplay->xmlSerialize(true, $sxe->addChild('classDisplay'));
        if (null !== $this->subClass) $this->subClass->xmlSerialize(true, $sxe->addChild('subClass'));
        if (null !== $this->subClassDisplay) $this->subClassDisplay->xmlSerialize(true, $sxe->addChild('subClassDisplay'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}