<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 1st, 2025 16:35+0000
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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
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
use DCarbone\PHPFHIRGenerated\Types\ResourceTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Validator;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRAuditEventActionList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRAuditEventOutcomeList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventAction;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventOutcome;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Version;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionTypeMap;

/**
 * A record of an event made for purposes of maintaining a security log. Typical
 * uses include detection of intrusion attempts and monitoring for inappropriate
 * usage.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 */
class FHIRAuditEvent extends FHIRDomainResource implements VersionContainedTypeInterface
{

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_AUDIT_EVENT;

    /* class_default.php:47 */
    public const FIELD_TYPE = 'type';
    public const FIELD_SUBTYPE = 'subtype';
    public const FIELD_ACTION = 'action';
    public const FIELD_ACTION_EXT = '_action';
    public const FIELD_PERIOD = 'period';
    public const FIELD_RECORDED = 'recorded';
    public const FIELD_RECORDED_EXT = '_recorded';
    public const FIELD_OUTCOME = 'outcome';
    public const FIELD_OUTCOME_EXT = '_outcome';
    public const FIELD_OUTCOME_DESC = 'outcomeDesc';
    public const FIELD_OUTCOME_DESC_EXT = '_outcomeDesc';
    public const FIELD_PURPOSE_OF_EVENT = 'purposeOfEvent';
    public const FIELD_AGENT = 'agent';
    public const FIELD_SOURCE = 'source';
    public const FIELD_ENTITY = 'entity';

