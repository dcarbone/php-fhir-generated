<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 18th, 2025 00:31+0000
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
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
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
 *   Generated on Sun, Mar 26, 2023 15:21+1100 for FHIR v5.0.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */
use DCarbone\PHPFHIRGenerated\Constants;
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\Rules\MinOccursRule;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInteger64Primitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R5\VersionConstants;

/**
 * The SubscriptionStatus resource describes the state of a Subscription during
 * notifications.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class FHIRSubscriptionStatusNotificationEvent extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_SUBSCRIPTION_STATUS_DOT_NOTIFICATION_EVENT;

    /* class_default.php:56 */
    public const FIELD_EVENT_NUMBER = 'eventNumber';
    public const FIELD_EVENT_NUMBER_EXT = '_eventNumber';
    public const FIELD_TIMESTAMP = 'timestamp';
    public const FIELD_TIMESTAMP_EXT = '_timestamp';
    public const FIELD_FOCUS = 'focus';
    public const FIELD_ADDITIONAL_CONTEXT = 'additionalContext';

    /* class_default.php:75 */
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_EVENT_NUMBER => [
            MinOccursRule::NAME => 1,
        ],
    ];

    /* class_default.php:96 */
    private array $_valueXMLLocations = [
        self::FIELD_EVENT_NUMBER => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_TIMESTAMP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:112 */
    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the sequential number of this event in this subscription context or a
     * relative event number for this notification.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64 
     */
    #[FHIRInteger64]
    protected FHIRInteger64 $eventNumber;
    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual time this event occurred on the server.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant 
     */
    #[FHIRInstant]
    protected FHIRInstant $timestamp;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The focus of this event. While this will usually be a reference to the focus
     * resource of the event, it MAY contain a reference to a non-FHIR object.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference 
     */
    #[FHIRReference]
    protected FHIRReference $focus;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional context information for this event. Generally, this will contain
     * references to additional resources included with the event (e.g., the Patient
     * relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @var iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> 
     */
    #[FHIRReference]
    protected array $additionalContext;

    /* constructor.php:61 */
    /**
     * FHIRSubscriptionStatusNotificationEvent Constructor
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRStringPrimitive $id
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRExtension> $modifierExtension
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInteger64Primitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64 $eventNumber
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $timestamp
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $focus
     * @param null|iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference> $additionalContext
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|float|FHIRInteger64Primitive|FHIRInteger64 $eventNumber = null,
                                null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $timestamp = null,
                                null|FHIRReference $focus = null,
                                null|iterable $additionalContext = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $eventNumber) {
            $this->setEventNumber($eventNumber);
        }
        if (null !== $timestamp) {
            $this->setTimestamp($timestamp);
        }
        if (null !== $focus) {
            $this->setFocus($focus);
        }
        if (null !== $additionalContext) {
            $this->setAdditionalContext(...$additionalContext);
        }
    }

    /* class_default.php:145 */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:174 */
    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the sequential number of this event in this subscription context or a
     * relative event number for this notification.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64
     */
    public function getEventNumber(): null|FHIRInteger64
    {
        return $this->eventNumber ?? null;
    }

    /**
     * A very large whole number
     * Typically this is used for record counters (e.g. database keys)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Either the sequential number of this event in this subscription context or a
     * relative event number for this notification.
     *
     * @param null|string|float|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInteger64Primitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInteger64 $eventNumber
     * @return static
     */
    public function setEventNumber(null|string|float|FHIRInteger64Primitive|FHIRInteger64 $eventNumber): self
    {
        if (null === $eventNumber) {
            unset($this->eventNumber);
            return $this;
        }
        if (!($eventNumber instanceof FHIRInteger64)) {
            $eventNumber = new FHIRInteger64(value: $eventNumber);
        }
        $this->eventNumber = $eventNumber;
        return $this;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual time this event occurred on the server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant
     */
    public function getTimestamp(): null|FHIRInstant
    {
        return $this->timestamp ?? null;
    }

    /**
     * An instant in time - known at least to the second
     * Note: This is intended for where precisely observed times are required,
     * typically system logs etc., and not human-reported times - for them, see date
     * and dateTime (which can be as precise as instant, but is not required to be)
     * below. UTC offset is always required
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual time this event occurred on the server.
     *
     * @param null|string|\DateTimeInterface|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRInstantPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRInstant $timestamp
     * @return static
     */
    public function setTimestamp(null|string|\DateTimeInterface|FHIRInstantPrimitive|FHIRInstant $timestamp): self
    {
        if (null === $timestamp) {
            unset($this->timestamp);
            return $this;
        }
        if (!($timestamp instanceof FHIRInstant)) {
            $timestamp = new FHIRInstant(value: $timestamp);
        }
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The focus of this event. While this will usually be a reference to the focus
     * resource of the event, it MAY contain a reference to a non-FHIR object.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference
     */
    public function getFocus(): null|FHIRReference
    {
        return $this->focus ?? null;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The focus of this event. While this will usually be a reference to the focus
     * resource of the event, it MAY contain a reference to a non-FHIR object.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $focus
     * @return static
     */
    public function setFocus(null|FHIRReference $focus): self
    {
        if (null === $focus) {
            unset($this->focus);
            return $this;
        }
        $this->focus = $focus;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional context information for this event. Generally, this will contain
     * references to additional resources included with the event (e.g., the Patient
     * relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @return iterable<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getAdditionalContext(): array
    {
        return $this->additionalContext ?? [];
    }

    /**
     * @return \ArrayIterator<\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference>
     */
    public function getAdditionalContextIterator(): iterable
    {
        if (!isset($this->additionalContext)) {
            return new \EmptyIterator();
        }
        return new \ArrayIterator($this->additionalContext);
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional context information for this event. Generally, this will contain
     * references to additional resources included with the event (e.g., the Patient
     * relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference $additionalContext
     * @return static
     */
    public function addAdditionalContext(FHIRReference $additionalContext): self
    {
        if (!isset($this->additionalContext)) {
            $this->additionalContext = [];
        }
        $this->additionalContext[] = $additionalContext;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional context information for this event. Generally, this will contain
     * references to additional resources included with the event (e.g., the Patient
     * relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @param \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRDataType\FHIRReference ...$additionalContext
     * @return static
     */
    public function setAdditionalContext(FHIRReference ...$additionalContext): self
    {
        if ([] === $additionalContext) {
            unset($this->additionalContext);
            return $this;
        }
        $this->additionalContext = $additionalContext;
        return $this;
    }

    /* class_default.php:201 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionStatusNotificationEvent)) {
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
                $va = $ce->attributes()[FHIRStringPrimitive::FIELD_VALUE] ?? null;
                if (null !== $va) {
                    $type->setId((string)$va);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_ATTRIBUTE);
                } else {
                    $type->setId((string)$ce);
                    $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::ELEMENT_VALUE);
                }
            } else if (self::FIELD_MODIFIER_EXTENSION === $cen) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($ce, $config));
            } else if (self::FIELD_EVENT_NUMBER === $cen) {
                $type->setEventNumber(FHIRInteger64::xmlUnserialize($ce, $config));
            } else if (self::FIELD_TIMESTAMP === $cen) {
                $type->setTimestamp(FHIRInstant::xmlUnserialize($ce, $config));
            } else if (self::FIELD_FOCUS === $cen) {
                $type->setFocus(FHIRReference::xmlUnserialize($ce, $config));
            } else if (self::FIELD_ADDITIONAL_CONTEXT === $cen) {
                $type->addAdditionalContext(FHIRReference::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_EVENT_NUMBER])) {
            if (isset($type->eventNumber)) {
                $type->eventNumber->setValue((string)$attributes[self::FIELD_EVENT_NUMBER]);
            } else {
                $type->setEventNumber((string)$attributes[self::FIELD_EVENT_NUMBER]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_EVENT_NUMBER, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_TIMESTAMP])) {
            if (isset($type->timestamp)) {
                $type->timestamp->setValue((string)$attributes[self::FIELD_TIMESTAMP]);
            } else {
                $type->setTimestamp((string)$attributes[self::FIELD_TIMESTAMP]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_TIMESTAMP, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->eventNumber) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_EVENT_NUMBER]) {
            $xw->writeAttribute(self::FIELD_EVENT_NUMBER, $this->eventNumber->_getValueAsString());
        }
        if (isset($this->timestamp) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_TIMESTAMP]) {
            $xw->writeAttribute(self::FIELD_TIMESTAMP, $this->timestamp->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->eventNumber)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_EVENT_NUMBER]
                || $this->eventNumber->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_EVENT_NUMBER);
            $this->eventNumber->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_EVENT_NUMBER]);
            $xw->endElement();
        }
        if (isset($this->timestamp)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_TIMESTAMP]
                || $this->timestamp->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_TIMESTAMP);
            $this->timestamp->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_TIMESTAMP]);
            $xw->endElement();
        }
        if (isset($this->focus)) {
            $xw->startElement(self::FIELD_FOCUS);
            $this->focus->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->additionalContext)) {
            foreach ($this->additionalContext as $v) {
                $xw->startElement(self::FIELD_ADDITIONAL_CONTEXT);
                $v->xmlSerialize($xw, $config);
                $xw->endElement();
            }
        }
    }

    /**
     * @param \stdClass $decoded
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R5\Types\FHIRBase\FHIRElement\FHIRBackboneElement\FHIRSubscriptionStatus\FHIRSubscriptionStatusNotificationEvent
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $decoded,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRSubscriptionStatusNotificationEvent)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($decoded, $config, $type); 
        if (isset($decoded->eventNumber)
            || isset($decoded->_eventNumber)
            || property_exists($decoded, self::FIELD_EVENT_NUMBER)
            || property_exists($decoded, self::FIELD_EVENT_NUMBER_EXT)) {
            $v = $decoded->_eventNumber ?? new \stdClass();
            $v->value = $decoded->eventNumber ?? null;
            $type->setEventNumber(FHIRInteger64::jsonUnserialize($v, $config));
        }
        if (isset($decoded->timestamp)
            || isset($decoded->_timestamp)
            || property_exists($decoded, self::FIELD_TIMESTAMP)
            || property_exists($decoded, self::FIELD_TIMESTAMP_EXT)) {
            $v = $decoded->_timestamp ?? new \stdClass();
            $v->value = $decoded->timestamp ?? null;
            $type->setTimestamp(FHIRInstant::jsonUnserialize($v, $config));
        }
        if (isset($decoded->focus) || property_exists($decoded, self::FIELD_FOCUS)) {
            if (is_array($decoded->focus)) {
                $type->setFocus(FHIRReference::jsonUnserialize(reset($decoded->focus), $config));
            } else {
                $type->setFocus(FHIRReference::jsonUnserialize($decoded->focus, $config));
            }
        }
        if (isset($decoded->additionalContext) || property_exists($decoded, self::FIELD_ADDITIONAL_CONTEXT)) {
            if (is_object($decoded->additionalContext)) {
                $vals = [$decoded->additionalContext];
                $type->_setJSONFieldElideSingletonArray(self::FIELD_ADDITIONAL_CONTEXT, true);
            } else {
                $vals = $decoded->additionalContext;
            }
            foreach($vals as $v) {
                $type->addAdditionalContext(FHIRReference::jsonUnserialize($v, $config));
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
        if (isset($this->eventNumber)) {
            if (null !== ($val = $this->eventNumber->getValue())) {
                $out->eventNumber = $val;
            }
            if ($this->eventNumber->_nonValueFieldDefined()) {
                $ext = $this->eventNumber->jsonSerialize();
                unset($ext->value);
                $out->_eventNumber = $ext;
            }
        }
        if (isset($this->timestamp)) {
            if (null !== ($val = $this->timestamp->getValue())) {
                $out->timestamp = $val;
            }
            if ($this->timestamp->_nonValueFieldDefined()) {
                $ext = $this->timestamp->jsonSerialize();
                unset($ext->value);
                $out->_timestamp = $ext;
            }
        }
        if (isset($this->focus)) {
            $out->focus = $this->focus;
        }
        if (isset($this->additionalContext) && [] !== $this->additionalContext) {
            if ($this->_getJSONFieldElideSingletonArray(self::FIELD_ADDITIONAL_CONTEXT) && 1 === count($this->additionalContext)) {
                $out->additionalContext = $this->additionalContext[0];
            } else {
                $out->additionalContext = $this->additionalContext;
            }
        }
        return $out;
    }
}