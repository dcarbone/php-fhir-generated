<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: November 10th, 2019 18:12+0000
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
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
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

    /** @var string */
    protected $_xmlns = 'http://hl7.org/fhir';

    const FIELD_ACTION_RESULTING = 'actionResulting';
    const FIELD_DETAIL = 'detail';
    const FIELD_GOAL = 'goal';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';
    const FIELD_PROHIBITED = 'prohibited';
    const FIELD_PROHIBITED_EXT = '_prohibited';
    const FIELD_SIMPLE = 'simple';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';

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
     * Internal reference that identifies the goals that this activity is intended to
     * contribute towards meeting.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRIdPrimitive\FHIRXmlIdRef[]
     */
    protected $goal = [];

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
     * Indicates where the activity is at in its overall life cycle
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies what progress is being made for the specific activity.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanActivityStatus
     */
    protected $status = null;

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
        if (isset($data[self::FIELD_ACTION_RESULTING])) {
            if (is_array($data[self::FIELD_ACTION_RESULTING])) {
                foreach($data[self::FIELD_ACTION_RESULTING] as $v) {
                    if ($v instanceof FHIRResourceReference) {
                        $this->addActionResulting($v);
                    } else {
                        $this->addActionResulting(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_ACTION_RESULTING] instanceof FHIRResourceReference) {
                $this->addActionResulting($data[self::FIELD_ACTION_RESULTING]);
            } else {
                $this->addActionResulting(new FHIRResourceReference($data[self::FIELD_ACTION_RESULTING]));
            }
        }
        if (isset($data[self::FIELD_DETAIL])) {
            if ($data[self::FIELD_DETAIL] instanceof FHIRResourceReference) {
                $this->setDetail($data[self::FIELD_DETAIL]);
            } else {
                $this->setDetail(new FHIRResourceReference($data[self::FIELD_DETAIL]));
            }
        }
        if (isset($data[self::FIELD_GOAL])) {
            if (is_array($data[self::FIELD_GOAL])) {
                foreach($data[self::FIELD_GOAL] as $v) {
                    if ($v instanceof FHIRXmlIdRef) {
                        $this->addGoal($v);
                    } else {
                        $this->addGoal(new FHIRXmlIdRef($v));
                    }
                }
            } else if ($data[self::FIELD_GOAL] instanceof FHIRXmlIdRef) {
                $this->addGoal($data[self::FIELD_GOAL]);
            } else {
                $this->addGoal(new FHIRXmlIdRef($data[self::FIELD_GOAL]));
            }
        }
        if (isset($data[self::FIELD_NOTES])) {
            $ext = (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT]))
                ? $data[self::FIELD_NOTES_EXT]
                : null;
            if ($data[self::FIELD_NOTES] instanceof FHIRString) {
                $this->setNotes($data[self::FIELD_NOTES]);
            } elseif ($ext && is_scalar($data[self::FIELD_NOTES])) {
                $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $data[self::FIELD_NOTES]] + $ext));
            } else {
                $this->setNotes(new FHIRString($data[self::FIELD_NOTES]));
            }
        }
        if (isset($data[self::FIELD_PROHIBITED])) {
            $ext = (isset($data[self::FIELD_PROHIBITED_EXT]) && is_array($data[self::FIELD_PROHIBITED_EXT]))
                ? $data[self::FIELD_PROHIBITED_EXT]
                : null;
            if ($data[self::FIELD_PROHIBITED] instanceof FHIRBoolean) {
                $this->setProhibited($data[self::FIELD_PROHIBITED]);
            } elseif ($ext && is_scalar($data[self::FIELD_PROHIBITED])) {
                $this->setProhibited(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $data[self::FIELD_PROHIBITED]] + $ext));
            } else {
                $this->setProhibited(new FHIRBoolean($data[self::FIELD_PROHIBITED]));
            }
        }
        if (isset($data[self::FIELD_SIMPLE])) {
            if ($data[self::FIELD_SIMPLE] instanceof FHIRCarePlanSimple) {
                $this->setSimple($data[self::FIELD_SIMPLE]);
            } else {
                $this->setSimple(new FHIRCarePlanSimple($data[self::FIELD_SIMPLE]));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT]))
                ? $data[self::FIELD_STATUS_EXT]
                : null;
            if ($data[self::FIELD_STATUS] instanceof FHIRCarePlanActivityStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } elseif ($ext && is_scalar($data[self::FIELD_STATUS])) {
                $this->setStatus(new FHIRCarePlanActivityStatus([FHIRCarePlanActivityStatus::FIELD_VALUE => $data[self::FIELD_STATUS]] + $ext));
            } else {
                $this->setStatus(new FHIRCarePlanActivityStatus($data[self::FIELD_STATUS]));
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
     * @return static
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
        return "<CarePlanActivity{$xmlns}></CarePlanActivity>";
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
        $this->actionResulting = [];
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
        $this->detail = $detail;
        return $this;
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
    public function addGoal(FHIRXmlIdRef $goal = null)
    {
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
        $this->goal = [];
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
        if (null === $notes) {
            $this->notes = null;
            return $this;
        }
        if ($notes instanceof FHIRString) {
            $this->notes = $notes;
            return $this;
        }
        $this->notes = new FHIRString($notes);
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
        if (null === $prohibited) {
            $this->prohibited = null;
            return $this;
        }
        if ($prohibited instanceof FHIRBoolean) {
            $this->prohibited = $prohibited;
            return $this;
        }
        $this->prohibited = new FHIRBoolean($prohibited);
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
        $this->simple = $simple;
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
        $this->status = $status;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity
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
                throw new \DomainException(sprintf('FHIRCarePlanActivity::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCarePlanActivity::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCarePlanActivity;
        } elseif (!is_object($type) || !($type instanceof FHIRCarePlanActivity)) {
            throw new \RuntimeException(sprintf(
                'FHIRCarePlanActivity::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity or null, %s seen.',
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
        if (isset($children->actionResulting)) {
            foreach($children->actionResulting as $child) {
                $type->addActionResulting(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->detail)) {
            $type->setDetail(FHIRResourceReference::xmlUnserialize($children->detail));
        }
        if (isset($children->goal)) {
            foreach($children->goal as $child) {
                $type->addGoal(FHIRXmlIdRef::xmlUnserialize($child));
            }
        }
        if (isset($attributes->notes)) {
            $type->setNotes((string)$attributes->notes);
        }
        if (isset($children->notes)) {
            $type->setNotes(FHIRString::xmlUnserialize($children->notes));
        }
        if (isset($attributes->prohibited)) {
            $type->setProhibited((string)$attributes->prohibited);
        }
        if (isset($children->prohibited)) {
            $type->setProhibited(FHIRBoolean::xmlUnserialize($children->prohibited));
        }
        if (isset($children->simple)) {
            $type->setSimple(FHIRCarePlanSimple::xmlUnserialize($children->simple));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCarePlanActivityStatus::xmlUnserialize($children->status));
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

        if ([] !== ($vs = $this->getActionResulting())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTION_RESULTING, null, $v->_getFHIRXMLNamespace()));
            }
        }

        if (null !== ($v = $this->getDetail())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DETAIL, null, $v->_getFHIRXMLNamespace()));
        }

        if ([] !== ($vs = $this->getGoal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GOAL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getNotes())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getProhibited())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PROHIBITED, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getSimple())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SIMPLE, null, $v->_getFHIRXMLNamespace()));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if ([] !== ($vs = $this->getActionResulting())) {
            $a[self::FIELD_ACTION_RESULTING] = $vs;
        }
        if (null !== ($v = $this->getDetail())) {
            $a[self::FIELD_DETAIL] = $v;
        }
        if ([] !== ($vs = $this->getGoal())) {
            $a[self::FIELD_GOAL] = $vs;
        }
        if (null !== ($v = $this->getNotes())) {
            $a[self::FIELD_NOTES] = $v->getValue();
            $a[self::FIELD_NOTES_EXT] = $v;
        }
        if (null !== ($v = $this->getProhibited())) {
            $a[self::FIELD_PROHIBITED] = $v->getValue();
            $a[self::FIELD_PROHIBITED_EXT] = $v;
        }
        if (null !== ($v = $this->getSimple())) {
            $a[self::FIELD_SIMPLE] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
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