    /* class_default.php:66 */
    private static array $_validationRules = [
        self::FIELD_TYPE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_RECORDED => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_AGENT => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_SOURCE => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:91 */
    private array $_valueXMLLocations = [
        self::FIELD_ACTION => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RECORDED => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OUTCOME => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_OUTCOME_DESC => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:107 */
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event. For example, a menu item, program, rule,
     * policy, function code, application name or URL. It identifies the performed
     * function.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding 
     */
    protected FHIRCoding $type;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for the category of event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding[] 
     */
    protected array $subtype;
    /**
     * Indicator for type of action performed during the event that generated the
     * event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventAction 
     */
    protected FHIRAuditEventAction $action;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod 
     */
    protected FHIRPeriod $period;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event was recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant 
     */
    protected FHIRInstant $recorded;
    /**
     * Indicates whether the event succeeded or failed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventOutcome 
     */
    protected FHIRAuditEventOutcome $outcome;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString 
     */
    protected FHIRString $outcomeDesc;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] 
     */
    protected array $purposeOfEvent;
    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent[] 
     */
    protected array $agent;
    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * The system that is reporting the event.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource 
     */
    protected FHIRAuditEventSource $source;
    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity[] 
     */
    protected array $entity;

    /* constructor.php:63 */
    /**
     * FHIRAuditEvent Constructor
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRMeta $meta
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRUriPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRUri $implicitRules
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCode $language
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRNarrative $text
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResourceContainer[]|\DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface[] $contained
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding $type
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding[] $subtype
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRAuditEventActionList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventAction $action
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $period
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant $recorded
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRAuditEventOutcomeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventOutcome $outcome
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $outcomeDesc
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[] $purposeOfEvent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent[] $agent
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource $source
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity[] $entity
     * @param null|string[] $fhirComments
     */
    public function __construct(null|string|FHIRIdPrimitive|FHIRId $id = null,
                                null|FHIRMeta $meta = null,
                                null|string|FHIRUriPrimitive|FHIRUri $implicitRules = null,
                                null|string|FHIRCodePrimitive|FHIRCode $language = null,
                                null|FHIRNarrative $text = null,
                                null|iterable $contained = null,
                                null|iterable $extension = null,
                                null|iterable $modifierExtension = null,
                                null|FHIRCoding $type = null,
                                null|iterable $subtype = null,
                                null|string|FHIRAuditEventActionList|FHIRAuditEventAction $action = null,
                                null|FHIRPeriod $period = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $recorded = null,
                                null|string|FHIRAuditEventOutcomeList|FHIRAuditEventOutcome $outcome = null,
                                null|string|FHIRStringPrimitive|FHIRString $outcomeDesc = null,
                                null|iterable $purposeOfEvent = null,
                                null|iterable $agent = null,
                                null|FHIRAuditEventSource $source = null,
                                null|iterable $entity = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(id: $id,
                            meta: $meta,
                            implicitRules: $implicitRules,
                            language: $language,
                            text: $text,
                            contained: $contained,
                            extension: $extension,
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
        if (null !== $period) {
            $this->setPeriod($period);
        }
        if (null !== $recorded) {
            $this->setRecorded($recorded);
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
        if (null !== $agent) {
            $this->setAgent(...$agent);
        }
        if (null !== $source) {
            $this->setSource($source);
        }
        if (null !== $entity) {
            $this->setEntity(...$entity);
        }
    }

    /* class_default.php:136 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:148 */
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }

    /* class_default.php:162 */
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifier for a family of the event. For example, a menu item, program, rule,
     * policy, function code, application name or URL. It identifies the performed
     * function.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding
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
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding $type
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
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding[]
     */
    public function getSubtype(): array
    {
        return $this->subtype ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding>
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding $subtype
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
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCoding ...$subtype
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
     * event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventAction
     */
    public function getAction(): null|FHIRAuditEventAction
    {
        return $this->action ?? null;
    }

    /**
     * Indicator for type of action performed during the event that generated the
     * event.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicator for type of action performed during the event that generated the
     * audit.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRAuditEventActionList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventAction $action
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
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod
     */
    public function getPeriod(): null|FHIRPeriod
    {
        return $this->period ?? null;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The period during which the activity occurred.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRPeriod $period
     * @return static
     */
    public function setPeriod(null|FHIRPeriod $period): self
    {
        if (null === $period) {
            unset($this->period);
            return $this;
        }
        $this->period = $period;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event was recorded.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant
     */
    public function getRecorded(): null|FHIRInstant
    {
        return $this->recorded ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. Time zone is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The time when the event was recorded.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRInstant $recorded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function setRecorded(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $recorded,
                                ValueXMLLocationEnum $valueXMLLocation = ValueXMLLocationEnum::CONTAINER_ATTRIBUTE): self
    {
        if (null === $recorded) {
            unset($this->recorded);
            return $this;
        }
        if (!($recorded instanceof FHIRInstant)) {
            $recorded = new FHIRInstant(value: $recorded);
        }
        $this->recorded = $recorded;
        if ($this->_valueXMLLocations[self::FIELD_RECORDED] !== $valueXMLLocation) {
            $this->_setRecordedValueXMLLocation($valueXMLLocation);
        }
        return $this;
    }

    /**
     * Return the current location the "value" field of the recorded element will be placed
     * when serializing this type to XML.
     *
     * @return \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum
     */
    public function _getRecordedValueXMLLocation() : ValueXMLLocationEnum
    {
        return $this->_valueXMLLocations[self::FIELD_RECORDED];
    }

    /**
     * Set the location the "value" field of the recorded element will be placed when
     * serializing tihs type to XML.
     *
     * @param \DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum $valueXMLLocation
     * @return static
     */
    public function _setRecordedValueXMLLocation(ValueXMLLocationEnum $valueXMLLocation) : self
    {
        $this->_valueXMLLocations[self::FIELD_RECORDED] = $valueXMLLocation;
        return $this;
    }

    /**
     * Indicates whether the event succeeded or failed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventOutcome
     */
    public function getOutcome(): null|FHIRAuditEventOutcome
    {
        return $this->outcome ?? null;
    }

    /**
     * Indicates whether the event succeeded or failed.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates whether the event succeeded or failed.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRAuditEventOutcomeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRAuditEventOutcome $outcome
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString
     */
    public function getOutcomeDesc(): null|FHIRString
    {
        return $this->outcomeDesc ?? null;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A free text description of the outcome of the event.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRString $outcomeDesc
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPurposeOfEvent(): array
    {
        return $this->purposeOfEvent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept>
     */
    public function getPurposeOfEventIterator(): iterable
    {
        if (!isset($this->purposeOfEvent)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->purposeOfEvent);
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept $purposeOfEvent
     * @return static
     */
    public function addPurposeOfEvent(FHIRCodeableConcept $purposeOfEvent): self
    {
        if (!isset($this->purposeOfEvent)) {
            $this->purposeOfEvent = [];
        }
        $this->purposeOfEvent[] = $purposeOfEvent;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The purposeOfUse (reason) that was used during the event being recorded.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRCodeableConcept ...$purposeOfEvent
     * @return static
     */
    public function setPurposeOfEvent(FHIRCodeableConcept ...$purposeOfEvent): self
    {
        if ([] === $purposeOfEvent) {
            unset($this->purposeOfEvent);
            return $this;
        }
        $this->purposeOfEvent = $purposeOfEvent;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent[]
     */
    public function getAgent(): array
    {
        return $this->agent ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent>
     */
    public function getAgentIterator(): iterable
    {
        if (!isset($this->agent)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->agent);
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent $agent
     * @return static
     */
    public function addAgent(FHIRAuditEventAgent $agent): self
    {
        if (!isset($this->agent)) {
            $this->agent = [];
        }
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * An actor taking an active role in the event or activity that is logged.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventAgent ...$agent
     * @return static
     */
    public function setAgent(FHIRAuditEventAgent ...$agent): self
    {
        if ([] === $agent) {
            unset($this->agent);
            return $this;
        }
        $this->agent = $agent;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * The system that is reporting the event.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource
     */
    public function getSource(): null|FHIRAuditEventSource
    {
        return $this->source ?? null;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * The system that is reporting the event.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventSource $source
     * @return static
     */
    public function setSource(null|FHIRAuditEventSource $source): self
    {
        if (null === $source) {
            unset($this->source);
            return $this;
        }
        $this->source = $source;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity[]
     */
    public function getEntity(): array
    {
        return $this->entity ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity>
     */
    public function getEntityIterator(): iterable
    {
        if (!isset($this->entity)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->entity);
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity $entity
     * @return static
     */
    public function addEntity(FHIRAuditEventEntity $entity): self
    {
        if (!isset($this->entity)) {
            $this->entity = [];
        }
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * A record of an event made for purposes of maintaining a security log. Typical
     * uses include detection of intrusion attempts and monitoring for inappropriate
     * usage.
     *
     * Specific instances of data or objects that have been accessed.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRAuditEvent\FHIRAuditEventEntity ...$entity
     * @return static
     */
    public function setEntity(FHIRAuditEventEntity ...$entity): self
    {
        if ([] === $entity) {
            unset($this->entity);
            return $this;
        }
        $this->entity = $entity;
        return $this;
    }

    /* class_default.php:188 */
    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by the FHIR specification this type
     * was generated from.
     *
     * An empty array indicates no validation errors occurred.
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
        if (null !== ($v = $this->getRecorded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDED] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAgent())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AGENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getSource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SOURCE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SUBTYPE, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACTION])) {
                        $errs[self::FIELD_ACTION] = [];
                    }
                    $errs[self::FIELD_ACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIOD])) {
            $v = $this->getPeriod();
            foreach($validationRules[self::FIELD_PERIOD] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIOD])) {
                        $errs[self::FIELD_PERIOD] = [];
                    }
                    $errs[self::FIELD_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDED])) {
            $v = $this->getRecorded();
            foreach($validationRules[self::FIELD_RECORDED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_RECORDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDED])) {
                        $errs[self::FIELD_RECORDED] = [];
                    }
                    $errs[self::FIELD_RECORDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OUTCOME])) {
            $v = $this->getOutcome();
            foreach($validationRules[self::FIELD_OUTCOME] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTCOME, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_OUTCOME_DESC, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_PURPOSE_OF_EVENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE_OF_EVENT])) {
                        $errs[self::FIELD_PURPOSE_OF_EVENT] = [];
                    }
                    $errs[self::FIELD_PURPOSE_OF_EVENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGENT])) {
            $v = $this->getAgent();
            foreach($validationRules[self::FIELD_AGENT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_AGENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGENT])) {
                        $errs[self::FIELD_AGENT] = [];
                    }
                    $errs[self::FIELD_AGENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE])) {
            $v = $this->getSource();
            foreach($validationRules[self::FIELD_SOURCE] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_SOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE])) {
                        $errs[self::FIELD_SOURCE] = [];
                    }
                    $errs[self::FIELD_SOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENTITY])) {
            $v = $this->getEntity();
            foreach($validationRules[self::FIELD_ENTITY] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ENTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENTITY])) {
                        $errs[self::FIELD_ENTITY] = [];
                    }
                    $errs[self::FIELD_ENTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_CONTAINED, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_EXTENSION, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
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
                $err = Validator::validateField(self::FHIR_TYPE_NAME, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /* class_default.php:212 */
    /**
     * @param string|\SimpleXMLElement $element
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     * @throws \Exception
     */
    public static function xmlUnserialize(string|\SimpleXMLElement $element,
                                          null|UnserializeConfig $config = null,
                                          null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAuditEvent)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($element)) {
            $element = new \SimpleXMLElement($element, $config->getLibxmlOpts());
        }
        if (null !== ($ns = $element->getNamespaces()[''] ?? null)) {
            $type->_setSourceXMLNS((string)$ns);
        }
        foreach ($element->children() as $ce) {
            $cen = $ce->getName();
            if (self::FIELD_ID === $cen) {
                $type->setId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_META === $cen) {
                $type->setMeta(FHIRMeta::xmlUnserialize($ce, $config));
            } else if (self::FIELD_IMPLICIT_RULES === $cen) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($ce, $config));
            } else if (self::FIELD_LANGUAGE === $cen) {
                $type->setLanguage(FHIRCode::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TEXT === $cen) {
                $type->setText(FHIRNarrative::xmlUnserialize($ce, $config));
            } else if (self::FIELD_CONTAINED === $cen) {
                foreach ($ce->children() as $cen) {
                    /** @var \DCarbone\PHPFHIRGenerated\Versions\R4\VersionContainedTypeInterface $cn */
                    $cn = VersionTypeMap::getContainedTypeClassNameFromXML($cen);
                    $type->addContained($cn::xmlUnserialize($cen, $config));
                }
            } else if (self::FIELD_EXTENSION === $cen) {
                $type->addExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TYPE === $cen) {
                $type->setType(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SUBTYPE === $cen) {
                $type->addSubtype(FHIRCoding::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ACTION === $cen) {
                $type->setAction(FHIRAuditEventAction::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PERIOD === $cen) {
                $type->setPeriod(FHIRPeriod::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RECORDED === $cen) {
                $type->setRecorded(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME === $cen) {
                $type->setOutcome(FHIRAuditEventOutcome::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OUTCOME_DESC === $cen) {
                $type->setOutcomeDesc(FHIRString::xmlUnserialize($ce, $config));
            } else if (self::FIELD_PURPOSE_OF_EVENT === $cen) {
                $type->addPurposeOfEvent(FHIRCodeableConcept::xmlUnserialize($ce, $config));
            } else if (self::FIELD_AGENT === $cen) {
                $type->addAgent(FHIRAuditEventAgent::xmlUnserialize($ce, $config));
            } else if (self::FIELD_SOURCE === $cen) {
                $type->setSource(FHIRAuditEventSource::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ENTITY === $cen) {
                $type->addEntity(FHIRAuditEventEntity::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            if (isset($type->id)) {
                $type->id->setValue((string)$attributes[self::FIELD_ID]);
                $type->_setIdValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setId((string)$attributes[self::FIELD_ID], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_IMPLICIT_RULES])) {
            if (isset($type->implicitRules)) {
                $type->implicitRules->setValue((string)$attributes[self::FIELD_IMPLICIT_RULES]);
                $type->_setImplicitRulesValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setImplicitRules((string)$attributes[self::FIELD_IMPLICIT_RULES], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_LANGUAGE])) {
            if (isset($type->language)) {
                $type->language->setValue((string)$attributes[self::FIELD_LANGUAGE]);
                $type->_setLanguageValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setLanguage((string)$attributes[self::FIELD_LANGUAGE], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_ACTION])) {
            if (isset($type->action)) {
                $type->action->setValue((string)$attributes[self::FIELD_ACTION]);
                $type->_setActionValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setAction((string)$attributes[self::FIELD_ACTION], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            }
        }
        if (isset($attributes[self::FIELD_RECORDED])) {
            if (isset($type->recorded)) {
                $type->recorded->setValue((string)$attributes[self::FIELD_RECORDED]);
                $type->_setRecordedValueXMLLocation(ValueXMLLocationEnum::PARENT_ATTRIBUTE);
            } else {
                $type->setRecorded((string)$attributes[self::FIELD_RECORDED], ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\XMLWriter $xw
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig $config
     * @return \DCarbone\PHPFHIRGenerated\Encoding\XMLWriter
     */
    public function xmlSerialize(null|XMLWriter $xw = null,
                                 null|SerializeConfig $config = null): XMLWriter
    {
        if (null === $config) {
            $config = (new Version())->getConfig()->getSerializeConfig();
        }
        if (null === $xw) {
            $xw = new XMLWriter($config);
        }
        if (!$xw->isOpen()) {
            $xw->openMemory();
        }
        if (!$xw->isDocStarted()) {
            $docStarted = true;
            $xw->startDocument();
        }
        if (!$xw->isRootOpen()) {
            $rootOpened = true;
            $xw->openRootNode('AuditEvent', $this->_getSourceXMLNS());
        }
        if (isset($this->action) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTION]) {
            $xw->writeAttribute(self::FIELD_ACTION, $this->action->_getFormattedValue());
        }
        if (isset($this->recorded) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RECORDED]) {
            $xw->writeAttribute(self::FIELD_RECORDED, $this->recorded->_getFormattedValue());
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
        if (isset($this->period)) {
            $xw->startElement(self::FIELD_PERIOD);
            $this->period->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->recorded)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RECORDED]
                || $this->recorded->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RECORDED);
            $this->recorded->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RECORDED]);
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
        if (isset($this->agent)) {
            foreach ($this->agent as $v) {
                $xw->startElement(self::FIELD_AGENT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($this->source)) {
            $xw->startElement(self::FIELD_SOURCE);
            $this->source->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->entity)) {
            foreach ($this->entity as $v) {
                $xw->startElement(self::FIELD_ENTITY);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
        if (isset($rootOpened) && $rootOpened) {
            $xw->endElement();
        }
        if (isset($docStarted) && $docStarted) {
            $xw->endDocument();
        }
        return $xw;
    }

    /**
     * @param string|\stdClass|array $json
     * @param null|\DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRResource\FHIRDomainResource\FHIRAuditEvent
     * @throws \Exception
     */
    public static function jsonUnserialize(string|\stdClass|array $json,
                                           null|UnserializeConfig $config = null,
                                           null|ResourceTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRAuditEvent)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if (null === $config) {
            $config = (new Version())->getConfig()->getUnserializeConfig();
        }
        if (is_string($json)) {
            $json = json_decode(json: $json, associative: true, depth: $config->getJSONDecodeMaxDepth());
        } else if (is_object($json)) {
            $json = (array)$json;
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
        if (isset($json[self::FIELD_PERIOD]) || array_key_exists(self::FIELD_PERIOD, $json)) {
            $type->setPeriod(FHIRPeriod::jsonUnserialize($json[self::FIELD_PERIOD], $config));
        }
        if (isset($json[self::FIELD_RECORDED])
            || isset($json[self::FIELD_RECORDED_EXT])
            || array_key_exists(self::FIELD_RECORDED, $json)
            || array_key_exists(self::FIELD_RECORDED_EXT, $json)) {
            $value = $json[self::FIELD_RECORDED] ?? null;
            $type->setRecorded(FHIRInstant::jsonUnserialize(
                (is_array($value) ? $value : [FHIRInstant::FIELD_VALUE => $value]) + ($json[self::FIELD_RECORDED_EXT] ?? []),
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
                $type->addPurposeOfEvent(FHIRCodeableConcept::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_AGENT]) || array_key_exists(self::FIELD_AGENT, $json)) {
            $vs = $json[self::FIELD_AGENT];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addAgent(FHIRAuditEventAgent::jsonUnserialize($v, $config));
            }
        }
        if (isset($json[self::FIELD_SOURCE]) || array_key_exists(self::FIELD_SOURCE, $json)) {
            $type->setSource(FHIRAuditEventSource::jsonUnserialize($json[self::FIELD_SOURCE], $config));
        }
        if (isset($json[self::FIELD_ENTITY]) || array_key_exists(self::FIELD_ENTITY, $json)) {
            $vs = $json[self::FIELD_ENTITY];
            if (!is_int(key($vs))) {
                $vs = [$vs];
            }
            foreach($vs as $v) {
                $type->addEntity(FHIRAuditEventEntity::jsonUnserialize($v, $config));
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
        if (isset($this->period)) {
            $out->period = $this->period;
        }
        if (isset($this->recorded)) {
            if (null !== ($val = $this->recorded->getValue())) {
                $out->recorded = $val;
            }
            if ($this->recorded->_nonValueFieldDefined()) {
                $ext = $this->recorded->jsonSerialize();
                unset($ext->value);
                $out->_recorded = $ext;
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
        if (isset($this->agent) && [] !== $this->agent) {
            $out->agent = $this->agent;
        }
        if (isset($this->source)) {
            $out->source = $this->source;
        }
        if (isset($this->entity) && [] !== $this->entity) {
            $out->entity = $this->entity;
        }
        $out->resourceType = $this->_getResourceType();
        return $out;
    }
}