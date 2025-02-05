<?php declare(strict_types=1);

namespace DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 5th, 2025 00:09+0000
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
use DCarbone\PHPFHIRGenerated\Encoding\JSONSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\SerializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig;
use DCarbone\PHPFHIRGenerated\Encoding\ValueXMLLocationEnum;
use DCarbone\PHPFHIRGenerated\Encoding\XMLSerializationOptionsTrait;
use DCarbone\PHPFHIRGenerated\Encoding\XMLWriter;
use DCarbone\PHPFHIRGenerated\Types\ElementTypeInterface;
use DCarbone\PHPFHIRGenerated\Validation\TypeValidationsTrait;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRActionRelationshipTypeList;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRActionRelationshipType;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive;
use DCarbone\PHPFHIRGenerated\Versions\R4\VersionConstants;

/**
 * A group of related requests that can be used to capture intended activities that
 * have inter-dependencies such as "give this medication after that one".
 */
class FHIRRequestGroupRelatedAction extends FHIRBackboneElement
{
    use TypeValidationsTrait,
        JSONSerializationOptionsTrait,
        XMLSerializationOptionsTrait;

    // name of FHIR type this class describes
    public const FHIR_TYPE_NAME = VersionConstants::TYPE_NAME_REQUEST_GROUP_DOT_RELATED_ACTION;

    /* class_default.php:50 */
    public const FIELD_ACTION_ID = 'actionId';
    public const FIELD_ACTION_ID_EXT = '_actionId';
    public const FIELD_RELATIONSHIP = 'relationship';
    public const FIELD_RELATIONSHIP_EXT = '_relationship';
    public const FIELD_OFFSET_DURATION = 'offsetDuration';
    public const FIELD_OFFSET_RANGE = 'offsetRange';

