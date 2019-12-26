<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

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

use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanStatus;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference;
use DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU1\PHPFHIRTypeInterface;

/**
 * Describes the intention of how one or more practitioners intend to deliver care
 * for a particular patient for a period of time, possibly limited to care for a
 * specific condition or set of conditions.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCarePlan
 * @package \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource
 */
class FHIRCarePlan extends FHIRResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CARE_PLAN;
    const FIELD_ACTIVITY = 'activity';
    const FIELD_CONCERN = 'concern';
    const FIELD_GOAL = 'goal';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_MODIFIED = 'modified';
    const FIELD_MODIFIED_EXT = '_modified';
    const FIELD_NOTES = 'notes';
    const FIELD_NOTES_EXT = '_notes';
    const FIELD_PARTICIPANT = 'participant';
    const FIELD_PATIENT = 'patient';
    const FIELD_PERIOD = 'period';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Identifies a planned action to occur as part of the plan. For example, a
     * medication to be used, lab tests to perform, self-monitoring, education, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity[]
     */
    protected $activity = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
     * and/or mitigation are handled by this plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    protected $concern = [];

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Describes the intended objective(s) of carrying out the Care Plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal[]
     */
    protected $goal = [];

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this care plan that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the most recent date on which the plan has been revised.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    protected $modified = null;

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * General notes about the care plan not covered elsewhere.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    protected $notes = null;

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Identifies all people and organizations who are expected to be involved in the
     * care envisioned by this plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant[]
     */
    protected $participant = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the patient/subject whose intended care is described by the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    protected $patient = null;

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates when the plan did (or is intended to) come into effect and end.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    protected $period = null;

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanStatus
     */
    protected $status = null;

    /**
     * Validation map for fields in type CarePlan
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRCarePlan Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCarePlan::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACTIVITY])) {
            if (is_array($data[self::FIELD_ACTIVITY])) {
                foreach($data[self::FIELD_ACTIVITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCarePlanActivity) {
                        $this->addActivity($v);
                    } else {
                        $this->addActivity(new FHIRCarePlanActivity($v));
                    }
                }
            } else if ($data[self::FIELD_ACTIVITY] instanceof FHIRCarePlanActivity) {
                $this->addActivity($data[self::FIELD_ACTIVITY]);
            } else {
                $this->addActivity(new FHIRCarePlanActivity($data[self::FIELD_ACTIVITY]));
            }
        }
        if (isset($data[self::FIELD_CONCERN])) {
            if (is_array($data[self::FIELD_CONCERN])) {
                foreach($data[self::FIELD_CONCERN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRResourceReference) {
                        $this->addConcern($v);
                    } else {
                        $this->addConcern(new FHIRResourceReference($v));
                    }
                }
            } else if ($data[self::FIELD_CONCERN] instanceof FHIRResourceReference) {
                $this->addConcern($data[self::FIELD_CONCERN]);
            } else {
                $this->addConcern(new FHIRResourceReference($data[self::FIELD_CONCERN]));
            }
        }
        if (isset($data[self::FIELD_GOAL])) {
            if (is_array($data[self::FIELD_GOAL])) {
                foreach($data[self::FIELD_GOAL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCarePlanGoal) {
                        $this->addGoal($v);
                    } else {
                        $this->addGoal(new FHIRCarePlanGoal($v));
                    }
                }
            } else if ($data[self::FIELD_GOAL] instanceof FHIRCarePlanGoal) {
                $this->addGoal($data[self::FIELD_GOAL]);
            } else {
                $this->addGoal(new FHIRCarePlanGoal($data[self::FIELD_GOAL]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_MODIFIED]) || isset($data[self::FIELD_MODIFIED_EXT])) {
            if (isset($data[self::FIELD_MODIFIED])) {
                $value = $data[self::FIELD_MODIFIED];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_MODIFIED_EXT]) && is_array($data[self::FIELD_MODIFIED_EXT])) {
                $ext = $data[self::FIELD_MODIFIED_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setModified($value);
                } else if (is_array($value)) {
                    $this->setModified(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setModified(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setModified(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_NOTES]) || isset($data[self::FIELD_NOTES_EXT])) {
            if (isset($data[self::FIELD_NOTES])) {
                $value = $data[self::FIELD_NOTES];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NOTES_EXT]) && is_array($data[self::FIELD_NOTES_EXT])) {
                $ext = $data[self::FIELD_NOTES_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setNotes($value);
                } else if (is_array($value)) {
                    $this->setNotes(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setNotes(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setNotes(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCarePlanParticipant) {
                        $this->addParticipant($v);
                    } else {
                        $this->addParticipant(new FHIRCarePlanParticipant($v));
                    }
                }
            } else if ($data[self::FIELD_PARTICIPANT] instanceof FHIRCarePlanParticipant) {
                $this->addParticipant($data[self::FIELD_PARTICIPANT]);
            } else {
                $this->addParticipant(new FHIRCarePlanParticipant($data[self::FIELD_PARTICIPANT]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRResourceReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRResourceReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_PERIOD])) {
            if ($data[self::FIELD_PERIOD] instanceof FHIRPeriod) {
                $this->setPeriod($data[self::FIELD_PERIOD]);
            } else {
                $this->setPeriod(new FHIRPeriod($data[self::FIELD_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCarePlanStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRCarePlanStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRCarePlanStatus([FHIRCarePlanStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRCarePlanStatus($ext));
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
        return "<CarePlan{$xmlns}></CarePlan>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Identifies a planned action to occur as part of the plan. For example, a
     * medication to be used, lab tests to perform, self-monitoring, education, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Identifies a planned action to occur as part of the plan. For example, a
     * medication to be used, lab tests to perform, self-monitoring, education, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity $activity
     * @return static
     */
    public function addActivity(FHIRCarePlanActivity $activity = null)
    {
        $this->activity[] = $activity;
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Identifies a planned action to occur as part of the plan. For example, a
     * medication to be used, lab tests to perform, self-monitoring, education, etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanActivity[] $activity
     * @return static
     */
    public function setActivity(array $activity = [])
    {
        $this->activity = [];
        if ([] === $activity) {
            return $this;
        }
        foreach($activity as $v) {
            if ($v instanceof FHIRCarePlanActivity) {
                $this->addActivity($v);
            } else {
                $this->addActivity(new FHIRCarePlanActivity($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
     * and/or mitigation are handled by this plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    public function getConcern()
    {
        return $this->concern;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
     * and/or mitigation are handled by this plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $concern
     * @return static
     */
    public function addConcern(FHIRResourceReference $concern = null)
    {
        $this->concern[] = $concern;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
     * and/or mitigation are handled by this plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $concern
     * @return static
     */
    public function setConcern(array $concern = [])
    {
        $this->concern = [];
        if ([] === $concern) {
            return $this;
        }
        foreach($concern as $v) {
            if ($v instanceof FHIRResourceReference) {
                $this->addConcern($v);
            } else {
                $this->addConcern(new FHIRResourceReference($v));
            }
        }
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Describes the intended objective(s) of carrying out the Care Plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Describes the intended objective(s) of carrying out the Care Plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal $goal
     * @return static
     */
    public function addGoal(FHIRCarePlanGoal $goal = null)
    {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Describes the intended objective(s) of carrying out the Care Plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal[] $goal
     * @return static
     */
    public function setGoal(array $goal = [])
    {
        $this->goal = [];
        if ([] === $goal) {
            return $this;
        }
        foreach($goal as $v) {
            if ($v instanceof FHIRCarePlanGoal) {
                $this->addGoal($v);
            } else {
                $this->addGoal(new FHIRCarePlanGoal($v));
            }
        }
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this care plan that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this care plan that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this care plan that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the most recent date on which the plan has been revised.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies the most recent date on which the plan has been revised.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $modified
     * @return static
     */
    public function setModified($modified = null)
    {
        if (null === $modified) {
            $this->modified = null;
            return $this;
        }
        if ($modified instanceof FHIRDateTime) {
            $this->modified = $modified;
            return $this;
        }
        $this->modified = new FHIRDateTime($modified);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * General notes about the care plan not covered elsewhere.
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
     * General notes about the care plan not covered elsewhere.
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
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Identifies all people and organizations who are expected to be involved in the
     * care envisioned by this plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Identifies all people and organizations who are expected to be involved in the
     * care envisioned by this plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant $participant
     * @return static
     */
    public function addParticipant(FHIRCarePlanParticipant $participant = null)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Identifies all people and organizations who are expected to be involved in the
     * care envisioned by this plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanParticipant[] $participant
     * @return static
     */
    public function setParticipant(array $participant = [])
    {
        $this->participant = [];
        if ([] === $participant) {
            return $this;
        }
        foreach($participant as $v) {
            if ($v instanceof FHIRCarePlanParticipant) {
                $this->addParticipant($v);
            } else {
                $this->addParticipant(new FHIRCarePlanParticipant($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the patient/subject whose intended care is described by the plan.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the patient/subject whose intended care is described by the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $patient
     * @return static
     */
    public function setPatient(FHIRResourceReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates when the plan did (or is intended to) come into effect and end.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates when the plan did (or is intended to) come into effect and end.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanStatus $status
     * @return static
     */
    public function setStatus(FHIRCarePlanStatus $status = null)
    {
        $this->status = $status;
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
        if ([] !== ($vs = $this->getActivity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ACTIVITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getConcern())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONCERN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getGoal())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_GOAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getModified())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODIFIED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNotes())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOTES] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PARTICIPANT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_ACTIVITY])) {
            $v = $this->getActivity();
            foreach($validationRules[self::FIELD_ACTIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_ACTIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTIVITY])) {
                        $errs[self::FIELD_ACTIVITY] = [];
                    }
                    $errs[self::FIELD_ACTIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCERN])) {
            $v = $this->getConcern();
            foreach($validationRules[self::FIELD_CONCERN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_CONCERN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCERN])) {
                        $errs[self::FIELD_CONCERN] = [];
                    }
                    $errs[self::FIELD_CONCERN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GOAL])) {
            $v = $this->getGoal();
            foreach($validationRules[self::FIELD_GOAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_GOAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GOAL])) {
                        $errs[self::FIELD_GOAL] = [];
                    }
                    $errs[self::FIELD_GOAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIED])) {
            $v = $this->getModified();
            foreach($validationRules[self::FIELD_MODIFIED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_MODIFIED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIED])) {
                        $errs[self::FIELD_MODIFIED] = [];
                    }
                    $errs[self::FIELD_MODIFIED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTES])) {
            $v = $this->getNotes();
            foreach($validationRules[self::FIELD_NOTES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_NOTES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTES])) {
                        $errs[self::FIELD_NOTES] = [];
                    }
                    $errs[self::FIELD_NOTES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTICIPANT])) {
            $v = $this->getParticipant();
            foreach($validationRules[self::FIELD_PARTICIPANT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_PARTICIPANT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTICIPANT])) {
                        $errs[self::FIELD_PARTICIPANT] = [];
                    }
                    $errs[self::FIELD_PARTICIPANT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CARE_PLAN, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
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
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
                throw new \DomainException(sprintf('FHIRCarePlan::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCarePlan::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRCarePlan;
        } elseif (!is_object($type) || !($type instanceof FHIRCarePlan)) {
            throw new \RuntimeException(sprintf(
                'FHIRCarePlan::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->activity)) {
            foreach($children->activity as $child) {
                $type->addActivity(FHIRCarePlanActivity::xmlUnserialize($child));
            }
        }
        if (isset($children->concern)) {
            foreach($children->concern as $child) {
                $type->addConcern(FHIRResourceReference::xmlUnserialize($child));
            }
        }
        if (isset($children->goal)) {
            foreach($children->goal as $child) {
                $type->addGoal(FHIRCarePlanGoal::xmlUnserialize($child));
            }
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->modified)) {
            $type->setModified(FHIRDateTime::xmlUnserialize($children->modified));
        }
        if (isset($attributes->modified)) {
            $pt = $type->getModified();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->modified);
            } else {
                $type->setModified((string)$attributes->modified);
            }
        }
        if (isset($children->notes)) {
            $type->setNotes(FHIRString::xmlUnserialize($children->notes));
        }
        if (isset($attributes->notes)) {
            $pt = $type->getNotes();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->notes);
            } else {
                $type->setNotes((string)$attributes->notes);
            }
        }
        if (isset($children->participant)) {
            foreach($children->participant as $child) {
                $type->addParticipant(FHIRCarePlanParticipant::xmlUnserialize($child));
            }
        }
        if (isset($children->patient)) {
            $type->setPatient(FHIRResourceReference::xmlUnserialize($children->patient));
        }
        if (isset($children->period)) {
            $type->setPeriod(FHIRPeriod::xmlUnserialize($children->period));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRCarePlanStatus::xmlUnserialize($children->status));
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
        if ([] !== ($vs = $this->getActivity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVITY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getConcern())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONCERN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getGoal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GOAL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getModified())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFIED, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getNotes())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getActivity())) {
            $a[self::FIELD_ACTIVITY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ACTIVITY][] = $v;
            }
        }
        if ([] !== ($vs = $this->getConcern())) {
            $a[self::FIELD_CONCERN] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CONCERN][] = $v;
            }
        }
        if ([] !== ($vs = $this->getGoal())) {
            $a[self::FIELD_GOAL] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_GOAL][] = $v;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if (null !== ($v = $this->getModified())) {
            $a[self::FIELD_MODIFIED] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_MODIFIED_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getNotes())) {
            $a[self::FIELD_NOTES] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_NOTES_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PARTICIPANT][] = $v;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRCarePlanStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRCarePlanStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}