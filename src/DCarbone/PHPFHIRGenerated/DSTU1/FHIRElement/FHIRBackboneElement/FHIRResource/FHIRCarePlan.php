<?php

namespace DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 6th, 2019 09:03+0000
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
 * If the element is present, it must have either a @value, an @id, or extensions
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
    private $activity = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
     * and/or mitigation are handled by this plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[]
     */
    private $concern = [];
    /**
     * Describes the intention of how one or more practitioners intend to deliver care
     * for a particular patient for a period of time, possibly limited to care for a
     * specific condition or set of conditions.
     *
     * Describes the intended objective(s) of carrying out the Care Plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRCarePlan\FHIRCarePlanGoal[]
     */
    private $goal = [];
    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this care plan that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[]
     */
    private $identifier = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds may be provided
     * but may also be ignored. Dates SHALL be valid dates.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the most recent date on which the plan has been revised.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime
     */
    private $modified = null;
    /**
     * A sequence of Unicode characters
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * General notes about the care plan not covered elsewhere.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString
     */
    private $notes = null;
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
    private $participant = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the patient/subject whose intended care is described by the plan.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference
     */
    private $patient = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates when the plan did (or is intended to) come into effect and end.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod
     */
    private $period = null;
    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanStatus
     */
    private $status = null;

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
        if (isset($data[self::FIELD_MODIFIED])) {
            $ext = (isset($data[self::FIELD_MODIFIED_EXT]) && is_array($data[self::FIELD_MODIFIED_EXT]))
                ? $data[self::FIELD_MODIFIED_EXT]
                : null;
            if ($data[self::FIELD_MODIFIED] instanceof FHIRDateTime) {
                $this->setModified($data[self::FIELD_MODIFIED]);
            } elseif ($ext && is_scalar($data[self::FIELD_MODIFIED])) {
                $this->setModified(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $data[self::FIELD_MODIFIED]] + $ext));
            } else {
                $this->setModified(new FHIRDateTime($data[self::FIELD_MODIFIED]));
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
        if (isset($data[self::FIELD_PARTICIPANT])) {
            if (is_array($data[self::FIELD_PARTICIPANT])) {
                foreach($data[self::FIELD_PARTICIPANT] as $v) {
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
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCarePlanStatus) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCarePlanStatus($data[self::FIELD_STATUS]));
            }
        }
    }

    /**
     * @return string
     */
    public function getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
     * and/or mitigation are handled by this plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $concern
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     */
    public function addConcern(FHIRResourceReference $concern = null)
    {
        $this->concern[] = $concern;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management
     * and/or mitigation are handled by this plan.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference[] $concern
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this care plan that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this care plan that are defined by
     * business processed and/ or used to refer to it when a direct URL reference to
     * the resource itself is not appropriate (e.g. in CDA documents, or in written /
     * printed documentation).
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRIdentifier[] $identifier
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Identifies the most recent date on which the plan has been revised.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRDateTime $modified
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * General notes about the care plan not covered elsewhere.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRString $notes
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
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
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Identifies the patient/subject whose intended care is described by the plan.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRResourceReference $patient
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     */
    public function setPatient(FHIRResourceReference $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an @id referenced from the Narrative, or extensions
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
     * elements, an @id referenced from the Narrative, or extensions
     *
     * Indicates when the plan did (or is intended to) come into effect and end.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRPeriod $period
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     */
    public function setPeriod(FHIRPeriod $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     * If the element is present, it must have either a @value, an @id, or extensions
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
     * If the element is present, it must have either a @value, an @id, or extensions
     *
     * Indicates whether the plan is currently being acted upon, represents future
     * intentions or is now just historical record.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRCarePlanStatus $status
     * @return \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     */
    public function setStatus(FHIRCarePlanStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan $type
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRCarePlan::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCarePlan::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = FHIRResource::xmlUnserialize($sxe, new FHIRCarePlan);
        } elseif (!is_object($type) || !($type instanceof FHIRCarePlan)) {
            throw new \RuntimeException(sprintf(
                'FHIRCarePlan::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\DSTU1\FHIRElement\FHIRBackboneElement\FHIRResource\FHIRCarePlan or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
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
        if (isset($attributes->modified)) {
            $type->setModified((string)$attributes->modified);
        }
        if (isset($children->modified)) {
            $type->setModified(FHIRDateTime::xmlUnserialize($children->modified));
        }
        if (isset($attributes->notes)) {
            $type->setNotes((string)$attributes->notes);
        }
        if (isset($children->notes)) {
            $type->setNotes(FHIRString::xmlUnserialize($children->notes));
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
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<CarePlan xmlns="http://hl7.org/fhir"></CarePlan>');
        }
        parent::xmlSerialize($sxe);

        if ([] !== ($vs = $this->getActivity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ACTIVITY));
            }
        }

        if ([] !== ($vs = $this->getConcern())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CONCERN));
            }
        }

        if ([] !== ($vs = $this->getGoal())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_GOAL));
            }
        }

        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER));
            }
        }
        if (null !== ($v = $this->getModified())) {
            $sxe->addAttribute(self::FIELD_MODIFIED, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_MODIFIED));
            }
        }
        if (null !== ($v = $this->getNotes())) {
            $sxe->addAttribute(self::FIELD_NOTES, (string)$v);
            if (null !== $v->getId() || [] !== $v->getExtension()) {
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTES));
            }
        }

        if ([] !== ($vs = $this->getParticipant())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PARTICIPANT));
            }
        }

        if (null !== ($v = $this->getPatient())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PATIENT));
        }

        if (null !== ($v = $this->getPeriod())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERIOD));
        }

        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS));
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
            $a[self::FIELD_ACTIVITY] = $vs;
        }
        if ([] !== ($vs = $this->getConcern())) {
            $a[self::FIELD_CONCERN] = $vs;
        }
        if ([] !== ($vs = $this->getGoal())) {
            $a[self::FIELD_GOAL] = $vs;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = $vs;
        }
        if (null !== ($v = $this->getModified())) {
            $a[self::FIELD_MODIFIED] = (string)$v;
            $a[self::FIELD_MODIFIED_EXT] = $v;
        }
        if (null !== ($v = $this->getNotes())) {
            $a[self::FIELD_NOTES] = (string)$v;
            $a[self::FIELD_NOTES_EXT] = $v;
        }
        if ([] !== ($vs = $this->getParticipant())) {
            $a[self::FIELD_PARTICIPANT] = $vs;
        }
        if (null !== ($v = $this->getPatient())) {
            $a[self::FIELD_PATIENT] = $v;
        }
        if (null !== ($v = $this->getPeriod())) {
            $a[self::FIELD_PERIOD] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => self::FHIR_TYPE_NAME] + $a;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}