    /* class_default.php:69 */
    // The default validation rules for this type as defined in the FHIR schema used to generate this code.
    private const _FHIR_VALIDATION_RULES = [
        self::FIELD_ACTION_ID => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
        self::FIELD_RELATIONSHIP => [
            Constants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /* class_default.php:98 */
    private array $_valueXMLLocations = [
        self::FIELD_ACTION_ID => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
        self::FIELD_RELATIONSHIP => ValueXMLLocationEnum::CONTAINER_ATTRIBUTE,
    ];

    /* class_default.php:114 */
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The element id of the action this is related to.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId 
     */
    protected FHIRId $actionId;
    /**
     * Defines the types of relationships between actions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relationship of this action to the related action.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRActionRelationshipType 
     */
    protected FHIRActionRelationshipType $relationship;
    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration 
     */
    protected FHIRDuration $offsetDuration;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @var \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange 
     */
    protected FHIRRange $offsetRange;

    /* constructor.php:61 */
    /**
     * FHIRRequestGroupRelatedAction Constructor
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $extension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRStringPrimitive $id
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRExtension[] $modifierExtension
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $actionId
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRActionRelationshipTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRActionRelationshipType $relationship
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $offsetDuration
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $offsetRange
     * @param null|string[] $fhirComments
     */
    public function __construct(null|iterable $extension = null,
                                null|string|FHIRStringPrimitive $id = null,
                                null|iterable $modifierExtension = null,
                                null|string|FHIRIdPrimitive|FHIRId $actionId = null,
                                null|string|FHIRActionRelationshipTypeList|FHIRActionRelationshipType $relationship = null,
                                null|FHIRDuration $offsetDuration = null,
                                null|FHIRRange $offsetRange = null,
                                null|iterable $fhirComments = null)
    {
        parent::__construct(extension: $extension,
                            id: $id,
                            modifierExtension: $modifierExtension,
                            fhirComments: $fhirComments);
        if (null !== $actionId) {
            $this->setActionId($actionId);
        }
        if (null !== $relationship) {
            $this->setRelationship($relationship);
        }
        if (null !== $offsetDuration) {
            $this->setOffsetDuration($offsetDuration);
        }
        if (null !== $offsetRange) {
            $this->setOffsetRange($offsetRange);
        }
    }

    /* class_default.php:146 */
    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /* class_default.php:172 */
    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The element id of the action this is related to.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId
     */
    public function getActionId(): null|FHIRId
    {
        return $this->actionId ?? null;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The element id of the action this is related to.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRIdPrimitive|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRId $actionId
     * @return static
     */
    public function setActionId(null|string|FHIRIdPrimitive|FHIRId $actionId): self
    {
        if (null === $actionId) {
            unset($this->actionId);
            return $this;
        }
        if (!($actionId instanceof FHIRId)) {
            $actionId = new FHIRId(value: $actionId);
        }
        $this->actionId = $actionId;
        return $this;
    }

    /**
     * Defines the types of relationships between actions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relationship of this action to the related action.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRActionRelationshipType
     */
    public function getRelationship(): null|FHIRActionRelationshipType
    {
        return $this->relationship ?? null;
    }

    /**
     * Defines the types of relationships between actions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The relationship of this action to the related action.
     *
     * @param null|string|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRCodePrimitive\FHIRActionRelationshipTypeList|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRActionRelationshipType $relationship
     * @return static
     */
    public function setRelationship(null|string|FHIRActionRelationshipTypeList|FHIRActionRelationshipType $relationship): self
    {
        if (null === $relationship) {
            unset($this->relationship);
            return $this;
        }
        if (!($relationship instanceof FHIRActionRelationshipType)) {
            $relationship = new FHIRActionRelationshipType(value: $relationship);
        }
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getOffsetDuration(): null|FHIRDuration
    {
        return $this->offsetDuration ?? null;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRQuantity\FHIRDuration $offsetDuration
     * @return static
     */
    public function setOffsetDuration(null|FHIRDuration $offsetDuration): self
    {
        if (null === $offsetDuration) {
            unset($this->offsetDuration);
            return $this;
        }
        $this->offsetDuration = $offsetDuration;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange
     */
    public function getOffsetRange(): null|FHIRRange
    {
        return $this->offsetRange ?? null;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A duration or range of durations to apply to the relationship. For example,
     * 30-60 minutes before.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRRange $offsetRange
     * @return static
     */
    public function setOffsetRange(null|FHIRRange $offsetRange): self
    {
        if (null === $offsetRange) {
            unset($this->offsetRange);
            return $this;
        }
        $this->offsetRange = $offsetRange;
        return $this;
    }

    /* class_default.php:199 */
    /**
     * @param \SimpleXMLElement $element
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction
     * @throws \Exception
     */
    public static function xmlUnserialize(\SimpleXMLElement $element,
                                          UnserializeConfig $config,
                                          null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRRequestGroupRelatedAction)) {
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
            } else if (self::FIELD_ACTION_ID === $cen) {
                $type->setActionId(FHIRId::xmlUnserialize($ce, $config));
            } else if (self::FIELD_RELATIONSHIP === $cen) {
                $type->setRelationship(FHIRActionRelationshipType::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OFFSET_DURATION === $cen) {
                $type->setOffsetDuration(FHIRDuration::xmlUnserialize($ce, $config));
            } else if (self::FIELD_OFFSET_RANGE === $cen) {
                $type->setOffsetRange(FHIRRange::xmlUnserialize($ce, $config));
            }
        }
        $attributes = $element->attributes();
        if (isset($attributes[self::FIELD_ID])) {
            $type->setId((string)$attributes[self::FIELD_ID]);
            $type->_setXMLFieldValueLocation(self::FIELD_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_ACTION_ID])) {
            if (isset($type->actionId)) {
                $type->actionId->setValue((string)$attributes[self::FIELD_ACTION_ID]);
            } else {
                $type->setActionId((string)$attributes[self::FIELD_ACTION_ID]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_ACTION_ID, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
        }
        if (isset($attributes[self::FIELD_RELATIONSHIP])) {
            if (isset($type->relationship)) {
                $type->relationship->setValue((string)$attributes[self::FIELD_RELATIONSHIP]);
            } else {
                $type->setRelationship((string)$attributes[self::FIELD_RELATIONSHIP]);
            }
            $type->_setXMLFieldValueLocation(self::FIELD_RELATIONSHIP, ValueXMLLocationEnum::PARENT_ATTRIBUTE);
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
        if (isset($this->actionId) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_ACTION_ID]) {
            $xw->writeAttribute(self::FIELD_ACTION_ID, $this->actionId->_getValueAsString());
        }
        if (isset($this->relationship) && ValueXMLLocationEnum::PARENT_ATTRIBUTE === $this->_valueXMLLocations[self::FIELD_RELATIONSHIP]) {
            $xw->writeAttribute(self::FIELD_RELATIONSHIP, $this->relationship->_getValueAsString());
        }
        parent::xmlSerialize($xw, $config);
        if (isset($this->actionId)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_ACTION_ID]
                || $this->actionId->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_ACTION_ID);
            $this->actionId->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_ACTION_ID]);
            $xw->endElement();
        }
        if (isset($this->relationship)
            && (ValueXMLLocationEnum::PARENT_ATTRIBUTE !== $this->_valueXMLLocations[self::FIELD_RELATIONSHIP]
                || $this->relationship->_nonValueFieldDefined())) {
            $xw->startElement(self::FIELD_RELATIONSHIP);
            $this->relationship->xmlSerialize($xw, $config, $this->_valueXMLLocations[self::FIELD_RELATIONSHIP]);
            $xw->endElement();
        }
        if (isset($this->offsetDuration)) {
            $xw->startElement(self::FIELD_OFFSET_DURATION);
            $this->offsetDuration->xmlSerialize($xw, $config);
            $xw->endElement();
        }
        if (isset($this->offsetRange)) {
            $xw->startElement(self::FIELD_OFFSET_RANGE);
            $this->offsetRange->xmlSerialize($xw, $config);
            $xw->endElement();
        }
    }

    /**
     * @param \stdClass $json
     * @param \DCarbone\PHPFHIRGenerated\Encoding\UnserializeConfig $config
     * @param null|\DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction $type
     * @return \DCarbone\PHPFHIRGenerated\Versions\R4\Types\FHIRElement\FHIRBackboneElement\FHIRRequestGroup\FHIRRequestGroupRelatedAction
     * @throws \Exception
     */
    public static function jsonUnserialize(\stdClass $json,
                                           UnserializeConfig $config,
                                           null|ElementTypeInterface $type = null): self
    {
        if (null === $type) {
            $type = new static();
        } else if (!($type instanceof FHIRRequestGroupRelatedAction)) {
            throw new \RuntimeException(sprintf(
                '%s::jsonUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        parent::jsonUnserialize($json, $config, $type); 
        if (isset($json->actionId)
            || isset($json->_actionId)
            || property_exists($json, self::FIELD_ACTION_ID)
            || property_exists($json, self::FIELD_ACTION_ID_EXT)) {
            $v = $json->_actionId ?? new \stdClass();
            $v->value = $json->actionId ?? null;
            $type->setActionId(FHIRId::jsonUnserialize($v, $config));
        }
        if (isset($json->relationship)
            || isset($json->_relationship)
            || property_exists($json, self::FIELD_RELATIONSHIP)
            || property_exists($json, self::FIELD_RELATIONSHIP_EXT)) {
            $v = $json->_relationship ?? new \stdClass();
            $v->value = $json->relationship ?? null;
            $type->setRelationship(FHIRActionRelationshipType::jsonUnserialize($v, $config));
        }
        if (isset($json->offsetDuration) || property_exists($json, self::FIELD_OFFSET_DURATION)) {
            if (is_array($json->offsetDuration)) {
                $type->setOffsetDuration(FHIRDuration::jsonUnserialize(reset($json->offsetDuration), $config));
            } else {
                $type->setOffsetDuration(FHIRDuration::jsonUnserialize($json->offsetDuration, $config));
            }
        }
        if (isset($json->offsetRange) || property_exists($json, self::FIELD_OFFSET_RANGE)) {
            if (is_array($json->offsetRange)) {
                $type->setOffsetRange(FHIRRange::jsonUnserialize(reset($json->offsetRange), $config));
            } else {
                $type->setOffsetRange(FHIRRange::jsonUnserialize($json->offsetRange, $config));
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
        if (isset($this->actionId)) {
            if (null !== ($val = $this->actionId->getValue())) {
                $out->actionId = $val;
            }
            if ($this->actionId->_nonValueFieldDefined()) {
                $ext = $this->actionId->jsonSerialize();
                unset($ext->value);
                $out->_actionId = $ext;
            }
        }
        if (isset($this->relationship)) {
            if (null !== ($val = $this->relationship->getValue())) {
                $out->relationship = $val;
            }
            if ($this->relationship->_nonValueFieldDefined()) {
                $ext = $this->relationship->jsonSerialize();
                unset($ext->value);
                $out->_relationship = $ext;
            }
        }
        if (isset($this->offsetDuration)) {
            $out->offsetDuration = $this->offsetDuration;
        }
        if (isset($this->offsetRange)) {
            $out->offsetRange = $this->offsetRange;
        }
        return $out;
    }
}