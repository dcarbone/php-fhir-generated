<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 3rd, 2025 17:37+0000
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
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventAction;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventOutcome;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAuditEventActionList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAuditEventOutcomeList;
use DCarbone\PHPFHIRGenerated\Versions\DSTU2\VersionConstants;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 */
class FHIRAuditEventEvent extends FHIRBackboneElement
{
    use TypeValidationsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_AUDIT_EVENT_DOT_EVENT;

    /* class_default.php:47 */
    public const FIELD_TYPE = 'type';
    public const FIELD_SUBTYPE = 'subtype';
    public const FIELD_ACTION = 'action';
    public const FIELD_ACTION_EXT = '_action';
    public const FIELD_DATE_TIME = 'dateTime';
    public const FIELD_DATE_TIME_EXT = '_dateTime';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_OUTCOME_EXT = '_outcome';
    public const FIELD_OUTCOME_DESC = 'outcomeDesc';
    public const FIELD_OUTCOME_DESC_EXT = '_outcomeDesc';
    public const FIELD_PURPOSE_OF_EVENT = 'purposeOfEvent';

    /* class_default.php:66 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_DATE_TIME => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:95 */
    private array $_valueXMLLocations = [
        self::FIELD_ACTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_DATE_TIME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OUTCOME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OUTCOME_DESC => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:111 */
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event. For example, a menu item, program, rule,
     * policy, function code, application name or URL. It identifies the performed
     * function.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $type;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $subtype;
    /**
     * Indicator for type of action performed during the event that generated the
     * audit.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventAction 
     */
    protected FHIRAuditEventAction $action;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for precisely observed times, typically system logs etc.,
     * and not human-reported times - for them, see date and dateTime below. Time zone
     * is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event occurred on the source.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $dateTime;
    /**
     * Indicates whether the event succeeded or failed
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventOutcome 
     */
    protected FHIRAuditEventOutcome $outcome;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $outcomeDesc;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $purposeOfEvent;

    /* constructor.php:62 */
    /**
     * FHIRAuditEventEvent Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRIdPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] $subtype
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAuditEventActionList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventAction $action
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInstant $dateTime
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAuditEventOutcomeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventOutcome $outcome
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $outcomeDesc
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[] $purposeOfEvent
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRIdPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCoding $type = null,
                                null|iterable $subtype = null,
                                null|string|FHIRAuditEventActionList|FHIRAuditEventAction $action = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $dateTime = null,
                                null|string|FHIRAuditEventOutcomeList|FHIRAuditEventOutcome $outcome = null,
                                null|string|FHIRStringPrimitive|FHIRString $outcomeDesc = null,
                                null|iterable $purposeOfEvent = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $type) {
            $this->setType($type);
        }
        if (null !== $subtype) {
            $this->setSubtype(...$subtype);
        }
        if (null !== $action) {
            $this->setAction($action);
        }
        if (null !== $dateTime) {
            $this->setDateTime($dateTime);
        }
        if (null !== $outcome) {
            $this->setOutcome($outcome);
        }
        if (null !== $outcomeDesc) {
            $this->setOutcomeDesc($outcomeDesc);
        }
        if (null !== $purposeOfEvent) {
            $this->setPurposeOfEvent(...$purposeOfEvent);
        }
    }

    /* class_default.php:143 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:169 */
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event. For example, a menu item, program, rule,
     * policy, function code, application name or URL. It identifies the performed
     * function.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding
     */
    public function getType(): null|FHIRCoding
    {
        return $this->type ?? null;
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $type
     * @return static
     */
    public function setType(null|FHIRCoding $type): self
    {
        if (null === $type) {
            unset($this->type);
            return $this;
        }
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[]
     */
    public function getSubtype(): array
    {
        return $this->subtype ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding>
     */
    public function getSubtypeIterator(): iterable
    {
        if (!isset($this->subtype)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->subtype);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $subtype
     * @return static
     */
    public function addSubtype(FHIRCoding $subtype): self
    {
        if (!isset($this->subtype)) {
            $this->subtype = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding ...$subtype
     * @return static
     */
    public function setSubtype(FHIRCoding ...$subtype): self
    {
        if ([] === $subtype) {
            unset($this->subtype);
            return $this;
        }
        $this->subtype = $subtype;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventAction
     */
    public function getAction(): null|FHIRAuditEventAction
    {
        return $this->action ?? null;
    }

    /**
     * Indicator for type of action performed during the event that generated the
     * audit.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAuditEventActionList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventAction $action
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setAction(null|string|FHIRAuditEventActionList|FHIRAuditEventAction $action,
                              ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $action) {
            unset($this->action);
            return $this;
        }
        if (!($action instanceof FHIRAuditEventAction)) {
            $action = new FHIRAuditEventAction(value: $action);
        }
        $this->action = $action;
        if ($this->_valueXMLLocations[self::FIELD_ACTION] !== $valueXMLLocation) {
            $this->_setActionValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the action element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getActionValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_ACTION];
    }

    /**
     * Set the location the "value" field of the action element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setActionValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_ACTION] = $valueXMLLocation;
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
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInstant
     */
    public function getDateTime(): null|FHIRInstant
    {
        return $this->dateTime ?? null;
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
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRInstant $dateTime
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setDateTime(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $dateTime,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $dateTime) {
            unset($this->dateTime);
            return $this;
        }
        if (!($dateTime instanceof FHIRInstant)) {
            $dateTime = new FHIRInstant(value: $dateTime);
        }
        $this->dateTime = $dateTime;
        if ($this->_valueXMLLocations[self::FIELD_DATE_TIME] !== $valueXMLLocation) {
            $this->_setDateTimeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the dateTime element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getDateTimeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_DATE_TIME];
    }

    /**
     * Set the location the "value" field of the dateTime element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setDateTimeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_DATE_TIME] = $valueXMLLocation;
        return $this;
    }

    /**
     * Indicates whether the event succeeded or failed
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventOutcome
     */
    public function getOutcome(): null|FHIRAuditEventOutcome
    {
        return $this->outcome ?? null;
    }

    /**
     * Indicates whether the event succeeded or failed
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive\FHIRAuditEventOutcomeList|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRAuditEventOutcome $outcome
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOutcome(null|string|FHIRAuditEventOutcomeList|FHIRAuditEventOutcome $outcome,
                               ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $outcome) {
            unset($this->outcome);
            return $this;
        }
        if (!($outcome instanceof FHIRAuditEventOutcome)) {
            $outcome = new FHIRAuditEventOutcome(value: $outcome);
        }
        $this->outcome = $outcome;
        if ($this->_valueXMLLocations[self::FIELD_OUTCOME] !== $valueXMLLocation) {
            $this->_setOutcomeValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the outcome element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOutcomeValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OUTCOME];
    }

    /**
     * Set the location the "value" field of the outcome element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOutcomeValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OUTCOME] = $valueXMLLocation;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString
     */
    public function getOutcomeDesc(): null|FHIRString
    {
        return $this->outcomeDesc ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRString $outcomeDesc
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setOutcomeDesc(null|string|FHIRStringPrimitive|FHIRString $outcomeDesc,
                                   ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $outcomeDesc) {
            unset($this->outcomeDesc);
            return $this;
        }
        if (!($outcomeDesc instanceof FHIRString)) {
            $outcomeDesc = new FHIRString(value: $outcomeDesc);
        }
        $this->outcomeDesc = $outcomeDesc;
        if ($this->_valueXMLLocations[self::FIELD_OUTCOME_DESC] !== $valueXMLLocation) {
            $this->_setOutcomeDescValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the outcomeDesc element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getOutcomeDescValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_OUTCOME_DESC];
    }

    /**
     * Set the location the "value" field of the outcomeDesc element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setOutcomeDescValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_OUTCOME_DESC] = $valueXMLLocation;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding[]
     */
    public function getPurposeOfEvent(): array
    {
        return $this->purposeOfEvent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding>
     */
    public function getPurposeOfEventIterator(): iterable
    {
        if (!isset($this->purposeOfEvent)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->purposeOfEvent);
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding $purposeOfEvent
     * @return static
     */
    public function addPurposeOfEvent(FHIRCoding $purposeOfEvent): self
    {
        if (!isset($this->purposeOfEvent)) {
            $this->purposeOfEvent = [];
        }
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRCoding ...$purposeOfEvent
     * @return static
     */
    public function setPurposeOfEvent(FHIRCoding ...$purposeOfEvent): self
    {
        if ([] === $purposeOfEvent) {
            unset($this->purposeOfEvent);
            return $this;
        }
        $this->purposeOfEvent = $purposeOfEvent;
        return $this;
    }

    /* class_default.php:208 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAuditEventEvent)) {
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
                $va = $ce->attributes()[FHIRIdPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBTYPE === $cen) {
                $type->addSubtype(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTION === $cen) {
                $type->setAction(FHIRAuditEventAction::xmlUnserialize($ce, $config));
            } else if (self::FIELD_DATE_TIME === $cen) {
                $type->setDateTime(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME === $cen) {
                $type->setOutcome(FHIRAuditEventOutcome::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME_DESC === $cen) {
                $type->setOutcomeDesc(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PURPOSE_OF_EVENT === $cen) {
                $type->addPurposeOfEvent(FHIRCoding::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ACTION])) {
            if (isset($type->action)) {
                $type->action->setValue((string)$attributes[self::FIELD_ACTION]);
                $type->_setActionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAction((string)$attributes[self::FIELD_ACTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_DATE_TIME])) {
            if (isset($type->dateTime)) {
                $type->dateTime->setValue((string)$attributes[self::FIELD_DATE_TIME]);
                $type->_setDateTimeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setDateTime((string)$attributes[self::FIELD_DATE_TIME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OUTCOME])) {
            if (isset($type->outcome)) {
                $type->outcome->setValue((string)$attributes[self::FIELD_OUTCOME]);
                $type->_setOutcomeValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOutcome((string)$attributes[self::FIELD_OUTCOME], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_OUTCOME_DESC])) {
            if (isset($type->outcomeDesc)) {
                $type->outcomeDesc->setValue((string)$attributes[self::FIELD_OUTCOME_DESC]);
                $type->_setOutcomeDescValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setOutcomeDesc((string)$attributes[self::FIELD_OUTCOME_DESC], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
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
        if (isset($this->action) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTION]) {
            $xw->writeAttribute(self::FIELD_ACTION, $this->action->_getFormattedValue());
        }
        if (isset($this->dateTime) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_DATE_TIME]) {
            $xw->writeAttribute(self::FIELD_DATE_TIME, $this->dateTime->_getFormattedValue());
        }
        if (isset($this->outcome) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OUTCOME]) {
            $xw->writeAttribute(self::FIELD_OUTCOME, $this->outcome->_getFormattedValue());
        }
        if (isset($this->outcomeDesc) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_OUTCOME_DESC]) {
            $xw->writeAttribute(self::FIELD_OUTCOME_DESC, $this->outcomeDesc->_getFormattedValue());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->type)) {
            $xw->startElement(self::FIELD_TYPE);
            $this->type->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->subtype)) {
            foreach ($this->subtype as $v) {
                $xw->startElement(self::FIELD_SUBTYPE);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->action)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACTION]
                || $this->action->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACTION);
            $this->action->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACTION]);
            $xw->endElement();
        }
        if (isset($this->dateTime)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_DATE_TIME]
                || $this->dateTime->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_DATE_TIME);
            $this->dateTime->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_DATE_TIME]);
            $xw->endElement();
        }
        if (isset($this->outcome)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OUTCOME]
                || $this->outcome->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OUTCOME);
            $this->outcome->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OUTCOME]);
            $xw->endElement();
        }
        if (isset($this->outcomeDesc)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_OUTCOME_DESC]
                || $this->outcomeDesc->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_OUTCOME_DESC);
            $this->outcomeDesc->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_OUTCOME_DESC]);
            $xw->endElement();
        }
        if (isset($this->purposeOfEvent)) {
            foreach ($this->purposeOfEvent as $v) {
                $xw->startElement(self::FIELD_PURPOSE_OF_EVENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param array $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\DSTU2\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEvent
     * @throws \Exception
     */
    public static function jsonUnserialize(array $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAuditEventEvent)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json[self::FIELD_TYPE]) || array_key_exists(self::FIELD_TYPE, $json)) {
            $type->setType(FHIRCoding::jsonUnserialize($json[self::FIELD_TYPE], $config));
        }
        if (isset($json[self::FIELD_SUBTYPE]) || array_key_exists(self::FIELD_SUBTYPE, $json)) {
            $vs = $json[self::FIELD_SUBTYPE];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addSubtype(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_ACTION])
            || isset($json[self::FIELD_ACTION_EXT])
            || array_key_exists(self::FIELD_ACTION, $json)
            || array_key_exists(self::FIELD_ACTION_EXT, $json)) {
            $value = $json[self::FIELD_ACTION] ?? null;
            $type->setAction(FHIRAuditEventAction::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAuditEventAction::FIELD_VALUE => $value]) + ($json[self::FIELD_ACTION_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_DATE_TIME])
            || isset($json[self::FIELD_DATE_TIME_EXT])
            || array_key_exists(self::FIELD_DATE_TIME, $json)
            || array_key_exists(self::FIELD_DATE_TIME_EXT, $json)) {
            $value = $json[self::FIELD_DATE_TIME] ?? null;
            $type->setDateTime(FHIRInstant::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstant::FIELD_VALUE => $value]) + ($json[self::FIELD_DATE_TIME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OUTCOME])
            || isset($json[self::FIELD_OUTCOME_EXT])
            || array_key_exists(self::FIELD_OUTCOME, $json)
            || array_key_exists(self::FIELD_OUTCOME_EXT, $json)) {
            $value = $json[self::FIELD_OUTCOME] ?? null;
            $type->setOutcome(FHIRAuditEventOutcome::jsonUnserialize(
                (is_array($value) ? $value : [FHIRAuditEventOutcome::FIELD_VALUE => $value]) + ($json[self::FIELD_OUTCOME_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_OUTCOME_DESC])
            || isset($json[self::FIELD_OUTCOME_DESC_EXT])
            || array_key_exists(self::FIELD_OUTCOME_DESC, $json)
            || array_key_exists(self::FIELD_OUTCOME_DESC_EXT, $json)) {
            $value = $json[self::FIELD_OUTCOME_DESC] ?? null;
            $type->setOutcomeDesc(FHIRString::jsonUnserialize(
                (is_array($value) ? $value : [FHIRString::FIELD_VALUE => $value]) + ($json[self::FIELD_OUTCOME_DESC_EXT] ?? []),
                $config,
            ));
        }
        if (isset($json[self::FIELD_PURPOSE_OF_EVENT]) || array_key_exists(self::FIELD_PURPOSE_OF_EVENT, $json)) {
            $vs = $json[self::FIELD_PURPOSE_OF_EVENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addPurposeOfEvent(FHIRCoding::jsonUnserialize($v, $config));
            }
        }
        return $type;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if (isset($this->type)) {
            $out->type = $this->type;
        }
        if (isset($this->subtype) && [] !== $this->subtype) {
            $out->subtype = $this->subtype;
        }
        if (isset($this->action)) {
            if (null !== ($val = $this->action->getValue())) {
                $out->action = $val;
            }
            if ($this->action->_nonValueFieldDefined()) {
                $ext = $this->action->jsonSerialize();
                unset($ext->value);
                $out->_action = $ext;
            }
        }
        if (isset($this->dateTime)) {
            if (null !== ($val = $this->dateTime->getValue())) {
                $out->dateTime = $val;
            }
            if ($this->dateTime->_nonValueFieldDefined()) {
                $ext = $this->dateTime->jsonSerialize();
                unset($ext->value);
                $out->_dateTime = $ext;
            }
        }
        if (isset($this->outcome)) {
            if (null !== ($val = $this->outcome->getValue())) {
                $out->outcome = $val;
            }
            if ($this->outcome->_nonValueFieldDefined()) {
                $ext = $this->outcome->jsonSerialize();
                unset($ext->value);
                $out->_outcome = $ext;
            }
        }
        if (isset($this->outcomeDesc)) {
            if (null !== ($val = $this->outcomeDesc->getValue())) {
                $out->outcomeDesc = $val;
            }
            if ($this->outcomeDesc->_nonValueFieldDefined()) {
                $ext = $this->outcomeDesc->jsonSerialize();
                unset($ext->value);
                $out->_outcomeDesc = $ext;
            }
        }
        if (isset($this->purposeOfEvent) && [] !== $this->purposeOfEvent) {
            $out->purposeOfEvent = $this->purposeOfEvent;
        }
        return $out;
    }
}