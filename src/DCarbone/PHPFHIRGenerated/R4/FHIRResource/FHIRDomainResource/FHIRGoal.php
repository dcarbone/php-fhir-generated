<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGoalLifecycleStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Describes the intended objective(s) for a patient, group or organization care,
 * for example, weight loss, restoring an activity of daily living, obtaining herd
 * immunity via immunization, meeting a process improvement objective, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRGoal
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRGoal extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_GOAL;
    const FIELD_ACHIEVEMENT_STATUS = 'achievementStatus';
    const FIELD_ADDRESSES = 'addresses';
    const FIELD_CATEGORY = 'category';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_EXPRESSED_BY = 'expressedBy';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_LIFECYCLE_STATUS = 'lifecycleStatus';
    const FIELD_LIFECYCLE_STATUS_EXT = '_lifecycleStatus';
    const FIELD_NOTE = 'note';
    const FIELD_OUTCOME_CODE = 'outcomeCode';
    const FIELD_OUTCOME_REFERENCE = 'outcomeReference';
    const FIELD_PRIORITY = 'priority';
    const FIELD_START_CODEABLE_CONCEPT = 'startCodeableConcept';
    const FIELD_START_DATE = 'startDate';
    const FIELD_START_DATE_EXT = '_startDate';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_STATUS_DATE_EXT = '_statusDate';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_STATUS_REASON_EXT = '_statusReason';
    const FIELD_SUBJECT = 'subject';
    const FIELD_TARGET = 'target';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the progression, or lack thereof, towards the goal against the target.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $achievementStatus = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identified conditions and other health record elements that are intended to
     * be addressed by the goal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $addresses = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a category the goal falls within.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $category = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Human-readable and/or coded description of a specific desired objective of care,
     * such as "control blood pressure" or "negotiate an obstacle course" or "dance
     * with child at wedding".
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $description = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $expressedBy = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this goal by the performer or other systems
     * which remain constant as the resource is updated and propagates from server to
     * server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * Codes that reflect the current state of a goal and whether the goal is still
     * being targeted.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The state of the goal throughout its lifecycle.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGoalLifecycleStatus
     */
    protected $lifecycleStatus = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any comments related to the goal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the change (or lack of change) at the point when the status of the
     * goal is assessed.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $outcomeCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of what's changed (or not changed).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $outcomeReference = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the mutually agreed level of importance associated with
     * reaching/sustaining the goal.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or event after which the goal should begin being pursued. (choose any
     * one of start*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $startCodeableConcept = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or event after which the goal should begin being pursued. (choose any
     * one of start*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $startDate = null;

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies when the current status. I.e. When initially created, when achieved,
     * when cancelled, etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    protected $statusDate = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Captures the reason for the current status.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    protected $statusReason = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the patient, group or organization for whom the goal is being
     * established.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     *
     * Indicates what should be done by when.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget[]
     */
    protected $target = [];

    /**
     * Validation map for fields in type Goal
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRGoal Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRGoal::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_ACHIEVEMENT_STATUS])) {
            if ($data[self::FIELD_ACHIEVEMENT_STATUS] instanceof FHIRCodeableConcept) {
                $this->setAchievementStatus($data[self::FIELD_ACHIEVEMENT_STATUS]);
            } else {
                $this->setAchievementStatus(new FHIRCodeableConcept($data[self::FIELD_ACHIEVEMENT_STATUS]));
            }
        }
        if (isset($data[self::FIELD_ADDRESSES])) {
            if (is_array($data[self::FIELD_ADDRESSES])) {
                foreach($data[self::FIELD_ADDRESSES] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAddresses($v);
                    } else {
                        $this->addAddresses(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_ADDRESSES] instanceof FHIRReference) {
                $this->addAddresses($data[self::FIELD_ADDRESSES]);
            } else {
                $this->addAddresses(new FHIRReference($data[self::FIELD_ADDRESSES]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION])) {
            if ($data[self::FIELD_DESCRIPTION] instanceof FHIRCodeableConcept) {
                $this->setDescription($data[self::FIELD_DESCRIPTION]);
            } else {
                $this->setDescription(new FHIRCodeableConcept($data[self::FIELD_DESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_EXPRESSED_BY])) {
            if ($data[self::FIELD_EXPRESSED_BY] instanceof FHIRReference) {
                $this->setExpressedBy($data[self::FIELD_EXPRESSED_BY]);
            } else {
                $this->setExpressedBy(new FHIRReference($data[self::FIELD_EXPRESSED_BY]));
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
        if (isset($data[self::FIELD_LIFECYCLE_STATUS]) || isset($data[self::FIELD_LIFECYCLE_STATUS_EXT])) {
            if (isset($data[self::FIELD_LIFECYCLE_STATUS])) {
                $value = $data[self::FIELD_LIFECYCLE_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_LIFECYCLE_STATUS_EXT]) && is_array($data[self::FIELD_LIFECYCLE_STATUS_EXT])) {
                $ext = $data[self::FIELD_LIFECYCLE_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRGoalLifecycleStatus) {
                    $this->setLifecycleStatus($value);
                } else if (is_array($value)) {
                    $this->setLifecycleStatus(new FHIRGoalLifecycleStatus(array_merge($ext, $value)));
                } else {
                    $this->setLifecycleStatus(new FHIRGoalLifecycleStatus([FHIRGoalLifecycleStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setLifecycleStatus(new FHIRGoalLifecycleStatus($ext));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME_CODE])) {
            if (is_array($data[self::FIELD_OUTCOME_CODE])) {
                foreach($data[self::FIELD_OUTCOME_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addOutcomeCode($v);
                    } else {
                        $this->addOutcomeCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_OUTCOME_CODE] instanceof FHIRCodeableConcept) {
                $this->addOutcomeCode($data[self::FIELD_OUTCOME_CODE]);
            } else {
                $this->addOutcomeCode(new FHIRCodeableConcept($data[self::FIELD_OUTCOME_CODE]));
            }
        }
        if (isset($data[self::FIELD_OUTCOME_REFERENCE])) {
            if (is_array($data[self::FIELD_OUTCOME_REFERENCE])) {
                foreach($data[self::FIELD_OUTCOME_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addOutcomeReference($v);
                    } else {
                        $this->addOutcomeReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_OUTCOME_REFERENCE] instanceof FHIRReference) {
                $this->addOutcomeReference($data[self::FIELD_OUTCOME_REFERENCE]);
            } else {
                $this->addOutcomeReference(new FHIRReference($data[self::FIELD_OUTCOME_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY])) {
            if ($data[self::FIELD_PRIORITY] instanceof FHIRCodeableConcept) {
                $this->setPriority($data[self::FIELD_PRIORITY]);
            } else {
                $this->setPriority(new FHIRCodeableConcept($data[self::FIELD_PRIORITY]));
            }
        }
        if (isset($data[self::FIELD_START_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_START_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setStartCodeableConcept($data[self::FIELD_START_CODEABLE_CONCEPT]);
            } else {
                $this->setStartCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_START_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_START_DATE]) || isset($data[self::FIELD_START_DATE_EXT])) {
            if (isset($data[self::FIELD_START_DATE])) {
                $value = $data[self::FIELD_START_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_START_DATE_EXT]) && is_array($data[self::FIELD_START_DATE_EXT])) {
                $ext = $data[self::FIELD_START_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setStartDate($value);
                } else if (is_array($value)) {
                    $this->setStartDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setStartDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStartDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_DATE]) || isset($data[self::FIELD_STATUS_DATE_EXT])) {
            if (isset($data[self::FIELD_STATUS_DATE])) {
                $value = $data[self::FIELD_STATUS_DATE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_DATE_EXT]) && is_array($data[self::FIELD_STATUS_DATE_EXT])) {
                $ext = $data[self::FIELD_STATUS_DATE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setStatusDate($value);
                } else if (is_array($value)) {
                    $this->setStatusDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setStatusDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatusDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON]) || isset($data[self::FIELD_STATUS_REASON_EXT])) {
            if (isset($data[self::FIELD_STATUS_REASON])) {
                $value = $data[self::FIELD_STATUS_REASON];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_REASON_EXT]) && is_array($data[self::FIELD_STATUS_REASON_EXT])) {
                $ext = $data[self::FIELD_STATUS_REASON_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setStatusReason($value);
                } else if (is_array($value)) {
                    $this->setStatusReason(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setStatusReason(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatusReason(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_TARGET])) {
            if (is_array($data[self::FIELD_TARGET])) {
                foreach($data[self::FIELD_TARGET] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRGoalTarget) {
                        $this->addTarget($v);
                    } else {
                        $this->addTarget(new FHIRGoalTarget($v));
                    }
                }
            } else if ($data[self::FIELD_TARGET] instanceof FHIRGoalTarget) {
                $this->addTarget($data[self::FIELD_TARGET]);
            } else {
                $this->addTarget(new FHIRGoalTarget($data[self::FIELD_TARGET]));
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
        return "<Goal{$xmlns}></Goal>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the progression, or lack thereof, towards the goal against the target.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getAchievementStatus()
    {
        return $this->achievementStatus;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the progression, or lack thereof, towards the goal against the target.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $achievementStatus
     * @return static
     */
    public function setAchievementStatus(FHIRCodeableConcept $achievementStatus = null)
    {
        $this->achievementStatus = $achievementStatus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identified conditions and other health record elements that are intended to
     * be addressed by the goal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identified conditions and other health record elements that are intended to
     * be addressed by the goal.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $addresses
     * @return static
     */
    public function addAddresses(FHIRReference $addresses = null)
    {
        $this->addresses[] = $addresses;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The identified conditions and other health record elements that are intended to
     * be addressed by the goal.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $addresses
     * @return static
     */
    public function setAddresses(array $addresses = [])
    {
        $this->addresses = [];
        if ([] === $addresses) {
            return $this;
        }
        foreach($addresses as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAddresses($v);
            } else {
                $this->addAddresses(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a category the goal falls within.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a category the goal falls within.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a category the goal falls within.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $category
     * @return static
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Human-readable and/or coded description of a specific desired objective of care,
     * such as "control blood pressure" or "negotiate an obstacle course" or "dance
     * with child at wedding".
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Human-readable and/or coded description of a specific desired objective of care,
     * such as "control blood pressure" or "negotiate an obstacle course" or "dance
     * with child at wedding".
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $description
     * @return static
     */
    public function setDescription(FHIRCodeableConcept $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getExpressedBy()
    {
        return $this->expressedBy;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $expressedBy
     * @return static
     */
    public function setExpressedBy(FHIRReference $expressedBy = null)
    {
        $this->expressedBy = $expressedBy;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this goal by the performer or other systems
     * which remain constant as the resource is updated and propagates from server to
     * server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this goal by the performer or other systems
     * which remain constant as the resource is updated and propagates from server to
     * server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifiers assigned to this goal by the performer or other systems
     * which remain constant as the resource is updated and propagates from server to
     * server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
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
     * Codes that reflect the current state of a goal and whether the goal is still
     * being targeted.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The state of the goal throughout its lifecycle.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGoalLifecycleStatus
     */
    public function getLifecycleStatus()
    {
        return $this->lifecycleStatus;
    }

    /**
     * Codes that reflect the current state of a goal and whether the goal is still
     * being targeted.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The state of the goal throughout its lifecycle.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRGoalLifecycleStatus $lifecycleStatus
     * @return static
     */
    public function setLifecycleStatus(FHIRGoalLifecycleStatus $lifecycleStatus = null)
    {
        $this->lifecycleStatus = $lifecycleStatus;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any comments related to the goal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any comments related to the goal.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any comments related to the goal.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the change (or lack of change) at the point when the status of the
     * goal is assessed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOutcomeCode()
    {
        return $this->outcomeCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the change (or lack of change) at the point when the status of the
     * goal is assessed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $outcomeCode
     * @return static
     */
    public function addOutcomeCode(FHIRCodeableConcept $outcomeCode = null)
    {
        $this->outcomeCode[] = $outcomeCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the change (or lack of change) at the point when the status of the
     * goal is assessed.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $outcomeCode
     * @return static
     */
    public function setOutcomeCode(array $outcomeCode = [])
    {
        $this->outcomeCode = [];
        if ([] === $outcomeCode) {
            return $this;
        }
        foreach($outcomeCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addOutcomeCode($v);
            } else {
                $this->addOutcomeCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of what's changed (or not changed).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getOutcomeReference()
    {
        return $this->outcomeReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of what's changed (or not changed).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $outcomeReference
     * @return static
     */
    public function addOutcomeReference(FHIRReference $outcomeReference = null)
    {
        $this->outcomeReference[] = $outcomeReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Details of what's changed (or not changed).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $outcomeReference
     * @return static
     */
    public function setOutcomeReference(array $outcomeReference = [])
    {
        $this->outcomeReference = [];
        if ([] === $outcomeReference) {
            return $this;
        }
        foreach($outcomeReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addOutcomeReference($v);
            } else {
                $this->addOutcomeReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the mutually agreed level of importance associated with
     * reaching/sustaining the goal.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the mutually agreed level of importance associated with
     * reaching/sustaining the goal.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $priority
     * @return static
     */
    public function setPriority(FHIRCodeableConcept $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or event after which the goal should begin being pursued. (choose any
     * one of start*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStartCodeableConcept()
    {
        return $this->startCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The date or event after which the goal should begin being pursued. (choose any
     * one of start*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $startCodeableConcept
     * @return static
     */
    public function setStartCodeableConcept(FHIRCodeableConcept $startCodeableConcept = null)
    {
        $this->startCodeableConcept = $startCodeableConcept;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or event after which the goal should begin being pursued. (choose any
     * one of start*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date or event after which the goal should begin being pursued. (choose any
     * one of start*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $startDate
     * @return static
     */
    public function setStartDate($startDate = null)
    {
        if (null === $startDate) {
            $this->startDate = null;
            return $this;
        }
        if ($startDate instanceof FHIRDate) {
            $this->startDate = $startDate;
            return $this;
        }
        $this->startDate = new FHIRDate($startDate);
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies when the current status. I.e. When initially created, when achieved,
     * when cancelled, etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Identifies when the current status. I.e. When initially created, when achieved,
     * when cancelled, etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDate $statusDate
     * @return static
     */
    public function setStatusDate($statusDate = null)
    {
        if (null === $statusDate) {
            $this->statusDate = null;
            return $this;
        }
        if ($statusDate instanceof FHIRDate) {
            $this->statusDate = $statusDate;
            return $this;
        }
        $this->statusDate = new FHIRDate($statusDate);
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Captures the reason for the current status.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Captures the reason for the current status.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRString $statusReason
     * @return static
     */
    public function setStatusReason($statusReason = null)
    {
        if (null === $statusReason) {
            $this->statusReason = null;
            return $this;
        }
        if ($statusReason instanceof FHIRString) {
            $this->statusReason = $statusReason;
            return $this;
        }
        $this->statusReason = new FHIRString($statusReason);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the patient, group or organization for whom the goal is being
     * established.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the patient, group or organization for whom the goal is being
     * established.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     *
     * Indicates what should be done by when.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     *
     * Indicates what should be done by when.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget $target
     * @return static
     */
    public function addTarget(FHIRGoalTarget $target = null)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * Describes the intended objective(s) for a patient, group or organization care,
     * for example, weight loss, restoring an activity of daily living, obtaining herd
     * immunity via immunization, meeting a process improvement objective, etc.
     *
     * Indicates what should be done by when.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRGoal\FHIRGoalTarget[] $target
     * @return static
     */
    public function setTarget(array $target = [])
    {
        $this->target = [];
        if ([] === $target) {
            return $this;
        }
        foreach($target as $v) {
            if ($v instanceof FHIRGoalTarget) {
                $this->addTarget($v);
            } else {
                $this->addTarget(new FHIRGoalTarget($v));
            }
        }
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
        if (null !== ($v = $this->getAchievementStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACHIEVEMENT_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAddresses())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDRESSES, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExpressedBy())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPRESSED_BY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getLifecycleStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIFECYCLE_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOutcomeCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OUTCOME_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOutcomeReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OUTCOME_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStartCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_START_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStartDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_START_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_REASON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACHIEVEMENT_STATUS])) {
            $v = $this->getAchievementStatus();
            foreach($validationRules[self::FIELD_ACHIEVEMENT_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_ACHIEVEMENT_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACHIEVEMENT_STATUS])) {
                        $errs[self::FIELD_ACHIEVEMENT_STATUS] = [];
                    }
                    $errs[self::FIELD_ACHIEVEMENT_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESSES])) {
            $v = $this->getAddresses();
            foreach($validationRules[self::FIELD_ADDRESSES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_ADDRESSES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESSES])) {
                        $errs[self::FIELD_ADDRESSES] = [];
                    }
                    $errs[self::FIELD_ADDRESSES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPRESSED_BY])) {
            $v = $this->getExpressedBy();
            foreach($validationRules[self::FIELD_EXPRESSED_BY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_EXPRESSED_BY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPRESSED_BY])) {
                        $errs[self::FIELD_EXPRESSED_BY] = [];
                    }
                    $errs[self::FIELD_EXPRESSED_BY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIFECYCLE_STATUS])) {
            $v = $this->getLifecycleStatus();
            foreach($validationRules[self::FIELD_LIFECYCLE_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_LIFECYCLE_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIFECYCLE_STATUS])) {
                        $errs[self::FIELD_LIFECYCLE_STATUS] = [];
                    }
                    $errs[self::FIELD_LIFECYCLE_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME_CODE])) {
            $v = $this->getOutcomeCode();
            foreach($validationRules[self::FIELD_OUTCOME_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_OUTCOME_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME_CODE])) {
                        $errs[self::FIELD_OUTCOME_CODE] = [];
                    }
                    $errs[self::FIELD_OUTCOME_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME_REFERENCE])) {
            $v = $this->getOutcomeReference();
            foreach($validationRules[self::FIELD_OUTCOME_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_OUTCOME_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME_REFERENCE])) {
                        $errs[self::FIELD_OUTCOME_REFERENCE] = [];
                    }
                    $errs[self::FIELD_OUTCOME_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_START_CODEABLE_CONCEPT])) {
            $v = $this->getStartCodeableConcept();
            foreach($validationRules[self::FIELD_START_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_START_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_START_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_START_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_START_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_START_DATE])) {
            $v = $this->getStartDate();
            foreach($validationRules[self::FIELD_START_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_START_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_START_DATE])) {
                        $errs[self::FIELD_START_DATE] = [];
                    }
                    $errs[self::FIELD_START_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_REASON])) {
            $v = $this->getStatusReason();
            foreach($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_REASON])) {
                        $errs[self::FIELD_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET])) {
            $v = $this->getTarget();
            foreach($validationRules[self::FIELD_TARGET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_GOAL, self::FIELD_TARGET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET])) {
                        $errs[self::FIELD_TARGET] = [];
                    }
                    $errs[self::FIELD_TARGET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
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
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGoal $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGoal
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
                throw new \DomainException(sprintf('FHIRGoal::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRGoal::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRGoal;
        } elseif (!is_object($type) || !($type instanceof FHIRGoal)) {
            throw new \RuntimeException(sprintf(
                'FHIRGoal::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRGoal or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->achievementStatus)) {
            $type->setAchievementStatus(FHIRCodeableConcept::xmlUnserialize($children->achievementStatus));
        }
        if (isset($children->addresses)) {
            foreach($children->addresses as $child) {
                $type->addAddresses(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->description)) {
            $type->setDescription(FHIRCodeableConcept::xmlUnserialize($children->description));
        }
        if (isset($children->expressedBy)) {
            $type->setExpressedBy(FHIRReference::xmlUnserialize($children->expressedBy));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->lifecycleStatus)) {
            $type->setLifecycleStatus(FHIRGoalLifecycleStatus::xmlUnserialize($children->lifecycleStatus));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->outcomeCode)) {
            foreach($children->outcomeCode as $child) {
                $type->addOutcomeCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->outcomeReference)) {
            foreach($children->outcomeReference as $child) {
                $type->addOutcomeReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRCodeableConcept::xmlUnserialize($children->priority));
        }
        if (isset($children->startCodeableConcept)) {
            $type->setStartCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->startCodeableConcept));
        }
        if (isset($children->startDate)) {
            $type->setStartDate(FHIRDate::xmlUnserialize($children->startDate));
        }
        if (isset($attributes->startDate)) {
            $pt = $type->getStartDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->startDate);
            } else {
                $type->setStartDate((string)$attributes->startDate);
            }
        }
        if (isset($children->statusDate)) {
            $type->setStatusDate(FHIRDate::xmlUnserialize($children->statusDate));
        }
        if (isset($attributes->statusDate)) {
            $pt = $type->getStatusDate();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->statusDate);
            } else {
                $type->setStatusDate((string)$attributes->statusDate);
            }
        }
        if (isset($children->statusReason)) {
            $type->setStatusReason(FHIRString::xmlUnserialize($children->statusReason));
        }
        if (isset($attributes->statusReason)) {
            $pt = $type->getStatusReason();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->statusReason);
            } else {
                $type->setStatusReason((string)$attributes->statusReason);
            }
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->target)) {
            foreach($children->target as $child) {
                $type->addTarget(FHIRGoalTarget::xmlUnserialize($child));
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
        if (null !== ($v = $this->getAchievementStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ACHIEVEMENT_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getAddresses())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_ADDRESSES, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getExpressedBy())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_EXPRESSED_BY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getLifecycleStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_LIFECYCLE_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getOutcomeCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getOutcomeReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_OUTCOME_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStartCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_START_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStartDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_START_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatusDate())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_DATE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatusReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getTarget())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_TARGET, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAchievementStatus())) {
            $a[self::FIELD_ACHIEVEMENT_STATUS] = $v;
        }
        if ([] !== ($vs = $this->getAddresses())) {
            $a[self::FIELD_ADDRESSES] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_ADDRESSES][] = $v;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CATEGORY][] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $a[self::FIELD_DESCRIPTION] = $v;
        }
        if (null !== ($v = $this->getExpressedBy())) {
            $a[self::FIELD_EXPRESSED_BY] = $v;
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
        if (null !== ($v = $this->getLifecycleStatus())) {
            $a[self::FIELD_LIFECYCLE_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRGoalLifecycleStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRGoalLifecycleStatus::FIELD_VALUE]);
                $a[self::FIELD_LIFECYCLE_STATUS_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getOutcomeCode())) {
            $a[self::FIELD_OUTCOME_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_OUTCOME_CODE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getOutcomeReference())) {
            $a[self::FIELD_OUTCOME_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_OUTCOME_REFERENCE][] = $v;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v;
        }
        if (null !== ($v = $this->getStartCodeableConcept())) {
            $a[self::FIELD_START_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getStartDate())) {
            $a[self::FIELD_START_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_START_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatusDate())) {
            $a[self::FIELD_STATUS_DATE] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDate::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDate::FIELD_VALUE]);
                $a[self::FIELD_STATUS_DATE_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRString::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRString::FIELD_VALUE]);
                $a[self::FIELD_STATUS_REASON_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if ([] !== ($vs = $this->getTarget())) {
            $a[self::FIELD_TARGET] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_TARGET][] = $v;
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