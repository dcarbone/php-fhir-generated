<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: August 30th, 2024 22:23+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventAction;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventOutcome;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfigKeyEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRTypeInterface;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum;
use DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 *
 * Class FHIRAuditEventEvent
 * @package \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent
 */
class FHIRAuditEventEvent extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT;

    const FIELD_TYPE = 'type';
    const FIELD_SUBTYPE = 'subtype';
    const FIELD_ACTION = 'action';
    const FIELD_ACTION_EXT = '_action';
    const FIELD_DATE_TIME = 'dateTime';
    const FIELD_DATE_TIME_EXT = '_dateTime';
    const FIELD_OUTCOME = 'outcome';
    const FIELD_OUTCOME_EXT = '_outcome';
    const FIELD_OUTCOME_DESC = 'outcomeDesc';
    const FIELD_OUTCOME_DESC_EXT = '_outcomeDesc';
    const FIELD_PURPOSE_OF_EVENT = 'purposeOfEvent';

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event. For example, a menu item, program, rule,
     * policy, function code, application name or URL. It identifies the performed
     * function.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    protected null|FHIRCoding $type = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected null|array $subtype = [];
    /**
     * Indicator for type of action performed during the event that generated the
     * audit.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventAction
     */
    protected null|FHIRAuditEventAction $action = null;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event occurred on the source.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    protected null|FHIRInstant $dateTime = null;
    /**
     * Indicates whether the event succeeded or failed
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventOutcome
     */
    protected null|FHIRAuditEventOutcome $outcome = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text description of the outcome of the event.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    protected null|FHIRString $outcomeDesc = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     * @var null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    protected null|array $purposeOfEvent = [];

    /**
     * Validation map for fields in type AuditEvent.Event
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_DATE_TIME => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_TYPE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /** @var array */
    private array $_xmlLocations = [];

    /**
     * FHIRAuditEventEvent Constructor
     * @param null|array $data
     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (array_key_exists(self::FIELD_TYPE, $data)) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCoding) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCoding($data[self::FIELD_TYPE]));
            }
        }
        if (array_key_exists(self::FIELD_SUBTYPE, $data)) {
            if (is_array($data[self::FIELD_SUBTYPE])) {
                foreach($data[self::FIELD_SUBTYPE] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addSubtype($v);
                    } else {
                        $this->addSubtype(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_SUBTYPE] instanceof FHIRCoding) {
                $this->addSubtype($data[self::FIELD_SUBTYPE]);
            } else {
                $this->addSubtype(new FHIRCoding($data[self::FIELD_SUBTYPE]));
            }
        }
        if (array_key_exists(self::FIELD_ACTION, $data) || array_key_exists(self::FIELD_ACTION_EXT, $data)) {
            $value = $data[self::FIELD_ACTION] ?? null;
            $ext = (isset($data[self::FIELD_ACTION_EXT]) && is_array($data[self::FIELD_ACTION_EXT])) ? $data[self::FIELD_ACTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAuditEventAction) {
                    $this->setAction($value);
                } else if (is_array($value)) {
                    $this->setAction(new FHIRAuditEventAction(array_merge($ext, $value)));
                } else {
                    $this->setAction(new FHIRAuditEventAction([FHIRAuditEventAction::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAction(new FHIRAuditEventAction($ext));
            } else {
                $this->setAction(new FHIRAuditEventAction(null));
            }
        }
        if (array_key_exists(self::FIELD_DATE_TIME, $data) || array_key_exists(self::FIELD_DATE_TIME_EXT, $data)) {
            $value = $data[self::FIELD_DATE_TIME] ?? null;
            $ext = (isset($data[self::FIELD_DATE_TIME_EXT]) && is_array($data[self::FIELD_DATE_TIME_EXT])) ? $data[self::FIELD_DATE_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInstant) {
                    $this->setDateTime($value);
                } else if (is_array($value)) {
                    $this->setDateTime(new FHIRInstant(array_merge($ext, $value)));
                } else {
                    $this->setDateTime(new FHIRInstant([FHIRInstant::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDateTime(new FHIRInstant($ext));
            } else {
                $this->setDateTime(new FHIRInstant(null));
            }
        }
        if (array_key_exists(self::FIELD_OUTCOME, $data) || array_key_exists(self::FIELD_OUTCOME_EXT, $data)) {
            $value = $data[self::FIELD_OUTCOME] ?? null;
            $ext = (isset($data[self::FIELD_OUTCOME_EXT]) && is_array($data[self::FIELD_OUTCOME_EXT])) ? $data[self::FIELD_OUTCOME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAuditEventOutcome) {
                    $this->setOutcome($value);
                } else if (is_array($value)) {
                    $this->setOutcome(new FHIRAuditEventOutcome(array_merge($ext, $value)));
                } else {
                    $this->setOutcome(new FHIRAuditEventOutcome([FHIRAuditEventOutcome::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOutcome(new FHIRAuditEventOutcome($ext));
            } else {
                $this->setOutcome(new FHIRAuditEventOutcome(null));
            }
        }
        if (array_key_exists(self::FIELD_OUTCOME_DESC, $data) || array_key_exists(self::FIELD_OUTCOME_DESC_EXT, $data)) {
            $value = $data[self::FIELD_OUTCOME_DESC] ?? null;
            $ext = (isset($data[self::FIELD_OUTCOME_DESC_EXT]) && is_array($data[self::FIELD_OUTCOME_DESC_EXT])) ? $data[self::FIELD_OUTCOME_DESC_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setOutcomeDesc($value);
                } else if (is_array($value)) {
                    $this->setOutcomeDesc(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setOutcomeDesc(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setOutcomeDesc(new FHIRString($ext));
            } else {
                $this->setOutcomeDesc(new FHIRString(null));
            }
        }
        if (array_key_exists(self::FIELD_PURPOSE_OF_EVENT, $data)) {
            if (is_array($data[self::FIELD_PURPOSE_OF_EVENT])) {
                foreach($data[self::FIELD_PURPOSE_OF_EVENT] as $v) {
                    if ($v instanceof FHIRCoding) {
                        $this->addPurposeOfEvent($v);
                    } else {
                        $this->addPurposeOfEvent(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_PURPOSE_OF_EVENT] instanceof FHIRCoding) {
                $this->addPurposeOfEvent($data[self::FIELD_PURPOSE_OF_EVENT]);
            } else {
                $this->addPurposeOfEvent(new FHIRCoding($data[self::FIELD_PURPOSE_OF_EVENT]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFhirTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event. For example, a menu item, program, rule,
     * policy, function code, application name or URL. It identifies the performed
     * function.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding
     */
    public function getType(): null|FHIRCoding
    {
        return $this->type;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event. For example, a menu item, program, rule,
     * policy, function code, application name or URL. It identifies the performed
     * function.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(null|FHIRCoding $type = null): self
    {
        if (null === $type) {
            $type = new FHIRCoding();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getSubtype(): null|array
    {
        return $this->subtype;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $subtype
     * @return static
     */
    public function addSubtype(null|FHIRCoding $subtype = null): self
    {
        if (null === $subtype) {
            $subtype = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->subtype[] = $subtype;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding ...$subtype
     * @return static
     */
    public function setSubtype(FHIRCoding ...$subtype): self
    {
        if ([] !== $this->subtype) {
            $this->_trackValuesRemoved(count($this->subtype));
            $this->subtype = [];
        }
        if ([] === $subtype) {
            return $this;
        }
        foreach($subtype as $v) {
            $this->addSubtype($v);
        }
        return $this;
    }

    /**
     * Indicator for type of action performed during the event that generated the
     * audit.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventAction
     */
    public function getAction(): null|FHIRAuditEventAction
    {
        return $this->action;
    }

    /**
     * Indicator for type of action performed during the event that generated the
     * audit.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventAction $action
     * @return static
     */
    public function setAction(null|FHIRAuditEventAction $action = null): self
    {
        if (null === $action) {
            $action = new FHIRAuditEventAction();
        }
        $this->_trackValueSet($this->action, $action);
        $this->action = $action;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event occurred on the source.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant
     */
    public function getDateTime(): null|FHIRInstant
    {
        return $this->dateTime;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event occurred on the source.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRInstant $dateTime
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setDateTime(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $dateTime = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $dateTime && !($dateTime instanceof FHIRInstant)) {
            $dateTime = new FHIRInstant($dateTime);
        }
        $this->_trackValueSet($this->dateTime, $dateTime);
        if (!isset($this->_xmlLocations[self::FIELD_DATE_TIME])) {
            $this->_xmlLocations[self::FIELD_DATE_TIME] = [];
        }
        $this->_xmlLocations[self::FIELD_DATE_TIME][0] = $xmlLocation;
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Indicates whether the event succeeded or failed
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventOutcome
     */
    public function getOutcome(): null|FHIRAuditEventOutcome
    {
        return $this->outcome;
    }

    /**
     * Indicates whether the event succeeded or failed
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRAuditEventOutcome $outcome
     * @return static
     */
    public function setOutcome(null|FHIRAuditEventOutcome $outcome = null): self
    {
        if (null === $outcome) {
            $outcome = new FHIRAuditEventOutcome();
        }
        $this->_trackValueSet($this->outcome, $outcome);
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString
     */
    public function getOutcomeDesc(): null|FHIRString
    {
        return $this->outcomeDesc;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRString $outcomeDesc
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlLocationEnum $xmlLocation
     * @return static
     */
    public function setOutcomeDesc(null|string|FHIRStringPrimitive|FHIRString $outcomeDesc = null, PHPFHIRXmlLocationEnum $xmlLocation = PHPFHIRXmlLocationEnum::ELEMENT): self
    {
        if (null !== $outcomeDesc && !($outcomeDesc instanceof FHIRString)) {
            $outcomeDesc = new FHIRString($outcomeDesc);
        }
        $this->_trackValueSet($this->outcomeDesc, $outcomeDesc);
        if (!isset($this->_xmlLocations[self::FIELD_OUTCOME_DESC])) {
            $this->_xmlLocations[self::FIELD_OUTCOME_DESC] = [];
        }
        $this->_xmlLocations[self::FIELD_OUTCOME_DESC][0] = $xmlLocation;
        $this->outcomeDesc = $outcomeDesc;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding[]
     */
    public function getPurposeOfEvent(): null|array
    {
        return $this->purposeOfEvent;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding $purposeOfEvent
     * @return static
     */
    public function addPurposeOfEvent(null|FHIRCoding $purposeOfEvent = null): self
    {
        if (null === $purposeOfEvent) {
            $purposeOfEvent = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->purposeOfEvent[] = $purposeOfEvent;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @param \DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRCoding ...$purposeOfEvent
     * @return static
     */
    public function setPurposeOfEvent(FHIRCoding ...$purposeOfEvent): self
    {
        if ([] !== $this->purposeOfEvent) {
            $this->_trackValuesRemoved(count($this->purposeOfEvent));
            $this->purposeOfEvent = [];
        }
        if ([] === $purposeOfEvent) {
            return $this;
        }
        foreach($purposeOfEvent as $v) {
            $this->addPurposeOfEvent($v);
        }
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
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSubtype())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUBTYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAction())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOutcomeDesc())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OUTCOME_DESC] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getPurposeOfEvent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PURPOSE_OF_EVENT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBTYPE])) {
            $v = $this->getSubtype();
            foreach($validationRules[self::FIELD_SUBTYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT, self::FIELD_SUBTYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBTYPE])) {
                        $errs[self::FIELD_SUBTYPE] = [];
                    }
                    $errs[self::FIELD_SUBTYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACTION])) {
            $v = $this->getAction();
            foreach($validationRules[self::FIELD_ACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_TIME])) {
            $v = $this->getDateTime();
            foreach($validationRules[self::FIELD_DATE_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT, self::FIELD_DATE_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_TIME])) {
                        $errs[self::FIELD_DATE_TIME] = [];
                    }
                    $errs[self::FIELD_DATE_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT, self::FIELD_OUTCOME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME])) {
                        $errs[self::FIELD_OUTCOME] = [];
                    }
                    $errs[self::FIELD_OUTCOME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME_DESC])) {
            $v = $this->getOutcomeDesc();
            foreach($validationRules[self::FIELD_OUTCOME_DESC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT, self::FIELD_OUTCOME_DESC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OUTCOME_DESC])) {
                        $errs[self::FIELD_OUTCOME_DESC] = [];
                    }
                    $errs[self::FIELD_OUTCOME_DESC][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PURPOSE_OF_EVENT])) {
            $v = $this->getPurposeOfEvent();
            foreach($validationRules[self::FIELD_PURPOSE_OF_EVENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT, self::FIELD_PURPOSE_OF_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE_OF_EVENT])) {
                        $errs[self::FIELD_PURPOSE_OF_EVENT] = [];
                    }
                    $errs[self::FIELD_PURPOSE_OF_EVENT][$rule] = $err;
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
     * @param null|string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent $type
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\DCarbone\PHPFHIRGenerated\DSTU2\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent
     */
    public static function xmlUnserialize(null|string|\SimpleXMLElement $element, null|PHPFHIRTypeInterface $type = null, null|int|PHPFHIRConfig $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRAuditEventEvent)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXmlns((string)$ns);
        }
        foreach ($element->children() as $n) {
            $childName = $n->getName();
            if (self::FIELD_TYPE === $childName) {
                $type->setType(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_SUBTYPE === $childName) {
                $type->addSubtype(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ACTION === $childName) {
                $type->setAction(FHIRAuditEventAction::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_DATE_TIME === $childName) {
                $type->setDateTime(FHIRInstant::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_OUTCOME === $childName) {
                $type->setOutcome(FHIRAuditEventOutcome::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_OUTCOME_DESC === $childName) {
                $type->setOutcomeDesc(FHIRString::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            } elseif (self::FIELD_PURPOSE_OF_EVENT === $childName) {
                $type->addPurposeOfEvent(FHIRCoding::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $childName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_EXTENSION === $childName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n, null, $config));
            } elseif (self::FIELD_ID === $childName) {
                $type->setId(FHIRIdPrimitive::xmlUnserialize($n, null, $config), PHPFHIRXmlLocationEnum::ELEMENT);
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_DATE_TIME])) {
            $pt = $type->getDateTime();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setDateTime((string)$attributes[self::FIELD_DATE_TIME], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OUTCOME_DESC])) {
            $pt = $type->getOutcomeDesc();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_OUTCOME_DESC], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setOutcomeDesc((string)$attributes[self::FIELD_OUTCOME_DESC], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ID])) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], PHPFHIRXmlLocationEnum::ATTRIBUTE);
            }
        }
        return $type;
    }

    /**
     * @param null|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter $xw
     * @param null|int|\DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRConfig $config PHP FHIR config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DCarbone\PHPFHIRGenerated\DSTU2\PHPFHIRXmlWriter
     */
    public function xmlSerialize(null|PHPFHIRXmlWriter $xw = null, null|int|PHPFHIRConfig $config = null): PHPFHIRXmlWriter
    {
        if (is_int($config)) {
            $config = new PHPFHIRConfig([PHPFHIRConfigKeyEnum::LIBXML_OPTS->value => $config]);
        } else if (null === $config) {
            $config = new PHPFHIRConfig();
        }
        if (null === $xw) {
            $xw = new PHPFHIRXmlWriter();
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $openedRoot = true;
            $xw->openRootNode($config, 'AuditEventEvent', $this->_getSourceXmlns());
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getDateTime())) {
            $xw->writeAttribute(self::FIELD_DATE_TIME, $v->getValue()?->getFormattedValue());
        }
        $locs = $this->_xmlLocations[self::FIELD_OUTCOME_DESC] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ATTRIBUTE === $locs[0])) && null !== ($v = $this->getOutcomeDesc())) {
            $xw->writeAttribute(self::FIELD_OUTCOME_DESC, $v->getValue()?->getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (null !== ($v = $this->getType())) {
            $xw->startElement(self::FIELD_TYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getSubtype() as $v) {
            $xw->startElement(self::FIELD_SUBTYPE);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getAction())) {
            $xw->startElement(self::FIELD_ACTION);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_DATE_TIME] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getDateTime())) {
            $xw->startElement(self::FIELD_DATE_TIME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (null !== ($v = $this->getOutcome())) {
            $xw->startElement(self::FIELD_OUTCOME);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        $locs = $this->_xmlLocations[self::FIELD_OUTCOME_DESC] ?? [];
        if (([] === $locs || (isset($locs[0]) && PHPFHIRXmlLocationEnum::ELEMENT === $locs[0])) && null !== ($v = $this->getOutcomeDesc())) {
            $xw->startElement(self::FIELD_OUTCOME_DESC);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        foreach ($this->getPurposeOfEvent() as $v) {
            $xw->startElement(self::FIELD_PURPOSE_OF_EVENT);
            $v->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($openedRoot) && $openedRoot) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getSubtype())) {
            $out->{self::FIELD_SUBTYPE} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_SUBTYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getAction())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ACTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAuditEventAction::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ACTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDateTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInstant::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOutcome())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OUTCOME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAuditEventOutcome::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OUTCOME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getOutcomeDesc())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_OUTCOME_DESC} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_OUTCOME_DESC_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getPurposeOfEvent())) {
            $out->{self::FIELD_PURPOSE_OF_EVENT} = [];
            foreach($vs as $v) {
                $out->{self::FIELD_PURPOSE_OF_EVENT}[] = $v;
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